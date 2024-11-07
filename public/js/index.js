let slideIndex = 0;

// Function to show the current slide
function showSlide(index) {
  const slides = document.querySelector('.slides');
  const dots = document.querySelectorAll('.dot');

  // Reset slide index if out of bounds
  slideIndex = index < 0 ? dots.length - 1 : index % dots.length;

  // Update transform to show the active slide
  slides.style.transform = `translateX(-${slideIndex * 100}%)`;

  // Update active dot
  dots.forEach(dot => dot.classList.remove('active'));
  dots[slideIndex].classList.add('active');
}

// Function to change slides automatically
function autoSlide() {
  showSlide(slideIndex + 1);
  setTimeout(autoSlide, 3000); // Change slide every 3 seconds
}

// Initialize carousel on page load
autoSlide();

// Manual control to set a specific slide
function currentSlide(index) {
  showSlide(index);
}
