(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($("#spinner").length > 0) {
                $("#spinner").removeClass("show");
            }
        }, 1);
    };
    spinner();

    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 45) {
            $(".navbar").addClass("sticky-top shadow-sm");
        } else {
            $(".navbar").removeClass("sticky-top shadow-sm");
        }
    });

    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000,
    });

    // Back to top button
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 150) {
            $(".back-to-top, .dmk-back-to-top, #backToTop").fadeIn("fast");
        } else {
            $(".back-to-top, .dmk-back-to-top, #backToTop").fadeOut("fast");
        }
    });

    $(".back-to-top, .dmk-back-to-top, #backToTop").on("click", function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: "smooth" });
    });

    $("#quoteForm").on("submit", function (event) {
        event.preventDefault();

        const name = $("#nameField").val().trim();
        const service = $("#serviceField").val().trim();
        const message = $("#messageField").val().trim();
        const text = `Halo nama saya ${name}, saya ingin bertanya tentang ${service}. ${message}`;
        window.open(
            `https://wa.me/6281331181861?&text=${encodeURIComponent(text)}`,
            "_blank"
        );
    });

    // Auto active nav link
    const sections = $("section");
    const navlinks = $("nav div div a");

    $(window).on("scroll", function () {
        let currentSection = "home";

        sections.each(function () {
            const sectionTop = $(this).offset().top;
            const sectionHeight = $(this).outerHeight();
            if (
                pageYOffset >= sectionTop - 180 &&
                pageYOffset < sectionTop + sectionHeight
            ) {
                currentSection = $(this).attr("id");
            }
        });

        navlinks.removeClass("active");
        navlinks.each(function () {
            if ($(this).attr("href") === "#" + currentSection) {
                $(this).addClass("active");
            }
        });
    });

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });

    $(".portfolio-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 600,
        dots: false,
        loop: true,
        center: false,
        margin: 24,
        stagePadding: 0,
        responsive: {
            0: {
                items: 1,
                margin: 16,
                center: false,
                stagePadding: 0,
            },
            576: {
                items: 2,
                margin: 16,
            },
            768: {
                items: 2,
                margin: 20,
            },
            992: {
                items: 3,
                margin: 24,
            },
        },
    });

    $(".promo-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 600,
        dots: false,
        loop: true,
        center: false,
        margin: 24,
        stagePadding: 0,
        responsive: {
            0: {
                items: 1,
                margin: 16,
                center: false,
                stagePadding: 0,
            },
            576: {
                items: 2,
                margin: 16,
            },
            768: {
                items: 2,
                margin: 20,
            },
            992: {
                items: 3,
                margin: 24,
            },
        },
    });

    $(".dome-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,
                center: true,
                margin: 16,
                stagePadding: 0,
            },
            576: {
                items: 2,
                center: true,
                margin: 16,
            },
            768: {
                items: 2,
                center: true,
                margin: 24,
            },
            992: {
                items: 3,
                center: true,
                margin: 30,
            },
        },
    });
})(jQuery);

