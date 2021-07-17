<?php  include "includes/Admin_header.php" ?>

    <div id="wrapper">

        <?php   if($conect) echo "conection" ?>


      
<?php include "includes/Admin_navigation.php"  ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Well To Admin
                            <small>Author</small>
                        </h1>

                        <div class="col-xs-6">
                            <form action="">
                                <div class="form-group">
                                    <label for="cat_title">Add Category</label>
                                    <input type="text" name="cat_title" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <input type="text" name="submit" class="btn btn-primary" value="add category">
                                </div>
                            </form>
                        </div>

                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td>id</td>
                                        <td>category</td>
                                    </tr>
                                </thead>
                          
                            <tbody>
                                <tr>
                                    <td>Baseball category</td>
                                    <td>Basket Category</td>
                                    
                                </tr>
                            </tbody>
                            </table>
                        </div>
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php    include "includes/Admin_footer.php" ?>