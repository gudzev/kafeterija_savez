document.addEventListener('DOMContentLoaded', () => {
    const animatedElements = document.querySelectorAll('.review, .kriterijumi-h1, .parametri-text, .btn-search, #ocena');

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