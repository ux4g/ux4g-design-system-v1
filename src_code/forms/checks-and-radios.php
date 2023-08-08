<?php
$title = 'UX4G | Checks & Radios';
$canonical = 'https://doc.ux4g.gov.in/forms/checks-and-radios.php';

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
                            <li class="breadcrumb-item"><a href="/category/forms.php">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checks & Radios</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <h1 class="mb-30"> Checks & Radios</h1>
                    <p>Create consistent cross-browser and cross-device checkboxes and radios with our completely
                        rewritten checks component.</p>
                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                        <div class="row">

                            <div class="col-sm-9">
                                <div class="body_content">

                                    <h2>Approach <a href="" id="Approach"
                                            class="opacity-0 hover-1 hover-1 hover-1">#</a></h2>
                                    <p>
                                        With the aid of <code>.form-check</code>, a set of classes for both input types
                                        that enhances the style and behavior of their HTML elements, more customization
                                        and cross-browser consistency are provided. Browser default checkboxes and
                                        <code>radio</code> <code>buttons</code> are substituted. Checkboxes allow you to
                                        choose one or more alternatives from a list, whereas radio buttons only allow to
                                        choose one.
                                    </p>
                                    <p>
                                        Our <code>&lt;input&gt;</code>s and <code>&lt;label&gt;</code>s are sibling
                                        elements in terms of structure rather than an <code>&lt;input&gt;</code>
                                        contained within a <code>&lt;label&gt;</code>. This is a little bit more wordy
                                        because you need to specify an id and attributes to link the input and label.
                                        The sibling selector (~) is used for all of our <code>&lt;input&gt;</code>
                                        states, such as :checked and or :disabled. We can easily style the wording for
                                        each item depending on the status of the <code>&lt;input&gt;</code>'s when used
                                        in conjunction with the <code>.form-check-label</code> class.
                                    </p>
                                    <p>Our checks use custom UX4G icons to indicate checked or indeterminate states.</p>
                                    <h2>Checks <a href="" id="Checks" class="opacity-0 hover-1">#</a></h2>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton1"
                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                        </button>
                                        <div id="copyText1">
                                            
                                            <pre><code>&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault&quot;/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckDefault&quot;&gt;
    Default checkbox
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckChecked&quot; checked/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckChecked&quot;&gt;
    Checked checkbox
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault" value=""><label class="form-check-label" for="flexCheckDefault">Default checkbox</label></div><div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckChecked" value="" checked=""><label class="form-check-label" for="flexCheckChecked">Checked checkbox</label></div>
                                    </div>

                                    <h3 class="mt-20">Indeterminate <a href="" id="Indeterminate"
                                            class="opacity-0 hover-1">#</a></h3>
                                    <p>
                                        The <code>:indeterminate</code> pseudo class can be used by checkboxes when
                                        manually specified via JavaScript (there is no HTML property for specifying it).
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton2"
                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                        </button>
                                        <div id="copyText2">
                                            
                                            <pre><code>&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckIndeterminate&quot;/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckIndeterminate&quot;&gt;
    Indeterminate checkbox
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <h5 class="result m-0">RESULT</h5>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckIndeterminate" value=""><label class="form-check-label" for="flexCheckIndeterminate">Indeterminate checkbox</label></div>
                                    </div>
                                    <!-- code end -->

                                    <h3 class="mt-20">Disabled <a href="" id="Disabled" class="opacity-0 hover-1">#</a>
                                    </h3>
                                    <p>
                                        In order to better convey the input's status, adding the <code>disabled</code>
                                        property causes the related <code>&lt;label&gt;</code>s to be automatically
                                        formatted to match with a lighter color.
                                    </p>
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton3"
                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                        </button>
                                        <div id="copyText3">
                                            
                                            <pre><code>&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckIndeterminateDisabled&quot; disabled/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckIndeterminateDisabled&quot;&gt;
    Disabled indeterminate checkbox
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDisabled&quot; disabled/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckDisabled&quot;&gt;
    Disabled checkbox
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckCheckedDisabled&quot; checked disabled/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckCheckedDisabled&quot;&gt;
    Disabled checked checkbox
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>

                                    <h5 class="result m-0">RESULT</h5>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckIndeterminateDisabled" disabled="" value=""><label class="form-check-label" for="flexCheckIndeterminateDisabled">Disabled indeterminate checkbox</label></div><div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDisabled" disabled="" value=""><label class="form-check-label" for="flexCheckDisabled">Disabled checkbox</label></div><div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckCheckedDisabled" disabled="" value="" checked=""><label class="form-check-label" for="flexCheckCheckedDisabled">Disabled checked checkbox</label></div>
                                    </div>
                                    <!-- code end -->
                                    <h2 class="mt-20">Radios <a href="" id="Radios" class="opacity-0 hover-1">#</a></h2>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton4"
                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                        </button>
                                        <div id="copyText4">
                                            
                                            <pre><code>&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;flexRadioDefault1&quot;/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDefault1&quot;&gt;
    Default radio
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;flexRadioDefault2&quot; checked/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDefault2&quot;&gt;
    Default checked radio
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="form-check"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"><label class="form-check-label" for="flexRadioDefault1">Default radio</label></div><div class="form-check"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked=""><label class="form-check-label" for="flexRadioDefault2">Default checked radio</label></div>
                                    </div>
                                    <h3 class="mt-20">Disabled <a href="" id="Disabled" class="opacity-0 hover-1">#</a>
                                    </h3>
                                    <p>
                                        In order to better convey the input's status, adding the <code>disabled</code>
                                        property causes the related <code>&lt;label&gt;</code>s to be automatically
                                        formatted to match with a lighter color.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton5"
                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                        </button>
                                        <div id="copyText5">
                                            
                                            <pre><code>&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDisabled&quot; id=&quot;flexRadioDisabled&quot; disabled/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDisabled&quot;&gt;
    Disabled radio
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDisabled&quot; id=&quot;flexRadioCheckedDisabled&quot; checked disabled/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioCheckedDisabled&quot;&gt;
    Disabled checked radio
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="form-check"><input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled=""><label class="form-check-label" for="flexRadioDisabled">Disabled radio</label></div><div class="form-check"><input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" disabled="" checked=""><label class="form-check-label" for="flexRadioCheckedDisabled">Disabled checked radio</label></div>
                                    </div>
                                    <h2 class="mt-20">Switches <a href="" id="Switches" class="opacity-0 hover-1">#</a>
                                    </h2>
                                    <p>
                                        A switch uses the <code>.form-switch</code> class to render a toggle switch but
                                        has the markup of a custom checkbox. To more clearly describe the type of
                                        control to assistive technologies that support this role, think about using
                                        <code>role="switch"</code>. It will default to being announced as a conventional
                                        checkbox in older assistive technologies. The <code>disabled</code> attribute is
                                        also supported via switches.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton6"
                                            onclick="copyToClipboard('copyText6', 'copyButton6')">
                                            <i class="fa fa-copy" id="iconCopied6"></i>
                                        </button>
                                        <div id="copyText6">
                                            
                                            <pre><code>&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckDefault&quot;/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckDefault&quot;&gt;Default switch checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckChecked&quot; checked/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckChecked&quot;&gt;Checked switch checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckDisabled&quot; disabled/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckDisabled&quot;&gt;Disabled switch checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckCheckedDisabled&quot; checked disabled/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckCheckedDisabled&quot;&gt;Disabled checked switch checkbox input&lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"><label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label></div><div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked=""><label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label></div><div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled" disabled=""><label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label></div><div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" disabled="" checked=""><label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label></div>
                                    </div>

                                    <h2 class="mt-20">Default (stacked) <a href="" id="Default-(stacked)"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                        All checkboxes and radios that are immediate siblings will by default be
                                        vertically stacked and properly spaced apart
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton7"
                                            onclick="copyToClipboard('copyText7', 'copyButton7')">
                                            <i class="fa fa-copy" id="iconCopied7"></i>
                                        </button>
                                        <div id="copyText7">
                                            
                                            <pre><code>&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;defaultCheck1&quot;/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;defaultCheck1&quot;&gt;
    Default checkbox
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;defaultCheck2&quot; disabled/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;defaultCheck2&quot;&gt;
    Disabled checkbox
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="defaultCheck1" value=""><label class="form-check-label" for="defaultCheck1">Default checkbox</label></div><div class="form-check"><input class="form-check-input" type="checkbox" id="defaultCheck2" disabled="" value=""><label class="form-check-label" for="defaultCheck2">Disabled checkbox</label></div>
                                    </div>

                                    <!-- code -->
                                    <div class="code_bg rounded p-0 mt-20 rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton8"
                                            onclick="copyToClipboard('copyText8', 'copyButton8')">
                                            <i class="fa fa-copy" id="iconCopied8"></i>
                                        </button>
                                        <div id="copyText8">
                                            
                                            <pre><code>&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;exampleRadios&quot; id=&quot;exampleRadios1&quot; value=&quot;option1&quot; checked/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;exampleRadios1&quot;&gt;
    Default radio
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;exampleRadios&quot; id=&quot;exampleRadios2&quot; value=&quot;option2&quot;/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;exampleRadios2&quot;&gt;
    Second default radio
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;exampleRadios&quot; id=&quot;exampleRadios3&quot; value=&quot;option3&quot; disabled/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;exampleRadios3&quot;&gt;
    Disabled radio
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="form-check"><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked=""><label class="form-check-label" for="exampleRadios1">Default radio</label></div><div class="form-check"><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2"><label class="form-check-label" for="exampleRadios2">Second default radio</label></div><div class="form-check"><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" disabled="" value="option3"><label class="form-check-label" for="exampleRadios3">Disabled radio</label></div>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Inline <a href="" id="Inline" class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                        Add to group checkboxes or radio buttons on the same horizontal row .online
                                        form-checking to any <code>.form-check.</code>
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton9"
                                            onclick="copyToClipboard('copyText9', 'copyButton9')">
                                            <i class="fa fa-copy" id="iconCopied9"></i>
                                        </button>
                                        <div id="copyText9">
                                            
                                            <pre><code>&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox1&quot; value=&quot;option1&quot;//&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox1&quot;&gt;1&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox2&quot; value=&quot;option2&quot;//&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox2&quot;&gt;2&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox3&quot; value=&quot;option3&quot; disabled//&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox3&quot;&gt;3 (disabled)&lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <h5 class="result m-0">
                                        RESULT
                                    </h5>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option3" disabled="">
                                                <label class="form-check-label" for="inlineCheckbox3">3
                                                    (disabled)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- code -->
                                    <div class="code_bg rounded p-3 mt-20">
                                        <button class="btn btn-outline-primary float-end" id="copyButton10"
                                            onclick="copyToClipboard('copyText10', 'copyButton10')">
                                            <i class="fa fa-copy" id="iconCopied10"></i>
                                        </button>
                                        <div id="copyText10">
                                            
                                            <pre><code>&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio1&quot; value=&quot;option1&quot;/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio1&quot;&gt;1&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio2&quot; value=&quot;option2&quot;/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio2&quot;&gt;2&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio3&quot; value=&quot;option3&quot; disabled/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio3&quot;&gt;3 (disabled)&lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"><label class="form-check-label" for="inlineRadio1">1</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"><label class="form-check-label" for="inlineRadio2">2</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" disabled="" value="option3"><label class="form-check-label" for="inlineRadio3">3 (disabled)</label></div>
                                    </div>

                                    <h2 class="mt-20">Reverse <a href="" id="Reverse" class="opacity-0 hover-1">#</a>
                                    </h2>
                                    <p>
                                        Use the <code>.form-check-reverse</code> modifier class to position your
                                        checkboxes, radio buttons, and switches on the other side.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton11"
                                            onclick="copyToClipboard('copyText11', 'copyButton11')">
                                            <i class="fa fa-copy" id="iconCopied11"></i>
                                        </button>
                                        <div id="copyText11">
                                            
                                            <pre><code>&lt;div class=&quot;form-check form-check-reverse&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;reverseCheck1&quot;/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;reverseCheck1&quot;&gt;
    Reverse checkbox
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-reverse&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;reverseCheck2&quot; disabled/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;reverseCheck2&quot;&gt;
    Disabled reverse checkbox
  &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-switch form-check-reverse&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;flexSwitchCheckReverse&quot;/&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckReverse&quot;&gt;Reverse switch checkbox input&lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="form-check form-check-reverse"><input class="form-check-input" type="checkbox" id="reverseCheck1" value=""><label class="form-check-label" for="reverseCheck1">Reverse checkbox</label></div><div class="form-check form-check-reverse"><input class="form-check-input" type="checkbox" id="reverseCheck2" disabled="" value=""><label class="form-check-label" for="reverseCheck2">Disabled reverse checkbox</label></div><div class="form-check form-switch form-check-reverse"><input class="form-check-input" type="checkbox" id="flexSwitchCheckReverse"><label class="form-check-label" for="flexSwitchCheckReverse">Reverse switch checkbox input</label></div>
                                    </div>

                                    <h2 class="mt-20">Without labels <a href="" id="Without-labels"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                        Leave the wrapping off check the form for radio buttons and checkboxes without
                                        label text. It's important to keep in mind to give assistive technologies some
                                        kind of accessible name (for example, by utilizing aria-label). Details can be
                                        found in the accessibility part of the <a
                                            href="/forms/overview.php#Accessibility"> forms overview</a>.
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton12"
                                            onclick="copyToClipboard('copyText12', 'copyButton12')">
                                            <i class="fa fa-copy" id="iconCopied12"></i>
                                        </button>
                                        <div id="copyText12">
                                            
                                            <pre><code>&lt;div&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;checkboxNoLabel&quot; value=&quot;&quot; aria-label=&quot;...&quot;/&gt;
