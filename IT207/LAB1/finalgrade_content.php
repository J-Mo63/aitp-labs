<div class="lab1-container">
    <?php
    function get_percentage($earned, $maximum) {
        return ($earned / $maximum) * 100;
    }

    $earned_participation = $_POST['earnedParticipation'];
    $max_participation = $_POST['maxParticipation'];
    echo "You earned a ", get_percentage($earned_participation, $max_participation),"% for Participation, with a weighted value of ", $test, "%";
    ?>
</div>