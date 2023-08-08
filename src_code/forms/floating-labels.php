<?php
$title = 'UX4G | Floating labels';
$canonical = 'https://doc.ux4g.gov.in/forms/floating-labels.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Floating Labels</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <h1 class="mb-30"> Floating Labels</h1>
                    <p>Create beautifully simple form labels that float over your input fields.</p>
                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                        <div class="row">

                            <div class="col-sm-9">
                                <div class="body_content">


                                    <h2>Example <a href="" id="Example" class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    To allow floating labels with UX4G's textual form fields, wrap a pair of <code>input class=&quot;form-control&quot;&gt;</code> and label> components in <code>.form-floating</code>. Each <code>&lt;input&gt;</code> must have a placeholder because our technique for CSS-only floating labels employs the:placeholder-shown pseudo-element. Also keep in mind that the <code>&lt;input&gt;</code> must come first so that we can use a sibling selector, like.
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton1"
                                            onclick="copyToClipboard('copyText1', 'copyButton1')">
                                            <i class="fa fa-copy" id="iconCopied1"></i>
                                        </button>
                                        <div id="copyText1">
                                            
                                            <pre><code>&lt;div class=&quot;form-floating mb-3&quot;&gt;
  &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;floatingInput&quot; placeholder=&quot;name@example.com&quot;/&gt;
  &lt;label for=&quot;floatingInput&quot;&gt;Email address&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-floating&quot;&gt;
  &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;floatingPassword&quot; placeholder=&quot;Password&quot;/&gt;
  &lt;label for=&quot;floatingPassword&quot;&gt;Password&lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <!-- result -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="form-floating mb-3"><input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"><label for="floatingInput">Email address</label></div><div class="form-floating"><input type="password" class="form-control" id="floatingPassword" placeholder="Password"><label for="floatingPassword">Password</label></div>
                                    </div>
                                    <!-- result end -->
                                    <p class="mt-20">When there's a <code>value</code> already defined,
                                        <code>&lt;label&gt;</code>s will automatically adjust to their floated position.
                                    </p>
                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton2"
                                            onclick="copyToClipboard('copyText2', 'copyButton2')">
                                            <i class="fa fa-copy" id="iconCopied2"></i>
                                        </button>
                                        <div id="copyText2">
                                            
                                            <pre><code>&lt;form class=&quot;form-floating&quot;&gt;
  &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;floatingInputValue&quot; placeholder=&quot;name@example.com&quot; value=&quot;test@example.com&quot;/&gt;
  &lt;label for=&quot;floatingInputValue&quot;&gt;Input with value&lt;/label&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <form class="form-floating"><input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com"><label for="floatingInputValue">Input with value</label></form>
                                    </div>
                                    <p class="mt-20 mb-20">Form validation styles also work as expected.</p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton3"
                                            onclick="copyToClipboard('copyText3', 'copyButton3')">
                                            <i class="fa fa-copy" id="iconCopied3"></i>
                                        </button>

                                        <div id="copyText3">
                                            
                                            <pre><code>&lt;form class=&quot;form-floating&quot;&gt;
  &lt;input type=&quot;email&quot; class=&quot;form-control is-invalid&quot; id=&quot;floatingInputInvalid&quot; placeholder=&quot;name@example.com&quot; value=&quot;test@example.com&quot;/&gt;
  &lt;label for=&quot;floatingInputInvalid&quot;&gt;Invalid input&lt;/label&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <form class="form-floating"><input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com"><label for="floatingInputInvalid">Invalid input</label></form>
                                    </div>

                                    <h2 class="mt-20">Textareas <a href="" id="Textareas"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>By default, <code >&lt;textarea&gt;</code>s with <code
                                            >.form-control</code> will be the same height as <code
                                            >&lt;input&gt;</code>s.</p>

                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton4"
                                            onclick="copyToClipboard('copyText4', 'copyButton4')">
                                            <i class="fa fa-copy" id="iconCopied4"></i>
                                        </button>
                                        <div id="copyText4">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">form-floating</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">textarea</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">form-control</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">placeholder</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Leave a comment here</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">floatingTextarea</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">textarea</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">label</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">for</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">floatingTextarea</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Comments</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">label</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>


                                    <h5 class="result">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div>
                                            <div>
                                                <div class="form-floating"><textarea class="form-control"
                                                        placeholder="Leave a comment here"
                                                        id="floatingTextarea"></textarea><label
                                                        for="floatingTextarea">Comments</label></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>To set a custom height on your <code >&lt;textarea&gt;</code>, do
                                        not use the <code >rows</code> attribute. Instead, set an
                                        explicit <code >height</code> (either inline or via custom CSS).
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton5"
                                            onclick="copyToClipboard('copyText5', 'copyButton5')">
                                            <i class="fa fa-copy" id="iconCopied5"></i>
                                        </button>
                                        <div id="copyText5">
                                            <pre
                                                aria-hidden="true"><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">form-floating</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">textarea</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">form-control</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">placeholder</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">Leave a comment here</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">floatingTextarea2</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">style</span><span class="token tag script language-javascript script-punctuation punctuation" style="color: rgb(57, 58, 52);">=</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript literal-property property" style="color: rgb(54, 172, 170);">height</span><span class="token tag script language-javascript operator" style="color: rgb(57, 58, 52);">:</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript number" style="color: rgb(54, 172, 170);">100</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript operator" style="color: rgb(57, 58, 52);">+</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript string" style="color: rgb(227, 17, 108);">'px'</span><span class="token tag script language-javascript" style="color: rgb(0, 0, 159);"> </span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token tag script language-javascript punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">textarea</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">label</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">for</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">floatingTextarea2</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Comments</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">label</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div>
                                            <div>
                                                <div class="form-floating"><textarea class="form-control"
                                                        placeholder="Leave a comment here" id="floatingTextarea2"
                                                        style="height: 100px;"></textarea><label
                                                        for="floatingTextarea2">Comments</label></div>
                                            </div>
                                        </div>
                                    </div>

                                    <h2 class="mt-20">Selects <a href="" id="Selects" class="opacity-0 hover-1">#</a>
                                    </h2>
                                    <p>
                                        The only other form type besides <code>.form-control</code> that supports floating labels is <code>.form-selects</code>. The same principles apply to them, except unlike <code>inputs</code>, they always display the label in its floated position. Multiple and <code>size-based</code> selects are not supported.
                                    </p>


                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton6"
                                            onclick="copyToClipboard('copyText6', 'copyButton6')">
                                            <i class="fa fa-copy" id="iconCopied6"></i>
                                        </button>
                                        <div id="copyText6">
                                            
                                            <pre><code>&lt;div class=&quot;form-floating&quot;&gt;
  &lt;select class=&quot;form-select&quot; id=&quot;floatingSelect&quot; aria-label=&quot;Floating label select example&quot;&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
  &lt;/select&gt;
  &lt;label for=&quot;floatingSelect&quot;&gt;Works with selects&lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div>
                                            <div>
                                                <div class="form-floating"><select class="form-select" id="floatingSelect" aria-label="Floating label select example"><option>Open this select menu</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option></select><label for="floatingSelect">Works with selects</label></div>
                                            </div>
                                        </div>
                                    </div>

                                    <h2 class="mt-20">Readonly plaintext <a href="" id="Readonly-plaintext"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>
                                    Also supported are floating labels. When switching from an editable <code>&lt;input&gt;</code> to a plaintext value without changing the page layout, <code>form-control-plaintext</code> can be useful.
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton7"
                                            onclick="copyToClipboard('copyText7', 'copyButton7')">
                                            <i class="fa fa-copy" id="iconCopied7"></i>
                                        </button>
                                        <div id="copyText7">
                                            
                                            <div class="form-floating mb-3">
  <input type="email" readonly class="form-control-plaintext" id="floatingEmptyPlaintextInput" placeholder="name@example.com"/>
  <label for="floatingEmptyPlaintextInput">Empty input</label>
