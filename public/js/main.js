function dropdownMobile() {
    document.querySelectorAll('.nav-item.dropdown .nav-link').forEach(item => item.removeAttribute('data-bs-hover'))
    document.querySelectorAll('.nav-item.dropdown .nav-link').forEach(item => item.classList.remove('dropdown-hover'))
    document.querySelectorAll('.nav-item.dropdown .nav-link').forEach(item => item.setAttribute('data-bs-toggle', 'dropdown'))
    document.querySelectorAll('.nav-item.dropdown .nav-link').forEach(item => item.classList.add('dropdown-toggle'))
}

document.addEventListener('DOMContentLoaded', () => {

    // Youtube
    $('iframe[src*="youtube"]').wrap("<div class='video-container'></div>");

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

// Easing
jQuery.easing.jswing=jQuery.easing.swing;jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,f,a,h,g){return jQuery.easing[jQuery.easing.def](e,f,a,h,g)},easeInQuad:function(e,f,a,h,g){return h*(f/=g)*f+a},easeOutQuad:function(e,f,a,h,g){return -h*(f/=g)*(f-2)+a},easeInOutQuad:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f+a}return -h/2*((--f)*(f-2)-1)+a},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a}return h/2*((f-=2)*f*f+2)+a},easeInQuart:function(e,f,a,h,g){return h*(f/=g)*f*f*f+a},easeOutQuart:function(e,f,a,h,g){return -h*((f=f/g-1)*f*f*f-1)+a},easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a}return -h/2*((f-=2)*f*f*f-2)+a},easeInQuint:function(e,f,a,h,g){return h*(f/=g)*f*f*f*f+a},easeOutQuint:function(e,f,a,h,g){return h*((f=f/g-1)*f*f*f*f+1)+a},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a}return h/2*((f-=2)*f*f*f*f+2)+a},easeInSine:function(e,f,a,h,g){return -h*Math.cos(f/g*(Math.PI/2))+h+a},easeOutSine:function(e,f,a,h,g){return h*Math.sin(f/g*(Math.PI/2))+a},easeInOutSine:function(e,f,a,h,g){return -h/2*(Math.cos(Math.PI*f/g)-1)+a},easeInExpo:function(e,f,a,h,g){return(f==0)?a:h*Math.pow(2,10*(f/g-1))+a},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a},easeInOutExpo:function(e,f,a,h,g){if(f==0){return a}if(f==g){return a+h}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a}return h/2*(-Math.pow(2,-10*--f)+2)+a},easeInCirc:function(e,f,a,h,g){return -h*(Math.sqrt(1-(f/=g)*f)-1)+a},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a},easeInOutCirc:function(e,f,a,h,g){if((f/=g/2)<1){return -h/2*(Math.sqrt(1-f*f)-1)+a}return h/2*(Math.sqrt(1-(f-=2)*f)+1)+a},easeInElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k)==1){return e+l}if(!j){j=k*0.3}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}return -(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e},easeOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k)==1){return e+l}if(!j){j=k*0.3}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}return g*Math.pow(2,-10*h)*Math.sin((h*k-i)*(2*Math.PI)/j)+l+e},easeInOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k/2)==2){return e+l}if(!j){j=k*(0.3*1.5)}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}if(h<1){return -0.5*(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e}return g*Math.pow(2,-10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j)*0.5+l+e},easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*(f/=h)*f*((g+1)*f-g)+a},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a},easeInOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}if((f/=h/2)<1){return i/2*(f*f*(((g*=(1.525))+1)*f-g))+a}return i/2*((f-=2)*f*(((g*=(1.525))+1)*f+g)+2)+a},easeInBounce:function(e,f,a,h,g){return h-jQuery.easing.easeOutBounce(e,g-f,0,h,g)+a},easeOutBounce:function(e,f,a,h,g){if((f/=g)<(1/2.75)){return h*(7.5625*f*f)+a}else{if(f<(2/2.75)){return h*(7.5625*(f-=(1.5/2.75))*f+0.75)+a}else{if(f<(2.5/2.75)){return h*(7.5625*(f-=(2.25/2.75))*f+0.9375)+a}else{return h*(7.5625*(f-=(2.625/2.75))*f+0.984375)+a}}}},easeInOutBounce:function(e,f,a,h,g){if(f<g/2){return jQuery.easing.easeInBounce(e,f*2,0,h,g)*0.5+a}return jQuery.easing.easeOutBounce(e,f*2-g,0,h,g)*0.5+h*0.5+a}});



