<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
		<a href="<?= base_url('admin/backup'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
			<div class="col-xl-8 col-lg-7">
				 <div class="card shadow mb-4">
				    <div class="card-header py-3">
				      <h6 class="m-0 font-weight-bold text-primary">Visitor Perbulan</h6>
				    </div>
				    <div class="card-body">
		            	<canvas id="myAreaChart"></canvas>
				    </div>
				  </div>
			</div>
		
		<!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                  </div>
                </div>
              </div>
            </div>

	</div>

	<div class="row">
		<!-- chart bar -->
		<div class="col-lg-12">
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
	</div>
	<!-- Content Row -->
</div>
<!-- /.container-fluid -->

<script src="<?= base_url('assets/backend/vendor/chart.js/Chart.min.js') ?>"></script>

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
		    // maintainAspectRatio: false,
		    // layout: {
		    //   padding: {
		    //     left: 10,
		    //     right: 25,
		    //     top: 25,
		    //     bottom: 0
		    //   }
		    // },
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

		// Set new default font family and font color to mimic Bootstrap's default styling
		Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
		Chart.defaults.global.defaultFontColor = '#858796';

		// Pie Chart Example
		var ctx = document.getElementById("myPieChart");
		var myPieChart = new Chart(ctx, {
		  type: 'doughnut',
		  data: {
		    labels: ["Direct", "Referral", "Social", "windwos"],
		    datasets: [{
		      data: [55, 30, 15, 14],
		      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
		      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
		      hoverBorderColor: "rgba(234, 236, 244, 1)",
		    }],
		  },
		  options: {
		    maintainAspectRatio: false,
		    tooltips: {
		      backgroundColor: "rgb(255,255,255)",
		      bodyFontColor: "#858796",
		      borderColor: '#dddfeb',
		      borderWidth: 1,
		      xPadding: 15,
		      yPadding: 15,
		      displayColors: false,
		      caretPadding: 10,
		    },
		    legend: {
		      display: false
		    },
		    cutoutPercentage: 80,
		  },
		});



});
</script>