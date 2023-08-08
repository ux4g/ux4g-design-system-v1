<?php
$title = 'UX4G | Overview';
$canonical = 'https://doc.ux4g.gov.in/forms/overview.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Overview</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <h1 class="mb-30"> Overview</h1>

                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                        <div class="row">

                            <div class="col-sm-9">
                                <div class="body_content">
                                    <h2>Overview <a href="" id="Overview" class="opacity-0 hover-1">#</a></h2>
                                    <p>The form controls in UX4G add classes to the <a
                                            href="/content/reboot.php#Forms">Rebooted form designs</a>. For a rendering that is more uniform across browsers and devices, use these classes to choose into their customized displays.</p>

                                    
                                    <p>To take use of newer input controls like email verification, number selection, and more, make sure to utilize an appropriate type property on all inputs (e.g., email for email addresses or number for numerical information).</p>

                                    <p>Here is a little illustration of how UX4G's form styles work. For information about necessary courses, form formatting, and other topics, continue reading.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton1"
                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                        </button>
                                        <div id="copyText1">
                                        
                                            <pre><code>&lt;form&gt;
  &lt;div class=&quot;mb-3&quot;&gt;
    &lt;label for=&quot;exampleInputEmail1&quot; class=&quot;form-label&quot;&gt;Email address&lt;/label&gt;
    &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot;/&gt;
    &lt;div id=&quot;emailHelp&quot; class=&quot;form-text&quot;&gt;We'll never share your email with anyone else.&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mb-3&quot;&gt;
    &lt;label for=&quot;exampleInputPassword1&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword1&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mb-3 form-check&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;exampleCheck1&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;exampleCheck1&quot;&gt;Check me out&lt;/label&gt;
  &lt;/div&gt;
  &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <form><div class="mb-3"><label for="exampleInputEmail1" class="form-label">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div></div><div class="mb-3"><label for="exampleInputPassword1" class="form-label">Password</label><input type="password" class="form-control" id="exampleInputPassword1"></div><div class="mb-3 form-check"><input type="checkbox" class="form-check-input" id="exampleCheck1"><label class="form-check-label" for="exampleCheck1">Check me out</label></div><button type="submit" class="btn btn-primary">Submit</button></form>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Form text <a href="" id="Form-text"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>Block-level or inline-level form text can be created using <code
                                            >.form-text</code>.</p>
                                    <p><i class="fa fa-exclamation-triangle"></i> <strong>CAUTION</strong></p>
                                    <div class="bd-callout bd-callout-warning blockquote_warning mt-20">
                                        <h5 class="anchor anchorWithStickyNavbar_node_modules-@docusaurus-theme-classic-lib-theme-Heading-styles-module"
                                            id="ensure-correct-role-and-provide-a-label">Associating form text with form
                                            controls
                                        </h5>
                                        <p>
                                        Using the <code>aria-describedby</code> attribute, form text must be properly linked to the form control it refers to.
                                        </p>
                                        <p>
                                        This will make sure that when the user focuses or enters the control, assistive technology like screen readers will declare this form text.
                                        </p>

                                    </div>
                                    <p class="mt-20">With <code>.form-text</code>, form text may be styled beneath inputs. For simple spacing from the inputs above, a top margin is added if a block-level element will be utilized.</p>
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton2"
                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                        </button>
                                        <div id="copyText2">
                                            
                                            <pre><code>&lt;label for=&quot;inputPassword5&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
