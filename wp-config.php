<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '5pab9ug203hfkrvg' );

/** Имя сервера базы данных */
define( 'DB_HOST', '127.0.0.1:3306' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?S6rpdJg|kFL3!/`ws,1Xd/ulp(R|Z?7]qk].H+jFw?^,tV6sJKXnonpT.3%1pXY' );
define( 'SECURE_AUTH_KEY',  '1e);m}g4orU;-sQBv*%EvG#`D~?+L3YuKhkX)$`|S&)<2O9Y.xZ_)AM&q=>_fopd' );
define( 'LOGGED_IN_KEY',    'RGIp=5|U5.!]irg&+R4o)EO[5xZVIsi]HD{UMm<+sheZA.I*4*a/]VeoP+CQmycU' );
define( 'NONCE_KEY',        '(;n`]zBz-U?;10XFC1mUBF>tF3gy<2[2gFKakHm>,};$#TOfA9rr#HDX_ee-Gf0?' );
define( 'AUTH_SALT',        '?hC~d08hBowtRi D.`)8MouIZ7r%~u(D5`=oyvpqYbxTUMlu$YVPkb.I`|dk?Yf&' );
define( 'SECURE_AUTH_SALT', 'JQ~<~cvh6Co^<44,Mlq9SezAjYpu)[&zlRsgya{-{m?N~LU(Vc!7<L,B-.z;qlT3' );
define( 'LOGGED_IN_SALT',   '!FZc+=MCSJ)`N{pr,eUZo)p-A7VQG?(tc @gu#i9gjYgrxU]+srMwl/4NxjExVU7' );
define( 'NONCE_SALT',       ',vXbW6qS.N pj:$v+8|ZP2|4&o<!FMa8+g4E:?pfT&4k)MmmEthUi3#=ti4%/v-F' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
