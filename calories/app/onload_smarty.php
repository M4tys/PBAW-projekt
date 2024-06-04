<?php

/*
 * The script automatically executed when getSmarty() is called for the first time.
 * Use it to setup the engine or pass additional variables that are always needed.
 */
function url($params, $smarty)
{
  $action = '';
  if (isset($params['action'])){
      $action = $params['action'];
      unset($params['action']);
  }
  return \core\Utils::URL($action, $params);
}

function rel_url($params, $smarty)
{
  $action = '';
  if (isset($params['action'])){
      $action = $params['action'];
      unset($params['action']);
  }
  return \core\Utils::relURL($action, $params);
}

\core\App::getSmarty()->registerPlugin("function","url", "url");
\core\App::getSmarty()->registerPlugin("function","rel_url", "rel_url");

\core\App::getSmarty()->assign('isAdmin', \core\RoleUtils::inRole('admin'));
\core\App::getSmarty()->assign('isDietician', \core\RoleUtils::inRole('dietician'));
\core\App::getSmarty()->assign('isUser', \core\RoleUtils::inRole('user'));
$user = \core\SessionUtils::load('user',true);
\core\App::getSmarty()->assign('user', $user);

#assign variables
#\core\App::getSmarty()->assign('variable',$variable);
