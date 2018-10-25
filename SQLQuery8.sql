
drop database SQLpractice;

create database SQLpractice;
use SQLpractice
go

	create table student(
	st_rollno numeric(5),
	st_name varchar(20),
	st_dob date,
	st_phno numeric
	);

	insert into student(st_rollno, st_name,st_dob,st_phno) 
			     values(101,'sai','1996/01/26',9666270087);

	select * from student;

	select * from student for xml path('student');

	truncate table student;
	select * from student;

	drop table student;
	select * from student;

	create table teachers(teacher_id numeric(5),
	                       name varchar(20),
						   joindate date,
						   branch varchar(5),
						   experience numeric(2));

	select * from teachers;

	alter table teachers add  phn_no numeric(10);
	select * from teachers;

	
	select * from teachers;
	exec sp_rename 'teachers.phn_no','phone_number','column';
	select * from teachers;

	select * from teachers;
	alter table teachers drop column branch;
	select * from teachers;

	--24th oct 2018
	select * from student;
	select * from teachers;

	alter table student add teacher_id int;

	alter table teachers alter column teacher_id numeric(3) not null;
	alter table teachers add constraint pk1_teacher primary key(teacher_id);

	insert into teachers(teacher_id,name,joindate,phone_number)
	             values(1,'Ashok','1996/01/26',9440187430)
	select * from teachers;
	drop table teachers;

	create table students(stu_id int primary key,
	                      stu_name varchar(20) unique,
	                      age numeric(3) check(age between 4 and 16),
						  parent_phno numeric(10) not null );

    insert into students(stu_id,stu_name,age,parent_phno)
	             values(1,'chandrakanth',15,9848033551),
				        (2,'vishnu',12,6300630022),
						(3,'rameshwari',15,8448005188);

		select * from students;

		insert into students values(4,'vishnu',15,9898959556)

		insert into students values(4,'ganesh',17,7894561230)

		insert into students values(3,'raghunath',15,7897894561)


		create table student_intsport
		(student_id int references students(stu_id),
		 sportname varchar(15));

		insert into student_intsport(student_id,sportname)
		                 values(1,'cricket'),
						       (1,'badminton'),
							   (2,'Tennis'),
							   (3,'foot ball');

	                     select * from student_intsport;

        insert into student_intsport values(4,'football');

	    alter table students add school_name varchar(20);
		
		--default constraint
		create table teachers(teacher_id numeric(5),
	                       name varchar(20),
						   joindate date,
						   branch varchar(5),
						   experience numeric(2) default 0);

		insert into teachers(teacher_id,name,joindate,branch)
		 values(1,'Ashok','2000/01/26','IT');
		 select * from teachers;

		 --auto increment
		create table stutab_autoincr(student_id numeric(5) identity(1001,1),
		                               student_name varchar(20))

		insert into stutab_autoincr(student_name) 
		            values('Advaith'),
					       ('Rishi'),
						   ('Haneesh');
		select * from stutab_autoincr;


		select * from students;

		alter table students drop column school_name;

		select * from student;
		alter table student drop column teacher_id;
  --insert
		insert into student(st_rollno,st_name,st_dob,st_phno)
		            values(1,'surender','1995/05/16',9842045210),
					       (2,'akhil','1997/04/04',8898989870),
						   (3,'akarsh','1996/04/08',7857854785),
						   (4,'ravali','1995/08/05',6546546540),
						   (5,'raju','1991/06/29',8464094640),
						   (6,'swami','1993/11/26',9177571946),
						   (7,'hymavathi','1995/06/20',8479884789),
						   (8,'swetha','1994/06/12',9454954512),
						   (9,'shivani','1997/05/25',8454854812),
						   (10,'pavan','1995/05/27',6789657894);
				select * from student;

		insert into student values(11,'joseph','1997/04/28',null)

		insert into student values(12,'aravind',null,7878787878);

		insert into student values(13,'raghava',null,9789879878);

	--update 
	    update student set st_phno=7897897895 where st_rollno=11;
		select * from student;

	--delete
	     
		 delete student where st_dob is null;

		 select * from student;

		 delete student


		 select * from teachers;

    --select
		 select * from student;

		 select * from student where st_rollno=11;

		 select * from student where st_rollno in(1,5,6,9);

		 select * from student where st_name like '%i%'

		 select * from student where st_rollno like '_1'

		 select * from student where st_rollno between 3 and 9;

		 select top(5) * from student;

		 select top(5) st_rollno,st_name from student;

		 select * from student order by st_rollno desc;

		 select * from student order by st_name asc;

	--alias names
	      select st_rollno as registration_number, 
		  st_name as applicant_name
		  from student;

		  select * from student_intsport;

		  select s1.st_rollno,s1.st_name,s2.sportname from
		  student s1,student_intsport s2 where s1.st_rollno=s2.student_id;

          
		 create table student_marks(st_id numeric(5),
		                            st_name varchar(20),
									mid1 int ,
									mid2 int ,
									mid3 int)

			insert into student_marks(st_id,st_name,mid1,mid2,mid3)
			            values(101,'partha saradhi',24,25,19),
						      (102,'veda vyas',22,21,20),
							  (103,'prabhanjan kumar',17,18,15),
							  (104,'nuthan prasad',12,11,9),
							  (105,'vidyullekha raman',12,8,14);
