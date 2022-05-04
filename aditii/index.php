<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/index.css">
    <title>Aditii Web Store</title>
</head>
<body>
<header>
<?php get_header(); ?>
</header>
<main>
    <div class="banner__wrapper">
        <div class="banner__container">
            <div class="banner__image">
                <img id="slider__img" src="./images/banner/tshirt_1.png" alt="T-SHIRT GOES HERE">
            </div>
            <div class="banner__description">
                <div class="banner__description-title">
                    <span id="slider__title">
                        cowhide standard crew
                    </span>
                </div>
                <div class="banner__description-text">
                    <span id="slider__description">
                        White coloured, short-sleeved, printed T-shirt for men by Levi's. This crew-neck T-shirt is made of organic cotton and comes in a regular fit.
                    </span>
                </div>
                <div class="banner__description-link">
                    <a href="#">shop now</a>
                </div>
                <div class="banner__description-selector">
                    <span class="banner__description-selector-item" onclick="currentSlide(1)"></span>
                    <span class="banner__description-selector-item" onclick="currentSlide(2)"></span>
                    <span class="banner__description-selector-item" onclick="currentSlide(3)"></span>
                    <span class="banner__description-selector-item" onclick="currentSlide(4)"></span>
                    <span class="banner__description-selector-item" onclick="currentSlide(5)"></span>
                    <span class="banner__description-selector-item" onclick="currentSlide(6)"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="slider__wrapper">
        <div class="slider__container">
            <div class="slider__item">
                <div class="slider__item-img">
                    <img src="./images/slider/shoes.png" alt="shoes">
                </div>
                <div class="slider__item-details">
                    <div class="slider__item-title">
                        <span>branded shoes</span>
                    </div>
                    <div class="slider__item-link">
                        <a href="#">shop</a>
                    </div>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__item-img">
                    <img src="./images/slider/tshirt.png" alt="shoes">
                </div>
                <div class="slider__item-details">
                    <div class="slider__item-title">
                        <span>branded tshirt</span>
                    </div>
                    <div class="slider__item-link">
                        <a href="#">shop</a>
                    </div>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__item-img">
                    <img src="./images/slider/pants.png" alt="shoes">
                </div>
                <div class="slider__item-details">
                    <div class="slider__item-title">
                        <span>branded pants</span>
                    </div>
                    <div class="slider__item-link">
                        <a href="#">shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="featured-products__wrapper">
        <div class="featured-products__title-wrapper">
            <div class="featured-products__title">
                <span>featured products</span>
            </div>
        </div>
        <div class="featured-products__container">
            <div class="featured-products__items">
                <div class="featured-products__item">
                    <div class="featured-products__item-img">
                        <img src="./images/women_shoes.png" alt="">
                    </div>
                    <div class="featured-products__item-title">
                        <span>branded shoe</span>
                    </div>
                    <div class="featured-products__item-details">
                        <div class="featured-products__item-price"><span>$300</span></div>
                        <div class="featured-products__item-link"><a href="#">buy now</a></div>
                    </div>
                </div>
                <div class="featured-products__item">
                    <div class="featured-products__item-img">
                        <img src="./images/women_tees.png" alt="">
                    </div>
                    <div class="featured-products__item-title">
                        <span>branded tees</span>
                    </div>
                    <div class="featured-products__item-details">
                        <div class="featured-products__item-price"><span>$25</span></div>
                        <div class="featured-products__item-link"><a href="#">buy now</a></div>
                    </div>
                </div>
                <div class="featured-products__item">
                    <div class="featured-products__item-img">
                        <img src="./images/women_tshirts.png" alt="">
                    </div>
                    <div class="featured-products__item-title">
                        <span>branded t-shirts</span>
                    </div>
                    <div class="featured-products__item-details">
                        <div class="featured-products__item-price"><span>$15</span></div>
                        <div class="featured-products__item-link"><a href="#">buy now</a></div>
                    </div>
                </div>
                <div class="featured-products__item">
                    <div class="featured-products__item-img">
                        <img src="./images/men_wallet.png" alt="">
                    </div>
                    <div class="featured-products__item-title">
                        <span>branded wallet</span>
                    </div>
                    <div class="featured-products__item-details">
                        <div class="featured-products__item-price"><span>$100</span></div>
                        <div class="featured-products__item-link"><a href="#">buy now</a></div>
                    </div>
                </div>
                <div class="featured-products__item">
                    <div class="featured-products__item-img">
                        <img src="./images/women_bag.png" alt="">
                    </div>
                    <div class="featured-products__item-title">
                        <span>branded bags</span>
                    </div>
                    <div class="featured-products__item-details">
                        <div class="featured-products__item-price"><span>$250</span></div>
                        <div class="featured-products__item-link"><a href="#">buy now</a></div>
                    </div>
                </div>
                <div class="featured-products__item">
                    <div class="featured-products__item-img">
                        <img src="./images/men_cargos.png" alt="">
                    </div>
                    <div class="featured-products__item-title">
                        <span>branded cargo</span>
                    </div>
                    <div class="featured-products__item-details">
                        <div class="featured-products__item-price"><span>$50</span></div>
                        <div class="featured-products__item-link"><a href="#">buy now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
<?php get_footer(); ?>
</footer>
<script src="./js/slider.js"></script>
</body>
</html>