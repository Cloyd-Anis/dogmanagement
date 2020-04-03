create database dogshelter;
use dogshelter;

create table dogs(
    dog_id int auto_increment,
    name varchar(30) not null,
    breed varchar(30),
    color enum('Brown','Red','Black','White','Gold','Yellow','Cream','Blue','Grey') NOT NULL,
    marking ENUM('Color and Tan','BiColor','TriColor','Merle','Tuxedo','Harlequin','Spotted','Flecked/Ticked/Speckled','Brindle','Saddle/Blanket','Sable')NOT NULL,
    sex ENUM('Male','Female') NOT NULL,
    weight decimal(5,2) NOT NULL,
    height decimal(5,2) NOT NULL,
    length decimal(5,2) NOT NULL,
    age_group ENUM('Less than 6 months','6-18 months','1-3 years','6-10+ years')NOT NULL,
    image blob not null,
    status ENUM('Active','Inactive', 'Adopted')DEFAULT 'Active' NOT NULL,
    created_at date NOT NULL,
    constraint pk_dogs primary key(dog_id)
);

create table veterinarians(
    vet_id int auto_increment,
    fname varchar(32) NOT NULL,
    mi char NOT NULL,
    lname varchar(32) NOT NULL,
    contact int(11) NOT NULL,
    email varchar(64) NOT NULL,
    clinic_name varchar(64) NOT NULL,
    clinic_address varchar(64) NOT NULL,
    constraint pk_veterinarian primary key (vet_id)
);

create table consults(
    consult_id int AUTO_INCREMENT,
    dog_id int,
    vet_id int,
    dog_condition text NOT NULL,
    total_cost decimal(6,2) NOT NULL,
    consult_date date NOT NULL,
    next_visit date,

    constraint pk_consults primary key(consult_id),
    constraint fk1_consults foreign key(dog_id) references dogs(dog_id),
    constraint fk2_consults foreign key(vet_id) references veterinarians(vet_id)
);

create table prescriptions(
    presc_id int auto_increment,
    dog_id int,
    consult_id int,
    presc_desc longtext NOT NULL,
    status enum("Active", "Inactive") default "Active",
    constraint pk_prescription primary key(presc_id),
    constraint fk1_prescription foreign key(dog_id) references dogs(dog_id),
    constraint fk2_prescription foreign key(consult_id) references consults(consult_id)
);

create table dog_procedures(
    proc_id int auto_increment,
    consult_id int,
    dog_id int,
    proc_ave_cost int NOT NULL,
    proc_names varchar(64) NOT NULL,
    proc_desc text NOT NULL,
    constraint pk_dog_procedures primary key(proc_id),
    constraint fk1_dog_procedures foreign key(consult_id) references consults(consult_id),
    constraint fk2_dog_procedures foreign key(dog_id) references dogs(dog_id)
);

create table dog_parents(
    dogParents_id int auto_increment,
    dog_id int,
    parent_firstname varchar(30) NOT NULL,
    parent_mi char NOT NULL,
    parent_lastname varchar(30) NOT NULL,
    parent_address varchar(255) NOT NULL,
    parent_email varchar(50) NOT NULL,
    parent_contact long NOT NULL,
    constraint pk_dogParents primary key (dogParents_id),
    constraint fk_dogParents foreign key (dog_id) references dogs(dog_id)
);


create table staff(
    staff_id int auto_increment,
    fname varchar(30) NOT NULL,
    lname varchar(64) NOT NULL,
    mi char NOT NULL,
    contact long NOT NULL,
    email varchar(64) NOT NULL,
    address text NOT NULL,
    employment_status enum('Hired', 'Volunteer'),
    staff_status enum('Active', 'Inactive'),
    employ_date date,
    CONSTRAINT STAFF_pk PRIMARY KEY(staff_id)
);


create table vaccined_dogs(
    vacc_id int AUTO_INCREMENT,
    dog_id int NOT NULL,
    vet_id int NOT NULL,
    vacc_name varchar(128) NOT NULL,
    vacc_desc varchar(128) NOT NULL,
    vacc_ave_cost decimal(5,2) NOT NULL,
    date_of_vaccination date NOT NULL,
    next_visit date,
    constraint pk_vaccined_dogs primary key(vacc_id),
    constraint fk1_vaccined_dogs foreign key(dog_id) references dogs(dog_id),
    constraint fk2_vaccined_dogs foreign key(vet_id) references veterinarians(vet_id)
    
);
