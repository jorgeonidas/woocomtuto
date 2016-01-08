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
define('DB_NAME', 'woocomtuto');

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
define('AUTH_KEY', '|D.*xy9j0Z[_KPGy5.Y>+{]zgc .Inj@Hypz}w0^>S /YS.@:^/IXMr8Q*6 -fQ6');
define('SECURE_AUTH_KEY', 'QKf`uyP_!+#p3~G^M>++|ch)UP^uGmJeXv|qnxH=K3{,GSpzB2:g?M7 1`F]Fc+8');
define('LOGGED_IN_KEY', 'a0k03nPO,&+L6D!j nwjd^tT]*.K|ik13697=>9]YCk&zL5jrN6|.%QkG B p-K$');
define('NONCE_KEY', '?+ZVP{b!~[+DZ_A6[oZI;;%lk2C.]tB-(o;v}&_uULD@QQc+E#wc,@Im:O9GAeWm');
define('AUTH_SALT', 'T}>K(G/}Iz]4IU5;riI}Ja+.:Z1+&|>:3Jq ]t+~ec7!^az#G1Zq.s9Cw/&||GcC');
define('SECURE_AUTH_SALT', 'B{>*&k0+2_jvv+|^9EB9RfH!E;RZD_U||$+?Wa,}+n+]*.<W?B=@Xqt]xfP=bssA');
define('LOGGED_IN_SALT', 'J Ae=thM8M KMU{+H?P{9A*+``EC*j6|/r9lHkpivn,T~]zI]iuHKkHtqUHV?Yu+');
define('NONCE_SALT', 'x*)1X~e|9MV+q3?K+Qx}~982UIv+-CfzWPTiEJG2g+0}7.GorrNl em;+Tgw<K=q');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wctut_';


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

