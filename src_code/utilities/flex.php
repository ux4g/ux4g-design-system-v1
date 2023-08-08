<?php
$title = 'UX4G | Flex';
$canonical = 'https://doc.ux4g.gov.in/utilities/flex.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Flex</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row">

                        <div class="col-lg-9">
                            <h1>Flex</h1>
                            <p>Quickly manage the layout, alignment, and sizing of grid columns, navigation, components,
                                and more with a full suite of responsive flexbox utilities. For more complex
                                implementations, custom CSS may be necessary.</p>
                            <h2 id="enable-flex-behaviors">Enable flex behaviors <a href="" class="opacity-0 hover-1">#</a></h2>
                            <p>Apply <code>display</code> utilities to create a flexbox container and transform
                                <strong>direct children elements</strong> into flex items. Flex containers and items are
                                able to be modified further with additional flex properties.
                            </p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                    onclick="copyToClipboard('copyText1', 'copyButton1')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre
                                    id="copyText1"><code>&lt;div class=&quot;d-flex p-2&quot;&gt;I'm a flexbox container!&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example m-0 border-0 bd-example-flex">
                                    <div class="d-flex p-2">I'm a flexbox container!</div>
                                </div>
                            </div>
                            <!-- code end -->

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton2"
                                    onclick="copyToClipboard('copyText2', 'copyButton2')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre
                                    id="copyText2"><code>&lt;div class=&quot;d-inline-flex p-2&quot;&gt;I'm an inline flexbox container!&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example m-0 border-0 bd-example-flex">
                                    <div class="d-inline-flex p-2">I'm an inline flexbox container!</div>
                                </div>
                            </div>
                            <!-- code end -->

                            <p>Responsive variations also exist for <code>.d-flex</code> and
                                <code>.d-inline-flex</code>.
                            </p>
                            <ul class="un_order_list">
                                <li><code>.d-flex</code></li>
                                <li><code>.d-inline-flex</code></li>
                                <li><code>.d-sm-flex</code></li>
                                <li><code>.d-sm-inline-flex</code></li>
                                <li><code>.d-md-flex</code></li>
                                <li><code>.d-md-inline-flex</code></li>
                                <li><code>.d-lg-flex</code></li>
                                <li><code>.d-lg-inline-flex</code></li>
                                <li><code>.d-xl-flex</code></li>
                                <li><code>.d-xl-inline-flex</code></li>
                                <li><code>.d-xxl-flex</code></li>
                                <li><code>.d-xxl-inline-flex</code></li>
                            </ul>
                            <h2 id="direction">Direction </h2>
                            <p>Set the direction of flex items in a flex container with direction utilities. In most
                                cases you can omit the horizontal class here as the browser default is <code>row</code>.
                                However, you may encounter situations where you needed to explicitly set this value
                                (like responsive layouts).</p>
                            <p>Use <code>.flex-row</code> to set a horizontal direction (the browser default), or
                                <code>.flex-row-reverse</code> to start the horizontal direction from the opposite side.
                            </p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 mb-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton3"
                                    onclick="copyToClipboard('copyText3', 'copyButton3')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText3"><code>&lt;div class=&quot;d-flex flex-row mb-3&quot;&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item 1&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item 2&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item 3&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex flex-row-reverse&quot;&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item 1&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item 2&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item 3&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex flex-row mb-3">
                                        <div class="p-2">Flex item 1</div>
                                        <div class="p-2">Flex item 2</div>
                                        <div class="p-2">Flex item 3</div>
                                    </div>
                                    <div class="d-flex flex-row-reverse">
                                        <div class="p-2">Flex item 1</div>
                                        <div class="p-2">Flex item 2</div>
                                        <div class="p-2">Flex item 3</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->
                            <p>Use <code>.flex-column</code> to set a vertical direction, or
                                <code>.flex-column-reverse</code> to start the vertical direction from the opposite
                                side.
                            </p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton4"
                                    onclick="copyToClipboard('copyText4', 'copyButton4')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText4"><code>&lt;div class=&quot;d-flex flex-column mb-3&quot;&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item 1&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item 2&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item 3&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex flex-column-reverse&quot;&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item 1&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item 2&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item 3&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex flex-column mb-3">
                                        <div class="p-2">Flex item 1</div>
                                        <div class="p-2">Flex item 2</div>
                                        <div class="p-2">Flex item 3</div>
                                    </div>
                                    <div class="d-flex flex-column-reverse">
                                        <div class="p-2">Flex item 1</div>
                                        <div class="p-2">Flex item 2</div>
                                        <div class="p-2">Flex item 3</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->
                            <p>Responsive variations also exist for <code>flex-direction</code>.</p>
                            <ul class="un_order_list">
                                <li><code>.flex-row</code></li>
                                <li><code>.flex-row-reverse</code></li>
                                <li><code>.flex-column</code></li>
                                <li><code>.flex-column-reverse</code></li>
                                <li><code>.flex-sm-row</code></li>
                                <li><code>.flex-sm-row-reverse</code></li>
                                <li><code>.flex-sm-column</code></li>
                                <li><code>.flex-sm-column-reverse</code></li>
                                <li><code>.flex-md-row</code></li>
                                <li><code>.flex-md-row-reverse</code></li>
                                <li><code>.flex-md-column</code></li>
                                <li><code>.flex-md-column-reverse</code></li>
                                <li><code>.flex-lg-row</code></li>
                                <li><code>.flex-lg-row-reverse</code></li>
                                <li><code>.flex-lg-column</code></li>
                                <li><code>.flex-lg-column-reverse</code></li>
                                <li><code>.flex-xl-row</code></li>
                                <li><code>.flex-xl-row-reverse</code></li>
                                <li><code>.flex-xl-column</code></li>
                                <li><code>.flex-xl-column-reverse</code></li>
                                <li><code>.flex-xxl-row</code></li>
                                <li><code>.flex-xxl-row-reverse</code></li>
                                <li><code>.flex-xxl-column</code></li>
                                <li><code>.flex-xxl-column-reverse</code></li>
                            </ul>

                            <h2>Justify content <a href="" id="justify-content" class="opacity-0 hover-1">#</a></h2>
                            <p>Use <code>justify-content</code> utilities on flexbox containers to change the alignment
                                of flex items on the main axis (the x-axis to start, y-axis if
                                <code>flex-direction: column</code>). Choose from <code>start</code> (browser default),
                                <code>end</code>, <code>center</code>, <code>between</code>, <code>around</code>, or
                                <code>evenly</code>.
                            </p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton5"
                                    onclick="copyToClipboard('copyText5', 'copyButton5')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText5"><code>&lt;div class=&quot;d-flex justify-content-start&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;d-flex justify-content-end&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;d-flex justify-content-center&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;d-flex justify-content-between&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;d-flex justify-content-around&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;d-flex justify-content-evenly&quot;&gt;...&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex justify-content-start mb-3">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="d-flex justify-content-end mb-3">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="d-flex justify-content-around mb-3">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="d-flex justify-content-evenly">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>

                            <!-- code end -->

                            <p>Responsive variations also exist for <code>justify-content</code>.</p>
                            <ul class="un_order_list">
                                <li><code>.justify-content-start</code></li>
                                <li><code>.justify-content-end</code></li>
                                <li><code>.justify-content-center</code></li>
                                <li><code>.justify-content-between</code></li>
                                <li><code>.justify-content-around</code></li>
                                <li><code>.justify-content-evenly</code></li>
                                <li><code>.justify-content-sm-start</code></li>
                                <li><code>.justify-content-sm-end</code></li>
                                <li><code>.justify-content-sm-center</code></li>
                                <li><code>.justify-content-sm-between</code></li>
                                <li><code>.justify-content-sm-around</code></li>
                                <li><code>.justify-content-sm-evenly</code></li>
                                <li><code>.justify-content-md-start</code></li>
                                <li><code>.justify-content-md-end</code></li>
                                <li><code>.justify-content-md-center</code></li>
                                <li><code>.justify-content-md-between</code></li>
                                <li><code>.justify-content-md-around</code></li>
                                <li><code>.justify-content-md-evenly</code></li>
                                <li><code>.justify-content-lg-start</code></li>
                                <li><code>.justify-content-lg-end</code></li>
                                <li><code>.justify-content-lg-center</code></li>
                                <li><code>.justify-content-lg-between</code></li>
                                <li><code>.justify-content-lg-around</code></li>
                                <li><code>.justify-content-lg-evenly</code></li>
                                <li><code>.justify-content-xl-start</code></li>
                                <li><code>.justify-content-xl-end</code></li>
                                <li><code>.justify-content-xl-center</code></li>
                                <li><code>.justify-content-xl-between</code></li>
                                <li><code>.justify-content-xl-around</code></li>
                                <li><code>.justify-content-xl-evenly</code></li>
                                <li><code>.justify-content-xxl-start</code></li>
                                <li><code>.justify-content-xxl-end</code></li>
                                <li><code>.justify-content-xxl-center</code></li>
                                <li><code>.justify-content-xxl-between</code></li>
                                <li><code>.justify-content-xxl-around</code></li>
                                <li><code>.justify-content-xxl-evenly</code></li>
                            </ul>

                            <h2>Align items <a href="" id="Align-items" class="opacity-0 hover-1">#</a></h2>
                            <p>Use <code>align-items</code> utilities on flexbox containers to change the alignment of
                                flex items on the cross axis (the y-axis to start, x-axis if
                                <code>flex-direction: column</code>). Choose from <code>start</code>, <code>end</code>,
                                <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).
                            </p>

                            <!-- code snippet -->

                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton6"
                                    onclick="copyToClipboard('copyText6', 'copyButton6')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText6"><code>
