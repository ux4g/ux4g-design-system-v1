<?php
$title = 'UX4G | Scrollspy';
$canonical = 'https://doc.ux4g.gov.in/components/scrollspy.php';

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
                            <li class="breadcrumb-item"><a href="/category/components.php">Components</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Scrollspy</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="col-12 col-sm-9">
                    <h1 class="mb-30"> Scrollspy</h1>
                    <p>
                    To show which link is active in the viewport, automatically update UX4G navigation or list group components based on scroll position.
                    </p>
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
When the element with the id referred to by the anchor's href is scrolled into view, Scrollspy toggles the .active class on anchor (<a>) elements. Although it can be used with any anchor element on the current page, Scrollspy functions best when combined with a UX4G navigation component or list group. This is how it goes.
</p>
<ul class="un_order_list"><li><p>To get started, scrollspy needs two components: a scrollable container and a navigation, list group, or basic series of links. The <body> element or a custom element with a set height and overflow-y: scroll can be the scrollable container.</p></li><li><p>Add the data-bs-spy="scroll" and data-bs-target="#navId" attributes to the scrollable container, where navId is the distinctive id of the associated navigation. To ensure keyboard accessibility, be sure to additionally include a tabindex="0".</p></li><li><p>The associated navigation's anchor links have an.active class that is added and removed as you scroll the "spied" container. Links that don't have resolvable id targets are ignored. A home, for instance, must match to something like a div id="home">home/div> in the DOM.</p></li><li><p>Unvisible target items will not be taken into account. See the section below on Non-Visible Elements.</p></li></ul>

<h2 class="mt-20">Examples <a href="" id="Examples" class="opacity-0 hover-1">#</a></h2>

<h3 class="mt-20">Navbar <a href="" id="Navbar" class="opacity-0 hover-1">#</a></h3>
<p>Watch the active class change as you scroll the space below the navbar. Watch as the dropdown items are highlighted when you open the dropdown menu.</p>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton1" onclick="copyToClipboard('copyText1', 'copyButton1')">
<i class="fa fa-copy" id="iconCopied1"></i>
</button>
<div id="copyText1">
  <pre><code>&lt;nav id=&quot;navbar-example2&quot; class=&quot;navbar bg-light px-3 mb-3&quot;&gt;
  &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Navbar&lt;/a&gt;
  &lt;ul class=&quot;nav nav-pills&quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; href=&quot;#scrollspyHeading1&quot;&gt;First&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; href=&quot;#scrollspyHeading2&quot;&gt;Second&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item dropdown&quot;&gt;
      &lt;a class=&quot;nav-link dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; href=&quot;#&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
      &lt;ul class=&quot;dropdown-menu&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#scrollspyHeading3&quot;&gt;Third&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#scrollspyHeading4&quot;&gt;Fourth&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#scrollspyHeading5&quot;&gt;Fifth&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
&lt;div data-bs-spy=&quot;scroll&quot; data-bs-target=&quot;#navbar-example2&quot; data-bs-root-margin=&quot;0px 0px -40%&quot; data-bs-smooth-scroll=&quot;true&quot; class=&quot;scrollspy-example bg-light p-3 rounded-2&quot; tabindex=&quot;0&quot;&gt;
  &lt;h4 id=&quot;scrollspyHeading1&quot;&gt;First heading&lt;/h4&gt;
  &lt;p&gt;...&lt;/p&gt;
  &lt;h4 id=&quot;scrollspyHeading2&quot;&gt;Second heading&lt;/h4&gt;
  &lt;p&gt;...&lt;/p&gt;
  &lt;h4 id=&quot;scrollspyHeading3&quot;&gt;Third heading&lt;/h4&gt;
  &lt;p&gt;...&lt;/p&gt;
  &lt;h4 id=&quot;scrollspyHeading4&quot;&gt;Fourth heading&lt;/h4&gt;
  &lt;p&gt;...&lt;/p&gt;
  &lt;h4 id=&quot;scrollspyHeading5&quot;&gt;Fifth heading&lt;/h4&gt;
  &lt;p&gt;...&lt;/p&gt;
&lt;/div&gt;</code></pre>
</div>
</div>
<!-- code end -->

