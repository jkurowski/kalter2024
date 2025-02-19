/*! ResponsiveSlides.js v1.55
 * http://responsiveslides.com
 * https://arie.ls
 *
 * Copyright (c) 2011-2023 @arielsalminen
 * Available under the MIT license
 */

/*jslint browser: true, sloppy: true, vars: true, plusplus: true, indent: 2 */

(function ($, window, i) {
    $.fn.responsiveSlides = function (options) {

        // Default settings
        var settings = $.extend({
            "auto": true,             // Boolean: Animate automatically, true or false
            "speed": 500,             // Integer: Speed of the transition, in milliseconds
            "timeout": 4000,          // Integer: Time between slide transitions, in milliseconds
            "pager": false,           // Boolean: Show pager, true or false
            "nav": false,             // Boolean: Show navigation, true or false
            "random": false,          // Boolean: Randomize the order of the slides, true or false
            "pause": false,           // Boolean: Pause on hover, true or false
            "pauseControls": true,    // Boolean: Pause when hovering controls, true or false
            "prevText": "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"9.05\" height=\"16.484\" viewBox=\"0 0 9.05 16.484\"><path id=\"chevron_right_FILL0_wght100_GRAD0_opsz24\" d=\"M363.434-675.758,356-683.192l.808-.808,8.242,8.242-8.242,8.242-.808-.808Z\" transform=\"translate(365.05 -667.516) rotate(180)\" fill=\"#fff\"></path></svg>",   // String: Text for the "previous" button
            "nextText": "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"9.05\" height=\"16.484\" viewBox=\"0 0 9.05 16.484\"><path id=\"chevron_right_FILL0_wght100_GRAD0_opsz24\" d=\"M363.434-675.758,356-683.192l.808-.808,8.242,8.242-8.242,8.242-.808-.808Z\" transform=\"translate(-356 684)\" fill=\"#fff\"></path></svg>",       // String: Text for the "next" button
            "maxwidth": "",           // Integer: Max-width of the slideshow, in pixels
            "navContainer": "",       // Selector: Where auto generated controls should be appended to, default is after the <ul>
            "manualControls": "",     // Selector: Declare custom pager navigation
            "namespace": "rslides",   // String: change the default namespace used
            "before": $.noop,         // Function: Before callback
            "after": $.noop           // Function: After callback
        }, options);

        return this.each(function () {

            // Index for namespacing
            i++;

            var $this = $(this),

                // Local variables
                vendor,
                selectTab,
                startCycle,
                restartCycle,
                rotate,
                $tabs,

                // Helpers
                index = 0,
                $slide = $this.children(),
                length = $slide.length,
                fadeTime = parseFloat(settings.speed),
                waitTime = parseFloat(settings.timeout),
                maxw = parseFloat(settings.maxwidth),

                // Namespacing
                namespace = settings.namespace,
                namespaceIdx = namespace + i,

                // Classes
                navClass = namespace + "_nav " + namespaceIdx + "_nav",
                activeClass = namespace + "_here",
                visibleClass = namespaceIdx + "_on",
                slideClassPrefix = namespaceIdx + "_s",

                // Pager
                $pager = $("<ul class='" + namespace + "_tabs " + namespaceIdx + "_tabs' />"),

                // Styles for visible and hidden slides
                visible = {"float": "left", "position": "relative", "opacity": 1, "zIndex": 2},
                hidden = {"float": "none", "position": "absolute", "opacity": 0, "zIndex": 1},

                // Detect transition support
                supportsTransitions = (function () {
                    var docBody = document.body || document.documentElement;
                    var styles = docBody.style;
                    var prop = "transition";
                    if (typeof styles[prop] === "string") {
                        return true;
                    }
                    // Tests for vendor specific prop
                    vendor = ["Moz", "Webkit", "Khtml", "O", "ms"];
                    prop = prop.charAt(0).toUpperCase() + prop.substr(1);
                    var i;
                    for (i = 0; i < vendor.length; i++) {
                        if (typeof styles[vendor[i] + prop] === "string") {
                            return true;
                        }
                    }
                    return false;
                })(),

                // Fading animation
                slideTo = function (idx) {
                    settings.before(idx);
                    // If CSS3 transitions are supported
                    if (supportsTransitions) {
                        $slide
                            .removeClass(visibleClass)
                            .css(hidden)
                            .eq(idx)
                            .addClass(visibleClass)
                            .css(visible);
                        index = idx;
                        setTimeout(function () {
                            settings.after(idx);
                        }, fadeTime);
                        // If not, use jQuery fallback
                    } else {
                        $slide
                            .stop()
                            .fadeOut(fadeTime, function () {
                                $(this)
                                    .removeClass(visibleClass)
                                    .css(hidden)
                                    .css("opacity", 1);
                            })
                            .eq(idx)
                            .fadeIn(fadeTime, function () {
                                $(this)
                                    .addClass(visibleClass)
                                    .css(visible);
                                settings.after(idx);
                                index = idx;
                            });
                    }
                };

            // Random order
            if (settings.random) {
                $slide.sort(function () {
                    return (Math.round(Math.random()) - 0.5);
                });
                $this
                    .empty()
                    .append($slide);
            }

            // Add ID's to each slide
            $slide.each(function (i) {
                this.id = slideClassPrefix + i;
            });

            // Add max-width and classes
            $this.addClass(namespace + " " + namespaceIdx);
            if (options && options.maxwidth) {
                $this.css("max-width", maxw);
            }

            // Hide all slides, then show first one
            $slide
                .hide()
                .css(hidden)
                .eq(0)
                .addClass(visibleClass)
                .css(visible)
                .show();

            // CSS transitions
            if (supportsTransitions) {
                $slide
                    .show()
                    .css({
                        // -ms prefix isn't needed as IE10 uses prefix free version
                        "-webkit-transition": "opacity " + fadeTime + "ms ease-in-out",
                        "-moz-transition": "opacity " + fadeTime + "ms ease-in-out",
                        "-o-transition": "opacity " + fadeTime + "ms ease-in-out",
                        "transition": "opacity " + fadeTime + "ms ease-in-out"
                    });
            }

            // Only run if there's more than one slide
            if ($slide.length > 1) {

                // Make sure the timeout is at least 100ms longer than the fade
                if (waitTime < fadeTime + 100) {
                    return;
                }

                // Pager
                if (settings.pager && !settings.manualControls) {
                    var tabMarkup = [];
                    $slide.each(function (i) {
                        var n = i + 1;
                        tabMarkup +=
                            "<li>" +
                            "<a href='#' class='" + slideClassPrefix + n + "'>" + n + "</a>" +
                            "</li>";
                    });
                    $pager.append(tabMarkup);

                    // Inject pager
                    if (options.navContainer) {
                        $(settings.navContainer).append($pager);
                    } else {
                        $this.after($pager);
                    }
                }

                // Manual pager controls
                if (settings.manualControls) {
                    $pager = $(settings.manualControls);
                    $pager.addClass(namespace + "_tabs " + namespaceIdx + "_tabs");
                }

                // Add pager slide class prefixes
                if (settings.pager || settings.manualControls) {
                    $pager.find('li').each(function (i) {
                        $(this).addClass(slideClassPrefix + (i + 1));
                    });
                }

                // If we have a pager, we need to set up the selectTab function
                if (settings.pager || settings.manualControls) {
                    $tabs = $pager.find('a');

                    // Select pager item
                    selectTab = function (idx) {
                        $tabs
                            .closest("li")
                            .removeClass(activeClass)
                            .eq(idx)
                            .addClass(activeClass);
                    };
                }

                // Auto cycle
                if (settings.auto) {

                    startCycle = function () {
                        rotate = setInterval(function () {

                            // Clear the event queue
                            $slide.stop(true, true);

                            var idx = index + 1 < length ? index + 1 : 0;

                            // Remove active state and set new if pager is set
                            if (settings.pager || settings.manualControls) {
                                selectTab(idx);
                            }

                            slideTo(idx);
                        }, waitTime);
                    };

                    // Init cycle
                    startCycle();
                }

                // Restarting cycle
                restartCycle = function () {
                    if (settings.auto) {
                        // Stop
                        clearInterval(rotate);
                        // Restart
                        startCycle();
                    }
                };

                // Pause on hover
                if (settings.pause) {
                    $this.hover(function () {
                        clearInterval(rotate);
                    }, function () {
                        restartCycle();
                    });
                }

                // Pager click event handler
                if (settings.pager || settings.manualControls) {
                    $tabs.bind("click", function (e) {
                        e.preventDefault();

                        if (!settings.pauseControls) {
                            restartCycle();
                        }

                        // Get index of clicked tab
                        var idx = $tabs.index(this);

                        // Break if element is already active or currently animated
                        if (index === idx || $("." + visibleClass).queue('fx').length) {
                            return;
                        }

                        // Remove active state from old tab and set new one
                        selectTab(idx);

                        // Do the animation
                        slideTo(idx);
                    })
                        .eq(0)
                        .closest("li")
                        .addClass(activeClass);

                    // Pause when hovering pager
                    if (settings.pauseControls) {
                        $tabs.hover(function () {
                            clearInterval(rotate);
                        }, function () {
                            restartCycle();
                        });
                    }
                }

                // Navigation
                if (settings.nav) {
                    var navMarkup =
                        "<a href='#' class='" + navClass + " prev'>" + settings.prevText + "</a>" +
                        "<a href='#' class='" + navClass + " next'>" + settings.nextText + "</a>";

                    // Inject navigation
                    if (options.navContainer) {
                        $(settings.navContainer).append(navMarkup);
                    } else {
                        $this.after(navMarkup);
                    }

                    var $trigger = $("." + namespaceIdx + "_nav"),
                        $prev = $trigger.filter(".prev");

                    // Click event handler
                    $trigger.bind("click", function (e) {
                        e.preventDefault();

                        var $visibleClass = $("." + visibleClass);

                        // Prevent clicking if currently animated
                        if ($visibleClass.queue('fx').length) {
                            return;
                        }

                        //  Adds active class during slide animation
                        //  $(this)
                        //    .addClass(namespace + "_active")
                        //    .delay(fadeTime)
                        //    .queue(function (next) {
                        //      $(this).removeClass(namespace + "_active");
                        //      next();
                        //  });

                        // Determine where to slide
                        var idx = $slide.index($visibleClass),
                            prevIdx = idx - 1,
                            nextIdx = idx + 1 < length ? index + 1 : 0;

                        // Go to slide
                        slideTo($(this)[0] === $prev[0] ? prevIdx : nextIdx);
                        if (settings.pager || settings.manualControls) {
                            selectTab($(this)[0] === $prev[0] ? prevIdx : nextIdx);
                        }

                        if (!settings.pauseControls) {
                            restartCycle();
                        }
                    });

                    // Pause when hovering navigation
                    if (settings.pauseControls) {
                        $trigger.hover(function () {
                            clearInterval(rotate);
                        }, function () {
                            restartCycle();
                        });
                    }
                }

            }

            // Max-width fallback
            if (typeof document.body.style.maxWidth === "undefined" && options.maxwidth) {
                var widthSupport = function () {
                    $this.css("width", "100%");
                    if ($this.width() > maxw) {
                        $this.css("width", maxw);
                    }
                };

                // Init fallback
                widthSupport();
                $(window).bind("resize", function () {
                    widthSupport();
                });
            }

        });

    };
})(jQuery, this, 0);


