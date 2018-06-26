// <?php
// //setting header to json
// header('Content-Type: application/json');

// //database
// define('DB_HOST', '127.0.0.1');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'projectweek');

// //get connection
// $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// if(!$mysqli){
// 	die("Connection failed: " . $mysqli->error);
// }

// //query to get data from the table
// $query = sprintf("SELECT jaar, bier, wijn, gedistilleerd FROM alcoholconsumptie ORDER BY jaar ASC");

// //execute query
// $result = $mysqli->query($query);

// //loop through the returned data
// $data = array();
// foreach ($result as $row) {
// 	$data[] = $row;
// }

// //free memory associated with result
// $result->close();

// //close connection
// $mysqli->close();

// //now print the data
// print json_encode($data);

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
                        borderColor: 'rgb(43, 255, 1, 0.7)',
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

			var barGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});

