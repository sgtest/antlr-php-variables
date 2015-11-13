<?php

$global = 0;

function f() {

	global $global; // global var
	$global++;
	$local = 0;  // local var, unique
	for ($i = 0; $i < 5; $i++) { 
		// local var
    }
	for ($i = 0; $i < 5; $i++) {
		// re-using local var
    }
    $i = 5; // after loop
}

function g() {
	$local = 0; // local var, unique
}

namespace foo\bar\baz {
	function h() {
		$local = 0; // testing def path in the namespace
		$local++;
	}
}