//Galeria
;window.Modernizr=function(a,b,c){function x(a){j.cssText=a}function y(a,b){return x(prefixes.join(a+";")+(b||""))}function z(a,b){return typeof a===b}function A(a,b){return!!~(""+a).indexOf(b)}function B(a,b){for(var d in a){var e=a[d];if(!A(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function C(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:z(f,"function")?f.bind(d||b):f}return!1}function D(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+n.join(d+" ")+d).split(" ");return z(b,"string")||z(b,"undefined")?B(e,b):(e=(a+" "+o.join(d+" ")+d).split(" "),C(e,b,c))}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m="Webkit Moz O ms",n=m.split(" "),o=m.toLowerCase().split(" "),p={},q={},r={},s=[],t=s.slice,u,v={}.hasOwnProperty,w;!z(v,"undefined")&&!z(v.call,"undefined")?w=function(a,b){return v.call(a,b)}:w=function(a,b){return b in a&&z(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=t.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(t.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(t.call(arguments)))};return e}),p.csstransitions=function(){return D("transition")};for(var E in p)w(p,E)&&(u=E.toLowerCase(),e[u]=p[E](),s.push((e[u]?"":"no-")+u));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)w(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},x(""),i=k=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,e._domPrefixes=o,e._cssomPrefixes=n,e.testProp=function(a){return B([a])},e.testAllProps=D,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+s.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};

