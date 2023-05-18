<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sbidu - Bid And Auction HTML Template</title>
    <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/owl.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/main.css')}}">

    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.png')}}" type="image/x-icon">
</head>

<body>
<!--============= ScrollToTop Section Starts Here =============-->
<div class="overlayer" id="overlayer">
    <div class="loader">
        <div class="loader-inner"></div>
    </div>
</div>
<a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
<div class="overlay"></div>
<!--============= ScrollToTop Section Ends Here =============-->


<!--============= Header Section Starts Here =============-->
<header>
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper">
                <ul class="customer-support">
                    <li>
                        <a href="#0" class="mr-3"><i class="fas fa-phone-alt"></i><span class="ml-2 d-none d-sm-inline-block">Customer Support</span></a>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <select name="language" class="select-bar">
                            <option value="en">En</option>
                            <option value="Bn">Bn</option>
                            <option value="Rs">Rs</option>
                            <option value="Us">Us</option>
                            <option value="Pk">Pk</option>
                            <option value="Arg">Arg</option>
                        </select>
                    </li>
                </ul>
                <ul class="cart-button-area">
                    <li>
                        <a href="#0" class="cart-button"><i class="flaticon-shopping-basket"></i><span class="amount">08</span></a>
                    </li>
                    <li>
                        <a href="sign-in.html" class="user-button"><i class="flaticon-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="./index.html">
                        <img src="./assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu ml-auto">
                    <li>
                        <a href="#0">Home</a>
                        <ul class="submenu">
                            <li>
                                <a href="./index.html">Home Page One</a>
                            </li>
                            <li>
                                <a href="./index-2.html">Home Page Two</a>
                            </li>
                            <li>
                                <a href="./index-3.html">Home Page Three</a>
                            </li>
                            <li>
                                <a href="./index-4.html">Home Page Four</a>
                            </li>
                            <li>
                                <a href="./index-5.html">Home Page Five</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./product.html">Auction</a>
                    </li>
                    <li>
                        <a href="#0">Pages</a>
                        <ul class="submenu">
                            <li>
                                <a href="#0">Product</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="./product.html">Product Page 1</a>
                                    </li>
                                    <li>
                                        <a href="./product-2.html">Product Page 2</a>
                                    </li>
                                    <li>
                                        <a href="./product-details.html">Product Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">My Account</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="./sign-up.html">Sign Up</a>
                                    </li>
                                    <li>
                                        <a href="./sign-in.html">Sign In</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Dashboard</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="./dashboard.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="./profile.html">Personal Profile</a>
                                    </li>
                                    <li>
                                        <a href="./my-bid.html">My Bids</a>
                                    </li>
                                    <li>
                                        <a href="./winning-bids.html">Winning Bids</a>
                                    </li>
                                    <li>
                                        <a href="./notifications.html">My Alert</a>
                                    </li>
                                    <li>
                                        <a href="./my-favorites.html">My Favorites</a>
                                    </li>
                                    <li>
                                        <a href="./referral.html">Referrals</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="./about.html">About Us</a>
                            </li>
                            <li>
                                <a href="./faqs.html">Faqs</a>
                            </li>
                            <li>
                                <a href="./error.html">404 Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./contact.html">Contact</a>
                    </li>
                </ul>
                <form class="search-form">
                    <input type="text" placeholder="Search for brand, model....">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
                <div class="search-bar d-md-none">
                    <a href="#0"><i class="fas fa-search"></i></a>
                </div>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!--============= Header Section Ends Here =============-->

<!--============= Cart Section Starts Here =============-->
<div class="cart-sidebar-area">
    <div class="top-content">
        <a href="index.html" class="logo">
            <img src="./assets/images/logo/logo2.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
    </div>
    <div class="bottom-content">
        <div class="cart-products">
            <h4 class="title">Shopping cart</h4>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src="assets/images/shop/shop01.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Color Pencil</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src="assets/images/shop/shop02.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Water Pot</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src="assets/images/shop/shop03.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Art Paper</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src="assets/images/shop/shop04.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Stop Watch</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src="assets/images/shop/shop05.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Comics Book</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="btn-wrapper text-center">
                <a href="#0" class="custom-button"><span>Checkout</span></a>
            </div>
        </div>
    </div>
