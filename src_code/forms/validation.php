<?php
$title = 'UX4G | Validation';
$canonical = 'https://doc.ux4g.gov.in/forms/validation.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Validation</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="col-sm-9">
                        <h1 class="mb-30"> Validation</h1>
                        <p>With HTML5 form validation, through browser default behaviors or custom styles, and JavaScript, give the consumers useful, actionable feedback.</p>
                        <p><strong> <i class="fa fa-exclamation-triangle"></i> CAUTION</strong></p>

                        <div class="bd-callout bd-callout-warning blockquote_warning mt-20">

                            <p>We are aware that currently the client-side custom validation styles and tooltips are not
                                accessible, since they are not exposed to assistive technologies. While we work on a
                                solution, we'd recommend either using the server-side option or the default browser
                                validation method.</p>



                        </div>
                    </div>
                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                        <div class="row">

                            <div class="col-sm-9">
                                <div class="body_content">


                                    <h2 class="mt-20">How it works <a href="" id="How-it-works" class="opacity-0 hover-1">#</a></h2>
                                    <p>Here is how UX4G handles form validation:</p>
                                    <ul class="un_order_list">
                                        <li>
                                        The two pseudo-classes <code>:invalid</code> and <code>:valid</code> in CSS are used to provide HTML form validation. It applies to the <code>&lt;textarea&gt;</code>, <code>&lt;select&gt;</code>, and <code>&lt;input&gt;</code> components.
                                        </li>
                                        <li>
                                        The <code>:invalid</code> and <code>:valid</code> styles in UX4G are scoped to the parent <code>.was-validated</code> class, which is typically applied to the <code>&lt;form&gt;</code>. Without a value, any necessary field displays as invalid when the page loads. This gives you the option to decide when to activate them (usually following a failed form submission).
                                        </li>
                                        <li>
                                        <strong>For server-side validation</strong>, the <code>.is-invalid</code> and <code>.is-valid</code> classes can be used as a backup to the <code>pseudo-classes</code>. They don't need a parent class that has been validated by .was.
                                        </li>
                                        <li>
                                        We cannot (at the moment) apply styles to a <code>&lt;label&gt;</code> that appears before a form control in the <code>DOM </code> without the use of specialized JavaScript due to CSS limitations.
                                        </li>
                                        <li>
                                        The constraint validation <code>API</code>, a collection of <code>JavaScript</code> methods for validating form controls, is supported by all current browsers.
