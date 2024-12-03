document.addEventListener("DOMContentLoaded", function () {
  const navHeight = document.querySelector(".nav").offsetHeight;
  const navList = document.querySelector(".nav_list");
  const openBtn = document.querySelector(".open_btn");
  const closeBtn = document.querySelector(".close_btn");

  function closeAllDropdowns() {
    if (window.innerWidth < 1200) {
      document.querySelectorAll('.dropdown_content').forEach(function (content) {
        content.style.display = 'none';
      });
    }
  }

  function smoothScroll(event) {
    const href = event.currentTarget.getAttribute("href");
    const isInternalLink = href.startsWith("#");

    if (isInternalLink) {
      event.preventDefault();
      const targetId = href;
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY;
        const offsetPosition = targetPosition - navHeight - 40;

        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth"
        });
      }

      if (window.innerWidth < 1200) {
        navList.style.transform = "translateX(-110%)";
        closeAllDropdowns();
      }
    }
  }

  const smoothScrollLinks = document.querySelectorAll(".scroll-link");

  smoothScrollLinks.forEach((link) => {
    link.addEventListener("click", smoothScroll);
    link.addEventListener("click", function () {
      if (window.innerWidth < 1200) {
        navList.style.transform = "translateX(-110%)";
      }
    });
  });

  openBtn.addEventListener("click", function () {
    navList.style.transform = "translateX(0)";
  });

  closeBtn.addEventListener("click", function () {
    navList.style.transform = "translateX(-110%)";
  });

  window.onscroll = function () {
    var nav = document.querySelector(".nav");
    if (window.pageYOffset > 1) {
      nav.classList.add("scrolled");
    } else {
      nav.classList.remove("scrolled");
    }
  };

  window.addEventListener("resize", () => {
    if (window.innerWidth >= 1200) {
      navList.style.transform = "";
    } else {
      navList.style.transform = "translateX(-110%)";
    }
  });

  window.addEventListener('click', function(event) {
    if (!event.target.matches('.dropdown_toggle') && window.innerWidth < 1200) {
      closeAllDropdowns();
    }
  });

  AOS.init();
});
