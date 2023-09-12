<script>
Chart.defaults.global.defaultFontFamily =
 '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
// Fetch data from the server
fetch('/admin/dashboard')
 .then(response => response.json())
 .then(data => {
  const salesByDay = data.salesByDay;




  // Transform the salesByDay data into the format needed for Chart.js
  const labels = salesByDay.map(sale => sale.date);
  const salesData = salesByDay.map(sale => parseInt(sale.total_sales));

  //const salesData = salesByDay.map(sale => sale.total_sales);

  // Draw the chart
  var ctx = document.getElementById("scoreLineToDay");
  var myLineChart = new Chart(ctx, {
   type: "bar",
   data: {
    labels: labels,
    datasets: [{
     label: "Daily Sales",
     lineTension: 0.3,
     // backgroundColor: "rgba(2,117,216,0.2)",
     backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
     ],
     borderColor: "rgba(2,117,216,1)",
     pointRadius: 5,
     pointBackgroundColor: "rgba(2,117,216,1)",
     pointBorderColor: "rgba(255,255,255,0.8)",
     pointHoverRadius: 5,
     pointHoverBackgroundColor: "rgba(2,117,216,1)",
     pointHitRadius: 50,
     pointBorderWidth: 2,
     data: salesData
    }]
   },
   options: {
    scales: {
     xAxes: [{
      time: {
       unit: "date",
      },
      gridLines: {
       display: false,
      },
      ticks: {
       maxTicksLimit: 7,
      }
     }],
     yAxes: [{
      ticks: {
       min: 0,
       max: 100000,

       maxTicksLimit: 5,
      },
      gridLines: {
       color: "rgba(0, 0, 0, .125)",
      }
     }]
    },
    legend: {
     display: false,
    }
   }
  });
 })
 .catch(error => console.error('Error fetching data:', error));
</script>