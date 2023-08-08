<?php
$title = 'UX4G | Download';
$canonical = 'https://doc.ux4g.gov.in/getting-started/introduction/download.php';

include '../_header.php';

?>
<main>
    <div class="header_white_space"></div>

    <div class="main_raper">
    <?php
    include '../_side-menu-getting-started.php';
    ?>
        <div class="body_raper">
            <div class="body_raper_content pl-15 pr-15" style="min-height:600px">
                <div >
                    <!-- breadcrumb -->
                    <nav class="mb-30 mt-50" style="--bs-breadcrumb-divider: url(/assets/img/icon/chevron.svg)"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">
                                    <i class="fa fa-home"></i>
                                </a></li>
                            <li class="breadcrumb-item"><a href="/category/getting-started.php">Getting Started</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Download</li>
                        </ol>
                    </nav>

                    <h1 class="mb-30">Download</h1>
                    <p class="lighttext">Download UX4G to get the compiled CSS and JavaScript, source code.</p>
                    <h3>Compiled CSS and JS <a href="" id="Compiled-CSS-and-JS" class="opacity-0 hover-1">#</a> </h3>
                    <p>
                    Drop ready-to-use compiled code for <strong> UX4G v1.0.0 </strong> into the project by downloading it, which contains:
                    </p>
                    <ul class="un_order_list pl-30">
                        <li>CSS bundles that have been combined and compressed  (see <a href="https://img1.digitallocker.gov.in/ux4g/UX4G@1.0.0/css/ux4g-min.css" target="_blank" rel="noopener noreferrer">CSS files comparison</a>)</li>
                        <li>JavaScript plugins that have been compiled and minified (see <a href="https://img1.digitallocker.gov.in/ux4g/UX4G@1.0.0/js/ux4g.min.js" target="_blank" rel="noopener noreferrer">JS files comparison</a>)</li></ul>
                        <p>This excludes any source files, documentation, or optional JavaScript dependencies like Popper.</p>

                        <a href="/assets/UX4G@1.0.0.zip" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary mb-100">Download</a>
                </div>
                <!-- body content -->

               
            </div>

            <!-- pagination -->
            <div class="col-12 col-sm-9">
            <ul class="pagination pagination_custom justify-content-between">
                    <a class="page-link border-0" href="/index.php">
                        <span class="text-end">Previous</span>
                        <strong class="d-block">« Get started with UX4G</strong>
                    </a>
                    <a class="page-link border-0 float-end" href="/getting-started/content.php">
                        <span class="text-end">Next</span>
                        <strong class="d-block">Contents »</strong>
                    </a>
                       
                </ul>
                </div>
            <!-- pagination end -->
        </div>

        

    </div>
</main>






<!-- reach us form -->


<?php
   include '../_footer.php';
    ?>

