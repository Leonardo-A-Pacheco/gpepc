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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'gpepc' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '6#[|77A?C4ViXJM{cO5BGb:@BjM<0:U$4d90?A;xd/LIj*;&QQ>c)S<Il&,7*J(>' );
define( 'SECURE_AUTH_KEY',  ':JB[!LqOAuLn0b:v/![w?^f<]^DLK2$er6i(w;h9jjCSl68::[lsBH5)J{s+`&R*' );
define( 'LOGGED_IN_KEY',    'Gntdu4N~c [:;qfyIeT!).&p+U<N]TQQmbkJr.s}g]{!*23J;e~vD7BL0v~z.6be' );
define( 'NONCE_KEY',        '0HExw!<&;5tdMgr./@D]!ABzi]<Y+^w0BYCxQP~nGIV#^dN}i>r%GNkYAsj%C[b6' );
define( 'AUTH_SALT',        '?7wfzA~0Sv8]ai1+,+~=qYq#R`gd<)R9ZUwM-Hp]cV6(6?R8)nFc_,]EF.O*Ync~' );
define( 'SECURE_AUTH_SALT', '|},tVa$}ZZ@i^B5c+C-=_d7|SEl&i8cXDDI#p`^/cIFX6c~BLS%0d<*jZiKz^(Sw' );
define( 'LOGGED_IN_SALT',   '#_))PMjuYMk;9b3mBBH1j#kX}D9V5_?^;VPS>rP>:QRp~xo.fr=9BfPsYkmnT;J=' );
define( 'NONCE_SALT',       '(-23k5V;_gMfLev7i>upVH*Bth5@ Qf;<65yBO#:^DfC{Vidcs3^m eB/+iQ}(JR' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
