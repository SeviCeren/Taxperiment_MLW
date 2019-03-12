<?php
/**
 * Created by PhpStorm.
 * User: andreas
 * Date: 08.03.19
 * Time: 15:13
 */

include "../../../resources/config.php";

if (sizeof($_POST) > 0) {
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $participation = $_POST['participation'];
    $care = $_POST['care'];
    $understanding = $_POST['understanding'];
    $english = $_POST['english'];
    $participant = $_GET['pid'];

    $updateQuery = "UPDATE questionnaire SET gender = $gender, nationality = $nationality, participation_before = $participation, care = $care, understanding = $understanding, english = $english, created = NOW() WHERE pid = $participant";

    if (isset($connection)) {
        if ($connection->query($updateQuery)) {
            console_log("EXP data inserted successfully!");

            $host  = $_SERVER['HTTP_HOST'];

            header("Location: http://$host/public/include/questionnaire/index.php?pid=$participant&page=9");
        }
        else {
            echo "Problem: " . $connection->error();
        }
    }
}

?>

<h1> Demographics </h1>
<form method="post">

    <div class="item">
        <p class="questionText"> What is your age in years?
        </p>
        <div class="radioDisplayHorizontal">
            <input type="text" name="age">

        </div>
    </div>

    <div class="item">
        <p class="questionText"> What is your gender?
        </p>
        <div class="radioDisplayHorizontal">
            <input type="radio" name="gender" value="0"> <p>Male</p>
            <input type="radio" name="gender" value="1"> <p>Female</p>
            <input type="radio" name="gender" value="2"> <p>Other</p>

        </div>
    </div>

    <div class="item">
        <p class="questionText"> Are you a Dutch student or an international student?
        </p>
        <div class="radioDisplayHorizontal">
            <input type="radio" name="nationality" value="0"> <p>Dutch</p>
            <input type="radio" name="nationality" value="1"> <p>International</p>
        </div>
    </div>

    <div class="item">
        <p class="questionText"> Have you participated in a study on tax compliance before?
        </p>
        <div class="radioDisplayHorizontal">
            <input type="radio" name="participation" value="0"> <p>Yes</p>
            <input type="radio" name="participation" value="1"> <p>No</p>
        </div>
    </div>

    <div class="item">
        <p class="questionText"> Did you carefully read all the information that was given? (1: No, not at all; 7: Yes, completely)

        </p>
        <div class="radioDisplayHorizontal">
            <?php echo createLikert(7, "care"); ?>

        </div>
    </div>

    <div class="item">
        <p class="questionText"> Did you understand all of the information? (1: No, not at all; 7: Yes, completely)

        </p>
        <div class="radioDisplayHorizontal">
            <?php echo createLikert(7, "understanding"); ?>

        </div>
    </div>

    <div class="item">
        <p class="questionText"> How would you rate your English language skills? (1: Very Low; 7: Very High)

        </p>
        <div class="radioDisplayHorizontal">
            <?php echo createLikert(7, "english"); ?>

        </div>
    </div>

    <input type="submit" value="Finish the Questionnaire!">


</form>