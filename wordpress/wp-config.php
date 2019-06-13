<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '0000');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'It]/X/DPytH1E@u!Ly>)KRN;>/T6$5hUDZ}XI2o7+#vB3WWpQOp%(K?F4^9%NM$6');
define('SECURE_AUTH_KEY',  't/|SHj/1FK;7=CN*ZMIL)1?z_H&~R_1Gd;4nlvzz-4(D{l`gy&~0lx,:}dJOz14;');
define('LOGGED_IN_KEY',    'ib{wvGx/UI!0qaU?*Yb5kx3`t3dvzjxNT0sM.J_!k8cm rQd&)98LmmU8Q})e_s7');
define('NONCE_KEY',        '+Sxmr-b5y7pj6BVlQ[Nw>0XRV;s:I_#cEk.}=5xu~@^a,qg.}c.zNw)D7Q6I/q08');
define('AUTH_SALT',        '7frDnNtT-5bR*.jr6[jR@MPW0Q;F)wK1?j@1PnRp]eD01:Cy(d.GBiL/pSibZh4h');
define('SECURE_AUTH_SALT', 'ThR_NKAum7ZZGxQ,!BCw{)9Bw(S;?eQnVzjIb_Ovx+Gwf>U:IC}t<^xZ*~)|?%O>');
define('LOGGED_IN_SALT',   'O{=@?ms<m#hDJ|7dC]It&!HR.eHlW>8skKJ/][MXK%MM0Oe) }F,(_[q.~f?I$^Q');
define('NONCE_SALT',       'gw=IPnj1/nTH=RG6 Sb]Ngi(S:Pd=4=FEySS(s*P ;1KOP8Di0=|fpf=}_hP9E#-');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
