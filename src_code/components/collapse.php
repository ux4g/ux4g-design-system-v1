<?php
$title = 'UX4G | Collapse';
$canonical = 'https://doc.ux4g.gov.in/components/collapse.php';


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
                            <li class="breadcrumb-item"><a
                                    href="/category/components.php">Components</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Collapse</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="col-12 col-sm-9">
                    <h1 class="mb-30"> Collapse</h1>
                    <p>Toggle the visibility of content across your project with a few classes and our JavaScript plugins.</p>
</div>
                    <!-- product -->
                    <section class="product  pt-50 pb-50">
                        <div class="container-fluid">
                            <div class="product-tab">
                                <!-- Include Implement and Design tab -->
                                <?php
                                include '../_design-tab.php'
                                ?>


                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab_custom tab-pane active show" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="body_content">

<h2>How it works <a href="" id="How-it-works" class="opacity-0 hover-1">#</a></h2>
<p>
<strong>The JavaScript plugin for <code>collapse</code> is used to reveal and conceal content</strong>. Triggers that are mapped to particular components you toggle are buttons or anchors. When an element is <code>collapsed</code>, the height will animate from its current value to zero. There can be no use of padding on a <code>collapse</code> element due to the way CSS handles <code>animations</code>. Use the class as a stand-alone wrapper element instead.
</p>
<div class="bd-callout bd-callout-info blockquote ">The animation effect of this component is dependent on the <code>prefers-reduced-motion</code> media query. See the <a href="#">reduced motion section of our accessibility documentation</a>.</div>
<h2 class="mt-20">Example <a href="" id="Example" class="opacity-0 hover-1">#</a></h2>
<p>To display and hide a different element by changing its class, click the buttons below:</p>
<ul class="un_order_list">
    <li>Content is hidden by <code>.collapse</code>.</li>
    <li>Transitions are when collapse is used.</li>
    <li>Show content in collapse</li></ul>
<p>
Usage of a button with the <code>data-bs-target</code> attribute is generally advised. Also utilize a link with the href property (and a <code>role="button"</code>), albeit doing so is not advised from a semantic perspective. The <code>data-bs-toggle="collapse"</code> is necessary in both situations.
</p>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton1" onclick="copyToClipboard('copyText1', 'copyButton1')"><i class="fa fa-copy"></i></button>
<div id="copyText1"  >
<pre><code>&lt;p&gt;
  &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseExample&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
    Link with href
  &lt;/a&gt;
  &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
    Button with data-bs-target
  &lt;/button&gt;
&lt;/p&gt;
&lt;div class=&quot;collapse&quot; id=&quot;collapseExample&quot;&gt;
  &lt;div class=&quot;card card-body&quot;&gt;
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
</div>
</div>
<!-- code end -->
<!-- RESULT -->
<h5 class="result m-0">RESULT</h5>
<div class="code_bg rounded p-3">
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-bs-target
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
</div>
<!-- RESULT end -->
<h2 class="mt-20">Horizontal <a href="" id="Horizontal" class="opacity-0 hover-1">#</a></h2>
<p>
Horizontal collapsing is also supported by the collapse plugin. Set a width on the immediate child element and add the <code>.collapse-horizontal</code> modifier class to transition the width rather than the height. Welcome to use the width utilities, write unique Sass, or use inline styles.
</p>
<div class="bd-callout bd-callout-info blockquote ">Please note that while the example below has a <code>min-height</code> set to avoid excessive repaints in our docs, this is not explicitly required. <strong>Only the <code>width</code> on the child element is required.</strong></div>
<!-- code -->
<div class="code_bg rounded p-3 mt-20">
<button class="btn btn-outline-primary float-end" id="copyButton2" onclick="copyToClipboard('copyText2', 'copyButton2')"><i class="fa fa-copy"></i></button>
<div id="copyText2"  >
<pre><code>&lt;p&gt;
  &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseWidthExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseWidthExample&quot;&gt;
    Toggle width collapse
  &lt;/button&gt;
&lt;/p&gt;
&lt;div style=&quot;min-height: 120px;&quot;&gt;
  &lt;div class=&quot;collapse collapse-horizontal&quot; id=&quot;collapseWidthExample&quot;&gt;
    &lt;div class=&quot;card card-body&quot; style=&quot;width: 300px;&quot;&gt;
      This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
</div>

</div>
<!-- code end -->
<!-- RESULT -->
<h5 class="result m-0">RESULT</h5>
<div class="code_bg rounded p-3">
<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
    Toggle width collapse
  </button>
</p>
<div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 300px;">
      This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
    </div>
  </div>
