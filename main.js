parcelRequire=function(e,r,t,n){var i,o="function"==typeof parcelRequire&&parcelRequire,u="function"==typeof require&&require;function f(t,n){if(!r[t]){if(!e[t]){var i="function"==typeof parcelRequire&&parcelRequire;if(!n&&i)return i(t,!0);if(o)return o(t,!0);if(u&&"string"==typeof t)return u(t);var c=new Error("Cannot find module '"+t+"'");throw c.code="MODULE_NOT_FOUND",c}p.resolve=function(r){return e[t][1][r]||r},p.cache={};var l=r[t]=new f.Module(t);e[t][0].call(l.exports,p,l,l.exports,this)}return r[t].exports;function p(e){return f(p.resolve(e))}}f.isParcelRequire=!0,f.Module=function(e){this.id=e,this.bundle=f,this.exports={}},f.modules=e,f.cache=r,f.parent=o,f.register=function(r,t){e[r]=[function(e,r){r.exports=t},{}]};for(var c=0;c<t.length;c++)try{f(t[c])}catch(e){i||(i=e)}if(t.length){var l=f(t[t.length-1]);"object"==typeof exports&&"undefined"!=typeof module?module.exports=l:"function"==typeof define&&define.amd?define(function(){return l}):n&&(this[n]=l)}if(parcelRequire=f,i)throw i;return f}({"Y661":[function(require,module,exports) {
"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var t=function(){window.NodeList&&!NodeList.prototype.forEach&&(NodeList.prototype.forEach=function(t,o){o=o||window;for(var e=0;e<this.length;e++)t.call(o,this[e],e,this)})};exports.default=t;
},{}],"ZX03":[function(require,module,exports) {
"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var e=function(){var e=document.querySelector(".js-gallery"),t=document.querySelector(".js-gallery-nav");if(e&&t)new Flickity(e,{wrapAround:!0,pageDots:!1}),new Flickity(t,{asNavFor:".js-gallery",contain:!0,pageDots:!1,prevNextButtons:!1})};exports.default=e;
},{}],"rCjw":[function(require,module,exports) {
"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var e=function(){var e=document.querySelector(".header"),t=document.querySelector(".js-menu"),l=document.querySelector(".header__container"),c=document.querySelectorAll(".header__link"),n=document.querySelector(".header__contact"),s=window.matchMedia("(max-width: 767px)");if(e&&window.addEventListener("scroll",function(){window.pageYOffset>=100?null==e||e.classList.add("header--fixed"):null==e||e.classList.remove("header--fixed")}),t&&l&&t.addEventListener("click",function(){null==e||e.classList.toggle("header--active"),null==t||t.classList.toggle("close")}),s.matches&&c&&e&&t){for(var r=0;r<c.length;r++)c[r].addEventListener("click",function(){null==e||e.classList.remove("header--active"),null==t||t.classList.remove("close")});null==n||n.addEventListener("click",function(){null==e||e.classList.remove("header--active"),null==t||t.classList.remove("close")})}};exports.default=e;
},{}],"vQ81":[function(require,module,exports) {
"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var e=function(){var e=document.querySelector(".service-slider"),t=document.querySelector(".service-slider__index"),n=document.querySelector(".service-slider__array"),o=new Flickity(e,{cellAlign:"left",prevNextButtons:!0,pageDots:!1,draggable:!1,contain:!0}),l=function(){var e=o.selectedIndex+1;t.textContent=e,n.textContent=o.slides.length};l(),o.on("select",l);var r=document.querySelector(".top__slider--second"),i=document.querySelector(".top__slider-pagination--second");new Flickity(r,{cellAlign:"left",prevNextButtons:!1,pageDots:!1,contain:!0});if(i)new Flickity(i,{cellAlign:"left",asNavFor:".top__slider--second",prevNextButtons:!1,pageDots:!1,contain:!0});var c=document.querySelector(".top__slider--third"),s=document.querySelector(".top__slider-pagination--third");new Flickity(c,{cellAlign:"left",prevNextButtons:!1,pageDots:!1,contain:!0});if(s)new Flickity(s,{cellAlign:"left",asNavFor:".top__slider--third",prevNextButtons:!1,pageDots:!1,contain:!0})};exports.default=e;
},{}],"jGFF":[function(require,module,exports) {
"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var e=function(){var e=document.querySelector(".js-service"),a=document.querySelector(".top__intro--service");null==e||e.addEventListener("click",function(){null==a||a.classList.add("fade-animate")});var t=document.querySelector(".js-benefits"),l=document.querySelector(".top__benefits");null==t||t.addEventListener("click",function(){null==l||l.classList.add("fade-animate"),null==a||a.classList.remove("fade-animate")});var n=document.querySelector(".js-achievement"),s=document.querySelector(".top__works");null==n||n.addEventListener("click",function(){null==s||s.classList.add("fade-animate"),null==a||a.classList.remove("fade-animate"),null==l||l.classList.remove("fade-animate")});var c=document.querySelector(".js-flow"),i=document.querySelector(".top__flow");null==c||c.addEventListener("click",function(){null==i||i.classList.add("fade-animate"),null==a||a.classList.remove("fade-animate"),null==l||l.classList.remove("fade-animate"),null==s||s.classList.remove("fade-animate")});var o=document.querySelector(".js-company"),u=document.querySelector(".top__company");null==o||o.addEventListener("click",function(){null==u||u.classList.add("fade-animate"),null==a||a.classList.remove("fade-animate"),null==l||l.classList.remove("fade-animate"),null==s||s.classList.remove("fade-animate"),null==i||i.classList.remove("fade-animate")});var r=document.querySelector(".js-contact"),d=document.querySelector(".top__contact");null==r||r.addEventListener("click",function(){null==d||d.classList.add("fade-animate"),null==a||a.classList.remove("fade-animate"),null==l||l.classList.remove("fade-animate"),null==s||s.classList.remove("fade-animate"),null==i||i.classList.remove("fade-animate"),null==u||u.classList.remove("fade-animate")})};exports.default=e;
},{}],"yLAL":[function(require,module,exports) {
"use strict";var e=this;Object.defineProperty(exports,"__esModule",{value:!0});var r=function(){var r=document.querySelector(".js-zip");r&&(null==r||r.addEventListener("keyup",function(){AjaxZip3.zip2addr(e," ","addr11","addr11")}))};exports.default=r;
},{}],"P7Pl":[function(require,module,exports) {
"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var e=function(){var e=document.querySelector(".preloader");window.addEventListener("load",function(){e.className+=" hidden"})};exports.default=e;
},{}],"Rgmk":[function(require,module,exports) {
"use strict";var e=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(exports,"__esModule",{value:!0});var r=e(require("./components/forEachPolyfill")),t=e(require("./components/galleryFunc")),o=e(require("./components/header")),n=e(require("./components/slider")),u=e(require("./components/anchorScroll")),a=e(require("./components/ajaxZip")),l=e(require("./components/preloader"));document.addEventListener("DOMContentLoaded",function(){r.default(),u.default(),t.default(),o.default(),n.default(),a.default(),l.default()},!1);
},{"./components/forEachPolyfill":"Y661","./components/galleryFunc":"ZX03","./components/header":"rCjw","./components/slider":"vQ81","./components/anchorScroll":"jGFF","./components/ajaxZip":"yLAL","./components/preloader":"P7Pl"}]},{},["Rgmk"], null)
//# sourceMappingURL=/js/index.js.map

// $(function(){
//     $(window).on("scroll", function() {
//       if ($(this).scrollTop() > 0 && $('#contact').offset().top - $(this).scrollTop() - $(this).height() > 0) {
//         $('.floating').fadeIn();
//       } else {
//         $('.floating').fadeOut();
//       }
//     });
//   });

$(document).ready(function() {
  $(window).on("scroll", function() {
      // #contact 要素が画面内に入ったかどうかをチェックする
      if ($('#contact').offset().top - $(window).scrollTop() < $(window).height()) {
          $('.floating').fadeOut(); // .floating をフェードアウトする
      }else{
        $('.floating').fadeIn();
      }
  });
});



  $(function () {
    $('a[href*="#"]').click(function () {
      const speed = 400;
      const target = $(this.hash === '#' || '' ? 'html' : this.hash)
      if (!target.length) return;
      const targetPos = target.offset().top - 100;
      $('html, body').animate({ scrollTop: targetPos }, speed, 'swing');
      return false;
    });
  });