<?php
$title = 'UX4G | API';
$canonical = 'https://doc.ux4g.gov.in/utilities/api.php';

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
                            <li class="breadcrumb-item"><a href="/category/utilities.php">Utilities</a></li>
                            <li class="breadcrumb-item active" aria-current="page">API</li>
                        </ol>
                    </nav>

<!-- body content -->
<div class="row">
 
<div class="col-lg-9">
<h1>Utility API</h1>
<p>UX4g utilities are produced by the utility API and may be used with Sass to change or add to the standard set of utility classes. Our utility API is built using a number of Sass functions and maps to create families of classes with different parameters. If you're not familiar with Sass maps, <a href="https://sass-lang.com/documentation/values/maps" target="_blank">start by reading the official Sass docs</a>.</p>



<p class="mt-20">
All of the utilities are included in the $utilities map, which is later combined with any existing bespoke <code>$utilities</code> maps. A keyed list of utility groups that accept the following choices is included in the utility map.
</p>

<div class="table-responsive mt-20">
<table class="table table-utilities ">
<thead>
<tr>
<th>Option</th>
<th>Type</th>
<th>Default&nbsp;value</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><a href="#property"><code>property</code></a></td>
<td><strong>Required</strong></td>
<td>–</td>
<td>Name of the property, this can be a string or an array of strings (e.g., horizontal paddings or margins).</td>
</tr>
<tr>
<td><a href="#values"><code>values</code></a></td>
<td><strong>Required</strong></td>
<td>–</td>
<td>List of values, or a map if you don’t want the class name to be the same as the value. If <code>null</code> is used as map key, <code>class</code> is not prepended to the class name.</td>
</tr>
<tr>
<td><a href="#class"><code>class</code></a></td>
<td>Optional</td>
<td>null</td>
<td>Name of the generated class. If not provided and <code>property</code> is an array of strings, <code>class</code> will default to the first element of the <code>property</code> array. If not provided and <code>property</code> is a string, the <code>values</code> keys are used for the <code>class</code> names.</td>
</tr>
<tr>
<td><a href="#css-variable-utilities"><code>css-var</code></a></td>
<td>Optional</td>
<td><code>false</code></td>
<td>Boolean to generate CSS variables instead of CSS rules.</td>
</tr>
<tr>
<td><a href="#css-variable-utilities"><code>css-variable-name</code></a></td>
<td>Optional</td>
<td>null</td>
<td>Custom un-prefixed name for the CSS variable inside the ruleset.</td>
</tr>
<tr>
<td><a href="#local-css-variables"><code>local-vars</code></a></td>
<td>Optional</td>
<td>null</td>
<td>Map of local CSS variables to generate in addition to the CSS rules.</td>
</tr>
<tr>
<td><a href="#states"><code>state</code></a></td>
<td>Optional</td>
<td>null</td>
<td>List of pseudo-class variants (e.g., <code>:hover</code> or <code>:focus</code>) to generate.</td>
</tr>
<tr>
<td><a href="#responsive"><code>responsive</code></a></td>
<td>Optional</td>
<td><code>false</code></td>
<td>Boolean indicating if responsive classes should be generated.</td>
</tr>
<tr>
<td><code>rfs</code></td>
<td>Optional</td>
<td><code>false</code></td>
<td>Boolean to enable <a href="">fluid rescaling with RFS</a>.</td>
</tr>
<tr>
<td><a href="#print"><code>print</code></a></td>
<td>Optional</td>
<td><code>false</code></td>
<td>Boolean indicating if print classes need to be generated.</td>
</tr>
<tr>
<td><code>rtl</code></td>
<td>Optional</td>
<td><code>true</code></td>
<td>Boolean indicating if utility should be kept in RTL.</td>
</tr>
</tbody>
</table></div>

<h2 class="mt-20">API explained <a href="" id="api-explained" class="opacity-0 hover-1">#</a></h2>
<p>
Within our <code>_utilities.scss</code> stylesheet, all utility variables are added to the <code>$utilities variable</code>. Each utility group resembles the following:
</p>

