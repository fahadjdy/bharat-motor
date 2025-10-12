// Mobile menu toggle
function toggleMobileMenu() {
  const mobileNav = document.getElementById("mobileNav")
  const hamburger = document.querySelector(".hamburger")

  mobileNav.classList.toggle("active")
  hamburger.classList.toggle("active")
}

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault()
    const target = document.querySelector(this.getAttribute("href"))
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      })
    }
  })
})

// Add scroll effect to header
window.addEventListener("scroll", () => {
  const header = document.querySelector(".header")
  if (window.scrollY > 100) {
    header.style.boxShadow = "0 2px 10px rgba(0,0,0,0.1)"
  } else {
    header.style.boxShadow = "none"
  }
})

// Close mobile menu when clicking outside
document.addEventListener("click", (e) => {
  const mobileNav = document.getElementById("mobileNav")
  const mobileMenuBtn = document.querySelector(".mobile-menu-btn")

  if (!mobileMenuBtn.contains(e.target) && !mobileNav.contains(e.target)) {
    mobileNav.classList.remove("active")
  }
})




 // Testimonials Swiper
        var testimonialSwiper = new Swiper(".testimonial-slider", {
            loop: true,
            grabCursor: true,
            spaceBetween: 30,
            centeredSlides: true,
            slidesPerView: 'auto',
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 25,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                }
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });