<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOCAL14AGENCY</title>
  <link rel="shortcut icon" href="/image/pngegg.png" type="image/x-icon">

  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
}

h1, h2 {
  font-family: sans-serif;
  font-weight: 400;
}

a {
  text-decoration: none;
}

li {
  list-style: none;
}

.flex {
  display: flex;
}

.flex_space {
  display: flex;
  justify-content: space-between;
}

button {
  border: none;
  background: none;
  outline: none;
  transition: 0.5s;
  cursor: pointer;
}

.primary-btn {
  padding: 15px 40px;
  background: #7fc142;
  font-weight: bold;
  color: white;
}

.secondary-btn {
  padding: 15px 40px;
  background: none;
  border: 2px solid white;
  font-weight: bold;
  color: white;
}

.container {
  max-width: 85%;
  margin: auto;
}
/* *************** nav* */



/* *************** nav* */
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
  max-width: 100%;
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

  backdrop-filter: blur(10px); 
  /* padding-top: 10px; */
  /* padding: 10px 0 10px 0; */
  /* padding: 20px; */
  color: rgb(7, 7, 7);
  /* background-color: #CC8C18; */
 /* padding-bottom: -25px; */
    font-size: 16px;
    padding-top: .9rem;
    padding-bottom: .9rem;
    padding-left: 20px;
    padding-right: 20px;
    font-weight: 400;
    opacity: 1 !important
}

.navbar {
  /* padding: -20px; */
  display: flex;
  align-items: center;
  justify-content: space-evenly;


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
  color: #fd4949;
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
  margin-top: 20px;
}

header.sticky {
  z-index: 9999;
  position: fixed;
  width: 100%;
  background: #f1f7f6;
  transition: 0.5s;
  /* height: 12vh; */
  transition: 0.5s;
  top: 0;
  color: #0e0e0e;
  /* padding: 20px 0 0 0; */
  /* padding-bottom: -40px; */
  margin-top: -15px;
  padding: 10px;
}

header.sticky ul li a{
  color: rgb(14, 14, 14);
}

