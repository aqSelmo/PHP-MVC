<?php
namespace Guilherme\Classes;

class Filter {
	static function sanitizeString($params)
	{
		return filter_var($params, FILTER_SANITIZE_STRING);
	}
	static function sanitizeInt($params)
	{
		return filter_var($params, FILTER_SANITIZE_NUMBER_INT);
	}
	static function sanitizeEmail($params)
	{
		return filter_var($params, FILTER_SANITIZE_EMAIL);
	}
	static function sanitizeHtml($params)
	{
		return filter_var($params, FILTER_SANITIZE_SPECIAL_CHARS);
	}
}