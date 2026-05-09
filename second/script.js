const carouselMap = new Map();

document.querySelectorAll("[data-carousel]").forEach((carousel) => {
  carouselMap.set(carousel.dataset.carousel, carousel);
});

function moveCarousel(name, direction) {
  const carousel = carouselMap.get(name);
  if (!carousel) {
    return;
  }
  const card = carousel.children[0];
  const styles = getComputedStyle(carousel);
  const gap = parseFloat(styles.columnGap || styles.gap || "0");
  const amount = card ? card.getBoundingClientRect().width + gap : 360;
  carousel.scrollBy({ left: amount * direction, behavior: "smooth" });
}

document.querySelectorAll("[data-carousel-prev]").forEach((button) => {
  button.addEventListener("click", () => moveCarousel(button.dataset.carouselPrev, -1));
});

document.querySelectorAll("[data-carousel-next]").forEach((button) => {
  button.addEventListener("click", () => moveCarousel(button.dataset.carouselNext, 1));
});

const clubCards = document.querySelectorAll("[data-club]");
const clubDots = document.querySelectorAll("[data-club-dot]");

function setActiveClub(club) {
  clubCards.forEach((card) => {
    card.classList.toggle("is-active", card.dataset.club === club);
  });
  clubDots.forEach((dot) => {
    dot.classList.toggle("is-active", dot.dataset.clubDot === club);
  });
}

clubCards.forEach((card) => {
  card.addEventListener("mouseenter", () => setActiveClub(card.dataset.club));
  card.addEventListener("focusin", () => setActiveClub(card.dataset.club));
});

clubDots.forEach((dot) => {
  dot.addEventListener("mouseenter", () => setActiveClub(dot.dataset.clubDot));
  dot.addEventListener("focusin", () => setActiveClub(dot.dataset.clubDot));
});
