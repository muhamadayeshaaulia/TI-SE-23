AOS.init({
  duration: 1000,
  once: true,
  easing: 'ease-in-out'
});

new Swiper(".mySwiper", {
  loop: true,
  pagination: { el: ".swiper-pagination", clickable: true },
  autoplay: { delay: 3000 },
});

feather.replace();

const toggleBtn = document.getElementById("toggleDark");
const icon = document.getElementById("themeIcon");
const savedTheme = localStorage.getItem("theme");

if (savedTheme === "dark") {
  document.documentElement.classList.add("dark");
} else {
  document.documentElement.classList.remove("dark");
}
updateIcon();

function updateIcon() {
  icon.setAttribute(
    "data-feather",
    document.documentElement.classList.contains("dark") ? "sun" : "moon"
  );
  feather.replace();
}

toggleBtn.addEventListener("click", () => {
  document.documentElement.classList.toggle("dark");
  localStorage.setItem(
    "theme",
    document.documentElement.classList.contains("dark") ? "dark" : "light"
  );
  updateIcon();
});
const burgerMenu = document.getElementById("burgerMenu");
const mobileMenu = document.getElementById("mobileMenu");
const closeMenu = document.getElementById("closeMenu");
const overlay = document.getElementById("overlay");

burgerMenu.addEventListener("click", () => {
  mobileMenu.classList.remove("hidden");
  setTimeout(() => {
    mobileMenu.classList.remove("translate-x-full");
    overlay.classList.remove("hidden");
    overlay.classList.add("opacity-100");
  }, 10);
});

closeMenu.addEventListener("click", closeMobile);
overlay.addEventListener("click", closeMobile);

function closeMobile() {
  mobileMenu.classList.add("translate-x-full");
  overlay.classList.remove("opacity-100");
  setTimeout(() => {
    mobileMenu.classList.add("hidden");
    overlay.classList.add("hidden");
  }, 300);
}