&lt;div class=&quot;d-flex align-items-start&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;d-flex align-items-end&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;d-flex align-items-center&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;d-flex align-items-baseline&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;d-flex align-items-stretch&quot;&gt;...&lt;/div&gt;
</code></pre>

                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex align-items-start mb-3" style="height: 100px">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="d-flex align-items-end mb-3" style="height: 100px">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3" style="height: 100px">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="d-flex align-items-baseline mb-3" style="height: 100px">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="d-flex align-items-stretch" style="height: 100px">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->

                            <p>Responsive variations also exist for <code>align-items</code>.</p>
                            <ul class="un_order_list">
                                <li><code>.align-items-start</code></li>
                                <li><code>.align-items-end</code></li>
                                <li><code>.align-items-center</code></li>
                                <li><code>.align-items-baseline</code></li>
                                <li><code>.align-items-stretch</code></li>
                                <li><code>.align-items-sm-start</code></li>
                                <li><code>.align-items-sm-end</code></li>
                                <li><code>.align-items-sm-center</code></li>
                                <li><code>.align-items-sm-baseline</code></li>
                                <li><code>.align-items-sm-stretch</code></li>
                                <li><code>.align-items-md-start</code></li>
                                <li><code>.align-items-md-end</code></li>
                                <li><code>.align-items-md-center</code></li>
                                <li><code>.align-items-md-baseline</code></li>
                                <li><code>.align-items-md-stretch</code></li>
                                <li><code>.align-items-lg-start</code></li>
                                <li><code>.align-items-lg-end</code></li>
                                <li><code>.align-items-lg-center</code></li>
                                <li><code>.align-items-lg-baseline</code></li>
                                <li><code>.align-items-lg-stretch</code></li>
                                <li><code>.align-items-xl-start</code></li>
                                <li><code>.align-items-xl-end</code></li>
                                <li><code>.align-items-xl-center</code></li>
                                <li><code>.align-items-xl-baseline</code></li>
                                <li><code>.align-items-xl-stretch</code></li>
                                <li><code>.align-items-xxl-start</code></li>
                                <li><code>.align-items-xxl-end</code></li>
                                <li><code>.align-items-xxl-center</code></li>
                                <li><code>.align-items-xxl-baseline</code></li>
                                <li><code>.align-items-xxl-stretch</code></li>
                            </ul>

                            <h2>Align self <a href="" id="Align-self" class="opacity-0 hover-1">#</a></h2>
                            <p>Use <code>align-self</code> utilities on flexbox items to individually change their
                                alignment on the cross axis (the y-axis to start, x-axis if
                                <code>flex-direction: column</code>). Choose from the same options as
                                <code>align-items</code>: <code>start</code>, <code>end</code>, <code>center</code>,
                                <code>baseline</code>, or <code>stretch</code> (browser default).
                            </p>


                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton7"
                                    onclick="copyToClipboard('copyText7', 'copyButton7')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre class="copyText7">
