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
        const product = document.createElement("div");
        product.classList.add("grid-item");
        const productImg = document.createElement("img");
        productImg.src = jsonData[i].image;
        product.appendChild(productImg);
        /* Product Details */
        const productDetails = document.createElement("div");
        productDetails.classList.add("description__product");
        const productDescription = document.createElement("div"); // Product Description
        productDescription.classList.add("information__product");
        const productName = document.createElement("p");
        productName.classList.add("product__name");
        productName.innerHTML = jsonData[i].title.substring(0, 10) + "...";
        productDescription.appendChild(productName);
        const productLocation = document.createElement("p");
        productLocation.classList.add("product__location");
        productLocation.innerHTML = "Lowell, MA";
        productDescription.appendChild(productLocation);
        productDetails.appendChild(productDescription);
        const productAmount = document.createElement("h4"); // Product Amount
        productAmount.classList.add("amount__product");
        productAmount.innerHTML = jsonData[i].price;
        productDetails.appendChild(productAmount);
        product.appendChild(productDetails);
        productListEl.appendChild(product);
      }
    }
  })
  .catch((error) => {
    console.log("There is a problem fetching data", error);
  });
