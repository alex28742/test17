<pre>
<?php

$newArray = array();
$i = 0;
$randVar;

for ($i = 0; $i <= 19; $i++) {
	$randVar = mt_rand(1, 100);
	array_push($newArray, $randVar);
}

foreach ($newArray as $key => $value) {
	echo "$key => $value . \n";
}

echo "<hr />";

for ($j = 0; $j < count($newArray) - 1; $j++){
    for ($i = 0; $i < count($newArray) - $j - 1; $i++){
        if ($newArray[$i] > $newArray[$i + 1]){
            $tmp_var = $newArray[$i + 1];
            $newArray[$i + 1] = $newArray[$i];
            $newArray[$i] = $tmp_var;
        }
    }
}

foreach ($newArray as $key => $value) {
	echo "$key => $value . \n";
}

echo "hello world!";