// Hover Thumbs
(function(c,b,d){c.HoverDir=function(e,f){this.$el=c(f);this._init(e)};c.HoverDir.defaults={speed:300,easing:"ease",hoverDelay:0,inverse:false};c.HoverDir.prototype={_init:function(e){this.options=c.extend(true,{},c.HoverDir.defaults,e);this.transitionProp="all "+this.options.speed+"ms "+this.options.easing;this.support=Modernizr.csstransitions;this._loadEvents()},_loadEvents:function(){var e=this;this.$el.on("mouseenter.hoverdir, mouseleave.hoverdir",function(i){var g=c(this),f=g.find("div"),j=e._getDir(g,{x:i.pageX,y:i.pageY}),h=e._getStyle(j);if(i.type==="mouseenter"){f.hide().css(h.from);clearTimeout(e.tmhover);e.tmhover=setTimeout(function(){f.show(0,function(){var k=c(this);if(e.support){k.css("transition",e.transitionProp)}e._applyAnimation(k,h.to,e.options.speed)})},e.options.hoverDelay)}else{if(e.support){f.css("transition",e.transitionProp)}clearTimeout(e.tmhover);e._applyAnimation(f,h.from,e.options.speed)}})},_getDir:function(g,k){var f=g.width(),i=g.height(),e=(k.x-g.offset().left-(f/2))*(f>i?(i/f):1),l=(k.y-g.offset().top-(i/2))*(i>f?(f/i):1),j=Math.round((((Math.atan2(l,e)*(180/Math.PI))+180)/90)+3)%4;return j},_getStyle:function(k){var g,l,i={left:"0px",top:"-100%"},e={left:"0px",top:"100%"},h={left:"-100%",top:"0px"},f={left:"100%",top:"0px"},m={top:"0px"},j={left:"0px"};switch(k){case 0:g=!this.options.inverse?i:e;l=m;break;case 1:g=!this.options.inverse?f:h;l=j;break;case 2:g=!this.options.inverse?e:i;l=m;break;case 3:g=!this.options.inverse?h:f;l=j;break}return{from:g,to:l}},_applyAnimation:function(f,e,g){c.fn.applyStyle=this.support?c.fn.css:c.fn.animate;f.stop().applyStyle(e,c.extend(true,[],{duration:g+"ms"}))},};var a=function(e){if(b.console){b.console.error(e)}};c.fn.hoverdir=function(g){var e=c.data(this,"hoverdir");if(typeof g==="string"){var f=Array.prototype.slice.call(arguments,1);this.each(function(){if(!e){a("cannot call methods on hoverdir prior to initialization; attempted to call method '"+g+"'");return}if(!c.isFunction(e[g])||g.charAt(0)==="_"){a("no such method '"+g+"' for hoverdir instance");return}e[g].apply(e,f)})}else{this.each(function(){if(e){e._init()}else{e=c.data(this,"hoverdir",new c.HoverDir(g,this))}})}return e}})(jQuery,window);(function(e){if(typeof define==="function"&&define.amd){define(["jquery"],e)}else{e(jQuery)}})(function(e){function n(e){return u.raw?e:encodeURIComponent(e)}function r(e){return u.raw?e:decodeURIComponent(e)}function i(e){return n(u.json?JSON.stringify(e):String(e))}function s(e){if(e.indexOf('"')===0){e=e.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\")}try{e=decodeURIComponent(e.replace(t," "));return u.json?JSON.parse(e):e}catch(n){}}function o(t,n){var r=u.raw?t:s(t);return e.isFunction(n)?n(r):r}var t=/\+/g;var u=e.cookie=function(t,s,a){if(s!==undefined&&!e.isFunction(s)){a=e.extend({},u.defaults,a);if(typeof a.expires==="number"){var f=a.expires,l=a.expires=new Date;l.setTime(+l+f*864e5)}return document.cookie=[n(t),"=",i(s),a.expires?"; expires="+a.expires.toUTCString():"",a.path?"; path="+a.path:"",a.domain?"; domain="+a.domain:"",a.secure?"; secure":""].join("")}var c=t?undefined:{};var h=document.cookie?document.cookie.split("; "):[];for(var p=0,d=h.length;p<d;p++){var v=h[p].split("=");var m=r(v.shift());var g=v.join("=");if(t&&t===m){c=o(g,s);break}if(!t&&(g=o(g))!==undefined){c[m]=g}}return c};u.defaults={};e.removeCookie=function(t,n){if(e.cookie(t)===undefined){return false}e.cookie(t,"",e.extend({},n,{expires:-1}));return!e.cookie(t)}});function getCookie(b){var c,a,e,d=document.cookie.split(";");for(c=0;c<d.length;c++){a=d[c].substr(0,d[c].indexOf("="));e=d[c].substr(d[c].indexOf("=")+1);a=a.replace(/^\s+|\s+$/g,"");if(a==b){return unescape(e)}}};

function dropdownMobile() {
    document.querySelectorAll('.nav-item.dropdown .nav-link').forEach(item => item.removeAttribute('data-bs-hover'))
    document.querySelectorAll('.nav-item.dropdown .nav-link').forEach(item => item.classList.remove('dropdown-hover'))
    document.querySelectorAll('.nav-item.dropdown .nav-link').forEach(item => item.setAttribute('data-bs-toggle', 'dropdown'))
    document.querySelectorAll('.nav-item.dropdown .nav-link').forEach(item => item.classList.add('dropdown-toggle'))
}

document.addEventListener('DOMContentLoaded', () => {

    // Ruchoma galeria
    $('.col-gallery-thumb').each( function() { $(this).hoverdir(); } );

    // Slider
    $( '.textSlider ul' ).responsiveSlides({auto:true, pager:false, nav:true, timeout:5000, random:false, speed: 500});

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