</div>
</div>
<!-- RESULT end -->
<h2 class="mt-20">Multiple targets <a href="" id="Multiple-targets" class="opacity-0 hover-1">#</a></h2>
<p>
By referring them with a selector in its href or <code>data-bs-target</code> property, a <code>"button"</code> or <code>"a"</code> can reveal and conceal several items. If each <code>&lt;button&gt;</code> or <a> references an element with its href or <code>data-bs-target</code> attribute, the element can be shown and hidden.
</p>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton3" onclick="copyToClipboard('copyText3', 'copyButton3')"><i class="fa fa-copy"></i></button>
<div id="copyText3" >
    <pre><code>&lt;p&gt;
  &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#multiCollapseExample1&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1&quot;&gt;Toggle first element&lt;/a&gt;
  &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#multiCollapseExample2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample2&quot;&gt;Toggle second element&lt;/button&gt;
  &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;.multi-collapse&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1 multiCollapseExample2&quot;&gt;Toggle both elements&lt;/button&gt;
&lt;/p&gt;
&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample1&quot;&gt;
      &lt;div class=&quot;card card-body&quot;&gt;
        Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample2&quot;&gt;
      &lt;div class=&quot;card card-body&quot;&gt;
        Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
</div>
</div>
<!-- code end -->
<!-- RESULT -->
<h5 class="result m-0">RESULT</h5>
<div class="code_bg rounded p-3">
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
      </div>
    </div>
  </div>
</div>
</div>
<!-- RESULT end -->
<h2 class="mt-20">Accessibility <a href="" id="Accessibility" class="opacity-0 hover-1">#</a></h2>
<p>
Make sure the control element has <code>aria-expanded</code>. This attribute explicitly communicates to screen readers and other assistive devices the current status of the collapsible element connected to the control. The control element's property should be set to <code>aria-expanded="false"</code> if the collapsible element is closed by default. Set <code>aria-expanded="true"</code> on the control if we've used the show class to have the collapsible element default to being open. Depending on whether the collapsible element has been opened or closed (through JavaScript, or because the user triggered another control element also related to the same collapsible element), the plugin will automatically toggle this attribute on the control. The attribute <code>role="button"role="button"</code> should be applied to the control element if its HTML element is not a button (such as an a> or div>).
</p>

<p>Adding the <code>aria-controls</code> attribute to your control element, which contains the id of the collapsible element, is necessary if the control element is targeting just one collapsible element, as indicated by the <code>data-bs-target</code> attribute pointing to an id selector. This attribute is used by contemporary screen readers and other assistive devices to give users more shortcuts to get to the collapsible element itself.</p>

<p>Write custom JavaScript to add the different optional keyboard interactions defined in the <a href="https://www.w3.org/WAI/ARIA/apg/patterns/accordion/" target="_blank" rel="noopener noreferrer">ARIA Authoring Practices Guide accordion pattern</a> since UX4G's present implementation does not support them.</p>

<h2>Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
<h3 class="mt-20">Variables <a href="" id="Variables" class="opacity-0 hover-1">#</a></h3>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton4" onclick="copyToClipboard('copyText4', 'copyButton4')"><i class="fa fa-copy"></i></button>
<pre id="copyText4"><code>$transition-collapse:         height .35s ease;
$transition-collapse-width:   width .35s ease;</code></pre>
</div>
<!-- code end -->
<h3 class="mt-20">Classes <a href="" id="Classes" class="opacity-0 hover-1">#</a></h3>
<p>
<code>SCS/_transitions</code> contains classes for collapse <code>transitions.scss</code> because these are shared by both the collapse and accordion components.
</p>
<!-- code -->

<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton5" onclick="copyToClipboard('copyText5', 'copyButton5')"><i class="fa fa-copy"></i></button>
    <pre id="copyText5"><code>.collapse {
  &amp;:not(.show) {
    display: none;
  }
}

.collapsing {
  height: 0;
  overflow: hidden;
  @include transition($transition-collapse);

  &amp;.collapse-horizontal {
    width: 0;
    height: auto;
    @include transition($transition-collapse-width);
  }
}</code></pre>
</div>
<!-- code end -->
<h2 class="mt-20">Usage <a href="" id="Usage" class="opacity-0 hover-1">#</a></h2>
<p>
A few classes are used by the collapse plugin to carry out the labor-intensive tasks:
</p>
<ul class="un_order_list">
    <li>The content is hidden by collapse</li>
    <li>Show collapse displays the information</li>
    <li>When the transition begins, collapse is added; when it ends, it is removed.</li>
    <li><code>transitions.scss</code> contains these classes.</li>
</ul>

