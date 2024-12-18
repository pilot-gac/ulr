document.addEventListener("DOMContentLoaded", function () {
    const linkContents = document.querySelectorAll(".header__link-content");
    linkContents.forEach((linkContent) => {
        const linkItems = linkContent.querySelectorAll(".header__link-content-prev, .header__link-items a, .header__link-item");
        function activateLinkContent() {
            if (window.innerWidth > 999) {
                linkContent.classList.add("active");
            }
        }
        function deactivateLinkContent() {
            if (window.innerWidth > 999) {
                linkContent.classList.remove("active");
            }
        }
        linkItems.forEach((item) => {
            item.addEventListener("mouseenter", activateLinkContent);
            item.addEventListener("mouseleave", deactivateLinkContent);
        });
    });
    const headerLinkItems = document.querySelectorAll(".header__link-item");
    function activateHeaderLinkItem() {
        if (window.innerWidth > 999) {
            this.classList.add("active");
        }
    }
    function deactivateHeaderLinkItem() {
        if (window.innerWidth > 999) {
            this.classList.remove("active");
        }
    }
    headerLinkItems.forEach((item) => {
        item.addEventListener("mouseenter", activateHeaderLinkItem);
        item.addEventListener("mouseleave", deactivateHeaderLinkItem);
    });
    document.querySelectorAll(".content__form-block input, .content__form-block textarea").forEach((input) => {
        const label = input.nextElementSibling;
        input.addEventListener("input", () => {
            label.classList.toggle("hidden-label", input.value.trim() !== "");
        });
    });
    document.querySelectorAll("input.required").forEach((input) => {
        input.addEventListener("input", () => {
            const formBlock = input.closest(".content__form-block");
            if (formBlock && formBlock.classList.contains("input-error") && input.value.trim()) {
                formBlock.classList.remove("input-error");
            }
        });
    });
    const agreeCheckbox = document.querySelectorAll(".agree__checkbox");
    if (agreeCheckbox) {
        agreeCheckbox.forEach((agreeCheckbox) => {
            agreeCheckbox.addEventListener("change", function () {
                const formBlock = this.closest(".content__form-agree");
                if (this.checked) {
                    formBlock.classList.remove("input-error");
                }
            });
        });
    }
    const joinuserFormButtons = document.querySelectorAll(".content__form-buttons");
    if (joinuserFormButtons) {
        joinuserFormButtons.forEach(element => {
            element.addEventListener("click", function (event) {
                const buttons = this.querySelectorAll(".toggle-button");
                const hiddenInput = this.querySelector(".type-status");
                if (event.target.classList.contains("toggle-button")) {
                    buttons.forEach((btn) => btn.classList.remove("selected"));
                    event.target.classList.add("selected");
                    if (hiddenInput) {
                        hiddenInput.value = event.target.dataset.status;
                    }
                }
            });
        });        
    }
    document.querySelectorAll(".addpopup__form").forEach((element) => {
        element.addEventListener("submit", (event) => {
            event.preventDefault();
            const inputsFields = element.querySelectorAll(".addpopup__form input, .content__form-block textarea");
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
            const statusInput = element.querySelector(".content__form-buttons .type-status");
            if (statusInput && statusInput.closest("form") === element) {
                formData[statusInput.name] = statusInput.value;
            }
            const checkboxes = element.querySelectorAll(".agree__checkbox");
            checkboxes.forEach((checkbox) => {
                const agreeBlock = checkbox.closest(".content__form-agree");
                if (!checkbox.checked) {
                    agreeBlock.classList.add("input-error");
                    allValid = false;
                } else {
                    agreeBlock.classList.remove("input-error");
                }
            });
            console.log("Form Data:", formData);
        });
    });
    document.querySelectorAll(".header__add").forEach((link) => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            if (window.innerWidth < 1000) {
                document.querySelectorAll(".header__burger, .header__menu, .header__link, .header__link-item a.active").forEach((element) => {
                    element.classList.remove("active");
                });
            }
            const popupId = this.getAttribute("data-popup");
            document.querySelectorAll(".addpopup__box").forEach((box) => {
                box.classList.remove("active");
                if (box.id === popupId) {
                    box.classList.add("active");
                }
            });
            const popup = document.querySelector(".addpopup");
            popup.classList.add("active");
            document.querySelector(".body").classList.add("no-scroll");
        });
    });
    document.querySelector(".addpopup__close").addEventListener("click", function () {
        document.querySelector(".body").classList.remove("no-scroll");
        const popup = document.querySelector(".addpopup");
        popup.classList.remove("active");
        const forms = popup.querySelectorAll(".addpopup__form");
        forms.forEach((form) => {
            const inputs = form.querySelectorAll("input, textarea");
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
        });
        setTimeout(() => {
            document.querySelectorAll(".addpopup__box").forEach((box) => box.classList.remove("active"));
        }, 100);
    });
});
function toggleActiveClass(links, minWidth) {
    links.forEach((link) => {
        link.addEventListener("click", (event) => {
            if (window.innerWidth < minWidth) {
                event.preventDefault();
                if (link.classList.contains("active")) {
                    link.classList.remove("active");
                } else {
                    links.forEach((el) => el.classList.remove("active"));
                    link.classList.add("active");
                }
            }
        });
    });
}
toggleActiveClass(document.querySelectorAll(".header__link-more"), 1000);
toggleActiveClass(document.querySelectorAll(".header__link-item > a"), 1000);
const burger = document.querySelector(".header__burger");
const menu = document.querySelector(".header__menu");
function toggleMenu() {
    burger.classList.toggle("active");
    menu.classList.toggle("active");
    document.querySelector(".body").classList.toggle("no-scroll");
    if (window.innerWidth < 1000) {
        document.querySelectorAll(".header__link, .header__link-item a.active").forEach((element) => {
            element.classList.remove("active");
        });
    }
}
function handleResize() {
    if (window.innerWidth > 999) {
        burger.classList.remove("active");
        menu.classList.remove("active");
        document.querySelector(".body").classList.remove("no-scroll");
    }
}
function handleClickOutside(event) {
    if (menu.classList.contains("active") && !menu.contains(event.target) && !burger.contains(event.target)) {
        toggleMenu();
    }
}
burger.addEventListener("click", toggleMenu);
window.addEventListener("load", handleResize);
window.addEventListener("resize", handleResize);
document.addEventListener("click", handleClickOutside);

const footerName = document.querySelectorAll(".footer__name");
footerName.forEach((header) => {
    header.addEventListener("click", function () {
        if (window.innerWidth < 480) {
            const footerBlock = this.closest(".footer__block");
            if (footerBlock.classList.contains("active")) {
                footerBlock.classList.remove("active");
            } else {
                document.querySelectorAll(".footer__block").forEach((block) => {
                    block.classList.remove("active");
                });
                footerBlock.classList.add("active");
            }
        }
    });
});
