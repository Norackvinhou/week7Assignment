<?php
echo "What do you want to input? ";
$input = rtrim(fgets(STDIN));
$reversed="";
$tmp="";
for($i = 0; $i < strlen($input); $i++) {
    if($input[$i] == " ") {
        $reversed .= $tmp . " ";
        $tmp = "";
        continue;
    }
    
    $tmp = $input[$i] . $tmp;
      
}
$reversed .= $tmp;

echo $reversed;

?>