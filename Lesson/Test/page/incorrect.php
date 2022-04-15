<style>
    .hide{
        display: none;
    }
</style>
<script>
    function play(){
        var audio = new Audio('sound/sound2.mp3');
        audio.play();

    }
    $(document).ready(function(){
            $("#content").removeClass("hide");
            play();
    });
</script>
<div id="content" class="container hide" style="padding-left: 90px; padding-top: 80px;">
    <h2 class="orange"><b>คำถามมมม !!</b></h2>
    <div class="testing-card text-white">
        <div class="mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-end mt-3" style="padding-right: 30px;">
                    <i style="font-size: 180px;" class="fa-solid fa-face-dizzy orange"></i>
                </div>
                <div class="col-lg-6" style="padding-left: 30px;">
                    <div class="mt-3">
                        <span class="error-text">404</span>
                    </div>
                    <div>
                        <span style="font-size: 25px; margin-top: 1;">Page not found</span>
                    </div>
                    <div class="mt-4">
                        <a href="?testing=<?php echo $_GET['lesson']; ?>" class="btn btn-custom btn-glow"
                            style="width: 180px;">ย้อนกลับ</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5"></div>
    </div>
</div>