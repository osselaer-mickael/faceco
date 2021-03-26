var ctx = document.getElementById('my_chart_gaz');
var euros = document.getElementById('my_graphic_gaz');

/**
 * Retourne la consommation pour le mois donné ( consommation contenu dans un span caché ).
 * @param month
 */
function getConsommation(month) {
    let data = document.getElementById('data');
    if(data.querySelector(`[data-month="${month}"]`) !== null) {
        return parseInt(data.querySelector(`[data-month="${month}"]`).dataset.qty);
    }
    return 0;
}

/**
 * Retourne la consommation pour le mois donné ( consommation contenu dans un span caché ).
 * @param month
 */
function getConsommationPrice(month) {
    let data = document.getElementById('data');
    if(data.querySelector(`[data-month="${month}"]`) !== null) {
        const qty = parseInt(data.querySelector(`[data-month="${month}"]`).dataset.qty);
        const uPrice = parseFloat(data.querySelector(`[data-month="${month}"]`).dataset.unitprice);
        console.log(qty * uPrice, qty, uPrice);
        return qty * uPrice;
    }
    return 0;
}

var myChartGaz = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Janvier', 'Février', 'Mars', 'Avirl', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        datasets: [{
            label: '',
            data: [
                getConsommation('janvier'),
                getConsommation('fevrier'),
                getConsommation('mars'),
                getConsommation('avril'),
                getConsommation('mai'),
                getConsommation('juin'),
                getConsommation('juillet'),
                getConsommation('aout'),
                getConsommation('septembre'),
                getConsommation('octobre'),
                getConsommation('novembre'),
                getConsommation('décembre'),
            ],
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
            data: [
                getConsommationPrice('janvier'),
                getConsommationPrice('fevrier'),
                getConsommationPrice('mars'),
                getConsommationPrice('avril'),
                getConsommationPrice('mai'),
                getConsommationPrice('juin'),
                getConsommationPrice('juillet'),
                getConsommationPrice('aout'),
                getConsommationPrice('septembre'),
                getConsommationPrice('octobre'),
                getConsommationPrice('novembre'),
                getConsommationPrice('décembre'),
            ],
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


