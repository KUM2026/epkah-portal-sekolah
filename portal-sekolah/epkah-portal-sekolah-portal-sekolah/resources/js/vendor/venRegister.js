document.addEventListener("DOMContentLoaded", () => {
    const steps = document.querySelectorAll(".form-step");
    const nextBtn = document.querySelector(".next-btn");
    const prevBtn = document.querySelector(".prev-btn");
    const submitBtn = document.querySelector(".submit-btn");
    const stepIndicators = document.querySelectorAll(".steps .step");
    const progressActive = document.querySelector(".progress-bar-active");

    let currentStep = 0;

    function showStep(step) {
        steps.forEach((s, i) => {
            s.classList.toggle("active", i === step);
        });
        stepIndicators.forEach((ind, i) => {
            ind.classList.toggle("active", i === step);
        });

        // progress bar animate
        progressActive.style.width = `${(step / (steps.length - 1)) * 100}%`;

        prevBtn.classList.toggle("hidden", step === 0);
        nextBtn.classList.toggle("hidden", step === steps.length - 1);
        submitBtn.classList.toggle("hidden", step !== steps.length - 1);
    }

    nextBtn.addEventListener("click", () => {
        if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    });

    prevBtn.addEventListener("click", () => {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    });

    showStep(currentStep);
});
