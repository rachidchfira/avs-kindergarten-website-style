/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens.
 */
;(() => {
  const menuToggle = document.querySelector(".menu-toggle")
  const mobileMenu = document.querySelector(".mobile-menu")

  if (menuToggle && mobileMenu) {
    menuToggle.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden")
    })
  }

  // Close the mobile menu when clicking outside
  document.addEventListener("click", (event) => {
    if (mobileMenu && !mobileMenu.contains(event.target) && !menuToggle.contains(event.target)) {
      mobileMenu.classList.add("hidden")
    }
  })
})()
