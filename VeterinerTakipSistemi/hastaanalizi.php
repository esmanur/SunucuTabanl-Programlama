<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {

var options = {
	animationEnabled: true,  
	title:{
		text: "Yıllık Hasta Takibi - 2018"
	},
	axisX: {
		valueFormatString: "MMM"
	},
	axisY: {
		title: "Hastalanma Sıklığı",
		prefix: "",
		includeZero: false
	},
	data: [{
		yValueFormatString: "#,###",
		xValueFormatString: "MMMM",
		type: "spline",
		dataPoints: [
			{ x: new Date(2018, 0), y: 6 },
			{ x: new Date(2018, 1), y: 3 },
			{ x: new Date(2018, 2), y: 1 },
			{ x: new Date(2018, 3), y: 1 },
			{ x: new Date(2018, 4), y: 2 },
			{ x: new Date(2018, 5), y: 1 },
			{ x: new Date(2018, 6), y: 1 },
			{ x: new Date(2018, 7), y: 1 },
			{ x: new Date(2018, 8), y: 2 },
			{ x: new Date(2018, 9), y: 5 },
			{ x: new Date(2018, 10), y: 6 },
			{ x: new Date(2018, 11), y: 9 }
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>