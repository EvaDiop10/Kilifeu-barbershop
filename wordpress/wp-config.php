<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'KILIFEU_BARBERSHOP' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         't863>yv:5_?<fC=rX2&I_Yt.*wq<6oMG`a3UyZ@Zrc .<=Rw; -{lF[+|OL_GK[`' );
define( 'SECURE_AUTH_KEY',  '1xc)D9{w;[zRGW&RCsdX{AvN_q> P[!9ors7EvW>KE6~rZ^J1`ckWKV@Xm`n2V11' );
define( 'LOGGED_IN_KEY',    '4xL} UzkO/6PLM)HR}>^5|VTF|AB[R0TkpBj#|%,VF:yb.vxjTCe3!W 9Alh@Qmn' );
define( 'NONCE_KEY',        'c8h@ci0+,51~Y_%T6?+qEd$wYq(u]q:A4w u$?#Xg{n+z/*.vg^b#A}5RB q[sAS' );
define( 'AUTH_SALT',        'icUGL,VuM%Ei 1?Q6,%U;E-C%6W il&O=6qZis6t,DNR>rX[=nl/.#oiX!S)sX_#' );
define( 'SECURE_AUTH_SALT', 'VwxX3P1bACVtC)!d^[:7AiY&Uq?p{3[R47zDXBh<1S8}.ShyH(l?(~{8W0xoBaqX' );
define( 'LOGGED_IN_SALT',   'IYu~HctR}[uU8v>I&kUE4jhVvbhuhPj>mtP%H%Z3 Umh1iwT#,KB8]e>x$de<eps' );
define( 'NONCE_SALT',       '<AF(>|w~hQ0&A:Apf$B4Qt2oR3EU_pa0bC|o}@*U0.;q4L(CI?cH9ZJJvR]#=acD' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD', 'direct');
define ('FST_HOST','localhost');
