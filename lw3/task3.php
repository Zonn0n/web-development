<?php

header('Content-Type: text/plain');

$password = isset($_GET['password']) ? $_GET['password'] : null;
$length = strlen($password);
$reliability = 4 * $length;

$digits = 0;
$upperCase = 0;
$lowerCase = 0;

for ($i = 0; $i < $length; $i++) { 
	if (is_numeric($password[$i]))
	{
		$digits++;
		$reliability += 4;
	}
	if (ctype_upper($password[$i]))
		$upperCase++;
	if (ctype_lower($password[$i]))
		$lowerCase++;
}

if ($digits === $length)
	$reliability -= $length;

if ($digits === 0)
	$reliability -= $length;

if ($upperCase != 0)
	$reliability += ($length - $upperCase) * 2;
if ($lowerCase != 0)
	$reliability += ($length - $lowerCase) * 2;

$unique = array_unique(str_split($password));
$reliability -= ($length - strlen(implode($unique))) * 2;

echo $reliability;