<?php
$title = 'UX4G | Popover';
$canonical = 'https://doc.ux4g.gov.in/components/popovers.php';

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
                <div >
                    <!-- breadcrumb -->
                    <nav class="mb-30 mt-50" style="--bs-breadcrumb-divider: url(/assets/img/icon/chevron.svg)"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a
                                    href="/">
                                    <i class="fa fa-home"></i>
                                </a></li>
                            <li class="breadcrumb-item"><a href="/category/components.php">Components</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Popovers</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="col-12 col-sm-9">
                        <h1 class="mb-30"> Popovers</h1>
                        <p>Documentation and examples for adding UX4G popovers, like those found in iOS, to any element
                            on your site.</p>
                            <h2>Overview <a href="" id="Overview" class="opacity-0 hover-1">#</a></h2>
                        <p>
                             
                            Things to know when using the popover plugin:
                        </p>


                        <ul class="un_order_list ">
                            <li>
                            The third-party library Popper is used by <a href="https://popper.js.org/"
                                    target="_blank" rel="noopener noreferrer">Poppers</a> for positioning. It is a must to use one UX4G .bundle.min.js that contains Popper or include <a
                                    href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
                                    target="_blank" rel="noopener noreferrer">popper.min.js</a> before UX4G.js.
                            </li>
                            
                            
                            <li>The popover plugin is a dependency for popovers.</li>

                            <li>Popovers must be initialized by you because they are opt-in for performance reasons.</li>

                            <li>A popover will never appear if the title and content values are zero.</li>

                            <li>To prevent rendering issues in more complicated components (like our input groups, button groups, etc.), use container: 'body'.</li>

                            <li>Popovers cannot be triggered by elements that are concealed.</li>

                            <li>
                            For popovers on a wrapper element, disabled or disabled elements must be triggered.
                            </li>

                            <li>Popovers that are triggered from anchors that wrap across multiple lines will be centered between the width of the anchors. To prevent this behavior, use <code>.text-nowrap</code> on the <code>&lt;a&gt;</code>s.</li>

                            <li>Before their related elements are deleted from the DOM, popovers must first be hidden.</li>
                            <li>An element contained within a shadow DOM can cause popovers.</li>
                        </ul>

                        <div class="bd-callout bd-callout-info blockquote mt-20">By default, this component uses the
                            built-in content sanitizer, which strips out any HTML elements that are not explicitly
                            allowed.</div>
                        <div class="bd-callout bd-callout-info blockquote mt-20">The animation effect of this component
                            is dependent on the <code>prefers-reduced-motion</code> media query. </div>
                        <p>Keep reading to see how popovers work with some examples.</p>
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

                                                    <h1>Examples <a href="" id="Examples"
                                                            class="opacity-0 hover-1">#</a></h1>
                                                    <h3 class="mt-20">Enable popovers <a href="" id="Enable-popovers"
                                                            class="opacity-0 hover-1">#</a></h3>

                                                    <p>
                                                    Popovers must first be initialized, as was already indicated, in order to be used. One method for initializing all popovers on a page is to choose them based on the data-bs-toggle attribute, like in the following example:
                                                    </p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton1"
                                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                                        </button>
                                                        <pre id="copyText1" tabindex="0"
                                                            class="prism-code language-jsx codeBlock_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module thin-scrollbar"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token keyword" style="color: rgb(0, 0, 159);">const</span><span class="token plain"> popoverTriggerList </span><span class="token operator" style="color: rgb(57, 58, 52);">=</span><span class="token plain"> </span><span class="token dom variable" style="color: rgb(54, 172, 170);">document</span><span class="token punctuation" style="color: rgb(57, 58, 52);">.</span><span class="token method function property-access" style="color: rgb(215, 58, 73);">querySelectorAll</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token string" style="color: rgb(227, 17, 108);">'[data-bs-toggle="popover"]'</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token keyword" style="color: rgb(0, 0, 159);">const</span><span class="token plain"> popoverList </span><span class="token operator" style="color: rgb(57, 58, 52);">=</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">[</span><span class="token spread operator" style="color: rgb(57, 58, 52);">...</span><span class="token plain">popoverTriggerList</span><span class="token punctuation" style="color: rgb(57, 58, 52);">]</span><span class="token punctuation" style="color: rgb(57, 58, 52);">.</span><span class="token method function property-access" style="color: rgb(215, 58, 73);">map</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token parameter">popoverTriggerEl</span><span class="token plain"> </span><span class="token arrow operator" style="color: rgb(57, 58, 52);">=&gt;</span><span class="token plain"> </span><span class="token keyword" style="color: rgb(0, 0, 159);">new</span><span class="token plain"> </span><span class="token class-name">UX4G</span><span class="token class-name punctuation" style="color: rgb(57, 58, 52);">.</span><span class="token class-name">Popover</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token plain">popoverTriggerEl</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><br></span></code></pre>
                                                    </div>
                                                    <!-- code end -->
                                                    <h2 class="mt-20">Live demo <a href="" id="Live-demo"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>
                                                    The snippet of JavaScript shown above is used to render the following live popover. Body content is set via data-bs-content, while titles are set via data-bs-title.
                                                    </p>

                                                    <div
                                                        class="bd-callout bd-callout-warning  blockquote_warning mb-20">
                                                        Feel free to use either <code>title</code> or
                                                        <code>data-bs-title</code> in your HTML. When <code>title</code>
                                                        is used, Popper will replace it automatically with
                                                        <code>data-bs-title</code> when the element is rendered.
                                                    </div>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton2"
                                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                                        </button>
                                                        <div id="copyText2">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-lg btn-danger</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">popover</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-title</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Popover title</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-content</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">And here</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">'</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">s some amazing content. It</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">'</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">s very engaging. Right?</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Click to toggle popover</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <h5 class="result m-0">RESULT</h5>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div><button type="button" class="btn btn-lg btn-danger"
                                                                    data-bs-toggle="popover"
                                                                    data-bs-title="Popover title"
                                                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">Click
                                                                    to toggle popover</button></div>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <h2 class="mt-20">Four directions <a href="" id="Four-directions"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>
                                                    There are four choices: top, right, bottom, and left. When using UX4G in RTL, directions are mirrored. To change the direction, adjust <code>data-bs-placement</code>.
                                                    </p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton3"
                                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                                        </button>
                                                        <div id="copyText3">
                                                            <pre><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-content=&quot;Top popover&quot;&gt;
  Popover on top
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-content=&quot;Right popover&quot;&gt;
  Popover on right
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;bottom&quot; data-bs-content=&quot;Bottom popover&quot;&gt;
  Popover on bottom
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;left&quot; data-bs-content=&quot;Left popover&quot;&gt;
  Popover on left