<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3">
  <div ><div><div class="bd-example"><nav id="navbar-example2" class="navbar bg-light px-3 mb-3"><a class="navbar-brand" href="#">Navbar</a><ul class="nav nav-pills"><li class="nav-item"><a class="nav-link" href="#scrollspyHeading1">First</a></li><li class="nav-item"><a class="nav-link" href="#scrollspyHeading2">Second</a></li><li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a><ul class="dropdown-menu"><li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li><li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li><li><hr class="dropdown-divider"></li><li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li></ul></li></ul></nav><div class="scrollspy-example bg-light p-3 rounded-2" style="max-height:200px; overflow:auto" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0"><h4 id="scrollspyHeading1">First heading</h4><p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p><h4 id="scrollspyHeading2">Second heading</h4><p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p><h4 id="scrollspyHeading3">Third heading</h4><p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p><h4 id="scrollspyHeading4">Fourth heading</h4><p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p><h4 id="scrollspyHeading5">Fifth heading</h4><p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p></div></div></div></div>
</div>
<!-- code end -->

<!-- code -->

<h2 class="mt-20">Nested nav <a href="" id="Nested-nav" class="opacity-0 hover-1">#</a></h2>
<p >As navigate the area below the navbar, see how the active class changes. When accessing the dropdown menu, keep an eye out for the highlighted dropdown options.</p>
<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton3" onclick="copyToClipboard('copyText3', 'copyButton3')">
<i class="fa fa-copy" id="iconCopied3"></i>
</button>
<div id="copyText3" >
<pre><code>&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-4&quot;&gt;
    &lt;nav id=&quot;navbar-example3&quot; class=&quot;h-100 flex-column align-items-stretch pe-4 border-end&quot;&gt;
      &lt;nav class=&quot;nav nav-pills flex-column&quot;&gt;
        &lt;a class=&quot;nav-link&quot; href=&quot;#item-1&quot;&gt;Item 1&lt;/a&gt;
        &lt;nav class=&quot;nav nav-pills flex-column&quot;&gt;
          &lt;a class=&quot;nav-link ms-3 my-1&quot; href=&quot;#item-1-1&quot;&gt;Item 1-1&lt;/a&gt;
          &lt;a class=&quot;nav-link ms-3 my-1&quot; href=&quot;#item-1-2&quot;&gt;Item 1-2&lt;/a&gt;
        &lt;/nav&gt;
        &lt;a class=&quot;nav-link&quot; href=&quot;#item-2&quot;&gt;Item 2&lt;/a&gt;
        &lt;a class=&quot;nav-link&quot; href=&quot;#item-3&quot;&gt;Item 3&lt;/a&gt;
        &lt;nav class=&quot;nav nav-pills flex-column&quot;&gt;
          &lt;a class=&quot;nav-link ms-3 my-1&quot; href=&quot;#item-3-1&quot;&gt;Item 3-1&lt;/a&gt;
          &lt;a class=&quot;nav-link ms-3 my-1&quot; href=&quot;#item-3-2&quot;&gt;Item 3-2&lt;/a&gt;
        &lt;/nav&gt;
      &lt;/nav&gt;
    &lt;/nav&gt;
  &lt;/div&gt;

  &lt;div class=&quot;col-8&quot;&gt;
    &lt;div data-bs-spy=&quot;scroll&quot; data-bs-target=&quot;#navbar-example3&quot; data-bs-smooth-scroll=&quot;true&quot; class=&quot;scrollspy-example-2&quot; tabindex=&quot;0&quot;&gt;
      &lt;div id=&quot;item-1&quot;&gt;
        &lt;h4&gt;Item 1&lt;/h4&gt;
        &lt;p&gt;...&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id=&quot;item-1-1&quot;&gt;
        &lt;h5&gt;Item 1-1&lt;/h5&gt;
        &lt;p&gt;...&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id=&quot;item-1-2&quot;&gt;
        &lt;h5&gt;Item 1-2&lt;/h5&gt;
        &lt;p&gt;...&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id=&quot;item-2&quot;&gt;
        &lt;h4&gt;Item 2&lt;/h4&gt;
        &lt;p&gt;...&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id=&quot;item-3&quot;&gt;
        &lt;h4&gt;Item 3&lt;/h4&gt;
        &lt;p&gt;...&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id=&quot;item-3-1&quot;&gt;
        &lt;h5&gt;Item 3-1&lt;/h5&gt;
        &lt;p&gt;...&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id=&quot;item-3-2&quot;&gt;
        &lt;h5&gt;Item 3-2&lt;/h5&gt;
        &lt;p&gt;...&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
