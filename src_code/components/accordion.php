<?php
$title = 'UX4G | Accordion';
$canonical = 'https://doc.ux4g.gov.in/components/accordion.php';

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
                            <li class="breadcrumb-item"><a href="/category/components.php">Components</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Accordion</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="col-12 col-sm-9">
                        <h1 class="mb-30"> Accordion</h1>
                        <p>Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.
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

                                                    <h2>How it works? <a href="" id="How-it-works?"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                            <p>The accordion is collapsible because <a
                                                            href="/components/collapse.php">collapse</a> is used internally. Add the <code>.open</code> class to the <code>.accordion</code> in order to render an extended accordion.</p>
                                                    
                                                    <blockquote class="blockquote mt-20">
                                                        <div class="bd-callout bd-callout-info">The animation effect of
                                                            this component is dependent on the prefers-reduced-motion
                                                            media query. See the [reduced motion section of our
                                                            accessibility documentation](/).</div>
                                                    </blockquote>
                                                    <h2 class="mt-20">Example <a href="" id="Example"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <!-- code copy -->

                                                    <div class="code_bg rounded position-relative p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton1"
                                                            onclick="copyToClipboard('copyText1', 'copyButton1')"><i
                                                                class="fa fa-copy" id="iconCopied1"></i></button>
                                                        <div id="copyText1">
