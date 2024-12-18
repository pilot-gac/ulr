document.querySelectorAll('.faq__item h3').forEach(item => {
    item.addEventListener('click', function() {
        const faqItem = this.parentElement;
        if (faqItem.classList.contains('active')) {
            faqItem.classList.remove('active');
        } else {
            document.querySelectorAll('.faq__item').forEach(el => el.classList.remove('active'));
            faqItem.classList.add('active');
        }
    });
});