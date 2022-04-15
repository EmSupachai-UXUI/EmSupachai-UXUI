<!DOCTYPE html>

<html lang="english">

<head>
    <title>Hakka Lab</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <style>
    html {
        line-height: 1.15;
    }

    body {
        margin: 0;
    }

    * {
        box-sizing: border-box;
        border-width: 0;
        border-style: solid;
    }

    p,
    li,
    ul,
    pre,
    div,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
        padding: 0;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        font-family: inherit;
        font-size: 100%;
        line-height: 1.15;
        margin: 0;
    }

    button,
    select {
        text-transform: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
        -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
        border-style: none;
        padding: 0;
    }

    button:-moz-focus,
    [type="button"]:-moz-focus,
    [type="reset"]:-moz-focus,
    [type="submit"]:-moz-focus {
        outline: 1px dotted ButtonText;
    }

    a {
        color: inherit;
        text-decoration: inherit;
    }

    input {
        padding: 2px 4px;
    }

    img {
        display: block;
    }
    </style>
    <style>
    html {
        font-family: Inter;
        font-size: 16px;
    }

    body {
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

    }
    </style>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <?php
    
    require_once dirname(__FILE__)."/../../_system/system.php";
    if(query("SELECT * FROM test_history WHERE username = ?", [$_SESSION['username']])->rowCount() < 90){
        header("Location: ../");
        return true;
    }
    ?>
    <div>
        <link href="./frame760172.css" rel="stylesheet" />

        <div class="frame760172-container">
            <div class="frame760172-frame760172">
                <img src="public/playground_assets/background760178-amt-2000w.png" alt="Background760178"
                    class="frame760172-image" />
                <img src="public/playground_assets/background2760217-m3nn-1000h.png" alt="Background2760217"
                    class="frame760172-image01" />
                <img src="public/playground_assets/rectangle458862378-1qwg.svg" alt="Rectangle458862378"
                    class="frame760172-image02" />
                <div class="frame760172-group6760223">
                    <span class="frame760172-text">HAKKA V.LAB</span>
                    <span class="frame760172-text001">HIDE YOURSELF WITH</span>
                    <span class="frame760172-text002">AND PROTECT TOUR DATA.</span>
                </div>
                <span class="frame760172-text003">SHEET</span>
                <span class="frame760172-text004">ALL INFORMATION IN</span>
                <span class="frame760172-text005">IT’S ALL YOURS.</span>
                <div class="line1"></div>
                <div class="line2"></div>
                <span class="frame760172-text006">Welcome to lab</span>
                <img src="public/playground_assets/rectangle4738174-zyue.svg" alt="Rectangle4738174"
                    class="frame760172-image03" />
                <div alt="silicon738180" class="frame760172-image04"></div>
                <span class="frame760172-text007">LEVEL 0</span>
                <img alt="Ellipse7738182" src="public/playground_assets/ellipse7738182-glme.svg"
                    class="frame760172-svg02" />
                <img alt="Ellipse8738183" src="public/playground_assets/ellipse8738183-p1e9.svg"
                    class="frame760172-svg03" />
                <span class="frame760172-text008">1</span>
                <span class="frame760172-text009">LEVEL 1</span>
                <img alt="Ellipse9738186" src="public/playground_assets/ellipse9738186-5qk.svg"
                    class="frame760172-svg04" />
                <span class="frame760172-text010">2</span>
                <span class="frame760172-text011">LEVEL 2</span>
                <img alt="Ellipse10738189" src="public/playground_assets/ellipse10738189-hhkc.svg"
                    class="frame760172-svg05" />
                <span class="frame760172-text012">3</span>
                <span class="frame760172-text013">LEVEL 3</span>
                <span class="frame760172-text014">Web Security</span>
                <img alt="Ellipse11738193" src="public/playground_assets/ellipse11738193-1byh.svg"
                    class="frame760172-svg06" />
                <span class="frame760172-text015">4</span>


                <!-- Web security Lab link -->
                <a href="../Security/" onmouseover="onHover('frame760172-image04')"
                    onmouseout="outHover('frame760172-image04')">

                    <img src="public/playground_assets/malwareprotection1738195-64-300h.png"
                        alt="malwareprotection1738195" class="frame760172-image05" />
                </a>







                <img src="public/playground_assets/rectangle3738198-3g8g.svg" alt="Rectangle3738198"
                    class="frame760172-image06" />
                <div alt="silicon738215" class="frame760172-image07"></div>
                <span class="frame760172-text016">LEVEL 0</span>
                <img alt="Ellipse1738217" src="public/playground_assets/ellipse1738217-2r0m.svg"
                    class="frame760172-svg07" />
                <img alt="Ellipse3738218" src="public/playground_assets/ellipse3738218-g91.svg"
                    class="frame760172-svg08" />
                <span class="frame760172-text017">1</span>
                <span class="frame760172-text018">LEVEL 1</span>
                <img alt="Ellipse4738221" src="public/playground_assets/ellipse4738221-z0at.svg"
                    class="frame760172-svg09" />
                <span class="frame760172-text019">2</span>
                <span class="frame760172-text020">LEVEL 2</span>
                <img alt="Ellipse5738224" src="public/playground_assets/ellipse5738224-oshb.svg"
                    class="frame760172-svg10" />
                <span class="frame760172-text021">3</span>
                <span class="frame760172-text022">LEVEL 3</span>
                <span class="frame760172-text023">Cross - Site Scripting</span>
                <img alt="Ellipse6738228" src="public/playground_assets/ellipse6738228-m42i.svg"
                    class="frame760172-svg11" />
                <span class="frame760172-text024">4</span>




                <!-- Cross - Site Scripting Link -->

                <a href="../Cross_Site_Scripting/" onmouseover="onHover('frame760172-image07')"
                    onmouseout="outHover('frame760172-image07')">
                    <img src="public/playground_assets/securelockopen2738230-sgl7-300h.png" alt="securelockopen2738230"
                        class="frame760172-image08" />

                </a>





                <img src="public/playground_assets/rectangle2738197-rdt.svg" alt="Rectangle2738197"
                    class="frame760172-image09" />
                <div alt="silicon738199" class="frame760172-image10"></div>
                <img alt="Ellipse2738200" src="public/playground_assets/ellipse2738200-nn6.svg"
                    class="frame760172-svg12" />
                <span class="frame760172-text025">SQL Injection</span>
                <span class="frame760172-text026">LEVEL 0</span>
                <img alt="Ellipse12738203" src="public/playground_assets/ellipse12738203-sb96.svg"
                    class="frame760172-svg13" />
                <span class="frame760172-text027">1</span>
                <span class="frame760172-text028">LEVEL 1</span>
                <img alt="Ellipse13738206" src="public/playground_assets/ellipse13738206-21p.svg"
                    class="frame760172-svg14" />
                <span class="frame760172-text029">2</span>
                <span class="frame760172-text030">LEVEL 2</span>
                <img alt="Ellipse14738209" src="public/playground_assets/ellipse14738209-z763.svg"
                    class="frame760172-svg15" />
                <span class="frame760172-text031">3</span>
                <span class="frame760172-text032">LEVEL 3</span>
                <img alt="Ellipse15738212" src="public/playground_assets/ellipse15738212-fr2s.svg"
                    class="frame760172-svg16" />
                <span class="frame760172-text033">4</span>




                <!-- SQL INJECTION LINK -->
                <a href="../SQLInjection/" onmouseover="onHover('frame760172-image10')"
                    onmouseout="outHover('frame760172-image10')">

                    <img src="public/playground_assets/malware1738214-swb-300h.png" alt="malware1738214"
                        class="frame760172-image11" />
                </a>












                <img src="public/playground_assets/rectangle4760229-g8jo.svg" alt="Rectangle4760229"
                    class="frame760172-image12" />
                <img src="public/playground_assets/silicon760230-xpek.svg" alt="silicon760230"
                    class="frame760172-image13" />
                <span class="frame760172-text034">
                    <span class="frame760172-text035">รวมคำศัพท์น่ารู้สำหรับด้าน</span>
                    <span class="frame760172-text036">CyberSecurity</span>
                </span>



                <!-- CyberSecurity PDF File Download -->
                <a href="Download/1.pdf" download class="frame760172-text037">ดาวน์โหลด</a>
                <span class="frame760172-text038">
                    <span class="frame760172-text039">Download File</span>
                    <span class="frame760172-text040">PDF.</span>
                </span>
                <span class="frame760172-text041">
                    เอกสารสำหรับการเรียนรู้เพิ่มเติมในด้าน Security
                </span>
                <img src="public/playground_assets/icbaselinedownloadforoffline760235-cewg.svg"
                    alt="icbaselinedownloadforoffline760235" class="frame760172-image14" />
                <img src="public/playground_assets/rectangle5760237-3p5s.svg" alt="Rectangle5760237"
                    class="frame760172-image15" />
                <img src="public/playground_assets/silicon760238-o9y.svg" alt="silicon760238"
                    class="frame760172-image16" />










                <!-- XSS PDF File Download -->
                <a href="Download/2.pdf" download class="frame760172-text042">ดาวน์โหลด</a>
                <span class="frame760172-text043">
                    <span class="frame760172-text044">Download File</span>
                    <span class="frame760172-text045">PDF.</span>
                </span>
                <span class="frame760172-text046">
                    เอกสารสำหรับการเรียนรู้เพิ่มเติมในด้านช่องโหว่
                </span>
                <img src="public/playground_assets/icbaselinedownloadforoffline760242-mmnf.svg"
                    alt="icbaselinedownloadforoffline760242" class="frame760172-image17" />
                <span class="frame760172-text047">
                    <span class="frame760172-text048">เอกสารอธิบายเกี่ยวกับแลป</span>
                    <span class="frame760172-text049">XSS</span>
                </span>
                <img src="public/playground_assets/rectangle6760246-2yle.svg" alt="Rectangle6760246"
                    class="frame760172-image18" />
                <img src="public/playground_assets/silicon760247-fyau.svg" alt="silicon760247"
                    class="frame760172-image19" />









                <!-- SQLi PDF File Download -->
                <a href="Download/3.pdf" download class="frame760172-text050">ดาวน์โหลด</a>
                <span class="frame760172-text051">
                    <span class="frame760172-text052">Download File</span>
                    <span class="frame760172-text053">PDF.</span>
                </span>
                <span class="frame760172-text054">
                    เอกสารสำหรับการเรียนรู้เพิ่มเติมในด้านช่องโหว่
                </span>
                <img src="public/playground_assets/icbaselinedownloadforoffline760251-w8ck.svg"
                    alt="icbaselinedownloadforoffline760251" class="frame760172-image20" />
                <span class="frame760172-text055">
                    <span class="frame760172-text056">เอกสารอธิบายเกี่ยวกับแลป</span>
                    <span class="frame760172-text057">SQLi</span>
                </span>
                <span class="frame760172-text058">
                    ผู้รับผิดชอบในการออกแบบแลปทดลอง
                </span>
                <span class="frame760172-text059">
                    ผู้รับผิดชอบในการทำเนื้อหาแลปทดลอง
                </span>
                <div alt="Rectangle5738241" class="frame760172-image21"></div>
                <div class="frame760172-image22"></div>
                <div class="frame760172-image23"></div>
                <span class="frame760172-text060">Aem Supachai</span>
                <span class="frame760172-text061">
                    <span class="frame760172-text062">เนื้อหา</span>
                    <span class="frame760172-text063">Web Security</span>
                </span>
                <span class="frame760172-text064">Section 1</span>
                <span class="frame760172-text065">
                    <span class="frame760172-text066">แบบทดสอบ</span>
                    <span class="frame760172-text067">Web Security</span>
                </span>
                <span class="frame760172-text068">Section 2</span>
                <span class="frame760172-text069">
                    <span class="frame760172-text070">แลปทดลอง</span>
                    <span class="frame760172-text071">Web Security</span>
                </span>
                <span class="frame760172-text072">Section 3</span>
                <img alt="Ellipse16738257" src="public/playground_assets/ellipse16738257-zou.svg"
                    class="frame760172-svg17" />
                <span class="frame760172-text073">
                    <span class="frame760172-text074">เป็นนักศึกษา</span>
                    <span class="frame760172-text075">Bangkok University</span>
                    <span class="frame760172-text076">
                        <span></span>
                        <br />
                        <span>ศึกษาอยู่ คณะวิศวกรรมศาสตร์ สาขาไฟฟ้ากำลัง</span>
                    </span>
                </span>
                <div class="frame760172-image24"></div>
                <div class="frame760172-image25"></div>
                <div class="frame760172-image26"></div>
                <div class="frame760172-image27"></div>
                <div class="frame760172-image28"></div>
                <span class="frame760172-text080">Kao Possawat</span>
                <span class="frame760172-text081">
                    <span class="frame760172-text082">เนื้อหา</span>
                    <span class="frame760172-text083">SQL Injection</span>
                </span>
                <span class="frame760172-text084">Section 1</span>
                <span class="frame760172-text085">
                    <span class="frame760172-text086">แบบทดสอบ</span>
                    <span class="frame760172-text087">SQL Injection</span>
                </span>
                <span class="frame760172-text088">Section 2</span>
                <span class="frame760172-text089">
                    <span class="frame760172-text090">แลปทดลอง</span>
                    <span class="frame760172-text091">SQL Injection</span>
                </span>
                <span class="frame760172-text092">Section 3</span>
                <img alt="Ellipse17738273" src="public/playground_assets/ellipse17738273-thu.svg"
                    class="frame760172-svg18" />
                <span class="frame760172-text093">
                    <span class="frame760172-text094">เป็นนักศึกษา</span>
                    <span class="frame760172-text095">Bangkok University</span>
                    <span class="frame760172-text096">
                        <span></span>
                        <br />
                        <span>ศึกษาอยู่ คณะวิศวกรรมศาสตร์ สาขาไฟฟ้ากำลัง</span>
                    </span>
                </span>
                <div class="frame760172-image29"></div>

                <span class="frame760172-text100">Research</span>
                <img src="public/playground_assets/saly11738278-wacv-600h.png" alt="Saly11738278"
                    class="frame760172-image30" />
                <img src="public/playground_assets/rectangle817404-429d-400h.png" alt="Rectangle817404"
                    class="frame760172-image31" />
                <img src="public/playground_assets/rectangle457862377-wc4l.svg" alt="Rectangle457862377"
                    class="frame760172-image32" />
                <span class="frame760172-text101">UX / UI Designer</span>
            </div>
        </div>
    </div>

    <script>
    function onHover(b) {
        var elems = document.getElementsByClassName(b);
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.boxShadow = '0px 0px 24px 0px #A6CF98';
        }
    }

    function outHover(b) {
        var elems = document.getElementsByClassName(b);
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.boxShadow = '0px 0px 24px 0px rgb(255 255 255 / 40%)';
        }
    }
    </script>
</body>

</html>