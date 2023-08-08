<?php
$title = 'UX4G | Form control  ';
$canonical = 'https://doc.ux4g.gov.in/forms/form-control.php';

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
                            <li class="breadcrumb-item"><a href="/category/forms.php">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Control</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <h1 class="mb-30"> Form Control</h1>
                    <p>Custom styles, <code>sizing</code>, attention states, and other features can be used to modify
                        textual form controls like <Inputs> and <textareas>.</p>
                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                        <div class="row">

                            <div class="col-sm-9 ">
                                <div class="body_content">
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton1"
                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                        </button>
                                        <div id="copyText1">
<pre>
<code>&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;exampleFormControlInput1&quot; class=&quot;form-label&quot;&gt;Email address&lt;/label&gt;
  &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleFormControlInput1&quot; placeholder=&quot;name@example.com&quot;/&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;exampleFormControlTextarea1&quot; class=&quot;form-label&quot;&gt;Example textarea&lt;/label&gt;
  &lt;textarea class=&quot;form-control&quot; id=&quot;exampleFormControlTextarea1&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;</code>
                                            </pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">
                                        RESULT
                                    </h5>

                                    <div class="code_bg rounded p-3">
                                        <div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Email address</label><input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"></div><div class="mb-3"><label for="exampleFormControlTextarea1" class="form-label">Example textarea</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></div>
                                    </div>
                                    <!-- RESULT end -->

                                    <h2 class="mt-20">Sizing <a href="" id="Sizing" class="opacity-0 hover-1">#</a>
                                    </h2>
                                    <p>Set heights using classes like <code>.form-control-lg</code> and
                                        <code>.form-control-sm</code>.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton2"
                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                        </button>
                                        <div id="copyText2">
                                            <pre><code>&lt;input class=&quot;form-control form-control-lg mb-3&quot; type=&quot;text&quot; placeholder=&quot;.form-control-lg&quot; aria-label=&quot;.form-control-lg example&quot;/&gt;
&lt;input class=&quot;form-control mb-3&quot; type=&quot;text&quot; placeholder=&quot;Default input&quot; aria-label=&quot;default input example&quot;/&gt;
&lt;input class=&quot;form-control form-control-sm mb-3&quot; type=&quot;text&quot; placeholder=&quot;.form-control-sm&quot; aria-label=&quot;.form-control-sm example&quot;/&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example"><input class="form-control mb-3" type="text" placeholder="Default input" aria-label="default input example"><input class="form-control form-control-sm mb-3" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Disabled <a href="" id="Disabled" class="opacity-0 hover-1">#</a>
                                    </h2>
                                    <p>
                                        To give an input a grayed-out appearance, stop pointer events, and prevent
                                        focusing, add the <code>disabled</code> boolean attribute.
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton3"
                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                        </button>
                                        <div id="copyText3">
                                            <pre><code>&lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Disabled input&quot; aria-label=&quot;Disabled input example&quot; disabled/&gt;
