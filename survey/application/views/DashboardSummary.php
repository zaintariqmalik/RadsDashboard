
<!DOCTYPE HTML>
<html>
<head>
    <title>Overview</title>
    <?php $this->load->view('head'); ?>

      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="author" content="SemiColonWeb" />

      <!-- Stylesheets
      ============================================= -->
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

       <!------ Include the above in your HEAD tag ---------->

      <!-- Add this css in head tag -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(googleChart);
     
      function googleChart() {
        var data = google.visualization.arrayToDataTable([
            ['', 'Household', 'Followup'],
            ['Jan', <?php print $jan_data->jan_count; ?>, 0],
            ['Feb', <?php print $feb_data->feb_count; ?>, 87],
            ['Mar', <?php print $mar_data->mar_count; ?>, 580],
            ['Apr', <?php print $apr_data->apr_count; ?>, 0],
            ['May', <?php //print $mar_data->mar_count; ?>, 0],
            ['Jun', <?php //print $apr_data->apr_count; ?>, 0],
            ['Jul', <?php //print $mar_data->mar_count; ?>, 0],
            ['Aug', <?php //print $apr_data->apr_count; ?>, 0],
            ['Sep', <?php //print $mar_data->mar_count; ?>, 0],
            ['Oct', <?php //print $apr_data->apr_count; ?>, 0]
        ]);

        var options = {
          chart: {
            title: 'Household & Followup',
            subtitle: 'Household and Followup: Jan-2018 to Apr-2018',
          },
          legend: {position: 'none'},
          vAxis: {format: ''}
        };

        var chart = new google.charts.Bar(document.getElementById('firstChart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['', 'Household',{ role: 'style' }],
            ['Jan', 50,''],
            ['Feb', 40,''],
            ['Mar', 30,''],
            ['Apr', 20,''],
            ['May', 0,''],
            ['Jun', 0,''],
            ['Jul', 0,''],
            ['Aug', 0,''],
            ['Sept',0,''],
            ['Oct', 0,'']
            
         
        ]);

        var options = {
          chart: {
            title: 'CBT',
            subtitle: 'CBT Count: Jan-2018 to Apr-2018',
          },
          legend: {position: 'none'},
          vAxis: {format: ''}
        };

        var chart = new google.charts.Bar(document.getElementById('CBT_Chart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
</head>
  <body>
        <div id="wrapper">
            <?php $this->load->view('nav_bar'); ?>
              <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="content-main">
            		<!--banner-->	
          		    <div class="banner">
            				<h2>
              				<a href="<?php echo site_url('DashboardSummaryController#')?>">Home</a>
              				<i class="fa fa-angle-right"></i>
              				<span>Overview</span>
            				</h2>
          		    </div>


                    <!--Counter Section-->
                    <section id="counter_two" class="counter_two" style="padding-top: 03%;" >
                        <div class="overlay">
                            <div class="container">
                                <div class="row">
                                    <div class="main_counter_two sections text-center">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="row">
                                                <div class="col-sm-2 col-xs-12">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-sticky-note-o nav_icon" style="color: #920000"></i>
                                                        <h2 class="statistic-counter_two" style="color: #e46e25"> 
                                                          <?php print $fetchHousehold->householdCount; ?>
                                                        </h2>
                                                        <p>Household Interviews</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-2 col-xs-12">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-undo nav_icon" style="color: #920000"></i>
                                                        <h2 class="statistic-counter_two" style="color: #e46e25">
                                                          <?php print $fetchFollowUp->followUpCount; ?>
                                                        </h2>
                                                        <p>Follow-ups</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-2 col-xs-12">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-users nav_icon" style="color: #920000"></i>
                                                        <h2 class="statistic-counter_two" style="color: #e46e25">
                                                          <?php print $fetchSM->smVisitsCount; ?>
                                                        </h2>
                                                        <p>Social Mobilizers Visits</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-2 col-xs-12">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-check-circle-o nav_icon" style="color: #920000"></i>
                                                        <h2 class="statistic-counter_two" style="color: #e46e25">
                                                          <?php print $fetchMonitoring->monitoringCount; ?>
                                                        </h2>
                                                        <p>M &amp; E Visits</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-xs-12">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-street-view nav_icon" style="color: #920000"></i>
                                                        <h2 class="statistic-counter_two" style="color: #e46e25">
                                                          <?php print $fetchNewUser->newUserCount; ?>
                                                        </h2>
                                                        <p>New Users</p>
                                                    </div>
                                                </div>
                                            </div><!-- End off col-sm-3 -->
                                        </div>
                                    </div>
                                </div><!-- End off row -->
                            </div><!-- End off container -->
                        </div><!-- End off overlay -->
                    </section><!-- End off Counter section -->
  
                    <section>
                    <div class="overlay">
                            <div class="container">
                                <div class="row">
                                    <div id="firstChart" class = "col-lg-5 col-sm-12 " style="height: 400px; padding: 20px; background: #fff;margin: 100px 0 100px 20px"></div>
                                    <div id="CBT_Chart" class = "col-lg-5 col-sm-12 " style="height: 400px; padding: 20px; background: #fff;margin: 100px 0 100px 20px"></div>
                               
                                </div>
                            </div>
                    </section>





                </div>
              </div>
            <?php include "footer.php"?>
        </div>
        <div class="clearfix"> 
        </div>
<!---->
<!--scrolling js-->
        <script src="<?php echo base_url(); ?>js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>js/scripts.js"></script>
        <!--//scrolling js-->
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"> </script>

         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

        <!-- Delay in counter numbers -->
        <script type="text/javascript">
          $('.statistic-counter_two, .statistic-counter, .count-number').counterUp({
                delay: 10,
                time: 2000
            });
          </script>
  </body>
</html>

