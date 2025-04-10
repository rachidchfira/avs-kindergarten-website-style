/**
 * File language-switcher.js.
 *
 * Handles language switching functionality.
 */
;(($) => {
  $(document).ready(() => {
    // If using Polylang plugin, this will handle the language switching
    $(".language-switcher a").on("click", function (e) {
      e.preventDefault()

      const lang = $(this).attr("lang")
      const url = $(this).attr("href")

      // Store the language preference in a cookie
      document.cookie = `pll_language=${lang}; path=/; max-age=31536000`

      // Redirect to the translated page
      window.location.href = url
    })
  })
})(jQuery)
