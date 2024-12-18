document.querySelectorAll(".contacts__form").forEach((element) => {
    element.addEventListener("submit", (event) => {
        event.preventDefault();
        const inputsFields = element.querySelectorAll(".contacts__form input, .contacts__form textarea");
        let allValid = true;
        const formData = {};
        const collectData = (fields) => {
            fields.forEach((field) => {
                const formBlock = field.closest(".content__form-block");
                if (formBlock) {
                    formData[field.name] = field.value.trim();
                    if (!field.value.trim() && field.classList.contains("required")) {
                        formBlock.classList.add("input-error");
                        allValid = false;
                    } else {
                        formBlock.classList.remove("input-error");
                    }
                }
            });
        };
        collectData(inputsFields);

        console.log("Form Data:", formData);
    });
});