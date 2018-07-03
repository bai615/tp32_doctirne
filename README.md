# tp32_doctirne
thinkphp3.2.3 Doctrine\ORM

## 安装说明：

1、下载程序

git clone https://github.com/bai615/tp32_doctirne.git

cd tp32_doctirne


2、安装依赖库文件

composer install -vvv 或者 composer update -vvv

3、设置配置文件

vim Application\Common\Conf\config.php

```
return array(
    // 添加数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'database name', // 数据库名
    'DB_USER'   => 'user name', // 用户名
    'DB_PWD'    => 'password', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => '', // 数据库表前缀
);
```

4、运行项目

php -S 127.0.0.1:8080


集成到自己项目的具体步骤，请下载源码后查看：thinkphp3.2.3 DoctrineORM.pdf



参考文章：thinkphp5 Doctrine\ORM                               
参考文章地址：http://www.thinkphp.cn/extend/1066.html


