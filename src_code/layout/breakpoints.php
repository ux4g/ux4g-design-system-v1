<?php
$title = 'UX4G | Breakpoints';
$canonical = 'https://doc.ux4g.gov.in/layout/breakpoints.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Breakpoints</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <h1 class="mb-30">Breakpoints</h1>
                    <p>In UX4G, breakpoints are adjustable widths that control how your responsive layout functions on various devices or viewport sizes.</p>

                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                        <div class="row">

                            <div class="col-sm-9">
                                <div class="body_content">

                                    <h2>Core concepts <a href="" id="Core-concepts" class="opacity-0 hover-1">#</a></h2>
                                    <ul class="un_order_list">
                                        <li>
                                            <p><strong>The fundamental elements of responsive design are breakpoints</strong>. Use these to determine which viewports or device sizes the layout can be modified.</p>
                                        </li>
                                        <li>
                                            <p><strong> To structure the CSS by breakpoint, use media queries.</strong> Media queries are a CSS feature that lets to apply styles only when specific browser and operating system conditions are met. There is <code>min-width</code> in the media queries the most frequently.</p>
                                        </li>
                                        <li>
                                            <p><strong>The objective is to design with mobile users in mind.</strong> The CSS used by UX4G seeks to use the fewest possible styles to make a layout function at the smallest breakpoint before adding more styles to adapt the design for larger devices. This makes the CSS more efficient, speeds up rendering, and gives the visitors a wonderful experience.</p>
                                        </li>
                                    </ul>
                                    <h2>Available breakpoints <a href="" id="Available-breakpoints"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>Six preset breakpoints, sometimes known as "grid tiers," are provided by UX4G to help developers create responsive designs. The source Saas files can be used to modify these <code>breakpoints</code>.</p>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Breakpoint</th>
                                                <th>Class infix</th>
                                                <th>Dimensions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Extra small</td>
                                                <td><em>None</em></td>
                                                <td>&lt;576px</td>
                                            </tr>
                                            <tr>
                                                <td>Small</td>
                                                <td><code>sm</code></td>
                                                <td>≥576px</td>
                                            </tr>
                                            <tr>
                                                <td>Medium</td>
                                                <td><code>md</code></td>
                                                <td>≥768px</td>
                                            </tr>
                                            <tr>
                                                <td>Large</td>
                                                <td><code>lg</code></td>
                                                <td>≥992px</td>
                                            </tr>
                                            <tr>
                                                <td>Extra large</td>
                                                <td><code>xl</code></td>
                                                <td>≥1200px</td>
                                            </tr>
                                            <tr>
                                                <td>Extra extra large</td>
                                                <td><code>xxl</code></td>
                                                <td>≥1400px</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>Each breakpoint was selected to hold containers with widths that are multiples of 12 comfortably. <code>Breakpoints</code> do not directly target any use cases or devices; rather, they are representative of a subset of common device sizes and viewport widths. Instead, the ranges offer a solid and reliable basis on which almost any device can be built.</p>
                                    <p>These breakpoints can be customized using Sass; which you can find in Saas map in the <code>_variable.scss</code> stylesheet</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton1"
                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                        </button>
                                        <pre id="copyText1">
<code>$grid-breakpoints: (
  xs: 0,
  sm: 576px,
  md: 768px,
  lg: 992px,
  xl: 1200px,
  xxl: 1400px
);</code>
                                        </pre>
                                    </div>
                                    <!-- code end -->
                                    <p>Please see [the Sass portion of the Grid documentation] <a href="/layout/grid.php#Sass">Sass</a> for more details and examples on how to modify the Sass variables and maps.</p>
                                    
                                    <h2>Media queries <a href="" id="Media-queries" class="opacity-0 hover-1">#</a></h2>
                                    <p>Since UX4G is developed with mobile users in mind first, we use a few media queries to provide logical <code>breakpoints</code> for our layouts and interfaces. These breakpoints allow us to scale up elements when the viewport changes and are mostly dependent on minimal viewport widths.</p>
                                    <h2>Min-width <a href="" id="Min-width" class="opacity-0 hover-1">#</a></h2>
                                    <p>For our layout, grid system, and components, UX4G generally uses the following media query ranges, or <code>breakpoints</code>, in our source Sass files.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton2"
                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                        </button>
                                        <pre id="copyText2">
 <code>// Source mixins

