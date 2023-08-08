<?php
$title = 'UX4G | Tooltip';
$canonical = 'https://doc.ux4g.gov.in/components/tooltips.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Tooltips</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="col-12 col-sm-9">
                    <h1 class="mb-30"> Tooltips</h1>
                    <p>
                    Examples and documentation for adding custom UX4G tooltips in CSS and JavaScript utilizing data-bs-attributes for local title storage and CSS3 animations.
                    </p>
                   
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

<h2>Overview <a href="" id="Overview" class="opacity-0 hover-1">#</a></h2>
<p>Tooltip placement is handled by the third-party library Popper.</p>
<ul class="un_order_list">

    <li>Developer must use one UX4G .bundle.min.js that contains Popper or include popper .min.js before UX4G.js.</li>

    <li>Tooltips rely on the third party library <a href="https://popper.js.org/" target="_blank" rel="noopener noreferrer">Popper</a> for positioning. You must include <a href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" target="_blank" rel="noopener noreferrer">popper.min.js</a> before <code>UX4G.js</code>, or use one <code>UX4G.bundle.min.js</code> which contains Popper.</li>

    <li>
        For performance concerns, tooltips are opt-in, therefore it is must to  initialize them manually.
    </li>
    
    <li>
    Tooltips with titles of zero length are never shown.
    </li>
    
    <li>
    To prevent rendering issues in more complicated components (like the input groups, button groups, etc.), use container: 'body'.

    </li>
    
    <li>
    Tooltips won't activate on hidden elements.
    </li>
    
    <li>
    Tip boxes for wrapper element must trigger <code>.disabled</code> or disabled elements.
    </li>
    
    <li>Tooltips will be centered when they are activated by hyperlinks that cross several lines. To prevent this, use white-space: nowrap; on your <a>s.</li>
    <li>Before their related elements are deleted from the DOM, tooltips must first be hidden.</li>
    <li>An element inside a shadow DOM can cause tooltips to appear.</li>

</ul>
<p>Got all that? Great, let's see how they work with some examples.</p>
<blockquote class="blockquote mt-20"><div class="bd-callout bd-callout-info">By default, this component uses the built-in content sanitizer, which strips out any HTML elements that are not explicitly allowed. See the sanitizer section in our JavaScript documentation for more details.</div></blockquote>
<blockquote><div class="bd-callout bd-callout-info blockquote mt-20">The animation effect of this component is dependent on the <code>prefers-reduced-motion</code> media query. See the reduced motion section of our accessibility documentation.</div></blockquote>
<h2>Examples <a href=""id="Examples" class="opacity-0 hover-1">#</a></h2>
<h3>Enable tooltips <a href=""id="Enable-tooltips" class="opacity-0 hover-1">#</a></h3>
<p>
As it is already indicated, tooltips need to be initialized before being utilized. A method to pick all tooltips on a page based on their data-bs-toggle attribute is as follows:
</p>
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton1" onclick="copyToClipboard('copyText1', 'copyButton1')">
<i class="fa fa-copy" id="iconCopied1"></i>
</button>
  <pre id="copyText1"><code>const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle=&quot;tooltip&quot;]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl =&gt; new ux4g.Tooltip(tooltipTriggerEl))</code></pre>
</div>
<h3 class="mt-20">Tooltips on links <a href="" id="Tooltips-on-links" class="opacity-0 hover-1">#</a></h3>
<p>Hover over the links below to see tooltips:</p>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton2" onclick="copyToClipboard('copyText2', 'copyButton2')">
<i class="fa fa-copy" id="iconCopied2"></i>
</button>
<div id="copyText2" >
    <pre aria-hidden="true" ><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">p</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">muted</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Placeholder text to demonstrate some </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">href</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">tooltip</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-title</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Default tooltip</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">inline links</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"> with tooltips. This is now just filler, no killer. Content placed here just to mimic the presence of </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">href</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">tooltip</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-title</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Another tooltip</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">real text</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">. And all that just to give you an idea of how tooltips would look when used in real-world situations. So hopefully you've now seen how </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">href</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">tooltip</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-title</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Another one here too</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">these tooltips on links</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"> can work in practice, once you use them on </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">href</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">tooltip</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-title</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">The last tip!</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">your own</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"> site or project.</span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">p</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