<code>&lt;div class=&quot;align-self-start&quot;&gt;Aligned flex item&lt;/div&gt;
&lt;div class=&quot;align-self-end&quot;&gt;Aligned flex item&lt;/div&gt;
&lt;div class=&quot;align-self-center&quot;&gt;Aligned flex item&lt;/div&gt;
&lt;div class=&quot;align-self-baseline&quot;&gt;Aligned flex item&lt;/div&gt;
&lt;div class=&quot;align-self-stretch&quot;&gt;Aligned flex item&lt;/div&gt;</code>
    </pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex mb-3" style="height: 100px">
                                        <div class="p-2">Flex item</div>
                                        <div class="align-self-start p-2">Aligned flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="d-flex mb-3" style="height: 100px">
                                        <div class="p-2">Flex item</div>
                                        <div class="align-self-end p-2">Aligned flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="d-flex mb-3" style="height: 100px">
                                        <div class="p-2">Flex item</div>
                                        <div class="align-self-center p-2">Aligned flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="d-flex mb-3" style="height: 100px">
                                        <div class="p-2">Flex item</div>
                                        <div class="align-self-baseline p-2">Aligned flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                    <div class="d-flex" style="height: 100px">
                                        <div class="p-2">Flex item</div>
                                        <div class="align-self-stretch p-2">Aligned flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->

                            <p>Responsive variations also exist for <code>align-self</code>.</p>
                            <ul class="un_order_list">
                                <li><code>.align-self-start</code></li>
                                <li><code>.align-self-end</code></li>
                                <li><code>.align-self-center</code></li>
                                <li><code>.align-self-baseline</code></li>
                                <li><code>.align-self-stretch</code></li>
                                <li><code>.align-self-sm-start</code></li>
                                <li><code>.align-self-sm-end</code></li>
                                <li><code>.align-self-sm-center</code></li>
                                <li><code>.align-self-sm-baseline</code></li>
                                <li><code>.align-self-sm-stretch</code></li>
                                <li><code>.align-self-md-start</code></li>
                                <li><code>.align-self-md-end</code></li>
                                <li><code>.align-self-md-center</code></li>
                                <li><code>.align-self-md-baseline</code></li>
                                <li><code>.align-self-md-stretch</code></li>
                                <li><code>.align-self-lg-start</code></li>
                                <li><code>.align-self-lg-end</code></li>
                                <li><code>.align-self-lg-center</code></li>
                                <li><code>.align-self-lg-baseline</code></li>
                                <li><code>.align-self-lg-stretch</code></li>
                                <li><code>.align-self-xl-start</code></li>
                                <li><code>.align-self-xl-end</code></li>
                                <li><code>.align-self-xl-center</code></li>
                                <li><code>.align-self-xl-baseline</code></li>
                                <li><code>.align-self-xl-stretch</code></li>
                                <li><code>.align-self-xxl-start</code></li>
                                <li><code>.align-self-xxl-end</code></li>
                                <li><code>.align-self-xxl-center</code></li>
                                <li><code>.align-self-xxl-baseline</code></li>
                                <li><code>.align-self-xxl-stretch</code></li>
                            </ul>

                            <h2>Fill <a href="" id="Fill" class="opacity-0 hover-1">#</a></h2>
                            <p>Use the <code>.flex-fill</code> class on a series of sibling elements to force them into
                                widths equal to their content (or equal widths if their content does not surpass their
                                border-boxes) while taking up all available horizontal space.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton8"
                                    onclick="copyToClipboard('copyText8', 'copyButton8')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText8"><code>&lt;div class=&quot;d-flex&quot;&gt;
  &lt;div class=&quot;p-2 flex-fill&quot;&gt;Flex item with a lot of content&lt;/div&gt;
  &lt;div class=&quot;p-2 flex-fill&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 flex-fill&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>

                            <!-- code -->
                            <div class="code_bg round p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">Flex item with a lot of content</div>
                                        <div class="p-2 flex-fill">Flex item</div>
                                        <div class="p-2 flex-fill">Flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code -->
                            <p>Responsive variations also exist for <code>flex-fill</code>.</p>
                            <ul class="un_order_list">
                                <li><code>.flex-fill</code></li>
                                <li><code>.flex-sm-fill</code></li>
                                <li><code>.flex-md-fill</code></li>
                                <li><code>.flex-lg-fill</code></li>
                                <li><code>.flex-xl-fill</code></li>
                                <li><code>.flex-xxl-fill</code></li>
                            </ul>

                            <h2>Grow and shrink <a href="" id="Grow-and-shrink" class="opacity-0 hover-1">#</a></h2>
                            <p>Use <code>.flex-grow-*</code> utilities to toggle a flex item’s ability to grow to fill
                                available space. In the example below, the <code>.flex-grow-1</code> elements uses all
                                available space it can, while allowing the remaining two flex items their necessary
                                space.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton9"
                                    onclick="copyToClipboard('copyText9', 'copyButton9')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre class="copyText9"><code>&lt;div class=&quot;d-flex&quot;&gt;
  &lt;div class=&quot;p-2 flex-grow-1&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Third flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex">
                                        <div class="p-2 flex-grow-1">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Third flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code snippet end -->
                            <p>Use <code>.flex-shrink-*</code> utilities to toggle a flex item’s ability to shrink if
                                necessary. In the example below, the second flex item with <code>.flex-shrink-1</code>
                                is forced to wrap its contents to a new line, “shrinking” to allow more space for the
                                previous flex item with <code>.w-100</code>.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton10"
                                    onclick="copyToClipboard('copyText10', 'copyButton10')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText10"><code>&lt;div class=&quot;d-flex&quot;&gt;
  &lt;div class=&quot;p-2 w-100&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 flex-shrink-1&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex">
                                        <div class="p-2 w-100">Flex item</div>
                                        <div class="p-2 flex-shrink-1">Flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->
                            <p>Responsive variations also exist for <code>flex-grow</code> and <code>flex-shrink</code>.
                            </p>
                            <ul class="un_order_list">
                                <li><code>.flex-{grow|shrink}-0</code></li>
                                <li><code>.flex-{grow|shrink}-1</code></li>
                                <li><code>.flex-sm-{grow|shrink}-0</code></li>
                                <li><code>.flex-sm-{grow|shrink}-1</code></li>
                                <li><code>.flex-md-{grow|shrink}-0</code></li>
                                <li><code>.flex-md-{grow|shrink}-1</code></li>
                                <li><code>.flex-lg-{grow|shrink}-0</code></li>
                                <li><code>.flex-lg-{grow|shrink}-1</code></li>
                                <li><code>.flex-xl-{grow|shrink}-0</code></li>
                                <li><code>.flex-xl-{grow|shrink}-1</code></li>
                                <li><code>.flex-xxl-{grow|shrink}-0</code></li>
                                <li><code>.flex-xxl-{grow|shrink}-1</code></li>
                            </ul>

                            <h2>Auto margins <a href="" id="auto-margins" class="opacity-0 hover-1">#</a></h2>
                            <p>Flexbox can do some pretty awesome things when you mix flex alignments with auto margins.
                                Shown below are three examples of controlling flex items via auto margins: default (no
                                auto margin), pushing two items to the right (<code>.me-auto</code>), and pushing two
                                items to the left (<code>.ms-auto</code>).</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton11"
                                    onclick="copyToClipboard('copyText11', 'copyButton11')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText11"><code>&lt;div class=&quot;d-flex mb-3&quot;&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;d-flex mb-3&quot;&gt;
  &lt;div class=&quot;me-auto p-2&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;d-flex mb-3&quot;&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;ms-auto p-2&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex mb-3">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="me-auto p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="ms-auto p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->

                            <h2>With align-items <a href="" id="With-align-items" class="opacity-0 hover-1">#</a></h2>
                            <p>Vertically move one flex item to the top or bottom of a container by mixing
                                <code>align-items</code>, <code>flex-direction: column</code>, and
                                <code>margin-top: auto</code> or <code>margin-bottom: auto</code>.
                            </p>

                            <!-- code snipper -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton12"
                                    onclick="copyToClipboard('copyText12', 'copyButton12')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText12"><code>&lt;div class=&quot;d-flex align-items-start flex-column mb-3&quot; style=&quot;height: 200px;&quot;&gt;
  &lt;div class=&quot;mb-auto p-2&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;d-flex align-items-end flex-column mb-3&quot; style=&quot;height: 200px;&quot;&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;mt-auto p-2&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snipper end -->

                            <h5 class="result m-0">RESULT</h5>

                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex align-items-start flex-column mb-3" style="height: 200px;">
                                        <div class="mb-auto p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>

                                    <div class="d-flex align-items-end flex-column mb-3" style="height: 200px;">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="mt-auto p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>


                            <h2>Wrap <a href="" id="Wrap" class="opacity-0 hover-1">#</a></h2>
                            <p>Change how flex items wrap in a flex container. Choose from no wrapping at all (the
                                browser default) with <code>.flex-nowrap</code>, wrapping with <code>.flex-wrap</code>,
                                or reverse wrapping with <code>.flex-wrap-reverse</code>.</p>
                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton13"
                                    onclick="copyToClipboard('copyText13', 'copyButton13')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText13"><code>&lt;div class=&quot;d-flex flex-nowrap&quot;&gt;
  ...
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>

                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex flex-nowrap" style="width: 8rem;">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end-->

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton14"
                                    onclick="copyToClipboard('copyText14', 'copyButton14')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText14"><code>&lt;div class=&quot;d-flex flex-wrap&quot;&gt;
  ...
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex flex-wrap">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end-->

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton15"
                                    onclick="copyToClipboard('copyText15', 'copyButton15')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText15"><code>&lt;div class=&quot;d-flex flex-wrap-reverse&quot;&gt;
  ...
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>

                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex flex-wrap-reverse">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end-->
                            <p>Responsive variations also exist for <code>flex-wrap</code>.</p>

                            <ul class="un_order_list">
                                <li><code>.flex-nowrap</code></li>
                                <li><code>.flex-wrap</code></li>
                                <li><code>.flex-wrap-reverse</code></li>
                                <li><code>.flex-sm-nowrap</code></li>
                                <li><code>.flex-sm-wrap</code></li>
                                <li><code>.flex-sm-wrap-reverse</code></li>
                                <li><code>.flex-md-nowrap</code></li>
                                <li><code>.flex-md-wrap</code></li>
                                <li><code>.flex-md-wrap-reverse</code></li>
                                <li><code>.flex-lg-nowrap</code></li>
                                <li><code>.flex-lg-wrap</code></li>
                                <li><code>.flex-lg-wrap-reverse</code></li>
                                <li><code>.flex-xl-nowrap</code></li>
                                <li><code>.flex-xl-wrap</code></li>
                                <li><code>.flex-xl-wrap-reverse</code></li>
                                <li><code>.flex-xxl-nowrap</code></li>
                                <li><code>.flex-xxl-wrap</code></li>
                                <li><code>.flex-xxl-wrap-reverse</code></li>
                            </ul>

                            <h2>Order <a href="" id="Order" class="opacity-0 hover-1">#</a></h2>
                            <p>Change the <em>visual</em> order of specific flex items with a handful of
                                <code>order</code> utilities. We only provide options for making an item first or last,
                                as well as a reset to use the DOM order. As <code>order</code> takes any integer value
                                from 0 to 5, add custom CSS for any additional values needed.
                            </p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton16"
                                    onclick="copyToClipboard('copyText16', 'copyButton16')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText16"><code>&lt;div class=&quot;d-flex flex-nowrap&quot;&gt;
