<?php
$title = 'UX4G | Badge';
$canonical = 'https://doc.ux4g.gov.in/components/badge.php';

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
                            <li class="breadcrumb-item"><a href="/">
                                    <i class="fa fa-home"></i>
                                </a></li>
                            <li class="breadcrumb-item"><a href="/category/components.php">Components</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Badges</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="col-12 col-sm-9">
                        <h1 class="mb-30"> Badges</h1>
                        <p>Documentation and examples for badges, our small count and labeling component.</p>
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
                                            <div class="col-sm-9 col-12">
                                                <div class="body_content">


                                                    <h2>Examples <a href="" id="Examples"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>
                                                    Using relative font sizes and em units, badges resize to the size of the immediate parent element. Since version v1.0.0, links on badges no longer have focus or hover styles.
                                                    </p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton1"
                                                            onclick="copyToClipboard('copyText1', 'copyButton1')"><i
                                                                class="fa fa-copy" id="iconCopied1"></i></button>
                                                        <div id="copyText1">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">bd-example</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Example heading </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge bg-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">New</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h2</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Example heading </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge bg-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">New</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h2</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h3</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Example heading </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge bg-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">New</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h3</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Example heading </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge bg-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">New</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h5</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Example heading </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge bg-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">New</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h5</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Example heading </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge bg-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">New</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h6</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <!-- RESULT -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div class="bd-example">
                                                            <h1>Example heading <span
                                                                    class="badge bg-secondary">New</span></h1>
                                                            <h2>Example heading <span
                                                                    class="badge bg-secondary">New</span></h2>
                                                            <h3>Example heading <span
                                                                    class="badge bg-secondary">New</span></h3>
                                                            <h4>Example heading <span
                                                                    class="badge bg-secondary">New</span></h4>
                                                            <h5>Example heading <span
                                                                    class="badge bg-secondary">New</span></h5>
                                                            <h6>Example heading <span
                                                                    class="badge bg-secondary">New</span></h6>
                                                        </div>
                                                    </div>
                                                    <!-- RESULT end -->
                                                    <h2 class="mt-20">Buttons <a href="" id="Buttons"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>
                                                    To add a counter, badges can be a component of links or buttons.
                                                    </p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton2"
                                                            onclick="copyToClipboard('copyText2', 'copyButton2')"><i
                                                                class="fa fa-copy" id="iconCopied2"></i></button>
                                                        <div id="copyText2">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"> </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">bd-example</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-primary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      Notifications </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge text-bg-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <!-- RESULT -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div class="bd-example"><button type="button"
                                                                class="btn btn-primary">Notifications <span
                                                                    class="badge text-bg-secondary">4</span></button>
                                                        </div>
                                                    </div>
                                                    <!-- RESULT end -->
                                                    <p class="mt-20">
                                                    Take note that badges may be perplexing for users of screen readers and other similar assistive tools, depending on how they are employed. These users will only see the badge's content, despite the fact that badges' style provide a visual signal as to what they are for. These badges may appear to be random words or numbers added at the end of a statement, link, or button, depending on the circumstances.
                                                    </p>
                                                    <p class="mt-20">
                                                    Consider including more context using a visually hidden piece of additional text unless the context is obvious (like in the "Notifications" example, where it is recognized that the "4" represents the number of notifications).
                                                    </p>
                                                    <h2 class="mt-20">Positioned <a href="" id="Positioned"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>Use utilities to modify a <code>.badge</code> and position it in
                                                        the corner of a link or button.</p>

                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton3"
                                                            onclick="copyToClipboard('copyText3', 'copyButton3')"><i
                                                                class="fa fa-copy" id="iconCopied3"></i></button>
                                                        <div id="copyText3">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"> </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">bd-example</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-primary position-relative</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      Inbox</span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">        99+</span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">        </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">visually-hidden</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">unread messages</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <!-- RESULT -->
                                                    <h5 class="result m-20">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div class="bd-example"><button type="button"
                                                                class="btn btn-primary position-relative">Inbox <span
                                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+
                                                                    <span class="visually-hidden">unread
                                                                        messages</span></span></button></div>
                                                    </div>
                                                    <!-- RESULT end -->
                                                    <p class="mt-20">You can also replace the <code>.badge</code> class
                                                        with a few more utilities without a count for a more generic
                                                        indicator.</p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton4"
                                                            onclick="copyToClipboard('copyText4', 'copyButton4')"><i
                                                                class="fa fa-copy" id="iconCopied4"></i></button>
                                                        <div id="copyText4">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">button</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">btn btn-primary position-relative</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  Profile</span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">visually-hidden</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">New alerts</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">button</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->
                                                    <!-- RESULT -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div>
                                                            <div><button type="button"
                                                                    class="btn btn-primary position-relative">Profile
                                                                    <span
                                                                        class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle"><span
                                                                            class="visually-hidden">New
                                                                            alerts</span></span></button></div>
                                                        </div>
                                                    </div>
                                                    <!-- RESULT end -->
                                                    <h2 class="mt-20">Background colors <a href=""
                                                            id="Background-colors" class="opacity-0 hover-1">#</a></h2>
                                                    <small
                                                        class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Added
                                                        in v1.0.0</small>
                                                        <p>Using the <code>.text-bg-color</code> tools, there is a possibility to set background color with a contrasting foreground color. Previously, pairing the preferred <code>.text-color</code> and .bg-color utilities manually was necessary for styling; nevertheless, still free to do so if preferred.</p>
                                                    
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton5"
                                                            onclick="copyToClipboard('copyText5', 'copyButton5')"><i
                                                                class="fa fa-copy" id="iconCopied5"></i></button>
                                                        <div id="copyText5">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">bd-example</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge text-bg-primary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Primary</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge text-bg-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Secondary</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge text-bg-success</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Success</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge text-bg-danger</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Danger</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge text-bg-warning</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Warning</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge text-bg-info</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Info</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge text-bg-light</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Light</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge text-bg-dark</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Dark</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <!-- RESULT -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3 ">
                                                        <div class="bd-example"><span
                                                                class="badge text-bg-primary mr-5">Primary</span><span
                                                                class="badge text-bg-secondary mr-5">Secondary</span><span
                                                                class="badge text-bg-success mr-5">Success</span><span
                                                                class="badge text-bg-danger mr-5">Danger</span><span
                                                                class="badge text-bg-warning mr-5">Warning</span><span
                                                                class="badge text-bg-info mr-5">Info</span><span
                                                                class="badge text-bg-light mr-5">Light</span><span
                                                                class="badge text-bg-dark mr-5">Dark</span></div>
                                                    </div>
                                                    <!-- RESULT end -->
                                                    <blockquote class="blockquote mt-20">
                                                        <div class="bd-callout bd-callout-info">
                                                            <h5> Conveying meaning to assistive technologies</h5>
                                                            Color-coding to add meaning just gives a visual cue, which users of assistive technologies like screen readers won't be able to understand. Make sure the information the color designates is either evident from the content itself (such as the visible text) or is included in another way, such as by hiding additional text using the <code>.visually-hidden</code> class.
                                                        </div>
                                                    </blockquote>
                                                    <h2 class="mt-20">Pill badges <a href="" id="Pill-badges"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <p>Use the <code>.rounded-pill</code> utility class to make badges
                                                        more rounded with a larger <code>border-radius.</code></p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton6"
                                                            onclick="copyToClipboard('copyText6', 'copyButton6')"><i
                                                                class="fa fa-copy" id="iconCopied6"></i></button>
                                                        <div id="copyText6">
                                                            <pre
                                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">bd-example</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge rounded-pill text-bg-primary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Primary</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge rounded-pill text-bg-secondary</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Secondary</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge rounded-pill text-bg-success</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Success</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge rounded-pill text-bg-danger</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Danger</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge rounded-pill text-bg-warning</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Warning</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge rounded-pill text-bg-info</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Info</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge rounded-pill text-bg-light</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Light</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">badge rounded-pill text-bg-dark</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Dark</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">span</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                                        </div>
                                                    </div>
                                                    <!-- code end -->

                                                    <!-- RESULT -->
                                                    <h5 class="result m-0">RESULT</h5>
                                                    <div class="code_bg rounded p-3">
                                                        <div class="bd-example"><span
                                                                class="badge rounded-pill text-bg-primary mr-5">Primary</span><span
                                                                class="badge rounded-pill text-bg-secondary mr-5">Secondary</span><span
                                                                class="badge rounded-pill text-bg-success mr-5">Success</span><span
                                                                class="badge rounded-pill text-bg-danger mr-5">Danger</span><span
                                                                class="badge rounded-pill text-bg-warning mr-5">Warning</span><span
                                                                class="badge rounded-pill text-bg-info mr-5">Info</span><span
                                                                class="badge rounded-pill text-bg-light mr-5">Light</span><span
                                                                class="badge rounded-pill text-bg-dark mr-5">Dark</span>
                                                        </div>
                                                    </div>
                                                    <!-- RESULT end -->
                                                    <h2 class="mt-20">CSS <a href="" id="CSS"
                                                            class="opacity-0 hover-1">#</a></h2>
                                                    <h3 class="mt-20">Variables <a href="" id="Variables"
                                                            class="opacity-0 hover-1">#</a></h3>
                                                    <small
                                                        class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Added
                                                        in v1.0.0</small>
                                                    <p>
                                                    As part of UX4G's evolving approach to CSS variables for better real-time customizing, badges now use local CSS variables on <code>.badge</code>. Sass customization is still possible because it is used to set the values for the CSS variables.
                                                    </p>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton7"
                                                            onclick="copyToClipboard('copyText7', 'copyButton7')"><i
                                                                class="fa fa-copy"></i></button>
                                                        <pre id="copyText7"><code>  --#{$prefix}badge-padding-x: #{$badge-padding-x};
  --#{$prefix}badge-padding-y: #{$badge-padding-y};
  @include rfs($badge-font-size, --#{$prefix}badge-font-size);
  --#{$prefix}badge-font-weight: #{$badge-font-weight};
  --#{$prefix}badge-color: #{$badge-color};
  --#{$prefix}badge-border-radius: #{$badge-border-radius};
  </code></pre>
                                                    </div>
                                                    <!-- code end -->

                                                    <h3 class="mt-20">Sass variables <a href="" id="Sass-variables"
                                                            class="opacity-0 hover-1">#</a></h3>
                                                    <!-- code -->
                                                    <div class="code_bg rounded p-3">
                                                        <button class="btn btn-outline-primary float-end"
                                                            id="copyButton8"
                                                            onclick="copyToClipboard('copyText8', 'copyButton8')"><i
                                                                class="fa fa-copy"></i></button>
                                                        <pre id="copyText8"><code>$badge-font-size:                   .75em;
$badge-font-weight:                 $font-weight-bold;
$badge-color:                       $white;
$badge-padding-y:                   .35em;
$badge-padding-x:                   .65em;
$badge-border-radius:               $border-radius;</code></pre>
                                                    </div>
                                                    <!-- code end -->




                                                </div>
                                            </div>
                                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                                <div class="right_side">
                                                    <ul class="p-0">
                                                        <li><a href="#Examples">Examples</a></li>
                                                        <li><a href="#Buttons">Buttons</a></li>
                                                        <li><a href="#Positioned">Positioned</a></li>
                                                        <li><a href="#Background-colors">Background colors</a></li>
                                                        <li><a href="#Pill-badges">Pill badges</a></li>

                                                        <li><a href="#CSS">CSS</a>
                                                            <ul>
                                                                <li><a href="#Variables">Variables</a></li>
                                                                <li><a href="#Sass-variables">Sass variables</a></li>
                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="row">
                                            <div class="col-sm-9 col-12">
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
                            <a class="page-link border-0" href="/components/alerts.php">
                                <span>Previous</span>
                                <strong class="d-block">« Alerts</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/components/breadcrumb.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Breadcrumb »</strong>
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