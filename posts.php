<?php
/* set out document type to text/javascript instead of text/html */
header("Content-type: text/javascript");
/* our multidimentional php array to pass back to javascript via ajax */
$arr = array(
array(
"first_name" => "Neeraj",
"last_name" => "Singh",
"age" => "29",
"email" => "me@gmail.com"
),
array(
"first_name" => "Sonu",
"last_name" => "Singh",
"age" => "29",
"email" => "you@gmail.com"
)
);
/* encode the array as json. this will output
 * [{"first_name":"Neeraj","last_name":"Singh","age":"29","email":"neeraj.singh@globalspace.in"},
 * {"first_name":"Sonu","last_name":"Singh","age":"29","email":"neerajsinghsonu@gmail.com"}]
 */
echo json_encode($arr);
?>
