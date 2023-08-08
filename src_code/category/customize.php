<?php
$title = 'UX4G | Customize';

include '../_header.php';

?>
<main>
    <div class="header_white_space"></div>

    <div class="main_raper">
        <div class="left_side">
            <nav class="navbar navbar-expand-lg">
                <div class="flex-column" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li> -->


                        <li class="nav-item dropdown">
                            <a class="nav-link d-inline-block" href="/category/getting-started.php">
                                Getting started
                                <a href="" class="nav-link d-inline-block" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="true">
                                    <span class="dropdown-toggle"></span>
                                </a>
                            </a>
                            <ul class="dropdown-menu position-relative" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.php">Get started with UX4G</a></li>
                                <li><a class="dropdown-item" href="getting-started/introduction/download.php">Download</a></li>

                                <a class="dropdown-item"   href="getting-started/introduction/content.php">Contents</a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link d-inline-block" href="/category/content.php">
                            Content
                                <a href="" class="nav-link d-inline-block" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="dropdown-toggle"></span>
                                </a>
                            </a>
                            <ul class="dropdown-menu position-relative" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="getting-started/content/figures.php">Figures</a></li>
                                <li><a class="dropdown-item" href="getting-started/content/images.php">Images</a></li>
                                <li><a class="dropdown-item" href="getting-started/content/reboot.php">Reboot</a></li>
                                <li><a class="dropdown-item" href="getting-started/content/tables.php">Tables</a></li>
                                <li><a class="dropdown-item" href="getting-started/content/typography.php">Typography</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            
                            <a class="nav-link d-inline-block" href="/category/customize.php">
                            Customize
                                <a href="" class="nav-link d-inline-block" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="dropdown-toggle"></span>
                                </a>
                            </a>
                            <ul class="dropdown-menu position-relative" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Color</a></li>
                                <li><a class="dropdown-item" href="#">Components</a></li>
                                <li><a class="dropdown-item" href="#">CSS Variables</a></li>
                                <li><a class="dropdown-item" href="#">Options</a></li>
                                <li><a class="dropdown-item" href="#">Overview</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link d-inline-block" href="/category/layout.php">
                            Layout
                                <a href="" class="nav-link d-inline-block" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="dropdown-toggle"></span>
                                </a>
                            </a>
                            <ul class="dropdown-menu position-relative" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="getting-started/layout/breakpoints.php">Breakpoints</a></li>
                                <li><a class="dropdown-item" href="getting-started/layout/columns.php">Columns</a></li>
                                <li><a class="dropdown-item" href="getting-started/layout/containers.php">Containers</a></li>
                                <li><a class="dropdown-item" href="getting-started/layout/css-grid.php">CSS Grid</a></li>
                                <li><a class="dropdown-item" href="getting-started/layout/grid.php">Grid</a></li>
                                <li><a class="dropdown-item" href="getting-started/layout/gutters.php">Gutters</a></li>
                                <li><a class="dropdown-item" href="getting-started/layout/utilities.php">Utilities</a></li>
                                <li><a class="dropdown-item" href="getting-started/layout/z-index.php">Z-Index</a></li>
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
                            <li class="breadcrumb-item active" aria-current="page">Content</li>
                        </ol>
                    </nav>
                    <h1 class="mb-30">Content</h1>
                </div>
                <!-- body content -->

                <!-- product -->
                <section class="product  pt-50 pb-50">
                    <div class="container-fluid">
                    <div class="row">
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130"
                                    href="getting-started/content/figures.php">
                                    <h5 class="text-truncate " title="Accordion">📄️ Figures</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Quickly and easily clear floated content within a container by adding a clearfix utility.</p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130"
                                    href="getting-started/content/images">
                                    <h5 class="text-truncate " title="Alerts">📄️ Images</h5>

                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin">
                                        Responsive images</p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="getting-started/content/reboot">
                                    <h5 class="text-truncate " title="Alerts">📄️ Reboot</h5>

                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin">
                                        Reboot, a collection of element-specific CSS changes in a single file, kickstart UX4G to provide an elegant, consistent, and simple baseline to build upon.
                                    </p>
                                </a>
                            </div>

                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="getting-started/content/tables">
                                    <h5 class="text-truncate " title="Alerts">📄️ Tables</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Documentation and examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with UX4G.
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="getting-started/content/typography">
                                    <h5 class="text-truncate " title="Alerts">📄️ Typography</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Global settings
                                    </p>
                                </a>
                            </div>
                            

                        </div>
                    </div>

                </section>
            </div>
        </div>

    </div>
</main>






<!-- reach us form -->


<?php
   include '../_footer.php';
    ?>