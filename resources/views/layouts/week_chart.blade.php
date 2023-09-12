<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily =
 '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
fetch('/admin/dashboard-month')
 .then(response => response.json())
 .then(data => {
  //salesByWeek
  const salesByWeek = data.salesByWeek;
  console.log("Fetched data:", data);
  // Transform the salesByDay data into the format needed for Chart.js
  const labels = salesByWeek.map(sale => sale.date);
  const salesData = salesByWeek.map(sale => parseInt(sale.total_sales));
  var ctx = document.getElementById("myBarChart");
  var myLineChart = new Chart(ctx, {
   type: 'bar',
   data: {
    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
     "November", "December"
    ],
    datasets: [{
     label: "Revenue",
     backgroundColor: "rgba(2,117,216,1)",
     borderColor: "rgba(2,117,216,1)",
     data: [4215, 5312, 6251, 7841, 9821, 14984],
    }],
   },
   options: {
    scales: {
     xAxes: [{
      time: {
       unit: 'month'
      },
      gridLines: {
       display: false
      },
      ticks: {
       maxTicksLimit: 6
      }
     }],
     yAxes: [{
      ticks: {
       min: 0,
       max: 15000,
       maxTicksLimit: 5
      },
      gridLines: {
       display: true
      }
     }],
    },
    legend: {
     display: false
    }
   }
  });

 })
 .catch(error => console.error('Error fetching data:', error));
</script>