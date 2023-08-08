<?php
$title = 'Get Started with UX4G Design System | UX4G';
$canonical = 'https://doc.ux4g.gov.in/category/getting-started.php';

include '../_header.php';

?>


<main>
    <div class="header_white_space"></div>

    <div class="main_raper">
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
                            <li class="breadcrumb-item"><a href="/">Getting Started</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Get started with UX4G</li>
                        </ol>
                    </nav>

                    <h1 class="mb-30">Get started with UX4G</h1>
                    <h2>Quick start <a href="" id="Quick-start" class="opacity-0 hover-1">#</a> </h2>
                    <p>Get started by including UX4G's production-ready CSS and JavaScript via CDN without the need for
                        any
                        build steps. </p>

                </div>
                <!-- body content -->

                <!-- product -->
                <section class="product  pt-50 pb-50 pl-15 pr-15">
                    <div class="row m-0">
                        <div class="col-sm-9">

                            <div class="body_content">

                                <ol class="order-list">
                                    <li>
                                        <p><strong>Create a new <code>index.html</code> file in your
                                                project
                                                root.</strong> Include the
                                            <code>&lt;meta name="viewport"&gt;</code> tag as well for <a
                                                href="https://developer.mozilla.org/en-US/docs/Web/HTML/Viewport_meta_tag"
                                                target="_blank" rel="noopener noreferrer">proper
                                                responsive
                                                behavior</a> in mobile devices.
                                        </p>
                                        <!-- code -->
                                        <div class="code_bg p-3 rounded mb-20">
                                            <button class="btn btn-outline-primary float-end" id="copyButton1"
                                                onclick="copyToClipboard('copyText1', 'copyButton1')">
                                                <i class="fa fa-copy" id="iconCopied1"></i>
                                            </button>

                                            <pre id="copyText1">
 <code>&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
 &lt;meta charset=&quot;utf-8&quot;&gt;
&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
&lt;title&gt;Bootstrap demo&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Hello, world!&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;</code>
</pre>


                                        </div>
                                    </li>
                                    <li>
                                        <p><strong>Include UX4G's CSS and JS.</strong> Place the
                                            <code>&lt;link&gt;</code> tag in the
                                            <code>&lt;head&gt;</code> for our CSS, and the
                                            <code>&lt;script&gt;</code> tag for our
                                            JavaScript bundle (including Popper for positioning
                                            dropdowns,
                                            poppers,
                                            and tooltips) before the
                                            closing <code>&lt;/body&gt;</code>.
                                        </p>
                                        <!-- code -->
                                        <div class="code_bg p-3 rounded mb-20">
                                            <button class="btn btn-outline-primary float-end" id="copyButton2"
                                                onclick="copyToClipboard('copyText2', 'copyButton2')">
                                                <i class="fa fa-copy" id="iconCopied2"></i>
                                            </button>
                                            <pre id="copyText2">
<code>
 &lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
  &lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
    &lt;title&gt;UX4G demo&lt;/title&gt;
    &lt;link href=&quot;https://img1.digitallocker.gov.in/ux4g/UX4G@1.0.0/css/ux4g-min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65&quot; crossorigin=&quot;anonymous&quot;&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;
    &lt;script src=&quot;https://img1.digitallocker.gov.in/ux4g/UX4G@1.0.0/js/ux4g.min.js&quot; integrity=&quot;sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;</code>
</pre>

                                        </div>
                                    </li>
                                    <p>You can also include <a href="https://popper.js.org/" target="_blank"
                                            rel="noopener noreferrer">Popper</a> and our
                                        JS separately. If you
                                        don't
                                        plan to use dropdowns,
                                        popovers, or tooltips, save some kilobytes by not including
                                        Popper.</p>
                                    <!-- code -->
                                    <div class="code_bg p-3 rounded mb-20">
                                        <button class="btn btn-outline-primary float-end" id="copyButton3"
                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                        </button>
                                        <pre id="copyText3">
