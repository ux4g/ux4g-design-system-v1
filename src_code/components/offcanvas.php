<?php
$title = 'UX4G | Offcanvas';
$canonical = 'https://doc.ux4g.gov.in/components/offcanvas.php';

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
            <div class="body_raper_content">
                <div class="pl-10 pr-10">
                    <!-- breadcrumb -->
                    <nav class="mb-30 mt-50" style="--bs-breadcrumb-divider: url(/assets/img/icon/chevron.svg)"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">
                                    <i class="fa fa-home"></i>
                                </a></li>
                            <li class="breadcrumb-item"><a href="/category/components.php">Components</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Offcanvas</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="col-12 col-sm-9">
                        <h1 class="mb-30">Offcanvas</h1>
                        <p>Build hidden sidebars into your project for navigation, shopping carts, and more with a few
                            classes and our JavaScript plugin.</p>
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

                                                    <h2 class="mt-20">How it works<a href="" id="How-it-works"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>Offcanvas is a sidebar component that can be toggled via
                                                        JavaScript to appear from the left, right, top, or bottom edge
                                                        of the viewport. Buttons or anchors are used as triggers that
                                                        are attached to specific elements you toggle, and
                                                        <code>data</code> attributes are used to invoke our JavaScript.
                                                    </p>
                                                    <blockquote class="blockquote"
                                                        style="margin: 0 0 1rem; background-color: rgb(0 170 255 / 8%); padding:15px">
                                                        <div class="bd-callout bd-callout-info">
                                                            <p>The animation effect of this component is dependent on
                                                                the <code>prefers-reduced-motion</code> media query.</p>

                                                        </div>
                                                    </blockquote>
                                                    <h2>Examples <a href="" id="Examples" class="opacity-0 hover-1"></a>
                                                    </h2>
                                                    <h3 class="mt-20">Offcanvas components<a href=""
                                                            id="Offcanvas-components" class="opacity-0 hover-1">#</a>
                                                    </h3>

                                                    <p>Below is an offcanvas example that is shown by default (via
                                                        <code>.show</code> on <code>.offcanvas</code>). Offcanvas
                                                        includes support for a header with a close button and an
                                                        optional body class for some initial <code>padding</code>. We
                                                        suggest that you include offcanvas headers with dismiss actions
                                                        whenever possible, or provide an explicit dismiss action.
                                                    </p>
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton1"
                                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                                        </button>

                                                        <div id="copyText1">
                                                            <pre><code>&lt;div class=&quot;offcanvas offcanvas-start show&quot; tabindex=&quot;-1&quot; id=&quot;offcanvas&quot; aria-labelledby=&quot;offcanvasLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasLabel&quot;&gt;Offcanvas&lt;/h5&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>

                                                    </div>
                                                </div>


                                                <h2 class="mt-20">Live demo<a href="" id="Live-demo"
                                                        class="opacity-0 hover-1">#</a></h2>

                                                <p>Use the buttons below to show and hide an offcanvas element via
                                                    JavaScript that toggles the |<code>.show</code> class on an element
                                                    with the <code>.offcanvas</code> class.</p>

                                                <ul class="un_order_list">
                                                    <li><code>.offcanvas</code> hides content (default)</li>
                                                    <li><code>.offcanvas.show</code> shows content</li>
                                                </ul>

                                                <p>You can use a link with the <code>href</code> attribute, or a button
                                                    with the <code>data-bs-target</code> attribute. In both cases,
                                                    <code>the data-bs-toggle="offcanvas"</code> is required.
                                                </p>

                                                <!-- code -->
                                                <div class="code_bg rounded p-3">

                                                    <button class="btn btn-outline-primary float-end" id="copyButton3"
                                                        onclick="copyToClipboard('copyText3', 'copyButton3')">
                                                        <i class="fa fa-copy" id="iconCopied3"></i>
                                                    </button>
                                                    <pre id="copyText3"><code>&lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;offcanvas&quot; href=&quot;#offcanvasExample&quot; role=&quot;button&quot; aria-controls=&quot;offcanvasExample&quot;&gt;
  Link with href
&lt;/a&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasExample&quot; aria-controls=&quot;offcanvasExample&quot;&gt;
  Button with data-bs-target
&lt;/button&gt;

