<?php
$title = 'UX4G | Colors';
$canonical = 'https://doc.ux4g.gov.in/utilities/colors.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Colors</li>
                        </ol>
                    </nav>

<!-- body content -->
<div class="row">
 
<div class="col-lg-9">
<h1>Colors</h1>  
<p>Convey meaning through color with a handful of color utility classes. Includes support for styling links with hover states, too.</p>
<h2>Colors <a href="" id="Color" class="opacity-0 hover-1">#</a></h2>

<p>Use a few color utility classes to use color to convey meaning. includes assistance with styling links in hover states.</p>



<!-- code snippet -->
<div class=" code_bg rounded p-3 ">
<button class="btn btn-outline-primary float-end" id="copyButton1" onclick="copyToClipboard('copyText1', 'copyButton1')">
    <i class="fa fa-copy"></i>
</button>
  <pre id="copyText1">
<code>&lt;p class=&quot;text-primary&quot;&gt;.text-primary&lt;/p&gt;
&lt;p class=&quot;text-secondary&quot;&gt;.text-secondary&lt;/p&gt;
&lt;p class=&quot;text-success&quot;&gt;.text-success&lt;/p&gt;
&lt;p class=&quot;text-danger&quot;&gt;.text-danger&lt;/p&gt;
&lt;p class=&quot;text-warning bg-dark&quot;&gt;.text-warning&lt;/p&gt;
&lt;p class=&quot;text-info bg-dark&quot;&gt;.text-info&lt;/p&gt;
&lt;p class=&quot;text-light bg-dark&quot;&gt;.text-light&lt;/p&gt;
&lt;p class=&quot;text-dark&quot;&gt;.text-dark&lt;/p&gt;
&lt;p class=&quot;text-body&quot;&gt;.text-body&lt;/p&gt;
&lt;p class=&quot;text-muted&quot;&gt;.text-muted&lt;/p&gt;
&lt;p class=&quot;text-white bg-dark&quot;&gt;.text-white&lt;/p&gt;
&lt;p class=&quot;text-black-50&quot;&gt;.text-black-50&lt;/p&gt;
&lt;p class=&quot;text-white-50 bg-dark&quot;&gt;.text-white-50&lt;/p&gt;</code>
  </pre>
</div>

<!-- code snippet end -->

<h5 class=" result m-0">RESULT</h5>
<!-- code -->
<div class=" code_bg rounded p-3 mb-20">
<p class="text-primary">.text-primary</p>
<p class="text-secondary">.text-secondary</p>
<p class="text-success">.text-success</p>
<p class="text-danger">.text-danger</p>
<p class="text-warning bg-dark">.text-warning</p>
<p class="text-info bg-dark">.text-info</p>
<p class="text-light bg-dark">.text-light</p>
<p class="text-dark">.text-dark</p>
<p class="text-body">.text-body</p>
<p class="text-muted">.text-muted</p>
<p class="text-white bg-dark">.text-white</p>
<p class="text-black-50">.text-black-50</p>
<p class="text-white-50 bg-dark">.text-white-50</p>
</div>
<!-- code end -->

<div class="blockquote_warning mb-20">
<strong>Deprecation:</strong> With the addition of <code>.text-opacity-*</code> utilities and CSS variables for text utilities, <code>.text-black-50</code> and <code>.text-white-50</code> are deprecated as of v5.1.0. They’ll be removed in v6.0.0.
</div>
<div class="blockquote">
<h5 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies <a class="anchor-link" href="#conveying-meaning-to-assistive-technologies" aria-label="Link to this section: Conveying meaning to assistive technologies"></a></h5>
<p>
<code>Color-coding</code> to add meaning just gives a visual cue, which users of assistive technologies like screen readers won't be able to understand. Make sure the information the color designates is either evident from the content itself (such as the visible text) or is included in another way, such as by hiding additional text using the <code>.visually-hidden</code> class.
</p></div>

<h2>Opacity <a href="" id="Opacity" class="opacity-0 hover-1">#</a></h2>
<small class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Added in v1.0.0</small>
<p>
As of version 1.0.0, Sass is used to create text color utilities using CSS variables. Real-time color adjustments without compilation and dynamic alpha transparency modifications are made possible by this.
</p>

<h3>How it works <a href="" id="How-it-works" class="opacity-0 hover-1">#</a></h3>
<p>Consider our default <code>.text-primary</code> utility.</p>

<!-- code snippet-->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton2" onclick="copyToClipboard('copyText2', 'copyButton2')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText2">
<code>.text-primary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
}</code>
</pre>
</div>
<!-- code snippet end -->

