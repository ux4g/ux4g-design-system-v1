<?php
$title = 'UX4G | Text';
$canonical = 'https://doc.ux4g.gov.in/utilities/text.php';

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
                <div class="">
                    <!-- breadcrumb -->
                    <nav class="mb-30 mt-50" style="--bs-breadcrumb-divider: url(/assets/img/icon/chevron.svg)"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a
                                    href="/">
                                    <i class="fa fa-home"></i>
                                </a></li>
                            <li class="breadcrumb-item"><a href="/category/utilities.php">Utilities</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Text</li>
                        </ol>
                    </nav>

<!-- body content -->
<div class="row">
 
<div class="col-lg-9">
<h1>Text</h1>
<p>Documentation and examples for common text utilities to control alignment, wrapping, weight, and more.</p>
<h2 class="mt-20">Text alignment <a href="" id="Text-alignment" class="opacity-0 hover-1">#</a></h2>
<p>Easily realign text to components with text alignment classes. For start, end, and center alignment, responsive classes are available that use the same viewport width breakpoints as the grid system.</p>


<!-- code snippet -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton1" onclick="copyToClipboard('copyText1', 'copyButton1')">
    <i class="fa fa-copy"></i>
</button>  
  <pre id="copyText1"><code>&lt;p class=&quot;text-start&quot;&gt;Start aligned text on all viewport sizes.&lt;/p&gt;
&lt;p class=&quot;text-center&quot;&gt;Center aligned text on all viewport sizes.&lt;/p&gt;
&lt;p class=&quot;text-end&quot;&gt;End aligned text on all viewport sizes.&lt;/p&gt;

&lt;p class=&quot;text-sm-start&quot;&gt;Start aligned text on viewports sized SM (small) or wider.&lt;/p&gt;
&lt;p class=&quot;text-md-start&quot;&gt;Start aligned text on viewports sized MD (medium) or wider.&lt;/p&gt;
&lt;p class=&quot;text-lg-start&quot;&gt;Start aligned text on viewports sized LG (large) or wider.&lt;/p&gt;
&lt;p class=&quot;text-xl-start&quot;&gt;Start aligned text on viewports sized XL (extra-large) or wider.&lt;/p&gt;</code></pre>
</div>
<!-- code snippet end -->
<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example">
<p class="text-start">Start aligned text on all viewport sizes.</p>
<p class="text-center">Center aligned text on all viewport sizes.</p>
<p class="text-end">End aligned text on all viewport sizes.</p>

<p class="text-sm-start">Start aligned text on viewports sized SM (small) or wider.</p>
<p class="text-md-start">Start aligned text on viewports sized MD (medium) or wider.</p>
<p class="text-lg-start">Start aligned text on viewports sized LG (large) or wider.</p>
<p class="text-xl-start">Start aligned text on viewports sized XL (extra-large) or wider.</p>
</div>
</div>
<!-- code end-->

<div class="blockquote">
Note that we don’t provide utility classes for justified text. While, aesthetically, justified text might look more appealing, it does make word-spacing more random and therefore harder to read.
</div>

<h2>Text wrapping and overflow <a href="" id="Text-wrapping-and-overflow" class="opacity-0 hover-1">#</a></h2>
<p>Wrap text with a <code>.text-wrap</code> class.</p>


<!-- code snippet -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton2" onclick="copyToClipboard('copyText2', 'copyButton2')">
    <i class="fa fa-copy"></i>
</button>  
  <pre id="copyText2"><code>
&lt;div class=&quot;badge bg-primary text-wrap&quot; style=&quot;width: 6rem;&quot;&gt;
  This text should wrap.
&lt;/div&gt;</code></pre>
</div>
<!-- code snippet -->
<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example">
<div class="badge bg-primary text-wrap" style="width: 6rem;">
  This text should wrap.
</div>
</div>
</div>
<!-- code  end-->
<p>Prevent text from wrapping with a <code>.text-nowrap</code> class.</p>

<!-- code snippet -->
<div class="code_bg rounded p-3">
  <button class="btn btn-outline-primary float-end" id="copyButton3" onclick="copyToClipboard('copyText3', 'copyButton3')">
    <i class="fa fa-copy"></i>
  </button>  
  <pre id="copyText3"><code>
  &lt;div class=&quot;text-nowrap bg-light border&quot; style=&quot;width: 8rem;&quot;&gt;
  This text should overflow the parent.
