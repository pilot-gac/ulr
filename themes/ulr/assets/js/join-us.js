const personTypeSelects = document.querySelectorAll(".person-type-select");
personTypeSelects.forEach((select) => {
    const label = select.nextElementSibling;
    const selectedFirst = select.closest(".joinuser__content").querySelector(".joinuser__selected-first");
    const selectedSecond = select.closest(".joinuser__content").querySelector(".joinuser__selected-second");

    select.addEventListener("change", toggleVisibility);

    function toggleVisibility() {
        document.querySelectorAll(".content__form-block input.required").forEach((input) => {
            const formBlock = input.closest(".content__form-block");
            if (formBlock && formBlock.classList.contains("input-error")) {
                formBlock.classList.remove("input-error");
            }
        });
        if (select.value === "Цивільний") {
            clearInputs(selectedSecond);
            selectedFirst.classList.add("show");
            selectedSecond.classList.remove("show");
            label.innerHTML = "Фізична особа - цивільний<span>*</span>";
        } else if (select.value === "Військовий") {
            clearInputs(selectedFirst);
            selectedFirst.classList.remove("show");
            selectedSecond.classList.add("show");
            label.innerHTML = "Фізична особа - військовий<span>*</span>";
        } else if (select.value === "ФОП") {
            clearInputs(selectedFirst);
            selectedFirst.classList.add("show");
            selectedSecond.classList.remove("show");
            label.innerHTML = "ФОП<span>*</span>";
        } else if (select.value === "Юридична особа") {
            clearInputs(selectedFirst);
            selectedFirst.classList.remove("show");
            selectedSecond.classList.add("show");
            label.innerHTML = "Юридична особа<span>*</span>";
        }
    }
    toggleVisibility();
});
function clearInputs(selectedBlock) {
    selectedBlock.querySelectorAll("input").forEach((input) => {
        if (!input.classList.contains("type-status")) {
            input.value = "";
        }
    });
}

function clearInputs(container) {
    const inputs = container.querySelectorAll("input");
    inputs.forEach((input) => {
        if (!input.classList.contains("type-status")) {
            input.value = "";
            const label = input.nextElementSibling;
            if (label) {
                label.classList.remove("hidden-label");
            }
        }
    });
}

document.querySelectorAll(".content__form-block input, .content__form-block textarea").forEach((input) => {
    const label = input.nextElementSibling;
    input.addEventListener("input", () => {
        label.classList.toggle("hidden-label", input.value.trim() !== "");
    });
});

const birthdateInput = document.querySelectorAll(".birthdate");
if (birthdateInput) {
    birthdateInput.forEach((element) => {
        element.addEventListener("change", function () {
            if (this.value) {
                this.classList.add("hidden-label");
                this.style.color = "#222";
            } else {
                this.classList.remove("hidden-label");
                this.style.color = "transparent";
            }
        });
    });
}
function handleFileUpload(event, input) {
    const file = event.target.files[0];
    const previewContainer = input.closest(".photo-label").querySelector(".preview-container");
    const previewImage = previewContainer.querySelector(".preview");
    if (file && file.size <= 5 * 1024 * 1024) {
        previewImage.src = URL.createObjectURL(file);
        previewContainer.style.display = "flex";
        input.closest(".photo-label").classList.add("active");
    } else {
        alert("Файл перевищує розмір 5MB.");
        input.value = "";
    }
}
function removeImage(button) {
    const previewContainer = button.closest(".preview-container");
    const previewImage = previewContainer.querySelector(".preview");
    const input = button.closest(".photo-label").querySelector(".photo-input");
    input.closest(".photo-label").classList.remove("active");
    previewImage.src = "";
    previewContainer.style.display = "none";
    input.value = "";
}
document.querySelectorAll(".joinuser__form-file").forEach((label) => {
    label.addEventListener("click", (event) => {
        if (!event.target.closest(".delete-button")) {
            const fileInput = label.querySelector(".photo-input");
            if (fileInput) {
                fileInput.click();
            }
        }
    });
});
function showStep(event, step) {
    const button = event.currentTarget;
    const currentStep = button.closest(".joinuser__content").querySelector(`.joinuser__step-${step - 1}`);
    const nextStep = button.closest(".joinuser__content").querySelector(`.joinuser__step-${step}`);
    const requiredFields = currentStep.querySelectorAll(".joinuser__content-selected.show input.required, .joinuser__content-step:not(:first-of-type).active input");
    let allValid = true;
    requiredFields.forEach((field) => {
        const formBlock = field.closest(".content__form-block");
        if (formBlock) {
            if (field.type === "email") {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(field.value.trim())) {
                    formBlock.classList.add("input-error");
                    allValid = false;
                } else {
                    formBlock.classList.remove("input-error");
                }
            } else if (!field.value.trim()) {
                formBlock.classList.add("input-error");
                allValid = false;
            } else {
                formBlock.classList.remove("input-error");
            }
        }
    });

    const joinuserContent = button.closest(".joinuser__content-step");
    const agreeBlock = joinuserContent.querySelector(".joinuser__form-agree");
    const checkbox = joinuserContent.querySelector(".agree__checkbox");
    
    if (agreeBlock) {
        const selectedContent = joinuserContent.querySelector(".joinuser__content-selected");
        const checkboxExists = selectedContent && selectedContent.contains(checkbox);
        if (checkboxExists) {
            if (!checkbox.checked) {
                agreeBlock.classList.add("input-error");
                allValid = false;
            } else {
                agreeBlock.classList.remove("input-error");
            }
        }
    }
    

    if (allValid) {
        currentStep.classList.remove("active");
        nextStep.classList.add("active");
    }
}

