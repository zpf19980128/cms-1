<?php

/**
 *
 */
class CpDashboardTag extends Tag
{
	/**
	 * @return array
	 */
	public function alerts()
	{
		return bDashboardHelper::getAlerts();
	}

	/**
	 * @return array
	 */
	public function widgets()
	{
		$widgets = Blocks::app()->cp->getDashboardWidgets();
		$tags = array();

		foreach ($widgets as $widget)
		{
			$tags[] = new CpDashboardWidgetTag($widget);
		}

		return $tags;
	}
}
