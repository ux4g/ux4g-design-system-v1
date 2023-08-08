<?php
$title = 'UX4G | Position';
$canonical = 'https://doc.ux4g.gov.in/utilities/position.php';

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
                            <li class="breadcrumb-item active" aria-current="page">Position</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row">

                        <div class="col-lg-9">
                            <h1>Overflow</h1>
                            <p>Use these shorthand utilities for quickly configuring the position of an element.</p>

                            <h2 class="mt-20">Position values <a href="" id="Position-values"
                                    class="opacity-0 hover-1">#</a></h2>
                            <p>Quick positioning classes are available, though they are not responsive.</p>

                            <!-- code snippet -->
                            <div class="rounded p-3 code_bg mb-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton1"
                                    onclick="copyToClipboard('copyText1', 'copyButton1')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText1"><code>&lt;div class=&quot;position-static&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;position-relative&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;position-absolute&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;position-fixed&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;position-sticky&quot;&gt;...&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h2>Arrange elements <a href="" id="Arrange-elements" class="opacity-0 hover-1">#</a></h2>
                            <p>Arrange elements easily with the edge positioning utilities. The format is
                                <code>{property}-{position}</code>.</p>
                            <p>Where <em>property</em> is one of:</p>
                            <ul class="un_order_list">
                                <li><code>top</code> - for the vertical <code>top</code> position</li>
                                <li><code>start</code> - for the horizontal <code>left</code> position (in LTR)</li>
                                <li><code>bottom</code> - for the vertical <code>bottom</code> position</li>
                                <li><code>end</code> - for the horizontal <code>right</code> position (in LTR)</li>
                            </ul>
                            <p>Where position is one of:</p>
                            <ul class="un_order_list">
                                <li><code>0</code> - for <code>0</code> edge position</li>
                                <li><code>50</code> - for <code>50%</code> edge position</li>
                                <li><code>100</code> - for <code>100%</code> edge position</li>
                            </ul>
                            <p>(You can add more position values by adding entries to the <code>$position-values</code>
                                Sass map variable.)</p>

                            <!-- code snippet -->
                            <div class="round p-3 code_bg">
                                <button class="btn btn-outline-primary float-end" id="copyButton2"
                                    onclick="copyToClipboard('copyText2', 'copyButton2')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText2"><code>&lt;div class=&quot;position-relative&quot;&gt;
  &lt;div class=&quot;position-absolute top-0 start-0&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-0 end-0&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-50 start-50&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute bottom-50 end-50&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute bottom-0 start-0&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute bottom-0 end-0&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>

                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-position-utils">
                                    <div class="position-relative">
                                        <div class="position-absolute top-0 start-0"></div>
                                        <div class="position-absolute top-0 end-0"></div>
                                        <div class="position-absolute top-50 start-50"></div>
                                        <div class="position-absolute bottom-50 end-50"></div>
                                        <div class="position-absolute bottom-0 start-0"></div>
                                        <div class="position-absolute bottom-0 end-0"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->

                            <h2>Center elements <a href="" id="Center-elements" class="opacity-0 hover-1">#</a></h2>
                            <p>In addition, you can also center the elements with the transform utility class
                                <code>.translate-middle</code>.</p>
                            <p>This class applies the transformations <code>translateX(-50%)</code> and
                                <code>translateY(-50%)</code> to the element which, in combination with the edge
                                positioning utilities, allows you to absolute center an element.</p>

                            <!-- code snippet -->
                            <div class="rounded p-3 code_bg">
                                <button class="btn btn-outline-primary float-end" id="copyButton3"
                                    onclick="copyToClipboard('copyText3', 'copyButton3')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText3"><code>&lt;div class=&quot;position-relative&quot;&gt;
  &lt;div class=&quot;position-absolute top-0 start-0 translate-middle&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-0 start-50 translate-middle&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-0 start-100 translate-middle&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-50 start-0 translate-middle&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-50 start-50 translate-middle&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-50 start-100 translate-middle&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-100 start-0 translate-middle&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-100 start-50 translate-middle&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-100 start-100 translate-middle&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="rounded p-4 code_bg mb-20">
                                <div class="bd-example bd-example-position-utils">
                                    <div class="position-relative">
                                        <div class="position-absolute top-0 start-0 translate-middle"></div>
                                        <div class="position-absolute top-0 start-50 translate-middle"></div>
                                        <div class="position-absolute top-0 start-100 translate-middle"></div>
                                        <div class="position-absolute top-50 start-0 translate-middle"></div>
                                        <div class="position-absolute top-50 start-50 translate-middle"></div>
                                        <div class="position-absolute top-50 start-100 translate-middle"></div>
                                        <div class="position-absolute top-100 start-0 translate-middle"></div>
                                        <div class="position-absolute top-100 start-50 translate-middle"></div>
                                        <div class="position-absolute top-100 start-100 translate-middle"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->
                            <p>By adding <code>.translate-middle-x</code> or <code>.translate-middle-y</code> classes,
                                elements can be positioned only in horizontal or vertical direction.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton4"
                                    onclick="copyToClipboard('copyText4', 'copyButton4')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText4"><code>&lt;div class=&quot;position-relative&quot;&gt;
  &lt;div class=&quot;position-absolute top-0 start-0&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-0 start-50 translate-middle-x&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-0 end-0&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-50 start-0 translate-middle-y&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-50 start-50 translate-middle&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute top-50 end-0 translate-middle-y&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute bottom-0 start-0&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute bottom-0 start-50 translate-middle-x&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;position-absolute bottom-0 end-0&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>

                            <!-- code -->
                            <div class="code_bg rounded p-4 mb-20">
                                <div class="bd-example bd-example-position-utils">
                                    <div class="position-relative">
                                        <div class="position-absolute top-0 start-0"></div>
                                        <div class="position-absolute top-0 start-50 translate-middle-x"></div>
                                        <div class="position-absolute top-0 end-0"></div>
                                        <div class="position-absolute top-50 start-0 translate-middle-y"></div>
                                        <div class="position-absolute top-50 start-50 translate-middle"></div>
                                        <div class="position-absolute top-50 end-0 translate-middle-y"></div>
                                        <div class="position-absolute bottom-0 start-0"></div>
                                        <div class="position-absolute bottom-0 start-50 translate-middle-x"></div>
                                        <div class="position-absolute bottom-0 end-0"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- code end -->

                            <h2>Examples <a href="" id="Examples" class="opacity-0 hover-1">#</a></h2>
                            <p>Here are some real life examples of these classes:</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton5"
                                    onclick="copyToClipboard('copyText5', 'copyButton5')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText5"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary position-relative&quot;&gt;
  Mails &lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary&quot;&gt;+99 &lt;span class=&quot;visually-hidden&quot;&gt;unread messages&lt;/span&gt;&lt;/span&gt;
