<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>Seller View</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/fontawesome-all.js"></script>
</head>
<body>
     <!-- NAVBAR  -->
     <nav class="navbar navbar-expand-lg navbar-light bg-primary py-3">
        <div class="container">
                <a class="navbar-brand text-white" href="index.html">Buy and Sell Liberia</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        </div>
      </nav>
      <!-- NAVABAR END -->
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <div class="row mt-2">
                    <div class="col">
                        <h4 class="pull-xs-left">
                            Upload Photo and Details of Product To Sell
                        </h4>
                    </div>
                </div> <br/>
                
                <!-- ================ Add Product form ==================== -->
                <form action="{{route('products.save')}}" method="post" id="upload_mutiple_images" enctype="multipart/form-data">
                    <div class="form-group">
                        {{csrf_field()}}
                            <div class="row my-2">
                                <div class="col-md-6">
                                       <div class="input-group control-group increment">
                                            <span class="input-group-btn">
                                                <span class="btn btn-info btn-file">
                                                    <input type="file" name="images[]" multiple>
                                                </span>
                                            </span>
                                        </div>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group row mt-4">
                                    <label for="title" class="col-sm-4 col-form-label">Product Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="title" placeholder="Enter Product Name here">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="description" class="col-sm-4 col-form-label">Description:</label>
                                    <div class="col-sm-8">
                                        <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Enter Product Description here"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="price" class="col-sm-4 col-form-label">Prices:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="price" placeholder="Enter Product Price here">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="seller_name" class="col-sm-4 col-form-label">Youe Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="seller_name" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="location" class="col-sm-4 col-form-label">Location:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="location" placeholder="Enter Location here">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="seller_contact" class="col-sm-4 col-form-label">Contact No:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="seller_contact" placeholder="Enter Contact here">
                                    </div>
                                </div>
                             </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Add Product<span><i class="far fa-hand-point-right"></i></span></button>
                </form>
            </div>
            <!-- /container -->
             <!-- FOOTER -->
    <footer  class="bg-primary py-3 footer">
       <p class="text-center py-2 text-white">Handuah &copy; 2019</p>
    </footer>

</body>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- script for toggle sidebar button -->
<script>
    // $(document).ready(function () {

    //     $('#sidebarCollapse').on('click', function () {
    //         $('#sidebar').toggleClass('active');
    //         $('#content').toggleClass('active');
    //      });

    // });
    var $imageupload = $('.imageupload');
    $imageupload.imageupload({
 
        maxWidth: 200,

        maxHeight: 200,

        // maxFileSizeKb: 3048

        });

</script>

<!--[if lt IE 9]--/>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</html> 