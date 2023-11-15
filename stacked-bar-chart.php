<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", //"light1", "dark1", "dark2"
	title:{
		text: "Division of Products Sold in 2nd Quarter"             
	},
	axisY:{
		interval: 10,
		suffix: "%"
	},
	toolTip:{
		shared: true
	},
	data:[{
		type: "stackedBar100",
		toolTipContent: "{label}<br><b>{name}:</b> {y} (#percent%)",
		showInLegend: true, 
		name: "April",
		dataPoints: [
			{ y: 600, label: "Water Filter" },
			{ y: 400, label: "Modern Chair" },
			{ y: 120, label: "VOIP Phone" },
			{ y: 250, label: "Microwave" },
			{ y: 120, label: "Water Filter" },
			{ y: 374, label: "Expresso Machine" },
			{ y: 350, label: "Lobby Chair" }
		]
		},
		{
			type: "stackedBar100",
			toolTipContent: "<b>{name}:</b> {y} (#percent%)",
			showInLegend: true, 
			name: "May",
			dataPoints: [
				{ y: 400, label: "Water Filter" },
				{ y: 500, label: "Modern Chair" },
				{ y: 220, label: "VOIP Phone" },
				{ y: 350, label: "Microwave" },
				{ y: 220, label: "Water Filter" },
				{ y: 474, label: "Expresso Machine" },
				{ y: 450, label: "Lobby Chair" }
			]
		}, 
		{
			type: "stackedBar100",
			toolTipContent: "<b>{name}:</b> {y} (#percent%)",
			showInLegend: true, 
			name: "June",
			dataPoints: [
				{ y: 300, label: "Water Filter" },
				{ y: 610, label: "Modern Chair" },
				{ y: 215, label: "VOIP Phone" },
				{ y: 221, label: "Microwave" },
				{ y: 75, label: "Water Filter" },
				{ y: 310, label: "Expresso Machine" },
				{ y: 340, label: "Lobby Chair" }
			]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>
