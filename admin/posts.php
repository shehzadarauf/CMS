<?php  include "includes/Admin_header.php"  ?>




    <div id="wrapper">

      
<?php include "includes/Admin_navigation.php"  ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                <h1 class="page-header">
                    Well to Admin
                    <small>Author</small>

                </h1>

                <table class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Author</td>
                            <td>Title</td>
                            <td>Category</td>
                            <td>Status</td>
                            <td>Image</td>
                            <td>Tags</td>
                            <td>Comment</td>
                            <td>Date</td>
                        </tr>
                    </thead>
                    <tbody>

<?php

$query = "SELECT * FROM posts ";
$select_posts = mysqli_query($conect,$query);  

    while($row = mysqli_fetch_assoc($select_posts)) {
        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        $post_category_id = $row['post_category_id'];
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_comment_count = $row['post_comment_count'];
        $post_date = $row['post_date'];


        echo "<tr>";
        echo "<td>$post_id </td>";
        echo "<td>$post_author</td>";
        echo "<td>$post_title</td>";
        echo "<td>$post_category_id</td>";
        echo "<td>$post_status</td>";
        echo "<td> <img  width = '130'src= '../images/$post_image' alt = 'images'></td>";
        echo "<td>$post_tags</td>";
     
        echo "<td>$post_comment_count</td>";
        echo "<td>$post_date</td>";
        echo "</tr>";
    }


?>
                        
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