

// BUTTON STATE FUNCTIONS

function setDefault(btn) {
    btn.dataset.active = 'false';
    btn.style.backgroundColor = isDark() ? '#525252' : '#E5E7EB';
    btn.style.color = isDark() ? '#ffffff' : '#000000';
}

function setActive(btn) {
    btn.dataset.active = 'true';
    btn.style.backgroundColor = '#00C6FF';
    btn.style.color = '#ffffff';
}

function initButtons() {
    document.querySelectorAll('.btn-service').forEach(btn => setDefault(btn));
}



// FILTER PANEL TOGGLE

document.getElementById('filterToggleBtn').addEventListener('click', () => {
    const content = document.getElementById('filterContent');
    const arrow = document.getElementById('filterArrow');

    content.classList.toggle('hidden');
    if (arrow) arrow.classList.toggle('rotate-180');

    if (!content.classList.contains('hidden')) {
        initButtons();
    }
});



// DARK MODE OBSERVER

const modeObserver = new MutationObserver(() => {
    document.querySelectorAll('.btn-service').forEach(btn => {
        if (btn.dataset.active !== 'true') {
            setDefault(btn);
        }
    });
});

modeObserver.observe(document.documentElement, { attributes: true, attributeFilter: ['class'] });
modeObserver.observe(document.body, { attributes: true, attributeFilter: ['class'] });



// ARTICLE FILTER FUNCTIONS

function showAllArticles() {
    document.querySelectorAll('article').forEach(card => {
        card.style.display = 'flex';
    });
}

function filterArticles(filterType, filterValue) {
    document.querySelectorAll('article').forEach(card => {
        let match = false;

        if (filterType === 'service') {
            match = card.dataset.service === filterValue;
        } else if (filterType === 'industry') {
            match = card.dataset.industry === filterValue;
        } else if (filterType === 'project') {
            match = card.dataset.project === filterValue;
        }

        card.style.display = match ? 'flex' : 'none';
    });
}



// BTN-SERVICE CLICK HANDLER

document.querySelectorAll('.btn-service').forEach(btn => {
    btn.addEventListener('click', () => {
        const isActive = btn.dataset.active === 'true';

        if (isActive) {
            setDefault(btn);
            showAllArticles();
        } else {
            setActive(btn);
            filterArticles(btn.dataset.filter, btn.dataset.value);
        }
    });
});

document.getElementById('show-more-btn').addEventListener('click', function() {
        // Saare cards dhoondein jin mein 'hidden' class hai
        const hiddenCards = document.querySelectorAll('.project-card.hidden');
        
        hiddenCards.forEach(card => {
            card.classList.remove('hidden'); // Unhein show kar dein
        });

        // Jab saare cards show ho jayen toh button ko gayab kar dein
        this.style.display = 'none';
    });