Browser-defaults
                                        </li>
                                        <li>
                                        The defaults for each browser, which are not styleable with CSS, may be used in feedback messages, or we may create our own feedback styles using additional HTML and CSS.
                                        </li>
                                        <li>
                                        With JavaScript's setCustomValidity method, you may offer unique validity messages.
                                        </li>
                                        
                                    </ul>

                                    <h2 class="mt-20">Custom styles <a href="" id="Custom-styles"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    Must include the novalidate boolean element in your <code>&lt;form&gt;</code> in order to receive custom UX4G form validation messages. While the built-in feedback tooltips of the browser are <code>disabled</code>, JavaScript's form validation <code>APIs</code> are still available. If trying to submit the form below, the JavaScript will catch it and send the feedback. The form controls will have the <code>:invalid</code> and <code>:valid</code> styles applied when you try to submit.
                                    </p>
                                    <p>
                                    To improve feedback communication, users can apply custom <code>colors</code>, <code>borders</code>, focus styles, and <code>backdrop icons</code>. Only with are background icons for <code>"select"s</code> accessible .instead of <code>.form-control</code>, use form-select.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton1"
                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                        </button>
                                        <div id="copyText1">
                                          
                                            <pre><code>&lt;form class=&quot;row g-3 needs-validation&quot; novalidate&gt;
  &lt;div class=&quot;col-md-4&quot;&gt;
    &lt;label for=&quot;validationCustom01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom01&quot; value=&quot;Mark&quot; required/&gt;
    &lt;div class=&quot;valid-feedback&quot;&gt;
      Looks good!
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-4&quot;&gt;
    &lt;label for=&quot;validationCustom02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom02&quot; value=&quot;Otto&quot; required/&gt;
    &lt;div class=&quot;valid-feedback&quot;&gt;
      Looks good!
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-4&quot;&gt;
    &lt;label for=&quot;validationCustomUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
    &lt;div class=&quot;input-group has-validation&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend&quot;&gt;@&lt;/span&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustomUsername&quot; aria-describedby=&quot;inputGroupPrepend&quot; required/&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;
        Please choose a username.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;label for=&quot;validationCustom03&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom03&quot; required/&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;
      Please provide a valid city.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-3&quot;&gt;
    &lt;label for=&quot;validationCustom04&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
    &lt;select class=&quot;form-select&quot; id=&quot;validationCustom04&quot; required&gt;
      &lt;option selected disabled value=&quot;&quot;&gt;Choose...&lt;/option&gt;
      &lt;option&gt;...&lt;/option&gt;
    &lt;/select&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;
      Please select a valid state.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-3&quot;&gt;
    &lt;label for=&quot;validationCustom05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom05&quot; required/&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;
      Please provide a valid zip.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
      &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;invalidCheck&quot; required/&gt;
      &lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck&quot;&gt;
        Agree to terms and conditions
      &lt;/label&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;
        You must agree before submitting.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <form class="row g-3 needs-validation"><div class="col-md-4"><label for="validationCustom01" class="form-label">First name</label><input type="text" class="form-control" id="validationCustom01" required="" value="Mark"><div class="valid-feedback">Looks good!</div></div><div class="col-md-4"><label for="validationCustom02" class="form-label">Last name</label><input type="text" class="form-control" id="validationCustom02" required="" value="Otto"><div class="valid-feedback">Looks good!</div></div><div class="col-md-4"><label for="validationCustomUsername" class="form-label">Username</label><div class="input-group has-validation"><span class="input-group-text" id="inputGroupPrepend">@</span><input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required=""><div class="invalid-feedback">Please choose a username.</div></div></div><div class="col-md-6"><label for="validationCustom03" class="form-label">City</label><input type="text" class="form-control" id="validationCustom03" required=""><div class="invalid-feedback">Please provide a valid city.</div></div><div class="col-md-3"><label for="validationCustom04" class="form-label">State</label><select class="form-select" id="validationCustom04" required=""><option disabled="" value="">Choose...</option><option>...</option></select><div class="invalid-feedback">Please select a valid state.</div></div><div class="col-md-3"><label for="validationCustom05" class="form-label">Zip</label><input type="text" class="form-control" id="validationCustom05" required=""><div class="invalid-feedback">Please provide a valid zip.</div></div><div class="col-12"><div class="form-check"><input class="form-check-input" type="checkbox" id="invalidCheck" required="" value=""><label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label><div class="invalid-feedback">You must agree before submitting.</div></div></div><div class="col-12"><button class="btn btn-primary" type="submit">Submit form</button></div></form>
                                    </div>
                                    <!-- RESULT end -->

                                    <!-- code -->
                                    <div class="code_bg rounded p-3 mt-20">
                                        <button class="btn btn-outline-primary float-end" id="copyButton2"
                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                        </button>
                                        <pre id="copyText2"><code>// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()</code></pre>
                                    </div>
                                    <!-- code end -->
                                    <h2 class="mt-20">Browser defaults <a href="" id="Browser-defaults"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    Don't want to create unique validation feedback messages or modify form behavior using JavaScript? All Good, can use the browser's default settings. Consider sending the form below. You'll notice a somewhat varied form of feedback depending on your browser and operating system.

                                    </p>
                                    <p>Although CSS cannot be used to style these feedback styles, JavaScript can still be used to alter the feedback text.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton3"
                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                        </button>
                                        <div id="copyText3">
                                          
                                            <pre><code>&lt;form class=&quot;row g-3&quot;&gt;
  &lt;div class=&quot;col-md-4&quot;&gt;
    &lt;label for=&quot;validationDefault01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault01&quot; value=&quot;Mark&quot; required/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-4&quot;&gt;
    &lt;label for=&quot;validationDefault02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault02&quot; value=&quot;Otto&quot; required/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-4&quot;&gt;
    &lt;label for=&quot;validationDefaultUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
    &lt;div class=&quot;input-group&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend2&quot;&gt;@&lt;/span&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefaultUsername&quot;  aria-describedby=&quot;inputGroupPrepend2&quot; required/&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;label for=&quot;validationDefault03&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault03&quot; required/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-3&quot;&gt;
    &lt;label for=&quot;validationDefault04&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
    &lt;select class=&quot;form-select&quot; id=&quot;validationDefault04&quot; required&gt;
      &lt;option selected disabled value=&quot;&quot;&gt;Choose...&lt;/option&gt;
      &lt;option&gt;...&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-3&quot;&gt;
    &lt;label for=&quot;validationDefault05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault05&quot; required/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
      &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;invalidCheck2&quot; required/&gt;
      &lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck2&quot;&gt;
        Agree to terms and conditions
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <form class="row g-3"><div class="col-md-4"><label for="validationDefault01" class="form-label">First name</label><input type="text" class="form-control" id="validationDefault01" required="" value="Mark"></div><div class="col-md-4"><label for="validationDefault02" class="form-label">Last name</label><input type="text" class="form-control" id="validationDefault02" required="" value="Otto"></div><div class="col-md-4"><label for="validationDefaultUsername" class="form-label">Username</label><div class="input-group"><span class="input-group-text" id="inputGroupPrepend2">@</span><input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required=""></div></div><div class="col-md-6"><label for="validationDefault03" class="form-label">City</label><input type="text" class="form-control" id="validationDefault03" required=""></div><div class="col-md-3"><label for="validationDefault04" class="form-label">State</label><select class="form-select" id="validationDefault04" required=""><option disabled="" value="">Choose...</option><option>...</option></select></div><div class="col-md-3"><label for="validationDefault05" class="form-label">Zip</label><input type="text" class="form-control" id="validationDefault05" required=""></div><div class="col-12"><div class="form-check"><input class="form-check-input" type="checkbox" id="invalidCheck2" required="" value=""><label class="form-check-label" for="invalidCheck2">Agree to terms and conditions</label></div></div><div class="col-12"><button class="btn btn-primary" type="submit">Submit form</button></div></form>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Server side <a href="" id="Server-side"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    Although server-side validation is not advised, can indicate which form fields are invalid and valid using the <code>.is-invalid</code> and <code>.is-valid</code> directives. Keep in mind that these classes also support <code>.invalid-feedback</code>.
                                    </p>
                                    <p>Use the <code>aria-describedby</code> attribute to link the invalid feedback or error message to the appropriate form field in the case of invalid fields (note that this feature permits more than one id to be referenced, in the event that the field already connects to extra form text).