&lt;input class=&quot;form-control&quot; type=&quot;text&quot; value=&quot;Disabled readonly input&quot; aria-label=&quot;Disabled input example&quot; disabled readonly/&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- result -->
                                    <h5 class="result m-0">
                                        RESULT
                                    </h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example">
                                            <input class="form-control mb-15" type="text" placeholder="Disabled input"
                                                aria-label="Disabled input example" disabled="">
                                            <input class="form-control mb-15" type="text"
                                                value="Disabled readonly input" aria-label="Disabled input example"
                                                disabled="" readonly="">
                                        </div>
                                    </div>
                                    <!-- result end -->

                                    <h2 class="mt-20">Readonly <a href="" id="Readonly" class="opacity-0 hover-1">#</a>
                                    </h2>
                                    <p>
                                        To prevent the value of an input from being changed, add the
                                        <code>readonly</code> boolean property to the input. <code>Disabled</code>
                                        inputs cannot be focused or selected, while read-only inputs can.
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton4"
                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                        </button>
                                        <div id="copyText4">
                                            <pre><code>&lt;input class=&quot;form-control&quot; type=&quot;text&quot; value=&quot;Readonly input here...&quot; aria-label=&quot;readonly input example&quot; readonly/&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <input class="form-control" type="text" aria-label="readonly input example" value="Readonly input here...">
                                    </div>
                                    <!-- RESULT end -->

                                    <h2 class="mt-20">Readonly plain text <a href="" id="Readonly-plain-text"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                        To remove the default form field styling and maintain the proper margin and
                                        padding, replace <code>.form-control</code> with
                                        <code>.form-control-plaintext</code> in your form code if you want the
                                        <code>&lt;input readonly&gt;</code> components to be treated as plain text.
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton5"
                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                        </button>
                                        <div id="copyText5">
                                            <pre><code> &lt;div class=&quot;mb-3 row&quot;&gt;
    &lt;label for=&quot;staticEmail&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
    &lt;div class=&quot;col-sm-10&quot;&gt;
      &lt;input type=&quot;text&quot; readonly class=&quot;form-control-plaintext&quot; id=&quot;staticEmail&quot; value=&quot;email@example.com&quot;/&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mb-3 row&quot;&gt;
    &lt;label for=&quot;inputPassword&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Password&lt;/label&gt;
    &lt;div class=&quot;col-sm-10&quot;&gt;
      &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword&quot;/&gt;
    &lt;/div&gt;
  &lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <div class="mb-3 row"><label for="staticEmail" class="col-sm-2 col-form-label">Email</label><div class="col-sm-10"><input type="text" class="form-control-plaintext" id="staticEmail" value="email@example.com"></div></div><div class="mb-3 row"><label for="inputPassword" class="col-sm-2 col-form-label">Password</label><div class="col-sm-10"><input type="password" class="form-control" id="inputPassword"></div></div>
                                    </div>
                                    <!-- code end -->

                                    <div class="code_bg rounded p-3 mt-20">
                                        <button class="btn btn-outline-primary float-end" id="copyButton6"
                                            onclick="copyToClipboard('copyText6', 'copyButton6')">
                                            <i class="fa fa-copy" id="iconCopied6"></i>
                                        </button>
                                        <div id="copyText6">
                                            
                                            <pre><code>&lt;form class=&quot;row g-3&quot;&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;label for=&quot;staticEmail2&quot; class=&quot;visually-hidden&quot;&gt;Email&lt;/label&gt;
    &lt;input type=&quot;text&quot; readonly class=&quot;form-control-plaintext&quot; id=&quot;staticEmail2&quot; value=&quot;email@example.com&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;label for=&quot;inputPassword2&quot; class=&quot;visually-hidden&quot;&gt;Password&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword2&quot; placeholder=&quot;Password&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary mb-3&quot;&gt;Confirm identity&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- result -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <form class="row g-3"><div class="col-auto"><label for="staticEmail2" class="visually-hidden">Email</label><input type="text" class="form-control-plaintext" id="staticEmail2" value="email@example.com"></div><div class="col-auto"><label for="inputPassword2" class="visually-hidden">Password</label><input type="password" class="form-control" id="inputPassword2" placeholder="Password"></div><div class="col-auto"><button type="submit" class="btn btn-primary mb-3">Confirm identity</button></div></form>
                                    </div>
                                    <!-- result end -->

                                    <h2 class="mt-20">File input <a href="" id="File-input"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3 mt-20">
                                        <button class="btn btn-outline-primary float-end" id="copyButton7"
                                            onclick="copyToClipboard('copyText7', 'copyButton7')">
                                            <i class="fa fa-copy" id="iconCopied7"></i>
                                        </button>
                                        <div id="copyText7">
                                            
                                            <pre><code>&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;formFile&quot; class=&quot;form-label&quot;&gt;Default file input example&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;formFile&quot;/&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;formFileMultiple&quot; class=&quot;form-label&quot;&gt;Multiple files input example&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;formFileMultiple&quot; multiple/&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;formFileDisabled&quot; class=&quot;form-label&quot;&gt;Disabled file input example&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;formFileDisabled&quot; disabled/&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;formFileSm&quot; class=&quot;form-label&quot;&gt;Small file input example&lt;/label&gt;
  &lt;input class=&quot;form-control form-control-sm&quot; id=&quot;formFileSm&quot; type=&quot;file&quot;/&gt;
&lt;/div&gt;
&lt;div&gt;
  &lt;label for=&quot;formFileLg&quot; class=&quot;form-label&quot;&gt;Large file input example&lt;/label&gt;
  &lt;input class=&quot;form-control form-control-lg&quot; id=&quot;formFileLg&quot; type=&quot;file&quot;/&gt;
