
document.querySelector(".js-navbar__toggler").addEventListener("click", function() {
  setTimeout(function() {
      const menuButton = document.querySelector('.mega-menu-toggle');
      const menu = document.querySelector('.mega-menu');

      if (menuButton && menu) {
          if (menu.classList.contains('mega-menu-open')) {
              menuButton.click(); // Zamknij menu
          } else {
              menuButton.click(); // Otwórz menu
          }
      }
  }, 100);
});

// Go to Top
const goToTop = document.querySelector("#go-to-top");
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("active");
    } else {
      goToTop.classList.remove("active");
    }
});

setTimeout(
 function() {
    //get the images
    let images = document.querySelectorAll("img"); 
     
    //loop through all images
    for (let i = 0; i < images.length; i++) {
        //add alt text if missing (but title is present)
        if (!images[i].alt) {
            images[i].alt = 'test';
		 images[i].setAttribute('alt', 'Raflen');
        }
    }
}, 1000);

let lastScrollY = window.scrollY;
let isFixed = false;

function handleScroll() {

  const nav = document.querySelector(".h-nav");
  const previousElement = nav.previousElementSibling;
  const wrap = document.querySelector('.sticker');
  const bounce = document.querySelector('.bounce');
  const navTop = nav.getBoundingClientRect().top;
  const previousElementBottom = previousElement ? previousElement.getBoundingClientRect().bottom : 0;
    
  if (navTop <= 0 && previousElementBottom <= 0 && !isFixed) {
        isFixed = true;
        // mainWrap.style.marginTop = `${navHeight}px`;
        nav.classList.add("fixed");
        document.querySelector('.js-navbar__toggler').classList.add("fixed");
        wrap.classList.add('active');
          bounce.classList.add('active');
  } else if (previousElementBottom > 0 && isFixed) {
        isFixed = false;
        nav.classList.remove("fixed");
        // mainWrap.style.marginTop = "0px";
        document.querySelector('.js-navbar__toggler').classList.remove("fixed")
  }
}
lastScrollY = window.scrollY;


let debounceTimeout;
document.addEventListener("scroll", function () {
    clearTimeout(debounceTimeout);
    debounceTimeout = setTimeout(handleScroll, 10); // Dodajemy opóźnienie 50ms
});

const calaps = document.querySelectorAll(".calaps");
for (let i = 0; i < calaps.length; i++) {
  calaps[i].querySelector(".calaps__opener").addEventListener("click", function () {
    calaps[i].classList.toggle("active");
  });
}


if (jQuery(window).width() > 500) {
  jQuery('.go-parallex').paroller({
      factor: -0.3, // multiplier for scrolling speed and offset, +- values for direction control  
      // factorLg: 0.4, // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control  
      type: 'foreground', // background, foreground  
      direction: 'vertical', // vertical, horizontal  
      transition: 'translate 0.1s ease' // CSS transition, added on elements where type:'foreground' 
  });
  jQuery('.go-parallex-2').paroller({
    factor: 0.1, // multiplier for scrolling speed and offset, +- values for direction control  
    // factorLg: 0.4, // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control  
    type: 'foreground', // background, foreground  
    direction: 'vertical', // vertical, horizontal  
    transition: 'translate 0.1s ease' // CSS transition, added on elements where type:'foreground' 
});
}

document.addEventListener('DOMContentLoaded', function () {
  const bounce = document.querySelector('.bounce');
  const close = document.querySelector('.close');
  const wrap = document.querySelector('.sticker');

  if (bounce && close && wrap) {
      bounce.addEventListener('click', function () {
          wrap.classList.add('active');
          bounce.classList.add('active');
      });

      close.addEventListener('click', function () {
          wrap.classList.remove('active');
          bounce.classList.remove('active');
      });
  }
  setTimeout(function () {
    wrap.classList.add('active');
          bounce.classList.add('active');
  }, 5000);
});

document.addEventListener('DOMContentLoaded', function() {
  const toggle = document.getElementById('consent-toggle');
  const more = document.getElementById('consent-more');
  if (toggle && more) {
      toggle.addEventListener('click', function(e) {
          e.preventDefault();
          const isHidden = more.style.display === 'none';
          more.style.display = isHidden ? 'inline' : 'none';
          // toggle.textContent = isHidden ? object_name.zwin : object_name.rozwin;
          toggle.textContent = isHidden ? object_name.rozwin : object_name.zwin;
         
      });
  }

  const toggleSticky = document.getElementById('consent-sticky');
  const moreSticky = document.getElementById('consent-more-sticky');

  if (toggleSticky && moreSticky && more) {
      toggleSticky.addEventListener('click', function(e) {
          e.preventDefault();
          const isHidden = more.style.display === 'none';
          moreSticky.style.display = isHidden ? 'inline' : 'none';
          toggleSticky.textContent = isHidden ? object_name.rozwin : object_name.zwin;
      });
  }
});

document.addEventListener('DOMContentLoaded', function () {
  const stickyMobile = document.querySelector('.sticker-mobile');
 document.addEventListener("scroll", () => {
  if (stickyMobile) {
    if (window.pageYOffset >= 200) {
      stickyMobile.classList.add('active');
    } else {
      stickyMobile.classList.remove('active');
    }
  }
});
});
