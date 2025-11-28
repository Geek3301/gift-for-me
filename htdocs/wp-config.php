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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'if0_39935073_giftforme');

/** MySQL database username */
define('DB_USER', 'if0_39935073');

/** MySQL database password */
define('DB_PASSWORD', 'amase0fTEEh0use');

/** MySQL hostname */
define('DB_HOST', 'sql209.infinityfree.com');

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
define('AUTH_KEY',         '76>d{oPwcxy?&BN0SV^7RLZQjmb}e+7wL(7CA~QS7cKt[]+*2q@fgW<>VZ.#CNW4');
define('SECURE_AUTH_KEY',  '*u9]p>V^&e_6q>z.2VrW4Tu4> `~P`#ZbK4;x|?<>qC[56P;[uI/85nFPau;vv%Y');
define('LOGGED_IN_KEY',    'lT;# HEM;1IYKS)we]}n*P4B-d$yV<lJTtr%8 WpGex4P,#~e(}0p;buGJ4dVsPi');
define('NONCE_KEY',        '2c86,o!.gI(Aj{I<Nyc[f^`fZJKgH]$-.29xd*KCetFHc|cjuayFy!,B).0AgG48');
define('AUTH_SALT',        '`!L@HV+Fj ~Ic?,k{7Vm7=UIEGO@7Y3NDHL e#~R+P90R4q,T6TwR_s;ZIi{F%}m');
define('SECURE_AUTH_SALT', '2Z)C,16P.f`m3@^hq2s VSo4]@LSuM4q~`EEJS5ukk~(o0GSHmzPcyD]mMmM}?1e');
define('LOGGED_IN_SALT',   '3S(+RjU%dymEO1YTAje-9=v8!]b]NY5z.G7&$O=2=GMiET+r:>Y[crq#((-(F8#z');
define('NONCE_SALT',       'C3$$!AU8^@g~) 7Crb-@|O<X-7}suA(_THL=63?|xs?4G9@+KR,KaJUKt5s.KjIP');


define('WP_SITEURL', 'https://gift-for-me.page.gd/');
define('WP_HOME', 'https://gift-for-me.page.gd/');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
