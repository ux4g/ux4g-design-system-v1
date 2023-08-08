<?php
$title = 'UX4G | Spinners';
$canonical = 'https://doc.ux4g.gov.in/components/spinners.php';

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
                            <li class="breadcrumb-item"><a href="/category/components.php">Components</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Spinners</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="col-12 col-sm-9">
                        <h1 class="mb-30"> Spinners</h1>
                        <p>Indicate the loading state of a component or page with UX4G spinners, built entirely with
                            HTML, CSS, and no JavaScript.</p>

                    </div>
                    <!-- product -->
                    <section class="product  pt-50 pb-50">
                        <div class="container-fluid">
                            <div class="product-tab">
                                <!-- Include Implement and Design tab -->
                                <?php
                                  include '../_design-tab.php'
                                ?>


                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab_custom tab-pane active show" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="body_content">

                                                    <h2>About <a href="" id="About" class="opacity-0 hover-1">#</a></h2>
                                                    <p>
                                                    UX4G <code>"spinners"</code> can be used to show the loading state in the projects. They're built only with HTML and CSS, meaning there is no need for any JavaScript to create them. However, there is a need for some custom JavaScript to toggle their visibility. Their appearance, alignment, and sizing can be easily customized with our amazing utility classes.
                                                    </p>

                                                    <p class=" blockquote mt-20">For accessibility
                                                        purposes, each loader here includes <code>role="status"</code>
                                                        and a nested
                                                        <code>&lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;</code>.
                                                    </p>
                                                    <div class="bd-callout bd-callout-info">The animation effect of this
                                                        component is dependent on the
                                                        <code>prefers-reduced-motion</code> media query. See the 
                                                           reduced motion section of our accessibility
                                                            documentation.
                                                    </div>

                                                    <h2 class="mt-20">Border spinner <a href="" id="Border-spinner"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>Use the border spinners for a lightweight loading indicator.</p>
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton1"
                                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                                        </button>
                                                        <div id="copyText1">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">spinner-border</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">role</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">status</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">visually-hidden</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Loading...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <div class="spinner-border" role="status"><span
                                                                        class="visually-hidden">Loading...</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <h2 class="mt-20">Colors <a href="" id="Colors"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p class="mt-20">
                                                    The border spinner's <code>border-color</code> is determined by currentColor, thus change it using <code>[text color utilities][color]</code>. On the default spinner, developers can use any of the text color utilities.
                                                    </p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton2"
                                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                                        </button>
                                                        <div id="copyText2">
                                                            <pre><code>&lt;div class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-secondary&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-success&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-danger&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-warning&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-info&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-light&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-dark&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <code><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-border text-secondary" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-border text-success" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-border text-danger" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-border text-warning" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-border text-info" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-border text-light" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-border text-dark" role="status"><span class="visually-hidden">Loading...</span></div></code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <div class="bd-callout bd-callout-info blockquote mt-20"><strong>Why
                                                            not use</strong> <code>border-color</code>
                                                        <strong>utilities?</strong> Each border spinner specifies a
                                                        <code>transparent</code> border for at least one side, so
                                                        <code>border-color</code>utilities would override that.
                                                    </div>


                                                    <h2 class="mt-20">Growing spinner <a href="" id="Growing-spinner"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>
                                                    Change to the grow spinner if developers don't want to use a border spinner. It technically doesn't spin, but it does keep growing!
                                                    </p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton3"
                                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                                        </button>
                                                        <div id="copyText3">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">spinner-grow</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">role</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">status</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">visually-hidden</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Loading...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <div class="spinner-grow" role="status"><span
                                                                        class="visually-hidden">Loading...</span></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <p class="mt-20">
                                                    Once more, this spinner was created with currentColor, making it simple to modify its appearance using <code>[text color utilities][color]</code>. Along with the supported variations, it is shown here in blue.
                                                    </p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton4"
                                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                                        </button>
                                                        <div id="copyText4">
                                                            <pre><code>&lt;div class=&quot;spinner-grow text-primary&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-secondary&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-success&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-danger&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-warning&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-info&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-light&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-dark&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <code><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-grow text-secondary" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-grow text-success" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-grow text-danger" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-grow text-warning" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-grow text-info" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-grow text-light" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-grow text-dark" role="status"><span class="visually-hidden">Loading...</span></div></code>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h2 class="mt-20">Alignment <a href="" id="Alignment"
                                                            class="opacity-0 hover-1"></a></h2>

                                                    <p>
                                                    The components rems, currentColor, and display: <code>inline-flex</code> are used to build spinners in UX4G. This makes it simple to adjust their size, color, and alignment.
                                                    </p>

                                                    <h2 class="mt-20">Margin <a href="" id="Margin"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>Use [<a href="/utilities/spacing.php">margin utilities</a>] like
                                                        <code>.m-5</code> for easy spacing.
                                                    </p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton5"
                                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                                        </button>
                                                        <div id="copyText5">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">spinner-border m-5</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">role</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">status</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">visually-hidden</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Loading...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <div class="spinner-border m-5" role="status"><span
                                                                        class="visually-hidden">Loading...</span></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h3 class="mt-20">Placement <a href="" id="Placement"
                                                            class="opacity-0 hover-1">#</a></h3>
                                                    <p>To position spinners precisely where you need them in any circumstance, use the <code>[flexbox utilities][flex]</code>, <code>[float utilities][float]</code>, or <code>[text alignment][text]</code> utilities.</p>

                                                    <h4 class="mt-20">Flex <a href="" id="Flex"
                                                            class="opacity-0 hover-1">#</a></h4>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton6"
                                                            onclick="copyToClipboard('copyText6', 'copyButton6')">
                                                            <i class="fa fa-copy" id="iconCopied6"></i>
                                                        </button>
                                                        <div id="copyText6">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">d-flex justify-content-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">spinner-border</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">role</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">status</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">visually-hidden</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Loading...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <h5 class="result m-0">RESULT</h5>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <div class="d-flex justify-content-center">
                                                                    <div class="spinner-border" role="status"><span
                                                                            class="visually-hidden">Loading...</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <div class="code_bg rounded p-3 mt-20">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton7"
                                                            onclick="copyToClipboard('copyText7', 'copyButton7')">
                                                            <i class="fa fa-copy" id="iconCopied7"></i>
                                                        </button>
                                                        <div id="copyText7">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">d-flex align-items-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">strong</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Loading...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">strong</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">spinner-border ms-auto</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">role</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">status</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-hidden</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">true</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>


                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <div class="d-flex align-items-center">
                                                                    <strong>Loading...</strong>
                                                                    <div class="spinner-border ms-auto" role="status"
                                                                        aria-hidden="true"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <h2 class="mt-20">Floats <a href="" id="Floats"
                                                            class="opacity-0 hover-1">#</a></h2>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton8"
                                                            onclick="copyToClipboard('copyText8', 'copyButton8')">
                                                            <i class="fa fa-copy" id="iconCopied8"></i>
                                                        </button>
                                                        <div id="copyText8">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">clearfix</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">spinner-border float-end</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">role</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">status</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">visually-hidden</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Loading...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <!-- code -->
                                                    <div class="code_bg p-20">
                                                        <div>
                                                            <div>
                                                                <div class="clearfix">
                                                                    <div class="spinner-border float-end" role="status">
                                                                        <span class="visually-hidden">Loading...</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <h2 class="mt-20">Text align <a href="" id="Text-align"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton9"
                                                            onclick="copyToClipboard('copyText9', 'copyButton9')">
                                                            <i class="fa fa-copy" id="iconCopied9"></i>
                                                        </button>
                                                        <div id="copyText9">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">text-center</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">spinner-border</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">role</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">status</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">visually-hidden</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Loading...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <div class="text-center">
                                                                    <div class="spinner-border" role="status"><span
                                                                            class="visually-hidden">Loading...</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h2 class="mt-20">Size <a href="" id="Size"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>Add .spinner-border-sm and .spinner-grow-sm to make a smaller
                                                        spinner that can quickly be used within other components.</p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton10"
                                                            onclick="copyToClipboard('copyText10', 'copyButton10')">
                                                            <i class="fa fa-copy" id="iconCopied10"></i>
                                                        </button>
                                                        <div id="copyText10">
                                                            <pre><code>&lt;div class=&quot;spinner-border spinner-border-sm&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow spinner-grow-sm&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <code><div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-grow spinner-grow-sm" role="status"><span class="visually-hidden">Loading...</span></div></code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <p class="mt-20">Or, use custom CSS or inline styles to change the
                                                        dimensions as needed.</p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton11"
                                                            onclick="copyToClipboard('copyText11', 'copyButton11')">
                                                            <i class="fa fa-copy" id="iconCopied11"></i>
                                                        </button>
                                                        <div id="copyText11">
                                                            <pre><code>&lt;div class=&quot;spinner-border&quot; style=&quot;width: 3rem; height: 3rem;&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow&quot; style=&quot;width: 3rem; height: 3rem;&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <code><div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div><div class="spinner-grow" role="status"><span class="visually-hidden">Loading...</span></div></code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h2 class="mt-20">Buttons <a href="" id="Buttons"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>
                                                    Use spinners inside of buttons to show when an action is processing or happening. Additionally, developer can change the wording in the spinner element and use button text as necessary.
                                                    </p>


                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton12"
                                                            onclick="copyToClipboard('copyText12', 'copyButton12')">
                                                            <i class="fa fa-copy" id="iconCopied12"></i>
                                                        </button>
                                                        <div id="copyText12">
                                                            <pre><code>&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled&gt;
  &lt;span class=&quot;spinner-border spinner-border-sm&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled&gt;
  &lt;span class=&quot;spinner-border spinner-border-sm&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
  Loading...
