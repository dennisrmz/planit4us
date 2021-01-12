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

define('DB_NAME', 'planitwp');



/** MySQL database username */

define('DB_USER', 'root');



/** MySQL database password */

define('DB_PASSWORD', 'CLOBI2021');



/** MySQL hostname */

define('DB_HOST', 'localhost');



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8mb4');



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

define('AUTH_KEY',         '_@q_,4n&(9mnk&f7o(qRK})&i`B^0*W;Dm5.Q%vzeT3=uPy:o8Y.1nOwJfV0/+tc');

define('SECURE_AUTH_KEY',  '_|[eE?P.JprL~~vPZ; Z;7 vKbRLVx{Q)so]8!~QJC)-Yz.43zah37>n~QbeK$p1');

define('LOGGED_IN_KEY',    'l#klxTJO{Q>5F}9cD50(q{Sy1YKgk$?$#L?1,DOqx9<SfZ+4Q4$3z^~R0kLK7_yK');

define('NONCE_KEY',        'w+D~x2Uy!+tFW5Qv#*Oyl}+R&*N.;))_DuR=^`GN*u<A2?C%P@aHtYbH::rXmuza');

define('AUTH_SALT',        'vK1mZ+yDgwI>DJ]`4;>ol*zROuKIk>dpZ0]vXL48A>=LSRMzTN+ ?Cx,nR}@AJq{');

define('SECURE_AUTH_SALT', 'Z(P]ftz4 sd|lmR&D5Pac`yFsr3>{Te^/?|%M^p:F0bF@**lywdMn%ibJUBG|#&I');

define('LOGGED_IN_SALT',   '.Kg<CEo}LC5jNLaCu8C; #/NcYrDciq;ILh&ANyt9H^-eoweuo>;1f#[_b/Q2yXU');

define('NONCE_SALT',       '*I:j_Ck<,h0N<n(_nJ.gxow#T4Q*FB7W~{>-$>wB/4kIc)BErlFV[aLmf^w>I|kc');



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
define( 'WP_MEMORY_LIMIT', '128M' );
