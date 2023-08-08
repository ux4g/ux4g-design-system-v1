<?php
$title = 'UX4G | Input group';
$canonical = 'https://doc.ux4g.gov.in/forms/input-group.php';

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
                            <li class="breadcrumb-item"><a
                                    href="/">
                                    <i class="fa fa-home"></i>
                                </a></li>
                            <li class="breadcrumb-item"><a href="/category/forms.php">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input Group</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="col-sm-9">
                        <h1 class="mb-30"> Input Group</h1>
                        <p>Text, buttons, or button groups can be added to either side of text inputs, custom selections, or custom file inputs to easily extend form controls.</p>
                    </div>
                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                        <div class="row">

                            <div class="col-sm-9">
                                <div class="body_content">
                                    <h2>Basic example <a href="" id="Basic-example" class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    Put a button or add-on on each side of an input. Alternatively, you might put one on either side of the input. <code>&lt;label&gt;</code>s should be outside the input group, don't forget.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton1"
                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                        </button>
                                        <div id="copyText1">
                                            
                                            <pre><code>&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;@&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;/&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;basic-addon2&quot;/&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon2&quot;&gt;@example.com&lt;/span&gt;
&lt;/div&gt;

  
&lt;label for=&quot;basic-url&quot; class=&quot;form-label&quot;&gt;Your vanity URL&lt;/label&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon3&quot;&gt;https://example.com/users/&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;basic-url&quot; aria-describedby=&quot;basic-addon3&quot;/&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;/&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot;/&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;@&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Server&quot; aria-label=&quot;Server&quot;/&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;With textarea&lt;/span&gt;
  &lt;textarea class=&quot;form-control&quot; aria-label=&quot;With textarea&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">@</span><input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"></div><div class="input-group mb-3"><input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"><span class="input-group-text" id="basic-addon2">@example.com</span></div><label for="basic-url" class="form-label">Your vanity URL</label><div class="input-group mb-3"><span class="input-group-text" id="basic-addon3">https://example.com/users/</span><input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"></div><div class="input-group mb-3"><span class="input-group-text">$</span><input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"><span class="input-group-text">.00</span></div><div class="input-group mb-3"><input type="text" class="form-control" placeholder="Username" aria-label="Username"><span class="input-group-text">@</span><input type="text" class="form-control" placeholder="Server" aria-label="Server"></div><div class="input-group"><span class="input-group-text">With textarea</span><textarea class="form-control" aria-label="With textarea"></textarea></div>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Wrapping <a href="" id="Wrapping" class="opacity-0 hover-1">#</a>
                                    </h2>
                                    <p>
                                    Input groups automatically wrap using <code>flex-wrap</code>: wrap, a custom form field's validation can be supported within an input group. This can be turned off using. <code>flex-nowrap</code>.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton2"
                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                        </button>
                                        <div id="copyText2">
                                            
                                            <pre><code>&lt;div class=&quot;input-group flex-nowrap&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;addon-wrapping&quot;&gt;@&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;addon-wrapping&quot;/&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="input-group flex-nowrap"><span class="input-group-text" id="addon-wrapping">@</span><input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping"></div>
                                    </div>
                                    <!-- RESULT end -->

                                    <h2 class="mt-20">Sizing <a href="" id="Sizing" class="opacity-0 hover-1">#</a></h2>
                                    <p>To add the classes for relative form sizing there is no need to repeat the form control size classes on each element because the <code>.input-group</code> and its contents will automatically resize.</p>
                                    <p><strong>Sizing on the individual input group elements isn't supported.</strong>
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton3"
                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                        </button>
                                        <div id="copyText3">
                                            
                                            <pre><code>&lt;div class=&quot;input-group input-group-sm mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-sm&quot;&gt;Small&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-sm&quot;/&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-default&quot;&gt;Default&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-default&quot;/&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group input-group-lg&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-lg&quot;&gt;Large&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-lg&quot;/&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                       <div class="input-group input-group-sm mb-3"><span class="input-group-text" id="inputGroup-sizing-sm">Small</span><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></div><div class="input-group mb-3"><span class="input-group-text" id="inputGroup-sizing-default">Default</span><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div><div class="input-group input-group-lg"><span class="input-group-text" id="inputGroup-sizing-lg">Large</span><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"></div>
                                    </div>
                                    <!-- RESULT end -->

                                    <h2 class="mt-20">Checkboxes and radios <a href="" id="Checkboxes-and-radios"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    Replace the text in an input group's addon with any checkbox or radio button. When there is no visible text next to the input, it is advised to add <code>.mt-0</code> to the <code>.form-check-input</code>.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton4"
                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                        </button>
                                        <div id="copyText4">
                                            
                                            <pre><code>&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;div class=&quot;input-group-text&quot;&gt;
    &lt;input class=&quot;form-check-input mt-0&quot; type=&quot;checkbox&quot; value=&quot;&quot; aria-label=&quot;Checkbox for following text input&quot;/&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with checkbox&quot;/&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group&quot;&gt;
  &lt;div class=&quot;input-group-text&quot;&gt;
    &lt;input class=&quot;form-check-input mt-0&quot; type=&quot;radio&quot; value=&quot;&quot; aria-label=&quot;Radio button for following text input&quot;/&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with radio button&quot;/&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="input-group mb-3"><div class="input-group-text"><input class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input" value=""></div><input type="text" class="form-control" aria-label="Text input with checkbox"></div><div class="input-group"><div class="input-group-text"><input class="form-check-input mt-0" type="radio" aria-label="Radio button for following text input" value=""></div><input type="text" class="form-control" aria-label="Text input with radio button"></div>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Multiple inputs <a href="" id="Multiple-inputs"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    However, validation styles are only accessible for input groups with a single <code>&lt;input&gt;</code>, even when many <code>&lt;input&gt;</code>s are permitted visually.
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton5"
                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                        </button>
                                        <div id="copyText5">
                                            
                                            <pre><code>&lt;div class=&quot;input-group&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;First and last name&lt;/span&gt;
  &lt;input type=&quot;text&quot; aria-label=&quot;First name&quot; class=&quot;form-control&quot;/&gt;
  &lt;input type=&quot;text&quot; aria-label=&quot;Last name&quot; class=&quot;form-control&quot;/&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->


                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="input-group"><span class="input-group-text">First and last name</span><input type="text" aria-label="First name" class="form-control"><input type="text" aria-label="Last name" class="form-control"></div>
                                    </div>
                                    <!-- RESULT end -->

                                    <h2 class="mt-20">Multiple addons <a href="" id="Multiple-addons"
                                            class="opacity-0 hover-1"></a></h2>
                                    <p>The checkbox and radio input variants can be combined with a variety of add-ons.</p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton6"
                                            onclick="copyToClipboard('copyText6', 'copyButton6')">
                                            <i class="fa fa-copy" id="iconCopied6"></i>
                                        </button>
                                        <div id="copyText6">
                                            
                                            <pre><code>&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Dollar amount (with dot and two decimal places)&quot;/&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Dollar amount (with dot and two decimal places)&quot;/&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">
                                        RESULT
                                    </h5>

                                    <div class="code_bg rounded p-3">
                                        <div class="input-group mb-3"><span class="input-group-text">$</span><span class="input-group-text">0.00</span><input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)"></div><div class="input-group"><input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)"><span class="input-group-text">$</span><span class="input-group-text">0.00</span></div>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Button addons <a href="" id="Button-addons" class="opacity-0 hover-1">#</a></h2>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton7"
                                            onclick="copyToClipboard('copyText7', 'copyButton7')">
                                            <i class="fa fa-copy" id="iconCopied7"></i>
                                        </button>
                                        <div id="copyText7">
                                            
                                            <pre><code>&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot; id=&quot;button-addon1&quot;&gt;Button&lt;/button&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;Example text with button addon&quot; aria-describedby=&quot;button-addon1&quot;/&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;button-addon2&quot;/&gt;
  &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot; id=&quot;button-addon2&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
  &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;Example text with two button addons&quot;/&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username with two button addons&quot;/&gt;
  &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
  &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="input-group mb-3"><button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button><input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1"></div><div class="input-group mb-3"><input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2"><button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button></div><div class="input-group mb-3"><button class="btn btn-outline-secondary" type="button">Button</button><button class="btn btn-outline-secondary" type="button">Button</button><input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons"></div><div class="input-group"><input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons"><button class="btn btn-outline-secondary" type="button">Button</button><button class="btn btn-outline-secondary" type="button">Button</button></div>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Buttons with dropdowns <a href="" id="Buttons-with-dropdowns"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton8"
                                            onclick="copyToClipboard('copyText8', 'copyButton8')">
                                            <i class="fa fa-copy" id="iconCopied8"></i>
                                        </button>
