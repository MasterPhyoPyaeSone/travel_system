<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html" style="margin-top: -18px;margin-right: -30px">
            <img src="/image/pngegg.png" style="width: 100px;height: 100px;color: #f85959" alt=""><span style="color: #f85959">LOCAL 14 </span>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav" style="margin-left: 100px">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                {{-- <li class="nav-item"><a href="/about" class="nav-link">About</a></li> --}}
                <li class="nav-item"><a href="/Allpackages" class="nav-link">Packages</a></li>
                <li class="nav-item"><a href="/Allhotel" class="nav-link">Hotels</a></li>
                <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>

                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item ">
                    <!-- Example single danger button -->
                    <div class="dropdown" style="margin-top: 3px">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none;background-color: transparent;">
                            <p class="nav-link" style="color: #fff"> Travel Info</p>
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

                    {{-- @if (auth()->check())
            <x-cart/>
            @endif --}}
                    @if (!auth()->check())
                <li class="nav-item cta"><a href="/register" class="nav-link" style="border: none">Login/Register</a></li>
                @endif
                {{-- @if (auth()->check())
           <li class="nav-item cta"><a href="/Profile" class="nav-link" style="border: none;background-color: transparent;font-size: 20px;margin-top: 3px"><i class="fas fa-user fa-lg "  class="nav-link"></i></a></li>
            @endif --}}
                @if (auth()->check())
                <li class="nav-item cta"><a href="/allcheckout" class="nav-link" style="border: none;background-color: transparent;font-size: 20px;margin-top: 3px">
                        <div class="" style="display: flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
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

                <li class="nav-item cta">
                    <div class="dropdown" style="margin-top: -10px">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none;background-color: transparent;">
                            @if (auth()->check())
                            <p class="nav-link" style="color: #fff"><a href="/Profile" class="nav-link" style="border: none;background-color: transparent;font-size: 20px;margin-top: 3px;color: #fff"><i class="fas fa-user fa-lg " class="nav-link"></i></a> </p>
                            @endif
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-top: -25px;margin-left: 25px">
                            <a class="dropdown-item" href="/Profile"><i class="fas fa-user fa-lg " style="margin-right: 10px" class="nav-link"></i>Profile</a>
                            <a class="dropdown-item" href="/logOut"><svg xmlns="http://www.w3.org/2000/svg" style="width: 20px;height: 20px;margin-right: 10px;margin-top: 10px" viewBox="0 0 512 512">
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
<!-- END nav -->
{{ $slot }}
