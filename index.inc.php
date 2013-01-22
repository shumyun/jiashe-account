<?php

/**
 *    account v0.1.0
 *    Plug-in for Discuz!
 *    Last Updated: 2013-01-22
 *    Author: shumyun
 *    Copyright (C) 2011 - forever isuiji.com Inc
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$defaultop = '';
$baseurl = 'plugin.php?id=account:index';
$basedir = 'source/plugin/account/';

//在IE会跳到论坛
if(empty($_G['uid'])) {
	if($_SERVER['REQUEST_METHOD'] == 'GET') {
		dsetcookie('_refer', rawurlencode($_SERVER['REQUEST_URI']));
	} else {
		dsetcookie('_refer', rawurlencode('plugin.php?id=account:index'));
	}
	showmessage('to_login', '', array(), array('showmsg' => true, 'login' => 1));
}

require_once 'class/class_account.php';
global $account;

$acc_date = dgmdate($_G['timestamp'], 'd');

$acc_mod = in_array($_GET['mod'], array('richadd', 'richlist', 'winchange', 'richbudget', 'richcount', 'richset')) ? trim($_GET['mod']) : $defaultop;

switch ($acc_mod) {
	case 'richlist':
		require_once 'mod/mod_richlist.php';
		include template('account:richlist');
		break;

	case 'winchange':
		require_once 'mod/mod_winchange.php';
		include template('account:winchange');
		break;
		
	default:
		require_once 'mod/mod_richadd.php';
		include template('account:index');
		break;
}

?>