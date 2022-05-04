let slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n){
    showSlides(slideIndex = n);
}

function showSlides(n){
    let i;
    let slideImage = document.getElementById("slider__img");
    let slideTitle = document.getElementById("slider__title");
    let slideDescription = document.getElementById("slider__description");
    let dot = document.getElementsByClassName("banner__description-selector-item");
    switch(n){
        case 1:{
            slideTitle.textContent="cowhide standard crew";
            slideDescription.textContent="White coloured, short-sleeved, printed T-shirt for men by Levi's. This crew-neck T-shirt is made of organic cotton and comes in a regular fit.";
            slideImage.setAttribute('src','./../images/banner/tshirt_1.png');
            return;
        }
        case 2:{
            slideTitle.textContent="mountain evening winter";
            slideDescription.textContent="Red coloured, warm, water-resistant. This well-sewed jacket could warm you in the low-temperature places.";
            slideImage.setAttribute('src','./../images/banner/hood_warm.png');
            return;
        }
    }
}