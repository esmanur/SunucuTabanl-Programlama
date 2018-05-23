<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var options = {
	animationEnabled: true,
	title: {
		text: "Yıllık Müşteri Analizi 2018"
	},
	axisY: {
		title: "Müşteri Gelme Sıklığı",
	
		includeZero: false
	},
	axisX: {
		title: "Müşteriler"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#"%"",
		dataPoints: [
			{ label: "Süleyman Yıldız", y: 3 },	
			{ label: "İlknur Yıldız", y: 5 },	
			{ label: "Gizem Sever", y: 20 },
			{ label: "Mehmet Akif Yıldız", y: 15 },	
			{ label: "Enis Ekmel Tural", y: 10 },
			{ label: "Esmanur Yıldız", y: 13 },
			{ label: "Ecem Toker", y: 25 },
			{ label: "Yaren Fidan", y: 18 },
			{ label: "Büşra Koyuncu", y: 4 },
			{ label: "Ezgi Portakal", y: 16 },
			{ label: "Nesibe Öztekin", y: 1 }
			
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