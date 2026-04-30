




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

            // ✅ Job Inquiry Validation
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
                item.className = "flex items-center gap-2 px-3 py-2 hover:bg-gray-100 cursor-pointer text-[13px] text-[#111827]";
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