&lt;div class=&quot;offcanvas offcanvas-start&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasExample&quot; aria-labelledby=&quot;offcanvasExampleLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasExampleLabel&quot;&gt;Offcanvas&lt;/h5&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;div&gt;
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    &lt;/div&gt;
    &lt;div class=&quot;dropdown mt-3&quot;&gt;
      &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot;&gt;
        Dropdown button
      &lt;/button&gt;
      &lt;ul class=&quot;dropdown-menu&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>

                                                </div>

                                                <h5 class="result m-0">RESULT</h5>

                                                <div class="code_bg rounded p-3">
                                                    <div class="bd-example">
                                                        <a class="btn btn-primary" data-bs-toggle="offcanvas"
                                                            href="#offcanvasExample" role="button"
                                                            aria-controls="offcanvasExample">
                                                            Link with href
                                                        </a>
                                                        <button class="btn btn-primary" type="button"
                                                            data-bs-toggle="offcanvas"
                                                            data-bs-target="#offcanvasExample"
                                                            aria-controls="offcanvasExample">
                                                            Button with data-bs-target
                                                        </button>

                                                        <div class="offcanvas offcanvas-start" tabindex="-1"
                                                            id="offcanvasExample"
                                                            aria-labelledby="offcanvasExampleLabel">
                                                            <div class="offcanvas-header">
                                                                <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                                                                    Offcanvas</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="offcanvas"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="offcanvas-body">
                                                                <div class="">
                                                                    Some text as placeholder. In real life you can have
                                                                    the elements you have chosen. Like, text, images,
                                                                    lists, etc.
                                                                </div>
                                                                <div class="dropdown mt-3">
                                                                    <button class="btn btn-secondary dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown">
                                                                        Dropdown button
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="#">Action</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Another
                                                                                action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Something
                                                                                else here</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <h2 class="mt-20">Dark offcanvas <a href="" id="Dark-offcanvas"
                                                        class="opacity-0 hover-1">#</a></h2>

                                                <p>Change the appearance of offcanvases with utilities to better match
                                                    them to different contexts like dark navbars. Here we add
                                                    <code>.text-bg-dark</code> to the <code>.offcanvas</code> and
                                                    <code>.btn-close-white</code> to <code>.btn-close</code> for proper
                                                    styling with a dark offcanvas. If you have dropdowns within,
                                                    consider also adding <code>.dropdown-menu-dark</code> to
                                                    <code>.dropdown-menu</code>.
                                                </p>

                                                <div class="code_bg rounded p-3">
                                                    <button class="btn btn-outline-primary float-end" id="copyButton4"
                                                        onclick="copyToClipboard('copyText4', 'copyButton4')">
                                                        <i class="fa fa-copy" id="iconCopied4"></i>
                                                    </button>
                                                    <div id="copyText4">
                                                        <pre
                                                            aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">bd-example bd-example-offcanvas p-0 bg-light overflow-hidden</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvas offcanvas-start text-bg-dark</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">tabindex</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">-1</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvasDark</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-labelledby</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvasDarkLabel</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvas-header</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h5</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvas-title</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvasDarkLabel</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Offcanvas</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h5</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn-close btn-close-white</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-dismiss</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvasDark</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-label</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Close</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvas-body</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">p</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Place offcanvas content here.</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">p</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                    </div>
                                                </div>




                                                <h2 class="mt-20">Body scrolling <a href="" id="Body-scrolling"
                                                        class="opacity-0 hover-1">#</a></h2>
                                                <p>Scrolling the <code>&lt;body&gt;</code> element is disabled when an
                                                    offcanvas and its backdrop are visible. Use the data-bs-scroll
                                                    attribute to enable <code>&lt;body&gt;</code> scrolling.</p>


                                                <div class="code_bg rounded p-3 mt-20">
                                                    <button class="btn btn-outline-primary float-end" id="copyButton4"
                                                        onclick="copyToClipboard('copyText4', 'copyButton4')">
                                                        <i class="fa fa-copy" id="iconCopied4"></i>
                                                    </button>
                                                    <div id="copyText4">
                                                        <pre
                                                            aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvas offcanvas-start</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-scroll</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">true</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-backdrop</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">false</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">tabindex</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">-1</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvasScrolling</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-labelledby</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvasScrollingLabel</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvas-header</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h5</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvas-title</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvasScrollingLabel</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Offcanvas with body scrolling</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h5</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn-close</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-dismiss</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvas</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-label</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Close</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvas-body</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">p</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Try scrolling the rest of the page to see this option in action.</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">p</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                    </div>
                                                </div>

                                                <h5 class="result m-0">RESULT</h5>

                                                <div class="code_bg rounded p-3">
                                                    <div>
                                                        <button class="btn btn-primary" type="button"
                                                            data-bs-toggle="offcanvas"
                                                            data-bs-target="#offcanvasScrolling"
                                                            aria-controls="offcanvasScrolling">Enable body
                                                            scrolling</button>
                                                        <div>
                                                            <div>
                                                                <div class="offcanvas offcanvas-start"
                                                                    data-bs-scroll="true" data-bs-backdrop="false"
                                                                    tabindex="-1" id="offcanvasScrolling"
                                                                    aria-labelledby="offcanvasScrollingLabel">
                                                                    <div class="offcanvas-header">
                                                                        <h5 class="offcanvas-title"
                                                                            id="offcanvasScrollingLabel">Offcanvas with
                                                                            body
                                                                            scrolling</h5><button type="button"
                                                                            class="btn-close"
                                                                            data-bs-dismiss="offcanvas"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="offcanvas-body">
                                                                        <p>Try scrolling the rest of the page to see
                                                                            this
                                                                            option in action.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h2 class="mt-20">Body scrolling and backdrop <a href=""
                                                        id="Body-scrolling-and-backdrop" class="opacity-0 hover-1">#</a>
                                                </h2>
                                                <p>You can also enable <code>&lt;body&gt;</code> scrolling with a
                                                    visible backdrop.</p>

                                                <!-- code -->
                                                <div class="code_bg rounded p-3">
                                                    <button class="btn btn-outline-primary float-end" id="copyButton5"
                                                        onclick="copyToClipboard('copyText5', 'copyButton5')">
                                                        <i class="fa fa-copy" id="iconCopied5"></i>
                                                    </button>
                                                    <div id="copyText5">
                                                        <pre id="copyText5"><code>&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasWithBothOptions&quot; aria-controls=&quot;offcanvasWithBothOptions&quot;&gt;Enable both scrolling &amp; backdrop&lt;/button&gt;

