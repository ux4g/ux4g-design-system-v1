<?php
$title = 'UX4G | CSS grid';
$canonical = 'https://doc.ux4g.gov.in/layout/css-grid.php';

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
                            <li class="breadcrumb-item"><a href="/category/layout.php">Layout</a></li>
                            <li class="breadcrumb-item active" aria-current="page">CSS Grid</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row">
                        <div class="col-sm-9">
                        <h1 class="mb-30">CSS Grid</h1>
                    <p>The default grid system used by UX4G is the result of more than ten years and millions of CSS layout experiments. However, it was also developed without a lot of the contemporary CSS capabilities and methods that are now visible in browsers, such as the new CSS Grid.</p>
                    <p class="text-uppercase"><strong><i class="fa fa-fire" style="color:#4b1113"></i> danger</strong>
                    </p>
                    <div class="bd-callout bd-callout-warning blockquote_warning mt-20 mb-20">
                        <p><strong>Heads up—our CSS Grid system is experimental and opt-in as of v1.0!</strong> We
                            included it in our documentation's CSS to demonstrate it for you, but it's disabled by
                            default. Keep reading to learn how to enable it in your projects.</p>
                    </div>
                        </div>
                    </div>
                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                        <div class="row">

                            <div class="col-sm-9">

                                <div class="body_content">
                                    <h2>How it works <a href="" id="How-it-works" class="opacity-0 hover-1">#</a></h2>
                                    <p>The ability to set a different grid system based on CSS Grid but with a UX4G twist has been added with UX4G. Although the methodology for creating flexible layouts has changed, developers still have classes at their disposal.</p>
                                    <ul class="un_order_list">
                                        <li>
                                            <p><strong> CSS Grid can be chosen.</strong> Set <code>$enable-grid-classes: false</code> to disable the built-in grid system, and <code>$enable-cssgrid: true</code> to enable it. Recompile the Sass after that.</p>
                                        </li>
                                        <li>
                                            <p>
                                               <strong> Replace .col-* classes with .g-col-* classes.</strong> This is so because the <code>grid-column</code> property—rather than the width—is used for the <code>CSS Grid</code> columns.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                               <strong> Through CSS variables, column and gutter sizes are adjustable.</strong> Set these on the parent <code>.grid</code> and alter them using the <code>--bs-columns</code> and <code>--bs-gap</code> options inline or in a stylesheet.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                               <strong> Since nearly all browsers now offer flexbox via the gap feature,</strong> UX4G will probably switch to a hybrid approach in the future.
                                            </p>
                                        </li>
                                    </ul>
                                    <p>In the future, UX4G will likely shift to a hybrid solution as the
                                        <code>gap</code> property has achieved nearly full browser support for flexbox.
                                    </p>
                                    <h2>Key differences <a href="" id="Key-differences" class="opacity-0 hover-1">#</a>
                                    </h2>
                                    <p>Compared to the default grid system:</p>
                                    <ul class="un_order_list">
                                        <li>
                                            <p>The CSS Grid columns aren't affected in the same way as Flex utilities.</p>
                                        </li>
                                        <li>
                                            <p>Gutter replacement: gaps. The horizontal <code>padding</code> from the default grid system is replaced by the <code>gap</code> attribute, which works more like a <code>margin</code>.</p>
                                        </li>
                                        <li>
                                            <p>Therefore, unlike <code>.rows</code>, <code>.grids</code> do not have negative <code>margins</code>, and grid gutters cannot be changed using margin utilities. Grid gaps are automatically applied both horizontally and vertically. For more information, refer to the <a href="#Customizing"> customizing section.</a></p>
                                        </li>
                                        <li>
                                            <p>Modifier classes should be considered obsolete in favor of inline and custom styles (e.g., <code>style="--bs-columns: 3</code>;" vs. <code>class="row-cols-3"</code>).
                                            </p>
                                        </li>
                                        <li>
                                            <p>Similar to stacking, nesting may necessitate that you reset your column counts for each instance of a nested.grid. Details can be found in the <a href="#Nesting">nesting section</a>.</p>
                                            
                                        </li>
                                    </ul>
                                    <h2>Examples <a href="" id="Examples" class="opacity-0 hover-1">#</a></h2>
                                    <h3 class="mt-20 mb-20">Three columns <a href="" id="Three-columns"
                                            class="opacity-0 hover-1">#</a></h3>
                                    <p>Using the <code>.g-col-4</code> classes, three columns of equal width can be produced across all viewports and devices. To adjust the layout based on viewport size, add <a href="#Responsive">responsive
                                            classes</a>.</p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton1"
                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                        </button>
                                        <div id="copyText1">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-4</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-4</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-4</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- result -->
                                    <h5 class="result m-0">
                                        RESULT
                                    </h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid">
                                            <div class="grid text-center">
                                                <div class="g-col-4">.g-col-4</div>
                                                <div class="g-col-4">.g-col-4</div>
                                                <div class="g-col-4">.g-col-4</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- result end -->
                                    <h3 class="mt-20">Responsive <a href="" id="Responsive"
                                            class="opacity-0 hover-1">#</a></h3>
                                    <p>In case there is a requirement of changing the layout across viewports, use responsive classes. On the smallest viewports, start with two columns here, and medium viewports and larger, increase to three columns.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton2"
                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                        </button>
                                        <div id="copyText2">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6 g-col-md-4</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6 .g-col-md-4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6 g-col-md-4</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6 .g-col-md-4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6 g-col-md-4</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6 .g-col-md-4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- result -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid">
                                            <div class="grid text-center">
                                                <div class="g-col-6 g-col-md-4">.g-col-6 .g-col-md-4</div>
                                                <div class="g-col-6 g-col-md-4">.g-col-6 .g-col-md-4</div>
                                                <div class="g-col-6 g-col-md-4">.g-col-6 .g-col-md-4</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- result end -->
                                    <p class="mt-20">Compare that to this two column layout at all viewports.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton3"
                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                        </button>
                                        <div id="copyText3">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- result -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid">
                                            <div class="grid text-center">
                                                <div class="g-col-6">.g-col-6</div>
                                                <div class="g-col-6">.g-col-6</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- result end -->
                                    <h2 class="mt-20 mb-20">Wrapping <a href="" id="Wrapping"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>When there is no more room horizontally, grid items automatically wrap to the next line. Take note that both the horizontal and <code>vertical gaps</code> between grid items are covered by the gap.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton4"
                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                        </button>
                                        <div id="copyText4">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text" style="display: inline-block;">
    </span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- result -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid">
                                            <div class="grid text-center">
                                                <div class="g-col-6">.g-col-6</div>
                                                <div class="g-col-6">.g-col-6</div>

                                                <div class="g-col-6">.g-col-6</div>
                                                <div class="g-col-6">.g-col-6</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- result end -->
                                    <h2 class="mt-20">Starts <a href="" id="Starts" class="opacity-0 hover-1">#</a></h2>

                                    <p>Offset classes in the default grid are intended to be replaced with start classes, although they are not completely identical. Through the use of styles, CSS Grid generates a grid template by instructing browsers to "start at this column" and "end at this column." <code>Grid-column-start</code> and <code>grid-column-end</code> are those properties. Start classes are referred to by their abbreviation. To size and position the columns according to need, combine them with the appropriate column classes. As <code>0</code> is an incorrect value for these properties, start classes start at <code>1</code>.</p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton5"
                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                        </button>
                                        <div id="copyText5">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-3 g-start-2</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-3 .g-start-2</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-4 g-start-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-4 .g-start-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- result -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <!-- result end -->

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid">
                                            <div class="grid text-center">
                                                <div class="g-col-3 g-start-2">.g-col-3 .g-start-2</div>
                                                <div class="g-col-4 g-start-6">.g-col-4 .g-start-6</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <h2 class="mt-20">Auto columns <a href="" id="Auto-columns"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>Each grid item (the direct children of <code>a.grid</code>) will be scaled to one column by default if there are no classes on those items.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton6"
                                            onclick="copyToClipboard('copyText6', 'copyButton6')">
                                            <i class="fa fa-copy" id="iconCopied6"></i>
                                        </button>
                                        <div id="copyText6">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- result -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <!-- result end -->
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid overflow-auto">
                                            <div class="grid text-center">
                                                <div>1</div>
                                                <div>1</div>
                                                <div>1</div>
                                                <div>1</div>
                                                <div>1</div>
                                                <div>1</div>
                                                <div>1</div>
                                                <div>1</div>
                                                <div>1</div>
                                                <div>1</div>
                                                <div>1</div>
                                                <div>1</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <p class="mt-20">This behavior can be mixed with grid column classes.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton7"
                                            onclick="copyToClipboard('copyText7', 'copyButton7')">
                                            <i class="fa fa-copy" id="iconCopied7"></i>
                                        </button>
                                        <div id="copyText7">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- result -->
                                    <h5 class="result m-0">
                                        RESULT
                                    </h5>

                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid">
                                            <div class="grid text-center">
                                                <div class="g-col-6">.g-col-6</div>
                                                <div>1</div>
                                                <div>1</div>
                                                <div>1</div>
                                                <div>1</div>
                                                <div>1</div>
                                                <div>1</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- result end -->
                                    <h2 class="mt-20">Nesting <a href="" id="Nesting" class="opacity-0 hover-1">#</a>
                                    </h2>
                                    <p>The nesting of <code>.grids</code> is simple within the CSS Grid, much like with the default grid system. The rows, columns, and <code>gaps</code> of this <code>grid</code> have changed in contrast to the default, though. Consider the following illustration:</p>
                                    <ul class="">
                                        <li>A local CSS variable named --bs-columns: 3 is used to override the default number of <code>columns</code>.</li>
                                        <li>Each <code>column</code> fills one-third of the available width in the first <code>auto-column</code>, which inherits the column count.</li>
                                        
                                        <li>The nested <code>.grid's</code> <code>column count</code> is set to <code>12</code> (default) in the second auto-column.</li>
                                        
                                        <li>There is no nested content in the third <code>auto-column.</code></li>
                                        
                                        <li>Comparatively speaking to the normal <code>grid</code> approach, this enables more intricate and personalized layouts.</li>
                                    </ul>
                                    <p>In practice this allows for more complex and custom layouts when compared to our
                                        default grid system.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton8"
                                            onclick="copyToClipboard('copyText8', 'copyButton8')">
                                            <i class="fa fa-copy" id="iconCopied8"></i>
                                        </button>
                                        <div id="copyText8">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag special-attr attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag special-attr attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag special-attr attr-value value css language-css variable" style="color: rgb(54, 172, 170);">--bs-columns</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">3</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    First auto-column</span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Auto-column</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></span><span class="token tag" style="color: rgb(0, 0, 159);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">div</font></font></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></span><span class="token plain-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Auto-column</font></font></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;/</font></font></span><span class="token tag" style="color: rgb(0, 0, 159);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">div</font></font></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;/</font></font></span><span class="token tag" style="color: rgb(0, 0, 159);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">div</font></font></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    Second auto-column</span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag special-attr attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag special-attr attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag special-attr attr-value value css language-css variable" style="color: rgb(54, 172, 170);">--bs-columns</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">12</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">6 of 12</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-4</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">4 of 12</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-2</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">2 of 12</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;/</font></font></span><span class="token tag" style="color: rgb(0, 0, 159);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">div</font></font></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Third auto-column</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;/</font></font></span><span class="token tag" style="color: rgb(0, 0, 159);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">div</font></font></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- result -->
                                    <div class="result m-0">
                                        RESULT
                                    </div>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid overflow-auto ">
                                            <div class="grid text-center" style="--bs-columns: 3;">
                                                <div>
                                                    First auto-column
                                                    <div class="grid">
                                                        <div>Auto-column</div>
                                                        <div>Auto-column</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    Second auto-column
                                                    <div class="grid" style="--bs-columns: 12;">
                                                        <div class="g-col-6">6 of 12</div>
                                                        <div class="g-col-4">4 of 12</div>
                                                        <div class="g-col-2">2 of 12</div>
                                                    </div>
                                                </div>
                                                <div>Third auto-column</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- result end -->
                                    <h2 class="mt-20">Customizing <a href="" id="Customizing"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>Customize the number of columns, the number of rows, and the width of the gaps
                                        with local CSS variables.</p>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Variable</th>
                                                <th>Fallback value</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><code>--bs-rows</code></td>
                                                <td><code>1</code></td>
                                                <td>The number of rows in your grid template</td>
                                            </tr>
                                            <tr>
                                                <td><code>--bs-columns</code></td>
                                                <td><code>12</code></td>
                                                <td>The number of columns in your grid template</td>
                                            </tr>
                                            <tr>
                                                <td><code>--bs-gap</code></td>
                                                <td><code>1.5rem</code></td>
                                                <td>The size of the gap between columns (vertical and horizontal)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>These CSS variables have no default value; instead, they apply fallback values
                                        that are used <em>until</em> a local instance is provided. For example, we use
                                        <code>var(--bs-rows, 1)</code> for our CSS Grid rows, which
                                        ignores <code>--bs-rows</code> because that hasn't been set
                                        anywhere yet. Once it is, the <code>.grid</code> instance will
                                        use that value instead of the fallback value of <code>1</code>.
                                    </p>
                                    <h3>No grid classes <a href="" id="No-grid-classes" class="opacity-0 hover-1">#</a>
                                    </h3>
                                    <p>Immediate children elements of <code>.grid</code> are grid
                                        items, so they'll be sized without explicitly adding a <code>.g-col</code>
                                        class.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton9"
                                            onclick="copyToClipboard('copyText9', 'copyButton9')">
                                            <i class="fa fa-copy" id="iconCopied9"></i>
                                        </button>
                                        <div id="copyText9">
                                            <pre><code>&lt;div class=&quot;grid text-center&quot; style=&quot;--bs-columns: 3;&quot;&gt;
  &lt;div&gt;Auto-column&lt;/div&gt;
  &lt;div&gt;Auto-column&lt;/div&gt;
  &lt;div&gt;Auto-column&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- result -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid">
                                            <div class="grid text-center" style="--bs-columns: 3;">
                                                <div>Auto-column</div>
                                                <div>Auto-column</div>
                                                <div>Auto-column</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- result end -->
                                    <h3 class="mt-20">Columns and gaps <a href="" id="Columns-and-gaps">#</a></h3>
                                    <p>Adjust the number of columns and the gap.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton10"
                                            onclick="copyToClipboard('copyText10', 'copyButton10')">
                                            <i class="fa fa-copy" id="iconCopied10"></i>
                                        </button>
                                        <div id="copyText10">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag special-attr attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag special-attr attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag special-attr attr-value value css language-css variable" style="color: rgb(54, 172, 170);">--bs-columns</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">4</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css variable" style="color: rgb(54, 172, 170);">--bs-gap</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">5</span><span class="token tag special-attr attr-value value css language-css unit" style="color: rgb(227, 17, 108);">rem</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-2</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-2</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></span><span class="token tag" style="color: rgb(0, 0, 159);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">div</font></font></span><font style="vertical-align: inherit;"><span class="token tag attr-name" style="color: rgb(0, 164, 219);"><font style="vertical-align: inherit;">class</font></span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;">=</font></span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;">"</font></span><span class="token tag attr-value" style="color: rgb(227, 17, 108);"><font style="vertical-align: inherit;">g-col-2</font></span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;">"</font></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;">&gt;</font></span><span class="token plain-text"><font style="vertical-align: inherit;">.g-col-2</font></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;">&lt;/</font></span><span class="token tag" style="color: rgb(0, 0, 159);"><font style="vertical-align: inherit;">div</font></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;">&gt;</font></span></font><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);"><font style="vertical-align: inherit;"></font></span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"></font></span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"></font></span><span class="token tag attr-value" style="color: rgb(227, 17, 108);"><font style="vertical-align: inherit;"></font></span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"></font></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"></font></span><span class="token plain-text"><font style="vertical-align: inherit;"></font></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"></font></span><span class="token tag" style="color: rgb(0, 0, 159);"><font style="vertical-align: inherit;"></font></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);"><font style="vertical-align: inherit;"></font></span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- result -->
                                    <h5 class="result m-0">
                                        RESULT
                                    </h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid">
                                            <div class="grid text-center" style="--bs-columns: 4; --bs-gap: 5rem;">
                                                <div class="g-col-2">.g-col-2</div>
                                                <div class="g-col-2">.g-col-2</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- result end -->
                                    <!-- code -->
                                    <div class="code_bg rounded p-3 mt-20">
                                        <button class="btn btn-outline-primary float-end" id="copyButton11"
                                            onclick="copyToClipboard('copyText11', 'copyButton11')">
                                            <i class="fa fa-copy" id="iconCopied11"></i>
                                        </button>
                                        <div id="copyText11">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag special-attr attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag special-attr attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag special-attr attr-value value css language-css variable" style="color: rgb(54, 172, 170);">--bs-columns</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">10</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css variable" style="color: rgb(54, 172, 170);">--bs-gap</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">1</span><span class="token tag special-attr attr-value value css language-css unit" style="color: rgb(227, 17, 108);">rem</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-4</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- result -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid">
                                            <div class="grid text-center" style="--bs-columns: 10; --bs-gap: 1rem;">
                                                <div class="g-col-6">.g-col-6</div>
                                                <div class="g-col-4">.g-col-4</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- result end -->
                                    <h3 class="mt-20">Adding rows <a href="" id="Adding-rows"
                                            class="opacity-0 hover-1">#</a></h3>
                                    <p>Adding more rows and changing the placement of columns:</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton12"
                                            onclick="copyToClipboard('copyText12', 'copyButton12')">
                                            <i class="fa fa-copy" id="iconCopied12"></i>
                                        </button>
                                        <div id="copyText12">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag special-attr attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag special-attr attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag special-attr attr-value value css language-css variable" style="color: rgb(54, 172, 170);">--bs-rows</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">3</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css variable" style="color: rgb(54, 172, 170);">--bs-columns</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">3</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Auto-column</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-start-2</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag special-attr attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag special-attr attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag special-attr attr-value value css language-css property" style="color: rgb(54, 172, 170);">grid-row</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">2</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Auto-column</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-start-3</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag special-attr attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag special-attr attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag special-attr attr-value value css language-css property" style="color: rgb(54, 172, 170);">grid-row</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">3</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Auto-column</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- result -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid">
                                            <div class="grid text-center" style="--bs-rows: 3; --bs-columns: 3;">
                                                <div>Auto-column</div>
                                                <div class="g-start-2" style="grid-row: 2">Auto-column</div>
                                                <div class="g-start-3" style="grid-row: 3">Auto-column</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- result end -->
                                    <h3 class="mt-20">Gaps <a href="" id="Gaps" class="opacity-0 hover-1">#</a></h3>
                                    <p>Change the vertical gaps only by modifying the <code>row-gap</code>. Note that we
                                        use <code>gap</code> on <code>.grid</code>s, but
                                        <code>row-gap</code> and <code>column-gap</code> can be modified as needed.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton13"
                                            onclick="copyToClipboard('copyText13', 'copyButton13')">
                                            <i class="fa fa-copy" id="iconCopied13"></i>
                                        </button>
                                        <div id="copyText13">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag special-attr attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag special-attr attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag special-attr attr-value value css language-css property" style="color: rgb(54, 172, 170);">row-gap</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">0</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text" style="display: inline-block;">
    </span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- result -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid">
                                            <div class="grid text-center" style="row-gap: 0;">
                                                <div class="g-col-6">.g-col-6</div>
                                                <div class="g-col-6">.g-col-6</div>

                                                <div class="g-col-6">.g-col-6</div>
                                                <div class="g-col-6">.g-col-6</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- result end -->
                                    <p>Because of that, you can have different vertical and horizontal
                                        <code>gap</code>s, which can take a single value (all sides) or a
                                        pair of values (vertical and horizontal). This can be applied with an inline
                                        style for <code>gap</code>, or with our <code>--bs-gap</code> CSS variable.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton14"
                                            onclick="copyToClipboard('copyText14', 'copyButton14')">
                                            <i class="fa fa-copy" id="iconCopied14"></i>
                                        </button>
                                        <div id="copyText14">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag special-attr attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag special-attr attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag special-attr attr-value value css language-css variable" style="color: rgb(54, 172, 170);">--bs-gap</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">.25</span><span class="token tag special-attr attr-value value css language-css unit" style="color: rgb(227, 17, 108);">rem</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">1</span><span class="token tag special-attr attr-value value css language-css unit" style="color: rgb(227, 17, 108);">rem</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text" style="display: inline-block;">
    </span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-6</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- result -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid">
                                            <div class="grid text-center" style="row-gap: 0;">
                                                <div class="g-col-6">.g-col-6</div>
                                                <div class="g-col-6">.g-col-6</div>

                                                <div class="g-col-6">.g-col-6</div>
                                                <div class="g-col-6">.g-col-6</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- result end -->
                                    <h2 class="mt-20">Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
                                    <p>The default classes are still produced by two Sass variables, <code>$grid-columns</code> and <code>$grid-gutter-width</code>, which is one restriction of the <code>CSS Grid</code>. The number of classes generated by the compiled CSS is essentially predetermined by this. Here are two choices:</p>
                                    <ul class="un_order_list">
                                        <li>Change those Sass default variables, then compile the CSS again.</li>
                                        <li>To improve the given classes, use inline or personalized styles.</li>
                                    </ul>
                                    <p>For instance, alter the <code>gap</code> size and increase the number of columns before sizing the <code>"columns"</code> with a combination of inline styles and standard CSS <code>Grid</code> column classes (such as.g-col-4).</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton15"
                                            onclick="copyToClipboard('copyText15', 'copyButton15')">
                                            <i class="fa fa-copy" id="iconCopied15"></i>
                                        </button>
                                        <div id="copyText15">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">grid text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag special-attr attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag special-attr attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag special-attr attr-value value css language-css variable" style="color: rgb(54, 172, 170);">--bs-columns</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">18</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css variable" style="color: rgb(54, 172, 170);">--bs-gap</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">.5</span><span class="token tag special-attr attr-value value css language-css unit" style="color: rgb(227, 17, 108);">rem</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag special-attr attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag special-attr attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag special-attr attr-value value css language-css property" style="color: rgb(54, 172, 170);">grid-column</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token tag special-attr attr-value value css language-css" style="color: rgb(227, 17, 108);"> span </span><span class="token tag special-attr attr-value value css language-css number" style="color: rgb(54, 172, 170);">14</span><span class="token tag special-attr attr-value value css language-css punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token tag special-attr attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">14 columns</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">g-col-4</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.g-col-4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- result -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example bd-example-cssgrid overflow-auto">
                                            <div class="grid text-center" style="--bs-columns: 18; --bs-gap: .5rem;">
                                                <div style="grid-column: span 14;">14 columns</div>
                                                <div class="g-col-4">.g-col-4</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- result end -->







                                </div>
                            </div>
                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                <div class="right_side">
                                    <ul class="p-0">
                                        <li><a href="#How-it-works">How it works</a></li>
                                        <li><a href="#Key-differences">Key differences</a></li>
                                        <li><a href="#Examples">Examples</a>
                                            <ul class="pl-20">
                                                <li>
                                                    <a href="#Three-columns">Three columns</a>
                                                </li>
                                                <li>
                                                    <a href="#Responsive">Responsive</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#Wrapping">Wrapping</a>
                                        </li>
                                        <li>
                                            <a href="#Starts">Starts</a>
                                        </li>
                                        <li>
                                            <a href="#Auto-columns">Auto columns</a>
                                        </li>
                                        <li>
                                            <a href="#Nesting">Nesting</a>
                                        </li>
                                        <li><a href="#Customizing">Customizing</a>
                                            <ul class="pl-20">
                                                <li>
                                                    <a href="#No-grid-classes">No grid classes</a>
                                                </li>
                                                <li>
                                                    <a href="#Columns-and-gaps">Columns and gaps</a>
                                                </li>
                                                <li>
                                                    <a href="#Adding-rows">Adding rows</a>
                                                </li>
                                                <li>
                                                    <a href="#Gaps">Gaps</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#Sass">Sass</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- row end -->
                    </section>
                    <!-- pagination -->
                    <div class="col-12 col-sm-9">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/layout/containers.php">
                                <span>Previous</span>
                                <strong class="d-block">« Containers</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/layout/grid.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Grid »</strong>
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