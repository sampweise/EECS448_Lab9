<?php
    $q1res = $_POST["q1"];
    $q2res = $_POST["q2"];
    $q3res = $_POST["q3"];
    $q4res = $_POST["q4"];
    $q5res = $_POST["q5"];

    $count = 0;
    $total = 5;

    $q1ans = "3";
    $q2ans = "Topeka";
    $q3ans = "4";
    $q4ans = "Chiefs";
    $q5ans = "Royals";

    echo "<p>Question 1: How many letters are in pie?<br>";
    echo "You Answered: " . $q1res . "<br>";
    echo "The Correct Answer: " . $q1ans . "<br><br>";

    echo "Question 2: What is the capital of Kansas?<br>";
    echo "You Answered: " . $q2res . "<br>";
    echo "The Correct Answer: " . $q2ans . "<br><br>";

    echo "Question 3: What is 2+2?<br>";
    echo "You Answered: " . $q3res . "<br>";
    echo "The Correct Answer: " . $q3ans . "<br><br>";

    echo "Question 4: What NFL Team is based out of Kansas City?<br>";
    echo "You Answered: " . $q4res . "<br>";
    echo "The Correct Answer: " . $q4ans . "<br><br>";

    echo "Question 5: What MLB Team is based out of Kansas City?<br>";
    echo "You Answered: " . $q5res . "<br>";
    echo "The Correct Answer: " . $q5ans . "<br><br>";

    if($q1res == $q1ans)
    {
      $count++;
    }
    if($q2res == $q2ans)
    {
      $count++;
    }
    if($q3res == $q3ans)
    {
      $count++;
    }
    if($q4res == $q4ans)
    {
      $count++;
    }
    if($q5res == $q5ans)
    {
      $count++;
    }

    echo "Total Correct Answers: " . $count . "<br><br>";
    echo "Percentage: " . (($count/$total)*100) . "% </p>";

?>