</div>
</div>
<!-- code end -->
<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3">
<div class="bd-example">
  <div class="row">
    <div class="col-4">
      <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
        <nav class="nav nav-pills flex-column">
          <a class="nav-link" href="#item-1">Item 1</a>
          <nav class="nav nav-pills flex-column">
            <a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
            <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
          </nav>
          <a class="nav-link" href="#item-2">Item 2</a>
          <a class="nav-link active" href="#item-3">Item 3</a>
          <nav class="nav nav-pills flex-column">
            <a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a>
            <a class="nav-link ms-3 my-1 active" href="#item-3-2">Item 3-2</a>
          </nav>
        </nav>
      </nav>
    </div>
    <div class="col-8">
      <div style="height: 200px;
    overflow: auto;" data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
        <div id="item-1">
          <h4>Item 1</h4>
          <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
          <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
        </div>
        <div id="item-1-1">
          <h5>Item 1-1</h5>
          <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
          <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
        </div>
        <div id="item-1-2">
          <h5>Item 1-2</h5>
          <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
          <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
        </div>
        <div id="item-2">
          <h4>Item 2</h4>
          <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
          <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
        </div>
        <div id="item-3">
          <h4>Item 3</h4>
          <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
          <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
        </div>
        <div id="item-3-1">
          <h5>Item 3-1</h5>
          <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
          <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
        </div>
        <div id="item-3-2">
          <h5>Item 3-2</h5>
          <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
          <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- code end -->
<h2 class="mt-20">List group <a href="" id="List-group" class="opacity-0 hover-1">#</a></h2>
<p >Scrollspy also works with <code>.list-groups</code>. Scroll the area next to the list group and watch the active class change.</p>


<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton4" onclick="copyToClipboard('copyText4', 'copyButton4')">
<i class="fa fa-copy" id="iconCopied4"></i>
</button>
<div id="copyText4" >
<pre aria-hidden="true" ><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">row</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">col-4</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">list-example</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">list-group</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">list-group-item list-group-item-action</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">href</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#list-item-1</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Item 1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">list-group-item list-group-item-action</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">href</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#list-item-2</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Item 2</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">list-group-item list-group-item-action</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">href</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#list-item-3</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Item 3</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">list-group-item list-group-item-action</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">href</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#list-item-4</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Item 4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">a</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">col-8</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-spy</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">scroll</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-target</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">#list-example</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">data-bs-smooth-scroll</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">true</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">class</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">scrollspy-example</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">tabindex</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">0</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h4</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">list-item-1</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Item 1</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">p</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">p</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h4</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">list-item-2</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Item 2</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">p</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">p</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h4</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">list-item-3</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Item 3</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">p</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">p</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">h4</span><span class="token tag" style="color: rgb(0, 0, 159);"> </span><span class="token tag attr-name" style="color: rgb(0, 164, 219);">id</span><span class="token tag attr-value punctuation attr-equals" style="color: rgb(57, 58, 52);">=</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag attr-value" style="color: rgb(227, 17, 108);">list-item-4</span><span class="token tag attr-value punctuation" style="color: rgb(57, 58, 52);">"</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">Item 4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">h4</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">      </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;</span><span class="token tag" style="color: rgb(0, 0, 159);">p</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text">...</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">p</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">    </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text">  </span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span><span class="token plain-text"></span></div><div class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain-text"></span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&lt;/</span><span class="token tag" style="color: rgb(0, 0, 159);">div</span><span class="token tag punctuation" style="color: rgb(57, 58, 52);">&gt;</span></div></pre></div>
</div>
<!-- code end -->
<h5 class="result m-0">RESULT</h5>
<!-- code -->
<div class="code_bg rounded p-3">
<div class="bd-example">
  <div class="row">
    <div class="col-4">
      <div id="list-example4" class="list-group">
        <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
        <a class="list-group-item list-group-item-action active" href="#list-item-2">Item 2</a>
        <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
        <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
      </div>
    </div>
    <div class="col-8">
      <div style="height: 200px;
    overflow: auto;" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example-3" tabindex="0">
        <h4 id="list-item-1">Item 1</h4>
        <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
        <h4 id="list-item-2">Item 2</h4>
        <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
        <h4 id="list-item-3">Item 3</h4>
        <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
        <h4 id="list-item-4">Item 4</h4>
        <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
      </div>
    </div>
  </div>
