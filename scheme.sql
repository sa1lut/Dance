create table `Customer`(
`id` integer primary key AUTO_INCREMENT,
`login` varchar(15) unique NOT NULL,
`password` varchar(255) NOT NULL,
`type` varchar(10) NOT NULL
);

create table `Position`(
`id` integer primary key AUTO_INCREMENT,
`title` varchar(15) NOT NULL,
`salary` numeric NOT NULL
);

create table `Employee`(
`id` integer primary key AUTO_INCREMENT,
`name` varchar(15) NOT NULL,
`last_name` varchar(20) NOT NULL,
`birthday` date NOT NULL,
`telephone` varchar(10) NOT NULL,
`address` varchar(30) NOT NULL,
`position_id` integer NOT NULL,
`customer_id` integer NOT NULL,
foreign key(`customer_id`) references `Customer` (`id`) ON DELETE CASCADE,
foreign key(`position_id`) references `Position` (`id`) ON DELETE CASCADE
);

create table `Client`(
`id` integer primary key AUTO_INCREMENT,
`name` varchar(15) NOT NULL,
`last_name` varchar(20) NOT NULL,
`birthday` date NOT NULL,
`customer_id` integer NOT NULL,
foreign key(`customer_id`) references `Customer` (`id`) ON DELETE CASCADE
);

create table `Subscription`(
`id` integer primary key AUTO_INCREMENT,
`title` varchar(15) NOT NULL,
`price` numeric NOT NULL
);

create table `Client_subscription`(
`id` integer primary key AUTO_INCREMENT,
`client_id` integer NOT NULL,
`subscription_id` integer NOT NULL,
foreign key(`client_id`) references `Client` (`id`) ON DELETE CASCADE,	
foreign key(`subscription_id`) references `Subscription` (`id`) ON DELETE CASCADE
);



insert into `Customer` (`login`, `password`, `type`) values
('admin', 'admin', 'admin'),
('elena', '123', 'user'),
('andrew', '123', 'employee');

insert into `Position` (`title`, `salary`) values
('manager', 12000);

insert into `Employee` (`name`, `last_name`, `birthday`, `telephone`, `address`, `position_id`, `customer_id`) values
('Andrew', 'Pupkin', '2000-10-03', 9651234523, 'Pushkina, 16', 1, 3);

insert into `Client` (`name`, `last_name`, `birthday`, `customer_id`) values
('Elena', 'Golovach', '2003-12-12', 2);

insert into `Subscription` (`title`, `price`) values
('full', 12000);
