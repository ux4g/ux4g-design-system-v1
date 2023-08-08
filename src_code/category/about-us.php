<?php
$title = 'UX4G | About Us';

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
                                <li><a class="dropdown-item"
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
                                <li><a class="dropdown-item"
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
                            <li class="breadcrumb-item"><a href="/">
                                    <i class="fa fa-home"></i>
                                </a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                    <h1 class="mb-30">About</h1>
                </div>
                <!-- body content -->

                <!-- product -->
                <section class="product  pt-50 pb-50">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/about/overview.php">
                                    <h5 class="text-truncate " title="Accordion">📄️ Overview</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        UX4G - A Gov Design Guide</p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/about/team.php">
                                    <h5 class="text-truncate " title="Alerts">📄️ Team</h5>

                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        An overview of the founding team and core contributors to UX4G.</p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/about/brand.php">
                                    <h5 class="text-truncate " title="Alerts">📄️ Brand</h5>

                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Documentation and examples for UX4G’s logo and brand usage guidelines.
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/about/license.php">
                                    <h5 class="text-truncate " title="Alerts">📄️ License</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Commonly asked questions about UX4G's open source license.
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/about/translations.php">
                                    <h5 class="text-truncate " title="Alerts">📄️ Translations</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Links to community-translated UX4G documentation sites.
                                    </p>
                                </a>
                            </div>                           
                            

                        </div>
                    </div>

                </section>
                <!-- pagination -->
            <div class="col-12 col-sm-12">
            <ul class="pagination pagination_custom justify-content-end">
                    <!-- <a class="page-link border-0" href="/about/overview.php">
                        <span>Previous</span>
                        <strong class="d-block">« Utilities</strong>
                    </a> -->
                    <a class="page-link border-0 float-end" href="/about/overview.php">
                        <span class="text-end">Next</span>
                        <strong class="d-block">Overview »</strong>
                    </a>
                       
                </ul>
                </div>
            <!-- pagination end -->
            </div>
        </div>

    </div>
</main>



<!-- reach us form -->


<?php
   include '../_footer.php';
    ?>