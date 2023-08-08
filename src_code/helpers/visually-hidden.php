<?php
$title = 'UX4G | Visually hidden';
$canonical = 'https://doc.ux4g.gov.in/helpers/visually-hidden.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Visually Hidden</li>
                        </ol>
                    </nav>

                    <!-- body content -->



                    <div class="row">
                        <div class="col-lg-9">



                            <h1 class="mb-30"> Visually Hidden</h1>
                            <p>
                            
                            With <code>.visually-hidden</code>, developer can visually conceal an element while still allowing assistive technology (like screen readers) to see it. To visually conceal an element by default and display it when it is focused (for example, by a user who only uses the keyboard), use the <code>.visually-hidden-focusable</code> style. When a container with the property <code>.visually-hidden-focusable</code> is applied, the container will be visible when any of its child elements gains focus.
                            
                            </p>

                            <!-- code -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                    onclick="copyToClipboard('copyText1', 'copyButton1')">
                                    <i class="fa fa-copy" id="iconCopied1"></i>
                                </button>
                                <div id="copyText1">
                                    <pre><code>&lt;h2 class=&quot;visually-hidden&quot;&gt;Title for screen readers&lt;/h2&gt;
&lt;a class=&quot;visually-hidden-focusable&quot; href=&quot;#content&quot;&gt;Skip to main content&lt;/a&gt;
&lt;div class=&quot;visually-hidden-focusable&quot;&gt;A container with a &lt;a href=&quot;#&quot;&gt;focusable element&lt;/a&gt;.&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                            <!-- code end -->


                            <p class=" mt-20">Both <code>visually-hidden</code> and
                                <code>visually-hidden-focusable</code> can also be used as mixins.
                            </p>
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton2"
                                    onclick="copyToClipboard('copyText2', 'copyButton2')">
                                    <i class="fa fa-copy" id="iconCopied2"></i>
                                </button>
                                <pre id="copyText2"><code>// Usage as a mixin

.visually-hidden-title {
  @include visually-hidden;
}

.skip-navigation {
  @include visually-hidden-focusable;
}</code></pre>
                            </div>

                            <!-- row end-->
                            <!-- pagination -->
                            <div class="col-12 col-sm-9">
                                <ul class="pagination pagination_custom justify-content-between">
                                    <a class="page-link border-0" href="/helpers/vertical-rule.php">
                                        <span>Previous</span>
                                        <strong class="d-block">« Vertical Rule</strong>
                                    </a>
                                    <a class="page-link border-0 float-end" href="/category/utilities.php">
                            <span class="text-end">Next</span>
                            <strong class="d-block">Utilities »</strong>
                        </a>

                                </ul>
                            </div>
                            <!-- pagination end -->
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</main>







<!-- reach us form -->


<?php
   include '../_footer.php';
    ?>