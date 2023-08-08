<?php
$title = 'UX4G | Sizing';
$canonical = 'https://doc.ux4g.gov.in/utilities/sizing.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Sizing</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row">

                        <div class="col-lg-9">
                            <h1>Sizing</h1>
                            <p>Easily make an element as wide or as tall with our width and height utilities.</p>

                            <h2 class="mt-20">Relative to the parent <a href="" id="Relative-to-the-parent"
                                    class="opacity-0 hover-1">#</a></h2>
                            <p>Width and height utilities are generated from the utility API in
                                <code>_utilities.scss</code>. Includes support for <code>25%</code>, <code>50%</code>,
                                <code>75%</code>, <code>100%</code>, and <code>auto</code> by default. Modify those
                                values as you need to generate different utilities here.
                            </p>

                            <!-- code snippet -->
                            <div class="rounded code_bg p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                    onclick="copyToClipboard('copyText1', 'copyButton1')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText1"><code>&lt;div class=&quot;w-25 p-3&quot; style=&quot;background-color: #eee;&quot;&gt;Width 25%&lt;/div&gt;
&lt;div class=&quot;w-50 p-3&quot; style=&quot;background-color: #eee;&quot;&gt;Width 50%&lt;/div&gt;
&lt;div class=&quot;w-75 p-3&quot; style=&quot;background-color: #eee;&quot;&gt;Width 75%&lt;/div&gt;
&lt;div class=&quot;w-100 p-3&quot; style=&quot;background-color: #eee;&quot;&gt;Width 100%&lt;/div&gt;
&lt;div class=&quot;w-auto p-3&quot; style=&quot;background-color: #eee;&quot;&gt;Width auto&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="rounded code_bg p-3 mb-20">
                                <div class="bd-example m-0 border-0 bd-example-flex">
                                    <div class="w-25 p-3">Width 25%</div>
                                    <div class="w-50 p-3">Width 50%</div>
                                    <div class="w-75 p-3">Width 75%</div>
                                    <div class="w-100 p-3">Width 100%</div>
                                    <div class="w-auto p-3">Width auto</div>
                                </div>
                            </div>
                            <!-- code end -->

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton2"
                                    onclick="copyToClipboard('copyText2', 'copyButton2')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText2"><code>&lt;div style=&quot;height: 100px; background-color: rgba(255,0,0,0.1);&quot;&gt;
  &lt;div class=&quot;h-25 d-inline-block&quot; style=&quot;width: 120px; background-color: rgba(0,0,255,.1)&quot;&gt;Height 25%&lt;/div&gt;
  &lt;div class=&quot;h-50 d-inline-block&quot; style=&quot;width: 120px; background-color: rgba(0,0,255,.1)&quot;&gt;Height 50%&lt;/div&gt;
  &lt;div class=&quot;h-75 d-inline-block&quot; style=&quot;width: 120px; background-color: rgba(0,0,255,.1)&quot;&gt;Height 75%&lt;/div&gt;
  &lt;div class=&quot;h-100 d-inline-block&quot; style=&quot;width: 120px; background-color: rgba(0,0,255,.1)&quot;&gt;Height 100%&lt;/div&gt;
  &lt;div class=&quot;h-auto d-inline-block&quot; style=&quot;width: 120px; background-color: rgba(0,0,255,.1)&quot;&gt;Height auto&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>

                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example m-0 border-0 bd-example-flex">
                                    <div style="height: 100px;">
                                        <div class="h-25 d-inline-block" style="width: 120px;">Height 25%</div>
                                        <div class="h-50 d-inline-block" style="width: 120px;">Height 50%</div>
                                        <div class="h-75 d-inline-block" style="width: 120px;">Height 75%</div>
                                        <div class="h-100 d-inline-block" style="width: 120px;">Height 100%</div>
                                        <div class="h-auto d-inline-block" style="width: 120px;">Height auto</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->
                            <p>You can also use <code>max-width: 100%;</code> and <code>max-height: 100%;</code>
                                utilities as needed.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton3"
                                    onclick="copyToClipboard('copyText3', 'copyButton3')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText3"><code>&lt;div style=&quot;width: 50%; height: 100px;&quot;&gt;
  &lt;div class=&quot;mw-100&quot; style=&quot;width: 200%;&quot;&gt;Max-width 100%&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example m-0 border-0 bd-example-flex">
                                    <div style="width: 50%; height: 100px;">
                                        <div class="mw-100" style="width: 200%;">Max-width 100%</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton4"
                                    onclick="copyToClipboard('copyText4', 'copyButton4')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText4"><code>&lt;div style=&quot;height: 100px; background-color: rgba(255,0,0,.1);&quot;&gt;
  &lt;div class=&quot;mh-100&quot; style=&quot;width: 100px; height: 200px; background-color: rgba(0,0,255,.1);&quot;&gt;Max-height 100%&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>

                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example m-0 border-0 bd-example-flex">
                                    <div style="height: 100px;">
                                        <div class="mh-100" style="width: 100px; height: 200px;">Max-height 100%</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->

                            <h2>Relative to the viewport <a href="" id="Relative-to-the-viewport"
                                    class="opacity-0 hover-1">#</a></h2>
                            <p>You can also use utilities to set the width and height relative to the viewport.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 mb-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton5"
                                    onclick="copyToClipboard('copyText5', 'copyButton5')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText5"><code>&lt;div class=&quot;min-vw-100&quot;&gt;Min-width 100vw&lt;/div&gt;
