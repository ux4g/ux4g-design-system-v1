<?php
$title = 'UX4G | Spacing';
$canonical = 'https://doc.ux4g.gov.in/utilities/spacing.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Spacing</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row">

                        <div class="col-lg-9">
                            <h1>Spacing</h1>
                            <p>Bootstrap includes a wide range of shorthand responsive margin, padding, and gap utility
                                classes to modify an element’s appearance.</p>

                            <h2 class="mt-20">Margin and padding <a href="" id="Margin-and-padding"
                                    class="opacity-0 hover-1">#</a></h2>
                            <p>Assign responsive-friendly <code>margin</code> or <code>padding</code> values to an
                                element or a subset of its sides with shorthand classes. Includes support for individual
                                properties, all properties, and vertical and horizontal properties. Classes are built
                                from a default Sass map ranging from <code>.25rem</code> to <code>3rem</code>.</p>

                            <div class="blockquote">
                                <strong>Using the CSS Grid layout module?</strong> Consider using <a href="#gap">the gap
                                    utility</a> instead.
                            </div>

                            <h3 class="mt-20">Notation <a href="" id="Notation" class="opacity-0 hover-1">#</a></h3>
                            <p>Spacing utilities that apply to all breakpoints, from <code>xs</code> to
                                <code>xxl</code>, have no breakpoint abbreviation in them. This is because those classes
                                are applied from <code>min-width: 0</code> and up, and thus are not bound by a media
                                query. The remaining breakpoints, however, do include a breakpoint abbreviation.
                            </p>
                            <p>The classes are named using the format <code>{property}{sides}-{size}</code> for
                                <code>xs</code> and <code>{property}{sides}-{breakpoint}-{size}</code> for
                                <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, and
                                <code>xxl</code>.
                            </p>
                            <p>Where <em>property</em> is one of:</p>
                            <ul class="un_order_list">
                                <li><code>m</code> - for classes that set <code>margin</code></li>
                                <li><code>p</code> - for classes that set <code>padding</code></li>
                            </ul>
                            <p>Where sides is one of:</p>
                            <ul class="un_order_list">
                                <li><code>t</code> - for classes that set <code>margin-top</code> or
                                    <code>padding-top</code>
                                </li>
                                <li><code>b</code> - for classes that set <code>margin-bottom</code> or
                                    <code>padding-bottom</code>
                                </li>
                                <li><code>s</code> - (start) for classes that set <code>margin-left</code> or
                                    <code>padding-left</code> in LTR, <code>margin-right</code> or
                                    <code>padding-right</code> in RTL
                                </li>
                                <li><code>e</code> - (end) for classes that set <code>margin-right</code> or
                                    <code>padding-right</code> in LTR, <code>margin-left</code> or
                                    <code>padding-left</code> in RTL
                                </li>
                                <li><code>x</code> - for classes that set both <code>*-left</code> and
                                    <code>*-right</code>
                                </li>
                                <li><code>y</code> - for classes that set both <code>*-top</code> and
                                    <code>*-bottom</code>
                                </li>
                                <li>blank - for classes that set a <code>margin</code> or <code>padding</code> on all 4
                                    sides of the element</li>
                            </ul>
                            <p>Where size is one of:</p>

                            <ul class="un_order_list">
                                <li><code>0</code> - for classes that eliminate the <code>margin</code> or
                                    <code>padding</code> by setting it to <code>0</code>
                                </li>
                                <li><code>1</code> - (by default) for classes that set the <code>margin</code> or
                                    <code>padding</code> to <code>$spacer * .25</code>
                                </li>
                                <li><code>2</code> - (by default) for classes that set the <code>margin</code> or
                                    <code>padding</code> to <code>$spacer * .5</code>
                                </li>
                                <li><code>3</code> - (by default) for classes that set the <code>margin</code> or
                                    <code>padding</code> to <code>$spacer</code>
                                </li>
                                <li><code>4</code> - (by default) for classes that set the <code>margin</code> or
                                    <code>padding</code> to <code>$spacer * 1.5</code>
                                </li>
                                <li><code>5</code> - (by default) for classes that set the <code>margin</code> or
                                    <code>padding</code> to <code>$spacer * 3</code>
                                </li>
                                <li><code>auto</code> - for classes that set the <code>margin</code> to auto</li>
                            </ul>
                            <p>(You can add more sizes by adding entries to the $spacers Sass map variable.)</p>
                            <h3>Examples <a href="" id="Examples" class="opacity-0 hover-1">#</a></h3>
                            <p>Here are some representative examples of these classes:</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 mb-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                    onclick="copyToClipboard('copyText1', 'copyButton1')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText1"><code>.mt-0 {
  margin-top: 0 !important;
}