&lt;/div&gt;
  
&lt;div&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;radioNoLabel&quot; id=&quot;radioNoLabel1&quot; value=&quot;&quot; aria-label=&quot;...&quot;/&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div> <input class="form-check-input" type="checkbox" id="checkboxNoLabel" aria-label="..." value=""></div><div><input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" aria-label="..." value=""></div>
                                    </div>

                                    <h2 class="mt-20">Toggle buttons <a href="" id="Toggle-buttons"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>Use the <code>.btn</code> styles on the <code>&lt;label&gt;</code> components
                                        rather than the <code>.form-check-label</code> styles to create checkboxes and
                                        <code>radio buttons</code> that resemble <code>buttons</code>. If necessary,
                                        these toggle buttons may also be placed together in a <a
                                            href="/components/button-group.php">button group.</a>
                                    </p>

                                    <h3 class="mt-20">Checkbox toggle buttons <a href="" id="Checkbox-toggle-buttons"
                                            class="opacity-0 hover-1">#</a></h3>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton13"
                                            onclick="copyToClipboard('copyText13', 'copyButton13')">
                                            <i class="fa fa-copy" id="iconCopied13"></i>
                                        </button>
                                        <div id="copyText13">
                                            
                                            <pre><code>&lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check&quot; autocomplete=&quot;off&quot;/&gt;