&lt;div class=&quot;offcanvas offcanvas-start&quot; data-bs-scroll=&quot;true&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasWithBothOptions&quot; aria-labelledby=&quot;offcanvasWithBothOptionsLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasWithBothOptionsLabel&quot;&gt;Backdrop with scrolling&lt;/h5&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;p&gt;Try scrolling the rest of the page to see this option in action.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                    </div>
                                                </div>
                                                <h5 class="result m-0">RESULT</h5>
                                                <!-- code -->
                                                <div class="code_bg rounded p-3">
                                                    <div>
                                                        <button class="btn btn-primary" type="button"
                                                            data-bs-toggle="offcanvas"
                                                            data-bs-target="#offcanvasWithBothOptions"
                                                            aria-controls="offcanvasWithBothOptions">Enable both
                                                            scrolling & backdrop</button>

                                                        <div class="offcanvas offcanvas-start" data-bs-scroll="true"
                                                            tabindex="-1" id="offcanvasWithBothOptions"
                                                            aria-labelledby="offcanvasWithBothOptionsLabel">
                                                            <div class="offcanvas-header">
                                                                <h5 class="offcanvas-title"
                                                                    id="offcanvasWithBothOptionsLabel">Backdrop with
                                                                    scrolling</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="offcanvas"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="offcanvas-body">
                                                                <p>Try scrolling the rest of the page to see this option
                                                                    in action.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- code end -->

                                                <h2 class="mt-20">Static backdrop <a href="" id="Static-backdrop"
                                                        class="opacity-0 hover-1">#</a></h2>
                                                <p>When backdrop is set to static, the offcanvas will not close when
                                                    clicking outside of it.</p>

                                                <div class="code_bg rounded p-3">
                                                    <button class="btn btn-outline-primary float-end" id="copyButton6"
                                                        onclick="copyToClipboard('copyText6', 'copyButton6')">
                                                        <i class="fa fa-copy" id="iconCopied6"></i>
                                                    </button>
                                                    <div id="copyText6">
                                                        <pre>
<code>&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#staticBackdrop&quot; aria-controls=&quot;staticBackdrop&quot;&gt;
  Toggle static offcanvas
&lt;/button&gt;

&lt;div class=&quot;offcanvas offcanvas-start&quot; data-bs-backdrop=&quot;static&quot; tabindex=&quot;-1&quot; id=&quot;staticBackdrop&quot; aria-labelledby=&quot;staticBackdropLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;staticBackdropLabel&quot;&gt;Offcanvas&lt;/h5&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;div&gt;
      I will not close if you click outside of me.
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code>
                                                        </pre>
                                                    </div>
                                                </div>
                                                <h5 class="result m-0">RESULT</h5>
                                                <!-- code -->
                                                <div class="code_bg rounded p-3">
                                                    <div><button class="btn btn-primary" type="button"
                                                            data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
                                                            aria-controls="staticBackdrop">
                                                            Toggle static offcanvas
                                                        </button>

                                                        <div class="offcanvas offcanvas-start" data-bs-backdrop="static"
                                                            tabindex="-1" id="staticBackdrop"
                                                            aria-labelledby="staticBackdropLabel">
                                                            <div class="offcanvas-header">
                                                                <h5 class="offcanvas-title" id="staticBackdropLabel">
                                                                    Offcanvas</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="offcanvas"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="offcanvas-body">
                                                                <div>
                                                                    I will not close if you click outside of me.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- code end -->

                                                <h2 class="mt-20">Responsive <a href="" id="Responsive"
                                                        class="opacity-0 hover-1">#</a></h2>
                                                <small
                                                    class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Added
                                                    in v1.0.0</small>
                                                <p>Responsive offcanvas classes hide content outside the viewport from a
                                                    specified breakpoint and down. Above that breakpoint, the contents
                                                    within will behave as usual. For example, <code>.offcanvas-lg</code>
                                                    hides content in an offcanvas below the <code>lg</code> breakpoint,
                                                    but shows the content above the <code>lg</code> breakpoint.</p>

                                                <div class="code_bg rounded p-3">
                                                    <button class="btn btn-outline-primary float-end" id="copyButton7"
                                                        onclick="copyToClipboard('copyText7', 'copyButton7')">
                                                        <i class="fa fa-copy" id="iconCopied7"></i>
                                                    </button>
                                                    <div id="copyText7">
                                                        <pre><code>&lt;button class=&quot;btn btn-primary d-lg-none&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasResponsive&quot; aria-controls=&quot;offcanvasResponsive&quot;&gt;Toggle offcanvas&lt;/button&gt;

