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
define('DB_NAME', 'harya');

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
define('AUTH_KEY',         'Ap@,yU9DKAn8iS-t/+6cw45^.0lJp`gQZSo|~9MP?+ec!d<|v]`sl<;rDM.EO.fJ');
define('SECURE_AUTH_KEY',  '|G>#+QQB3jRRGYOOgTxg/i$9ZY@-yV^#R>LN2?y]d9)&_#_7(^.cpo/Xlb>/w54K');
define('LOGGED_IN_KEY',    'Yey:+GBVV$7X4S/g@8$S;%wlFiO&fP{:kjd$WJ/*TYwOukjfE1uZS2Q`W*4b+, ;');
define('NONCE_KEY',        ':(FC/Y}%QU?h7FLJ@`!wy(C/H-5wr#=;2t)w_k)7^Bnb&$^)Z2*18,0=5h@zJZ%L');
define('AUTH_SALT',        'D1XYr%yP&-qKs}Jb3a/1#WCFD.O#~vZeDnun@Rl z*g2jm&l!61X9^[h>Yr^KCj1');
define('SECURE_AUTH_SALT', 'N8?NlWcwr[+*Dt:!Yx)`,@HE<,{vP+gCQ)KVn<FR1Nj]+aB)n/hUPU,Ks]Ib;;Hp');
define('LOGGED_IN_SALT',   '`voSdw8@EI%QKvs[1Cbcf[8[nD{-xlrP=Vb+G|[~lCard:4|ocWIH4w 3 _eTi1D');
define('NONCE_SALT',       '0IZcDPN.K*n/#s6xKt{I=HI,eDT0h>MfoIR]#3uJ)#j!vIJPV0(4}22M}6ryXrFn');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_harya';

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