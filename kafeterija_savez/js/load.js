// Animacija ucitavanja
document.addEventListener('DOMContentLoaded', () => {
    const animatedElements = document.querySelectorAll('.error, .success, .container-item, .btn, .welcome-h1, .welcome-hr, .welcome-p, .btn-welcome, .drink-container-menu-name, .kafe-i-topli-napitci, .gazirani-sokovi, .hladni-napitci, .piva, .zestoka-pica, .vina, .vode, .energetska-pica, .drink-container-text, .star-row, .location-iframe, .map-text');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the animation class when the element comes into view
                entry.target.classList.add('animate-fadein');
                // Optionally, you can unobserve the element after adding the animation class
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 }); // Trigger when 10% of the element is in view

    animatedElements.forEach(el => {
        observer.observe(el);
    });
});