function toggleTheme() {
    const toggle = document.getElementById('themeToggle');
    const sun = document.getElementById('sunIcon');
    const moon = document.getElementById('moonIcon');
    const html = document.documentElement;

    const isLight = html.classList.contains('light');

    if (isLight) {
        html.classList.replace('light', 'dark');
        document.body.classList.replace('light', 'dark');
        toggle.classList.remove('light');
        sun.classList.add('hidden');
        moon.classList.remove('hidden');
        localStorage.setItem('theme', 'dark');
    } else {
        html.classList.replace('dark', 'light');
        document.body.classList.replace('dark', 'light');
        toggle.classList.add('light');
        sun.classList.remove('hidden');
        moon.classList.add('hidden');
        localStorage.setItem('theme', 'light');
    }
}

// Page load pe theme apply
const savedTheme = localStorage.getItem('theme') || 'light';
const themeToggle = document.getElementById('themeToggle');
const sun = document.getElementById('sunIcon');
const moon = document.getElementById('moonIcon');

if (savedTheme === 'dark') {
    document.documentElement.classList.add('dark');
    document.body.classList.add('dark');
    themeToggle.classList.remove('light');
    sun.classList.add('hidden');
    moon.classList.remove('hidden');
} else {
    document.documentElement.classList.add('light');
    document.body.classList.add('light');
    themeToggle.classList.add('light');
    sun.classList.remove('hidden');
    moon.classList.add('hidden');
}



// MOBILE MENU

function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
}



// WHAT WE DO DROPDOWN

function toggleWhatWeDo() {
    const dropdown = document.getElementById('whatWeDoDropdown');
    const arrow = document.getElementById('arrowIcon');
    dropdown.classList.toggle('hidden');
    arrow.classList.toggle('rotate-180');
}

document.addEventListener('click', function (e) {
    const dropdown = document.getElementById('whatWeDoDropdown');
    const trigger = document.querySelector('li[onclick="toggleWhatWeDo()"]');
    const arrow = document.getElementById('arrowIcon');
    if (dropdown && trigger && !trigger.contains(e.target)) {
        dropdown.classList.add('hidden');
        if (arrow) arrow.classList.remove('rotate-180');
    }
});



// WHAT WE ARE DROPDOWN

function toggleWhatWeAre() {
    const dropdown = document.getElementById('whatWeAreDropdown');
    const arrow = document.getElementById('whatWeAreArrow');
    dropdown.classList.toggle('hidden');
    arrow.classList.toggle('rotate-180');
}

document.addEventListener('click', function (e) {
    const dropdown = document.getElementById('whatWeAreDropdown');
    const trigger = document.querySelector('li[onclick="toggleWhatWeAre()"]');
    const arrow = document.getElementById('whatWeAreArrow');
    if (dropdown && trigger && !trigger.contains(e.target)) {
        dropdown.classList.add('hidden');
        if (arrow) arrow.classList.remove('rotate-180');
    }
});
const swiper = new Swiper(".mySwiper", {
    slidesPerView: 1.5, 
    spaceBetween: 10,
    loop: true,

    navigation: {
        nextEl: "#teamNext",
        prevEl: "#teamPrev",
    },

    breakpoints: {
        768: {
            slidesPerView: 2, 
            spaceBetween: 30,
        }
    }
});



  // Client-side validation 
    document.getElementById('contactForm').addEventListener('submit', function(e){
      e.preventDefault();
      let isValid = true;

      const name = document.getElementById('full_name');
      const email = document.getElementById('email');
      const phone = document.getElementById('phone');
      const service = document.getElementById('service');
      const job = document.getElementById('job_inquiry');
      const details = document.getElementById('details');

      // Reset error messages
      document.querySelectorAll('span.text-red-500').forEach(el => el.classList.add('hidden'));

      // Name validation
      if(name.value.trim() === ''){
        document.getElementById('errorName').classList.remove('hidden');
        isValid = false;
      }

      // Email validation
      const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
      if(!emailPattern.test(email.value.trim())){
        document.getElementById('errorEmail').classList.remove('hidden');
        isValid = false;
      }

      // Phone validation (optional)
      const phonePattern = /^\(?\d{3}\)?[- ]?\d{3}[- ]?\d{4}$/;
      if(phone.value.trim() !== '' && !phonePattern.test(phone.value.trim())){
        document.getElementById('errorPhone').classList.remove('hidden');
        isValid = false;
      }

      // Service validation
      if(service.value === ''){
        document.getElementById('errorService').classList.remove('hidden');
        isValid = false;
      }

      // Job Inquiry validation
      if(job.value === ''){
        document.getElementById('errorJob').classList.remove('hidden');
        isValid = false;
      }

      // Details validation
      if(details.value.trim() === ''){
        document.getElementById('errorDetails').classList.remove('hidden');
        isValid = false;
      }

      if(isValid){
        alert('Form submitted successfully!');
        this.reset();
      }
    });
 

 async function getData() {
    const res = await fetch("https://countriesnow.space/api/v0.1/countries/flag/images");
    const result = await res.json();
    const countries = result.data;

    const dropdown = document.getElementById("dropdown");
    const flag = document.getElementById("flag");
    const selected = document.getElementById("selected");

    const defaultCountry = countries.find(c => c.name === "Pakistan") || countries[0];
    flag.src = defaultCountry.flag;

    countries.forEach(country => {
      const item = document.createElement("div");
      item.className = "flex items-center gap-2 px-3 py-2 hover:bg-gray-100 cursor-pointer text-[13px] text-[#111827]";
      item.innerHTML = `
        <img src="${country.flag}" class="w-5 h-4 object-cover flex-shrink-0"/>
        <span>${country.name}</span>`;

      item.onclick = () => {
        flag.src = country.flag;
        dropdown.classList.add("hidden");
      };

      dropdown.appendChild(item);
    });

    selected.onclick = () => {
      dropdown.classList.toggle("hidden");
    };

    document.addEventListener("click", (e) => {
      if (!selected.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.classList.add("hidden");
      }
    });
  }

  getData();