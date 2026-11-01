<?php

$res = 0;
if (!$res && file_exists(__DIR__.'/../../main.inc.php')) {
	$res = @include __DIR__.'/../../main.inc.php';
}
if (!$res && file_exists(__DIR__.'/../../../main.inc.php')) {
	$res = @include __DIR__.'/../../../main.inc.php';
}
if (!$res) {
	die('Include of main fails');
}

global $db, $user, $langs;

$langs->load('cheerslocation@cheerslocation');

if (!isModEnabled('cheerslocation')) {
	accessforbidden('Module not enabled');
}
if (empty($user->admin)) {
	accessforbidden();
}

dol_include_once('/cheerslocation/lib/cheerslocation.lib.php');

llxHeader('', $langs->trans('CheersLocationSetup'));

$head = cheerslocation_admin_prepare_head();
print dol_get_fiche_head($head, 'settings', $langs->trans('CheersLocation'), -1, 'generic');
print load_fiche_titre($langs->trans('CheersLocationSetup'));
print '<div class="opacitymedium">'.$langs->trans('CheersLocationNoBusinessObjects').'</div>';
print dol_get_fiche_end();

llxFooter();
$db->close();
