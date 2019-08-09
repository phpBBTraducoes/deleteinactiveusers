<?php
/**
*
* @package phpBB Extension - Delete Inactive Users
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.0.1] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'DELETE_INACTIVE_USERS_ALLOW'						=> 'Ativar Excluir Usuários Inativos',
	'DELETE_INACTIVE_USERS_ALLOW_EXPLAIN'				=> 'Se esta opção estiver definida como Sim, o cron nos usuários estará Ativado.',
	'DELETE_INACTIVEUSERS_ENABLE_MES'					=> 'Ativar mensagem de registro',
	'DELETE_INACTIVEUSERS_ENABLE_MES_EXPLAIN'			=> 'Mostra mensagem depois que o usuário é registrado com detalhes sobre contagem de postagens e período.',
	'DELETE_INACTIVE_USERS_TIME_VALUE'					=> 'Definir período de tempo para remoção/exclusão dos usuários',  
	'DELETE_INACTIVE_USERS_TIME_VALUE_EXPLAIN'			=> 'Esta opção irá definir o temporizador de remoção/exclusão. O padrão é 24 horas.',
	'DELETE_INACTIVE_USERS_HOURS'	=> array(
		1 => 'Hora',
		2 => 'Horas',
	),
	'DELETE_INACTIVE_USERS_POSTS'						=> 'Definir contagem de posts',
	'DELETE_INACTIVE_USERS_POSTS_EXPLAIN'				=> 'Definir contagem de posts para os usuários. O padrão é 0.',
	'DELETE_INACTIVE_USERS_INACTIVE_PERIOD'				=> 'Selecione o período',
	'DELETE_INACTIVE_USERS_INACTIVE_PERIOD_EXPLAIN'		=> 'Definir período de inatividade pelos usuários. Data de registro e data da última atividade.',
	'DELETE_INACTIVE_USERS_SAVED'						=> 'Configurações de Excluir Usuários Inativos salvas..',
	'DELETE_INACTIVE_USERS_GROUP_EXCEPTIONS'			=> 'Exceção de grupo(s)',
	'DELETE_INACTIVE_USERS_GROUP_EXCEPTIONS_EXPLAIN'	=> 'Exclua os grupos aqui que não serão removidos.<br />Selecione vários grupos segurando <samp>CTRL</samp> (ou <samp>&#8984;CMD</samp> no Mac) e clicando.',
]);