</div>
</div>
<!-- code end -->

<h5 class="result m-0">RESULT</h5>
<div class="code_bg rounded p-3">
<p class="muted">Placeholder text to demonstrate some <a href="#" data-bs-toggle="tooltip" data-bs-title="Default tooltip">inline links</a> with tooltips. This is now just filler, no killer. Content placed here just to mimic the presence of <a href="#" data-bs-toggle="tooltip" data-bs-title="Another tooltip">real text</a>. And all that just to give you an idea of how tooltips would look when used in real-world situations. So hopefully you've now seen how <a href="#" data-bs-toggle="tooltip" data-bs-title="Another one here too">these tooltips on links</a> can work in practice, once you use them on <a href="#" data-bs-toggle="tooltip" data-bs-title="The last tip!">your own</a> site or project.</p>
</div>
<div class="bd-callout bd-callout-warning blockquote_warning mt-20">Feel free to use either <code>title</code> or <code>data-bs-title</code> in your HTML. When <code>title</code> is used, Popper will replace it automatically with <code>data-bs-title</code> when the element is rendered.</div>

<h2 class="mt-20">Custom tooltips <a href="" id="Custom-tooltips" class="opacity-0 hover-1">#</a></h2>
<small class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Added in v1.0.0</small>
<p>
Using CSS variables, developer can alter how tooltips look. To scope the customized appearance, it is set to a custom class with <code>data-bs-custom-class="custom-tooltip</code>" and utilize it to replace a local CSS variable.
</p>

<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton3" onclick="copyToClipboard('copyText3', 'copyButton3')">
<i class="fa fa-copy" id="iconCopied3"></i>
</button>
<pre id="copyText3" tabindex="0" ><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">.custom-tooltip {</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  --bs-tooltip-bg: var(--bs-primary);</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">}</span><br></span></code></pre>
</div>


<!-- code -->
<div class="code_bg rounded p-3">

<div id="copyText4">
<pre><code>.custom-tooltip {  --bs-tooltip-bg: var(--bs-primary);}
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;
data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot;
data-bs-custom-class=&quot;custom-tooltip&quot;
data-bs-title=&quot;This top tooltip is themed via CSS variables.&quot;&gt;
Custom tooltip
&lt;/button&gt;</code></pre>
</div>
</div>
<!--  code-->
<h5 class="result m-0">RESULT</h5>
<div class="code_bg rounded p-3">
<div ><div><button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="This top tooltip is themed via CSS variables.">Custom tooltip</button></div></div>
</div>

<h2 class="mt-20">Directions <a href="" id="Directions"class="opacity-0 hover-1">#</a></h2>
<p>The four tooltip directions are top, right, bottom, and left. Hover over the buttons below to view them. When using UX4G in RTL, directions are mirrored.</p>
<!--  code-->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton4" onclick="copyToClipboard('copyText4', 'copyButton4')">
<i class="fa fa-copy" id="iconCopied4"></i>
</button>
<div id="copyText4" >
<pre aria-hidden="true" ><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">code</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">tooltip</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-placement</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">top</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-title</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Tooltip on top</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  Tooltip on top</span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">tooltip</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-placement</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">right</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-title</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Tooltip on right</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  Tooltip on right</span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">tooltip</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-placement</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">bottom</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-title</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Tooltip on bottom</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  Tooltip on bottom</span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">tooltip</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-placement</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">left</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-title</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Tooltip on left</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  Tooltip on left</span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">code</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
</div>
</div>
<!--  code end-->

<h5 class="result m-0">RESULT</h5>
<div class="code_bg rounded p-3">
<div ><div><code><button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">Tooltip on top</button><button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right">Tooltip on right</button><button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">Tooltip on bottom</button><button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tooltip on left">Tooltip on left</button></code></div></div>
</div>
<p class="mt-20">And with custom HTML added:</p>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton5" onclick="copyToClipboard('copyText5', 'copyButton5')">
<i class="fa fa-copy" id="iconCopied5"></i>
</button>
  <pre id="copyText5" tabindex="0" ><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">tooltip</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-html</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">true</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-title</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  Tooltip with HTML</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><br></span></code></pre>
