<?php
$title = 'UX4G | Helpers';
$canonical = 'https://doc.ux4g.gov.in/category/helpers.php';

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
            <div class="body_raper_content">
                <div class="pl-10 pr-10">
                    <!-- breadcrumb -->
                    <nav class="mb-30 mt-50" style="--bs-breadcrumb-divider: url(/assets/img/icon/chevron.svg)"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">
                                    <i class="fa fa-home"></i>
                                </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Helpers</li>
                        </ol>
                    </nav>
                    <h1 class="mb-30">Helpers</h1>
                </div>
                <!-- body content -->

                <!-- product -->
                <section class="product  pt-50 pb-50">
                    <div class="container-fluid">
                    <div class="row">
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130"
                                    href="/helpers/clearfix.php">
                                    <h5 class="text-truncate " title="Accordion"><i class="fa fa-file-code"></i> Clearfix</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Quickly and easily clear floated content within a container by adding a clearfix utility.</p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130"
                                    href="/helpers/color-background.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Color & Background</h5>

                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin">
                                        Set a background color with contrasting foreground color.</p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/helpers/coloured-links.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Coloured Links</h5>

                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin">
                                        Colored links with hover states
                                    </p>
                                </a>
                            </div>

                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/helpers/position.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Position</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Use these helpers for quickly configuring the position of an element.
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/helpers/ratio.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Ratio</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Use generated pseudo elements to make an element maintain the aspect ratio of your choosing. Perfect for responsively handling video or slideshow embeds based on the width of the parent.
                                    </p>
                                </a>
                            </div>
                            <!-- <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card" href="/forms/overview.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Overview</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Overview
                                    </p>
                                </a>
                            </div> -->
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/helpers/stacks.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Stacks</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Shorthand helpers that build on top of our flexbox utilities to make component layout faster and easier than ever.
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/helpers/stretched-links.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Stretched Links</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Add .stretched-link to a link to make its containing block clickable via a : relative; that contains a link with the .stretched-link class is clickable. Please note given how CSS position works, .stretched-link cannot be mixed with most table elements.
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/helpers/text-truncation.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Text Truncation</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        For longer content, you can add a .text-truncate class to truncate the text with an ellipsis. Requires display block.
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/helpers/vertical-rule.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Vertical Rule</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Use the custom vertical rule helper to create vertical dividers like the element.
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="shadow  mb-25 p-3 card min_hight130" href="/helpers/visually-hidden.php">
                                    <h5 class="text-truncate " title="Alerts"><i class="fa fa-file-code"></i> Visually Hidden</h5>
                                    <p class="fs-12 text-truncate "
                                        title="Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.">
                                        Visually hide an element while still allowing it to be exposed to assistive technologies (such as screen readers) with .visually-hidden. Use .visually-hidden-focusable to visually hide an element by default, but to display it when it's focused (e.g. by a keyboard-only user). .visually-hidden-focusable can also be applied to a container–thanks to :focus-within, the container will be displayed when any child element of the container receives focus.
                                    </p>
                                </a>
                            </div>

                        </div>
                    </div>

                </section>
                <!-- pagination -->
<div class="col-12 col-sm-12">
            <ul class="pagination pagination_custom justify-content-end">
                    <!-- <a class="page-link border-0" href="/about/license.php">
                        <span>Previous</span>
                        <strong class="d-block">« License</strong>
                    </a> -->
                    <a class="page-link border-0 float-end" href="/helpers/clearfix.php">
                        <span class="text-end">Next</span>
                        <strong class="d-block">Clearfix »</strong>
                    </a>
                       
                </ul>
                </div>
            <!-- pagination end -->
            </div>
        </div>

    </div>
</main>






<!-- reach us form -->


<?php
   include '../_footer.php';
    ?>