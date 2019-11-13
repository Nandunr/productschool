<?php

$code = filter_input(INPUT_GET, 'code');

$scope = filter_input(INPUT_GET, 'scope');

$error = filter_input(INPUT_GET, 'error');

if (empty($error)) {
	$q = "code=$code&scope=$scope";	
} else {
	$q = "error=$error";
}

header("Location: http://52.6.140.231/boost-ltv/controller/google-redirect.php?$q");
exit();