&lt;label class=&quot;btn btn-primary&quot; for=&quot;btn-check&quot;&gt;Single toggle&lt;/label&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <h5 class="result m-0">RESULT</h5>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">

                                        <div>
                                            <div>
                                                <input type="checkbox" class="btn-check" id="btn-check" autocomplete="off"><label class="btn btn-primary" for="btn-check">Single toggle</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <div class="code_bg rounded p-3 mt-20">
                                        <button class="btn btn-outline-primary float-end" id="copyButton14"
                                            onclick="copyToClipboard('copyText14', 'copyButton14')">
                                            <i class="fa fa-copy" id="iconCopied14"></i>
                                        </button>
                                        <div id="copyText14">
                                            
                                            <pre><code>&lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check-2&quot; checked autocomplete=&quot;off&quot;/&gt;
&lt;label class=&quot;btn btn-primary&quot; for=&quot;btn-check-2&quot;&gt;Checked&lt;/label&gt;</code></pre>
                                        </div>
                                    </div>

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <input type="checkbox" class="btn-check" id="btn-check-2" autocomplete="off" checked=""><label class="btn btn-primary" for="btn-check-2">Checked</label>
                                    </div>
                                    <!-- RESULT end -->

                                    <!-- code -->
                                    <div class="code_bg rounded p-3 mt-20">
                                        <button class="btn btn-outline-primary float-end" id="copyButton15"
                                            onclick="copyToClipboard('copyText15', 'copyButton15')">
                                            <i class="fa fa-copy" id="iconCopied15"></i>
                                        </button>
                                        <div id="copyText15">
                                            
                                            <pre><code>&lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check-3&quot; autocomplete=&quot;off&quot; disabled/&gt;