<pre><code>
&lt;div class=&quot;accordion&quot; id=&quot;accordionExample&quot;&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingOne&quot;&gt;
      &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
        Accordion Item #1
      &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div id=&quot;collapseOne&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;headingOne&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;
      &lt;strong&gt;The accordion body of the first item is this.&lt;/strong&gt; Until the collapse plugin adds the relevant classes that we use to style each piece, it is displayed by default. Through CSS transitions, these classes regulate both the general appearance and the showing and concealing of elements. With custom CSS or by modifying our default variables, you can change any of this. Almost any HTML can be placed inside the.accordion-body, however the transition does restrict overflow.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingTwo&quot;&gt;
      &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
        Accordion Item #2
      &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div id=&quot;collapseTwo&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;headingTwo&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;
     &lt;strong&gt; This is the body of the second item's accordion.&lt;/strong&gt; Prior to the collapse plugin adding the relevant classes that we need to style each piece, it is by default hidden. Through CSS transitions, these classes regulate both the general appearance and the showing and concealing of elements. With custom CSS or by modifying our default variables, it is possible to change any of this. Almost any HTML can be placed inside the .accordion-body, however the transition does restrict overflow.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingThree&quot;&gt;
      &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;
        Accordion Item #3
      &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div id=&quot;collapseThree&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;headingThree&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;
      &lt;strong&gt;The accordion body of the third piece is this.&lt;/strong&gt; Until the collapse plugin adds the relevant classes that needs to style each piece, it is hidden by default. The general appearance as well as the showing and concealing using CSS transitions are controlled by these classes. You can change any of this by changing our default settings or adding your own CSS. It's also important to remember that almost any HTML can be placed inside the .accordion-body, albeit the transition does restrict overflow.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                                                        </div>
                                                    </div>

                                                    <!-- code end -->

                                                    <!-- RESULT -->
                                                    <h5 class="result m-0">
                                                        RESULT
                                                    </h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div class="bd-example">
                                                            <div class="accordion" id="accordionExample">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingOne"><button
                                                                            class="accordion-button" type="button"
                                                                            data-bs-toggle="collapse"
                                                                            data-bs-target="#collapseOne"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseOne">Accordion Item
                                                                            #1</button></h2>
                                                                    <div id="collapseOne"
                                                                        class="accordion-collapse collapse show"
                                                                        aria-labelledby="headingOne"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                        <strong>The accordion body of the first item is this.</strong> Until the collapse plugin adds the relevant classes that we use to style each piece, it is displayed by default. Through CSS transitions, these classes regulate both the general appearance and the showing and concealing of elements. With custom CSS or by modifying our default variables, you can change any of this. Almost any HTML can be placed inside the <code>.accordion-body</code>, however the transition does restrict overflow.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingTwo"><button
                                                                            class="accordion-button collapsed"
                                                                            type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapseTwo"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapseTwo">Accordion Item
                                                                            #2</button></h2>
                                                                    <div id="collapseTwo"
                                                                        class="accordion-collapse collapse"
                                                                        aria-labelledby="headingTwo"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                        <strong>This is the body of the second item's accordion.</strong> Prior to the collapse plugin adding the relevant classes that we need to style each piece, it is by default hidden. Through CSS transitions, these classes regulate both the general appearance and the showing and concealing of elements. With custom CSS or by modifying our default variables, it is possible to change any of this. Almost any HTML can be placed inside the <code>.accordion-body</code>, however the transition does restrict overflow.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingThree">
                                                                        <button class="accordion-button collapsed"
                                                                            type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapseThree"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapseThree">Accordion Item
                                                                            #3</button>
                                                                    </h2>
                                                                    <div id="collapseThree"
                                                                        class="accordion-collapse collapse"
                                                                        aria-labelledby="headingThree"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                        <strong>The accordion body of the third piece is this.</strong> Until the collapse plugin adds the relevant classes that needs to style each piece, it is hidden by default. The general appearance as well as the showing and concealing using CSS transitions are controlled by these classes. You can change any of this by changing our default settings or adding your own CSS. It's also important to remember that almost any HTML can be placed inside the <code>.accordion-body</code>, albeit the transition does restrict overflow.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- RESULT end -->
                                                    <h2 class="mt-20">Flush <a href="" id="Flush"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>
                                                    To render accordions edge-to-edge with their parent container, add the class <code>.accordion-flush</code> to eliminate the default background color, some <code>borders</code>, and some <code>rounded</code> corners.
                                                    </p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton2"
                                                            onclick="copyToClipboard('copyText2', 'copyButton2')"><i
                                                                class="fa fa-copy" id="iconCopied2"></i></button>
                                                        <div id="copyText2">
                                                            <pre aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion accordion-flush</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordionFlushExample</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-item</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h2</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-header</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">flush-headingOne</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-button collapsed</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">collapse</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-target</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#flush-collapseOne</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-expanded</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">false</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-controls</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">flush-collapseOne</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">        Accordion Item #1</span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h2</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">flush-collapseOne</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-collapse collapse</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-labelledby</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">flush-headingOne</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-parent</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#accordionFlushExample</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-body</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Placeholder content for this accordion, which is intended to demonstrate the </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">code</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.accordion-flush</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">code</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"> class. This is the first item's accordion body.</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-item</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h2</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-header</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">flush-headingTwo</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-button collapsed</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">collapse</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-target</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#flush-collapseTwo</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-expanded</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">false</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-controls</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">flush-collapseTwo</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">        Accordion Item #2</span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h2</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">flush-collapseTwo</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-collapse collapse</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-labelledby</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">flush-headingTwo</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-parent</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#accordionFlushExample</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-body</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Placeholder content for this accordion, which is intended to demonstrate the </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">code</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.accordion-flush</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">code</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-item</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h2</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-header</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">flush-headingThree</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-button collapsed</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-toggle</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">collapse</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-target</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#flush-collapseThree</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-expanded</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">false</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-controls</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">flush-collapseThree</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">        Accordion Item #3</span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h2</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">flush-collapseThree</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-collapse collapse</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-labelledby</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">flush-headingThree</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-parent</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#accordionFlushExample</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">accordion-body</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Placeholder content for this accordion, which is intended to demonstrate the </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">code</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">.accordion-flush</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">code</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain" style="display: inline-block;">
