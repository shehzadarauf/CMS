<div class="col-md-4">

<?php  if(isset($_POST['submit']))
{
$search = $_POST['search'];
$query = "SELECT * FROM posts WHERE post_tags LIKE '%$search' ";
$search_query = mysqli_query($conect , $query);
if(!$search_query)
{
    die("Query Failed ". mysqli_error($conect));
}

$count = mysqli_num_rows($search_query);
echo $count;
if($count == 0)
{ 
    echo "<h1> NO RESULT </h1>";
}
else
{
    echo 'display some result ';
}

}

?>
<!-- Blog Search Well -->

<div class="well">
    <h4>Blog Search</h4>
    <form action="search.php" method="post">
    <div class="input-group">

        <input name="search" type="text" class="form-control">
        <span class="input-group-btn">
            <button name="submit" class="btn btn-default" type="submit">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
    </form>  
    <!-- /.input-group -->
</div>


<!-- Blog Categories Well -->
<div class="well">


<?php  

$query = "SELECT * FROM categories ";
$Select_categories_sidebar = mysqli_query($conect, $query);


?>


    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled">

<?php
while($row = mysqli_fetch_assoc($Select_categories_sidebar)) 
{
    $cat_title  = $row['cat_title'];
    echo "<li> <a href='#'>{$cat_title}</a></li>";
}

            ?>
                
            </ul>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
            </ul>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->

<?php include "includes/widget.php" ?>

</div>