// No media query necessary for xs breakpoint as it's effectively `@media (min-width: 0) { ... }`
@include media-breakpoint-up(sm) { ... }
@include media-breakpoint-up(md) { ... }
@include media-breakpoint-up(lg) { ... }
@include media-breakpoint-up(xl) { ... }
@include media-breakpoint-up(xxl) { ... }

// Usage

// Example: Hide starting at `min-width: 0`, and then show at the `sm` breakpoint
.custom-class {
  display: none;
}
@include media-breakpoint-up(sm) {
  .custom-class {
    display: block;
  }
}</code>
                                        </pre>
                                    </div>
                                    <!-- code end -->
                                    <p class="mt-20">These Sass mixins translate in our compiled CSS using the values
                                        declared in our Sass variables. For example:</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton3"
                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                        </button>
                                        <code
                                            id="copyText3"><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token comment" style="color: rgb(153, 153, 136); font-style: italic;">// X-Small devices (portrait phones, less than 576px)</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token comment" style="color: rgb(153, 153, 136); font-style: italic;">// No media query for `xs` since this is the default in UX4G</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain" style="display: inline-block;"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token comment" style="color: rgb(153, 153, 136); font-style: italic;">// Small devices (landscape phones, 576px and up)</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token atrule rule" style="color: rgb(0, 164, 219);">@media</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token atrule property" style="color: rgb(54, 172, 170);">min-width</span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule number" style="color: rgb(54, 172, 170);">576</span><span class="token atrule unit" style="color: rgb(0, 164, 219);">px</span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"> ... </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain" style="display: inline-block;"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token comment" style="color: rgb(153, 153, 136); font-style: italic;">// Medium devices (tablets, 768px and up)</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token atrule rule" style="color: rgb(0, 164, 219);">@media</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token atrule property" style="color: rgb(54, 172, 170);">min-width</span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule number" style="color: rgb(54, 172, 170);">768</span><span class="token atrule unit" style="color: rgb(0, 164, 219);">px</span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"> ... </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain" style="display: inline-block;"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token comment" style="color: rgb(153, 153, 136); font-style: italic;">// Large devices (desktops, 992px and up)</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token atrule rule" style="color: rgb(0, 164, 219);">@media</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token atrule property" style="color: rgb(54, 172, 170);">min-width</span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule number" style="color: rgb(54, 172, 170);">992</span><span class="token atrule unit" style="color: rgb(0, 164, 219);">px</span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"> ... </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain" style="display: inline-block;"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token comment" style="color: rgb(153, 153, 136); font-style: italic;">// X-Large devices (large desktops, 1200px and up)</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token atrule rule" style="color: rgb(0, 164, 219);">@media</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token atrule property" style="color: rgb(54, 172, 170);">min-width</span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule number" style="color: rgb(54, 172, 170);">1200</span><span class="token atrule unit" style="color: rgb(0, 164, 219);">px</span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"> ... </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain" style="display: inline-block;"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token comment" style="color: rgb(153, 153, 136); font-style: italic;">// XX-Large devices (larger desktops, 1400px and up)</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token atrule rule" style="color: rgb(0, 164, 219);">@media</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token atrule property" style="color: rgb(54, 172, 170);">min-width</span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule number" style="color: rgb(54, 172, 170);">1400</span><span class="token atrule unit" style="color: rgb(0, 164, 219);">px</span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"> ... </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><br></span></code>
                                    </div>
                                    <!-- code end -->

                                    <h2 class="mt-20">Max-width <a href="" id="Max-width"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>We occasionally use media queries that go in the other direction (the given
                                        screen size or smaller)</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton4"
                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                        </button>
                                        <code
                                            id="copyText4"><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token comment" style="color: rgb(153, 153, 136); font-style: italic;">// No media query necessary for xs breakpoint as it's effectively `@media (max-width: 0) { ... }`</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token keyword" style="color: rgb(0, 0, 159);">@include</span><span class="token plain"> </span><span class="token function" style="color: rgb(215, 58, 73);">media-breakpoint-down</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token plain">sm</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"> ... </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token keyword" style="color: rgb(0, 0, 159);">@include</span><span class="token plain"> </span><span class="token function" style="color: rgb(215, 58, 73);">media-breakpoint-down</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token plain">md</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"> ... </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token keyword" style="color: rgb(0, 0, 159);">@include</span><span class="token plain"> </span><span class="token function" style="color: rgb(215, 58, 73);">media-breakpoint-down</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token plain">lg</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"> ... </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token keyword" style="color: rgb(0, 0, 159);">@include</span><span class="token plain"> </span><span class="token function" style="color: rgb(215, 58, 73);">media-breakpoint-down</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token plain">xl</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"> ... </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token keyword" style="color: rgb(0, 0, 159);">@include</span><span class="token plain"> </span><span class="token function" style="color: rgb(215, 58, 73);">media-breakpoint-down</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token plain">xxl</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"> ... </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain" style="display: inline-block;"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token comment" style="color: rgb(153, 153, 136); font-style: italic;">// Example: Style from medium breakpoint and down</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token keyword" style="color: rgb(0, 0, 159);">@include</span><span class="token plain"> </span><span class="token function" style="color: rgb(215, 58, 73);">media-breakpoint-down</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token plain">md</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  </span><span class="token selector" style="color: rgb(0, 0, 159);">.custom-class </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">    </span><span class="token property" style="color: rgb(54, 172, 170);">display</span><span class="token punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token plain"> block</span><span class="token punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><br></span></code>
                                    </div>
                                    <!-- code end -->

                                    <p class="mt-20">These mixins take those declared breakpoints, subtract
                                        <code>.02px</code> from them, and use them as our <code>max-width</code> values.
                                        For example:</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton5"
                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                        </button>
                                        <pre id="copyText5">
