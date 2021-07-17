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
                        <!-- add category -->

                        
                        <div class="col-xs-6">

<?php

if(isset($_POST['submit']))
{
    $cat_title =$_POST['cat_title'];
    if($cat_title=="" || empty($cat_title))
    {
        echo "This filed should not be empty ";
    }
    else{
        $query = "INSERT INTO categories(cat_title) ";
        $query .= "VALUE('{$cat_title}') ";
        $create_categories_query = mysqli_query($conect, $query);
        if(!$create_categories_query)
        {
            die("Query Failed" . mysqli_error($conect));
        }
        }
}


?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat_title">Add Category</label>
                                    <input type="text" name="cat_title" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-primary" value="add category">
                                </div>
                            </form>
                        </div>



<!--  -->
                        <div class="col-xs-6">

<?php  

$query = "SELECT * FROM  categories ";
$select_categories = mysqli_query($conect,$query)

?>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td>id</td>
                                        <td>category</td>
                                    </tr>
                                </thead>
                          
                            <tbody>
<?php

while($row=mysqli_fetch_assoc($select_categories))
{
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
   
    echo "<tr>";
   echo "<td>{$cat_id}</td>";
   echo "<td>{$cat_title}</td>";
   echo "</tr>";
}

?>
    
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