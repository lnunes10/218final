<?php include 'views/header.php' ?>
    <form action=index.php" method="post">
        <div class="text">
            <h1>Questions Form</h1><hr>
        <div>

            <label>Name </label>
            <input type="text" name="the_name"><br><br>
            <label>Question </label>
            <textarea name="body" rows="'4" cols="20"> </textarea><br>
        </div>
        <h2>Skills</h2>
        <div>
            <input type="checkbox" name="skills[]" value="skill1" id="skill1">
            <label for="skill1">skills1</label><br>
            <input type="checkbox" name="skills[]" value="skill2" id="skill2">
            <label for="skill2">skills2</label><br>
            <input type="checkbox" name="skills[]" value="skill3" id="skill3">
            <label for="skill3">skills3</label><br>
            <br>
        </div>
        <div>
            <h2>Owner ID</h2>
            <label for="ownerid">owner id</label>
            <input type="text" name="ownerid" id="ownerid">

        </div>
        <br><br>
        <input type="submit" value="Submit"/>
    </form>
<?php include('views/footer.php'); ?>