<p>
Used a second CSS variable, <code>--bs-text-opacity</code>, for the alpha transparency (with a default value of 1 thanks to a local CSS variable), and utilized an RGB version of the <code>--bs-primary</code> CSS variable (with the value of 13, 110, 253). This implies each time you use <code>.text-primary</code> The value that is calculated is now rgba(13, 110, 253, 1). The internal local CSS variable of each. Because of the way the <code>.text-*</code> class handles inheritance, nested instances of the utility do not necessarily have altered alpha transparency.
</p>
<h3>Example  <a href="" id="Example" class="opacity-0 hover-1">#</a></h3>
<p>To change that opacity, override <code>--bs-text-opacity</code> via custom styles or inline styles.</p>

<!-- code snippet -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton3" onclick="copyToClipboard('copyText3', 'copyButton3')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText3">
<code>&lt;div class=&quot;text-primary&quot;&gt;This is default primary text&lt;/div&gt;
&lt;div class=&quot;text-primary&quot; style=&quot;--bs-text-opacity: .5;&quot;&gt;This is 50% opacity primary text&lt;/div&gt;</code>
</pre>
</div>

<!-- code snippet end -->
<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="text-primary">This is default primary text</div>
<div class="text-primary" style="--bs-text-opacity: .5;">This is 50% opacity primary text</div>
</div>
<!-- code end -->

<p class="text-primary">.text-primary</p><p class="text-secondary">.text-secondary</p><p class="text-success">.text-success</p><p class="text-danger">.text-danger</p><p class="text-warning bg-dark">.text-warning</p><p class="text-info bg-dark">.text-info</p><p class="text-light bg-dark">.text-light</p><p class="text-dark">.text-dark</p><p class="text-body">.text-body</p><p class="text-muted">.text-muted</p><p class="text-white bg-dark">.text-white</p><p class="text-black-50">.text-black-50</p><p class="text-white-50 bg-dark">.text-white-50</p>  

<!-- code snippet -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton4" onclick="copyToClipboard('copyText4', 'copyButton4')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText4">
<code>&lt;div class=&quot;text-primary&quot;&gt;This is default primary text&lt;/div&gt;
&lt;div class=&quot;text-primary text-opacity-75&quot;&gt;This is 75% opacity primary text&lt;/div&gt;
&lt;div class=&quot;text-primary text-opacity-50&quot;&gt;This is 50% opacity primary text&lt;/div&gt;
&lt;div class=&quot;text-primary text-opacity-25&quot;&gt;This is 25% opacity primary text&lt;/div&gt;</code>
</pre>
</div>
  <!-- code snippet end -->

<!-- code snippet end -->
<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3 mb-20">
  <div class="text-primary">This is default primary text</div>
  <div class="text-primary text-opacity-75">This is 75% opacity primary text</div>
  <div class="text-primary text-opacity-50">This is 50% opacity primary text</div>
  <div class="text-primary text-opacity-25">This is 25% opacity primary text</div>
</div>
<!-- code end -->

<h2>Specificity <a href="" id="Specificity" class="opacity-0 hover-1">#</a></h2>

<p>Sometimes the specificity of another selector prevents contextual classes from being applied. Wrapping the content of the element in a <code>&lt;div&gt;</code> or other more semantic element with the correct class can be a suitable fix in some situations.</p>

<h2>Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
<p>
Consider reading about the integrated CSS custom properties (also known as CSS variables) for colors and more in addition to the accompanying Sass features.
</p>
<h2>Variables <a href="" id="Variables" class="opacity-0 hover-1">#</a></h2>
<p>Most <code>color</code> utilities are generated by our theme colors, reassigned from our generic color palette variables.</p>


<!-- code -->
<div class="code_bg rounded p-3 mb-20">
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
<!-- code end -->

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton6" onclick="copyToClipboard('copyText6', 'copyButton6')">
    <i class="fa fa-copy"></i>
</button>
  <pre id="copyText6">
<code>
$primary:         $blue;
$secondary:       $gray-600;
$success:         $green;
$info:            $cyan;
$warning:         $yellow;
$danger:          $red;
$light:           $gray-100;
$dark:            $gray-900;</code>
</pre>
</div>
<!-- code end -->
<p>Grayscale colors are also available, but only a subset are used to generate any utilities.</p>

<!-- code snippet -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton7" onclick="copyToClipboard('copyText7', 'copyButton7')">
    <i class="fa fa-copy"></i>
</button>
  <pre id="copyText7"><code>
