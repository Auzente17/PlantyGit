<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~@Jsms?e%Cqqt0(;t>apc(#/T~C3xqcp6?uj1x93{dyO8tJiH6v=#p~;@d>#pO`w' );
define( 'SECURE_AUTH_KEY',  ']I`#[kwGsE&k]w7q@4=JJ,8Tkrs+vgML`(%~Yt=l;}}`UJEDkwWVNq0E?=J!lFeb' );
define( 'LOGGED_IN_KEY',    '@1xX,mr U@Ig _>jf@%<HRI2{A2yx,;=<FwtM>3?8p$pS[i9hgJf[lv4C!DlYT0]' );
define( 'NONCE_KEY',        'f8%j%*^MrAb.d&zVoPt`4==3^`+8~vl8!n)<{/pBILtcV 7j,zzK%M{qhg~iSPz`' );
define( 'AUTH_SALT',        'q0m zVCew/Y4,O4VKy`;h!HB=@x$AjX@J`gg.ltU!g_QK;?]$&qortc@rC75nW?m' );
define( 'SECURE_AUTH_SALT', 'Py;H<r%v$gVT0Zr&CK1^eN8L>wl2,=3K f/RP56C&*y/6;n$(JzQd@i;Vc|*,g;y' );
define( 'LOGGED_IN_SALT',   'sL`.%E?]t-CwujV%U<6A=IiHWJ^O(_r2Z,$x)lyPdP89I|feLZ@,$w+(:E/trk.M' );
define( 'NONCE_SALT',       'W<+`(v8LcYrAwCrnNG1}p>WUyS=r`/0]+,(%kf{dn$a|0Dj%s{)utWr|mzA~TOae' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
