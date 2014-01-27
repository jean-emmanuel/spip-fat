<?php
	include_spip('inc/config');
	ecrire_config('rubriques_texte', 'oui');
	ecrire_config('articles_texte', 'oui');
	ecrire_config('rubriques_descriptif', 'oui');
	ecrire_config('activer_logos', 'oui');
	ecrire_config('activer_logos_survol', 'oui');
	ecrire_config('activer_sites', 'oui');
	ecrire_config('activer_syndic', 'non');
	ecrire_config('forum_prive', 'non');
	ecrire_config('forum_prive_objets', 'non');
	ecrire_config('forums_publics', 'non');
	ecrire_config('articles_mots','oui');
	ecrire_config('post_dates','oui');
	$GLOBALS['puce'] = '<i class="fa fa-caret-right"></i>';
	$GLOBALS['spip_out'] = '<i class="fa fa-caret-right"></i>';
	function islocal() {
		if( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {
			return 1;
		}
	}
?>
