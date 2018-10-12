<?php
/////////////////////////////////////////////////////////////////////////////
// Framework
/////////////////////////////////////////////////////////////////////////////

/**
 * Framework提供了一个信息读入接口
 *
 * @package Framework
 * @version $Id: Framework.php 256 2008-03-16 19:20:53
 */
require LIBRARY_PATH.'action/abstract.php';

class Framework extends actionAbstract
{

	/**
	 * 初始化操作
	 */
	public function initializtion()
	{
		global $configs;

		//　根据配置进行相关处理
		
		$this->execute();
	}

	/**
	 * 报错处理
	 *
	 * @param string $error
	 * @param string $file_name
	 * @param int $line
	 */
	public static function error($error,$file_name='',$line='')
	{
		die($error);
	}
}