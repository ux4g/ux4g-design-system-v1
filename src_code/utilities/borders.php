<?php
$title = 'UX4G | Borders';
$canonical = 'https://doc.ux4g.gov.in/utilities/borders.php';

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
                            <li class="breadcrumb-item"><a href="/category/utilities.php">Utilities</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Borders</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row">
                        <div class="col-lg-9">
                            <h1>Borders</h1>
                            <p>Use border utilities to quickly style the border and border-radius of an element. Great
                                for images, buttons, or any other element.</p>
                            <h2>Border <a href="" id="Border" class="opacity-0 hover-1">#</a></h2>
                            <p>Use border utilities to add or remove an element’s borders. Choose from all borders or
                                one at a time.</p>
                            <h3>Additive <a href="" id="Additive" class="opacity-0 hover-1">#</a></h3>
                            <p>Add borders to custom elements:</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                    onclick="copyToClipboard('copyText1', 'copyButton1')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText1">
<code>&lt;span class=&quot;border&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-top&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-end&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-bottom&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-start&quot;&gt;&lt;/span&gt;</code>
        </pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>

                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20 bd-example-border-utils">
                                <span class="border"></span>
                                <span class="border-top"></span>
                                <span class="border-end"></span>
                                <span class="border-bottom"></span>
                                <span class="border-start"></span>
                            </div>
                            <!-- code end -->
                            <h3>Subtractive <a href="" id="Subtractive" class="opacity-0 hover-1">#</a></h3>
                            <p>Or remove borders:</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton2"
                                    onclick="copyToClipboard('copyText2', 'copyButton2')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText2">
<code>&lt;span class=&quot;border border-0&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-top-0&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-end-0&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-bottom-0&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-start-0&quot;&gt;&lt;/span&gt;</code>
</pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>

                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20 bd-example-border-utils">
                                <span class="border border-0"></span>
                                <span class="border border-top-0"></span>
                                <span class="border border-end-0"></span>
                                <span class="border border-bottom-0"></span>
                                <span class="border border-start-0"></span>
                            </div>
                            <!-- code end -->

                            <h2>Color <a href="" id="Color" class="opacity-0 hover-1">#</a></h2>
                            <p>Change the border color using utilities built on our theme colors.</p>


                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton3"
                                    onclick="copyToClipboard('copyText3', 'copyButton3')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText3">
<code>&lt;span class=&quot;border border-primary&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-secondary&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-success&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-danger&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-warning&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-info&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-light&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-dark&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-white&quot;&gt;&lt;/span&gt;</code>
</pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>

                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20 bd-example-border-utils">
                                <span class="border border-primary"></span>
                                <span class="border border-secondary"></span>
                                <span class="border border-success"></span>
                                <span class="border border-danger"></span>
                                <span class="border border-warning"></span>
                                <span class="border border-info"></span>
                                <span class="border border-light"></span>
                                <span class="border border-dark"></span>
                                <span class="border border-white"></span>
                            </div>
                            <!-- code end -->
                            <p>Or modify the default <code>border-color</code> of a component:</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton4"
                                    onclick="copyToClipboard('copyText4', 'copyButton4')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText4">
<code>&lt;div class=&quot;mb-4&quot;&gt;
  &lt;label for=&quot;exampleFormControlInput1&quot; class=&quot;form-label&quot;&gt;Email address&lt;/label&gt;
  &lt;input type=&quot;email&quot; class=&quot;form-control border-success&quot; id=&quot;exampleFormControlInput1&quot; placeholder=&quot;name@example.com&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;h4 pb-2 mb-4 text-danger border-bottom border-danger&quot;&gt;
  Dangerous heading
&lt;/div&gt;

&lt;div class=&quot;p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end&quot;&gt;
  Changing border color and width
&lt;/div&gt;</code>
</pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control border-success"
                                        id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>

                                <div class="h4 pb-2 mb-4 text-danger border-bottom border-danger">
                                    Dangerous heading
                                </div>

                                <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
                                    Changing border color and width
                                </div>
                            </div>
                            <!-- code end -->

                            <h2>Opacity <a href="" id="Opacity" class="opacity-0 hover-1">#</a></h2>
                            <small
                                class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Added
                                in v1.0.0</small>
                            <p>
                            Sass creates UX4G <code>border-{color}</code> utilities using CSS variables. Real-time color adjustments without compilation and dynamic alpha transparency modifications are made possible by this.
                            </p>
                            <h3>How it works <a class="opacity-0 hover-1" href="" id="How-it-works">#</a></h3>
                            <p>Consider our default <code>.border-success</code> utility.</p>


                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 mb-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton5"
                                    onclick="copyToClipboard('copyText5', 'copyButton5')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText5">
