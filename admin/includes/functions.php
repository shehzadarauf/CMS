<?php 

function insert_categories()
{

global $conect;


if(isset($_POST['Submit'])){

    echo"hereee";

    $cat_title = $_POST['cat_title'];

if($cat_title == "" || empty($cat_title)) {

     echo "This Field should not be empty";

        } 

else {
    
    $query = "INSERT INTO  categories(cat_title) ";
    $query .= "VALUES('$cat_title') ";
    $cerate_category_query = mysqli_query($conect, $query);
    if(!$cerate_category_query )
    {
        die("Query failed ");
         
    }


            }
            


} 

}



function findAllCategories(){
    global $conect;

    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($conect, $query);  

    while($row = mysqli_fetch_assoc($select_categories)) {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];

    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
   echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
   echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
    echo "</tr>";
 

    }
}


function deleteCategories()
{
    global $conect;
    
    if(isset($_GET['delete'])){
        $the_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
        $delete_query = mysqli_query($conect,$query);
        header("Location: categories.php");
        }
}
?>

