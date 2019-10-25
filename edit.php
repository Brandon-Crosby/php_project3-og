<?php
require 'inc/functions.php';
include 'inc/header.php';

$title = $date = $time_spent = $learned = $resources = $tag = '';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$selected= get_entry($id);
?>



<!DOCTYPE html>
<html>

        <section>
            <div class="container">
                <div class="edit-entry">
                    <h2>Edit Entry</h2>
                      <form method="POST">
                          <label for="title">Title</label>
                          <input id="title" type="text" name="title" placeholder="Title" value= "<?php htmlspecialchars($title); ?>"><br>
                          <label for="date">Date</label>
                          <input id="date" type="date" value ="" name="date" placeholder="mm-dd-yyyy" value= "<?php htmlspecialchars($date); ?>"><br>
                          <label for="time-spent"> Time Spent</label>
                          <input id="time-spent" type="text" name="timeSpent" placeholder="1 hour" value= "<?php htmlspecialchars($time_spent); ?>"><br>
                          <label for="what-i-learned">What I Learned</label>
                          <textarea id="what-i-learned" rows="5" name="whatILearned" placeholder="Today I learned..." value = "<?php htmlspecialchars($learned); ?>"></textarea>
                          <label for="resources-to-remember">Resources to Remember</label>
                          <textarea id="resources-to-remember" rows="5" name="ResourcesToRemember" placeholder="Treehouse.com" value = "<?php htmlspecialchars($resources); ?>"> </textarea>
                          <input type="submit" value="Publish Entry" class="button">
                          <a href="index.php" class="button button-secondary">Cancel</a>
                      </form>
                </div>
            </div>
        </section>
<?php include 'inc/footer.php'; ?>
</html>
