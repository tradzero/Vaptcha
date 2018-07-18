## 2017-12-22 v1.2.1

- 修正sdk的变量名称错误
- 修改demo使用get路由，避免为开启`PATHINFO`导致demo无法访问
- 修正sdk接口返回值修改导致的demo接口出错的问题

## 2017-12-22 v1.2.0

- 修正部分注释
- 支持到php5.2及以上
- `getChallenge`接口的返回值由`json`字符串修改为`array`

## 2017-12-22 v1.2.1

- 修复32位系统`php`中毫秒时间溢出的问题
- 修复超时时间
- 重构增加`createSignatureUrl`方法