<?php
$item = $_POST['inp'];
$pro = "#!/usr/bin/env python \n";
$pro = $pro.$item;
$file = 'input.py';
file_put_contents($file, $pro);
$output = [];
exec("python input.py", $output);
echo $output[0];
?>