&lt;div class=&quot;order-3 p-2&quot;&gt;First flex item&lt;/div&gt;
&lt;div class=&quot;order-2 p-2&quot;&gt;Second flex item&lt;/div&gt;
&lt;div class=&quot;order-1 p-2&quot;&gt;Third flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code  -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex flex-nowrap">
                                        <div class="order-3 p-2">First flex item</div>
                                        <div class="order-2 p-2">Second flex item</div>
                                        <div class="order-1 p-2">Third flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->
                            <p>Responsive variations also exist for <code>order</code>.</p>
                            <ul class="un_order_list">
                                <li><code>.order-0</code></li>
                                <li><code>.order-1</code></li>
                                <li><code>.order-2</code></li>
                                <li><code>.order-3</code></li>
                                <li><code>.order-4</code></li>
                                <li><code>.order-5</code></li>
                                <li><code>.order-sm-0</code></li>
                                <li><code>.order-sm-1</code></li>
                                <li><code>.order-sm-2</code></li>
                                <li><code>.order-sm-3</code></li>
                                <li><code>.order-sm-4</code></li>
                                <li><code>.order-sm-5</code></li>
                                <li><code>.order-md-0</code></li>
                                <li><code>.order-md-1</code></li>
                                <li><code>.order-md-2</code></li>
                                <li><code>.order-md-3</code></li>
                                <li><code>.order-md-4</code></li>
                                <li><code>.order-md-5</code></li>
                                <li><code>.order-lg-0</code></li>
                                <li><code>.order-lg-1</code></li>
                                <li><code>.order-lg-2</code></li>
                                <li><code>.order-lg-3</code></li>
                                <li><code>.order-lg-4</code></li>
                                <li><code>.order-lg-5</code></li>
                                <li><code>.order-xl-0</code></li>
                                <li><code>.order-xl-1</code></li>
                                <li><code>.order-xl-2</code></li>
                                <li><code>.order-xl-3</code></li>
                                <li><code>.order-xl-4</code></li>
                                <li><code>.order-xl-5</code></li>
                                <li><code>.order-xxl-0</code></li>
                                <li><code>.order-xxl-1</code></li>
                                <li><code>.order-xxl-2</code></li>
                                <li><code>.order-xxl-3</code></li>
                                <li><code>.order-xxl-4</code></li>
                                <li><code>.order-xxl-5</code></li>
                            </ul>

                            <p>Additionally there are also responsive <code>.order-first</code> and
                                <code>.order-last</code> classes that change the <code>order</code> of an element by
                                applying <code>order: -1</code> and <code>order: 6</code>, respectively.
                            </p>

                            <ul class="un_order_list mt-20">
                                <li><code>.order-first</code></li>
                                <li><code>.order-last</code></li>
                                <li><code>.order-sm-first</code></li>
                                <li><code>.order-sm-last</code></li>
                                <li><code>.order-md-first</code></li>
                                <li><code>.order-md-last</code></li>
                                <li><code>.order-lg-first</code></li>
                                <li><code>.order-lg-last</code></li>
                                <li><code>.order-xl-first</code></li>
                                <li><code>.order-xl-last</code></li>
                                <li><code>.order-xxl-first</code></li>
                                <li><code>.order-xxl-last</code></li>
                            </ul>

                            <h2>Align content <a href="" id="Align-content" class="opacity-0 hover-1">#</a></h2>
                            <p>Use <code>align-content</code> utilities on flexbox containers to align flex items
                                <em>together</em> on the cross axis. Choose from <code>start</code> (browser default),
                                <code>end</code>, <code>center</code>, <code>between</code>, <code>around</code>, or
                                <code>stretch</code>. To demonstrate these utilities, we’ve enforced
                                <code>flex-wrap: wrap</code> and increased the number of flex items.
                            </p>
                            <p><strong>Heads up!</strong> This property has no effect on single rows of flex items.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton17"
                                    onclick="copyToClipboard('copyText17', 'copyButton17')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText17"><code>&lt;div class=&quot;d-flex align-content-start flex-wrap&quot;&gt;
  ...
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex align-content-start flex-wrap mb-3" style="height: 200px">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton18"
                                    onclick="copyToClipboard('copyText18', 'copyButton18')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre
                                    id="copyText18"><code>&lt;div class=&quot;d-flex align-content-end flex-wrap&quot;&gt;...&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex align-content-end flex-wrap mb-3" style="height: 200px">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 mt-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton19"
                                    onclick="copyToClipboard('copyText19', 'copyButton19')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre
                                    id="copyText19"><code>&lt;div class=&quot;d-flex align-content-center flex-wrap&quot;&gt;...&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex align-content-center flex-wrap mb-3" style="height: 200px">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 mt-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton20"
                                    onclick="copyToClipboard('copyText20', 'copyButton20')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre
                                    id="copyText20"><code>&lt;div class=&quot;d-flex align-content-between flex-wrap&quot;&gt;...&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex align-content-between flex-wrap mb-3" style="height: 200px">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 mt-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton21"
                                    onclick="copyToClipboard('copyText21', 'copyButton21')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre
                                    id="copyText21"><code>&lt;div class=&quot;d-flex align-content-around flex-wrap&quot;&gt;...&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex align-content-around flex-wrap mb-3" style="height: 200px">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 mt-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton22"
                                    onclick="copyToClipboard('copyText22', 'copyButton22')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre
                                    id="copyText22"><code>&lt;div class=&quot;d-flex align-content-stretch flex-wrap&quot;&gt;...&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-flex">
                                    <div class="d-flex align-content-stretch flex-wrap mb-3" style="height: 200px">
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                        <div class="p-2">Flex item</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->
                            <p>Responsive variations also exist for <code>align-content</code>.</p>
                            <ul class="un_order_list mb-20">
                                <li><code>.align-content-start</code></li>
                                <li><code>.align-content-end</code></li>
                                <li><code>.align-content-center</code></li>
                                <li><code>.align-content-between</code></li>
                                <li><code>.align-content-around</code></li>
                                <li><code>.align-content-stretch</code></li>
                                <li><code>.align-content-sm-start</code></li>
                                <li><code>.align-content-sm-end</code></li>
                                <li><code>.align-content-sm-center</code></li>
                                <li><code>.align-content-sm-between</code></li>
                                <li><code>.align-content-sm-around</code></li>
                                <li><code>.align-content-sm-stretch</code></li>
                                <li><code>.align-content-md-start</code></li>
                                <li><code>.align-content-md-end</code></li>
                                <li><code>.align-content-md-center</code></li>
                                <li><code>.align-content-md-between</code></li>
                                <li><code>.align-content-md-around</code></li>
                                <li><code>.align-content-md-stretch</code></li>
                                <li><code>.align-content-lg-start</code></li>
                                <li><code>.align-content-lg-end</code></li>
                                <li><code>.align-content-lg-center</code></li>
                                <li><code>.align-content-lg-between</code></li>
                                <li><code>.align-content-lg-around</code></li>
                                <li><code>.align-content-lg-stretch</code></li>
                                <li><code>.align-content-xl-start</code></li>
                                <li><code>.align-content-xl-end</code></li>
                                <li><code>.align-content-xl-center</code></li>
                                <li><code>.align-content-xl-between</code></li>
                                <li><code>.align-content-xl-around</code></li>
                                <li><code>.align-content-xl-stretch</code></li>
                                <li><code>.align-content-xxl-start</code></li>
                                <li><code>.align-content-xxl-end</code></li>
                                <li><code>.align-content-xxl-center</code></li>
                                <li><code>.align-content-xxl-between</code></li>
                                <li><code>.align-content-xxl-around</code></li>
                                <li><code>.align-content-xxl-stretch</code></li>
                            </ul>

                            <h2>Media object <a href="" id="Media-object" class="opacity-0 hover-1">#</a></h2>


                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton23"
                                    onclick="copyToClipboard('copyText23', 'copyButton23')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText23"><code>&lt;div class=&quot;d-flex&quot;&gt;
  &lt;div class=&quot;flex-shrink-0&quot;&gt;
    &lt;img src=&quot;...&quot; alt=&quot;...&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-grow-1 ms-3&quot;&gt;
    This is some content from a media component. You can replace this with any content and adjust it as needed.
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example m-0 border-0">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <svg class="bd-placeholder-img" width="100" height="100"
                                                xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice"
                                                focusable="false">
                                                <title>Placeholder</title>
                                                <rect width="100%" height="100%" fill="#e5e5e5"></rect><text x="50%"
                                                    y="50%" fill="#999" dy=".3em">Image</text>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            This is some content from a media component. You can replace this with any
                                            content and adjust it as needed.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- code  end -->

                            <p>And say you want to vertically center the content next to the image:</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton24"
                                    onclick="copyToClipboard('copyText24', 'copyButton24')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText24"><code>&lt;div class=&quot;d-flex align-items-center&quot;&gt;
  &lt;div class=&quot;flex-shrink-0&quot;&gt;
    &lt;img src=&quot;...&quot; alt=&quot;...&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-grow-1 ms-3&quot;&gt;
    This is some content from a media component. You can replace this with any content and adjust it as needed.
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example m-0 border-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="bd-placeholder-img" width="100" height="100"
                                                xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice"
                                                focusable="false">
                                                <title>Placeholder</title>
                                                <rect width="100%" height="100%" fill="#e5e5e5"></rect><text x="50%"
                                                    y="50%" fill="#999" dy=".3em">Image</text>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            This is some content from a media component. You can replace this with any
                                            content and adjust it as needed.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- code  end -->

                            <h2 class="mb-20">CSS <a href="" id="css" class="opacity-0 hover-1">#</a></h2>
                            <h3>Sass Utilities API <a href="" id="sass Utilities API" class="opacity-0 hover-1">#</a></h3>
                            <p>Flexbox utilities are declared in our utilities API in <code>scss/_utilities.scss</code>.
                                <a href="/utilities/api.php/#Using-the-API">Learn how to use the utilities API.</a>
                            </p>

                            <!-- code -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton25"
                                    onclick="copyToClipboard('copyText25', 'copyButton25')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText25"><code>&quot;flex&quot;: (
      responsive: true,
      property: flex,
      values: (fill: 1 1 auto)
    ),
    &quot;flex-direction&quot;: (
      responsive: true,
      property: flex-direction,
      class: flex,
      values: row column row-reverse column-reverse
    ),
    &quot;flex-grow&quot;: (
      responsive: true,
      property: flex-grow,
      class: flex,
      values: (
        grow-0: 0,
        grow-1: 1,
      )
    ),
    &quot;flex-shrink&quot;: (
      responsive: true,
      property: flex-shrink,
      class: flex,
      values: (
        shrink-0: 0,
        shrink-1: 1,
      )
    ),
    &quot;flex-wrap&quot;: (
      responsive: true,
      property: flex-wrap,
      class: flex,
      values: wrap nowrap wrap-reverse
    ),
    &quot;justify-content&quot;: (
      responsive: true,
      property: justify-content,
      values: (
        start: flex-start,
        end: flex-end,
        center: center,
        between: space-between,
        around: space-around,
        evenly: space-evenly,
      )
    ),
    &quot;align-items&quot;: (
      responsive: true,
      property: align-items,
      values: (
        start: flex-start,
        end: flex-end,
        center: center,
        baseline: baseline,
        stretch: stretch,
      )
    ),
    &quot;align-content&quot;: (
      responsive: true,
      property: align-content,
      values: (
        start: flex-start,
        end: flex-end,
        center: center,
        between: space-between,
        around: space-around,
        stretch: stretch,
      )
    ),
    &quot;align-self&quot;: (
      responsive: true,
      property: align-self,
      values: (
        auto: auto,
        start: flex-start,
        end: flex-end,
        center: center,
        baseline: baseline,
        stretch: stretch,
      )
    ),
    &quot;order&quot;: (
      responsive: true,
      property: order,
      values: (
        first: -1,
        0: 0,
        1: 1,
        2: 2,
        3: 3,
        4: 4,
        5: 5,
        last: 6,
      ),
    ),
    </code></pre>
                            </div>
                            <!-- code end -->

                        </div>

                        <!-- right side scrollbar -->
                        <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">

                                    <li><a href="#enable-flex-behaviors">Enable flex behaviors</a></li>
                                    <li><a href="#direction">Direction</a></li>
                                    <li><a href="#justify-content">Justify content</a></li>
                                    <li><a href="#Align-items">Align items</a></li>
                                    <li><a href="#Fill">Fill</a></li>
                                    <li><a href="#Grow-and-shrink">Grow and shrink</a></li>
                                    <li>
                                        <a href="#auto-margins">Auto margins</a>
                                        <ul>
                                            <li>
                                                <a href="#With-align-items">With align-items</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li><a href="#Wrap">Wrap</a></li>
                                    <li><a href="#Order">Order</a></li>
                                    <li><a href="#Align-content">Align content</a></li>
                                    <li><a href="#Media-object">Media object</a></li>
                                    <li><a href="#css">CSS</a>
                                        <ul>
                                            <li>
                                                <a href="#sass Utilities API">Sass Utilities API</a>
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
                            <a class="page-link border-0" href="/utilities/display.php">
                                <span>Previous</span>
                                <strong class="d-block">« Display</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/float.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Float »</strong>
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