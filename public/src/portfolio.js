function isDark() {
    return document.body.classList.contains('dark') || 
           document.documentElement.classList.contains('dark');
}

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
    document.querySelectorAll('.project-card').forEach(card => {
        card.style.display = 'flex';
        card.classList.remove('hidden');
    });
}

function filterArticles(filterType, filterValue) {
    const allCards = document.querySelectorAll('.project-card');
    const matched = [];
    const unmatched = [];

    allCards.forEach(card => {
        let match = false;

        if (filterType === 'service') {
            match = card.dataset.service === filterValue;
        } else if (filterType === 'industry') {
            match = card.dataset.industry === filterValue;
        } else if (filterType === 'project') {
            match = card.dataset.project === filterValue;
        }

        if (match) {
            matched.push(card);
        } else {
            unmatched.push(card);
        }
    });

    // Pehle sab hide karein
    allCards.forEach(card => {
        card.classList.add('hidden');
        card.style.display = 'none';
    });

    // Matched show karein
    matched.forEach(card => {
        card.classList.remove('hidden');
        card.style.display = 'flex';
    });

    // Agar matched 3 se kam hain toh unmatched se baki fill ho
    const needed = 3 - matched.length;
    if (needed > 0) {
        unmatched.slice(0, needed).forEach(card => {
            card.classList.remove('hidden');
            card.style.display = 'flex';
        });
    }
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

let visibleCount = 3;
const allCards = document.querySelectorAll('.project-card');

document.getElementById('show-more-btn').addEventListener('click', function() {
    let shown = 0;
    
    allCards.forEach((card, index) => {
        if (index >= visibleCount && index < visibleCount + 3) {
            card.classList.remove('hidden');
            shown++;
        }
    });
    
    visibleCount += 3;
   
    // Agar sab show ho gaye toh button hide karein
    if (visibleCount >= allCards.length) {
        this.style.display = 'none';
    }

});


allCards.forEach((card, index) => {
    if (index >= visibleCount && index < visibleCount + 3) {
        card.classList.remove('hidden');
        card.style.display = 'flex';
        card.style.animation = 'none'; // reset
        setTimeout(() => {
            card.removeAttribute('data-aos');  // AOS hata dia
            card.style.animation = 'flipIn 0.6s ease forwards';
        }, 50);
    }
});