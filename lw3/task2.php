<?php

header('Content-Type: text/plain');

$identifier = isset($_GET['identifier']) ? $_GET['identifier'] : null;
$isIdentifier = true;

if (strlen($identifier) == 0)
{
	echo "No, empty string";
	$isIdentifier = false;
}

if (is_numeric($identifier[0]))
{
	echo "No, starts with a digit";
	$isIdentifier = false;
}

for ($i = 0; $i < $identifier; $i++) {
	if (!(ctype_alpha($value) || (is_numeric($value))))
	{
		$isIdentifier = false;
		echo "No, invalid charasters";
		break;
	}
}

if ($isIdentifier)
	echo "Yes";