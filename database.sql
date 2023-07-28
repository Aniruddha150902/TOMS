CREATE TABLE ADMIN(ADMIN_ID INTEGER PRIMARY KEY AUTO_INCREMENT,ADMIN_NAME VARCHAR(255) NOT NULL,ADMIN_EMAIL 
VARCHAR(255) NOT NULL UNIQUE,ADMIN_PASSWORD VARCHAR(16) NOT NULL);

CREATE TABLE FINE_TICKETS(FINE_ID INTEGER PRIMARY KEY AUTO_INCREMENT,FINE_DESCRIPTION VARCHAR(255) NOT NULL,
FINE_AMOUNT DECIMAL(10,2) NOT NULL);

CREATE TABLE VIOLATIONS(NOTICE_ID INTEGER PRIMARY KEY AUTO_INCREMENT,VEHICLE_ID INTEGER,FOREIGN KEY(VEHICLE_ID)
 REFERENCES VEHICLE(VEHICLE_ID) ON DELETE CASCADE,FINE_ID INTEGER,FOREIGN KEY(FINE_ID) REFERENCES FINE_TICKETS
 (FINE_ID),OFFICER_ID INTEGER,FOREIGN KEY(OFFICER_ID) REFERENCES TPO(OFFICER_ID) ON DELETE SET NULL,PLACE 
 VARCHAR(255) NOT NULL,DATE VARCHAR(20),STATUS VARCHAR(8) NOT NULL DEFAULT 'NOT PAID');

CREATE TABLE VEHICLE(VEHICLE_ID INTEGER PRIMARY KEY AUTO_INCREMENT,LICENSE_NUMBER VARCHAR(10) NOT NULL 
UNIQUE,VEHICLE_TYPE VARCHAR(255) NOT NULL,VEHICLE_MODEL VARCHAR(255) NOT NULL,OWNER_ID INTEGER,
FOREIGN KEY(OWNER_ID) REFERENCES OWNER(OWNER_ID) ON DELETE SET NULL);

CREATE TABLE OWNER(OWNER_ID INTEGER PRIMARY KEY AUTO_INCREMENT,OWNER_NAME VARCHAR(255) NOT NULL,DL_NO VARCHAR(15) 
NOT NULL UNIQUE,OWNER_EMAIL VARCHAR(255) NOT NULL UNIQUE,PHONE_NO BIGINT NOT NULL UNIQUE);

CREATE TABLE TPO (OFFICER_ID INTEGER PRIMARY KEY AUTO_INCREMENT,OFFICER_NAME VARCHAR(255) NOT NULL,OFFICER_EMAIL 
VARCHAR(255) NOT NULL UNIQUE,OFFICER_PASSWORD VARCHAR(16) NOT NULL,POLICE_STATION VARCHAR(255) NOT NULL);

-- INSERT INTO TPO(OFFICER_NAME,OFFICER_EMAIL,OFFICER_PASSWORD,POLICE_STATION) VALUES
-- ("IWENF","WEOIFEN@SIF","WIENF2398","SFIJSNFIW"),
-- ("JWIENF","EWINF@SD","SFWIE9238","SIWEW EWIN"),
-- ("SDFNWEU","WEN923@SDINFI","FWEUNW2938","WEN INW");

-- INSERT INTO OWNER(OWNER_NAME,DL_NO,OWENR_EMAIL,PHONE_NO) VALUES
-- ("AMOGH","SD2398231945","amogh232@gmial.com",9384298923),
-- ("Austin Briggs","KD9248923276","driggs45@yahoo.com",9899283891);

-- INSERT INTO VEHICLE(LICENSE_NUMBER,VEHICLE_TYPE,VEHICLE_MODEL,OWNER_ID) VALUES
-- ("SDJIOF938","SODNFWEW","SDFNWEU",8),
-- ("SDFNE238","KMWOE","FNWEFIUWEN",11),
-- ("KMDFO8923","FFIWEH","NJIFIWEN",8);

-- INSERT INTO FINE_TICKETS (FINE_ID, FINE_DESCRIPTION, FINE_AMOUNT) VALUES
-- (100, 'Revenue License to be displayed on motor vehicles and produced when required.', 1500.00),
-- (102, 'Driving a special purpose vehicle without obtaining a licence.', 1000.00),
-- (103, 'Failure to obtain authorization to drive a vehicle loaded with chemicals, hazardous waste, &amp;e.', 2000.00),
-- (104, 'Failure to have a Licence to drive a specific class of vehiceles.', 1000.00),
-- (105, 'Failure to carry a Driving Licence when driving.', 2000.00),
-- (106, 'Driving a special purpose vehicle without obtaining a licence', 2000.00),
-- (107, 'Failure to comply with road rules.', 2000.00),
-- (108, 'Not compliance with Speed limits provisions.', 3000.00),
-- (109, 'Excessive emission of smoke &amp;c.', 1000.00);

INSERT INTO ADMIN(ADMIN_NAME,ADMIN_EMAIL,ADMIN_PASSWORD) VALUES('ANIRUDDHA','anibhu2134@gmail.com', 'abcd@1234');

Create Trigger before_insert_fine_amount   
BEFORE INSERT ON FINE_TICKETS FOR EACH ROW  
BEGIN  
IF NEW.FINE_AMOUNT < 0 THEN SET NEW.FINE_AMOUNT = 0;  
END IF;  
END

delimiter $$
CREATE TRIGGER  Check_Phno  BEFORE INSERT ON OWNER 
FOR EACH ROW
BEGIN
IF NEW.PHONE_NO < 1000000000 THEN
SIGNAL SQLSTATE '45000'
SET MESSAGE_TEXT = 'ERROR: 
         PHONE NUMBER MUST BE OF 10 DIGITS!';
END IF;
END; $$
delimiter; 