<code>&lt;script src=&quot;https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js
&quot; integrity=&quot;sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://img1.digitallocker.gov.in/ux4g/UX4G@1.0.0/js/ux4g.min.js&quot; integrity=&quot;sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;</code>
                                       </pre>
                                    </div>

                                    <li>
                                        <p><strong>Hello, world!</strong> To view the UX4G page, open the page in preferred browser.</p>
                                        

                                    </li>

                                </ol>
                                <h2>CDN links <a href="" id="CDN-links" class="opacity-0 hover-1">#</a> </h2>
                                <p>As reference, here are our primary CDN links.</p>
                                <div class="table-responsive">
                                    <table class="table-bordered table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CSS</td>
                                                <td><code>https://img1.digitallocker.gov.in/ux4g/UX4G@1.0.0/css/ux4g-min.css</code>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>JS</td>
                                                <td><code>https://img1.digitallocker.gov.in/ux4g/UX4G@1.0.0/js/ux4g.min.js</code>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p>You can also use the CDN to fetch any of our <a
                                        href="/getting-started/content.php">additional
                                        builds listed in the Contents page</a>.</p>
                                <h2>Next steps<a href="" id="Next-steps" class="opacity-0 hover-1">#</a> </h2>
                                <ul class="un_order_list pl-30">
                                    <li>
                                        <p>Read a bit more about some <a href="#important-globals">important
                                                global
                                                environment settings</a>
                                            that UX4G utilizes.</p>
                                    </li>
                                    <li>
                                        <p>Read about what's included in UX4G in our <a
                                                href="/getting-started/content.php">contents
                                                section</a>
                                            and the list of <a href="#js-components">components that
                                                require
                                                JavaScript</a> below.</p>
                                    </li>
                                </ul>
                                <h2>JS components <a href="" id="js-components" class="opacity-0 hover-1">#</a>
                                </h2>
                                <p>Know which components specifically demand the Popper and JavaScript? Select the link below for the show components. Continue reading for a sample page template if it's about the overall page structure.</p>
                                <details class="mb-20 p-2" style="border:solid 1px #a066cc; border-radius:10px">
                                    <summary> Show components requiring JavaScript</summary>
                                    <ul class="un_order_list pl-30" style="border-top:solid 1px #a066cc;">
                                        <li>Alerts for dismissing</li>
                                        <li>Buttons for toggling states and checkbox/radio functionality
                                        </li>
                                        <li>Carousel for all slide behaviors, controls, and indicators
                                        </li>
                                        <li>Collapse for toggling visibility of content</li>
                                        <li>Dropdowns for displaying and positioning (also requires <a
                                                href="https://popper.js.org/" target="_blank"
                                                rel="noopener noreferrer">Popper</a>)</li>
                                        <li>Modals for displaying, positioning, and scroll behavior</li>
                                        <li>Navbar for extending our Collapse and Offcanvas plugins to
                                            implement
                                            responsive behaviors
                                        </li>
                                        <li>Navs with the Tab plugin for toggling content panes</li>
                                        <li>Offcanvases for displaying, positioning, and scroll behavior
                                        </li>
                                        <li>Scrollspy for scroll behavior and navigation updates</li>
                                        <li>Toasts for displaying and dismissing</li>
                                        <li>Tooltips and popovers for displaying and positioning (also
                                            requires
                                            <a href="https://popper.js.org/" target="_blank"
                                                rel="noopener noreferrer">Popper</a>)
                                        </li>
                                    </ul>
                                </details>
                                <h2>Important globals <a href="" id="important-globals" class="opacity-0 hover-1">#</a>
                                </h2>
                                <p>UX4G employs a handful of important global styles and settings, all
                                    of which
                                    are
                                    almost exclusively
                                    geared towards the normalization of cross browser styles. Let's dive
                                    in.</p>
                                <h2>HTML5 doctype <a href="" id="HTML5-doctype" class="opacity-0 hover-1">#</a>
                                </h2>
                                <p>UX4G requires the use of the HTML5 doctype. Without it, you'll see
                                    some funky
                                    and
                                    incomplete styling.</p>
                                <!-- code -->
                                <div class="code_bg p-3 rounded mb-20 ">
                                    <button class="btn btn-outline-primary float-end" id="copyButton4"
                                        onclick="copyToClipboard('copyText4', 'copyButton4')">
                                        <i class="fa fa-copy" id="iconCopied4"></i>
                                    </button>
                                    <pre id="copyText4">
<code>&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
  ...