<code>.border-success {
--bs-border-opacity: 1;
border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;
}</code>
    </pre>
                            </div>

                            <!-- code snippet end -->
                            <p>
                            Attached a second CSS variable, <code>--bs-border-opacity</code>, for the alpha transparency (with a default value of 1 thanks to a local CSS variable), and we utilize an RGB version of the <code>--bs-success</code> (with the value of 25, 135, 84) CSS variable. This implies each time developer use .border-success Currently, the value developer computed for color is rgba(25, 135, 84, 1). the internal local CSS variable of each. Because of the <code>border-*</code> class's ability to prevent inheritance problems, nested instances of the utility do not always have altered alpha transparency.
                            </p>
                            <h3>Example<a class="opacity-0 hover-1" href="" id="Example">#</a></h3>
                            <p>To change that opacity, override <code>--bs-border-opacity</code> via custom styles or
                                inline styles.</p>


                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton6"
                                    onclick="copyToClipboard('copyText6', 'copyButton6')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText6">
<code>&lt;div class=&quot;border border-success p-2 mb-2&quot;&gt;This is default success border&lt;/div&gt;
&lt;div class=&quot;border border-success p-2&quot; style=&quot;--bs-border-opacity: .5;&quot;&gt;This is 50% opacity success border&lt;/div&gt;</code>
</pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="border border-success p-2 mb-2">This is default success border</div>
                                <div class="border border-success p-2" style="--bs-border-opacity: .5;">This is 50%
                                    opacity success border</div>
                            </div>
                            <!-- code end -->
                            <p>Or, choose from any of the <code>.border-opacity</code> utilities:</p>


                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton7"
                                    onclick="copyToClipboard('copyText7', 'copyButton7')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText7">
<code>&lt;div class=&quot;border border-success p-2 mb-2&quot;&gt;This is default success border&lt;/div&gt;
&lt;div class=&quot;border border-success p-2 mb-2 border-opacity-75&quot;&gt;This is 75% opacity success border&lt;/div&gt;
&lt;div class=&quot;border border-success p-2 mb-2 border-opacity-50&quot;&gt;This is 50% opacity success border&lt;/div&gt;
&lt;div class=&quot;border border-success p-2 mb-2 border-opacity-25&quot;&gt;This is 25% opacity success border&lt;/div&gt;
&lt;div class=&quot;border border-success p-2 border-opacity-10&quot;&gt;This is 10% opacity success border&lt;/div&gt;</code>
</pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="border border-success p-2 mb-2">This is default success border</div>
                                <div class="border border-success p-2 mb-2 border-opacity-75">This is 75% opacity
                                    success border</div>
                                <div class="border border-success p-2 mb-2 border-opacity-50">This is 50% opacity
                                    success border</div>
                                <div class="border border-success p-2 mb-2 border-opacity-25">This is 25% opacity
                                    success border</div>
                                <div class="border border-success p-2 border-opacity-10">This is 10% opacity success
                                    border</div>
                            </div>
                            <!-- code end -->

                            <h2>Width<a href="" id="Width" class="opacity-0 hover-1">#</a></h2>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton8"
                                    onclick="copyToClipboard('copyText8', 'copyButton8')"><i
                                        class="fa fa-copy"></i></button>
                                <pre id="copyText8">
<code>&lt;span class=&quot;border border-1&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-2&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-3&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-4&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-5&quot;&gt;&lt;/span&gt;</code>
</pre>
                            </div>
                            <!-- code snippet end -->
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 bd-example-border-utils mb-20">
                                <span class="border border-1"></span>
                                <span class="border border-2"></span>
                                <span class="border border-3"></span>
                                <span class="border border-4"></span>
                                <span class="border border-5"></span>
                            </div>
                            <!-- code end -->

                            <h2>Radius <a href="" id="Radius" class="opacity-0 hover-1">#</a></h2>
                            <p>Add classes to an element to easily round its corners.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton9"
                                    onclick="copyToClipboard('copyText9', 'copyButton9')"><i
                                        class="fa fa-copy"></i></button>
                                <pre id="copyText9">
