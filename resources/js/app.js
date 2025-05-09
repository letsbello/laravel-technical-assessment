document.addEventListener('DOMContentLoaded', () => {
    function randomNumber(min, max) {
      return Math.floor(Math.random() * (max - min)) + min;
    }

    function generateStars() {
      const width = window.innerWidth;
      const height = document.documentElement.scrollHeight;
      const stars = document.querySelectorAll('.star');

      stars.forEach(star => {
        const randomTop = randomNumber(1, height);
        const randomRight = randomNumber(1, width);
        star.style.top = `${randomTop}px`;
        star.style.right = `${randomRight}px`;
      });
    }

    window.addEventListener('load', generateStars);
    window.addEventListener('resize', generateStars);
    window.addEventListener('locationchange', generateStars);
    document.addEventListener('livewire:navigated', generateStars);
  });