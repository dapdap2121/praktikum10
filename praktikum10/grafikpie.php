<?php
include('koneksidb.php');
$produk = mysqli_query($conn,"SELECT * FROM tb_covid");
while($row = mysqli_fetch_array($produk)){
	$nama_produk[] = $row['negara'];
	$query = mysqli_query($conn,"SELECT sum(totalcases) AS jumlah FROM tb_covid 
    WHERE totalcases='".$row['totalcases']."'");
    $row = $query->fetch_array();
    $jumlah_produk[] = $row['jumlah'];
}
$produk = mysqli_query($conn,"SELECT * FROM tb_covid");
while($row = mysqli_fetch_array($produk)){
	$query = mysqli_query($conn,"SELECT sum(totaldeaths) AS jumlah FROM tb_covid 
    WHERE totaldeaths='".$row['totaldeaths']."'");
    $row = $query->fetch_array();
    $jumlah_produk1[] = $row['jumlah'];
}
$produk = mysqli_query($conn,"SELECT * FROM tb_covid");
while($row = mysqli_fetch_array($produk)){
	$query = mysqli_query($conn,"SELECT sum(totalrecovered) AS jumlah FROM tb_covid 
    WHERE totalrecovered='".$row['totalrecovered']."'");
    $row = $query->fetch_array();
    $jumlah_produk2[] = $row['jumlah'];
}
$produk = mysqli_query($conn,"SELECT * FROM tb_covid");
while($row = mysqli_fetch_array($produk)){
	$query = mysqli_query($conn,"SELECT sum(activecases) AS jumlah FROM tb_covid 
    WHERE activecases='".$row['activecases']."'");
    $row = $query->fetch_array();
    $jumlah_produk3[] = $row['jumlah'];
}
$produk = mysqli_query($conn,"SELECT * FROM tb_covid");
while($row = mysqli_fetch_array($produk)){
	$query = mysqli_query($conn,"SELECT sum(totaltests) AS jumlah FROM tb_covid 
    WHERE totaltests='".$row['totaltests']."'");
    $row = $query->fetch_array();
    $jumlah_produk4[] = $row['jumlah'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PIE CHART COVID-19</title>
    <script type="text/javascript" src="Chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
    crossorigin="anonymous">
</head>

<body>
    <center>
	<div id="canvas-holder" style="width:50%">
		<h1>Total Cases</h1>
		<canvas id="chart-area"></canvas>
        <br>
		<h1>Total Deaths</h1>
		<canvas id="chart-area2"></canvas>
        <br>
		<h1>Total Recovered </h1>
		<canvas id="chart-area3"></canvas>
        <br>
		<h1>Active Cases</h1>
		<canvas id="chart-area4"></canvas>
        <br>
		<h1>Total Tests</h1>
		<canvas id="chart-area5"></canvas>
	</div>
    </center>

    <script>
        var config = {
            type: 'pie',
            data: {
                datasets: [{
                    data:<?php echo json_encode($jumlah_produk);
?>,
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(133, 196, 155, 0.2)',
                    'rgba(93, 33, 148, 0.2)',
                    'rgba(20, 4, 160, 0.2)',
                    'rgba(117, 48, 15, 0.2)',
                    'rgba(234, 214, 77, 0.2)',
                    'rgba(50, 96, 17, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(133, 196, 155, 1)',
                    'rgba(93, 33, 148, 1)',
                    'rgba(20, 4, 160, 1)',
                    'rgba(117, 48, 15, 1)',
                    'rgba(234, 214, 77, 1)',
                    'rgba(50, 96, 17, 1)'
                    ],
                }],
                labels: <?php echo json_encode($nama_produk); ?>},
                options: {
                responsive: true
            }
        };
        var config2 = {
            type: 'pie',
            data: {
                datasets: [{
                    data:<?php echo json_encode($jumlah_produk1);
?>,
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(133, 196, 155, 0.2)',
                    'rgba(93, 33, 148, 0.2)',
                    'rgba(20, 4, 160, 0.2)',
                    'rgba(117, 48, 15, 0.2)',
                    'rgba(234, 214, 77, 0.2)',
                    'rgba(50, 96, 17, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(133, 196, 155, 1)',
                    'rgba(93, 33, 148, 1)',
                    'rgba(20, 4, 160, 1)',
                    'rgba(117, 48, 15, 1)',
                    'rgba(234, 214, 77, 1)',
                    'rgba(50, 96, 17, 1)'
                    ],
                }],
                labels: <?php echo json_encode($nama_produk); ?>},
                options: {
                responsive: true
            }
        };
        var config3 = {
            type: 'pie',
            data: {
                datasets: [{
                    data:<?php echo json_encode($jumlah_produk2);
?>,
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(133, 196, 155, 0.2)',
                    'rgba(93, 33, 148, 0.2)',
                    'rgba(20, 4, 160, 0.2)',
                    'rgba(117, 48, 15, 0.2)',
                    'rgba(234, 214, 77, 0.2)',
                    'rgba(50, 96, 17, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(133, 196, 155, 1)',
                    'rgba(93, 33, 148, 1)',
                    'rgba(20, 4, 160, 1)',
                    'rgba(117, 48, 15, 1)',
                    'rgba(234, 214, 77, 1)',
                    'rgba(50, 96, 17, 1)'
                    ],
                }],
                labels: <?php echo json_encode($nama_produk); ?>},
                options: {
                responsive: true
            }
        };
        var config4 = {
            type: 'pie',
            data: {
                datasets: [{
                    data:<?php echo json_encode($jumlah_produk3);
?>,
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(133, 196, 155, 0.2)',
                    'rgba(93, 33, 148, 0.2)',
                    'rgba(20, 4, 160, 0.2)',
                    'rgba(117, 48, 15, 0.2)',
                    'rgba(234, 214, 77, 0.2)',
                    'rgba(50, 96, 17, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(133, 196, 155, 1)',
                    'rgba(93, 33, 148, 1)',
                    'rgba(20, 4, 160, 1)',
                    'rgba(117, 48, 15, 1)',
                    'rgba(234, 214, 77, 1)',
                    'rgba(50, 96, 17, 1)'
                    ],
                }],
                labels: <?php echo json_encode($nama_produk); ?>},
                options: {
                responsive: true
            }
        };
        var config5 = {
            type: 'pie',
            data: {
                datasets: [{
                    data:<?php echo json_encode($jumlah_produk4);
?>,
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(133, 196, 155, 0.2)',
                    'rgba(93, 33, 148, 0.2)',
                    'rgba(20, 4, 160, 0.2)',
                    'rgba(117, 48, 15, 0.2)',
                    'rgba(234, 214, 77, 0.2)',
                    'rgba(50, 96, 17, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(133, 196, 155, 1)',
                    'rgba(93, 33, 148, 1)',
                    'rgba(20, 4, 160, 1)',
                    'rgba(117, 48, 15, 1)',
                    'rgba(234, 214, 77, 1)',
                    'rgba(50, 96, 17, 1)'
                    ],
                }],
                labels: <?php echo json_encode($nama_produk); ?>},
                options: {
                responsive: true
            }
        };

        window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			var ctx2 = document.getElementById('chart-area2').getContext('2d');
			var ctx3 = document.getElementById('chart-area3').getContext('2d');
			var ctx4 = document.getElementById('chart-area4').getContext('2d');
			var ctx5 = document.getElementById('chart-area5').getContext('2d');
			window.myPie = new Chart(ctx, config);
			window.myPie2 = new Chart(ctx2, config2);
			window.myPie3 = new Chart(ctx3, config3);
			window.myPie4= new Chart(ctx4, config4);
			window.myPie5 = new Chart(ctx5, config5);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myPie.update();
			window.myPie2.update();
			window.myPie3.update();
			window.myPie4.update();
			window.myPie5.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' + config.data.datasets.length,
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());

				var colorName = colorNames[index % colorNames.length];
				var newColor = window.chartColors[colorName];
				newDataset.backgroundColor.push(newColor);
			}

			config.data.datasets.push(newDataset);
			window.myPie.update();
			window.myPie2.update();
			window.myPie3.update();
			window.myPie4.update();
			window.myPie5.update();
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myPie.update();
			window.myPie2.update();
			window.myPie3.update();
			window.myPie4.update();
			window.myPie5.update();

		});
    </script>
</body>
</html>