&lt;/div&gt;
  </code></pre>
</div>
<!-- code snippet end-->

<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example">
<div class="text-nowrap bg-light border" style="width: 8rem;">
  This text should overflow the parent.
</div>
</div>
</div>
  <!-- code end-->

  <h2>Word break <a href="" id="Word-break" class="opacity-0 hover-1">#</a></h2>
  <p>Prevent long strings of text from breaking your components’ layout by using <code>.text-break</code> to set <code>word-wrap: break-word</code> and <code>word-break: break-word</code>. We use <code>word-wrap</code> instead of the more common <code>overflow-wrap</code> for wider browser support, and add the deprecated <code>word-break: break-word</code> to avoid issues with flex containers.</p>

  <!-- code snippet -->
<div class="code_bg rounded p-3">
  <button class="btn btn-outline-primary float-end" id="copyButton4" onclick="copyToClipboard('copyText4', 'copyButton4')">
    <i class="fa fa-copy"></i>
  </button>  
  <pre id="copyText2"><code>&lt;p class=&quot;textbreak&quot;&gt;mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm&lt;/p&gt;</code></pre>
</div>
<!-- code snippet end-->

<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example">
<p class="text-break">mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</p>
</div>
</div>
  <!-- code end-->

<div class="blockquote_warning mb-20">
Note that <a href="https://rtlstyling.com/posts/rtl-styling#3.-line-break" target="_blank">breaking words isn’t possible in Arabic</a>, which is the most used RTL language. Therefore <code>.text-break</code> is removed from our RTL compiled CSS.
</div>

<h2>Text transform  <a href="" id="Text-transform" class="opacity-0 hover-1">#</a></h2>
<p>Transform text in components with text capitalization classes.</p>

  <!-- code snippet -->
  <div class="code_bg rounded p-3">
  <button class="btn btn-outline-primary float-end" id="copyButton5" onclick="copyToClipboard('copyText5', 'copyButton5')">
    <i class="fa fa-copy"></i>
</button>  
<pre id="copyText5"><code>&lt;p class=&quot;text-lowercase&quot;&gt;Lowercased text.&lt;/p&gt;
&lt;p class=&quot;text-uppercase&quot;&gt;Uppercased text.&lt;/p&gt;
&lt;p class=&quot;text-capitalize&quot;&gt;CapiTaliZed text.&lt;/p&gt;</code></pre>
</div>
<!-- code snippet end-->

<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example">
<p class="text-lowercase">Lowercased text.</p>
<p class="text-uppercase">Uppercased text.</p>
<p class="text-capitalize">CapiTaliZed text.</p>
</div>
</div>
<!-- code end-->

<p>Note how <code>.text-capitalize</code> only changes the first letter of each word, leaving the case of any other letters unaffected.</p>

<h2>Font size <a href="" id="Font-size" class="opacity-0 hover-1">#</a></h2>
<p>Quickly change the <code>font-size</code> of text. While our heading classes (e.g., <code>.h1</code>–<code>.h6</code>) apply <code>font-size</code>, <code>font-weight</code>, and <code>line-height</code>, these utilities <em>only</em> apply <code>font-size</code>. Sizing for these utilities matches HTML’s heading elements, so as the number increases, their size decreases.</p>

<!-- code snippet -->
<div class="code_bg rounded p-3">
  <button class="btn btn-outline-primary float-end" id="copyButton6" onclick="copyToClipboard('copyText6', 'copyButton6')">
    <i class="fa fa-copy"></i>
</button>  
<pre id="copyText6"><code>&lt;p class=&quot;fs-1&quot;&gt;.fs-1 text&lt;/p&gt;
&lt;p class=&quot;fs-2&quot;&gt;.fs-2 text&lt;/p&gt;
&lt;p class=&quot;fs-3&quot;&gt;.fs-3 text&lt;/p&gt;
&lt;p class=&quot;fs-4&quot;&gt;.fs-4 text&lt;/p&gt;
&lt;p class=&quot;fs-5&quot;&gt;.fs-5 text&lt;/p&gt;
&lt;p class=&quot;fs-6&quot;&gt;.fs-6 text&lt;/p&gt;</code></pre>
</div>
<!-- code snippet end-->

