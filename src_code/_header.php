<!-- <?php
$base_path = 'http://www.localhost/design-system-html/src_code/';
?> -->
<!doctype html>
<html class="no-js" lang="en" id="html">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <!-- <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/logo/logo.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="https://img1.digitallocker.gov.in/nad/v-22/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/scss/stylesheet.css">
    <link rel="stylesheet" href="/assets/css/ux4g-v1.css"> 

    

</head>


<body id="body">
    

    <!-- header start -->
    <header class="position-sticky top-0 z-index-1">
    <div class="header-top pl-15 pr-15">        
            <div class="row">
                <div class="col-xl-6 col-lg-3 d-flex col-sm-6 col-6 align-items-left">
                
                    <span class="goi"><a href="https://www.india.gov.in/" target="_blank" class="goi"><img
                                src="/assets/img/icon/in-flag.png" class="img-fluid" alt="indian flag"
                                loading="lazy"><strong class="fs-11">Government of
                                India</strong></a></span>
                </div>
                <div class="col-xl-6 col-lg-9 col-sm-6 col-6 text-end">
                    
                    <span class=" d-none d-md-inline">
                        <!-- <a href="#main" title="Skip to main content" class="skip01"><strong>Skip to Main
                                Content</strong></a> <span class="partition">|</span> -->
                        <button role="button" id="btn-decrease" class="font01" onclick="decrease()">
                            -A
                        </button>
                        <button role="button" id="btn-orig" class="font01 active01" onclick="reset()">
                            A
                        </button>

                        <button role="button" id="btn-increase" class="font01" onclick="increase()">
                            A+
                        </button><span class="partition">|</span>

                    </span>


                    <span class="light_dark_icon">
                        <!-- <img src="/assets/img/icon/theme-switch.png" alt="Light dark theme switch icon" class="checkbox" id="checkbox"> -->
                        <input type="checkbox" class="light_mode" id="checkbox">
                        <label for="checkbox" class="checkbox-label">
                            <i class="fas fa-moon"></i>
                            <i class="fas fa-sun"></i>
                            <span class="ball"></span>
                        </label>
                    </span>
                    <span class="language01">
                        <form id="langForm" method='POST'>
                            <i class="fal fa-globe"></i>
                            <select name='language' id='changeLang' onChange="OnSelectedIndexChange()">
                                <option value="" selected disable>Language</option>
                                <option value="en">English</option>
                            </select>
                        </form>
                    </span>
                </div>
            </div>        
    </div>
        <div id="header-sticky" class="header-area shadow-sm header-white transparent-header pt-2 pb-2 mt-sm-0">
            

                <div class="nav_custom pl-15 pr-15">
                <!-- <button class="left_menu_show_hide hidden-md hidden-lg  d-lg-none ">
                    <svg class="icon_hamburger">
                        <use xlink:href="/assets/img/symbol.svg#icon_hamburger"></use>
                    </svg>
                </button> -->
                        <button class="navbar-toggler hidden-md hidden-lg  d-lg-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <!-- <span class="navbar-toggler-icon"></span> -->
                            <svg class="menu_icon_ellipsis">
                                <use xlink:href="/assets/img/symbol.svg#icon_ellipsis"></use>
                            </svg>
                        </button>
                
                    
                    <div class="logo">
                        <!-- <a href="/">
                            <img class="meity_logo" src="assets/img/logo/Meity-Logo.png" alt="Meity Logo"
                                height="96" loading="lazy" style="width: 33%; ">
                        </a>
                        <a href="/">
                            <img src="assets/img/logo/ux4g-logo.svg" alt="ux4g logo" loading="lazy" 
                                height="43" style=" width: 23%; margin-left: 10px;">
                        </a> -->
                        <a href="/index.php">
                        <img src="/assets/img/logo/ux-emblem-logo.svg" alt="ux4g logo" loading="lazy" 
                                height="43" class="ux-logo-header">
                        
                        </a>
                        <a href="https://www.g20.in/en/" target="_blank">
                            <img class="g20_logo" src="/assets/img/logo/g20.png" alt="g20"  height="41"
                                loading="lazy" style="width: 15%;margin-left: 10px;">
                        </a>
<button type="button" class="m-search d-sm-block d-sm-none float-end d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class="fa fa-search"></i>
</button>
                    </div>
                    <nav class="navbar navbar-expand-lg">
                        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            
                            <svg class="menu_icon_ellipsis">
                                <use xlink:href="/assets/img/symbol.svg#icon_ellipsis"></use>
                            </svg>
                        </button> -->
                        <button class="left_menu_show_hide hidden-md hidden-lg  d-lg-none ">
                            <svg class="icon_hamburger">
                                <use xlink:href="/assets/img/symbol.svg#icon_hamburger"></use>
                            </svg>
                        </button>
                        <div class="collapse navbar-collapse justify-content-lg-start justify-content-md-start justify-content-sm-start"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/">Getting Started</a>
                                </li>
                                
                                
                                <li class="nav-item">
                                    <a href="/category/components.php" class="nav-link">Components</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/category/forms.php" class="nav-link">Forms</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/category/helpers.php" class="nav-link">Helpers</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="/category/about-us.php" class="nav-link">About</a>
                                </li> -->
                                <li class="nav-item mt-10 d-md-none">
                                   <button class="btn btn-outline-primary w-100"> UX4g V1.0.0</button>
                                </li>
                                
                            </ul>
                            <!-- <a class="btn btn-dark rounded-pill change" href="/category/components"
                        >Design System</a> -->
                        </div>
                        
                    </nav>

<button type="button" class="btn btn-primary float-end d-none d-sm-block search_btn d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class="fa fa-search"></i>
</button>


<!-- page search result end -->
                    <button class="btn btn-outline-dark float-end d-none d-sm-block">V1.0.0</button>
                    
                </div>

            

        </div>
        </div>
    </header>
    <!-- header end -->

    

    