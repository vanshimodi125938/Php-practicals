<?php
function calculatePercentage($sub1, $sub2, $sub3, $sub4, $sub5){
    echo "Marks are $sub1,$sub2,$sub3,$sub4,$sub5<br/>";

    
    $totalMarks=$sub1+$sub2+$sub3+$sub4+$sub5;
    echo $totalMarks;
    echo "<br/>";
    $percentage=($totalMarks/500)*100;
    echo $percentage;
}
    calculatePercentage(75,85,65,40,60);
?>
