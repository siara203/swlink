"use strict";
(function () {
    window.onload = () => {
        const obj = document.querySelector("#gallery");
        const time = 10000;
        function animStart() {
            if (obj.classList.contains("active") == false) {
                obj.classList.add("active");
                setTimeout(() => {
                    animEnd();
                }, time);
            }
        }
        function animEnd() {
            obj.classList.remove("active");
            obj.offsetWidth;
        }
        document.addEventListener("scroll", function () {
            // scroll or scrollend
            animStart();
        });
        window.addEventListener("resize", animStart);
        animStart();
    };
})();
// Dark and Light Mode with localStorage
(function () {
    let darkMode = localStorage.getItem("darkMode");
    const darkSwitch = document.getElementById("switch");

    // Enable and Disable Darkmode
    const enableDarkMode = () => {
        document.body.classList.add("darkmode");
        localStorage.setItem("darkMode", "enabled");
    };

    const disableDarkMode = () => {
        document.body.classList.remove("darkmode");
        localStorage.setItem("darkMode", null);
    };

    // User Already Enable Darkmode
    if (darkMode === "enabled") {
        enableDarkMode();
    }

    // User Clicks the Darkmode Toggle
    darkSwitch.addEventListener("click", () => {
        darkMode = localStorage.getItem("darkMode");
        if (darkMode !== "enabled") {
            enableDarkMode();
        } else {
            disableDarkMode();
        }
    });
})();
/*
inspiration
https://cz.pinterest.com/pin/830703093792161391/
*/
var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2.5,
    },
    keyboard: {
        enabled: true,
    },
    mousewheel: {
        thresholdDelta: 70,
    },
    spaceBetween: 30,
    loop: false,
    breakpoints: {
        640: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});

swiper.slideTo(1, false, false);
