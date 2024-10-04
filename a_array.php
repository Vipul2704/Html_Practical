<?php //associative arry
$edata=array("eid"=>101,"ename"=>"abc","salary"=>50000);  // (=>) jaruri che avu lakhvu

echo $edata["eid"]."<br>";
echo $edata["ename"]."<br>";
echo $edata["salary"]."<br>";

foreach($edata as $ans)
{
    echo $ans;
    echo "<br>";
}

?>