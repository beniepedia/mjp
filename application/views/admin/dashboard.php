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
							<i class="fas fa-users fa-4x text-gray-300"></i>
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
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
								</div>
								<div class="col">
									<div class="progress progress-sm mr-2">
										<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-clipboard-list fa-4x text-gray-300"></i>
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
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-comments fa-4x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8">
			 <div class="card shadow mb-4">
			    <div class="card-header py-3">
			      <h6 class="m-0 font-weight-bold text-primary">Inbox</h6>
			    </div>
			    <div class="card-body">
	            	<canvas id="myAreaChart"></canvas>
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
		      pointHoverRadius: 3,
		      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
		      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
		      pointHitRadius: 10,
		      pointBorderWidth: 2,
		      data: [1, 2, 3],
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
		        },
		        ticks: {
		          maxTicksLimit: 7
		        }
		      }],
		      yAxes: [{
		        ticks: {
		          maxTicksLimit: 5,
		          padding: 10,
		          // Include a dollar sign in the ticks
		          // callback: function(value, index, values) {
		          //   return '$' + number_format(value);
		          // }
		        },
		        // gridLines: {
		        //   color: "rgb(234, 236, 244)",
		        //   zeroLineColor: "rgb(234, 236, 244)",
		        //   drawBorder: false,
		        //   borderDash: [2],
		        //   zeroLineBorderDash: [2]
		        // }
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
});
</script>