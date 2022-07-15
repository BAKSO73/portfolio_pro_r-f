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
define( 'DB_NAME', 'data_folio' );

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
define( 'AUTH_KEY',         '0WKGB[DON6-ECF,8}|zoX&vyk0Fg2o_BYV8?)b|%0uQVAAab`GbBo=Xw)8=!XjKS' );
define( 'SECURE_AUTH_KEY',  'x_imJOLD&9k2C67r(fy2I4m(G|_x)6?~huH?xsO0=dIAVE7l,4&/{0hvYZ(Hkc3+' );
define( 'LOGGED_IN_KEY',    'KSp9BgT^8?=09KjS?q 9F|cgV?=$d;87;rCkT6hzU*69.(LA fe~Rmwcgs)]Zc|u' );
define( 'NONCE_KEY',        'nKZDf@VO?>5Uy@KQ,nlXY<`NlUczo2$|A]s>gj0v6b^59-C&+6NBSTksn+H]n(_e' );
define( 'AUTH_SALT',        'Lp~WK2=k*%c!qhYCqt-mi$z3R`}O-AO#E.[udPmYMWygw)D#Y?U>g|G>=0X!:49f' );
define( 'SECURE_AUTH_SALT', 'xk!?FcI.~b-e)^HZvIk$$&b&n|f@LsPF Qn)nIWi>9%U]jH}@9.SU*+qS)c2[tXI' );
define( 'LOGGED_IN_SALT',   'Kpn<!/7aE(!|5rx_CCG9d9[f~F)3|NM^V8yB|q@&:<OMVYiPgS9D1asID zf4l]C' );
define( 'NONCE_SALT',       'V5gHXaj#`L#aA3<3-2UJ~IETfq8%|0b/gIN>bgsbOz3V+{l>;c)toHlcN0B&g^,w' );
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