&lt;div class=&quot;alert alert-info d-none d-lg-block&quot;&gt;Resize your browser to show the responsive offcanvas toggle.&lt;/div&gt;

&lt;div class=&quot;offcanvas-lg offcanvas-end&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasResponsive&quot; aria-labelledby=&quot;offcanvasResponsiveLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasResponsiveLabel&quot;&gt;Responsive offcanvas&lt;/h5&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasResponsive&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;p class=&quot;mb-0&quot;&gt;This is content within an &lt;code&gt;.offcanvas-lg&lt;/code&gt;.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                    </div>
                                                </div>

                                                <h5 class="result m-0">RESULT</h5>

                                                <!-- code -->
                                                <div class="code_bg rounded p-3">
                                                    <div>
                                                        <div>
                                                            <code><button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">Toggle offcanvas</button><div class="alert alert-info d-none d-lg-block">Resize your browser to show the responsive offcanvas toggle.</div><div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel"><div class="offcanvas-header"><h5 class="offcanvas-title" id="offcanvasResponsiveLabel">Responsive offcanvas</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button></div><div class="offcanvas-body"><p class="mb-0">This is content within an <code>.offcanvas-lg</code>.
                                                            </p>
                                                        </div>
                                                    </div></code>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- code end -->

                                        <p class="mt-20">Responsive offcanvas classes are available across for each
                                            breakpoint.</p>

                                        <ul class="un_order_list ">
                                            <li><code>.offcanvas</code></li>
                                            <li><code>.offcanvas-sm</code></li>
                                            <li><code>.offcanvas-md</code></li>
                                            <li><code>.offcanvas-lg</code></li>
                                            <li><code>.offcanvas-xl</code></li>
                                            <li><code>.offcanvas-xxl</code></li>
                                        </ul>

                                        <h2 class="mt-20">Placement <a href="" id="Placement"
                                                class="opacity-0 hover-1">#</a></h2>
                                        <p>There’s no default placement for offcanvas components, so you must add one of
                                            the modifier classes below.</p>
                                        <ul class="un_order_list ">
                                            <li><code>.offcanvas-start</code> places offcanvas on the left of the
                                                viewport (shown above)</li>
                                            <li><code>.offcanvas-end</code> places offcanvas on the right of the
                                                viewport</li>
                                            <li><code>offcanvas-top</code> places offcanvas on the top of the viewport
                                            </li>
                                            <li><code>.offcanvas-bottom</code> places offcanvas on the bottom of the
                                                viewport</li>
                                        </ul>
                                        <p>Try the top, right, and bottom examples out below.</p>

                                        <!-- code -->
                                        <div class="code_bg rounded p-3">
                                            <button class="btn btn-outline-primary float-end" id="copyButton8"
                                                onclick="copyToClipboard('copyText8', 'copyButton8')">
                                                <i class="fa fa-copy" id="iconCopied8"></i>
                                            </button>
                                            <div id="copyText8">
                                                <pre><code>&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasTop&quot; aria-controls=&quot;offcanvasTop&quot;&gt;Toggle top offcanvas&lt;/button&gt;

&lt;div class=&quot;offcanvas offcanvas-top&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasTop&quot; aria-labelledby=&quot;offcanvasTopLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasTopLabel&quot;&gt;Offcanvas top&lt;/h5&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                            </div>
                                        </div>

                                        <h5 class="result m-0">RESULT</h5>
                                        <!-- code -->
                                        <div class="code_bg rounded p-3">
                                            <div>
                                                <div>
                                                    <button class="btn btn-primary" type="button"
                                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                                                        aria-controls="offcanvasTop">Toggle top offcanvas</button>
                                                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop"
                                                        aria-labelledby="offcanvasTopLabel">
                                                        <div class="offcanvas-header">
                                                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Offcanvas
                                                                top</h5><button type="button" class="btn-close"
                                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                        </div>
                                                        <div class="offcanvas-body">...</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- code end -->


                                        <!-- code -->
                                        <div class="code_bg rounded p-3 mt-20">
                                            <button class="btn btn-outline-primary float-end" id="copyButton9"
                                                onclick="copyToClipboard('copyText9', 'copyButton9')">
                                                <i class="fa fa-copy" id="iconCopied9"></i>
                                            </button>
                                            <div id="copyText9">
                                                <pre><code>&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasRight&quot; aria-controls=&quot;offcanvasRight&quot;&gt;Toggle right offcanvas&lt;/button&gt;

