create table info (username varchar(15) primary key,password varchar(15),age tinyint ,xueli enum('小学及以下','中学或中专','高中','本科','硕士'),hobby set('排球','篮球','足球','地球','中国足球'),area enum('华北','华东','华南','华西','华中','西北'))


select  * from 院系 where 院系ID = (select 院系ID from 学生表  group by 院系ID )
Select * from 学生表 as t1 where 院系ID = (select 院系ID from 院系  where  院系名称 = ‘计算机系’);
select 院系名称 from 院系 where 院系ID=(select 院系ID from  学生表 group by 院系ID having count(*)=(max(select count(*) from 学生表 group by 院系ID)));



select  院系ID  from 院系,学生表 where 学生表.院系ID=院系.院系ID group by 院系ID order by count(*) desc limit 0,1;

select 性别,count(*) from 学生表 where 院系ID=(select 院系.院系ID from 院系,学生表 where 学生表.院系ID=院系.院系ID group by 院系ID order by count(*) desc limit 0,1) group by 性别;

(select 院系.院系ID from 院系,学生表 where 学生表.院系ID=院系.院系ID group by 院系ID order by count(*) desc limit 0,1)

select t1.* from 学生表 as t1 join 学生表 as t2 where t1.籍贯=t2.籍贯 and  t1.学生 ='罗弟华';