.ms-1 {
  margin-left: ($spacer * .25) !important;
}

.px-2 {
  padding-left: ($spacer * .5) !important;
  padding-right: ($spacer * .5) !important;
}

.p-3 {
  padding: $spacer !important;
}</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h3>Horizontal centering <a href="" id="Horizontal-centering"
                                    class="opacity-0 hover-1">#</a></h3>
                            <p>Additionally, Bootstrap also includes an <code>.mx-auto</code> class for horizontally
                                centering fixed-width block level content—that is, content that has
                                <code>display: block</code> and a <code>width</code> set—by setting the horizontal
                                margins to <code>auto</code>.
                            </p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton2"
                                    onclick="copyToClipboard('copyText2', 'copyButton2')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText2"><code>&lt;div class=&quot;mx-auto&quot; style=&quot;width: 200px;&quot;&gt;
  Centered element
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>

                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example">
                                    <div class="mx-auto p-2"
                                        style="width: 200px; background-color: rgba(26, 115, 233, 0.26); border:rgba(26, 115, 233, 0.26) solid 1px">
                                        Centered element
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->

                            <h2>Negative margin <a href="" id="Negative-margin" class="opacity-0 hover-1">#</a></h2>
                            <p>In CSS, <code>margin</code> properties can utilize negative values (<code>padding</code>
                                cannot). These negative margins are <strong>disabled by default</strong>, but can be
                                enabled in Sass by setting <code>$enable-negative-margins: true</code>.</p>
                            <p>The syntax is nearly the same as the default, positive margin utilities, but with the
                                addition of <code>n</code> before the requested size. Here’s an example class that’s the
                                opposite of <code>.mt-1</code>:</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 mb-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton3"
                                    onclick="copyToClipboard('copyText3', 'copyButton3')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText3"><code>.mt-n1 {
  margin-top: -0.25rem !important;
}</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h2>Gap <a href="" id="gap" class="opacity-0 hover-1">#</a></h2>
                            <p>When using <code>display: grid</code>, you can make use of <code>gap</code> utilities on
                                the parent grid container. This can save on having to add margin utilities to individual
                                grid items (children of a <code>display: grid</code> container). Gap utilities are
                                responsive by default, and are generated via our utilities API, based on the
                                <code>$spacers</code> Sass map.
                            </p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton4"
                                    onclick="copyToClipboard('copyText4', 'copyButton4')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText4"><code>&lt;div class=&quot;d-grid gap-3&quot;&gt;
  &lt;div class=&quot;p-2 bg-light border&quot;&gt;Grid item 1&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-light border&quot;&gt;Grid item 2&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-light border&quot;&gt;Grid item 3&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example m-0 border-0 bd-example-cssgrid">
                                    <div class="grid gap-3">
                                        <div class="p-2 g-col-6">Grid item 1</div>
                                        <div class="p-2 g-col-6">Grid item 2</div>
                                        <div class="p-2 g-col-6">Grid item 3</div>
                                        <div class="p-2 g-col-6">Grid item 4</div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end-->
                            <p>Support includes responsive options for all of Bootstrap’s grid breakpoints, as well as
                                six sizes from the <code>$spacers</code> map (<code>0</code>–<code>5</code>). There is
                                no <code>.gap-auto</code> utility class as it’s effectively the same as
                                <code>.gap-0</code>.
                            </p>
                            <h2 class="mb-20">Sass <a href="" id="Sass" class="hover-1 opacity-0">#</a></h2>
                            <h3>Maps <a href="" id="Maps" class="hover-1 opacity-0">#</a></h3>
                            <p>Spacing utilities are declared via Sass map and then generated with our utilities API.
                            </p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 mb-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton5"
                                    onclick="copyToClipboard('copyText5', 'copyButton5')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText5"><code>$spacer: 1rem;