&lt;/button&gt;</code></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                    <div class="bd-example">
<button class="btn btn-primary" type="button" disabled="">
  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  <span class="visually-hidden">Loading...</span>
</button>
<button class="btn btn-primary" type="button" disabled="">
  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>
</div>
                                                    </div>
                                                    <!-- code end -->

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3 mt-20">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton13"
                                                            onclick="copyToClipboard('copyText13', 'copyButton13')">
                                                            <i class="fa fa-copy" id="iconCopied13"></i>
                                                        </button>
                                                        <div id="copyText13">
                                                            <pre><code>&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled&gt;
  &lt;span class=&quot;spinner-grow spinner-grow-sm&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled&gt;
  &lt;span class=&quot;spinner-grow spinner-grow-sm&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
  Loading...
&lt;/button&gt;</code></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->


                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <code><button class="btn btn-primary" type="button" disabled=""><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span><span class="visually-hidden">Loading...</span></button><button class="btn btn-primary" type="button" disabled=""><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>Loading...</button></code>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h2 class="mt-20">CSS <a href="" id="CSS"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <h3 class="mt-20">Variables <a href="" id="Variables"
                                                            class="opacity-0 hover-1">#</a></h3>
                                                    <small
                                                        class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Added
                                                        in v1.0.0</small>
                                                    <p>
                                                    Spinners now leverage local CSS variables on <code>.spinner-border</code> and <code>.spinner-grow</code> for improved real-time customisation as part of UX4G's evolving CSS variables strategy. Sass is used to set the values for the CSS variables, therefore Sass customization is still available.
                                                    </p>

                                                    <p>Border spinner variables:</p>
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton14"
                                                            onclick="copyToClipboard('copyText14', 'copyButton14')">
                                                            <i class="fa fa-copy" id="iconCopied14"></i>
                                                        </button>
                                                        <pre id="copyText14"><code>  --#{$prefix}spinner-width: #{$spinner-width};
  --#{$prefix}spinner-height: #{$spinner-height};
  --#{$prefix}spinner-vertical-align: #{$spinner-vertical-align};
  --#{$prefix}spinner-border-width: #{$spinner-border-width};
  --#{$prefix}spinner-animation-speed: #{$spinner-animation-speed};
  --#{$prefix}spinner-animation-name: spinner-border;
  </code></pre>
                                                    </div>
                                                    <p class="mt-20">Growing spinner variables:</p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton15"
                                                            onclick="copyToClipboard('copyText15', 'copyButton15')">
                                                            <i class="fa fa-copy" id="iconCopied15"></i>
                                                        </button>
                                                        <pre id="copyText15"><code>  --#{$prefix}spinner-width: #{$spinner-width};
  --#{$prefix}spinner-height: #{$spinner-height};
  --#{$prefix}spinner-vertical-align: #{$spinner-vertical-align};
  --#{$prefix}spinner-animation-speed: #{$spinner-animation-speed};
  --#{$prefix}spinner-animation-name: spinner-grow;
  </code></pre>
                                                    </div>
                                                    <!-- code end -->
                                                    <p class="mt-20">Small spinner modifier classes are utilized for both spinners to change the values of these CSS variables as necessary. For instance, the following is what the .spinner-border-sm class does:
                                                    </p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton16"
                                                            onclick="copyToClipboard('copyText16', 'copyButton16')">
                                                            <i class="fa fa-copy" id="iconCopied16"></i>
                                                        </button>
                                                        <pre id="copyText16"><code >--#{$prefix}spinner-width: #{$spinner-width-sm};
  --#{$prefix}spinner-height: #{$spinner-height-sm};
  --#{$prefix}spinner-border-width: #{$spinner-border-width-sm};
  </code></pre>
                                                    </div>
                                                    <!-- code end -->

                                                    <h2 class="mt-20">Sass variables <a href="" id="Sass-variables"
                                                            class="opacity-0 hover-1">#</a></h2>


                                                    <!-- code -->
                                                    <div class="code_bg rounded p-4">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton17"
                                                            onclick="copyToClipboard('copyText17', 'copyButton17')">
                                                            <i class="fa fa-copy" id="iconCopied17"></i>
                                                        </button>
                                                        <pre id="copyText17"><code >$spinner-width:           2rem;