<code>&lt;img src=&quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9g0fRdKqqDBtVDkCbY1y6-f12akg1FWQfug&amp;usqp=CAU&quot; class=&quot;rounded&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9g0fRdKqqDBtVDkCbY1y6-f12akg1FWQfug&amp;usqp=CAU&quot; class=&quot;rounded-top&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9g0fRdKqqDBtVDkCbY1y6-f12akg1FWQfug&amp;usqp=CAU&quot; class=&quot;rounded-end&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9g0fRdKqqDBtVDkCbY1y6-f12akg1FWQfug&amp;usqp=CAU&quot; class=&quot;rounded-bottom&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9g0fRdKqqDBtVDkCbY1y6-f12akg1FWQfug&amp;usqp=CAU&quot; class=&quot;rounded-start&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9g0fRdKqqDBtVDkCbY1y6-f12akg1FWQfug&amp;usqp=CAU&quot; class=&quot;rounded-circle&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9g0fRdKqqDBtVDkCbY1y6-f12akg1FWQfug&amp;usqp=CAU&quot; class=&quot;rounded-pill&quot; alt=&quot;...&quot;&gt;</code>
</pre>
                            </div>
                            <!-- code snippet end -->
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg p-3">
                                <div class=" bd-example m-0 border-0 bd-example-rounded-utils">
                                    <svg class="bd-placeholder-img rounded" width="75" height="75"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Example rounded image: 75x75" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                        <title>Example rounded image</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                            fill="#dee2e6" dy=".3em">75x75</text>
                                    </svg>
                                    <svg class="bd-placeholder-img rounded-top" width="75" height="75"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Example top rounded image: 75x75"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <title>Example top rounded image</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                            fill="#dee2e6" dy=".3em">75x75</text>
                                    </svg>
                                    <svg class="bd-placeholder-img rounded-end" width="75" height="75"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Example right rounded image: 75x75"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <title>Example right rounded image</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                            fill="#dee2e6" dy=".3em">75x75</text>
                                    </svg>
                                    <svg class="bd-placeholder-img rounded-bottom" width="75" height="75"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Example bottom rounded image: 75x75"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <title>Example bottom rounded image</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                            fill="#dee2e6" dy=".3em">75x75</text>
                                    </svg>
                                    <svg class="bd-placeholder-img rounded-start" width="75" height="75"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Example left rounded image: 75x75"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <title>Example left rounded image</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                            fill="#dee2e6" dy=".3em">75x75</text>
                                    </svg>
                                    <svg class="bd-placeholder-img rounded-circle" width="75" height="75"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Completely round image: 75x75" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                        <title>Completely round image</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                            fill="#dee2e6" dy=".3em">75x75</text>
                                    </svg>
                                    <svg class="bd-placeholder-img rounded-pill" width="150" height="75"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Rounded pill image: 150x75" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                        <title>Rounded pill image</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                            fill="#dee2e6" dy=".3em">150x75</text>
                                    </svg>
                                </div>
                            </div>
                            <!-- code end -->

                            <h3 class="mt-3">Sizes <a href="" id="Sizes" class="opacity-0 hover-1">#</a></h3>
                            <p>Use the scaling classes for larger or smaller rounded corners. Sizes range from 0 to 5,
                                and can be configured by modifying the utilities API.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 ">
                                <button class="btn btn-outline-primary float-end" id="copyButton10"
                                    onclick="copyToClipboard('copyText10', 'copyButton10')"><i
                                        class="fa fa-copy"></i></button>
                                <pre id="copyText10">
<code>&lt;img src=&quot;...&quot; class=&quot;rounded-0&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-1&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-2&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-3&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-4&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-5&quot; alt=&quot;...&quot;&gt;</code>
</pre>
                            </div>
                            <!-- code snippet end -->
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg p-3"><div class="bd-example m-0 border-0 bd-example-rounded-utils">
                                <svg class="bd-placeholder-img rounded-0" width="75" height="75"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Example non-rounded image: 75x75" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">
                                    <title>Example non-rounded image</title>
                                    <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                        fill="#dee2e6" dy=".3em">75x75</text>
                                </svg>
                                <svg class="bd-placeholder-img rounded-1" width="75" height="75"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Example small rounded image: 75x75" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">
                                    <title>Example small rounded image</title>
                                    <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                        fill="#dee2e6" dy=".3em">75x75</text>
                                </svg>
                                <svg class="bd-placeholder-img rounded-2" width="75" height="75"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Example default rounded image: 75x75"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Example default rounded image</title>
                                    <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                        fill="#dee2e6" dy=".3em">75x75</text>
                                </svg>
                                <svg class="bd-placeholder-img rounded-3" width="75" height="75"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Example large rounded image: 75x75" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">
                                    <title>Example large rounded image</title>
                                    <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                        fill="#dee2e6" dy=".3em">75x75</text>
                                </svg>
                                <svg class="bd-placeholder-img rounded-4" width="75" height="75"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Example larger rounded image: 75x75"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Example larger rounded image</title>
                                    <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                        fill="#dee2e6" dy=".3em">75x75</text>
                                </svg>
                                <svg class="bd-placeholder-img rounded-5" width="75" height="75"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Example extra large rounded image: 75x75"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Example extra large rounded image</title>
                                    <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                        fill="#dee2e6" dy=".3em">75x75</text>
                                </svg>
                            </div></div>
                            <!-- code end -->

                            <h2 class="mt-3">CSS <a href="" id="CSS" class="opacity-0 hover-1">#</a></h2>
                            <h3>Variables <a href="" id="Variables" class="opacity-0 hover-1">#</a></h3>
                            <small
                                class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Added
                                in v1.0.0</small>

                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton11"
                                    onclick="copyToClipboard('copyText11', 'copyButton11')"><i
                                        class="fa fa-copy"></i></button>
                                <pre id="copyText11">
