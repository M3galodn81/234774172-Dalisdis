import '@picocss/pico/css/pico.min.css';

document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector("header");
    document.body.style.paddingTop = header.offsetHeight + "px";
});
