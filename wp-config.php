<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '.w,QU*N^-RKz7>8)+B`]~sxmU$QJ/-Hr4k%`SU$#$G n*E=9MU@mbhEN,[%Pr>Xa');
define('SECURE_AUTH_KEY', '$E FG;,?=WZS|;$1p/8{mW-cfpn8iSKE$bpwgK!-=x7yFq)-%m@z$X~9<cakC{ y');
define('LOGGED_IN_KEY', 'TM7^h8#-R|##lES_Q%uM]p5UO.AG#%@F+@z8Eyw~QVgiZjoap83)5o3gv)gC~pwr');
define('NONCE_KEY', 'uwhN&bso^t36j9FV1/]N6flfrNbNwc!a[iu0ju]w5[V,{cG9Bi.(PO+QI1r#wB9-');
define('AUTH_SALT', 'kXJF1->ZOabVWbT&P0[DsPsHH7D= =sB*7l]kuNgNM+8e9d:Y<f@}t0DcW+;ggr0');
define('SECURE_AUTH_SALT', '<ZFlR7;s.)bO[9IOfxHO)5Xq)c(o5]cb.N>J2CV[OxGcHhFvYj*^QP:V0F,V/M}>');
define('LOGGED_IN_SALT', '0.mQ?ZZ*37 r;c_L~wWp?pFNt?[dzD@2[|H#E(O~6IVHSG!_*>[cemqK;Lo=MpQ2');
define('NONCE_SALT', '^eN0}A/Aku%nfm?f[GS(+({)1r&E7c^?J1/s*tte*>&qgPh3~,;K4 Z=8bd4^dR#');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

