<?php
$title = 'UX4G | Visibility';
$canonical = 'https://doc.ux4g.gov.in/utilities/vertical-align.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Visibility</li>
                        </ol>
                    </nav>

<!-- body content -->
<div class="row">
 
<div class="col-lg-9">
<h1>Visibility</h1>
<p>Control the visibility of elements, without modifying their display, with visibility utilities.</p>
<p>Set the <code>visibility</code> of elements with our visibility utilities. These utility classes do not modify the <code>display</code> value at all and do not affect layout – <code>.invisible</code> elements still take up space in the page.</p>

<div class="blockquote_warning mt-20 mb-20">
Elements with the <code>.invisible</code> class will be hidden <em>both</em> visually and for assistive technology/screen reader users.
</div>

<p>Apply <code>.visible</code> or <code>.invisible</code> as needed.</p>


<!-- code snippet -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton1" onclick="copyToClipboard('copyText1', 'copyButton1')">
    <i class="fa fa-copy"></i>
</button>   
  <pre id="copyText1"><code>&lt;div class=&quot;visible&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;invisible&quot;&gt;...&lt;/div&gt;</code></pre>
</div>
<!-- code snippet end -->

<!-- code snippet -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton2" onclick="copyToClipboard('copyText2', 'copyButton2')">
    <i class="fa fa-copy"></i>
</button>     
  <pre id="copyText2"><code>// Class
.visible {
  visibility: visible !important;
}
.invisible {
  visibility: hidden !important;
}</code></pre>
</div>
<!-- code snippet end -->

<h2 class="mb-20">Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
<h3>Utilities API <a href="" id="Utilities-API" class="opacity-0 hover-1">#</a></h3>
<p>Visibility utilities are declared in our utilities API in <code>scss/_utilities.scss</code>. <a href="/utilities/api.php/#Using-the-API">Learn how to use the utilities API.</a></p>

<!-- code snippet -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton3" onclick="copyToClipboard('copyText3', 'copyButton3')">
    <i class="fa fa-copy"></i>
</button>      
  <pre id="copyText3"><code>    "visibility": (
      property: visibility,
      class: null,
      values: (
        visible: visible,
        invisible: hidden,
      )
    )
    </code></pre>
</div>
<!-- code snippet end -->

</div>

 <!-- right side scrollbar -->
 <!-- <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
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
</div> -->
<!-- end flat -->

                    <!-- pagination -->
                    <div class="col-12 col-sm-9 mt-30">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/utilities/vertical-align.php">
                                <span>Previous</span>
                                <strong class="d-block">« Vertical align</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/z-index.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Z-index »</strong>
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


