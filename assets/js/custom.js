$('.owl-carousel-1').owlCarousel({
    loop: true,
    margin: 0,
    // autoplay:true,
    autoplayTimeout: 2500,
    autoplaySpeed: 2000,
    nav: true,
    dots: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
            margin: 20,

        },
        1000: {
            items: 3,
            margin: 33,
        }
    }
});


$('.tripcrosul').owlCarousel({
    loop: true,
    margin: 0,
    // autoplay:true,
    autoplayTimeout: 2500,
    autoplaySpeed: 2000,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,

        },
        1000: {
            items: 5,
        }
    }
});


$('.counters').owlCarousel({
    margin: 10,
    // autoplay:true,
    center: true,
    autoplayTimeout: 2500,
    autoplaySpeed: 2000,
    dots: true,
    responsive: {
        0: {
            items: 1,
            nav: true,
        },
        577: {
            items: 1,
            nav: true,
        },
        1000: {
            items: 3,
            nav: false,
        }
    }
});


// &&& Number Input group
$(function () {

    (function quantityProducts() {
        var $quantityArrowMinus = $(".quantity-arrow-minus");
        var $quantityArrowPlus = $(".quantity-arrow-plus");
        var $quantityNum = $(".quantity-num");

        $quantityArrowMinus.click(quantityMinus);
        $quantityArrowPlus.click(quantityPlus);

        function quantityMinus() {
            if ($quantityNum.val() > 1) {
                $quantityNum.val(+$quantityNum.val() - 1);
            }
        }

        function quantityPlus() {
            $quantityNum.val(+$quantityNum.val() + 1);
        }
    })();

});


