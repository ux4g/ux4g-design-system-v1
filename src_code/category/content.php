<?php
$title = 'UX4G | Content';
$canonical = 'https://doc.ux4g.gov.in/category/content.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Content</li>
                        </ol>
                    </nav>
                    <h1 class="mb-30">Content</h1>
                </div>
                <!-- body content -->

                <!-- product -->
                <section class="product  pt-50 pb-50" style="min-height:600px">
                    <div class="container-fluid">
                    <div class="row">
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130"
                                    href="/content/figures.php">
                                    <h5 class="text-truncate " title="Accordion"><i class="fa fa-file-code"></i> Figures</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Quickly and easily clear floated content within a container by adding a clearfix utility.</p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130"
                                    href="/content/images.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Images</h5>

                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin">
                                        Responsive images</p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/content/reboot.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Reboot</h5>

                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin">
                                        Reboot, a collection of element-specific CSS changes in a single file, kickstart UX4G to provide an elegant, consistent, and simple baseline to build upon.
                                    </p>
                                </a>
                            </div>

                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/content/tables.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Tables</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Documentation and examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with UX4G.
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/content/typography.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Typography</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Global settings
                                    </p>
                                </a>
                            </div>
                            

                        </div>
                    </div>

                </section>
                <!-- pagination -->
            <div class="col-12">
            <ul class="pagination pagination_custom justify-content-between">
                    <a class="page-link border-0" href="/getting-started/introduction/content.php">
                        <span class="text-end">Previous</span>
                        <strong class="d-block">« Contents</strong>
                    </a>
                    <a class="page-link border-0 float-end" href="/content/figures.php">
                        <span class="text-end">Next</span>
                        <strong class="d-block">Figures »</strong>
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