&lt;input type=&quot;password&quot; id=&quot;inputPassword5&quot; class=&quot;form-control&quot; aria-describedby=&quot;passwordHelpBlock&quot;/&gt;
&lt;div id=&quot;passwordHelpBlock&quot; class=&quot;form-text&quot;&gt;
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">

                                        <label for="inputPassword5" class="form-label">Password</label><input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"><div id="passwordHelpBlock" class="form-text">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
                                    </div>
                                    <!-- RESULT end-->
                                    <p class="mt-20">
                                    With only the <code>.form-text</code> class, inline text can use any common inline <code>HTML element</code> (such as a <code>&lt;span&gt;</code>, <code>&lt;small&gt;</code>, or another type).
                                    </p>
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton3"
                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                        </button>
                                        <div id="copyText3">
                                            
                                            <pre><code>&lt;div class=&quot;row g-3 align-items-center&quot;&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;label for=&quot;inputPassword6&quot; class=&quot;col-form-label&quot;&gt;Password&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;input type=&quot;password&quot; id=&quot;inputPassword6&quot; class=&quot;form-control&quot; aria-describedby=&quot;passwordHelpInline&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;span id=&quot;passwordHelpInline&quot; class=&quot;form-text&quot;&gt;
      Must be 8-20 characters long.
    &lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="row g-3 align-items-center"><div class="col-auto"><label for="inputPassword6" class="col-form-label">Password</label></div><div class="col-auto"><input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"></div><div class="col-auto"><span id="passwordHelpInline" class="form-text">Must be 8-20 characters long.</span></div></div>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Disabled forms <a href="" id="Disabled-forms"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    To prevent user interactions and make an input appear lighter, use the <code>disabled</code> boolean attribute.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3 mb-20">
                                        <button class="btn btn-outline-primary float-end" id="copyButton4"
                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                        </button>
                                        <pre id="copyText4"
                                            tabindex="0"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">input</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">form-control</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">disabledInput</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">type</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">text</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">placeholder</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Disabled input here...</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">disabled</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><br></span></code></pre>
                                    </div>
                                    <!-- code end -->
                                    <p>To disable all the controls in a <code>&lt;fieldset&gt;</code>, add the disabled property. All native form controls (<code>&lt;input&gt;</code>, <code>&lt;select&gt;</code>, and <code>&lt;button&gt;</code> elements) included in a <code>&lt;fieldset disabled&gt;</code> are seen by browsers as disabled, making keyboard and mouse interactions with them impossible.</p>

                                    <p>
                                    The custom button-like components in the form, such as <code>a class="btn btn-*">.../a></code>, will only be assigned a style of pointer-events: none, which means they are still focusable and keyboard-operable. In this situation, you will need to manually change these controls by adding the attributes <code>tabindex="-1"</code> to stop them from obtaining focus and <code>aria-disabled="disabled"</code> to let assistive technologies know they are disabled.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton5"
                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                        </button>
                                        <div id="copyText5">
                                            
                                            <pre><code>&lt;form&gt;
  &lt;fieldset disabled&gt;
    &lt;legend&gt;Disabled fieldset example&lt;/legend&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
      &lt;label for=&quot;disabledTextInput&quot; class=&quot;form-label&quot;&gt;Disabled input&lt;/label&gt;
      &lt;input type=&quot;text&quot; id=&quot;disabledTextInput&quot; class=&quot;form-control&quot; placeholder=&quot;Disabled input&quot;/&gt;
    &lt;/div&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
      &lt;label for=&quot;disabledSelect&quot; class=&quot;form-label&quot;&gt;Disabled select menu&lt;/label&gt;
      &lt;select id=&quot;disabledSelect&quot; class=&quot;form-select&quot;&gt;
        &lt;option&gt;Disabled select&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
      &lt;div class=&quot;form-check&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;disabledFieldsetCheck&quot; disabled/&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;disabledFieldsetCheck&quot;&gt;
          Can't check this
        &lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <form><fieldset disabled=""><legend>Disabled fieldset example</legend><div class="mb-3"><label for="disabledTextInput" class="form-label">Disabled input</label><input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"></div><div class="mb-3"><label for="disabledSelect" class="form-label">Disabled select menu</label><select id="disabledSelect" class="form-select"><option>Disabled select</option></select></div><div class="mb-3"><div class="form-check"><input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled=""><label class="form-check-label" for="disabledFieldsetCheck">Can't check this</label></div></div><button type="submit" class="btn btn-primary">Submit</button></fieldset></form>
                                    </div>
                                    <!-- RESULT end -->

                                    <h2 class="mt-20">Accessibility <a href="" id="Accessibility"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    Make sure that every form control has an appropriate accessible name so that assistive technology users can understand what it does. Using a label element or, in the case of buttons, including adequate descriptive language as part of the content of the <code>&lt;button&gt;...&lt;/button&gt;</code> is the simplest method to accomplish this.
                                    </p>
                                    <p>
                                    There are several approaches of still giving an accessible name in circumstances where it is not possible to include a visible <code>&lt;label&gt;</code> or relevant text content, such as:
                                    </p>
                                    <ul class="un_order_list">
                                        <li>
                                        <code>&lt;label&gt;</code> elements with the .visually-hidden class hidden
                                        </li>
                                        <li>Utilizing <code>aria-labelledby</code> to point to an existing element that can serve as a label</li>
                                        <li>The title attribute being provided</li>
                                        <li>Utilizing <code>aria-label</code> to explicitly set an element's accessible name</li>
                                    </ul>
                                    <p>
                                    As a backup for the accessible name on <code>&lt;input&gt;</code> and <code>&lt;textarea&gt;</code> elements, assistive technologies may fall back to utilizing the placeholder property if none of these are available. This section's examples offer a few suggested, case-specific strategies.
                                    </p>
                                    <p>
                                    While assistive technology users will benefit from using visually hidden content (<code>.visually-hidden</code>, aria-label, and even placeholder content, which vanishes once a form field has content), some users may still experience issues if label text is not made visible. The best method is typically some sort of clearly visible label, both for usability and accessibility.
                                    </p>
                                    <h2>Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    Numerous form variables are predefined at the general level so that they can be reused and expanded by other form components. These are most frequently represented by the variables <code>$input-btn-*</code> and <code>$input-*</code>.
                                    </p>
                                    <h3>Variables <a href="" id="Variables" class="opacity-0 hover-1">#</a></h3>
                                    <p>
                                    The buttons and form elements share global variables called <code>$input-btn-*</code>. These are routinely given new values as values for other component-specific variables.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton6"
                                            onclick="copyToClipboard('copyText6', 'copyButton6')">
                                            <i class="fa fa-copy" id="iconCopied6"></i>
                                        </button>
                                        <pre id="copyText6">
                                            <code>
