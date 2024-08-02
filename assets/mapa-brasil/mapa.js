async function runBrazilMap() {
  const mapBrazilDomLoaded = await document.addEventListener('DOMContentLoaded', () => {

    const categorieBoxItems = document.querySelectorAll('.categories-boxes-item');
    const categorieContentItems = document.querySelectorAll('.categories-content-item');

    if (categorieBoxItems && categorieContentItems) {
      for (let i = 0; i < categorieBoxItems.length; i++) {
        categorieBoxItems[i].addEventListener('click', function () {

          for (let i = 0; i < categorieContentItems.length; i++) {
            categorieContentItems[i].classList.remove("active");
          }

          document.getElementById(this.dataset.categorie).className = "categories-content-item active"
        })
      }

      function activeColor(item) {
        categorieBoxItems.forEach((n) => {
          n.classList.remove('active');
        });
        categorieBoxItems[item].classList.add('active');
      }

      categorieBoxItems.forEach((itemMenu, index) => {
        itemMenu.addEventListener('click', () => {
          activeColor(index);
        });
      });
    }

  })
} runBrazilMap()