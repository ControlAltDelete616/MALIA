<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define( 'DB_NAME', 'wordpress' );

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define( 'DB_USER', 'root' );

/** Ersetze password_here mit deinem MySQL-Passwort */
define( 'DB_PASSWORD', '' );

/** Ersetze localhost mit der MySQL-Serveradresse */
define( 'DB_HOST', 'localhost' );

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define( 'DB_CHARSET', 'utf8mb4' );

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define( 'AUTH_KEY',         'L[1aD?M5%yxwEq*ld[HOT&,$cq~.jZ5fOSUEay=foLM:FlSunMC|#NUE`G[$5QGc' );
define( 'SECURE_AUTH_KEY',  '.p;^9Wl=W|x*WwWxk|UIJYsGgEi,Zn:AZ+EE7ATcVc7+u)SUON.*+!t4#}bfV}uk' );
define( 'LOGGED_IN_KEY',    'pnB>Gx[7bxyob/>E91nBGb8[$0Z-2S4z}sW(LQIO8K]@;}nd8dyvOl&5,&*B(JLg' );
define( 'NONCE_KEY',        '_9(iO$l1iUR^Pk6f.Cs??-M gk9:A`YdIhs[)9c;UJOu[$XnBO4imjBC#AFd`r,@' );
define( 'AUTH_SALT',        'hAIhgvsm(l<)Q.cHPbr9N1qUK1|X/m:mSrC1)Md8oy(4Oew1Zu(UIIWeYSA76&H#' );
define( 'SECURE_AUTH_SALT', '6G!*XB~1+*,t4a9VODws]nw?(fW#bhQjuH*Ay#coX71:,DueOs9?eGD@*o1r#v&i' );
define( 'LOGGED_IN_SALT',   'tKF+sGGnp$oi~-?eY@ /Ol[Prvnt%$f,+f]$z[|bPFK^zVcgoPhQ[CyeR++$z.fS' );
define( 'NONCE_SALT',       'G`GSe2rbui]xGT[&(pN7|#4^W%%4/xXmaFL,,S@TP$ slIkx,(6ILXYH9Lz{J7v&' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix = 'wp_';

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
