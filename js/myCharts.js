Chart.defaults.global.responsive = true;
Chart.defaults.global.defaultFontFamily = 'Lato';
Chart.defaults.global.defaultFontSize = 16;
Chart.defaults.global.defaultFontColor = '#212121';

const CHART = document.getElementById("lineChart");
console.log(CHART);

let lineChart = new Chart( CHART, {
    type: 'line',
	data: {
        labels: ["Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            	label: 'Systolic',
            	fill: true,
            	lineTension: 0.4,
            	backgroundColor: "rgba(75, 192, 192, 0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'mitter',
                pointBorderColor: "rgba(75, 192, 192, 1)",
                pointBackgroundColor: "rgba(75, 192, 192, 1)",
                pointBorderWidth: 1,
                pointHoverRadius: 6,
                pointHoverBackgroundColor: "rgba(75, 192, 192, 1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 3,
                pointHitRadius: 10,
                data: [60, 67, 70, 68, 72, 90]
        	},	
        	{
            	label: 'Diastolic',
            	fill: true,
            	lineTension: 0.4,
            	backgroundColor: "#e1bee7",
                borderColor: "#ab47bc",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'mitter',
                pointBorderColor: "#ab47bc",
                pointBackgroundColor: "#ab47bc",
                pointBorderWidth: 1,
                pointHoverRadius: 6,
                pointHoverBackgroundColor: "#ab47bc",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 3,
                pointHitRadius: 10,
                data: [90, 70, 89, 75, 80, 95]
        	}
        	]
        },
	    options: {
            title: {
                display: true,
                text: 'Blood Pressure',
                fontSize: 25
            },
	        scales: {
	        	yAxes: [{
	               ticks: {
	                   beginAtZero:true
	                }
	            }]
	        },
            legend: {
                position: 'bottom'
            }
	    }
	});

// Horizontal Bar Chart
const BARCHART = document.getElementById("barChart");
console.log(BARCHART);
let barChart = new Chart( BARCHART, {
    type: 'horizontalBar',
    data: {
        labels: ["Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
                label: 'Weight (kg)',
                fill: true,
                backgroundColor: "#fdd835",
                borderColor: "#fbc02d",
                hoverBorderColor: "#fbc02d",
                hoverBackgroundColor: "#fdd835",
                hoverBorderWidth: 2,
                barThickness: 5,
                data: [45, 47, 46, 50, 48, 49]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Weight (kg)',
                fontSize: 25
            },
            scales: {
                xAxes: [{
                    stacked: true
                }],
                yAxes: [{
                    stacked: true
                }]
            },
            legend: {
                display: true,
                position: 'bottom'
            }
        }
    });
