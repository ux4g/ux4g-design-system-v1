<?php
$title = 'UX4G | Columns';
$canonical = 'https://doc.ux4g.gov.in/layout/columns.php';

include '../_header.php';

?>
    <main>
        <div class="body_raper_content pl-20 pr-20" style="min-height:600px">
            <div class="container">

                <div class="col-lg-12 col-sm-12 mt-80">
                    <h1>UX4g grid examples</h1>
                    <p class="lighttext">Basic grid layouts to get you familiar with building within the Bootstrap
                        grid
                        system.</p>
                    <p>In these examples the <code>.themed-grid-col</code> class is added to the columns to add some
                        theming. This is
                        not a class that is available in Bootstrap by default.</p>

                    <h3>Five grid tiers </h3>
                    <p>
                        There are five tiers to the Bootstrap grid system, one for each range of devices we support.
                        Each tier starts at a minimum viewport size and automatically applies to the larger devices
                        unless overridden.
                    </p>

                    <div class="row mb-3 text-center">
                        <div class="col-4 ux4g-themed-grid-col">.col-4</div>
                        <div class="col-4 ux4g-themed-grid-col">.col-4</div>
                        <div class="col-4 ux4g-themed-grid-col">.col-4</div>
                    </div>
                    <div class="row mb-3 text-center">
                        <div class="col-sm-4 ux4g-themed-grid-col">.col-sm-4</div>
                        <div class="col-sm-4 ux4g-themed-grid-col">.col-sm-4</div>
                        <div class="col-sm-4 ux4g-themed-grid-col">.col-sm-4</div>
                    </div>
                    <div class="row mb-3 text-center">
                        <div class="col-md-4 ux4g-themed-grid-col">.col-md-4</div>
                        <div class="col-md-4 ux4g-themed-grid-col">.col-md-4</div>
                        <div class="col-md-4 ux4g-themed-grid-col">.col-md-4</div>
                    </div>
                    <div class="row mb-3 text-center">
                        <div class="col-lg-4 ux4g-themed-grid-col">.col-lg-4</div>
                        <div class="col-lg-4 ux4g-themed-grid-col">.col-lg-4</div>
                        <div class="col-lg-4 ux4g-themed-grid-col">.col-lg-4</div>
                    </div>
                    <div class="row mb-3 text-center">
                        <div class="col-xl-4 ux4g-themed-grid-col">.col-xl-4</div>
                        <div class="col-xl-4 ux4g-themed-grid-col">.col-xl-4</div>
                        <div class="col-xl-4 ux4g-themed-grid-col">.col-xl-4</div>
                    </div>
                    <div class="row mb-3 text-center">
                        <div class="col-xxl-4 ux4g-themed-grid-col">.col-xxl-4</div>
                        <div class="col-xxl-4 ux4g-themed-grid-col">.col-xxl-4</div>
                        <div class="col-xxl-4 ux4g-themed-grid-col">.col-xxl-4</div>
                    </div>
                    <h3>Three equal columns</h3>
                    <p>Get three equal-width columns starting at desktops and scaling to large desktops. On mobile
                        devices,
                        tablets and below, the columns will automatically stack.

                    </p>
                    <div class="row mb-3 text-center">
                        <div class="col-md-4 ux4g-themed-grid-col">.col-md-4</div>
                        <div class="col-md-4 ux4g-themed-grid-col">.col-md-4</div>
                        <div class="col-md-4 ux4g-themed-grid-col">.col-md-4</div>
                    </div>

                    <h3>Three equal columns alternative</h3>
                    <p>By using the <code>.row-cols-*</code> classes, you can easily create a grid with equal columns.
                    </p>

                    <div class="row row-cols-md-3 mb-3 text-center">
                        <div class="col ux4g-themed-grid-col"><code>.col</code> child of <code>.row-cols-md-3</code>
                        </div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> child of <code>.row-cols-md-3</code>
                        </div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> child of <code>.row-cols-md-3</code>
                        </div>
                    </div>

                    <h3>
                        Three unequal columns
                    </h3>
                    <p>Get three columns <code>starting at desktops and scaling to large desktops</code> of various
                        widths.
                        Remember, grid columns should add up to twelve for a single horizontal block. More than that,
                        and
                        columns start stacking no matter the viewport.</p>
                    <div class="row mb-3 text-center">
                        <div class="col-md-3 ux4g-themed-grid-col">.col-md-3</div>
                        <div class="col-md-6 ux4g-themed-grid-col">.col-md-6</div>
                        <div class="col-md-3 ux4g-themed-grid-col">.col-md-3</div>
                    </div>
                    <h3>Two columns</h3>
                    <p>Get two columns starting at desktops and scaling to large desktops.</p>
                    <div class="row mb-3 text-center">
                        <div class="col-md-8 ux4g-themed-grid-col">.col-md-8</div>
                        <div class="col-md-4 ux4g-themed-grid-col">.col-md-4</div>
                    </div>
                    <h3>Full width, single column</h3>
                    <p class="text-warning">No grid classes are necessary for full-width elements.</p>
                    <hr>
                    <h3>Two columns with two nested columns</h3>
                    <p>Per the documentation, nesting is easy—just put a row of columns within an existing column. This
                        gives you two columns <strong>starting at desktops and scaling to large desktops</strong>, with
                        another two
                        (equal
                        widths) within the larger column.</p>

                    <p>At mobile device sizes, tablets and down, these columns and their nested columns will stack.</p>
                    <div class="row mb-3 text-center">
                        <div class="col-md-8 ux4g-themed-grid-col">
                            <div class="pb-3">
                                .col-md-8
                            </div>
                            <div class="row">
                                <div class="col-md-6 ux4g-themed-grid-col">.col-md-6</div>
                                <div class="col-md-6 ux4g-themed-grid-col">.col-md-6</div>
                            </div>
                        </div>
                        <div class="col-md-4 ux4g-themed-grid-col">.col-md-4</div>
                    </div>
                    <hr>
                    <h3>Mixed: mobile and desktop</h3>
                    <p>The Bootstrap v5 grid system has six tiers of classes: xs (extra small, this class infix is not
                        used), sm (small), md (medium), lg (large), xl (x-large), and xxl (xx-large). You can use nearly
                        any
                        combination of these classes to create more dynamic and flexible layouts.</p>
                    <p>Each tier of classes scales up, meaning if you plan on setting the same widths for md, lg, xl and
                        xxl, you only need to specify md.</p>

                    <div class="row mb-3 text-center">
                        <div class="col-md-8 ux4g-themed-grid-col">.col-md-8</div>
                        <div class="col-6 col-md-4 ux4g-themed-grid-col">.col-6 .col-md-4</div>
                    </div>
                    <hr>
                    <h3>Mixed: mobile, tablet, and desktop</h3>
                    <div class="row mb-3 text-center">
                        <div class="col-sm-6 col-lg-8 ux4g-themed-grid-col">.col-sm-6 .col-lg-8</div>
                        <div class="col-6 col-lg-4 ux4g-themed-grid-col">.col-6 .col-lg-4</div>
                    </div>
                    <div class="row mb-3 text-center">
                        <div class="col-6 col-sm-4 ux4g-themed-grid-col">.col-6 .col-sm-4</div>
                        <div class="col-6 col-sm-4 ux4g-themed-grid-col">.col-6 .col-sm-4</div>
                        <div class="col-6 col-sm-4 ux4g-themed-grid-col">.col-6 .col-sm-4</div>
                    </div>
                    <hr>
                    <h3>Gutters</h3>
                    <p>With <code>.gx-*</code> classes, the horizontal gutters can be adjusted.</p>
                    <div class="row row-cols-1 row-cols-md-3 gx-4 text-center">
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
                    </div>
                    <p>Use the <code>.gy-*</code> classes to control the vertical gutters.</p>
                    <div class="row row-cols-1 row-cols-md-3 gy-4 text-center">
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
                    </div>
                    <p>With <code>.g-*</code> classes, the gutters in both directions can be adjusted.</p>
                    <div class="row row-cols-1 row-cols-md-3 g-3 text-center">
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
                        <div class="col ux4g-themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
                    </div>
                    <hr>

                    <h3>Containers</h3>
                    <p>Additional classes added in Bootstrap v4.4 allow containers that are 100% wide until a
                        particular
                        breakpoint. v5 adds a new <code>xxl</code> breakpoint.</p>
                </div>
                <div class="container ux4g-themed-container text-center">.container</div>
                <div class="container-sm ux4g-themed-container text-center">.container-sm</div>
                <div class="container-md ux4g-themed-container text-center">.container-md</div>
                <div class="container-lg ux4g-themed-container text-center">.container-lg</div>
                <div class="container-xl ux4g-themed-container text-center">.container-xl</div>
                <div class="container-xxl ux4g-themed-container text-center">.container-xxl</div>
            </div>
            
            
            
        </div>
        <div class="container-fluid ux4g-themed-container text-center">.container-fluid</div>


        </div>



        </div>
    </main>
    <?php
   include '../_footer.php';
    ?>