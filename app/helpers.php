<?php

function stars ($count) {
	$result = "";

	for ($i=0; $i<$count; $i++) {
		$result .= '<span style="font-size:24px; color:#FF6600;">&#9733;</span>';
	}
	for ($i=0; $i<(5-$count); $i++) {
		$result .= '<span style="font-size:24px; color:#FF6600;">&#9734;</span>';
	}

    return $result;
}