$spacers: (
  0: 0,
  1: $spacer * .25,
  2: $spacer * .5,
  3: $spacer,
  4: $spacer * 1.5,
  5: $spacer * 3,
);</code></pre>
                            </div>
                            <!-- code snippet end -->

                            <h3>Utilities API <a href="" id="Utilities-API" class="hover-1 opacity-0">#</a></h3>
                            <p>Spacing utilities are declared in our utilities API in <code>scss/_utilities.scss</code>.
                                <a href="/utilities/api.php/#Using-the-API">Learn how to use the utilities API.</a>
                            </p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton6"
                                    onclick="copyToClipboard('copyText6', 'copyButton6')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText6"><code>"margin": (
      responsive: true,
      property: margin,
      class: m,
      values: map-merge($spacers, (auto: auto))
    ),
    "margin-x": (
      responsive: true,
      property: margin-right margin-left,
      class: mx,
      values: map-merge($spacers, (auto: auto))
    ),
    "margin-y": (
      responsive: true,
      property: margin-top margin-bottom,
      class: my,
      values: map-merge($spacers, (auto: auto))
    ),
    "margin-top": (
      responsive: true,
      property: margin-top,
      class: mt,
      values: map-merge($spacers, (auto: auto))
    ),
    "margin-end": (
      responsive: true,
      property: margin-right,
      class: me,
      values: map-merge($spacers, (auto: auto))
    ),
    "margin-bottom": (
      responsive: true,
      property: margin-bottom,
      class: mb,
      values: map-merge($spacers, (auto: auto))
    ),
    "margin-start": (
      responsive: true,
      property: margin-left,
      class: ms,
      values: map-merge($spacers, (auto: auto))
    ),
    // Negative margin utilities
    "negative-margin": (
      responsive: true,
      property: margin,
      class: m,
      values: $negative-spacers
    ),
    "negative-margin-x": (
      responsive: true,
      property: margin-right margin-left,
      class: mx,
      values: $negative-spacers
    ),
    "negative-margin-y": (
      responsive: true,
      property: margin-top margin-bottom,
      class: my,
      values: $negative-spacers
    ),
    "negative-margin-top": (
      responsive: true,
      property: margin-top,
      class: mt,
      values: $negative-spacers
    ),
    "negative-margin-end": (
      responsive: true,
      property: margin-right,
      class: me,
      values: $negative-spacers
    ),
    "negative-margin-bottom": (
      responsive: true,
      property: margin-bottom,
      class: mb,
      values: $negative-spacers
    ),
    "negative-margin-start": (
      responsive: true,
      property: margin-left,
      class: ms,
      values: $negative-spacers
    ),
    // Padding utilities
    "padding": (
      responsive: true,
      property: padding,
      class: p,
      values: $spacers
    ),
    "padding-x": (
      responsive: true,
      property: padding-right padding-left,
      class: px,
      values: $spacers
    ),
    "padding-y": (
      responsive: true,
      property: padding-top padding-bottom,
      class: py,
      values: $spacers
    ),
    "padding-top": (
      responsive: true,
      property: padding-top,
      class: pt,
      values: $spacers
    ),
    "padding-end": (
      responsive: true,
      property: padding-right,
      class: pe,
      values: $spacers
    ),
    "padding-bottom": (
      responsive: true,
      property: padding-bottom,
      class: pb,
      values: $spacers
    ),
    "padding-start": (
      responsive: true,
      property: padding-left,
      class: ps,
      values: $spacers
    ),
    // Gap utility
    "gap": (
      responsive: true,
      property: gap,
      class: gap,
      values: $spacers
    ),
    </code></pre>
                            </div>
                            <!-- code snippet end -->

                        </div>

                        <!-- right side scrollbar -->
                        <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                            <div class="right_side">
                                <ul class="p-0">
                                    <li>
                                        <a href="#Margin-and-padding">Margin and padding</a>
                                        <ul>
                                            <li>
                                                <a href="#Notation">Notation</a>
                                            </li>
                                            <li>
                                                <a href="#Examples">Examples</a>
                                            </li>
                                            <li>
                                                <a href="#Horizontal-centering">Horizontal centering</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#Negative-margin">Negative margin</a>
                                    </li>
                                    <li>
                                        <a href="#gap">Gap</a>
                                    </li>
                                    <li><a href="#Sass">Sass</a>
                                        <ul>
                                            <li>
                                                <a href="#Maps">Maps</a>
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
                            <a class="page-link border-0" href="/utilities/sizing.php">
                                <span>Previous</span>
                                <strong class="d-block">« Sizing</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/text.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Text »</strong>
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