&lt;/div&gt;</code></pre>
                                        </div>

                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="mb-3"><label for="formFile" class="form-label">Default file input example</label><input class="form-control" type="file" id="formFile"></div><div class="mb-3"><label for="formFileMultiple" class="form-label">Multiple files input example</label><input class="form-control" type="file" id="formFileMultiple" multiple=""></div><div class="mb-3"><label for="formFileDisabled" class="form-label">Disabled file input example</label><input class="form-control" type="file" id="formFileDisabled" disabled=""></div><div class="mb-3"><label for="formFileSm" class="form-label">Small file input example</label><input class="form-control form-control-sm" id="formFileSm" type="file"></div><div><label for="formFileLg" class="form-label">Large file input example</label><input class="form-control form-control-lg" id="formFileLg" type="file"></div>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Color <a href="" id="Color" class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                        Add <code>.form-control-color</code> to the <code>< input ></code> and
                                        <code>type="color"</code> to the element. The modifier class is used to override
                                        various browser quirks and specify fixed heights.
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton8"
                                            onclick="copyToClipboard('copyText8', 'copyButton8')">
                                            <i class="fa fa-copy" id="iconCopied8"></i>
                                        </button>
                                        <div id="copyText8">
                                            
                                            <pre><code>&lt;label for=&quot;exampleColorInput&quot; class=&quot;form-label&quot;&gt;Color picker&lt;/label&gt;
&lt;input type=&quot;color&quot; class=&quot;form-control form-control-color&quot; id=&quot;exampleColorInput&quot; value=&quot;#563d7c&quot; title=&quot;Choose your color&quot;/&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <h5 class="result m-0">RESULT</h5>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <label for="exampleColorInput" class="form-label">Color picker</label><input type="color" class="form-control form-control-color" id="exampleColorInput" title="Choose your color" value="#563d7c">
                                    </div>
                                    <!-- code end -->

                                    <h2 class="mt-20">Datalists <a href="" id="Datalists"
                                            class="opacity-0 hover-1">#</a> </h2>
                                    <p>
                                        You can establish a group of "options" that can be accessed (and autocompleted)
                                        from within a "input" by using datalists. These are comparable to
                                        <code>&lt;choose&gt;</code> components but have additional restrictions on menu
                                        layout. Although most operating systems and browsers offer some support for
                                        <code>&lt;datalist&gt;</code> components, their appearance is, at best,
                                        inconsistent.
                                    </p>

                                    <p>Learn more about <a href="https://caniuse.com/datalist" target="_blank"
                                            rel="noopener noreferrer">support for datalist elements</a>.</p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton9"
                                            onclick="copyToClipboard('copyText9', 'copyButton9')">
                                            <i class="fa fa-copy" id="iconCopied9"></i>
                                        </button>
                                        <div id="copyText9">
                                        
                                            <pre><code>&lt;label for=&quot;exampleDataList&quot; class=&quot;form-label&quot;&gt;Datalist example&lt;/label&gt;
&lt;input class=&quot;form-control&quot; list=&quot;datalistOptions&quot; id=&quot;exampleDataList&quot; placeholder=&quot;Type to search...&quot;/&gt;
&lt;datalist id=&quot;datalistOptions&quot;&gt;
  &lt;option value=&quot;San Francisco&quot;/&gt;
  &lt;option value=&quot;New York&quot;/&gt;
  &lt;option value=&quot;Seattle&quot;/&gt;
  &lt;option value=&quot;Los Angeles&quot;/&gt;
  &lt;option value=&quot;Chicago&quot;/&gt;
&lt;/datalist&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <h5 class="result m-0">RESULT</h5>
                                    <!-- code -->
                                    <div class="code-bg rounded p-3">
                                        <label for="exampleDataList" class="form-label">Datalist example</label><input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..."><datalist id="datalistOptions"><option value="San Francisco"></option><option value="New York"></option><option value="Seattle"></option><option value="Los Angeles"></option><option value="Chicago"></option></datalist>
                                    </div>
                                    <!-- code end -->

                                    <h2 class="mb-20 mt-20">Sass <a href="" id="Sass" class="opacity-0 hover-1"> #</a>
                                    </h2>
                                    <h3 class="mb-20 mt-20">Variables <a href="" id="Variables"
                                            class="opacity-0 hover-1"> #</a></h3>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton10"
                                            onclick="copyToClipboard('copyText10', 'copyButton10')">
                                            <i class="fa fa-copy" id="iconCopied10"></i>
                                        </button>
                                        <pre id="copyText10"><code>$input-padding-y:                       $input-btn-padding-y;
$input-padding-x:                       $input-btn-padding-x;
$input-font-family:                     $input-btn-font-family;
$input-font-size:                       $input-btn-font-size;
$input-font-weight:                     $font-weight-base;
$input-line-height:                     $input-btn-line-height;

$input-padding-y-sm:                    $input-btn-padding-y-sm;
$input-padding-x-sm:                    $input-btn-padding-x-sm;
$input-font-size-sm:                    $input-btn-font-size-sm;

$input-padding-y-lg:                    $input-btn-padding-y-lg;
$input-padding-x-lg:                    $input-btn-padding-x-lg;
$input-font-size-lg:                    $input-btn-font-size-lg;

