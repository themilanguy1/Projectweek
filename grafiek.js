$(document).ready(function(){
	$.ajax({
		url: "data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var jaar = [];
            var bier = [];
            var wijn = [];
            var gedistilleerd = [];

			for(var i in data) {
				jaar.push(data[i].jaar);
                bier.push(data[i].bier);
                wijn.push(data[i].wijn);
                gedistilleerd.push(data[i].gedistilleerd);
			}

			var chartdata = {
                labels: jaar,
				datasets : [
					{
						label: "Bier", 
                        borderColor: 'rgb(255, 1, 1, 0.7)',
						data: bier
                    }, 
                    {
						label: "Wijn", 
                        borderColor: 'rgb(255, 251, 1, 0.7)',
						data: wijn
                    },
                    {
						label: "Gedistilleerd", 
                        borderColor: 'rgb(90, 1, 255, 0.7)',
						data: gedistilleerd
                    }
				]
			};

			var ctx = document.getElementById("myChart");

			var linegraph = new Chart(ctx, {
				type: 'line',
                data: chartdata,
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                min: 0,
                                stepSize: 0.5,
                            }
                        }]
                    }
                },
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});

