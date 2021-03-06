<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>QuickTrack | Inventory Transaction</title>

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

    <div class="container-fluid">
    <h2 class="page-title" style="text-align: center;"><strong>Inventory Stock</strong></h2><br>
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-info" style="border: none; box-shadow: none;">
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <table id="example" class="table table-hover dataTable" cellspacing="0" width="100%">
                    <thead style="text-align: center; background-color: #165469; color: white;">
                      <tr>
                        <th></th>
                        <th>GRN #</th>
                        <th>Date of Received</th>
                        <th>Product Code</th>
                        <th>Product Description</th>
                        <th>Brand / Model</th>
                        <th>Goods Quantity</th>
                        <th>Cost</th>
                        <th>Available Goods</th>
                        <th></th>
                      </tr> 
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>0002514568</td>
                        <td>01-01-2017</td>
                        <td>000221</td>
                        <td>Laptop</td>
                        <td>ASUS</td>
                        <td>3</td>
                        <td>30,000</td>
                        <td>3</td>
                        <td>
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#transaction"><span class="glyphicon glyphicon-ok-sign" style="color: black;"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>0002514568</td>
                        <td>01-01-2017</td>
                        <td>000221</td>
                        <td>Laptop</td>
                        <td>ASUS</td>
                        <td>3</td>
                        <td>30,000</td>
                        <td>3</td>
                        <td>
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#transaction"><span class="glyphicon glyphicon-ok-sign" style="color: black;"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>0002514568</td>
                        <td>01-01-2017</td>
                        <td>000221</td>
                        <td>Laptop</td>
                        <td>ASUS</td>
                        <td>3</td>
                        <td>30,000</td>
                        <td>3</td>
                        <td>
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#transaction"><span class="glyphicon glyphicon-ok-sign" style="color: black;"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>0002514568</td>
                        <td>01-01-2017</td>
                        <td>000221</td>
                        <td>Laptop</td>
                        <td>ASUS</td>
                        <td>3</td>
                        <td>30,000</td>
                        <td>3</td>
                        <td>
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#transaction"><span class="glyphicon glyphicon-ok-sign" style="color: black;"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>0002514568</td>
                        <td>01-01-2017</td>
                        <td>000221</td>
                        <td>Laptop</td>
                        <td>ASUS</td>
                        <td>3</td>
                        <td>30,000</td>
                        <td>3</td>
                        <td>
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#transaction"><span class="glyphicon glyphicon-ok-sign" style="color: black;"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>0002514568</td>
                        <td>01-01-2017</td>
                        <td>000221</td>
                        <td>Laptop</td>
                        <td>ASUS</td>
                        <td>3</td>
                        <td>30,000</td>
                        <td>3</td>
                        <td>
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#transaction"><span class="glyphicon glyphicon-ok-sign" style="color: black;"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>0002514568</td>
                        <td>01-01-2017</td>
                        <td>000221</td>
                        <td>Laptop</td>
                        <td>ASUS</td>
                        <td>3</td>
                        <td>30,000</td>
                        <td>3</td>
                        <td>
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#transaction"><span class="glyphicon glyphicon-ok-sign" style="color: black;"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>0002514568</td>
                        <td>01-01-2017</td>
                        <td>000221</td>
                        <td>Laptop</td>
                        <td>ASUS</td>
                        <td>3</td>
                        <td>30,000</td>
                        <td>3</td>
                        <td>
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#transaction"><span class="glyphicon glyphicon-ok-sign" style="color: black;"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>0002514568</td>
                        <td>01-01-2017</td>
                        <td>000221</td>
                        <td>Laptop</td>
                        <td>ASUS</td>
                        <td>3</td>
                        <td>30,000</td>
                        <td>3</td>
                        <td>
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#transaction"><span class="glyphicon glyphicon-ok-sign" style="color: black;"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>0002514568</td>
                        <td>01-01-2017</td>
                        <td>000221</td>
                        <td>Laptop</td>
                        <td>ASUS</td>
                        <td>3</td>
                        <td>30,000</td>
                        <td>3</td>
                        <td>
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#transaction"><span class="glyphicon glyphicon-ok-sign" style="color: black;"></span></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="panel panel-default" style="border: solid black 1px;">
            <div class="panel-body" style="height: 5.5in;">
              <div class="row">
                <div class="col-lg-12">
                  <div class="pull-left">
                    <h3>Delivery Goods</h3>
                  </div>
                  <div class="pull-right">
                    <div class="form-group" style="text-align: center;">
                      <input type="" class="form-control" readonly="" disabled="" style="height: 70px; width: 80px;">
                      <label>Quantity </label>
                    </div>
                  </div>
                </div><br><br><br>
                <form class="col-lg-12">
                  <table id="del" class="table table-hover">
                    <thead style="background-color: #165469; color: white;">
                      <tr>
                        <th style="text-align: center;">RFID / Barcode</th>
                        <th style="text-align: center;">Description / Items</th>
                        <th style="text-align: center;"></th>
                      </tr> 
                    </thead>
                    <tbody>
                      <tr>
                        <td>123123</td>
                        <td>Laptop</td>
                        <td>
                          <button type="button" class="btn btn-default btn-sm"><span class="fa fa-times"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>123123</td>
                        <td>Laptop</td>
                        <td>
                          <button type="button" class="btn btn-default btn-sm"><span class="fa fa-times"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>123123</td>
                        <td>Laptop</td>
                        <td>
                          <button type="button" class="btn btn-default btn-sm"><span class="fa fa-times"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>123123</td>
                        <td>Laptop</td>
                        <td>
                          <button type="button" class="btn btn-default btn-sm"><span class="fa fa-times"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>123123</td>
                        <td>Laptop</td>
                        <td>
                          <button type="button" class="btn btn-default btn-sm"><span class="fa fa-times"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>123123</td>
                        <td>Laptop</td>
                        <td>
                          <button type="button" class="btn btn-default btn-sm"><span class="fa fa-times"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>123123</td>
                        <td>Laptop</td>
                        <td>
                          <button type="button" class="btn btn-default btn-sm"><span class="fa fa-times"></span></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-lg-3"> <!-- Next page is delivery form (inventory-delivery.html) -->
                  <button type="button" class="btn btn-default btn-block">Delivery</button>
                </div>
                <div class="col-lg-3">
                  <button type="button" class="btn btn-default btn-block">Remove All</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="panel panel-default" style="border: solid black 1px;">
            <div class="panel-body" style="height: 5.5in;">
              <div class="row">
                <div class="col-lg-12">
                  <div class="pull-left">
                    <h3>Available Goods</h3>
                  </div>
                  <div class="pull-right">
                    <div class="form-group" style="text-align: center;">
                      <input type="" class="form-control" readonly="" disabled="" style="height: 70px; width: 80px;">
                      <label>Stock </label>
                    </div>
                  </div>
                </div><br><br><br>
                <form class="col-lg-12">
                  <table id="ava" class="table table-hover table-list">
                    <thead style="background-color: #165469; color: white;">
                      <tr>
                        <th style="text-align: center;">RFID / Barcode</th>
                        <th style="text-align: center;">Description / Items</th>
                        <th style="text-align: center;"></th>
                      </tr> 
                    </thead>
                    <tbody>
                      <tr>
                        <td>123123</td>
                        <td>Laptop</td>
                        <td>
                          <button type="button" class="btn btn-default btn-sm"><span class="fa fa-plus"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>123123</td>
                        <td>Laptop</td>
                        <td>
                          <button type="button" class="btn btn-default btn-sm"><span class="fa fa-plus"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>123123</td>
                        <td>Laptop</td>
                        <td>
                          <button type="button" class="btn btn-default btn-sm"><span class="fa fa-plus"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>123123</td>
                        <td>Laptop</td>
                        <td>
                          <button type="button" class="btn btn-default btn-sm"><span class="fa fa-plus"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>123123</td>
                        <td>Laptop</td>
                        <td>
                          <button type="button" class="btn btn-default btn-sm"><span class="fa fa-plus"></span></button>
                        </td>
                      </tr>
                      <tr>
                        <td>123123</td>
                        <td>Laptop</td>
                        <td>
                          <button type="button" class="btn btn-default btn-sm"><span class="fa fa-plus"></span></button>
                        </td>
                      </tr>                    
                    </tbody>
                  </table>
                </form>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-lg-3">
                  <button type="button" class="btn btn-default btn-block">Add All</button>
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
    <script src="dist/js/bootstrap.min.js"></script>

    <script src="dist/js/jquery.dataTables.min.js"></script>

    <script src="dist/js/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
          $('#example').DataTable( {
              "scrollY":        "350px",
              "scrollCollapse": true,
              "paging":         false,
              "pagingType": "full numbers"
          } );
      } );
    </script>

  </body>
</html>