<!-- code snippet-->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton1" onclick="copyToClipboard('copyText1', 'copyButton1')">
<i class="fa fa-copy" id="iconCopied1"></i>
</button>
<pre id="copyText1"><code>$utilities: (
  &quot;opacity&quot;: (
    property: opacity,
    values: (
      0: 0,
      25: .25,
      50: .5,
      75: .75,
      100: 1,
    )
  )
);</code></pre>
</div>
<!-- code snippet end -->
<p class="mt-20">Which outputs the following:</p>

<!-- code snippet-->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton2" onclick="copyToClipboard('copyText2', 'copyButton2')">
<i class="fa fa-copy" id="iconCopied2"></i>
</button>
<pre id="copyText2"><code>.opacity-0 { opacity: 0; }
.opacity-25 { opacity: .25; }
.opacity-50 { opacity: .5; }
.opacity-75 { opacity: .75; }
.opacity-100 { opacity: 1; }</code></pre>
</div>
<!-- code snippet end -->

<h3 class="mt-20">Property  <a href="" id="property" class="opacity-0 hover-1">#</a></h3>
<p>
Any utility must have the required property key set, and it must have a valid CSS property in it. The ruleset for the created utility makes use of this feature. The class name acts as the default class name when the class key is absent. Think about the <code>text-decoration</code> tool:
</p>

<!-- code snippet-->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton3" onclick="copyToClipboard('copyText3', 'copyButton3')">
<i class="fa fa-copy"></i>
</button>
<pre id="copyText3"><code>$utilities: (
  &quot;text-decoration&quot;: (
    property: text-decoration,
    values: none underline line-through
  )
);</code></pre>
</div>
<!-- code snippet end -->
<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton4" onclick="copyToClipboard('copyText4', 'copyButton4')">
<i class="fa fa-copy"></i>
</button>
<pre id="copyText4"><code>.text-decoration-none { text-decoration: none !important; }
.text-decoration-underline { text-decoration: underline !important; }
.text-decoration-line-through { text-decoration: line-through !important; }</code></pre>
</div>

<!-- code end -->
<h3 class="mt-20">Values  <a href="" id="values" class="opacity-0 hover-1">#</a></h3>
<p>To define which values for the specified property should be used in the automatically created class names and rules, use the values key. (Set in the utilities or in a Sass variable) Can be a list or map.</p>



<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton5" onclick="copyToClipboard('copyText5', 'copyButton5')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText5"><code>values: none underline line-through</code></pre>
</div>
<!-- code end -->
<p class="mt-20">As a map, like with <a href="/utilities/opacity.php"><code>opacity</code> utilities</a>:</p>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton6" onclick="copyToClipboard('copyText6', 'copyButton6')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText6"><code>values: (
  0: 0,
  25: .25,
  50: .5,
  75: .75,
  100: 1,
)</code></pre>
</div>
<!-- code end -->
<p class="mt-20">As a Sass variable that sets the list or map, as in our <a href="/helpers/position.php"><code>position</code> utilities</a>:</p>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton7" onclick="copyToClipboard('copyText7', 'copyButton7')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText7"><code>values: $position-values</code></pre>
</div>
<!-- code end -->

<h3 class="mt-20"> Class <a href="" id="class" class="opacity-0 hover-1">#</a></h3>
<p>Use the <code>class</code> option to change the class prefix used in the compiled CSS. For example, to change from <code>.opacity-*</code> to <code>.o-*</code>:</p>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton8" onclick="copyToClipboard('copyText8', 'copyButton8')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText8"><code>$utilities: (
  "opacity": (
    property: opacity,
    class: o,
    values: (
      0: 0,
      25: .25,
      50: .5,
      75: .75,
      100: 1,
    )
  )
);</code></pre>
</div>
<!-- code end -->

<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton8" onclick="copyToClipboard('copyText8', 'copyButton8')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText8"><code>.o-0 { opacity: 0 !important; }
.o-25 { opacity: .25 !important; }
.o-50 { opacity: .5 !important; }
.o-75 { opacity: .75 !important; }
.o-100 { opacity: 1 !important; }</code></pre>
</div>
<!-- code end -->

