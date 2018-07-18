# vaptcha扩展

该扩展包为vaptcha的laravel方便扩展, 可能具有比较高的定制性, 比如输出的响应格式, 路由的地址等, 如有需求可自行fork进行修改或者提交issues, 如果我有空的话可以稍微处理下

## 安装

`composer require newone/vaptcha`

## 使用

安装后laravel会在auto discover里自动检索到该包的service provider.  
执行`php artisan vendor:publish` 找到对应的包 复制一份配置文件到你的项目中.  
按照配置文件内的example, 分别有单验证单元及多验证单元的相关事例.  

对应的路由地址 `yourdomain.test/api/vaptcha` 此为前端获取vaptcha相关配置路由  
`yourdomain.test/api/vaptcha/down` 此为宕机模式路由  

当设置为多验证单元时 需要增加source的参数 用来后端选择对应的验证单元  
例如: `yourdomain.test/api/vaptcha?source=ios`