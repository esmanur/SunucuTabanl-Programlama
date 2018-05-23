<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var options = {
	title: {
		text: "İlaç Kar Analizi 2018"
	},
	subtitles: [{
		text: "Mayıs Ayı 2018"
	}],
	animationEnabled: true,
	data: [{
		type: "pie",
		startAngle: 40,
		toolTipContent: "<b>{label}</b>: {y}",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}",
		dataPoints: [
			{ y: 40, label: "Vitaform" },
			{ y: 210, label: "Biofibron SE" },
			{ y: 100, label: "Katovil" },
			{ y: 200, label: "Tavilin" },
			{ y: 80, label: "Vetakort" },
			{ y: 100, label: "Klavil" },
			{ y: 600, label: "Vitalmax" },
			{ y: 200, label: "Prazitel Tablet "},
			{ y: 15, label: "Oksan-F" },
			{ y: 35, label: "Devaljin" },
			{ y: 100, label: "Crystalin"},


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