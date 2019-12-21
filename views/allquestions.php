<?php include('views/header.php'); ?>

<a href=".?action=display_question_form&userId=<?php echo $userId ?>">Add Questions</a>
<div>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Skills</th>
        </tr>
        <?php foreach ($questions as $question) : ?>
    <tr>
        <td><?php echo $first_name = $question['name']; ?></td>
        <td><?php echo $id = $question['id']; ?></td>
        <td><?php echo $title = $question['title']; ?></td>
        <td><?php echo $body = $question['body']; ?></td>
        <td><?php echo $skills = $question['skills']; ?></td>
        <td>
            <form>
                <input type="hidden" name="action" value="view_question">
                <input type="hidden" name="questionId" value="<?php echo $question['id']; ?>">
                <input type="hidden" name="userId" value="<?php echo $userId ?>">

                <input type="submit" class="btn edit" value="View" >
            </form>
        </td>
    </tr>
<?php endforeach; ?>
</table>

