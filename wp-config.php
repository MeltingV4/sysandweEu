<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'soporte_wp_us_sysandweb' );

/** MySQL database username */
define( 'DB_USER', 'usrsys' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kzz5UwyP-hs+' );

/** MySQL hostname */
define( 'DB_HOST', '107.180.69.74' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Rht([_#u4U]t00{VUxPK|mq!g*M<t_;6k-y[<hetO?gb7x^xxVxfI>$98Br<%3Q:' );
define( 'SECURE_AUTH_KEY',  'w@{CmI84|_{^v?HfM7}%s6-(r7pDrM5rV0P)RuX+mO7q|h{#8PTuw}86f<mM}POZ' );
define( 'LOGGED_IN_KEY',    'N&{XMA*A_-+8[5-W6h0ymVu5gg@j>O3l;?`kyNiTFKKY{p{?c6nL+1so2?7/Zbjc' );
define( 'NONCE_KEY',        'JnhF6:wT/M..syRJ}|myotOMT6X3DS:Hpt<f7!wIGGQ9^(F??4WE>`,#IPdK2]jR' );
define( 'AUTH_SALT',        ';DU(j[7`{[h7U; cVh&;!tRv_a]E&_0?rS.QL?7T$&4Sdz0odjoM?I5w Gi7ra5f' );
define( 'SECURE_AUTH_SALT', 'm~A06EtYlW!V_;5xL->o*1U]Pq)F{(3-AcLdKi!9agNSc2yi44=Q{$JLye>zO %@' );
define( 'LOGGED_IN_SALT',   'xp?x.c4V#K<.^^C}ebb-)<f$FOsy,D?^,~K x:BRaS.k!~Isu3/y`{#NF3GM0|A?' );
define( 'NONCE_SALT',       '*/&zCNPY61rU5Sq_BYo= {kK&X}RMn:8 <phr)?RtSK|lDQN%h1A!4w{XWJ1pJtw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_us_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