insert into student_marks(st_id,st_name,mid1,mid2,mid3)
			            values(106,'dharichand',20,20,35),
							  (107,'allarakha rahman',19,19,23),
							  (108,'virat rahman',21,18,18),
							  (109,'sudha chandran',20,null,25),
							  (110,'firoj khan',null,14,19),
							  (111,'vihanth pade',13,18,null);
                  select * from student_marks;
				select st_id,st_name,(mid1+mid2+mid3) as total
				   from student_marks;

				select st_id,st_name,(mid1+mid2+mid3)/3 as average_marks
				   from student_marks;

				select * from student_marks

				--comparison 
				  select * from student_marks where mid1=mid2;

				  select * from student_marks where mid1>20 

				  select * from student_marks where mid2 !< 20;

				--logical
				-- select st_name from student where st_rollno=
				-- all(select student_id from student_intsport where sportname='foot ball')

				select st_id,mid1,mid2 from student_marks where mid1>20 and mid2>20

				select st_id,st_name,mid1,mid2 from student_marks 
				where mid1 is null or mid2 is null;


				create table student_details(first_name varchar(10),
				                             second_name varchar(10),
											 std_phnno varchar(10),
											 father_no varchar(10));

				insert into student_details(first_name,second_name,std_phnno,father_no)
				values('sai','kumar',null,'8466874076'),
				       ('vishwa','sai','7657654565','9989665633'),
					   ('varun',null,'7894567894',null),
					   ('praveen',null,null,null),
					   ('vinay','kumar',null,'8187056987');

				select * from student_details;

				alter table student_details add email_id varchar(20);
				select * from student_details;

				select first_name,ISNULL(email_id,'Sreenigha.edu.in') as email_id 
				from student_details;

				select * from student_details;
				select coalesce(first_name,second_name ) as name,
				        coalesce(std_phnno,father_no) as contact_no from student_details;

				select coalesce(first_name,second_name ) as name,
				        ISNULL( coalesce(std_phnno,father_no),'8484634346') as contact_no
						from student_details;


				select * from student_marks;

				select count(*) as total_students from student_marks;

				select max(mid2) as topscore_mid2 from student_marks;

				select min(mid1) as leastscore_mid1 from student_marks;

				select Avg(mid3) as averagescore_mid3 from student_marks;

				select sum(mid3) from student_marks; 

				select SQRT(144);

				select CONCAT(first_name,second_name) as name from student_details;

				select UPPER(first_name) as name from student_details;

			--date functions
			select GETDATE() as current_date_time

			select DATEPART(DAY,GETDATE()) as currentdate;

			select DATEPART(MONTH,GETDATE()) as currentmonth;

			select CONVERT(varchar(11),GETDATE());

			select CONVERT(varchar(11),GETDATE(),10);

			select CONVERT(varchar(11),GETDATE(),110);

			select DATEDIFF(day,'1996-01-26','2018/10/25');
			

		--string functions
		--select REPLACE(mid2,null,25) from 

	