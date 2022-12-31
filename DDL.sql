-- DATABASE --
CREATE DATABASE car_rent_sys;


-- admin --
CREATE TABLE car_rent_sys.admin(
    ssn VARCHAR(30) NOT NULL,
    fname VARCHAR(45) NOT NULL,
    lname VARCHAR(45),
    email VARCHAR(255) unique,
    password VARCHAR(255),
    PRIMARY KEY (ssn)
);


-- vehicle --
CREATE TABLE car_rent_sys.vehicle(
    vehicle_ID INT NOT NULL AUTO_INCREMENT,
    plate_ID VARCHAR(255) NOT NULL,
    daily_price int,
    year_model YEAR,
    color VARCHAR(45),
    line VARCHAR(255),
    status VARCHAR(255),
    motor VARCHAR(255),
    brand VARCHAR(100),
    admin_ssn VARCHAR(30),
    PRIMARY KEY (vehicle_ID),
    FOREIGN KEY (admin_ssn) REFERENCES admin(ssn) ON DELETE CASCADE ON UPDATE CASCADE
    );

    
-- office --
CREATE TABLE car_rent_sys.office(
    number INT NOT NULL,
    location VARCHAR(255) NOT NULL,
    PRIMARY KEY (number)
    );


-- is_located --
CREATE TABLE car_rent_sys.is_located(
    vehicle_ID INT NOT NULL,
    office_number INT NOT NULL,
    PRIMARY KEY (vehicle_ID, office_number),
    FOREIGN KEY (vehicle_ID) REFERENCES vehicle(vehicle_ID) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN key (office_number) REFERENCES office(number) ON DELETE CASCADE ON UPDATE CASCADE
);


-- customer --
CREATE TABLE car_rent_sys.customer(
    license VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    fname VARCHAR(45) NOT NULL,
    lname VARCHAR(45),
    city VARCHAR(255),
    country VARCHAR(255),
    bdate date,
    PRIMARY KEY (license)
);


-- cust_phone_no --
CREATE TABLE car_rent_sys.cust_phone_no(
    cust_license VARCHAR(255) NOT NULL,
    phone_no VARCHAR(15) NOT NULL,
    PRIMARY KEY (cust_license, phone_no)
);


-- reservation --
CREATE TABLE car_rent_sys.reservation(
    reservation_ID INT NOT NULL AUTO_INCREMENT,
    pickupdate date NOT NULL,
    pickuplocation VARCHAR(255) NOT NULL,
    returndate date NOT NULL,
    reservedate date NOT NULL,
    customer_license VARCHAR(255),
    vehicle_no int,
    PRIMARY KEY (reservation_ID),
    FOREIGN KEY (customer_license) REFERENCES customer(license) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (vehicle_no) REFERENCES vehicle(vehicle_ID) ON DELETE CASCADE ON UPDATE CASCADE
);



-- rent --
CREATE TABLE car_rent_sys.rent(
    rent_ID int NOT NULL AUTO_INCREMENT,
    customer_license VARCHAR(255),
    vehicle_no int,
    paydate date NOT NULL,
    paymethod VARCHAR(255),
    payment int,
    reserve_ID INT,
    PRIMARY KEY (rent_ID, customer_license, vehicle_no, reserve_ID),
    FOREIGN KEY (customer_license) REFERENCES customer(license) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (vehicle_no) REFERENCES vehicle(vehicle_ID) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (reserve_ID) REFERENCES reservation(reservation_ID) ON DELETE CASCADE ON UPDATE CASCADE
);