<code>--#{$prefix}border-width: #{$border-width};
  --#{$prefix}border-style: #{$border-style};
  --#{$prefix}border-color: #{$border-color};
  --#{$prefix}border-color-translucent: #{$border-color-translucent};

  --#{$prefix}border-radius: #{$border-radius};
  --#{$prefix}border-radius-sm: #{$border-radius-sm};
  --#{$prefix}border-radius-lg: #{$border-radius-lg};
  --#{$prefix}border-radius-xl: #{$border-radius-xl};
  --#{$prefix}border-radius-2xl: #{$border-radius-2xl};
  --#{$prefix}border-radius-pill: #{$border-radius-pill};</code>
    </pre>
                            </div>
                            <!-- code end -->

                            <h3>Sass variables <a href="" id="Sass-variables" class="opacity-0 hover-1">#</a></h3>

                            <h3>Sass variables <a href="" id="Sass-variables" class="opacity-0 hover-1">#</a></h3>
                            <div class="code_bg rounded p-3 mb-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton12"
                                    onclick="copyToClipboard('copyText12', 'copyButton12')"><i
                                        class="fa fa-copy"></i></button>
                                <pre id="copyText12">
<code>$border-width:                1px;
$border-widths: (
  1: 1px,
  2: 2px,
  3: 3px,
  4: 4px,
  5: 5px
);

$border-style:                solid;
$border-color:                $gray-300;
$border-color-translucent:    rgba($black, .175);</code>
</pre>
                            </div>
                            <div class="code_bg rounded p-3 mb-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton13"
                                    onclick="copyToClipboard('copyText13', 'copyButton13')"><i
                                        class="fa fa-copy"></i></button>
                                <pre id="copyText13">
<code>$border-radius:               .375rem;
$border-radius-sm:            .25rem;
$border-radius-lg:            .5rem;
$border-radius-xl:            1rem;
$border-radius-2xl:           2rem;
$border-radius-pill:          50rem;</code>
</pre>
                            </div>

                            <h3>Sass mixins <a href="" id="Sass-mixins" class="opacity-0 hover-1">#</a></h3>

                            <div class="code_bg rounded p-3 mb-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton14"
                                    onclick="copyToClipboard('copyText14', 'copyButton14')"><i
                                        class="fa fa-copy"></i></button>
                                <pre id="copyText14">
<code>
@mixin border-radius($radius: $border-radius, $fallback-border-radius: false) {
  @if $enable-rounded {
    border-radius: valid-radius($radius);
  }
  @else if $fallback-border-radius != false {
    border-radius: $fallback-border-radius;
  }
}

@mixin border-top-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-top-left-radius: valid-radius($radius);
    border-top-right-radius: valid-radius($radius);
  }
}

@mixin border-end-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-top-right-radius: valid-radius($radius);
    border-bottom-right-radius: valid-radius($radius);
  }
}

@mixin border-bottom-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-bottom-right-radius: valid-radius($radius);
    border-bottom-left-radius: valid-radius($radius);
  }
}

@mixin border-start-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-top-left-radius: valid-radius($radius);
    border-bottom-left-radius: valid-radius($radius);
  }
}

@mixin border-top-start-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-top-left-radius: valid-radius($radius);
  }
}

@mixin border-top-end-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-top-right-radius: valid-radius($radius);
  }
}

@mixin border-bottom-end-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-bottom-right-radius: valid-radius($radius);
  }
}

@mixin border-bottom-start-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-bottom-left-radius: valid-radius($radius);
  }
}
</code>
</pre>
                            </div>

                            <h3>Utilities API <a href="" id="Utilities-API" class="opacity-0 hover-1">#</a></h3>
                            <p>Border utilities are declared in our utilities API in <code>scss/_utilities.scss</code>.
                                <a href="/utilities/api.php/#Using-the-API">Learn how to use the utilities API.</a>
                            </p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 mb-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton15"
                                    onclick="copyToClipboard('copyText15', 'copyButton15')"><i
                                        class="fa fa-copy"></i></button>
                                <pre id="copyText15">
