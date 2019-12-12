<?php include('views/header.php'); ?>

<div class="form_box title">
<h1>Registration Form</h1>
            <form action="index.php" method="post">
                <div>
                <label>First Name: </label>
                <input type="text" name="first_name"/><br>
                <label>Last Name:</label>
                <input type="text" name="last_name"/><br>
                <label>Birthday:</label>
                <input type="date" name="birthday"/><br>
                <label>email:</label>
                <input type="text" name="email"/><br>
                <label>Password:</label>
                <input type="password" name="password1"/><br>
                <input type="hidden" name="action" value="add_user"/><br>
                </div>

                <label>&nbsp;</label>
                <input type="submit" value="Submit"/>

            </form>

</div>
    <?php include('views/footer.php'); ?>
