<?php
$title = 'UX4G | Color & Background';
$canonical = 'https://doc.ux4g.gov.in/helpers/color-background.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Color & Background</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <h1 class="mb-30"> Color & Background</h1>
                    <p>Set a background color with contrasting foreground color.</p>
                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                        <div class="row">

                            <div class="col-sm-9">
                                <div class="body_content">

                                    <h2>Overview <a href="" id="Overview" class="opacity-0 hover-1">#</a></h2>
                                    <p>added-in "1.0"</p>

                                    <p>The capabilities of our <a
                                            href="/utilities/colors.php">.text-* <code>.text-*</code> utilities</a> and <a
                                            href="/utilities/background.php"><code>.bg-*</code> utilities</a> are combined in a single class by color and background aids. We automatically choose a contrasting color for a specific backdrop color using our Sass color-contrast() method.</p>

                                    
                                    <p><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                            CAUTION</strong></p>
                                    <div class="bd-callout bd-callout-warning blockquote_warning mt-20 mb-20">

                                        <p><strong>Heads up!</strong> There’s currently no support for a CSS-native
                                            <code>color-contrast</code> function, so we use our own via Sass. This means
                                            that customizing our theme colors via CSS variables may cause color contrast
                                            issues with these utilities.
                                        </p>



                                    </div>
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton1"
                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                        </button>
                                        <div id="copyText1">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">text-bg-primary p-3</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Primary with contrasting color</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">text-bg-secondary p-3</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Secondary with contrasting color</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">text-bg-success p-3</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Success with contrasting color</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">text-bg-danger p-3</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Danger with contrasting color</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">text-bg-warning p-3</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Warning with contrasting color</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">text-bg-info p-3</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Info with contrasting color</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">text-bg-light p-3</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Light with contrasting color</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">text-bg-dark p-3</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Dark with contrasting color</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span></div></pre>
                                        </div>
                                    </div>

                                    <h5 class="result m-0">RESULT</h5>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <div>
                                            <div>
                                                <code><div class="text-bg-primary p-3">Primary with contrasting color</div><div class="text-bg-secondary p-3">Secondary with contrasting color</div><div class="text-bg-success p-3">Success with contrasting color</div><div class="text-bg-danger p-3">Danger with contrasting color</div><div class="text-bg-warning p-3">Warning with contrasting color</div><div class="text-bg-info p-3">Info with contrasting color</div><div class="text-bg-light p-3">Light with contrasting color</div><div class="text-bg-dark p-3">Dark with contrasting color</div></code>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <div class="bd-callout bd-callout-info blockquote mt-20">
                                        <strong>Accessibility tip:</strong> Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies like screen readers. Please ensure the meaning is obvious from the content itself (e.g., the visible text with a <a href="#">sufficient color contrast</a>) or is included through alternative means, such as additional text hidden with the <code>.visually-hidden</code> class.
                                    </div>
                                    <h2 class="mt-20">With components <a href="" id="With-components"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>Use them in place of combined <code>.text-*</code> and
                                        <code>.bg-*</code> classes, like on <a
                                            href="/components/badge.php#Background-colors">badges</a>:
                                        </p>

                                        <!-- code -->
                                        <div class="code_bg rounded p-3">
                                            <button class="btn btn-outline-primary float-end" id="copyButton2"
                                                onclick="copyToClipboard('copyText2', 'copyButton2')">
                                                <i class="fa fa-copy" id="iconCopied2"></i>
                                            </button>
                                            <pre id="copyText2"><code>&lt;span class=&quot;badge text-bg-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge text-bg-info&quot;&gt;Info&lt;/span&gt;</code></pre>
                                        </div>
                                        <!-- code end -->
                                        <!-- result -->
                                        <h5 class="result m-0">RESULT</h5>
                                        <div class="code_bg rounded p-3">
                                            <div class="bd-example m-0 border-0">
                                                <span class="badge text-bg-primary">Primary</span>
                                                <span class="badge text-bg-info">Info</span>
                                            </div>
                                        </div>
                                        <p class="mt-20">Or on <a
                                                href="/components/card.php#Background-and-color">cards</a>:</p>

                                        <!-- code -->
                                        <div class="code_bg rounded p-3">
                                            <button class="btn btn-outline-primary float-end" id="copyButton3"
                                                onclick="copyToClipboard('copyText3', 'copyButton3')">
                                                <i class="fa fa-copy" id="iconCopied3"></i>
                                            </button>
                                            <div id="copyText3">
                                                <pre id="copyText3"><code>&lt;div class=&quot;card text-bg-primary mb-3&quot; style=&quot;max-width: 18rem;&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;card text-bg-info mb-3&quot; style=&quot;max-width: 18rem;&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                            </div>
                                        </div>
                                        <!-- code end -->
                                        <h5 class="result m-0">RESULT</h5>
                                        <div class="code_bg rounded p-3">
                                            <div>
                                                <div>
                                                    <code><div class="card text-bg-primary mb-3" style="max-width: 18rem;"><div class="card-header">Header</div><div class="card-body"><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p></div></div><div class="card text-bg-info mb-3" style="max-width: 18rem;"><div class="card-header">Header</div><div class="card-body"><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p></div></div></code>
                                                </div>
                                            </div>
                                        </div>









                                    </div>
                                </div>
                                <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                    <div class="right_side">
                                        <ul class="p-0">
                                            <li><a href="#Overview">Overview</a></li>
                                            <li><a href="#With-components">With components</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                    </section>

                    <!-- pagination -->
                    <div class="col-12 col-sm-9">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/helpers/clearfix.php">
                                <span>Previous</span>
                                <strong class="d-block">« Clearfix</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/helpers/coloured-links.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Coloured Links »</strong>
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