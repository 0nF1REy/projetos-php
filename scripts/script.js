const cardWrap = document.getElementById('card-wrap');
const cardListImages = [
    "./assets/img/project-php.webp",
    "./assets/img/project-php-2.webp",
    "./assets/img/project-php-3.avif"
];
let lastImageIndex = -1; 

cardWrap.querySelectorAll('.card-list').forEach(card => {
    const imageElement = card.querySelector('.card-listImage img');
    let randomIndex;

    do{
      randomIndex = Math.floor(Math.random() * cardListImages.length); 
    } while (randomIndex === lastImageIndex); 
    
    imageElement.src = cardListImages[randomIndex];
    lastImageIndex = randomIndex; 
});

"use strict";

window.addEventListener('scroll', function() {
    const scrollTopButton = document.getElementById('scrollTopButton');
    if (window.scrollY > 200) {
        scrollTopButton.style.display = 'block'; 
    } else {
        scrollTopButton.style.display = 'none'; 
    }
});

document.getElementById('scrollTopButton').addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});