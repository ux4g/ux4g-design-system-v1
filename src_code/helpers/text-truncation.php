<?php
$title = 'UX4G | Text truncation';
$canonical = 'https://doc.ux4g.gov.in/helpers/text-truncation.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Text Truncation</li>
                        </ol>
                    </nav>

                    <!-- body content -->



                    <div class="row">
                        <div class="col-lg-9">



                            <h1 class="mb-30"> Text Truncation</h1>
                            <p>For longer content, you can add a <code>.text-truncate</code> class
                                to truncate the text with an ellipsis. <strong>Requires
                                    <code>display: inline-block</code> or <code>display: block</code>.</strong></p>
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                    onclick="copyToClipboard('copyText1', 'copyButton1')">
                                    <i class="fa fa-copy" id="iconCopied1"></i>
                                </button>
                                <div id="copyText1">
                                    <pre id="copyText1"><code>&lt;!-- Block level --&gt;
&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-2 text-truncate&quot;&gt;
    This text is quite long, and will be truncated once displayed.
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Inline level --&gt;
&lt;span class=&quot;d-inline-block text-truncate&quot; style=&quot;max-width: 150px;&quot;&gt;
  This text is quite long, and will be truncated once displayed.
&lt;/span&gt;</code></pre>
                                </div>
                            </div>

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div>
                                    <div>
                                        <code><div class="row"><div class="col-2 text-truncate">This text is quite long, and will be truncated once displayed.</div></div><span class="d-inline-block text-truncate" style="max-width: 150px;">This text is quite long, and will be truncated once displayed.</span></code>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->

                            <!-- pagination -->
                            <div class="col-12 col-sm-12">
                                <ul class="pagination pagination_custom justify-content-between">
                                    <a class="page-link border-0" href="/helpers/stretched-links.php">
                                        <span>Previous</span>
                                        <strong class="d-block">« Stretched links</strong>
                                    </a>
                                    <a class="page-link border-0 float-end" href="/helpers/vertical-rule.php">
                                        <span class="text-end">Next</span>
                                        <strong class="d-block">Vertical Rule »</strong>
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