<p class="mt-20">If <code>class: null</code>, generates classes for each of the <code>values</code> keys:</p>

<!-- code end -->

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton9" onclick="copyToClipboard('copyText9', 'copyButton9')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText9"><code>$utilities: (
  "visibility": (
    property: visibility,
    class: null,
    values: (
      visible: visible,
      invisible: hidden,
    )
  )
);</code></pre>
</div>
<!-- code end -->
<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton10" onclick="copyToClipboard('copyText10', 'copyButton10')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText10"><code>.visible { visibility: visible !important; }
.invisible { visibility: hidden !important; }</code></pre>
</div>
<!-- code end -->

<h3 class="mt-20">CSS variable utilities <a href="" id="css-variable-utilities" class="opacity-0 hover-1">#</a></h3>
<p>
If the css-var boolean option is set to true, local CSS variables rather than the customary property: value rules will be generated by the API for the specified selector. To set a CSS variable name other from the class name, add an optional css-variable-name.
</p>
<p>
Take a look at our <code>.text-opacity-*</code> tools. We will receive a customized result if include the css-variable-name option.
</p>


<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton11" onclick="copyToClipboard('copyText11', 'copyButton11')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText11"><code>$utilities: (
  "text-opacity": (
    css-var: true,
    css-variable-name: text-alpha,
    class: text-opacity,
    values: (
      25: .25,
      50: .5,
      75: .75,
      100: 1
    )
  ),
);</code></pre>
</div>
<!-- code end -->
<h5 class="result m-0">RESULT</h5>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton12" onclick="copyToClipboard('copyText12', 'copyButton12')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText12"><code>.text-opacity-25 { --bs-text-alpha: .25; }
.text-opacity-50 { --bs-text-alpha: .5; }
.text-opacity-75 { --bs-text-alpha: .75; }
.text-opacity-100 { --bs-text-alpha: 1; }</code></pre>
</div>
<!-- code end -->

<h3 class="mt-20">Local CSS variables <a href="" id="local-css-variables" class="opacity-0 hover-1">#</a></h3>
<p>
To create local CSS variables for the utility class's ruleset, use the local-vars option to specify a Sass map. Please be aware that consuming certain local CSS variables in the resulting CSS rules may necessitate additional effort. Consider our <code>.bg-*</code> tools, for instance:
</p>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton13" onclick="copyToClipboard('copyText13', 'copyButton13')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText13"><code>$utilities: (
  "background-color": (
    property: background-color,
    class: bg,
    local-vars: (
      "bg-opacity": 1
    ),
    values: map-merge(
      $utilities-bg-colors,
      (
        "transparent": transparent
      )
    )
  )
);</code></pre>
</div>
<!-- code end -->
<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton14" onclick="copyToClipboard('copyText14', 'copyButton14')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText14"><code>.bg-primary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
}</code></pre>
</div>
<!-- code end -->

<h3 class="mt-20">States  <a href="" id="states" class="opacity-0 hover-1">#</a></h3>
<p>
To create variations of pseudo-classes, use the state option. The pseudo-classes hover and focus are two examples. Classnames are generated for that pseudo-class when a list of states is given. For instance, adding state: hover will modify the opacity on hover <code>.opacity-hover</code> <code>:hover</code> in the CSS code you generated.
</p>

<p>Need more than one pseudo-class? Use a list of states, separated by <code>spaces:</code> <code>state:</code> focused hover.</p>



<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton15" onclick="copyToClipboard('copyText15', 'copyButton15')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText15"><code>$utilities: (
  "opacity": (
    property: opacity,
    class: opacity,
    state: hover,
    values: (
      0: 0,
      25: .25,
      50: .5,
      75: .75,
      100: 1,
    )
  )
);</code></pre>
</div>
<!-- code end -->

<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton16" onclick="copyToClipboard('copyText16', 'copyButton16')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText16"><code>.opacity-0-hover:hover { opacity: 0 !important; }
.opacity-25-hover:hover { opacity: .25 !important; }
.opacity-50-hover:hover { opacity: .5 !important; }
.opacity-75-hover:hover { opacity: .75 !important; }
.opacity-100-hover:hover { opacity: 1 !important; }</code></pre>
</div>
<!-- code end -->

