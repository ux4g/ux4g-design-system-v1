<?php
$title = 'UX4G | Content';
$canonical = 'https://doc.ux4g.gov.in/getting-started/content.php';

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
            <div class="body_raper_content pl-15 pr-15">
                <div >
                    <!-- breadcrumb -->
                    <nav class="mb-30 mt-50" style="--bs-breadcrumb-divider: url(/assets/img/icon/chevron.svg)"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">
                                    <i class="fa fa-home"></i>
                                </a></li>
                            <li class="breadcrumb-item"><a href="/category/getting-started.php">Getting Started</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contents</li>
                        </ol>
                    </nav>

                    <h1 class="mb-30">Contents</h1>
                    <h2>Precompiled UX4G <a href="" id="Precompiled-UX4G" class="opacity-0 hover-1">#</a> </h2>
                    <p>When receiving the compressed folder, unzip it, and it will look something similar:</p>
                </div>
                <!-- body content -->

                <!-- product -->
                <section class="product  pt-50 pb-50 pl-15 pr-15">

                    <div class="row">
                        <div class="col-sm-9">

                            <div class="body_content ">
                                <div class="rounded code_bg p-3 mb-30">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                                onclick="copyToClipboard('copyText1', 'copyButton1')">
                                                <i class="fa fa-copy" id="iconCopied1"></i>
                                            </button>
                                    <pre id="copyText1">
<code>ux4g/
├── css/
│   ├── ux4g-grid.css
│   ├── ux4g-grid.css.map
│   ├── ux4g-grid.min.css
│   ├── ux4g-grid.min.css.map
│   ├── ux4g-grid.rtl.css
│   ├── ux4g-grid.rtl.css.map
│   ├── ux4g-grid.rtl.min.css
│   ├── ux4g-grid.rtl.min.css.map
│   ├── ux4g-reboot.css
│   ├── ux4g-reboot.css.map
│   ├── ux4g-reboot.min.css
│   ├── ux4g-reboot.min.css.map
│   ├── ux4g-reboot.rtl.css
│   ├── ux4g-reboot.rtl.css.map
│   ├── ux4g-reboot.rtl.min.css
│   ├── ux4g-reboot.rtl.min.css.map
│   ├── ux4g-utilities.css
│   ├── ux4g-utilities.css.map
│   ├── ux4g-utilities.min.css
│   ├── ux4g-utilities.min.css.map
│   ├── ux4g-utilities.rtl.css
│   ├── ux4g-utilities.rtl.css.map
│   ├── ux4g-utilities.rtl.min.css
│   ├── ux4g-utilities.rtl.min.css.map
│   ├── ux4g.css
│   ├── ux4g.css.map
│   ├── ux4g.min.css
│   ├── ux4g.min.css.map
│   ├── ux4g.rtl.css
│   ├── ux4g.rtl.css.map
│   ├── ux4g.rtl.min.css
│   └── ux4g.rtl.min.css.map
└── js/
    ├── ux4g.bundle.js
    ├── ux4g.bundle.js.map
    ├── ux4g.bundle.min.js
    ├── ux4g.bundle.min.js.map
    ├── ux4g.esm.js
    ├── ux4g.esm.js.map
    ├── ux4g.esm.min.js
    ├── ux4g.esm.min.js.map
    ├── ux4g.js
    ├── ux4g.js.map
    ├── ux4g.min.js
    └── ux4g.min.js.map</code>
 </pre>
                                </div>
                                <p>This is the most basic form of UX4G: precompiled files for quick
                                    drop-in usage in nearly any web project. We provide compiled CSS and
                                    JS (<code >UX4G.*</code>), as well as compiled and
                                    minified CSS and
                                    JS (<code >UX4G.min.*</code>). <a
                                        href="https://developers.google.com/web/tools/chrome-devtools/javascript/source-maps"
                                        target="_blank" rel="noopener noreferrer">Source maps</a>
                                    (<code>UX4G.*.map</code>) are available for use with certain
                                    browsers' developer tools. Bundled JS files
                                    (<code>UX4G.bundle.js</code> and minified
                                    <code>UX4G.bundle.min.js</code>) include <a href="https://popper.js.org/"
                                        target="_blank" rel="noopener noreferrer">Popper</a>.
                                </p>
                                <h2>CSS files <a href="" id="CSS-files" class="opacity-0 hover-1">#</a> </h2>
                                <p>UX4G includes a handful of options for including some or all of our
                                    compiled CSS.</p>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>CSS files</th>
                                                <th>Layout</th>
                                                <th>Content</th>
                                                <th>Components</th>
                                                <th>Utilities</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><code >UX4G.css</code><br>
                                                    <code >UX4G.min.css</code><br>
                                                    <code>UX4G.rtl.css</code><br>
                                                    <code >UX4G.rtl.min.css</code>
                                                </td>
                                                <td>Included</td>
                                                <td>Included</td>
                                                <td>Included</td>
                                                <td>Included</td>
                                            </tr>
                                            <tr>
                                                <td><code >UX4G-grid.css</code><br>
                                                    <code >UX4G-grid.rtl.css</code><br>
                                                    <code >UX4G-grid.min.css</code><br>
                                                    <code >UX4G-grid.rtl.min.css</code>
                                                </td>
                                                <td><a href="/layout/grid.php">Only grid
                                                        system</a></td>
                                                <td>—</td>
                                                <td>—</td>
                                                <td><a href="/utilities/flex.php">Only flex utilities</a></td>
                                            </tr>
                                            <tr>
                                                <td><code >UX4G-utilities.css</code><br>
                                                    <code >UX4G-utilities.rtl.css</code><br>
                                                    <code >UX4G-utilities.min.css</code><br>
                                                    <code >UX4G-utilities.rtl.min.css</code>
                                                </td>
                                                <td>—</td>
                                                <td>—</td>
                                                <td>—</td>
                                                <td>Included</td>
                                            </tr>
                                            <tr>
                                                <td><code >UX4G-reboot.css</code><br>
                                                    <code >UX4G-reboot.rtl.css</code><br>
                                                    <code >UX4G-reboot.min.css</code><br>
                                                    <code >UX4G-reboot.rtl.min.css</code>
                                                </td>
                                                <td>—</td>
                                                <td><a href="/content/reboot.php">Only Reboot</a></td>
                                                <td>—</td>
                                                <td>—</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h2>JS files <a href="" id="JS-files" class="opacity-0 hover-1">#</a> </h2>
                                <p>Similarly, we have options for including some or all of our compiled
                                    JavaScript.</p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>JS Files</th>
                                            <th>Popper</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code >UX4G.bundle.js</code><br>
                                                <code >UX4G.bundle.min.js</code><br>
                                            </td>
                                            <td>Included</td>
                                        </tr>
                                        <tr>
                                            <td><code >UX4G.js</code><br>
                                                <code>UX4G.min.js</code><br>
                                            </td>
                                            <td>–</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">
                                    <li><a href="#Precompiled-UX4G">Precompiled UX4G</a></li>
                                    <li><a href="#CSS-files">CSS files</a></li>
                                    <li><a href="#JS-files">JS files</a></li>

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                </section>
                <!-- pagination -->
                <div class="col-12 col-sm-9">
                    <ul class="pagination pagination_custom justify-content-between">
                        <a class="page-link border-0" href="/getting-started/download.php">
                            <span class="text-end">Previous</span>
                            <strong class="d-block">« Download</strong>
                        </a>
                        <a class="page-link border-0 float-end" href="/category/content.php">
                            <span class="text-end">Next</span>
                            <strong class="d-block">Contents »</strong>
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