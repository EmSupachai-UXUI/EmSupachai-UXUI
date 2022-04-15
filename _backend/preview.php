<?php

require_once("backend.php");
if(isset($_GET['id']) 
and query("SELECT * FROM test WHERE id=?", [$_GET['id']])->rowCount() > 0){
$test = query("SELECT * FROM test WHERE id=?", [$_GET['id']])->fetch();
$lesson = query("SELECT * FROM lesson WHERE id=?", [$_GET['page']])->fetch();

}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Web title -->
    <title>Preview</title>

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- FONT -->

    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

    <!-- Custom CSS -->
    <link href="../assets/custom/style.css" rel="stylesheet">
    <link href="../assets/custom/home.css" rel="stylesheet">
    <link href="../assets/custom/parallax.css" rel="stylesheet">
    <link href="../assets/custom/animation.css" rel="stylesheet">
    <link href="../assets/custom/carousel.css" rel="stylesheet">
    <link href="../assets/custom/border.css" media="screen" rel="stylesheet">
    <link href="../assets/custom/test.css" media="screen" rel="stylesheet">

    <!--load all Font Awesome styles -->
    <link href="../assets/fontawesome/css/all.css" rel="stylesheet">

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container mt-3">
        <nav class="navbar navbar-expand-lg">

            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars text-white" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse fade-in" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white text-center">
                    <a class="nav-link textw" aria-current="page" href="">Home</a>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw active" href="">Lesson</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="">Lab</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="">Ranking</a>

                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link textw">Profile</a>
                    </li>

                </ul>
            </div>
        </nav>

    </div>

    <div class="container" style="padding-left: 90px; padding-top: 80px;">
        <h2 class="orange"><b>Preview</b></h2>
        <div class="testing-card text-white">
            <div class="testing-text">
                <div class="mt-3">
                    <span class="testing-title"><?php echo $test['html']; ?></span>
                </div>
                <div class="mt-3">
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="radio" name="anwser" id="check1" value="1">
                            <label class="form-check-label" for="check1">
                                <span style="padding-left: 18px;"><?php echo $test['choice_1']; ?></span>
                            </label>
                        </div>
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="radio" name="anwser" id="check2" value="2">
                            <label class="form-check-label" for="check2">
                                <span style="padding-left: 18px;"><?php echo $test['choice_2']; ?></span>
                            </label>
                        </div>
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="radio" name="anwser" id="check3" value="3">
                            <label class="form-check-label" for="check3">
                                <span style="padding-left: 18px;"><?php echo $test['choice_3']; ?></span>
                            </label>
                        </div>
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="radio" name="anwser" id="check4" value="4">
                            <label class="form-check-label" for="check4">
                                <span style="padding-left: 18px;"><?php echo $test['choice_4']; ?></span>
                            </label>
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-glow btn-custom">ยืนยันคำตอบ</button>

                        </div>
                </div>
            </div>
            <div class="mt-5"></div>
        </div>
    </div>

    <div class="container mt-5">
    <div class="mt-3 text-light">
        <div class="row justify-content-lg-center">
            <div class="col-lg-11">
                <a href="test.php?id=<?php echo $lesson['id']; ?>">Back</a>
                <div class="mt-4">
                </div>
            </div>
            <div class="col-lg-11">
                <center>
                    <div class="col-lg-8">
                        <form action="action/action.php" method="post">
                            <h3>แก้ไข</h3>
                            <input type="hidden" name="action" value="editquestion">
                            <input type="hidden" name="id" value="<?php echo $test['id']; ?>">
                            <input type="hidden" name="lesson_id" value="<?php echo $test['lesson_id']; ?>">
                            <div class="mt-3">
                                <input name="point" autocomplete="off" type="number"
                                    class="form-control bg-dark text-light" value="<?php echo $test['point']; ?>" placeholder="คะแนนที่จะได้รับ" required>
                            </div>
                            <div class="mt-3">
                                <textarea name="html" autocomplete="off" class="form-control bg-dark text-light"
                                    placeholder="โจทย์หรือรายละเอียดในแบบทดสอบ สามารถเขียนเป็น HTML ได้"
                                    rows="10"><?php echo $test['html']; ?></textarea>
                            </div>

                            <div class="mt-3">
                                <input name="choice_1" autocomplete="off" value="<?php echo $test['choice_1']; ?>" class="form-control bg-dark text-light"
                                    placeholder="choice 1" required>
                            </div>
                            <div class="mt-3">
                                <input name="choice_2" autocomplete="off" value="<?php echo $test['choice_2']; ?>" class="form-control bg-dark text-light"
                                    placeholder="choice 2" required>
                            </div>
                            <div class="mt-3">
                                <input name="choice_3" autocomplete="off" value="<?php echo $test['choice_3']; ?>" class="form-control bg-dark text-light"
                                    placeholder="choice 3" required>
                            </div>
                            <div class="mt-3">
                                <input name="choice_4" autocomplete="off" value="<?php echo $test['choice_4']; ?>" class="form-control bg-dark text-light"
                                    placeholder="choice 4" required>
                            </div>
                            <div class="mt-3">
                                <input name="answer" value="<?php echo $test['answer']; ?>" type="number" autocomplete="off"
                                    class="form-control bg-dark text-light" placeholder="คำตอบ 1 - 4" required>
                            </div>
                            <div class="mt-3">
                                <input <?php if($test['hide'] == "true"){echo "checked";} ?> value="hide" name="hide" class="" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Hide
                                </label>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-success">SAVE!!</button>
                            </div>
                        </form>
                        <hr>
                        <a onclick="confirmDelete()" class="btn btn-danger">ลบโจทย์นี้</a>
                        <script>
                        function confirmDelete() {
                            Swal.fire({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href =
                                        "action/action.php?action=deletetest&id=<?php echo $test['id']; ?>&page=<?php echo $lesson['id']; ?>";
                                }
                            })
                        }
                        </script>
                    </div>

                    <div class="mt-3"></div>
                </center>
            </div>
        </div>
    </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../assets/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>