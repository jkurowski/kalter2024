function dropdownMobile() {
    document.querySelectorAll('.nav-item.dropdown .nav-link').forEach(item => item.removeAttribute('data-bs-hover'))
    document.querySelectorAll('.nav-item.dropdown .nav-link').forEach(item => item.classList.remove('dropdown-hover'))
    document.querySelectorAll('.nav-item.dropdown .nav-link').forEach(item => item.setAttribute('data-bs-toggle', 'dropdown'))
    document.querySelectorAll('.nav-item.dropdown .nav-link').forEach(item => item.classList.add('dropdown-toggle'))
}

document.addEventListener('DOMContentLoaded', () => {

    // Image lightbox
    const glightbox = new GLightbox();

    // Dropdown hover
    if (window.matchMedia('(max-width: 1200px)').matches) {
        dropdownMobile()
    }

    // Init AOS
    if (window.AOS !== undefined) {
        AOS.init({
            duration: 1000,
            disable: 'mobile',
            once: true
        });
    }

    //  fix for images with loading="lazy" attribute
    document.querySelectorAll('img').forEach(img => {
        img.addEventListener('load', () => {
            AOS.refresh()
        })
    })

    // add .scrolled class to header when page is scrolled
    const header = document.querySelector('header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY >= 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // Sliders
    const sliders = [...document.querySelectorAll('[data-slick]')];
    if (sliders.length > 0) {

        const observerOptions = {
            rootMargin: '100px',
        };


        const observerCallback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    $(entry.target).slick();
                    observer.unobserve(entry.target);
                    AOS.refresh();
                }
            });
        };

        const observer = new IntersectionObserver(observerCallback, observerOptions);

        sliders.forEach(slider => {
            observer.observe(slider);
        });
    }

    // list/grid switcher
    // const switchers = [...document.querySelectorAll('[data-layout-switcher]')]
    // const layout = document.querySelector('[data-layout]')
    // if (switchers.length > 0) {
    //
    //     switchers.forEach(switcher => {
    //         switcher.addEventListener('click', () => {
    //             const layoutType = switcher.dataset.layoutSwitcher
    //             layout.dataset.layout = layoutType
    //             switchers.forEach(s => s.classList.remove('text-opacity-25'))
    //             switcher.classList.add('text-opacity-25')
    //         })
    //     })
    // }

    const layoutContainer = document.getElementById("layout-container");
    const listLayoutBtn = document.getElementById("list-layout");
    const gridLayoutBtn = document.getElementById("grid-layout");

    listLayoutBtn.addEventListener("click", () => {
        layoutContainer.classList.remove("grid-layout");
        layoutContainer.classList.add("list-layout");
        listLayoutBtn.classList.add("active", "opacity-25");
        gridLayoutBtn.classList.remove("active", "opacity-25");
    });

    gridLayoutBtn.addEventListener("click", () => {
        layoutContainer.classList.remove("list-layout");
        layoutContainer.classList.add("grid-layout");
        gridLayoutBtn.classList.add("active", "opacity-25");
        listLayoutBtn.classList.remove("active", "opacity-25");
    });
})




