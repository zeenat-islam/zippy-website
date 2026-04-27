
function toggleTheme() {
    const toggle = document.getElementById('themeToggle');
    const sun = document.getElementById('sunIcon');
    const moon = document.getElementById('moonIcon');
    const isLight = document.body.classList.contains('light');

    if (isLight) {
        document.body.classList.replace('light', 'dark');
        toggle.classList.remove('light');
        sun.classList.add('hidden');
        moon.classList.remove('hidden');
    } else {
        document.body.classList.replace('dark', 'light');
        toggle.classList.add('light');
        sun.classList.remove('hidden');
        moon.classList.add('hidden');
    }
}

// Default: light mode
const toggle = document.getElementById('themeToggle'); // ✅ pehle define karo
document.body.classList.add('light');
toggle.classList.add('light');

function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
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