</div>
<!-- code end -->
<p class="mt-20">With an SVG:</p>

<!-- code -->
<div class="code_bg rounded p-3">
<div class="bd-example tooltip-demo">
  <a href="#" class="d-inline-block" data-bs-toggle="tooltip" data-bs-title="Default tooltip">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100" class="rounded">
      <rect width="100%" height="100%" fill="#d63384"></rect>
      <circle cx="50" cy="50" r="30" fill="#fff"></circle>
    </svg>
  </a>
</div>
</div>
<!-- code end -->

<h2 class="mt-20">CSS <a href="" id="CSS" class="opacity-0 hover-1">#</a></h2>
<h3 class="mt-20">Variables <a href="" id="Variables" class="opacity-0 hover-1">#</a></h3>
<small class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Added in v1.0.0</small>

<p >The top, right, bottom, and left tooltip directions are available. To see the buttons below, hover rhe cursor over them. In RTL, directions are mirrored when using UX4G.</p>


<!-- code -->
<div class="code_bg rounded p-3 mt-20">
<button class="btn btn-outline-primary float-end" id="copyButton6" onclick="copyToClipboard('copyText6', 'copyButton6')">
<i class="fa fa-copy" id="iconCopied6"></i>
</button>
  <pre id="copyText6"><code>  --#{$prefix}tooltip-zindex: #{$zindex-tooltip};
  --#{$prefix}tooltip-max-width: #{$tooltip-max-width};
  --#{$prefix}tooltip-padding-x: #{$tooltip-padding-x};
  --#{$prefix}tooltip-padding-y: #{$tooltip-padding-y};
  --#{$prefix}tooltip-margin: #{$tooltip-margin};
  @include rfs($tooltip-font-size, --#{$prefix}tooltip-font-size);
  --#{$prefix}tooltip-color: #{$tooltip-color};
  --#{$prefix}tooltip-bg: #{$tooltip-bg};
  --#{$prefix}tooltip-border-radius: #{$tooltip-border-radius};
  --#{$prefix}tooltip-opacity: #{$tooltip-opacity};
  --#{$prefix}tooltip-arrow-width: #{$tooltip-arrow-width};
  --#{$prefix}tooltip-arrow-height: #{$tooltip-arrow-height};
  </code></pre>
</div>
<!-- code end -->
<h2 class="mt-20">Sass variables <a href="" id="Sass-variables" class="opacity-0 hover-1">#</a></h2>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton7" onclick="copyToClipboard('copyText7', 'copyButton7')">
<i class="fa fa-copy" id="iconCopied7"></i>
</button>
  <pre id="copyText7"><code>$tooltip-font-size:                 $font-size-sm;
$tooltip-max-width:                 200px;
$tooltip-color:                     $white;
$tooltip-bg:                        $black;
$tooltip-border-radius:             $border-radius;
$tooltip-opacity:                   .9;
$tooltip-padding-y:                 $spacer * .25;
$tooltip-padding-x:                 $spacer * .5;
$tooltip-margin:                    null; 

$tooltip-arrow-width:               .8rem;
$tooltip-arrow-height:              .4rem;
// fusv-disable
$tooltip-arrow-color:               null; 
// fusv-enable</code></pre>
</div>
<!-- code end -->

<h2 class="mt-20">Usage <a href="" id="Usage" class="opacity-0 hover-1">#</a></h2>
<p>By default, the tooltip plugin places tooltips after their trigger element and generates text and markup as needed.</p>
<p>Trigger the tooltip via JavaScript:</p>
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton8" onclick="copyToClipboard('copyText8', 'copyButton8')">
<i class="fa fa-copy" id="iconCopied8"></i>
</button>
<pre id="copyText8"><code>const exampleEl = document.getElementById('example')
const tooltip = new ux4g.Tooltip(exampleEl, options)</code></pre>
</div>

<div class="mt-20">
  <div class="bd-callout bd-callout-warning blockquote_warning"><h5>Overflow <code>auto</code> and <code>scroll</code> </h5>Tooltip position attempts to automatically change when a parent container has overflow: auto or overflow: scroll like our .table-responsive, but still keeps the original placement’s positioning. To resolve this, set the boundary option (for the flip modifier using the popperConfig option) to any HTMLElement to override the default value, 'clippingParents', such as document.body:<div class="language-html codeBlockContainer_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Container-styles-module theme-code-block" style="--prism-color: #393A34; --prism-background-color: #f6f8fa;"><div ><pre tabindex="0" ><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  const tooltip = new UX4G.Tooltip('#example', {</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  boundary: document.body // or document.querySelector('#boundary')})</span><br></span></code></pre><div class="buttonGroup_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module"><button type="button" aria-label="Copy code to clipboard" title="Copy" class="clean-btn"><span class="copyButtonIcons_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-CopyButton-styles-module" aria-hidden="true"><svg class="copyButtonIcon_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-CopyButton-styles-module" viewBox="0 0 24 24"><path d="M19,21H8V7H19M19,5H8A2,2 0 0,0 6,7V21A2,2 0 0,0 8,23H19A2,2 0 0,0 21,21V7A2,2 0 0,0 19,5M16,1H4A2,2 0 0,0 2,3V17H4V3H16V1Z"></path></svg><svg class="copyButtonSuccessIcon_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-CopyButton-styles-module" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path></svg></span></button></div></div></div></div>
</div>
<h2 class="mt-20">Markup <a href="" id="Markup" class="opacity-0 hover-1">#</a></h2>
<p>Only a data property and title on the HTML element developer intend to have a tooltip on are necessary for markup to function. A tooltip's generated HTML is quite straightforward, although it does call for a position, which the plugin by default sets to the top.</p>


<div class="bd-callout bd-callout-warning blockquote_warning"><h6> Making tooltips work for keyboard and assistive technology users </h6>You should only add tooltips to HTML elements that are traditionally keyboard-focusable and interactive (such as links or form controls). Although arbitrary HTML elements (such as <span>span</span>s) can be made focusable by adding the tabindex="0" attribute, this will add potentially annoying and confusing tab stops on non-interactive elements for keyboard users, and most assistive technologies currently do not announce the tooltip in this situation. Additionally, do not rely solely on hover as the trigger for your tooltip, as this will make your tooltips impossible to trigger for keyboard users.</div>


<div class="code_bg rounded p-3 mt-20">
<button class="btn btn-outline-primary float-end" id="copyButton9" onclick="copyToClipboard('copyText9', 'copyButton9')">
<i class="fa fa-copy" id="iconCopied9"></i>
</button>
  <pre id="copyText9" tabindex="0" ><code >&lt;!-- HTML to write --&gt;
&lt;a href=&quot;#&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-title=&quot;Some tooltip text!&quot;&gt;Hover over me&lt;/a&gt;

&lt;!-- Generated markup by the plugin --&gt;
&lt;div class=&quot;tooltip bs-tooltip-top&quot; role=&quot;tooltip&quot;&gt;
  &lt;div class=&quot;tooltip-arrow&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;tooltip-inner&quot;&gt;
    Some tooltip text!
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
</div>

<h2 class="mt-20">Disabled elements <a href="" id="Disabled-elements" class="opacity-0 hover-1">#</a></h2>
<p>Users cannot concentrate, hover over, or click non-interactive elements with the disabled property to launch a tooltip (or popover) since they are not interactive. Developer should use a wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code> that is ideally made keyboard-focusable using tabindex="0" to activate the tooltip as a workaround.</p>


<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton10" onclick="copyToClipboard('copyText10', 'copyButton10')">
<i class="fa fa-copy" id="iconCopied10"></i>
</button>
<div id="copyText10" >
    <pre aria-hidden="true" ><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">d-inline-block</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">tabindex</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">0</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">tooltip</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-title</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Disabled tooltip</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-primary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">disabled</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Disabled button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre></div>
</div>
<h5 class="result m-0">RESULT</h5>
<div class="code_bg rounded p-3">
<div ><div><span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" data-bs-title="Disabled tooltip"><button class="btn btn-primary" type="button" disabled="">Disabled button</button></span></div></div>
</div>
<h2 class="mt-20">Options <a href="" id="Options" class="opacity-0 hover-1">#</a></h2>
<p>
<code>Data-bs-animation</code> can have an option name appended to it, for example, <code>data-bs-animation="{value}"</code> since options can be provided through data attributes or JavaScript. When sending the choices via data attributes, be sure to modify the case type of the option name from <code>"camelCase"</code> to <code>"kebab-case."</code> Use <code>data-bs-custom-class="beautifier"</code> as opposed to data-bs-customClass="beautifier," for instance.

</p>
<p>Since UX4G 1.0.0, all components are compatible with the experimental reserved data attribute data-bs-config, which can store a JSON string for basic component setting. When an element has the <code>data-bs-config='{"delay":0, "title":123}'</code> and <code>data-bs-title="456"</code> attributes, the final title value will be 456 and the individual data attributes will take precedence over the values specified on the <code>data-bs-config</code>. Additionally, JSON variables like data-bs-delay='{"show":0,"hide":150}' can be stored in existing data attributes.</p>

<div class="bd-callout bd-callout-warning blockquote_warning ">Note that for security reasons the <code>sanitize</code>, <code>sanitizeFn</code>, and <code>allowList</code> options cannot be supplied using data attributes.</div>
<div class="table-responsive mt-20"><table class="table">
<thead>
<tr>
<th>Name</th>
<th>Type</th>
<th>Default</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>allowList</code></td>
<td>object</td>
<td><a href="/docs/5.2/getting-started/javascript/#sanitizer">Default value</a></td>
<td>Object which contains allowed attributes and tags.</td>
</tr>
<tr>
<td><code>animation</code></td>
<td>boolean</td>
<td><code>true</code></td>
<td>Apply a CSS fade transition to the tooltip.</td>
</tr>
<tr>
<td><code>boundary</code></td>
<td>string, element</td>
<td><code>'clippingParents'</code></td>
<td>Overflow constraint boundary of the tooltip (applies only to Popper’s preventOverflow modifier). By default, it’s <code>'clippingParents'</code> and can accept an HTMLElement reference (via JavaScript only). For more information refer to Popper’s <a href="https://popper.js.org/docs/v2/utils/detect-overflow/#boundary" target="_blank">detectOverflow docs</a>.</td>
</tr>
<tr>
<td><code>container</code></td>
<td>string, element, false</td>
<td><code>false</code></td>
<td>Appends the tooltip to a specific element. Example: <code>container: 'body'</code>. This option is particularly useful in that it allows you to position the tooltip in the flow of the document near the triggering element -&nbsp;which will prevent the tooltip from floating away from the triggering element during a window resize.</td>
</tr>
<tr>
<td><code>customClass</code></td>
<td>string, function</td>
<td><code>''</code></td>
<td>Add classes to the tooltip when it is shown. Note that these classes will be added in addition to any classes specified in the template. To add multiple classes, separate them with spaces: <code>'class-1 class-2'</code>. You can also pass a function that should return a single string containing additional class names.</td>
</tr>
<tr>
<td><code>delay</code></td>
<td>number, object</td>
<td><code>0</code></td>
<td>Delay showing and hiding the tooltip (ms)—doesn’t apply to manual trigger type. If a number is supplied, delay is applied to both hide/show. Object structure is: <code>delay: { "show": 500, "hide": 100 }</code>.</td>
</tr>
<tr>
<td><code>fallbackPlacements</code></td>
<td>array</td>
<td><code>['top', 'right', 'bottom', 'left']</code></td>
<td>Define fallback placements by providing a list of placements in array (in order of preference). For more information refer to Popper’s <a href="https://popper.js.org/docs/v2/modifiers/flip/#fallbackplacements" target="_blank">behavior docs</a>.</td>
</tr>
<tr>
<td><code>html</code></td>
<td>boolean</td>
<td><code>false</code></td>
<td>Allow HTML in the tooltip. If true, HTML tags in the tooltip’s <code>title</code> will be rendered in the tooltip. If false, <code>innerText</code> property will be used to insert content into the DOM. Use text if you’re worried about XSS attacks.</td>
</tr>
<tr>
<td><code>offset</code></td>
<td>array, string, function</td>
<td><code>[0, 0]</code></td>
<td>Offset of the tooltip relative to its target. You can pass a string in data attributes with comma separated values like: <code>data-bs-offset="10,20"</code>. When a function is used to determine the offset, it is called with an object containing the popper placement, the reference, and popper rects as its first argument. The triggering element DOM node is passed as the second argument. The function must return an array with two numbers: <a href="https://popper.js.org/docs/v2/modifiers/offset/#skidding-1" target="_blank">skidding</a>, <a href="https://popper.js.org/docs/v2/modifiers/offset/#distance-1" target="_blank">distance</a>. For more information refer to Popper’s <a href="https://popper.js.org/docs/v2/modifiers/offset/#options" target="_blank">offset docs</a>.</td>
</tr>
<tr>
<td><code>placement</code></td>
<td>string, function</td>
<td><code>'top'</code></td>
<td>How to position the tooltip: auto, top, bottom, left, right. When <code>auto</code> is specified, it will dynamically reorient the tooltip. When a function is used to determine the placement, it is called with the tooltip DOM node as its first argument and the triggering element DOM node as its second. The <code>this</code> context is set to the tooltip instance.</td>
</tr>
<tr>
<td><code>popperConfig</code></td>
<td>null, object, function</td>
<td><code>null</code></td>
<td>To change Bootstrap’s default Popper config, see <a href="https://popper.js.org/docs/v2/constructors/#options"target="_blank">Popper’s configuration</a>. When a function is used to create the Popper configuration, it’s called with an object that contains the Bootstrap’s default Popper configuration. It helps you use and merge the default with your own configuration. The function must return a configuration object for Popper.</td>
</tr>
<tr>
<td><code>sanitize</code></td>
<td>boolean</td>
<td><code>true</code></td>
<td>Enable or disable the sanitization. If activated <code>'template'</code>, <code>'content'</code> and <code>'title'</code> options will be sanitized.</td>
</tr>
<tr>
<td><code>sanitizeFn</code></td>
<td>null, function</td>
<td><code>null</code></td>
<td>Here you can supply your own sanitize function. This can be useful if you prefer to use a dedicated library to perform sanitization.</td>
</tr>
<tr>
<td><code>selector</code></td>
<td>string, false</td>
<td><code>false</code></td>
<td>If a selector is provided, tooltip objects will be delegated to the specified targets. In practice, this is used to also apply tooltips to dynamically added DOM elements (<code>jQuery.on</code> support). See <a href="https://github.com/twbs/bootstrap/issues/4215" target="_blank">this issue</a> and <a href="https://codepen.io/Johann-S/pen/djJYPb" target="_blank">an informative example</a>. <strong>Note</strong>: <code>title</code> attribute must not be used as a selector.</td>
</tr>
<tr>
<td><code>template</code></td>
<td>string</td>
<td><code>'&lt;div class="tooltip" role="tooltip"&gt;&lt;div class="tooltip-arrow"&gt;&lt;/div&gt;&lt;div class="tooltip-inner"&gt;&lt;/div&gt;&lt;/div&gt;'</code></td>
<td>Base HTML to use when creating the tooltip. The tooltip’s <code>title</code> will be injected into the <code>.tooltip-inner</code>. <code>.tooltip-arrow</code> will become the tooltip’s arrow. The outermost wrapper element should have the <code>.tooltip</code> class and <code>role="tooltip"</code>.</td>
</tr>
<tr>
<td><code>title</code></td>
<td>string, element, function</td>
<td><code>''</code></td>
<td>Default title value if <code>title</code> attribute isn’t present. If a function is given, it will be called with its <code>this</code> reference set to the element that the popover is attached to.</td>
</tr>
<tr>
<td><code>trigger</code></td>
<td>string</td>
<td><code>'hover focus'</code></td>
<td>How tooltip is triggered: click, hover, focus, manual. You may pass multiple triggers; separate them with a space. <code>'manual'</code> indicates that the tooltip will be triggered programmatically via the <code>.tooltip('show')</code>, <code>.tooltip('hide')</code> and <code>.tooltip('toggle')</code> methods; this value cannot be combined with any other trigger. <code>'hover'</code> on its own will result in tooltips that cannot be triggered via the keyboard, and should only be used if alternative methods for conveying the same information for keyboard users is present.</td>
</tr>
</tbody>
</table></div>
<div class="bd-callout bd-callout-info blockquote mt-20 "><h4 class="anchor anchorWithStickyNavbar_node_modules-@docusaurus-theme-classic-lib-theme-Heading-styles-module" id="data-attributes-for-individual-tooltips">Data attributes for individual tooltips <a href="#data-attributes-for-individual-tooltips" class="anchor-link" aria-label="Link to this section: Data attributes for individual tooltips"></a><a href="#data-attributes-for-individual-tooltips" class="hash-link" aria-label="Direct link to data-attributes-for-individual-tooltips" title="Direct link to data-attributes-for-individual-tooltips">&ZeroWidthSpace;</a></h4><p>Options for individual tooltips can alternatively be specified through the use of data attributes, as explained above.</p></div>


<h2 class="mt-20">Using function with <code > popperConfig</code> <a href="" id="Using-function-with-popperConfig" class="opacity-0 hover-1">#</a></h2>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton11" onclick="copyToClipboard('copyText11', 'copyButton11')">
<i class="fa fa-copy" id="iconCopied11"></i>
</button>
<pre id="copyText11" tabindex="0" ><code >const tooltip = new ux4g.Tooltip(element, {
  popperConfig(defaultBsPopperConfig) {
    // const newPopperConfig = {...}
    // use defaultBsPopperConfig if needed...
    // return newPopperConfig
  }
})</code></pre>
</div>
<!-- code end -->
<h2>Methods <a href="" id="Methods" class="opacity-0 hover-1">#</a></h2>
<div class="bd-callout bd-callout-danger blockquote_danger mt-20 mb-20"><h5>Asynchronous methods and transitions</h5>All API methods are <strong>asynchronous</strong> and start a <strong>transition</strong>. They return to the caller as soon as the transition is started but <strong>before it ends</strong>. In addition, a method call on a <strong>transitioning component will be ignored</strong>.</div>
<div class="table-responsive mt-20"><table class="table">
<thead>
<tr>
<th>Method</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>disable</code></td>
<td>Removes the ability for an element’s tooltip to be shown. The tooltip will only be able to be shown if it is re-enabled.</td>
</tr>
<tr>
<td><code>dispose</code></td>
<td>Hides and destroys an element’s tooltip (Removes stored data on the DOM element). Tooltips that use delegation (which are created using <a href="#Options">the <code>selector</code> option</a>) cannot be individually destroyed on descendant trigger elements.</td>
</tr>
<tr>
<td><code>enable</code></td>
<td>Gives an element’s tooltip the ability to be shown. <strong>Tooltips are enabled by default.</strong></td>
</tr>
<tr>
<td><code>getInstance</code></td>
<td><em>Static</em> method which allows you to get the tooltip instance associated with a DOM element, or create a new one in case it wasn’t initialized.</td>
</tr>
<tr>
<td><code>getOrCreateInstance</code></td>
<td><em>Static</em> method which allows you to get the tooltip instance associated with a DOM element, or create a new one in case it wasn’t initialized.</td>
</tr>
<tr>
<td><code>hide</code></td>
<td>Hides an element’s tooltip. <strong>Returns to the caller before the tooltip has actually been hidden</strong> (i.e. before the <code>hidden.bs.tooltip</code> event occurs). This is considered a “manual” triggering of the tooltip.</td>
</tr>
<tr>
<td><code>setContent</code></td>
<td>Gives a way to change the tooltip’s content after its initialization.</td>
</tr>
<tr>
<td><code>show</code></td>
<td>Reveals an element’s tooltip. <strong>Returns to the caller before the tooltip has actually been shown</strong> (i.e. before the <code>shown.bs.tooltip</code> event occurs). This is considered a “manual” triggering of the tooltip. Tooltips with zero-length titles are never displayed.</td>
</tr>
<tr>
<td><code>toggle</code></td>
<td>Toggles an element’s tooltip. <strong>Returns to the caller before the tooltip has actually been shown or hidden</strong> (i.e. before the <code>shown.bs.tooltip</code> or <code>hidden.bs.tooltip</code> event occurs). This is considered a “manual” triggering of the tooltip.</td>
</tr>
<tr>
<td><code>toggleEnabled</code></td>
<td>Toggles the ability for an element’s tooltip to be shown or hidden.</td>
</tr>
<tr>
<td><code>update</code></td>
<td>Updates the position of an element’s tooltip.</td>
</tr>
</tbody>
</table></div>

<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton12" onclick="copyToClipboard('copyText12', 'copyButton12')">
<i class="fa fa-copy" id="iconCopied12"></i>
</button>
<pre id="copyText12" tabindex="0" ><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">const tooltip = UX4G.Tooltip.getInstance('#example') // Returns a UX4G tooltip instance</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">// setContent example</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">tooltip.setContent({ '.tooltip-inner': 'another title' })</span><br></span></code></pre>
</div>

<div class="bd-callout bd-callout-info blockquote mt-20">The <code>setContent</code> method accepts an <code>object</code> argument, where each property-key is a valid <code>string</code> selector within the popover template, and each related property-value can be <code>string</code> | <code>element</code> | <code>function</code> | <code>null</code></div>

<h2 class="mt-20">Events <a href="" id="Events" class="opacity-0 hover-1">#</a></h2>
<div class="table-responsive mt-20"><table class="table">
<thead>
<tr>
<th>Event</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>hide.bs.tooltip</code></td>
<td>This event is fired immediately when the <code>hide</code> instance method has been called.</td>
</tr>
<tr>
<td><code>hidden.bs.tooltip</code></td>
<td>This event is fired when the popover has finished being hidden from the user (will wait for CSS transitions to complete).</td>
</tr>
<tr>
<td><code>inserted.bs.tooltip</code></td>
<td>This event is fired after the <code>show.bs.tooltip</code> event when the tooltip template has been added to the DOM.</td>
</tr>
<tr>
<td><code>show.bs.tooltip</code></td>
<td>This event fires immediately when the <code>show</code> instance method is called.</td>
</tr>
<tr>
<td><code>shown.bs.tooltip</code></td>
<td>This event is fired when the popover has been made visible to the user (will wait for CSS transitions to complete).</td>
</tr>
</tbody>
</table></div>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton13" onclick="copyToClipboard('copyText13', 'copyButton13')">
<i class="fa fa-copy" id="iconCopied13"></i>
</button>
<pre id="copyText13" tabindex="0" ><code >const myTooltipEl = document.getElementById('myTooltip')
const tooltip = bootstrap.Tooltip.getOrCreateInstance(myTooltipEl)

myTooltipEl.addEventListener('hidden.bs.tooltip', () =&gt; {
  // do something...
})

tooltip.hide()</code></pre>
</div>
<!-- code end -->












  

                                                </div>
                                            </div>
                                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                                <div class="right_side">
                                                    <ul class="p-0">
                                                        <li><a href="#Overview">Overview</a></li>
                                                        <li><a href="#Examples">Examples</a>
                                                        <ul>
                                                                <li><a href="#Enable-tooltips">Enable tooltips</a></li>
                                                                <li><a href="#Tooltips-on-links">Tooltips on links</a></li>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                        
                                                      <li> <a href="#Custom-tooltips">Custom tooltips</a></li>
                                                      <li> <a href="#Directions">Directions</a></li>

                                                        <li><a href="#CSS">CSS</a>
                                                            <ul>
                                                                <li><a href="#Variables">Variables</a>
                                                                </li>
                                                                
                                                            </ul>
                                                        </li>
                                                        <li><a href="#Sass-variables">Sass variables</a>
                                                                </li>
                                                                <li><a href="#Usage">Usage</a>
                                                        </li>

<li><a href="#Markup">Markup</a></li>
<li><a href="#Disabled-elements">Disabled elements</a></li>
<li><a href="#Options">Options</a></li>
<li><a href="#Using-function-with-popperConfig">Using function with <code class="code_bn">popperConfig </code></a></li>
<li><a href="#Methods">Methods</a></li>
<li><a href="#Events">Events</a></li>
                                                        
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
                    <a class="page-link border-0" href="/components/toasts.php">
                        <span>Previous</span>
                        <strong class="d-block">« Toasts </strong>
                    </a>
                    <a class="page-link border-0 float-end" href="/category/helpers.php">
                            <span class="text-end">Next</span>
                            <strong class="d-block">Helpers »</strong>
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
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>