</div>
</div>
<!-- code end -->
<h2 class="mt-20">Simple anchors <a href="" id="Simple-anchors" class="opacity-0 hover-1">#</a></h2>

<p >Since Scrollspy may be used on any anchor element in the current document, it is not restricted to nav components and list groups. Watch the <code>.active</code> class change as scroll the area.</p>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton5" onclick="copyToClipboard('copyText5', 'copyButton5')">
<i class="fa fa-copy" id="iconCopied5"></i>
</button>
<div id="copyText5" >
<pre><code>&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-4&quot;&gt;
    &lt;div id=&quot;simple-list-example&quot; class=&quot;d-flex flex-column gap-2 simple-list-example-scrollspy text-center&quot;&gt;
      &lt;a class=&quot;p-1 rounded&quot; href=&quot;#simple-list-item-1&quot;&gt;Item 1&lt;/a&gt;
      &lt;a class=&quot;p-1 rounded&quot; href=&quot;#simple-list-item-2&quot;&gt;Item 2&lt;/a&gt;
      &lt;a class=&quot;p-1 rounded&quot; href=&quot;#simple-list-item-3&quot;&gt;Item 3&lt;/a&gt;
      &lt;a class=&quot;p-1 rounded&quot; href=&quot;#simple-list-item-4&quot;&gt;Item 4&lt;/a&gt;
      &lt;a class=&quot;p-1 rounded&quot; href=&quot;#simple-list-item-5&quot;&gt;Item 5&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-8&quot;&gt;
    &lt;div data-bs-spy=&quot;scroll&quot; data-bs-target=&quot;#simple-list-example&quot; data-bs-offset=&quot;0&quot; data-bs-smooth-scroll=&quot;true&quot; class=&quot;scrollspy-example&quot; tabindex=&quot;0&quot;&gt;
      &lt;h4 id=&quot;simple-list-item-1&quot;&gt;Item 1&lt;/h4&gt;
      &lt;p&gt;...&lt;/p&gt;
      &lt;h4 id=&quot;simple-list-item-2&quot;&gt;Item 2&lt;/h4&gt;
      &lt;p&gt;...&lt;/p&gt;
      &lt;h4 id=&quot;simple-list-item-3&quot;&gt;Item 3&lt;/h4&gt;
      &lt;p&gt;...&lt;/p&gt;
      &lt;h4 id=&quot;simple-list-item-4&quot;&gt;Item 4&lt;/h4&gt;
      &lt;p&gt;...&lt;/p&gt;
      &lt;h4 id=&quot;simple-list-item-5&quot;&gt;Item 5&lt;/h4&gt;
      &lt;p&gt;...&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
</div>
</div>
<!-- code end -->
<h5 class="result m-0">RESULT</h5>
<div class="code_bg rounded p-3">
<div class="bd-example">
  <div class="row">
    <div class="col-4">
      <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
        <a class="p-1 rounded active" href="#simple-list-item-1">Item 1</a>
        <a class="p-1 rounded" href="#simple-list-item-2">Item 2</a>
        <a class="p-1 rounded active" href="#simple-list-item-3">Item 3</a>
        <a class="p-1 rounded" href="#simple-list-item-4">Item 4</a>
        <a class="p-1 rounded" href="#simple-list-item-5">Item 5</a>
      </div>
    </div>
    <div class="col-8">
      <div style="height: 200px;
    overflow: auto;" data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
        <h4 id="simple-list-item-1">Item 1</h4>
        <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
        <h4 id="simple-list-item-2">Item 2</h4>
        <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
        <h4 id="simple-list-item-3">Item 3</h4>
        <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
        <h4 id="simple-list-item-4">Item 4</h4>
        <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
        <h4 id="simple-list-item-5">Item 5</h4>
        <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
      </div>
    </div>
  </div>
