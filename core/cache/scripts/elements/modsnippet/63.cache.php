<?php  return '//$name_res = $modx->getOption(\'nameResource\', $scriptProperties);
//$real_price = $modx->getObject(\'modResource\',array(\'published\' => 1, \'pagetitle\' => $name_res ))->getTVValue(\'price\');
//return $modx->getChunk(\'showPrice\',array(\'real_price\' => $real_price));
return $modx->getObject(\'modResource\', $modx->getOption(\'idResource\', $scriptProperties) )->getTVValue(\'price\');
return;
';