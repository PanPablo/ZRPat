document.addEventListener("DOMContentLoaded", function(event) {
    console.log("DOM fully loaded and parsed");

//karuzela
    var slides = document.querySelectorAll('.slide');
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide,2500);

    function nextSlide() {
        goToSlide(currentSlide+1);
    }

    function previousSlide() {
        goToSlide(currentSlide-1);
    }

    function goToSlide(n) {
        slides[currentSlide].className = 'slide';
        currentSlide = (n+slides.length)%slides.length;
        slides[currentSlide].className = 'slide showing';
    }

//menu dla Mobile jquery

    $('.navIcon').click(function(){
        $('.menuMobile').toggleClass('menuMobileShow');
        $('.slider').toggleClass('sliderHiden');
    });

//menu w pelnej szerokosci

    $('.about').click(function() {
        $('.fullMenu').toggleClass('fullMenuShow');
    });

    $('.about').mouseenter(function() {
        $('.fullMenu').toggleClass('fullMenuShow');
    });

    $('.menu').mouseleave(function() {
        console.log('mouselif');
        $('.fullMenu').removeClass('fullMenuShow');
    });

    //mapa google

    function initMap() {

        var uluru = {lat: parseFloat(52.219634), lng: parseFloat(21.0143851)};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }

    initMap();





});