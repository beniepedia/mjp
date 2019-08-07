<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="tes-btn"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
	</div>
	<!-- Content Row -->
	<div class="row">
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Member Aktif</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $aktif; ?> Orang</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-users fa-4x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Member Nonaktif</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $nonaktif ?> Orang</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-user-slash fa-4x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2 ">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1 ">Total Visitor</div>
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 "><?= $all_visitor->num_rows(); ?> Visitor </div>
								</div>
							</div>
						</div>
						<div class="col-auto">
							<i class="far fa-eye fa-4x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pending Requests Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Posts</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $posts->num_rows(); ?> Artikel</div>
						</div>
						<div class="col-auto">
							<i class="far fa-newspaper fa-4x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			 <div class="card shadow mb-4">
			    <div class="card-header py-3">
			      <h6 class="m-0 font-weight-bold text-primary">Visitor Perbulan</h6>
			    </div>
			    <div class="card-body">
	            	<canvas id="myAreaChart"></canvas>
			    </div>
			  </div>
		</div>
	</div>

	<div class="row">
		<!-- chart bar -->
		<div class="col-xl-6 col-lg-6">
			<div class="card shadow mb-4">
		        <div class="card-header py-3">
		          <h6 class="m-0 font-weight-bold text-primary">Browser Stats</h6>
		        </div>
		        <div class="card-body">
		          <h4 class="small font-weight-bold">Google Chrome <span class="float-right"><?= number_format($chrome_visitor,2);?>%</span></h4>
		          <div class="progress mb-4">
		            <div class="progress-bar bg-primary " role="progressbar" style="width: <?= number_format($chrome_visitor,2);?>%" aria-valuemin="0" aria-valuemax="100"></div>
		          </div>

		          <h4 class="small font-weight-bold">Firefox <span class="float-right"><?= number_format($firefox_visitor,2);?>%</span></h4>
		          <div class="progress mb-4">
		            <div class="progress-bar bg-success" role="progressbar" style="width: <?= number_format($firefox_visitor,2);?>%" aria-valuemin="0" aria-valuemax="100"></div>
		          </div>

		          <h4 class="small font-weight-bold">Internet Explorer <span class="float-right"><?= number_format($explorer_visitor,2);?>%</span></h4>
		          <div class="progress mb-4">
		            <div class="progress-bar bg-warning" role="progressbar" style="width: <?= number_format($explorer_visitor,2);?>%" aria-valuemin="0" aria-valuemax="100"></div>
		          </div>

		          <h4 class="small font-weight-bold">Safari <span class="float-right"><?= number_format($safari_visitor,2);?>%</span></h4>
		          <div class="progress mb-4">
		            <div class="progress-bar bg-info" role="progressbar" style="width: <?= number_format($safari_visitor,2);?>%"  aria-valuemin="0" aria-valuemax="100"></div>
		          </div>

		          <h4 class="small font-weight-bold">Opera <span class="float-right"><?= number_format($opera_visitor,2);?>%</span></h4>
		          <div class="progress mb-4">
		            <div class="progress-bar bg-danger" role="progressbar" style="width: <?= number_format($opera_visitor,2);?>%" aria-valuemin="0" aria-valuemax="100"></div>
		          </div>

		          <h4 class="small font-weight-bold">Robot <span class="float-right"><?= number_format($robot_visitor,2);?>%</span></h4>
		          <div class="progress mb-4">
		            <div class="progress-bar bg-dark" role="progressbar" style="width: <?= number_format($robot_visitor,2);?>%" aria-valuemin="0" aria-valuemax="100"></div>
		          </div>

		          <h4 class="small font-weight-bold">Other <span class="float-right"><?= number_format($other_visitor,2);?>%</span></h4>
		          <div class="progress">
		            <div class="progress-bar bg-dark" role="progressbar" style="width: <?= number_format($other_visitor,2);?>%" aria-valuemin="0" aria-valuemax="100"></div>
		          </div>


		        </div>
	      	</div>
		</div>

		<!-- Pie Chart -->
        <div class="col-xl-6 col-lg-6">
          <div class="card shadow mb-4" style="height: 510px;">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Platform Stats</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="chart-pie pt-4 pb-2">
                <div id="chartdiv" style="width: 100%; height: 100%; margin-top: 50px;"></div>
              </div>
            </div>
          </div>
        </div>
	</div>
	<!-- Content Row -->