</div>
<!--============= Cart Section Ends Here =============-->


<!--============= Banner Section Starts Here =============-->
<!--    <section class="banner-section-4 bg_img oh" data-background="./assets/images/banner/banner-bg-4.png">-->
<!--        <div class="container">-->
<!--            <div class="row align-items-center">-->
<!--                <div class="col-md-10 col-lg-7 col-xl-8">-->
<!--                    <div class="banner-content cl-white">-->
<!--                        <h5 class="cate">Enjoy Exclusive</h5>-->
<!--                        <h1 class="title">Buy Your Car In Real Time <span class="d-xl-block">Bidding</span></h1>-->
<!--                        <p class="mw-500">-->
<!--                            Thousands of Vehicles for Sale Every Day, We havejust the right one for you.-->
<!--                        </p>-->
<!--                        <a href="#0" class="custom-button yellow btn-large">Get Started</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-5 col-xl-4">-->
<!--                    <div class="banner-thumb-4">-->
<!--                        <a href="#0" class="bid-now"><i class="flaticon-auction"></i><span>Bid Now</span></a>-->
<!--                        <img src="./assets/images/banner/banner-4.png" alt="banner">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="banner-shape d-none d-lg-block bot-0">-->
<!--            <img src="./assets/css/img/banner-shape-4.png" alt="css">-->
<!--        </div>-->
<!--    </section>-->
<!--============= Banner Section Ends Here =============-->


<!--============= How Section Starts Here =============-->
<!--    <section class="how-section padding-top padding-bottom pos-rel">-->
<!--        <div class="container">-->
<!--            <div class="section-header text-lg-left">-->
<!--                <h2 class="title">How it works</h2>-->
<!--                <p>Easy 3 steps to win</p>-->
<!--            </div>-->
<!--            <div class="row justify-content-center mb&#45;&#45;40">-->
<!--                <div class="col-md-6 col-lg-4">-->
<!--                    <div class="how-item">-->
<!--                        <div class="how-thumb">-->
<!--                            <img src="./assets/images/how/how1.png" alt="how">-->
<!--                        </div>-->
<!--                        <div class="how-content">-->
<!--                            <h4 class="title">Sign Up</h4>-->
<!--                            <p>No Credit Card Required</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6 col-lg-4">-->
<!--                    <div class="how-item">-->
<!--                        <div class="how-thumb">-->
<!--                            <img src="./assets/images/how/how2.png" alt="how">-->
<!--                        </div>-->
<!--                        <div class="how-content">-->
<!--                            <h4 class="title">Bid</h4>-->
<!--                            <p>Bidding is free Only pay if you win</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6 col-lg-4">-->
<!--                    <div class="how-item">-->
<!--                        <div class="how-thumb">-->
<!--                            <img src="./assets/images/how/how3.png" alt="how">-->
<!--                        </div>-->
<!--                        <div class="how-content">-->
<!--                            <h4 class="title">Win</h4>-->
<!--                            <p>Fun - Excitement - Great deals</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="car-2 d-none d-lg-block"><img src="./assets/images/how/car2.png" alt="how"></div>-->
<!--    </section>-->
<!--============= How Section Starts Here =============-->


