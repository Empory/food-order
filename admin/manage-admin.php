<?php include("partials/menu.php"); ?>

<!-- Main Content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>
        <br /><br />
        <?php
        if (isset($_SESSION["add"])) {
            echo $_SESSION["add"];
            unset($_SESSION["add"]);
        }
        if (isset($_SESSION["delete"])) {
            echo $_SESSION["delete"];
            unset($_SESSION["delete"]);
        }
        ?>
        <br><br><br>
        <!-- Button to Add Admin -->
        <a href="add-admin.php" class="btn-primary">Add Admin</a>
        <br /><br /><br />
        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
            <?php
            $sql =  "SELECT * FROM tbl_admin ";
            $res = mysqli_query($conn, $sql);
            if ($res) {
                $count = mysqli_num_rows($res);
                $sn=1;
                if ($count > 0) {
                    while ($rows = mysqli_fetch_assoc($res)) {

                        $id = $sn++;
                        $idd= $rows["id"];
                        $full_name = $rows["full_name"];
                        $username = $rows["username"];
                        echo '
                        <tr>
                            <td>' . $id . '</td>
                            <td>' . $full_name . '</td>
                            <td>' . $username . '</td>
                            <td>
                                <a class="btn-secondary" href="#">Update Admin</a>
                                <a class="btn-danger" href="'.SITEURL.'admin/delete-admin.php?id='.$idd.'">Delete Admin</a>
                            </td>
                        </tr>';
                    }
                } else {
                }
            }
            ?>

        </table>

    </div>
</div>
<!-- Menu Content Section Ends -->

<?php include("partials/footer.php"); ?>