&lt;div class=&quot;offcanvas offcanvas-end&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasRight&quot; aria-labelledby=&quot;offcanvasRightLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasRightLabel&quot;&gt;Offcanvas right&lt;/h5&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                            </div>
                                        </div>
                                        <!-- code end -->

                                        <h5 class="result m-0">RESULT</h5>

                                        <!-- code -->
                                        <div class="code_bg rounded p-3 ">
                                            <div>
                                                <div>
                                                    <button class="btn btn-primary" type="button"
                                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                        aria-controls="offcanvasRight">Toggle right offcanvas</button>
                                                    <div class="offcanvas offcanvas-end" tabindex="-1"
                                                        id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                                        <div class="offcanvas-header">
                                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">
                                                                Offcanvas right</h5><button type="button"
                                                                class="btn-close" data-bs-dismiss="offcanvas"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="offcanvas-body">...</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- code end -->

                                        <!-- code -->
                                        <div class="code_bg rounded p-3 mt-20">
                                            <button class="btn btn-outline-primary float-end" id="copyButton10"
                                                onclick="copyToClipboard('copyText10', 'copyButton10')">
                                                <i class="fa fa-copy" id="iconCopied10"></i>
                                            </button>
                                            <div id="copyText10">
                                                <pre><code>&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasBottom&quot; aria-controls=&quot;offcanvasBottom&quot;&gt;Toggle bottom offcanvas&lt;/button&gt;

&lt;div class=&quot;offcanvas offcanvas-bottom&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasBottom&quot; aria-labelledby=&quot;offcanvasBottomLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasBottomLabel&quot;&gt;Offcanvas bottom&lt;/h5&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body small&quot;&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                            </div>
                                        </div>
                                        <!-- code end -->

                                        <h5 class="result m-0">RESULT</h5>
                                        <!-- code -->
                                        <div class="code_bg rounded p-3">
                                            <div>
                                                <div>
                                                    <button class="btn btn-primary" type="button"
                                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                                        aria-controls="offcanvasBottom">Toggle bottom offcanvas</button>
                                                    <div class="offcanvas offcanvas-bottom" tabindex="-1"
                                                        id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                                                        <div class="offcanvas-header">
                                                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">
                                                                Offcanvas bottom</h5><button type="button"
                                                                class="btn-close" data-bs-dismiss="offcanvas"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="offcanvas-body small">...</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- code end -->

                                        <h2 class="mt-20">Accessibility <a href="" id="Accessibility"
                                                class="opacity-0 hover-1">#</a></h2>

                                        <p>Since the offcanvas panel is conceptually a modal dialog, be sure to add
                                            a<code>ria-labelledby="...</code>"—referencing the offcanvas title—to
                                            <code>.offcanvas</code>. Note that you don’t need to add
                                            <code>role="dialog"</code> since we already add it via JavaScript.
                                        </p>

                                        <h2 class="mt-20">CSS <a href="" id="CSS" class="opacity-0 hover-1">#</a></h2>
                                        <h3 class="mt-20">Variables <a href="" id="Variables"
                                                class="opacity-0 hover-1">#</a></h3>

                                        <small
                                            class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Added
                                            in v5.2.0</small>

                                        <p>As part of UX4G’s evolving CSS variables approach, offcanvas now uses local
                                            CSS variables on .offcanvas for enhanced real-time customization. Values for
                                            the CSS variables are set via Sass, so Sass customization is still
                                            supported, too.</p>

                                        <div class="code_bg rounded p-3">
                                            <button class="btn btn-outline-primary float-end" id="copyButton11"
                                                onclick="copyToClipboard('copyText11', 'copyButton11')">
                                                <i class="fa fa-copy" id="iconCopied11"></i>
                                            </button>
                                            <pre id="copyText11"><code>--#{$prefix}offcanvas-zindex: #{$zindex-offcanvas};
