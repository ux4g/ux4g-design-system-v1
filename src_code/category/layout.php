<?php
$title = 'UX4G | Layout';
$canonical = 'https://doc.ux4g.gov.in/category/layout.php';


include '../_header.php';

?>
<main>
    <div class="header_white_space"></div>

    <div class="main_raper">
         <!-- side-menu-getting-started -->    
 <?php
    include '../_side-menu-getting-started.php';
?>
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
                            <li class="breadcrumb-item active" aria-current="page">Layout</li>
                        </ol>
                    </nav>
                    <h1 class="mb-30">Layout</h1>
                </div>
                <!-- body content -->

                <!-- product -->
                <section class="product  pt-50 pb-50">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/layout/breakpoints.php">
                                    <h5 class="text-truncate " title="Accordion"><i class="fa fa-file-code"></i> Breakpoints</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Breakpoints are customizable widths that determine how your responsive layout behaves across device or viewport sizes in UX4G.">
                                        Breakpoints are customizable widths that determine how your responsive layout behaves across device or viewport sizes in UX4G.</p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/layout/columns.php">
                                    <h5 class="text-truncate " title="Columns"><i class="fa fa-file-code"></i> Columns</h5>

                                    <p class="fs-12 text-truncate "
                                        title="Download UX4G to get the compiled CSS and JavaScript, source code.">
                                        Learn how to modify columns with a handful of options for alignment, ordering, and offsetting thanks to our flexbox grid system. Plus, see how to use column classes to manage widths of non-grid elements.</p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/layout/containers.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Containers</h5>

                                    <p class="fs-12 text-truncate "
                                        title="Containers are a fundamental building block of UX4G that contain, pad, and align your content within a given device or viewport.">
                                        Containers are a fundamental building block of UX4G that contain, pad, and align your content within a given device or viewport.
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/layout/css-grid.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> CSS Grid</h5>

                                    <p class="fs-12 text-truncate "
                                        title="UX4G's default grid system represents the culmination of over a decade of CSS layout techniques, tried and tested by millions of people. But, it was also created without many of the modern CSS features and techniques we're seeing in browsers like the new CSS Grid.">
                                        UX4G's default grid system represents the culmination of over a decade of CSS layout techniques, tried and tested by millions of people. But, it was also created without many of the modern CSS features and techniques we're seeing in browsers like the new CSS Grid.
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/layout/grid.php">
                                    <h5 class="text-truncate " title="Grid"><i class="fa fa-file-code"></i> Grid</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a twelve column system, six default responsive tiers, Sass variables and mixins, and dozens of predefined classes.">
                                        Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a twelve column system, six default responsive tiers, Sass variables and mixins, and dozens of predefined classes.
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/layout/gutters.php">
                                    <h5 class="text-truncate " title="Gutters"><i class="fa fa-file-code"></i> Gutters</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Gutters are the padding between your columns, used to responsively space and align content in the UX4G grid system.">
                                        Gutters are the padding between your columns, used to responsively space and align content in the UX4G grid system.
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/layout/utilities.php">
                                    <h5 class="text-truncate " title="Utilities"><i class="fa fa-file-code"></i> Utilities</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Changing display">
                                        Changing display
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/layout/z-index.php">
                                    <h5 class="text-truncate " title="Z-Index"><i class="fa fa-file-code"></i> Z-Index</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Changing display">
                                        Z-Index
                                    </p>
                                </a>
                            </div>


                        </div>
                    </div>

                </section>
                <!-- pagination -->
            <div class="col-12">
            <ul class="pagination pagination_custom justify-content-between">
                    <a class="page-link border-0" href="/content/typography.php">
                        <span>Previous</span>
                        <strong class="d-block">« Typography</strong>
                    </a>
                    <a class="page-link border-0 float-end" href="/layout/breakpoints.php">
                        <span class="text-end">Next</span>
                        <strong class="d-block">Breakpoints »</strong>
                    </a>
                       
                </ul>
                </div>
            <!-- pagination end -->
            </div>
        </div>

    </div>
</main>

<?php
   include '../_footer.php';
    ?>
