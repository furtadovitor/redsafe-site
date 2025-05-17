document.addEventListener('DOMContentLoaded', function () {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target); // Para de observar após a animação
      }
    });
  }, {
    threshold: 0.1 // Define quando o elemento é considerado visível (10% na tela)
  });

  const sobreBlocos = document.querySelectorAll('.sobre-bloco');
  sobreBlocos.forEach(bloco => {
    observer.observe(bloco);
  });
});



const counters = document.querySelectorAll(".counter");
let hasAnimated = false;

function animateCounters() {
  if (hasAnimated) return;

  counters.forEach(counter => {
    const target = +counter.getAttribute("data-target");
    let count = 0;
    const speed = 200; // menor = mais rápido

    const update = () => {
      const increment = Math.ceil(target / speed);
      if (count < target) {
        count += increment;
        counter.innerText = count > target ? target : count;
        requestAnimationFrame(update);
      } else {
        counter.innerText = target;
      }
    };
    update();
  });

  hasAnimated = true;
}

function handleScroll() {
  const section = document.querySelector(".firepro-right");
  const sectionTop = section.getBoundingClientRect().top;
  const isVisible = sectionTop < window.innerHeight - 100;
  if (isVisible) {
    animateCounters();
    window.removeEventListener("scroll", handleScroll);
  }
}

window.addEventListener("scroll", handleScroll);
window.addEventListener("load", handleScroll);


