<?php

/**
 * Formatea una fecha.
 *
 * @param  string $string
 * @param  string $format
 * @return string
 */
function format_date($string, $format = 'Y-m-d H:i:s'){

	if (strtotime($string) === false){ return NULL; }

	return date($format, strtotime($string));
}