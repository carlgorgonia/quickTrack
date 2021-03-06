<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>QuickTrack | EPOD Management</title>

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
    <h3 class="page-title">EPOD Management</h3><br>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
          <div class="col-lg-1"></div>
            <div class="col-lg-10">
              <div class="panel panel-default">
                <div class="panel-body"> 
                    <div class="row">
                      <div class="col-lg-12">
                        <h3 style="text-align: center;">Proof of Delivery</h3>
                        <div class="col-lg-6">
                          <div class="form-group" style="text-align: center;">
                            <img id="blah" src="assets/img/logo.png" class="col-xs-12 col-lg-12">
                          </div><br>
                          <div class="form-group">
                            <h5>Driver Name</h5>
                            <input class="form-control" type="" name="">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="row" style="padding-top: 10px;">
                            <div class="form-group col-lg-6">
                              <h5>POD Number</h5>
                              <input class="form-control" type="" name="" disabled="" readonly="">
                            </div>
                            <div class="form-group col-lg-6">
                              <h5>Plate Number</h5>
                              <input class="form-control" type="" name="">
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-lg-6">
                              <h5>Date of Delivery</h5>
                              <input class="form-control" type="" name="">
                            </div>
                            <div class="form-group col-lg-6">
                              <h5>Time of Delivery</h5>
                              <input class="form-control" type="" name="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="row" style="border-top: 1px dotted #8c8b8b;">
                        <div class="col-lg-6">
                          <h3 style="text-align: center;">Shipper</h3>
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
                        </div>
                        <div class="col-lg-6">
                          <h3 style="text-align: center;">Consignee</h3>
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
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="row" style="border-top: 1px dotted #8c8b8b;"><br>
                        <div class="col-lg-6">
                          <!-- <form id="form1" enctype="multipart/form-data" method="post" action="Upload.aspx">
                            <div>
                              <label for="fileToUpload">Take or select photo(s)</label><br />
                              <input type="file" name="fileToUpload" id="fileToUpload" onchange="fileSelected();" accept="image/*" capture="camera" />
                            </div>
                            <div id="details"></div>
                            <div>
                              <input type="button" onclick="uploadFile()" value="Upload" />
                            </div>
                            <div id="progress"></div>
                          </form> -->
                          <div class="form-group">
                            <h5>Received By</h5>
                            <input class="form-control" type="" name="" >
                          </div>
                          <div class="form-group">
                            <h5>Upload File</h5>
                            <div class="row">
                            <button class="btn btn-default" style="border:none;"><input class="col-lg-12" type="file" hidden></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <h5>Signature</h5>
                            <input class="col-xs-12 col-lg-12 form-control" type="" name="" style="height: 100px;">
                          </div>
                        </div>
                      </div>
                    </div>


                </div>
                  <div class="panel-footer">
                    <div class="row">
                    <div class="col-lg-12">
                      <button type="button" class="btn btn-default">Send Email</button>
                      <button id="save" onclick="save()" class="btn btn-success" type="button" name="save-details">Save</button>
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
      </div>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.dataTables.min.js"></script>

    <script src="assets/js/dataTables.bootstrap.min.js"></script>


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

    <script type="text/javascript">
 
      function fileSelected() {
 
        var count = document.getElementById('fileToUpload').files.length;
 
              document.getElementById('details').innerHTML = "";
 
              for (var index = 0; index < count; index ++)
 
              {
 
                     var file = document.getElementById('fileToUpload').files[index];
 
                     var fileSize = 0;
 
                     if (file.size > 1024 * 1024)
 
                            fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
 
                     else
 
                            fileSize = (Math.round(file.size * 100 / 1024) / 100).toString() + 'KB';
 
                     document.getElementById('details').innerHTML += 'Name: ' + file.name + '<br>Size: ' + fileSize + '<br>Type: ' + file.type;
 
                     document.getElementById('details').innerHTML += '<p>';
 
              }
 
      }
 
      function uploadFile() {
 
        var fd = new FormData();
 
              var count = document.getElementById('fileToUpload').files.length;
 
              for (var index = 0; index < count; index ++)
 
              {
 
                     var file = document.getElementById('fileToUpload').files[index];
 
                     fd.append(file.name, file);
 
              }
 
        var xhr = new XMLHttpRequest();
 
        xhr.upload.addEventListener("progress", uploadProgress, false);
 
        xhr.addEventListener("load", uploadComplete, false);
 
        xhr.addEventListener("error", uploadFailed, false);
 
        xhr.addEventListener("abort", uploadCanceled, false);
 
        xhr.open("POST", "savetofile.aspx");
 
        xhr.send(fd);
 
      }
 
      function uploadProgress(evt) {
 
        if (evt.lengthComputable) {
 
          var percentComplete = Math.round(evt.loaded * 100 / evt.total);
 
          document.getElementById('progress').innerHTML = percentComplete.toString() + '%';
 
        }
 
        else {
 
          document.getElementById('progress').innerHTML = 'unable to compute';
 
        }
 
      }
 
      function uploadComplete(evt) {
 
        /* This event is raised when the server send back a response */
 
        alert(evt.target.responseText);
 
      }
 
      function uploadFailed(evt) {
 
        alert("There was an error attempting to upload the file.");
 
      }
 
      function uploadCanceled(evt) {
 
        alert("The upload has been canceled by the user or the browser dropped the connection.");
 
      }
 
    </script>

  </body>
</html>