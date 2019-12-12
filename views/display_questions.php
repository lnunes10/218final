
<?php include('views/header.php'); ?>

    <a href=".?action=display_question_form&userId=<?php echo $userId ?>">Add Questions</a>

    <table>
        <tr>
            <th>Name</th>
            <th>Body</th>
        </tr>
        <?php foreach($questions as $question) : ?>
            <tr>
                <td><?php echo $question['title']; ?></td>
                <td><?php echo $question['body']; ?></td>
                <td> <form action="." method="post">
                <input type="hidden" name="action"
                       value="delete_question">
                <input type="hidden" name="id"
                       value="<?php echo $question['id'];?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php include('views/footer.php'); ?>