&lt;label class=&quot;btn btn-primary&quot; for=&quot;btn-check-3&quot;&gt;Disabled&lt;/label&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <input type="checkbox" class="btn-check" id="btn-check-3" autocomplete="off" disabled=""><label class="btn btn-primary" for="btn-check-3">Disabled</label>
                                    </div>
                                    <p class="mt-20"><i class="fa fa-info-circle"></i><strong> INFO</strong></p>
                                    <blockquote class="blockquote mt-20">
                                        <div class="bd-callout bd-callout-info">Visually, these checkbox toggle buttons
                                            are identical to the button plugin toggle buttons. However, they are
                                            conveyed differently by assistive technologies: the checkbox toggles will be
                                            announced by screen readers as "checked"/"not checked" (since, despite their
                                            appearance, they are fundamentally still checkboxes), whereas the button
                                            plugin toggle buttons will be announced as "button"/"button pressed". The
                                            choice between these two approaches will depend on the type of toggle you
                                            are creating, and whether or not the toggle will make sense to users when
                                            announced as a checkbox or as an actual button.</div>
                                    </blockquote>
                                    <h3 class="mt-20">Radio toggle buttons <a href="" id="Radio-toggle-buttons"
                                            class="opacity-0  hover-1">#</a></h3>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton16"
                                            onclick="copyToClipboard('copyText16', 'copyButton16')">
                                            <i class="fa fa-copy" id="iconCopied16"></i>
                                        </button>
                                        <div id="copyText16">
                                            
                                            <pre><code>&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options&quot; id=&quot;option1&quot; autocomplete=&quot;off&quot; checked/&gt;
