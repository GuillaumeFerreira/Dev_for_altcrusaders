var datas = [];
var label =[];
var date = new Date();

fetch("https://api.coingecko.com/api/v3/coins/altcrusaders/market_chart/range?vs_currency=usd&from=1637698400&to=" + date.getTime(),{method: "GET"})
.then(response => response.json())
.then(function(response) {


for (var i = 0; i < Object.values(response)[0].length; i++) {
  datas.push(Object.values(response)[0][i]);
}



for (var i = 0; i < Object.values(response)[1].length; i++) {
  label.push(new Date(parseInt(Object.values(response)[1][i])).toLocaleString());
}

const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: label,
        datasets: [{
            label: "Price",
            data: datas,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    },

    options: {


                responsive: true


    }
});

});