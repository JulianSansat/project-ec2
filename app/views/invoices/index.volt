<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<h2>Resultados</h2>

{% for i, grafico in graficos %}
    <div id="container{{i}}" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
{% endfor %}



{{ javascript_include("js/jquery.min.js") }}
<script>
$(document).ready(function () {
var graficosjs = {{graficosjs}};
for (var key in graficosjs){  
    Highcharts.chart('container'+key, {
    chart: {
        type: 'bar'
    },
    title: {
        text: graficosjs[key]['titulo']
    },
    xAxis: {
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Respostas',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' respostas'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: false
            }
        }
    },
    legend: {
         enabled: false
    },
    credits: {
        enabled: false
    },
    series: graficosjs[key]['series']
});
}
});
</script>