$input-btn-padding-y:         .375rem;
$input-btn-padding-x:         .75rem;
$input-btn-font-family:       null;
$input-btn-font-size:         $font-size-base;
$input-btn-line-height:       $line-height-base;

$input-btn-focus-width:         .25rem;
$input-btn-focus-color-opacity: .25;
$input-btn-focus-color:         rgba($component-active-bg, $input-btn-focus-color-opacity);
$input-btn-focus-blur:          0;
$input-btn-focus-box-shadow:    0 0 $input-btn-focus-blur $input-btn-focus-width $input-btn-focus-color;

$input-btn-padding-y-sm:      .25rem;
$input-btn-padding-x-sm:      .5rem;
$input-btn-font-size-sm:      $font-size-sm;

$input-btn-padding-y-lg:      .5rem;
$input-btn-padding-x-lg:      1rem;
$input-btn-font-size-lg:      $font-size-lg;

$input-btn-border-width:      $border-width;
                                             </code>
                                        </pre>
                                    </div>
                                    <!-- code end -->









                                </div>
                            </div>
                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                <div class="right_side">
                                    <ul class="p-0">
                                        <li><a href="#Overview">Overview</a></li>
                                        <li><a href="#Form-text">Form text</a></li>
                                        <li><a href="#Disabled-forms">Disabled forms</a></li>
                                        <li><a href="#Accessibility">Accessibility</a></li>
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
                    </section>
                    <!-- pagination -->
                    <div class="col-12 col-sm-9">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/forms/layout.php">
                                <span>Previous</span>
                                <strong class="d-block">« Layout</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/forms/range.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Range »</strong>
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