$spinner-height:          $spinner-width;
$spinner-vertical-align:  -.125em;
$spinner-border-width:    .25em;
$spinner-animation-speed: .75s;

$spinner-width-sm:        1rem;
$spinner-height-sm:       $spinner-width-sm;
$spinner-border-width-sm: .2em;</code></pre>
                                                    </div>
                                                    <!-- code end -->
                                                    <h2 class="mt-20">Keyframes <a href="" id="Keyframes"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>Used for creating the CSS animations for our spinners. Included
                                                        in scss/_spinners.scss.</p>
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton18"
                                                            onclick="copyToClipboard('copyText18', 'copyButton18')">
                                                            <i class="fa fa-copy" id="iconCopied18"></i>
                                                        </button>
                                                        <pre><code>@keyframes spinner-border {
  to { transform: rotate(360deg) #{&quot;/* rtl:ignore */&quot;}; }
}
                                                        </code></pre>
                                                    </div>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3 mt-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton18"
                                                            onclick="copyToClipboard('copyText19', 'copyButton19')">
                                                            <i class="fa fa-copy" id="iconCopied19"></i>
                                                        </button>
                                                        <pre id="copyText19" tabindex="0"><code>@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}</code></pre>
                                                    </div>
                                                    <!-- code end -->

















                                                </div>
                                            </div>
                                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                                <div class="right_side">
                                                    <ul class="p-0">
                                                        <li><a href="#About">About</a></li>
                                                        <li><a href="#Border-spinner">Border spinner</a>
                                                            <ul>
                                                                <li><a href="#Colors">Colors</a></li>

                                                            </ul>
                                                        </li>

                                                        <li> <a href="#Growing-spinner">Growing spinner</a></li>
                                                        <li> <a href="#Alignment">Alignment</a>

                                                            <ul>
                                                                <li>
                                                                    <a href="#Margin">Margin</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#Placement">Placement</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li> <a href="#Floats">Floats</a></li>
                                                        <li> <a href="#Text-align">Text align</a></li>

                                                        <li> <a href="#Size">Size</a></li>
                                                        <li> <a href="#Buttons">Buttons</a></li>



                                                        <li><a href="#CSS">CSS</a>
                                                            <ul>
                                                                <li><a href="#Variables">Variables</a>
                                                                </li>

                                                            </ul>
                                                        </li>

                                                        <li><a href="#Sass-variables">Sass variables</a>
                                                        </li>

                                                        <li><a href="#Keyframes">Keyframes</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="body_content">Demo</div>
                                            </div>
                                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                                <div class="right_side">
                                                    <ul class="p-0">
                                                        <li><a href="#Quick-start">Demo</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </section>
                    <!-- pagination -->
                    <div class="col-12 col-sm-9">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/components/scrollspy.php">
                                <span>Previous</span>
                                <strong class="d-block">« Scrollspy </strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/components/toasts.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Toasts »</strong>
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