&lt;/button&gt;

&lt;div class=&quot;position-relative py-2 px-4 text-bg-secondary border border-secondary rounded-pill&quot;&gt;
  Marker &lt;svg width=&quot;1em&quot; height=&quot;1em&quot; viewBox=&quot;0 0 16 16&quot; class=&quot;position-absolute top-100 start-50 translate-middle mt-1&quot; fill=&quot;var(--bs-secondary)&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;&lt;path d=&quot;M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z&quot;/&gt;&lt;/svg&gt;
&lt;/div&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-primary position-relative&quot;&gt;
  Alerts &lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2&quot;&gt;&lt;span class=&quot;visually-hidden&quot;&gt;unread messages&lt;/span&gt;&lt;/span&gt;
&lt;/button&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-position-examples d-flex justify-content-around">
                                    <button type="button" class="btn btn-primary position-relative">
                                        Mails <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+99
                                            <span class="visually-hidden">unread messages</span></span>
                                    </button>

                                    <button type="button"
                                        class="btn btn-dark position-relative rounded-pill opacity-50">
                                        Marker <svg width="1em" height="1em" viewBox="0 0 16 16"
                                            class="position-absolute top-100 start-50 translate-middle mt-1"
                                            fill="#212529" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z">
                                            </path>
                                        </svg>
                                    </button>

                                    <button type="button" class="btn btn-primary position-relative">
                                        Alerts <span
                                            class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span
                                                class="visually-hidden">unread messages</span></span>
                                    </button>
                                </div>
                            </div>
                            <!-- code end -->
                            <p>You can use these classes with existing components to create new ones. Remember that you
                                can extend its functionality by adding entries to the <code>$position-values</code>
                                variable.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton6"
                                    onclick="copyToClipboard('copyText6', 'copyButton6')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText6"><code>&lt;div class=&quot;position-relative m-4&quot;&gt;
  &lt;div class=&quot;progress&quot; style=&quot;height: 1px;&quot;&gt;
    &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; aria-label=&quot;Progress&quot; style=&quot;width: 50%;&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;button type=&quot;button&quot; class=&quot;position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill&quot; style=&quot;width: 2rem; height:2rem;&quot;&gt;1&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill&quot; style=&quot;width: 2rem; height:2rem;&quot;&gt;2&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill&quot; style=&quot;width: 2rem; height:2rem;&quot;&gt;3&lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h5 class="result m-0">RESULT</h5>
                            <!-- code -->
                            <div class="code_bg rounded p-3 mb-20">
                                <div class="bd-example bd-example-position-examples">
                                    <div class="position-relative m-4">
                                        <div class="progress" style="height: 1px;">
                                            <div class="progress-bar" role="progressbar" aria-label="Progress"
                                                style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <button type="button"
                                            class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill">1</button>
                                        <button type="button"
                                            class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill">2</button>
                                        <button type="button"
                                            class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill">3</button>
                                    </div>
                                </div>
                            </div>
                            <!-- code end-->

                            <h2 class="mb-20">Sass <a href="" id="Sass" class="opacity-0 hover-1">#</a></h2>
                            <h3>Maps <a href="" id="Maps" class="opacity-0 hover-1">#</a></h3>
                            <p>Default position utility values are declared in a Sass map, then used to generate our
                                utilities.</p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3 mb-20">
                                <button class="btn btn-outline-primary float-end" id="copyButton7"
                                    onclick="copyToClipboard('copyText7', 'copyButton7')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText7"><code>$position-values: (
  0: 0,
  50: 50%,
  100: 100%
);</code></pre>
                            </div>
                            <!-- code snippet end -->
                            <h2>Utilities API <a href="" id="Utilities-API" class="opacity-0 hover-1">#</a></h2>
                            <p>Position utilities are declared in our utilities API in
                                <code>scss/_utilities.scss</code>. <a href="/utilities/api.php/#Using-the-API">Learn how
                                    to use the utilities API.</a></p>

                            <!-- code snippet -->
                            <div class="code_bg rounded p-3">
                                <button class="btn btn-outline-primary float-end" id="copyButton8"
                                    onclick="copyToClipboard('copyText8', 'copyButton8')">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <pre id="copyText8"><code>"position": (
      property: position,
      values: static relative absolute fixed sticky
    ),
    "top": (
      property: top,
      values: $position-values
    ),
    "bottom": (
      property: bottom,
      values: $position-values
    ),
    "start": (
      property: left,
      class: start,
      values: $position-values
    ),
    "end": (
      property: right,
      class: end,
      values: $position-values
    ),
    "translate-middle": (
      property: transform,
      class: translate-middle,
      values: (
        null: translate(-50%, -50%),
        x: translateX(-50%),
        y: translateY(-50%),
      )
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
                                        <a href="#Position-values">Position values</a>
                                    </li>
                                    <li>
                                        <a href="#Arrange-elements">Arrange elements</a>
                                    </li>
                                    <li>
                                        <a href="#Center-elements">Center elements</a>
                                    </li>
                                    <li>
                                        <a href="#Examples">Examples</a>
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
                            <a class="page-link border-0" href="/utilities/overflow.php">
                                <span>Previous</span>
                                <strong class="d-block">« Overflow</strong>
                            </a>
                            <a class="page-link border-0 float-end" href="/utilities/shadows.php">
                                <span class="text-end">Next</span>
                                <strong class="d-block">Shadows »</strong>
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