const beforeAfterContainer = document.getElementById('before-after-container');
const beforeAfterLeftArrow = document.getElementById('before-after-left-arrow');
const beforeAfterRightArrow = document.getElementById('before-after-right-arrow');

beforeAfterLeftArrow.addEventListener('click', () => {
    beforeAfterContainer.scrollBy({ left: -300, behavior: 'smooth' });
});

beforeAfterRightArrow.addEventListener('click', () => {
    beforeAfterContainer.scrollBy({ left: 300, behavior: 'smooth' });
});
