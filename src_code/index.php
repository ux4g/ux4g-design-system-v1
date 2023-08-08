<?php
$title = 'Get Started with UX4G Design System | UX4G';
$description = "Get started by including UX4G's production-ready CSS and JavaScript via CDN without the need for any build steps. Build your website in a new & advanced way.";
$canonical = 'https://doc.ux4g.gov.in';

include '_header.php';
?>
<main>
    <div class="header_white_space"></div>

    <div class="main_raper">
    <?php
include '_side-menu-getting-started.php';
    ?>
        <div class="body_raper" style="min-height:700px">
            <div class="body_raper_content">
                <div class="pl-10 pr-10">
                    <!-- breadcrumb -->
                    <nav class="mb-30 mt-50" style="--bs-breadcrumb-divider: url(/assets/img/icon/chevron.svg)"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">
                                    <i class="fa fa-home"></i>
                                </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Getting Started</li>
                        </ol>
                    </nav>
                    <h1 class="mb-30">Getting Started</h1>
                </div>
                <!-- body content -->

                <!-- product -->
                <section class="product  pt-50 pb-50">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/category/getting-started.php">
                                    <h5 class="text-truncate" title="Accordion"><i class="fa fa-file-code"></i> Get started with UX4G</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Quick start">
                                        Quick start</p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/getting-started/download.php">
                                    <h5 class="text-truncate" title="Alerts"><i class="fa fa-file-code"></i> Download</h5>

                                    <p class="fs-12 text-truncate "
                                        title="Download UX4G to get the compiled CSS and JavaScript, source code.">
                                        Download UX4G to get the compiled CSS and JavaScript, source code.</p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/getting-started/content.php">
                                    <h5 class="text-truncate" title="Alerts"><i class="fa fa-file-code"></i> Contents</h5>

                                    <p class="fs-12 text-truncate "
                                        title="Precompiled UX4G">
                                        Precompiled UX4G
                                    </p>
                                </a>
                            </div>


                        </div>
                    </div>

                </section>

                <!-- pagination -->
                
                <div class="col-12 pl-15 pr-15">
                <ul class="pagination pagination_custom float-end">
                    <!-- <a class="page-link border-0" href="#">
                        <span class="text-end">Previous</span>
                        <strong class="d-block">« Get started with UX4G »</strong>
                    </a> -->
                    <a class="page-link border-0 float-end" href="/category/getting-started.php">
                        <span class="text-end">Next</span>
                        <strong class="d-block">Get started with UX4G »</strong>
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
include '_footer.php';
?>
<!-- page search result-->
