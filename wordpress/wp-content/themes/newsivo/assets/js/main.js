/*  =========================
    Mobile Navigation
========================= */

const menuToggle = document.querySelector("#menu-toggle");
const mainNavigation = document.querySelector("#main-navigation");
const menuIcon = document.querySelector("#menu-icon");

if (menuToggle && mainNavigation) {
  menuToggle.addEventListener("click", () => {
    const isExpanded = menuToggle.getAttribute("aria-expanded") === "true";

    menuToggle.setAttribute("aria-expanded", String(!isExpanded));

    mainNavigation.classList.toggle("active");

    if (menuIcon) {
      menuIcon.textContent = isExpanded ? "☰" : "✕";
    }
  });

  // Close the menu after selecting a navigation link.
  mainNavigation.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      mainNavigation.classList.remove("active");

      menuToggle.setAttribute("aria-expanded", "false");

      if (menuIcon) {
        menuIcon.textContent = "☰";
      }
    });
  });
}

/*  =========================
    Active Navigation Link
========================= */

const currentPath = window.location.pathname;

document.querySelectorAll(".main-navigation a").forEach((link) => {
  const linkPath = new URL(link.href).pathname;

  if (linkPath === currentPath) {
    link.classList.add("active");
    link.setAttribute("aria-current", "page");
  }
});

/*  =========================
    News Ticker
========================= */

const tickerTrack = document.querySelector(".ticker-track");

if (tickerTrack) {
  const originalSequence = tickerTrack.querySelector(".ticker-sequence");

  if (originalSequence) {
    // Duplicate the original headlines
    const clonedSequence = originalSequence.cloneNode(true);

    // Hide duplicate content from screen readers
    clonedSequence.setAttribute("aria-hidden", "true");

    // Prevent duplicate links from receiving keyboard focus
    clonedSequence.querySelectorAll("a").forEach((link) => {
      link.setAttribute("tabindex", "-1");
    });

    // Append duplicate to ticker track
    tickerTrack.appendChild(clonedSequence);
  }
}