<h3>Via data attributes <a href="" id="Via-data-attributes" class="opacity-0 hover-1">#</a></h3>
<p>
To automatically give control of one or more collapsible elements to the element, simply add <code>data-bs-toggle="collapse"</code> and a <code>data-bs-target</code> to the element. A CSS selector can be used with the <code>data-bs-target</code>attribute to apply the collapse. Make sure to give the collapsible element the class collapse. To open by default, add the extra class show.
</p>
<p>Add the data attribute data-bs-parent="#selector" to a collapsible section to enable group management that functions like an accordion. For more details, see the <a href="/components/accordion.php">accordion page</a>.</p>
<h3>Via JavaScript <a href="" id="Via-JavaScript" class="opacity-0 hover-1">#</a></h3>
<p>Enable manually with:</p>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton6" onclick="copyToClipboard('copyText6', 'copyButton6')"><i class="fa fa-copy"></i></button>
    <pre id="copyText6"><code>const collapseElementList = document.querySelectorAll('.collapse')
const collapseList = [...collapseElementList].map(collapseEl =&gt; new bootstrap.Collapse(collapseEl))</code></pre>
</div>
<!-- code end -->

<h3 class="mt-20">Options <a href="" id="Options" class="opacity-0 hover-1">#</a></h3>
<p>
<code>Data-bs-animation</code> can have an option name appended to it, for example, <code>data-bs-animation="value,"</code> since options can be provided through data attributes or JavaScript. When sending the choices via data attributes, be sure to modify the case type of the option name from <code>"camelCase"</code> to <code>"kebab-case."</code> Use <code>data-bs-custom-class="beautifier"</code> as opposed to <code>data-bs-customClass="beautifier,"</code> for instance.

</p>
<p>
Since UX4G 1.0.0, all components are compatible with the experimental reserved data attribute <code>data-bs-config</code>, which can store a JSON string for basic component setting. When an element has the <code>data-bs-config="delay":0</code>, <code>"title":123"</code> and <code>data-bs-title="456"</code> attributes, the final title value will be 456 and the individual data attributes will take precedence over the values specified on the <code>data-bs-config</code>. Additionally, JSON variables like <code>data-bs-delay='"show":0</code>, <code>"hide":150"</code> can be stored in existing data attributes.
</p>
<div class="table-responsive"><table class="table table-bordered table-striped "><thead><tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr></thead><tbody><tr><td><code>parent</code></td><td>selector, jQuery object, DOM element</td><td><code>false</code></td><td>If parent is provided, then all collapsible elements under the specified parent will be closed when this collapsible item is shown. (similar to traditional accordion behavior - this is dependent on the <code>card</code> class). The attribute has to be set on the target collapsible area.</td></tr><tr><td><code>toggle</code></td><td>boolean</td><td><code>true</code></td><td>Toggles the collapsible element on invocation</td></tr></tbody></table></div>
<h3>Methods <a href="" id="Methods" class="opacity-0 hover-1">#</a></h3>
<div class="bd-callout bd-callout-danger blockquote_danger"><h4 class="anchor anchorWithStickyNavbar_node_modules-@docusaurus-theme-classic-lib-theme-Heading-styles-module" id="asynchronous-methods-and-transitions">Asynchronous methods and transitions <a href="#asynchronous-methods-and-transitions" class="anchor-link" aria-label="Link to this section: Asynchronous methods and transitions"></a><a href="#asynchronous-methods-and-transitions" class="hash-link" aria-label="Direct link to asynchronous-methods-and-transitions" title="Direct link to asynchronous-methods-and-transitions">&ZeroWidthSpace;</a></h4><p>All API methods are <strong>asynchronous</strong> and start a <strong>transition</strong>. They return to the caller as soon as the transition is started but <strong>before it ends</strong>. In addition, a method call on a <strong>transitioning component will be ignored</strong>.</p><p><a href="#">See our JavaScript documentation for more information</a>.</p></div>

<p class="mt-20">You can create a collapse instance with the constructor, for example:</p>
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton7" onclick="copyToClipboard('copyText7', 'copyButton7')"><i class="fa fa-copy"></i></button>
<pre id="copyText7" tabindex="0" ><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">const bsCollapse = new UX4G.Collapse('#myCollapse', {</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  toggle: false</span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">})</span><br></span></code></pre>
</div>