</p>
                                    <p>
                                    Input groups need an additional <code>.has-validation</code> class to address <code>border radius</code> problems.
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton4"
                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                        </button>
                                        <div id="copyText4">
                                          
                                            <pre><code>&lt;form class=&quot;row g-3&quot;&gt;
  &lt;div class=&quot;col-md-4&quot;&gt;
    &lt;label for=&quot;validationServer01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control is-valid&quot; id=&quot;validationServer01&quot; value=&quot;Mark&quot; required/&gt;
    &lt;div class=&quot;valid-feedback&quot;&gt;
      Looks good!
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-4&quot;&gt;
    &lt;label for=&quot;validationServer02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control is-valid&quot; id=&quot;validationServer02&quot; value=&quot;Otto&quot; required/&gt;
    &lt;div class=&quot;valid-feedback&quot;&gt;
      Looks good!
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-4&quot;&gt;
    &lt;label for=&quot;validationServerUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
    &lt;div class=&quot;input-group has-validation&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend3&quot;&gt;@&lt;/span&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control is-invalid&quot; id=&quot;validationServerUsername&quot; aria-describedby=&quot;inputGroupPrepend3 validationServerUsernameFeedback&quot; required/&gt;
      &lt;div id=&quot;validationServerUsernameFeedback&quot; class=&quot;invalid-feedback&quot;&gt;
        Please choose a username.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;label for=&quot;validationServer03&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control is-invalid&quot; id=&quot;validationServer03&quot; aria-describedby=&quot;validationServer03Feedback&quot; required/&gt;
    &lt;div id=&quot;validationServer03Feedback&quot; class=&quot;invalid-feedback&quot;&gt;
      Please provide a valid city.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-3&quot;&gt;
    &lt;label for=&quot;validationServer04&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
    &lt;select class=&quot;form-select is-invalid&quot; id=&quot;validationServer04&quot; aria-describedby=&quot;validationServer04Feedback&quot; required&gt;
      &lt;option selected disabled value=&quot;&quot;&gt;Choose...&lt;/option&gt;
      &lt;option&gt;...&lt;/option&gt;
    &lt;/select&gt;
    &lt;div id=&quot;validationServer04Feedback&quot; class=&quot;invalid-feedback&quot;&gt;
      Please select a valid state.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-3&quot;&gt;
    &lt;label for=&quot;validationServer05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control is-invalid&quot; id=&quot;validationServer05&quot; aria-describedby=&quot;validationServer05Feedback&quot; required/&gt;
    &lt;div id=&quot;validationServer05Feedback&quot; class=&quot;invalid-feedback&quot;&gt;
      Please provide a valid zip.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
      &lt;input class=&quot;form-check-input is-invalid&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;invalidCheck3&quot; aria-describedby=&quot;invalidCheck3Feedback&quot; required/&gt;
      &lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck3&quot;&gt;
        Agree to terms and conditions
      &lt;/label&gt;
      &lt;div id=&quot;invalidCheck3Feedback&quot; class=&quot;invalid-feedback&quot;&gt;
        You must agree before submitting.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <form class="row g-3"><div class="col-md-4"><label for="validationServer01" class="form-label">First name</label><input type="text" class="form-control is-valid" id="validationServer01" required="" value="Mark"><div class="valid-feedback">Looks good!</div></div><div class="col-md-4"><label for="validationServer02" class="form-label">Last name</label><input type="text" class="form-control is-valid" id="validationServer02" required="" value="Otto"><div class="valid-feedback">Looks good!</div></div><div class="col-md-4"><label for="validationServerUsername" class="form-label">Username</label><div class="input-group has-validation"><span class="input-group-text" id="inputGroupPrepend3">@</span><input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required=""><div id="validationServerUsernameFeedback" class="invalid-feedback">Please choose a username.</div></div></div><div class="col-md-6"><label for="validationServer03" class="form-label">City</label><input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required=""><div id="validationServer03Feedback" class="invalid-feedback">Please provide a valid city.</div></div><div class="col-md-3"><label for="validationServer04" class="form-label">State</label><select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required=""><option disabled="" value="">Choose...</option><option>...</option></select><div id="validationServer04Feedback" class="invalid-feedback">Please select a valid state.</div></div><div class="col-md-3"><label for="validationServer05" class="form-label">Zip</label><input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required=""><div id="validationServer05Feedback" class="invalid-feedback">Please provide a valid zip.</div></div><div class="col-12"><div class="form-check"><input class="form-check-input is-invalid" type="checkbox" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required="" value=""><label class="form-check-label" for="invalidCheck3">Agree to terms and conditions</label><div id="invalidCheck3Feedback" class="invalid-feedback">You must agree before submitting.</div></div></div><div class="col-12"><button class="btn btn-primary" type="submit">Submit form</button></div></form>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Supported elements <a href="" id="Supported-elements"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>Validation styles are available for the following form controls and components:
                                    </p>
                                    <ul class="un_order_list">
                                        <li><code>&lt;input&gt;</code>s and <code
                                            >&lt;textarea&gt;</code>s with <code
                                            >.form-control</code> (including up to one <code
                                            >.form-control</code> in input groups)</li>
                                        <li><code>&lt;select&gt;</code>s with <code
                                            >.form-select</code></li>
                                        <li><code>.form-check</code>s</li>
                                    </ul>
                                    <!-- code  -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton5"
                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                        </button>
                                        <div id="copyText5">
                                          
                                            <pre><code>&lt;form class=&quot;was-validated&quot;&gt;
  &lt;div class=&quot;mb-3&quot;&gt;
    &lt;label for=&quot;validationTextarea&quot; class=&quot;form-label&quot;&gt;Textarea&lt;/label&gt;
    &lt;textarea class=&quot;form-control&quot; id=&quot;validationTextarea&quot; placeholder=&quot;Required example textarea&quot; required&gt;&lt;/textarea&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;
      Please enter a message in the textarea.
    &lt;/div&gt;
  &lt;/div&gt;

  
  &lt;div class=&quot;form-check mb-3&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;validationFormCheck1&quot; required/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;validationFormCheck1&quot;&gt;Check this checkbox&lt;/label&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;Example invalid feedback text&lt;/div&gt;
  &lt;/div&gt;

  
  &lt;div class=&quot;form-check&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;validationFormCheck2&quot; name=&quot;radio-stacked&quot; required/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;validationFormCheck2&quot;&gt;Toggle this radio&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class=&quot;form-check mb-3&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;validationFormCheck3&quot; name=&quot;radio-stacked&quot; required/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;validationFormCheck3&quot;&gt;Or toggle this other radio&lt;/label&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;More example invalid feedback text&lt;/div&gt;
  &lt;/div&gt;

  
  &lt;div class=&quot;mb-3&quot;&gt;
    &lt;select class=&quot;form-select&quot; required aria-label=&quot;select example&quot;&gt;
      &lt;option value=&quot;&quot;&gt;Open this select menu&lt;/option&gt;
      &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
      &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
      &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
    &lt;/select&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;Example invalid select feedback&lt;/div&gt;
  &lt;/div&gt;

  
  &lt;div class=&quot;mb-3&quot;&gt;
    &lt;input type=&quot;file&quot; class=&quot;form-control&quot; aria-label=&quot;file example&quot; required/&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;Example invalid form file feedback&lt;/div&gt;
  &lt;/div&gt;

  
  &lt;div class=&quot;mb-3&quot;&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot; disabled&gt;Submit form&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end-->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <form class="was-validated"><div class="mb-3"><label for="validationTextarea" class="form-label">Textarea</label><textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required=""></textarea><div class="invalid-feedback">Please enter a message in the textarea.</div></div><div class="form-check mb-3"><input type="checkbox" class="form-check-input" id="validationFormCheck1" required=""><label class="form-check-label" for="validationFormCheck1">Check this checkbox</label><div class="invalid-feedback">Example invalid feedback text</div></div><div class="form-check"><input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required=""><label class="form-check-label" for="validationFormCheck2">Toggle this radio</label></div><div class="form-check mb-3"><input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required=""><label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label><div class="invalid-feedback">More example invalid feedback text</div></div><div class="mb-3"><select class="form-select" required="" aria-label="select example"><option value="">Open this select menu</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option></select><div class="invalid-feedback">Example invalid select feedback</div></div><div class="mb-3"><input type="file" class="form-control" aria-label="file example" required=""><div class="invalid-feedback">Example invalid form file feedback</div></div><div class="mb-3"><button class="btn btn-primary" type="submit" disabled="">Submit form</button></div></form>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Tooltips <a href="" id="Tooltips" class="opacity-0 hover-1">#</a>
                                    </h2>
                                    <p>
                                    If the form's layout permits it, then swap the feedback classes that are <code>{valid|invalid}</code>. Validation feedback can be shown as a tooltip using the <code>{valid|invalid}-tooltip</code> classes. For tooltip placement, make sure your parent has the property position: relative set. Although this is already included in the example below thanks to the column classes, the project might call for a different configuration.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton6"
                                            onclick="copyToClipboard('copyText6', 'copyButton6')">
                                            <i class="fa fa-copy" id="iconCopied6"></i>
                                        </button>
                                        <div id="copyText6">
                                          
                                            <pre><code>&lt;form class=&quot;row g-3 needs-validation&quot; novalidate&gt;
  &lt;div class=&quot;col-md-4 position-relative&quot;&gt;
    &lt;label for=&quot;validationTooltip01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip01&quot; value=&quot;Mark&quot; required/ &gt;
    &lt;div class=&quot;valid-tooltip&quot;&gt;
      Looks good!
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-4 position-relative&quot;&gt;
    &lt;label for=&quot;validationTooltip02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip02&quot; value=&quot;Otto&quot; required/ &gt;
    &lt;div class=&quot;valid-tooltip&quot;&gt;
      Looks good!
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-4 position-relative&quot;&gt;
    &lt;label for=&quot;validationTooltipUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
    &lt;div class=&quot;input-group has-validation&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;validationTooltipUsernamePrepend&quot;&gt;@&lt;/span&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltipUsername&quot; aria-describedby=&quot;validationTooltipUsernamePrepend&quot; required/  &gt;
      &lt;div class=&quot;invalid-tooltip&quot;&gt;
        Please choose a unique and valid username.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-6 position-relative&quot;&gt;
    &lt;label for=&quot;validationTooltip03&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip03&quot; required/  &gt;
    &lt;div class=&quot;invalid-tooltip&quot;&gt;
      Please provide a valid city.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-3 position-relative&quot;&gt;
    &lt;label for=&quot;validationTooltip04&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
    &lt;select class=&quot;form-select&quot; id=&quot;validationTooltip04&quot; required&gt;
      &lt;option selected disabled value=&quot;&quot;&gt;Choose...&lt;/option&gt;
      &lt;option&gt;...&lt;/option&gt;
    &lt;/select&gt;   
    &lt;div class=&quot;invalid-tooltip&quot;&gt;
      Please select a valid state.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-3 position-relative&quot;&gt;
    &lt;label for=&quot;validationTooltip05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip05&quot; required/  &gt;
    &lt;div class=&quot;invalid-tooltip&quot;&gt;
      Please provide a valid zip.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->


                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <form class="row g-3 needs-validation"><div class="col-md-4 position-relative"><label for="validationTooltip01" class="form-label">First name</label><input type="text" class="form-control" id="validationTooltip01" required="" value="Mark"><div class="valid-tooltip">Looks good!</div></div><div class="col-md-4 position-relative"><label for="validationTooltip02" class="form-label">Last name</label><input type="text" class="form-control" id="validationTooltip02" required="" value="Otto"><div class="valid-tooltip">Looks good!</div></div><div class="col-md-4 position-relative"><label for="validationTooltipUsername" class="form-label">Username</label><div class="input-group has-validation"><span class="input-group-text" id="validationTooltipUsernamePrepend">@</span><input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required=""><div class="invalid-tooltip">Please choose a unique and valid username.</div></div></div><div class="col-md-6 position-relative"><label for="validationTooltip03" class="form-label">City</label><input type="text" class="form-control" id="validationTooltip03" required=""><div class="invalid-tooltip">Please provide a valid city.</div></div><div class="col-md-3 position-relative"><label for="validationTooltip04" class="form-label">State</label><select class="form-select" id="validationTooltip04" required=""><option disabled="" value="">Choose...</option><option>...</option></select><div class="invalid-tooltip">Please select a valid state.</div></div><div class="col-md-3 position-relative"><label for="validationTooltip05" class="form-label">Zip</label><input type="text" class="form-control" id="validationTooltip05" required=""><div class="invalid-tooltip">Please provide a valid zip.</div></div><div class="col-12"><button class="btn btn-primary" type="submit">Submit form</button></div></form>
                                    </div>
                                    <!-- RESULT end -->

                                    <h2 class="mt-20">Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
                                    <h3 class="mt-20">Variables <a href="" id="Variables"
                                            class="opacity-0 hover-1">#</a></h3>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton7"
                                            onclick="copyToClipboard('copyText7', 'copyButton7')">
                                            <i class="fa fa-copy" id="iconCopied7"></i>
                                        </button>
