<?php
$title = 'UX4G | Float';
$canonical = 'https://doc.ux4g.gov.in/utilities/float.php';

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
                            <li class="breadcrumb-item"><a href="/category/utilities.php">Utilities</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Float</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row">

                        <div class="col-lg-9">
                            <h1>Float</h1>
                            <p>Toggle floats on any element, across any breakpoint, using our responsive float
                                utilities.</p>
                            <h2>Overview <a href="" id="Overview" class="opacity-0 hover-1">#</a></h2>
                            <p>These utility classes float an element to the left or right, or disable floating, based
                                on the current viewport size using the <a
                                    href="https://developer.mozilla.org/en-US/docs/Web/CSS/float" target="_blank">CSS
                                    <code>float</code> property</a>. <code>!important</code> is included to avoid
                                specificity issues. These use the same viewport breakpoints as our grid system. Please
                                be aware float utilities have no effect on flex items.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                    onclick="copyToClipboard('copyText1', 'copyButton1')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText1"><code>&lt;div class=&quot;float-start&quot;&gt;Float start on all viewport sizes&lt;/div&gt;&lt;br&gt;
&lt;div class=&quot;float-end&quot;&gt;Float end on all viewport sizes&lt;/div&gt;&lt;br&gt;
&lt;div class=&quot;float-none&quot;&gt;Don't float on all viewport sizes&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example">
                                    <div class="float-start">Float start on all viewport sizes</div><br>
                                    <div class="float-end">Float end on all viewport sizes</div><br>
                                    <div class="float-none">Don't float on all viewport sizes</div>
                                </div>
                            </div>
                            <!-- code end -->

                            <h2>Responsive <a href="" id="Responsive" class="opacity-0 hover-1">#</a></h2>
                            <p>Responsive variations also exist for each <code>float</code> value.</p>

                            <!-- code snippet -->
                            <div class="code_bg round p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton2"
                                    onclick="copyToClipboard('copyText2', 'copyButton2')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre
                                    id="copyText2"><code>&lt;div class=&quot;float-sm-start&quot;&gt;Float start on viewports sized SM (small) or wider&lt;/div&gt;&lt;br&gt;
&lt;div class=&quot;float-md-start&quot;&gt;Float start on viewports sized MD (medium) or wider&lt;/div&gt;&lt;br&gt;
&lt;div class=&quot;float-lg-start&quot;&gt;Float start on viewports sized LG (large) or wider&lt;/div&gt;&lt;br&gt;
&lt;div class=&quot;float-xl-start&quot;&gt;Float start on viewports sized XL (extra-large) or wider&lt;/div&gt;&lt;br&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg round p-3 mb-20">
                                <div class="bd-example m-0 border-0">
                                    <div class="float-sm-end">Float end on viewports sized SM (small) or wider</div><br>
                                    <div class="float-md-end">Float end on viewports sized MD (medium) or wider</div>
                                    <br>
                                    <div class="float-lg-end">Float end on viewports sized LG (large) or wider</div><br>
                                    <div class="float-xl-end">Float end on viewports sized XL (extra large) or wider
                                    </div><br>
                                    <div class="float-xxl-end">Float end on viewports sized XXL (extra extra large) or
                                        wider</div><br>
                                </div>
                            </div>
                            <!-- code end -->
                            <p>Here are all the support classes:</p>
                            <ul class="un_order_list">
                                <li><code>.float-start</code></li>
                                <li><code>.float-end</code></li>
                                <li><code>.float-none</code></li>
                                <li><code>.float-sm-start</code></li>
                                <li><code>.float-sm-end</code></li>
                                <li><code>.float-sm-none</code></li>
                                <li><code>.float-md-start</code></li>
                                <li><code>.float-md-end</code></li>
                                <li><code>.float-md-none</code></li>
                                <li><code>.float-lg-start</code></li>
                                <li><code>.float-lg-end</code></li>
                                <li><code>.float-lg-none</code></li>
                                <li><code>.float-xl-start</code></li>
                                <li><code>.float-xl-end</code></li>
                                <li><code>.float-xl-none</code></li>
                                <li><code>.float-xxl-start</code></li>
                                <li><code>.float-xxl-end</code></li>
                                <li><code>.float-xxl-none</code></li>
                            </ul>

                            <h2 class="mb-20">Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
                            <h3>Utilities API <a href="" id="Utilities-API" class="opacity-0 hover-1">#</a></h3>
                            <p>Float utilities are declared in our utilities API in <code>scss/_utilities.scss</code>.
                                <a href="/utilities/api.php/#Using-the-API">Learn how to use the utilities API.</a>
                            </p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton3"
                                    onclick="copyToClipboard('copyText3', 'copyButton3')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText3"><code>&quot;float&quot;: (
      responsive: true,
      property: float,
      values: (
        start: left,
        end: right,
        none: none,
      )
    ),
    </code></pre>
                            </div>
                            <!-- code snippet end -->


                        </div>

                        <!-- right side scrollbar -->
                        <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">

                                    <li><a href="#Overview">Overview </a></li>
                                    <li><a href="#Responsive">Responsive</a></li>


                                    <li><a href="#Sass">Sass</a>
                                        <ul>
                                            <li>
                                                <a href="#Utilities-API">Utilities API</a>
                                            </li>
                                        </ul>
                                    </li>


                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- end flat -->

                    <!-- pagination -->
                    <div class="col-12 col-sm-9 mt-30">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/utilities/flex.php">
                                <span>Previous</span>
                                <strong class="d-block">« Flex</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/interactions.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Interactions »</strong>
                            </a>

                        </ul>
                    </div>
                    <!-- pagination end -->





                </div>
            </div>

        </div>

    </div>
</main>






<!-- reach us form -->


<?php
   include '../_footer.php';
    ?>
<?php
include '../_search-docs.php';
?>