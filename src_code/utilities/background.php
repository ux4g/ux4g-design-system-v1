<?php
$title = 'UX4G | Background';
$canonical = 'https://doc.ux4g.gov.in/utilities/background.php';

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
                            <li class="breadcrumb-item"><a
                                    href="/">
                                    <i class="fa fa-home"></i>
                                </a></li>
                            <li class="breadcrumb-item"><a href="/category/utilities.php">Utilities</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Background</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row">
                        <div class="col-lg-9">
                            <h1>Background</h1>
                            <p>Convey meaning through <code>background-color</code> and add decoration with gradients.
                            </p>
                            <h2>Background color <a href="" id="Background-color" class="opacity-0 hover-1">#</a></h2>
                            
                            <p>Set the background of an element to any contextual class, just as the color classes for contextual text. In some circumstances, developers want to utilize since background utilities don't control <a
                                    href="/utilities/colors.php/">color utilities</a> for <code>.text-*</code>.</p>

                           
                            

                            <!-- code snippet -->

                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                    onclick="copyToClipboard('copyText1', 'copyButton1')">
                                    <i class="fa fa-copy"></i>
                                </button>
<pre id="copyText1">
<code>&lt;div class=&quot;p-3 mb-2 bg-primary text-white&quot;&gt;.bg-primary&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-secondary text-white&quot;&gt;.bg-secondary&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-success text-white&quot;&gt;.bg-success&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-danger text-white&quot;&gt;.bg-danger&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-warning text-dark&quot;&gt;.bg-warning&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-info text-dark&quot;&gt;.bg-info&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-light text-dark&quot;&gt;.bg-light&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-dark text-white&quot;&gt;.bg-dark&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-body text-dark&quot;&gt;.bg-body&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-white text-dark&quot;&gt;.bg-white&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-transparent text-dark&quot;&gt;.bg-transparent&lt;/div&gt;</code>
</pre>
                            </div>
                            <!-- code -->
                            <h5 class="result m-0">RESULT</h5>

                            <div class="code_bg rounded p-3">
                                <div class="bd-example">

                                    <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
                                    <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
                                    <div class="p-3 mb-2 bg-success text-white">.bg-success</div>
                                    <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
                                    <div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
                                    <div class="p-3 mb-2 bg-info text-dark">.bg-info</div>
                                    <div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
                                    <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
                                    <div class="p-3 mb-2 bg-body text-dark">.bg-body</div>
                                    <div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
                                    <div class="p-3 mb-2 bg-transparent text-dark">.bg-transparent</div>
                                </div>
                            </div>
                            <!-- code end-->
                            
                            <h2 class="mt-20">Background gradient <a href="" id="Background-gradient" class="opacity-0 hover-1">#</a></h2>
                            <p>
                            A linear gradient is applied as a backdrop picture to the backgrounds by adding a <code>.bg-gradient</code> class. The bottom of this gradient is a <code>faded-out</code> <code>semi-transparent</code> white towards the top.
                            </p>
                            <p>Is a gradient required in the bespoke CSS? Add background-image simply by adding var<code>(--bs-gradient)</code>;.</p>
                            <div class="p-3 mb-2 bg-primary bg-gradient text-white">.bg-primary.bg-gradient</div>
                            <div class="p-3 mb-2 bg-secondary bg-gradient text-white">.bg-secondary.bg-gradient</div>
                            <div class="p-3 mb-2 bg-success bg-gradient text-white">.bg-success.bg-gradient</div>
                            <div class="p-3 mb-2 bg-danger bg-gradient text-white">.bg-danger.bg-gradient</div>
                            <div class="p-3 mb-2 bg-warning bg-gradient text-dark">.bg-warning.bg-gradient</div>
                            <div class="p-3 mb-2 bg-info bg-gradient text-dark">.bg-info.bg-gradient</div>
                            <div class="p-3 mb-2 bg-light bg-gradient text-dark">.bg-light.bg-gradient</div>
                            <div class="p-3 mb-2 bg-dark bg-gradient text-white">.bg-dark.bg-gradient</div>
