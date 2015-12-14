<?php
return array(
	
	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     	// 数据库类型
    'DB_HOST'               =>  '121.41.51.22', 	// 服务器地址
    'DB_NAME'               =>  'xingce',     	// 数据库名
    'DB_USER'               =>  'root',      	// 用户名
    'DB_PWD'                =>  'bf6598ba03',    		// 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'zb_',    		// 数据库表前缀
	'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
	'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
    
	/* 数据缓存设置 */
	'DATA_CACHE_TYPE'       =>  'Memcache',  	// 数据缓存类型,支持:File|Db|Apc|Memcache|Shmop|Sqlite|Xcache|Apachenote|Eaccelerator
	'MEMCACHED_SERVER'      =>  '127.0.0.1',    // 数据库表前缀
	'DATA_CACHE_TIME'       =>  0,      		// 数据缓存有效期 0表示永久缓存
	'DATA_CACHE_PREFIX'     =>  'zb_xingce_',   // 缓存前缀
	
	//皮肤定义
	'DEFAULT_THEME'         =>  'default',	// 默认模板主题名称

	//静态资源路径
	'TMPL_PARSE_STRING'  =>array(
		 '__PUBLIC__' 		=> '/zoobao/Public/',			// 公用文件根目录路径
		 '__CSS__'     		=> '/zoobao/Public/css/', 		// CSS类库路径
		 '__JS__'     		=> '/zoobao/Public/js/', 		// JS类库路径
		 '__IMG__'     		=> '/zoobao/Public/images/', 	// images路径
		 '__UPLOAD__' 		=> '/zoobao/Uploads/', 		// 上传路径替换规则
		 '__BOOTSTRAP__' 	=> '/zoobao/Public/bootstrap/', // 前端框架路径
		 '__UEDITOR__' 		=> '/zoobao/Public/ueditor/',	 // 编辑器路径
		
	),
	
	'URL_CASE_INSENSITIVE'  =>  false,   // 默认false 表示URL区分大小写 true则表示不区分大小写
);