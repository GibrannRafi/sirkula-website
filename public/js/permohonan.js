const submitButton = document.querySelector('.submit-button');
const popup = document.getElementById('popup');


function showPopup() {
    popup.style.display = 'flex';
}


function closePopup() {
    popup.style.display = 'none';
}


submitButton.addEventListener('click', function(event) {
    event.preventDefault();
    showPopup();
});
