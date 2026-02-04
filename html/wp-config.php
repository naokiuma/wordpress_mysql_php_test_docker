<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wp_db');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wp_user');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'wp_password');

/** MySQL のホスト名 */
define('DB_HOST', 'db');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'REld+-//iQl B_8wV3Hi&~kAT,so;P:;!(.fBi]ILQ^cN12h$3~J43yj|yWOw7s`');
define('SECURE_AUTH_KEY',  'iyz}.#UVQ=iTz5P|qQx%vn0q?nB(bY~`Od8Go(m?N&Lg&5H7!Z4]DsTe}{!6B+*<');
define('LOGGED_IN_KEY',    'VITBm6#k3J~SLVz`!+y@TQk)E5>*gVz4an ^iW407m`s&}>_d!5%sMWGgF8)f+-k');
define('NONCE_KEY',        'K)%<..{hn!JF7m!lgcct8Dsc,31,6DJyijxA(~A:j#fYV?Bi,eADD~.Z:0SBOZu8');
define('AUTH_SALT',        '9}#!e$j[>RVT:&Pqi?#~_4#Ci@}&_CTPEJZ8PV<MQ@E~a{41{i<@),zDBFxKN|U!');
define('SECURE_AUTH_SALT', '%ar%a]j;Ge_ViPfKT^pB|/r[?p!EF}:,%,=IjiWB+?ZTIp+;aJ;-bz]Kj}[0`d,r');
define('LOGGED_IN_SALT',   'Vx`q-UL- P%oh1kv`JK~mCS2x0p4cojok2*.1nYRI<+|y0,$.Es(Wf@D;g<`.sm7');
define('NONCE_SALT',       '<21)J>f5Q$GR:c--n+KO^p%Os.LuS7VK]=MG/wwa8(O^99RWqq-g]M?%$97:S|U.');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
