<?php
/**
 * This file is wrapper class for Google Sankey 
 *
 * @author KoolPHP Inc (support@koolphp.net)
 * @link https://www.koolphp.net
 * @copyright 2008-2017 KoolPHP Inc
 * @license https://www.koolreport.com/license#mit-license
 */

namespace koolreport\widgets\google;


class Sankey extends Chart
{
	protected function loadLibrary()
	{
		// $this->template("LoadLibrary",array(
			// "chartId"=>$this->chartId,
			// "zone"=>"current",
			// "packages"=>array("sankey")
		// ));
    $this->getReport()->getResourceManager()
      ->addScriptOnBegin("google.charts.load('current', {'packages':['sankey']})");
	}	
	static function create($params)
	{
		$component = new Sankey($params);
		$component->render();
	}
}