</div>
<div class="form-floating mb-3">
  <input type="email" readonly class="form-control-plaintext" id="floatingPlaintextInput" placeholder="name@example.com" value="name@example.com"/>
  <label for="floatingPlaintextInput">Input with value</label>
</div>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="form-floating mb-3"><input type="email" class="form-control-plaintext" id="floatingEmptyPlaintextInput" placeholder="name@example.com"><label for="floatingEmptyPlaintextInput">Empty input</label></div><div class="form-floating mb-3"><input type="email" class="form-control-plaintext" id="floatingPlaintextInput" placeholder="name@example.com" value="name@example.com"><label for="floatingPlaintextInput">Input with value</label></div>
                                    </div>

                                    <h2 class="mt-20">Input groups <a href="" id="Input-groups"
                                            class="opacity-0 hover-1">#</a></h2>
                                    <p>Floating labels also support <code >.input-group</code>.</p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton8"
                                            onclick="copyToClipboard('copyText8', 'copyButton8')">
                                            <i class="fa fa-copy" id="iconCopied8"></i>
                                        </button>
                                        <div id="copyText8">
                                            
                                            <pre><code>&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;@&lt;/span&gt;
  &lt;div class=&quot;form-floating&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;floatingInputGroup1&quot; placeholder=&quot;Username&quot;/&gt;
    &lt;label for=&quot;floatingInputGroup1&quot;&gt;Username&lt;/label&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="input-group mb-3"><span class="input-group-text">@</span><div class="form-floating"><input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username"><label for="floatingInputGroup1">Username</label></div></div>
                                    </div>
                                    <p class="mt-20">
                                    When using <code>.input-group</code>, <code>.form-floating</code>, and form validation together, the -feedback should be positioned inside the <code>.input-group</code> but outside the <code>.form-floating</code>. This necessitates the use of javascript to display the feedback.
                                    </p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton9"
                                            onclick="copyToClipboard('copyText9', 'copyButton9')">
                                            <i class="fa fa-copy" id="iconCopied9"></i>
                                        </button>
                                        <div id="copyText9">
                                            
                                            <pre><code>&lt;div class=&quot;input-group has-validation&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;@&lt;/span&gt;
  &lt;div class=&quot;form-floating is-invalid&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control is-invalid&quot; id=&quot;floatingInputGroup2&quot; placeholder=&quot;Username&quot; required/&gt;
    &lt;label for=&quot;floatingInputGroup2&quot;&gt;Username&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class=&quot;invalid-feedback&quot;&gt;
    Please choose a username.
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->

                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-3">
                                        <div class="input-group has-validation"><span class="input-group-text">@</span><div class="form-floating is-invalid"><input type="text" class="form-control is-invalid" id="floatingInputGroup2" placeholder="Username" required=""><label for="floatingInputGroup2">Username</label></div><div class="invalid-feedback">Please choose a username.</div></div>
                                    </div>
                                    <h1 class="mt-20">Layout <a href="" id="Layout" class="opacity-0 hover-1">#</a>
                                    </h1>
                                    <p>When working with the Bootstrap grid system, be sure to place form elements
                                        within column classes.</p>

                                    <!-- code -->
                                    <div class="code_bg rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton10"
                                            onclick="copyToClipboard('copyText10', 'copyButton10')">
                                            <i class="fa fa-copy" id="iconCopied10"></i>
                                        </button>
                                        <div id="copyText10">
                                            
                                            <pre><code>&lt;div class=&quot;row g-2&quot;&gt;
  &lt;div class=&quot;col-md&quot;&gt;
    &lt;div class=&quot;form-floating&quot;&gt;
      &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;floatingInputGrid&quot; placeholder=&quot;name@example.com&quot; value=&quot;mdo@example.com&quot;/&gt;
      &lt;label for=&quot;floatingInputGrid&quot;&gt;Email address&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md&quot;&gt;
    &lt;div class=&quot;form-floating&quot;&gt;
      &lt;select class=&quot;form-select&quot; id=&quot;floatingSelectGrid&quot;&gt;
        &lt;option selected&gt;Open this select menu&lt;/option&gt;
        &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
      &lt;/select&gt;
      &lt;label for=&quot;floatingSelectGrid&quot;&gt;Works with selects&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <!-- code end -->
                                    <h5 class="result m-0">RESULT</h5>
                                    <div class="code_bg rounded p-0">
                                        <div class="row g-2"><div class="col-md"><div class="form-floating"><input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com"><label for="floatingInputGrid">Email address</label></div></div><div class="col-md"><div class="form-floating"><select class="form-select" id="floatingSelectGrid"><option>Open this select menu</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option></select><label for="floatingSelectGrid">Works with selects</label></div></div></div>
                                    </div>

                                    <h2 class="mt-20">Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
                                    <h3>Variables <a href="" id="Variables" class="opacity-0 hover-1">#</a></h3>

                                    <!-- code -->
                                    <div class="code_bg mt-20 rounded p-3">
                                        <button class="btn btn-outline-primary float-end" id="copyButton11"
                                            onclick="copyToClipboard('copyText11', 'copyButton11')">
                                            <i class="fa fa-copy" id="iconCopied11"></i>
                                        </button>
