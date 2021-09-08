<?php include "includes/admin_header.php"; ?>

<div id="wrapper">

    <?php include "includes/admin_sidebar.php"; ?>
    
    
<div id="content-wrapper">
    <div class="container-fluid">
        <h1>Galleries Page</h1>
        <hr>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Add - Edit - Delete</th>
                </tr>
            </thead>
            <tbody>
        <?php
        if (isset($_POST["add_galleries"])) {
                $galleries_title =  $_POST["galleries_title"];
                $galleries_image =  $_POST["galleries_image"];

        if ($galleries_title == "" )
        {
             echo "Bu alan bos olamaz" ; 
        } else {
            $sql_query = "INSERT INTO galleries (country, img) VALUE ('$galleries_title','$galleries_image')" ;
            $add_new_category_query = mysqli_query($conn, $sql_query);
            header("location: /web_site/admin/galleries.php");
        }  
    }




        ?>
        <?php
        if(isset ($_POST["edit_category"] )) {
           $edit_cat_title= $_POST["category_namex"];
           $sql_query2="UPDATE categories SET category_name = '$edit_cat_title' WHERE category_id = '$_POST[category_id]'";
           $edit_category_query=mysqli_query($conn,$sql_query2);
           header("location:categories.php");
        }

        ?>


        <?php
        $sql_query = "SELECT * FROM galleries ORDER by id DESC";   
        $select_all_categories = mysqli_query ($conn, $sql_query);
        while ($row = mysqli_fetch_assoc($select_all_categories))  {
            $galleries_id = $row ["id"] ;
            $galleries_title = $row ["country"] ;
            $galleries_image = $row ["img"] ;
                echo " <tr>
                
                    <td>{$galleries_id}</td>
                    <td>{$galleries_title}</td>
                    <td>{$galleries_image}</td>
                    <td>
                        <div class='dropdown'>
                            <button class='btn btn-primary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                Actions
                            </button>
                            <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                                <a class='dropdown-item' data-toggle='modal' data-target='#edit_modal' href='#'>Edit</a>
                                <div class='dropdown-divider'></div>
                                <a class='dropdown-item' href='galleries.php?delete={$galleries_id}'>Delete</a>
                                <div class='dropdown-divider'></div>
                                <a class='dropdown-item' data-toggle='modal' data-target='#add_modal'>Add</a>
                            </div>
                        </div>
                    </td>
                </tr> " ;

        }     
         
         



        ?>



                <div id="edit_modal" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="form-group">

                                        <input value=" <?php  if(isset($category_name)) {echo $category_name;}  ?>" type="text" class="form-control" name="category_namex">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="category_id" value="<?php echo $row ["categorie_id"];  ?>">
                                        <input type="submit" class="btn btn-primary" name="edit_category" value="Edit Category">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </tbody>
        </table>

        <div id="add_modal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Galleries</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="galleries_title">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="galleries_image">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="add_galleries" value="add_galleries">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if(isset($_GET["delete"])) {
           $del_cat_id = $_GET["delete"] ;
           $sql_query = "DELETE FROM galleries WHERE id ={$del_cat_id}";

           $delete_category_query = mysqli_query($conn,$sql_query ) ;
           header("location: /web_site/admin/galleries.php");



        }








        ?>









            <?php include "includes/admin_footer.php"; ?>