<?php
/*
 * Elvis Lives (Child of Roots)
 * by David Damstra (david@mirmillo.com)
 */

function add_google_fonts()  
{
	echo "<link href='http://fonts.googleapis.com/css?family=Orbitron:400,500,700' rel='stylesheet' type='text/css'>";
}
add_action('roots_stylesheets', 'add_google_fonts');