$white:    #fff;
$gray-100: #f8f9fa;
$gray-200: #e9ecef;
$gray-300: #dee2e6;
$gray-400: #ced4da;
$gray-500: #adb5bd;
$gray-600: #6c757d;
$gray-700: #495057;
$gray-800: #343a40;
$gray-900: #212529;
$black:    #000;</code></pre>
</div>
<!-- code snippet end -->

<h3>Map  <a href="" id="Map" class="opacity-0 hover-1">#</a></h3>
<p>
After that, the theme <code>colors</code> are added to a Sass map so that we can loop through them to create our utilities, component modifications, and other things.
</p>

<!-- code snippet -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton8" onclick="copyToClipboard('copyText8', 'copyButton8')">
    <i class="fa fa-copy"></i>
</button>
  <pre id="copyText8"><code>
  $theme-colors: (
  "primary":    $primary,
  "secondary":  $secondary,
  "success":    $success,
  "info":       $info,
  "warning":    $warning,
  "danger":     $danger,
  "light":      $light,
  "dark":       $dark
);</code></pre>
</div>
<!-- code snippet end -->

<p>Grayscale colors are also available as a Sass map. <strong>This map is not used to generate any utilities.</strong></p>

<!-- code snippet -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton9" onclick="copyToClipboard('copyText9', 'copyButton9')">
    <i class="fa fa-copy"></i>
</button>
  <pre id="copyText9"><code>
  $grays: (
  "100": $gray-100,
  "200": $gray-200,
  "300": $gray-300,
  "400": $gray-400,
  "500": $gray-500,
  "600": $gray-600,
  "700": $gray-700,
  "800": $gray-800,
  "900": $gray-900
);</code></pre>
</div>
<!-- code snippet end -->

<p>RGB colors are generated from a separate Sass map:</p>

<!-- code snippet -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton10" onclick="copyToClipboard('copyText10', 'copyButton10')">
    <i class="fa fa-copy"></i>
</button>
  <pre id="copyText10"><code>
  $theme-colors-rgb: map-loop($theme-colors, to-rgb, "$value");</code></pre>
</div>
<!-- code snippet end -->
<p>And color opacities build on that with their own map that’s consumed by the utilities API:</p>

<!-- code snippet -->

<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton11" onclick="copyToClipboard('copyText11', 'copyButton11')">
    <i class="fa fa-copy"></i>
</button>
  <pre id="copyText11"><code>
  $utilities-text: map-merge(
  $utilities-colors,
  (
    "black": to-rgb($black),
    "white": to-rgb($white),
    "body": to-rgb($body-color)
  )
);
$utilities-text-colors: map-loop($utilities-text, rgba-css-var, "$key", "text");</code></pre>
</div>
<!-- code snippet end -->

<h3>Utilities API  <a href="" id="Utilities-API" class="opacity-0 hover-1">#</a></h3>
<p>Color utilities are declared in our utilities API in <code>scss/_utilities.scss</code>. <a href="/utilities/api.php/#Using-the-API">Learn how to use the utilities API.</a></p>

<!-- code snippet -->

<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton12" onclick="copyToClipboard('copyText12', 'copyButton12')">
    <i class="fa fa-copy"></i>
</button>
  <pre id="copyText12"><code>
  "color": (
      property: color,
      class: text,
      local-vars: (
        "text-opacity": 1
      ),
      values: map-merge(
        $utilities-text-colors,
        (
          "muted": $text-muted,
          "black-50": rgba($black, .5), // deprecated
          "white-50": rgba($white, .5), // deprecated
          "reset": inherit,
        )
      )
    ),
    "text-opacity": (
      css-var: true,
      class: text-opacity,
      values: (
        25: .25,
        50: .5,
        75: .75,
        100: 1
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
                                    
                                    <li><a href="#Color">Color</a></li>
                                    <li>
                                      <a href="#Opacity">Opacity</a>
                                      <ul>
                                        <li>
                                          <a href="#How-it-works">How it works</a>
                                        </li>
                                        <li>
                                          <a href="#Example">Example</a>
                                        </li>
                                      </ul>
                                  </li>
                                    <li><a href="#Specificity">Specificity</a></li>
                               
                                <li>
                                    <a href="#Sass">Sass</a>
                                    <ul>
                                        <li>
                                            <a href="#Variables">Variables</a>
                                        </li>
                                        <li>
                                            <a href="#Map">Map</a>
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
                            <a class="page-link border-0" href="/utilities/borders.php">
                                <span>Previous</span>
                                <strong class="d-block">« Borders</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/display.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Display »</strong>
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


