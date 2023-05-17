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
            <tr>
                <td>1</td>
                <td>Vjay</td>
                <td>vjay</td>
                <td>
                    <a class="btn-secondary" href="#">Update Admin</a>
                    <a class="btn-danger" href="#">Delete Admin</a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Vjay</td>
                <td>vjay</td>
                <td>

                    <a class="btn-secondary" href="#">Update Admin</a>
                    <a class="btn-danger" href="#">Delete Admin</a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Vjay</td>
                <td>vjay</td>
                <td>

                    <a class="btn-secondary" href="#">Update Admin</a>
                    <a class="btn-danger" href="#">Delete Admin</a>
                </td>
            </tr>
        </table>

    </div>
</div>
<!-- Menu Content Section Ends -->

<?php include("partials/footer.php"); ?>