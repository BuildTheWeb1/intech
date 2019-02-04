const dropdown = document.getElementById('category-dropdown');
const dropdownCard = document.querySelector('.card-dropdown');

dropdown.addEventListener('click', e => {
  e.preventDefault();
  dropdownCard.classList.toggle('no-show');
});

// Update the box header based on selected category
let prodCat = document.querySelectorAll('.prod-cat');
let prodTitle = document.querySelector('.product-title');

function updateTitle() {
  for (let i = 0; i < prodCat.length; i++) {
    let prodTitle = document.querySelector('.product-title');
    prodCat[i].addEventListener('click', () => {
      prodTitle.textContent = prodCat[i].textContent;
    });
  }
}

// Filter Products based on selected category
filterSelection('all');

function filterSelection(c) {
  let x, i;
  x = document.querySelectorAll('.media');
  if (c == 'all') c = '';
  for (i = 0; i < x.length; i++) {
    filterRemoveClass(x[i], 'show');
    if (x[i].className.indexOf(c) > -1) filterAddClass(x[i], 'show');
  }
  updateTitle();
}

// Show filtered elements
function filterAddClass(element, name) {
  let i, arr1, arr2;
  arr1 = element.className.split(' ');
  arr2 = name.split(' ');
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += ' ' + arr2[i];
    }
  }
  dropdownCard.classList.add('no-show');
}

// Hide elements that are not selected
function filterRemoveClass(element, name) {
  let i, arr1, arr2;
  arr1 = element.className.split(' ');
  arr2 = name.split(' ');
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(' ');
}

// Add selected products to the cart module
const btnSubmit = document.getElementById('submit-btn');
const clearBtn = document.querySelector('.btn-primary');
let modal = document.querySelector('.modal-body');
let prodList = document.getElementById('list-products');
// let media = document.querySelectorAll('.media');

addToCart();

function addToCart() {
  for (let i = 0; i < prodList.children.length; i++) {
    let mediaElement = prodList.children[i];
    let count = 0;
    mediaElement.addEventListener('click', () => {
      count++;
      if (count >= 2) {
        alert('You already selected this product! Please choose another one.');
        return;
      }
      mediaElement.children[2].checked = true;
      modal.innerHTML += `
      <div class="prod-item d-flex align-items-center px-3">
      <img src="${mediaElement.children[0].src}" class="mr-3">
      <p class="mb-0">${mediaElement.children[1].textContent}</p>
      </div>
      `;
    });
    clearBtn.addEventListener('click', () => {
      modal.innerHTML = '';
      mediaElement.children[2].checked = false;
      count = 0;
    });
  }
}

btnSubmit.addEventListener('click', () => {
  if (modal.innerHTML === '') {
    alert('No products are selected! Please select a product.');
    btnSubmit.setAttribute('data-target', '');
  } else {
    btnSubmit.setAttribute('data-target', '#products');
  }
});

// slider
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  const slides = document.getElementsByClassName('slides');
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  slides[slideIndex - 1].style.display = 'flex';
}