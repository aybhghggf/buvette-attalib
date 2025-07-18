 document.addEventListener('DOMContentLoaded', function() {
        const categoryLinks = document.querySelectorAll('.category-link');
        const productCategories = document.querySelectorAll('.product-category');
        function showCategory(categoryId) {
            productCategories.forEach(category => {
                category.classList.add('hidden');
            });
            const activeCategory = document.getElementById(categoryId);
            if (activeCategory) {
                activeCategory.classList.remove('hidden');
            }
        }
        function setActiveLink(link) {
            categoryLinks.forEach(l => {
                l.classList.remove('active');
            });
            link.classList.add('active');
        }
        categoryLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const categoryId = this.dataset.category;
                showCategory(categoryId);
                setActiveLink(this);
            });
        });
        const defaultCategory = 'boissons';
        const defaultLink = document.querySelector(`.category-link[data-category="${defaultCategory}"]`);
        showCategory(defaultCategory);
        if (defaultLink) {
            setActiveLink(defaultLink);
        }
    });