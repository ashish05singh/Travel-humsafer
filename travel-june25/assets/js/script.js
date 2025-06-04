const toggleBtn = document.getElementById("toggleBtn");
    const closeBtn = document.getElementById("closeBtn");
    const mobileNav = document.getElementById("mobileNav");
    const dropdownIcons = document.querySelectorAll(".dropdown-icon");

    toggleBtn.addEventListener("click", () => {
      mobileNav.classList.add("active");
    });

    closeBtn.addEventListener("click", () => {
      mobileNav.classList.remove("active");
    });

    dropdownIcons.forEach((icon) => {
      icon.addEventListener("click", (e) => {
        e.preventDefault();
        e.stopPropagation();

        const parentLi = icon.closest("li");
        parentLi.classList.toggle("open");
      });
    });

    // slider code------------

  let slides = document.querySelectorAll('.banner-sec');
  let current = 0;

  function showSlide(index) {
    slides.forEach((slide) => {
      slide.classList.remove('active');
      slide.style.display = 'none';
    });
    slides[index].style.display = 'block';
    slides[index].classList.add('active');
  }

  showSlide(current); // Initial display

  function nextSlide() {
    current = (current + 1) % slides.length;
    showSlide(current);
  }

  setInterval(nextSlide, 8000); // 👈 Slower interval: 8 seconds


