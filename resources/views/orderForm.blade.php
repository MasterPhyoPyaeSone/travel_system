<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        font-family: 'Montserrat', sans-serif
    }

    body {
        padding: 5px
    }

    p {
        margin: 0%
    }

    .container {
        max-width: 900px;
        margin: 20px auto;
        overflow: hidden
    }

    .box-1 {
        max-width: 450px;
        padding: 10px 40px;
        user-select: none
    }

    .box-1 img.pic {
        width: 20px;
        height: 20px;
        object-fit: cover
    }

    .box-1 img.mobile-pic {
        width: 100%;
        height: 200px;
        object-fit: cover
    }

    .box-1 .name {
        font-size: 11px;
        font-weight: 600
    }

    .dis {
        font-size: 12px;
        font-weight: 500
    }

    .box-2 {
        max-width: 450px;
        padding: 10px 40px
    }

    .box-2 .box-inner-2 input.form-control {
        font-size: 12px;
        font-weight: 600
    }

    .box-2 .box-inner-2 .inputWithIcon {
        position: relative
    }

    .box-2 .box-inner-2 .inputWithIcon span {
        position: absolute;
        left: 15px;
        top: 8px
    }

    .box-2 .box-inner-2 .inputWithcheck {
        position: relative
    }

    .box-2 .box-inner-2 .inputWithcheck span {
        position: absolute;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: green;
        font-size: 12px;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        right: 15px;
        top: 6px
    }

    .form-control:focus,
    .form-select:focus {
        box-shadow: none;
        outline: none;
        border: 1px solid #7700ff
    }

    .border:focus-within {
        border: 1px solid #7700ff !important
    }

    .box-2 .card-atm .form-control {
        border: none;
        box-shadow: none
    }

    .form-select {
        border-radius: 0;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px
    }

    .address .form-control.zip {
        border-radius: 0;
        border-bottom-left-radius: 10px
    }

    .address .form-control.state {
        border-radius: 0;
        border-bottom-right-radius: 10px
    }

    .box-2 .box-inner-2 .btn.btn-outline-primary {
        width: 120px;
        padding: 10px;
        font-size: 11px;
        padding: 0% !important;
        display: flex;
        align-items: center;
        border: none;
        border-radius: 0;
        background-color: whitesmoke;
        color: black;
        font-weight: 600
    }

    .box-2 .box-inner-2 .btn.btn-primary {
        background-color: #7700ff;
        color: whitesmoke;
        font-size: 14px;
        display: flex;
        align-items: center;
        font-weight: 600;
        justify-content: center;
        border: none;
        padding: 10px
    }

    .box-2 .box-inner-2 .btn.btn-primary:hover {
        background-color: #7a34ca
    }

    .box-2 .box-inner-2 .btn.btn-primary .fas {
        font-size: 13px !important;
        color: whitesmoke
    }

    .carousel-indicators [data-bs-target] {
        width: 10px;
        height: 10px;
        border-radius: 50%
    }

    .carousel-inner {
        width: 100%;
        height: 200px
    }

    .carousel-item img {
        object-fit: cover;
        height: 100%
    }

    .carousel-control-prev {
        transform: translateX(-50%);
        opacity: 1
    }

    .carousel-control-prev:hover .fas.fa-arrow-left {
        transform: translateX(-5px)
    }

    .carousel-control-next {
        transform: translateX(50%);
        opacity: 1
    }

    .carousel-control-next:hover .fas.fa-arrow-right {
        transform: translateX(5px)
    }

    .fas.fa-arrow-left,
    .fas.fa-arrow-right {
        font-size: 0.8rem;
        transition: all .2s ease
    }

    .icon {
        width: 30px;
        height: 30px;
        background-color: #f8f9fa;
        color: black;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transform-origin: center;
        opacity: 1
    }

    .fas.fa-times {
        color: red
    }

    .fas,
    .fab {
        color: #6d6c6d
    }

    ::placeholder {
        font-size: 12px
    }

    .couponCode {
        text-transform: uppercase;
        font-size: 0.7rem
    }

    #code {
        pointer-events: none;
        font-weight: 600
    }

    .close {
        cursor: pointer
    }

    .info {
        transform: translateX(-500px);
        animation: moving 1.5s;
        animation-fill-mode: forwards
    }

    .updates {
        transform: translateX(-500px);
        animation: moving 1.7s;
        animation-fill-mode: forwards
    }

    .different {
        transform: translateX(-500px);
        animation: moving 1.9s;
        animation-fill-mode: forwards
    }

    .black {
        transform: translateX(-500px);
        animation: moving 2.1s;
        animation-fill-mode: forwards
    }

    .white {
        transform: translateX(-500px);
        animation: moving 2.3s;
        animation-fill-mode: forwards
    }

    .pastel {
        transform: translateX(-500px);
        animation: moving 2.5s;
        animation-fill-mode: forwards
    }

    .footer {
        transform: translateX(-500px);
        animation: moving 2.6s;
        animation-fill-mode: forwards
    }

    @keyframes moving {
        0% {
            opacity: 0;
            transform: translateX(-500px)
        }

        100% {
            opacity: 1;
            transform: translateX(0px)
        }
    }

    .box-2 {
        transform: translateY(-500px);
        animation: img-top 2.5s;
        animation-fill-mode: forwards
    }

    .user {
        transform: translateY(-500px);
        animation: img-top 2.5s;
        animation-fill-mode: forwards
    }

    .userdetails {
        transform: translateY(-500px);
        animation: img-top 2.0s;
        animation-fill-mode: forwards
    }

    .imgdetails {
        transform: translateY(-500px);
        animation: img-top 1.5s;
        animation-fill-mode: forwards
    }

    @keyframes img-top {
        0% {
            opacity: 0;
            transform: translateY(-500px)
        }

        100% {
            opacity: 1;
            transform: translateY(0px)
        }
    }

    @media (max-width:768px) {
        .container {
            max-width: 700px;
            margin: 10px auto
        }

        .box-1,
        .box-2 {
            max-width: 600px;
            padding: 20px 90px;
            margin: 20px auto
        }

        .box-2 {
            transform: translateX(-500px);
            animation: box-side 2.6s;
            animation-fill-mode: forwards
        }

        @keyframes box-side {
            0% {
                opacity: 0;
                transform: translateX(-500px)
            }

            100% {
                opacity: 1;
                transform: translateX(0px)
            }
        }
    }

    @media (max-width:426px) {

        .box-1,
        .box-2 {
            max-width: 400px;
            padding: 20px 10px
        }

        ::placeholder {
            font-size: 9px
        }
    }
