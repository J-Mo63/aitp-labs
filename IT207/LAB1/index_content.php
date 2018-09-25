<!--
index_content.php
Jonathan Moallem 09/09/2018

The LAB1 page content. For being called and displayed by a layout.
-->
<div class="lab1-container">
    <?php
        echo "<form action='./finalgrade.php' method='post'>";
    ?>
        <h3>Participation</h3>
        <span>Earned:</span> <input type="text" name="earnedParticipation" />
        <span>Max:</span> <input type="text" name="maxParticipation" />
        <span>Weight (percentage):</span> <input type="text" name="weightParticipation" />
        <h3>Quizzes</h3>
        <span>Earned:</span> <input type="text" name="earnedQuiz" />
        <span>Max:</span> <input type="text" name="maxQuiz" />
        <span>Weight (percentage):</span> <input type="text" name="weightQuiz" />
        <h3>Lab Assignments</h3>
        <span>Earned:</span> <input type="text" name="earnedLab" />
        <span>Max:</span> <input type="text" name="maxLab" />
        <span>Weight (percentage):</span> <input type="text" name="weightLab" />
        <h3>Practica</h3>
        <span>Earned:</span> <input type="text" name="earnedPracticum" />
        <span>Max:</span> <input type="text" name="maxPracticum" />
        <span>Weight (percentage):</span> <input type="text" name="weightPracticum" />
        <br /><br />
        <input type="submit" />
    </form>
</div>