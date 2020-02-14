@extends('layout.layout')

@section('content')

    <!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DREAMSHAKE</title>
    <!-- Import main styles -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 10]>
    <link rel="stylesheet" href="assets/css/ie.css">
    <![endif]-->


    <!-- <script src="assets/libs/jquery-3.2.1.min.js"></script> -->
    <!-- <script src="assets/libs/jquery.waypoints.min.js"></script> -->
    <!-- <script src="assets/libs/animate-css.js"></script> -->

    <!-- <script src="assets/js/common.js"></script> -->

</head>
<body>
<header class="home-header">
    <div class="container-fluid">
        <div class="home-header__brand">
            <a href="#">DREAMSHARE</a>
        </div>
        <section class="home-header__user">
            <a href="#" class="home-header__login">Log in</a>
            <a href="#" class="home-header__signup">Sign up</a>
        </section>
        <div class="home-header__info">
            <h1 class="home-header__title">Share your<br>holiday dreams</h1>
            <p class="home-header__paragraph">And find the perfect partner to fullfill it</p>
            <a href="#" class="home-header__btn btn">Find your holiday partner</a>
        </div>
    </div>
</header>
<section class="steps">
    <h2 class="steps__header">How Dreamshare works?</h2>
    <div class="steps__items">
        <div class="steps__item">
            <p class="steps__count">Step 1</p>
            <h2 class="steps__item-header">Lorem ipsum dolor sit amet</h2>
            <p class="steps__info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloremque blanditiis eos, temporibus numquam excepturi.</p>
        </div>
        <div class="steps__item">
            <p class="steps__count">Step 2</p>
            <h2 class="steps__item-header">Lorem ipsum  </h2>
            <p class="steps__info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet.</p>
        </div>
        <div class="steps__item">
            <p class="steps__count">Step 3</p>
            <h2 class="steps__item-header">Lorem ipsum dolor </h2>
            <p class="steps__info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloremque blanditiis eos, temporibus.</p>
        </div>
    </div>
</section>
<section class="partners">
    <h2 class="partners__header">Meet a partner for your best holiday</h2>
    <div class="partners__items">
        <div class="partners__item">
            <img src="./assets/img/user1.png" width="120" height="120" alt="" class="partners__photo">
            <h3 class="partners__name">Bradley Hunter</h3>
            <p class="partners__info">Based in Chicago. I love playing tennis and loud music.</p>
        </div>
        <div class="partners__item">
            <img src="./assets/img/user2.png" alt="" class="partners__photo">
            <h3 class="partners__name">Lucas Marsha</h3>
            <p class="partners__info">Based in Chicago. I love playing tennis and loud music.</p>
        </div>
        <div class="partners__item">
            <img src="./assets/img/user3.png" alt="" class="partners__photo">
            <h3 class="partners__name">Heather Walker</h3>
            <p class="partners__info">I'm a happy person that loves cats and climbing on mountains.</p>
        </div>
        <div class="partners__item">
            <img src="./assets/img/user4.png" alt="" class="partners__photo">
            <h3 class="partners__name">Bradley Hunter</h3>
            <p class="partners__info">I get my inspiration from nature and objects around me. I have a passion to colours, typography and skateboards.</p>
        </div>
    </div>
    <a href="#" class="partners__btn btn">See other partners</a>
</section>
<section class="discover">
    <h2 class="discover__header">Discover holiday activity ideas</h2>
    <div class="discover__items">
        <div class="discover__item"><h2>Sport and Activity</h2></div>
        <div class="discover__item"><h2>Wellnes and Health</h2></div>
        <div class="discover__item"><h2>Extreme Sports
                and Expeditions</h2></div>
        <div class="discover__item"><h2>Games</h2></div>
        <div class="discover__item"><h2>Culture and Education</h2></div>
        <div class="discover__item"><h2>Relaxation</h2></div>
        <div class="discover__item"><h2>Travelling</h2></div>
    </div>
</section>
<section class="search">
    <h2 class="search__header">Find your partner!</h2>
    <p class="search__paragraph">Hi! What are your holiday interests?</p>
    <form action="#" method="get">
        <input class="search__text" type="text" name="interests" value="Enter your interests">
        <input class="search__btn btn" type="submit" value="Search partners">
    </form>
</section>
<footer class="page-footer">
    <div class="container-fluid">
        <h2 class="page-footer__brand">Dreamshare</h2>
        <div class="page-footer__items">
            <h3 class="page-footer__items-header">Company</h3>
            <a href="#" class="page-footer__item">About</a>
            <a href="#" class="page-footer__item">Contacts</a>
            <a href="#" class="page-footer__item">Press</a>
            <a href="#" class="page-footer__item">Blog</a>
        </div>
        <div class="page-footer__items">
            <h3 class="page-footer__items-header">Partners</h3>
        </div>
        <h3 class="page-footer__me">Egor Ryabysh<br>MADE IT</h3>
    </div>
</footer>
</body>
</html>
@endsection
