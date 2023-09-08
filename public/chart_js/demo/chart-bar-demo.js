// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily =
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#292b2c";

// Bar Chart Example
// scoreLineToWeek
var ctx = document.getElementById("scoreLineToWeek");
var myLineChart = new Chart(ctx, {
    type: "bar",
    data: {
        labels: [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday",
        ],
        datasets: [
            {
                label: "Score",
                backgroundColor: "rgba(2,117,216,1)",
                borderColor: "rgba(2,117,216,1)",
                data: [4215, 5312, 6251, 7841, 9821, 14984, 12184],
            },
        ],
    },
    options: {
        scales: {
            xAxes: [
                {
                    time: {
                        unit: "day",
                    },
                    gridLines: {
                        display: false,
                    },
                    ticks: {
                        maxTicksLimit: 7,
                    },
                },
            ],
            yAxes: [
                {
                    ticks: {
                        min: 0,
                        max: 15000,
                        maxTicksLimit: 5,
                    },
                    gridLines: {
                        display: true,
                    },
                },
            ],
        },
        legend: {
            display: false,
        },
    },
});
// scoreLineWeek end
// var ctx = document.getElementById("scoreLineToDay");
// // scoreLineToDay
// var myLineChart = new Chart(ctx, {
//     type: "bar",
//     data: {
//         labels: ["January", "February", "March", "April", "May", "June"],
//         datasets: [
//             {
//                 label: "Revenue",
//                 backgroundColor: "rgba(2,117,216,1)",
//                 borderColor: "rgba(2,117,216,1)",
//                 data: [4215, 5312, 6251, 7841, 9821, 14984],
//             },
//         ],
//     },
//     options: {
//         scales: {
//             xAxes: [
//                 {
//                     time: {
//                         unit: "month",
//                     },
//                     gridLines: {
//                         display: false,
//                     },
//                     ticks: {
//                         maxTicksLimit: 6,
//                     },
//                 },
//             ],
//             yAxes: [
//                 {
//                     ticks: {
//                         min: 0,
//                         max: 15000,
//                         maxTicksLimit: 5,
//                     },
//                     gridLines: {
//                         display: true,
//                     },
//                 },
//             ],
//         },
//         legend: {
//             display: false,
//         },
//     },
// });

// scoreLineToMonth
var ctx = document.getElementById("scoreLineToMonth");
var myLineChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: [
            "2020-01-01",
            "2020-01-02",
            "2020-01-03",
            "2020-01-04",
            "2020-01-05",
            "2020-01-06",
            "2020-01-07",
            "2020-01-08",
            "2020-01-09",
            "2020-01-10",
            "2020-01-11",
            "2020-01-12",
            "2020-01-13",
            "2020-01-14",
            "2020-01-15",
            "2020-01-16",
            "2020-01-17",
            "2020-01-18",
            "2020-01-19",
            "2020-01-20",
            "2020-01-21",
            "2020-01-22",
            "2020-01-23",
            "2020-01-24",
            "2020-01-25",
            "2020-01-26",
            "2020-01-27",
            "2020-01-28",
            "2020-01-29",
            "2020-01-30",
            "2020-01-31",
        ],
        datasets: [
            {
                label: "Score",
                lineTension: 0.3,
                backgroundColor: "rgba(2,117,216,0.2)",
                borderColor: "rgba(2,117,216,1)",
                pointRadius: 5,
                pointBackgroundColor: "rgba(2,117,216,1)",
                pointBorderColor: "rgba(255,255,255,0.8)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(2,117,216,1)",
                pointHitRadius: 50,
                pointBorderWidth: 2,
                data: [
                    4215, 5312, 6251, 7841, 9821, 14984, 12184, 15184, 18184,
                    21184, 24184, 27184, 30184, 33184, 36184, 39184, 42184,
                    45184, 48184, 51184, 54184, 57184, 60184, 63184, 66184,
                    69184, 72184, 75184, 78184, 81184, 84184,
                ],
            },
        ],
    },
    options: {
        scales: {
            xAxes: [
                {
                    time: {
                        unit: "date",
                    },
                    gridLines: {
                        display: false,
                    },
                    ticks: {
                        maxTicksLimit: 7,
                    },
                },
            ],
            yAxes: [
                {
                    ticks: {
                        min: 0,
                        max: 100000,
                        maxTicksLimit: 5,
                    },
                    gridLines: {
                        color: "rgba(0, 0, 0, .125)",
                    },
                },
            ],
        },
        legend: {
            display: false,
        },
    },
});
