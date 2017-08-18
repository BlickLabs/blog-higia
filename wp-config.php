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
define('DB_NAME', 'higiablog');

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
define('AUTH_KEY', 'NN=tk7&+`jRX4pf{mLGm# bhlY%9U-bbMo<Q J$zOxZ21NMfVK;?uUSw:matUC3l');
define('SECURE_AUTH_KEY', 'HPn 3vBAL:=;(d69#ZPK[]T^n1N_y[!TQo; PM.4T|LwZlPW@}pLzj,U^Ix*!R0`');
define('LOGGED_IN_KEY', '8X4B!rDHdTP0CGoXwUVvCQTbr.!yb7B?Cc#QwuUj]2|&ZmJX4Ip4$X{o~)|3[34o');
define('NONCE_KEY', 'qi)GeqCnJ[Nw}imDC4rVt^Z^wT]V~,l:Z/oM!Pd(2H88b^8MzMcNu4O_(Po5?Q#u');
define('AUTH_SALT', 'zD|vW$Yj6Axw<a61wMhCd#x65We0c=J[M3fT{3:/@s0[uUY(`9}3uTC]wR4ec)IC');
define('SECURE_AUTH_SALT', ',2cJG}`DF9/ACBIdckn n)N5RN=w)C&u,JdL=Xt]&Xcu,B/c=kon[SujnLskBexr');
define('LOGGED_IN_SALT', 'LR<izLRx|B>]n?_<Z{T<U#K$662r sPZ3wH$^|!dN,7$:aui$xFOE-byPzNq{q$t');
define('NONCE_SALT', 'E}wM.4._kNA/VFi}vK1^CKuZ]e wG5EZ<(TQ(I<!KxgK(L$<ui{[,bV41 S)+DDW');

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