<pre id="copyText7"><code>$form-feedback-margin-top:          $form-text-margin-top;
$form-feedback-font-size:           $form-text-font-size;
$form-feedback-font-style:          $form-text-font-style;
$form-feedback-valid-color:         $success;
$form-feedback-invalid-color:       $danger;

$form-feedback-icon-valid-color:    $form-feedback-valid-color;
$form-feedback-icon-valid:          url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'><path fill='#{$form-feedback-icon-valid-color}' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/></svg>");
$form-feedback-icon-invalid-color:  $form-feedback-invalid-color;
$form-feedback-icon-invalid:        url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='#{$form-feedback-icon-invalid-color}'><circle cx='6' cy='6' r='4.5'/><path stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/><circle cx='6' cy='8.2' r='.6' fill='#{$form-feedback-icon-invalid-color}' stroke='none'/></svg>");</code></pre>
                                    </div>
                                    <!-- code end -->

                                    <h3 class="mt-20">Mixins <a href="" id="Mixins" class="opacity-0 hover-1">#</a></h3>
                                    <p>Two mixins are combined together, through our <a href="#Loop">loop</a>, to
                                        generate our form validation feedback styles.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton8"
                                            onclick="copyToClipboard('copyText8', 'copyButton8')">
                                            <i class="fa fa-copy" id="iconCopied8"></i>
                                        </button>
