import ScrollReveal from 'scrollreveal';

const sr = ScrollReveal({
  distance: '20px',
  duration: 800,
  easing: 'ease-in-out',
  origin: 'bottom',
  reset: false,
});

// Default reveal for single elements
sr.reveal('[data-reveal]', {
  interval: 150,
});

// Staggered reveal for children of a container
document.querySelectorAll('[data-reveal-children]').forEach((container) => {
  sr.reveal(container.children, {
    interval: 100,
  });
});