</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <!-- RESULT -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <div class="accordion accordion-flush"
                                                                    id="accordionFlushExample">
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header"
                                                                            id="flush-headingOne"><button
                                                                                class="accordion-button collapsed"
                                                                                type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#flush-collapseOne"
                                                                                aria-expanded="false"
                                                                                aria-controls="flush-collapseOne">Accordion
                                                                                Item #1</button></h2>
                                                                        <div id="flush-collapseOne"
                                                                            class="accordion-collapse collapse"
                                                                            aria-labelledby="flush-headingOne"
                                                                            data-bs-parent="#accordionFlushExample">
                                                                            <div class="accordion-body">Placeholder
                                                                                content for this accordion, which is
                                                                                intended to demonstrate the
                                                                                <code>.accordion-flush</code> class.
                                                                                This is the first item's accordion body.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header"
                                                                            id="flush-headingTwo"><button
                                                                                class="accordion-button collapsed"
                                                                                type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#flush-collapseTwo"
                                                                                aria-expanded="false"
                                                                                aria-controls="flush-collapseTwo">Accordion
                                                                                Item #2</button></h2>
                                                                        <div id="flush-collapseTwo"
                                                                            class="accordion-collapse collapse"
                                                                            aria-labelledby="flush-headingTwo"
                                                                            data-bs-parent="#accordionFlushExample">
                                                                            <div class="accordion-body">Placeholder
                                                                                content for this accordion, which is
                                                                                intended to demonstrate the
                                                                                <code>.accordion-flush</code> class.
                                                                                This is the second item's accordion
                                                                                body. Let's imagine this being filled
                                                                                with some actual content.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header"
                                                                            id="flush-headingThree"><button
                                                                                class="accordion-button collapsed"
                                                                                type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#flush-collapseThree"
                                                                                aria-expanded="false"
                                                                                aria-controls="flush-collapseThree">Accordion
                                                                                Item #3</button></h2>
                                                                        <div id="flush-collapseThree"
                                                                            class="accordion-collapse collapse"
                                                                            aria-labelledby="flush-headingThree"
                                                                            data-bs-parent="#accordionFlushExample">
                                                                            <div class="accordion-body">Placeholder
                                                                                content for this accordion, which is
                                                                                intended to demonstrate the
                                                                                <code>.accordion-flush</code> class.
                                                                                This is the third item's accordion body.
                                                                                Nothing more exciting happening here in
                                                                                terms of content, but just filling up
                                                                                the space to make it look, at least at
                                                                                first glance, a bit more representative
                                                                                of how this would look in a real-world
                                                                                application.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- RESULT end -->
                                                    <h2 class="mt-20">Always Open <a href="" id="Always-Open"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>
                                                    Omit the <code>data-bs-parent</code> attribute. To keep accordion items open when another item is opened, use the <code>.accordion-collapse</code> style.
                                                    </p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton3"
                                                            onclick="copyToClipboard('copyText3', 'copyButton3')"><i
                                                                class="fa fa-copy" id="iconCopied3"></i></button>
<div id="copyText3">
    <pre><code><pre><code>
&lt;div class=&quot;accordion&quot; id=&quot;accordionExample&quot;&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingOne&quot;&gt;
      &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
        Accordion Item #1
      &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div id=&quot;collapseOne&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;headingOne&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;
      &lt;strong&gt;The accordion body of the first item is this.&lt;/strong&gt; Until the collapse plugin adds the relevant classes that we use to style each piece, it is displayed by default. Through CSS transitions, these classes regulate both the general appearance and the showing and concealing of elements. With custom CSS or by modifying our default variables, you can change any of this. Almost any HTML can be placed inside the.accordion-body, however the transition does restrict overflow.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingTwo&quot;&gt;
      &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
        Accordion Item #2
      &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div id=&quot;collapseTwo&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;headingTwo&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;
     &lt;strong&gt; This is the body of the second item's accordion.&lt;/strong&gt; Prior to the collapse plugin adding the relevant classes that we need to style each piece, it is by default hidden. Through CSS transitions, these classes regulate both the general appearance and the showing and concealing of elements. With custom CSS or by modifying our default variables, it is possible to change any of this. Almost any HTML can be placed inside the .accordion-body, however the transition does restrict overflow.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingThree&quot;&gt;
      &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;
        Accordion Item #3
      &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div id=&quot;collapseThree&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;headingThree&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;
      &lt;strong&gt;The accordion body of the third piece is this.&lt;/strong&gt; Until the collapse plugin adds the relevant classes that needs to style each piece, it is hidden by default. The general appearance as well as the showing and concealing using CSS transitions are controlled by these classes. You can change any of this by changing our default settings or adding your own CSS. It's also important to remember that almost any HTML can be placed inside the .accordion-body, albeit the transition does restrict overflow.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre></code></pre>