<h2 class="mt-20">Opacity <a href="" id="Opacity" class="opacity-0 hover-1">#</a></h2>
<small class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Added in v1.0.0</small>
<p>Beginning with version 1.0.0, Sass generates background-color utilities from CSS variables. Real-time color adjustments without compilation and dynamic alpha transparency modifications are made possible by this.</p>

<h3 id="how-it-works">How it works <a href="" id="How-it-works" class="opacity-0 hover-1">#</a></h3>
<p>Consider our default <code>.bg-success</code> utility.</p>

<!-- code -->
<div class="code_bg p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton2" onclick="copyToClipboard('copyText2', 'copyButton2')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText2">
<code>.bg-success {
--bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
}
</code>
</pre>
</div>
<!-- code end -->
<p>
Here is a use of RGB version of the <code>--bs-success</code> CSS variable (with the values 25, 135, 84) and added a second CSS variable, <code>--bs-bg-opacity</code>, for the alpha transparency (with a default value of 1 thanks to a local CSS variable). This means that whenever developer use the <code>.bg-success</code> command right now, the computed color value will be rgba(25, 135, 84, 1). So that nested instances of the utility don't always have updated alpha transparency, the local CSS variable inside each <code>.bg-* class</code> prevents inheritance problems.
</p>

<h3 id="Example">Example <a href="" id="Example" class="opacity-0 hover-1">#</a></h3>
<p>To change that opacity, override <code>--bs-bg-opacity</code> via custom styles or inline styles.</p>

<!-- code snippet -->

<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton3" onclick="copyToClipboard('copyText3', 'copyButton3')">
    <i class="fa fa-copy"></i>
</button>
    <pre id="copyText3">
<code>&lt;div class=&quot;bg-success p-2 text-white&quot;&gt;This is default success background&lt;/div&gt;
&lt;div class=&quot;bg-success p-2&quot; style=&quot;--bs-bg-opacity: .5;&quot;&gt;This is 50% opacity success background&lt;/div&gt;
</code>
</pre>
</div>
<!-- code snippet end -->
<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bg-success p-2 text-white">This is default success background</div>
<div class="bg-success p-2" style="--bs-bg-opacity: .5;">This is 50% opacity success background</div>
</div>
<!-- code end -->

<p>Or, choose from any of the <code>.bg-opacity</code> utilities:</p>

<!-- code snippet -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton4" onclick="copyToClipboard('copyText4', 'copyButton4')">
    <i class="fa fa-copy"></i>
</button>
    <pre id="copyText4">
<code>&lt;div class=&quot;bg-success p-2 text-white&quot;&gt;This is default success background&lt;/div&gt;
&lt;div class=&quot;bg-success p-2 text-white bg-opacity-75&quot;&gt;This is 75% opacity success background&lt;/div&gt;
&lt;div class=&quot;bg-success p-2 text-dark bg-opacity-50&quot;&gt;This is 50% opacity success background&lt;/div&gt;
&lt;div class=&quot;bg-success p-2 text-dark bg-opacity-25&quot;&gt;This is 25% opacity success background&lt;/div&gt;
&lt;div class=&quot;bg-success p-2 text-dark bg-opacity-10&quot;&gt;This is 10% opacity success background&lt;/div&gt;
</code>
</pre>
    </div>
<!-- code snippet end -->

<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
    <div class="bg-success p-2 text-white">This is default success background</div>
    <div class="bg-success p-2 text-white bg-opacity-75">This is 75% opacity success background</div>
    <div class="bg-success p-2 text-dark bg-opacity-50">This is 50% opacity success background</div>
    <div class="bg-success p-2 text-dark bg-opacity-25">This is 25% opacity success background</div>
    <div class="bg-success p-2 text-dark bg-opacity-10">This is 10% opacity success background</div>
</div>
<!-- code end -->

<h2>Sass  <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
<p>
Consider reading about the integrated CSS custom properties (also known as CSS variables) for colors and more in addition to the accompanying Sass features.
</p>
<h3>Variables  <a href="" id="Variables" class="opacity-0 hover-1">#</a></h3>
<p>Most <code>background-color</code> utilities are generated by our theme colors, reassigned from our generic color palette variables.</p>

