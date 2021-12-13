

fetch("https://api.coingecko.com/api/v3/coins/altcrusaders",{method: "GET"})
.then(response => response.json())
.then(function(response) {

var num = Object.values(Object.values(Object.values(response)[26])[0])[48];



document.getElementById("price").innerHTML  = num.toFixed(5);
num = num*50000000;
document.getElementById("marketcap").innerHTML =num.toFixed(0);

})

//historique https://api.coingecko.com/api/v3/coins/altcrusaders/market_chart/range?vs_currency=usd&from=1637798400&to=1637884799