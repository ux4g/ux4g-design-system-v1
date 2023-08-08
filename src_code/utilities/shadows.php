<?php
$title = 'UX4G | Shadows';
$canonical = 'https://doc.ux4g.gov.in/utilities/shadows.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Shadows</li>
                        </ol>
                    </nav>

<!-- body content -->
<div class="row">
 
<div class="col-lg-9">
<h1>Shadows</h1>
<p>Add or remove shadows to elements with box-shadow utilities.</p>

<h2 class="mt-20">Examples  <a href="" id="Examples" class="opacity-0 hover-1">#</a></h2>
<p>While shadows on components are disabled by default in Bootstrap and can be enabled via <code>$enable-shadows</code>, you can also quickly add or remove a shadow with our <code>box-shadow</code> utility classes. Includes support for <code>.shadow-none</code> and three default sizes (which have associated variables to match).</p>

<!-- code snippet -->
<div class="rounded code_bg p-3">
<button class="btn btn-outline-primary float-end" id="copyButton1" onclick="copyToClipboard('copyText1', 'copyButton1')">
    <i class="fa fa-copy"></i>
</button>
  <pre id="copyText1"><code>&lt;div class=&quot;shadow-none p-3 mb-5 bg-light rounded&quot;&gt;No shadow&lt;/div&gt;
&lt;div class=&quot;shadow-sm p-3 mb-5 bg-body rounded&quot;&gt;Small shadow&lt;/div&gt;
&lt;div class=&quot;shadow p-3 mb-5 bg-body rounded&quot;&gt;Regular shadow&lt;/div&gt;
&lt;div class=&quot;shadow-lg p-3 mb-5 bg-body rounded&quot;&gt;Larger shadow&lt;/div&gt;</code></pre>
</div>
<!-- code snippet end -->
<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="rounded code_bg p-3 mb-20">
<div class="bd-example">
<div class="shadow-none p-3 mb-5 bg-light rounded">No shadow</div>
<div class="shadow-sm p-3 mb-5 bg-body rounded">Small shadow</div>
<div class="shadow p-3 mb-5 bg-body rounded">Regular shadow</div>
<div class="shadow-lg p-3 mb-5 bg-body rounded">Larger shadow</div>
</div>
</div>
<!-- code end -->

<h2 class="mb-20">Sass  <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
<h3>Variables  <a href="" id="Variables" class="opacity-0 hover-1">#</a></h3>

<!-- code snippet -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton2" onclick="copyToClipboard('copyText2', 'copyButton2')">
    <i class="fa fa-copy"></i>
</button>
  <pre id="copyText2"><code>$box-shadow:                  0 .5rem 1rem rgba($black, .15);
$box-shadow-sm:               0 .125rem .25rem rgba($black, .075);
$box-shadow-lg:               0 1rem 3rem rgba($black, .175);
$box-shadow-inset:            inset 0 1px 2px rgba($black, .075);</code></pre>
</div>
<!-- code snippet end -->

<h2>Utilities API <a href="" id="Utilities-API" class="opacity-0 hover-1">#</a></h2>
<p>Shadow utilities are declared in our utilities API in <code>scss/_utilities.scss</code>. <a href="/utilities/api.php/#Using-the-API">Learn how to use the utilities API.</a></p>

<!-- code snippet -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton3" onclick="copyToClipboard('copyText3', 'copyButton3')">
    <i class="fa fa-copy"></i>
</button> 
<pre id="copyText3"><code>&quot;shadow&quot;: (
      property: box-shadow,
      class: shadow,
      values: (
        null: $box-shadow,
        sm: $box-shadow-sm,
        lg: $box-shadow-lg,
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
                                    <li>
                                        <a href="#Examples">Examples</a>
                                    </li>                                    
                                    <li><a href="#Sass">Sass</a>
                                    <ul>
                                        <li>
                                            <a  href="#Variables">Variables</a>
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
                            <a class="page-link border-0" href="/utilities/position.php">
                                <span>Previous</span>
                                <strong class="d-block">« Position</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/sizing.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Sizing »</strong>
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


