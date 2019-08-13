<?php include("includes/header.php"); ?>
<?php include("includes/left-nav.php"); ?>
<?php include("includes/top-nav.php"); ?>
<?php
if(!$session->isSignedIn()){
    redirect('login.php');
} else {
    $username = Users::clean($_SESSION['user_id']['username']);
    $role = Users::clean($_SESSION['user_id']['role']);
    if($role != 'admin'){
        redirect('edit_user.php?id='.Users::clean($_SESSION['user_id']['id']));
    }
}

$categories = Category::findAll();

?>

<div class="container">

    <div class="col-md-12">
        <h1 class="page-header">
            Categories
            <small>Subheading</small>
        </h1>
        <?php echo "<h1>$session_message </h1>"; ?>
        <a class="btn btn-outline-dark" href="add_categories.php">ADD A CATEGORY</a>
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>DESCRIPTION</th>
                <th colspan="2">ACTION</th>
            </tr>
        <?php foreach ($categories as $category) { ?>

                <tr>
                    <td><?php echo $category->id; ?></td>
                    <td><?php echo $category->cat_name; ?></td>
                    <td><?php echo $category->cat_desc; ?></td>
                    <td><a href="edit_categories.php?id=<?php echo $category->id; ?>">EDIT</a> </td>
                    <td> <a href="edit_categories.php?id=<?php echo $category->id; ?>">EDIT</a></td>
                </tr>
            </table>
        <?php } ?>
    </div>

</div>



<?php include("includes/footer.php"); ?>