<h3 class="mt-20">Responsive <a href="" id="responsive" class="opacity-0 hover-1">#</a></h3>
<p>Add the <code>responsive</code> boolean to generate responsive utilities (e.g., <code>.opacity-md-25</code>) across <a href="/layout/breakpoints.php">all breakpoints</a>.</p>

<!-- code snippet-->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton17" onclick="copyToClipboard('copyText17', 'copyButton17')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText17"><code>$utilities: (
  "opacity": (
    property: opacity,
    responsive: true,
    values: (
      0: 0,
      25: .25,
      50: .5,
      75: .75,
      100: 1,
    )
  )
);</code></pre>
</div>
<!-- code snippet end -->

<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton18" onclick="copyToClipboard('copyText18', 'copyButton18')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText18"><code>.opacity-0 { opacity: 0 !important; }
.opacity-25 { opacity: .25 !important; }
.opacity-50 { opacity: .5 !important; }
.opacity-75 { opacity: .75 !important; }
.opacity-100 { opacity: 1 !important; }

@media (min-width: 576px) {
  .opacity-sm-0 { opacity: 0 !important; }
  .opacity-sm-25 { opacity: .25 !important; }
  .opacity-sm-50 { opacity: .5 !important; }
  .opacity-sm-75 { opacity: .75 !important; }
  .opacity-sm-100 { opacity: 1 !important; }
}

@media (min-width: 768px) {
  .opacity-md-0 { opacity: 0 !important; }
  .opacity-md-25 { opacity: .25 !important; }
  .opacity-md-50 { opacity: .5 !important; }
  .opacity-md-75 { opacity: .75 !important; }
  .opacity-md-100 { opacity: 1 !important; }
}

@media (min-width: 992px) {
  .opacity-lg-0 { opacity: 0 !important; }
  .opacity-lg-25 { opacity: .25 !important; }
  .opacity-lg-50 { opacity: .5 !important; }
  .opacity-lg-75 { opacity: .75 !important; }
  .opacity-lg-100 { opacity: 1 !important; }
}

@media (min-width: 1200px) {
  .opacity-xl-0 { opacity: 0 !important; }
  .opacity-xl-25 { opacity: .25 !important; }
  .opacity-xl-50 { opacity: .5 !important; }
  .opacity-xl-75 { opacity: .75 !important; }
  .opacity-xl-100 { opacity: 1 !important; }
}

@media (min-width: 1400px) {
  .opacity-xxl-0 { opacity: 0 !important; }
  .opacity-xxl-25 { opacity: .25 !important; }
  .opacity-xxl-50 { opacity: .5 !important; }
  .opacity-xxl-75 { opacity: .75 !important; }
  .opacity-xxl-100 { opacity: 1 !important; }
}</code></pre>
</div>
<!-- code end -->

<h3 class="mt-20">Print <a href="" id="print" class="opacity-0 hover-1">#</a></h3>
<p>
When the print option is enabled, utility classes for print are also generated. These classes can only be used with the <strong>@media print ... media query.</strong>
</p>
<!-- code snippet-->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton19" onclick="copyToClipboard('copyText19', 'copyButton19')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText19"><code>$utilities: (
  "opacity": (
    property: opacity,
    print: true,
    values: (
      0: 0,
      25: .25,
      50: .5,
      75: .75,
      100: 1,
    )
  )
);</code></pre>
</div>
<!-- code snippet end -->

<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton20" onclick="copyToClipboard('copyText20', 'copyButton20')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText20"><code>.opacity-0 { opacity: 0 !important; }
.opacity-25 { opacity: .25 !important; }
.opacity-50 { opacity: .5 !important; }
.opacity-75 { opacity: .75 !important; }
.opacity-100 { opacity: 1 !important; }

@media print {
  .opacity-print-0 { opacity: 0 !important; }
  .opacity-print-25 { opacity: .25 !important; }
  .opacity-print-50 { opacity: .5 !important; }
  .opacity-print-75 { opacity: .75 !important; }
  .opacity-print-100 { opacity: 1 !important; }
}</code></pre>
</div>
<!-- code end -->