<pre id="copyText8"><code>&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;button class=&quot;btn btn-outline-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
  &lt;button class=&quot;btn btn-outline-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group&quot;&gt;
  &lt;button class=&quot;btn btn-outline-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action before&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action before&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with 2 dropdown buttons&quot;&gt;
  &lt;button class=&quot;btn btn-outline-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>


</div>
<h5 class="result m-0">RESULT</h5>
                                    <!-- code end -->
<!-- code -->
<div class="code_bg round p-3">
<div class="input-group mb-3">
  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
  <input type="text" class="form-control" aria-label="Text input with dropdown button">
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" aria-label="Text input with dropdown button">
  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>

<div class="input-group">
  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action before</a></li>
    <li><a class="dropdown-item" href="#">Another action before</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
  <input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons">
  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
</div>
<!-- code end -->

                                    <h2 class="mt-20">Segmented buttons <a href="" id="Segmented-buttons"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton9"
                                            onclick="copyToClipboard('copyText9', 'copyButton9')">
                                            <i class="fa fa-copy" id="iconCopied9"></i>
                                        </button>
<pre id="copyText9"><code>&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Action&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with segmented dropdown button&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with segmented dropdown button&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Action&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                                        
</div>
<h5 class="result m-0">RESULT</h5>
                                    <!-- code end-->
