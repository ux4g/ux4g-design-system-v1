<?php
$title = 'UX4G | Progress';
$canonical = 'https://doc.ux4g.gov.in/components/progress.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Progress</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="col-12 col-sm-9">
                        <h1 class="mb-30"> Progress</h1>
                        <p>Stackable progress bars, animated backdrops, and text labels are all supported by UX4G's custom progress bars, which are documented and used in examples.</p>
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

                                                    <h2>How it works <a href="" id="How-it-works"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                            <p>Two HTML elements, some CSS to define the width, and a few attributes are used to construct Progress components. You may stack progress bars, animate them, and overlay text labels because there is no use of  <a
                                                            href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/progress"
                                                            target="_blank" rel="noopener noreferrer">the HTML5 &lt;progress&gt; </a>element.
</p>
                                                    

                                                    <ul class=" un_order_list">
                                                        <li>
                                                        To provide the maximum value of the progress bar, we use the .progress wrapper.
                                                        </li>
                                                        <li>The inner .progress-bar serves as our current progress indicator.</li>
                                                        <li>
                                                        The width of the .progress-bar must be set using an inline style, utility class, or custom CSS.
                                                        </li>
                                                        <li>
                                                        To be accessible, the .progress-bar also needs certain role and aria attributes.
                                                        </li>
                                                    </ul>

                                                    <p>Put that all together, and you have the following examples.</p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton1"
                                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                                        </button>
                                                        <div id="copyText1">
                                                            <pre><code>&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; aria-valuenow=&quot;0&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; style=&quot;width: 75%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <pre><div class="progress"><div class="progress-bar" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div><div class="progress"><div class="progress-bar" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div></div><div class="progress"><div class="progress-bar" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div></div><div class="progress"><div class="progress-bar" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div></div><div class="progress"><div class="progress-bar" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div></div></pre>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <p class="mt-20">UX4G provides a handful of utilities for
                                                        setting width  <a href="/utilities/sizing.php">Sizing</a>. Depending
                                                        on your needs, these may help with quickly configuring progress.
                                                    </p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton2"
                                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                                        </button>
                                                        <div id="copyText2">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progress</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progress-bar w-75</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">role</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progressbar</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuenow</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">75</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuemin</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">0</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuemax</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">100</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <div class="progress">
                                                                    <div class="progress-bar w-75" role="progressbar"
                                                                        aria-valuenow="75" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h2 class="mt-20">Labels <a href="" id="Labels"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p >Add labels to your progress bars by placing
                                                        text within the <code>.progress-bar</code>.</p>


                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton3"
                                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                                        </button>
                                                        <div id="copyText3">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progress</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progress-bar</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">role</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progressbar</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-label</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Example with label</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag script language-javascript script-punctuation punctuation" style="color: rgb(57, 58, 52);">=</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token tag script language-javascript literal-property property" style="color: rgb(54, 172, 170);">width</span><span class="token tag script language-javascript operator" style="color: rgb(57, 58, 52);">:</span><span class="token tag script language-javascript number" style="color: rgb(54, 172, 170);">25</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript operator" style="color: rgb(57, 58, 52);">+</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript string" style="color: rgb(227, 17, 108);">'%'</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuenow</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">25</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuemin</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">0</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuemax</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">100</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">25%</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code  end-->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-label="Example with label" aria-valuenow="25"
                                                                    aria-valuemin="0" aria-valuemax="100"
                                                                    style="width: 25%;">25%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <h2 class="mt-20">Height <a href="" id="Height"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>
                                                    The inner <code>.progress-bar</code> will automatically adjust to fit if developers modify the height value because of only putting a height value on the <code>.progress</code>.
                                                    </p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton4"
                                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                                        </button>
                                                        <div id="copyText4">
                                                            <pre><code>&lt;div class=&quot;progress&quot; style=&quot;height: 1px;&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; aria-label=&quot;Example 1px high&quot; style=&quot;width: 25%;&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; style=&quot;height: 20px;&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; aria-label=&quot;Example 20px high&quot; style=&quot;width: 25%;&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code bg -->

                                                    <h5 class="result m-0">RESULT</h5>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">

                                                        <div>
                                                            <div>
                                                                <code><div class="progress mb-3" style="height: 1px;"><div class="progress-bar" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div></div><div class="progress mb-3" style="height: 20px;"><div class="progress-bar" role="progressbar" aria-label="Example 20px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div></div></code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <h2 class="mt-20">Backgrounds <a href="" id="Backgrounds"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>Use background utility classes to change the appearance of
                                                        individual progress bars.</p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton5"
                                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                                        </button>
                                                        <div id="copyText5">
                                                            <pre><code>&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar bg-success&quot; role=&quot;progressbar&quot; aria-label=&quot;Success example&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar bg-info&quot; role=&quot;progressbar&quot; aria-label=&quot;Info example&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar bg-warning&quot; role=&quot;progressbar&quot; aria-label=&quot;Warning example&quot; style=&quot;width: 75%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar bg-danger&quot; role=&quot;progressbar&quot; aria-label=&quot;Danger example&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <code><div class="progress "><div class="progress-bar bg-success" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div></div><div class="progress "><div class="progress-bar bg-info" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div></div><div class="progress "><div class="progress-bar bg-warning" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div></div><div class="progress "><div class="progress-bar bg-danger" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div></div></code>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <blockquote>
                                                        <div class="bd-callout bd-callout-info mt-20 blockquote">
                                                            <h5> Conveying meaning to assistive technologies</h5>
                                                            <p><code>Color-coding</code> to add meaning just gives a visual cue, which users of assistive technologies like screen readers won't be able to understand. Make sure the information the color designates is either evident from the content itself (such as the visible text) or is included in another way, such as by hiding additional text using the .visually-hidden class.</p>
                                                        </div>
                                                    </blockquote>

                                                    <h2 class="mt-20">Multiple bars <a href="" id="Multiple-bars"
                                                            class="opacity-0 hover-1">#</a></h2>

                                                    <p>Include multiple progress bars in a progress component if you
                                                        need.</p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton6"
                                                            onclick="copyToClipboard('copyText6', 'copyButton6')">
                                                            <i class="fa fa-copy" id="iconCopied6"></i>
                                                        </button>
                                                        <div id="copyText6">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progress</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progress-bar</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">role</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progressbar</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-label</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Segment one</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag script language-javascript script-punctuation punctuation" style="color: rgb(57, 58, 52);">=</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token tag script language-javascript literal-property property" style="color: rgb(54, 172, 170);">width</span><span class="token tag script language-javascript operator" style="color: rgb(57, 58, 52);">:</span><span class="token tag script language-javascript number" style="color: rgb(54, 172, 170);">15</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript operator" style="color: rgb(57, 58, 52);">+</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript string" style="color: rgb(227, 17, 108);">'%'</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuenow</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">15</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuemin</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">0</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuemax</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">100</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progress-bar bg-success</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">role</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progressbar</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-label</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Segment two</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag script language-javascript script-punctuation punctuation" style="color: rgb(57, 58, 52);">=</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token tag script language-javascript literal-property property" style="color: rgb(54, 172, 170);">width</span><span class="token tag script language-javascript operator" style="color: rgb(57, 58, 52);">:</span><span class="token tag script language-javascript number" style="color: rgb(54, 172, 170);">30</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript operator" style="color: rgb(57, 58, 52);">+</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript string" style="color: rgb(227, 17, 108);">'%'</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuenow</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">30</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuemin</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">0</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuemax</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">100</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progress-bar bg-info</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">role</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progressbar</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-label</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Segment three</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag script language-javascript script-punctuation punctuation" style="color: rgb(57, 58, 52);">=</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token tag script language-javascript literal-property property" style="color: rgb(54, 172, 170);">width</span><span class="token tag script language-javascript operator" style="color: rgb(57, 58, 52);">:</span><span class="token tag script language-javascript number" style="color: rgb(54, 172, 170);">20</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript operator" style="color: rgb(57, 58, 52);">+</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript string" style="color: rgb(227, 17, 108);">'%'</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuenow</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">20</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuemin</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">0</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuemax</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">100</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        aria-label="Segment one" aria-valuenow="15"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 15%;"></div>
                                                                    <div class="progress-bar bg-success"
                                                                        role="progressbar" aria-label="Segment two"
                                                                        aria-valuenow="30" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 30%;"></div>
                                                                    <div class="progress-bar bg-info" role="progressbar"
                                                                        aria-label="Segment three" aria-valuenow="20"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 20%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <h2 class="mt-20">Striped <a href="" id="Striped"
                                                            class="opacity-0 hover-1">#</a></h2>

                                                    <p >
                                                    To create a stripe using CSS gradient over the progress bar's background color, add the class <code>.progress-bar-striped</code> to any <code>.progress-bar</code>.
                                                    </p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton7"
                                                            onclick="copyToClipboard('copyText7', 'copyButton7')">
                                                            <i class="fa fa-copy" id="iconCopied7"></i>
                                                        </button>
                                                        <div id="copyText7">
                                                            <pre><code>&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped&quot; role=&quot;progressbar&quot; aria-label=&quot;Default striped example&quot; style=&quot;width: 10%&quot; aria-valuenow=&quot;10&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped bg-success&quot; role=&quot;progressbar&quot; aria-label=&quot;Success striped example&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped bg-info&quot; role=&quot;progressbar&quot; aria-label=&quot;Info striped example&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped bg-warning&quot; role=&quot;progressbar&quot; aria-label=&quot;Warning striped example&quot; style=&quot;width: 75%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped bg-danger&quot; role=&quot;progressbar&quot; aria-label=&quot;Danger striped example&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <code><div class="progress "><div class="progress-bar progress-bar-striped" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"></div></div><div class="progress mb-3"><div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div></div><div class="progress "><div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div></div><div class="progress "><div class="progress-bar progress-bar-striped bg-warning" role="progressbar" aria-label="Warning striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div></div><div class="progress "><div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div></div></code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h2 class="mt-20">Animated stripes <a href="" id="Animated-stripes"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>
                                                    The gradient of stripes can also be animated. To use CSS3 animations to animate the stripes from right to left, add <code>.progress-bar-animated</code> to <code>.progress-bar</code>.
                                                    </p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton8"
                                                            onclick="copyToClipboard('copyText8', 'copyButton8')">
                                                            <i class="fa fa-copy" id="iconCopied8"></i>
                                                        </button>
                                                        <div id="copyText8">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progress</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progress-bar progress-bar-striped progress-bar-animated</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">role</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">progressbar</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-label</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Animated striped example</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuenow</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">75</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuemin</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">0</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">aria-valuemax</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">100</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag script language-javascript script-punctuation punctuation" style="color: rgb(57, 58, 52);">=</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token tag script language-javascript literal-property property" style="color: rgb(54, 172, 170);">width</span><span class="token tag script language-javascript operator" style="color: rgb(57, 58, 52);">:</span><span class="token tag script language-javascript number" style="color: rgb(54, 172, 170);">75</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript operator" style="color: rgb(57, 58, 52);">+</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript string" style="color: rgb(227, 17, 108);">'%'</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div>
                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                                        role="progressbar"
                                                                        aria-label="Animated striped example"
                                                                        aria-valuenow="75" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 75%;"></div>
                                                                </div>
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
                                                    Progress bars now employ local CSS variables on <code>.progress</code> as part of UX4G's expanding approach to CSS variables for improved real-time customization. Sass is used to set the values for the CSS variables, therefore Sass customization is still available.
                                                    </p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton9"
                                                            onclick="copyToClipboard('copyText9', 'copyButton9')">
                                                            <i class="fa fa-copy" id="iconCopied9"></i>
                                                        </button>
                                                        <pre id="copyText9"><code>  --#{$prefix}progress-height: #{$progress-height};
  @include rfs($progress-font-size, --#{$prefix}progress-font-size);
  --#{$prefix}progress-bg: #{$progress-bg};
  --#{$prefix}progress-border-radius: #{$progress-border-radius};
  --#{$prefix}progress-box-shadow: #{$progress-box-shadow};
  --#{$prefix}progress-bar-color: #{$progress-bar-color};
  --#{$prefix}progress-bar-bg: #{$progress-bar-bg};
  --#{$prefix}progress-bar-transition: #{$progress-bar-transition};
  </code></pre>
                                                    </div>
                                                    <!-- code end -->
                                                    <h2 class="mt-20">Sass variables <a href="" id="Sass-variables"
                                                            class="opacity-0 hover-1">#</a></h2>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton10"
                                                            onclick="copyToClipboard('copyText10', 'copyButton10')">
                                                            <i class="fa fa-copy" id="iconCopied10"></i>
                                                        </button>
                                                        <pre id="copyText10"><code>$progress-height:                   1rem;
$progress-font-size:                $font-size-base * .75;
$progress-bg:                       $gray-200;
$progress-border-radius:            $border-radius;
$progress-box-shadow:               $box-shadow-inset;
$progress-bar-color:                $white;
$progress-bar-bg:                   $primary;
$progress-bar-animation-timing:     1s linear infinite;
$progress-bar-transition:           width .6s ease;</code></pre>
                                                    </div>
                                                    <!-- code end -->
                                                    <h2 class="mt-20">Keyframes <a href="" id="Keyframes"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p >Used for creating the CSS animations for
                                                        <code>.progress-bar-animated</code>. Included in
                                                        <code>scss/_progress-bar.scss</code>.</p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton11"
                                                            onclick="copyToClipboard('copyText11', 'copyButton11')">
                                                            <i class="fa fa-copy" id="iconCopied11"></i>
                                                        </button>
                                                        <pre id="copyText11" tabindex="0"
                                                            class="prism-code language-scss codeBlock_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module thin-scrollbar"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token keyword" style="color: rgb(0, 0, 159);">@if</span><span class="token plain"> </span><span class="token selector variable" style="color: rgb(54, 172, 170);">$enable-transitions</span><span class="token selector" style="color: rgb(0, 0, 159);"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  </span><span class="token atrule rule" style="color: rgb(0, 164, 219);">@keyframes</span><span class="token atrule" style="color: rgb(0, 164, 219);"> progress-bar-stripes</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">    </span><span class="token selector" style="color: rgb(0, 0, 159);">0% </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"> </span><span class="token property" style="color: rgb(54, 172, 170);">background-position-x</span><span class="token punctuation" style="color: rgb(57, 58, 52);">:</span><span class="token plain"> </span><span class="token variable" style="color: rgb(54, 172, 170);">$progress-height</span><span class="token punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  </span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><br></span></code></pre>
                                                    </div>
                                                    <!-- code end -->







                                                </div>
                                            </div>
                                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                                <div class="right_side">
                                                    <ul class="p-0">
                                                        <li><a href="#How-it-works">How it works</a></li>





                                                        <li> <a href="#Labels">Labels</a></li>
                                                        <li> <a href="#Height">Height</a></li>
                                                        <li> <a href="#Backgrounds">Backgrounds</a></li>
                                                        <li> <a href="#Multiple-bars">Multiple bars</a></li>
                                                        <li> <a href="#Striped">Striped</a></li>
                                                        <li> <a href="#Height">Animated stripes</a></li>


                                                        <li> <a href="#CSS">CSS</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="#Variables">Variables</a>
                                                                </li>

                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#Sass-variables">Sass variables</a>
                                                        </li>
                                                        <li>
                                                            <a href="#Keyframes">Keyframes</a>
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
                            <a class="page-link border-0" href="/components/popovers.php">
                                <span>Previous</span>
                                <strong class="d-block">« Popovers </strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/components/scrollspy.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Scrollspy »</strong>
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