document.querySelectorAll("form").forEach((element) => {
    element.addEventListener("submit", (event) => {
        event.preventDefault();
        const requiredFieldsStep1 = element.querySelectorAll(
            ".joinuser__content-step .joinuser__content-selected.show .content__form-block input, .joinuser__content-step .joinuser__content-selected.show .content__form-block select.required, .joinuser__content-step:not(:first-of-type) .content__form-block input"
        );

        let allValid = true;
        const formData = {};
        const collectData = (fields) => {
            fields.forEach((field) => {
                const formBlock = field.closest(".content__form-block");
                if (formBlock) {
                    if (field.tagName.toLowerCase() === "select") {
                        if (!field.value) {
                            formBlock.classList.add("input-error");
                            allValid = false;
                        } else {
                            formBlock.classList.remove("input-error");
                        }
                        formData[field.name] = field.value;
                    } else {
                        formData[field.name] = field.value.trim();
                        if (!field.value.trim() && field.classList.contains("required")) {
                            formBlock.classList.add("input-error");
                            allValid = false;
                        } else {
                            formBlock.classList.remove("input-error");
                        }
                    }
                }
            });
        };

        collectData(requiredFieldsStep1);

        const militaryStatusInput = element.querySelector(".joinuser__content-selected.show .type-status");
        if (militaryStatusInput && militaryStatusInput.closest("form") === element) {
            formData[militaryStatusInput.name] = militaryStatusInput.value;
        }

        const checkboxes = element.querySelectorAll(".agree__checkbox");
        checkboxes.forEach((checkbox) => {
            const agreeBlock = checkbox.closest(".joinuser__form-agree");
            if (!checkbox.checked) {
                agreeBlock.classList.add("input-error");
                allValid = false;
            } else {
                agreeBlock.classList.remove("input-error");
            }
        });

        console.log("Отправка данных формы:", formData);

        if (allValid) {
            console.log("Отправка данных формы:", formData);
        }
    });
});

