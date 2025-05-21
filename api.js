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
