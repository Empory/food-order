<?php
include("partials/menu.php");
 ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br><br>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Your username">
                    </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Your password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<?php include("partials/footer.php");?>
<?php
    if (isset($_POST["submit"])) {
        $full_name = $_POST["full_name"];
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $sql = "INSERT INTO tbl_admin SET full_name='$full_name',username='$username',password='$password' 
        ";
        
        if ($db_select) {
            header("location:index.php");
        }else{
            echo "wrog";
        }
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }

?>