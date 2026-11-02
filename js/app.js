// Optional small enhancement — card hover fade-in
document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('.card');
  cards.forEach((c, i) => {
    c.style.opacity = 0;
    c.style.transition = 'opacity .35s ease, transform .15s ease';
    setTimeout(() => (c.style.opacity = 1), 40 * i);
  });
});