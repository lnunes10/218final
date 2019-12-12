<?php include('views/header.php');?>

<div class="form_box text">
<h1>Form Data </h1><br>

            <form action="index.php" method="post">
                <label>Email: </label>
                <input type="text" name="email_address"/><br><br>
                <label>password:</label>
                <input type="password" name="password"/><br>
                <input type="hidden" name="action" value="validate_login"/><br>

                <label>&nbsp;</label>
                <input type="submit" value="Submit"/>
            </form>
</div>

<?php include('views/footer.php'); ?>


