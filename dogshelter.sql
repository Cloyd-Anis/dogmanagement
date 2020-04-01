CREATE DATABASE dogshelter;
USE dogshelter;

CREATE TABLE STAFF(
	staffID int AUTO_INCREMENT,
	FName varchar(30) NOT NULL,
	LName varchar(64) NOT NULL,
	MI char NOT NULL,
	contact varchar(11) NOT NULL,
	email varchar(64) NOT NULL,
	address varchar(300) NOT NULL,
	employ_date date,
	
	CONSTRAINT STAFF_pk PRIMARY KEY(staffID)
);

CREATE TABLE DOG(
	dogID int AUTO_INCREMENT,
	age_group ENUM('Less than 6 months','6-18 months','1-3 years','6-10+ years')NOT NULL,
	name text(30) NOT NULL,
	breed varchar(30) NOT NULL,
	color ENUM('Brown','Red','Black','White','Gold','Yellow','Cream','Blue','Grey') NOT NULL,
	marking ENUM('Color and Tan','BiColor','TriColor','Merle','Tuxedo','Harlequin','Spotted','Flecked/Ticked/Speckled','Brindle','Saddle/Blanket','Sable')NOT NULL,
	birth_date date,
	sex ENUM('Male','Female') NOT NULL,
	size_group ENUM('Toy','Small','Medium','Large','Extra Large') NOT NULL,
	weight decimal(3,2) NOT NULL,
	height decimal(3,2) NOT NULL,
	length decimal(2,1) NOT NULL,
	status ENUM('Active','Deceased')DEFAULT 'Active' NOT NULL,
	created_at date NOT NULL,
	updated_at date NOT NULL,
	staffID int,
	
	CONSTRAINT DOG_pk PRIMARY KEY(dogID),
	CONSTRAINT DOG_fk FOREIGN KEY (staffID) REFERENCES STAFF(staffID)
);

CREATE TABLE VETERINARIAN(
	vetID int AUTO_INCREMENT,
	FName varchar(32) NOT NULL,
	LName varchar(32) NOT NULL,
	MI char,
	contact varchar(11) NOT NULL,
	email varchar(64) NOT NULL,
	clinic varchar(255) NOT NULL,
	
	CONSTRAINT VETERINARIAN_pk PRIMARY KEY(vetID)
);

CREATE TABLE CONSULT(
	consultID int AUTO_INCREMENT,
	dogID int,
	vetID int,
	consult_date date,
	dog_condition text NOT NULL,
	total_cost decimal(6,2) NOT NULL,
	payment_status ENUM('Paid','Pending')Default 'Pending' NOT NULL,
	
	CONSTRAINT CONSULT_pk PRIMARY KEY(consultID),
	CONSTRAINT CONSULT_fk1 FOREIGN KEY(dogID) REFERENCES DOG (dogID),
	CONSTRAINT CONSULT_fk2 FOREIGN KEY(vetID) REFERENCES VETERINARIAN(vetID)
);

CREATE TABLE VACCINATION(
	vacc_id int AUTO_INCREMENT,
	vacc_ave_cost decimal(5,2) NOT NULL,
	vaccName varchar(128) NOT NULL,
	vacc_desc varchar(128) NOT NULL,
	vacc_dosage decimal(5,2) NOT NULL,
	next_visit date,
	
	CONSTRAINT VACCINATION_pk PRIMARY KEY(vacc_id)
);

CREATE TABLE PRESCRIPTION(
	prescID int AUTO_INCREMENT,
	generic_name varchar(64) NOT NULL,
	brand_name varchar(64) NOT NULL,
	dosage decimal(3,2)NOT NULL,
	dosage_qty int NOT NULL,
	dosage_freq enum('per day','per week','per month'),
	presc_desc varchar(128) NOT NULL,
	
	CONSTRAINT PRESCRIPTION_pk PRIMARY KEY(prescID)
);

CREATE TABLE DOG_PROCEDURE(
	procID int AUTO_INCREMENT,
	proc_ave_cost int NOT NULL,
	procName varchar(64) NOT NULL,
	proc_desc int NOT NULL,
	
	CONSTRAINT DOG_PROCEDURE_pk PRIMARY KEY(procID)
);
