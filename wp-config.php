<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ss6TQ=~2OcB:1_GS~g8MgvMA|j{j`1NhEqW9%T{Vay{f~DIjX[s;MfQ|MO%2pGbh' );
define( 'SECURE_AUTH_KEY',  'elo<~z!&^N.*OJ9aV]oqkFI@ b?Vu0i5?]VaG$!B4a[f-X_|+|L~U1{|=hZ$0v!%' );
define( 'LOGGED_IN_KEY',    '+IYQ|Ut_VUZ8Osgj(7^oQGC0PU4$BL~2[TnRI9p9H]fC|VQYrD+BcOYa/yMU}f|Y' );
define( 'NONCE_KEY',        'S8%*ta?a{S}aKX4-vAx4,([=~v0)GlcBqW`C2dPM/t,Vmf/]?Oo7R>>xT9.fX<x ' );
define( 'AUTH_SALT',        'Q9Gg=q{oN}N26Y}~5[y:kq3g^jL!xV,ca{BP&7tY} /Q[50V@qE ]#o2h?K6`~0F' );
define( 'SECURE_AUTH_SALT', 'R{Zw~7#K}`,^aK`Ojt-Ch6B.9gMu4%2Dr*Wys=Il0hjW7Tz()!|z%0+5 %~o/8u&' );
define( 'LOGGED_IN_SALT',   '|,&i !y{he:=W9^nMFl*;!hr[wt42*_l7pX)+g3u*Q:4J9V6F{zNvC_6wmC:i,8i' );
define( 'NONCE_SALT',       'mB+lxW!rLgnnA>n?q90Cu9HHF*GcGZ3Fy4~L{#S4w2c]?.DcEf6+6 Gv~NJ^3<iu' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
