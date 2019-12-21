<?php include 'views/header.php' ?>
    <form action="index.php" method="post">
        <div class="text">
            <h1>Questions Form</h1><hr>
        <div>

            <label>Name </label>
            <input type="text" name="first_name"><br><br>
            <label>Title </label>
            <input type="text" name="title"><br><br>
            <label>Question </label>
            <textarea name="body" rows="'4" cols="20"> </textarea><br>

        </div>
        <h2>Skills</h2>
        <div>
            <input type="checkbox" name="skills" value="skill1" id="skill1">
            <label for="skill1">skill1</label><br>
            <input type="checkbox" name="skills" value="skill2" id="skill2">
            <label for="skill2">Debugging</label><br>
            <input type="checkbox" name="skills" value="skill3" id="skill3">
            <label for="skill3">Web design</label><br>
            <br>
        </div>
        <div>
            <h2>Owner ID</h2>
            <label for="ownerId">owner id</label>
            <input type="text" name="ownerId" id="ownerId">
            <input type="hidden" name="action" value="add_question"/><br>

        </div>
        <br><br>
        <input type="submit" value="Submit"/>
        </div>
    </form>

<?php include('views/footer.php'); ?>