<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example">
<p class="fs-1">.fs-1 text</p>
<p class="fs-2">.fs-2 text</p>
<p class="fs-3">.fs-3 text</p>
<p class="fs-4">.fs-4 text</p>
<p class="fs-5">.fs-5 text</p>
<p class="fs-6">.fs-6 text</p>
</div>
</div>
<!-- code end-->

<p>Customize your available <code>font-size</code>s by modifying the <code>$font-sizes</code> Sass map.</p>

<h2>Font weight and italics <a href="" id="Font-weight-and-italics" class="opacity-0 hover-1">#</a></h2>
<p>Quickly change the <code>font-weight</code> or <code>font-style</code> of text with these utilities. <code>font-style</code> utilities are abbreviated as <code>.fst-*</code> and <code>font-weight</code> utilities are abbreviated as <code>.fw-*</code>.</p>

<!-- code snippet -->
<div class="code_bg rounded p-3">
  <button class="btn btn-outline-primary float-end" id="copyButton7" onclick="copyToClipboard('copyText7', 'copyButton7')">
    <i class="fa fa-copy"></i>
</button>  
<pre id="copyText7"><code>&lt;p class=&quot;fw-bold&quot;&gt;Bold text.&lt;/p&gt;
&lt;p class=&quot;fw-bolder&quot;&gt;Bolder weight text (relative to the parent element).&lt;/p&gt;
&lt;p class=&quot;fw-semibold&quot;&gt;Semibold weight text.&lt;/p&gt;
&lt;p class=&quot;fw-normal&quot;&gt;Normal weight text.&lt;/p&gt;
&lt;p class=&quot;fw-light&quot;&gt;Light weight text.&lt;/p&gt;
&lt;p class=&quot;fw-lighter&quot;&gt;Lighter weight text (relative to the parent element).&lt;/p&gt;
&lt;p class=&quot;fst-italic&quot;&gt;Italic text.&lt;/p&gt;
&lt;p class=&quot;fst-normal&quot;&gt;Text with normal font style&lt;/p&gt;</code></pre>
</div>
<!-- code snippet end-->

<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example">
<p class="fw-bold">Bold text.</p>
<p class="fw-bolder">Bolder weight text (relative to the parent element).</p>
<p class="fw-semibold">Semibold weight text.</p>
<p class="fw-normal">Normal weight text.</p>
<p class="fw-light">Light weight text.</p>
<p class="fw-lighter">Lighter weight text (relative to the parent element).</p>
<p class="fst-italic">Italic text.</p>
<p class="fst-normal">Text with normal font style</p>
</div>
</div>
<!-- code end-->

<h2>Line height <a href="" id="Line-height" class="opacity-0 hover-1">#</a></h2>
<p>Change the line height with <code>.lh-*</code> utilities.</p>

<!-- code snippet -->
<div class="code_bg rounded p-3">
  <button class="btn btn-outline-primary float-end" id="copyButton8" onclick="copyToClipboard('copyText8', 'copyButton8')">
    <i class="fa fa-copy"></i>
</button>  
<pre id="copyText8"><code>&lt;p class=&quot;lh-1&quot;&gt;This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.&lt;/p&gt;
&lt;p class=&quot;lh-sm&quot;&gt;This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.&lt;/p&gt;
&lt;p class=&quot;lh-base&quot;&gt;This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.&lt;/p&gt;
&lt;p class=&quot;lh-lg&quot;&gt;This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.&lt;/p&gt;</code></pre>
</div>
<!-- code snippet end-->

<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example">
<p class="lh-1">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
<p class="lh-sm">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
<p class="lh-base">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
<p class="lh-lg">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
</div>
</div>
<!-- code end-->

<h2>Monospace <a href="" id="Monospace" class="opacity-0 hover-1">#</a></h2>
<p>Change a selection to our monospace font stack with <code>.font-monospace</code>.</p>

<!-- code snippet -->
<div class="code_bg rounded p-3">
  <button class="btn btn-outline-primary float-end" id="copyButton9" onclick="copyToClipboard('copyText9', 'copyButton9')">
    <i class="fa fa-copy"></i>