<code>"border": (
      property: border,
      values: (
        null: var(--#{$prefix}border-width) var(--#{$prefix}border-style) var(--#{$prefix}border-color),
        0: 0,
      )
    ),
    "border-top": (
      property: border-top,
      values: (
        null: var(--#{$prefix}border-width) var(--#{$prefix}border-style) var(--#{$prefix}border-color),
        0: 0,
      )
    ),
    "border-end": (
      property: border-right,
      class: border-end,
      values: (
        null: var(--#{$prefix}border-width) var(--#{$prefix}border-style) var(--#{$prefix}border-color),
        0: 0,
      )
    ),
    "border-bottom": (
      property: border-bottom,
      values: (
        null: var(--#{$prefix}border-width) var(--#{$prefix}border-style) var(--#{$prefix}border-color),
        0: 0,
      )
    ),
    "border-start": (
      property: border-left,
      class: border-start,
      values: (
        null: var(--#{$prefix}border-width) var(--#{$prefix}border-style) var(--#{$prefix}border-color),
        0: 0,
      )
    ),
    "border-color": (
      property: border-color,
      class: border,
      local-vars: (
        "border-opacity": 1
      ),
      values: $utilities-border-colors
    ),
    "border-width": (
      css-var: true,
      css-variable-name: border-width,
      class: border,
      values: $border-widths
    ),
    "border-opacity": (
      css-var: true,
      class: border-opacity,
      values: (
        10: .1,
        25: .25,
        50: .5,
        75: .75,
        100: 1
      )
    ),</code>
    </pre>
                            </div>
                            <!-- code snippet end -->
                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 mb-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton16"
                                    onclick="copyToClipboard('copyText16', 'copyButton16')"><i
                                        class="fa fa-copy"></i></button>
                                <pre id="copyText16">
<code>"rounded": (
      property: border-radius,
      class: rounded,
      values: (
        null: var(--#{$prefix}border-radius),
        0: 0,
        1: var(--#{$prefix}border-radius-sm),
        2: var(--#{$prefix}border-radius),
        3: var(--#{$prefix}border-radius-lg),
        4: var(--#{$prefix}border-radius-xl),
        5: var(--#{$prefix}border-radius-2xl),
        circle: 50%,
        pill: var(--#{$prefix}border-radius-pill)
      )
    ),
    "rounded-top": (
      property: border-top-left-radius border-top-right-radius,
      class: rounded-top,
      values: (null: var(--#{$prefix}border-radius))
    ),
    "rounded-end": (
      property: border-top-right-radius border-bottom-right-radius,
      class: rounded-end,
      values: (null: var(--#{$prefix}border-radius))
    ),
    "rounded-bottom": (
      property: border-bottom-right-radius border-bottom-left-radius,
      class: rounded-bottom,
      values: (null: var(--#{$prefix}border-radius))
    ),
    "rounded-start": (
      property: border-bottom-left-radius border-top-left-radius,
      class: rounded-start,
      values: (null: var(--#{$prefix}border-radius))
    ),
    </code>
    </pre>
                            </div>
                            <!-- code snippet end -->


                        </div>
                        <!-- right side scrollbar -->
                        <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">
                                    <li class="active"><a href="#Border">Border</a>
                                        <ul>
                                            <li>
                                                <a href="#Additive">Additive</a>
                                            </li>
                                            <li>
                                                <a href="#Subtractive">Subtractive</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#Color">Color</a></li>
                                    <li><a href="#Opacity">Opacity</a>
                                        <ul>
                                            <li>
                                                <a href="#How-it-works">How it works</a>
                                            </li>
                                            <li>
                                                <a href="#Example">Example</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#Width">Width</a>
                                    </li>
                                    <li>
                                        <a href="#Radius">Radius</a>
                                        <ul>
                                            <li>
                                                <a href="#Sizes">Sizes</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#CSS">CSS</a>
                                        <ul>
                                            <li>
                                                <a href="#Variables">Variables</a>
                                            </li>
                                            <li>
                                                <a href="#Sass-variables">Sass variables</a>
                                            </li>
                                            <li>
                                                <a href="#Sass-mixins">Sass mixins</a>
                                            </li>
                                            <li>
                                                <a href="#Utilities-API">Utilities API</a>
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
                            <a class="page-link border-0" href="/utilities/background.php">
                                <span>Previous</span>
                                <strong class="d-block">« Background</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/colors.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Colors »</strong>
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