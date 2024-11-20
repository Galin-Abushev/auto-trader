$(document).ready(function () {
    //$(".header").css("background-color", "#cc0000");
    //$(".header").addClass("choba");

    $(".popup-gallery").magnificPopup({
        delegate: "a",
        type: "image",
        tLoading: "Loading image #%curr%...",
        mainClass: "mfp-img-mobile",
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function (item) {
                return item.el.attr("title") + " by Marsel Van Oosten";
            },
        },
    });

    $(".flash-image").on("mouseenter", function () {
        $(this).fadeOut(100).fadeIn(100);
    });

    var initialTop = $(".scrolling-div").position().top; // Store initial position of the div

    $(window).on("scroll", function () {
        var scrollPosition = $(window).scrollTop(); // Get current scroll position

        // Update the top position of the div
        $(".scrolling-div").css("top", initialTop + scrollPosition + "px");
    });

    $(".img-thumbnail")
        .on("mouseenter", function () {
            $(this).css({
                "background-size": "140%", // Zoom in by increasing background-size
                "background-position": "center",
            });
        })
        .on("mouseleave", function () {
            $(this).css({
                "background-size": "cover", // Reset to original size
                "background-position": "center",
            });
        });
});
