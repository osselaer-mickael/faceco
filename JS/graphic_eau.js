var ctx = document.getElementById('conso_eau');
var eurosEau = document.getElementById('my_graphic_eau');

var myChartEau = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Janvier', 'Février', 'Mars', 'Avirl', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        datasets: [{
            label: '',
            data: ["", "", "", "", "", "", "", "", "", "", "", ""],
            backgroundColor: [
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4'
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

var myGraphicEau = new Chart(eurosEau, {
    type: 'line',
    data: {
        labels: ['Janvier', 'Février', 'Mars', 'Avirl', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        datasets: [{
            label: '',
            data: ["", "", "", "", "", "", "", "", "", "", "", ""],
            backgroundColor: [
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4',
                '#4093a4'
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