&lt;label class=&quot;btn btn-secondary&quot; for=&quot;option1&quot;&gt;Checked&lt;/label&gt;

  
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options&quot; id=&quot;option2&quot; autocomplete=&quot;off&quot;/&gt;
&lt;label class=&quot;btn btn-secondary&quot; for=&quot;option2&quot;&gt;Radio&lt;/label&gt;

  
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options&quot; id=&quot;option3&quot; autocomplete=&quot;off&quot; disabled/&gt;
&lt;label class=&quot;btn btn-secondary&quot; for=&quot;option3&quot;&gt;Disabled&lt;/label&gt;

  
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options&quot; id=&quot;option4&quot; autocomplete=&quot;off&quot;/&gt;
&lt;label class=&quot;btn btn-secondary&quot; for=&quot;option4&quot;&gt;Radio&lt;/label&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example"><input type="radio" class="btn-check" name="options"
                                                id="option1" autocomplete="off" checked=""><label
                                                class="btn btn-secondary" for="option1">Checked</label><input
                                                type="radio" class="btn-check" name="options" id="option2"
                                                autocomplete="off"><label class="btn btn-secondary"
                                                for="option2">Radio</label><input type="radio" class="btn-check"
                                                name="options" id="option3" autocomplete="off" disabled=""><label
                                                class="btn btn-secondary" for="option3">Disabled</label><input
                                                type="radio" class="btn-check" name="options" id="option4"
                                                autocomplete="off"><label class="btn btn-secondary"
                                                for="option4">Radio</label></div>
                                    </div>
                                    <!-- RESULT end -->

                                    <h3 class="mt-20">Outlined styles <a href="" id="Outlined-styles"
                                            class="opacity-0 hover-1">#</a></h3>
                                    <p>Different variants of <code>.btn</code>, such at the various
                                        outlined styles, are supported.</p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton17"
                                            onclick="copyToClipboard('copyText17', 'copyButton17')">
                                            <i class="fa fa-copy" id="iconCopied17"></i>
                                        </button>
                                        <div id="copyText17">
                                            
                                            <pre><code>&lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check-outlined&quot; autocomplete=&quot;off&quot;/&gt;
&lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btn-check-outlined&quot;&gt;Single toggle&lt;/label&gt;&lt;br/&gt;

  
&lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check-2-outlined&quot; checked autocomplete=&quot;off&quot;/&gt;
&lt;label class=&quot;btn btn-outline-secondary&quot; for=&quot;btn-check-2-outlined&quot;&gt;Checked&lt;/label&gt;&lt;br/&gt;

  
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options-outlined&quot; id=&quot;success-outlined&quot; autocomplete=&quot;off&quot; checked/&gt;
&lt;label class=&quot;btn btn-outline-success&quot; for=&quot;success-outlined&quot;&gt;Checked success radio&lt;/label&gt;

  
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options-outlined&quot; id=&quot;danger-outlined&quot; autocomplete=&quot;off&quot;/&gt;
&lt;label class=&quot;btn btn-outline-danger&quot; for=&quot;danger-outlined&quot;&gt;Danger radio&lt;/label&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <div class="bd-example"><input type="checkbox" class="btn-check"
                                                id="btn-check-outlined" autocomplete="off"><label
                                                class="btn btn-outline-primary" for="btn-check-outlined">Single
                                                toggle</label><br><input type="checkbox" class="btn-check"
                                                id="btn-check-2-outlined" autocomplete="off" checked=""><label
                                                class="btn btn-outline-secondary"
                                                for="btn-check-2-outlined">Checked</label><br><input type="radio"
                                                class="btn-check" name="options-outlined" id="success-outlined"
                                                autocomplete="off" checked=""><label class="btn btn-outline-success"
                                                for="success-outlined">Checked success radio</label><input type="radio"
                                                class="btn-check" name="options-outlined" id="danger-outlined"
                                                autocomplete="off"><label class="btn btn-outline-danger"
                                                for="danger-outlined">Danger radio</label></div>
                                    </div>
                                    <!-- code end -->
                                    <h2 class="mt-20">Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
                                    <h3 class="mt-20">Variables <a href="" id="Variables"
                                            class="opacity-0 hover-1">#</a></h3>


                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton18"
                                            onclick="copyToClipboard('copyText18', 'copyButton18')">
                                            <i class="fa fa-copy" id="iconCopied18"></i>
                                        </button>
                                        <pre id="copyText18"><code>$form-check-input-width:                  1em;
