<?php
/**
 * This file is wrapper class for Google AreaChart 
 *
 * @author KoolPHP Inc (support@koolphp.net)
 * @link https://www.koolphp.net
 * @copyright 2008-2017 KoolPHP Inc
 * @license https://www.koolreport.com/license#mit-license
 */

namespace koolreport\widgets\google;


class AreaChart extends Chart
{
	static function create($params)
	{
		$component = new AreaChart($params);
		$component->render();
	}
}