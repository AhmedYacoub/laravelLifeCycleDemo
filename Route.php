<?php

use Src\Helper;

class Route {

	/**
	 * @param  string      route call
	 * @param  string      controller@method 
	 * @return collection  collection of data
	 */
	public static function get($route, $listener) {
		echo 'www.domain.com/' . $route . PHP_EOL;

		$args = Helper::getArgFromUrl($route);
		$listenerArr = Helper::getMethodName($listener);	

		$controller = 'Controllers\\' . $listenerArr['controller'];
		$method = $listenerArr['method'];

		return (new $controller)->$method($args);
	}
}