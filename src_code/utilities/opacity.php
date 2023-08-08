<?php
$title = 'UX4G | Opacity';
$canonical = 'https://doc.ux4g.gov.in/utilities/opacity.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Opacity</li>
                        </ol>
                    </nav>

<!-- body content -->
<div class="row">
 
<div class="col-lg-9">
<h1>Opacity</h1>
<p>Control the opacity of elements.</p>
<p class="mt-30 mb-20">The <code>opacity</code> property sets the opacity level for an element. The opacity level describes the transparency level, where <code>1</code> is not transparent at all, <code>.5</code> is 50% visible, and <code>0</code> is completely transparent.</p>
<p>Set the <code>opacity</code> of an element using <code>.opacity-{value}</code> utilities.</p>

<!-- code snippet -->
<div class="code_bg round p-3">
<button class="btn btn-outline-primary float-end" id="copyButton1" onclick="copyToClipboard('copyText1', 'copyButton1')">
    <i class="fa fa-copy"></i>
</button>
    <pre id="copyText1"><code>&lt;div class=&quot;opacity-100&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;opacity-75&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;opacity-50&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;opacity-25&quot;&gt;...&lt;/div&gt;</code></pre>
</div>
<!-- code snippet end -->
<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example d-sm-flex">
  <div class="opacity-100 p-3 m-2 bg-primary text-light fw-bold rounded">100%</div>
  <div class="opacity-75 p-3 m-2 bg-primary text-light fw-bold rounded">75%</div>
  <div class="opacity-50 p-3 m-2 bg-primary text-light fw-bold rounded">50%</div>
  <div class="opacity-25 p-3 m-2 bg-primary text-light fw-bold rounded">25%</div>
</div>
</div>
<!-- code end -->

<h2>Utilities API <a href="" class="opacity-0 hover-1" id="Utilities-API">#</a></h2>
<p>Opacity utilities are declared in our utilities API in <code>scss/_utilities.scss</code>. <a href="/utilities/api.php/#Using-the-API">Learn how to use the utilities API.</a></p>

<!-- code snippet -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton2" onclick="copyToClipboard('copyText2', 'copyButton2')">
    <i class="fa fa-copy"></i>
</button>
<pre id="copyText2"><code>&quot;opacity&quot;: (
      property: opacity,
      values: (
        0: 0,
        25: .25,
        50: .5,
        75: .75,
        100: 1,
      )
    ),
    </code></pre>
</div>
<!-- code snippet end -->


</div>

 <!-- right side scrollbar -->
 <!-- <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">
                                    <li><a href="#Utilities-API">Utilities API</a></li>
                                    
                                </ul>
                            </div>
                        </div>
</div> -->
<!-- end flat -->

                    <!-- pagination -->
                    <div class="col-12 col-sm-9 mt-30">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/utilities/interactions.php">
                                <span>Previous</span>
                                <strong class="d-block">« Interactions</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/overflow.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Overflow »</strong>
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


