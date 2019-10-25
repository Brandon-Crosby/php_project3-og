<?php
require 'inc/functions.php';
include 'inc/header.php';

?>

<!DOCTYPE html>
        <section>
            <div class="container">
                <div class="entry-list">
                    <article>
                      <?php

                      foreach(get_entry_list() as $entry_id) {
                          echo "<h2><a href='detail.php?entry_id=".$entry_id['id']."'>".$entry_id['title']."</a></h2>\n";
                          echo "<time datetime='".$entry_id['date']."'>".date("F j, Y",strtotime($entry_id['date']))."</time><br>\n";
                          }
                            ?>
                    </article>
                </div>
            </div>
        </section>
<?php include 'inc/footer.php'; ?>
