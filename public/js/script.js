// script.js

document.addEventListener('DOMContentLoaded', function () {
    // Inisialisasi manual Bootstrap Scrollspy
    var scrollSpy = new bootstrap.ScrollSpy(document.body, {
        target: '#vertical-nav',
        offset: 20 // Sesuaikan offset jika perlu
    });
});