<code>// `xs` returns only a ruleset and no media query
// ... { ... }

// `sm` applies to x-small devices (portrait phones, less than 576px)
@media (max-width: 575.98px) { ... }

// `md` applies to small devices (landscape phones, less than 768px)
@media (max-width: 767.98px) { ... }

// `lg` applies to medium devices (tablets, less than 992px)
@media (max-width: 991.98px) { ... }

// `xl` applies to large devices (desktops, less than 1200px)
@media (max-width: 1199.98px) { ... }

// `xxl` applies to x-large devices (large desktops, less than 1400px)
@media (max-width: 1399.98px) { ... }</code>
                                        </pre>
                                    </div>
                                    <!-- code end -->

                                    <p class="mt-20"> <i class="fa fa-exclamation-triangle"></i>
                                        <strong>CAUTION</strong>
                                    </p>
                                    <div class="bd-callout bd-callout-warning blockquote_warning mt-20 mb-20">
                                        <p><strong>Why subtract .02px?</strong> Browsers don’t currently support <a
                                                href="https://www.w3.org/TR/mediaqueries-4/#range-context"
                                                target="_blank" rel="noopener noreferrer">range context queries</a>, so
                                            we
                                            work around the limitations of <a
                                                href="https://www.w3.org/TR/mediaqueries-4/#mq-min-max" target="_blank"
                                                rel="noopener noreferrer"> min- and max- prefixes</a> and viewports with
                                            fractional widths (which can occur under certain conditions on high-dpi
                                            devices,
                                            for instance) by using values with higher precision.</p>
                                    </div>
                                    <h2>Single breakpoint <a href="" id="Single-breakpoint"
                                            class="opacity-0 hover-1">#</a></h2>

                                    <p>There are also media queries and mixins for targeting a single segment of screen
                                        sizes using the minimum and maximum breakpoint widths.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton6"
                                            onclick="copyToClipboard('copyText6', 'copyButton6')">
                                            <i class="fa fa-copy" id="iconCopied6"></i>
                                        </button>
                                        <pre id="copyText6">
