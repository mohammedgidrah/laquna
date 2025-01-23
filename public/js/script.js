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
        { title: "Talabay Hotels & Resorts", img: "images/portfolio/Talabay_logo-01[1].png", link: "https://www.instagram.com/talabayresort/" },
        { title: "Murasakai Restobar", img: "images/portfolio/Mursakai logo[1].png",link: "https://www.instagram.com/murasaki.restobar/" },
        { title: "Aqaba Development Corporation", img: "images/portfolio/التطوير.png",link: "https://www.adc.jo/" },
        { title: "Movida Entertainment", img: "images/portfolio/movida.jpg",link: "https://www.instagram.com/movidajo_entertainment/" },
        { title: "Mirachi Indian Cusine", img: "images/portfolio/Mirchi[1].png" ,link: "https://www.instagram.com/mirchi.aqaba/?hl=ar"},
        { title: "Space Restocafe", img: "images/portfolio/Space[1].PNG" ,link: "https://www.instagram.com/space_restocafe/" },
        { title: "High Fit  Fitness Center ", img: "images/portfolio/Highfit[1].PNG" ,link: "https://www.instagram.com/highfitfitnesscenter/" },
        { title: "Almughrabi Pharmacy", img: "images/portfolio/mughrabi pharmacy[1].PNG",link: "https://www.instagram.com/almughrabi_pharmacy/" },
        { title: "Amazon Kitchen & Industrial Wood", img: "images/portfolio/Amazon[1].PNG",link: "https://www.facebook.com/AMAZONKITCHENS.JO/" },
        { title: "Aldallah", img: "images/portfolio/ALdallah[1].PNG",  },
        { title: "Ishq Hotel", img: "images/portfolio/Ishq[1].PNG",  },
        { title: "Mines Gaming Center", img: "images/portfolio/Mines[1].PNG",link: "https://www.facebook.com/mines.gaming2025" },
        { title: "Mazaya", img: "images/portfolio/Mazaya[1].PNG",link: "https://mazayaworld.com/en" },
        { title: "MyAqaba", img: "images/portfolio/myaqaba[1].PNG",link: "https://www.facebook.com/MyAqaba/?locale=ar_AR" },
        { title: "Marina Restaurant & Fishery", img: "images/portfolio/marina.PNG",  },
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
                    ${item.link ? `<a href="${item.link}" target="_blank" class="btn btn-primary mb-2 small-btn d-block">View page</a>` : ""}
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
