<?php
$title = 'UX4G | Display';
$canonical = 'https://doc.ux4g.gov.in/utilities/display.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Display</li>
                        </ol>
                    </nav>

<!-- body content -->
<div class="row">
 
<div class="col-lg-9">
<h1>Display property</h1>  
<p>
With the display tools, developer can easily and quickly change the display value of components and more. Includes extras for managing display while printing as well as support for some of the more popular values.
</p>
<h2>How it works <a href="" id="How-it-works" class="hover-1 opacity-0">#</a></h2>
<p>With the help of our responsive display utility classes, developer may modify the value of the display property. For presentation purposes, here purposefully only support a portion of all potential values. Developer can combine classes for a variety of effects as needed.</p>

<h2>Notation <a href="" id="Notation" class="hover-1 opacity-0">#</a></h2>


<p>
There is no breakpoint abbreviation in the display utility classes that apply to all breakpoints, from xs to <code>xxl</code>. This is so that a media query is not applied to those classes since they are applied from <code>min-width</code>: 0; and above. <code>However</code>, a breakpoint abbreviation is present for the remaining breakpoints.
</p>
<p>As such, the classes are named using the format:</p>
<ul class="un_order_list">
<li><code>.d-{value}</code> for <code>xs</code></li>
<li><code>.d-{breakpoint}-{value}</code> for <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, and <code>xxl</code>.</li>
</ul>
<p>Where value is one of:</p>
<ul class="un_order_list">
<li><code>none</code></li>
<li><code>inline</code></li>
<li><code>inline-block</code></li>
<li><code>block</code></li>
<li><code>grid</code></li>
<li><code>table</code></li>
<li><code>table-cell</code></li>
<li><code>table-row</code></li>
<li><code>flex</code></li>
<li><code>inline-flex</code></li>
</ul>
<p>The display values can be altered by changing the <code>display</code> values defined in <code>$utilities</code> and recompiling the SCSS.</p>
<p>The media queries affect screen widths with the given breakpoint <em>or larger</em>. For example, <code>.d-lg-none</code> sets <code>display: none;</code> on <code>lg</code>, <code>xl</code>, and <code>xxl</code> screens.</p>

<h2>Examples <a href="" id="Examples" class="hover-1 opacity-0">#</a></h2>

<!-- code snippet-->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton1" onclick="copyToClipboard('copyText1', 'copyButton1')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText1"><code>&lt;div class=&quot;d-inline p-2 text-bg-primary&quot;&gt;d-inline&lt;/div&gt;
&lt;div class=&quot;d-inline p-2 text-bg-dark&quot;&gt;d-inline&lt;/div&gt;</code></pre>
</div>
<!-- code snippet end-->

<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="d-inline p-2 text-bg-primary">d-inline</div>
<div class="d-inline p-2 text-bg-dark">d-inline</div>
</div>
<!-- code end -->

<!-- code snippet-->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton2" onclick="copyToClipboard('copyText2', 'copyButton2')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText2"><code>&lt;span class=&quot;d-block p-2 text-bg-primary&quot;&gt;d-block&lt;/span&gt;
&lt;span class=&quot;d-block p-2 text-bg-dark&quot;&gt;d-block&lt;/span&gt;</code></pre>
</div>
<!-- code snippet end-->

<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<span class="d-block p-2 text-bg-primary">d-block</span>
<span class="d-block p-2 text-bg-dark">d-block</span>
</div>
<!-- code end -->

<h2>Hiding elements <a href="" id="Hiding-elements" class="hover-1 opacity-0">#</a></h2>
<p>For faster mobile-friendly development, use responsive display classes for showing and hiding elements by device. Avoid creating entirely different versions of the same site, instead hide elements responsively for each screen size.</p>
<p>To hide elements simply use the <code>.d-none</code> class or one of the <code>.d-{sm,md,lg,xl,xxl}-none</code> classes for any responsive screen variation.</p>
<p>To show an element only on a given interval of screen sizes you can combine one <code>.d-*-none</code> class with a <code>.d-*-*</code> class, for example <code>.d-none .d-md-block .d-xl-none .d-xxl-none</code> will hide the element for all screen sizes except on medium and large devices.</p>
<div class="table-responsive"><table class="table">
<thead>
<tr>
<th>Screen size</th>
<th>Class</th>
</tr>
</thead>
<tbody>
<tr>
<td>Hidden on all</td>
<td><code>.d-none</code></td>
</tr>
<tr>
<td>Hidden only on xs</td>
<td><code>.d-none .d-sm-block</code></td>
</tr>
<tr>
<td>Hidden only on sm</td>
<td><code>.d-sm-none .d-md-block</code></td>
</tr>
<tr>
<td>Hidden only on md</td>
<td><code>.d-md-none .d-lg-block</code></td>
</tr>
<tr>
<td>Hidden only on lg</td>
<td><code>.d-lg-none .d-xl-block</code></td>
</tr>
<tr>
<td>Hidden only on xl</td>
<td><code>.d-xl-none</code></td>
</tr>
<tr>
<td>Hidden only on xxl</td>
<td><code>.d-xxl-none .d-xxl-block</code></td>
</tr>
<tr>
<td>Visible on all</td>
<td><code>.d-block</code></td>
</tr>
<tr>
<td>Visible only on xs</td>
<td><code>.d-block .d-sm-none</code></td>
</tr>
<tr>
<td>Visible only on sm</td>
<td><code>.d-none .d-sm-block .d-md-none</code></td>
</tr>
<tr>
<td>Visible only on md</td>
<td><code>.d-none .d-md-block .d-lg-none</code></td>
</tr>
<tr>
<td>Visible only on lg</td>
<td><code>.d-none .d-lg-block .d-xl-none</code></td>
</tr>
<tr>
<td>Visible only on xl</td>
<td><code>.d-none .d-xl-block .d-xxl-none</code></td>
</tr>
<tr>
<td>Visible only on xxl</td>
<td><code>.d-none .d-xxl-block</code></td>
</tr>
</tbody>
</table></div>

