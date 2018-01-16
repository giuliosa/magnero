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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'magnero' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'magnero' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'magnero2018' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql785.umbler.com' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         '!{%)V]}{lZNtNmt6BlUV-&66844jF8.e{tL%ajNH}]nNQ?{C#40knE[8tFV,!KC%');
define('SECURE_AUTH_KEY',  'Q0VF>f.L#8#|n.y)a4cZE]I5akVIc2wy7X g+fbP|kzQGR[Wv%O7G(?>pR2uxu(y');
define('LOGGED_IN_KEY',    'mO`AE@Y+~AX^k|$80{ou5[C_uUN qQv*+|5L?KiY7=H6RBLqJv*X16#1=6/T+a+w');
define('NONCE_KEY',        'SQp$M6-nBF)uZh3/y|iS<ZFh9@[0a:X-{Z7jU!QJdaLZAi(If|<w1T+1]=.$r#2=');
define('AUTH_SALT',        'C,Uk 0U*[{yJn:x$ucg%q;pj4d-<I+v/cLL|ui9}]#A]pvn+Hi5/@NWu|`lKJ5J.');
define('SECURE_AUTH_SALT', 'mE;xqv`ES|y3:y-VS/G|{LFzJN`WbI6p2@Y8[#+r>_im-lY5EWO.ZUBy4gZO.%04');
define('LOGGED_IN_SALT',   'Zt?V/(Bw^siNui-5#1A&6Ie|UW7*T!goqfMc>gqWcA_LEL,$K?(R?f4vI8KZzA^?');
define('NONCE_SALT',       '+6ZU`u$`V2+c2i:lQFAtCz|vgxr1G3q2(h2pR]E?4$-mP6:f+UN3O--8Q[CIr3ho');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once( ABSPATH . 'wp-settings.php' );