<!--============= Car Auction Section Starts Here =============-->
<!--    <section class="car-auction-section padding-bottom pos-rel oh">-->
<!--        <div class="car-bg"><img src="./assets/images/auction/car/car-bg.png" alt="car"></div>-->
<!--        <div class="container">-->
<!--            <div class="section-header-3">-->
<!--                <div class="left d-block">-->
<!--                    <h2 class="title mb-3">Featured Items</h2>-->
<!--                    <p>Start winning cars with comfort</p>-->
<!--                </div>-->
<!--                <a href="#0" class="normal-button">View All</a>-->
<!--            </div>-->
<!--            <div class="row justify-content-center mb-30-none">-->
<!--                <div class="col-sm-10 col-md-6 col-lg-4">-->
<!--                    <div class="auction-item-2">-->
<!--                        <div class="auction-thumb">-->
<!--                            <a href="./product-details.html"><img src="./assets/images/auction/car/auction-1.jpg" alt="car"></a>-->
<!--                            <a href="#0" class="rating"><i class="far fa-star"></i></a>-->
<!--                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>-->
<!--                        </div>-->
<!--                        <div class="auction-content">-->
<!--                            <h6 class="title">-->
<!--                                <a href="./product-details.html">2018 Hyundai Sonata</a>-->
<!--                            </h6>-->
<!--                            <div class="bid-area">-->
<!--                                <div class="bid-amount">-->
<!--                                    <div class="icon">-->
<!--                                        <i class="flaticon-auction"></i>-->
<!--                                    </div>-->
<!--                                    <div class="amount-content">-->
<!--                                        <div class="current">Current Bid</div>-->
<!--                                        <div class="amount">$876.00</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="bid-amount">-->
<!--                                    <div class="icon">-->
<!--                                        <i class="flaticon-money"></i>-->
<!--                                    </div>-->
<!--                                    <div class="amount-content">-->
<!--                                        <div class="current">Buy Now</div>-->
<!--                                        <div class="amount">$5,00.00</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="countdown-area">-->
<!--                                <div class="countdown">-->
<!--                                    <div id="bid_counter26"></div>-->
<!--                                </div>-->
<!--                                <span class="total-bids">30 Bids</span>-->
<!--                            </div>-->
<!--                            <div class="text-center">-->
<!--                                <a href="#0" class="custom-button">Submit a bid</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-10 col-md-6 col-lg-4">-->
<!--                    <div class="auction-item-2">-->
<!--                        <div class="auction-thumb">-->
<!--                            <a href="./product-details.html"><img src="./assets/images/auction/car/auction-2.jpg" alt="car"></a>-->
<!--                            <a href="#0" class="rating"><i class="far fa-star"></i></a>-->
<!--                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>-->
<!--                        </div>-->
<!--                        <div class="auction-content">-->
<!--                            <h6 class="title">-->
<!--                                <a href="./product-details.html">2018 Nissan Versa, S</a>-->
<!--                            </h6>-->
<!--                            <div class="bid-area">-->
<!--                                <div class="bid-amount">-->
<!--                                    <div class="icon">-->
<!--                                        <i class="flaticon-auction"></i>-->
<!--                                    </div>-->
<!--                                    <div class="amount-content">-->
<!--                                        <div class="current">Current Bid</div>-->
<!--                                        <div class="amount">$876.00</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="bid-amount">-->
<!--                                    <div class="icon">-->
<!--                                        <i class="flaticon-money"></i>-->
<!--                                    </div>-->
<!--                                    <div class="amount-content">-->
<!--                                        <div class="current">Buy Now</div>-->
<!--                                        <div class="amount">$5,00.00</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="countdown-area">-->
<!--                                <div class="countdown">-->
<!--                                    <div id="bid_counter27"></div>-->
<!--                                </div>-->
<!--                                <span class="total-bids">30 Bids</span>-->
<!--                            </div>-->
<!--                            <div class="text-center">-->
<!--                                <a href="#0" class="custom-button">Submit a bid</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-10 col-md-6 col-lg-4">-->
<!--                    <div class="auction-item-2">-->
<!--                        <div class="auction-thumb">-->
<!--                            <a href="./product-details.html"><img src="./assets/images/auction/car/auction-3.jpg" alt="car"></a>-->
<!--                            <a href="#0" class="rating"><i class="far fa-star"></i></a>-->
<!--                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>-->
<!--                        </div>-->
<!--                        <div class="auction-content">-->
<!--                            <h6 class="title">-->
<!--                                <a href="./product-details.html">2018 Honda Accord, Sport</a>-->
<!--                            </h6>-->
<!--                            <div class="bid-area">-->
<!--                                <div class="bid-amount">-->
<!--                                    <div class="icon">-->
<!--                                        <i class="flaticon-auction"></i>-->
<!--                                    </div>-->
<!--                                    <div class="amount-content">-->
<!--                                        <div class="current">Current Bid</div>-->
<!--                                        <div class="amount">$876.00</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="bid-amount">-->
<!--                                    <div class="icon">-->
<!--                                        <i class="flaticon-money"></i>-->
<!--                                    </div>-->
<!--                                    <div class="amount-content">-->
<!--                                        <div class="current">Buy Now</div>-->
<!--                                        <div class="amount">$5,00.00</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="countdown-area">-->
<!--                                <div class="countdown">-->
<!--                                    <div id="bid_counter28"></div>-->
<!--                                </div>-->
<!--                                <span class="total-bids">30 Bids</span>-->
<!--                            </div>-->
<!--                            <div class="text-center">-->
<!--                                <a href="#0" class="custom-button">Submit a bid</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--============= Car Auction Section Ends Here =============-->


