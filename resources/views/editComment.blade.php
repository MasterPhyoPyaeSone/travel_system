<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Hotel Booking Website</title>
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
  background: #dcdbdb;
  /* padding: 15px 0 15px 0; */
  color: rgb(6, 5, 5);
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
  font-size: 15px;
  color: white;
  text-transform: uppercase;
  font-weight: 500;
  transition: 0.5s;
  color: #000;
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
  background: #313538;
  transition: 0.5s;
  height: 12vh;
  transition: 0.5s;
  top: 0;
  padding: 30px 0 0 0;
}

header.sticky ul li a {
  color: white;
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

.left, .right {
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
  width: 100%;
  height: 100%;
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
  .left, .right {
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
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

#comment {
  width: 100%;
  min-height: 200px;
  padding: 10px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  background-color: #fff;
  box-shadow: 0 0 5px rgba(0,0,0,0.1);
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
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">

</head>

<body>
 
  <header class="header">
    <div class="container">
      <nav class="navbar flex1" style="display: flex;justify-content: space-between;align-items: center;">
        <div class="logo" style="margin-top: -10px;backgroud-image: none;margin-left: 100px">
          {{-- <img src="/image/logo.png" alt=""> --}}
          <img src="/image/pngegg.png" style="width: 100px;height: 100px;color: #f85959" alt=""><span style="color: #f85959;font-weight: bold;font-size: 20px">LOCAL  14 </span>

        </div>

        <div class="d">
            
        <ul class="nav-menu" style="margin-left: 20px;display: flex;align-items: center;justify-content: space-between;gap: 20px;">
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

        <script>$('.dropdown').on('mouseover', function() {
          $('.dropdown-content').css('display', 'block');
        });
        
        $('.dropdown').on('mouseout', function() {
          $('.dropdown-content').css('display', 'none');
        });</script>

        <div class="head_contact">
          {{-- <i class="fas fa-phone-volume"></i>
          <span>+000 1234 5678</span>         --}}
          {{-- <span><a href="">Cart</a></span> --}}

        </div>
        <div class="sticky" style="display: flex;">
         

		      @if (auth()->check())
           <div class="">
            <p class="nav-link icon" style="color: #fff;margin-right: 30px;margin-top: -7px"><a href="/Profile" class="nav-link" style="border: none;background-color: transparent;font-size: 20px;margin-top: 3px;color: #070707"><i class="fas fa-user fa-lg icon"  class="nav-link" ></i></a> </p>
           </div>
		      @endif
          
          <div class="d-flex" style="">
            
            <div class="sticky">
              <x-cart/>
            </div>
            <div class="" style="margin-left: -35px;margin-top: -10px;">
              <p style="background-color: #f31e0b;border-radius: 50%;width: 18px;height: 25px;text-align: center ;color: white;padding-bottom: 10px;margin-bottom: 5px">{{$count}}</p>
            </div>
          </div>
         
        </div>

        

      </nav>
    </div>
  </header>
  @if(session()->has('edit'))
  <div class="alert alert-success" role="alert">
    Successfully update your comment 
  
 </div>
@endif



      <div class="container" style="margin-top: 10%;margin-bottom: 20%; width: 800px;">
          
        <form action="/comment/{{$comment->id}}/edit" method="post">
         @method('PATCH')
         @csrf
        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
          <div class="d-flex flex-start w-100">
            <img class="rounded-circle shadow-1-strong me-3"
              src="{{auth()->user()->image}}" alt="avatar" width="40"
              height="40" />
            <div class="form-outline w-100">
              <textarea class="form-control" id="comment" rows="4" name="comment"
                style="background: #fff;">{{$comment->body}}</textarea>
              <label class="form-label" for="textAreaExample">Message</label>
            </div>
          </div>
          <div class="float-end mt-2 pt-1">
            <button type="submit" class="btn btn-primary btn-sm" style="background-color: #CC8C18;border: none">Update comment</button>
            <button type="submit" class="btn btn-outline-primary btn-sm" style="border-color: #CC8C18">Cancel</button>
          </div>
          </form>
        </div>
      </div>
    



      <footer class="ftco-footer ftco-bg-dark ftco-section" style="padding-top: 100px;background-color: #222831">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                {{-- <h2 class="ftco-heading-2">dirEngine</h2> --}}
              <img src="/image/pngegg.png" style="width: 100px;height: 100px;color: #f85959" alt=""><span style="color: #f85959;font-size: 20px;font-weight: bold">LOCAL  14 </span>
    
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>