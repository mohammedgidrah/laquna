(function ($) {
    "use strict";

    $(".portfolio-single-slider").slick({
        infinite: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    $(".clients-logo").slick({
        infinite: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    $(".testimonial-wrap").slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 6000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    $(".portfolio-gallery").each(function () {
        $(this)
            .find(".popup-gallery")
            .magnificPopup({
                type: "image",
                gallery: {
                    enabled: true,
                },
            });
    });

    var map;

    function initialize() {
        var mapOptions = {
            zoom: 13,
            center: new google.maps.LatLng(
                50.97797382271958,
                -114.107718560791
            ),
            // styles: style_array_here
        };
        map = new google.maps.Map(
            document.getElementById("map-canvas"),
            mapOptions
        );
    }

    var google_map_canvas = $("#map-canvas");

    if (google_map_canvas.length) {
        google.maps.event.addDomListener(window, "load", initialize);
    }

    // Counter

    $(".counter-stat").counterUp({
        delay: 10,
        time: 1000,
    });
})(jQuery);

// JavaScript to enhance carousel interactions
document.addEventListener("DOMContentLoaded", () => {
    const carousel = document.getElementById("contentCarousel");

    // Automatically pause the carousel on hover
    carousel.addEventListener("mouseenter", () => {
        bootstrap.Carousel.getInstance(carousel).pause();
    });

    // Resume carousel when mouse leaves
    carousel.addEventListener("mouseleave", () => {
        bootstrap.Carousel.getInstance(carousel).cycle();
    });

    // Add active effect to buttons manually (Optional)
    const indicators = document.querySelectorAll(".carousel-indicators button");
    carousel.addEventListener("slide.bs.carousel", (event) => {
        indicators.forEach((indicator, index) => {
            if (index === event.to) {
                indicator.classList.add("active");
            } else {
                indicator.classList.remove("active");
            }
        });
    });
});

// client
const portfolioItems = [
    { title: "Talabay Hotels & Resorts", img: "images/portfolio/Talabay_logo-01[1].png" },
    { title: "Murasakai Restobar", img: "images/portfolio/Mursakai logo[1].png" },
    { title: "MIRACHI INDIAN CUSINE", img: "images/portfolio/Mirchi[1].png" },
    { title: "SPACE RESTOCAFE", img: "images/portfolio/Space[1].PNG" },
    { title: "HIGH FIT", img: "images/portfolio/Highfit[1].PNG" },
    { title: "mughrabi pharmacy", img: "images/portfolio/mughrabi pharmacy[1].PNG" },
    { title: "Amazon", img: "images/portfolio/Amazon[1].PNG" },
    { title: "ALdallah", img: "images/portfolio/ALdallah[1].PNG" },
    { title: "Ishq", img: "images/portfolio/Ishq[1].PNG" },
    { title: "Mines", img: "images/portfolio/Mines[1].PNG" },
    { title: "Mazaya", img: "images/portfolio/Mazaya[1].PNG" },
    { title: "Myaqaba", img: "images/portfolio/myaqaba[1].PNG" }
];

const itemsPerPage = 6; // Show 6 items per page
let currentPage = 1;

function renderPortfolio(page) {
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const pageItems = portfolioItems.slice(start, end);

    const portfolioContainer = document.getElementById("portfolioItems");
    portfolioContainer.innerHTML = "";

    pageItems.forEach(item => {
        const portfolioItem = `
            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="${item.img}" class="popup-gallery">
                        <img src="${item.img}" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">${item.title}</h3>
                        </div>
                    </a>
                </div>
            </div>
        `;
        portfolioContainer.innerHTML += portfolioItem;
    });

    // Update page number display
    document.getElementById("pageNumber").textContent = currentPage;

    // Hide Prev button if on the first page
    document.getElementById("prevPage").style.display = (currentPage === 1) ? "none" : "inline-block";

    // Hide Next button if on the last page
    document.getElementById("nextPage").style.display = (currentPage * itemsPerPage >= portfolioItems.length) ? "none" : "inline-block";

    // Initialize Magnific Popup
    $(".portfolio-gallery").each(function () {
        $(this)
            .find(".popup-gallery")
            .magnificPopup({
                type: "image",
                gallery: {
                    enabled: true,
                },
            });
    });
}

// Event Listeners for pagination buttons
document.getElementById("prevPage").addEventListener("click", () => {
    if (currentPage > 1) {
        currentPage--;
        renderPortfolio(currentPage);
    }
});

document.getElementById("nextPage").addEventListener("click", () => {
    if (currentPage * itemsPerPage < portfolioItems.length) {
        currentPage++;
        renderPortfolio(currentPage);
    }
});

// Initial rendering
renderPortfolio(currentPage);
