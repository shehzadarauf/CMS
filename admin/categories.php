<?php  include "includes/Admin_header.php"  ?>




    <div id="wrapper">

      
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

<?php     insert_categories();   ?>
            
            <form method="post"  action="">
      <div class="form-group">
         <label for="cat-title">Add Category</label>
          <input type="text" class="form-control" name="cat_title">
      </div>
       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="Submit" value="Add Category">
      </div>


    </form>
    <!-- update form -->

   <?php   
   if(isset($_GET['edit']))
   {
       $cat_id = $_GET['edit'];
   }
   include "includes/update_categories.php"
   
   ?>
    
    
    </div><!--Add Category Form-->


    <div class="col-xs-6">
    <table class="table table-bordered table-hover">
      

        <thead>
            <tr>
                <th>Id</th>
                <th>Category Title</th>
            </tr>
        </thead>
        <tbody>
<!-- find all categoryes  -->
        <?php   findAllCategories();    ?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>


<!-- delete categories -->

<?php  deleteCategories();   ?>


        </tbody>
    </table>

                       

                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php    include "includes/Admin_footer.php" ?>