&lt;/button&gt;</code></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div class="bd-example">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-container="body" data-bs-toggle="popover"
                                                                    data-bs-placement="top"
                                                                    data-bs-content="Top popover">
                                                                    Popover on top
                                                                </button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-container="body" data-bs-toggle="popover"
                                                                    data-bs-placement="right"
                                                                    data-bs-content="Right popover">
                                                                    Popover on right
                                                                </button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-container="body" data-bs-toggle="popover"
                                                                    data-bs-placement="bottom"
                                                                    data-bs-content="Bottom popover">
                                                                    Popover on bottom
                                                                </button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-container="body" data-bs-toggle="popover"
                                                                    data-bs-placement="left"
                                                                    data-bs-content="Left popover">
                                                                    Popover on left
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h2 class="mt-20">Custom container <a href="" id="Custom-container"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>
                                                    When a parent element's styles conflict with a popover, specify a custom container so that the popover's HTML will appear inside of that element instead. This is typical of input groups, responsive tables, and the like.
                                                    </p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton4"
                                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                                        </button>
                                                        <pre
                                                            tabindex="0"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">const popover = new ux4g.Popover('.example-popover', {</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  container: 'body'</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">})</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain" style="display: inline-block;"></span><br></span></code></pre>
                                                    </div>
                                                    <!-- code end -->
                                                    <h3 class="mt-20">Custom popovers <a href="" id="Custom-popovers"
                                                            class="opacity-0 hover-1">#</a></h3>
                                                    <small
                                                        class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Added
                                                        in v1.0.0</small>
                                                    <p>
                                                    Using CSS variables, there is an option to change how popovers look. To scope the customized design, simply set a custom class with <code>data-bs-custom-class="custom-popover"</code> and utilize it to override some of the regional CSS variables.
                                                    </p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton5"
                                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                                        </button>
                                                        <pre><code>.custom-popover {
  --bs-popover-max-width: 200px;
  --bs-popover-border-color: var(--bs-primary);
  --bs-popover-header-bg: var(--bs-primary);
  --bs-popover-header-color: var(--bs-white);
  --bs-popover-body-padding-x: 1rem;
  --bs-popover-body-padding-y: .5rem;
}</code></pre>
                                                    </div>
                                                    <!-- code end -->


                                                    <div class="code_bg rounded p-3 mt-20">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton6"
                                                            onclick="copyToClipboard('copyText6', 'copyButton6')">
                                                            <i class="fa fa-copy" id="iconCopied6"></i>
                                                        </button>
                                                        <div id="copyText6">

                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag" style="color: rgb(0, 0, 159);">        </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">popover</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-placement</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">right</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag" style="color: rgb(0, 0, 159);">        </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-custom-class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">custom-popover</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag" style="color: rgb(0, 0, 159);">        </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-title</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Custom popover</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag" style="color: rgb(0, 0, 159);">        </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-content</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">This popover is themed via CSS variables.</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  Custom popover</span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div><button type="button" class="btn btn-secondary"
                                                                    data-bs-toggle="popover" data-bs-placement="right"
                                                                    data-bs-custom-class="custom-popover"
                                                                    data-bs-title="Custom popover"
                                                                    data-bs-content="This popover is themed via CSS variables.">Custom
                                                                    popover</button></div>
                                                        </div>
                                                    </div>
                                                    <h2 class="mt-20">Dismiss on next click <a href=""
                                                            id="Dismiss-on-next-click" class="opacity-0 hover-1">#</a>
                                                    </h2>
                                                    <p>When a user clicks on an element other than the toggle element after opening a popover, utilize the focus trigger to dismiss the popover.</p>
                                                    <!-- code -->
                                                    
                                                        <div class="blockquote_danger">
                                                            <h4>
                                                                Specific markup required for dismiss-on-next-click 
                                                                
                                                            </h4>
                                                            <p>For proper cross-browser and cross-platform behavior, you
                                                                must use the <code>&lt;a&gt;</code> tag, <em>not</em>
                                                                the <code>&lt;button&gt;</code> tag, and you also must
                                                                include a <a
                                                                    href="https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/tabindex"
                                                                    target="_blank"
                                                                    rel="noopener noreferrer"><code>tabindex</code></a>
                                                                attribute.</p>
                                                        </div>
                                                    
                                                    <!-- code end -->
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3 mt-20">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton7"
                                                            onclick="copyToClipboard('copyText7', 'copyButton7')">
                                                            <i class="fa fa-copy" id="iconCopied7"></i>
                                                        </button>
                                                        <div id="copyText7">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">tabindex</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">0</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-lg btn-danger</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">role</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">popover</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-trigger</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">focus</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-title</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Dismissible popover</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-content</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">And here</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">'</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">s some amazing content. It</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">'</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">s very engaging. Right?</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Dismissible popover</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <h5 class="result m-0">RESULT</h5>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div><a tabindex="0" class="btn btn-lg btn-danger"
                                                                    role="button" data-bs-toggle="popover"
                                                                    data-bs-trigger="focus"
                                                                    data-bs-title="Dismissible popover"
                                                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible
                                                                    popover</a></div>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <div class="code_bg rounded p-3 mt-20">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton8"
                                                            onclick="copyToClipboard('copyText8', 'copyButton8')">
                                                            <i class="fa fa-copy" id="iconCopied8"></i>
                                                        </button>
                                                        <pre id="copyText8" tabindex="0"
                                                            class="prism-code language-js codeBlock_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module thin-scrollbar"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token keyword" style="color: rgb(0, 0, 159);">const</span><span class="token plain"> popover </span><span class="token operator" style="color: rgb(57, 58, 52);">=</span><span class="token plain"> </span><span class="token keyword" style="color: rgb(0, 0, 159);">new</span><span class="token plain"> </span><span class="token class-name">ux4g</span><span class="token class-name punctuation" style="color: rgb(57, 58, 52);">.</span><span class="token class-name">Popover</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token string" style="color: rgb(227, 17, 108);">'.popover-dismiss'</span><span class="token punctuation" style="color: rgb(57, 58, 52);">,</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  </span><span class="token literal-property property" style="color: rgb(54, 172, 170);">trigger</span><span class="token operator" style="color: rgb(57, 58, 52);">:</span><span class="token plain"> </span><span class="token string" style="color: rgb(227, 17, 108);">'focus'</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><br></span></code></pre>
                                                    </div>

                                                    <h3 class="mt-20">Disabled elements <a href=""
                                                            id="Disabled-elements" class="opacity-0 hover-1">#</a></h3>
                                                    <p>
                                                    Users cannot hover over or click non-interactive elements with the disabled property to launch popovers (or tooltips) since they are not interactive. Developers should use a wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code> that is ideally made <code>keyboard-focusable</code> using <code>tabindex="0"</code> to initiate the popover as a workaround.
                                                    </p>
                                                    <p>
                                                    Developers may also select <code>data-bs-trigger="hover focus"</code> for disabled popover triggers so that your users see the popover right away because they might not expect to click on a disabled element.
                                                    </p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton9"
                                                            onclick="copyToClipboard('copyText9', 'copyButton9')">
                                                            <i class="fa fa-copy" id="iconCopied9"></i>
                                                        </button>
                                                        <div id="copyText9">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">d-inline-block</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">tabindex</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">0</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">popover</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-trigger</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">hover focus</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-content</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Disabled popover</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-primary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">disabled</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Disabled button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div><span class="d-inline-block" tabindex="0"
                                                                    data-bs-toggle="popover"
                                                                    data-bs-trigger="hover focus"
                                                                    data-bs-content="Disabled popover"><button
                                                                        class="btn btn-primary" type="button"
                                                                        disabled="">Disabled button</button></span>
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
                                                    Popovers now leverage local CSS variables on <code>.popover</code> for improved real-time customisation as part of UX4G's growing CSS variables strategy. Sass is used to set the values for the CSS variables, therefore Sass customization is still available
                                                    </p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton10"
                                                            onclick="copyToClipboard('copyText10', 'copyButton10')">
                                                            <i class="fa fa-copy" id="iconCopied10"></i>
                                                        </button>
                                                        <pre id="copyText10"><code>  --#{$prefix}popover-zindex: #{$zindex-popover};
  --#{$prefix}popover-max-width: #{$popover-max-width};
  @include rfs($popover-font-size, --#{$prefix}popover-font-size);
  --#{$prefix}popover-bg: #{$popover-bg};
  --#{$prefix}popover-border-width: #{$popover-border-width};
  --#{$prefix}popover-border-color: #{$popover-border-color};
  --#{$prefix}popover-border-radius: #{$popover-border-radius};
  --#{$prefix}popover-inner-border-radius: #{$popover-inner-border-radius};
  --#{$prefix}popover-box-shadow: #{$popover-box-shadow};
  --#{$prefix}popover-header-padding-x: #{$popover-header-padding-x};
  --#{$prefix}popover-header-padding-y: #{$popover-header-padding-y};
  @include rfs($popover-header-font-size, --#{$prefix}popover-header-font-size);
  --#{$prefix}popover-header-color: #{$popover-header-color};
  --#{$prefix}popover-header-bg: #{$popover-header-bg};
  --#{$prefix}popover-body-padding-x: #{$popover-body-padding-x};
  --#{$prefix}popover-body-padding-y: #{$popover-body-padding-y};
  --#{$prefix}popover-body-color: #{$popover-body-color};
  --#{$prefix}popover-arrow-width: #{$popover-arrow-width};
  --#{$prefix}popover-arrow-height: #{$popover-arrow-height};
  --#{$prefix}popover-arrow-border: var(--#{$prefix}popover-border-color);
  </code></pre>
                                                    </div>
                                                    <!-- code end -->
                                                    <h2 class="mt-20">Sass variables <a href="" id="Sass-variables"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <div class="code_bg rounded p-3 mt-20">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton11"
                                                            onclick="copyToClipboard('copyText11', 'copyButton11')">
                                                            <i class="fa fa-copy" id="iconCopied11"></i>
                                                        </button>
                                                        <pre id="copyText11"><code>$popover-font-size:                 $font-size-sm;
$popover-bg:                        $white;
$popover-max-width:                 276px;
$popover-border-width:              $border-width;
$popover-border-color:              var(--#{$prefix}border-color-translucent);
$popover-border-radius:             $border-radius-lg;
$popover-inner-border-radius:       subtract($popover-border-radius, $popover-border-width);
$popover-box-shadow:                $box-shadow;

$popover-header-font-size:          $font-size-base;
$popover-header-bg:                 shade-color($popover-bg, 6%);
$popover-header-color:              $headings-color;
$popover-header-padding-y:          .5rem;
$popover-header-padding-x:          $spacer;

$popover-body-color:                $body-color;
$popover-body-padding-y:            $spacer;
$popover-body-padding-x:            $spacer;

$popover-arrow-width:               1rem;
$popover-arrow-height:              .5rem;</code></pre>
                                                    </div>
                                                    <div
                                                        class="bd-callout bd-callout-warning  blockquote_warning mt-20">
                                                        <h3>
                                                            Making popovers work for keyboard and assistive technology
                                                            users 
                                                        </h3>
                                                        <p>Only add popovers to HTML elements that are typically keyboard-focusable and interactive (like links or form controls) if want keyboard users to be able to use them. Although arbitrary HTML elements (such as &lt;span&gt;s) can be made focusable by adding the tabindex="0" attribute, this will add tab stops on non-interactive elements for keyboard users, which could be obtrusive and confusing, and the majority of assistive technologies currently do not announce the popover's content in this situation. Additionally, avoid relying only on hover to activate popovers because doing so will prevent keyboard users from doing so.
                                                        </p>

                                                        <p>Despite the fact that the html option allows to insert rich, structured HTML inside popovers, it is firmly advised against doing so. Popovers now function by having an <code>aria-describedby</code> property that links their content to the trigger element once it has been displayed. As a result, users of assistive technologies will hear the whole content of the popover as a single, continuous stream.
                                                        </p>
                                                        <p>Be careful that while interactive controls (such form elements or links) can be added to the popover by adding them to the allowList of permitted attributes and tags, the popover presently does not govern keyboard focus order. There is no guarantee that clicking forward or pressing TAB will take a keyboard user into the popover itself since when a keyboard user starts a popover, focus stays on the triggering element and the popover typically does not follow the trigger in the document's structure immediately. In other words, adding interactive controls to a popover by themselves is likely to make them inaccessible to keyboard users and those who use assistive technology, or at the very least, create an unnatural attention order. Consider employing a modal dialog in these circumstances.
                                                        </p>
                                                    </div>

                                                    <h2 class="mt-20">Options <a href="" id="Options"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>
                                                    "Data-bs-animation can have an option name appended to it, for example, <code>data-bs-animation=""{value}""</code> since options can be provided through data attributes or JavaScript. When sending the choices via data attributes, be sure to modify the case type of the option name from <code>""camelCase""</code> to <code>""kebab-case.""</code> Use <code>data-bs-custom-class=""beautifier""</code> as opposed to <code>data-bs-customClass=""beautifier,""</code> for instance.
Since UX4G v1.0.0, all components have support for the experimental reserved data attribute <code>data-bs-config</code>, which can store a JSON string for basic component setting. When an element has the <code>data-bs-config='{""delay"":0, ""title"":123}'</code> and <code>data-bs-title=""456""</code> attributes, the final title value will be 456 and the individual data attributes will take precedence over the values specified on the data-bs-config. Additionally, JSON variables like <code>data-bs-delay='{""show"":0,""hide"":150}'</code> can be stored in existing data attributes."
                                                    </p>
                                                    <p class="">As of UX4G v1.0.0, all components support an
                                                        experimental reserved data attribute <code>data-bs-config</code>
                                                        that can house simple component configuration as a JSON string.
                                                        When an element has
                                                        <code>data-bs-config='{"delay":0, "title":123}'</code> and
                                                        <code>data-bs-title="456"</code> attributes, the final title
                                                        value will be 456 and the separate data attributes will override
                                                        values given on data-bs-config. In addition, existing data
                                                        attributes are able to house JSON values like
                                                        <code>data-bs-delay='{"show":0,"hide":150}'.</code>
                                                    </p>

                                                    <div class="bd-callout bd-callout-warning blockquote_warning">Note
                                                        that for security reasons the <code>sanitize</code>,
                                                        <code>sanitizeFn</code>, and <code>allowList</code> options
                                                        cannot be supplied using data attributes.
                                                    </div>
                                                    <div class="bd-callout bd-callout-info blockquote mt-20">
                                                        <h4 class="anchor anchorWithStickyNavbar_node_modules-@docusaurus-theme-classic-lib-theme-Heading-styles-module"
                                                            id="data-attributes-for-individual-popovers">Data attributes
                                                            for individual popovers <a
                                                                href="#data-attributes-for-individual-popovers"
                                                                class="anchor-link"
                                                                aria-label="Link to this section: Data attributes for individual popovers"></a><a
                                                                href="#data-attributes-for-individual-popovers"
                                                                class="hash-link"
                                                                aria-label="Direct link to data-attributes-for-individual-popovers"
                                                                title="Direct link to data-attributes-for-individual-popovers">&ZeroWidthSpace;</a>
                                                        </h4>
                                                        <p>Options for individual popovers can alternatively be
                                                            specified through the use of data attributes, as explained
                                                            above.</p>
                                                    </div>
                                                    <h2>Using function with <code 
                                                            style="font-size: 2rem;">popperConfig </code><a href=""
                                                            id="Using-function-with-popperConfig"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton13"
                                                            onclick="copyToClipboard('copyText13', 'copyButton13')">
                                                            <i class="fa fa-copy" id="iconCopied13"></i>
                                                        </button>
                                                        <pre id="copyText13"
                                                            tabindex="0"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">const popover = new ux4g.Popover(element, {</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  popperConfig(defaultBsPopperConfig) {</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">    // const newPopperConfig = {...}</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">    // use defaultBsPopperConfig if needed...</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">    // return newPopperConfig</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  }</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">})</span><br></span></code></pre>
                                                    </div>
                                                    <!-- code end -->

                                                    <h2 class="mt-20">Methods <a href="" id="Methods"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                            <div class="blockquote_danger">
<h4 id="asynchronous-methods-and-transitions">Asynchronous methods and transitions <a class="anchor-link" href="#asynchronous-methods-and-transitions" aria-label="Link to this section: Asynchronous methods and transitions"></a></h4>
<p>All API methods are <strong>asynchronous</strong> and start a <strong>transition</strong>. They return to the caller as soon as the transition is started but <strong>before it ends</strong>. In addition, a method call on a <strong>transitioning component will be ignored</strong>.</p>
<p><a href="/docs/5.2/getting-started/javascript/#asynchronous-functions-and-transitions"></a></p>

</div>

                                                            <div class="table-responsive"><table class="table">
<thead>
<tr>
<th>Method</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>disable</code></td>
<td>Removes the ability for an element’s popover to be shown. The popover will only be able to be shown if it is re-enabled.</td>
</tr>
<tr>
<td><code>dispose</code></td>
<td>Hides and destroys an element’s popover (Removes stored data on the DOM element). Popovers that use delegation (which are created using <a href="#Options">the <code>selector</code> option</a>) cannot be individually destroyed on descendant trigger elements.</td>
</tr>
<tr>
<td><code>enable</code></td>
<td>Gives an element’s popover the ability to be shown. <strong>Popovers are enabled by default.</strong></td>
</tr>
<tr>
<td><code>getInstance</code></td>
<td><em>Static</em> method which allows you to get the popover instance associated with a DOM element.</td>
</tr>
<tr>
<td><code>getOrCreateInstance</code></td>
<td><em>Static</em> method which allows you to get the popover instance associated with a DOM element, or create a new one in case it wasn’t initialized.</td>
</tr>
<tr>
<td><code>hide</code></td>
<td>Hides an element’s popover. <strong>Returns to the caller before the popover has actually been hidden</strong> (i.e. before the <code>hidden.bs.popover</code> event occurs). This is considered a “manual” triggering of the popover.</td>
</tr>
<tr>
<td><code>setContent</code></td>
<td>Gives a way to change the popover’s content after its initialization.</td>
</tr>
<tr>
<td><code>show</code></td>
<td>Reveals an element’s popover. <strong>Returns to the caller before the popover has actually been shown</strong> (i.e. before the <code>shown.bs.popover</code> event occurs). This is considered a “manual” triggering of the popover. Popovers whose title and content are both zero-length are never displayed.</td>
</tr>
<tr>
<td><code>toggle</code></td>
<td>Toggles an element’s popover. <strong>Returns to the caller before the popover has actually been shown or hidden</strong> (i.e. before the <code>shown.bs.popover</code> or <code>hidden.bs.popover</code> event occurs). This is considered a “manual” triggering of the popover.</td>
</tr>
<tr>
<td><code>toggleEnabled</code></td>
<td>Toggles the ability for an element’s popover to be shown or hidden.</td>
</tr>
<tr>
<td><code>update</code></td>
<td>Updates the position of an element’s popover.</td>
</tr>
</tbody>
</table></div>

                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton14"
                                                            onclick="copyToClipboard('copyText14', 'copyButton14')">
                                                            <i class="fa fa-copy" id="iconCopied14"></i>
                                                        </button>
                                                       <pre><code
                                                            id="copyText14"><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">// getOrCreateInstance example</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">const popover = ux4g.Popover.getOrCreateInstance('#example') // Returns a UX4G popover instance</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain" style="display: inline-block;"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">// setContent example</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">myPopover.setContent({</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  '.popover-header': 'another title',</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  '.popover-body': 'another content'</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">})</span><br></span></pre></code>
                                                    </div>
                                                    <div class="bd-callout bd-callout-info blockquote mt-20">The
                                                        <code>setContent</code> method accepts an <code>object</code>
                                                        argument, where each property-key is a valid <code>string</code>
                                                        selector within the popover template, and each related
                                                        property-value can be <code>string</code> | <code>element</code>
                                                        | <code>function</code> | <code>null</code>
                                                    </div>
                                                    <h2 class="mt-20">Events <a href="" id="Events"
                                                            class="opacity-0 hover-1">#</a></h2>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton15"
                                                            onclick="copyToClipboard('copyText15', 'copyButton15')">
                                                            <i class="fa fa-copy" id="iconCopied15"></i>
                                                        </button>
                                                        <pre id="copyText15"
                                                            tabindex="0"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">const myPopoverTrigger = document.getElementById('myPopover')</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">myPopoverTrigger.addEventListener('hidden.bs.popover', () =&gt; {</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  // do something...</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">})</span><br></span></code></pre>
                                                    </div>
                                                    <!-- code end -->





                                                </div>
                                            </div>
                                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                                <div class="right_side">
                                                    <ul class="p-0">
                                                        <li>
                                                            <a href="#Overview">Overview</a>
                                                        </li>

                                                        <li> <a href="#Examples">Examples</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="#Enable-popovers">Enable popovers</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#Live-demo">Live demo</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#Four-directions">Four directions</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li> <a href="#Custom-container">Custom container</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="#Custom-popovers">Custom popovers</a>
                                                                </li>

                                                            </ul>
                                                        </li>
                                                        <li> <a href="#Dismiss-on-next-click">Dismiss on next click</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="#Disabled-elements">Disabled elements</a>
                                                                </li>

                                                            </ul>
                                                        </li>
                                                        <li> <a href="#CSS">CSS</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="#Variables">Variables</a>
                                                                </li>

                                                            </ul>
                                                        </li>
                                                        <li> <a href="#Sass-variables">Sass variables</a></li>
                                                        <li> <a href="#Usage">Usage</a></li>
                                                        <li> <a href="#Options">Options</a></li>
                                                        <li> <a href="#Using-function-with-popperConfig">Using function
                                                                with <code >popperConfig</code></a></li>
                                                        <li>
                                                            <a href="#Methods">Methods</a>
                                                        </li>
                                                        <li>
                                                            <a href="#Events">Events</a>
                                                        </li>





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
                            <a class="page-link border-0" href="/components/placeholders.php">
                                <span>Previous</span>
                                <strong class="d-block">« Placeholders </strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/components/progress.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Progress »</strong>
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

<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>