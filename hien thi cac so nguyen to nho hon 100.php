list so nt < 100 :
<?php
function checkSNT($num)
{

    if ($num < 2) {
        return false;

    }
    if ($num === 2) {
        return true;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}
for($i = 0;$i<100;$i++){
    if(checkSNT($i)){
        echo "<br>".$i."<br>";
    }
}
?>