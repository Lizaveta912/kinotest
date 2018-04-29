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
define('DB_NAME', 'testsite');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '()Y:nX2Pe4PL8l)h!yy*]IbPYYYp)( v(R#A>7e=?DBA-5=I*d*MqU6O-KT-=ZDA');
define('SECURE_AUTH_KEY',  'OqJS6:!K#X8`B~Oq`$EDS(g&(:wI^TdvCacc^,}42uz]+08uY7jLnyMZ1MQe*hG,');
define('LOGGED_IN_KEY',    'nM#r6D#j,IT&:xa-1d7q@y&`%%qC@Jh;2/H:#4g^.g,b9Jr)rMvt%~+,2xm?RM~i');
define('NONCE_KEY',        'C>!oxj58h68/Je|;Mr4h.z$X=k59>5CZgt:CfQk !JM^Ns_&e12|.kYN0V!f&*Q7');
define('AUTH_SALT',        'MPR4.vY?8s(p+VS*GzFOjHiv.%Uw.U7/guc<Q&1 ;Ke.-K@3g8L4[v[~}*,A?iaY');
define('SECURE_AUTH_SALT', '^H(_II3=CcE+S:BYKbDd{n:%MoHm~J8m3$C[.4P596iBGn6!?|^^qbO;6J?bbn1&');
define('LOGGED_IN_SALT',   '9I?}fV`i)KiJRiI==L$<y;Iz^q|cM>Y4icZ^ s&jVZafU91:oiVj+HRZZkOo%#(,');
define('NONCE_SALT',       'LR*zpjARciSv})9HfBWT@4%kX5Kl<zXE,r@njAchyJV,Rj+iRDMxa= /.6o1<.F/');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