--#{$prefix}offcanvas-width: #{$offcanvas-horizontal-width};
--#{$prefix}offcanvas-height: #{$offcanvas-vertical-height};
--#{$prefix}offcanvas-padding-x: #{$offcanvas-padding-x};
--#{$prefix}offcanvas-padding-y: #{$offcanvas-padding-y};
--#{$prefix}offcanvas-color: #{$offcanvas-color};
--#{$prefix}offcanvas-bg: #{$offcanvas-bg-color};
--#{$prefix}offcanvas-border-width: #{$offcanvas-border-width};
--#{$prefix}offcanvas-border-color: #{$offcanvas-border-color};
--#{$prefix}offcanvas-box-shadow: #{$offcanvas-box-shadow};
--#{$prefix}offcanvas-transition: #{transform $offcanvas-transition-duration ease-in-out};
--#{$prefix}offcanvas-title-line-height: #{$offcanvas-title-line-height};</code></pre>
                                        </div>

                                        <h2 class="mt-20">Sass variables <a href="" id="Sass-variables"
                                                class="opacity-0 hover-1">#</a></h2>
                                        <div class="code_bg rounded p-3">
                                            <button class="btn btn-outline-primary float-end" id="copyButton12"
                                                onclick="copyToClipboard('copyText12', 'copyButton12')">
                                                <i class="fa fa-copy" id="iconCopied12"></i>
                                            </button>
                                            <pre id="copyText12"><code>$offcanvas-padding-y:               $modal-inner-padding;
