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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'cursovencedor');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'rx4ib*#HBXir2>k7f63<}<5j{&*ed@elxL}kWL`K|e0{!as1LO(SV[DL2rK!s7/@');
define('SECURE_AUTH_KEY',  'TM2MSEG53ioxPw1QCh_la^0,;8sLGc^ZVlYtN/mQ{=0F{W8&}6HDM~ln(7abGr_p');
define('LOGGED_IN_KEY',    '#IO^juaJ|A$Au31PF<yyg1>y-}5`ql7j(5Y(/do8B4(T]+Hy+i<TY-g|0z}b*-Ju');
define('NONCE_KEY',        'Gh}}QpK)#t_LLK[YDFPv(#u=Q>*.=@fS88y-#VikCC`(|d=zV_r=_3681G<u8cs^');
define('AUTH_SALT',        '&(d(hhZ7bNE[m5#VUOu[{<@DbH2o^f$|6`z^qCes&y=8(~un<Ng?!&z,Z]GIq(Iv');
define('SECURE_AUTH_SALT', 'vDj!NrF1dp)<^nIfN;zfpO>9buJjY[C=h`>v7/wH<G24}?RTvco2+6:b<GuXD#i|');
define('LOGGED_IN_SALT',   'AjNG`f)~|*xi]k#hRJd.F!dYV|Zg%80F?($>cO~2l^/@n|k|^Ai7W=46H_l}lpgz');
define('NONCE_SALT',       'CaR`;j?R~6V$}n2#.GpmX2.DW Qc|^q+3VJ(7equw1$sp2b:]!E=FQYZ-ha((:!3');

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
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
