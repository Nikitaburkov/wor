<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define( 'WPCF7_AUTOP', false );
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wor' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MmO5H1_*AGH}{moo~bDL@CvYL6,ei<ols<wCKUaFFEg1TKY]dd9(JxK5U2U$q1Gb' );
define( 'SECURE_AUTH_KEY',  '(1|7KQV+Y8i`;|%/D8}h8i*Af|V~-7wIbK2`spyVBrw!o:U)aSlZ7ava]|s/b&]I' );
define( 'LOGGED_IN_KEY',    '4>>:dl$&iX-XDmm^nK$F:$Q7TOpk9dE%_vJ#|FDn8!XqtsbL9Rn_Aa#Z1s*98~T}' );
define( 'NONCE_KEY',        'ysSJa15)8o6Y*+<^p`N]`5P#$axN(@7>m[^!>o(|lj]hdY&r74x86PCNKG5KVw5]' );
define( 'AUTH_SALT',        '`S.BQ$fr?#BXI&y5@qJfk_?:>YA:XFF rh%a%,u_<DNY#&?-#;|~@2jhPUW0UG_b' );
define( 'SECURE_AUTH_SALT', 'C#;}S/kL{Ldf3E?QgFZ(z ]k(d|NDx8v:_uB-dbw0OSgNu&z<;gNvFsk7`avTalw' );
define( 'LOGGED_IN_SALT',   'V-zC2{$m=0&^BeCa%;5k N-+C.t#UmRBCZlq)*^(,i{*+V7saO8JWo9YiI.K7_J_' );
define( 'NONCE_SALT',       '--Il8:qe0WW)4(nQ>~<ys%<doS+sg}$&2;x]?8!P?qD` i82IX5~)k8c$)`o*!vN' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
