const filterBtn = document.querySelector('.filter__select-btn');
const blogFilter = document.querySelector('.filter__select');
function toggleFilterContent() {
    if (window.innerWidth < 1000) {
        blogFilter.classList.toggle('active');
    }
}
function hideFilterContent(event) {
    if (window.innerWidth < 1000 && !blogFilter.contains(event.target) && !filterBtn.contains(event.target)) {
        blogFilter.classList.remove('active');
    }
}
filterBtn.addEventListener('click', toggleFilterContent);
document.addEventListener('click', hideFilterContent);

