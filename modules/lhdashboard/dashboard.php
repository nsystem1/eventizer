<?php

$tpl = erLhcoreClassTemplate::getInstance( 'lhdashboard/dashboard.tpl.php');

$Result['content'] = $tpl->fetch();
$Result['title'] = __t('dashboard/dashboard','Dashboard');
$Result['small_title'] = __t('dashboard/dashboard','Control panel');
$Result['path'] = array(
		array('title' => __t('dashboard/dashboard','Dashboard'))
);
?>