<code>@include media-breakpoint-only(xs) { ... }
@include media-breakpoint-only(sm) { ... }
@include media-breakpoint-only(md) { ... }
@include media-breakpoint-only(lg) { ... }
@include media-breakpoint-only(xl) { ... }
@include media-breakpoint-only(xxl) { ... }</code>
                                        </pre>
                                    </div>
                                    <!-- code end -->
                                    <p class="mt-20">For example the <code
                                            >@include media-breakpoint-only(md) { ... }</code> will
                                        result in :</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton7"
                                            onclick="copyToClipboard('copyText7', 'copyButton7')">
                                            <i class="fa fa-copy" id="iconCopied7"></i>
                                        </button>
                                        <pre id="copyText7" tabindex="0"
                                            class="prism-code language-scss codeBlock_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module thin-scrollbar"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token atrule rule" style="color: rgb(0, 164, 219);">@media</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token atrule property" style="color: rgb(54, 172, 170);">min-width</span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule number" style="color: rgb(54, 172, 170);">768</span><span class="token atrule unit" style="color: rgb(0, 164, 219);">px</span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule operator" style="color: rgb(57, 58, 52);">and</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token atrule property" style="color: rgb(54, 172, 170);">max-width</span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token atrule" style="color: rgb(0, 164, 219);"> </span><span class="token atrule number" style="color: rgb(54, 172, 170);">991.98</span><span class="token atrule unit" style="color: rgb(0, 164, 219);">px</span><span class="token atrule punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"> ... </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><br></span></code></pre>
                                    </div>
                                    <!-- code end -->
                                    <h2 class="mt-20">Between breakpoints <a href="" id="Between-breakpoints"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>Similarly, media queries may span multiple breakpoint widths:</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton8"
                                            onclick="copyToClipboard('copyText8', 'copyButton8')">
                                            <i class="fa fa-copy" id="iconCopied8"></i>
                                        </button>
                                        <pre id="copyText8" tabindex="0"
                                            class="prism-code language-scss codeBlock_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module thin-scrollbar"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token keyword" style="color: rgb(0, 0, 159);">@include</span><span class="token plain"> </span><span class="token function" style="color: rgb(215, 58, 73);">media-breakpoint-between</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token plain">md</span><span class="token punctuation" style="color: rgb(57, 58, 52);">,</span><span class="token plain"> xl</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"> ... </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><br></span></code></pre>
                                    </div>
                                    <!-- code end -->
                                    <p class="mt-20">Which results in:</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton9"
                                            onclick="copyToClipboard('copyText9', 'copyButton9')">
                                            <i class="fa fa-copy" id="iconCopied9"></i>
                                        </button>
                                        <pre id="copyText9">
<code>// Example
// Apply styles starting from medium devices and up to extra large devices
@media (min-width: 768px) and (max-width: 1199.98px) { ... }</code>
                                        </pre>
                                    </div>
                                    <!-- code end -->







                                </div>
                            </div>
                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                <div class="right_side">
                                    <ul class="p-0">
                                        <li><a href="#Core-concepts">Core concepts</a></li>
                                        <li><a href="#Available-breakpoints ">Available breakpoints </a></li>
                                        <li><a href="#Media-queries">Media queries</a>
                                            <ul class="pl-20">
                                                <li>
                                                    <a href="#Min-width">Min-width</a>
                                                </li>
                                                <li>
                                                    <a href="#Max-width">Max-width</a>
                                                </li>
                                                <li>
                                                    <a href="#Single-breakpoint">Single breakpoint</a>
                                                </li>
                                                <li>
                                                    <a href="#Between-breakpoints">Between breakpoints</a>
                                                </li>
                                            </ul>
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
                            <a class="page-link border-0" href="/category/layout.php">
                                <span>Previous</span>
                                <strong class="d-block">« Layout</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/layout/columns.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Columns »</strong>
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