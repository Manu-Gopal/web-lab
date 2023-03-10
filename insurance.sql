use insurance;
create table person(driver_id varchar(20),name varchar(20),address varchar(50));
alter table person add constraint primary key(driver_id);
create table car(licence varchar(20),model varchar(20),year int);
alter table car add constraint primary key(licence);
create table accident(report_no int,data varchar(50),location varchar(20));
alter table accident add constraint primary key(report_no);
create table owns(driver_id varchar(20),licence varchar(20));
create table participated(report_no int,licence varchar(20),driver_id varchar(20),damage_amount int);

alter table owns add constraint foreign key(driver_id) references person(driver_id);
alter table owns add constraint foreign key(licence) references car(licence);
alter table owns add constraint primary key(driver_id, licence);

ALTER TABLE `accident` CHANGE `report_no` `report_number` INT(11) NOT NULL;

alter table car rename to vehicle;
alter table person add column gender varchar(20);
alter table accident drop column location;
alter table participated modify damage_amount numeric(10,2);