<pre id="copyText11">
<code>$form-floating-height:      add(3.5rem, $input-height-border);
$form-floating-line-height:       1.25;
$form-floating-padding-x:         $input-padding-x;
$form-floating-padding-y:         1rem;
$form-floating-input-padding-t:   1.625rem;
$form-floating-input-padding-b:   .625rem;
$form-floating-label-opacity:     .65;
$form-floating-label-transform:   scale(.85) translateY(-.5rem) translateX(.15rem);
$form-floating-transition:        opacity .1s ease-in-out, transform .1s ease-in-out;</code>
                                        </pre>
                                        
                                    </div>
                                    <!-- code end -->
                                </div>
                            </div>
                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                <div class="right_side">
                                    <ul class="p-0">
                                        <li><a href="#Example">Example</a></li>
                                        <li><a href="#Textareas">Textareas</a></li>
                                        <li><a href="#Selects">Selects</a></li>
                                        <li><a href="#Readonly-plaintext">Readonly plain text</a></li>
                                        <li><a href="#Input-groups">Input groups</a></li>
                                        <li><a href="#Layout">Layout</a></li>
                                        <li><a href="#Sass">Sass</a>
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
                            <a class="page-link border-0" href="/forms/form-control.php">
                                <span>Previous</span>
                                <strong class="d-block">« Form Control</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/forms/checks-and-radios.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Checks & Radios »</strong>
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