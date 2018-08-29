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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'mnt_db');

/** Имя пользователя MySQL */
define('DB_USER', 'mnt_db');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'V0b0P4b2');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xq}]&$rS8;Kz7UNQ(b9iRQIwm9GV#7lE^.o>5TdOH<FMhe_<[mIQ=gO}d)fZ/9DH');
define('SECURE_AUTH_KEY',  'q<!0R|j(U9R4hQT*nQIdwDdFTZ*p8SQ,Ny0zgYkX?*iB~=G@ed7S-VR~-g!k&p{U');
define('LOGGED_IN_KEY',    'YJ+8>(l?%L%Or.oAMl1v#j#DuExc]BzsCerh*{~36@v/EE{Q36sSZ]K~h=i]LYvO');
define('NONCE_KEY',        ':Q1I+h2RgWO>e8cb[{kID1rKn&sj72dY#_tg`5?,vS|YuVc?k&&(i%bup>?J!*$9');
define('AUTH_SALT',        ')Y7p.5hjuG@E( yJ2jteS:LVy 9)J2-9V.tc[Hu5xCCsnRL<um(+9T9NJ:vDf0Vx');
define('SECURE_AUTH_SALT', 'RE;P&u]j!Lf&4nJ.^8ZTNfeTA:RdVO/6*i){,yD`Wp__BYR2&65Xb}UA>CeDnLs]');
define('LOGGED_IN_SALT',   'k0!1qH}_1oSr H@P,uj1)IkgH[uMUPs$MomIH.%>e2Y=%IaGvwB;d}_@OVe{?3U>');
define('NONCE_SALT',       'sI1YiV9R|)T=7ld%)]D5i@TQBjc^H-l#j vD|0*+)aG7vIj0>8EdyYsKOSbCD&^u');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'mnt_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
