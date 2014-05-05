<?php
	include_spip('inc/config');
	
	ecrire_config('rubriques_texte', 'oui');
	ecrire_config('articles_texte', 'oui');
	ecrire_config('rubriques_descriptif', 'oui');
	ecrire_config('activer_logos', 'oui');
	ecrire_config('activer_logos_survol', 'non');
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
function traiter_echap_code($regs) {
	list(,,$att,$corps) = $regs;
	$echap = htmlspecialchars($corps); // il ne faut pas passer dans entites_html, ne pas transformer les &#xxx; du code !
	$echap = preg_replace("/^[\n\r]+|[\n\r]+$/s", "", $echap);
	$echap = nl2br($echap);
	$echap = str_replace("\t", "&nbsp; &nbsp; &nbsp; &nbsp; ", $echap);
	$echap = str_replace("  ", "&nbsp;", $echap);
	$echap = str_replace("&lt;//code&gt;", "&lt;/code&gt;", $echap);
	$echap = "\n<code$att>".$echap."\n</code>\n";
	return $echap;
}
?>
