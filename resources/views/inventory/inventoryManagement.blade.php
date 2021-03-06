<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>QuickTrack | Inventory Management</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main Page CSS -->
    <link href="assets/css/main-page.css" rel="stylesheet">
    <!-- Font-awesome CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

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
    <h3 class="page-title">Inventory Management</h3><br>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="row">
          <div class="panel panel-default left-panel">
            <div class="panel-body" style="height: 100%; margin: 0;">
              
              <div class="row">
                <form>
                  <div class="form-group">
                    <div class="col-lg-6">
                      <h4>Cost of Freight</h4>
                      <div class="input-group form-group">
                        <span class="input-group-addon custom-ship"><i class="fa fa-ship fa-lg" style="width: 20px;"></i></span>
                        <input id="" type="number" class="form-control" name="" placeholder="Sea Freight" readonly="" disabled="">
                      </div>
                      <div class="input-group form-group">
                        <span class="input-group-addon custom-truck"><i class="fa fa-truck fa-lg" style="width: 20px;"></i></span>
                        <input id="" type="number" class="form-control" name="" placeholder="Land Freight" readonly="" disabled="">
                      </div>
                      <div class="input-group form-group">
                        <span class="input-group-addon custom-plane"><i class="fa fa-plane fa-lg" style="width: 20px;" ></i></span>
                        <input id="" type="number" class="form-control" name="" placeholder="Air Freight" readonly="" disabled="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <h4>Goods Inventory</h4>
                      <div class="input-group form-group">
                        <span class="input-group-addon custom-money"><i class="fa fa-money fa-lg" style="width: 20px;" ></i></span>
                        <input id="" type="number" class="form-control" name="" placeholder="Sales" readonly="" disabled="">
                      </div>
                      <div class="input-group form-group">
                        <span class="input-group-addon custom-tags"><i class="fa fa-tags fa-lg" style="width: 20px;" ></i></span>
                        <input id="" type="number" class="form-control" name="" placeholder="Purchase" readonly="" disabled="">
                      </div>
                      <div class="input-group form-group">
                        <span class="input-group-addon custom-charts"><i class="fa fa-bar-chart fa-lg" style="width: 20px;" ></i></span>
                        <input id="" type="number" class="form-control" name="" placeholder="Margin" readonly="" disabled="">
                      </div>
                    </div>
                  </div>
                </form>
              </div><br>

              <div class="row">
                <div class="form-group"> <!-- calendar column -->
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8">
                    <div class="row"> <!-- calendar row -->
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
                    </div> <!-- end of calendar row -->
                  </div> 
                </div> <!-- end of calendar column -->
              </div>

              <div class="row">
                <form>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <h5 class="col-lg-5">Received / On-Hand Stock</h5>
                      <div class="input-group col-lg-7">
                        <span class="input-group-addon custom-archive"><i class="fa fa-archive fa-lg" style="width: 20px;" ></i></span>
                        <input id="" type="text" class="form-control" readonly="" disabled="">
                      </div>
                    </div>
                    <div class="form-group">
                      <h5 class="col-lg-5">Delivery Stock</h5>
                      <div class="input-group col-lg-7">
                        <span class="input-group-addon custom-trucks"><i class="fa fa-truck fa-lg" style="width: 20px;" ></i></span>
                        <input id="" type="text" class="form-control" readonly="" disabled="">
                      </div>
                    </div>
                    <div class="form-group">
                      <h5 class="col-lg-5">Remaining Stock</h5>
                      <div class="input-group col-lg-7">
                        <span class="input-group-addon custom-hglass"><i class="fa fa-hourglass-half fa-lg" style="width: 20px;" ></i></span>
                        <input id="" type="text" class="form-control" readonly="" disabled="">
                      </div>
                    </div>
                    <div class="form-group">
                      <h5 class="col-lg-5">Transfer Stock</h5>
                      <div class="input-group col-lg-7">
                        <span class="input-group-addon custom-share"><i class="fa fa-share fa-lg" style="width: 20px;" ></i></span>
                        <input id="" type="text" class="form-control" readonly="" disabled="">
                      </div>
                    </div>
                    <div class="form-group">
                      <h5 class="col-lg-5">Return Stock</h5>
                      <div class="input-group col-lg-7">
                        <span class="input-group-addon custom-undo"><i class="fa fa-undo fa-lg" style="width: 20px;" ></i></span>
                        <input id="" type="text" class="form-control" readonly="" disabled="">
                      </div>
                    </div>
                  </div>
                </form>
              </div><br>

            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="row">
          <div class="panel panel-default right-panel">
            <div class="panel-body" style="height: 100%; padding-bottom: 19px;">
              <br><br><br>
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 center-block">
                  <div class="form-group">
                    <button type="button" class="btn btn-default btn-block custom-btn" data-toggle="modal" data-target="#on-hand-stock"><strong>RECEIVED / ON-HAND STOCK</strong></button>
                  </div>

                  <!--Received / On-Hand Modal -->
                  <div id="on-hand-stock" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="modal-title">Received / On-hand Stock</h3>
                        </div>
                        <div class="modal-body" id="printOnhand">
                          <div class="row">
                            <form class="col-lg-12">
                              <div class="col-lg-4" id="img-item" style="text-align: center; height: 370px;">
                                <h4>Item / Product</h4>
                                <div class="form-group">
                                  <img class="col-lg-12" id="blah" src="assets/img/item.png" height="200">
                                  <span class="btn btn-file">
                                    <input class="required input-sm" type="file" id="imgInp" name="file">
                                  </span>
                                </div>
                                <div class="form-group col-lg-12">
                                  <h5>Goods Received Note #</h5>
                                  <input class="form-control" type="" name="" disabled="" >
                                </div>
                              </div>
                              <div class="col-lg-8">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <h5>Supplier Name</h5>
                                    <input class="form-control" type="" name="">
                                  </div>
                                  <div class="form-group">
                                    <h5>Supplier Address</h5>
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
                                    <h5>Date of Received</h5>
                                    <input class="form-control" type="date" name="">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <h5>Purchase Order Number</h5>
                                    <input class="form-control" type="" name="">
                                  </div>
                                  <div class="form-group">
                                    <h5>Product Code</h5>
                                    <input class="form-control" type="" name="">
                                  </div>
                                  <div class="form-group">
                                    <h5>Item / Product Name</h5>
                                    <input class="form-control" type="" name="">
                                  </div>
                                  <div class="form-group">
                                    <h5>Quantity</h5>
                                    <input class="form-control" type="" name="">
                                  </div>
                                  <div class="form-group">
                                    <h5>Payment Terms</h5>
                                    <input class="form-control" type="" name="">
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div><br>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="panel panel-default" style="border: none; border-top: solid black 1px; border-bottom: solid black 1px; border-radius: 0px;">
                                <div class="panel-body">
                                  <div class="row">
                                    <div class="col-lg-4" style="border-right: solid black 1px;">
                                      <div class="description-block custom-block" style="background-color: #00b8e6;"><br>
                                        <!-- <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span> -->
                                        <span class="description-text" style="color: white;">Goods Quantity / Units</span>
                                        <h5 class="description-header" style="color: white;">1000</h5> 
                                      </div>
                                      <div class="description-block custom-block" style="background-color: #008080;"><br>
                                        <!-- <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span> -->
                                        <span class="description-text" style="color: white;">No. of Boxes / Items</span>
                                        <h5 class="description-header" style="color: white;">50</h5>
                                      </div>
                                      <div class="description-block custom-block" style="background-color: #2ab300;"><br>
                                        <!-- <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span> -->
                                        <span class="description-text" style="color: white;">Gross Weight</span>
                                        <h5 class="description-header" style="color: white;">925</h5> 
                                      </div>
                                      <div class="description-block custom-block" style="background-color: #ff0080;"><br>
                                        <!-- <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span> -->
                                        <span class="description-text" style="color: white;">Bill of Lading number</span>
                                        <h5 class="description-header" style="color: white;">0021568</h5> 
                                      </div>
                                      <div class="description-block custom-block" style="background-color: #9933ff;"><br>
                                        <!-- <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span> -->
                                        <span class="description-text" style="color: white;">Freight Bill Number</span>
                                        <h5 class="description-header" style="color: white;">0015795</h5> 
                                      </div>
                                      <div class="description-block custom-block" style="background-color: #ff9900;"><br>
                                        <!-- <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span> -->
                                        <span class="description-text" style="color: white;">Unit Cost</span>
                                        <h5 class="description-header" style="color: white;">&#8369;100</h5>
                                      </div>
                                      <div class="description-block custom-block" style="background-color: #00e6e6;"><br>
                                        <!-- <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span> -->
                                        <span class="description-text" style="color: white;">Total Amount</span>
                                        <h5 class="description-header" style="color: white;">&#8369;100,000</h5>
                                      </div>
                                    </div>
                                    <div class="col-lg-8">
                                      <div class="panel panel-default" style="border: none;">
                                        <div class="panel-heading" style="background-color: white;">
                                          <div class="row">
                                            <div class="input-group col-lg-6 pull-right">
                                              <input type="text" class="form-control input-sm" placeholder="Search">
                                              <div class="input-group-btn">
                                                <button class="btn btn-default btn-sm" type="submit">
                                                  <i class="glyphicon glyphicon-search"></i>
                                                </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel-body" style="height: 580px;">
                                          <div class="row">
                                            <table class="table table-hover table-list">
                                              <thead>
                                                <tr style="background-color: #33ffff;">
                                                  <th style="width: 5%;"></th>
                                                  <th style="width: 55%;">Item / Product Description</th>
                                                  <th style="width: 40%;">RFID Tag / Barcode</th>
                                                </tr> 
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>1</td>
                                                  <td>Laptop</td>
                                                  <td>0002514568</td>
                                                </tr>
                                                <tr>
                                                  <td>2</td>
                                                  <td>Laptop</td>
                                                  <td>0002514568</td>
                                                </tr>
                                                <tr>
                                                  <td>3</td>
                                                  <td>Laptop</td>
                                                  <td>0002514568</td>
                                                </tr>
                                                <tr>
                                                  <td>4</td>
                                                  <td>Laptop</td>
                                                  <td>0002514568</td>
                                                </tr>
                                                <tr>
                                                  <td>5</td>
                                                  <td>Laptop</td>
                                                  <td>0002514568</td>
                                                </tr>
                                                <tr>
                                                  <td>6</td>
                                                  <td>Laptop</td>
                                                  <td>0002514568</td>
                                                </tr>
                                                <tr>
                                                  <td>7</td>
                                                  <td>Laptop</td>
                                                  <td>0002514568</td>
                                                </tr>
                                                <tr>
                                                  <td>8</td>
                                                  <td>Laptop</td>
                                                  <td>0002514568</td>
                                                </tr>
                                                <tr>
                                                  <td>9</td>
                                                  <td>Laptop</td>
                                                  <td>0002514568</td>
                                                </tr>
                                                <tr>
                                                  <td>10</td>
                                                  <td>Laptop</td>
                                                  <td>0002514568</td>
                                                </tr>
                                                <tr>
                                                  <td>11</td>
                                                  <td>Laptop</td>
                                                  <td>0002514568</td>
                                                </tr>
                                                <tr>
                                                  <td>12</td>
                                                  <td>Laptop</td>
                                                  <td>0002514568</td>
                                                </tr>
                                                <tr>
                                                  <td>13</td>
                                                  <td>Laptop</td>
                                                  <td>0002514568</td>
                                                </tr>
                                                <tr>
                                                  <td>14</td>
                                                  <td>Laptop</td>
                                                  <td>0002514568</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                        <div class="panel-footer" style="padding: 0; background-color: white;">
                                          <div class="row">
                                            <div class="col-lg-12">
                                              <nav aria-h5="Page navigation">
                                                <ul class="pagination pagination-sm pull-right">
                                                  <li>
                                                    <a href="#" aria-h5="Previous">
                                                      <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                  </li>
                                                  <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                                  <li><a href="#">2</a></li>
                                                  <li><a href="#">3</a></li>
                                                  <li><a href="#">4</a></li>
                                                  <li><a href="#">5</a></li>
                                                  <li>
                                                    <a href="#" aria-h5="Next">
                                                      <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                  </li>
                                                </ul>
                                              </nav>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-4">
                                      <div class="panel panel-default">
                                        <div class="panel-heading" style="text-align: center; background-color: #33FFFF;">
                                          <h5 class="panel-title"><a data-toggle="collapse" href="#mod-inspection">Inspection</a></h5>
                                        </div>
                                        <div class="panel-collapse collapse" id="mod-inspection">
                                          <div class="panel-body">
                                            <div class="form-group">
                                              <h5>Quantity Status</h5>
                                              <select class="form-control">
                                                <option disabled selected="">Choose your option</option>
                                                <option>Quantity Pass</option>
                                                <option>Quantity Rejected</option>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <h5>Reason for Rejected</h5>
                                              <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                          </div>
                                          <div class="panel-footer">
                                            <div class="form-group">
                                              <h5>Name of Inspector</h5>
                                              <input class="form-control" type="" name="">
                                            </div>
                                            <div class="form-group">
                                              <h5>Date of Inspection</h5>
                                              <input class="form-control" type="date" name="">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-4">
                                      <div class="panel panel-default">
                                        <div class="panel-heading" style="text-align: center; background-color: #33FFFF;">
                                          <h5 class="panel-title"><a data-toggle="collapse" href="#mod-good">Good Received</a></h5>
                                        </div>
                                        <div class="panel-collapse collapse" id="mod-good">
                                          <div class="panel-body">
                                            <div class="form-group">
                                              <h5>Type of Delivery</h5>
                                              <select class="form-control">
                                                <option disabled selected="">Choose your option</option>
                                                <option>Partial Delivery</option>
                                                <option>Complete Delivery</option>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <h5>Date of Good Received</h5>
                                              <input class="form-control" type="date" name="">
                                            </div>
                                          </div>
                                          <div class="panel-footer">
                                            <div class="form-group">
                                              <h5>Location of Goods Received</h5>
                                            </div>
                                            <div class="form-group">
                                              <label class="radio-inline"><input type="radio" name="optradio">Site</label>
                                              <label class="radio-inline"><input type="radio" name="optradio">Warehouse</label>
                                            </div>
                                            <div class="form-group">
                                              <textarea class="form-control" rows="4" placeholder="Address"></textarea>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-4">
                                      <div class="panel panel-default">
                                        <div class="panel-heading" style="text-align: center; background-color: #33FFFF;">
                                          <h5 class="panel-title"><a data-toggle="collapse" href="#mod-remarks">Remarks</a></h5>
                                        </div>
                                        <div class="panel-collapse collapse" id="mod-remarks">
                                          <div class="panel-body">
                                            <div class="form-group">
                                              <textarea class="form-control" rows="7" ></textarea>
                                            </div>
                                          </div>
                                          <div class="panel-footer">
                                            <div class="form-group">
                                              <h5>Name of Checker</h5>
                                              <input class="form-control" type="" name="">
                                            </div>
                                            <div class="form-group">
                                              <h5>Date</h5>
                                              <input class="form-control" type="date" name="">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="#" class="btn btn-info pull-left" role="button">Transaction Details</a>
                          <button id="print" onclick="printDiv('printOnhand')" class="btn btn-default" type="button" name="save-details">Print</button>
                          <button id="save" onclick="save()" class="btn btn-success" type="button" name="save-details">Save</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Modal -->

                  <div class="form-group">
                    <button type="button" class="btn btn-default btn-block custom-btn" data-toggle="modal" data-target="#return-stock"><strong>RETURN STOCK</strong></button>
                  </div>

                  <!--Return Stock Modal -->
                  <div id="return-stock" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="modal-title">Return Stock</h3>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <form>
                                <div class="col-lg-4" id="img-item" style="text-align: center; height: 410px;">
                                  <h4>Item / Product</h4>
                                  <div class="form-group">
                                    <img class="col-lg-12" id="blah" src="assets/img/item.png" height="200">
                                    <span class="btn btn-file">
                                      <input class="required input-sm" type="file" id="imgInp" name="file">
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <h5>Return Control #</h5>
                                    <input class="form-control" type="" name="" disabled="" >
                                  </div>  
                                </div>
                                <div class="col-lg-8">
                                  <div class="col-lg-6">
                                    <h3 style="background-color: #33FFFF; margin: 0;"><strong>Return From</strong></h3><br>
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
                                      <h5>Contact Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Email</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <h3 style="background-color: #33FFFF; margin: 0;"><strong>Return To</strong></h3><br>
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
                                      <h5>Contact Number</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Email</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div><br>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="panel panel-default" style="border-radius: 0px; border: none; border-top: solid black 1px; border-bottom: solid black 1px;">
                                <div class="panel-body">
                                  <form>
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <div class="form-inline">
                                            <h5 class="col-lg-6">Date of Return: </h5>
                                            <input class="form-control">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="form-inline">
                                            <h5 class="col-lg-6">Type of Return: </h5>
                                            <input class="form-control">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="form-inline">
                                            <h5 class="col-lg-6">Stock Location Pullout: </h5>
                                            <input class="form-control">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="form-inline">
                                            <h5 class="col-lg-6">Deliver Address: </h5>
                                            <input class="form-control">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="form-inline">
                                            <h5 class="col-lg-6">Department: </h5>
                                            <input class="form-control">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="form-inline">
                                            <h5 class="col-lg-6">Supplier Code: </h5>
                                            <input class="form-control">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <div class="form-inline">
                                            <h5 class="col-lg-6">Invoice No. Preference: </h5>
                                            <input class="form-control">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="form-inline">
                                            <h5 class="col-lg-6">P.O No. Reference: </h5>
                                            <input class="form-control">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="form-inline">
                                            <h5 class="col-lg-6">Authorize Person Person: </h5>
                                            <input class="form-control">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="form-inline">
                                            <h5 class="col-lg-6">Shipping Chargers: </h5>
                                            <input class="form-control">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="form-inline">
                                            <h5 class="col-lg-6">Quantity: </h5>
                                            <input class="form-control">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="form-inline">
                                            <h5 class="col-lg-6">Product Code: </h5>
                                            <input class="form-control">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                  <form> 
                                    <div class="row">
                                      <div class="col-lg-12" style="border-radius: 0px; border: none; border-top: solid black 1px;"><br>
                                        <div class="input-group col-lg-4 pull-right">
                                          <input type="text" class="form-control input-sm" placeholder="Search">
                                          <div class="input-group-btn">
                                            <button class="btn btn-default btn-sm" type="submit">
                                              <i class="glyphicon glyphicon-search"></i>
                                            </button>
                                          </div>
                                        </div><br><br>
                                        <table class="table table-hover table-list">
                                            <thead>
                                              <tr style="background-color: #33ffff;">
                                                <th style="width: 10%;"></th>
                                                <th style="width: 40%;">Item / Product Description</th>
                                                <th style="width: 40%;">RFID Tag / Barcode</th>
                                              </tr> 
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>1</td>
                                                <td>Laptop</td>
                                                <td>0002514568</td>
                                              </tr>
                                              <tr>
                                                <td>2</td>
                                                <td>Laptop</td>
                                                <td>0002514568</td>
                                              </tr>
                                              <tr>
                                                <td>3</td>
                                                <td>Laptop</td>
                                                <td>0002514568</td>
                                              </tr>
                                              <tr>
                                                <td>4</td>
                                                <td>Laptop</td>
                                                <td>0002514568</td>
                                              </tr>
                                              <tr>
                                                <td>5</td>
                                                <td>Laptop</td>
                                                <td>0002514568</td>
                                              </tr>
                                            </tbody>
                                        </table>
                                        <div class="pull-right">
                                          <nav aria-h5="Page navigation">
                                            <ul class="pagination pagination-sm">
                                              <li>
                                                <a href="#" aria-h5="Previous">
                                                  <span aria-hidden="true">&laquo;</span>
                                                </a>
                                              </li>
                                              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                              <li><a href="#">2</a></li>
                                              <li><a href="#">3</a></li>
                                              <li>
                                                <a href="#" aria-h5="Next">
                                                  <span aria-hidden="true">&raquo;</span>
                                                </a>
                                              </li>
                                            </ul>
                                          </nav>
                                        </div>
                                      </div>
                                      <div class="col-lg-4">
                                        <div class="form-group">
                                          <h5>Unit Cost: </h5>
                                          <input class="form-control" type="" name="">
                                        </div>
                                        <div class="form-group">
                                          <h5>Total Amount: </h5>
                                          <input class="form-control" type="" name="">
                                        </div>
                                      </div>
                                      <div class="col-lg-8">
                                        <div class="form-group">
                                          <h5>Reason of Return: </h5>
                                          <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
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

                  <div class="form-group">
                    <button type="button" class="btn btn-default btn-block custom-btn" data-toggle="modal" data-target="#freight-cost"><strong>FREIGHT COST</strong></button>
                  </div>

                  <!--Freight Cost Modal -->
                  <div id="freight-cost" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="modal-title">Freight Cost</h3>
                        </div>
                        <div class="modal-body custom-modal">
                          <div class="row">
                            <div class="col-lg-12">
                              <form>
                                <div class="col-lg-6">
                                  <h3 style="background-color: #33FFFF; margin: 0;"><strong>Freight Forwarder</strong></h3><br>
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
                                    <h5>Contact Number</h5>
                                    <input class="form-control" type="" name="">
                                  </div>
                                  <div class="form-group">
                                    <h5>Email</h5>
                                    <input class="form-control" type="" name="">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <h3 style="background-color: #33FFFF; margin: 0;"><strong>Vendor / Consignee</strong></h3><br>
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
                                    <h5>Contact Number</h5>
                                    <input class="form-control" type="" name="">
                                  </div>
                                  <div class="form-group">
                                    <h5>Date of Delivery</h5>
                                    <input class="form-control" type="" name="">
                                  </div>
                                </div>
                              </form>                              
                            </div>
                          </div><br> 
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="panel panel-default" style="border: none; border-top: solid black 1px; border-bottom: solid black 1px; border-radius: 0px;">
                                <div class="panel-body">
                                  <div class="row">
                                    <div class="input-group col-lg-4 pull-right">
                                      <input type="text" class="form-control input-sm" placeholder="Search">
                                      <div class="input-group-btn">
                                        <button class="btn btn-default btn-sm" type="submit">
                                          <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                      </div>
                                    </div><br><br>
                                    <table class="table table-hover table-list">
                                      <thead>
                                        <tr style="background-color: #33ffff;">
                                          <th  width="5%  "></th>
                                          <th>Description | Items</th>
                                          <th width="20%">Quantity of Goods</th>
                                          <th width="10%">Weight</th>
                                          <th width="10%">Height</th>
                                          <th width="10%">Lenght</th>
                                          <th width="10%">Width</th>
                                        </tr> 
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td>Laptop</td>
                                          <td>5</td>
                                          <td>2.3 kg</td>
                                          <td>22.9 cm</td>
                                          <td>265 cm</td>
                                          <td>383 cm</td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td>Laptop</td>
                                          <td>5</td>
                                          <td>2.3 kg</td>
                                          <td>22.9 cm</td>
                                          <td>265 cm</td>
                                          <td>383 cm</td>
                                        </tr>
                                        <tr>
                                          <td>3</td>
                                          <td>Laptop</td>
                                          <td>5</td>
                                          <td>2.3 kg</td>
                                          <td>22.9 cm</td>
                                          <td>265 cm</td>
                                          <td>383 cm</td>
                                        </tr>
                                        <tr>
                                          <td>4</td>
                                          <td>Laptop</td>
                                          <td>5</td>
                                          <td>2.3 kg</td>
                                          <td>22.9 cm</td>
                                          <td>265 cm</td>
                                          <td>383 cm</td>
                                        </tr>
                                        <tr>
                                          <td>5</td>
                                          <td>Laptop</td>
                                          <td>5</td>
                                          <td>2.3 kg</td>
                                          <td>22.9 cm</td>
                                          <td>265 cm</td>
                                          <td>383 cm</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <div class="pull-right">
                                      <nav aria-h5="Page navigation">
                                        <ul class="pagination pagination-sm">
                                          <li>
                                            <a href="#" aria-h5="Previous">
                                              <span aria-hidden="true">&laquo;</span>
                                            </a>
                                          </li>
                                          <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                          <li><a href="#">2</a></li>
                                          <li><a href="#">3</a></li>
                                          <li>
                                            <a href="#" aria-h5="Next">
                                              <span aria-hidden="true">&raquo;</span>
                                            </a>
                                          </li>
                                        </ul>
                                      </nav>
                                    </div>
                                  </div>  
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title"><a data-toggle="collapse" href="#ship">Shipping</a></h3>
                                </div>
                                <div id="ship" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <form >  
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <h5>Airway Bill No.</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Method of Shipment</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Port of Loading</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Domestic Routing</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Notify Party</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Declared Value for Custom</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <h5>Bill of Lading No.</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Packaging</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Loading Pier / Terminal</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Port of Discharge</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Declared Value</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Shipping Provider</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title"><a data-toggle="collapse" href="#insure">Insurance</a></h3>
                                </div>
                                <div id="insure" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <form>  
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <h5>Insurance Company</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <h5>Date of Insure</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                        </div>
                                        <div class="col-lg-12">
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
                                            <h5>Declared Value Insure</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Policy Date</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <h5>Contact Number</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Policy Number Insured</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Insurance Chargers</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title"><a data-toggle="collapse" href="#cost-of-freight">Cost of Freight</a></h3>
                                </div>
                                <div id="cost-of-freight" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <form>  
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <h5>Duties &amp; Taxes</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Custom Charges</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Weight Cost</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Dimension Cost</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Freight Cost</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <h5>Miscellanous</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                        </div>
                                      </div>
                                    </form>
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

                  <div class="form-group">
                    <button type="button" class="btn btn-default btn-block custom-btn" data-toggle="modal" data-target="#invoice"><strong>INVOICE</strong></button>
                  </div>

                  <!--Invoice Modal -->
                  <div id="invoice" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="modal-title">Invoice</h3>
                        </div>
                        <div class="modal-body custom-modal">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <form style="background-image: url('assets/img/Invoice Form.jpg'); background-position: center; background-size: cover; height: 1000px;">
                                <div class="row">
                                  <div class="form-group">
                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="left: 365px; top: 154px;">
                                      <input class="form-control input-sm" type="" name="invoice-no" readonly="" disabled="" style="background-color: white;">
                                    </div>
                                  </div>
                                </div>
