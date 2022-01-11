# mvc
php最简洁的mvc框架，为什么不需要复杂的框架呢？ 对于小网站东西少不需要，大型网站类似新浪、腾讯使用框架，需要加载一大堆文件又影响性能。

## 安装

> git clone https://github.com/lessok/mvc.git

### db类使用教程

1. nginx.conf的server下增加
> ```nginx
> if (!-e $request_filename){
>   rewrite  ^(.*)$  /index.php/$1  last;   
>   break;
> }
> ```
2. 目录说明

   config目录配置文件

   config\route.php 路由 文件

      默认请求路径 $controller.[$subController]/$action/参数1/参数值1/参数2/参数值2/，并且会将请求的参数填入到$_GET数组。  

      默认$_GET['c']为控制器， $_GET['a']为执行函数action    

   app\controller目录控制层

   app\model 数据模型层

   app\view 视图层

   boot.php  初始化文件

### 示例

​    http://localhost/index/Index

​     带有多级控制层

​    http://localhost/user.Index/info/id/2/name/5

​    
