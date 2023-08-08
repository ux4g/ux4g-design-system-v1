<?php
$title = 'UX4G About Us | All you need to know about UX4G';
$description = 'UX4G is a flagship initiative of the Ministry of Electronics & IT (MeitY) under the Digital India programme. It is designed for government applications.';
$keywords = 'UX4G About Us';

include '../_header.php';

?>
<main>
    <div class="header_white_space"></div>

    <div class="main_raper">
        <!-- mobile view -->
        <div class="left_side left_side_mobile slidingDiv" style="display: none;">
            <button  class="hidden-md hidden-lg d-lg-none left_menu_show_hide">
                <svg class="close_left_menu">
                    <use xlink:href="/assets/img/symbol.svg#icon_close"></use>
                </svg>
            </button>
            <nav class="navbar navbar-expand-lg">
                <div class="flex-column" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li> -->

                        <li class="nav-item dropdown show">
                            <a class="nav-link d-inline-block" href="/category/about-us.php">
                            About
                                <a href="" class="nav-link d-inline-block" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="true">
                                    <span class="dropdown-toggle"></span>
                                </a>
                            </a>
                            <ul class="dropdown-menu show position-relative" aria-labelledby="navbarDropdown">
                                <li ><a class="dropdown-item" href="/about/overview.php">Overview
                                        </a></li>
                                <li class="active_left_menu_sub"><a class="dropdown-item"
                                        href="/about/team.php">Team</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/about/brand.php">Brand</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/about/license.php">License</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/about/translations.php">Translations</a>
                                </li>
                                
                                
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>
    </div>
        <!-- mobile view end -->
    <div class="left_side d-none d-sm-block">
            <nav class="navbar navbar-expand-lg">
                <div class="flex-column" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li> -->

                        <li class="nav-item dropdown show">
                            <a class="nav-link d-inline-block" href="/category/about-us.php">
                            About
                                <a href="" class="nav-link d-inline-block" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="true">
                                    <span class="dropdown-toggle"></span>
                                </a>
                            </a>
                            <ul class="dropdown-menu show position-relative" aria-labelledby="navbarDropdown">
                                <li ><a class="dropdown-item" href="/about/overview.php">Overview
                                        </a></li>
                                <li class="active_left_menu_sub"><a class="dropdown-item"
                                        href="/about/team.php">Team</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/about/brand.php">Brand</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/about/license.php">License</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/about/translations.php">Translations</a>
                                </li>
                                
                                
                            </ul>
                        </li>
                        
                        
                        
                    </ul>
                </div>
            </nav>
    </div>
        <div class="body_raper">
            <div class="body_raper_content">
                <div class="pl-10 pr-10">
                    <!-- breadcrumb -->
                    <nav class="mb-30 mt-50" style="--bs-breadcrumb-divider: url(/assets/img/icon/chevron.svg)"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a
                                    href="/">
                                    <i class="fa fa-home"></i>
                                </a></li>
                            <li class="breadcrumb-item"><a
                                    href="/category/about-us.php">About</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Team</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row"><div class="col-lg-9">
                    <h1 class="mb-30"> Team</h1>
                    <p>An overview of the founding team and core contributors to UX4G.</p>
                    <p style="min-height:500px">UX4G is maintained by the founding team and a small group of invaluable core contributors, with the massive support and involvement of our community.</p>

<!-- end flat -->


<!-- pagination -->
<div class="col-12 col-sm-12">
            <ul class="pagination pagination_custom justify-content-between">
                    <a class="page-link border-0" href="/about/overview.php">
                        <span>Previous</span>
                        <strong class="d-block">« Overview</strong>
                    </a>
                    <a class="page-link border-0 float-end" href="/about/brand.php">
                        <span class="text-end">Next</span>
                        <strong class="d-block">Brand »</strong>
                    </a>
                       
                </ul>
                </div>
            <!-- pagination end -->



                </div>
            </div>

        </div>

    </div>
</main>


<!-- jQuery CDN -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- slick Carousel CDN -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>



<!-- reach us form -->


<?php
   include '../_footer.php';
    ?>