<!--============= Trending Section Starts Here =============-->
<!--    <section class="trending-section padding-bottom padding-top">-->
<!--        <div class="container">-->
<!--            <div class="section-header-3">-->
<!--                <div class="left d-block">-->
<!--                    <h2 class="title mb-3">Trending Items</h2>-->
<!--                    <p>Bid on 1,000’s of vehicles from more than 25 countries</p>-->
<!--                </div>-->
<!--                <a href="#0" class="normal-button">View All</a>-->
<!--            </div>-->
<!--            <div class="row justify-content-center mb-30-none">-->
<!--                <div class="col-md-6 col-lg-12">-->
<!--                    <div class="auction-item-6">-->
<!--                        <div class="auction-inner">-->
<!--                            <div class="auction-thumb">-->
<!--                                <a href="./product-details.html"><img src="./assets/images/auction/trending/auction-1.png" alt="trending"></a>-->
<!--                                <a href="#0" class="rating"><i class="far fa-star"></i></a>-->
<!--                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>-->
<!--                            </div>-->
<!--                            <div class="auction-content">-->
<!--                                <h5 class="title"><a href="./product-details.html">2016 KIA Optima, EX</a></h5>-->
<!--                                <div class="item-information">-->
<!--                                    <ul>-->
<!--                                        <li><span>Number</span>1-38005900</li>-->
<!--                                        <li><span>VIN</span>2G1WG5EK3B1312245</li>-->
<!--                                        <li><span>Milage</span> 153k miles (246k km)</li>-->
<!--                                        <li><span>Location</span>Sandston (VA)</li>-->
<!--                                    </ul>-->
<!--                                    <ul>-->
<!--                                        <li><span>Engine</span>2.0 Diesel</li>-->
<!--                                        <li><span>Transmission</span>Automated</li>-->
<!--                                        <li><span>Body</span>Offroad car</li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="auction-bidding">-->
<!--                                <div class="countdown">-->
<!--                                    <div id="bid_counter3"></div>-->
<!--                                </div>-->
<!--                                <div class="bid-amount">-->
<!--                                    <div class="icon">-->
<!--                                        <i class="flaticon-auction"></i>-->
<!--                                    </div>-->
<!--                                    <div class="amount-content">-->
<!--                                        <div class="current">Current Bid</div>-->
<!--                                        <div class="amount">$876.00</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="bids-area">-->
<!--                                    Total Bids : <span class="total-bids">130 Bids</span>-->
<!--                                </div>-->
<!--                                <a href="#0" class="custom-button">Submit a bid</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6 col-lg-12">-->
<!--                    <div class="auction-item-6">-->
<!--                        <div class="auction-inner">-->
<!--                            <div class="auction-thumb">-->
<!--                                <a href="./product-details.html"><img src="./assets/images/auction/trending/auction-2.png" alt="trending"></a>-->
<!--                                <a href="#0" class="rating"><i class="far fa-star"></i></a>-->
<!--                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>-->
<!--                            </div>-->
<!--                            <div class="auction-content">-->
<!--                                <h5 class="title"><a href="./product-details.html">2019 Polaris General, 1000 Eps</a></h5>-->
<!--                                <div class="item-information">-->
<!--                                    <ul>-->
<!--                                        <li><span>Number</span>1-38005900</li>-->
<!--                                        <li><span>VIN</span>2G1WG5EK3B1312245</li>-->
<!--                                        <li><span>Milage</span> 153k miles (246k km)</li>-->
<!--                                        <li><span>Location</span>Sandston (VA)</li>-->
<!--                                    </ul>-->
<!--                                    <ul>-->
<!--                                        <li><span>Engine</span>2.0 Diesel</li>-->
<!--                                        <li><span>Transmission</span>Automated</li>-->
<!--                                        <li><span>Body</span>Offroad car</li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="auction-bidding">-->
<!--                                <div class="countdown">-->
<!--                                    <div id="bid_counter4"></div>-->
<!--                                </div>-->
<!--                                <div class="bid-amount">-->
<!--                                    <div class="icon">-->
<!--                                        <i class="flaticon-auction"></i>-->
<!--                                    </div>-->
<!--                                    <div class="amount-content">-->
<!--                                        <div class="current">Current Bid</div>-->
<!--                                        <div class="amount">$876.00</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="bids-area">-->
<!--                                    Total Bids : <span class="total-bids">130 Bids</span>-->
<!--                                </div>-->
<!--                                <a href="#0" class="custom-button">Submit a bid</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6 col-lg-12">-->
<!--                    <div class="auction-item-6">-->
<!--                        <div class="auction-inner">-->
<!--                            <div class="auction-thumb">-->
<!--                                <a href="./product-details.html"><img src="./assets/images/auction/trending/auction-3.png" alt="trending"></a>-->
<!--                                <a href="#0" class="rating"><i class="far fa-star"></i></a>-->
<!--                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>-->
<!--                            </div>-->
<!--                            <div class="auction-content">-->
<!--                                <h5 class="title"><a href="./product-details.html">2018 Hyundai Elantra, Sel/Value/Limited</a></h5>-->
<!--                                <div class="item-information">-->
<!--                                    <ul>-->
<!--                                        <li><span>Number</span>1-38005900</li>-->
<!--                                        <li><span>VIN</span>2G1WG5EK3B1312245</li>-->
<!--                                        <li><span>Milage</span> 153k miles (246k km)</li>-->
<!--                                        <li><span>Location</span>Sandston (VA)</li>-->
<!--                                    </ul>-->
<!--                                    <ul>-->
<!--                                        <li><span>Engine</span>2.0 Diesel</li>-->
<!--                                        <li><span>Transmission</span>Automated</li>-->
<!--                                        <li><span>Body</span>Offroad car</li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="auction-bidding">-->
<!--                                <div class="countdown">-->
<!--                                    <div id="bid_counter5"></div>-->
<!--                                </div>-->
<!--                                <div class="bid-amount">-->
<!--                                    <div class="icon">-->
<!--                                        <i class="flaticon-auction"></i>-->
<!--                                    </div>-->
<!--                                    <div class="amount-content">-->
<!--                                        <div class="current">Current Bid</div>-->
<!--                                        <div class="amount">$876.00</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="bids-area">-->
<!--                                    Total Bids : <span class="total-bids">130 Bids</span>-->
<!--                                </div>-->
<!--                                <a href="#0" class="custom-button">Submit a bid</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6 col-lg-12">-->
<!--                    <div class="auction-item-6">-->
<!--                        <div class="auction-inner">-->
<!--                            <div class="auction-thumb">-->
<!--                                <a href="./product-details.html"><img src="./assets/images/auction/trending/auction-4.png" alt="trending"></a>-->
<!--                                <a href="#0" class="rating"><i class="far fa-star"></i></a>-->
<!--                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>-->
<!--                            </div>-->
<!--                            <div class="auction-content">-->
<!--                                <h5 class="title"><a href="./product-details.html">2018 Toyota Camry, L/Le/Xle/Se/Xse</a></h5>-->
<!--                                <div class="item-information">-->
<!--                                    <ul>-->
<!--                                        <li><span>Number</span>1-38005900</li>-->
<!--                                        <li><span>VIN</span>2G1WG5EK3B1312245</li>-->
<!--                                        <li><span>Milage</span> 153k miles (246k km)</li>-->
<!--                                        <li><span>Location</span>Sandston (VA)</li>-->
<!--                                    </ul>-->
<!--                                    <ul>-->
<!--                                        <li><span>Engine</span>2.0 Diesel</li>-->
<!--                                        <li><span>Transmission</span>Automated</li>-->
<!--                                        <li><span>Body</span>Offroad car</li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="auction-bidding">-->
<!--                                <div class="countdown">-->
<!--                                    <div id="bid_counter6"></div>-->
<!--                                </div>-->
<!--                                <div class="bid-amount">-->
<!--                                    <div class="icon">-->
<!--                                        <i class="flaticon-auction"></i>-->
<!--                                    </div>-->
<!--                                    <div class="amount-content">-->
<!--                                        <div class="current">Current Bid</div>-->
<!--                                        <div class="amount">$876.00</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="bids-area">-->
<!--                                    Total Bids : <span class="total-bids">130 Bids</span>-->
<!--                                </div>-->
<!--                                <a href="#0" class="custom-button">Submit a bid</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--============= Trending Section Ends Here =============-->


