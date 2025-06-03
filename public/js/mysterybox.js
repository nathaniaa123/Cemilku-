document.addEventListener('DOMContentLoaded', () => {
  const mysteryBox = document.querySelector('.mystery_box');
  const moodBoxes = document.querySelectorAll('.mood_box');

  moodBoxes.forEach(box => {
    box.addEventListener('click', () => {
      const newImgSrc = box.getAttribute('data-img');
      if (newImgSrc) {
        mysteryBox.src = newImgSrc;
      }

      moodBoxes.forEach(b => b.classList.remove('selected'));
      box.classList.add('selected');
    });
  });
});