$input-bg:                              var(--#{$prefix}body-bg);
$input-disabled-color:                  null;
$input-disabled-bg:                     var(--#{$prefix}secondary-bg);
$input-disabled-border-color:           null;

$input-color:                           var(--#{$prefix}body-color);
$input-border-color:                    var(--#{$prefix}border-color);
$input-border-width:                    $input-btn-border-width;
$input-box-shadow:                      $box-shadow-inset;

$input-border-radius:                   var(--#{$prefix}border-radius);
$input-border-radius-sm:                var(--#{$prefix}border-radius-sm);
$input-border-radius-lg:                var(--#{$prefix}border-radius-lg);

$input-focus-bg:                        $input-bg;
$input-focus-border-color:              tint-color($component-active-bg, 50%);
$input-focus-color:                     $input-color;
$input-focus-width:                     $input-btn-focus-width;
$input-focus-box-shadow:                $input-btn-focus-box-shadow;

$input-placeholder-color:               var(--#{$prefix}secondary-color);
$input-plaintext-color:                 var(--#{$prefix}body-color);

$input-height-border:                   calc(#{$input-border-width} * 2); // stylelint-disable-line function-disallowed-list

$input-height-inner:                    add($input-line-height * 1em, $input-padding-y * 2);
$input-height-inner-half:               add($input-line-height * .5em, $input-padding-y);
$input-height-inner-quarter:            add($input-line-height * .25em, $input-padding-y * .5);

$input-height:                          add($input-line-height * 1em, add($input-padding-y * 2, $input-height-border, false));
$input-height-sm:                       add($input-line-height * 1em, add($input-padding-y-sm * 2, $input-height-border, false));
$input-height-lg:                       add($input-line-height * 1em, add($input-padding-y-lg * 2, $input-height-border, false));

$input-transition:                      border-color .15s ease-in-out, box-shadow .15s ease-in-out;

$form-color-width:                      3rem;</code></pre>
                                    </div>
                                    <!-- code end -->
                                    <p class="mt-20"><code>$form-label-*</code> and <code>$form-text-*</code> are for
                                        our <code>&lt;label&gt;</code>s and <code>.form-text</code> component.</p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton11"
                                            onclick="copyToClipboard('copyText11', 'copyButton11')">
                                            <i class="fa fa-copy" id="iconCopied11"></i>
                                        </button>
                                        <pre id="copyText11"><code>$form-label-margin-bottom:              .5rem;
$form-label-font-size:                  null;
$form-label-font-style:                 null;
$form-label-font-weight:                null;
$form-label-color:                      null;</code></pre>

                                    </div>
                                    <!-- code end -->

                                    <!-- code -->
                                    <div class="code_bg rounded p-3 mt-20">
                                        <button class="btn btn-outline-primary float-end" id="copyButton12"
                                            onclick="copyToClipboard('copyText12', 'copyButton12')">
                                            <i class="fa fa-copy" id="iconCopied12"></i>
                                        </button>
                                        <pre id="copyText12"><code>$form-text-margin-top:                  .25rem;
$form-text-font-size:                   $small-font-size;
$form-text-font-style:                  null;
$form-text-font-weight:                 null;
$form-text-color:                       var(--#{$prefix}secondary-color);</code></pre>

                                    </div>
                                    <!-- code end -->
                                    <p class="mt-20"><code>$form-file-*</code> are for file input.</p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton13"
                                            onclick="copyToClipboard('copyText13', 'copyButton13')">
                                            <i class="fa fa-copy" id="iconCopied13"></i>
                                        </button>
                                        <pre id="copyText13"><code>$form-file-button-color:          $input-color;
$form-file-button-bg:             var(--#{$prefix}tertiary-bg);
$form-file-button-hover-bg:       var(--#{$prefix}secondary-bg);</code></pre>

                                    </div>
                                    <!-- code end -->














                                </div>
                            </div>
                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                <div class="right_side">
                                    <ul class="p-0">
                                        <li><a href="#Sizing">Sizing</a></li>
                                        <li><a href="#Disabled">Disabled</a></li>
                                        <li><a href="#Readonly">Readonly</a></li>
                                        <li><a href="#Readonly-plain-text">Readonly plain text</a></li>
                                        <li><a href="#File-input">File input</a></li>
                                        <li><a href="#Color">Color</a></li>
                                        <li><a href="#Datalists">Datalists</a></li>
                                        <li><a href="#Sass">Sass</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- row end -->
                    </section>
                    <!-- pagination -->
                    <div class="col-12 col-sm-9">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/category/forms.php">
                                <span>Previous</span>
                                <strong class="d-block">« Forms</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/forms/floating-labels.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Floating Labels »</strong>
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