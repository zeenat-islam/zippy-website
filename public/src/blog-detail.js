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