document.addEventListener('DOMContentLoaded', () => {
  const slider = document.getElementById('hero-slider-track');
  const slides = slider?.children;
  const prevBtn = document.getElementById('hero-prev');
  const nextBtn = document.getElementById('hero-next');

  if (!slider || !slides || slides.length <= 1) return;

  let currentIndex = 0;
  const totalSlides = slides.length;

  const updateSlider = () => {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
  };

  const goNext = () => {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlider();
  };

  const goPrev = () => {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateSlider();
  };

  nextBtn?.addEventListener('click', goNext);
  prevBtn?.addEventListener('click', goPrev);
});