<!--============= Ending Auction Section Starts Here =============-->
<section class="ending-auction padding-top pos-rel">
    <div class="popular-bg bg_img" data-background="./assets/images/auction/popular/popular-bg.png"></div>
    <div class="container">
        <div class="section-header cl-white">
            <span class="cate">Closing Within 24 Hours</span>
            <h2 class="title">Auctions Ending soon</h2>
            <p>Bid and win great deals,Our auction process is simple, efficient, and transparent.</p>
        </div>
        <div class="popular-auction-wrapper">
            <div class="row justify-content-center mb-40-none">
                <div class="col-lg-6">
                    <div class="auction-item-3">
                        <div class="auction-thumb">
                            <a href="./product-details.html"><img src="./assets/images/auction/ending/auction01.png" alt="ending"></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="./product-details.html">2021 Honda Insight,
                                    Touring</a>
                            </h6>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bids-area">
                                Total Bids : <span class="total-bids">130 Bids</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="auction-item-3">
                        <div class="auction-thumb">
                            <a href="./product-details.html"><img src="./assets/images/auction/ending/auction02.png" alt="ending"></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="./product-details.html">2011 Hyundai Sonata,
                                    Se/Limited</a>
                            </h6>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bids-area">
                                Total Bids : <span class="total-bids">130 Bids</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="auction-item-3">
                        <div class="auction-thumb">
                            <a href="./product-details.html"><img src="./assets/images/auction/ending/auction03.png" alt="ending"></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="./product-details.html">2016 Dodge Grand
                                    Caravan, Sxt</a>
                            </h6>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bids-area">
                                Total Bids : <span class="total-bids">130 Bids</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="auction-item-3">
                        <div class="auction-thumb">
                            <a href="./product-details.html"><img src="./assets/images/auction/ending/auction04.png" alt="ending"></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="./product-details.html">2009 Jeep Wrangler
                                    Unlimite, Sahara</a>
                            </h6>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bids-area">
                                Total Bids : <span class="total-bids">130 Bids</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="auction-item-3">
                        <div class="auction-thumb">
                            <a href="./product-details.html"><img src="./assets/images/auction/ending/auction05.png" alt="ending"></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="./product-details.html">2009 Toyota Prius
                                    (Medford, NY 11763)</a>
                            </h6>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bids-area">
                                Total Bids : <span class="total-bids">130 Bids</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="auction-item-3">
                        <div class="auction-thumb">
                            <a href="./product-details.html"><img src="./assets/images/auction/ending/auction06.png" alt="ending"></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="./product-details.html">2019 Indian Motorcycle
                                    Co. Scout, Bobber</a>
                            </h6>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bids-area">
                                Total Bids : <span class="total-bids">130 Bids</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-wrapper">
                <a href="#0" class="normal-button">See All Auction</a>
            </div>
        </div>
    </div>
