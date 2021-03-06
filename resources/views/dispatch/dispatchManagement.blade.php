<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>QuickTrack | Dispatch Management</title>

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
  <body>

    @include('main.navbar')

    <div class="container">
    <h3 class="page-title">Dispatch Management</h3><br>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-1"></div> 
            <div class="col-lg-2">
              <div class="form-group">
                <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#dispatch-reg"><strong>PROFILE<br>REGISTRATION</strong></button>
              </div>
              <!--Profile Registration Modal -->
              <div id="dispatch-reg" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 class="modal-title">Profile Registration</h3>
                    </div>
                    <div class="modal-body">
                      
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-inline pull-right">
                            <label>Control Number: </label>
                            <input class="form-control" type="" name="" readonly="" disabled="">
                          </div>
                        </div>
                        <div class="col-lg-12" style="text-align: center;">
                          <h3><strong>Customer Registration</strong></h3>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="col-lg-6">
                                <div class="form-group" style="text-align: center;"><br><br><br>
                                  <img class="col-lg-12" id="blah" src="assets/img/logo.png" height="100" width="380">
                                </div>
                                
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <h5>Customer Type</h5>
                                  <select class="form-control">
                                    <option disabled selected="">Choose your option</option>
                                    <option>New Customer</option>
                                    <option>Existing Customer</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <h5>Contact Name</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Contact Person</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Tin Number</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-12" style="padding-top: 0px;">
                                <div class="form-group">
                                  <h5>Delivery Address</h5>
                                  <textarea class="form-control" rows="5"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12" style="text-align: center;">
                          <h3><strong>Driver Registration</strong></h3>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <h5>Name of Driver</h5>
                                  <div class="row">
                                    <div class="col-lg-4">
                                    <input class="form-control" type="" name="" placeholder="First Name">
                                    </div>
                                    <div class="col-lg-4">
                                    <input class="form-control" type="" name="" placeholder="Middle Name">
                                    </div>
                                    <div class="col-lg-4">
                                    <input class="form-control" type="" name="" placeholder="Surname">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <h5>Address</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <h5>Employee Type</h5>
                                  <select class="form-control">
                                    <option disabled selected="">Choose your option</option>
                                    <option>New</option>
                                    <option>Old</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <h5>Driver's License Number</h5>
                                  <input class="form-control" type="" name="">
                                </div> 
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <h5>Date of Birth</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Expiration of License</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="form-group"> 
                                  <h5>Gender</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="form-group"> 
                                  <h5>Age</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <h5>Upload Resume</h5>
                                  <input type="file" class="form-control" style="border:none;box-shadow: none;">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12" style="text-align: center;">
                          <h3><strong>Vehicle Registration</strong></h3>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="col-lg-3">
                                <div class="form-group">
                                  <h5>Vehicle Status</h5>
                                  <div class="col-lg-6">
                                    <label class="radio-inline">
                                      <input type="radio" name="optradio">New 
                                    </label>
                                  </div>
                                  <div class="col-lg-6">
                                    <label class="radio-inline">
                                      <input type="radio" name="optradio">Old
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="form-group">
                                  <h5>Company Unit</h5>
                                  <div class="col-lg-6">
                                    <label class="radio-inline">
                                      <input type="radio" name="optradio">Own
                                    </label>
                                  </div>
                                  <div class="col-lg-3">
                                    <label class="radio-inline">
                                      <input type="radio" name="optradio">Rented 
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="form-group">
                                  <h5>Date of Registration</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="form-group">
                                  <h5>Color</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <h5>Type of Vehicle</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <h5>Year Model</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <h5>Plate Number</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <h5>Address</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group"> 
                                  <h5>Contact Person</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="form-group"> 
                                  <h5>Contact Number</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <h5>Receipt / Certificate of Registration</h5>
                                  <input type="file" class="form-control" style="border:none;box-shadow: none;">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="#" class="btn btn-info pull-left" role="button">Transaction Details</a>
                      <button id="save" onclick="save()" class="btn btn-success" type="button" name="save-details">Save</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
              <!-- End of Modal -->
            </div>

            <div class="col-lg-2">
              <div class="form-group">
                <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#job-work-order"><strong>JOB <br>WORK ORDER</strong></button>
              </div>
              <!--Job Work Order Modal -->
              <div id="job-work-order" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 class="modal-title">Job Work Order</h3>
                    </div>
                    <div class="modal-body" id="printOnhand">    
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-inline pull-right">
                            <label>Job Order Number: </label>
                            <input class="form-control" type="" name="" readonly="" disabled="">
                          </div>
                        </div>
                        <div class="col-lg-12" style="text-align: center;">
                          <h3><strong>Customer Billing</strong></h3>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <h5>Customer Name</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Address</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <h5>Contact Person</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Contact Number</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-12" style="border-top: 1px dotted #8c8b8b;"><br>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>Dispatcher Name</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Driver Name</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Plate Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Time of Dispatch</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <h5>Date of Dispatch</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Type of Vehicle</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Contact Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Lead Time</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-inline pull-right">
                            <label>Tracking Number: </label>
                            <input class="form-control" type="" name="" readonly="" disabled="">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="row">
                                <div class="col-lg-12" style="text-align: center;">
                                  <h3><strong>Shipper</strong></h3>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-body">
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <h5>Company Name</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Address</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Contact Person</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                     <h5>Company Landline Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                     <h5>Company Mobile Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="row">
                                <div class="col-lg-12" style="text-align: center;">
                                  <h3><strong>Pick-Up (Location)</strong></h3>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-body">
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <h5>Company Name</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Address</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Contact Person</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                     <h5>Company Landline Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                     <h5>Company Mobile Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="row">
                                <div class="col-lg-12" style="text-align: center;">
                                  <h3><strong>Consignee</strong></h3>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-body">
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <h5>Company Name</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Address</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Contact Person</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                     <h5>Company Landline Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                     <h5>Company Mobile Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="row">
                                <div class="col-lg-12" style="text-align: center;">
                                  <h3><strong>Drop-Off (Location)</strong></h3>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-body">
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <h5>Company Name</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Address</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Contact Person</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                     <h5>Company Landline Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                     <h5>Company Mobile Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th class="col-lg-4" style="text-align: center;">Description</th>
                                  <th class="col-lg-2" style="text-align: center;">Quantity</th>
                                  <th class="col-lg-2" style="text-align: center;">Delivery Rate</th>
                                  <th class="col-lg-2" style="text-align: center;">Pick-up Date</th>
                                  <th class="col-lg-2" style="text-align: center;">Pick-up Time</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><input class="col-lg-12" type="" name=""></td>
                                  <td><input class="col-lg-12" type="" name=""></td>
                                  <td><input class="col-lg-12" type="" name=""></td>
                                  <td><input class="col-lg-12" type="" name=""></td>
                                  <td><input class="col-lg-12" type="" name=""></td>  
                                </tr>
                              </tbody>
                            </table>
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th class="col-lg-1" style="text-align: center;">Weight</th>
                                  <th class="col-lg-2" style="text-align: center;">No. of Boxes</th>
                                  <th class="col-lg-2" style="text-align: center;">Delivery Date</th>
                                  <th class="col-lg-2" style="text-align: center;">Delivery Time</th>
                                  <th class="col-lg-3" style="text-align: center;">Remarks</th>
                                  <th class="col-lg-2" style="text-align: center;">Tracking No.</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><input class="col-lg-12" type="" name=""></td>
                                  <td><input class="col-lg-12" type="" name=""></td>
                                  <td><input class="col-lg-12" type="" name=""></td>
                                  <td><input class="col-lg-12" type="" name=""></td>
                                  <td><input class="col-lg-12" type="" name=""></td>
                                  <td><input class="col-lg-12" type="" name=""></td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                      </div>

                    </div>
                    <div class="modal-footer">
                      <a href="#" class="btn btn-info pull-left" role="button">Transaction Details</a>
                      <button id="save" class="btn btn-primary" type="button" name="save-details">Send SMS</button>
                      <button id="save" onclick="save()" class="btn btn-success" type="button" name="save-details">Save File</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
              <!-- End of Modal -->
            </div>  

            <div class="col-lg-2">
              <div class="form-group">
                <a href="{{URL::Route('dispatchSchedule')}}" type="button" class="btn btn-default btn-block"><strong>DISPATCH<br> SCHEDULE</strong></a>
              </div>
            </div>


            <div class="col-lg-2">
              <div class="form-group">
                <a href="{{URL::Route('dispatchMonitoring')}}" type="button" class="btn btn-default btn-block"><strong>DISPATCH<br> MONITORING</strong></a>
              </div>
            </div>

            <div class="col-lg-2">
              <div class="form-group">
                <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#incident-report"><strong>INCIDENT<br>REPORT</strong></button>
              </div>

              <!--Incident Report Modal -->
              <div id="incident-report" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 class="modal-title">Incident Report</h3>
                    </div>
                    <div class="modal-body">
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="col-lg-12">
                            <div class="row" style="border-bottom: 1px dotted #8c8b8b;">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <h5>Customer Name</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Address</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Contact Person</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Contact Number</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Position / Title</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <h5>Date of Incident Report</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Time of Incident Report</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Department</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Location</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                            </div>
                            <div class="row" style="border-bottom: 1px dotted #8c8b8b;"><br>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <h5>Job Order Number</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Tracking Number</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Driver's Name</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                                <div class="form-group">
                                  <h5>Contact Number</h5>
                                  <input class="form-control" type="" name="">
                                </div>
                              </div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                  <h4 style="text-align: center;">List of Goods</h4>
                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <th style="text-align: center; width: 50%;">Damage/Lost/Stolen</th>
                                        <th style="text-align: center; width: 50%;">Specified Reason</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td><input type="" name="" size="30"></td>
                                        <td><input type="" name="" size="30"></td>
                                      </tr>
                                      <tr>
                                        <td><input type="" name="" size="30"></td>
                                        <td><input type="" name="" size="30"></td>
                                      </tr>
                                      <tr>
                                        <td><input type="" name="" size="30"></td>
                                        <td><input type="" name="" size="30"></td>
                                      </tr>
                                      <tr>
                                        <td><input type="" name="" size="30"></td>
                                        <td><input type="" name="" size="30"></td>
                                      </tr>
                                      <tr>
                                        <td><input type="" name="" size="30"></td>
                                        <td><input type="" name="" size="30"></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <h5>Details of Incident Report</h5>
                                  <textarea class="form-control" rows="3"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="row"><br>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <h5>Incident Report</h5>
                                  <textarea class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                  <h5>Description of any Injury / Environmental Effect</h5>
                                  <textarea class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                  <h5>Root Cause of Accident</h5>
                                  <textarea class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                  <h5>Operator Statement</h5>
                                  <textarea class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                  <h5>Preventive Actions to be taken</h5>
                                  <textarea class="form-control" rows="5"></textarea>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <h4 style="text-align: center;">Witness &amp; Statement</h4>
                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <th style="text-align: center; width: 50%;">Names</th>
                                        <th style="text-align: center; width: 50%;">Statement</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td><textarea class="col-lg-12" rows="4"></textarea></td>
                                        <td><textarea class="col-lg-12" rows="4"></textarea></td>
                                      </tr>
                                      <tr>
                                        <td><textarea class="col-lg-12" rows="4"></textarea></td>
                                        <td><textarea class="col-lg-12" rows="4"></textarea></td>
                                      </tr>
                                      <tr>
                                        <td><textarea class="col-lg-12" rows="4"></textarea></td>
                                        <td><textarea class="col-lg-12" rows="4"></textarea></td>
                                      </tr>
                                      <tr>
                                        <td><textarea class="col-lg-12" rows="4"></textarea></td>
                                        <td><textarea class="col-lg-12" rows="4"></textarea></td>
                                      </tr>
                                      <tr>
                                        <td><textarea class="col-lg-12" rows="4"></textarea></td>
                                        <td><textarea class="col-lg-12" rows="4"></textarea></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="#" class="btn btn-info pull-left" role="button">Transaction Details</a>
                      <button id="save" onclick="save()" class="btn btn-success" type="button" name="save-details">Save</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
              <!-- End of Modal -->

            </div>
            <div class="col-lg-1"></div>
          </div>
        </div>


        <div class="row">
          <div class="panel panel-default" style="border-radius: 0; border: none; border-top: solid black 1px; box-shadow: none;">
            <div class="panel-body" style="height: 100%; width: 100%;">
              <div class="row">
                <div class="col-lg-4">
                  <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                      <button type="button" style="font-size: 18px;" class="btn btn-sm btn-custom" data-toggle="popover" data-html="true" id="yearPopOver"><strong>2017</strong></button>
                    </div>
                  </div>
                  <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                      <button type="button" style="font-size: 17px;" class="btn btn-sm btn-custom" data-toggle="popover" data-html="true" id="monthPopOver"><strong>January</strong></button> 
                    </div>
                  </div>
                  <div id="monthPopUpContent" class="hide">  
                    <div class="btn-group btn-group-justified">
                      <a href="#" class="btn btn-sm btn-link  monthButton">January</a>
                      <a href="#" class="btn btn-sm btn-link monthButton">February</a>
                    </div>
                    <div class="btn-group btn-group-justified">
                      <a href="#" class="btn btn-sm btn-link monthButton">March</a>
                      <a href="#" class="btn btn-sm btn-link monthButton">April</a>  
                    </div>
                    <div class="btn-group btn-group-justified">
                      <a href="#" class="btn btn-sm btn-link monthButton">May</a> 
                      <a href="#" class="btn btn-sm btn-link monthButton">June</a>
                    </div>
                    <div class="btn-group btn-group-justified">
                      <a href="#" class="btn btn-sm btn-link monthButton">July</a>
                      <a href="#" class="btn btn-sm btn-link monthButton">August</a>
                    </div>
                    <div class="btn-group btn-group-justified">
                      <a href="#" class="btn btn-sm btn-link monthButton">September</a>
                      <a href="#" class="btn btn-sm btn-link monthButton">October</a>                        
                    </div>
                    <div class="btn-group btn-group-justified">
                      <a href="#" class="btn btn-sm btn-link monthButton">November</a> 
                      <a href="#" class="btn btn-sm btn-link monthButton">December</a>
                    </div>
                  </div>
                  <div id="yearPopUpContent" class="hide">   
                    <div class="btn-group btn-group-justified">
                      <div class="btn-group">
                        <a href="#" class="btn btn-link yearButton">2010</a>
                        <a href="#" class="btn btn-link yearButton">2011</a>
                        <a href="#" class="btn btn-link yearButton">2012</a>
                        <a href="#" class="btn btn-link yearButton">2013</a>  
                        <a href="#" class="btn btn-link yearButton">2014</a>
                      </div>
                      <div class="btn-group">
                        <a href="#" class="btn btn-link yearButton">2015</a>         
                        <a href="#" class="btn btn-link yearButton">2016</a>
                        <a href="#" class="btn btn-link yearButton">2017</a>
                        <a href="#" class="btn btn-link yearButton">2018</a>
                        <a href="#" class="btn btn-link yearButton">2019</a>
                      </div>
                      <div class="btn-group">
                        <a href="#" class="btn btn-link yearButton">2020</a> 
                        <a href="#" class="btn btn-link yearButton">2021</a>
                        <a href="#" class="btn btn-link yearButton">2022</a>
                        <a href="#" class="btn btn-link yearButton">2023</a>
                        <a href="#" class="btn btn-link yearButton">2024</a>
                      </div>
                      <div class="btn-group">
                        <a href="#" class="btn btn-link yearButton">2025</a>  
                        <a href="#" class="btn btn-link yearButton">2026</a> 
                        <a href="#" class="btn btn-link yearButton">2027</a>         
                        <a href="#" class="btn btn-link yearButton">2028</a>
                        <a href="#" class="btn btn-link yearButton">2029</a>
                      </div>           
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="text-align:center;">
                      <thead>
                        <tr>
                        <th style="color:#d51919;text-align: center;font-size: 15px; width: 14.2%">Sun</th>
                        <th style="text-align: center;font-size: 15px; width: 14.2%">Mon</th>
                        <th style="text-align: center;font-size: 15px; width: 14.2%">Tue</th>
                        <th style="text-align: center;font-size: 15px; width: 14.2%">Wed</th>
                        <th style="text-align: center;font-size: 15px; width: 14.2%">Thu</th>
                        <th style="text-align: center;font-size: 15px; width: 14.2%">Fri</th>
                        <th style="color:#d51919;text-align: center;font-size: 15px; width: 14.2%">Sat</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="">
                        <td style="color:#d51919;text-align: center;font-size: 16px;">1</td>
                        <td class="presentTd" style="font-size: 16px;">2</td>
                        <td class="presentTd" style="font-size: 16px;">3</td>
                        <td class="presentTd" style="font-size: 16px;">4</td>
                        <td class="presentTd" style="font-size: 16px;">5</td>
                        <td class="presentTd" style="font-size: 16px;">6</td>
                        <td style="color:#d51919;text-align: center;font-size: 16px;">7</td> 
                        </tr>

                        <tr class="">
                          <td style="color:#d51919;text-align: center;font-size: 16px;">8</td>
                          <td style="font-size: 16px;">9</td>
                          <td style="font-size: 16px; background-color: #ffbf80;">10</td>
                          <td style="font-size: 16px;">11</td>
                          <td style="font-size: 16px;">12</td>
                          <td style="font-size: 16px;">13</td>
                          <td style="color:#d51919;text-align: center;font-size: 16px;">14</td> 
                        </tr>

                        <tr class="">
                          <td style="color:#d51919;text-align: center;font-size: 16px;">15</td>
                          <td style="font-size: 16px;">16</td>
                          <td style="font-size: 16px;">17</td>
                          <td style="font-size: 16px;">18</td>
                          <td style="font-size: 16px;">19</td>
                          <td style="font-size: 16px;">20</td>
                          <td style="color:#d51919;text-align: center;font-size: 16px;">21</td> 
                        </tr>

                        <tr class="">
                          <td style="color:#d51919;text-align: center;font-size: 16px;">22</td>
                          <td style="font-size: 16px;">23</td>
                          <td style="font-size: 16px;">24</td>
                          <td style="font-size: 16px;">25</td>
                          <td style="font-size: 16px;">26</td>
                          <td style="font-size: 16px;">27</td> 
                          <td style="color:#d51919;text-align: center;font-size: 16px;">28</td>
                        </tr>   

                        <tr class="">
                          <td style="color:#d51919;text-align: center;font-size: 16px;">29</td>
                          <td style="font-size: 16px;">30</td>
                          <td style="font-size: 16px;">31</td>
                          <td ></td>
                          <td></td>
                          <td></td> 
                          <td></td>
                        </tr>   
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div id="map" style="width:100%;height:310px;"></div>
                </div>
                <div class="col-lg-12" style="">
                  <div style="display:inline-block;width:100%;overflow-y:auto;padding-top: 0; border-top: 1px dotted #8c8b8b;">
                    <ul class="timeline timeline-horizontal">
                      <li class="timeline-item">
                        <div class="timeline-badge"><img src="assets/img/id1.jpg" style="border-radius: 20px;" width="60"></div>
                        <div class="timeline-panel">
                          <div class="timeline-heading">
                            <h4 class="timeline-title">Juan Dela Cruz</h4>
                            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Pick-up at 9AM</small></p>
                          </div>
                          <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis faiz elementum girarzis, nisi eros gostis.</p>
                          </div>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge success"><img src="assets/img/id2.jpg" style="border-radius: 20px;" width="60"></div>
                        <div class="timeline-panel">
                          <div class="timeline-heading">
                            <h4 class="timeline-title">Pedro Matigas </h4>
                            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Drop-off at 10:30PM</small></p>
                          </div>
                          <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis faiz elementum girarzis, nisi eros gostis.</p>
                          </div>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge info"><img src="assets/img/id3.jpg" style="border-radius: 20px;" width="60"></div>
                        <div class="timeline-panel">
                          <div class="timeline-heading">
                            <h4 class="timeline-title">James Reid</h4>
                            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Drop-off at 10:45PM</small></p>
                          </div>
                          <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipisci. Mé faiz elementum girarzis, nisi eros gostis.</p>
                          </div>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge danger"><img src="assets/img/id4.jpg" style="border-radius: 20px;" width="60"></div>
                        <div class="timeline-panel">
                          <div class="timeline-heading">
                            <h4 class="timeline-title">Roberto Roberto</h4>
                            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Pick-up at 11:30PM</small></p>
                          </div>
                          <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
                          </div>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge warning"><img src="assets/img/id5.jpg" style="border-radius: 20px;" width="60"></div>
                        <div class="timeline-panel">
                          <div class="timeline-heading">
                            <h4 class="timeline-title">Kanor Guzman</h4>
                            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Drop-off at 11:30AM</small></p>
                          </div>
                          <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
                          </div>R
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><img src="assets/img/id7.jpg" style="border-radius: 20px;" width="60" height="60"></div>
                        <div class="timeline-panel">
                          <div class="timeline-heading">
                            <h4 class="timeline-title">Jun-jun Magbanwa</h4>
                            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Pickup at 3PM</small></p>
                          </div>
                          <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- API from google DO NOT DELETE -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGtobnbmpN7r9pmFkmz9ZCrA2H4gXoqUY&callback=initMap"></script>

    <script src="assets/js/jquery.dataTables.min.js"></script>

    <script src="assets/js/dataTables.bootstrap.min.js"></script>

    <!-- Exact location of Centerpoint Bldg. from Google Map -->
    <script> 
      function initMap() {
        var uluru = {lat: 14.584575, lng: 121.062572};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 19,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
          $('#example').DataTable( {
              "scrollY": 200,
              "scrollX": true,
              "paging":  false
          } );
      } );
    </script>

    <script type="text/javascript">
             $(function() {
  
              var createMonthPopover = function (item, title) {
                                   
                    var $pop = $(item);
                    
                    $pop.popover({
                        placement: 'bottom',
                        title: ( title || '&nbsp;' ) + ' <a class="close" href="#">&times;</a>',
                        trigger: 'click',
                        html: true,
                        content: function () {
                            return $('#monthPopUpContent').html();
                        }
                    }).on('shown.bs.popover', function(e) {
                        //console.log('shown triggered');
                        // 'aria-describedby' is the id of the current popover
                        var current_popover = '#' + $(e.target).attr('aria-describedby');
                        var $cur_pop = $(current_popover);
                      
                        $cur_pop.find('.close').click(function(){
                            //console.log('close triggered');
                            $pop.popover('hide');
                        });
                      
                        $cur_pop.find('.monthButton').click(function(){
                            //console.log('OK triggered');
                            $pop.popover('hide');
                        });
                    });

                    return $pop;
                };

              // create popover
              createMonthPopover('#monthPopOver', 'Select a Month');
                             
                var createYearPopover = function (item, title) {

                        var $pop = $(item);

                        $pop.popover({
                            placement: 'top',
                            title: ( title || '&nbsp;' ) + ' <a class="close" href="#">&times;</a>',
                            trigger: 'click',
                            html: true,
                            content: function () {
                                return $('#yearPopUpContent').html();
                            }
                        }).on('shown.bs.popover', function(e) {
                            //console.log('shown triggered');
                            // 'aria-describedby' is the id of the current popover
                            var current_popover = '#' + $(e.target).attr('aria-describedby');
                            var $cur_pop = $(current_popover);

                            $cur_pop.find('.close').click(function(){
                                //console.log('close triggered');
                                $pop.popover('hide');
                            });

                            $cur_pop.find('.yearButton').click(function(){
                                //console.log('OK triggered');
                                $pop.popover('hide');
                            });
                        });

                        return $pop;
                    };

                  // create popover
                  createYearPopover('#yearPopOver', 'Select a Year');

              
            });
    </script>
    <script type="text/javascript">
     function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result)
                .width(270)
                .height(90);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
    </script>

    <script type="text/javascript">
     function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah2').attr('src', e.target.result)
                .width(320)
                .height(160);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp2").change(function(){
        readURL(this);
    });
    </script>

    <script> //for receive / on-hand stock
    function printDiv(printOnhand) {
      var printContents = document.getElementById('printOnhand').innerHTML;     
      var originalContents = document.body.innerHTML;       
      document.body.innerHTML = printContents;      
      window.print();      
      document.body.innerHTML = originalContents;
      }
    </script>

  </body>
</html>