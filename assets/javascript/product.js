document.addEventListener("DOMContentLoaded", function (event) {
  const descriptions = document.getElementsByClassName(
    "wpro-pre-order-shop-page"
  );

  if (descriptions) {
    for (let item of descriptions) {
      const date = item.innerText.split(":");
      item.innerText = "Planuojamas prekės papildymas: " + date[1];
    }
  }
});
