<?php

defined ('_JEXEC') or die();

jimport('joomla.plugin.plugin');

class plgContentJpmcode extends JPlugin
{
	function plgContentJpmcode(&$subject, $params)
	{
		parent::_construct($subject, $params);
	}
	
	public function onContentPrepare($context, &$row, &$params, $page=0)
	{
		//do not run this when content is beign indexed
		if ($context=='com_finder.indexer')
		{
			return true;
		}
		
		if (is_object($row))
		{
			return $this->convertCode($row->text, $params);
		}
		
		return $this->convertCode($row, $params);
	}
	
	protected function convertCode(&$text, $params)
	{
		//place code for content conversion here!
	}
}
