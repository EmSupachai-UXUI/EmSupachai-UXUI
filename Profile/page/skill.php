
<link href="css/skill.css" rel="stylesheet">

<div class="col-lg-9" style="padding-top: 180px;">
    <div class="custom-border">

    <div style="position: relative;">
        <div class="chart skills"></div>
        <div class="container">
            <div class="text-center" style="font-size: 16px;">
                <hr>
                <span class="text-white" id="text"></span>
            </div><br>

        </div>

    </div>
    </div>
</div>


<script>
        
        <?php
        $user = query("SELECT * FROM user WHERE username=?", [$_SESSION['username']])->fetch();
        $skill_1 = 0;
        if($user['skill_1'] > 100){
            $skill_1 = 100;
        }else{
            $skill_1 = number_format($user['skill_1'], 2, ".", "");
        }
        $skill_2 = 0;
        if($user['skill_2'] > 100){
            $skill_2 = 100;
        }else{
            $skill_2 = number_format($user['skill_2'], 2, ".", "");
        }
        $skill_3 = 0;
        if($user['skill_3'] > 100){
            $skill_3 = 100;
        }else{
            $skill_3 = number_format($user['skill_3'], 2, ".", "");
        }
        $skill_4 = 0;
        if($user['skill_4'] > 100){
            $skill_4 = 100;
        }else{
            $skill_4 = number_format($user['skill_4'], 2, ".", "");
        }
        $skill_5 = 0;
        if($user['skill_5'] > 100){
            $skill_5 = 100;
        }else{
            $skill_5 = number_format($user['skill_5'], 2, ".", "");
        }
        $skill_6 = 0;
        if($user['skill_6'] > 100){
            $skill_6 = 100;
        }else{
            $skill_6 = number_format($user['skill_6'], 2, ".", "");
        }
        $skill_7 = 0;
        if($user['skill_7'] > 100){
            $skill_7 = 100;
        }else{
            $skill_7 = number_format($user['skill_7'], 2, ".", "");
        }
        $skill_8 = 0;
        if($user['skill_7'] > 100){
            $skill_8 = 100;
        }else{
            $skill_8 = number_format($user['skill_8'], 2, ".", "");
        }
        ?>
        kindChart($('.chart.skills'), {
            web: '#EEEEEE',
            labels: ["<?php echo query("SELECT * FROM skill_chart WHERE id=?", [1])->fetch()["name"]; ?>", "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [2])->fetch()["name"]; ?>", "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [3])->fetch()["name"]; ?>", "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [4])->fetch()["name"]; ?>", "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [5])->fetch()["name"]; ?>", "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [6])->fetch()["name"]; ?>", "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [7])->fetch()["name"]; ?>", "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [8])->fetch()["name"]; ?>"],
            datasets: [ // 0 being farthest back, 1 being closest
                /*{
                    label: 'Level of Interest',
                    fillColor: "rgba(255,255,255,1)",
                    strokeColor: "rgba(255,255,255,1)",
                    data: [100, 70, 85, 90, 95, 75, 90, 100]
                },*/
                {
                    label: 'Skill Chart',
                    fillColor: "rgba(255,255,255,.55)",
                    strokeColor: "rgba(255,255,255,.55)",
                    data: [<?php echo $skill_1; ?>, <?php echo $skill_2; ?>, <?php echo $skill_3; ?>, <?php echo $skill_4; ?>, <?php echo $skill_5; ?>, <?php echo $skill_6; ?>, <?php echo $skill_7; ?>, <?php echo $skill_8; ?>]
                }
            ]
        });










        var go = true;
        if (window.location.hash == '#demo') {
            setTimeout(function() {
                go = false;
            }, 9500);
        }


        // Heavy lifting

        function kindChart(element, options) {
            var svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            svg.setAttribute('height', '100%');
            svg.setAttribute('width', '100%');
            svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
            svg.setAttribute('preserveAspectRatio', 'none');
            svg.setAttribute('viewBox', '-25 -10 150 127');
            var select_circle = [];

            var colors = ['97,193,145', '43,176,212', '43,82,202', '193,52,52', '177,193,52', '137,45,193', '202,128,33', '197,27,128'];

            element.append('<ul class="values"></ul>');
            element.append('<div class="out"><ul></ul></div>');

            function getColor(passed) {
                if (passed == undefined) {
                    return 'rgba(' + colors[Math.floor((Math.random() * colors.length) + 0)] + ',1)';
                } else {
                    return passed;
                }
            }

            function findNewPoint(angle, distance) {
                distance = distance / 2;
                angle = angle + 270;
                result = {};

                result.y = Math.round(Math.sin(angle * Math.PI / 180) * distance + 50);
                result.x = Math.round(Math.cos(angle * Math.PI / 180) * distance + 50);
                return result;
            }


            for (var i = 0; i < options.datasets.length; i++) {
                var paths = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                var webLine = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                var webstream = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                var path = '';
                var web = '';
                var websteam_lines = [];
                var webstream_ends = [];
                var texts = [];



                //element.find('ul.values').append('<li style="color: ' + getColor(options.datasets[i].strokeColor) + ';">' + options.datasets[i].label + '</li>');

                for (var x = 0; x < options.datasets[i].data.length; x++) {


                    if (x == 0) {
                        var type = 'M';
                        var addition = '';
                    } else if (x == options.datasets[i].data.length - 1) {
                        var addition = 'Z';
                        var type = 'L';
                    } else {
                        var type = 'L';
                        var addition = '';
                    }

                    var point = findNewPoint(((360 / options.datasets[i].data.length) * x), options.datasets[i].data[x]);

                    var web_points = findNewPoint(((360 / options.datasets[i].data.length) * x), 100);

                    web += ' M50 50 L' + web_points.x + ' ' + web_points.y;

                    path += type + point.x + ' ' + point.y + ' ' + addition;

                    for (var l = 0; l < 5; l++) {
                        var stream_point = findNewPoint(((360 / options.datasets[i].data.length) * x), ((l + 1) * 20));
                        if (x == 0) {
                            websteam_lines[l] = ' M' + stream_point.x + ' ' + stream_point.y;
                            webstream_ends[l] = ' L' + stream_point.x + ' ' + stream_point.y;
                        } else if (x == options.datasets[i].data.length - 1) {
                            //console.log(x);
                            websteam_lines[l] += ' L' + stream_point.x + ' ' + stream_point.y + webstream_ends[l];
                        } else {
                            websteam_lines[l] += ' L' + stream_point.x + ' ' + stream_point.y;
                        }

                    }

                    //console.log(websteam_lines[0]);
                }

                webLine.setAttribute('d', web);
                webLine.setAttribute('stroke', options.web);
                webLine.setAttribute('stroke-width', '0.1');

                paths.setAttribute('d', path);
                paths.setAttribute('class', 'jumpIn');
                paths.setAttribute('fill', options.datasets[i].fillColor);
                paths.setAttribute('stroke', options.datasets[i].strokeColor);
                paths.setAttribute('stroke-width', '0.25');


                var full_stream_lines = '';
                for (var l = 0; l < websteam_lines.length; l++) {
                    full_stream_lines += websteam_lines[l];
                }
                //console.log(full_stream_lines);

                webstream.setAttribute('d', full_stream_lines);
                webstream.setAttribute('stroke', options.web);
                webstream.setAttribute('stroke-width', '0.2');
                webstream.setAttribute('fill', 'none');

                svg.appendChild(webLine);
                svg.appendChild(webstream);
                svg.appendChild(paths);

                select_circle[i] = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
                svg.appendChild(select_circle[i]);
            }

            for (var x = 0; x < options.datasets[0].data.length; x++) {
                var texts = document.createElementNS('http://www.w3.org/2000/svg', 'text');
                var text = findNewPoint(((360 / options.datasets[0].data.length) * x), 113 + (((360 / options.datasets[0].data.length) * x)) / 90);
                texts.setAttribute('x', text.x);
                texts.setAttribute('y', text.y);
                texts.setAttribute('text-anchor', 'middle');
                texts.textContent = options.labels[x];
                texts.setAttribute('font-size', '4');
                texts.setAttribute('fill', options.web);
                svg.appendChild(texts);
            }

            element.append(svg);

            element.mousemove(function(e) {
                if (go == true) {
                    var objLeft = $(this).offset().left;
                    var objTop = $(this).offset().top;

                    var objCenterX = objLeft + $(this).width() / 2;
                    var objCenterY = objTop + $(this).height() / 2;

                    var angle = Math.atan2(e.pageX - objCenterX, -(e.pageY - objCenterY)) * (180 / Math.PI);

                    var angles = 360 / options.labels.length;
                    n = angles * (Math.round(angle / angles));
                    var out = n / (360 / options.labels.length);
                    if (out == options.labels.length) {
                        out = 0;
                    }
                    if (out < 0) {
                        out = options.labels.length + out;
                    }

                    $(this).find('.out').css({
                        left: (e.pageX - objLeft) + 40,
                        top: (e.pageY - objTop) - 14
                    });

                    var outtext = '';
                    for (var i = 0; i < options.datasets.length; i++) {
                        outtext += '<li style="color: ' + options.datasets[i].strokeColor + ';">' + options.datasets[i].label + ': ' + options.datasets[i].data[out] + '%</li><hr>';

                        var pointl = findNewPoint(((360 / options.datasets[i].data.length) * out), options.datasets[i].data[out] + 1.75);

                        select_circle[i].setAttribute('r', '1.25');
                        select_circle[i].setAttribute('cx', pointl.x);
                        select_circle[i].setAttribute('cy', pointl.y);
                        select_circle[i].setAttribute('fill', options.datasets[i].strokeColor);

                    }

                    $('#text').html(options.labels[out] + outtext);
                }
            });
            element.mouseout(function(e) {
                $(this).find('.out').css({
                    left: 0,
                    top: 0
                });
                $(this).find('.out ul').html('');
            });
        }
    </script>