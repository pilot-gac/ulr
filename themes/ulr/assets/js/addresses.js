document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll('.addresses__form-buttons .toggle-button');
    const addressesFormButtons = document.querySelector('.addresses__form-buttons');
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            if(window.innerWidth < 768){
                if (addressesFormButtons.classList.contains('active')) {
                    addressesFormButtons.classList.remove('active');
                } else {
                    addressesFormButtons.classList.add('active');
                }
            }
        });
    });
    document.addEventListener('click', function(event) {
        const formButtons = document.querySelector('.addresses__form-buttons.active');
        if (window.innerWidth < 768 && formButtons && !formButtons.contains(event.target)) {
            formButtons.classList.remove('active');
        }
    });
});