</section>
<!--============= Ending Auction Section Ends Here =============-->


<!--============= Call In Section Starts Here =============-->
<!--    <section class="call-in-section padding-top">-->
<!--        <div class="container">-->
<!--            <div class="call-wrapper cl-white bg_img" data-background="./assets/images/call-in/call-bg.png">-->
<!--                <div class="section-header">-->
<!--                    <h3 class="title">Register for Free & Start Bidding Now!</h3>-->
<!--                    <p>From cars to diamonds to iPhones, we have it all.</p>-->
<!--                </div>-->
<!--                <a href="sign-up.html" class="custom-button white">Register</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--============= Call In Section Ends Here =============-->


<!--============= Client Section Starts Here =============-->
<!--    <section class="client-section padding-top padding-bottom">-->
<!--        <div class="container">-->
<!--            <div class="section-header">-->
<!--                <h2 class="title">Don’t just take our word for it!</h2>-->
<!--                <p>Our hard work is paying off. Great reviews from amazing customers.</p>-->
<!--            </div>-->
<!--            <div class="m&#45;&#45;15">-->
<!--                <div class="client-slider owl-theme owl-carousel">-->
<!--                    <div class="client-item">-->
<!--                        <div class="client-content">-->
<!--                            <p>I can't stop bidding! It's a great way to spend some time and I want everything on Sbidu.</p>-->
<!--                        </div>-->
<!--                        <div class="client-author">-->
<!--                            <div class="thumb">-->
<!--                                <a href="#0">-->
<!--                                    <img src="./assets/images/client/client01.png" alt="client">-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="content">-->
<!--                                <h6 class="title"><a href="#0">Alexis Moore</a></h6>-->
<!--                                <div class="ratings">-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="client-item">-->
<!--                        <div class="client-content">-->
<!--                            <p>I came I saw I won. Love what I have won, and will try to win something else.</p>-->
<!--                        </div>-->
<!--                        <div class="client-author">-->
<!--                            <div class="thumb">-->
<!--                                <a href="#0">-->
<!--                                    <img src="./assets/images/client/client02.png" alt="client">-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="content">-->
<!--                                <h6 class="title"><a href="#0">Darin Griffin</a></h6>-->
<!--                                <div class="ratings">-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="client-item">-->
<!--                        <div class="client-content">-->
<!--                            <p>This was my first time, but it was exciting. I will try it again. Thank you so much.</p>-->
<!--                        </div>-->
<!--                        <div class="client-author">-->
<!--                            <div class="thumb">-->
<!--                                <a href="#0">-->
<!--                                    <img src="./assets/images/client/client03.png" alt="client">-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="content">-->
<!--                                <h6 class="title"><a href="#0">Tom Powell</a></h6>-->
<!--                                <div class="ratings">-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                    <span><i class="fas fa-star"></i></span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--============= Client Section Ends Here =============-->