<!-- code snippet-->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton3" onclick="copyToClipboard('copyText3', 'copyButton3')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText3"><code>&lt;div class=&quot;d-lg-none&quot;&gt;hide on lg and wider screens&lt;/div&gt;
&lt;div class=&quot;d-none d-lg-block&quot;&gt;hide on screens smaller than lg&lt;/div&gt;</code></pre>
</div>
<!-- code snippet end-->

<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="d-lg-none">hide on lg and wider screens</div>
<div class="d-none d-lg-block">hide on screens smaller than lg</div>
</div>
<!-- code end -->

<h2>Display in print <a href="" id="Display-in-print" class="hover-1 opacity-0">#</a></h2>
<p>Change the <code>display</code> value of elements when printing with our print display utility classes. Includes support for the same <code>display</code> values as our responsive <code>.d-*</code> utilities.</p>
<ul class="un_order_list">
<li><code>.d-print-none</code></li>
<li><code>.d-print-inline</code></li>
<li><code>.d-print-inline-block</code></li>
<li><code>.d-print-block</code></li>
<li><code>.d-print-grid</code></li>
<li><code>.d-print-table</code></li>
<li><code>.d-print-table-row</code></li>
<li><code>.d-print-table-cell</code></li>
<li><code>.d-print-flex</code></li>
<li><code>.d-print-inline-flex</code></li>
</ul>

<p>The print and display classes can be combined.</p>

<!-- code snippet-->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton4" onclick="copyToClipboard('copyText4', 'copyButton4')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText4"><code>&lt;div class=&quot;d-print-none&quot;&gt;Screen Only (Hide on print only)&lt;/div&gt;
&lt;div class=&quot;d-none d-print-block&quot;&gt;Print Only (Hide on screen only)&lt;/div&gt;
&lt;div class=&quot;d-none d-lg-block d-print-block&quot;&gt;Hide up to large on screen, but always show on print&lt;/div&gt;</code></pre>
</div>
<!-- code snippet end-->

<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="d-print-none">Screen Only (Hide on print only)</div>
<div class="d-none d-print-block">Print Only (Hide on screen only)</div>
<div class="d-none d-lg-block d-print-block">Hide up to large on screen, but always show on print</div>
</div>
<!-- code end -->

<h2>Sass  <a href="" id="Sass" class="hover-1 opacity-0">#</a></h2>
<h3>Utilities API  <a href="" id="Utilities-API" class="hover-1 opacity-0">#</a></h3>
<p>Display utilities are declared in our utilities API in <code>scss/_utilities.scss</code>. <a href="/utilities/api.php/#Using-the-API">Learn how to use the utilities API.</a></p>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton5" onclick="copyToClipboard('copyText5', 'copyButton5')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText5"><code>&quot;display&quot;: (
      responsive: true,
      print: true,
      property: display,
      class: d,
      values: inline inline-block block grid table table-row table-cell flex inline-flex none
    ),
    </code></pre>
</div>
<!-- code end -->

</div>

                        <!-- right side scrollbar -->
                        <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">
                                    
                                    <li><a href="#How-it-works">How it works</a></li>
                                    <li><a href="#Notation">Notation</a></li>
                                    <li><a href="#Examples">Examples</a></li>
                                    <li><a href="#Hiding-elements">Hiding elements</a></li>
                                    <li><a href="#Display-in-print">Display in print</a></li>
                                    <li>
                                      <a href="#Sass">Sass</a>
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
                            <a class="page-link border-0" href="/utilities/colors.php">
                                <span>Previous</span>
                                <strong class="d-block">« Colors</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/flex.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Flex »</strong>
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


