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

			for(var i in data) {
				jaar.push(data[i].jaar);
                bier.push(data[i].bier);
                wijn.push(data[i].wijn);
			}

			var chartdata = {
				labels: jaar,
				datasets : [
					{
						label: "Bier", 
						backgroundColor: 'rgba(200, 200, 200, 0)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: bier
                    }, 
                    {
						label: "Wijn", 
						backgroundColor: 'rgba(255, 200, 200, 0)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: wijn
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