&lt;div class=&quot;min-vh-100&quot;&gt;Min-height 100vh&lt;/div&gt;
&lt;div class=&quot;vw-100&quot;&gt;Width 100vw&lt;/div&gt;
&lt;div class=&quot;vh-100&quot;&gt;Height 100vh&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h2 class="mb-20">Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
                            <h3>Utilities API <a href="" id="Utilities-API" class="opacity-0 hover-1">#</a></h3>
                            <p>Sizing utilities are declared in our utilities API in <code>scss/_utilities.scss</code>.
                                <a href="/utilities/api.php/#Using-the-API">Learn how to use the utilities API.</a>
                            </p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton6"
                                    onclick="copyToClipboard('copyText6', 'copyButton6')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText6"><code>"width": (
      property: width,
      class: w,
      values: (
        25: 25%,
        50: 50%,
        75: 75%,
        100: 100%,
        auto: auto
      )
    ),
    "max-width": (
      property: max-width,
      class: mw,
      values: (100: 100%)
    ),
    "viewport-width": (
      property: width,
      class: vw,
      values: (100: 100vw)
    ),
    "min-viewport-width": (
      property: min-width,
      class: min-vw,
      values: (100: 100vw)
    ),
    "height": (
      property: height,
      class: h,
      values: (
        25: 25%,
        50: 50%,
        75: 75%,
        100: 100%,
        auto: auto
      )
    ),
    "max-height": (
      property: max-height,
      class: mh,
      values: (100: 100%)
    ),
    "viewport-height": (
      property: height,
      class: vh,
      values: (100: 100vh)
    ),
    "min-viewport-height": (
      property: min-height,
      class: min-vh,
      values: (100: 100vh)
    ),
    </code></pre>
                            </div>
                            <!-- code snippet end -->

                        </div>

                        <!-- right side scrollbar -->
                        <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">
                                    <li>
                                        <a href="#Relative-to-the-parent">Relative to the parent</a>
                                    </li>
                                    <li>
                                        <a href="#Relative-to-the-viewport">Relative to the viewport</a>
                                    </li>
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
                            <a class="page-link border-0" href="/utilities/shadows.php">
                                <span>Previous</span>
                                <strong class="d-block">« Shadows</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/spacing.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Spacing »</strong>
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