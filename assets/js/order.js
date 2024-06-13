document.addEventListener("DOMContentLoaded", function () {});
const idGameInput = document.getElementById("id_game");
const serverGameInput = document.getElementById("server_game");
const nickname = document.getElementById("nickname");
const productDivs = document.querySelectorAll(".product > div");
const paymenttDivs = document.querySelectorAll(".payment > div");
const no_hp = document.getElementById("no_hp_input");
const orderButton = document.getElementById("order");
const modalOrder = document.getElementById("modal-order");
const buttonBayar = document.getElementById("buttonBayar");
const productId = document.getElementById("id-product");

// DATA BUAAT KONFIRMASI PESANANAN
// const nickname_confirm = document.getElementById("nick-name-container");
// const id_confirm = document.getElementById("id-gane-container");
// const server_confirm = document.getElementById("server-game-container");
// const no_hp_confirm = document.getElementById("no-hp");
// const product_confirm = document.getElementById("product-name");
// const payment_confirm = document.getElementById("payment");
// const total_confirm = document.getElementById("total");

var product;
var payment;
var id_product;
var name_product;
var price_product;
var data_order;

async function fetchData(id, game) {
  const url = `https://id-game-checker.p.rapidapi.com/mobile-legends/${id}/${game}`;
  const options = {
    method: "GET",
    headers: {
      "x-rapidapi-key": "488210f38cmsh75d56736207dde7p1c779ajsnfa869b4dd08f",
      "x-rapidapi-host": "id-game-checker.p.rapidapi.com",
    },
  };
  fetch(url, options)
    .then((response) => response.json())
    .then((result) => {
      console.log(result);

      if (result.success === true) {
        nickname.textContent = result.data.username;
      } else {
        nickname.textContent = "Player Tidak Ditemukan";
      }
      checkAllInputsFilled();
    })
    .catch((error) => {
      console.error(error);
      nickname.textContent = "Error fetching data";
    });
}

function checkInputs() {
  const idGame = idGameInput.value;
  const serverGame = serverGameInput.value;

  if (idGame.length >= 7 && serverGame.length >= 4) {
    fetchData(idGame, serverGame);
  }
}

function checkAllInputsFilled() {
  const idGame = idGameInput.value;
  const serverGame = serverGameInput.value;
  const nicknameValue = nickname.textContent;
  const noHp = no_hp.value;

  if (
    idGame.length >= 7 &&
    serverGame.length >= 4 &&
    nicknameValue !== "" &&
    name_product &&
    price_product &&
    payment &&
    noHp.length > 0
  ) {
    orderButton.disabled = false;
    orderButton.classList.remove("bg-[#8b72e6]");
    orderButton.classList.add("bg-[#5932EA]");
  } else {
    orderButton.disabled = true;
    orderButton.classList.remove("bg-[#5932EA]");
    orderButton.classList.add("bg-[#8b72e6]");
  }
}

idGameInput.addEventListener("change", function () {
  console.log(idGameInput.value);
  checkInputs();
});

serverGameInput.addEventListener("change", function () {
  console.log(serverGameInput.value);
  checkInputs();
});

productDivs.forEach((div) => {
  div.addEventListener("click", function () {
    productDivs.forEach((d) => {
      d.classList.remove("bg-[#5932EA]", "text-white");
    });

    div.classList.add("bg-[#5932EA]", "text-white");

    // Mengakses nilai masing-masing elemen <p> di dalam <div>
    id_product = div.querySelectorAll("p")[0].textContent;
    name_product = div.querySelectorAll("p")[1].textContent;
    price_product = div.querySelectorAll("p")[2].textContent;

    console.log("ID:", id_product);
    console.log("Nama:", name_product);
    console.log("Harga:", price_product);

    checkAllInputsFilled(); // Check inputs after selecting product
  });
});

paymenttDivs.forEach((div) => {
  div.addEventListener("click", function () {
    paymenttDivs.forEach((d) => {
      d.classList.remove("bg-[#5932EA]", "text-white");
    });

    div.classList.add("bg-[#5932EA]", "text-white");
    payment = div.querySelector("p").textContent;
    console.log(payment);
    checkAllInputsFilled(); // Check inputs after selecting payment
  });
});

no_hp.addEventListener("change", function () {
  console.log(no_hp.value);
  checkAllInputsFilled(); // Check inputs after entering phone number
});

orderButton.addEventListener("click", function () {
  data_order = {
    idGame: idGameInput.value,
    id_product: id_product,
    serverGame: serverGameInput.value,
    nickname: nickname.textContent,
    product: name_product,
    price: price_product,
    payment: payment,
    noHp: no_hp.value,
  };

  modalOrder.classList.remove("hidden");
  // Process the data as needed
  var nickname_confirm = document.getElementById("nick-name-container");
  var id_confirm = document.getElementById("id-game-container");
  var server_confirm = document.getElementById("server-game-container");
  var no_hp_confirm = document.getElementById("no-hp");
  var product_confirm = document.getElementById("product-name");
  var payment_confirm = document.getElementById("payment");
  var total_confirm = document.getElementById("total");

  nickname_confirm.value = data_order["nickname"];
  id_confirm.value = data_order["idGame"];
  server_confirm.value = data_order["serverGame"];
  no_hp_confirm.value = data_order["noHp"];
  product_confirm.value = data_order["product"];
  payment_confirm.value = data_order["payment"];
  total_confirm.value = data_order["price"];
  productId.value = id_product;
});