</div>
<!-- /.container-fluid -->

<script src="<?= base_url('assets/backend/vendor/chart.js/Chart.min.js') ?>"></script>
<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/material.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<script>
$(document).ready(function(){
	var ctx = document.getElementById("myAreaChart");
	var myLineChart = new Chart(ctx, {
	  type: 'line',
	  data: {
	    labels: <?= $month; ?>,
	    datasets: [{
	      label: "Visitor",
	      lineTension: 0.4,
	      backgroundColor: "rgba(78, 115, 223, 0.05)",
	      borderColor: "rgba(78, 115, 223, 1)",
	      pointRadius: 3,
	      pointBackgroundColor: "rgba(78, 115, 223, 1)",
	      pointBorderColor: "rgba(78, 115, 223, 1)",
	      pointHoverRadius: 5,
	      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
	      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
	      pointHitRadius: 10,
	      pointBorderWidth: 2,
	      data: <?= $value; ?>,
	      responsive: true
	    }],
	  },
	  options: {
	    maintainAspectRatio: true,
	    layout: {
	      padding: {
	        left: 10,
	        right: 25,
	        top: 25,
	        bottom: 0
	      }
	    },
	    scales: {
	      xAxes: [{
	        time: {
	          unit: 'date'
	        },
	        gridLines: {
	          display: false,
	          drawBorder: false
	        }
	      }],
	      yAxes: [{
	        ticks: {
				beginAtZero: true,
				callback: function(value, index, values) {
		           if (Math.floor(value) === value) {
                     return value;
                 	}
		        }
	        },
	      }],
	    },
	    legend: {
	      display: false
	    },
	    tooltips: {
	      backgroundColor: "rgb(255,255,255)",
	      bodyFontColor: "#858796",
	      titleMarginBottom: 10,
	      titleFontColor: '#6e707e',
	      titleFontSize: 14,
	      borderColor: '#dddfeb',
	      borderWidth: 1,
	      xPadding: 15,
	      yPadding: 15,
	      displayColors: true,
	      intersect: false,
	      mode: 'index',
	      caretPadding: 10,
	      // callbacks: {
	      //   label: function(tooltipItem, chart) {
	      //     var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
	      //     return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
	      //   }
	      // }
	    }
	  }
	});

	am4core.ready(function() {
		am4core.useTheme(am4themes_animated);
		am4core.useTheme(am4themes_material);

		var chart = am4core.create("chartdiv", am4charts.PieChart);

		// Add data
		chart.data = [ {
		  "Platform": "Windows",
		  "Total": <?= number_format($windows_visitor,2);?>
		}, {
		  "Platform": "Android",
		  "Total": <?= number_format($android_visitor,2);?>
		}, {
		  "Platform": "Linux",
		  "Total": <?= number_format($linux_visitor,2);?>
		}, {
		  "Platform": "iOS",
		  "Total": <?= number_format($ios_visitor,2);?>
		} ];

		var pieSeries = chart.series.push(new am4charts.PieSeries());
		pieSeries.dataFields.value = "Total";
		pieSeries.dataFields.category = "Platform";
		pieSeries.slices.template.stroke = am4core.color("#fff");
		pieSeries.slices.template.strokeWidth = 2;
		pieSeries.slices.template.strokeOpacity = 1;

		// This creates initial animation
		pieSeries.hiddenState.properties.opacity = 1;
		pieSeries.hiddenState.properties.endAngle = -90;
		pieSeries.hiddenState.properties.startAngle = -90;
	}); // end am4core.ready()

	$('#tes-btn').on('click', function(){
		 notify({
                    type: "success", //alert | success | error | warning | info
                    title: "Success",
					position: {
                        x: "right", //right | left | center
                        y: "top" //top | bottom | center
                    },
                    icon: '<img src="<?= base_url('assets/backend/vendor/toast/images/paper_plane.png') ?>" />',
                    message: "jQuery Notify.js Demo. Super simple Notify plugin."
                }, 2000);
	});

});
</script>
<!-- 		 https://www.jqueryscript.net/other/Growl-Style-Message-Toaster-Plugin-For-jQuery-notify.html -->