// Get the button and popup elements
const bookNowBtn = document.getElementById('bookNowBtn');
const popup = document.getElementById('popup');
const agreeCheckbox = document.getElementById('agreeCheckbox');
const continueBtn = document.getElementById('continueBtn');

// Function to open the popup when the button is clicked
bookNowBtn.addEventListener('click', () => {
  popup.style.display = 'block';
});

// Function to close the popup when the close button is clicked
function closePopup() {
  popup.style.display = 'none';
}

// Function to handle checkbox change event
agreeCheckbox.addEventListener('change', () => {
  // Enable continue button if checkbox is checked, disable it otherwise
  continueBtn.disabled = !agreeCheckbox.checked;
});

// Function to handle continue button click event
continueBtn.addEventListener('click', () => {
  // Redirect to a new page
  window.location.href = 'rent.html'; // Replace 'newpage.html' with the URL of the new page
});
