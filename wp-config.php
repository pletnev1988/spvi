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
define('DB_NAME', 'spvi');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'bydfhbfynyjcnm');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');


/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&lx:(K{xr>n}$!TJm(CUeX2=5k^jOa2ro,5u{WT_?FUm.Ba[Q{Dk6;*R,m_~X2tD');
define('SECURE_AUTH_KEY',  '/Sx1zc`ySe.k Dwnk&wwe.WX@zYSbK_7dJO|5*[+tI&$ }]GB+5cWD&NU=iEqf |');
define('LOGGED_IN_KEY',    'bkg$s+^puTTZRUtNiS}ZL,jFB-kitN[Aqq-(PUAb:pTVPlo(7Jnc7pVmP]CcOZi(');
define('NONCE_KEY',        'vOryzyIo[EQB?q/Yql{{LyHG_Ca.mkd[{LyM=8r`o,nOnqtn&E^H{1Gl/m[!2dea');
define('AUTH_SALT',        '[#^/(TdE6TSE.6Fw$_mNyBA08cUOC_d~V1W7BC,gvrb]zGD@fdYy!2![bDIFeVc@');
define('SECURE_AUTH_SALT', 'j3qL<Ls-9))`QZDDkmyf<7U`Q=KUZERX}I,!X@K=jpL}c?wEU(riwdIjO[]#Z<S3');
define('LOGGED_IN_SALT',   'IU0j}UWZ-|x6I=q9+J~Q}P)h-F^>>[e82%Xo^:q8{n$w!u{Y8|#|=U:EOPhqF)|Z');
define('NONCE_SALT',       'f=ZkK&e}]fp;Pl+=b!qAP=8otcQkc1s4N@rMIx*-U i=lf^0Q9~NA|1uTwmi=Vum');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'spvi_';

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
