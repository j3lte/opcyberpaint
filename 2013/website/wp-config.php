<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'opcyberpaint.nl');

/** MySQL database username */
define('DB_USER', 'DatwasIkhelemaalniet');

/** MySQL database password */
define('DB_PASSWORD', 'THIS IS SUPPOSED TO BE SUPERSECRET');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qoitk/()&t{V:9WUo[LJWbeu[YJp?mIZIQqT#uR0oU`ccvwcCs>8NhD_lg;ps-cy');
define('SECURE_AUTH_KEY',  'iQFE&wrwSFF,NnCy@&Ok&t{ |;8s80BJsva(A~q.[34N5Vv$Eb|8Z-3gbee q4$=');
define('LOGGED_IN_KEY',    '.v5YmT(K6$+[a$IK6<.VAP!I2<~?w(|7G$dElVhu/|6N[,+_,]~08^Pv:YdGLvje');
define('NONCE_KEY',        'A,5P`VEvB2R&cNs1uPe}l^p)PW/B_=;crB*^mt8v9MCSx$n:{$L9^e{fzpEsB]C]');
define('AUTH_SALT',        '=7fWXKCe8_bd|<<_MrRr1gX9z2sn5ni3jJm|q?cc(E0Oj!Yu^qF.Q  |Uh=WiIjO');
define('SECURE_AUTH_SALT', '~R aUFdylcYmXX?d7Qx|lRP|fpVN(y;N4aI+bg%-5M`-3osW0J_Y&=uMa~vXPG+N');
define('LOGGED_IN_SALT',   'O@Io:;ReXgr7^*QL;{u7pqG;i wKVm~/Eh36 Q$Fy>V%_tj!&^6%i[9yHuJDIodD');
define('NONCE_SALT',       'b}8L|wEs$Q4S3a (}FZVB*S>JhXv3t|D=j,,B9ybnv!ndXEwzv9H>guaUSbxvOiI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'nl_NL');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
