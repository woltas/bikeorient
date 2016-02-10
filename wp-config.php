<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'bikeorient');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'password');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9B6:5xV$rPZByX+$_sT]3/.igkK[n,j%zH2Jp!(,Ayju++jn<<s2?z[7Sgfyfkm&');
define('SECURE_AUTH_KEY',  'jK4[Kbsj@_|GSls~?$EP51mBLO=T./aNA30q 5HH4l^RuAO. X^zb}]9?i#!jqQ?');
define('LOGGED_IN_KEY',    '/{<:w9+,L .Z._d[MTAW$.L|T6Up)ROrS8^~NMT_,6+FvMLH-;]f~TQ0xs#t|.A=');
define('NONCE_KEY',        '/|)(8LfGGjJs-zx5v>I1Eg>dN~C6]- E~1)+{BS0a~-f;X<0 OMH>c|f.g)o?zDY');
define('AUTH_SALT',        '-prj>Qu{|C3)-jN}5/43A3qv!$8]xL81f5E^A*zg|F^|WD;&]p*%;ibm5Cw8(wuh');
define('SECURE_AUTH_SALT', 'YjUDew^nu+|XKc)<1zrD}4sg3:&mIUW*BzFr6T`Z45*/A<L$@M^d3D62O_Q8qx+?');
define('LOGGED_IN_SALT',   'LVliHwrC$SPn)DsnQIhE,onFV0l|2>aW,mgEK-il@M4hm-1Y>ET~}T>L{+_/3`I4');
define('NONCE_SALT',       'v3YVo|[+%i++tVYvSIwX^J/Wa2v.?`7F:-F]YSF!NXw,:*ih4XM~{1{k(o@/&/J<');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
