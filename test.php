<?php
    include './db_connnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/js" href="./js/index.js">
    <link rel="stylesheet" type="text/css" href="./css/chung.css">
            <?php
                if(isset($_GET['go'])){
                    include "./url_css.php";
                }else{
                    echo"<link rel='stylesheet' type='text/css' href='./css/index.css'>";
                }
            ?>        
    <link rel="stylesheet" type="text/css" href="./css/responsive/responsive.css">
    <title>QIT</title>
</head>

<body>
    <header>
        <div class="nav-mobile">
            <input type="checkbox" name="nav-mobile__check" id="nav-mobile__check" style="display: none;">
            <label for="nav-mobile__check" class="color-white cursor-pointer"><i class="fas fa-bars"></i></label>
            <div class="nav-mobile__background">
                <div class="nav-mobile__box">
                    <ul>
                        <label for="nav-mobile__check" class="cursor-pointer"><i class="fas fa-times"></i></label>
                    </ul>
                    <hr>
                    <ul>
                        <li><a href="?go=home" class="color-white">Home</a></li>
                        <li><a href="?go=courses" class="color-white">Courses</a></li>
                        <li><a href="?go=blog" class="color-white">Blog</a></li>
                    </ul>
                    <hr>
                    <ul>
                        <li><a href="?go=add_blog" class="color-white"><i class="fas fa-pen pd-right-16"></i>Blog Manage</a></li>
                        <li><a href="?go=insert_course" class="color-white"><i class="fas fa-pen pd-right-16"></i>Course Manage</a></li>
                        <li><a href="?go=insert_lesson" class="color-white"><i class="fas fa-pen pd-right-16"></i>Lesson Manage</a></li>
                        <li><a href="#testimonials" class="color-white"><i class="fas fa-comment-dots pd-right-16"></i>Add comment</a></li>
                    </ul>
                    <hr>
                    <ul>
                        <li><a href="#about" class="color-white">About</a></li>
                        <li><a href="#testimonials" class="color-white">Testimonials</a></li>
                        <li><a href="#contact" class="color-white">Contact</a></li>
                    </ul>
                </div>
                <label for="nav-mobile__check"></label>
            </div>
        </div>
        <div class="slogan">
            <div class="slogan__logo mg-left-32">
                <img src="./img/logoIT.png" alt="logo">
            </div>
            <h1 class="slogan__text mg-left-32">Vươn tới tương lai</h1>
        </div>
        <div class="search">
            <label for="search" class="search__icon cursor-pointer"><i class="fas fa-search"></i></label>
            <input type="text" class="search__input" name="search" id="search" placeholder="Search courses, blog, ...">
        </div>
        <div class="avatar">
            <input type="checkbox" id="avatar__checkbox" style="display:none">
            <label for="avatar__checkbox" class=" cursor-pointer float-right">
                <a class="btn btn--login mg-right-32 "><i class="fas fa-user-cog"></i></a>
            </label>
            <ul class="avatar__nav">
                <li><a class="color-black"><i class="fas fa-database pd-right-16"></i>Data</a>
                    <ul>
                        <li><a href="?go=insert_course" class="color-black"><i class="fas fa-book pd-right-16"></i>Course</a></li>
                        <li><a href="?go=insert_lesson" class="color-black"><i class="fas fa-book-open pd-right-16"></i>Lesson</a></li>
                    </ul>
                </li>
                <li><a href="#" class="color-black"><i class="fas fa-cogs pd-right-16"></i>Setting</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="bar">
            <div class="add">
                <div>
                    <input type="checkbox" id="add__checkbox" style="display:none;">
                    <label for="add__checkbox" class="add__icon color-white cursor-pointer"><i class="fas fa-plus"></i></label>
                    <ul>
                        <li class="add__blog cursor-pointer"><a href="?go=add_blog" class="color-black"><i class="fas fa-pen pd-right-16"></i>Blog Manage</a></li>
                        <li class="add__blog cursor-pointer"><a href="?go=insert_course" class="color-black"><i class="fas fa-pen pd-right-16"></i>Course Manage</a></li>
                        <li class="add__blog cursor-pointer"><a href="?go=insert_lesson" class="color-black"><i class="fas fa-pen pd-right-16"></i>Lesson Manage</a></li>
                        <li class="add__cmt cursor-pointer"><a href="#testimonials" class="color-black"><i class="fas fa-comment-dots pd-right-16"></i>Add comment</a></li>
                    </ul>
                </div>
            </div>
            <ul class="side">
                <li class="side__home cursor-pointer"><a href="?go=home" class="color-black"><i class="fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="side__courses cursor-pointer"><a href="?go=courses" class="color-black"><i class="fas fa-book"></i>
                        <p>Courses</p>
                    </a>
                </li>
                <li class="side__blog cursor-pointer"><a href="?go=blog" class="color-black"><i class="fas fa-align-left"></i>
                        <p>Blog</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="app">
            <?php
                if(isset($_GET['go'])){
                    include "./url.php";
                }else{
                    include "./inc/home.php";
                }
            ?>
        </div>
    </main>
    <footer>
        <ul class="nav">
            <li class="nav__about cursor-pointer"><a href="#about" class="color-black">About</a></li>
            <li class="nav__testimonials cursor-pointer"><a href="#testimonials" class="color-black">Testimonials</a></li>
            <li class="nav__contact cursor-pointer"><a href="#contact" class="color-black">Contact</a></li>
        </ul>
        <div class="social-source">
            <ul class="social">
                <li class="social__facebook"><i class="fab fa-facebook-square cursor-pointer"></i></li>
                <li class="social__twitter"><i class="fab fa-twitter-square cursor-pointer"></i></li>
                <li class="social__youtube"><i class="fab fa-youtube-square cursor-pointer"></i></li>
                <li class="social__google"><i class="fab fa-google-plus-square cursor-pointer"></i></li>
            </ul>
            <p class="source">Idea from <a href="https://fullstack.edu.vn/" class="pd-left-16">F8</a></p>
        </div>
    </footer>
</body>

</html>