&lt;/html&gt;</code>
</pre>

                                </div>
                                <h2>Responsive meta tag <a href="" id="responsive-meta-tag"
                                        class="opacity-0 hover-1">#</a>
                                </h2>
                                <p>UX4G is developed <em>mobile first</em>, a strategy in which we
                                    optimize code
                                    for
                                    mobile devices first
                                    and then scale up components as necessary using CSS media queries.
                                    To ensure
                                    proper rendering and touch
                                    zooming for all devices, add the responsive viewport meta tag to
                                    your
                                    <code>&lt;head&gt;</code>.
                                </p>
                                <!-- code -->
                                <div class="code_bg p-3 rounded mb-20 ">
                                    <button class="btn btn-outline-primary float-end" id="copyButton5"
                                        onclick="copyToClipboard('copyText5', 'copyButton5')">
                                        <i class="fa fa-copy" id="iconCopied5"></i>
                                    </button>
                                    <pre id="copyText5"
                                        tabindex="0"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">meta</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">name</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">viewport</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">content</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">width=device-width, initial-scale=1</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><br></span></code></pre>

                                </div>
                                <p>You can see an example of this in action in the <a href="#Quick-start">quick
                                        start</a>.</p>
                                <h2>Box-sizing <a href="" id="Box-sizing" class="opacity-0 hover-1">#</a></h2>
                                <p>Changing the global <code>box-sizing</code> value from <code>content-box</code> to <code>border-box</code> for CSS sizing to be more obvious. This guarantees that <code>padding</code> won't change an element's final computed width, but it may interfere with some third-party applications like Google Maps and Google Custom Search Engine.
</p>
                                
                                <p>Use anything akin to the following if there is a need to override it:
With the aforementioned snippet, all nested components, including those with generated content via::before and::after, will take on the designated <code>box-sizing</code>. selector-for-some-widget."
                                </p>
                                <!-- code -->
                                <div
                                    class="code_bg p-3 rounded mb-20 language-css codeBlockContainer_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Container-styles-module theme-code-block">
                                    <button class="btn btn-outline-primary float-end" id="copyButton6"
                                        onclick="copyToClipboard('copyText6', 'copyButton6')">
                                        <i class="fa fa-copy" id="iconCopied6"></i>
                                    </button>

                                    <pre id="copyText6">
<code>.selector-for-some-widget {
  box-sizing: content-box;
}</code>
 </pre>
                                </div>
                                <p>With the above snippet, nested elements—including generated content
                                    via
                                    <code>::before</code> and
                                    <code>::after</code>—will all inherit the specified
                                    <code>box-sizing</code>
                                    for
                                    that
                                    <code>.selector-for-some-widget</code>.
                                </p>
                                <p>Learn more about <a href="https://css-tricks.com/box-sizing/" target="_blank"
                                        rel="noopener noreferrer">box model and sizing
                                        at CSS Tricks</a>.</p>
                                <h2>Reboot <a href="" id="Reboot" class="opacity-0 hover-1">#</a> </h2>

                                <p>"<a href="/content/reboot.php">Reboot</a> to address incompatibilities between browsers and devices while giving slightly more opinionated resets to popular HTML elements for improved cross-browser rendering."</p>
                                
                                <p> Follow @getUX4G on Twitter for the most recent news and amazing music videos.</p>
                            </div>
                        </div>
                        <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">
                                    <li><a href="#Quick-start">Quick Start</a></li>
                                    <li><a href="#CDN-links">CDN links</a></li>
                                    <li><a href="#Next-steps">Next steps</a></li>
                                    <li><a href="#JS-components">JS components</a></li>
                                    <li><a href="#important-globals">Important globals</a>
                                        <ul class="pl-20">
                                            <li>
                                                <a href="#HTML5-doctype">HTML5 doctype</a>
                                            </li>
                                            <li>
                                                <a href="#responsive-meta-tag">Responsive meta tag</a>
                                            </li>
                                            <li>
                                                <a href="#Box-sizing">Box-sizing</a>
                                            </li>
                                            <li>
                                                <a href="#Reboot">Reboot</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>

                </section>
                <div class="col-12 col-sm-9">
                    <ul class="pagination pagination_custom justify-content-between">
                        <a class="page-link border-0" href="/index.php">
                            <span class="text-end">Previous</span>
                            <strong class="d-block">« Getting Started</strong>
                        </a>
                        <a class="page-link border-0 float-end" href="/getting-started/download.php">
                            <span class="text-end">Next</span>
                            <strong class="d-block">Download »</strong>
                        </a>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</main>

<?php
   include '../_footer.php';
    ?>