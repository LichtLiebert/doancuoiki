<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'doancuoiki' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hUMwM]EoPYiSX,YOLOpuFO{uVv@F1C%Q*7*DV{[OE>DR*6@Uy*4%s; A/^VP2t#P' );
define( 'SECURE_AUTH_KEY',  '8.r2h<r*zup<i4mk9shgeU*m],4d!)!)8Ri^i0lps|0IH}|q{iQUhiv3[w28t=J{' );
define( 'LOGGED_IN_KEY',    ':&jOT++D_oI!$nz7F<T+, t REsa*f?.f[J-gx]8xo#X{-9.mw5=Q#~}}k$n(:u_' );
define( 'NONCE_KEY',        '$V&{{lT?gZ-5|4a/Ngv}&+9-F6{R*Oh&+A:*m6zI6`# 4Oq}3keuOCD?@Ct6JbJ:' );
define( 'AUTH_SALT',        '5pe>c$)}VTbAZR-<Vt}q(&{/7-(bd=5/V6&=*pVU}>uvjr-^cuBYC3|V>46x,QDs' );
define( 'SECURE_AUTH_SALT', 'uv`o>@d;<H5$S)$Fp.E>J*In[Oiwc&xsEE3g%q{`[QU=sa70k`{`?x9yf0++ydaf' );
define( 'LOGGED_IN_SALT',   '>3,F)_iYM{*ox 6W>N@Ye>]BRknZ7@FsuV9G&/VrPG4qCFDEXh!<>(iPK==|3nlM' );
define( 'NONCE_SALT',       'S]>6z!0zIW7X(`Mzzj_X!iFmWh*2b0WseCpIf`6Np,H}[0S|,HKIw4ZiADG-l<*]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
