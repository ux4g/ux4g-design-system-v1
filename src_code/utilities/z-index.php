<?php
$title = 'UX4G | Text';
$canonical = 'https://doc.ux4g.gov.in/utilities/z-index.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Text</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row">

                        <div class="col-lg-9">
                            <h1>Z-index</h1>
                            <p>Use our low-level z-index utilities to quickly change the stack level of an element or
                                component.</p>
                            <h2 class="mt-20">Example <a href="" id="Example" class="opacity-0 hover-1">#</a>
                            </h2>
                            <p>Use z-index utilities to stack elements on top of one another. Requires a position value
                                other than static, which can be set with custom styles or using our <a
                                    href="/utilities/position.php">position utilities</a>.</p>

                            <div class="blockquote">
                                We call these “low-level” <code>z-index</code> utilities because of their default values
                                of -1
                                through 3, which we use for the layout of overlapping components. High-level
                                <code>z-index</code>
                                values are used for overlay components like modals and tooltips.
                            </div>
                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                    onclick="copyToClipboard('copyText1', 'copyButton1')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre
                                    id="copyText1"><code>&lt;div class=&quot;z-3 position-absolute p-5 rounded-3&quot;&gt;&lt;span&gt;z-3&lt;/span&gt;&lt;/div&gt;
&lt;div class=&quot;z-2 position-absolute p-5 rounded-3&quot;&gt;&lt;span&gt;z-2&lt;/span&gt;&lt;/div&gt;
&lt;div class=&quot;z-1 position-absolute p-5 rounded-3&quot;&gt;&lt;span&gt;z-1&lt;/span&gt;&lt;/div&gt;
&lt;div class=&quot;z-0 position-absolute p-5 rounded-3&quot;&gt;&lt;span&gt;z-0&lt;/span&gt;&lt;/div&gt;
&lt;div class=&quot;z-n1 position-absolute p-5 rounded-3&quot;&gt;&lt;span&gt;z-n1&lt;/span&gt;&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example m-0 border-0 bd-example-zindex-levels position-relative z-index-1"
                                    style="z-index:0">
                                    <div class="z-3 position-absolute p-5 rounded-3"><span>z-3</span></div>
                                    <div class="z-2 position-absolute p-5 rounded-3"><span>z-2</span></div>
                                    <div class="z-1 position-absolute p-5 rounded-3"><span>z-1</span></div>
                                    <div class="z-0 position-absolute p-5 rounded-3"><span>z-0</span></div>
                                    <div class="z-n1 position-absolute p-5 rounded-3"><span>z-n1</span></div>
                                </div>
                            </div>
                            <!-- code end-->



                            <h2>Overlays <a href="" id="Overlays" class="opacity-0 hover-1">#</a></h2>
                            <p>Bootstrap overlay components—dropdown, modal, offcanvas, popover, toast, and tooltip—all
                                have their own <code>z-index</code> values to ensure a usable experience with competing
                                “layers” of
                                an interface.</p>
                            <p>Read about them in the <a href="/layout/z-index.php">z-index layout page</a>.</p>





                            <h2>Component approach <a href="" id="Component-approach" class="opacity-0 hover-1">#</a>
                            </h2>
                            <p>On some components, we use our low-level <code> z-index</code> values to manage repeating
                                elements that
                                overlap one another (like buttons in a button group or items in a list group).
                            </p>
                            <p>Learn about our z-index approach.</p>


                            <h2>Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
                            <h3>Sass maps <a href="" id="Sass-maps" class="opacity-0 hover-1">#</a></h3>
                            <p>Customize this Sass map to change the available values and generated utilities.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton2"
                                    onclick="copyToClipboard('copyText2', 'copyButton2')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText2"><code>$zindex-levels: (
  n1: -1,
  0: 0,
  1: 1,
  2: 2,
  3: 3
);</code></pre>
                            </div>
                            <!-- code snippet end-->
                            <h3>Sass utilities API <a href="" id="Sass-utilities-API" class="opacity-0 hover-1">#</a>
                            </h3>
                            <p>Position utilities are declared in our utilities API in scss/_utilities.scss. <a
                                    href="/utilities/api.php#using-the-API">Learn how
                                    to use the utilities API</a>.
                            </p>
                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton3"
                                    onclick="copyToClipboard('copyText3', 'copyButton3')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText3"><code>&quot;z-index&quot;: (
  property: z-index,
  class: z,
  values: $zindex-levels,
)</code></pre>
                            </div>
                            <!-- code snippet end-->
                        </div>

                        <!-- right side scrollbar -->
                        <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">
                                    <li><a href="#Example">Example</a></li>
                                    <li><a href="#Overlays">Overlays</a></li>
                                    <li><a href="#Component-approach">Component approach</a></li>
                                    <li><a href="#Sass">Sass</a>
                                        <ul>
                                            <li>
                                                <a href="#Sass-maps">Sass maps</a>
                                            </li>
                                            <li>
                                                <a href="#Sass-utilities-API">Sass utilities API</a>
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
                            <a class="page-link border-0" href="/utilities/visibility.php">
                                <span>Previous</span>
                                <strong class="d-block">Visibility »</strong>
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