header.sticky i{
  color: rgb(14, 14, 14);

}
header.sticky svg{
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

  /* .nav-menu {
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
  } */

  header.sticky .nav-menu {
    top: 5rem;
  }

  header ul li a {
    color: rgb(15, 15, 15);
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
/*--------home---------*/
.home {
  height: 100vh;
  color: #fff;
}

.home img {
  width: 100%;
  height: 100vh;
  margin-top: -50px;
}

.home .text {
  position: absolute;
  top: 35%;
  left: 5%;
}

.home .text h1 {
  font-size: 80px;
  font-family: serif;
  font-weight: 400;
}

.home p {
  margin: 20px 0;
}

.home button {
  margin-right: 20px;
}

/* .owl-nav .owl-prev,
.owl-nav .owl-next {
  position: absolute;
  top: 40%;
  height: 50px;
  width: 50px;
  background: rgba(0, 0, 0, 0.5) !important;
  color: #fff;
}

.owl-nav .owl-prev {
  left: 0;
}

.owl-nav .owl-next {
  right: 0;
} */

/*--------home---------*/
/*--------book---------*/
.grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  grid-gap: 20px;
}

input {
  outline: none;
  border: none;
  width: 100%;
}

.book {
  padding: 40px 0;
  background: #282834;
  color: #fff;
}

h1 {
  font-family: serif;
}

.book h1 {
  font-size: 28px;
}

.book h1 span {
  color: #7fc142;
}

.book input {
  padding: 20px;
}

.book input:nth-last-child(1) {
  background: #7fc142;
  color: #fff;
}

/*--------book---------*/
/*--------about---------*/
.left, .right {
  width: 50%;
  padding: 30px;
}

.top {
  margin-top: 80px;
}

.mtop {
  margin-top: 40px;
}

.heading h1 {
  font-size: 100px;
  font-weight: 500;
  opacity: 0.1;
  font-family: serif;
  position: absolute;
  top: -30px;
}

.heading h2 {
  margin: 30px 0;
  font-size: 45px;
  font-family: serif;
  font-weight: 400;
}

.about .heading h1 {
  top: 55px;
}

.about {
  position: relative;
}

.about .left {
  margin-top: 30px;
}

.about p {
  font-size: 15px;
}

.about button {
  margin: 30px 0;
}

/*--------about---------*/
/*--------counter---------*/
.counter {
  background-image: url("/images/background-1.png");
  background-size: cover;
  background-repeat: no-repeat;
  height: 30vh;
  width: 100%;
  color: #fff;
}

.counter .grid {
  grid-template-columns: repeat(4, 1fr);
  text-align: center;
  place-items: center;
  padding-top: 60px;
}

.counter h1 {
  font-size: 50px;
}

.counter hr {
  width: 50%;
  margin: 10px auto;
  background: #7fc142;
  height: 2px;
  border: none;
}

.counter2 hr {
  width: 50%;
  /* margin: 10px auto; */
  background: #2ef718;
  height: 3px;
  border: none;
  margin-top: -20px;
  margin-left: 20px;
  margin-bottom: 20px;
}

/*--------counter---------*/
/*--------rooms---------*/
.rooms {
  position: relative;
}

.rooms .text {
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-top: none;
  padding: 30px;
}

.rooms i {
  font-size: 12px;
  color: #fbb234;
  margin: 15px 0;
  margin-right: 5px;
}

.rooms p {
  margin: 20px 0;
  opacity: 0.7;
}

.rooms h3 {
  font-size: 30px;
  line-height: 20px;
  margin-left: 20px;
  font-weight: 500;
  color: #7fc142;
}

.rooms h3 span {
  font-size: 15px;
  font-weight: 400;
  color: #000;
}

.owl-carousel1 .owl-nav .owl-prev,
.owl-carousel1 .owl-nav .owl-next {
  position: absolute;
  top: -20%;
  height: 50px;
  width: 50px;
  background: #CC8C18 !important;
}

.owl-carousel1 .owl-nav .owl-prev i,
.owl-carousel1 .owl-nav .owl-next i {
  color: #fff;
}

.owl-carousel1 .owl-nav .owl-prev {
  left: 90%;
}

.owl-carousel1 .owl-nav .owl-next {
  right: 0;
}

/*--------rooms---------*/
/*--------gallery---------*/
.gallery {
  position: relative;
}

.gallery img {
  width: 100%;
  /* height: 100%; */
}

.gallery .img {
  position: relative;
}

.gallery .img::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  background: rgba(126, 193, 65, 0.86);
  width: 255px;
  height: 251px;
  z-index: 2;
  opacity: 0;
  transition: 0.5s;
}

.overlay {
  position: absolute;
  top: 35%;
  left: 25%;
  z-index: 3;
  text-align: center;
  color: white;
  opacity: 0;
  transition: 0.5s;
}

.gallery span {
  width: 50px;
  height: 50px;
  line-height: 50px;
  border-radius: 50%;
  text-align: center;
  border: 2px solid white;
}

.overlay h3 {
  margin-top: 20px;
  font-weight: 500;
}

.gallery .items:hover .overlay,
.gallery .items:hover .img::after {
  opacity: 1;
  cursor: pointer;
}

.gallery .owl-nav .owl-prev {
  left: 85%;
}

.gallery .owl-nav .owl-next {
  right: 5%;
}

.gallery .owl-nav .owl-next,
.gallery .owl-nav .owl-prev {
  top: -40%;
}

/*--------gallery---------*/
/*--------services---------*/
.services {
  position: relative;
}

.grid2 {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 30px;
}

.services .left {
  padding: 30px 0;
}

.services .box {
  border: 1px solid rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: 0.5s;
  padding: 20px;
}

.services .box .text {
  padding: 30px 0;
  border: 1px dashed #fff;
}

.services i {
  font-size: 50px;
  color: #CC8C18;
  transition: 0.5s;
}

.services h3 {
  font-size: 20px;
  font-weight: 400;
  margin-top: 20p;
  transition: 0.5s;
}

.services img {
  width: 100%;
  height: 100%;
}

.services .box:hover {
  background: #CC8C18;
  color: #fff;
  cursor: pointer;
}