<h3 class="mt-20">Importance <a href="" id="importance" class="opacity-0 hover-1">#</a></h3>
<p>
Each and every utility produced by the API includes! It's crucial to make sure they override modifier classes and components as intended. The global switch for this option is the <code>$enable-important-utilities</code> variable, which has a default value of true.
</p>


<h2>Using the API <a href="" id="using-the-API" class="opacity-0 hover-1">#</a></h2>
<p>Now that you’re familiar with how the utilities API works, learn how to add your own custom classes and modify our default utilities.</p>
<h3>Override utilities <a href="" id="override-utilities" class="opacity-0 hover-1">#</a></h3>
<p>
Use the same key to override current utilities. For instance, follow these steps if there is a need for more responsive overflow utility classes:
</p>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton21" onclick="copyToClipboard('copyText21', 'copyButton21')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText21"><code>$utilities: (
  "overflow": (
    responsive: true,
    property: overflow,
    values: visible hidden scroll auto,
  ),
);</code></pre>
</div>
<!-- code end -->

<h3 class="mt-20">Add utilities <a href="" id="add-utilities" class="opacity-0 hover-1">#</a></h3>
<p>
With a <code>map-merge</code>, new utilities can be added to the default <code>$utilities</code> map. Prior to adding your new utilities, make sure our necessary Sass files and <code>_utilities.scss</code> are imported. Here's an example of how to implement a cursor utility that responds to three values.
</p>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton22" onclick="copyToClipboard('copyText22', 'copyButton22')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText22"><code>@import "bootstrap/scss/functions";
@import "bootstrap/scss/variables";
@import "bootstrap/scss/maps";
@import "bootstrap/scss/mixins";
@import "bootstrap/scss/utilities";

$utilities: map-merge(
  $utilities,
  (
    "cursor": (
      property: cursor,
      class: cursor,
      responsive: true,
      values: auto pointer grab,
    )
  )
);

@import "bootstrap/scss/utilities/api";</code></pre>
</div>
<!-- code end -->


<h3 class="mt-20">Modify utilities <a href="" id="modify-utilities" class="opacity-0 hover-1">#</a></h3>
<p>
Use the <code>map-get</code> and <code>map-merge</code> functions to change the utilities already present in the default <code>$utilities</code> map. The width utilities are being given an additional value in the example below. First, perform a basic map merging, and then indicate which utility per wish to change. From there, use <code>map-get</code> to access and change the utility's settings and values by fetching the nested <code>"width"</code> map.
</p>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton22" onclick="copyToClipboard('copyText22', 'copyButton22')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText22"><code>@import "bootstrap/scss/functions";
@import "bootstrap/scss/variables";
@import "bootstrap/scss/maps";
@import "bootstrap/scss/mixins";
@import "bootstrap/scss/utilities";

$utilities: map-merge(
  $utilities,
  (
    "width": map-merge(
      map-get($utilities, "width"),
      (
        values: map-merge(
          map-get(map-get($utilities, "width"), "values"),
          (10: 10%),
        ),
      ),
    ),
  )
);

@import "bootstrap/scss/utilities/api";</code></pre>
</div>
<!-- code end -->

<h4 class="mt-20">Enable responsive  <a href="" id="enable-responsive" class="opacity-0 hover-1">#</a></h4>
<p>
An existing collection of utilities that are not responsive by default can be made responsive by enabling responsive classes. For instance, to enable responsive border classes:
</p>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton23" onclick="copyToClipboard('copyText23', 'copyButton23')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText23"><code>@import "bootstrap/scss/functions";
@import "bootstrap/scss/variables";
@import "bootstrap/scss/maps";
@import "bootstrap/scss/mixins";
@import "bootstrap/scss/utilities";

$utilities: map-merge(
  $utilities, (
    "border": map-merge(
      map-get($utilities, "border"),
      ( responsive: true ),
    ),
  )
);

@import "bootstrap/scss/utilities/api";</code></pre>
</div>
<!-- code end -->

