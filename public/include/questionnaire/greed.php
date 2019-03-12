<?php
/**
 * Created by PhpStorm.
 * User: andreas
 * Date: 08.03.19
 * Time: 15:04
 */

include "../../../resources/config.php";

if (sizeof($_POST) >= 7) {

    $dgs1 = $_POST['dgs1'];
    $dgs2 = $_POST['dgs2'];
    $dgs3 = $_POST['dgs3'];
    $dgs4 = $_POST['dgs4'];
    $dgs5 = $_POST['dgs5'];
    $dgs6 = $_POST['dgs6'];
    $dgs7 = $_POST['dgs7'];

    $participant = $_GET['pid'];

    $updateQuery = "UPDATE questionnaire SET dgs1 = $dgs1, dgs2 = $dgs2, dgs3 = $dgs3, dgs4 = $dgs4, dgs5 = $dgs5, dgs6 = $dgs6, dgs7 = $dgs7 WHERE pid = $participant";


    if (isset($connection)) {
        if ($connection->query($updateQuery)) {
            console_log("EXP data inserted successfully!");

            $host  = $_SERVER['HTTP_HOST'];

            header("Location: http://$host/public/include/questionnaire/index.php?pid=$participant&page=8");
        }
        else {
            echo "Problem: " . $connection->error();
        }
    }
}
else {
    echo "Please fill out every question on the page!";
}

?>

<h1> Greed </h1>

<p>Please rate the statements below. (1 - "Do not agree at all"; 7 - "Strongly agree")</p>

<form method="post">
    <div class="item">
        <p class="questionText"> 1. I always want more.

        </p>
        <div class="radioDisplayHorizontal">
            <?php echo createLikert(7, "dgs1"); ?>

        </div>
    </div>
    <div class="item">
        <p class="questionText"> 2. Actually, I’m kind of greedy.

        </p>
        <div class="radioDisplayHorizontal">
            <?php echo createLikert(7, "dgs2"); ?>

        </div>
    </div>

    <div class="item">
        <p class="questionText"> 3. One can never have too much money.
        </p>
        <div class="radioDisplayHorizontal">
            <?php echo createLikert(7, "dgs3"); ?>

        </div>
    </div>

    <div class="item">
        <p class="questionText"> 4. As soon as I have acquired something. I start to think about the next thing I want.
        </p>
        <div class="radioDisplayHorizontal">
            <?php echo createLikert(7, "dgs4"); ?>

        </div>
    </div>

    <div class="item">
        <p class="questionText"> 5. It doesn’t matter how much I have. I’m never completely satisfied.
        </p>
        <div class="radioDisplayHorizontal">
            <?php echo createLikert(7, "dgs5"); ?>

        </div>
    </div>

    <div class="item">
        <p class="questionText"> 6. My life motto is “more is better.
        </p>
        <div class="radioDisplayHorizontal">
            <?php echo createLikert(7, "dgs6"); ?>

        </div>
    </div>

    <div class="item">
        <p class="questionText"> 7. I can’t imagine having too many things.
        </p>
        <div class="radioDisplayHorizontal">
            <?php echo createLikert(7, "dgs7"); ?>

        </div>
    </div>

    <input type="submit" value="Next Page">


</form>