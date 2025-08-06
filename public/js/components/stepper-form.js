document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("form[data-stepper]").forEach(form => {
        const steps = form.querySelectorAll(".step");
        const labels = form.querySelectorAll(".step-labels span");
        const contents = form.querySelectorAll(".step-section");
        const btnPrev = form.querySelector(".btn-prev");
        const btnNext = form.querySelector(".btn-next");
        let currentStep = 0;

        // Pastikan tombol stepper ada
        if (!btnPrev || !btnNext || steps.length === 0 || contents.length === 0) return;

        function updateStepUI() {
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
        }

        // Reset stepper ke step pertama saat modal dibuka
        const modal = form.closest('.modal');
        if (modal) {
            modal.addEventListener('show.bs.modal', () => {
                currentStep = 0;
                updateStepUI();
            });
        }

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
                form.requestSubmit();
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
});