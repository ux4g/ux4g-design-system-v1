<?php
$title = 'UX4G | Layout';
$canonical = 'https://doc.ux4g.gov.in/forms/layout.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Layout</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="col-sm-9">
                        <h1 class="mb-30"> Layout</h1>
                        <p>With the form layout options, structure can be provided to the forms by using inline, horizontal, or bespoke grid implementations.</p>
                    </div>
                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                        <div class="row">

                            <div class="col-sm-9">
                                <div class="body_content">
                                    <h2>Forms <a href="" id="Forms" class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    Every collection of form fields must be included within a <code>&lt;format&gt;</code> element. Although the <code>&lt;form&gt;</code> element is not default styled in Bootstrap, there are several useful browser features that are.
                                    </p>
                                    <ul class="un_order_list">
                                        <li>
                                        New to browser forms? To get an overview and a complete list of the attributes that are available, take a look at <a
                                                href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form"
                                                target="_blank" rel="noopener noreferrer">the MDN form documents</a>.
                                        </li>
                                        <li>
                                        Try to be descriptive and always give a type because a form's <code>&lt;button&gt;</code>s default to <code>type="submit"</code>.
                                        </li>
                                    </ul>
                                    <p>
                                    Almost all of our form controls have display: <code>block</code> and <code>width: 100%</code> enabled thanks to UX4G, so forms stack vertically by default. This layout can be customized for each form by adding additional classes.
                                    </p>
                                    <h2>Utilities <a href="" id="Utilities" class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    The simplest method to give forms some structure is to use <a href="/utilities/spacing.php"> margin utilities</a>. They offer fundamental label grouping, control grouping, optional form text grouping, and form validation messages. For consistency, we advise keeping with <code>margin-bottom</code> utilities and use just one direction on the whole form.
                                    </p>
                                    <p>
                                    You are free to use <code>&lt;fieldset&gt;</code>s, <code>&lt;div&gt;</code>s, or just about any other element to create your forms anyway you like.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton1"
                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                        </button>
                                        <div id="copyText1">
                                            
                                            <pre><code>&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;formGroupExampleInput&quot; class=&quot;form-label&quot;&gt;Example label&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;formGroupExampleInput&quot; placeholder=&quot;Example input placeholder&quot;/&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;formGroupExampleInput2&quot; class=&quot;form-label&quot;&gt;Another label&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;formGroupExampleInput2&quot; placeholder=&quot;Another input placeholder&quot;/&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="mb-3"><label for="formGroupExampleInput" class="form-label">Example label</label><input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"></div><div class="mb-3"><label for="formGroupExampleInput2" class="form-label">Another label</label><input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"></div>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Form grid <a href="" id="Form-grid"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    <strong>The grid classes can be used to create more intricate forms.</strong> These should be used for form layouts that need many <code>columns</code>, different widths, and more alignment choices. depends on the <code>$enable-grid-classes</code> Sass variable being active (it is by default on).
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton2"
                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                        </button>
                                        <div id="copyText2">
                                            
                                            <pre><code>&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;First name&quot; aria-label=&quot;First name&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Last name&quot; aria-label=&quot;Last name&quot;/&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="row"><div class="col"><input type="text" class="form-control" placeholder="First name" aria-label="First name"></div><div class="col"><input type="text" class="form-control" placeholder="Last name" aria-label="Last name"></div></div>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Gutters <a href="" id="Gutters" class="opacity-0 hover-1">#</a>
                                    </h2>
                                    <p>Modify the gutter width in both the inline and <code>block</code> directions by adding <a href="/layout/gutters.php">gutter modifier classes</a>. Furthermore needs the Sass option <code>$enable-grid-classes</code> to be active (it is by default on).</p>

                                    

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton3"
                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                        </button>
                                        <div id="copyText3">
                                            
                                            <pre><code>&lt;div class=&quot;row g-3&quot;&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;First name&quot; aria-label=&quot;First name&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Last name&quot; aria-label=&quot;Last name&quot;/&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="row g-3"><div class="col"><input type="text" class="form-control" placeholder="First name" aria-label="First name"></div><div class="col"><input type="text" class="form-control" placeholder="Last name" aria-label="Last name"></div></div>
                                    </div>
                                    <!-- RESULT end -->
                                    <p class="mt-20">More complex layouts can also be created with the grid system.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton4"
                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                        </button>
                                        <div id="copyText4">
                                            
                                            <pre><code>&lt;form class=&quot;row g-3&quot;&gt;
  &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;label for=&quot;inputEmail4&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;
    &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail4&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;label for=&quot;inputPassword4&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword4&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;label for=&quot;inputAddress&quot; class=&quot;form-label&quot;&gt;Address&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress&quot; placeholder=&quot;1234 Main St&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;label for=&quot;inputAddress2&quot; class=&quot;form-label&quot;&gt;Address 2&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress2&quot; placeholder=&quot;Apartment, studio, or floor&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;label for=&quot;inputCity&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputCity&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-4&quot;&gt;
    &lt;label for=&quot;inputState&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
    &lt;select id=&quot;inputState&quot; class=&quot;form-select&quot;&gt;
      &lt;option selected&gt;Choose...&lt;/option&gt;
      &lt;option&gt;...&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-2&quot;&gt;
    &lt;label for=&quot;inputZip&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputZip&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
      &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;gridCheck&quot;/&gt;
      &lt;label class=&quot;form-check-label&quot; for=&quot;gridCheck&quot;&gt;
        Check me out
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <form class="row g-3"><div class="col-md-6"><label for="inputEmail4" class="form-label">Email</label><input type="email" class="form-control" id="inputEmail4"></div><div class="col-md-6"><label for="inputPassword4" class="form-label">Password</label><input type="password" class="form-control" id="inputPassword4"></div><div class="col-12"><label for="inputAddress" class="form-label">Address</label><input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"></div><div class="col-12"><label for="inputAddress2" class="form-label">Address 2</label><input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"></div><div class="col-md-6"><label for="inputCity" class="form-label">City</label><input type="text" class="form-control" id="inputCity"></div><div class="col-md-4"><label for="inputState" class="form-label">State</label><select id="inputState" class="form-select"><option>Choose...</option><option>...</option></select></div><div class="col-md-2"><label for="inputZip" class="form-label">Zip</label><input type="text" class="form-control" id="inputZip"></div><div class="col-12"><div class="form-check"><input class="form-check-input" type="checkbox" id="gridCheck"><label class="form-check-label" for="gridCheck">Check me out</label></div></div><div class="col-12"><button type="submit" class="btn btn-primary">Sign in</button></div></form>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Horizontal form <a href="" id="Horizontal-form"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    By adding the <code>.row</code> class to form groups and the <code>.col-*-*</code> classes to set the width of the labels and controls, you may create horizontal forms using the grid. If there is a need for <code>&lt;label&gt;</code>s to be vertically centered with the form controls they are linked with, make sure to add <code>.col-form-label</code> to them as well.
                                    </p>
                                    <p>
                                    There might be a need to utilize <code>padding</code> or <code>margin</code> tools to get the precise alignment. For instance, to better align the text baseline, delete the <code>padding-top</code> from the label for the stacked radio inputs.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton5"
                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                        </button>
                                        <div id="copyText5">
                                            
                                            <pre><code>&lt;form&gt;
  &lt;div class=&quot;row mb-3&quot;&gt;
    &lt;label for=&quot;inputEmail3&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
    &lt;div class=&quot;col-sm-10&quot;&gt;
      &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail3&quot;/&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row mb-3&quot;&gt;
    &lt;label for=&quot;inputPassword3&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Password&lt;/label&gt;
    &lt;div class=&quot;col-sm-10&quot;&gt;
      &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword3&quot;/&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;fieldset class=&quot;row mb-3&quot;&gt;
    &lt;legend class=&quot;col-form-label col-sm-2 pt-0&quot;&gt;Radios&lt;/legend&gt;
    &lt;div class=&quot;col-sm-10&quot;&gt;
      &lt;div class=&quot;form-check&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;gridRadios&quot; id=&quot;gridRadios1&quot; value=&quot;option1&quot; checked/&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;gridRadios1&quot;&gt;
          First radio
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;gridRadios&quot; id=&quot;gridRadios2&quot; value=&quot;option2&quot;/&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;gridRadios2&quot;&gt;
          Second radio
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check disabled&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;gridRadios&quot; id=&quot;gridRadios3&quot; value=&quot;option3&quot; disabled/&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;gridRadios3&quot;&gt;
          Third disabled radio
        &lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/fieldset&gt;
  &lt;div class=&quot;row mb-3&quot;&gt;
    &lt;div class=&quot;col-sm-10 offset-sm-2&quot;&gt;
      &lt;div class=&quot;form-check&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;gridCheck1&quot;/&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;gridCheck1&quot;&gt;
          Example checkbox
        &lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <form><div class="row mb-3"><label for="inputEmail3" class="col-sm-2 col-form-label">Email</label><div class="col-sm-10"><input type="email" class="form-control" id="inputEmail3"></div></div><div class="row mb-3"><label for="inputPassword3" class="col-sm-2 col-form-label">Password</label><div class="col-sm-10"><input type="password" class="form-control" id="inputPassword3"></div></div><fieldset class="row mb-3"><legend class="col-form-label col-sm-2 pt-0">Radios</legend><div class="col-sm-10"><div class="form-check"><input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked=""><label class="form-check-label" for="gridRadios1">First radio</label></div><div class="form-check"><input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2"><label class="form-check-label" for="gridRadios2">Second radio</label></div><div class="form-check disabled"><input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" disabled="" value="option3"><label class="form-check-label" for="gridRadios3">Third disabled radio</label></div></div></fieldset><div class="row mb-3"><div class="col-sm-10 offset-sm-2"><div class="form-check"><input class="form-check-input" type="checkbox" id="gridCheck1"><label class="form-check-label" for="gridCheck1">Example checkbox</label></div></div></div><button type="submit" class="btn btn-primary">Sign in</button></form>
                                    </div>
                                    <!-- RESULT end -->

                                    <h3 class="mt-20">Horizontal form label sizing <a href=""
                                            id="Horizontal-form-label-sizing" class="opacity-0 hover-1">#</a></h3>
                                    <p>Be sure to use <code >.col-form-label-sm</code> or <code
                                            >.col-form-label-lg</code> to your <code
                                            >&lt;label&gt;</code>s or <code
                                           >&lt;legend&gt;</code>s to correctly follow the size of
                                        <code >.form-control-lg</code> and <code
                                            >.form-control-sm</code>.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton6"
                                            onclick="copyToClipboard('copyText6', 'copyButton6')">
                                            <i class="fa fa-copy" id="iconCopied6"></i>
                                        </button>
                                        <div id="copyText6">
                                            
                                            <pre><code>&lt;div class=&quot;row mb-3&quot;&gt;
  &lt;label for=&quot;colFormLabelSm&quot; class=&quot;col-sm-2 col-form-label col-form-label-sm&quot;&gt;Email&lt;/label&gt;
  &lt;div class=&quot;col-sm-10&quot;&gt;
    &lt;input type=&quot;email&quot; class=&quot;form-control form-control-sm&quot; id=&quot;colFormLabelSm&quot; placeholder=&quot;col-form-label-sm&quot;/&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row mb-3&quot;&gt;
  &lt;label for=&quot;colFormLabel&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
  &lt;div class=&quot;col-sm-10&quot;&gt;
    &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;colFormLabel&quot; placeholder=&quot;col-form-label&quot;/&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row&quot;&gt;
  &lt;label for=&quot;colFormLabelLg&quot; class=&quot;col-sm-2 col-form-label col-form-label-lg&quot;&gt;Email&lt;/label&gt;
  &lt;div class=&quot;col-sm-10&quot;&gt;
    &lt;input type=&quot;email&quot; class=&quot;form-control form-control-lg&quot; id=&quot;colFormLabelLg&quot; placeholder=&quot;col-form-label-lg&quot;/&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT  -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="row mb-3"><label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label><div class="col-sm-10"><input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm"></div></div><div class="row mb-3"><label for="colFormLabel" class="col-sm-2 col-form-label">Email</label><div class="col-sm-10"><input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label"></div></div><div class="row"><label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label><div class="col-sm-10"><input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg"></div></div>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Column sizing <a href="" id="Column-sizing"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    The grid design allows to insert any number of <code>.cols</code> within a <code>.row</code>, as demonstrated in the preceding instances. The available width will be divided equally between them. With special column classes like <code>.col-sm-7</code>, you can choose a subset of the columns to occupy more or less space while the remaining <code>.cols</code> equally divide the remaining space.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton7"
                                            onclick="copyToClipboard('copyText7', 'copyButton7')">
                                            <i class="fa fa-copy" id="iconCopied7"></i>
                                        </button>
                                        <div id="copyText7">
                                            
                                            <pre><code>&lt;div class=&quot;row g-3&quot;&gt;
  &lt;div class=&quot;col-sm-7&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;City&quot; aria-label=&quot;City&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;State&quot; aria-label=&quot;State&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Zip&quot; aria-label=&quot;Zip&quot;/&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                       <div class="row g-3"><div class="col-sm-7"><input type="text" class="form-control" placeholder="City" aria-label="City"></div><div class="col-sm"><input type="text" class="form-control" placeholder="State" aria-label="State"></div><div class="col-sm"><input type="text" class="form-control" placeholder="Zip" aria-label="Zip"></div></div>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Auto-sizing <a href="" id="Auto-sizing"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    The example below centers the contents and changes vertically using the <code>flexbox</code> tool.To ensure that the columns only take up as much room as necessary, convert col to <code>.col-auto</code>. In other words, the column adjusts its size according to the contents.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton8"
                                            onclick="copyToClipboard('copyText8', 'copyButton8')">
                                            <i class="fa fa-copy" id="iconCopied8"></i>
                                        </button>
                                        <div id="copyText8">
                                            
                                            <pre><code>&lt;form class=&quot;row gy-2 gx-3 align-items-center&quot;&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;label class=&quot;visually-hidden&quot; for=&quot;autoSizingInput&quot;&gt;Name&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;autoSizingInput&quot; placeholder=&quot;Jane Doe&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;label class=&quot;visually-hidden&quot; for=&quot;autoSizingInputGroup&quot;&gt;Username&lt;/label&gt;
    &lt;div class=&quot;input-group&quot;&gt;
      &lt;div class=&quot;input-group-text&quot;&gt;@&lt;/div&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;autoSizingInputGroup&quot; placeholder=&quot;Username&quot;/&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;label class=&quot;visually-hidden&quot; for=&quot;autoSizingSelect&quot;&gt;Preference&lt;/label&gt;
    &lt;select class=&quot;form-select&quot; id=&quot;autoSizingSelect&quot;&gt;
      &lt;option selected&gt;Choose...&lt;/option&gt;
      &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
      &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
      &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
      &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;autoSizingCheck&quot;/&gt;
      &lt;label class=&quot;form-check-label&quot; for=&quot;autoSizingCheck&quot;&gt;
        Remember me
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <form class="row gy-2 gx-3 align-items-center"><div class="col-auto"><label class="visually-hidden" for="autoSizingInput">Name</label><input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe"></div><div class="col-auto"><label class="visually-hidden" for="autoSizingInputGroup">Username</label><div class="input-group"><div class="input-group-text">@</div><input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username"></div></div><div class="col-auto"><label class="visually-hidden" for="autoSizingSelect">Preference</label><select class="form-select" id="autoSizingSelect"><option>Choose...</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option></select></div><div class="col-auto"><div class="form-check"><input class="form-check-input" type="checkbox" id="autoSizingCheck"><label class="form-check-label" for="autoSizingCheck">Remember me</label></div></div><div class="col-auto"><button type="submit" class="btn btn-primary">Submit</button></div></form>
                                    </div>
                                    <!-- RESULT end -->
                                    <p class="mt-20">You can then remix that once again with size-specific column classes.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton9"
                                            onclick="copyToClipboard('copyText9', 'copyButton9')">
                                            <i class="fa fa-copy" id="iconCopied9"></i>
                                        </button>
                                        <div id="copyText9">
                                            
                                            <pre><code>&lt;form class=&quot;row gx-3 gy-2 align-items-center&quot;&gt;
  &lt;div class=&quot;col-sm-3&quot;&gt;
    &lt;label class=&quot;visually-hidden&quot; for=&quot;specificSizeInputName&quot;&gt;Name&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;specificSizeInputName&quot; placeholder=&quot;Jane Doe&quot;/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-3&quot;&gt;
    &lt;label class=&quot;visually-hidden&quot; for=&quot;specificSizeInputGroupUsername&quot;&gt;Username&lt;/label&gt;
    &lt;div class=&quot;input-group&quot;&gt;
      &lt;div class=&quot;input-group-text&quot;&gt;@&lt;/div&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;specificSizeInputGroupUsername&quot; placeholder=&quot;Username&quot;/&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-3&quot;&gt;
    &lt;label class=&quot;visually-hidden&quot; for=&quot;specificSizeSelect&quot;&gt;Preference&lt;/label&gt;
    &lt;select class=&quot;form-select&quot; id=&quot;specificSizeSelect&quot;&gt;
      &lt;option selected&gt;Choose...&lt;/option&gt;
      &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
      &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
      &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
      &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;autoSizingCheck2&quot;/&gt;
      &lt;label class=&quot;form-check-label&quot; for=&quot;autoSizingCheck2&quot;&gt;
        Remember me
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                       <form class="row gx-3 gy-2 align-items-center"><div class="col-sm-3"><label class="visually-hidden" for="specificSizeInputName">Name</label><input type="text" class="form-control" id="specificSizeInputName" placeholder="Jane Doe"></div><div class="col-sm-3"><label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label><div class="input-group"><div class="input-group-text">@</div><input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username"></div></div><div class="col-sm-3"><label class="visually-hidden" for="specificSizeSelect">Preference</label><select class="form-select" id="specificSizeSelect"><option>Choose...</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option></select></div><div class="col-auto"><div class="form-check"><input class="form-check-input" type="checkbox" id="autoSizingCheck2"><label class="form-check-label" for="autoSizingCheck2">Remember me</label></div></div><div class="col-auto"><button type="submit" class="btn btn-primary">Submit</button></div></form>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Inline forms <a href="" id="Inline-forms"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    In order to construct responsive horizontal layouts, use the <code>.row-cols-*</code> classes. Create <code>gutters</code> that are oriented both horizontally and vertically by adding gutter modifier classes. The <code>.col-12</code> format helps stack the form controls and other elements on small mobile viewports. The <code>.form-checkbox</code> is correctly aligned because the form elements are centered thanks to the <code>.align-items-center</code> setting.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton10"
                                            onclick="copyToClipboard('copyText10', 'copyButton10')">
                                            <i class="fa fa-copy" id="iconCopied10"></i>
                                        </button>
                                        <div id="copyText10">
                                            
                                            <pre><code>&lt;form class=&quot;row row-cols-lg-auto g-3 align-items-center&quot;&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;label class=&quot;visually-hidden&quot; for=&quot;inlineFormInputGroupUsername&quot;&gt;Username&lt;/label&gt;
    &lt;div class=&quot;input-group&quot;&gt;
      &lt;div class=&quot;input-group-text&quot;&gt;@&lt;/div&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inlineFormInputGroupUsername&quot; placeholder=&quot;Username&quot;/&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;label class=&quot;visually-hidden&quot; for=&quot;inlineFormSelectPref&quot;&gt;Preference&lt;/label&gt;
    &lt;select class=&quot;form-select&quot; id=&quot;inlineFormSelectPref&quot;&gt;
      &lt;option selected&gt;Choose...&lt;/option&gt;
      &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
      &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
      &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;

  
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
      &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineFormCheck&quot;/&gt;
      &lt;label class=&quot;form-check-label&quot; for=&quot;inlineFormCheck&quot;&gt;
        Remember me
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <form class="row row-cols-lg-auto g-3 align-items-center"><div class="col-12"><label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label><div class="input-group"><div class="input-group-text">@</div><input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username"></div></div><div class="col-12"><label class="visually-hidden" for="inlineFormSelectPref">Preference</label><select class="form-select" id="inlineFormSelectPref"><option>Choose...</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option></select></div><div class="col-12"><div class="form-check"><input class="form-check-input" type="checkbox" id="inlineFormCheck"><label class="form-check-label" for="inlineFormCheck">Remember me</label></div></div><div class="col-12"><button type="submit" class="btn btn-primary">Submit</button></div></form>
                                    </div>
                                    <!-- RESULT end -->






                                </div>
                            </div>
                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                <div class="right_side">
                                    <ul class="p-0">
                                        <li><a href="#Forms">Forms</a></li>
                                        <li><a href="#Utilities">Utilities</a></li>
                                        <li><a href="#Form-grid">Form grid</a></li>
                                        <li><a href="#Gutters">Gutters</a></li>
                                        <li>
                                            <a href="#Horizontal-form">Horizontal form</a>
                                            <ul>
                                                <li><a href="#Horizontal-form-label-sizing">Horizontal form label
                                                        sizing</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#Column-sizing">Column sizing</a></li>
                                        <li><a href="#Auto-sizing">Auto-sizing</a></li>
                                        <li><a href="#Inline-forms">Inline forms</a></li>




                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- row end -->
                    </section>
                    <!-- pagination -->
                    <div class="col-12 col-sm-9">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/forms/input-group.php">
                                <span>Previous</span>
                                <strong class="d-block">« Input Group</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/forms/overview.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Overview »</strong>
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