$form-check-min-height:                   $font-size-base * $line-height-base;
$form-check-padding-start:                $form-check-input-width + .5em;
$form-check-margin-bottom:                .125rem;
$form-check-label-color:                  null;
$form-check-label-cursor:                 null;
$form-check-transition:                   null;

$form-check-input-active-filter:          brightness(90%);

$form-check-input-bg:                     $input-bg;
$form-check-input-border:                 var(--#{$prefix}border-width) solid var(--#{$prefix}border-color);
$form-check-input-border-radius:          .25em;
$form-check-radio-border-radius:          50%;
$form-check-input-focus-border:           $input-focus-border-color;
$form-check-input-focus-box-shadow:       $focus-ring-box-shadow;

$form-check-input-checked-color:          $component-active-color;
$form-check-input-checked-bg-color:       $component-active-bg;
$form-check-input-checked-border-color:   $form-check-input-checked-bg-color;
$form-check-input-checked-bg-image:       url(&quot;data:image/svg+xml,&lt;svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'&gt;&lt;path fill='none' stroke='#{$form-check-input-checked-color}' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/&gt;&lt;/svg&gt;&quot;);
$form-check-radio-checked-bg-image:       url(&quot;data:image/svg+xml,&lt;svg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'&gt;&lt;circle r='2' fill='#{$form-check-input-checked-color}'/&gt;&lt;/svg&gt;&quot;);

$form-check-input-indeterminate-color:          $component-active-color;
$form-check-input-indeterminate-bg-color:       $component-active-bg;
$form-check-input-indeterminate-border-color:   $form-check-input-indeterminate-bg-color;
$form-check-input-indeterminate-bg-image:       url(&quot;data:image/svg+xml,&lt;svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'&gt;&lt;path fill='none' stroke='#{$form-check-input-indeterminate-color}' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/&gt;&lt;/svg&gt;&quot;);

$form-check-input-disabled-opacity:        .5;
$form-check-label-disabled-opacity:        $form-check-input-disabled-opacity;
$form-check-btn-check-disabled-opacity:    $btn-disabled-opacity;

$form-check-inline-margin-end:    1rem;</code></pre>
                                    </div>
                                    <!-- code end -->






                                </div>
                            </div>
                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                <div class="right_side">
                                    <ul class="p-0">
                                        <li><a href="#Approach">Approach</a>
                                        </li>
                                        <li><a href="#Checks">Checks</a>
                                            <ul>
                                                <li><a href="#Indeterminate">Indeterminate</a></li>
                                                <li><a href="#Disabled">Disabled</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#Checks">Radios</a>
                                            <ul>
                                                <li><a href="#Disabled">Disabled</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#Switches">Switches</a>
                                        </li>
                                        <li>
                                            <a href="#Default-(stacked)">Default (stacked)</a>
                                        </li>
                                        <li>
                                            <a href="#Inline">Inline</a>
                                        </li>
                                        <li>
                                            <a href="#Reverse">Reverse</a>
                                        </li>
                                        <li>
                                            <a href="#Without-labels">Without labels</a>
                                        </li>
                                        <li>
                                            <a href="#Toggle-buttons">Toggle buttons</a>
                                            <ul>
                                                <li>
                                                    <a href="#Checkbox-toggle-buttons">Checkbox toggle buttons</a>
                                                </li>
                                                <li>
                                                    <a href="#Radio-toggle-buttons">Radio toggle buttons</a>
                                                </li>
                                                <li>
                                                    <a href="#Outlined-styles">Outlined styles</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#Sass">Sass</a>
                                            <ul>
                                                <li>
                                                    <a href="#Variables">Variables</a>
                                                </li>

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
                            <a class="page-link border-0" href="/forms/floating-labels.php">
                                <span>Previous</span>
                                <strong class="d-block">« Floating Labels</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/forms/input-group.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Input Group »</strong>
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