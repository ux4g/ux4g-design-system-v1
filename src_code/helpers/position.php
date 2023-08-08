<?php
$title = 'UX4G | Position';
$canonical = 'https://doc.ux4g.gov.in/helpers/position.php';

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
                            <li class="breadcrumb-item"><a href="/category/helpers.php">Helpers</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Position</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <h1 class="mb-30"> Position</h1>
                    <p>Use these helpers for quickly configuring the position of an element.</p>
                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                        <div class="row">

                            <div class="col-sm-9">
                                <div class="body_content">
                                    <h2>Fixed top <a href="" id="Fixed-top" class="opacity-0 hover-1">#</a></h2>
                                    <p>Place a component from edge to edge at the top of the viewport. Make sure to comprehend how fixed position will affect the project; there might be a need to add more CSS.</p>
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton1"
                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                        </button>
                                        <pre id="copyText1" tabindex="0"
                                            class="prism-code language-html codeBlock_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module thin-scrollbar"><code class="codeBlockLines_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module"><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">fixed-top</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain">...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><br></span></code></pre>
                                    </div>

                                    <h2 class="mt-20">Fixed bottom <a href="" id="Fixed-bottom"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    Place a component at the viewport's bottom, edge to edge. Make sure to comprehend how fixed position will affect the project; there might be a need to add more CSS.
                                    </p>

                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton2"
                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                        </button>
                                        <pre id="copyText2" tabindex="0"
                                            class="prism-code language-html codeBlock_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module thin-scrollbar"><code class="codeBlockLines_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module"><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">fixed-bottom</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain">...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><br></span></code></pre>
                                    </div>

                                    <h2 class="mt-20">Sticky top <a href="" id="Sticky-top"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>Position an element at the top of the viewport, from edge to edge, but only after
                                        you scroll past it.</p>
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton3"
                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                        </button>
                                        <pre id="copyText3" tabindex="0"
                                            class="prism-code language-html codeBlock_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module thin-scrollbar"><code class="codeBlockLines_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module"><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">sticky-top</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain">...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><br></span></code></pre>
                                    </div>
                                    <h2 class="mt-20">Responsive sticky top <a href="" id="Responsive-sticky-top"
                                            class="opacity-0 hover-2">#</a></h2>
                                    <p>Responsive variations also exist for
                                        <code>.sticky-top</code> utility.
                                    </p>

                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton4"
                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                        </button>
                                        <pre id="copyText4"><code>&lt;div class=&quot;sticky-sm-top&quot;&gt;Stick to the top on viewports sized SM (small) or wider&lt;/div&gt;
&lt;div class=&quot;sticky-md-top&quot;&gt;Stick to the top on viewports sized MD (medium) or wider&lt;/div&gt;
&lt;div class=&quot;sticky-lg-top&quot;&gt;Stick to the top on viewports sized LG (large) or wider&lt;/div&gt;
&lt;div class=&quot;sticky-xl-top&quot;&gt;Stick to the top on viewports sized XL (extra-large) or wider&lt;/div&gt;
&lt;div class=&quot;sticky-xxl-top&quot;&gt;Stick to the top on viewports sized XXL (extra-extra-large) or wider&lt;/div&gt;</code></pre>
                                    </div>

                                    <h2 class="mt-20">Sticky bottom <a href="" id="Sticky-bottom"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>Position an element at the bottom of the viewport, from edge to edge, but only
                                        after you scroll past it.</p>
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton5"
                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                        </button>
                                        <pre id="copyText5" tabindex="0"
                                            class="prism-code language-html codeBlock_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module thin-scrollbar"><code class="codeBlockLines_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module"><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">sticky-bottom</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain">...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><br></span></code></pre>
                                    </div>

                                    <h2 class="mt-20">Responsive sticky bottom <a href="" id="Responsive-sticky-bottom"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>Responsive variations also exist for
                                        <code>.sticky-bottom</code> utility.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton6"
                                            onclick="copyToClipboard('copyText6', 'copyButton6')">
                                            <i class="fa fa-copy" id="iconCopied6"></i>
                                        </button>
                                        <pre id="copyText6"><code>&lt;div class=&quot;sticky-sm-bottom&quot;&gt;Stick to the bottom on viewports sized SM (small) or wider&lt;/div&gt;
&lt;div class=&quot;sticky-md-bottom&quot;&gt;Stick to the bottom on viewports sized MD (medium) or wider&lt;/div&gt;
&lt;div class=&quot;sticky-lg-bottom&quot;&gt;Stick to the bottom on viewports sized LG (large) or wider&lt;/div&gt;
&lt;div class=&quot;sticky-xl-bottom&quot;&gt;Stick to the bottom on viewports sized XL (extra-large) or wider&lt;/div&gt;
&lt;div class=&quot;sticky-xxl-bottom&quot;&gt;Stick to the bottom on viewports sized XXL (extra-extra-large) or wider&lt;/div&gt;</code></pre>
                                    </div>
                                    <!-- code end -->







                                </div>
                            </div>
                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                <div class="right_side">
                                    <ul class="p-0">
                                        <li><a href="#Fixed-top">Fixed top</a></li>
                                        <li><a href="#Fixed-bottom">Fixed bottom</a></li>
                                        <li><a href="#Sticky-top">Sticky top</a></li>
                                        <li><a href="#Responsive-sticky-top">Responsive sticky top</a></li>
                                        <li><a href="#Sticky-bottom">Sticky bottom</a></li>
                                        <li><a href="#Responsive-sticky-bottom">Responsive sticky bottom</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- row end -->
                    </section>
                    <!-- pagination -->
                    <div class="col-12 col-sm-9">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/helpers/coloured-links.php">
                                <span>Previous</span>
                                <strong class="d-block">« Coloured Links</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/helpers/ratio.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Ratio »</strong>
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