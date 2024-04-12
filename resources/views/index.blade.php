@extends('layout')
@section('content')
    <style>
        ..carousel-control-prev {
            position: relative;
        }

        .Previous {
            position: absolute;
            top: 40%;
            left: 15px;
            border-radius: 10px;
        }

        ..carousel-control-next {
            position: relative;
        }

        .Next {
            position: absolute;
            top: 40%;
            right: 15px;
            border-radius: 10px;
        }

        .bowls li {
            list-style: none;
            text-decoration: none;
            line-height: 3;
            font-size: 17px;
            font-weight: 400;
        }

        .bowls li:hover {
            border-bottom: 2px solid red;
            margin-left: 10px;
            cursor: pointer;

        }

        /* ..................dropdown.................. */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0px;
            background-color: #f9f9f9;
            min-width: 300px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* ...........read more............... */
        #more {
            display: none;
        }
    </style>
    <div>
        <div class="">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('image/1.png') }}" class="d-block w-100" alt="..." style="height:400px;">
                        {{-- <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div> --}}
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/2.png') }}" class="d-block w-100" alt="..." style="height:400px;">
                        {{-- <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div> --}}
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/3.png') }}" class="d-block w-100" alt="..." style="height:400px;">
                        {{-- <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div> --}}
                    </div>
                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <button class="Previous bg-danger p-2"><span class="carousel-control-prev-icon bg-danger"
                            aria-hidden="true"></span></button>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <button class="Next bg-danger p-2"><span class="carousel-control-next-icon "
                            aria-hidden="true"></span></button>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <section class="container my-5">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="fw-bold">CATEGORIES</h5>

                <div class="d-flex gap-2">
                    <button class="px-3 py-1 border border-dark rounded"
                        style="border:none; background-color:transparent;">VEG</button>
                    <button class="px-3 py-1 border border-dark rounded"
                        style="border:none; background-color:transparent; ">PRICE
                        <span style="margin-left:5px;"><i class="fa-solid fa-arrow-up-short-wide"></i></span></button>

                    <div class="dropdown">
                        <button class="px-3 py-1" style="border:none; background-color:transparent;">
                            FILTERS <span><i class="fa-solid fa-filter"></i></span>
                        </button>
                        <div class="dropdown-content">
                            <div class="d-flex justify-content-between" style="font-size: 12px;">
                                <p>FILTERS</p>
                                <p>RESET ALL FILTERS</p>
                            </div>
                            <div class="my-2">
                                <p style="font-size: 14px; font-weight:600;">Food Preference</p>
                                <div class="d-flex flex-wrap gap-3" style="font-size: 14px;">
                                    <button class="px-2 py-1"
                                        style="background-color: transparent; border:1.5px solid black; border-radius:8px;">Veg</button>
                                    <button class="px-2 py-1"
                                        style="background-color: transparent; border:1.5px solid black; border-radius:8px;">Contains
                                        Egg</button>
                                    <button class="px-2 py-1"
                                        style="background-color: transparent; border:1.5px solid black; border-radius:8px;">Non
                                        Veg</button>
                                </div>
                            </div>
                            <div class="my-2">
                                <p style="font-size: 14px; font-weight:600;">Cuisine</p>
                                <div class="d-flex flex-wrap gap-3" style="font-size: 14px;">
                                    <button class="px-2 py-1"
                                        style="background-color: transparent; border:1.5px solid black; border-radius:8px;">Mexican</button>
                                    <button class="px-2 py-1"
                                        style="background-color: transparent; border:1.5px solid black; border-radius:8px;">541
                                        cal | Calorie</button>
                                    <button class="px-2 py-1"
                                        style="background-color: transparent; border:1.5px solid black; border-radius:8px;">Japanese</button>
                                    <span id="dots">...</span>
                                    <span id="more">
                                        <div class="d-flex flex-wrap gap-3">
                                            <button class="px-2 py-1"
                                                style="background-color: transparent; border:1.5px solid black; border-radius:8px;">Indian</button>

                                            <button class="px-2 py-1"
                                                style="background-color: transparent; border:1.5px solid black; border-radius:8px;">Asian</button>
                                            <button class="px-2 py-1"
                                                style="background-color: transparent; border:1.5px solid black; border-radius:8px;">World
                                                Cuisine</button>
                                            <button class="px-2 py-1"
                                                style="background-color: transparent; border:1.5px solid black; border-radius:8px;">Mediterranean</button>
                                            <button class="px-2 py-1"
                                                style="background-color: transparent; border:1.5px solid black; border-radius:8px;">india</button>
                                            <button class="px-2 py-1"
                                                style="background-color: transparent; border:1.5px solid black; border-radius:8px;">Italian</button>
                                            <button class="px-2 py-1"
                                                style="background-color: transparent; border:1.5px solid black; border-radius:8px;">Chinese</button>
                                            <button class="px-2 py-1"
                                                style="background-color: transparent; border:1.5px solid black; border-radius:8px;">Fusion</button>
                                            <button class="px-2 py-1"
                                                style="background-color: transparent; border:1.5px solid black; border-radius:8px;">North
                                                Indian</button>
                                            <button class="px-2 py-1"
                                                style="background-color: transparent; border:1.5px solid black; border-radius:8px;">Universal</button>
                                        </div>
                                    </span>
                                    <button onclick="myFunction()" id="myBtn"
                                        style="background-color: transparent; border:none; font-size:12px;">Read
                                        more</button>
                                </div>
                            </div>
                            <div class="my-2">
                                <p style="font-size: 14px; font-weight:600;">Trending</p>
                                <div class="d-flex flex-wrap gap-3" style="font-size: 14px;">
                                    <button class="px-2 py-1"
                                        style="background-color: transparent; border:1.5px solid black; border-radius:8px;">Desserts</button>
                                    <button class="px-2 py-1"
                                        style="background-color: transparent; border:1.5px solid black; border-radius:8px;">Best
                                        Offers</button>
                                </div>
                            </div>
                            <button class="py-2 w-100 text-white mt-2"
                                style="background-image: linear-gradient(to right, #f5914e, #e85826); border:none; font-weight:600;">
                                Apply (294 Dishes)
                            </button>
                        </div>

                    </div>
                </div>

            </div>
            <hr>
            <div class="d-lg-flex w-100">
                <div class="d-none d-lg-block w-25">
                    <div class=" m-1">
                        <ul class="bowls">
                            <h6>Bowls</h6>
                            <li>Superbowls</li>
                            <li>Noodles</li>
                            <li>Keto and Salads</li>
                            <li>Appetizers</li>
                            <li>Lite Bite</li>
                            <li>Wraps</li>
                            <li>Gourmet sandwiches</li>
                            <li>Sandwiches</li>
                            <li>All day breakfast</li>
                            <li>Burgers</li>
                            <li>Desserts & Beverages</li>
                        </ul>
                    </div>
                </div>
                <div class="w-100 px-3">
                    <div class="row g-3">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="col-lg-4 col-md-6">
                                <div class="p-2 ">
                                    <div class="d-flex align-items-center gap-2 m-0"
                                        style="font-size:13px; font-weight:400; color:rgb(205, 209, 209)">
                                        <div class="border border-2 d-flex position-relative border-danger"
                                            style="padding: 5px; width:8px; height:8px;">
                                            <span class="position-absolute"
                                                style="font-size: 6px; font-weight:800; top:1.2px; left:2px;"><i
                                                    class="fa-solid fa-circle-dot text-danger"></i></span>
                                        </div>CONTENTIAL
                                    </div>
                                    <img src="{{ asset('image/chi1 (1).jpg') }}" alt="hello" class="d-block w-100"
                                        style="border-radius:25px;">
                                    <p class="m-0 my-2"
                                        style="font-weight: 700; font-family: ProximaNova-Semibold, Helvetica, Arial, sans-serif; font-size: 18px;
                                                font-weight: 600;">
                                        Mushroom Veloute Chicken Rice Bowl
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex gap-1 align-items-center">

                                            <p class="m-0 fs-5 fw-bold">₹149</p>
                                            <del class="m-0" style="font-size: 12px; font-weight:700;">₹299</del>
                                            <p class="m-0" style="font-size: 12px;">50% <span
                                                    style="font-size: 12px;">OFF</span></p>
                                        </div>
                                        <div>
                                            <button class="px-3 text-white fw-bold py-2 rounded-pill"
                                                style="font-size: 12px; background-image: linear-gradient(to right, #f5914e, #e85826); border:none;">Add
                                                to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
        <div style="display:flex; justify-content: space-between; width:100%; background-color:red;">
            <button class="px-4">1zxvxcbncvgnb</button>
            <button>2cbcvn </button>
            <button>3cbvbncv</button>
            <button>4vnbvnvb</button>
            <button>5bmbvnm</button>
            <button>bmbvm6</button>
            <button>7bb mvvm</button>
            <button>8vnvbn</button>
            <button>bvn9</button>
        </div>
    </div>


    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
@endsection
