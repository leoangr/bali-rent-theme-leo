// menu bar
const runOpenMenu = () => {
    const buttonMenu = document.getElementById('icon-menu');
    const buttonClose = document.querySelectorAll('#icon-close');
    const listMenuMobile = document.getElementById('list-mobile-menu');
    const linksMobile = document.querySelectorAll('.ls-m');

    if (buttonMenu && listMenuMobile) {
        buttonMenu.addEventListener('click', () => {
            buttonMenu.classList.add('hide');
            listMenuMobile.classList.add('active');

            buttonClose.forEach(item => item.classList.remove('hide'));
        });
    }

    if (buttonClose.length) {
        buttonClose.forEach(item => {
            item.addEventListener('click', () => {
                if (buttonMenu) buttonMenu.classList.remove('hide');
                if (listMenuMobile) listMenuMobile.classList.remove('active');

                buttonClose.forEach(btn => btn.classList.add('hide'));
            });
        });
    }

    if (linksMobile.length) {
        linksMobile.forEach(item => {
            item.addEventListener('click', () => {
                if (buttonMenu) buttonMenu.classList.remove('hide');
                if (listMenuMobile) listMenuMobile.classList.remove('active');

                buttonClose.forEach(btn => btn.classList.add('hide'));
            });
        });
    }
};

// tabs
const runSelectVehicle = () => {
    const buttonSelectList = document.querySelectorAll(".list-bar-btn button");
    const listAllProduct = document.querySelectorAll(".list-all-product .card-product");
    const searchInput = document.getElementById("search-product");

    if (!buttonSelectList.length && !listAllProduct.length && !searchInput) return;

    let activeCategory = "all";

    function filterItems() {
        const searchValue = searchInput ? searchInput.value.toLowerCase() : "";

        listAllProduct.forEach(item => {
            const category = item.getAttribute("data-category");
            const title = item.querySelector(".title");
            const text = title ? title.textContent.toLowerCase() : "";

            const matchCategory = activeCategory === "all" || category === activeCategory;
            const matchSearch = text.includes(searchValue);

            item.classList.toggle('hidden', !(matchCategory && matchSearch));
        });
    }

    if (buttonSelectList.length) {
        buttonSelectList.forEach(btn => {
            btn.addEventListener('click', () => {
                buttonSelectList.forEach(b => b.classList.remove('active'));

                btn.classList.add('active');
                activeCategory = btn.getAttribute('data-id') || "all";

                filterItems();
            });
        });
    }

    if (searchInput) {
        searchInput.addEventListener("input", filterItems);
    }
};

// faq
const runOpenFaq = () => {
    const cardFaq = document.querySelectorAll('.card-faq');

    if (!cardFaq.length) return;

    cardFaq.forEach(btn => {
        const button = btn.querySelector('.btn-faq');
        const icon = btn.querySelector('span');
        const content = btn.querySelector('.content-faq');

        if (!button || !icon || !content) return;

        button.addEventListener('click', () => {
            icon.classList.toggle('rotate');
            content.classList.toggle('active');
        });
    });
};

// copyright
const runCopyright = () => {
    const tagCopyright = document.getElementById('copyright');

    if (tagCopyright) {
        const timeYear = new Date().getFullYear();
        tagCopyright.innerHTML = `&copy; ${timeYear} BaliRide. All rights reserved.`;
    }
};

const runSelectImage = () => {

    const mainImageData = document.getElementById('main-image-data');
    const optionImage = document.querySelectorAll('.list-option-gallery img');
    let activeID = '1';

    if (optionImage.length) {
        optionImage.forEach((item) => {
            const dataID = item.getAttribute('data-id');
            const dataImage = item.src;

            item.addEventListener('click', () => {
                activeID = dataID;
                mainImageData.src = dataImage;

                optionImage.forEach((btn) => {
                    btn.classList.remove('active');
                });

                item.classList.add('active')
            });

        })
    }
}

document.addEventListener("DOMContentLoaded", () => {
    runSelectVehicle();
    runOpenMenu();
    runOpenFaq();
    runCopyright();
    runSelectImage();
});