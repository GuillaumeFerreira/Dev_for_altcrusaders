

fetch("https://api.coingecko.com/api/v3/coins/altcrusaders",{method: "GET"})
.then(response => response.json())
.then(function(response) {
Object.values(Object.values(Object.values(response)[26])[0])[48];
})

//historique https://api.coingecko.com/api/v3/coins/altcrusaders/market_chart/range?vs_currency=usd&from=1637798400&to=1637884799