</button>  
<pre id="copyText9"><code>&lt;p class=&quot;font-monospace&quot;&gt;This is in monospace&lt;/p&gt;</code></pre>
</div>
<!-- code snippet end-->

<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example">
<p class="font-monospace">This is in monospace</p>
</div>
</div>
<!-- code end-->

<h2>Reset color  <a href="" id="Reset-color" class="opacity-0 hover-1">#</a></h2>
<p>Reset a text or link’s color with <code>.text-reset</code>, so that it inherits the color from its parent.</p>

<!-- code snippet -->
<div class="code_bg rounded p-3">
  <button class="btn btn-outline-primary float-end" id="copyButton10" onclick="copyToClipboard('copyText10', 'copyButton10')">
    <i class="fa fa-copy"></i>
</button>  
<pre id="copyText10"><code>&lt;p class=&quot;text-muted&quot;&gt;
  Muted text with a &lt;a href=&quot;#&quot; class=&quot;text-reset&quot;&gt;reset link&lt;/a&gt;.
&lt;/p&gt;</code></pre>
</div>
<!-- code snippet end-->

<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example">
<p class="text-muted">
  Muted text with a <a href="#" class="text-reset">reset link</a>.
</p>
</div>
</div>
<!-- code end-->

<h2>Text decoration <a href="" id="Text-decoration" class="opacity-0 hover-1">#</a></h2>

<!-- code snippet -->
<div class="code_bg rounded p-3">
  <button class="btn btn-outline-primary float-end" id="copyButton11" onclick="copyToClipboard('copyText11', 'copyButton11')">
    <i class="fa fa-copy"></i>
</button>  
<pre id="copyText11"><code>&lt;p class=&quot;text-decoration-underline&quot;&gt;This text has a line underneath it.&lt;/p&gt;
&lt;p class=&quot;text-decoration-line-through&quot;&gt;This text has a line going through it.&lt;/p&gt;
&lt;a href=&quot;#&quot; class=&quot;text-decoration-none&quot;&gt;This link has its text decoration removed&lt;/a&gt;</code></pre>
</div>
<!-- code snippet end-->

<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example">
<p class="text-decoration-underline">This text has a line underneath it.</p>
<p class="text-decoration-line-through">This text has a line going through it.</p>
<a href="#" class="text-decoration-none">This link has its text decoration removed</a>
</div>
</div>
<!-- code end-->

<h2 class="mb-20">Sass  <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
<h2>Variables  <a href="" id="Variables" class="opacity-0 hover-1">#</a></h2>

<!-- code snippet -->
<div class="code_bg rounded p-3 mb-20">
  <button class="btn btn-outline-primary float-end" id="copyButton12" onclick="copyToClipboard('copyText12', 'copyButton12')">
    <i class="fa fa-copy"></i>
