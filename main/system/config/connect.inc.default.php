<?php
if (!defined("DCRM")) {
	exit();
}

/**
 * The base configurations of the DCRM.
 * DCRM���������ļ���
 *
 * This file has the following configurations: MySQL settings, Table Prefix.
 * ���ļ�������������ѡ�MySQL���á����ݿ����ǰ׺��
 * You can get the MySQL settings from your web host.
 * MySQL���þ�����Ϣ����ѯ���Ŀռ��ṩ�̡�
 *
 * This file is used by the connect.inc.php creation script during the installation.
 * ����ļ�����װ���������Զ�����connect.inc.php�����ļ���
 * You can just copy this file to "connect.inc.php" and fill in the values.
 * �������ֶ���������ļ�����������Ϊ��connect.inc.php����Ȼ�����������Ϣ��
 *
 */

// ** MySQL settings - You can get this info from your web host ** //
// ** MySQL ���� - ������Ϣ����������ʹ�õ����� ** //
/** The name of the database for DCRM */
/** DCRM���ݿ������ */
define('DCRM_CON_DATABASE', 'cydia');

/** MySQL database username */
/** MySQL���ݿ��û��� */
define('DCRM_CON_USERNAME', 'root');

/** MySQL database password */
/** MySQL���ݿ����� */
define('DCRM_CON_PASSWORD', '');

/** MySQL hostname */
/** MySQL���� */
define('DCRM_CON_SERVER', 'localhost');

/** MySQL server port */
/** MySQL�����˿� */
define('DCRM_CON_SERVER_PORT', '3306');

/** Keep the connection to the database server? */
/** ���������ݿ������������? */
define('DCRM_CON_PCONNECT', false);

/**
 * DCRM Database Table prefix.
 * DCRM���ݱ�ǰ׺��
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 * ���������ͬһ���ݿ��ڰ�װ���DCRM��������Ϊÿ��DCRM����
 * ��ͬ�����ݱ�ǰ׺��ǰ׺��ֻ��Ϊ���֡���ĸ���»��ߡ�
 */
define('DCRM_CON_PREFIX', 'apt_');

?>