</div>
</div>

<h2 class="mt-20">Non-visible elements
 <a href="" id="Non-visible-elements" class="opacity-0 hover-1">#</a></h2>

<p>Target components that are not visible will be disregarded, and the nav items that they correspond to won't have an <code>.active</code> class. When launched from a non-visible wrapper, Scrollspy instances will disregard all target items. Once the wrapper is visible, use the refresh function to look for observable items.</p>

<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton6" onclick="copyToClipboard('copyText6', 'copyButton6')">
<i class="fa fa-copy" id="iconCopied6"></i>
</button>
  <pre id="copyText6"><code>document.querySelectorAll('#nav-tab&gt;[data-bs-toggle=&quot;tab&quot;]').forEach(el =&gt; {
  el.addEventListener('shown.bs.tab', () =&gt; {
    const target = el.getAttribute('data-bs-target')
    const scrollElem = document.querySelector(`${target} [data-bs-spy=&quot;scroll&quot;]`)
    bootstrap.ScrollSpy.getOrCreateInstance(scrollElem).refresh()
  })
})</code></pre>
</div>


<h2 class="mt-20">Usage <a href="" id="Usage" class="opacity-0 hover-1">#</a></h2>
<h3 class="mt-20">Via data attributes <a href="" id="Via-data-attributes" class="opacity-0 hover-1">#</a></h3>
<p>
Simply add <code>data-bs-spy="scroll"</code> to the element you wish to spy on (usually the <code>&lt;body&gt;</code>) to quickly add scrollspy functionality to your topbar navigation. The parent element's id or class name should then be added to the data-bs-target attribute of any UX4G .nav component.
</p>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton7" onclick="copyToClipboard('copyText7', 'copyButton7')">
<i class="fa fa-copy" id="iconCopied7"></i>
</button>
  <pre id="copyText7" tabindex="0" ><code >
  &lt;body data-bs-spy=&quot;scroll&quot; data-bs-target=&quot;#navbar-example&quot;&gt;
  ...
  &lt;div id=&quot;navbar-example&quot;&gt;
    &lt;ul class=&quot;nav nav-tabs&quot; role=&quot;tablist&quot;&gt;
      ...
    &lt;/ul&gt;
  &lt;/div&gt;
  ...
&lt;/body&gt;
  </code></pre>
</div>
<!-- code end -->

<h2 class="mt-20">Via JavaScript <a href="" id="Via-JavaScript" class="opacity-0 hover-1">#</a></h2>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton8" onclick="copyToClipboard('copyText8', 'copyButton8')">
<i class="fa fa-copy" id="iconCopied8"></i>
</button>
<pre id="copyText8"><code>const scrollSpy = new ux4g.ScrollSpy(document.body, {
  target: '#navbar-example'
})</code></pre>
</div>
<!-- code end -->

<h2 class="mt-20">Options <a href="" id="Options" class="opacity-0 hover-1">#</a></h2>
<p>
<code>Data-bs-animation</code> can have an option name appended to it, for example, <code>data-bs-animation="value,"</code> since options can be provided through data attributes or JavaScript. When sending the choices via data attributes, be sure to modify the case type of the option name from <code>"camelCase"</code> to <code>"kebab-case."</code> Use <code>data-bs-custom-class="beautifier"</code> as opposed to <code>data-bs-customClass="beautifier,"</code> for instance.
</p>

<p>
Since UX4G v1.0.0, all components have support for the experimental reserved data attribute <code>data-bs-config</code>, which can store a JSON string for basic component setting. When an element has the <code>data-bs-config='{"delay":0, "title":123}'</code> and <code>data-bs-title="456"</code> attributes, the final title value will be 456 and the individual data attributes will take precedence over the values specified on the <code>data-bs-config</code>. Additionally, JSON variables like <code>data-bs-delay='{"show":0,"hide":150}'</code> can be stored in existing data attributes.
</p>

