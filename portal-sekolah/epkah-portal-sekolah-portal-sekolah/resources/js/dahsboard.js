// AOS initialization
document.addEventListener("DOMContentLoaded", function(){
    AOS.init({
        duration: 900,
        easing: "ease-in-out",
        once: true
    });
});

// Card item glow effect
document.querySelectorAll('.card-item').forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.boxShadow = '0 0 15px rgba(0,0,0,0.2)';
    });
    card.addEventListener('mouseleave', () => {
        card.style.boxShadow = '0 2px 8px rgba(0,0,0,0.08)';
    });
});
