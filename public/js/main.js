function scrollHeader() {
    const nav = document.getElementById("navbar");
    // When the scroll is greater than 200 viewport height, add the scroll-header class to the header tag
    if (this.scrollY >= 100) navbar.classList.add("scroll-header");
    else nav.classList.remove("scroll-header");
}
window.addEventListener("scroll", scrollHeader);

$(document).ready(function () {
    if ($(".product-carousel").length) {
        var viewedSlider = $(".product-carousel");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
                1400: {
                    items: 4,
                    loop: false,
                },
            },
        });

        if ($(".btn-carousel-prev").length) {
            var prev = $(".btn-carousel-prev");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".btn-carousel-next").length) {
            var next = $(".btn-carousel-next");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

// COPY SHARE LINK
function copyShareLink() {
    var inputc = document.body.appendChild(document.createElement("input"));
    inputc.value = window.location.href;
    inputc.focus();
    inputc.select();
    document.execCommand("copy");
    inputc.parentNode.removeChild(inputc);
    alert("URL Copied!");
}
