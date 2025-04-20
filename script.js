/* Highlight the active page */
const currentPage = window.location.pathname;
const navItemEls = document.querySelectorAll('.link-nav_bar');
if (checkStringEnding(currentPage, '/index.html')) {
    navItemEls.forEach(el => {
        el.style.textDecoration = 'none';
    });
    document.getElementById('home_header').style.textDecoration = 'underline';
    document.getElementById('home_footer').style.textDecoration = 'underline';
} else if (checkStringEnding(currentPage, '/about.html')) {
    navItemEls.forEach(el => {
        el.style.textDecoration = 'none';
    });
    document.getElementById('about_header').style.textDecoration = 'underline';
    document.getElementById('about_footer').style.textDecoration = 'underline';
} else if (checkStringEnding(currentPage, '/contact.html')) {
    navItemEls.forEach(el => {
        el.style.textDecoration = 'none';
    });
    document.getElementById('contact_header').style.textDecoration = 'underline';
    document.getElementById('contact_footer').style.textDecoration = 'underline';
} else {
    navItemEls.forEach(el => {
        el.style.textDecoration = 'none';
    });
}

/**
 * Checks if a string ends with a specified substring.
 * 
 * 
 * @param {string} str The string to check.
 * @param {string} ending ending The substring to check if the `str` ends with.
 * @returns {boolean} `true` if `str` ends with `ending`, `false` otherwise.
 */
function checkStringEnding(str, ending) {
    return str.endsWith(ending);
}