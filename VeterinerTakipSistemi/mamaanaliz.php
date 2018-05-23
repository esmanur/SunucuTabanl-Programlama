<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

//Better to construct options first and then pass it as a parameter
var options = {
	animationEnabled: true,
	title: {
		text: "Aylık Mama Satışı",                
		fontColor: "Peru"
	},	
	axisY: {
		tickThickness: 0,
		lineThickness: 0,
		valueFormatString: " ",
		gridThickness: 0                    
	},
	axisX: {
		tickThickness: 0,
		lineThickness: 0,
		labelFontSize: 10,
		labelFontColor: "Peru"				
	},
	data: [{
		indexLabelFontSize: 20,
		toolTipContent: "<span style=\"color:#62C9C3\">{indexLabel}:</span> <span style=\"color:#CD853F\"><strong>{y}</strong></span>",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "black",
		indexLabelFontWeight: 800,
		indexLabelFontFamily: "Verdana",
		color: "#62C9C3",
		type: "bar",
		dataPoints: [

		    { y: 2, label: "2%", indexLabel: "REFLEX L&R Yetişkin Köpek Maması" },
			{ y: 2, label: "2%", indexLabel: "KİNG Etli Yetişkin Köpek Maması" },
			{ y: 5, label: "5%", indexLabel: "REFLEX Tavuklu Yetişkin Kedi Maması" },
			{ y: 8, label: "8%", indexLabel: "PROLİNE Balıklı Yetişkin Kedi Maması" },
			{ y: 10, label: "10%", indexLabel: "SPECTRUM Slim Yetişkin Kedi Maması" },
            { y: 13, label: "13%", indexLabel: "REFLEX Yavru Kedi Maması" },
			{ y: 15, label: "15%", indexLabel: "SPECTRUM Yavru Kedi Maması" },
			{ y: 20, label: "20%", indexLabel: "SPECTRUM S.B.Sensitive 27 Yet.Köp.Maması" },
			{ y: 25, label: "25%", indexLabel: "REFLEX Puppy Kuzu Etli Yavru Köpek Maması" }
			
			
			
			
			
			
			
			
			
		]
	}]
};

$("#chartContainer").CanvasJSChart(options);
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 500px; width: 100%;"></div>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>