function submitLegalEntityForm() {
    const form = document.getElementById("legal-entity-form");
    const requiredFields = form.querySelectorAll("input.required");
    const checkbox = form.querySelector(".agree__checkbox");
    let allValid = true;
    const formData = {};
    requiredFields.forEach((field) => {
        const formBlock = field.closest(".content__form-block");
        if (formBlock) {
            if (field.tagName.toLowerCase() === "select") {
                if (!field.value) {
                    formBlock.classList.add("input-error");
                    allValid = false;
                } else {
                    formBlock.classList.remove("input-error");
                }
                formData[field.name] = field.value;
            } else {
                formData[field.name] = field.value.trim();
                if (!field.value.trim() && field.classList.contains("required")) {
                    formBlock.classList.add("input-error");
                    allValid = false;
                } else {
                    formBlock.classList.remove("input-error");
                }
            }
        }
    });

    const agreeBlock = checkbox.closest(".joinuser__form-agree");
    if (!checkbox.checked) {
        agreeBlock.classList.add("input-error");
        allValid = false;
    } else {
        agreeBlock.classList.remove("input-error");
    }

    if (allValid) {
        console.log("Отправка данных формы:", formData);
    }
}




document.querySelectorAll('.join__btn').forEach((button, index) => {
    button.addEventListener('click', () => {
        const targetFormClass = button.getAttribute('data-target');
        document.querySelectorAll('.joinuser__form').forEach(form => {
            form.classList.remove('active');
        });
        const targetForm = document.querySelector(`.${targetFormClass}`);
        if (targetForm) {
            targetForm.classList.add('active');
        }
        const selectElement = document.querySelector('.person-type-select-second');
        document.querySelectorAll('.joinuser__content').forEach(content => {
            const firstStep = content.querySelector('.joinuser__content-step');
            if (firstStep) {
                firstStep.classList.add('active');  
            }
        });
        
        if (selectElement) {
            let value, labelText;
            if (index === 1) {
                value = 'ФОП';
                labelText = "ФОП<span>*</span>";
            } else if (index === 2) {
                value = 'Юридична особа';
                labelText = "Юридична особа<span>*</span>";
            }
            if (value) {
                selectElement.value = value; 
                const label = selectElement.nextElementSibling;
                const selectedFirst = selectElement.closest(".joinuser__content").querySelector(".joinuser__selected-first");
                const selectedSecond = selectElement.closest(".joinuser__content").querySelector(".joinuser__selected-second");
                if (index === 1) {
                    clearInputs(selectedSecond);
                    selectedSecond.classList.remove("show");
                    selectedFirst.classList.add("show");
                } else if (index === 2) {
                    clearInputs(selectedFirst);
                    selectedFirst.classList.remove("show");
                    selectedSecond.classList.add("show");
                }
                if (label) {
                    label.innerHTML = labelText;
                }
            }
        }
        document.querySelector('.joinuser').classList.add("active");
        document.querySelector(".body").classList.add("no-scroll");
    });
});




document.querySelector(".joinuser__close").addEventListener("click", function () {
    document.querySelectorAll('.joinuser__form, .joinuser__content, .joinuser__content-step').forEach(form => {
        form.classList.remove('active');
    });
    document.querySelector('.joinuser').classList.remove("active");
    document.querySelector(".body").classList.remove("no-scroll");

    const forms = document.querySelectorAll(".joinuser__content");
    forms.forEach((form) => {
        const inputs = form.querySelectorAll("input");
        inputs.forEach((input) => {
            input.value = "";
            const label = input.nextElementSibling;
            if (label) {
                label.classList.remove("hidden-label");
            }
        });

        const checkboxes = form.querySelectorAll(".agree__checkbox");
        checkboxes.forEach((checkbox) => {
            checkbox.checked = false;
            const formBlock = checkbox.closest(".content__form-agree");
            if (formBlock) {
                formBlock.classList.remove("input-error");
            }
        });

        const formBlocks = form.querySelectorAll(".content__form-block");
        formBlocks.forEach((block) => {
            block.classList.remove("input-error");
        });

        const deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach(button => {
            const previewContainer = button.closest(".preview-container");
            const previewImage = previewContainer.querySelector(".preview");
            const input = button.closest(".photo-label").querySelector(".photo-input");
    
            // Снимаем активный класс
            input.closest(".photo-label").classList.remove("active");
    
            // Устанавливаем пустой путь для изображения
            if (previewImage) {
                previewImage.src = "";
                previewContainer.style.display = "none"; // Скрываем контейнер с превью
            }
    
            // Очищаем значение инпута
            if (input) {
                input.value = "";
            }
        });
    });
});
