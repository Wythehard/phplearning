
-- 1，创建一个用户，user1，并授予其在所有数据库中的所有权限。并用该用户登录数据库系统，做一些验证：比如创建一个数据库db1，并在其中创建一个表，然后在对该表进行增删改查操作。
-- 2，创建一个用户，user2，并授予其在数据库db1中的所有权限。并用该用户登录数据库系统，做一些验证：比如在db1中可以做各种事情，但在另一个库中“寸步难行”。
-- 3，创建一个用户，user3，并授予其在db1的tab1表中具有添加和查询权限，但没有修改和删除权限。
-- 4，取消用户user2在数据库db1中的建表权限，并用该用户登录登录后进行测试。

-- 〉〉〉
-- 观察实验：在cmd中启动一个事务，在事务中写两条insert或delete或update语句，在执行完该2条语句后，先不执行commit，通过phpMyAdmin来观察语句是否生效。然后再执行commit或rollback语句，再用phpMyAdmin观察结果。


--1 地址填%时登陆不进去 拒绝访问
create user 'wlz1'@ '%' identified by 'wlz5694708';

-- 2，创建一个用户，user2，并授予其在数据库db1中的所有权限。并用该用户登录数据库系统，做一些验证：比如在db1中可以做各种事情，但在另一个库中“寸步难行”。

create user 'wlz2'@ '%' identified by '123';

-- 3，创建一个用户，user3，并授予其在db1的tab1表中具有添加和查询权限，但没有修改和删除权限。
create user 'wlz3'@'%' identified by '123';
grant select ,insert on db1.2db2 to 'wlz3';

-- 4，取消用户user2在数据库db1中的建表权限，并用该用户登录登录后进行测试。
start transaction;
commit;
