<?php

namespace Src;

class Helper {

	/**
	 * @param  string     route call
	 * @return string     route paramaters
	 */
	public static function getArgFromUrl($route) {
		if ( preg_match('/{(.*?)}/', $route, $match) == 1 ) {
			return $match[1];
		}
		return null;
	}

	/**
	 * @param  string 	controller@method
	 * @return array 	['controller', 'method']
	 */	
	public static function getMethodName($listener) {
		$listenerArr = ['controller' => '', 'method' => ''];

		if ( ($controller = strtok($listener, '@')) !== FALSE) {
			$listenerArr['controller'] = $controller;
		} else {
			throw new Exception("Controller name is missing", 1);
		}
		

		if ( ($pos = strpos($listener, "@")) !== FALSE ) {
			$listenerArr['method'] = substr($listener,  $pos + 1);
		} else {
			throw new Exception("Method name is missing!", 1);	
		}
		
		return $listenerArr;
	}
}