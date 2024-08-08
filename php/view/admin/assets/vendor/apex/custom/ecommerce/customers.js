var growth = document.getElementsByClassName('growthbar');
// growth.forEach(element => {
//   console.log(element);
// });
var serials = '';
for (let index = 0; index < growth.length; index++) {
  const element = growth[index].innerHTML;
  // var serials += element + ',';
  console.log(element);
}
var options = {
  chart: {
    height: 365,
    type: 'radialBar',
  },
  labels: ['Current Customers', 'New Customers', 'Targeted Customers'],
  series: [75, 50, 25],
  plotOptions: {
    radialBar: {
      dataLabels: {
        name: {
          show: true,
        },
        value: {
          show: true,
          formatter: function (val) {
            return val + '%'
          }
        },
        total: {
          show: true,
          label: 'Total'
        }
      }
    }
  },
  colors: ['#435EEF', '#149865', '#EB3333'],
}
var chart = new ApexCharts(
  document.querySelector("#customers"),
  options
);
chart.render();