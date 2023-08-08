<?php
$title = 'UX4G | Z-index';
$canonical = 'https://doc.ux4g.gov.in/layout/z-index.php';

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
                <div>
                    <!-- breadcrumb -->
                    <nav class="mb-30 mt-50" style="--bs-breadcrumb-divider: url(/assets/img/icon/chevron.svg)"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">
                                    <i class="fa fa-home"></i>
                                </a></li>
                            <li class="breadcrumb-item"><a href="/category/layout.php">Layout</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Z-Index</li>
                        </ol>
                    </nav>



                    <!-- body content -->
                    <div class="row">
                        <div class="col-lg-9">
                            <h1 class="mb-30"> Z-Index</h1>
                            <p>Z-index is a UX4G property that helps regulate layout by offering a third axis to arrange content, and it is used by a number of UX4G components. In UX4G, there is a use of standard z-index scale that is intended to stack <code>navigation</code>, <code>tooltips</code> and <code>popovers</code>, <code>modals</code>, and other elements correctly.</p>
                            <p>
                            These higher values begin at a randomly chosen value that is high and precise enough to ideally prevent disagreements. To be somewhat consistent in the behaviors, there is a requirement of uniform set of these across all of the layered components, including <code>tooltips</code>, <code>popovers</code>, <code>navbars</code>, <code>dropdowns</code>, and <code>modals</code>.
                            </p>

                            <!-- code -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                    onclick="copyToClipboard('copyText1', 'copyButton1')">
                                    <i class="fa fa-copy" id="iconCopied1"></i>
                                </button>
                                <pre id="copyText1"><code>$zindex-dropdown:                   1000;
$zindex-sticky:                     1020;
$zindex-fixed:                      1030;
$zindex-offcanvas-backdrop:         1040;
$zindex-offcanvas:                  1045;
$zindex-modal-backdrop:             1050;
$zindex-modal:                      1055;
$zindex-popover:                    1070;
$zindex-tooltip:                    1080;
$zindex-toast:                      1090;</code></pre>
                            </div>
                            <!-- code end -->
                            <p class="mt-20 mb-20">
                                Employ low single digit <code>z-index</code> values of 1, 2, and 3 for default, <code>hover</code>, and active states to accommodate overlapping boundaries inside components (for example, buttons and inputs in input groups). Bring a certain element to the front with a higher <code>z-index</code> value to reveal their border over the sibling components when it is hovered over, <code>focused</code>, or <code>active</code>.
                            </p>
                        </div>
                    </div>




                </div>
            </div>
            <!-- pagination -->
            <div class="col-12 col-sm-9">
                <ul class="pagination pagination_custom justify-content-between">
                    <a class="page-link border-0" href="/layout/utilities.php">
                        <span>Previous</span>
                        <strong class="d-block">« Utilities</strong>
                    </a>
                    <a class="page-link border-0 float-end" href="/category/forms.php">
                            <span class="text-end">Next</span>
                            <strong class="d-block">Forms »</strong>
                        </a>
                    <!-- <a class="page-link border-0 float-end" href="/layout/z-index.php">
                        <span class="text-end">Next</span>
                        <strong class="d-block">Z-Index »</strong>
                    </a> -->

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