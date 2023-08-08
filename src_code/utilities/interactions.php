<?php
$title = 'UX4G | Interactions';
$canonical = 'https://doc.ux4g.gov.in/utilities/interactions.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Interactions</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row">

                        <div class="col-lg-9">
                            <h1>Interactions</h1>
                            <p>Utility classes that change how users interact with contents of a website.</p>
                            <h2>Text selection <a href="" id="Text-selection" class="opacity-0 hover-1">#</a></h2>
                            <p>Change the way in which the content is selected when the user interacts with it.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                    onclick="copyToClipboard('copyText1', 'copyButton1')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre
                                    id="copyText1"><code>&lt;p class=&quot;user-select-all&quot;&gt;This paragraph will be entirely selected when clicked by the user.&lt;/p&gt;
&lt;p class=&quot;user-select-auto&quot;&gt;This paragraph has default select behavior.&lt;/p&gt;
&lt;p class=&quot;user-select-none&quot;&gt;This paragraph will not be selectable when clicked by the user.&lt;/p&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>

                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example">
                                    <p class="user-select-all">This paragraph will be entirely selected when clicked by
                                        the user.</p>
                                    <p class="user-select-auto">This paragraph has default select behavior.</p>
                                    <p class="user-select-none">This paragraph will not be selectable when clicked by
                                        the user.</p>
                                </div>
                            </div>
                            <!-- code end -->

                            <h2>Pointer events <a href="" id="Pointer-events" class="opacity-0 hover-1">#</a></h2>
                            <p>Bootstrap provides <code>.pe-none</code> and <code>.pe-auto</code> classes to prevent or
                                add element interactions.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton2"
                                    onclick="copyToClipboard('copyText2', 'copyButton2')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre
                                    id="copyText2"><code>&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;pe-none&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;This link&lt;/a&gt; can not be clicked.&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;pe-auto&quot;&gt;This link&lt;/a&gt; can be clicked (this is default behavior).&lt;/p&gt;
&lt;p class=&quot;pe-none&quot;&gt;&lt;a href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;This link&lt;/a&gt; can not be clicked because the &lt;code&gt;pointer-events&lt;/code&gt; property is inherited from its parent. However, &lt;a href=&quot;#&quot; class=&quot;pe-auto&quot;&gt;this link&lt;/a&gt; has a &lt;code&gt;pe-auto&lt;/code&gt; class and can be clicked.&lt;/p&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h5 class="result m-0">RESULT</h5>

                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example m-0 border-0">
                                    <p><a href="#" class="pe-none" tabindex="-1" aria-disabled="true">This link</a> can
                                        not be clicked.</p>
                                    <p><a href="#" class="pe-auto">This link</a> can be clicked (this is default
                                        behavior).</p>
                                    <p class="pe-none"><a href="#" tabindex="-1" aria-disabled="true">This link</a> can
                                        not be clicked because the <code>pointer-events</code> property is inherited
                                        from its parent. </p>
                                        <p>However, <a href="#" class="pe-auto">this link</a> has a
                                        <code>pe-auto</code> class and can be clicked.</p>
                                </div>
                            </div>
                            <!-- code end -->
                            <p>The <code>.pe-none</code> class (and the <code>pointer-events</code> CSS property it
                                sets) only prevents interactions with a pointer (mouse, stylus, touch). Links and
                                controls with <code>.pe-none</code> are, by default, still focusable and actionable for
                                keyboard users. To ensure that they are completely neutralized even for keyboard users,
                                you may need to add further attributes such as <code>tabindex="-1"</code> (to prevent
                                them from receiving keyboard focus) and <code>aria-disabled="true"</code> (to convey the
                                fact they are effectively disabled to assistive technologies), and possibly use
                                JavaScript to completely prevent them from being actionable.</p>
                            <p>If possible, the simpler solution is:</p>

                            <ul class="un_order_list">
                                <li>For form controls, add the <code>disabled</code> HTML attribute.</li>
                                <li>For links, remove the <code>href</code> attribute, making it a non-interactive
                                    anchor or placeholder link.</li>
                            </ul>

                            <h2 class="mb-20">Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
                            <h2>Utilities API <a href="" id="Utilities-API" class="opacity-0 hover-1">#</a></h2>
                            <p>Interaction utilities are declared in our utilities API in
                                <code>scss/_utilities.scss</code>. <a href="/utilities/api.php/#Using-the-API">Learn how
                                    to use the utilities API.</a>
                            </p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton3"
                                    onclick="copyToClipboard('copyText3', 'copyButton3')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre class="copyText3"><code>&quot;user-select&quot;: (
      property: user-select,
      values: all auto none
    ),
    &quot;pointer-events&quot;: (
      property: pointer-events,
      class: pe,
      values: none auto,
    ),
    </code></pre>
                            </div>
                            <!-- code snippet end -->

                        </div>

                        <!-- right side scrollbar -->
                        <!-- <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">
                                    <li class="active"><a href="#Text-selection">Text selection</a></li>
                                    <li><a href="#Pointer-events">Pointer events</a></li>                                    
                                    <li>
                                        <a href="#Sass">Sass</a>
                                        <ul>
                                            <li>
                                                <a href="" id="Utilities-API">Utilities API</a>
                                            </li>
                                        </ul>
                                    </li>                                    
                                    
                                </ul>
                            </div>
                        </div>
</div> -->
                        <!-- end flat -->

                        <!-- pagination -->
                        <div class="col-12 col-sm-9 mt-30">
                            <ul class="pagination pagination_custom justify-content-between">
                                <a class="page-link border-0" href="/utilities/float.php">
                                    <span>Previous</span>
                                    <strong class="d-block">« Float</strong>
                                </a>
                                <a class="page-link border-0 float-end" href="/utilities/opacity.php">
                                    <span class="text-end">Next</span>
                                    <strong class="d-block">Opacity »</strong>
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