</div>
                                                    </div>
                                                    <!-- code end -->
                                                    <!-- RESULT -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        
                                                            
                                                                <div class="accordion"
                                                                    id="accordionPanelsStayOpenExample">
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header"
                                                                            id="panelsStayOpen-headingOne"><button
                                                                                class="accordion-button" type="button"
                                                                                data-bs-toggle="collapse"
                                                                                data-bs-target="#panelsStayOpen-collapseOne"
                                                                                aria-expanded="true"
                                                                                aria-controls="panelsStayOpen-collapseOne">Accordion
                                                                                Item #1</button></h2>
                                                                        <div id="panelsStayOpen-collapseOne"
                                                                            class="accordion-collapse collapse show"
                                                                            aria-labelledby="panelsStayOpen-headingOne">
                                                                            <div class="accordion-body">
                                                                            <strong>The accordion body of the first item is this.</strong> Until the collapse plugin adds the relevant classes that we use to style each piece, it is displayed by default. Through CSS transitions, these classes regulate both the general appearance and the showing and concealing of elements. With custom CSS or by modifying our default variables, you can change any of this. Almost any HTML can be placed inside the <code>.accordion-body</code>, however the transition does restrict overflow.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header"
                                                                            id="panelsStayOpen-headingTwo"><button
                                                                                class="accordion-button collapsed"
                                                                                type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#panelsStayOpen-collapseTwo"
                                                                                aria-expanded="false"
                                                                                aria-controls="panelsStayOpen-collapseTwo">Accordion
                                                                                Item #2</button></h2>
                                                                        <div id="panelsStayOpen-collapseTwo"
                                                                            class="accordion-collapse collapse"
                                                                            aria-labelledby="panelsStayOpen-headingTwo">
                                                                            <div class="accordion-body">
                                                                            <strong>This is the body of the second item's accordion.</strong> Prior to the collapse plugin adding the relevant classes that we need to style each piece, it is by default hidden. Through CSS transitions, these classes regulate both the general appearance and the showing and concealing of elements. With custom CSS or by modifying our default variables, it is possible to change any of this. Almost any HTML can be placed inside the <code>.accordion-body</code>, however the transition does restrict overflow.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header"
                                                                            id="panelsStayOpen-headingThree"><button
                                                                                class="accordion-button collapsed"
                                                                                type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#panelsStayOpen-collapseThree"
                                                                                aria-expanded="false"
                                                                                aria-controls="panelsStayOpen-collapseThree">Accordion
                                                                                Item #3</button></h2>
                                                                        <div id="panelsStayOpen-collapseThree"
                                                                            class="accordion-collapse collapse"
                                                                            aria-labelledby="panelsStayOpen-headingThree">
                                                                            <div class="accordion-body">
                                                                            <strong>The accordion body of the third piece is this.</strong> Until the collapse plugin adds the relevant classes that needs to style each piece, it is hidden by default. The general appearance as well as the showing and concealing using CSS transitions are controlled by these classes. You can change any of this by changing our default settings or adding your own CSS. It's also important to remember that almost any HTML can be placed inside the <code>.accordion-body</code>, albeit the transition does restrict overflow.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            
                                                       
                                                    </div>
                                                    <!-- RESULT end -->
                                                    <h2 class="mt-20">Accessibility <a href="" id="Accessibility"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>Please read the <a
                                                            href="/components/collapse.php#Accessibility">collapse
                                                            accessibility section</a> for more
                                                        information.</p>
                                                    <h2>CSS <a href="" id="CSS" class="opacity-0 hover-1">#</a></h2>
                                                    <h2>Variables <a href="" id="Variables"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <small
                                                        class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Added
                                                        in v1.0.0</small>
                                                    <p>
                                                    As part of UX4G’s evolving CSS <code>variables</code> approach, accordions now use local CSS <code>variables</code> on .accordion for enhanced real-time customization. Values for the CSS <code>variables</code> are set via Sass, so Sass customization is still supported, too.
                                                    </p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton4"
                                                            onclick="copyToClipboard('copyText4', 'copyButton4')"><i
                                                                class="fa fa-copy" id="iconCopied4"></i></button>
                                                        <pre id="copyText4"><code>  --#{$prefix}accordion-color: #{$accordion-color};
  --#{$prefix}accordion-bg: #{$accordion-bg};
  --#{$prefix}accordion-transition: #{$accordion-transition};
  --#{$prefix}accordion-border-color: #{$accordion-border-color};
  --#{$prefix}accordion-border-width: #{$accordion-border-width};
  --#{$prefix}accordion-border-radius: #{$accordion-border-radius};
  --#{$prefix}accordion-inner-border-radius: #{$accordion-inner-border-radius};
  --#{$prefix}accordion-btn-padding-x: #{$accordion-button-padding-x};
  --#{$prefix}accordion-btn-padding-y: #{$accordion-button-padding-y};
  --#{$prefix}accordion-btn-color: #{$accordion-button-color};
  --#{$prefix}accordion-btn-bg: #{$accordion-button-bg};
  --#{$prefix}accordion-btn-icon: #{escape-svg($accordion-button-icon)};
  --#{$prefix}accordion-btn-icon-width: #{$accordion-icon-width};
  --#{$prefix}accordion-btn-icon-transform: #{$accordion-icon-transform};
  --#{$prefix}accordion-btn-icon-transition: #{$accordion-icon-transition};
  --#{$prefix}accordion-btn-active-icon: #{escape-svg($accordion-button-active-icon)};
  --#{$prefix}accordion-btn-focus-border-color: #{$accordion-button-focus-border-color};
  --#{$prefix}accordion-btn-focus-box-shadow: #{$accordion-button-focus-box-shadow};
  --#{$prefix}accordion-body-padding-x: #{$accordion-body-padding-x};
  --#{$prefix}accordion-body-padding-y: #{$accordion-body-padding-y};
  --#{$prefix}accordion-active-color: #{$accordion-button-active-color};
  --#{$prefix}accordion-active-bg: #{$accordion-button-active-bg};
  </code></pre>
                                                    </div>
                                                    <!-- code end -->

                                                    <h2 class="mt-20">Sass variables <a href="" id="Sass-variables"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton5"
                                                            onclick="copyToClipboard('copyText5', 'copyButton5')"><i
                                                                class="fa fa-copy" id="iconCopied5"></i></button>
                                                        <pre id="copyText5"><code>$accordion-padding-y:                     1rem;
