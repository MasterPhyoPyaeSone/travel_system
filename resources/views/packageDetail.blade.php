<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    {{-- <title>Hotel Booking Website</title> --}}
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

    /* * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html,
    body {
        font-family: 'Poppins', sans-serif;
        scroll-behavior: smooth;
    } */

    .container {
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
        /* background: burlywood; */
        /* background-color: rgba(255, 255, 255, 0.5); 
  backdrop-filter: blur(10px);  */
        /* padding-top: 10px; */
        padding: 15px 0 15px 0;
        /* padding: 20px; */
        color: rgb(7, 7, 7);
    }

    .navbar {
        /* padding: -20px; */
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
        font-size: 16px;
        color: white;
        /* text-transform: uppercase; */
        font-weight: 400;
        transition: 0.5s;
        font-family: "Poppins", Arial, sans-serif;
    }

    header ul li a:hover {
        /* color: #fd4949; */
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

    header.sticky .sticky_logo {
        display: block;
        width: 50px;
        height: 50px;
        margin-top: -10px;
    }

    header.sticky {
        z-index: 9999;
        position: fixed;
        width: 100%;
        background: #f1f7f6;
        transition: 0.5s;
        height: 12vh;
        transition: 0.5s;
        top: 0;
        color: #0e0e0e;
        /* padding: 20px 0 0 0; */
        /* padding-bottom: -40px; */
        margin-top: -15px;
        padding: 10px;
    }

    header.sticky ul li a {
        color: rgb(14, 14, 14);
    }

    header.sticky i {
        color: rgb(14, 14, 14);

    }

    header.sticky svg {
        color: rgb(14, 14, 14);

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
        margin-top: -150px;
        background-image: url("{{$package->img_1}}");
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

    /* .about::after {
  content: '';
  position: absolute;
  top: -5%;
  left: 0;
  background-image: url("../image/line1.png");
  background-size: cover;
  background-repeat: no-repeat;
  height: 50px;
  width: 100%;
} */

    /* .about::before {
  content: '';
  position: absolute;
  bottom: -3%;
  left: 0;
  background-image: url("../image/line2.png");
  background-size: cover;
  background-repeat: no-repeat;
  height: 50px;
  width: 100%;
} */

    /*------------about------------*/
    /*------------wrapper------------*/
    .wrapper {
        background-image: url("{{$package->img_5}}");
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
        margin-top: 10%;
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
        /* margin-bottom: -30px; */
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

        /*  */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-btn {
            background-color: #f9f9f9;
            color: #333;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: #333;
            padding: 10px 15px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropdown-btn {
            background-color: #f1f1f1;
        }

        /*  */
        /* .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-btn {
  background-color: #f9f9f9;
  color: #333;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  font-size: 16px;
}

.dropdown-content {
  display: flex;
  align-items: center;
  position: relative;
  top: 10px;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #333;
  padding: 10px 15px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #f1f1f1;
} */
        /*  */
        /* .badge:after{
        content:attr(value);
        font-size:12px;
        color: #fff;
        background: red;
        border-radius:50%;
        padding: 0 5px;
        position:relative;
        left:-8px;
        top:-10px;
        opacity:0.9;
    } */
        .protest-riot-regular {
            font-family: "Protest Riot", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Dosis:wght@300;400&family=Lato:ital,wght@0,300;0,400;1,100;1,300&family=Libre+Franklin:ital,wght@0,100;0,200;0,700;0,800;1,100;1,600;1,700;1,800&family=Pacifico&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&family=Protest+Riot&display=swap');
    }

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-r4Dk0DzBxYho3Hv3ibJc44kF7IHR0t/C6QVNGdH9D8z9N9Hs8JGqBpzky1f0Bog" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
{{-- <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet"> --}}

</head>
<?php
 $comments = $package->comments()->latest()->paginate(2)->withQueryString();
?>
<body>
    {{-- <section class="head">
    <div class="container flex1">
      <div class="scoial">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-youtube"></i>
      </div>
      <div class="logo">
        <img src="/image/logo.png" alt="img">
      </div>
      <div class="address">
        <i class="fas fa-map-marker-alt"></i>
        <span>205 Fida Walinton, Tongo Street Front, USA</span>
      </div>
    </div>
  </section> --}}


    <header class="header">
        <div class="container">
            <nav class="navbar flex1" style="display: flex;justify-content: space-between;align-items: center;">
                <div class="logo" style="margin-top: -10px;backgroud-image: none;margin-left: 100px">
                    {{-- <img src="/image/logo.png" alt=""> --}}
                    <img src="/image/pngegg.png" style="width: 100px;height: 100px;color: #f85959" alt=""><span style="color: #f85959;font-weight: bold;font-size: 20px">LOCAL 14 </span>

                </div>

                <div class="d">

                    <ul class="nav-menu " style="margin-left: 20px;display: flex;align-items: center;justify-content: space-between;gap: 20px;">
                        <li> <a href="/Allpackages" style="text-decoration: none">Home</a> </li>
                        <li> <a href="/Allpackages" style="text-decoration: none">Packages</a> </li>
                        <li> <a href="/Allhotel" style="text-decoration: none">Hotels</a> </li>
                        <li> <a href="/blog" style="text-decoration: none">Blog</a> </li>
                        <li> <a href="/contact" style="text-decoration: none">Contact</a> </li>
                        <li> <a href="/about" style="text-decoration: none">About</a> </li>
                        <li> <a href="/" style="text-decoration: none">Travel info</a> </li>

                    </ul>
                </div>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>

                </div>

                <script>
                    $('.dropdown').on('mouseover', function() {
                        $('.dropdown-content').css('display', 'block');
                    });

                    $('.dropdown').on('mouseout', function() {
                        $('.dropdown-content').css('display', 'none');
                    });

                </script>

                <div class="head_contact">
                    {{-- <i class="fas fa-phone-volume"></i>
          <span>+000 1234 5678</span>         --}}
                    {{-- <span><a href="">Cart</a></span> --}}

                </div>
                <div class="sticky" style="display: flex;justify-content: space-between;gap:40px;" >
                    <div class="d-flex" style="">

                        <div class="sticky">
                            <x-cart />
                        </div>
                        <div class="" style="margin-left: -35px;margin-top: -10px;">
                            <p style="background-color: #f31e0b;border-radius: 50%;width: 18px;height: 25px;text-align: center ;color: white;padding-bottom: 10px;margin-bottom: 5px">{{$count}}</p>
                        </div>
                    </div>

                    @if (auth()->check())
                    <div class="">
                        <p class="nav-link icon" style="color: #fff;margin-top: -7px"><a href="/Profile" class="nav-link" style="border: none;background-color: transparent;font-size: 20px;margin-top: 3px;color: #fff"><i class="fas fa-user fa-lg icon" class="nav-link"></i></a> </p>
                    </div>
                    @endif
                </div>



            </nav>
        </div>
    </header>


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
    <section class="home" id="home">
        <div class="container">
            <h1 style="padding-top: -200px">Make Memories</h1>
            <p>Discover the place where you have fun & enjoy a lot</p>
            {{-- --}}
            <form action="/packages/{{$package->id}}/storeOrder" method="post">
                @csrf
                {{-- <input type="hidden" name="package_img"> --}}
                <div class="content grid" style="justify-content: center;display: flex">
                    <div class="box">
                        {{-- <span>ARRIVAL DATE </span> <br>
          <input type="date" name="startDate" placeholder="29/20/2021"> --}}
                        {{-- <p style="text-align: center;color: #0e0e0e">Please Fill the requried</p> --}}
                        <span>Please fill requirements</span>
                    </div>
                    {{-- <div class="box">
          <span>DEPARTURE DATE </span> <br>
          <input type="date" name="endDate"  placeholder="29/20/2021">
        </div> --}}
                    <div class="box">
                        <span>ADULTS</span> <br>
                        <input type="number" name="adult" placeholder="01" required max="5" min="0" style="width: 150px">
                    </div>
                    <div class="box">
                        <span>CHILDREN </span> <br>
                        <input type="number" name="child" placeholder="01" required max="5" min="0" style="width: 150px">
                    </div>
                    <div class="box">
                        <button class="flex1" type="submit">
                            <span>Check Availability</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </div>
                {{-- --}}
                <div class="" style="margin-top: 25px">
                    @if(session()->has('orderExit'))
                    <div class="alert alert-success" role="alert" style="width: 50%;margin-left: 100px">
                        <div class="" style="text-align: center ">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" style="color: #4CAF50" width="20" height="20" viewBox="0 0 1024 1024"><path fill="currentColor" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64m0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372"/><path fill="currentColor" fill-opacity=".15" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372s372-166.6 372-372s-166.6-372-372-372m193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8l157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7"/><path fill="currentColor" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7"/></svg> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: #f4341b" width="20" height="20" viewBox="0 0 1024 1024">
                                <path fill="currentColor" fill-rule="evenodd" d="M512 64c247.4 0 448 200.6 448 448S759.4 960 512 960S64 759.4 64 512S264.6 64 512 64m0 76c-205.4 0-372 166.6-372 372s166.6 372 372 372s372-166.6 372-372s-166.6-372-372-372m128.013 198.826c.023.007.042.018.083.059l45.02 45.019c.04.04.05.06.058.083a.118.118 0 0 1 0 .07c-.007.022-.018.041-.059.082L557.254 512l127.861 127.862a.268.268 0 0 1 .05.06l.009.023a.118.118 0 0 1 0 .07c-.007.022-.018.041-.059.082l-45.019 45.02c-.04.04-.06.05-.083.058a.118.118 0 0 1-.07 0c-.022-.007-.041-.018-.082-.059L512 557.254L384.14 685.115c-.042.041-.06.052-.084.059a.118.118 0 0 1-.07 0c-.022-.007-.041-.018-.082-.059l-45.02-45.019a.199.199 0 0 1-.058-.083a.118.118 0 0 1 0-.07c.007-.022.018-.041.059-.082L466.745 512l-127.86-127.86a.268.268 0 0 1-.05-.061l-.009-.023a.118.118 0 0 1 0-.07c.007-.022.018-.041.059-.082l45.019-45.02c.04-.04.06-.05.083-.058a.118.118 0 0 1 .07 0c.022.007.041.018.082.059L512 466.745l127.862-127.86c.04-.041.06-.052.083-.059a.118.118 0 0 1 .07 0Z" /></svg>
                            This package is already order, Please check again!!!!!
                        </div>
                    </div>
                </div>
                @endif

                @if(session()->has('orderSuccess'))
                <div class="alert alert-success" role="alert" style="width: 50%;margin-left: 100px">
                    <div class="" style="text-align: center">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #4CAF50" width="20" height="20" viewBox="0 0 1024 1024">
                            <path fill="currentColor" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64m0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372" />
                            <path fill="currentColor" fill-opacity=".15" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372s372-166.6 372-372s-166.6-372-372-372m193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8l157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7" />
                            <path fill="currentColor" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7" /></svg>
                        Successfully Order your Package
                    </div>
                </div>
        </div>
        @endif

        @if(session()->has('success'))
        <div class="alert alert-success" role="alert" style="width: 50%;margin-left: 100px">
            <div class="" style="text-align: center">
                <svg xmlns="http://www.w3.org/2000/svg" style="color: #4CAF50" width="20" height="20" viewBox="0 0 1024 1024">
                    <path fill="currentColor" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64m0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372" />
                    <path fill="currentColor" fill-opacity=".15" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372s372-166.6 372-372s-166.6-372-372-372m193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8l157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7" />
                    <path fill="currentColor" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7" /></svg>
                Successfully comment <a href="#comment" style="scroll-behavior: smooth;text-decoration: none"> here</a>
            </div>
        </div>
        </div>
        @endif

        @if(session()->has('delete'))
        <div class="alert alert-success" role="alert" style="width: 50%;margin-left: 100px">
            <div class="" style="text-align: center">
                <svg xmlns="http://www.w3.org/2000/svg" style="color: #4CAF50" width="20" height="20" viewBox="0 0 1024 1024">
                    <path fill="currentColor" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64m0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372" />
                    <path fill="currentColor" fill-opacity=".15" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372s372-166.6 372-372s-166.6-372-372-372m193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8l157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7" />
                    <path fill="currentColor" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7" /></svg>
                Successfully delete your comment <a href="#comment" style="scroll-behavior: smooth;text-decoration: none"> check it</a>
            </div>
        </div>
        </div>
        @endif

        @if(session()->has('edit'))
        <div class="alert alert-success" role="alert" style="width: 50%;margin-left: 100px">
            <div class="" style="text-align: center">
                <svg xmlns="http://www.w3.org/2000/svg" style="color: #4CAF50" width="20" height="20" viewBox="0 0 1024 1024">
                    <path fill="currentColor" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64m0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372" />
                    <path fill="currentColor" fill-opacity=".15" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372s372-166.6 372-372s-166.6-372-372-372m193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8l157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7" />
                    <path fill="currentColor" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7" /></svg>
                Successfully update your comment <a href="#comment" style="scroll-behavior: smooth;text-decoration: none"> check it</a>
            </div>
        </div>
        </div>
        @endif
        </div>

        </form>
        {{-- --}}
        </div>


    </section>



    <section class="about" id="about">
        <div class="container">
            <div class="heading">
                <h5>EXPLORE</h5>
                <h2>We are cool to give you pleasure
                </h2>
            </div>

            <div class="content flex  top">
                <div class="left">
                    <div class="d-flex" style="display: flex;align-items: center;justify-content: space-between">
                        <div class="">
                            <h2 style="text-align: center;color: #f9ca11f4; ">{{$package->title}} </h2>
                        </div>
                        <div class="" style="margin-top: -5px">
                            <form action="/packages/{{$package->id}}/handle_favorite" method="post">
                                @csrf
                                @if (auth()->user()->isFavorite($package))
                                <button class="btn " style="border: none;margin-top: -10px;background-color: transparent"><i class="fas fa-heart" style="color: rgb(238, 25, 10); font-size: 40px;"></i><br><small style="color: red;margin-left: 15px">favorite</small></button>
                                @else
                                <button class="btn " style="border: none;margin-top: -10px;background-color: transparent"><i class="fas fa-heart" style="color: rgb(63, 245, 35); font-size: 40px;"></i><br><small style="color: rgb(63, 245, 35);margin-left: 15px">unfavorite</small></button>
                                @endif
                            </form>
                        </div>
                    </div>
                    {{-- <h3 style="background-color: #c0c1c2;text-align: center;color: #4a4242;padding: 10px;border-radius: 20px;margin-top: 20px">EXPRESS + HOTEL 1 NIGHT + BREAKFAST PACKAGE {{$package->intro}}</h3> --}}
                    <div class="" style="display: flex">
                        <div class="" style="margin: 20px">
                            <h3 style="color: #07a80d">Services Included</h3>
                            <hr>
                            <div class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: #59ed5e" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19.965 8.521C19.988 8.347 20 8.173 20 8c0-2.379-2.143-4.288-4.521-3.965C14.786 2.802 13.466 2 12 2s-2.786.802-3.479 2.035C6.138 3.712 4 5.621 4 8c0 .173.012.347.035.521C2.802 9.215 2 10.535 2 12s.802 2.785 2.035 3.479A3.976 3.976 0 0 0 4 16c0 2.379 2.138 4.283 4.521 3.965C9.214 21.198 10.534 22 12 22s2.786-.802 3.479-2.035C17.857 20.283 20 18.379 20 16c0-.173-.012-.347-.035-.521C21.198 14.785 22 13.465 22 12s-.802-2.785-2.035-3.479m-9.01 7.895l-3.667-3.714l1.424-1.404l2.257 2.286l4.327-4.294l1.408 1.42z" /></svg> SCANIA EXPRESS (44 Seaters) <br>
                            </div>
                            <div class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: #59ed5e" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19.965 8.521C19.988 8.347 20 8.173 20 8c0-2.379-2.143-4.288-4.521-3.965C14.786 2.802 13.466 2 12 2s-2.786.802-3.479 2.035C6.138 3.712 4 5.621 4 8c0 .173.012.347.035.521C2.802 9.215 2 10.535 2 12s.802 2.785 2.035 3.479A3.976 3.976 0 0 0 4 16c0 2.379 2.138 4.283 4.521 3.965C9.214 21.198 10.534 22 12 22s2.786-.802 3.479-2.035C17.857 20.283 20 18.379 20 16c0-.173-.012-.347-.035-.521C21.198 14.785 22 13.465 22 12s-.802-2.785-2.035-3.479m-9.01 7.895l-3.667-3.714l1.424-1.404l2.257 2.286l4.327-4.294l1.408 1.42z" /></svg> Breakfast,Lunch,Dinner (FREE) <br>

                            </div>
                            <div class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: #59ed5e;margin-right: 5px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19.965 8.521C19.988 8.347 20 8.173 20 8c0-2.379-2.143-4.288-4.521-3.965C14.786 2.802 13.466 2 12 2s-2.786.802-3.479 2.035C6.138 3.712 4 5.621 4 8c0 .173.012.347.035.521C2.802 9.215 2 10.535 2 12s.802 2.785 2.035 3.479A3.976 3.976 0 0 0 4 16c0 2.379 2.138 4.283 4.521 3.965C9.214 21.198 10.534 22 12 22s2.786-.802 3.479-2.035C17.857 20.283 20 18.379 20 16c0-.173-.012-.347-.035-.521C21.198 14.785 22 13.465 22 12s-.802-2.785-2.035-3.479m-9.01 7.895l-3.667-3.714l1.424-1.404l2.257 2.286l4.327-4.294l1.408 1.42z" /></svg> @foreach ($hotels as $hotel)
                                {{$hotel->name}},
                                @endforeach<br>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: #59ed5e" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19.965 8.521C19.988 8.347 20 8.173 20 8c0-2.379-2.143-4.288-4.521-3.965C14.786 2.802 13.466 2 12 2s-2.786.802-3.479 2.035C6.138 3.712 4 5.621 4 8c0 .173.012.347.035.521C2.802 9.215 2 10.535 2 12s.802 2.785 2.035 3.479A3.976 3.976 0 0 0 4 16c0 2.379 2.138 4.283 4.521 3.965C9.214 21.198 10.534 22 12 22s2.786-.802 3.479-2.035C17.857 20.283 20 18.379 20 16c0-.173-.012-.347-.035-.521C21.198 14.785 22 13.465 22 12s-.802-2.785-2.035-3.479m-9.01 7.895l-3.667-3.714l1.424-1.404l2.257 2.286l4.327-4.294l1.408 1.42z" /></svg> Free Wifi <br>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: #59ed5e" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19.965 8.521C19.988 8.347 20 8.173 20 8c0-2.379-2.143-4.288-4.521-3.965C14.786 2.802 13.466 2 12 2s-2.786.802-3.479 2.035C6.138 3.712 4 5.621 4 8c0 .173.012.347.035.521C2.802 9.215 2 10.535 2 12s.802 2.785 2.035 3.479A3.976 3.976 0 0 0 4 16c0 2.379 2.138 4.283 4.521 3.965C9.214 21.198 10.534 22 12 22s2.786-.802 3.479-2.035C17.857 20.283 20 18.379 20 16c0-.173-.012-.347-.035-.521C21.198 14.785 22 13.465 22 12s-.802-2.785-2.035-3.479m-9.01 7.895l-3.667-3.714l1.424-1.404l2.257 2.286l4.327-4.294l1.408 1.42z" /></svg> Swimming Pool<br>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: #59ed5e" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19.965 8.521C19.988 8.347 20 8.173 20 8c0-2.379-2.143-4.288-4.521-3.965C14.786 2.802 13.466 2 12 2s-2.786.802-3.479 2.035C6.138 3.712 4 5.621 4 8c0 .173.012.347.035.521C2.802 9.215 2 10.535 2 12s.802 2.785 2.035 3.479A3.976 3.976 0 0 0 4 16c0 2.379 2.138 4.283 4.521 3.965C9.214 21.198 10.534 22 12 22s2.786-.802 3.479-2.035C17.857 20.283 20 18.379 20 16c0-.173-.012-.347-.035-.521C21.198 14.785 22 13.465 22 12s-.802-2.785-2.035-3.479m-9.01 7.895l-3.667-3.714l1.424-1.404l2.257 2.286l4.327-4.294l1.408 1.42z" /></svg> Tour Guides<br>
                        </div>
                        {{-- --}}
                        <div class="" style="margin: 20px">
                            <h3 style="color: #f4341b">Services Excluded</h3>
                            <hr>
                            <div class="" style="display: flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" style="color: rgb(243, 20, 65);margin-right: 5px" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248s248-111 248-248S393 8 256 8m0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200s-89.5 200-200 200m101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2l-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2l62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17" /></svg>Additional meals ordered at a restaurants <br>

                            </div>
                            <div class="" style="display: flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: rgb(243, 20, 65);margin-right: 5px" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248s248-111 248-248S393 8 256 8m0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200s-89.5 200-200 200m101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2l-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2l62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17" /></svg>Mini Bar in hotel room and other personal lot<br>

                            </div>

                        </div>
                    </div>
                    {{-- <h3>{{$package->intro}}</h3> --}}
                    <hr> <br>
                    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente rem ipsa cum incidunt accusantium aperiam tempore architecto excepturi quia a similique id voluptatem doloremque et veniam eum odio, iusto repellendus, vitae placeat ut asperiores doloribus. Dolorum magnam ea facere nihil perferendis saepe, et facilis hic illum officiis sequi accusamus quam.</p> --}}
                    <h2 style="color: #ffd700">General Information</h2>
                    <hr style="width: 50%;background: darkgoldenrod;height: 5px; border: none;margin-left: 50px">
                    <table style="text-align: center">
                        <tr>
                            <td style="text-align: right;">
                                <div class="d-flex"><span style="font-size: 20px;font-weight: bold">Duration</span> <span style="margin-left: 52px;font-size: 20px;font-weight: bold;margin-right: 5px">:</span></div>
                            </td>
                            <td style="text-align: left;"><span style="font-size: 20px;font-weight: bold">{{$package->long_time}}</span></td>
                        </tr>

                        <tr>
                            {{-- <td>Start/End:  </td> --}}
                            <td style="text-align: right;">
                                <div class="d-flex"><span style="font-size: 20px;font-weight: bold">Start/End</span><span style="margin-left: 45px;font-size: 20px;font-weight: bold;margin-right: 5px">:</span></div>
                            </td>
                            <td style="text-align: left;"><span style="font-size: 20px;font-weight: bold">Yangon/ Yangon</span></td>
                        </tr>



                        <tr>
                            {{-- <td>Tour Type:</td> --}}
                            <td style="text-align: right;">
                                <div class="d-flex"><span style="font-size: 20px;font-weight: bold">Tour_Type</span><span style="margin-left: 40px;font-size: 20px;font-weight: bold;margin-right: 5px">:</span></div>
                            </td>

                            <td style="text-align: left;"><span style="font-size: 20px;font-weight: bold"> Sightseeing & Experience, Landscape, History & Culture Discovery</span></td>
                        </tr>

                        <tr>
                            {{-- <td>Tour DateTour Date:</td> --}}
                            <td style="text-align: right;">
                                <div class="d-flex"><span style="font-size: 20px;font-weight: bold">Tour_Date</span><span style="margin-left: 40px;font-size: 20px;font-weight: bold;margin-right: 5px">:</span></div>
                            </td>
                            <td style="text-align: left;"><span style="font-size: 20px;font-weight: bold">{{$package->date}}</span></td>
                            {{-- <td  style="text-align: left;">Not fixed, up to your schedule</td> --}}
                        </tr>
                    </table>


                    {{-- <div class="" style="margin-left: 50%"><h3 style="background-color:#ffd700;text-align: center;color: #0e0e0e;display: inline-block;padding: 15px;">$ {{$package->price}} (per person)</h3>
                </div> --}}
                <button class="d-flex" style="margin-top: 50px;margin-left: 60%;border-radius: 10px">
                    {{-- <span>Check Availability</span> --}}
                    <span style="margin-bottom: 10px"> {{$package->price}} (per person)</span>

                    <div class="" style="margin-top: 7px"><a href="#home"><i class="fas fa-arrow-circle-right" style="color: white"></i></a></div>
                </button>
            </div>
            <div class="right">

                <img src="{{$package->img_1}}" alt="" style="width: 620px;height: 500px;"><br>

            </div>

        </div>
        </div>
    </section>



    <section class="wrapper" id="services">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="heading">
                        <h5 style="text-align: center;margin-top: -15px">Experience this {{$package->long_time}} Tour With:</h5>
                        <h3 style="color: #24416B;font-size: 40px;font-weight: bold">{{$package->title}} </h3>
                    </div>
                    <span>
                        <h2 style="color: #CC8C18">Guides:</h2>
                    </span>
                    <h3> hand-picked best tour guides with deep knowledge, humor, and profession (English speaking guides, other languages upon request)</h3>
                    <p> Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="item">
                    <div class="heading">
                        <h5 style="text-align: center;margin-top: -15px">Experience this {{$package->long_time}} Tour With:</h5>

                        <h3 style="color: #24416B;font-size: 40px;font-weight: bold">{{$package->title}} </h3>
                    </div>
                    <span>
                        <h2 style="color: #CC8C18">Drivers: </h2>
                    </span>
                    <h3> polite, friendly, responsible, reliable with many years of driving experience</h3>
                    <p> Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="item">
                    <div class="heading">
                        <h5 style="text-align: center;margin-top: -15px">Experience this {{$package->long_time}} Tour With:</h5>

                        <h3 style="color: #24416B;font-size: 40px;font-weight: bold">{{$package->title}} </h3>
                    </div>
                    <span>
                        <h2 style="color: #CC8C18">Vehicles: </h2>
                    </span>
                    <h3> comfortable, spacious, air-conditioned & clean</h3>
                    <span>
                        <h2 style="color: #CC8C18">Meals: </h2>
                    </span>
                    <h3>meals are arranged at local restaurants so you can taste authentic Burmese cuisine</h3>
                    <p> Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="item">
                    <div class="heading">
                        <h5 style="text-align: center;margin-top: -15px">Experience this {{$package->long_time}} Tour With:</h5>

                        <h3 style="color: #24416B;font-size: 40px;font-weight: bold">{{$package->title}} </h3>
                    </div>
                    <span>
                        <h2 style="color: #CC8C18">Accommodation: </h2>
                    </span>
                    <h3> well-chosen hotels are listed below. Besides, various types of accommodation are available, from 5-star hotels, 4-star hotels in the best location, good value 3-star hotels, to boutique hotels reflect the style of the region</h3>
                    {{-- <span><h2 style="color: #CC8C18">Meals: </h2></span><h3>meals are arranged at local restaurants so you can taste authentic Burmese cuisine</h3> --}}
                    <p> Duis
                        aute irure dolor in reprehenderit in voluptate cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true
            , margin: 10
            , nav: true
            , dots: false
            , navText: ["<i class='far fa-long-arrow-alt-left'></i>", "<i class='far fa-long-arrow-alt-right'></i>"]
            , responsive: {
                0: {
                    items: 1
                }
                , 768: {
                    items: 1
                }
                , 1000: {
                    items: 1
                }
            }
        })

    </script>

    <!-- <section class="timer about wrapper">
    <div class="background"> </div>
    <div class="container">
      <div class="heading">
        <h5>LAST MINUTE!</h5>
        <h2> <span>Incredible!</span> Are you coming today</h2>
      </div>

      <div id="time" class="flex1 mtop"> </div>
    </div>
  </section> -->

    <section class="area top" style="margin-bottom: 150px">
        <div class="container">
            <div class="heading">
                <h5>YOU CAN ENJOIN ABOUT PACKAGE</h5>
                {{-- <h3>The area we cover under ecorik</h3> --}}
            </div>
            <div class="content flex mtop">
                <div class="left" style="height: 550px">
                    <img src="{{$package->img_2}}" alt="" style="width: 530px;height: 500px;">

                </div>

                <div class="right">
                    {{-- <ul>
            <li>Restaurant </li>
            <li>Swimming pool </li>
            <li>Conference room</li>
          </ul> --}}
                    <div class="" style="margin-top: 40px;">

                        <h2 style="text-align: left;color: #ffd700">About Package</h2>
                        <hr style="width: 30%;background: darkgoldenrod;height: 5px; border: none;margin-left: 50px">
                        <h3 style="text-align: LEFT">{{$package->body}}</h3>
                    </div>





                    {{-- <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button> --}}
                </div>
            </div>
        </div>
    </section>


    <section class="wrapper2">
        <div class="container">
            <div class="heading mtop">
                <h5>FACILITIES</h5>
                <h2>Giving entirely awesome on Express</h2>
            </div>

            <div class="content grid mtop">
                <div class="box">
                    <i class="fas fa-shipping-fast"></i>
                    <h3>SCANIA EXPRESS</h3>
                    <p>"Good" wash includes a high-quality express wash</p>
                    <span class='far fa-long-arrow-alt-right'></span>
                </div>
                <div class="box">
                    <i class="fas fa-mug-hot"></i>
                    <h3>FREE COFFEE</h3>
                    <p> provide free coffee in their lobby,</p>
                    <span class='far fa-long-arrow-alt-right'></span>
                </div>
                <div class="box">
                    {{-- <i class="fas fa-car"></i> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 35px;height: 35px;margin-top: 15px" viewBox="0 0 640 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#ee961b" d="M54.2 202.9C123.2 136.7 216.8 96 320 96s196.8 40.7 265.8 106.9c12.8 12.2 33 11.8 45.2-.9s11.8-33-.9-45.2C549.7 79.5 440.4 32 320 32S90.3 79.5 9.8 156.7C-2.9 169-3.3 189.2 8.9 202s32.5 13.2 45.2 .9zM320 256c56.8 0 108.6 21.1 148.2 56c13.3 11.7 33.5 10.4 45.2-2.8s10.4-33.5-2.8-45.2C459.8 219.2 393 192 320 192s-139.8 27.2-190.5 72c-13.3 11.7-14.5 31.9-2.8 45.2s31.9 14.5 45.2 2.8c39.5-34.9 91.3-56 148.2-56zm64 160a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z" /></svg>
                    <h3>FREE WIFI</h3>
                    <p> provide free Wi-Fi While enjoying your trips</p>
                    <span class='far fa-long-arrow-alt-right'></span>
                </div>
                <div class="box">
                    {{-- <i class="far fa-water"></i> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 35px;height: 35px;margin-top: 15px" viewBox="0 0 512 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#ea9e1a" d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96v32V480H384V128 96 56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM96 96H64C28.7 96 0 124.7 0 160V416c0 35.3 28.7 64 64 64H96V96zM416 480h32c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H416V480zM224 208c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v48h48c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H288v48c0 8.8-7.2 16-16 16H240c-8.8 0-16-7.2-16-16V320H176c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h48V208z" /></svg>
                    <h3>MEDICAL CARE</h3>
                    <p>while your car is being detailed in a welcoming and comfortable environment.</p>
                    <span class='far fa-long-arrow-alt-right'></span>
                </div>
            </div>
        </div>
    </section>


    <section class="offer mtop">
        <div class="container">
            <div class="heading">
                <h5>EXCLUSIVE OFFERS </h5>
                <h3>Recommended Hotel List </h3>
            </div>

            <div class="content grid2 mtop" style="margin-left: 150px" id="hotel">
                @foreach($hotels as $hotel)
                <div class="box flex">
                    <div class="left">
                        <img src="{{$hotel?->img_1}}" alt="" width="500px" height="300px">
                    </div>
                    <div class="right">
                        <h3>{{$hotel?->name}}</h3>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>{{$hotel->intro}}</p>
                        {{-- <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> --}}
                        <h5> {{$hotel?->price}} /per_night</h5>
                        <h4>Place : {{$hotel?->place}}</h4><br>
                        <button class="flex1" style="margin-left: 70px">
                            <a href="/Allhotel/{{$hotel?->id}} " style="text-decoration: none;color: #f2f2f2"><span>Check Availability</span></a>
                            <i class="fas fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </div>
                @endforeach

            </div>
    </section>



    {{-- <section class="timer about wrapper">
    <div class="background"> </div>
    <div class="container">
      <div class="heading">
        <h5>LAST MINUTE!</h5>
        <h2> <span>Incredible!</span> Are you coming today</h2>
      </div>

      <div id="time" class="flex1 mtop"> </div>
    </div>
  </section> --}}
    {{-- <script src="js/jquery.countdown.js" charset="utf-8"></script>
  <script src="js/jquery.countdown.min.js" charset="utf-8"></script>
  <script type="text/javascript">
    $('#time').countdown('2024/01/01', function(event) {
      $(this).html(event.strftime(
        '<div class="clock"><span>%d</span> <p>Days</p></div> ' +
        '<div class="clock"><span>%H</span> <p>Hours</p></div> ' +
        '<div class="clock"><span>%M</span> <p>Minutes</p></div> ' +
        '<div class="clock"><span>%S</span> <p>Seconds</p></div> '
      ));
    });
  </script> --}}
    <section class="room wrapper2 top" id="room">
        <div class="container">
            <div class="heading">
                <h5>OUR ROOMS</h5>
                <h2>Fascinating rooms & suites </h2>
            </div>
            <div class="content flex mtop">
                <div class="left grid2">
                    <div class="box">
                        <i class="fas fa-desktop"></i>
                        <p>Free Cost</p>
                        <h3>No booking fee</h3>
                    </div>
                    <div class="box">
                        <i class="fas fa-dollar-sign"></i>
                        <p>Free Cost</p>
                        <h3>Best rate guarantee</h3>
                    </div>
                    <div class="box">
                        <i class="fab fa-resolving"></i>
                        <p>Free Cost</p>
                        <h3>Reservations 24/7</h3>
                    </div>
                    <div class="box">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 45px;height: 45px;" viewBox="0 0 640 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#f0a728" d="M54.2 202.9C123.2 136.7 216.8 96 320 96s196.8 40.7 265.8 106.9c12.8 12.2 33 11.8 45.2-.9s11.8-33-.9-45.2C549.7 79.5 440.4 32 320 32S90.3 79.5 9.8 156.7C-2.9 169-3.3 189.2 8.9 202s32.5 13.2 45.2 .9zM320 256c56.8 0 108.6 21.1 148.2 56c13.3 11.7 33.5 10.4 45.2-2.8s10.4-33.5-2.8-45.2C459.8 219.2 393 192 320 192s-139.8 27.2-190.5 72c-13.3 11.7-14.5 31.9-2.8 45.2s31.9 14.5 45.2 2.8c39.5-34.9 91.3-56 148.2-56zm64 160a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z" /></svg>
                        <p>Free Cost</p>
                        <h3>High-speed Wi-Fi</h3>
                    </div>
                    <div class="box">
                        <i class="fas fa-mug-hot"></i>
                        <p>Free Cost</p>
                        <h3>Free breakfast</h3>
                    </div>
                    <div class="box">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 45px;height: 45px;" viewBox="0 0 640 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#f5b342" d="M96 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V224v64V448c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V384H64c-17.7 0-32-14.3-32-32V288c-17.7 0-32-14.3-32-32s14.3-32 32-32V160c0-17.7 14.3-32 32-32H96V64zm448 0v64h32c17.7 0 32 14.3 32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32v64c0 17.7-14.3 32-32 32H544v64c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32V288 224 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32zM416 224v64H224V224H416z" /></svg>
                        <p>Free Gym</p>
                        <h3>Always Free Time</h3>
                    </div>
                </div>


                {{-- for carosel  --}}
                <div class="right">
                    <?php
          $rooms=$hotel?->rooms()->get()
          ?>
                    <div class="owl-carousel owl-theme">
                        @foreach ($rooms as $room)
                        {{-- @dd($room) --}}
                        <div class="item">
                            <img src="{{$room->img_1}}" alt="img" style="width: 550px;height: 550px;">
                        </div>
                        @endforeach
                    </div>
                    {{-- <a href="/image/home.png">img</a>
        <img src="/image/pngwing.com.png" alt=""> --}}
                </div>

                {{-- --}}




            </div>
        </div>
        </div>
    </section>


    {{-- <section class="offer2 about wrapper timer top" id="shop">
    <div class="container">
      <div class="heading">
        <h5>EXCLUSIVE OFFERS </h5>
        <h3>You can get an exclusive offer </h3>
      </div>

      <div class="content grid  top">
        <div class="box">
          <h5>UP TO 30% OFF</h5>
          <h3>Swimming for man</h3>
          <span>4.5 <label>(432 Reviews)</label> </span>
          <p>Swimming doller dolor sit aet odu tur adiing elitse</p>
          <div class="flex">
            <i class="fal fa-alarm-clock"> Duration: 2Hours</i>
            <i class="far fa-dot-circle"> 18+ years</i>
          </div>
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
        <div class="box">
          <h5>UP TO 30% OFF</h5>
          <h3>Swimming for man</h3>
          <span>4.5 <label>(432 Reviews)</label> </span>
          <p>Swimming doller dolor sit aet odu tur adiing elitse</p>
          <div class="flex">
            <i class="fal fa-alarm-clock"> Duration: 2Hours</i>
            <i class="far fa-dot-circle"> 18+ years</i>
          </div>
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
        <div class="box">
          <h5>UP TO 30% OFF</h5>
          <h3>Swimming for man</h3>
          <span>4.5 <label>(432 Reviews)</label> </span>
          <p>Swimming doller dolor sit aet odu tur adiing elitse</p>
          <div class="flex">
            <i class="fal fa-alarm-clock"> Duration: 2Hours</i>
            <i class="far fa-dot-circle"> 18+ years</i>
          </div>
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section> --}}

    {{-- comment --}}
    <section class="customer top" id="comment" id="testimonials">
        <div class="container" style="margin-bottom: 50px">
            <div class="heading" style="margin-bottom: 20px">
                {{-- <h5>TESTIMONIALS </h5> --}}
                <h5>What customers say </h5>
            </div>

            <div class="owl-carousel owl-theme mtop" style="background-color: #FAF3E7;">
                <div class="item">
                    <div class="img" style="padding-left: 45%">
                        <img src="/image/kkm.jpg" alt="" style="width: 80px;height: 70px;">
                    </div>

                    <h3 style="color: #24416B;font-weight: bolder">Jones</h3>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div><br>
                    {{-- <h3>Excellent Swimming</h3><br> --}}
                    <h5>Make it easy for customers to leave reviews by providing links to your review pages on your website, social media profiles, and email campaigns.</h5><br>

                    {{-- --}}
                    <br>
                    <div class="small d-flex justify-content-start">
                        <a href="#!" class="d-flex align-items-center me-3" style="text-decoration: none">
                            <i class="far fa-thumbs-up me-2"></i>
                            <p class="mb-0">Like</p>
                        </a>
                        <a href="#!" class="d-flex align-items-center me-3" style="text-decoration: none">
                            <i class="far fa-comment-dots me-2"></i>
                            <p class="mb-0">Comment</p>
                        </a>
                        <a href="#!" class="d-flex align-items-center me-3" style="text-decoration: none">
                            <i class="fas fa-share me-2"></i>
                            <p class="mb-0">Share</p>
                        </a>
                    </div>
                    {{-- --}}

                    <div class="admin flex">

                        <div class="text">

                            {{-- <span>Manager</span> --}}
                        </div>
                    </div>
                </div>
                {{-- --}}
                @foreach( $comments as $comment)
                <div class="item">
                    <div class="img" style="padding-left: 45%">
                        <img src="{{$comment->user->image}}" alt="" style="width: 60px;height: 60px;">
                    </div>

                    <h3 style="color: #24416B;font-weight: bolder">{{$comment->user->name}}</h3>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div><br>
                    {{-- <h3>Excellent Swimming</h3><br> --}}
                    <h5>{{$comment->body}}</h5><br>

                    {{-- --}}
                    <div class="d-flex">
                        @if(auth()->user()->name === $comment->user->name)
                        <button class="btn btn-warning" style="margin-right: 20px; background-color: transparent;border: none"><a href="/comment/{{$comment->id}}/edit" style="color: #d7f832;text-decoration: none">Edit</a></button>
                        <form action="/comment/{{$comment->id}}/delete" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" style="margin-right: 20px;background-color: transparent;color: red;border: none">
                                Delete
                            </button>
                        </form>
                        @endif
                    </div> <br>
                    <div class="small d-flex justify-content-start">
                        <a href="#!" class="d-flex align-items-center me-3" style="text-decoration: none">
                            <i class="far fa-thumbs-up me-2"></i>
                            <p class="mb-0">Like</p>
                        </a>
                        <a href="#!" class="d-flex align-items-center me-3" style="text-decoration: none">
                            <i class="far fa-comment-dots me-2"></i>
                            <p class="mb-0">Comment</p>
                        </a>
                        <a href="#!" class="d-flex align-items-center me-3" style="text-decoration: none">
                            <i class="fas fa-share me-2"></i>
                            <p class="mb-0">Share</p>
                        </a>
                    </div>
                    {{-- --}}

                    <div class="admin flex">

                        <div class="text">

                            {{-- <span>Manager</span> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <hr>
        {{-- --}}
        <div class="container my-5 py-5" style="margin-top: -10px">
            <div class="heading" style="margin-bottom: 30px">
                <h5>You can comment here <svg xmlns="http://www.w3.org/2000/svg" style="width: 30px;height: 30px;" viewBox="0 0 512 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#FFD43B" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm130.7 57.9c-4.2-13.6 7.1-25.9 21.3-25.9H364.5c14.2 0 25.5 12.4 21.3 25.9C369 368.4 318.2 408 258.2 408s-110.8-39.6-127.5-94.1zM144.4 192a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm165.8 21.7c-7.6 8.1-20.2 8.5-28.3 .9s-8.5-20.2-.9-28.3c14.5-15.5 35.2-22.3 54.6-22.3s40.1 6.8 54.6 22.3c7.6 8.1 7.1 20.7-.9 28.3s-20.7 7.1-28.3-.9c-5.5-5.8-14.8-9.7-25.4-9.7s-19.9 3.8-25.4 9.7z" /></svg>
                </h5>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">

                    <form action="/comment/{{$package->id}}" method="get">
                        @csrf
                        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                            <div class="d-flex flex-start w-100">
                                <img class="rounded-circle shadow-1-strong me-3" src="{{auth()->user()->image}}" alt="avatar" style="width: 40px;height: 40px;" />
                                <div class="form-outline w-100">
                                    <textarea class="form-control" id="comment" rows="4" name="comment" style="background: #fff;" placeholder="Text comment here"></textarea>
                                    <label class="form-label" for="textAreaExample">Message</label>
                                </div>
                            </div>
                            <div class="float-end mt-2 pt-1">
                                <button type="submit" class="btn  btn-sm" style="margin-top: 50px;border: none;background-color: #CC8C18;color:white">Post comment<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: white" viewBox="0 0 10 16">
                                        <path fill-rule="evenodd" d="M10 8L4 3v3H0v4h4v3l6-5z" fill="currentColor" /></svg></button>
                                <button type="submit" class="btn btn-outline-primary btn-sm" style="margin-top: 50px;border-color: #CC8C18">Cancel</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        <hr>
        {{-- --}}
    </section>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true
            , margin: 10
            , nav: false
            , dots: false
            , navText: ["<i class='far fa-long-arrow-alt-left'></i>", "<i class='far fa-long-arrow-alt-right'></i>"]
            , responsive: {
                0: {
                    items: 1
                }
                , 768: {
                    items: 1
                }
                , 1000: {
                    items: 1
                }
            }
        })

    </script>


    <section class="blog top" id="blog">
        <div class="container">
            <div class="heading">
                <h5>OUR PACKAGE BLOG</h5>
                <h3>News & articles updates</h3>
            </div>

            <div class="content grid mtop">
                <div class="box">
                    <div class="img">
                        <img src="{{$package->img_3}}" alt="" style="width: 400px;height: 350px;">
                        <span>Package</span>
                    </div>
                    <div class="text">
                        <div class="flex">
                            <i class="far fa-user"> <label>Admin</label> </i>
                            <i class="far fa-comments"> <label>Comment</label> </i>
                        </div>
                        <h3>Celebrating Decade Years Of Hotel In 2020</h3>
                        <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        {{-- <a href="#">Read More <i class='far fa-long-arrow-alt-right'></i> </a> --}}
                    </div>
                </div>
                <div class="box">
                    <div class="img">
                        <img src="{{$package->img_4}}" alt="" style="width: 400px;height: 350px;">
                        <span>Package</span>
                    </div>
                    <div class="text">
                        <div class="flex">
                            <i class="far fa-user"> <label>Admin</label> </i>
                            <i class="far fa-comments"> <label>Comment</label> </i>
                        </div>
                        <h3>Celebrating Decade Years Of Hotel In 2020</h3>
                        <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        {{-- <a href="#">Read More <i class='far fa-long-arrow-alt-right'></i> </a> --}}
                    </div>
                </div>
                <div class="box">
                    <div class="img">
                        <img src="{{$package->img_5}}" alt="" style="width: 400px;height: 350px;">
                        <span>Package</span>
                    </div>
                    <div class="text">
                        <div class="flex">
                            <i class="far fa-user"> <label>Admin</label> </i>
                            <i class="far fa-comments"> <label>Comment</label> </i>
                        </div>
                        <h3>Celebrating Decade Years Of Hotel In 2020</h3>
                        <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        {{-- <a href="#">Read More <i class='far fa-long-arrow-alt-right'></i> </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="map top">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14131.036667732067!2d85.32395955!3d27.69383745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1638187678048!5m2!1sen!2snp" width="600" height="450" style="border:0;"
      allowfullscreen="" loading="lazy"></iframe>
  </section> --}}

    <footer class="ftco-footer ftco-bg-dark ftco-section" style="padding-top: 100px;background-color: #222831">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        {{-- <h2 class="ftco-heading-2">dirEngine</h2> --}}
                        <img src="/image/pngegg.png" style="width: 100px;height: 100px;color: #f85959" alt=""><span style="color: #f85959;font-size: 20px;font-weight: bold">LOCAL 14 </span>

                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled" style="text-decoration: none">
                            <li><a href="#" class="py-2 d-block" style="text-decoration: none;color: white">About</a></li>
                            <li><a href="#" class="py-2 d-block" style="text-decoration: none;color: white">Service</a></li>
                            <li><a href="#" class="py-2 d-block" style="text-decoration: none;color: white">Terms and Conditions</a></li>
                            <li><a href="#" class="py-2 d-block" style="text-decoration: none;color: white">Become a partner</a></li>
                            <li><a href="#" class="py-2 d-block" style="text-decoration: none;color: white">Best Price Guarantee</a></li>
                            <li><a href="#" class="py-2 d-block" style="text-decoration: none;color: white">Privacy and Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Customer Support</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block" style="text-decoration: none;color: white">FAQ</a></li>
                            <li><a href="#" class="py-2 d-block" style="text-decoration: none;color: white">Payment Option</a></li>
                            <li><a href="#" class="py-2 d-block" style="text-decoration: none;color: white">Booking Tips</a></li>
                            <li><a href="#" class="py-2 d-block" style="text-decoration: none;color: white">How it works</a></li>
                            <li><a href="#" class="py-2 d-block" style="text-decoration: none;color: white">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">No. (64/66), Hmawbi Main Road, Hmawbi Township, Yangon, Myanmar.</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text" style="text-decoration: none;color: white">+95 9339 506 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text" style="text-decoration: none;color: white">local14@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
</body>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}


</html>
