<?php
$title = 'UX4G | Range';
$canonical = 'https://doc.ux4g.gov.in/forms/range.php';

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
                            <li class="breadcrumb-item"><a href="/category/forms.php">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Range</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="col-sm-9">
                        <h1 class="mb-30"> Range</h1>
                        <p>
                        For built-in customization and consistent cross-browser appearance, use our custom range inputs.
                        </p>
                    </div>
                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                        <div class="row">

                            <div class="col-sm-9">
                                <div class="body_content">
                                    <h2>Overview <a href="" id="Overview" class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    With <code>.form-range</code>, you can design your own <code>&lt;input type=&quot;range&quot;&gt;</code> controls. The thumb (the value) and track (the background) are both styled to look the same in all browsers. It is not supportable because only Firefox allows users to visibly show progress by <code>"filling"</code> their track from either the left or right of the thumb.
                                    </p>


                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton1"
                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                        </button>
                                        <div id="copyText1">
                                            
                                            <pre><code>&lt;label for=&quot;customRange1&quot; class=&quot;form-label&quot;&gt;Example range&lt;/label&gt;
&lt;input type=&quot;range&quot; class=&quot;form-range&quot; id=&quot;customRange1&quot;/&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0"> RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <label for="customRange1" class="form-label">Example range</label><input type="range" class="form-range" id="customRange1">
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Disabled <a href="" id="Disabled" class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    To give an input a grayed-out appearance, stop <code>pointer</code> events, and prevent focusing, add the <code>disabled</code> boolean attribute.
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton2"
                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                        </button>
                                        <div id="copyText2">
                                            
                                       <pre><code>&lt;label for=&quot;disabledRange&quot; class=&quot;form-label&quot;&gt;Disabled range&lt;/label&gt; &lt;input type=&quot;range&quot; class=&quot;form-range&quot; id=&quot;disabledRange&quot; disabled&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code bg -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <label for="disabledRange" class="form-label">Disabled range</label><input type="range" class="form-range" id="disabledRange" disabled="">
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Min and max <a href="" id="Min-and-max"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    Range inputs come with implied <code>minimum</code> and <code>maximum</code> values of <code>0</code> and <code>100</code>, respectively. By using the min and max properties, it is possible to define new values for them.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton3"
                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                        </button>
                                        <div id="copyText3">
                                            
                                       <pre><code> &lt;label for=&quot;customRange2&quot; class=&quot;form-label&quot;&gt;Example range&lt;/label&gt; &lt;input type=&quot;range&quot; class=&quot;form-range&quot; min=&quot;0&quot; max=&quot;5&quot; id=&quot;customRange2&quot;&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->


                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <label for="customRange2" class="form-label">Example range</label><input type="range" class="form-range" min="0" max="5" id="customRange2">
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Steps <a href="" id="Steps" class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    Range inputs <code>"snap"</code> to integer values by default. You can alter this by specifying a step value. By using <code>step="0.5"</code> in the example below, we double the number of steps.
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton4"
                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                        </button>
                                        <div id="copyText4">
                                            
                                            <pre><code>&lt;label for=&quot;customRange3&quot; class=&quot;form-label&quot;&gt;Example range&lt;/label&gt;
&lt;input type=&quot;range&quot; class=&quot;form-range&quot; min=&quot;0&quot; max=&quot;5&quot; step=&quot;0.5&quot; id=&quot;customRange3&quot;/&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <label for="customRange3" class="form-label">Example range</label><input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                                    </div>
                                    <!-- RESULT end -->

                                    <h2 class="mt-20">Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
                                    <h3>Variables <a href="" id="Variables" class="opacity-0 hover-1">#</a></h3>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton5"
                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                        </button>
<pre id="copyText5"><code>$form-range-track-width:          100%;
$form-range-track-height:                  .5rem;
$form-range-track-cursor:                  pointer;
$form-range-track-bg:                      $gray-300;
$form-range-track-border-radius:           1rem;
$form-range-track-box-shadow:              $box-shadow-inset;

$form-range-thumb-width:                   1rem;
$form-range-thumb-height:                  $form-range-thumb-width;
$form-range-thumb-bg:                      $component-active-bg;
$form-range-thumb-border:                  0;
$form-range-thumb-border-radius:           1rem;
$form-range-thumb-box-shadow:              0 .1rem .25rem rgba($black, .1);
$form-range-thumb-focus-box-shadow:        0 0 0 1px $body-bg, $input-focus-box-shadow;
$form-range-thumb-focus-box-shadow-width:  $input-focus-width; // For focus box shadow issue in Edge
$form-range-thumb-active-bg:               tint-color($component-active-bg, 70%);
$form-range-thumb-disabled-bg:             $gray-500;
$form-range-thumb-transition:              background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;</code></pre>    
                                    </div>
                                    <!-- code end -->












                                </div>
                            </div>
                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                <div class="right_side">
                                    <ul class="p-0">
                                        <li><a href="#Overview">Overview</a></li>
                                        <li><a href="#Disabled">Disabled</a></li>
                                        <li><a href="#Min-and-max">Min and max</a></li>
                                        <li><a href="#Steps">Steps</a></li>
                                        <li>
                                            <a href="#Sass">Sass</a>
                                            <ul>
                                                <li><a href="#Variables">Variables</a></li>
                                            </ul>
                                        </li>





                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- row end -->
                    </section>
                    <!-- pagination -->
                    <div class="col-12 col-sm-9">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/forms/overview.php">
                                <span>Previous</span>
                                <strong class="d-block">« Overview</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/forms/select.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Select »</strong>
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