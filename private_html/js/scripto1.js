document.addEventListener('DOMContentLoaded', () => {
    // Element selectors
    const barmenu = document.querySelector('.nav-bar');
    const navbars = document.querySelector('#menu-bar');
    const header3 = document.querySelector('.header-3');
    const scrollTop = document.querySelector('.scroll-top');
    const cart = document.querySelector('.cart'); // Define cart if needed

    // Event listener for navbars
    if (navbars) {
        navbars.onclick = () => {
            if (navbars) navbars.classList.toggle('fa-times');
            if (barmenu) barmenu.classList.toggle('active');
            if (cart) cart.classList.remove('active');
        }
    }

    // Handle scroll events
    window.onscroll = () => {
        if (navbars) navbars.classList.remove('fa-times');
        if (barmenu) barmenu.classList.remove('active');
        
        if (header3) {
            if (window.scrollY > 250) {
                header3.classList.add('active');
            } else {
                header3.classList.remove('active');
            }
        }
        
        if (scrollTop) {
            scrollTop.style.display = window.scrollY > 250 ? 'initial' : 'none';
        }
    }

    // Initialize Swiper
    let swiper = new Swiper(".home-slider", {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop: true,
    });

    // Countdown timer setup
    let countDate = new Date('Sep 1, 2024 00:00:00').getTime();
    let countdownInterval;

    function updateTargetDate() {
        countDate += 10 * 24 * 60 * 60 * 1000; // Add 10 days in milliseconds
    }

    function countDown() {
        let now = new Date().getTime();
        let gap = countDate - now;

        if (gap < 0) {
            updateTargetDate();
            return;
        }

        const second = 1000;
        const minute = second * 60;
        const hour = minute * 60;
        const day = hour * 24;

        let d = Math.floor(gap / day);
        let h = Math.floor((gap % day) / hour);
        let m = Math.floor((gap % hour) / minute);
        let s = Math.floor((gap % minute) / second);

        // Format numbers with leading zeros
        d = d < 10 ? '0' + d : d;
        h = h < 10 ? '0' + h : h;
        m = m < 10 ? '0' + m : m;
        s = s < 10 ? '0' + s : s;

        // Ensure elements are present before setting innerText
        const dayElem = document.getElementById('day');
        const hourElem = document.getElementById('hour');
        const minuteElem = document.getElementById('minute');
        const secondElem = document.getElementById('second');

        if (dayElem) dayElem.innerText = d;
        if (hourElem) hourElem.innerText = h;
        if (minuteElem) minuteElem.innerText = m;
        if (secondElem) secondElem.innerText = s;
    }

    // Set the interval and store its ID
    countdownInterval = setInterval(countDown, 1000);

    // Initial call to start the countdown immediately
    countDown();
});
