<?php

namespace foo\bar\baz {
	function h() {
		$local = 0; // testing def path in the namespace
		$local++;
	}
}

namespace foo\bar\quz {
	function h() {
		$local = 0; // testing def path in the namespace
		$local++;
	}
}