const materialsSelectButtons = document.querySelectorAll('.materials__select-buttons .toggle-button');
const materialsSelectHiddenInput = document.querySelector('.materials__select-buttons .type-status');
const materialsContent = document.querySelector('.materials__content');
const materialsTitle = document.querySelector('.materials__title'); // Заголовок
const filterSelectItems = document.querySelectorAll('.filter__select-item');
const originalTitleText = materialsTitle.textContent;
const filterSelectCategories = document.querySelector('.filter__select-categories');
const materialsFilter = document.querySelector('.materials__filter');

if (materialsSelectButtons.length > 0 && materialsSelectHiddenInput && materialsContent) {
    materialsSelectButtons.forEach(button => {
        button.addEventListener('click', () => {
            materialsSelectHiddenInput.value = button.getAttribute('data-status');
            materialsContent.classList.toggle('categories-active', materialsSelectHiddenInput.value === 'Категорії матеріалів');
            materialsSelectButtons.forEach(btn => btn.classList.remove('selected'));
            button.classList.add('selected');
            materialsFilter.classList.remove('active-buttons');
            updateTitle();
            updateFilterSelectCategoriesText();
        });
    });
    materialsContent.classList.toggle('categories-active', materialsSelectHiddenInput.value === 'Категорії матеріалів');
}

filterSelectItems.forEach(item => {
    const radioInput = item.querySelector('input[type="radio"]');
    if (radioInput && radioInput.checked) {
        item.classList.add('active');
    }
});

filterSelectItems.forEach(item => {
    const label = item.querySelector('label');
    if (label) {
        label.addEventListener('click', () => {
            filterSelectItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');

            updateTitle();
        });
    }
});

function updateTitle() {
    if (materialsContent.classList.contains('categories-active')) {
        const selectedItem = Array.from(filterSelectItems).find(item => {
            const radioInput = item.querySelector('input[type="radio"]');
            return radioInput && radioInput.checked;
        });
        if (selectedItem) {
            const labelText = selectedItem.querySelector('span').textContent;
            materialsTitle.innerHTML = `${originalTitleText}/<span>${labelText}</span>`;
            materialsTitle.classList.add('selected-title');
        } else {
            materialsTitle.innerHTML = originalTitleText;
            materialsTitle.classList.remove('selected-title');
        }
    } else {
        materialsTitle.innerHTML = originalTitleText;
        materialsTitle.classList.remove('selected-title');
    }
}

function updateFilterSelectCategoriesText() {
    if (window.innerWidth < 768) {
        const selectedButton = Array.from(materialsSelectButtons).find(button => button.classList.contains('selected'));
        if (selectedButton) {
            filterSelectCategories.textContent = selectedButton.getAttribute('data-status');
        }
    }
}
updateFilterSelectCategoriesText()
updateTitle();

const filterBtn = document.querySelector('.filter__select-btn');
const blogFilter = document.querySelector('.filter__select');

function toggleFilterContent() {
    if (window.innerWidth < 1000) {
        materialsFilter.classList.remove('active-buttons');
        blogFilter.classList.toggle('active');
    }
}

function hideFilterContent(event) {
    if (window.innerWidth < 1000 && !blogFilter.contains(event.target) && !filterBtn.contains(event.target)) {
        blogFilter.classList.remove('active');
        blogFilter.classList.remove('active-buttons');
    }
}

function handleFilterSelectCategoriesClick() {
    if (window.innerWidth < 768) {
        materialsFilter.classList.remove('active');
        materialsFilter.classList.toggle('active-buttons');
    }
}

filterBtn.addEventListener('click', toggleFilterContent);
document.addEventListener('click', hideFilterContent);
if (filterSelectCategories) {
    filterSelectCategories.addEventListener('click', handleFilterSelectCategoriesClick);
}

const materialsSelectButtonsBlock = document.querySelector('.materials__select-buttons');
const materialsInner = document.querySelector('.materials__inner');
function moveSelectButtons() {
    if (window.innerWidth < 768) {
        if (materialsSelectButtonsBlock && materialsSelectButtonsBlock.parentElement !== materialsFilter) {
            materialsFilter.appendChild(materialsSelectButtonsBlock);
        }
    } else {
        if (materialsSelectButtonsBlock && materialsSelectButtonsBlock.parentElement === materialsFilter) {
            materialsInner.appendChild(materialsSelectButtonsBlock);
        }
    }
}

moveSelectButtons();
window.addEventListener('resize', moveSelectButtons);

// add category