<pre id="copyText8"><code>@mixin form-validation-state-selector($state) {
  @if ($state == "valid" or $state == "invalid") {
    .was-validated #{if(&, "&", "")}:#{$state},
    #{if(&, "&", "")}.is-#{$state} {
      @content;
    }
  } @else {
    #{if(&, "&", "")}.is-#{$state} {
      @content;
    }
  }
}

@mixin form-validation-state(
  $state,
  $color,
  $icon,
  $tooltip-color: color-contrast($color),
  $tooltip-bg-color: rgba($color, $form-feedback-tooltip-opacity),
  $focus-box-shadow: 0 0 $input-btn-focus-blur $input-focus-width rgba($color, $input-btn-focus-color-opacity)
) {
  .#{$state}-feedback {
    display: none;
    width: 100%;
    margin-top: $form-feedback-margin-top;
    @include font-size($form-feedback-font-size);
    font-style: $form-feedback-font-style;
    color: $color;
  }

  .#{$state}-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%; // Contain to parent when possible
    padding: $form-feedback-tooltip-padding-y $form-feedback-tooltip-padding-x;
    margin-top: .1rem;
    @include font-size($form-feedback-tooltip-font-size);
    line-height: $form-feedback-tooltip-line-height;
    color: $tooltip-color;
    background-color: $tooltip-bg-color;
    @include border-radius($form-feedback-tooltip-border-radius);
  }

  @include form-validation-state-selector($state) {
    ~ .#{$state}-feedback,
    ~ .#{$state}-tooltip {
      display: block;
    }
  }

  .form-control {
    @include form-validation-state-selector($state) {
      border-color: $color;

      @if $enable-validation-icons {
        padding-right: $input-height-inner;
        background-image: escape-svg($icon);
        background-repeat: no-repeat;
        background-position: right $input-height-inner-quarter center;
        background-size: $input-height-inner-half $input-height-inner-half;
      }

      &:focus {
        border-color: $color;
        box-shadow: $focus-box-shadow;
      }
    }
  }

  // stylelint-disable-next-line selector-no-qualifying-type
  textarea.form-control {
    @include form-validation-state-selector($state) {
      @if $enable-validation-icons {
        padding-right: $input-height-inner;
        background-position: top $input-height-inner-quarter right $input-height-inner-quarter;
      }
    }
  }

  .form-select {
    @include form-validation-state-selector($state) {
      border-color: $color;

      @if $enable-validation-icons {
        &:not([multiple]):not([size]),
        &:not([multiple])[size="1"] {
          padding-right: $form-select-feedback-icon-padding-end;
          background-image: escape-svg($form-select-indicator), escape-svg($icon);
          background-position: $form-select-bg-position, $form-select-feedback-icon-position;
          background-size: $form-select-bg-size, $form-select-feedback-icon-size;
        }
      }

      &:focus {
        border-color: $color;
        box-shadow: $focus-box-shadow;
      }
    }
  }

  .form-control-color {
    @include form-validation-state-selector($state) {
      @if $enable-validation-icons {
        width: add($form-color-width, $input-height-inner);
      }
    }
  }

  .form-check-input {
    @include form-validation-state-selector($state) {
      border-color: $color;

      &:checked {
        background-color: $color;
      }

      &:focus {
        box-shadow: $focus-box-shadow;
      }

      ~ .form-check-label {
        color: $color;
      }
    }
  }
  .form-check-inline .form-check-input {
    ~ .#{$state}-feedback {
      margin-left: .5em;
    }
  }

  .input-group {
    > .form-control:not(:focus),
    > .form-select:not(:focus),
    > .form-floating:not(:focus-within) {
      @include form-validation-state-selector($state) {
        @if $state == "valid" {
          z-index: 3;
        } @else if $state == "invalid" {
          z-index: 4;
        }
      }
    }
  }
}</code></pre>
                                    </div>
                                    <!-- code end -->
                                    <h3 class="mt-20">Map <a href="" id="Map" class="opacity-0 hover-1">#</a></h3>
                                    <p>This is the validation Sass map from <code
                                            >_variables.scss</code>. Override or extend this to generate
                                        different or additional states.</p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton9"
                                            onclick="copyToClipboard('copyText9', 'copyButton9')">
                                            <i class="fa fa-copy" id="iconCopied9"></i>
                                        </button>