<div class="table-responsive mt-20"><table class="table table-bordered table-striped "><thead><tr><th>Method</th><th>Description</th></tr></thead><tbody><tr><td><code>dispose</code></td><td>Destroys an element’s collapse. (Removes stored data on the DOM element)</td></tr><tr><td><code>getInstance</code></td><td>Static method which allows you to get the collapse instance associated to a DOM element, you can use it like this: <code>UX4G.Collapse.getInstance(element)</code></td></tr><tr><td><code>getOrCreateInstance</code></td><td>Static method which returns a collapse instance associated to a DOM element or create a new one in case it wasn’t initialized. You can use it like this: <code>UX4G.Collapse.getOrCreateInstance(element)</code></td></tr><tr><td><code>hide</code></td><td>Hides a collapsible element. <strong>Returns to the caller before the collapsible element has actually been hidden</strong> (e.g., before the <code>hidden.bs.collapse</code> event occurs).</td></tr><tr><td><code>show</code></td><td>Shows a collapsible element. <strong>Returns to the caller before the collapsible element has actually been shown</strong> (e.g., before the <code>shown.bs.collapse</code> event occurs).</td></tr><tr><td><code>toggle</code></td><td>Toggles a collapsible element to shown or hidden. <strong>Returns to the caller before the collapsible element has actually been shown or hidden</strong> (i.e. before the <code>shown.bs.collapse</code> or <code>hidden.bs.collapse</code> event occurs).</td></tr></tbody></table></div>
<h3 class="mt-20">Events <a href="" id="Events" class="opacity-0 hover-1">#</a></h3>
<p>UX4G’s collapse class exposes a few events for hooking into collapse functionality.</p>

<div class="table-responsive"><table class="table table-bordered table-striped "><thead><tr><th>Method</th><th>Description</th></tr></thead><tbody><tr><td><code>dispose</code></td><td>Destroys an element’s collapse. (Removes stored data on the DOM element)</td></tr><tr><td><code>getInstance</code></td><td>Static method which allows you to get the collapse instance associated to a DOM element, you can use it like this: <code>UX4G.Collapse.getInstance(element)</code></td></tr><tr><td><code>getOrCreateInstance</code></td><td>Static method which returns a collapse instance associated to a DOM element or create a new one in case it wasn’t initialized. You can use it like this: <code>UX4G.Collapse.getOrCreateInstance(element)</code></td></tr><tr><td><code>hide</code></td><td>Hides a collapsible element. <strong>Returns to the caller before the collapsible element has actually been hidden</strong> (e.g., before the <code>hidden.bs.collapse</code> event occurs).</td></tr><tr><td><code>show</code></td><td>Shows a collapsible element. <strong>Returns to the caller before the collapsible element has actually been shown</strong> (e.g., before the <code>shown.bs.collapse</code> event occurs).</td></tr><tr><td><code>toggle</code></td><td>Toggles a collapsible element to shown or hidden. <strong>Returns to the caller before the collapsible element has actually been shown or hidden</strong> (i.e. before the <code>shown.bs.collapse</code> or <code>hidden.bs.collapse</code> event occurs).</td></tr></tbody></table></div>



















                                                </div>
                                            </div>
                                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                                <div class="right_side">
                                                    <ul class="p-0">
                                                        <li><a href="#How-it-works">How it works</a></li>                                                        
                                                        <li><a href="#Example">Example</a></li>                                                        
                                                        <li><a href="#Horizontal">Horizontal</a></li>   
                                                        <li><a href="#Multiple-targets">Multiple targets</a></li>   
                                                        <li><a href="#Horizontal">Accessibility</a></li>   
                                                        <li><a href="#Sass">Sass</a>
                                                    
                                                        <ul>
                                                        <li><a href="#Variables">Variables</a></li> 
                                                        <li><a href="#Classes">Classes</a></li> 
                                                        <li><a href="#Usage">Usage</a></li> 
                                                        <li><a href="#Via-data-attributes">Via data attributes</a></li> 
                                                        <li><a href="#Via-JavaScript">Via JavaScript</a></li> 
                                                      </ul>
                                                    </li>

                                                          <li><a href="#Options">Options</a></li> 
                                                          <li><a href="#Methods">Methods</a></li> 
                                                          <li><a href="#Events">Events</a></li> 
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="body_content">Demo</div>
                                            </div>
                                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                                <div class="right_side">
                                                    <ul class="p-0">
                                                        <li><a href="#Quick-start">Demo</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </section>
                    <!-- pagination -->
<div class="col-12 col-sm-9">
            <ul class="pagination pagination_custom justify-content-between">
                    <a class="page-link border-0" href="/components/close-button.php">
                        <span>Previous</span>
                        <strong class="d-block">« Close Button</strong>
                    </a>
                    <a class="page-link border-0 float-end" href="/components/dropdowns.php">
                        <span class="text-end">Next</span>
                        <strong class="d-block">Dropdowns »</strong>
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