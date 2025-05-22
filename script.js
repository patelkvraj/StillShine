/* Highlight the active page */
const currentPage = window.location.pathname;
const navItemEls = document.querySelectorAll(".link-nav_bar");
if (checkStringEnding(currentPage, "/about/")) {
  navItemEls.forEach((el) => {
    el.style.textDecoration = "none";
  });
  document.getElementById("about_header").style.textDecoration = "underline";
  document.getElementById("about_footer").style.textDecoration = "underline";
} else if (checkStringEnding(currentPage, "/contact/")) {
  navItemEls.forEach((el) => {
    el.style.textDecoration = "none";
  });
  document.getElementById("contact_header").style.textDecoration = "underline";
  document.getElementById("contact_footer").style.textDecoration = "underline";
} else if (checkStringEnding(currentPage, "/sell/")) {
  navItemEls.forEach((el) => {
    el.style.textDecoration = "none";
  });
} else {
  navItemEls.forEach((el) => {
    el.style.textDecoration = "none";
  });
  document.getElementById("home_header").style.textDecoration = "underline";
  document.getElementById("home_footer").style.textDecoration = "underline";
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

/**
 * Fetch product data from a fake store API.
 */
fetch("https://fakestoreapi.com/products")
  .then((response) => response.json())
  .then((jsonData) => {
    const productListEl = document.getElementById("product_list");
    if (productListEl) {
      productListEl.innerHTML = ""; // clear the placeholder
      for (var i = 0; i < 4; i++) {
        const productImg = document.createElement("img");
        productImg.src = jsonData[i].image;
        productListEl.appendChild(productImg);
      }
    }
  })
  .catch((error) => {
    console.log("There is a problem fetching data", error);
  });
