
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rose Jade Inc.</title>
        <!-- Favicon img -->
        <link rel="shortcut icon" href="assets/images/icon.jpg">
        <!-- Bootstarp min css -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Mean menu css -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- All min css -->
        <link rel="stylesheet" href="assets/css/all.min.css">
        <!-- Swiper bundle min css -->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <!-- Magnigic popup css -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Animate css -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Nice select css -->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!-- Style css -->
        <link rel="stylesheet" href="assets/css/style.css">
<header class="header-area header-three-area">
    <div class="container header__container">
        <div class="header__main container">
            <a href="index.php" class="logo">
                <img src="assets/images/logo/logo.png" alt="logo">
            </a>
            <div class="main-menu">
                <nav>
                    <ul>
                        <li class="<?= $current_page == 'index.php' ? 'active' : ''; ?>">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="<?= $current_page == 'about.php' ? 'active' : ''; ?>">
                            <a href="about.php">About Us</a>
                        </li>
                        <li class="has-megamenu <?= in_array($current_page, ['line-of-credit.php', 'merchant-cash-advances.php', 'equipment-financing.php']) ? 'active' : ''; ?>">
                            <a href="#0">Services</a>
                            <ul class="sub-menu">
                                <li class="<?= $current_page == 'line-of-credit.php' ? 'active' : ''; ?>">
                                    <a href="services/line-of-credit.php">Line of Credit</a>
                                </li>
                                <li class="<?= $current_page == 'merchant-cash-advances.php' ? 'active' : ''; ?>">
                                    <a href="services/merchant-cash-advances.php">Merchant Cash Advances</a>
                                </li>
                                <li class="<?= $current_page == 'equipment-financing.php' ? 'active' : ''; ?>">
                                    <a href="services/equipment-financing.php">Equipment Financing</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= $current_page == 'contact.php' ? 'active' : ''; ?>">
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="bars d-block d-lg-none">
                <i id="openButton" class="fa-solid fa-bars"></i>
            </div>
        </div>
    </div>
</header>

    </head>

    <body>

        <!-- Preloader area start -->
        <div class="loading">
            <span class="text-capitalize">L</span>
            <span>o</span>
            <span>a</span>
            <span>d</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
        </div>
        <div id="preloader">
        </div>
        <!-- Preloader area end -->

        <!-- Mouse cursor area start here -->
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
        <!-- Mouse cursor area end here -->

        <!-- Header area start here -->
        <header class="header-area header-three-area">
            <div class="container header__container">
                <div class="header__main container">
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo/logo.png" alt="logo">
                    </a>
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class="has-megamenu active">
                                    <a href="index.php" class="active">Home</a>
                                </li>
                                <li><a href="about.php">About Us</a></li>
                                <li>
                                    <a href="#0">Services</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="services/line-of-credit.php">Line of Credit</a>
                                        </li>
                                        <li>
                                            <a href="services/merchant-cash-advances.php">Merchant Cash Advances</a>
                                        </li>
                                        <li>
                                            <a
                                                href="services/equipment-financing.php">Equipment Financing</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="bars d-block d-lg-none">
                        <i id="openButton" class="fa-solid fa-bars"></i>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header area end here -->

        <!-- Sidebar area start here -->
        <div id="targetElement" class="sidebar-area sidebar__hide">
            <div class="sidebar__overlay"></div>
            <a href="index.php" class="logo ">
                <img src="assets/images/logo/mobile.png" alt="logo" style="width:100px; margin-top:-30px;">
            </a>
            <!-- <div class="sidebar__search mb-30">
            <input type="text" placeholder="Search...">
            <i class="fa-regular fa-magnifying-glass"></i>
        </div> -->
            <div class="mobile-menu overflow-hidden"></div>
            <button id="closeButton" class="text-white"><i
                    class="fa-solid fa-xmark"></i></button>
        </div>