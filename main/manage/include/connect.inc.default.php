<?php
	if (!defined("DCRM")) {
		exit();
	}

/**
 * DCRM���������ļ���
 *
 * ���ļ�������������ѡ�MySQL���á����ݿ����ǰ׺��
 * MySQL���þ�����Ϣ����ѯ���Ŀռ��ṩ�̡�
 *
 * ����ļ�����װ���������Զ�����connect.inc.php�����ļ���
 * �������ֶ���������ļ�����������Ϊ��connect.inc.php����Ȼ�����������Ϣ��
 *
 */

// ** MySQL ���� - ������Ϣ����������ʹ�õ����� ** //
/** DCRM���ݿ������ */
define('DCRM_CON_DATABASE', 'cydia');

/** MySQL���ݿ��û��� */
define('DCRM_CON_USERNAME', 'root');

/** MySQL���ݿ����� */
define('DCRM_CON_PASSWORD', '');

/** MySQL���� */
define('DCRM_CON_SERVER', 'localhost');

/**
 * DCRM���ݱ�ǰ׺��
 *
 * ���������ͬһ���ݿ��ڰ�װ���DCRM��������Ϊÿ��DCRM����
 * ��ͬ�����ݱ�ǰ׺��ǰ׺��ֻ��Ϊ���֡���ĸ���»��ߡ�
 */
define('DCRM_CON_PREFIX', 'apt_');

?>
