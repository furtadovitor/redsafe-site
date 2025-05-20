const carouselElement = document.getElementById('clientesCarousel');
const carousel = new bootstrap.Carousel(carouselElement, { interval: 10000, pause: false });

carouselElement.addEventListener('mouseenter', () => {
  carousel.pause();
});

carouselElement.addEventListener('mouseleave', () => {
  carousel.cycle();
});