<div class="rounded p-3 code_bg">
<div class="input-group mb-3">
  <button type="button" class="btn btn-outline-secondary">Action</button>
  <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
  <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
</div>

<div class="input-group">
  <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
  <button type="button" class="btn btn-outline-secondary">Action</button>
  <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
</div>


                                    <h2 class="mt-20">Custom forms <a href="" id="Custom-forms"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    Custom selections and custom file inputs are supported by input groups. These are not supported in the default browser implementations.
                                    </p>
                                    <h3 class="mt-20">Custom select <a href="" id="Custom-select"
                                            class="opacity-0 hover-1">#</a></h3>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton10"
                                            onclick="copyToClipboard('copyText10', 'copyButton10')">
                                            <i class="fa fa-copy" id="iconCopied10"></i>
                                        </button>
                                        <div id="copyText10">
                                            
                                            <pre><code>&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect01&quot;&gt;Options&lt;/label&gt;
  &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect01&quot;&gt;
    &lt;option selected&gt;Choose...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect02&quot;&gt;
    &lt;option selected&gt;Choose...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
  &lt;/select&gt;
  &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect02&quot;&gt;Options&lt;/label&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
  &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect03&quot; aria-label=&quot;Example select with button addon&quot;&gt;
    &lt;option selected&gt;Choose...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group&quot;&gt;
  &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect04&quot; aria-label=&quot;Example select with button addon&quot;&gt;
    &lt;option selected&gt;Choose...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
  &lt;/select&gt;
  &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>

                                    <div class="code_bg rounded p-3">
                                        <div class="input-group mb-3"><label class="input-group-text" for="inputGroupSelect01">Options</label><select class="form-select" id="inputGroupSelect01"><option>Choose...</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option></select></div><div class="input-group mb-3"><select class="form-select" id="inputGroupSelect02"><option>Choose...</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option></select><label class="input-group-text" for="inputGroupSelect02">Options</label></div><div class="input-group mb-3"><button class="btn btn-outline-secondary" type="button">Button</button><select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon"><option>Choose...</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option></select></div><div class="input-group"><select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon"><option>Choose...</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option></select><button class="btn btn-outline-secondary" type="button">Button</button></div>
                                    </div>
                                    <!-- RESULT end -->

                                    <h3 class="mt-20">Custom file input <a href="" id="Custom-file-input"
                                            class="opacity-0 hover-1">#</a></h3>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton11"
                                            onclick="copyToClipboard('copyText11', 'copyButton11')">
                                            <i class="fa fa-copy" id="iconCopied11"></i>
                                        </button>
                                        <div id="copyText11">
                                            
                                            <pre><code>&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupFile01&quot;&gt;Upload&lt;/label&gt;
  &lt;input type=&quot;file&quot; class=&quot;form-control&quot; id=&quot;inputGroupFile01&quot;/&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;file&quot; class=&quot;form-control&quot; id=&quot;inputGroupFile02&quot;/&gt;
  &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupFile02&quot;&gt;Upload&lt;/label&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot; id=&quot;inputGroupFileAddon03&quot;&gt;Button&lt;/button&gt;
  &lt;input type=&quot;file&quot; class=&quot;form-control&quot; id=&quot;inputGroupFile03&quot; aria-describedby=&quot;inputGroupFileAddon03&quot; aria-label=&quot;Upload&quot;/&gt;
