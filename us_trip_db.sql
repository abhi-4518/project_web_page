
-- Create DB Named clg_trip

CREATE DATABASE clg_trip;

-- Create Table us_trip

CREATE TABLE us_trip (
    srno INT AUTO_INCREMENT PRIMARY KEY,
    id VARCHAR(50),
    name VARCHAR(100),
    gender VARCHAR(10),
    age INT,
    email VARCHAR(100),
    phone VARCHAR(15),
    other TEXT,
    tstamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

