var ctx = document.getElementById('my_chart_gaz');
var euros = document.getElementById('my_graphic_gaz');

var myChartGaz = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Janvier', 'Février', 'Mars', 'Avirl', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        datasets: [{
            label: '',
            data: ["", "", "", "", "", "", "", "", "", "", "", ""],
            backgroundColor: [
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34'
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

var myGraphicGaz = new Chart(euros, {
    type: 'line',
    data: {
        labels: ['Janvier', 'Février', 'Mars', 'Avirl', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        datasets: [{
            label: '',
            data: ["", "", "", "", "", "", "", "", "", "", "", ""],
            backgroundColor: [
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34',
                '#58ac34'
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