$offcanvas-padding-x:               $modal-inner-padding;
$offcanvas-horizontal-width:        400px;
$offcanvas-vertical-height:         30vh;
$offcanvas-transition-duration:     .3s;
$offcanvas-border-color:            $modal-content-border-color;
$offcanvas-border-width:            $modal-content-border-width;
$offcanvas-title-line-height:       $modal-title-line-height;
$offcanvas-bg-color:                var(--#{$prefix}body-bg);
$offcanvas-color:                   var(--#{$prefix}body-color);
$offcanvas-box-shadow:              $modal-content-box-shadow-xs;
$offcanvas-backdrop-bg:             $modal-backdrop-bg;
$offcanvas-backdrop-opacity:        $modal-backdrop-opacity;</code></pre>
                                        </div>

                                        <h2 class="mt-20">Usage <a href="" id="Usage" class="opacity-0 hover-1">#</a>
                                        </h2>
                                        <p>The offcanvas plugin utilizes a few classes and attributes to handle the
                                            heavy lifting:</p>
                                        <ul class="un_order_list">
                                            <li>.offcanvas hides the content</li>
                                            <li>.offcanvas.show shows the content</li>
                                            <li>.offcanvas-start hides the offcanvas on the left</li>
                                            <li>.offcanvas-end hides the offcanvas on the right</li>
                                            <li>.offcanvas-top hides the offcanvas on the top</li>
                                            <li>.offcanvas-bottom hides the offcanvas on the bottom</li>
                                        </ul>

                                        <p>Add a dismiss button with the <code>data-bs-dismiss="offcanvas"</code>
                                            attribute, which triggers the JavaScript functionality. Be sure to use the
                                            <code>&lt;button&gt;</code> element with it for proper behavior across all
                                            devices.
                                        </p>

                                        <h3 class="mt-20">Via data attributes <a href="" id="Via-data-attributes"
                                                class="opacity-0 hover-1">#</a></h3>
                                        <h4 class="mt-20">Toggle <a href="" id="Toggle" class="opacity-0 hover-1">#</a>
                                        </h4>

                                        <p>Add <code>data-bs-toggle="offcanvas"</code> and a <code>data-bs-target</code>
                                            or <code>href</code> to the element to automatically assign control of one
                                            offcanvas element. The <code>data-bs-target</code> attribute accepts a CSS
                                            selector to apply the offcanvas to. Be sure to add the class
                                            <code>offcanvas</code> to the offcanvas element. If you’d like it to default
                                            open, add the additional class <code>show</code>.
                                        </p>
                                        <h3 class="mt-20">Dismiss <a href="" id="Dismiss"
                                                class="opacity-0 hover-1">#</a></h3>
                                        <p>Dismissal can be achieved with the <code>data</code> attribute on a button
                                            <strong>within the offcanvas</strong> as demonstrated below:
                                        </p>

                                        <div class="code_bg rounded p-3">
                                            <pre
                                                tabindex="0"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn-close</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-dismiss</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvas</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-label</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Close</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><br></span></code></pre>
                                        </div>

                                        <p>or on a button <strong>outside the offcanvas</strong> using the
                                            <code>data-bs-target</code> as demonstrated below:
                                        </p>

                                        <div class="code_bg rounded p-3">
                                            <pre
                                                tabindex="0"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn-close</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-dismiss</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">offcanvas</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-target</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#my-offcanvas</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-label</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Close</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><br></span></code></pre>
                                        </div>

                                        <div class="bd-callout bd-callout-warning blockquote_warning  mt-20">
                                            While both ways to dismiss an offcanvas are supported, keep in mind that
                                            dismissing from outside an offcanvas does not match the <a
                                                href="https://www.w3.org/WAI/ARIA/apg/patterns/dialogmodal/"
                                                target="_blank" rel="noopener noreferrer">ARIA Authoring Practices Guide
                                                dialog (modal) pattern</a>. Do this at your own risk.
                                        </div>


                                        <h2 class="mt-20">Via JavaScript <a href="" id="Via-JavaScript"
                                                class="opacity-0 hover-1">#</a></h2>
                                        <p>Enable manually with:</p>
                                        <!-- code -->
                                        <div class="code_bg rounded p-3">
                                            <button class="btn btn-outline-primary float-end" id="copyButton13"
                                                onclick="copyToClipboard('copyText13', 'copyButton13')">
                                                <i class="fa fa-copy" id="iconCopied13"></i>
                                            </button>
                                            <pre id="copyText13"
                                                tabindex="0"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">const offcanvasElementList = document.querySelectorAll('.offcanvas')</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">const offcanvasList = [...offcanvasElementList].map(offcanvasEl =&gt; new UX4G.Offcanvas(offcanvasEl))</span><br></span></code></pre>
                                        </div>

                                        <h2 class="mt-20">Options <a href="" id="Options"
                                                class="opacity-0 hover-1">#</a></h2>
                                        <p>As options can be passed via data attributes or JavaScript, you can append an
                                            option name to <code>data-bs-</code>, as in
                                            <code>data-bs-animation="{value}"</code>. Make sure to change the case type
                                            of the option name from “camelCase” to “kebab-case” when passing the options
                                            via data attributes. For example, use
                                            <code>data-bs-custom-class="beautifier"</code> instead of
                                            <code>data-bs-customClass="beautifier"</code>.
                                        </p>

                                        <p>As of UX4G, all components support an experimental reserved data attribute
                                            <code>data-bs-config</code> that can house simple component configuration as
                                            a JSON string. When an element has
                                            <code>data-bs-config='{"delay":0, "title":123}'</code> and
                                            <code>data-bs-title="456"</code> attributes, the final title value will be
                                            456 and the separate data attributes will override values given on
                                            <code>data-bs-config</code>. In addition, existing data attributes are able
                                            to house JSON values like
                                            <code>data-bs-delay='{"show":0,"hide":150}'</code>.
                                        </p>

                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped ">
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
                                                        <td><code>backdrop</code></td>
                                                        <td>boolean or the string <code>static</code></td>
                                                        <td><code>true</code></td>
                                                        <td>Apply a backdrop on body while offcanvas is open.
                                                            Alternatively, specify <code>static</code> for a backdrop
                                                            which doesn’t close the offcanvas when clicked.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>keyboard</code></td>
                                                        <td>boolean</td>
                                                        <td><code>true</code></td>
                                                        <td>Closes the offcanvas when escape key is pressed</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>scroll</code></td>
                                                        <td>boolean</td>
                                                        <td><code>false</code></td>
                                                        <td>Allow body scrolling while offcanvas is open</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h2 class="mt-20">Methods <a href="" id="Methods"
                                                class="opacity-0 hover-1">#</a></h2>

                                        <div class="bd-callout bd-callout-danger blockquote_danger  mt-20">
                                            <h4 class="anchor anchorWithStickyNavbar_node_modules-@docusaurus-theme-classic-lib-theme-Heading-styles-module"
                                                id="asynchronous-methods-and-transitions">Asynchronous methods and
                                                transitions <a href="#asynchronous-methods-and-transitions"
                                                    class="anchor-link"
                                                    aria-label="Link to this section: Asynchronous methods and transitions"></a><a
                                                    href="#asynchronous-methods-and-transitions" class="hash-link"
                                                    aria-label="Direct link to asynchronous-methods-and-transitions"
                                                    title="Direct link to asynchronous-methods-and-transitions">&ZeroWidthSpace;</a>
                                            </h4>
                                            <p>All API methods are <strong>asynchronous</strong> and start a
                                                <strong>transition</strong>. They return to the caller as soon as the
                                                transition is started but <strong>before it ends</strong>. In addition,
                                                a method call on a <strong>transitioning component will be
                                                    ignored</strong>.
                                            </p>

                                        </div>

                                        <p class="mt-20">Activates your content as an offcanvas element. Accepts an
                                            optional options object.</p>
                                        <p>You can create an offcanvas instance with the constructor, for example:</p>

                                        <div class="code_bg rounded p-3">
                                            <pre
                                                tabindex="0"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">const bsOffcanvas = new UX4G.Offcanvas('#myOffcanvas')</span><br></span></code></pre>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped ">
                                                <thead>
                                                    <tr>
                                                        <th>Method</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><code>getInstance</code></td>
                                                        <td><em>Static</em> method which allows you to get the offcanvas
                                                            instance associated with a DOM element</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>getOrCreateInstance</code></td>
                                                        <td><em>Static</em> method which allows you to get the offcanvas
                                                            instance associated with a DOM element, or create a new one
                                                            in case it wasn’t initialized</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>hide</code></td>
                                                        <td>Hides an offcanvas element. <strong>Returns to the caller
                                                                before the offcanvas element has actually been
                                                                hidden</strong> (i.e. before the
                                                            <code>hidden.bs.offcanvas</code> event occurs).
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>show</code></td>
                                                        <td>Shows an offcanvas element. <strong>Returns to the caller
                                                                before the offcanvas element has actually been
                                                                shown</strong> (i.e. before the
                                                            <code>shown.bs.offcanvas</code> event occurs).
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>toggle</code></td>
                                                        <td>Toggles an offcanvas element to shown or hidden.
                                                            <strong>Returns to the caller before the offcanvas element
                                                                has actually been shown or hidden</strong> (i.e. before
                                                            the <code>shown.bs.offcanvas</code> or
                                                            <code>hidden.bs.offcanvas</code> event occurs).
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h2 class="mt-20">Events <a href="" id="Events" class="opacity-0 hover-1">#</a>
                                        </h2>
                                        <p>UX4G’s offcanvas class exposes a few events for hooking into offcanvas
                                            functionality.</p>

                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped ">
                                                <thead>
                                                    <tr>
                                                        <th>Method</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><code>getInstance</code></td>
                                                        <td><em>Static</em> method which allows you to get the offcanvas
                                                            instance associated with a DOM element</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>getOrCreateInstance</code></td>
                                                        <td><em>Static</em> method which allows you to get the offcanvas
                                                            instance associated with a DOM element, or create a new one
                                                            in case it wasn’t initialized</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>hide</code></td>
                                                        <td>Hides an offcanvas element. <strong>Returns to the caller
                                                                before the offcanvas element has actually been
                                                                hidden</strong> (i.e. before the
                                                            <code>hidden.bs.offcanvas</code> event occurs).
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>show</code></td>
                                                        <td>Shows an offcanvas element. <strong>Returns to the caller
                                                                before the offcanvas element has actually been
                                                                shown</strong> (i.e. before the
                                                            <code>shown.bs.offcanvas</code> event occurs).
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>toggle</code></td>
                                                        <td>Toggles an offcanvas element to shown or hidden.
                                                            <strong>Returns to the caller before the offcanvas element
                                                                has actually been shown or hidden</strong> (i.e. before
                                                            the <code>shown.bs.offcanvas</code> or
                                                            <code>hidden.bs.offcanvas</code> event occurs).
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- code -->
                                        <div class="code_bg rounded p-3">
                                            <button class="btn btn-outline-primary float-end" id="copyButton14"
                                                onclick="copyToClipboard('copyText14', 'copyButton14')">
                                                <i class="fa fa-copy" id="iconCopied14"></i>
                                            </button>
                                            <pre id="copyText14"
                                                tabindex="0"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">const myOffcanvas = document.getElementById('myOffcanvas')</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">myOffcanvas.addEventListener('hidden.bs.offcanvas', event =&gt; {</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  // do something...</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">})</span><br></span></code></pre>
                                        </div>




                                    </div>
                                    <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                        <div class="right_side">
                                            <ul class="p-0">
                                                <li><a href="#How-it-works">How it works</a></li>
                                                <li><a href="#Examples">Examples</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#Offcanvas-components">Offcanvas components</a>
                                                        </li>
                                                    </ul>
                                                </li>


                                                <li><a href="#Live-demo">Live demo</a></li>
                                                <li><a href="#Dark-offcanvas">Dark offcanvas</a></li>
                                                <li><a href="#Body-scrolling">Body scrolling</a></li>
                                                <li><a href="#Body-scrolling-and-backdrop">Body scrolling and
                                                        backdrop</a></li>
                                                <li><a href="#Static-backdrop">Static backdrop</a></li>
                                                <li><a href="#Responsive">Responsive</a></li>
                                                <li><a href="#Placement">Placement</a></li>
                                                <li><a href="#Accessibility">Accessibility</a></li>
                                                <li><a href="#CSS">CSS</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#Variables">Variables</a>
                                                        </li>
                                                    </ul>
                                                </li>


                                                <li><a href="#Sass-variables">Sass variables</a></li>
                                                <li><a href="#Usage">Usage</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#Via-data-attributes">Via data attributes</a>
                                                        </li>
                                                        <li>
                                                            <a href="#Dismiss">Dismiss</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#Via-JavaScript">Via JavaScript</a></li>
                                                <li><a href="#Options">Options</a></li>
                                                <li><a href="#Methods">Methods</a></li>
                                                <li><a href="#Events">Events</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
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
                    <a class="page-link border-0" href="/components/navs-and-tabs.php">
                        <span>Previous</span>
                        <strong class="d-block">« Navs and Tabs </strong>
                    </a>
                    <a class="page-link border-0 float-end" href="/components/pagination.php">
                        <span class="text-end">Next</span>
                        <strong class="d-block">Pagination »</strong>
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