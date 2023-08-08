<?php
$title = 'UX4G | Utilities';
$canonical = 'https://doc.ux4g.gov.in/layout/utilities.php';

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
                                    href="/category/layout.php">Layout</a></li>
                            <li class="breadcrumb-item active" aria-current="page">utilities</li>
                        </ol>
                    </nav>

                    <!-- body content -->
                    <div class="row">                                            
                        <div class="col-sm-9">
                            <h1 class="mb-30"> Utilities</h1>
                            <h2>Changing <code  style="font-size: 2rem;"> display </code> <a href="" id="Changing-display" class="opacity-0 hover-1">#</a></h2>
                            <p>
                            For responsively switching between common values of the <a href="/utilities/display.php"> display property</a>, use the display utilities. To show or hide components across different viewports, use it with the grid system, content, or other elements.
                            </p>
                        </div>                                                                
                    </div>
                    <!-- product -->
                    <section class="product  pt-50 pb-50 pl-15 pr-15">
                    <div class="row">
                                            
                                            <div class="col-sm-9">
                                                    <div class="body_content">
    <h2 class="mt-20 mb-20">Flexbox options <a href="" id="Flexbox-options" class="opacity-0 hover-1">#</a></h2>
    <p>
    Flexbox is used to build UX4G, but not every element's display was changed to <code>display: flex</code> because doing so would add a lot of extra overrides and unintentionally alter important browser behavior. The majority of the components were created with <code>Flexbox</code> support.
    </p>

    <p>When adding <code>display: flex</code> to an element, use <code>.d-flex</code> or one of the responsive alternatives (like <code>.d-sm-flex</code>). If you want to use our additional flexbox utilities for sizing, alignment, spacing, and other things, you'll need this class or display value.</p>

    <h2>Margin and padding <a href="" id="Margin-and-padding" class="opacity-0 hover-1">#</a></h2>
    <p>To adjust how items and components are spaced and scaled, use the <code>margin</code> and <code>padding</code> spacing functions. Based on a 1rem value default $spacer variable, UX4G contains a six-level scale for spacing utilities. Choose settings that apply to all viewports (such as .me-3 for margin-right: 1rem in LTR) or responsive variations that target particular viewports (such as .me-md-3 for margin-right: 1rem —in LTR— starting at the md breakpoint).</p>
    
    <h2 class="mt-20 mb-20">Toggle <code  style="font-size: 0.875em;"> visibility</code> <a href="" id="Toggle-visibility" class="opacity-0 hover-1">#</a></h2>
    <p>When toggling <code >display</code> isn't needed, you can toggle the <code >visibility</code> of an element with our <a href="/utilities/spacing.php">visibility utilities</a>. Invisible elements will still affect the layout of the page, but are visually hidden from visitors.</p>
    
    
    
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 d-none d-sm-block d-md-none d-lg-block">
                                                    <div class="right_side">
                                                        <ul class="p-0">
                                                            <li><a href="#Changing-display">Changing <code > display</code></a></li>                                                        
                                                            <li><a href="#Flexbox-options">Flexbox options</a></li>                                                        
                                                            <li><a href="#Margin-and-padding">Margin and padding</a></li>                                                        
                                                            <li><a href="#Toggle-visibility">Toggle <code >visibility </code></a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- row end -->
                    </section>
                    <!-- pagination -->
            <div class="col-12 col-sm-9">
            <ul class="pagination pagination_custom justify-content-between">
                    <a class="page-link border-0" href="/layout/gutters.php">
                        <span>Previous</span>
                        <strong class="d-block">« Gutters</strong>
                    </a>
                    <a class="page-link border-0 float-end" href="/layout/z-index.php">
                        <span class="text-end">Next</span>
                        <strong class="d-block">Z-Index »</strong>
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
