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



// contact form 
// Utility function to strip HTML tags
function stripTags(input) {
  const div = document.createElement("div");
  div.innerHTML = input;
  return div.textContent || div.innerText || "";
}

// Show error message below input
function showError(field, message) {
  clearError(field);
  const errorEl = document.createElement("div");
  errorEl.className = "error";
  errorEl.innerText = message;
  errorEl.style.color = "red";
  errorEl.style.fontSize = "13px";
  errorEl.style.marginTop = "5px";
  field.parentElement.appendChild(errorEl);
  field.classList.add("error-input");
  field.focus();
}

// Clear previous error message
function clearError(field) {
  field.classList.remove("error-input");
  const oldError = field.parentElement.querySelector(".error");
  if (oldError) oldError.remove();
}

document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".contact-section-info-form form") || document.querySelector("form");
  if (!form) return;

  const nameField = form.querySelector('input[type="text"]:first-of-type');
  const emailField = form.querySelector('input[type="email"]');
  const phoneField = form.querySelector('input[type="tel"]');
  const messageField = form.querySelector("textarea");

  // Handle paste in phone: strip +91 or 0 automatically
  phoneField.addEventListener("paste", function (e) {
    e.preventDefault();
    let pasted = (e.clipboardData || window.clipboardData).getData("text");
    pasted = pasted.replace(/\D/g, "").replace(/^(91|0)/, "");
    this.value = pasted;
  });

  // Submit form
  form.addEventListener("submit", async function (e) {
    e.preventDefault();

    // Clear all old errors
    [nameField, emailField, phoneField, messageField].forEach(clearError);

    // Get sanitized values
    const name = stripTags(nameField.value.trim());
    const email = stripTags(emailField.value.trim());
    let phone = stripTags(phoneField.value.trim());
    const message = stripTags(messageField.value.trim());

    // === FRONTEND VALIDATION ===
    if (!/^[A-Za-z\s]{1,50}$/.test(name)) {
      return showError(nameField, "Name must contain only letters and spaces (max 50 chars).");
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email) || email.length > 50) {
      return showError(emailField, "Enter a valid email address (max 50 chars).");
    }

    phone = phone.replace(/\D/g, "").replace(/^(91|0)/, "");
    if (phone && !/^\d{10}$/.test(phone)) {
      return showError(phoneField, "Phone number must be exactly 10 digits.");
    }

    if (message.length < 1 || message.length > 500) {
      return showError(messageField, "Message must be between 1 and 500 characters.");
    }

    // === SUBMIT TO BACKEND ===
    const formData = new FormData();
    formData.append("name", name);
    formData.append("email", email);
    formData.append("mobile", phone);
    formData.append("description", message);

    try {
      const res = await fetch(location.origin + "/inquiry", {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')?.getAttribute("content") || ""
        },
        body: formData
      });

      if (!res.ok) {
        if (res.status === 422) {
          const errorData = await res.json();
          const errors = errorData.errors || {};
          if (errors.name) showError(nameField, errors.name[0]);
          if (errors.email) showError(emailField, errors.email[0]);
          if (errors.mobile) showError(phoneField, errors.mobile[0]);
          if (errors.description) showError(messageField, errors.description[0]);
        } else {
          alert("Something went wrong. Please try again.");
        }
        return;
      }

      const data = await res.json();
      if (data.status === "success") {
        alert(data.message || "Message sent successfully!");
        form.reset();
      } else {
        alert("Failed to send. Please try again.");
      }
    } catch (err) {
      console.error("Error:", err);
      alert("Server error. Please try again later.");
    }
  });
});


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


          // ===== Modal Show/Hide Logic =====
            window.addEventListener('load', function() {
                const modal = document.getElementById('advertiseModal');
                if (modal) {
                    // Delay slightly for smoother experience
                    setTimeout(() => {
                        modal.classList.add('active');
                    }, 500);
                }
            });

            function closeAdvertiseModal() {
                const modal = document.getElementById('advertiseModal');
                modal.classList.remove('active');
            }