<p class="mt-20">
For each breakpoint, this will now produce responsive variants of <code>.border</code> and <code>.border-0</code>. The produced CSS will seem as follows:
</p>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton24" onclick="copyToClipboard('copyText24', 'copyButton24')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText24"><code>.border { ... }
.border-0 { ... }

@media (min-width: 576px) {
  .border-sm { ... }
  .border-sm-0 { ... }
}

@media (min-width: 768px) {
  .border-md { ... }
  .border-md-0 { ... }
}

@media (min-width: 992px) {
  .border-lg { ... }
  .border-lg-0 { ... }
}

@media (min-width: 1200px) {
  .border-xl { ... }
  .border-xl-0 { ... }
}

@media (min-width: 1400px) {
  .border-xxl { ... }
  .border-xxl-0 { ... }
}</code></pre>
</div>
<!-- code end -->

<h4 class="mt-20">Rename utilities  <a href="" id="rename-utilities" class="hover-1 opacity-0">#</a></h4>
<p>
Missing v4 utilities or accustomed to a different name scheme? The utilities API can be used to change a utility's resultant class, such as renaming <code>.ms-*</code> utilities to the somewhat-outdated <code>.ml-*</code>:
</p>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton25" onclick="copyToClipboard('copyText25', 'copyButton25')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText25"><code>@import "bootstrap/scss/functions";
@import "bootstrap/scss/variables";
@import "bootstrap/scss/maps";
@import "bootstrap/scss/mixins";
@import "bootstrap/scss/utilities";

$utilities: map-merge(
  $utilities, (
    "margin-start": map-merge(
      map-get($utilities, "margin-start"),
      ( class: ml ),
    ),
  )
);

@import "bootstrap/scss/utilities/api";</code></pre>
</div>
<!-- code end -->

<h3 class="mt-20">Remove utilities <a href="" id="remove-utilities" class="opacity-0 hover-1">#</a></h3>
<p>Remove any of the default utilities with the <a href="https://sass-lang.com/documentation/modules/map#remove" target="_blank"><code>map-remove()</code> Sass function</a>.</p>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton26" onclick="copyToClipboard('copyText26', 'copyButton26')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText26"><code>@import "bootstrap/scss/functions";
@import "bootstrap/scss/variables";
@import "bootstrap/scss/maps";
@import "bootstrap/scss/mixins";
@import "bootstrap/scss/utilities";

// Remove multiple utilities with a comma-separated list
$utilities: map-remove($utilities, "width", "float");

@import "bootstrap/scss/utilities/api";</code></pre>
</div>
<!-- code end -->
<p class="mt-20">You can also use the <a href="https://sass-lang.com/documentation/modules/map#merge" target="_blank"><code>map-merge()</code> Sass function</a> and set the group key to <code>null</code> to remove the utility.</p>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton27" onclick="copyToClipboard('copyText27', 'copyButton27')">
<i class="fa fa-copy"></i>
</button>    
<pre id="copyText27"><code>@import "bootstrap/scss/functions";
@import "bootstrap/scss/variables";
@import "bootstrap/scss/maps";
@import "bootstrap/scss/mixins";
@import "bootstrap/scss/utilities";

$utilities: map-merge(
  $utilities,
  (
    "width": null
  )
);

@import "bootstrap/scss/utilities/api";</code></pre>
</div>
<!-- code end -->

<h3 class="mt-20">Add, remove, modify <a href="" id="add-remove-modify" class="opacity-0 hover-1">#</a></h3>
<p>With the <a href="https://sass-lang.com/documentation/modules/map#merge" target="_blank"><code>map-merge()</code> Sass function</a>, there is an option to change numerous utilities at once and add, remove, and alter them all. Here's how to integrate the prior illustrations into one sizable map.</p>


  <!-- code -->
  <div class="code_bg rounded p-3">
  <button class="btn btn-outline-primary float-end" id="copyButton28" onclick="copyToClipboard('copyText28', 'copyButton28')">
  <i class="fa fa-copy"></i>
  </button>    
  <pre id="copyText28"><code>@import "bootstrap/scss/functions";
@import "bootstrap/scss/variables";
@import "bootstrap/scss/maps";
@import "bootstrap/scss/mixins";
@import "bootstrap/scss/utilities";

