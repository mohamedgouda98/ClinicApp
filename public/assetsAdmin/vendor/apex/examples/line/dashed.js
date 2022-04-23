var options = {
	chart: {
		height: 170,
		type: 'line',
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		width: [3],
		curve: 'straight',
		dashArray: [5]
	},
	series: [{
			name: "Value",
			data: [21, 35, 21, 35, 21, 35, 21]
		}
	],
	markers: {
		size: 0,
		hover: {
			sizeOffset: 6
		}
	},
	colors: ['#d44843', '#bf870a', '#8e639c', '#00887A'],
	xaxis: {
		categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
	},
	yaxis: {
		show: false,
	},
	grid: {
		borderColor: '#ffffff',
	}
}

var chart = new ApexCharts(
	document.querySelector("#dashed-line-chart"),
	options
);

chart.render();	