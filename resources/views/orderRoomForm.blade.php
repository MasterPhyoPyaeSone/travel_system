<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>LOCAL14AGENCY</title>
    <link rel="shortcut icon" href="/image/pngegg.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />


</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html,
    body {
        font-family: 'Poppins', sans-serif;
        scroll-behavior: smooth;
    }

    .container {
        max-width: 90%;
        margin: auto;

    }

    .nav-container {
        max-width: 90%;
        margin: auto;

    }

    li {
        list-style: none;
    }

    a {
        text-decoration: none;
        transition: 0.5s;
    }

    .flex {
        display: flex;
    }

    .flex1 {
        display: flex;
        justify-content: space-between;
    }

    /*-------------head--------- */
    .head {
        height: 10vh;
        line-height: 10vh;
    }

    .head i {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        line-height: 30px;
        background: #FAF3E7;
        text-align: center;
        color: #CC8C18;
    }

    .head img {
        margin-top: 10px;
    }

    /*-------------head--------- */
    /*-------------header--------- */
    header {
        /* background: #CC8C18; */
        padding: 15px 0 15px 0;
        color: white;
    }

    .navbar {
        display: flex;
        align-items: center;
    }

    .hamburger {
        display: none;
    }

    .bar {
        display: block;
        width: 25px;
        height: 3px;
        margin: 5px auto;
        transition: all 0.5s ease-in-out;
        background: white;
    }

    .nav-menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    header ul {
        padding: 0 20px 0 0;
    }

    header li {
        margin-right: 30px;
    }

    header ul li a {
        font-size: 18px;
        color: white;
        /* text-transform: uppercase; */
        font-weight: 400;
        transition: 0.5s;
        font-family: "Poppins", Arial, sans-serif;

    }

    header ul li a:hover {
        color: #000;
    }

    header .head_contact {
        position: relative;
    }

    header .head_contact i {
        position: absolute;
        top: -29px;
        left: -70%;
        width: 80px;
        height: 80px;
        line-height: 80px;
        text-align: center;
        background: white;
        color: #CC8C18;
        border-radius: 50%;
        transform: rotate(-45deg);
        border: 5px solid #ECE3D2;
        font-size: 30px;
    }

    header .sticky_logo {
        display: none;
    }



    @media only screen and (max-width:768px) {

        /*------------head------------*/
        .header .head_contact,
        .logo {
            display: none;
        }

        /*------------head------------*/
        header.sticky {
            height: 8vh;
        }

        header.sticky .nav-menu {
            background: #313538;
        }

        .navbar {
            height: 5vh;
            justify-content: space-between;
        }

        .nav-menu {
            position: fixed;
            left: -100%;
            top: 11rem;
            flex-direction: column;
            background: #CC8C18;
            width: 100%;
            border-radius: 10px;
            text-align: center;
            transition: 0.3s;
            z-index: 99;
        }

        header.sticky .nav-menu {
            top: 5rem;
        }

        header ul li a {
            color: white;
        }

        .nav-menu.active {
            left: 0;
        }

        header li {
            margin: 2.5rem 0;
        }

        .hamburger {
            display: block;
            cursor: pointer;
        }

        .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger.active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }
    }

    /*------------home------------*/
    .grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-gap: 30px;
    }

    .home {
        background-image: url("../image/home.png");
        height: 100vh;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
    }

    .home h1 {
        font-family: 'Great Vibes', cursive;
        font-size: 150px;
        color: white;
        padding-top: 10%;
    }

    .home p {
        color: white;
    }

    .home .content {
        text-align: left;
        color: black;
        margin-top: 7%;
    }

    .home .box {
        background: white;
        padding: 35px;
    }

    .home input {
        margin-top: 10px;
    }

    input {
        border: none;
        outline: none;
    }

    button {
        background: #CC8C18;
        color: white;
        padding: 10px 20px;
        outline: none;
        border: none;
        border-radius: 30px;
    }

    button i {
        margin-left: 20px;
        font-size: 25px;
    }

    button span {
        margin-top: 5px;
    }

    /*------------home------------*/
    /*------------about------------*/
    .top {
        margin-top: 80px;
    }

    .mtop {
        margin-top: 40px;
    }

    .heading {
        text-align: center;
    }

    .heading h5 {
        font-weight: 400;
        letter-spacing: 5px;
        color: #CC8C18;
        padding-top: 20px;
    }

    .heading h2 {
        color: #24416B;
        font-size: 45px;
        font-family: serif;
        font-weight: bold;
        margin: 10px 0 20px 0;
    }

    .left,
    .right {
        width: 50%;
    }

    h3 {
        font-size: 35px;
        font-family: serif;
        color: #24416B;
        margin-bottom: 20px;
    }

    .about .left {
        padding: 20px;
    }

    p {
        line-height: 30px;
        color: #a4a4a4;
        margin-bottom: 20px;
        font-size: 15px;
    }

    .about {
        position: relative;
        padding-bottom: 70px;
    }

    .about .right {
        position: relative;
    }

    .about .right::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        background: #CC8C18;
        width: 92%;
        height: 61vh;
        z-index: -1;
        margin: 50px;
    }

    .about::after {
        content: '';
        position: absolute;
        top: -5%;
        left: 0;
        background-image: url("../image/line1.png");
        background-size: cover;
        background-repeat: no-repeat;
        height: 50px;
        width: 100%;
    }

    .about::before {
        content: '';
        position: absolute;
        bottom: -5%;
        left: 0;
        background-image: url("../image/line2.png");
        background-size: cover;
        background-repeat: no-repeat;
        height: 50px;
        width: 100%;
    }

    /*------------about------------*/
    /*------------wrapper------------*/
    .wrapper {
        background-image: url("../image/w.jpg");
        height: 80vh;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .wrapper .container {
        max-width: 50%;
        margin: auto;
    }



    .wrapper .item {
        background: white;
        padding: 50px;
        margin-top: 15%;
        border: 30px solid #F3F3F3;
        border-bottom: none;
    }

    .wrapper .heading {
        text-align: left;
    }

    .owl-nav .owl-next,
    .owl-nav .owl-prev {
        height: 47px;
        position: absolute;
        top: 60%;
        width: 26px;
        cursor: pointer;
        background: none !important;
    }

    .owl-nav .owl-prev {
        left: 0;
    }

    .owl-nav .owl-next {
        right: 53px;
    }

    .owl-nav .owl-next i,
    .owl-nav .owl-prev i {
        background: white;
        padding: 7px;
        border-radius: 50%;
        color: #CC8C18;
        box-shadow: 2px 2px 5px 3px rgba(0, 0, 0, 0.05);
        transition: 0.5s;
    }

    .owl-nav .owl-next i:hover,
    .owl-nav .owl-prev i:hover {
        background: #CC8C18;
        color: white;
    }

    /*------------wrapper------------*/
    /*------------wrapper2------------*/
    .wrapper2 {
        position: relative;
        text-align: center;
    }

    .wrapper2 .grid {
        grid-template-columns: repeat(4, 1fr);
    }

    .wrapper2 .box {
        box-shadow: 0 0 20px 3px rgb(0 0 0 / 5%);
        padding: 20px;
        transition: 0.5s;
    }

    .wrapper2 i {
        margin: 10px 0 15px 0;
        color: #CC8C18;
        font-size: 30px;
    }

    .wrapper2 h3 {
        font-size: 20px;
    }

    .wrapper2 span {
        padding: 10px;
        background: #F5E8D1;
        color: #CC8C18;
        border-radius: 50%;
    }

    .wrapper2 .box:hover {
        background: #CC8C18;
        cursor: pointer;
    }

    .wrapper2 .box:hover span {
        background: #fff;
    }

    .wrapper2 .box:hover p,
    .wrapper2 .box:hover h3,
    .wrapper2 .box:hover i {
        color: white;
    }

    .wrapper2::after {
        content: '';
        position: absolute;
        top: -22%;
        left: 0;
        background-image: url("../image/line1.png");
        background-size: cover;
        background-repeat: no-repeat;
        height: 75px;
        width: 100%;
        z-index: 2;
    }

    /*------------wrapper2------------*/
    /*------------room------------*/
    .room {
        margin-bottom: 50px;
        position: relative;
    }

    .room.wrapper2::after {
        display: none;
        top: 105%;
        background-image: url("../image/line2.png");
    }

    .grid2 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 30px;
    }

    .room img {
        width: 100%;
        height: 100%;
        margin-left: 20px;
    }

    .room h3 {
        margin: 0;
        padding: 0;
    }

    /*------------room------------*/
    /*------------timer------------*/
    .timer {
        position: relative;
        text-align: center;
        padding-top: 12%;
    }

    .background::after {
        position: absolute;
        content: '';
        top: 0;
        left: 0;
        content: '';
        background: rgba(0, 0, 0, 0.5);
        height: 100%;
        width: 100%;
    }

    .timer.wrapper {
        background-image: url("../image/w2.jpg");
    }

    .timer.about::after {
        z-index: 1;
        top: 0%;
        background-image: url("../image/line2.png");
    }

    .timer.about::before {
        z-index: 1;
        bottom: 0%;
        background-image: url("../image/line1.png");
    }

    .timer h2,
    .timer h5 {
        color: white;
        text-align: center;
    }

    .timer .container {
        position: relative;
    }

    .timer h2 span {
        font-family: 'Great Vibes', cursive;
    }

    .clock span {
        color: white;
        font-size: 50px;
        line-height: 50px;
    }

    .clock p {
        color: white;
        font-size: 18px;
        letter-spacing: 3px;
    }

    /*------------timer------------*/
    /*------------offer------------*/
    .offer img {
        margin-top: 20px;
        width: 400px;
        height: 400px;
        margin-right: 120px;
    }

    .offer .right {
        padding: 20px;
        margin: 20px;
        box-shadow: 0 0 20px 3px rgb(0 0 0 / 5%);
    }

    .offer .content h4 {
        font-size: 20px;
        color: #627795;
        font-family: serif;
    }

    .offer .rate i {
        font-size: 13px;
        color: #CC8C18;
        margin: 10px 10px 20px 0;
    }

    .offer .content h5 {
        color: #627795;
        margin-bottom: 10px;
    }

    .offer .box {
        transition: 0.5s;
    }

    .offer .box:hover {
        transform: translateY(-10px);
    }

    /*------------offer------------*/
    /*------------area------------*/
    .area img {
        margin: 0px 0 20px 80px;
    }

    .area ul li {
        display: inline-block;
        font-weight: 500;
        color: #5c646e;
        margin-right: 20px;
        margin-bottom: 20px;
    }

    .area .left {
        position: relative;
    }

    .area .left::after {
        position: absolute;
        top: 0;
        left: 0;
        content: '';
        width: 85%;
        height: 92%;
        margin: 30px;
        background: #CC8C18;
        z-index: -1;
    }

    /*------------area------------*/
    /*------------offer2------------*/
    .offer2 .heading {
        padding-top: 10%;
        text-align: center;
    }

    .offer2 .heading h3 {
        color: white;
    }

    .offer2.wrapper {
        background-image: url("../image/w3.jpg");
        height: 90vh;
        background-attachment: scroll;
    }

    .offer2.timer {
        padding-top: 0%;
    }

    .offer2.wrapper .container {
        max-width: 85%;
        margin: auto;
    }

    .offer2 .box {
        background: white;
        padding: 30px;
        text-align: left;
        transition: 0.5s;
    }

    .offer2 .box:hover {
        transform: translateY(-10px);
        cursor: pointer;
    }

    .offer2 .box h5 {
        color: #CC8C18;
        text-align: left;
        font-weight: 400;
        list-style: 5px;
        word-spacing: 10px;
    }

    .offer2 .box h3 {
        font-size: 20px;
        margin: 10px 0 10px 0;
    }

    .offer2 label {
        color: #CC8C18;
    }

    .offer2 .grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .offer2 .flex i {
        margin: 0 20px 20px 0;
        font-weight: 400;
        color: #5c646e;
    }

    /*------------offer2------------*/
    /*------------customer------------*/
    .customer .mtop {
        padding: 30px;
        max-width: 60%;
        margin: auto;
        text-align: center;
        box-shadow: 0 0 20px 3px rgb(0 0 0 / 5%);
    }

    .customer i {
        color: #CC8C18;
        font-size: 13px;
    }

    .customer .item h3 {
        font-size: 20px;
    }

    .customer img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
    }

    .customer .admin {
        justify-content: center;
    }

    .customer .admin h3 {
        margin: 0;
    }

    .customer .text {
        margin: 10px;
    }

    .customer span {
        opacity: 0.7;
    }

    /*------------customer------------*/
    /*------------gallary------------*/
    .gallary .item {
        position: relative;
        cursor: pointer;
    }

    .gallary .overlay i {
        position: absolute;
        top: 40%;
        left: 40%;
        z-index: 1;
        opacity: 0;
        font-size: 50px;
        color: white;
    }

    .gallary .overlay {
        position: absolute;
        content: '';
        background: rgba(204, 140, 24, 0.73);
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0;
    }

    .gallary .item:hover .overlay,
    .gallary .item:hover i {
        opacity: 1;
        transition: 0.5s;
        cursor: pointer;
    }

    /*------------gallary------------*/
    /*------------blog------------*/
    .blog .grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .blog .box {
        box-shadow: 0 0 20px 3px rgb(0 0 0 / 5%);
        transition: 0.5s;
    }

    .blog .box:hover {
        transform: translateY(-10px);
        cursor: pointer;
    }

    .blog .text {
        padding: 20px;
    }

    .blog img {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .blog .img {
        position: relative;
        overflow: hidden;
    }

    .blog span {
        position: absolute;
        top: -3%;
        left: -12%;
        z-index: 1;
        color: white;
        background: #CC8C18;
        padding: 20px 50px;
        transform: rotate(-45deg);
        font-size: 14px;
    }

    .blog .box h3 {
        font-size: 20px;
    }

    .blog .box i {
        margin-right: 10px;
        color: #CC8C18;
    }

    .blog .box i label {
        color: black;
    }

    .blog .box h3 {
        margin: 15px 0;
    }

    .blog a {
        color: #CC8C18;
        font-size: 15px;
    }

    /*------------blog------------*/
    /*------------map------------*/
    .map iframe {
        width: 100%;
    }

    /*------------map------------*/
    /*------------footer------------*/
    footer {
        background: black;
        color: white;
        padding: 30px;
    }

    .subscribe {
        text-align: center;
        max-width: 50%;
        margin: auto;
    }

    .subscribe input {
        width: 100%;
        border-radius: 50px;
        margin-right: 30px;
        padding: 10px;
    }

    footer .grid {
        grid-template-columns: repeat(4, 1fr);
    }

    footer .content h2 {
        margin-bottom: 20px;
        font-size: 23px;
    }

    footer li {
        margin-bottom: 15px;
        opacity: 0.5;
    }

    footer li i {
        font-size: 13px;
        margin-right: 10px;
    }

    footer .content h3 {
        font-size: 20px;
        color: white;
        margin: 0;
    }

    footer .content .icon i {
        font-size: 25px;
        margin-right: 20px;
    }

    footer .social i {
        padding: 10px;
        background: grey;
        margin-right: 10px;
        border-radius: 50%;
    }

    footer .content {
        padding-top: 60px;
        padding-bottom: 50px;
        border-top: 2px solid rgba(255, 255, 255, 0.2);
    }

    /*------------footer------------*/
    @media only screen and (max-width:768px) {

        /*------------home------------*/
        footer .grid,
        .blog .grid,
        .offer2 .grid,
        .wrapper2 .content,
        .grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .home h1 {
            font-size: 100px;
        }

        .home {
            height: 80vh;
        }

        .home .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, auto);
            grid-gap: 15px;
        }

        .home .box:nth-last-child(1) {
            grid-column-start: 1;
            grid-column-end: 3;
            grid-row-start: 3;
            grid-row-end: 3;
        }

        /*------------home------------*/
        /*------------about------------*/
        .left,
        .right {
            width: 100%;
        }

        .area .content,
        .room .content,
        .about .content {
            flex-direction: column;
        }

        .wrapper2::after,
        .area .left::after,
        .timer.about::before,
        .timer.about::after,
        .about .right::after,
        .about::before,
        .about::after {
            display: none;
        }

        /*------------about------------*/
        /*------------wrapper------------*/
        .wrapper .container {
            max-width: 80%;
            margin: auto;
        }

        /*------------wrapper2------------*/
        /*------------room------------*/
        .room img {
            margin: 0;
            margin-top: 50px;
        }

        /*------------room------------*/
        /*------------timer------------*/
        .timer.wrapper {
            height: 50vh;
        }

        /*------------timer------------*/
        /*------------offer------------*/
        .offer .box {
            flex-direction: column;
        }

        .offer .right {
            margin: 0px;
        }

        /*------------offer------------*/
        /*------------area------------*/
        .area img {
            margin: 0px;
            width: 100%;
        }

        /*------------area------------*/
        /*------------offer2------------*/
        .offer2.wrapper {
            height: 100vh;
        }

        /*------------offer2------------*/
        /*------------customer------------*/
        .customer .mtop {
            max-width: 100%;
        }

        /*------------customer------------*/
        /*------------footer------------*/
        .subscribe {
            max-width: 100%;
        }

        /*------------footer------------*/
    }

    @media only screen and (max-width:512px) {
        .header.sticky {
            height: 10vh;
        }

        .header.sticky .sticky_logo {
            width: auto;
            height: auto;
        }

        .header.sticky .nav-menu {
            top: 4rem;
        }

        .nav-menu {
            top: 12rem;
        }

        .head {
            height: 20vh;
            line-height: auto;
            text-align: center;
        }

        .head .container {
            flex-direction: column;
        }

        .home h1 {
            font-size: 70px;
        }

        .grid2,
        footer .grid,
        .blog .grid,
        .offer2 .grid,
        .wrapper2 .content,
        .grid {
            grid-template-columns: repeat(1, 1fr);
        }

        .home {
            height: 140vh;
        }

        .home .grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            grid-template-rows: repeat(1, auto);
            grid-gap: 15px;
        }

        .home .box:nth-last-child(1) {
            grid-column-start: 1;
            grid-column-end: 1;
            grid-row-start: 5;
            grid-row-end: 5;
        }

        img {
            width: 100%;
            height: 100%;
        }

        /*------------wrapper------------*/
        .wrapper .container {
            max-width: 90%;
        }

        .wrapper {
            height: 100vh;
        }

        .wrapper .item {
            padding: 20px;
            border: 0 solid #F3F3F3;
        }

        .offer2.wrapper {
            height: 170vh;
        }

        /* comment */
        .comment-box {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #comment {
            width: 100%;
            min-height: 200px;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            resize: vertical;
        }

        #submit-comment {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
    }

    .nav-link {
        color: #000;
    }

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-r4Dk0DzBxYho3Hv3ibJc44kF7IHR0t/C6QVNGdH9D8z9N9Hs8JGqBpzky1f0Bog" crossorigin="anonymous">
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> --}}
<body>



    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="margin-botton:300px">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="margin-top: -18px;margin-right: -30px">
                <img src="/image/pngegg.png" style="width: 100px;height: 100px;color: #f85959" alt=""><span style="color: #f85959">LOCAL 14 </span>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav" style="margin-left: 100px">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link" style="color: #000">Home</a></li>
                    {{-- <li class="nav-item"><a href="/about" class="nav-link">About</a></li> --}}
                    <li class="nav-item"><a href="/Allpackages" class="nav-link" style="color: #000">Packages</a></li>
                    <li class="nav-item"><a href="/Allhotel" class="nav-link" style="color: #000">Hotels</a></li>
                    <li class="nav-item"><a href="/blog" class="nav-link" style="color: #000">Blog</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link" style="color: #000">Contact</a></li>

                    <li class="nav-item"><a href="/about" class="nav-link" style="color: #000">About</a></li>
                    <li class="nav-item ">
                        <!-- Example single danger button -->
                        <div class="dropdown" style="margin-top: 3px">
                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none;background-color: transparent;">
                                <p class="nav-link" style="color: #000"> Travel Info</p>
                                {{-- <h5 class="nav-link">Travel Info</h5> --}}
                                {{-- <a href="" class="nav-link">Travel Info</a> --}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-top: -15px;margin-left: 25px">
                                <a class="dropdown-item" href="/faq">FAQ</a>
                                <a class="dropdown-item" href="/feedback">Feedback</a>
                                <a class="dropdown-item" href="/privacy">Privacy Policy</a>
                                <!-- Add more options as needed -->
                            </div>
                        </div>
                    </li>
                    <li style="margin-left: 50px">


                        @if (!auth()->check())
                    <li class="nav-item cta"><a href="/register" class="nav-link" style="border: none">Login/Register</a></li>
                    @endif

                    @if (auth()->check())
                    <li class="nav-item cta"><a href="/allcheckout" class="nav-link" style="border: none;background-color: transparent;font-size: 20px;margin-top: 3px">
                            <div class="" style="display: flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" style="color: #000">
                                    <circle cx="10.5" cy="19.5" r="1.5" fill="currentColor" />
                                    <circle cx="17.5" cy="19.5" r="1.5" fill="currentColor" />
                                    <path fill="currentColor" d="M21 7H7.334L6.18 4.23A1.995 1.995 0 0 0 4.333 3H2v2h2.334l4.743 11.385c.155.372.52.615.923.615h8c.417 0 .79-.259.937-.648l3-8A1.003 1.003 0 0 0 21 7m-4 6h-2v2h-2v-2h-2v-2h2V9h2v2h2z" /></svg>

                                <div class="" style="background-color: #f31e0b;border-radius: 50%;width: 18px;height: 25px;text-align: center ;color: white;padding-bottom: -10px;margin-bottom: 5px">
                                    <x-allcount />
                                </div>
                            </div>
                        </a>
                    </li>
                    @endif

                    <li class="nav-item cta" >
                        <div class="dropdown" style="margin-top: -10px">
                            <button class="btn  dropdown-toggle"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none;background-color: transparent;">
                                @if (auth()->check())
                                <p class="nav-link" style="color: #050505"><a href="/Profile" class="nav-link" style="border: none;background-color: transparent;font-size: 20px;margin-top: 3px;color: #fff"><i class="fas fa-user fa-lg " class="nav-link" style="color: #050505"></i></a> </p>
                                @endif
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-top: -25px;margin-left: 25px">
                                <a class="dropdown-item" href="/Profile"><i class="fas fa-user fa-lg " style="margin-right: 10px;color:#000" class="nav-link"></i>Profile</a>
                                <a class="dropdown-item" href="/logOut"><svg xmlns="http://www.w3.org/2000/svg" style="width: 20px;height: 20px;margin-right: 10px;margin-top: 10px;" viewBox="0 0 512 512; ">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" /></svg>LogOut</a>

                            </div>
                        </div>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    {{-- --}}


    <script>
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");

        hamburger.addEventListener("click", mobliemmenu);

        function mobliemmenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }

        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0)
        })

    </script>


    @if(session()->has('delete'))
    <div class="alert alert-success" role="alert">
        <div class="" style="display: flex;margin-top: 10px">
            <svg xmlns="http://www.w3.org/2000/svg" style="color: #4CAF50;margin-top: 5px;margin-left: 100px;margin-right: 10px" width="20" height="20" viewBox="0 0 1024 1024">
                <path fill="currentColor" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64m0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372" />
                <path fill="currentColor" fill-opacity=".15" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372s372-166.6 372-372s-166.6-372-372-372m193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8l157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7" />
                <path fill="currentColor" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7" /></svg>
            <p style="color: #000"> Successfully delete </p>
        </div>

    </div>
    @endif

    {{-- --}}

    <div class="container" style="margin-top: 150px;">
        <!-- Shopping cart table -->
        <div class="card">
            <div class="card-header">
                <h2>Room Order Cart</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  m-0">
                        <thead>
                            <tr>

                                <th class="text-center py-3 px-4" style="width: 50px;margin-right: 20px">Room_img</th>
                                <th class="text-center py-3 px-4" style="min-width: 200px;">Hotel Name</th>
                                <th class="text-center py-3 px-4" style="min-width: 200px;">Room_Type</th>

                                <th class="text-center py-3 px-4" style="width: 120px;">Adult</th>
                                <th class="text-center py-3 px-4" style="width: 120px;">Child</th>
                                <th class="text-center py-3 px-4" style="width: 100px;">Start_Date</th>
                                <th class="text-center py-3 px-4" style="width: 100px;">End_Date</th>



                                <th class="text-right py-3 px-4" style="width: 100px;">PerNight_Price</th>
                                <th class="text-right py-3 px-4" style="width: 100px;">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td class="p-4">
                                    <div class="media align-items-center">
                                        <img src="{{$order->room_img}}" class="d-block ui-w-10 ui-bordered mr-4" alt="" style="width: 150px;height: 100px;">

                                    </div>


                                </td>
                                <td class="text-center font-weight-semibold align-middle p-4">{{$order->hotel_name}}</td>
                                <td class="text-center font-weight-semibold align-middle p-4">{{$order->room_type}}</td>

                                <td class="text-center font-weight-semibold align-middle p-4">{{$order->adult}}</td>
                                <td class="text-center font-weight-semibold align-middle p-4">{{$order->child}}</td>
                                <td class="text-center font-weight-semibold align-middle p-2">{{$order->startDate}}</td>
                                <td class="text-center font-weight-semibold align-middle p-2">{{$order->endDate}}</td>
                                <td class="text-center font-weight-semibold align-middle p-4"> {{$order->room_price}}</td>


                                <td class="text-center align-middle px-0">
                                    {{-- <a href="/{{$order->package_id}}/delete" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a> --}}
                                    <form action="/roomorders/{{$order->room_id}}/delete" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove" style="border: none">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px;height: 25px;" viewBox="0 0 448 512">
                                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" /></svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- / Shopping cart table -->

                <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                    <div class="mt-4">

                    </div>
                    <div class="d-flex">

                        <div class="text-right mt-4 mr-5">
                            <label class="text-muted font-weight-normal m-0" style="font-size: 20px;font-weight: bolder;color: dodgerblue;">Total price</label>
                            <div class="text-large mt-2" style="text-align: center;color: dodgerblue;"><strong> {{$real_price}}</strong></div>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-lg md-btn-flat mt-2 mr-3" style="border: none;" style="background-color: #f2f2f2"><a href="/Allhotel" style="text-decoration: none;color:#f2f2f2;">Back to Hotel</a></button>
                    <a href="/confirmOrderRoom"> <button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button></a>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