<!--                                 <br><br><br><br><br><br><br><br><br>
                                <div class="form-group col-xs-4 col-sm-4 col-md-4 col-lg-4" style="left: 150px; top: 18px;">
                                  <input class="form-control input-sm" type="" name="">
                                  <input class="form-control input-sm" type="" name="">
                                  <input class="form-control input-sm" type="" name="">
                                </div>
                                <div class="form-group col-xs-3 col-sm-3 col-md-3 col-lg-3" style="left: 305px; top: 18px;">
                                  <input class="form-control input-sm" type="" name="">
                                  <input class="form-control input-sm" type="" name="">
                                  <input class="form-control input-sm" type="" name="">
                                </div>
                                <br><br><br><br><br><br><br><br>
                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" style="left: 35px; top: 5px;">
                                  <table class="table" style="border: hidden;">
                                    <tbody>
                                      <tr>
                                        <td><input size="47" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                      </tr>
                                      <tr>
                                        <td><input size="47" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                      </tr>
                                      <tr>
                                        <td><input size="47" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                      </tr>
                                      <tr>
                                        <td><input size="47" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                      </tr>
                                      <tr>
                                        <td><input size="47" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                      </tr>
                                      <tr>
                                        <td><input size="47" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                      </tr>
                                      <tr>
                                        <td><input size="47" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="form-group col-xs-3 col-sm-3 col-md-3  col-lg-3" style="left: 610px; top: 6px;">
                                  <input class="form-control input-sm" type="" name="" readonly="" disabled="">
                                  <input class="form-control input-sm" type="" name="" readonly="" disabled="">
                                  <input class="form-control input-sm" type="" name="" readonly="" disabled="">
                                </div>
                                <div class="form-group col-xs-3 col-sm-3 col-md-3  col-lg-3" style="left: 393px; top: 112px;">
                                  <input class="form-control input-sm" type="" name="" readonly="" disabled="">
                                </div>
                                <div class="form-group col-xs-3 col-sm-3 col-md-3  col-lg-6" style="right: 395px; top: 30px; width: 410px;">
                                  <textarea class="form-control" rows="5"></textarea>
                                </div> -->
                              </form>
                            </div>
                          </div><br>         
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

                  <div class="form-group">
                    <a href="{{URL::Route('inventoryDelivery')}}"><button type="button" class="btn btn-default btn-block custom-btn" data-toggle="modal" data-target="#delivery"><strong>DELIVERY</strong></button></a>
                  </div>

                  <!--Delivery Modal -->
                  <!-- <div id="delivery" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="modal-title">Delivery</h3>
                        </div>
                        <div class="modal-body custom-modal">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <form style="background-image: url('dist/img/Delivery Form.jpg'); background-position: center; background-size: cover; height: 1000px;">
                                <div class="row">
                                  <div class="form-group">
                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="left: 365px; top: 154px;">
                                      <input class="form-control input-sm" type="" name="invoice-no" readonly="" disabled="" style="background-color: white;">
                                    </div>
                                  </div>
                                </div>
                                <br><br><br><br><br><br><br><br><br>
                                <div class="form-group col-xs-4 col-sm-4 col-md-4 col-lg-4" style="left: 150px; top: 18px;">
                                  <input class="form-control input-sm" type="" name="">
                                  <input class="form-control input-sm" type="" name="">
                                  <input class="form-control input-sm" type="" name="">
                                </div>
                                <div class="form-group col-xs-3 col-sm-3 col-md-3 col-lg-3" style="left: 305px; top: 18px;">
                                  <input class="form-control input-sm" type="" name="">
                                  <input class="form-control input-sm" type="" name="">
                                  <input class="form-control input-sm" type="" name="">
                                </div>
                                <br><br><br><br><br><br><br><br>
                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" style="left: 35px; top: 5px;">
                                  <table class="table" style="border: hidden;">
                                    <tbody>
                                      <tr>
                                        <td><input size="47" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                      </tr>
                                      <tr>
                                        <td><input size="47" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                      </tr>
                                      <tr>
                                        <td><input size="47" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                      </tr>
                                      <tr>
                                        <td><input size="47" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                      </tr>
                                      <tr>
                                        <td><input size="47" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                      </tr>
                                      <tr>
                                        <td><input size="47" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                      </tr>
                                      <tr>
                                        <td><input size="47" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                        <td><input size="11" type="" name=""></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="form-group col-xs-3 col-sm-3 col-md-3  col-lg-3" style="left: 610px; top: 6px;">
                                  <input class="form-control input-sm" type="" name="" readonly="" disabled="">
                                  <input class="form-control input-sm" type="" name="" readonly="" disabled="">
                                  <input class="form-control input-sm" type="" name="" readonly="" disabled="">
                                </div>
                                <div class="form-group col-xs-3 col-sm-3 col-md-3  col-lg-3" style="left: 393px; top: 112px;">
                                  <input class="form-control input-sm" type="" name="" readonly="" disabled="">
                                </div>
                                <div class="form-group col-xs-3 col-sm-3 col-md-3  col-lg-6" style="right: 395px; top: 30px; width: 410px;">
                                  <textarea class="form-control" rows="5"></textarea>
                                </div>
                              </form>
                            </div>
                          </div><br>         
                        </div>
                        <div class="modal-footer">
                          <a href="#" class="btn btn-info pull-left" role="button">Transaction Details</a>
                          <button id="save" onclick="save()" class="btn btn-success" type="button" name="save-details">Save</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div> -->
                  <!-- End of Modal -->

                  <div class="form-group">
                    <a href="{{URL::Route('inventoryStock')}}"><button type="button" class="btn btn-default btn-block custom-btn"><strong>INVENTORY STOCK</strong></button></a>
                  </div>

                  <div class="form-group">
                    <button type="button" class="btn btn-default btn-block custom-btn" data-toggle="modal" data-target="#transfer-adjustment-stock"><strong>TRANSFER / ADJUSTMENT OF STOCK</strong></button>
                  </div>

                  <!--Transfer / Adjustment Modal -->
                  <div id="transfer-adjustment-stock" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="modal-title">Transfer &amp; Adjustment of Stock</h3>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <form>
                                <div class="col-lg-4" id="img-item" style="text-align: center; height: 360px;">
                                  <h4>Item / Product</h4>
                                  <div class="form-group">
                                    <img class="col-lg-12" id="blah" src="assets/img/item.png" height="200">
                                    <span class="btn btn-file">
                                      <input class="required input-sm" type="file" id="imgInp" name="file">
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <h5>Transfer &amp; Adjustment Control #</h5>
                                    <input class="form-control" type="" name="" disabled="">
                                  </div>
                                </div>
                                <div class="col-lg-8">
                                  <div class="col-lg-6">
                                    <h4 style="background-color: #33FFFF; margin: 0;"><strong>Transfer / Adjustment From</strong></h4><br>
                                    <div class="form-group">
                                      <h5>Current Department / Company</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>Current Location</h5>
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
                                  </div>
                                  <div class="col-lg-6">
                                    <h4 style="background-color: #33FFFF; margin: 0;"><strong>Transfer / Adjustment To</strong></h4><br>
                                    <div class="form-group">
                                      <h5>New Department / Company</h5>
                                      <input class="form-control" type="" name="">
                                    </div>
                                    <div class="form-group">
                                      <h5>New Location</h5>
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
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div><br>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="panel panel-default" style="border-radius: 0px; border: none; border-top: solid black 1px; border-bottom: solid black 1px;">
                                <div class="panel-body">
                                  <form>
                                    <div class="row">
                                      <div class="col-lg-4">
                                        <h4 style="background-color: #33FFFF; margin: 0;"><strong>Freight By</strong></h4><br>
                                        <div class="form-group">
                                          <h5>Forwarder Company</h5>
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
                                      </div>
                                      <div class="col-lg-8">
                                        <h4 style="background-color: #33FFFF; margin: 0;"><strong>Shipping Charges</strong></h4><br>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <h5>Shipping Method</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>P.O Number Reference</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Invoice Reference Number</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Date of Transaction</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <h5>Date of Transfer</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Product Code</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Shipping Cost</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5>Terms of Payment</h5>
                                            <input class="form-control" type="" name="">
                                          </div>
                                          <div class="form-group">
                                            <h5 style="color: red;">TOTAL AMOUNT</h5>
                                            <input class="form-control" type="" name="" readonly="">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                  <form> 
                                    <div class="row">
                                      <div class="col-lg-12" style="border-radius: 0px; border: none; border-top: solid black 1px;"><br>
                                        <div class="input-group col-lg-4 pull-right">
                                          <input type="text" class="form-control input-sm" placeholder="Search">
                                          <div class="input-group-btn">
                                            <button class="btn btn-default btn-sm" type="submit">
                                              <i class="glyphicon glyphicon-search"></i>
                                            </button>
                                          </div>
                                        </div><br><br>
                                        <table class="table table-hover table-list">
                                            <thead>
                                              <tr style="background-color: #33ffff;">
                                                <th style="width: 10%;"></th>
                                                <th style="width: 40%;">Item / Product Description</th>
                                                <th style="width: 40%;">RFID Tag / Barcode</th>
                                              </tr> 
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>1</td>
                                                <td>Laptop</td>
                                                <td>0002514568</td>
                                              </tr>
                                              <tr>
                                                <td>2</td>
                                                <td>Laptop</td>
                                                <td>0002514568</td>
                                              </tr>
                                              <tr>
                                                <td>3</td>
                                                <td>Laptop</td>
                                                <td>0002514568</td>
                                              </tr>
                                              <tr>
                                                <td>4</td>
                                                <td>Laptop</td>
                                                <td>0002514568</td>
                                              </tr>
                                              <tr>
                                                <td>5</td>
                                                <td>Laptop</td>
                                                <td>0002514568</td>
                                              </tr>
                                            </tbody>
                                        </table>
                                        <div class="pull-right">
                                          <nav aria-h5="Page navigation">
                                            <ul class="pagination pagination-sm">
                                              <li>
                                                <a href="#" aria-h5="Previous">
                                                  <span aria-hidden="true">&laquo;</span>
                                                </a>
                                              </li>
                                              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                              <li><a href="#">2</a></li>
                                              <li><a href="#">3</a></li>
                                              <li>
                                                <a href="#" aria-h5="Next">
                                                  <span aria-hidden="true">&raquo;</span>
                                                </a>
                                              </li>
                                            </ul>
                                          </nav>
                                        </div>
                                      </div>
                                      <div class="col-lg-4">
                                        <div class="form-group">
                                          <h5>Unit Cost: </h5>
                                          <input class="form-control" type="" name="">
                                        </div>
                                        <div class="form-group">
                                          <h5>Total Amount: </h5>
                                          <input class="form-control" type="" name="">
                                        </div>
                                      </div>
                                      <div class="col-lg-8">
                                        <div class="form-group">
                                          <h5>Reason for Transfer &amp; Adjustment: </h5>
                                          <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>          
                        </div>
                        <div class="modal-footer">
                          <button id="save" onclick="save()" class="btn btn-success" type="button" name="save-details">Save</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- End of Modal -->


                  <div class="form-group">
                    <button type="button" class="btn btn-default btn-block custom-btn" data-toggle="modal" data-target="#purchase-stock"><strong>PURCHASE STOCK</strong></button>
                  </div>

                  <!--Purchase Stock Modal -->
                  <div id="purchase-stock" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="modal-title">Purchase Stock</h3>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <form>
                                <div class="col-lg-4">
                                  <div class="row" style="text-align: center;">
                                    <img src="assets/img/simplevia.png" height="120">
                                    <p>Unit 405, 4F Centerpoint Building<br>Garnet Road cor., J. Vargas Ave.<br>Ortigas Center, Pasig City, 1605</p>
                                  </div>
                                </div>
                                <div class="col-lg-8">
                                  <h4 style="background-color: #33FFFF; margin: 0;"><strong>Purchase Order</strong></h4><br>
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <h5>P.O Number</h5>
                                        <input class="form-control" type="" name="">
                                      </div>
                                      <div class="form-group">
                                        <h5>Shipping Method</h5>
                                        <input class="form-control" type="" name="">
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <h5>Date of Purchase</h5>
                                        <input class="form-control" type="" name="">
                                      </div>
                                      <div class="form-group">
                                        <h5>Shipping Terms</h5>
                                        <input class="form-control" type="" name="">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div><br>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="panel panel-default" style="border-radius: 0px; border: none; border-top: solid black 1px; border-bottom: solid black 1px;">
                                <div class="panel-body">
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title">Vendor</h4>
                                        </div>
                                        <div class="panel-body">
                                          <div class="row">
                                            <div class="form-group">
                                              <div class="form-inline">
                                                <h5 class="col-lg-5">Company Name: </h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-inline">
                                                <h5 class="col-lg-5">Address: </h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-inline">
                                                <h5 class="col-lg-5">Contact Person: </h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-inline">
                                                <h5 class="col-lg-5">Contact Number: </h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-inline">
                                                <h5 class="col-lg-5">Email: </h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title">Ship To</h4>
                                        </div>
                                        <div class="panel-body">
                                          <div class="row">
                                            <div class="form-group">
                                              <div class="form-inline">
                                                <h5 class="col-lg-5">Company Name: </h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-inline">
                                                <h5 class="col-lg-5">Address: </h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-inline">
                                                <h5 class="col-lg-5">Contact Person: </h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-inline">
                                                <h5 class="col-lg-5">Contact Number: </h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-inline">
                                                <h5 class="col-lg-5">Email: </h5>
                                                <input class="form-control" type="" name="">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <form> 
                                    <div class="row">
                                      <div class="col-lg-12" style="border-radius: 0px; border: none; border-top: solid black 1px;"><br>
                                        <div class="input-group col-lg-4 pull-right">
                                          <input type="text" class="form-control input-sm" placeholder="Search">
                                          <div class="input-group-btn">
                                            <button class="btn btn-default btn-sm" type="submit">
                                              <i class="glyphicon glyphicon-search"></i>
                                            </button>
                                          </div>
                                        </div><br><br>
                                        <table class="table table-hover table-list">
                                            <thead>
                                              <tr style="background-color: #33ffff;">
                                                <th></th>
                                                <th>Item / Product</th>
                                                <th>Description</th>
                                                <th>Quantity</th>
                                                <th>Unit Price</th>
                                                <th>Total</th>
                                              </tr> 
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>1</td>
                                                <td>Laptop</td>
                                                <td>i7 6th Generation 8gb RAM</td>
                                                <td>5</td>
                                                <td>36,000</td>
                                                <td>180,000</td>
                                              </tr>
                                              <tr>
                                                <td>2</td>
                                                <td>Laptop</td>
                                                <td>i7 6th Generation 8gb RAM</td>
                                                <td>5</td>
                                                <td>36,000</td>
                                                <td>180,000</td>
                                              </tr>
                                              <tr>
                                                <td>3</td>
                                                <td>Laptop</td>
                                                <td>i7 6th Generation 8gb RAM</td>
                                                <td>5</td>
                                                <td>36,000</td>
                                                <td>180,000</td>
                                              </tr>
                                              <tr>
                                                <td>4</td>
                                                <td>Laptop</td>
                                                <td>i7 6th Generation 8gb RAM</td>
                                                <td>5</td>
                                                <td>36,000</td>
                                                <td>180,000</td>
                                              </tr>
                                              <tr>
                                                <td>5</td>
                                                <td>Laptop</td>
                                                <td>i7 6th Generation 8gb RAM</td>
                                                <td>5</td>
                                                <td>36,000</td>
                                                <td>180,000</td>
                                              </tr>
                                            </tbody>
                                        </table>
                                        <div class="pull-right">
                                          <nav aria-h5="Page navigation">
                                            <ul class="pagination pagination-sm">
                                              <li>
                                                <a href="#" aria-h5="Previous">
                                                  <span aria-hidden="true">&laquo;</span>
                                                </a>
                                              </li>
                                              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                              <li><a href="#">2</a></li>
                                              <li><a href="#">3</a></li>
                                              <li>
                                                <a href="#" aria-h5="Next">
                                                  <span aria-hidden="true">&raquo;</span>
                                                </a>
                                              </li>
                                            </ul>
                                          </nav>
                                        </div>
                                      </div>
                                      <div class="col-lg-8">
                                        <div class="form-group">
                                          <h5>Addition Instruction or Remarks: </h5>
                                          <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                      </div>
                                      <div class="col-lg-4">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                              <tr>
                                                <th style="color: blue;">SUBTOTAL</th>
                                                <td>000,000</td>
                                              </tr>
                                              <tr>
                                                <th>VAT (12%)</th>
                                                <td>000,000</td>
                                              </tr>
                                              <tr>
                                                <th style="color: green;">Discount</th>
                                                <td></td>
                                              </tr>
                                              <tr>
                                                <th style="color: red;">TOTAL</th>
                                                <td>000,000</td>
                                              </tr>
                                            </thead>
                                        </table>
                                      </div>
                                    </div>
                                  </form>
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
              </div>
              <br><br><br><br>
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                <h4 style="text-align: center;"><strong>Transaction Status</strong></h4>
                  <div class="form-group">
                    <button type="button" class="btn btn-success pull-left" style="width: 150px;"><strong>COMPLETE</strong></button>
                    <button type="button" class="btn btn-danger pull-right" style="width: 150px;"><strong>INCOMPLETE</strong></button>
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
                  $('#blah').attr('src', e.target.result);
              }

              reader.readAsDataURL(input.files[0]);
          }
      }
      $("#imgInp").change(function(){
          readURL(this);
      });
    </script>


  </body>
</html>