$utilities: map-merge(
  $utilities,
  (
    // Remove the `width` utility
    "width": null,

    // Make an existing utility responsive
    "border": map-merge(
      map-get($utilities, "border"),
      ( responsive: true ),
    ),

    // Add new utilities
    "cursor": (
      property: cursor,
      class: cursor,
      responsive: true,
      values: auto pointer grab,
    )
  )
);

@import "bootstrap/scss/utilities/api";</code></pre>
  </div>
  <!-- code end -->

  <h4 class="mt-20">Remove utility in RTL <a href="" id="remove-utility-in-RTL" class="opacity-0 hover-1">#</a></h4>
<p><a href="https://rtlstyling.com/posts/rtl-styling#common-things-that-might-not-work-for-rtl" target="_blank">RTL styling might be</a> challenging in some edge instances, such as Arabic line breaks. Thus, by changing the rtl option to false, utilities can be removed from RTL output:</p>


  
    <!-- code -->
  <div class="code_bg rounded p-3">
  <button class="btn btn-outline-primary float-end" id="copyButton29" onclick="copyToClipboard('copyText29', 'copyButton29')">
  <i class="fa fa-copy"></i>
  </button>    
  <pre id="copyText29"><code>$utilities: (
  "word-wrap": (
    property: word-wrap word-break,
    class: text,
    values: (break: break-word),
    rtl: false
  ),
);</code></pre>
  </div>
  <!-- code end -->
<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3">
  <button class="btn btn-outline-primary float-end" id="copyButton30" onclick="copyToClipboard('copyText30', 'copyButton30')">
  <i class="fa fa-copy"></i>
  </button>    
  <pre id="copyText30"><code>/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
}
/* rtl:end:remove */</code></pre>
  </div>
  <!-- code end -->
  <p class="mt-20">This doesn’t output anything in RTL, thanks to <a target="_blank" href="https://rtlcss.com/learn/usage-guide/control-directives/#remove">the RTLCSS <code>remove</code> control directive</a>.</p>

</div>

 <!-- right side scrollbar -->
 <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">
                                    <li><a href="#api-explained">API explained</a>
                                        <ul>
                                        <li><a href="#property">Property</a></li>                                    
                                        <li><a href="#values">Values</a></li>                                    
                                        <li><a href="#class">Class</a></li>                                    
                                        <li><a href="#css-variable-utilities">CSS variable utilities</a></li>                                    
                                        <li><a href="#local-css-variables">Local CSS variables</a></li>                                    
                                        <li><a href="#states">States</a></li>                                    
                                        <li><a href="#responsive">Responsive</a></li>                                    
                                        <li><a href="#print">Print</a></li> 
                                        </ul>
                                    </li>                                    
                                                                       
                                    <li><a href="#importance">Importance</a></li>                                    
                                    <li><a href="#using-the-API">Using the API</a>
                                        <ul>
                                            <li><a href="#override-utilities">Override utilities</a></li>
                                            <li><a href="#add-utilities">Add utilities</a></li>
                                            <li><a href="#modify-utilities">Modify utilities</a>
                                                <ul>
                                                    <li><a href="#enable-responsive">Enable responsive</a></li>
                                                    <li><a href="#rename-utilities">Rename utilities</a></li>
                                                </ul>
                                            </li> 
                                            <li><a href="#remove-utilities">Remove utilities</a></li>                                           
                                            <li><a href="#add-remove-modify">Add, remove, modify</a>
                                                <ul>
                                                    <li><a href="#remove-utility-in-RTL">Remove utility in RTL</a></li>
                                                </ul>
                                            </li>                                           
                                        </ul>
                                    </li> 
                                </ul>
                            </div>
                        </div>
</div>
<!-- end flat -->

                    <!-- pagination -->
                    <div class="col-12 col-sm-9 mt-30">
                        <ul class="pagination pagination_custom justify-content-between">
                            <a class="page-link border-0" href="/category/utilities.php">
                                <span>Previous</span>
                                <strong class="d-block">« Utilities</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/background.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Background »</strong>
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
<?php
include '../_search-docs.php';
?>