</button>  
<pre id="copyText12"><code>// stylelint-disable value-keyword-case
$font-family-sans-serif:      system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
$font-family-monospace:       SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
// stylelint-enable value-keyword-case
$font-family-base:            var(--#{$prefix}font-sans-serif);
$font-family-code:            var(--#{$prefix}font-monospace);

// $font-size-root affects the value of `rem`, which is used for as well font sizes, paddings, and margins
// $font-size-base affects the font size of the body text
$font-size-root:              null;
$font-size-base:              1rem; // Assumes the browser default, typically `16px`
$font-size-sm:                $font-size-base * .875;
$font-size-lg:                $font-size-base * 1.25;

$font-weight-lighter:         lighter;
$font-weight-light:           300;
$font-weight-normal:          400;
$font-weight-semibold:        600;
$font-weight-bold:            700;
$font-weight-bolder:          bolder;

$font-weight-base:            $font-weight-normal;

$line-height-base:            1.5;
$line-height-sm:              1.25;
$line-height-lg:              2;

$h1-font-size:                $font-size-base * 2.5;
$h2-font-size:                $font-size-base * 2;
$h3-font-size:                $font-size-base * 1.75;
$h4-font-size:                $font-size-base * 1.5;
$h5-font-size:                $font-size-base * 1.25;
$h6-font-size:                $font-size-base;</code></pre>
</div>
<!-- code snippet end-->

<h2>Maps <a href="" id="Maps" class="opacity-0 hover-1">#</a></h2>
<p>Font-size utilities are generated from this map, in combination with our utilities API.</p>

<!-- code snippet -->
<div class="code_bg rounded p-3 mb-20">
  <button class="btn btn-outline-primary float-end" id="copyButton13" onclick="copyToClipboard('copyText13', 'copyButton13')">
    <i class="fa fa-copy"></i>
</button>  
<pre id="copyText13"><code>$font-sizes: (
  1: $h1-font-size,
  2: $h2-font-size,
  3: $h3-font-size,
  4: $h4-font-size,
  5: $h5-font-size,
  6: $h6-font-size
);</code></pre>
</div>
<!-- code snippet end-->

<h2>Utilities API <a href="" id="Utilities-API" class="opacity-0 hover-1">#</a></h2>
<p>Font and text utilities are declared in our utilities API in <code>scss/_utilities.scss</code>. <a href="/utilities/api.php/#Using-the-API">Learn how to use the utilities API.</a></p>

<!-- code snippet -->
<div class="code_bg rounded p-3">
  <button class="btn btn-outline-primary float-end" id="copyButton14" onclick="copyToClipboard('copyText14', 'copyButton14')">
    <i class="fa fa-copy"></i>
</button>  
<pre id="copyText14"><code>    "font-family": (
      property: font-family,
      class: font,
      values: (monospace: var(--#{$prefix}font-monospace))
    ),
    "font-size": (
      rfs: true,
      property: font-size,
      class: fs,
      values: $font-sizes
    ),
    "font-style": (
      property: font-style,
      class: fst,
      values: italic normal
    ),
    "font-weight": (
      property: font-weight,
      class: fw,
      values: (
        light: $font-weight-light,
        lighter: $font-weight-lighter,
        normal: $font-weight-normal,
        bold: $font-weight-bold,
        semibold: $font-weight-semibold,
        bolder: $font-weight-bolder
      )
    ),
    "line-height": (
      property: line-height,
      class: lh,
      values: (
        1: 1,
        sm: $line-height-sm,
        base: $line-height-base,
        lg: $line-height-lg,
      )
    ),
    "text-align": (
      responsive: true,
      property: text-align,
      class: text,
      values: (
        start: left,
        end: right,
        center: center,
      )
    ),
    "text-decoration": (
      property: text-decoration,
      values: none underline line-through
    ),
    "text-transform": (
      property: text-transform,
      class: text,
      values: lowercase uppercase capitalize
    ),
    "white-space": (
      property: white-space,
      class: text,
      values: (
        wrap: normal,
        nowrap: nowrap,
      )
    ),
    "word-wrap": (
      property: word-wrap word-break,
      class: text,
      values: (break: break-word),
      rtl: false
    ),
    </code></pre>
</div>
<!-- code snippet end-->


</div>

 <!-- right side scrollbar -->
 <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">
                                    <li><a href="#Text-alignment">Text alignment</a></li>                                    
                                    <li><a href="#Text-wrapping-and-overflow">Text wrapping and overflow</a></li>                                    
                                    <li><a href="#Word-break">Word break</a></li>                                    
                                    <li><a href="#Text-transform">Text transform</a></li>                                    
                                    <li><a href="#Font-size">Font size</a></li>                                    
                                    <li><a href="#Font-weight-and-italics">Font weight and italics</a></li>                                    
                                    <li><a href="#Line-height">Line height</a></li>                                    
                                    <li><a href="#Monospace">Monospace</a></li>                                    
                                    <li><a href="#Reset-color">Reset colore</a></li>                                    
                                    <li><a href="#Text-decoration">Text decoration</a></li>                                    
                                                                       
                                    <li><a href="#Sass">Sass</a>
                                    <ul>                                        
                                        <li>
                                            <a  href="#Variables">Variables</a>
                                        </li>
                                        <li>
                                            <a  href="#Maps">Maps</a>
                                        </li>
                                        <li>
                                            <a  href="#Utilities-API">Utilities API</a>
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
                            <a class="page-link border-0" href="/utilities/spacing.php">
                                <span>Previous</span>
                                <strong class="d-block">« Spacing</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/vertical-align.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Vertical align »</strong>
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


