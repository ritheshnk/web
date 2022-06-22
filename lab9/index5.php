<?php
$states_string = "Hello Im in Texas with kisiis and Malis ";
$states = explode(" ", $states_string);
$patterns = array('/xas$/', '/^k.*s$/i', '/^M.*s$/', '/a$/');
$statesList = [];
// function to return a found match for given pattern in the states list
function getState ($pattern, $states) {
foreach ($states as $state) {
if (preg_match($pattern, $state)) {
return $state;
}
}
}
// for each pattern, find a match from states and store it in statesList
for ($i = 0; $i < count($patterns); $i++) {
$statesList[$i] = getState($patterns[$i], $states);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>9. States List</title>
</head>
<body>
<p>Statement Is : <b><?=$states_string;?></b></p>
<p>Name Ends With xas Is : <b><?=$statesList[0];?></b></p>
<p>Name Starts With k And Ends With s Is : <b><?=$statesList[1];?></b></p>
<p>Name Starts With M And Ends With s Is : <b><?=$statesList[2];?></b></p>
<p>Name Ends With a Is : <b><?=$statesList[3];?></b></p></body>
</html>