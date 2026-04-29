
function toggleTheme() {
    const toggle = document.getElementById('themeToggle');
    const sun = document.getElementById('sunIcon');
    const moon = document.getElementById('moonIcon');
    const isLight = document.documentElement.classList.contains('light');

    if (isLight) {
        document.documentElement.classList.replace('light', 'dark');
        document.body.classList.replace('light', 'dark');
        toggle.classList.remove('light');
        sun.classList.add('hidden');
        moon.classList.remove('hidden');
        localStorage.setItem('theme', 'dark');
    } else {
        document.documentElement.classList.replace('dark', 'light');
        document.body.classList.replace('dark', 'light');
        toggle.classList.add('light');
        sun.classList.remove('hidden');
        moon.classList.add('hidden');
        localStorage.setItem('theme', 'light');
    }
}

// Page load pe theme apply
const toggle = document.getElementById('themeToggle');
const savedTheme = localStorage.getItem('theme') || 'light';

document.documentElement.classList.add(savedTheme);
document.body.classList.add(savedTheme);

if (savedTheme === 'dark') {
    toggle.classList.remove('light');
    document.getElementById('sunIcon').classList.add('hidden');
    document.getElementById('moonIcon').classList.remove('hidden');
} else {
    toggle.classList.add('light');
    document.getElementById('sunIcon').classList.remove('hidden');
    document.getElementById('moonIcon').classList.add('hidden');
}
function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    const h1 = document.getElementById('ham1');
    const h2 = document.getElementById('ham2');
    const h3 = document.getElementById('ham3');

    menu.classList.toggle('hidden');

    const isOpen = !menu.classList.contains('hidden');
    if (isOpen) {
        h1.style.transform = 'translateY(6px) rotate(45deg)';
        h2.style.opacity = '0';
        h3.style.transform = 'translateY(-6px) rotate(-45deg)';
    } else {
        h1.style.transform = '';
        h2.style.opacity = '';
        h3.style.transform = '';
    }
}

function toggleMobileSub(id, item) {
    const sub = document.getElementById(id);
    const svg = item.querySelector('svg');
    if (!sub) return;

    const isOpen = sub.style.maxHeight && sub.style.maxHeight !== '0px';

    document.querySelectorAll('#mobileMenu [id^="mob-"]').forEach(s => s.style.maxHeight = '0px');
    document.querySelectorAll('#mobileMenu li svg').forEach(s => s.style.transform = 'rotate(0deg)');

    if (!isOpen) {
        sub.style.maxHeight = sub.scrollHeight + 'px';
        if (svg) svg.style.transform = 'rotate(180deg)';
    }
}


function toggleWhatWeDo() {
    const dropdown = document.getElementById('whatWeDoDropdown');
    const arrow = document.getElementById("arrowIcon");

    dropdown.classList.toggle('hidden');
    arrow.classList.toggle("rotate-180");
}

// outside click close
document.addEventListener('click', function (e) {
    const dropdown = document.getElementById('whatWeDoDropdown');
    const trigger = document.querySelector('li[onclick="toggleWhatWeDo()"]');

    if (dropdown && !trigger.contains(e.target)) {
        dropdown.classList.add('hidden');

        const arrow = document.getElementById("arrowIcon");
        if (arrow) arrow.classList.remove("rotate-180");
    }
});


function toggleWhatWeAre() {
    const dropdown = document.getElementById('whatWeAreDropdown');
    const arrow = document.getElementById("whatWeAreArrow");

    dropdown.classList.toggle('hidden');
    arrow.classList.toggle("rotate-180");
}

// Outside click close
document.addEventListener('click', function (e) {
    const dropdown = document.getElementById('whatWeAreDropdown');
    const trigger = document.querySelector('li[onclick="toggleWhatWeAre()"]');
    const arrow = document.getElementById("whatWeAreArrow");

    if (dropdown && !trigger.contains(e.target)) {
        dropdown.classList.add('hidden');
        if (arrow) arrow.classList.remove("rotate-180");
    }
});

// scroll 
function scrollToContact() {
  const target = document.getElementById('contact-form');
  const targetPosition = target.getBoundingClientRect().top + window.scrollY;
  const startPosition = window.scrollY;
  const distance = targetPosition - startPosition;
  const duration = 1200; // jitna zyada, utna slow — aap change kar sakti hain
  let startTime = null;

  function ease(t) {
    return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
  }

  function animation(currentTime) {
    if (!startTime) startTime = currentTime;
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);
    window.scrollTo(0, startPosition + distance * ease(progress));
    if (elapsed < duration) requestAnimationFrame(animation);
  }

  requestAnimationFrame(animation);
}

//show services logic 




