SPIP FAT - Free Art Template
=======
Thème libre et minimal pour Spip 3

Démonstration : http://www.softrains.fr/template/


Installation
============

- Installer Spip 3 -> http://www.spip.net/fr_download
- Configurer Spip (monsite.fr/ecrire) 
- Copier le contenu du git à la raçine de l'installation de spip dans un repertoire du nom de votre choix
- Créer le ficher "mes_options.php" dans le dossier "config" et y ajouter ces lignes :

```
<?php
  $GLOBALS['dossier_squelettes'] = 'NOM_DU_REPERTOIRE';
?>
```

- Renommer le fichier 'htaccess.txt' en '.htaccess', adapter la ligne "RewriteBase /" à votre installation si le site se trouve dans un repertoire.


Configuration
=============

Aller dans l'espace privé (monsite.fr/ecrire)

- Dans la configuration des fonctions avancées de spip, activer la compression automatique des images (GD2 si possible)
- Créer une rubrique, préciser le titre, le numéro de l'abum bandcamp et le sous titre
 - Les rubriques sont triées par numéro de titre (1. 2. etc) puis par titre. La première rubrique se voit attribuer l'url du site comme url canonique et sert de page d'acceuil
 - Numéro d'album bandcamp dans le cadre "Descriptif rapide"; On le trouve sur la page de l'album, en affichant le code source (ctrl+U), à la dernière ligne, après "album id"
 - Sous titre dans le cadre "Description de la page (meta) et sous titre"
- Ajouter des liens dans la rubrique, penser à leur attribuer une classe d'icone et à les publier une fois enregistrés. 
 - Pour ajouter un lien, cliquer sur "Référencer un site" depuis la page de rubrique dans l'espace privé
 - Le dernier cadre permet de choisir l'icone du lien ajouté, on y indique une des classes proposées dans la liste ("Liste des Icones")
- Ajouter une image de fond à la rubrique (logo).
- Créer autant d'articles que nécessaire sans oublier de les publier.



Integration dans un article
===========

Bandcamp : 
```  
<bandcamp|id=NUMERO_D'ALBUM>
```

Vimeo : 
```  
<vimeo|id=ID_VIDEO>
<album_vimeo|id=ID_ALBUM_VIMEO>
```

Youtube : 
```  
<youtube|id=ID_VIDEO>
```

Dailymotion : 
```  
<dailymotion|id=ID_VIDEO>
```

Image :
```  
<imgX|align|nolink|noborder|width>
```
 - align : left / right / center
 - nolink : masque le lien vers l'image d'origine (non réduite)
 - noborder : masque la bordure de l'image (pratique pour les images sur fond transparent)
 - width : redimensionne l'image par la largeur (l'image ne pourra pas dépasser la largeur du texte.
 
Document (affiche le type, la taille et le titre du document) : 
```  
<docX>
```


Lien important :
```  
<link|url=URL_LIEN|titre=TITRE_LIEN>
```

Lien vers document important :
```  
<doclinkX|titre=TITRE_DOCUMENT>
```


Gallerie photo : 
```  
<slider|id=ID_ARTICLE|titre=TITRE(OPTIONNEL)>
```
 - Affiche les images ajoutées à l'article pointé par l'identifiant dans un carousel
 - Chaque image peut avoir un texte associé (indiqué dans le champ "Crédits")

Liste d'articles s'une sous rubrique : 
```  
<liste|id_rubrique=ID_RUBRIQUE|pagination=NB_PAR_PAGE(OPTIONNEL)|norss=X(1 pour désactiver)>
```
 - Affiche les articles de la sous rubrique dans un accordéon avec
   - tri chronologique intelligent (ancien -> récents -> aujourd'hui -> futur proche -> futur lointain)
   - pagination ajax
   - filtre par mot-clé (si les articles ont des mots-clés associés)
   - abonnement au flux rss
   
   
Code source : 
```  
<code class="syntax LANG">
CODE_SOURCE
</code>
```
 - où LANG est l'un des langages supportés par le plugin jQuery.Syntax : http://www.codeotaku.com/projects/jquery-syntax/examples/index 



Compatibilité 
=============

- Spip 3.0.XX
- Bureau : IE 9+ (Accessible IE 7&8), Firefox, Chrome, etc.
- Accessible sans javascript.
- Mobile : à peu près tous les navigateurs mobiles modernes.

Performances 
=============

Environ 90/100 sur PageSpeed Insight.
