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
 * * Настройки базы данных
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
define( 'DB_NAME', 'golubevdatabase' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'EMv!B6<^vA!pt /cb%|s]tSH9qs9kSC1Vm),`TR7h:|A,>WG|eirV?_aZ-FVw*+H' );
define( 'SECURE_AUTH_KEY',  'Qwur?*&e/oI^}B^?cN)c}7Gu b5FBL*w+vCR#q8?z5Oazul)+`7 B0VY%daD`urC' );
define( 'LOGGED_IN_KEY',    'N-yL6^qRm4z~f^Sg^M`K,.-h.$&LHY?8mp8:`;V>arHw8DDD>.ZihYmy%-W9T^Sp' );
define( 'NONCE_KEY',        '8fdo%3!Pq^.^pEh//?Avmr;^9@}v,@yeyu6=XXwvEXuF<mv%^7kE{QRUjd8GM/7`' );
define( 'AUTH_SALT',        '*Kgo}oL$.n1J5{iUcuX2d.[.<Ru4nn~lIL?}tRE0)a$<U{}>_a4v:G%tW4HCIm?9' );
define( 'SECURE_AUTH_SALT', 'YMy|1;H;HwWudf XX]m>ZAE4{?.~WB dnqt?RRQ^JA}Ia9VYzNz%q:{#;s0H_ :.' );
define( 'LOGGED_IN_SALT',   'E1k._3hviifSA^D~&.^19i??lPC}_i9OtQ3x.9Z3FluY:)rFI4NbRGx#AMXMn&JH' );
define( 'NONCE_SALT',       '(?&A)!:[*->(f-Q$xT{!%}z%BbVrppC0mbqx=Ijeg9CMvPl}~qB!P.ir=f1RA8X!' );

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
