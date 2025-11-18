function fadeTo(url) {
  // Fade out current page, then navigate
  document.body.classList.add("fade-out");
  setTimeout(() => {
    window.location.href = url;
  }, 800); // matches CSS transition time
}

// Fade in when page loads
window.addEventListener("DOMContentLoaded", () => {
  document.body.classList.add("fade-in");
});