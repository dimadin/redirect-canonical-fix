<?php

function generate_json() {
	$r = [
		'version' => [
			// In form: WordPress branch => Recommended plugin version.
			'5.1' => '1.0.0',
		],
		'disable' => [
			// WP version where this plugin should be disabled.
			//'wp_version' => '5.2',
		],
	];

	return json_encode( $r );
}
echo generate_json();
