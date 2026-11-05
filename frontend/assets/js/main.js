const menuToggle = document.getElementById("menu-toggle");
const mainNavigation = document.getElementById("main-navigation");

if (menuToggle && mainNavigation) {
  menuToggle.addEventListener("click", () => {
    const isOpen = mainNavigation.classList.toggle("active");

    menuToggle.setAttribute("aria-expanded", isOpen);

    menuToggle.textContent = isOpen ? "✕" : "☰";
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