<!-- code snippet-->
<div class=" code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton5" onclick="copyToClipboard('copyText5', 'copyButton5')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText5">
<code>$blue:    #0d6efd;
$indigo:  #6610f2;
$purple:  #6f42c1;
$pink:    #d63384;
$red:     #dc3545;
$orange:  #fd7e14;
$yellow:  #ffc107;
$green:   #198754;
$teal:    #20c997;
$cyan:    #0dcaf0;</code>
</pre>
</div>
<!-- code snippet end-->

<!-- code snippet-->
<div class=" code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton6" onclick="copyToClipboard('copyText6', 'copyButton6')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText6">
<code>$primary:       $blue;
$secondary:     $gray-600;
$success:       $green;
$info:          $cyan;
$warning:       $yellow;
$danger:        $red;
$light:         $gray-100;
$dark:          $gray-900;</code>
</pre>
</div>
<!-- code snippet end-->

<!-- code snippet-->
<div class=" code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton7" onclick="copyToClipboard('copyText7', 'copyButton7')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText7">
<code>$gradient: linear-gradient(180deg, rgba($white, .15), rgba($white, 0));</code>
</pre>
</div>
<!-- code snippet end-->
<p>Grayscale colors are also available, but only a subset are used to generate any utilities.</p>

<!-- code snippet -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton8" onclick="copyToClipboard('copyText8', 'copyButton8')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText8">
<code>$white:    #fff;
$gray-100: #f8f9fa;
$gray-200: #e9ecef;
$gray-300: #dee2e6;
$gray-400: #ced4da;
$gray-500: #adb5bd;
$gray-600: #6c757d;
$gray-700: #495057;
$gray-800: #343a40;
$gray-900: #212529;
$black:    #000;</code>
</pre>
</div>
<!-- code snippet end-->

<h3>Map  <a href="" id="Map" class="opacity-0 hover-1">#</a></h3>
<p>Theme colors are then put into a Sass map so we can loop over them to generate our utilities, component modifiers, and more.</p>

<!-- code snippet-->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton8" onclick="copyToClipboard('copyText8', 'copyButton8')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText8">
<code>$theme-colors: (
  "primary":    $primary,
  "secondary":  $secondary,
  "success":    $success,
  "info":       $info,
  "warning":    $warning,
  "danger":     $danger,
  "light":      $light,
  "dark":       $dark
);</code>
</pre>
</div>
<!-- code snippet end-->

<p>Grayscale colors are also available as a Sass map. <strong>This map is not used to generate any utilities.</strong></p>

<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton9" onclick="copyToClipboard('copyText9', 'copyButton9')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText9">
<code>$grays: (
  "100": $gray-100,
  "200": $gray-200,
  "300": $gray-300,
  "400": $gray-400,
  "500": $gray-500,
  "600": $gray-600,
  "700": $gray-700,
  "800": $gray-800,
  "900": $gray-900
);</code>
</pre>
</div>

<p>RGB colors are generated from a separate Sass map:</p>

<div class="code_bg round p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton10" onclick="copyToClipboard('copyText10', 'copyButton10')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText10">
<code>$theme-colors-rgb: map-loop($theme-colors, to-rgb, "$value");</code>
</pre>
</div>

<p>And background color opacities build on that with their own map that’s consumed by the utilities API:</p>

<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton11" onclick="copyToClipboard('copyText11', 'copyButton11')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText11">
<code>
$utilities-bg: map-merge(
  $utilities-colors,
  (
    "black": to-rgb($black),
    "white": to-rgb($white),
    "body": to-rgb($body-bg)
  )
);
$utilities-bg-colors: map-loop($utilities-bg, rgba-css-var, "$key", "bg");
</code>
</pre>
</div>

