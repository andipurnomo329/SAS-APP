document.addEventListener("DOMContentLoaded", () => {
    window.steps = document.querySelectorAll(".step");
    window.labels = document.querySelectorAll(".step-labels span");
    window.contents = document.querySelectorAll(".step-section");
    window.btnPrev = document.querySelector(".btn-prev");
    window.btnNext = document.querySelector(".btn-next");
    window.currentStep = 0;

    window.updateStepUI = function () {
        steps.forEach((s, i) => s.classList.toggle("active", i === currentStep));
        labels.forEach((l, i) => l.classList.toggle("disabled", i > currentStep));
        contents.forEach((c, i) => c.classList.toggle("active", i === currentStep));
        btnPrev.disabled = currentStep === 0;

        if (currentStep === contents.length - 1) {
            btnNext.textContent = "SUBMIT";
            btnNext.setAttribute("data-action", "submit");
        } else {
            btnNext.textContent = "NEXT";
            btnNext.setAttribute("data-action", "next");
        }
    };

    steps.forEach((step, index) => {
        step.style.cursor = "pointer";
        step.addEventListener("click", () => {
            currentStep = index;
            updateStepUI();
        });
    });

    btnNext.addEventListener("click", () => {
        const action = btnNext.getAttribute("data-action");
        if (action === "next") {
            if (currentStep < contents.length - 1) {
                currentStep++;
                updateStepUI();
            }
        } else if (action === "submit") {
            document.getElementById("guruForm").requestSubmit();
        }
    });

    btnPrev.addEventListener("click", () => {
        if (currentStep > 0) {
            currentStep--;
            updateStepUI();
        }
    });

    updateStepUI();
});
