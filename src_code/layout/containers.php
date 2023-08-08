<?php
$title = 'UX4G | Containers';
$canonical = 'https://doc.ux4g.gov.in/layout/containers.php';

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
                            <li class="breadcrumb-item"><a href="/category/layout.php">Layout</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Containers</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <h1 class="mb-30">Containers</h1>
                    <p>Containers are a fundamental building block of UX4G that contain, pad, and align your content
                        within a given device or viewport.</p>

                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                        <div class="row">


                            <div class="col-sm-9">

                                <div class="body_content">
                                    <h2>How they work <a href="" id="How-they-work" class="opacity-0 hover-1">#</a></h2>
                                    <p>The most fundamental layout component in UX4G is a container, which is necessary when using the built-in grid system. The purpose of containers is to protect, centralize, and occasionally pad the substance they hold. Although containers can be nested, most layouts don't call for them.</p>
                                    <p>UX4G includes three distinct containers:</p>
                                    <ul class="un_order_list">
                                        <li>At every responsive breakpoint, <code>container</code> sets a max-width.</li>
                                        <li>Width: 100% up until the specified breakpoint is the <code>container-"breakpoint"</code> property</li>
                                        <li>Width: 100% at all breakpoints for <code>container</code> fluid.</li>
                                    </ul>
                                    <p>The comparison between each container's <code>max-width</code> and the original is shown in the table below across every breakpoint, container and <code>container-fluid</code>.</p>
                                    <p>See them in action and compare them in our <a href="/layout/grid.php">Grid example</a>.</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Extra small<div class="fw-normal">&lt;576px</div>
                                                    </th>
                                                    <th>Small<div class="fw-normal">≥576px</div>
                                                    </th>
                                                    <th>Medium<div class="fw-normal">≥768px</div>
                                                    </th>
                                                    <th>Large<div class="fw-normal">≥992px</div>
                                                    </th>
                                                    <th>X-Large<div class="fw-normal">≥1200px</div>
                                                    </th>
                                                    <th>XX-Large<div class="fw-normal">≥1400px</div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><code>.container</code></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td>540px</td>
                                                    <td>720px</td>
                                                    <td>960px</td>
                                                    <td>1140px</td>
                                                    <td>1320px</td>
                                                </tr>
                                                <tr>
                                                    <td><code>.container-sm</code></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td>540px</td>
                                                    <td>720px</td>
                                                    <td>960px</td>
                                                    <td>1140px</td>
                                                    <td>1320px</td>
                                                </tr>
                                                <tr>
                                                    <td><code>.container-md</code></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td>720px</td>
                                                    <td>960px</td>
                                                    <td>1140px</td>
                                                    <td>1320px</td>
                                                </tr>
                                                <tr>
                                                    <td><code>.container-lg</code></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td>960px</td>
                                                    <td>1140px</td>
                                                    <td>1320px</td>
                                                </tr>
                                                <tr>
                                                    <td><code>.container-xl</code></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td>1140px</td>
                                                    <td>1320px</td>
                                                </tr>
                                                <tr>
                                                    <td><code>.container-xxl</code></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td>1320px</td>
                                                </tr>
                                                <tr>
                                                    <td><code>.container-fluid</code></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h2>Default container <a href="" id="Default-container"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>The <code>max-width</code> of the default <code>.container</code> class varies at each breakpoint because it is a responsive, fixed-width container.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton1"
                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                        </button>
                                        <pre id="copyText1">
<code>&lt;div class=&quot;container&quot;&gt;
  &lt;!-- Content here --&gt;
&lt;/div&gt;</code>
                                        </pre>
                                    </div>
                                    <!-- code end -->
                                    <h2 class="mt-20">Responsive containers <a href="" id="Responsive-containers"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                        Until the chosen breakpoint is reached, responsive containers lets to define a class that is 100% wide; after that, apply <code>max-widths</code> for each of the higher breakpoints. For instance, <code>.container-sm</code> starts off at 100% wide and scales up to <code>md</code>, <code>lg</code>, <code>xl</code>, and <code>xxl</code> when the sm breakpoint is achieved.

                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton2"
                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                        </button>
                                        <pre id="copyText2">
<code>&lt;div class=&quot;container-sm&quot;&gt;100% wide until small breakpoint&lt;/div&gt;
&lt;div class=&quot;container-md&quot;&gt;100% wide until medium breakpoint&lt;/div&gt;
&lt;div class=&quot;container-lg&quot;&gt;100% wide until large breakpoint&lt;/div&gt;
&lt;div class=&quot;container-xl&quot;&gt;100% wide until extra large breakpoint&lt;/div&gt;
&lt;div class=&quot;container-xxl&quot;&gt;100% wide until extra extra large breakpoint&lt;/div&gt;</code>
                                        </pre>
                                    </div>
                                    <!-- code end -->
                                    <h2 class="mt-20">Fluid containers <a href="" id="Fluid-containers"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>For a container that spans the entire width of the viewport, use <code>.container-fluid</code>.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton3"
                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                        </button>
                                        <pre id="copyText3"><code>&lt;div class=&quot;container-fluid&quot;&gt;
  ...
&lt;/div&gt;</code></pre>
                                    </div>
                                    <!-- code end -->
                                    <h2 class="mt-20">Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
                                    <p>To assist in creating the needful layouts, UX4G provides a number of predefined container classes, as demonstrated above. By changing the Sass map that drives these predefined container classes <code>(located in _variables.scss):</code></p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton4"
                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                        </button>
                                        <pre id="copyText4"><code>$container-max-widths: (
  sm: 540px,
  md: 720px,
  lg: 960px,
  xl: 1140px,
  xxl: 1320px
);</code></pre>
                                    </div>
                                    <!-- code end -->
                                    <p class="mt-20">In addition to customizing the Sass, you can also create your own
                                        containers with our Sass mixin.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton5"
                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                        </button>
                                        <pre id="copyText5">
<code>// Source mixin
@mixin make-container($padding-x: $container-padding-x) {
  width: 100%;
  padding-right: $padding-x;
  padding-left: $padding-x;
  margin-right: auto;
  margin-left: auto;
}

// Usage
.custom-container {
  @include make-container();
}</code>
                                        </pre>
                                    </div>
                                    <!-- code end -->
                                    <p class="mt-20">For more information and examples on how to modify our Sass maps
                                        and variables, please refer to <a href="/layout/grid.php#Sass">the Sass section of the Grid
                                        documentation</a>.</p>



                                </div>
                            </div>
                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                <div class="right_side">
                                    <ul class="p-0">
                                        <li><a href="#How-they-work">How they work</a></li>
                                        <li><a href="#Default-container">Default container</a></li>
                                        <li><a href="#Responsive-containers">Responsive containers</a></li>
                                        <li><a href="#Fluid-containers">Fluid containers</a></li>
                                        <li><a href="#Sass">Sass</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- row end -->
                    </section>

                    <!-- pagination -->
                    <div class="col-12 col-sm-9">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/layout/columns.php">
                                <span>Previous</span>
                                <strong class="d-block">« Columns</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/layout/css-grid.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">CSS Grid »</strong>
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