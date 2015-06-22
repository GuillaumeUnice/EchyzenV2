/**
 * Created by user on 15/06/15.
 */
$(function () {

    $(document).ready(function () {

        //var pourcentage=document.getElementById('pourcentage').value;
        var pourcentage =  parseFloat($('#container').attr('var-profil'));

        console.log(pourcentage);

        // Build the chart
        $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Force de votre profil'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Pourcentage du profil',
                data: [
                    ['Reste',    (1-pourcentage)],
                    {
                        name: 'Votre profil',
                        y: pourcentage,
                        sliced: true,
                        selected: true
                    }
                ]
            }]
        });
    });

});