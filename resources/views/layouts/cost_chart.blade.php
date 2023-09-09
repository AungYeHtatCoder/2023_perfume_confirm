<script>
// Your target income
const week_targetIncome = 1000000; // 1 million MMK

fetch('/admin/dashboard')
 .then(response => response.json())
 .then(data => {
  const salesByDay = data.salesByDay;
  const Salelabels = salesByDay.map(sale => sale.date);
  const DaysalesData = salesByDay.map(sale => parseInt(sale.total_sales));

  // Calculate total income for the day
  const totalIncome = DaysalesData.reduce((a, b) => a + b, 0);
  document.getElementById("today_income").innerHTML = totalIncome + " MMK";

  // Set the income date
  document.getElementById("income_date").innerHTML = Salelabels[0];

  // Calculate the percentage of the income towards the goal
  const incomePercentage = Math.min((totalIncome / week_targetIncome) * 100, 100);

  // Set the width of the progress bar based on the calculated percentage
  document.getElementById("income_progressbar").style.width = incomePercentage + '%';
  document.getElementById("income_progressbar").setAttribute('aria-valuenow', incomePercentage);



 })

 .catch(error => console.error('Error fetching data:', error));
</script>
<script>
// Your weekly income target. Define it if not defined already.
const targetIncome = 1000000; // 1 million MMK for the example

// Fetching sales by week
fetch('/admin/dashboard')
 .then(response => response.json())
 .then(data => {
  const salesByWeek = data.salesByWeek;
  const Weeklabels = salesByWeek.map(sale => sale.week);
  const WeeksalesData = salesByWeek.map(sale => parseInt(sale.total_sales));

  // Calculate total income for the week
  const totalWeekIncome = WeeksalesData.reduce((a, b) => a + b, 0);
  document.getElementById("week_income").innerHTML = totalWeekIncome + " MMK";

  // Set the income date (Week number here)
  document.getElementById("week_income_date").innerHTML = "Week of: " + Weeklabels[0];

  // Calculate the percentage of the income towards the goal
  const weekIncomePercentage = Math.min((totalWeekIncome / targetIncome) * 100, 100);

  // Update the progress bar based on the calculated percentage
  document.getElementById("week_income_progressbar").style.width = weekIncomePercentage + '%';
  document.getElementById("week_income_progressbar").setAttribute('aria-valuenow', weekIncomePercentage);
 })
 .catch(error => console.error('Error fetching data:', error));
</script>
<script>
// Fetch the sales data from the backend
//  fetch('/admin/dashboard')
//   .then(response => response.json())
//   .then(data => {
//    const monthlySalesData = data.monthlySales || [];
//    console.log(monthlySalesData)
//    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
//     "November", "December"
//    ];
//    const salesData = new Array(12).fill(0);

//    // Ensure the data is in the correct format
//    monthlySalesData.forEach(d => {
//     if (d.month && d.total_price) {
//      salesData[d.month - 1] = parseInt(d.total_price, 10);
//     }
//    });

//    const canvas = document.getElementById('monthly_sales');
//    if (canvas) {
//     const ctx = canvas.getContext('2d');
//     new Chart(ctx, {
//      type: 'bar', // You can use other types such as 'bar'
//      data: {
//       labels: months,
//       datasets: [{
//        label: 'Monthly Sales',
//        data: salesData
//       }]
//      }
//     });
//    } else {
//     console.error('Element with ID "monthly_sales" not found.');
//    }
//   })
//   .catch(error => {
//    console.error('Fetch Error:', error);
//   });

// Fetch the sales data from the backend
fetch('/admin/dashboard')
 .then(response => response.json())
 .then(data => {
  const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
   "November", "December"
  ];
  const salesData = new Array(12).fill(0);

  // Assuming your JSON object returns 'monthlySales' as a key for your sales data
  const monthlySalesData = data.monthlySales;

  monthlySalesData.forEach(d => {
   if (d.month !== null && d.month !== undefined && d.total_price) {
    salesData[d.month - 1] = parseInt(d.total_price, 10);
   } else {
    console.log("Skipped a record due to missing month or total_price", d);
   }
  });

  const ctx = document.getElementById('monthly_sales').getContext('2d');
  new Chart(ctx, {
   type: 'bar',
   data: {
    labels: months,
    datasets: [{
     label: 'Monthly Sales',
     data: salesData,
     backgroundColor: 'rgba(75, 192, 192, 0.5)', // Semi-transparent turquoise
     borderColor: 'rgba(75, 192, 192, 1)', // Turquoise
     borderWidth: 1 // Border width
    }]
   }
  });
 })
 .catch(error => {
  console.log("An error occurred:", error);
 });
</script>

<script>
fetch('/admin/dashboard-day-month')
 .then(response => response.json())
 .then(data => {
  // Now using data.results instead of data.dailySales
  const dailySales = data.results;
  const salesData = {}; // To store the daily total_price per month

  dailySales.forEach(d => {
   if (d.day && d.month && d.total_price) {
    if (!salesData[d.month]) {
     salesData[d.month] = new Array(31).fill(0); // Initialize month with 31 days
    }
    salesData[d.month][d.day - 1] = parseInt(d.total_price); // -1 because array index starts from 0
   }
  });

  // Loop through salesData to create one chart per month
  Object.keys(salesData).forEach(month => {
   const ctx = document.getElementById(`${month}_sales`).getContext('2d');
   new Chart(ctx, {
    type: 'bar',
    data: {
     labels: Array.from({
      length: 31
     }, (_, i) => `Day ${i + 1}`), // ['Day 1', 'Day 2', ...]
     datasets: [{
      label: `Daily Sales for ${month}`,
      data: salesData[month],
      backgroundColor: 'rgba(0, 123, 255, 0.5)',
      borderColor: 'rgba(0, 123, 255, 1)',
      borderWidth: 1
     }]
    }
   });
  });
 })
 .catch(error => {
  console.error("An error occurred:", error);
 });
</script>