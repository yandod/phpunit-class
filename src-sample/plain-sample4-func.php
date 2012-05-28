<?php
function getLabel($name, $sex) {
	$suffix = 'ちゃん';
	if ( $sex == 'male' ) {
		$suffix = 'くん';
	}
	return $name . $suffix;
}