<div class="table-responsive"><table class="table">
<thead>
<tr>
<th>Name</th>
<th>Type</th>
<th>Default</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>rootMargin</code></td>
<td>string</td>
<td><code>0px 0px -25%</code></td>
<td>Intersection Observer <a href="https://developer.mozilla.org/en-US/docs/Web/API/IntersectionObserver/rootMargin" target="_blank">rootMargin</a> valid units, when calculating scroll position.</td>
</tr>
<tr>
<td><code>smoothScroll</code></td>
<td>boolean</td>
<td><code>false</code></td>
<td>Enables smooth scrolling when a user clicks on a link that refers to ScrollSpy observables.</td>
</tr>
<tr>
<td><code>target</code></td>
<td>string, DOM element</td>
<td><code>null</code></td>
<td>Specifies element to apply Scrollspy plugin.</td>
</tr>
<tr>
<td><code>threshold</code></td>
<td>array</td>
<td><code>[0.1, 0.5, 1]</code></td>
<td><code>IntersectionObserver</code> <a href="https://developer.mozilla.org/en-US/docs/Web/API/IntersectionObserver/IntersectionObserver#threshold" target="_blank">threshold</a> valid input, when calculating scroll position.</td>
</tr>
</tbody>
</table></div>

<div class="bd-callout bd-callout-warning blockquote_warning mt-20"><p><strong>Deprecated Options</strong></p><p>Up until v5.1.3 we were using <code>offset</code> &amp; <code>method</code> options, which are now deprecated and replaced by <code>rootMargin</code>. To keep backwards compatibility, we will continue to parse a given <code>offset</code> to <code>rootMargin</code>, but this feature will be removed in <strong>v6</strong>.</p></div>

<h2 class="mt-20">Methods <a href="" id="Methods" class="opacity-0 hover-1">#</a></h2>
<div class="table-responsive mt-20"><table class="table">
<thead>
<tr>
<th>Method</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>dispose</code></td>
<td>Destroys an element’s scrollspy. (Removes stored data on the DOM element)</td>
</tr>
<tr>
<td><code>getInstance</code></td>
<td><em>Static</em> method to get the scrollspy instance associated with a DOM element.</td>
</tr>
<tr>
<td><code>getOrCreateInstance</code></td>
<td><em>Static</em> method to get the scrollspy instance associated with a DOM element, or to create a new one in case it wasn’t initialized.</td>
</tr>
<tr>
<td><code>refresh</code></td>
<td>When adding or removing elements in the DOM, you’ll need to call the refresh method.</td>
</tr>
</tbody>
</table></div>
<p>Here’s an example using the refresh method:</p>

<!-- code -->
<div class="code_bg rounded p-3">
<button class="btn btn-outline-primary float-end" id="copyButton9" onclick="copyToClipboard('copyText9', 'copyButton9')">
<i class="fa fa-copy" id="iconCopied9"></i>
</button>
  <pre id="copyText9" tabindex="0" class="prism-code language-js codeBlock_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module thin-scrollbar"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token keyword" style="color: rgb(0, 0, 159);">const</span><span class="token plain"> dataSpyList </span><span class="token operator" style="color: rgb(57, 58, 52);">=</span><span class="token plain"> </span><span class="token dom variable" style="color: rgb(54, 172, 170);">document</span><span class="token punctuation" style="color: rgb(57, 58, 52);">.</span><span class="token method function property-access" style="color: rgb(215, 58, 73);">querySelectorAll</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token string" style="color: rgb(227, 17, 108);">'[data-bs-spy="scroll"]'</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">dataSpyList</span><span class="token punctuation" style="color: rgb(57, 58, 52);">.</span><span class="token method function property-access" style="color: rgb(215, 58, 73);">forEach</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token parameter">dataSpyEl</span><span class="token plain"> </span><span class="token arrow operator" style="color: rgb(57, 58, 52);">=&gt;</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  </span><span class="token constant" style="color: rgb(54, 172, 170);">UX4G</span><span class="token punctuation" style="color: rgb(57, 58, 52);">.</span><span class="token property-access maybe-class-name">ScrollSpy</span><span class="token punctuation" style="color: rgb(57, 58, 52);">.</span><span class="token method function property-access" style="color: rgb(215, 58, 73);">getInstance</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token plain">dataSpyEl</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token punctuation" style="color: rgb(57, 58, 52);">.</span><span class="token method function property-access" style="color: rgb(215, 58, 73);">refresh</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><br></span></code></pre>
