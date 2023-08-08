<?php
$title = 'UX4G | Coloured links';
$canonical = 'https://doc.ux4g.gov.in/helpers/coloured-links.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Coloured Links</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row">
                        <div class="col-lg-9">

                            <h1 class="mb-30"> Coloured Links</h1>
                            <p>Hover states on colored links</p>

                            <p>The <code>.link-*</code> classes can be used to colorize links. These classes have the states <code>:hover</code> and <code>:focus</code>, unlike normal <a href="/utilities/colors.php"><code>.text-*</code></a> classes.</p>

                            
                            <div class="bd-callout bd-callout-info blockquote mt-20">
                                <p>Heads up! The only colored link that can adjust to different color modes at this time is link-body-emphasis. Until v2 comes out and we can more extensively rebuild our theme colors for color modes, it is handled as a special situation. It has a distinct, high-contrast link color with unique <code>:hover</code> and <code>:focus</code> styles until then. It nonetheless reacts to the new connection utilities.</p>
                            </div>
                            <!-- code -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                    onclick="copyToClipboard('copyText1', 'copyButton1')">
                                    <i class="fa fa-copy" id="iconCopied1"></i>
                                </button>
                                <div id="copyText1">
                                    <pre
                                        id="copyText1"><code>&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;link-primary&quot;&gt;Primary link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;link-secondary&quot;&gt;Secondary link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;link-success&quot;&gt;Success link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;link-danger&quot;&gt;Danger link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;link-warning&quot;&gt;Warning link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;link-info&quot;&gt;Info link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;link-light&quot;&gt;Light link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;link-dark&quot;&gt;Dark link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;link-body-emphasis&quot;&gt;Emphasis link&lt;/a&gt;&lt;/p&gt;</code></pre>
                                </div>
                            </div>
                            <!-- code end -->
                            <h5 class="result m-0">RESULT</h5>
                            <div class="code_bg rounded p-3">
                                <div class="bd-example m-0 border-0">

                                    <p><a href="#" class="link-primary">Primary link</a></p>
                                    <p><a href="#" class="link-secondary">Secondary link</a></p>
                                    <p><a href="#" class="link-success">Success link</a></p>
                                    <p><a href="#" class="link-danger">Danger link</a></p>
                                    <p><a href="#" class="link-warning">Warning link</a></p>
                                    <p><a href="#" class="link-info">Info link</a></p>
                                    <p><a href="#" class="link-light">Light link</a></p>
                                    <p><a href="#" class="link-dark">Dark link</a></p>
                                    <p><a href="#" class="link-body-emphasis">Emphasis link</a></p>
                                </div>
                            </div>
                            <p class="mt-20"><strong> <i class="fa fa-info-circle"></i> INFO</strong></p>
                            <blockquote class="blockquote mt-20">
                                <div class="bd-callout bd-callout-info">Some of the link styles use a relatively light
                                    foreground color, and should only be used on a dark background in order to have
                                    sufficient contrast.</div>
                            </blockquote>





                        </div>
                    </div>
                    <!-- end flat -->






                </div>
                <!-- pagination -->
                <div class="col-12 col-sm-9">
                    <ul class="pagination pagination_custom justify-content-between">
                        <a class="page-link border-0" href="/helpers/color-background.php">
                            <span>Previous</span>
                            <strong class="d-block">« Color & Background</strong>
                        </a>
                        <a class="page-link border-0 float-end" href="/helpers/position.php">
                            <span class="text-end">Next</span>
                            <strong class="d-block">Position »</strong>
                        </a>

                    </ul>
                </div>
                <!-- pagination end -->
            </div>

        </div>

    </div>
</main>






<!-- reach us form -->


<?php
   include '../_footer.php';
    ?>