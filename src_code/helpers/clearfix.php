<?php
$title = 'UX4G | Clearfix';
$canonical = 'https://doc.ux4g.gov.in/helpers/clearfix.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Clearfix</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row">
                        <div class="col-lg-9">
                            <h1 class="mb-30"> Clearfix</h1>
                            <p>Add a clearfix utility to a container to quickly and conveniently clear floating content.
</p>
                            <p>Add .clearfix to the parent element to quickly clear floats also suitable for usage as a mixin.
                            </p>
                            <p>Use in HTML:</p>

                            <!-- code -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                    onclick="copyToClipboard('copyText1', 'copyButton1')">
                                    <i class="fa fa-copy" id="iconCopied1"></i>
                                </button>
                                <pre id="copyText1" tabindex="0"
                                    class="prism-code language-html codeBlock_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module thin-scrollbar"><code class="codeBlockLines_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module"><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">clearfix</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain">...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><br></span></code></pre>
                            </div>
                            <!-- code end -->
                            <p class="mt-20">The mixin source code:</p>
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton2"
                                    onclick="copyToClipboard('copyText2', 'copyButton2')">
                                    <i class="fa fa-copy" id="iconCopied2"></i>
                                </button>
                                <pre id="copyText2"><code>@mixin clearfix() {
  &amp;::after {
    display: block;
    clear: both;
    content: &quot;&quot;;
  }
}</code></pre>
                            </div>
                            <p class="mt-20">Use the mixin in SCSS:</p>
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton3"
                                    onclick="copyToClipboard('copyText3', 'copyButton3')">
                                    <i class="fa fa-copy" id="iconCopied3"></i>
                                </button>
                                <pre id="copyText3"><code>.element {
 @include clearfix;
}</code></pre>
                            </div>
                            <p class="mt-20">
                            The clearfix is used in the example that follows. A broken layout would result if the wrapping div did not span over the buttons in the absence of the clearfix.
                            </p>

                            <!-- code -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton4"
                                    onclick="copyToClipboard('copyText4', 'copyButton4')">
                                    <i class="fa fa-copy" id="iconCopied4"></i>
                                </button>
                                <div id="copyText4">
                                    <pre
                                        aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">bg-info clearfix</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-secondary float-start</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Example Button floated left</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-secondary float-end</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Example Button floated right</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                </div>
                            </div>
                            <!-- code end -->

                            <h5 class="result m-0">RESULT</h5>
                            <div
                                class="mb-20 playgroundPreview_node_modules-@docusaurus-theme-live-codeblock-lib-theme-Playground-styles-module">
                                <div>
                                    <div class="bg-info clearfix"><button type="button"
                                            class="btn btn-secondary float-start">Example Button floated
                                            left</button><button type="button"
                                            class="btn btn-secondary float-end">Example Button floated right</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end flat -->

                    <!-- pagination -->
                    <div class="col-12 col-sm-9">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/category/helpers.php">
                                <span>Previous</span>
                                <strong class="d-block">« Helpers</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/helpers/color-background.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Color & Background »</strong>
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