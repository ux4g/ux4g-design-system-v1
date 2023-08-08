<?php
$title = 'UX4G | Overflow';
$canonical = 'https://doc.ux4g.gov.in/utilities/overflow.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Overflow</li>
                        </ol>
                    </nav>

<!-- body content -->
<div class="row">
 
<div class="col-lg-9">
<h1>Overflow</h1>
<p>Use these shorthand utilities for quickly configuring how content overflows an element.</p>
<p class="mt-30">Adjust the <code>overflow</code> property on the fly with four default values and classes. These classes are not responsive by default.</p>
<!-- code snippet -->
<div class="code_bg round p-3">
<button class="btn btn-outline-primary float-end" id="copyButton1" onclick="copyToClipboard('copyText1', 'copyButton1')">
    <i class="fa fa-copy"></i>
</button>
    <pre id="copyText1"><code>&lt;div class=&quot;overflow-auto&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;overflow-hidden&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;overflow-visible&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;overflow-scroll&quot;&gt;...&lt;/div&gt;</code></pre>
</div>
<!-- code snippet end -->
<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example d-md-flex">
  <div class="overflow-auto p-3 mb-3 mb-md-0 me-md-3 bg-light" style="max-width: 260px; max-height: 100px;">
    This is an example of using <code>.overflow-auto</code> on an element with set width and height dimensions. By design, this content will vertically scroll.
  </div>
  <div class="overflow-hidden p-3 mb-3 mb-md-0 me-md-3 bg-light" style="max-width: 260px; max-height: 100px;">
    This is an example of using <code>.overflow-hidden</code> on an element with set width and height dimensions.
  </div>
  <div class="overflow-visible p-3 mb-3 mb-md-0 me-md-3 bg-light" style="max-width: 260px; max-height: 100px;">
    This is an example of using <code>.overflow-visible</code> on an element with set width and height dimensions.
  </div>
  <div class="overflow-scroll p-3 bg-light" style="max-width: 260px; max-height: 100px;">
    This is an example of using <code>.overflow-scroll</code> on an element with set width and height dimensions.
  </div>
</div>
</div>
<!-- code end -->
<p>Using Sass variables, you may customize the overflow utilities by changing the <code>$overflows</code> variable in <code>_variables.scss</code>.</p>
<h2 class="mb-20">Sass  <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
<h3>Utilities API  <a href="" id="Utilities-API" class="opacity-0 hover-1">#</a></h3>
<p>Overflow utilities are declared in our utilities API in <code>scss/_utilities.scss</code>. <a href="/utilities/api.php/#Using-the-API">Learn how to use the utilities API.</a></p>

<!-- code snippet -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton2" onclick="copyToClipboard('copyText2', 'copyButton2')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText2"><code>&quot;overflow&quot;: (
      property: overflow,
      values: auto hidden visible scroll,
    ),
    </code></pre>
</div>
<!-- code snippet end -->


</div>

 <!-- right side scrollbar -->
 <!-- <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">
                                    <li><a href="#Sass">Sass</a>
                                    <ul>
                                        <li>
                                            <a  href="#Utilities-API">Utilities API</a>
                                        </li>
                                    </ul>
                                </li>
                                    
                                </ul>
                            </div>
                        </div>
</div> -->
<!-- end flat -->

                    <!-- pagination -->
                    <div class="col-12 col-sm-9 mt-30">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/utilities/opacity.php">
                                <span>Previous</span>
                                <strong class="d-block">« Opacity</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/position.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Position »</strong>
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


