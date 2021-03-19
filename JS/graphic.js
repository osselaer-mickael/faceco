var ctx = document.getElementById('myChart');
var euros = document.getElementById('myGraphic');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Janvier', 'Février', 'Mars', 'Avirl', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        datasets: [{
            label: '',
            data: [12.5, 19, 3, 5, 2, 30,12, 19, 3, 5, 2, 300],
            backgroundColor: [
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var myGraphic = new Chart(euros, {
    type: 'line',
    data: {
        labels: ['Janvier', 'Février', 'Mars', 'Avirl', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        datasets: [{
            label: '',
            data: [12, 19, 3, 5, 2, 30,12, 19, 3, 5, 2, 300],
            backgroundColor: [
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256',
                '#2c3256'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