<!--============= Footer Section Starts Here =============-->
<footer class="bg_img padding-top oh" data-background="./assets/images/footer/footer-bg.jpg">
    <!--        <div class="footer-top-shape">-->
    <!--            <img src="./assets/css/img/footer-top-shape.png" alt="css">-->
    <!--        </div>-->
    <!--        <div class="anime-wrapper">-->
    <!--            <div class="anime-1 plus-anime">-->
    <!--                <img src="./assets/images/footer/p1.png" alt="footer">-->
    <!--            </div>-->
    <!--            <div class="anime-2 plus-anime">-->
    <!--                <img src="./assets/images/footer/p2.png" alt="footer">-->
    <!--            </div>-->
    <!--            <div class="anime-3 plus-anime">-->
    <!--                <img src="./assets/images/footer/p3.png" alt="footer">-->
    <!--            </div>-->
    <!--            <div class="anime-5 zigzag">-->
    <!--                <img src="./assets/images/footer/c2.png" alt="footer">-->
    <!--            </div>-->
    <!--            <div class="anime-6 zigzag">-->
    <!--                <img src="./assets/images/footer/c3.png" alt="footer">-->
    <!--            </div>-->
    <!--            <div class="anime-7 zigzag">-->
    <!--                <img src="./assets/images/footer/c4.png" alt="footer">-->
    <!--            </div>-->
    <!--        </div>-->
    <div class="newslater-wrapper">
        <div class="container">
            <div class="newslater-area">
                <div class="newslater-thumb">
                    <img src="./assets/images/footer/news.jfif" alt="footer">
                </div>
                <div class="newslater-content">
                    <div class="section-header left-style mb-low">
                        <h5 class="cate">Faça sua inscrição</h5>
                        <h3 class="title">A internet da pecuária</h3>
                    </div>
                    <form class="subscribe-form">
                        <input type="text" placeholder="Entre com seu e-mail" name="email">
                        <button type="submit" class="custom-button">Anunciar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--        <div class="footer-top padding-bottom padding-top">-->
    <!--            <div class="container">-->
    <!--                <div class="row mb&#45;&#45;60">-->
    <!--                    <div class="col-sm-6 col-lg-3">-->
    <!--                        <div class="footer-widget widget-links">-->
    <!--                            <h5 class="title">Auction Categories</h5>-->
    <!--                            <ul class="links-list">-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Ending Now</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Vehicles</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Watches</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Electronics</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Real Estate</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Jewelry</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Art</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Sports & Outdoor</a>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-sm-6 col-lg-3">-->
    <!--                        <div class="footer-widget widget-links">-->
    <!--                            <h5 class="title">About Us</h5>-->
    <!--                            <ul class="links-list">-->
    <!--                                <li>-->
    <!--                                    <a href="#0">About Sbidu</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Help</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Affiliates</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Jobs</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Press</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Our blog</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Collectors' portal</a>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-sm-6 col-lg-3">-->
    <!--                        <div class="footer-widget widget-links">-->
    <!--                            <h5 class="title">We're Here to Help</h5>-->
    <!--                            <ul class="links-list">-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Your Account</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Safe and Secure</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Shipping Information</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Contact Us</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0">Help & FAQ</a>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-sm-6 col-lg-3">-->
    <!--                        <div class="footer-widget widget-follow">-->
    <!--                            <h5 class="title">Follow Us</h5>-->
    <!--                            <ul class="links-list">-->
    <!--                                <li>-->
    <!--                                    <a href="#0"><i class="fas fa-phone-alt"></i>(646) 663-4575</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0"><i class="fas fa-blender-phone"></i>(646) 968-0608</a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0"><i class="fas fa-envelope-open-text"></i><span class="__cf_email__" data-cfemail="c4aca1a8b484a1aaa3abb0aca1a9a1eaa7aba9">[email&#160;protected]</span></a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0"><i class="fas fa-location-arrow"></i>1201 Broadway Suite</a>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                            <ul class="social-icons">-->
    <!--                                <li>-->
    <!--                                    <a href="#0" class="active"><i class="fab fa-facebook-f"></i></a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0"><i class="fab fa-twitter"></i></a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0"><i class="fab fa-instagram"></i></a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright-area">
                <div class="footer-bottom-wrapper">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('backend/assets/images/logo/footer-logo.png')}}" alt="logo"></a>
                    </div>
                    <ul class="gateway-area">
                        <li>
                            <a href="#0"><img src="{{asset('backend/assets/images/footer/paypal.png')}}" alt="footer"></a>
                        </li>
                        <li>
                            <a href="#0"><img src="{{asset('backend/assets/images/footer/visa.png')}}" alt="footer"></a>
                        </li>
                        <li>
                            <a href="#0"><img src="{{asset('backend/assets/images/footer/discover.png')}}" alt="footer"></a>
                        </li>
                        <li>
                            <a href="#0"><img src="{{asset('backend/assets/images/footer/mastercard.png')}}" alt="footer"></a>
                        </li>
                    </ul>
                    <div class="copyright"><p> <a href="#0">&copy; Copyright 2023 </a> By <a href="#0">Uiaxis</a></p></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--============= Footer Section Ends Here =============-->



{{--<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="./assets/js/jquery-3.3.1.min.js"></script>--}}
<script src="{{asset('backend/assets/js/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins.js')}}"></script>
<script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('backend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('backend/assets/js/waypoints.js')}}"></script>
<script src="{{asset('backend/assets/js/nice-select.js')}}"></script>
<script src="{{asset('backend/assets/js/counterup.min.js')}}"></script>
<script src="{{asset('backend/assets/js/owl.min.js')}}"></script>
<script src="{{asset('backend/assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('backend/assets/js/yscountdown.min.js')}}"></script>
<script src="{{asset('backend/assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('backend/')}}"></script>
<script src="{{asset('backend/assets/js/main.js')}}"></script>

</body>

</html>
