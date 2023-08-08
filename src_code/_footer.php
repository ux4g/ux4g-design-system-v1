
<!-- <div class="copy-write text-center ">
    <p class="m-0">© 2022 - Copyright UX4G. All rights reserved. Powered by NeGD | MeitY Government of India®2022 UX4G</p>
</div> -->
<!-- JS here -->
<script src="https://img1.digitallocker.gov.in/nad/v-22/assets/js/jquery.min.js"></script>
<script src="https://img1.digitallocker.gov.in/ux4g/UX4G@1.0.0-beta1/js/ux4g.bundle.min.js"></script>

<!-- font increase js -->
<script>

var $affectedElements = $("li, p, h1, h2, h3, h4, h5, h6"); // Can be extended, ex. $("div, p, span.someClass")

// Storing the original size in a data attribute so size can be reset
$affectedElements.each( function(){
  var $this = $(this);
  $this.data("orig-size", $this.css("font-size") );
});

$("#btn-increase").click(function(){
  changeFontSize(1);
})

$("#btn-decrease").click(function(){
  changeFontSize(-1);
})

$("#btn-orig").click(function(){
  $affectedElements.each( function(){
        var $this = $(this);
        $this.css( "font-size" , $this.data("orig-size") );
   });
})

function changeFontSize(direction){
    $affectedElements.each( function(){
        var $this = $(this);
        $this.css( "font-size" , parseInt($this.css("font-size"))+direction );
    });
}
</script>


<!-- toggle left menu -->
<script>

$(document).ready(function () {

    $(".slidingDiv").hide();
    $(".left_menu_show_hide").show();

    $('.left_menu_show_hide').click(function () {
        $(".slidingDiv").toggle("slide");
    });

});
</script>
<!-- toggle left menu end -->


<!-- onscroll select tab js -->
<script>
    $(window).scroll(function() {
		var windscroll = $(window).scrollTop();
		if (windscroll >= 100) {
			$('h2, h3').each(function(i) {
        // The number at the end of the next line is how pany pixels you from the top you want it to activate.
				if ($(this).position().top <= windscroll - 0) {
					$('.right_side li.active').removeClass('active');
					$('.right_side li').eq(i).addClass('active');
				}
			});

		} else {

			$('.right_side li.active').removeClass('active');
			$('.right_side li:first').addClass('active');
		}

		}).scroll();

</script>
<!-- onscroll select tab js end -->


<!-- header navigation active class add remove -->
<script>
// Retrieve the current URL
var currentUrl = window.location.href;

// Get the menu items
var menuItems = document.querySelectorAll(".navbar .nav-item");

// Loop through the menu items
for (var i = 0; i < menuItems.length; i++) {
  var menuItem = menuItems[i];
  
  // Get the link within the menu item
  var link = menuItem.querySelector(".nav-link");
  
  // Check if the link URL matches the current URL
  if (link.href === currentUrl) {
    // Add the "active" class to the matching menu item
    menuItem.classList.add("active");
    
    // Store the active menu item in session storage
    sessionStorage.setItem("activeItem", currentUrl);
  } else {
    // Remove the "active" class from other menu items
    menuItem.classList.remove("active");
  }
}

// Clear the stored active menu item from session storage if it doesn't match the current URL
if (storedActiveItem && storedActiveItem !== currentUrl) {
  localStorage.removeItem("activeItem");
}

</script>

<!-- light dark mode js -->
<script>
const checkbox = document.getElementById("checkbox");
// Check if there is a stored value in local storage
const isDarkMode = localStorage.getItem("darkMode") === "true";

// Set the initial state of the checkbox based on the stored value
checkbox.checked = isDarkMode;

// Function to toggle the dark mode and store the state in local storage
const toggleDarkMode = () => {
  const isDarkMode = checkbox.checked;
  document.body.classList.toggle("dark", isDarkMode);
  localStorage.setItem("darkMode", isDarkMode);
};

// Add event listener to the checkbox
checkbox.addEventListener("change", toggleDarkMode);

// Toggle the dark mode initially
toggleDarkMode();
</script>

<!-- sidebar menu for active item -->
<script>
const dropdownItems = document.querySelectorAll('.dropdown-item');

// Function to set the active dropdown item and store its state in local storage
const setActiveDropdownItem = (itemId) => {
  dropdownItems.forEach(item => {
    if (item.id === itemId) {
      item.classList.add('active');
    } else {
      item.classList.remove('active');
    }
  });
  localStorage.setItem('activeDropdownItem', itemId);
};

// Function to handle the dropdown item click event
const handleDropdownItemClick = (event) => {
  const itemId = event.target.id;
  setActiveDropdownItem(itemId);
};


// Function to set the initial active dropdown item on page load
const setInitialActiveDropdownItem = () => {
  const activeDropdownItem = localStorage.getItem('activeDropdownItem');
  if (activeDropdownItem) {
    setActiveDropdownItem(activeDropdownItem);
  } else {
    // If no active item is stored, check the current URL for a matching dropdown item
    const currentUrl = window.location.href;
    dropdownItems.forEach(item => {
      if (item.href === currentUrl) {
        setActiveDropdownItem(item.id);
      }
    });
  }
};

// Call the function to set the initial active dropdown item on page load
setInitialActiveDropdownItem();

// Remove the "active" class from dropdown items that do not match the current URL
dropdownItems.forEach(item => {
  if (item.href !== window.location.href) {
    item.classList.remove('active');
  }
});
</script>

<!-- Copy text and code -->
<script>
      function copyToClipboard(copyTextId, copyButtonId) {
            /* Get the text from the element with the specified ID */
            var copyText = document.getElementById(copyTextId);
            /* Create a temporary input element */
            var tempInput = document.createElement("input");

            /* Set the value of the temporary input element to the text */
            tempInput.value = copyText.textContent;

            /* Append the temporary input element to the document */
            document.body.appendChild(tempInput);

            /* Select the text inside the temporary input element */
            tempInput.select();
            tempInput.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the selected text to the clipboard */
           document.execCommand("copy");

            /* Remove the temporary input element */
            document.body.removeChild(tempInput);

            /* Change the button text to "Copied!" */
            var copyButton = document.getElementById(copyButtonId);
            copyButton.innerHTML = '<i class="fas fa-check"></i>';

            /* Disable the button temporarily */
            copyButton.disabled = true;

            /* Revert the button text and re-enable it after a delay */
            setTimeout(function () {
                copyButton.innerHTML = '<i class="fa fa-copy"></i>';
                copyButton.disabled = false;
            }, 3000); /* Change the delay time (in milliseconds) as needed */
        }
</script>

<!-- code snippets colors tag js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script>
<script>hljs.highlightAll();</script>

<!-- search component and docs -->
<?php
include '_search-docs.php';
?>
</body>

</html>