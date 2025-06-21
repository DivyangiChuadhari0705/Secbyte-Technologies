document.addEventListener('DOMContentLoaded', () => {
  const categorySelect = document.querySelector('.category-filter');
  const productCards = document.querySelectorAll('.product-card');

  categorySelect.addEventListener('change', () => {
    const selected = categorySelect.value.toLowerCase();

    productCards.forEach(card => {
      const category = card.getAttribute('data-category').toLowerCase();
      if (selected === 'all' || category === selected) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  });
});


console.log("main.js loaded");