</div>
<!-- code end -->

<h2 class="mt-20">Events <a href="" id="Events" class="opacity-0 hover-1">#</a></h2>
<div class="table-responsive mt-20"><table class="table">
<thead>
<tr>
<th>Event</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>activate.bs.scrollspy</code></td>
<td>This event fires on the scroll element whenever an anchor is activated by the scrollspy.</td>
</tr>
</tbody>
</table></div>
<!-- code -->
<div class="code_bg rounded p-3 mt-20">
<button class="btn btn-outline-primary float-end" id="copyButton10" onclick="copyToClipboard('copyText10', 'copyButton10')">
<i class="fa fa-copy" id="iconCopied10"></i>
</button>
  <pre id="copyText10" tabindex="0" class="prism-code language-js codeBlock_node_modules-@docusaurus-theme-classic-lib-theme-CodeBlock-Content-styles-module thin-scrollbar"><code ><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token keyword" style="color: rgb(0, 0, 159);">const</span><span class="token plain"> firstScrollSpyEl </span><span class="token operator" style="color: rgb(57, 58, 52);">=</span><span class="token plain"> </span><span class="token dom variable" style="color: rgb(54, 172, 170);">document</span><span class="token punctuation" style="color: rgb(57, 58, 52);">.</span><span class="token method function property-access" style="color: rgb(215, 58, 73);">querySelector</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token string" style="color: rgb(227, 17, 108);">'[data-bs-spy="scroll"]'</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">firstScrollSpyEl</span><span class="token punctuation" style="color: rgb(57, 58, 52);">.</span><span class="token method function property-access" style="color: rgb(215, 58, 73);">addEventListener</span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token string" style="color: rgb(227, 17, 108);">'activate.bs.scrollspy'</span><span class="token punctuation" style="color: rgb(57, 58, 52);">,</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">(</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"> </span><span class="token arrow operator" style="color: rgb(57, 58, 52);">=&gt;</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(57, 58, 52);">{</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain">  </span><span class="token comment" style="color: rgb(153, 153, 136); font-style: italic;">// do something...</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain"></span><span class="token punctuation" style="color: rgb(57, 58, 52);">}</span><span class="token punctuation" style="color: rgb(57, 58, 52);">)</span><span class="token plain"></span><br></span><span class="token-line" style="color: rgb(57, 58, 52);"><span class="token plain" style="display: inline-block;"></span><br></span></code></pre>
</div>
<!-- code end -->



  

                                                </div>
                                            </div>
                                            <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                                <div class="right_side">
                                                    <ul class="p-0">
                                                        <li><a href="#How-it-works">How it works</a></li>
                                                        
                                                        
                                                      <li> <a href="#Examples">Examples</a>
                                                    
                                                      <ul>
                                                        <li>
                                                          <a href="#Navbar">Navbar</a>
                                                        </li>
                                                      </ul>
                                                    </li>
                                                    
                                                      
                                                      <li> <a href="#Nested-nav">Nested nav</a></li>
                                                      <li> <a href="#List-group">List group</a></li>

                                                      <li> <a href="#Simple-anchors">Simple anchors</a></li>
                                                      <li> <a href="#Non-visible-elements">Non-visible elements</a></li>


<li> <a href="#Usage">Usage</a>                                                    
<ul>
  <li>
    <a href="#Via-data-attributes">Via data attributes</a>
  </li>
  <li>
    <a href="#Via-JavaScript">Via JavaScript</a>
  </li>
</ul>
</li>

<li> 
  <a href="#Options">Options</a>
</li>
<li> 
  <a href="#Methods">Methods</a>
</li>
<li> 
  <a href="#Events">Events</a>
</li>
                                                      
                                                      



                                                        
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
                    <a class="page-link border-0" href="/components/progress.php">
                        <span>Previous</span>
                        <strong class="d-block">« Progress </strong>
                    </a>
                    <a class="page-link border-0 float-end" href="/components/spinners.php">
                        <span class="text-end">Next</span>
                        <strong class="d-block">Spinners »</strong>
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

  <style>
    .simple-list-example-scrollspy .active {
    background-color: var(--color-magenta-light2) !important;
}
  </style>