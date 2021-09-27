<?php
/**
 * Configuração geral
 */

// Caminho para a raiz
define( 'PATH', dirname( __FILE__ ) );

// Caminho para a pasta de uploads
define( 'UP_PATH', PATH . '/uploads' );

// URL da home
define( 'HOME_URI', 'http://127.0.0.1/CIMOL/mvc2021-2/' );


// Caminho para a view
define( 'VIEW',PATH.'/views/'  );

/**INFORMAÇÃO REFERENTE AO TEMA A SER UTILIZADO */
DEFINE('TEMA','default');
//Pasta contendo os temas
define("DIR_TEMA",VIEW.'temas/');
// URL do tema
define( 'TEMA_URI', HOME_URI.'views/temas/'.TEMA."/" );



/**INFORMAÇÕES PARA CONEXAO COM O BANCO DE DADOS */
// Nome do host da base de dados
define( 'HOSTNAME', 'localhost' );

// Nome do DB
//define( 'DB_NAME', 'mvc' );
define( 'DB_NAME', 'mvc2021' );
// Usuário do DB
define( 'DB_USER', 'root' );

// Senha do DB
define( 'DB_PASSWORD', '' );

// Charset da conexão PDO
define( 'DB_CHARSET', 'utf8' );

/*-------------------------*/
// Se você estiver desenvolvendo, modifique o valor para true
define( 'DEBUG', true );

/**
 * Não edite daqui em diante
 */


?>