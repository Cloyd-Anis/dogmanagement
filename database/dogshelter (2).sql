    create database dogshelter;

    use dogshelter;

    CREATE TABLE STAFF(
        staffID int AUTO_INCREMENT,
        FName varchar(30) NOT NULL,
        LName varchar(64) NOT NULL,
        MI char NOT NULL,
        contact int(11) NOT NULL,
        email varchar(64) NOT NULL,
        address text NOT NULL,
        employment_status enum('Hired', 'Volunteer'),
        staff_status enum('Active', 'Inactive'),
        employ_date date,
        CONSTRAINT STAFF_pk PRIMARY KEY(staffID)
    );

    create table veterinarian(
        vetID int auto_increment,
        FName varchar(32) NOT NULL,
		MI char NOT NULL,
        LName varchar(32) NOT NULL,
        contact int(11) NOT NULL,
        email varchar(64) NOT NULL,
        clinic_name varchar(64) NOT NULL,
        clinic_address varchar(64) NOT NULL,
        constraint pk_veterinarian primary key (vetID)
    );

        CREATE TABLE DOG(
        dogID int AUTO_INCREMENT,
        age_group ENUM('Less than 6 months','6-18 months','1-3 years','6-10+ years')NOT NULL,
        dog_name varchar(30) NOT NULL,
        breed varchar(30) NOT NULL,
        color ENUM('Brown','Red','Black','White','Gold','Yellow','Cream','Blue','Grey') NOT NULL,
        marking ENUM('Color and Tan','BiColor','TriColor','Merle','Tuxedo','Harlequin','Spotted','Flecked/Ticked/Speckled','Brindle','Saddle/Blanket','Sable')NOT NULL,
        sex ENUM('Male','Female') NOT NULL,
        weight decimal(3,2) NOT NULL,
        height decimal(3,2) NOT NULL,
        length decimal(2,1) NOT NULL,
        status ENUM('Active','Inactive', 'Adopted')DEFAULT 'Active' NOT NULL,
        created_at date NOT NULL,

        CONSTRAINT DOG_pk PRIMARY KEY(dogID)
    );

    CREATE TABLE CONSULT(
        consultID int AUTO_INCREMENT,
        dogID int,
        vetID int,
        dog_condition text NOT NULL,
        total_cost decimal(6,2) NOT NULL,
        consult_date date NOT NULL,
        next_visit date,

        CONSTRAINT CONSULT_pk PRIMARY KEY(consultID),
        CONSTRAINT CONSULT_fk2 FOREIGN KEY(vetID) REFERENCES VETERINARIAN(vetID),
        constraint consult_fk1 foreign key(dogID) references dog(dogID)
    );

    CREATE TABLE PRESCRIPTION(
        prescID int AUTO_INCREMENT,
        consultID int,
        vetID int,
        generic_name varchar(64) NOT NULL,
        brand_name varchar(64) NOT NULL,
        dosage decimal(3,2)NOT NULL,
        dosage_freq text,
        presc_desc varchar(128) NOT NULL,
        
        CONSTRAINT PRESCRIPTION_pk PRIMARY KEY(prescID),
        constraint prescription_fk1 foreign key (vetID) references veterinarian(vetID),
        constraint prescription_fk2 foreign key (consultID) references consult(consultID)
    );

        CREATE TABLE DOG_PROCEDURE(
        procID int AUTO_INCREMENT,
        consultID int,
        vetID int,
        dogID int,
        proc_ave_cost int NOT NULL,
        procName varchar(64) NOT NULL,
        proc_desc int NOT NULL,
        
        CONSTRAINT DOG_PROCEDURE_pk PRIMARY KEY(procID),
        constraint dog_procedure_fk1 foreign key (dogID) references dog(dogID),
        constraint dog_procedure_fk2 foreign key (consultID) references consult(consultID),
        constraint dog_procedure_fk3 foreign key (vetID) references veterinarian(vetID)
    );
    create table dog_parents(
        dogParentsID int auto_increment,
        dogID int,
        FName varchar(30) NOT NULL,
        MI char NOT NULL,
        LName varchar(30) NOT NULL,
        address varchar(255) NOT NULL,
        email varchar(50) NOT NULL,
        contact int(11) NOT NULL,
        constraint pk_dogParents primary key (dogParentsID),
        constraint fk_dogParents foreign key (dogID) references dog(dogID)
    );

    CREATE TABLE vaccined_dogs(
        vacc_id int AUTO_INCREMENT,
        dogID int NOT NULL,
        vetID int NOT NULL,
        vaccName varchar(128) NOT NULL,
        vacc_desc varchar(128) NOT NULL,
        vacc_dosage decimal(5,2) NOT NULL,
        vacc_ave_cost decimal(5,2) NOT NULL,
        date_of_vaccination date NOT NULL,
        next_visit date,
        
        CONSTRAINT vaccinedDogs_pk PRIMARY KEY(vacc_id),
        constraint vaccinedDogs_fk1 foreign key (dogID) references dog(dogID),
        constraint vaccinedDogs_fk2 foreign key (vetID) references veterinarian(vetID)
    );





