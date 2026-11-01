<?php

function cheerslocation_admin_prepare_head()
{
	global $langs;

	$langs->load('cheerslocation@cheerslocation');

	$head = array();
	$head[0][0] = dol_buildpath('/cheerslocation/admin/setup.php', 1);
	$head[0][1] = $langs->trans('Setup');
	$head[0][2] = 'settings';

	return $head;
}
