<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>GG's Hobby and Gaming Lounge</title>

    <!-- Google font -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700"
      rel="stylesheet"
    />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


      <!-- MAIN HEADER -->

      <div id="header">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <!-- LOGO -->
            <div class="col-md-3">
              <div class="header-logo">
                <a href="#" class="logo">
                  <img src="./img/gg.png" alt="" />
                </a>
              </div>
            </div>
            <!-- /LOGO -->

            <!-- SEARCH BAR -->
            <div class="col-md-6">
              <div class="header-search">
                <form>

                  <input class="input" placeholder="Search here" />
                  <button class="search-btn">Search</button>
                </form>
              </div>
            </div>
            <!-- /SEARCH BAR -->

            <!-- ACCOUNT -->
            <div class="col-md-3 clearfix">
              <div class="header-ctn">
                <!-- Wishlist -->
                <div>
                  <a href="#">
                    <i class="fa fa-heart-o"></i>
                    <span>Your Wishlist</span>
                    <div class="qty">2</div>
                  </a>
                </div>
                <!-- /Wishlist -->

                <!-- Cart -->
                <div class="dropdown">
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </div>
                <!-- /Cart -->

                <!-- Menu Toogle -->
                <div class="menu-toggle">
                  <a href="#">
                    <i class="fa fa-bars"></i>
                    <span>Menu</span>
                  </a>
                </div>
                <!-- /Menu Toogle -->
              </div>
            </div>
            <!-- /ACCOUNT -->
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
      <!-- container -->
      <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
          <!-- NAV -->
          <ul class="main-nav nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Hot Deals</a></li>
            <li><a href="#">Latest Promotions</a></li>
            <li><a href="#">Top Selling</a></li>
            <li><a href="#">About Us</a></li>
          </ul>
          <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
      </div>
      <!-- /container -->

    </nav>

    <!-- /NAVIGATION -->

    <!-- HOT DEAL SECTION -->
    <div id="hot-deal" class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-12">
              <div class="hot-deal">
                <ul class="hot-deal-countdown">
                  <li>
                    <div>
                      <h3>02</h3>
                      <span>Days</span>
                    </div>
                  </li>
                  <li>
                    <div>
                      <h3>10</h3>
                      <span>Hours</span>
                    </div>
                  </li>
                  <li>
                    <div>
                      <h3>34</h3>
                      <span>Mins</span>
                    </div>
                  </li>
                  <li>
                    <div>
                      <h3>60</h3>
                      <span>Secs</span>
                    </div>
                  </li>
                </ul>
                <h2 class="text-uppercase">hot deal this week</h2>
                <p>New Collection Up to 50% OFF</p>
                <a class="primary-btn cta-btn" href="#">Shop now</a>
              </div>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /HOT DEAL SECTION -->

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/h1.jpg" alt="" />
              </div>
              <div class="shop-body">
                <h3>Trading Card<br />Games</h3>
                <a href="#" class="cta-btn"
                  >View<i class="fa fa-arrow-circle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- /shop -->

          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/h2.jpg" alt="" />
              </div>
              <div class="shop-body">
                <h3>Console<br />Reservation</h3>
                <a href="#" class="cta-btn"
                  >View <i class="fa fa-arrow-circle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- /shop -->

          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/h3.jpg" alt="" />
              </div>
              <div class="shop-body">
                <h3>Upcoming<br />Events</h3>
                <a href="#" class="cta-btn"
                  >View <i class="fa fa-arrow-circle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- /shop -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- section title -->
          <div class="col-md-12">
            <div class="section-title">
              <h3 class="title">Latest Promotions</h3>
              <div class="section-nav">
                <ul class="section-tab-nav tab-nav">

              </div>
            </div>
          </div>
          <!-- /section title -->

          <!-- Products tab & slick -->
          <div class="col-md-12">
            <div class="row">
              <div class="products-tabs">
                <!-- tab -->
                <div id="tab1" class="tab-pane active">
                  <div class="products-slick" data-nav="#slick-nav-1">

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/p1.png" alt="" />

                      </div>
                      <div class="product-body">
                        <p class="product-category">Events</p>
                        <h3 class="product-name">
                          <a href="#">Mini-Mina Tournament</a>
                        </h3>
                        <div class="product-btns">
                            <button class="add-to-wishlist">
                              <i class="fa fa-heart-o"></i
                              ><span class="tooltipp">add to wishlist</span>
                            </button>
                          </div>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/p2.jpg" alt="" />
                        <div class="product-label">

                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Events</p>
                        <h3 class="product-name">
                          <a href="#">Console Area</a>
                        </h3>


                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/p3.jpg" alt="" />
                        <div class="product-label">
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Events</p>
                        <h3 class="product-name">
                          <a href="#">TEKKEN 8 TOURNAMENT</a>
                        </h3>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/p4.jpg" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Events</p>
                        <h3 class="product-name">
                          <a href="#">ALPHA CLASH TOURNAMENT</a>
                        </h3>

                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/p5.JPg" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Events</p>
                        <h3 class="product-name">
                          <a href="#">A great day for dads</a>
                        </h3>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- /product -->
                  </div>
                  <div id="slick-nav-1" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
              </div>
            </div>
          </div>
          <!-- Products tab & slick -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->


    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- section title -->
          <div class="col-md-12">
            <div class="section-title">
              <h3 class="title">Top selling</h3>
              <div class="section-nav">

              </div>
            </div>
          </div>
          <!-- /section title -->

          <!-- Products tab & slick -->
          <div class="col-md-12">
            <div class="row">
              <div class="products-tabs">
                <!-- tab -->
                <div id="tab2" class="tab-pane fade in active">
                  <div class="products-slick" data-nav="#slick-nav-2">
                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/t1.jpg" alt="" />
                        <div class="product-label">
                          <!---<span class="sale">-30%</span>
                          <span class="new">NEW</span> -->
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Figures</p>
                        <h3 class="product-name">
                          <a href="#">One piece gear 5 luffy</a>
                        </h3>
                        <h4 class="product-price">
                            ₱19,999.00 <del class="product-old-price">₱24,999</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>

                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/t2.jpg" alt="" />
                        <div class="product-label">
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Card</p>
                        <h3 class="product-name">
                          <a href="#">One Piece Card Game (Portgas D. Ace MANGA)</a>
                        </h3>
                        <h4 class="product-price">
                            ₱355,000.00 <del class="product-old-price">$345,000.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/t3.jpg" alt="" />
                        <div class="product-label">
                          <span class="sale">-30%</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Figure</p>
                        <h3 class="product-name">
                          <a href="#">Yamaguchi Deadpool</a>
                        </h3>
                        <h4 class="product-price">
                            ₱1400.00 <del class="product-old-price">₱1600.00</del>
                        </h4>
                        <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/t4.jpg" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Figure</p>
                        <h3 class="product-name">
                          <a href="#">Wolverine Action Figure</a>
                        </h3>
                        <h4 class="product-price">
                            ₱1500.00 <del class="product-old-price">₱2000.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/t5.jpg" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Figure</p>
                        <h3 class="product-name">
                          <a href="#">One Piece Roronoa Zoro</a>
                        </h3>
                        <h4 class="product-price">
                            ₱1500.00 <del class="product-old-price">₱1800.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->
                  </div>
                  <div id="slick-nav-2" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
              </div>
            </div>
          </div>
          <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-3" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-3">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product07.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product08.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product09.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product01.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product02.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product03.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-4" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-4">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product04.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product05.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product06.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product07.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product08.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product09.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>

          <div class="clearfix visible-sm visible-xs"></div>

          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-5" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-5">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product01.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product02.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product03.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product04.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product05.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product06.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-12">
            <div class="newsletter">
              <p>Sign Up for the <strong>NEWSLETTER</strong></p>
              <form>
                <input
                  class="input"
                  type="email"
                  placeholder="Enter Your Email"
                />
                <button class="newsletter-btn">
                  <i class="fa fa-envelope"></i> Subscribe
                </button>
              </form>
              <ul class="newsletter-follow">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->

    <!-- FOOTER -->
    <footer id="footer">
      <!-- top footer -->
      <div class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-3 col-xs-6" style="text-align: center;">



      <!-- bottom footer -->

        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-12 text-center">

              <span class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
               All Rights Reserved | Made with
                <i class="fa fa-heart-o" aria-hidden="true"></i> by Yoshino Eight.
                <!--<a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </span>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
