<?php
$title = 'UX4G | Ratio';
$canonical = 'https://doc.ux4g.gov.in/helpers/ratio.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Ratio</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row">

                            <div class="col-sm-9">

                                <h1 class="mb-30"> Ratio</h1>
                                <p>
                                To make an element keep the aspect ratio of your choice, use created pseudo elements. Perfect for managing video or slideshow embeds in a responsive manner based on the parent's width.
                                </p>
                            </div>
                    </div>
                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                        <div class="row">

                            <div class="col-sm-9">
                                <div class="body_content">
                                    <h2>About <a href="" id="About" class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    To control the aspect ratios of external material like iframes, embeds, videos, and objects, use the ratio helper. These tools can also be applied to any typical HTML child element (such as a <code>&lt;div&gt;</code> or <code>&lt;img&gt;</code>). Styles are directly transferred from the parent.ratio class to the kid.
                                    </p>
                                    <p>
                                    Custom aspect ratios are also possible because aspect ratios are declared in a Sass map and included into each class via a CSS variable.
                                    </p>
                                   
                                    <p> <strong><i class="fa fa-info-circle"></i> INFO</strong></p>
                                    <div class="bd-callout bd-callout-info blockquote mt-20">
                                        <p><strong>Pro-Tip!</strong> You don't need
                                            <code>frameborder="0"</code> on your <code>&lt;iframe&gt;</code>s as we
                                            override
                                            that for you in <a href="/getting-started/content/reboot">Reboot</a>.
                                        </p>
                                    </div>
                                    <h2>Example <a href="" id="Example" class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    <code>.ratio</code> and an aspect ratio class should be used to enclose any embed, such as an <code>&lt;iframe&gt;</code>, in a parent element. Our global <code>selector.ratio > * </code>automatically sizes the immediate child element.
                                    </p>


                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton1"
                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                        </button>
                                        <div id="copyText1">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">ratio ratio-16x9</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">iframe</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">src</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">https://www.youtube.com/embed/zpOULjyy-n8?rel=0</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">title</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">YouTube video</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">allowfullscreen</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">iframe</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code en -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example m-0 border-0">
                                            <div class="ratio ratio-16x9">
                                                <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                                    title="YouTube video" allowfullscreen=""></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-20">Aspect ratios <a href="" id="Aspect-ratios"
                                            class="opacity-0 hover-1">#</a></h1>
                                    <p>Aspect ratios can be customized with modifier classes. By default the following
                                        ratio classes are provided:</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton2"
                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                        </button>
                                        <div id="copyText2">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">ratio ratio-1x1</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1x1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">ratio ratio-4x3</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">4x3</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">ratio ratio-16x9</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">16x9</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">ratio ratio-21x9</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">21x9</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example m-0 border-0 bd-example-ratios">
                                            <div class="ratio ratio-1x1">
                                                <div>1x1</div>
                                            </div>
                                            <div class="ratio ratio-4x3">
                                                <div>4x3</div>
                                            </div>
                                            <div class="ratio ratio-16x9">
                                                <div>16x9</div>
                                            </div>
                                            <div class="ratio ratio-21x9">
                                                <div>21x9</div>
                                            </div>
                                        </div>
                                    </div>

                                    <h2 class="mt-20">Custom ratios <a href="" id="Custom-ratios"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    A CSS custom property (or CSS variable) is present in the selector for each <code>.ratio-*</code> class. With a little simple arithmetic, you can override this CSS option and instantly generate unique aspect ratios.
                                    </p>
                                    <p>
                                    Set <code>--bs-aspect-ratio: 50%</code> on the <code>.ratio</code>, for instance, to produce a <strong>2x1</strong> aspect ratio.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton3"
                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                        </button>
                                        <div id="copyText3">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">ratio</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">2x1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <div class="result m-0">RESULT</div>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example m-0 border-0 bd-example-ratios">
                                            <div class="ratio bg-white" style="--bs-aspect-ratio: 50%;">
                                                <div>2x1</div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-20">
                                    The aspect ratio can be easily changed between breakpoints thanks to this CSS variable. The following starts out as <code>4x3</code>, but at the medium breakpoint it switches to a bespoke <code>2x1</code>.
                                    </p>
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton4"
                                            onclick="copyToClipboard('copyText4', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                        </button>
                                        <pre id="copyText4"><code>.ratio-4x3 {
  @include media-breakpoint-up(md) {
    --bs-aspect-ratio: 50%; // 2x1
  }
}</code></pre>
                                    </div>


                                    <div class="code_bg rounded p-3 mt-20">
                                        <button class="btn btn-outline-primary float-end" id="copyButton5"
                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                        </button>
                                        <div id="copyText5">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">ratio ratio-4x3</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">4x3, then 2x1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span></div></pre>
                                        </div>
                                    </div>

                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div
                                            class="bd-example m-0 border-0 bd-example-ratios bd-example-ratios-breakpoint">
                                            <div class="ratio ratio-4x3">
                                                <div>4x3, then 2x1</div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="mt-20">Sass map <a href="" id="Sass-map" class="opacity-0 hover-1">#</a>
                                    </h2>
                                    <p>
                                    Alter the aspect ratios you want to employ in <code>_variables.scss</code>. The default <code>$ratio-aspect-ratios</code> map is shown below. Recompile your Sass after making your desired changes to the map.
                                    </p>

                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton6"
                                            onclick="copyToClipboard('copyText6', 'copyButton6')">
                                            <i class="fa fa-copy" id="iconCopied6"></i>
                                        </button>
                                        <pre id="copyText6"><code>$aspect-ratios: (
  &quot;1x1&quot;: 100%,
  &quot;4x3&quot;: calc(3 / 4 * 100%),
  &quot;16x9&quot;: calc(9 / 16 * 100%),
  &quot;21x9&quot;: calc(9 / 21 * 100%)
);</code></pre>
                                    </div>








                                </div>
                            </div>
                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                <div class="right_side">
                                    <ul class="p-0">
                                        <li><a href="#About">About</a></li>
                                        <li><a href="#Example">Example</a></li>
                                        <li><a href="#Aspect-ratios">Aspect ratios</a></li>
                                        <li><a href="#Custom-ratios">Custom ratios</a></li>
                                        <li><a href="#Sass-map">Sass map</a></li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- row end -->
                    </section>
                    <!-- pagination -->
                    <div class="col-12 col-sm-9">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/helpers/position.php">
                                <span>Previous</span>
                                <strong class="d-block">« Position</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/helpers/stacks.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Stacks »</strong>
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