.services .box:hover i,
.services .box:hover h3 {
  color: #fff;
}

/*--------services---------*/
/*--------Customer---------*/
.Customer {
  background-image: url("/images/background-2.png");
  background-size: cover;
  background-repeat: no-repeat;
  height: 70vh;
  width: 100%;
  color: #fff;
  text-align: center;
}

.Customer .container {
  max-width: 70%;
}

.Customer .item {
  padding: 10% 0;
}

.Customer i {
  width: 100px;
  height: 100px;
  background: rgba(126, 193, 64, 0.57);
  line-height: 100px;
  border-radius: 50%;
  font-size: 50px;
  margin-bottom: 50px;
}

.Customer p {
  line-height: 30px;
}

.Customer h3 {
  margin-top: 20px;
  color: #7fc142;
}

.Customer span {
  font-size: 15px;
}

.owl-carousel2 .owl-dots {
  position: absolute;
  bottom: 70px;
  left: 46.6%;
}

.owl-carousel2 .owl-dots i {
  color: #CC8C18;
}

.owl-carousel2 .owl-dots i:hover button {
  color: #CC8C18 !important;
}

.owl-carousel2 span {
  border: 2px solid #fff;
  background: transparent !important;
}

.owl-carousel2 .active span {
  background: #CC8C18 !important;
  border: 2px solid #CC8C18;
}

/*--------Customer---------*/
/*--------news---------*/
.news {
  position: relative;
}

.news i {
  color: #7fc142;
  text-transform: capitalize;
  font-size: 18px;
}

.news label {
  margin-top: 12px;
  margin-right: 20px;
}

.news .left {
  padding: 30px 0;
  width: 65%;
}

.news .right {
  width: 35%;
}

.news img {
  width: 100%;
}

.news .items p {
  padding-top: 20px;
  border-top: 1px solid rgba(0, 0, 0, 0.2);
}

.news .box {
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  padding: 40px 0;
}

.news .box:nth-child(1) {
  padding-top: 0;
}

.news .box:nth-last-child(1) {
  border-bottom: none;
}

.news .box img {
  width: 110px;
  height: 114px;
}

.news .stext {
  padding: 0 0 0 20px;
}

/*--------news---------*/
/*--------newsletter---------*/
.newsletter {
  position: relative;
}

.newsletter .container {
  background: #7fc142;
  padding: 40px 30px;
  position: absolute;
  top: -70px;
  left: 8%;
  width: 100%;
}

.newsletter h1 {
  width: 100%;
  font-size: 30px;
  color: #fff;
  margin-top: 10px;
}

.newsletter input {
  padding: 20px;
}

.newsletter input:nth-last-child(2) {
  width: 80%;
  background: rgba(255, 255, 255, 0.4);
}

.newsletter input:nth-last-child(1) {
  margin-left: 20px;
  width: 30%;
  text-align: center;
  font-weight: bold;
  text-transform: uppercase;
}

/*--------newsletter---------*/
/*--------footer---------*/
footer {
  background: #282834;
  color: #b6b7b9;
  padding: 10% 0 5% 0;
}

footer .grid {
  grid-template-columns: 6fr 3fr 3fr;
}

footer p {
  color: #b6b7b9;
  font-size: 15px;
  line-height: 25px;
}

footer .icon i {
  margin: 20px 20px 20px 0;
  color: #b6b7b9;
}

footer h2 {
  color: #fff;
  margin-bottom: 10px;
}

footer li {
  margin-bottom: 20px;
}

footer i {
  color: #7fc142;
  margin: 20px 0;
  margin-right: 20px;
}

footer label {
  margin: 20px 0;
}