.header{
  /* color: black; */
  display: flex;
  justify-content: space-between;
  /* align-items: center; */
  position: relative;
  /* top: 0;
  right: 0;
  left: 0; */
  box-shadow: 0 .5rem .5rem rgb(0, 0, 0, .1);

}
.header #logo{
  list-style: none;
  text-decoration: none;
  width: 80px;
}
.header .btn{
  border: 1px solid gray;
  padding: 3px 10px;
  border-radius: 10px;
}
.header .navbar a{
  font-size: 1.7rem;
  margin-left: 5.5rem;
  list-style: none;
  text-decoration: none;
  color: white;

}
.header .navbar a:hover{
 color: black;
}
.header .icons{
  font-size: 2rem;
 
}

.header .icons div{
  margin-left: 1rem;
  cursor: pointer;
}
.header .icons div:hover{
  color: var(--maincolor);
}
.header .icons #menu-bars{
  display: none;
}
.header .search-box{
  position: absolute;
  top: 110%;
  right: 100%;
  width: 50%;
  border-radius: 15px;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.header .search-box input{
  padding: 1.5rem;
  border-radius: 15px;
  width: 100%;
  border: none;
}
.header .search-box.active{
  right: 2rem;
}
.header .navbar.active{
  left: 0;
}
.header .navbar a{
  font-size: 1.7rem;
  /* margin-left: 5.5rem; */
  list-style: none;
  /* text-decoration: none; */
  color: white;

}
.header .navbar a:hover{
 color: black;
}
.header .icons{
  font-size: 2rem;
 
}
.header .navbar.active{
  left: 0;
}
.navbar{
    padding: 0;
}
.navbar a{
    margin: 0%;
}

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
    <header class="header clo-6">
        <a href="#" id="logo"><p style="font-size: 30px; color: white;">Travel</p></a>
        <nav class="navbar" style="margin-right: 100px;">           
            <a href="#"  style="color: rgb(7, 7, 7);">home</a>
            <a href="#"  style="color: wheat;">About</a>
            <a href="#"  style="color: wheat;">Tour</a>
            <a href="#"  style="color: wheat;">Hotel</a>
            <a href="#"  style="color: wheat;">blog</a>
            <a href="#"  style="color: wheat;">contact</a>
            @if (!auth()->check())
            <li class="nav-item cta"><a href="/register" class="nav-link" style="color: rgb(7, 7, 7);">Login/Register</a></li>
             @endif
            @if (auth()->check())
            <li class="nav-item cta"><a href="/Profile" class="nav-link" style="color: rgb(7, 7, 7);">{{ auth()->user()->name }}</a></li>
            @endif
        </nav> 
      
       
        
    </header>
    <div class="container d-lg-flex" style="margin-top: 50px;margin-left: 200px;">
        <div class="box-1 bg-light user">
            <div class="d-flex align-items-center mb-6"> <img
                    src="{{auth()->user()->image}}"
                    class="pic rounded-circle" alt="">
                <p class="ps-2 name">{{auth()->user()->name}}</p>
            </div>
            <div class="box-inner-1 pb-3 mb-3 ">
                <div class="d-flex justify-content-between mb-3 userdetails">
                    <p class="fw-bold">{{$room->room_type}}</p>
                    <p class="fw-lighter"><span class="fas fa-dollar-sign"></span> {{$room->price}}</p>
                </div>


                 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 350px;">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block " width="350px" height="auto" style="object-fit: cover;"  src="{{$room->img_1}}" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block " width="350px" height="auto" style="object-fit: cover;" src="{{$room->img_2}}" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block " width="350px" height="auto" style="object-fit: cover;"  src="{{$room->img_3}}" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>

                <p class="dis my-3 info">{{$room->body}} </p>
                <p class="dis mb-3 updates">Free updates forever</p>
                <p class="dis mb-3 different">Three different colored sets:</p>
                <div class="dis">
                    <p class="black"><span class="fas fa-arrow-right mb-3 pe-2"></span>Black</p>
                    <p class="white"><span class="fas fa-arrow-right mb-3 pe-2"></span>White</p>
                    <p class="pastel"><span class="fas fa-arrow-right mb-3 pe-2"></span>Pastel</p>
                </div>
                <div>
                    <p class="dis footer my-3">Here is a quick guide on how to apply them</p>
                </div>
            </div>
        </div>
        <div class="box-2">
            <div class="box-inner-2">
                <div>
                    <p class="fw-bold">Payment Details</p>
                    <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                </div>
                <form action="">
                    <div class="mb-3">
                        <p class="dis fw-bold mb-2">Email address</p> <input class="form-control" type="email"
                            value="luke@skywalker.com">
                    </div>
                    <div>
                        <p class="dis fw-bold mb-2">Card details</p>
                        <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                            <div class="fab fa-cc-visa ps-3"></div> <input type="text" class="form-control"
                                placeholder="Card Details">
                            <div class="d-flex w-50"> <input type="text" class="form-control px-0" placeholder="MM/YY">
                                <input type="password" maxlength=3 class="form-control px-0" placeholder="CVV">
                            </div>
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Cardholder name</p> <input class="form-control" type="text">
                        </div>
                        <div class="address">
                            <p class="dis fw-bold mb-3">Billing address</p> <select class="form-select"
                                aria-label="Default select example">
                                <option selected hidden>United States</option>
                                <option value="1">India</option>
                                <option value="2">Australia</option>
                                <option value="3">Canada</option>
                            </select>
                            <div class="d-flex"> <input class="form-control zip" type="text" placeholder="ZIP"> <input
                                    class="form-control state" type="text" placeholder="State"> </div>
                            <div class=" my-3">
                                <p class="dis fw-bold mb-2">VAT Number</p>
                                <div class="inputWithcheck"> <input class="form-control" type="text" value="GB012345B9">
                                    <span class="fas fa-check"></span>
                                </div>
                            </div>
                            <div class="my-3">
                                <p class="dis fw-bold mb-2">Discount Code</p> <input class="form-control text-uppercase"
                                    type="text" value="BLACKFRIDAY" id="discount">
                            </div>
                            <div class="d-flex flex-column dis">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>Subtotal</p>
                                    <p><span class="fas fa-dollar-sign"></span>19.00</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d-flex align-items-center">
                                        <p class="pe-2">Discount <span
                                                class="d-inline-flex align-items-center justify-content-between bg-light px-2 couponCode">
                                                <span id="code" class="pe-2"></span> <span
                                                    class="fas fa-times close"></span> </span> </p>
                                    </div>
                                    <p><span class="fas fa-dollar-sign"></span>5.00</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>VAT<span>(20%)</span></p>
                                    <p><span class="fas fa-dollar-sign"></span>2.80</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p class="fw-bold">Total</p>
                                    <p class="fw-bold"><span class="fas fa-dollar-sign"></span>16.80</p>
                                </div>
                                <div class="btn btn-primary mt-2">Pay<span class="fas fa-dollar-sign px-1"></span>16.80
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>