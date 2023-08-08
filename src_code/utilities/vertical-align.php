<?php
$title = 'UX4G | Vertical align';
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
                            <li class="breadcrumb-item active" aria-current="page">Vertical align</li>
                        </ol>
                    </nav>

<!-- body content -->
<div class="row">
 
<div class="col-lg-9">
<h1>Vertical alignment</h1>
<p>Easily change the vertical alignment of inline, inline-block, inline-table, and table cell elements.</p>
<p>Change the alignment of elements with the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/vertical-align" target="_blank"><code>vertical-alignment</code></a> utilities. Please note that vertical-align only affects inline, inline-block, inline-table, and table cell elements.</p>
<p>Choose from <code>.align-baseline</code>, <code>.align-top</code>, <code>.align-middle</code>, <code>.align-bottom</code>, <code>.align-text-bottom</code>, and <code>.align-text-top</code> as needed.</p>
<p>To vertically center non-inline content (like <code>&lt;div&gt;</code>s and more), use our <a href="/utilities/flex.php#Align-items">flex box utilities</a>.</p>
<p>With inline elements:</p>

<!-- code snippet -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton1" onclick="copyToClipboard('copyText1', 'copyButton1')">
    <i class="fa fa-copy"></i>
</button>
  <pre id="copyText1"><code>&lt;span class=&quot;align-baseline&quot;&gt;baseline&lt;/span&gt;
&lt;span class=&quot;align-top&quot;&gt;top&lt;/span&gt;
&lt;span class=&quot;align-middle&quot;&gt;middle&lt;/span&gt;
&lt;span class=&quot;align-bottom&quot;&gt;bottom&lt;/span&gt;
&lt;span class=&quot;align-text-top&quot;&gt;text-top&lt;/span&gt;
&lt;span class=&quot;align-text-bottom&quot;&gt;text-bottom&lt;/span&gt;</code></pre>
</div>
<!-- code snippet end -->

<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example">
<span class="align-baseline">baseline</span>
<span class="align-top">top</span>
<span class="align-middle">middle</span>
<span class="align-bottom">bottom</span>
<span class="align-text-top">text-top</span>
<span class="align-text-bottom">text-bottom</span>
</div>
</div>
<!-- code end -->

<p>With table cells:</p>

<!-- code snippet -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton2" onclick="copyToClipboard('copyText2', 'copyButton2')">
    <i class="fa fa-copy"></i>
</button>  
  <pre id="copyText2"><code>&lt;table style=&quot;height: 100px;&quot;&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td class=&quot;align-baseline&quot;&gt;baseline&lt;/td&gt;
      &lt;td class=&quot;align-top&quot;&gt;top&lt;/td&gt;
      &lt;td class=&quot;align-middle&quot;&gt;middle&lt;/td&gt;
      &lt;td class=&quot;align-bottom&quot;&gt;bottom&lt;/td&gt;
      &lt;td class=&quot;align-text-top&quot;&gt;text-top&lt;/td&gt;
      &lt;td class=&quot;align-text-bottom&quot;&gt;text-bottom&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
</div>
<!-- code snippet end -->

<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3 mb-20">
<div class="bd-example">
<table style="height: 100px;">
  <tbody>
    <tr>
      <td class="align-baseline">baseline</td>
      <td class="align-top">top</td>
      <td class="align-middle">middle</td>
      <td class="align-bottom">bottom</td>
      <td class="align-text-top">text-top</td>
      <td class="align-text-bottom">text-bottom</td>
    </tr>
  </tbody>
</table>
</div>
</div>
<!-- code end -->

<h2 class="mb-20">Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
<h3>Utilities API <a href="" id="Utilities-API" class="opacity-0 hover-1">#</a></h3>
<p>Vertical align utilities are declared in our utilities API in <code>scss/_utilities.scss</code>. <a href="/utilities/api.php/#Using-the-API">Learn how to use the utilities API.</a></p>

<!-- code snippet -->
<div class="code_bg rounded p-3 mb-20">
<button class="btn btn-outline-primary float-end" id="copyButton3" onclick="copyToClipboard('copyText3', 'copyButton3')">
    <i class="fa fa-copy"></i>
</button>   
  <pre id="copyText3"><code>    "align": (
      property: vertical-align,
      class: align,
      values: baseline top middle bottom text-bottom text-top
    ),
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
                            <a class="page-link border-0" href="/utilities/text.php">
                                <span>Previous</span>
                                <strong class="d-block">« Text</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/visibility.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Visibility »</strong>
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