<h3>Mixins  <a href="" id="Mixins" class="opacity-0 hover-1">#</a></h3>
<p>
Although there is no use of mixins to create the background utilities, although there are some extra mixins if developer want to make own gradients in other contexts.
</p>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton11" onclick="copyToClipboard('copyText11', 'copyButton11')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText11">
<code>@mixin gradient-bg($color: null) {
  background-color: $color;

  @if $enable-gradients {
    background-image: var(--#{$prefix}gradient);
  }
}
</code>
</pre>
</div>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton12" onclick="copyToClipboard('copyText12', 'copyButton12')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText12">
<code>
// Horizontal gradient, from left to right
//
// Creates two color stops, start and end, by specifying a color and position for each color stop.
@mixin gradient-x($start-color: $gray-700, $end-color: $gray-800, $start-percent: 0%, $end-percent: 100%) {
  background-image: linear-gradient(to right, $start-color $start-percent, $end-color $end-percent);
}

// Vertical gradient, from top to bottom
//
// Creates two color stops, start and end, by specifying a color and position for each color stop.
@mixin gradient-y($start-color: $gray-700, $end-color: $gray-800, $start-percent: null, $end-percent: null) {
  background-image: linear-gradient(to bottom, $start-color $start-percent, $end-color $end-percent);
}

@mixin gradient-directional($start-color: $gray-700, $end-color: $gray-800, $deg: 45deg) {
  background-image: linear-gradient($deg, $start-color, $end-color);
}

@mixin gradient-x-three-colors($start-color: $blue, $mid-color: $purple, $color-stop: 50%, $end-color: $red) {
  background-image: linear-gradient(to right, $start-color, $mid-color $color-stop, $end-color);
}

@mixin gradient-y-three-colors($start-color: $blue, $mid-color: $purple, $color-stop: 50%, $end-color: $red) {
  background-image: linear-gradient($start-color, $mid-color $color-stop, $end-color);
}

@mixin gradient-radial($inner-color: $gray-700, $outer-color: $gray-800) {
  background-image: radial-gradient(circle, $inner-color, $outer-color);
}

@mixin gradient-striped($color: rgba($white, .15), $angle: 45deg) {
  background-image: linear-gradient($angle, $color 25%, transparent 25%, transparent 50%, $color 50%, $color 75%, transparent 75%, transparent);
}</code>
</pre>
</div>
<!-- code end -->

<h3>Utilities API  <a href="" id="Utilities-API" class="opacity-0 hover-1">#</a></h3>
<p>Background utilities are declared in our utilities API in <code>scss/_utilities.scss</code>. <a href="/utilities/api.php/#Using-the-API">Learn how to use the utilities API.</a></p>

<!-- code snippet -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton13" onclick="copyToClipboard('copyText13', 'copyButton13')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText13">
<code>
    "background-color": (
      property: background-color,
      class: bg,
      local-vars: (
        "bg-opacity": 1
      ),
      values: map-merge(
        $utilities-bg-colors,
        (
          "transparent": transparent
        )
      )
    ),
    "bg-opacity": (
      css-var: true,
      class: bg-opacity,
      values: (
        10: .1,
        25: .25,
        50: .5,
        75: .75,
        100: 1
      )
    ),
</code>
</pre>
</div>
<!-- code snippet end -->

</div>
                        <!-- right side scrollbar -->
                        <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">
                                    <li class="active"><a href="#Background-color">Background color</a></li>
                                    <li><a href="#Background-gradient">Background gradient</a></li>
                                    <li><a href="#Opacity">Opacity</a>
                                    <ul>
                                        <li>
                                            <a href="#How-it-works">How it works</a>
                                        </li>
                                        <li>
                                            <a href="#Example">Example</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#Sass">Sass</a>
                                    <ul>
                                        <li>
                                            <a href="#Variables">Variables</a>
                                        </li>
                                        <li>
                                            <a href="#Map">Map</a>
                                        </li>
                                        <li>
                                            <a href="#Mixins">Mixins</a>
                                        </li>
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
                            <a class="page-link border-0" href="/category/utilities.php">
                                <span>Previous</span>
                                <strong class="d-block">« Utilities</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/borders.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Borders »</strong>
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