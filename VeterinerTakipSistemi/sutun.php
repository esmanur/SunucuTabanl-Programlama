<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script>

window.onload = function () {

var options = {
	animationEnabled: true,
	title: {
		text: "Aylık ilaç Satışları 2018"
	},
	axisY: {
		title: "İlaç Satış ",
		
		includeZero: false
	},
	axisX: {
		title: "İlaçlar"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#"%"",
		dataPoints: [
			{ label: "Vitaform", y: 10 },	
			{ label: "Biofibron SE", y: 30 },
			{ label: "Katovil", y: 5 },
			{ label: "Tavilin", y: 10 },	
			{ label: "Vetakort", y: 10 },
			{ label: "Klavil", y: 5 },
			{ label: "Vitalmax", y: 20 },
			{ label: "Prazitel Tablet", y: 100 },	
			{ label: "Oksan-F", y: 6 },
			{ label: "Devaljin", y: 4 },
			{ label: "Crystalin", y: 15 }
		]
	}]
};


$("#showChart").click(function() {
	
	$("#dialogBox").dialog({
		open: function(event,ui) {
			$(".ui-widget-overlay").bind("click", function(event,ui) {         
				$("#dialogBox").dialog("close");
			});
		},
		closeOnEscape: true,
		draggable: false,
		resizable: false,
		title: "Grafik Analizi",
		width: 700,
		modal: true,
		show: 500
	});
	$(".ui-widget-overlay").css({"background-color": "#111111"});
	$("#chartContainer").CanvasJSChart(options);
});

}
</script>
<style>
	#showChart{
		background-color: #5bb85b;
		color: #ffffff;
		padding: 10px;
		border: 0px;
		border-radius: 8px;
		font-size: 18px;
		outline: none;
		cursor: pointer;
    } 
  	#container{
		position: fixed;
		top: 50%;
		width:100%;
		text-align: center;
		margin-top: -41px;
  	}
</style>
</head>
<body>
<div id="container">
	<button id="showChart">İlaç Satışlarının Grafiğini Görmek İçin Tıkla</button>
</div>
<div id="dialogBox" style="display: none;">
	<div id="chartContainer" class="dialog" style="height: 250px; width: 100%;"></div>
</div>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>