.legal {
  padding: 15px 0;
  background: #282834;
  color: #b6b7b9;
  border-top: 1px solid rgba(255, 255, 255, 0.2);
}

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
  .comment-box {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .comment-box textarea {
            width: 100%;
            height: 100px;
            margin-bottom: 10px;
            padding: 8px;
            box-sizing: border-box;
            resize: none;
        }

        .comment-box button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .comment-box button:hover {
            background-color: #45a049;
        }

        /* h1{
          font-family: "Aladin", system-ui;
        } */
        
      

@import url('https://fonts.googleapis.com/css2?family=Mr+Dafoe&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Aladin&family=Mr+Dafoe&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
</style>
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}

<body>

  <header class="header">
    <div class="container" style="padding-right:120px">
      <nav class="navbar flex1 " style="display: flex;justify-content: space-between;align-items: center;">
        <div class="logo" style="margin-top: -10px;backgroud-image: none;display: flex">
          {{-- <img src="/image/logo.png" alt=""> --}}
          <img src="/image/pngegg.png" style="width: 100px;height: 100px;color: #f85959;margin-left: 150px" alt=""><span style="color: #f85959;font-weight: bold;font-size: 20px;padding-top: 40px">LOCAL  14 </span>

        </div>

        <ul class="nav-menu" style="color: #000;gap: 10px;">
          <li> <a href="/Allpackages" style="text-decoration: none;color: #000">Home</a> </li>
          <li> <a href="/Allpackages" style="text-decoration: none;color: #000">Packages</a> </li>         
          <li> <a href="/Allhotel" style="text-decoration: none;color: #000">Hotels</a> </li>
          <li> <a href="/blog" style="text-decoration: none;color: #000">Blog</a> </li>
          <li> <a href="/contact" style="text-decoration: none;color: #000">Contact</a> </li>
          <li> <a href="/about" style="text-decoration: none;color: #000">About</a> </li>
          <li> <a href="/" style="text-decoration: none;color: #000">Travel info</a> </li>
         
        </ul>
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

      
        <div class="sticky" style="display: flex;">
        
            
            <div class="sticky" style="margin-top: -10px;">
              {{--  --}}
              <li class="nav-item cta" style="display: flex">
               <div class="flex">
                <div class="">
                  <a href="/room_checkOut" class="nav-link" style="border: none;background-color: transparent;font-size: 20px;margin-top: -7px;color: aliceblue"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" style="color: black" viewBox="0 0 24 24"><circle cx="10.5" cy="19.5" r="1.5" fill="currentColor"/><circle cx="17.5" cy="19.5" r="1.5" fill="currentColor"/><path fill="currentColor" d="M21 7H7.334L6.18 4.23A1.995 1.995 0 0 0 4.333 3H2v2h2.334l4.743 11.385c.155.372.52.615.923.615h8c.417 0 .79-.259.937-.648l3-8A1.003 1.003 0 0 0 21 7m-4 6h-2v2h-2v-2h-2v-2h2V9h2v2h2z"/></svg>
                    
                 </div>
                  <div class="" style="background-color: #f31e0b;border-radius: 50%;width: 18px;height: 25px;text-align: center ;color: white;padding-bottom: 10px;margin-bottom: 5px">
                    <x-roomcountforcustomer/>
                  </div>
               </div>
             
             </li>
            </div>
           
          

		      @if (auth()->check())
           <div class="" >
            <p class="nav-link icon" style="color: #020202;margin-top: -7px"><a href="/Profile" class="nav-link" style="border: none;background-color: transparent;font-size: 20px;margin-top: 3px;color: #080808"><i class="fas fa-user fa-lg "  class="nav-link" style="color: #000"></i></a> </p>
           </div>
		      @endif
          
          
         
        </div>

        

      </nav>
    </div>
  </header>

 {{--  --}}


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
        {{$slot}}


  
  <footer class="ftco-footer ftco-bg-dark ftco-section" style="padding-top: 100px;background-color: #222831">
    <div class="container" >
      <div class="row mb-5" style="display: flex;gap: 100px">
        <div class="col-md" style="width: 300px">
          <div class="ftco-footer-widget mb-4">
            {{-- <h2 class="ftco-heading-2">dirEngine</h2> --}}
          <div class="" style="display: flex">
            <img src="/image/pngegg.png" style="width: 100px;height: 100px;color: #f85959" alt="">
            <span style="color: #f85959;font-size: 20px;font-weight: bold;margin-top: 30px  " >LOCAL  14 </span>
          </div>

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

  {{-- <div class="legal">
    <p class="container">Copyright (c) 2022 Copyright Holder All Rights Reserved.</p>
  </div> --}}



  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
</body>

</html>