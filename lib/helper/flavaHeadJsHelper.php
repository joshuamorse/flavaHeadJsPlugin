<?php

/**
 * Returns a comma-delimited list of javascripts.
 * 
 * @access public
 * @return string
 */
function get_javascripts_list()
{
  $response = sfContext::getInstance()->getResponse();
  sfConfig::set('symfony.asset.javascripts_included', true);

  $list = array(); 

  foreach ($response->getJavascripts() as $file => $options)
  {
    $list[] = "'/js/". $file . "'";
  }

  return implode(',', $list);
}

/**
 * Includes everything needed for loading your javascripts within headjs.
 * 
 * @access public
 * @return string
 */
function include_headjs_javascripts()
{
  $html = javascript_include_tag(sfConfig::get('app_flava_headjs_script', '../flavaHeadJsPlugin/js/head.min.js'));
  $html .= '<script type="text/javascript">';
  $html .= 'head.js(' . get_javascripts_list() . ')';
  $html .= '</script>';

  echo $html;
}
