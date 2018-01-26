<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'fevrtvgwvhfevnew');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cKocMiJ{H&4N2E.Bl&5!~Q#y7$pM=HCGM/00/ :5nA?-&H`kp.M.^r2|J1ccs]Ru');
define('SECURE_AUTH_KEY',  'm_&joTxA/.58vm#xqrA[wMpIi%eb*t-Jd>.GzJgN(|Ymnh;2S(1<2sP)Q,F^rp/p');
define('LOGGED_IN_KEY',    't94$o$e3-_GSW[([62<WWJmEv^4~x>-jxM8.c%Uqv!@Yp*@NdUqtwa(80E+v&Hdt');
define('NONCE_KEY',        'v-m/K)&K@aiGO_sW1clqWJ+8f~baY3/SmpP^xkzbaP`sd3AVK0)|c#v,|RnIaB,M');
define('AUTH_SALT',        'n,$=[i9c%^+8E.:~N#eoRv8yh1!6FwOgrLf0ZgqXqwxvO14D,oF48HD];=1%60HR');
define('SECURE_AUTH_SALT', '7mJ ZVs|5yb4=3S*@@hau@8I##O)C$JsMA(%H%BQ:bQ~*=@0IE^0<$p4jHpSdPBI');
define('LOGGED_IN_SALT',   ',~PVp=~mm6Z]R:Sqntf,&ciUSF,$e`.{|:ejxUGW6cXWmyL!-4?#^sZIky?;yx!z');
define('NONCE_SALT',       'Pvd4p ,Oa6#rXyNL!(%l)ps+W44,{.Y?cSHKR.wg4H=C[j6RY^`H^By}}k{icnN9');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_FevR_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');