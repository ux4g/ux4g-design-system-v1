<!-- search Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Search docs</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- page search result -->
<div class="position-relative">
<input class="search_global form-control me-2 bg-white" type="text" id="searchInput" placeholder="Search..." style="padding-right: 36px;">
<i class="fa fa-search" style="position: absolute; right: 10px; top: 15px;"></i>
<ul id="searchResults" class="search_results"></ul>
</div>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<!-- search modal end -->
<!-- page search result js-->
<script>
const searchInput = document.getElementById('searchInput');
const searchResults = document.getElementById('searchResults');

// Simulated data for demonstration
const data = [
// Getting Started data
{ name: 'Getting started', link: '/category/getting-started.php' },
{ name: 'Get started with UX4G', link: '/index.php' },
{ name: 'Download', link: '/introduction/download.php' },
{ name: 'Contents', link: '/introduction/content.php' },

// Content data
{ name: 'Content', link: '/category/content.php' },
{ name: 'Figures', link: '/content/figures.php' },
{ name: 'Images', link: '/content/images.php' },
{ name: 'Reboot', link: '/content/reboot.php' },
{ name: 'Tables', link: '/content/tables.php' },
{ name: 'Typography', link: '/content/typography.php' },

// Layout data
{ name: 'Layout', link: '/category/layout.php' },
{ name: 'Breakpoints', link: '/layout/breakpoints.php' },
{ name: 'Columns', link: '/layout/columns.php' },
{ name: 'Containers', link: '/layout/containers.php' },
{ name: 'CSS grid', link: '/layout/css-grid.php' },
{ name: 'Grid', link: '/layout/grid.php' },
{ name: 'Gutters', link: '/layout/gutters.php' },
{ name: 'Layout utilities', link: '/layout/utilities.php' },
{ name: 'Z-Index', link: '/layout/z-index.php' },

// Forms data
{ name: 'Forms', link: '/category/forms.php' },
{ name: 'Form control', link: '/forms/form-control.php' },
{ name: 'Floating labels', link: '/forms/floating-labels.php' },
{ name: 'Checks & radios', link: '/forms/checks-and-radios.php' },
{ name: 'Input group', link: '/forms/input-group.php' },
{ name: 'Layout', link: '/forms/layout.php' },
{ name: 'Overview', link: '/forms/overview.php' },
{ name: 'Range', link: '/forms/range.php' },
{ name: 'Select', link: '/forms/select.php' },

// Helpers data
{ name: 'Helpers', link: '/category/helpers.php' },
{ name: 'Clearfix', link: '/helpers/clearfix.php' },
{ name: 'Color & background', link: '/helpers/color-background.php' },
{ name: 'Coloured links', link: '/helpers/coloured-links.php' },
{ name: 'Position', link: '/helpers/position.php' },
{ name: 'Ratio', link: '/helpers/ratio.php' },
{ name: 'Stacks', link: '/helpers/stacks.php' },
{ name: 'Stretched links', link: '/helpers/stretched-links.php' },
{ name: 'Text truncation', link: '/helpers/text-truncation.php' },
{ name: 'Vertical rule', link: '/helpers/vertical-rule.php' },
{ name: 'Visually hidden', link: '/helpers/visually-hidden.php' },

// Utilities data
{ name: 'Utilities', link: '/category/utilities.php' },
{ name: 'API', link: '/utilities/api.php' },
{ name: 'Background', link: '/utilities/background.php' },
{ name: 'Borders', link: '/utilities/borders.php' },
{ name: 'Colors', link: '/utilities/colors.php' },
{ name: 'Display property', link: '/utilities/display.php' },
{ name: 'Display', link: '/utilities/display.php' },
{ name: 'Flex', link: '/utilities/flex.php' },
{ name: 'Float', link: '/utilities/float.php' },
{ name: 'Interactions', link: '/utilities/interactions.php' },
{ name: 'Opacity', link: '/utilities/opacity.php' },
{ name: 'Overflow', link: '/utilities/overflow.php' },
{ name: 'Position', link: '/utilities/position.php' },
{ name: 'Shadows', link: '/utilities/shadows.php' },
{ name: 'Sizing', link: '/utilities/sizing.php' },
{ name: 'Spacing', link: '/utilities/spacing.php' },
{ name: 'Text', link: '/utilities/text.php' },
{ name: 'Vertical align', link: '/utilities/vertical-align.php' },
{ name: 'Visibility', link: '/utilities/visibility.php' },

// components data
  { name: 'Components', link: '/category/components.php' },
  { name: 'Accordion', link: '/components/accordion.php' },
  { name: 'Alerts', link: '/components/alerts.php' },
  { name: 'Badge', link: '/components/badge.php' },
  { name: 'Breadcrumb', link: '/components/breadcrumb.php' },
  { name: 'Button group', link: '/components/button-group.php' },
  { name: 'Buttons', link: '/components/buttons.php' },
  { name: 'Card', link: '/components/card.php' },
  { name: 'Carousel', link: '/components/carousel.php' },
  { name: 'Close button', link: '/components/close-button.php' },
  { name: 'Collapse', link: '/components/collapse.php' },
  { name: 'Dropdowns', link: '/components/dropdowns.php' },
  { name: 'List groups', link: '/components/list-groups.php' },
  { name: 'Modal', link: '/components/modal.php' },
  { name: 'Navbar', link: '/components/navbar.php' },
  { name: 'Navs and tabs', link: '/components/navs-and-tabs.php' },
  { name: 'Offcanvas', link: '/components/offcanvas.php' },
  { name: 'Pagination', link: '/components/pagination.php' },
  { name: 'Placeholders', link: '/components/placeholders.php' },
  { name: 'Popovers', link: '/components/popovers.php' },
  { name: 'Progress', link: '/components/progress.php' },
  { name: 'Scrollspy', link: '/components/scrollspy.php' },
  { name: 'Spinners', link: '/components/spinners.php' },
  { name: 'Toasts', link: '/components/toasts.php' },
  { name: 'Tooltips', link: '/components/tooltips.php' },
];

searchInput.addEventListener('input', function () {
  const searchQuery = searchInput.value.toLowerCase();
  const matchedResults = data.filter(function (item) {
    return item.name.toLowerCase().includes(searchQuery);
  });

  // Display or hide the autocomplete list based on matched results
  if (searchQuery && matchedResults.length > 0) {
    displayResults(matchedResults);
  } else {
    hideResults();
  }
});

function displayResults(results) {
  // Clear previous results
  searchResults.innerHTML = '';

  // Create list items for each result
  results.forEach(function (item) {
    const li = document.createElement('li');
    li.textContent = item.name;
    li.addEventListener('click', function () {
      searchInput.value = item.name;
      window.location.href = item.link; // Navigate to the selected page
    });
    searchResults.appendChild(li);
  });

  // Show the autocomplete list
  searchResults.style.display = 'block';
}

function hideResults() {
  // Hide the autocomplete list
  searchResults.style.display = 'none';
}

</script>