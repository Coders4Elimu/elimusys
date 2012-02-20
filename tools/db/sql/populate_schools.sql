-- populates elimudb with schools

-- mySchool
insert into addresses value (null,'0659828606','Paris','Fance','','contact@mySchool.com','0187652443','Ile de France','01 rue du Faubourg','75462');
insert into schools values (null,'0167930863','mySchool','www.mySchool.com',(select id from addresses where email='contact@mySchool.com'));

-- mySchool employees
insert into addresses value (null,'0623823406','Paris','Fance','','peter.anderson@mySchool.com','0185452482','Ile de France','01 rue de la Fontaine','94470');
insert into persons value (null,now(),'Peter','Male','Anderson','','Mr','EMPLOYEE',(select id from addresses where email='peter.anderson@mySchool.com'));
insert into schoolemployees value ('Teacher',(select id from persons where firstName='Peter' and lastName='Anderson'),(select id from schools where name='mySchool'));
insert into addresses value (null,'0622673986','Bourg La Reine','Fance','','marc.andrew@mySchool.com','0235562652','Ile de France','13 rue Leclerc','92310');
insert into persons value (null,now(),'Marc','Male','Andrew','','Mr','EMPLOYEE',(select id from addresses where email='marc.andrew@mySchool.com'));
insert into schoolemployees value ('Director',(select id from persons where firstName='Marc' and lastName='Andrew'),(select id from schools where name='mySchool'));
insert into addresses value (null,'0699656998','Bagneux','Fance','','elisabeth.taylor@mySchool.com','0155534652','Ile de France','26 rue du Jardin','98760');
insert into persons value (null,now(),'Elisabeth','Female','Taylor','','Mr','EMPLOYEE',(select id from addresses where email='elisabeth.taylor@mySchool.com'));
insert into schoolemployees value ('Teacher',(select id from persons where firstName='Elisabeth' and lastName='Taylor'),(select id from schools where name='mySchool'));