<pre id="copyText9"><code>$form-validation-states: (
  "valid": (
    "color": $form-feedback-valid-color,
    "icon": $form-feedback-icon-valid
  ),
  "invalid": (
    "color": $form-feedback-invalid-color,
    "icon": $form-feedback-icon-invalid
  )
);</code></pre>
                                    </div>
                                    <!-- code end -->
                                    <p class=" mt-20">Maps of <code>$form-validation-states</code> can
                                        contain three
                                        optional parameters to override tooltips and focus styles.</p>
                                    <h3 class=" mt-20">Loop <a href="" id="Loop" class="opacity-0 hover-1">#</a></h3>
                                    <p>
                                    Used to create the validation styles by iterating over the variables in the <code>$form-validation-states</code> map. Through this <code>loop</code>, any changes to the aforementioned <code>Sass</code> map will be reflected in the produced CSS.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton10"
                                            onclick="copyToClipboard('copyText10', 'copyButton10')">
                                            <i class="fa fa-copy" id="iconCopied10"></i>
                                        </button>
                                        <pre id="copyText10" tabindex="0"
                                            class="prism-code language-scss codeBlock_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module thin-scrollbar"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token keyword" style="color: rgb(0, 0, 159);">@each</span><span class="token plain"> </span><span class="token selector variable" style="color: rgb(54, 172, 170);">$state</span><span class="token selector" style="color: rgb(0, 0, 159);">, </span><span class="token selector variable" style="color: rgb(54, 172, 170);">$data</span><span class="token selector" style="color: rgb(0, 0, 159);"> in </span><span class="token selector variable" style="color: rgb(54, 172, 170);">$form-validation-states</span><span class="token selector" style="color: rgb(0, 0, 159);"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  </span><span class="token keyword" style="color: rgb(0, 0, 159);">@include</span><span class="token plain"> </span><span class="token function" style="color: rgb(215, 58, 73);">form-validation-state</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token variable" style="color: rgb(54, 172, 170);">$state</span><span class="token punctuation" style="color: rgb(57, 58, 52);">,</span><span class="token plain"> </span><span class="token variable" style="color: rgb(54, 172, 170);">$data</span><span class="token plain">...</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token punctuation" style="color: rgb(57, 58, 52);">;</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><br></span></code></pre>
                                    </div>
                                    <!-- code end -->
                                    <h3 class="mt-20">Customizing <a href="" id="Customizing"
                                            class="opacity-0 hover-1">#</a></h3>
                                    <p>
                                    The <code>$form-validation-states</code> map in <code>Sass</code> allows for the customization of validation stages. This <code>Sass</code> map, which can be found in the <code>_variables.scss</code> file, to create the default valid/invalid validation states. The <code>color</code>, <code>icon</code>, <code>tooltip color</code>, and focus shadow of each state can be altered using the included nested map. Browsers do not support any further states, however users of custom styles can simply provide more complicated form feedback.
                                    </p>



                                </div>
                            </div>
                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                <div class="right_side">
                                    <ul class="p-0">
                                        <li><a href="#How-it-works">How it works</a></li>
                                        <li><a href="#Custom-styles">Custom styles</a></li>
                                        <li><a href="#Browser-defaults">Browser defaults</a></li>
                                        <li><a href="#Server-side">Server side</a></li>
                                        <li><a href="#Supported-elements">Supported elements</a></li>
                                        <li><a href="#Tooltips">Tooltips</a></li>

                                        <li>
                                            <a href="#Sass">Sass</a>
                                            <ul>
                                                <li><a href="#Variables">Variables</a></li>
                                                <li><a href="#Mixins">Mixins</a></li>
                                                <li><a href="#Map">Map</a></li>
                                                <li><a href="#Loop">Loop</a></li>
                                                <li><a href="#Customizing">Customizing</a></li>
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
                            <a class="page-link border-0" href="/forms/select.php">
                                <span>Previous</span>
                                <strong class="d-block">« Select</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/category/components.php">
                            <span class="text-end">Next</span>
                            <strong class="d-block">Components »</strong>
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