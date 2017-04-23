create procedure jiaoyi(outcount varchar(30),incount varchar(30),transmoney float)
begin
set @outmoney = select money from zhanghu where name=outcount;
update zhanghu set money = money-transmoney where name=outcount;
update zhanghu set money = money+transmoney where name=incount;

end;$