$accordion-padding-x:                     1.25rem;
$accordion-color:                         $body-color; // Sass variable because of $accordion-button-icon
$accordion-bg:                            $body-bg;
$accordion-border-width:                  $border-width;
$accordion-border-color:                  var(--#{$prefix}border-color);
$accordion-border-radius:                 $border-radius;
$accordion-inner-border-radius:           subtract($accordion-border-radius, $accordion-border-width);

$accordion-body-padding-y:                $accordion-padding-y;
$accordion-body-padding-x:                $accordion-padding-x;

$accordion-button-padding-y:              $accordion-padding-y;
$accordion-button-padding-x:              $accordion-padding-x;
$accordion-button-color:                  $accordion-color;
$accordion-button-bg:                     var(--#{$prefix}accordion-bg);
$accordion-transition:                    $btn-transition, border-radius .15s ease;
$accordion-button-active-bg:              tint-color($component-active-bg, 90%);
$accordion-button-active-color:           shade-color($primary, 10%);

$accordion-button-focus-border-color:     $input-focus-border-color;
$accordion-button-focus-box-shadow:       $btn-focus-box-shadow;

$accordion-icon-width:                    1.25rem;
$accordion-icon-color:                    $accordion-button-color;
$accordion-icon-active-color:             $accordion-button-active-color;
$accordion-icon-transition:               transform .2s ease-in-out;
$accordion-icon-transform:                rotate(-180deg);

$accordion-button-icon:         url(&quot;data:image/svg+xml,&lt;svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{$accordion-icon-color}'&gt;&lt;path fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/&gt;&lt;/svg&gt;&quot;);
$accordion-button-active-icon:  url(&quot;data:image/svg+xml,&lt;svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{$accordion-icon-active-color}'&gt;&lt;path fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/&gt;&lt;/svg&gt;&quot;);</code></pre>
                                                    </div>
                                                    <!-- code end -->


















                                                </div>
                                            </div>
                                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                                <div class="right_side">
                                                    <ul class="p-0">
                                                        <li><a href="#How-it-works?">How it works?</a></li>
                                                        <li><a href="#Example">Example</a></li>
                                                        <li><a href="#Flush">Flush</a></li>
                                                        <li><a href="#Always-Open">Always Open</a></li>
                                                        <li><a href="#Accessibility">Accessibility</a></li>
                                                        <li><a href="#CSS">CSS</a></li>
                                                        <li><a href="#Variables">Variables</a></li>
                                                        <li><a href="#Sass-variables">Sass variables</a></li>

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
                            <a class="page-link border-0" href="/category/components.php">
                                <span>Previous</span>
                                <strong class="d-block">« Components</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/components/alerts.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Alerts »</strong>
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