function toggleServices() {
    const extraCards = document.querySelectorAll('.extra-card');
    const buttons = document.querySelectorAll('.services-btn');
    
    const isHidden = extraCards[0].classList.contains('hidden');

    // toggle cards
    extraCards.forEach(card => {
        card.classList.toggle('hidden');
    });

    // update ALL buttons
    buttons.forEach(btn => {
        btn.innerHTML = isHidden
            ? `View Less 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                </svg>`
            : `View All Services 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                </svg>`;
    });
}



document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('.mySwiper')) {
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 1.2,
            spaceBetween: 16,
            loop: true,
            navigation: {
                nextEl: "#teamNext",
                prevEl: "#teamPrev",
            },
            breakpoints: {
                640: { slidesPerView: 2, spaceBetween: 20 },
                1024: { slidesPerView: 2, spaceBetween: 30 },
            }
        });
    }
});

// Swiper 2 (testimonials wala)
const swiper2 = new Swiper(".myswiper", {
    slidesPerView: 1.5,
    spaceBetween: 24,
    loop: true,
    navigation: {
        nextEl: "#testimonialNext",
        prevEl: "#testimonialPrev",
    },
    breakpoints: {
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
    }
});






  // Client-side validation 
      // Client-side validation 
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            let isValid = true;

            // Target elements
            const name = document.getElementById('full_name');
            const email = document.getElementById('email');
            const phone = document.getElementById('phone_input');
            const service = document.getElementById('service');
            const job = document.getElementById('job_inquiry');
            const details = document.getElementById('details');

            // Reset all errors
            document.querySelectorAll('.text-red-500').forEach(el => el.classList.add('hidden'));

            // Validations
            if (!name || name.value.trim() === '') { showError(name); isValid = false; }

            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!email || !emailPattern.test(email.value.trim())) { showError(email); isValid = false; }

            if (!phone) {
            const errorPhone = document.getElementById('errorPhone');
            if (errorPhone) errorPhone.classList.remove('hidden');
            isValid = false;
        } else if (phone.value.trim() === '') {
            showError(phone);
            isValid = false;
          }

            if (!service || service.value === '') { showError(service); isValid = false; }

            //  Job Inquiry Validation
            if (!job || job.value === '') {
                const errorJob = document.getElementById('errorJob');
                if (errorJob) errorJob.classList.remove('hidden');
                isValid = false;
            }

            if (!details || details.value.trim() === '') { showError(details); isValid = false; }

            if (isValid) {
                this.submit();
            }
        });
    }

    function showError(element) {
        if (element) {
            const parent = element.closest('[data-purpose="input-group"]') || element.parentElement;
            const errorSpan = parent.querySelector('.text-red-500');
            if (errorSpan) errorSpan.classList.remove('hidden');
        }
    }

    // --- Countries API Logic ---
    async function getData() {
        try {
            const res = await fetch("https://countriesnow.space/api/v0.1/countries/flag/images");
            const result = await res.json();
            const countries = result.data;

            const dropdown = document.getElementById("dropdown");
            const flag = document.getElementById("flag");
            const selected = document.getElementById("selected");

            if (!dropdown || !flag || !selected) return;

            const defaultCountry = countries.find(c => c.name === "Pakistan") || countries[0];
            flag.src = defaultCountry.flag;

            dropdown.innerHTML = '';

            countries.forEach(country => {
                const item = document.createElement("div");
                item.className = "flex items-center gap-2 px-3 py-2 cursor-pointer text-[13px] transition-colors duration-200 text-[#111827] dark:text-white hover:bg-[#f0f9ff] dark:hover:bg-[#0a3a6e]";
                item.innerHTML = `<img src="${country.flag}" class="w-5 h-4 object-cover flex-shrink-0"/><span>${country.name}</span>`;

                item.onclick = () => {
                    flag.src = country.flag;
                    dropdown.classList.add("hidden");
                };
                dropdown.appendChild(item);
            });

            selected.onclick = (e) => {
                e.stopPropagation();
                dropdown.classList.toggle("hidden");
            };

            document.addEventListener("click", (e) => {
                if (!selected.contains(e.target) && !dropdown.contains(e.target)) {
                    dropdown.classList.add("hidden");
                }
            });
        } catch (error) {
            console.error("Flags API Error:", error);
        }
    }

    getData();
});


// Success message ko 5 seconds baad hide karne ke liye
document.addEventListener('DOMContentLoaded', function() {
    const alert = document.getElementById('success-alert');
    if (alert) {
        // 5 seconds dikhane ke baad action shuru hoga
        setTimeout(function() {
            alert.style.transition = "all 0.6s cubic-bezier(0.4, 0, 0.2, 1)";
            alert.style.opacity = "0";
            alert.style.transform = "translate(-50%, -20px)"; // Upar ki taraf slide ho kar gayab hoga
            
            setTimeout(() => alert.remove(), 600);
        }, 5000);
    }
});