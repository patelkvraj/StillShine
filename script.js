/* Highlight the active page */
const currentPage = window.location.pathname;
const navItemEls = document.querySelectorAll('.link-nav_bar');
switch (currentPage) {
    case '/index.html':
        navItemEls.forEach(el => {
            el.style.textDecoration = 'none';
        });
        document.getElementById('home_header').style.textDecoration = 'underline';
        document.getElementById('home_footer').style.textDecoration = 'underline';
        break;

    case '/about.html':
        navItemEls.forEach(el => {
            el.style.textDecoration = 'none';
        });
        document.getElementById('about_header').style.textDecoration = 'underline';
        document.getElementById('about_footer').style.textDecoration = 'underline';
        break;

    case '/contact.html':
        navItemEls.forEach(el => {
            el.style.textDecoration = 'none';
        });
        document.getElementById('contact_header').style.textDecoration = 'underline';
        document.getElementById('contact_footer').style.textDecoration = 'underline';
        break;

    default:
        navItemEls.forEach(el => {
            el.style.textDecoration = 'none';
        });
        break;
}