&lt;/div&gt;

  
&lt;div class=&quot;input-group&quot;&gt;
  &lt;input type=&quot;file&quot; class=&quot;form-control&quot; id=&quot;inputGroupFile04&quot; aria-describedby=&quot;inputGroupFileAddon04&quot; aria-label=&quot;Upload&quot;/&gt;
  &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot; id=&quot;inputGroupFileAddon04&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <!-- RESULT -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="input-group mb-3"><label class="input-group-text" for="inputGroupFile01">Upload</label><input type="file" class="form-control" id="inputGroupFile01"></div><div class="input-group mb-3"><input type="file" class="form-control" id="inputGroupFile02"><label class="input-group-text" for="inputGroupFile02">Upload</label></div><div class="input-group mb-3"><button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button><input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload"></div><div class="input-group"><input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload"><button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button></div>
                                    </div>
                                    <!-- RESULT end -->
                                    <h2 class="mt-20">Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
                                    <h3 class="mt-20">Variables <a href="" id="Variables"
                                            class="opacity-0 hover-1">#</a></h3>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton12"
                                            onclick="copyToClipboard('copyText12', 'copyButton12')">
                                            <i class="fa fa-copy" id="iconCopied12"></i>
                                        </button>
<pre id="copyText12"><code>$input-group-addon-padding-y:           $input-padding-y;
$input-group-addon-padding-x:           $input-padding-x;
$input-group-addon-font-weight:         $input-font-weight;
$input-group-addon-color:               $input-color;
$input-group-addon-bg:                  $gray-200;
$input-group-addon-border-color:        $input-border-color;</code></pre>                                        
</div>
                                    <!-- code end -->









                                </div>
                            </div>
                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                <div class="right_side">
                                    <ul class="p-0">
                                        <li><a href="#Basic-example">Basic example</a></li>
                                        <li><a href="#Wrapping">Wrapping</a></li>
                                        <li><a href="#Sizing">Sizing</a></li>
                                        <li><a href="#Checkboxes-and-radios">Checkboxes and radios</a></li>
                                        <li><a href="#Multiple-inputs">Multiple inputs</a></li>
                                        <li><a href="#Multiple-addons">Multiple addons</a></li>
                                        <li><a href="#Button-addons">Button addons</a></li>
                                        <li><a href="#Buttons-with-dropdowns">Buttons with dropdowns</a></li>
                                        <li><a href="#Segmented-buttons">Segmented buttons</a></li>
                                        <li>
                                            <a href="#Custom-forms">Custom forms</a>
                                            <ul>
                                                <li><a href="#Custom-select">Custom select</a></li>
                                                <li><a href="#Custom-file-input">Custom file input</a></li>
                                            </ul>
                                        </li>
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
                            <a class="page-link border-0" href="/forms/checks-and-radios.php">
                                <span>Previous</span>
                                <strong class="d-block">« Checks & Radios</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/forms/layout.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Layout »</strong>
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