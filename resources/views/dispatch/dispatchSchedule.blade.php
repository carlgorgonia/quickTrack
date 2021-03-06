<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>QuickTrack | Dispatch Schedule</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main Page CSS -->
    <link href="assets/css/main-page.css" rel="stylesheet">
    <!-- Font-awesome CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <link href="assets/css/jquery.dataTables.min.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <style type="text/css">
    .table-fixed tbody {
      height: 230px;
      overflow-y: auto;
      width: 100%;
    }
    .table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
      display: block;
    }
    .table-fixed tbody td, .table-fixed thead > tr> th {
      float: left;
      border-bottom-width: 0;
    }
  </style>

  <body>

    @include('main.navbar')

    <div class="container-fluid">
      <h2 class="page-title" style="text-align: center;"><strong>Dispatch Schedule</strong></h2><br>

      <div class="row">
        <div class="col-lg-3">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <form class="col-lg-12">
                  <table id="example" class="table table-hover dataTable" cellspacing="0" width="100%">
                  <thead style="background-color: #165469; color: white;">
                    <tr>
                      <th></th>
                      <th>Driver's List</th>
                      <th></th>
                    </tr> 
                  </thead>
                  <tbody style="text-align: center;">
                    <tr>
                      <td style="vertical-align: middle;"><img src="dist/img/id1.jpg" style="border-radius: 200px; background-color: black; height: 50px;"></td>
                      <td style="vertical-align: middle;">Juan Dela Cruz</td>
                      <td style="vertical-align: middle;">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#driver-list"><span class="glyphicon glyphicon-eye-open" style="color: black;"></span></button>
                      </td>
                    </tr>
                    <tr>
                      <td style="vertical-align: middle;"><img src="dist/img/id2.jpg" style="border-radius: 200px; background-color: black; height: 50px;"></td>
                      <td style="vertical-align: middle;">Juan Dela Cruz</td>
                      <td style="vertical-align: middle;">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#driver-list"><span class="glyphicon glyphicon-eye-open" style="color: black;"></span></button>
                      </td>
                    </tr>
                    <tr>
                      <td style="vertical-align: middle;"><img src="dist/img/id3.jpg" style="border-radius: 200px; background-color: black; height: 50px;"></td>
                      <td style="vertical-align: middle;">Juan Dela Cruz</td>
                      <td style="vertical-align: middle;">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#driver-list"><span class="glyphicon glyphicon-eye-open" style="color: black;"></span></button>
                      </td>
                    </tr>
                    <tr>
                      <td style="vertical-align: middle;"><img src="dist/img/id4.jpg" style="border-radius: 200px; background-color: black; height: 50px;"></td>
                      <td style="vertical-align: middle;">Juan Dela Cruz</td>
                      <td style="vertical-align: middle;">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#driver-list"><span class="glyphicon glyphicon-eye-open" style="color: black;"></span></button>
                      </td>
                    </tr>
                    <tr>
                      <td style="vertical-align: middle;"><img src="dist/img/id5.jpg" style="border-radius: 200px; background-color: black; height: 50px;"></td>
                      <td style="vertical-align: middle;">Juan Dela Cruz</td>
                      <td style="vertical-align: middle;">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#driver-list"><span class="glyphicon glyphicon-eye-open" style="color: black;"></span></button>
                      </td>
                    </tr>
                    <tr>
                      <td style="vertical-align: middle;"><img src="dist/img/id5.jpg" style="border-radius: 200px; background-color: black; height: 50px;"></td>
                      <td style="vertical-align: middle;">Juan Dela Cruz</td>
                      <td style="vertical-align: middle;">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#driver-list"><span class="glyphicon glyphicon-eye-open" style="color: black;"></span></button>
                      </td>
                    </tr>
                    <tr>
                      <td style="vertical-align: middle;"><img src="dist/img/id5.jpg" style="border-radius: 200px; background-color: black; height: 50px;"></td>
                      <td style="vertical-align: middle;">Juan Dela Cruz</td>
                      <td style="vertical-align: middle;">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#driver-list"><span class="glyphicon glyphicon-eye-open" style="color: black;"></span></button>
                      </td>
                    </tr>
                  </tbody>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="panel panel-default">
            <div class="panel-body" style="height: 100%;">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-6">
                    <label class="panel-title" style="font-size: 20px;">Weekly Schedule</label>
                  </div>
                  <div class="col-lg-6 pull-right">
                    <div class="row">
                      <div class="col-lg-7 form-group">
                          <input type="text" class="form-control row" name="" id="txtDate" style="text-align: center; background-color: white;" disabled/>
                      </div>
                      <div class="col-lg-5 form-group">
                        <input type="text" class="form-control row" name="" id="txtTime" style="text-align: center; background-color: white;" disabled/>
                      </div> 
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-2 center-block">
                    <div class="form-group">
                      <button type="button" class="btn btn-block btn-info">Monday<br> <strong>1</strong></button> 
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn btn-block btn-info">Tuesday<br> <strong>2</strong></button> 
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn btn-block btn-info">Wednesday<br> <strong>3</strong></button> 
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn btn-block btn-info">Thursday<br> <strong>4</strong></button> 
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn btn-block btn-info">Friday<br> <strong>5</strong></button> 
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn btn-block btn-info">Saturday<br> <strong>6</strong></button> 
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn btn-block btn-info">Sunday<br> <strong>7</strong></button> 
                    </div>
                  </div>
                  <div class="col-lg-10">
                    <div class="col-lg-12">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <h5>Job Order No.</h5>
                          <input class="form-control" type="" name="" readonly="">
                        </div>
                        <div class="form-group">
                          <h5>Pick-up Time</h5>
                          <input class="form-control" type="" name="" readonly="">
                        </div>
                        <div class="form-group">
                          <h5>Assign Driver</h5>
                          <input class="form-control" type="" name="" readonly="">
                        </div>  
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <h5>Tracking No.</h5>
                          <input class="form-control" type="" name="" readonly="">
                        </div>
                        <div class="form-group">
                          <h5>Drop-off Time</h5>
                          <input class="form-control" type="" name="" readonly="">
                        </div>
                        <div class="form-group">
                          <h5>License Number</h5>
                          <input class="form-control" type="" name="" readonly="">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <h5>Address (Location)</h5>
                          <input class="form-control" type="" name="" readonly="">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <form class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th >#</th>
                              <th style="width: 30%">Time</th>
                              <th style="width: 30%">Job Order No.</th>
                              <th style="width: 30%">Tracking No.</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>6:00 AM - 10:00 AM</td>
                              <td>651984277</td>
                              <td>000167799</td>
                              <td>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#transaction"><span class="glyphicon glyphicon-eye-open" style="color: black;"></span></button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Content of Transaction -->
    <div id="driver-list" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-title">
              <h4>Transaction Details</h4>
            </div>
          </div>
          <div class="modal-body" id="transaction-info">
            <form>
            <div class="row">
              <div class="col-lg-4">
                <div class="col-lg-12" style="text-align: center;">
                  <h4>Item / Product</h4>
                  <img src="dist/img/employee.png" height="190">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="col-lg-12">
                  <div class="form-group">
                    <h5>Name</h5>
                    <div class="row">
                      <div class="col-lg-4">
                      <input class="form-control" type="" name="" placeholder="First Name" readonly="">
                      </div>
                      <div class="col-lg-4">
                      <input class="form-control" type="" name="" placeholder="Middle Name" readonly="">
                      </div>
                      <div class="col-lg-4">
                      <input class="form-control" type="" name="" placeholder="Surname" readonly="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <h5>Address</h5>
                        <input class="form-control" type="" name="" readonly="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        <h5>License Number</h5>
                        <input class="form-control" type="" name="" readonly="">
                      </div>
                      <div class="col-lg-6">
                        <h5>Expiration of License</h5>
                        <input class="form-control" type="" name="" readonly="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        <h5>Date of Birth</h5>
                        <input class="form-control" type="" name="" readonly="">
                      </div>
                      <div class="col-lg-3">
                        <h5>Age</h5>
                        <input class="form-control" type="" name="" readonly="">
                      </div>
                      <div class="col-lg-3">
                        <h5>Gender</h5>
                        <input class="form-control" type="" name="" readonly="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <h5>Driver's Schedule</h5>
                  <form class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th style="width: 35%">Time</th>
                          <th style="width: 30%">Job Order No.</th>
                          <th style="width: 30%">Tracking No.</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </form>
                </div>
              </div>
            </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Modal -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.dataTables.min.js"></script>

    <script src="assets/js/dataTables.bootstrap.min.js"></script>

    <script>
      var myVar = setInterval(function(){ myTimer() }, 1000);
      //timer
      function myTimer() {
        var d = new Date();
        var t = d.toLocaleTimeString();
        var time1 =
        document.getElementById("txtTime").value = t;


        //date
        var d1 = new Date();
        var Months = ["January","February","March","April","May","June","July", "August", "September", "October", "November", "December"];
        var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
        var dateview = days[d1.getDay()] +", "+Months[d.getMonth()] +" "+d1.getDate()+", "+ d1.getFullYear() ;
        document.getElementById("txtDate").value = dateview;
      }
    </script>

  </body>
</html>