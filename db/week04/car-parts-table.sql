-- Clean Up
DROP TABLE IF EXISTS car_brakes;
DROP TABLE IF EXISTS car_tires;
DROP TABLE IF EXISTS car_type;

-- Setup
CREATE TABLE car_type (
    id SERIAL PRIMARY KEY,
    car_make VARCHAR(256) NOT NULL,
    car_model VARCHAR(256) NOT NULL,
    car_year VARCHAR(256) NOT NULL
);

CREATE TABLE car_brakes (
    id SERIAL NOT NULL,
    car_type_id INT NOT NULL REFERENCES car_type(id),
    disc_brake VARCHAR(256),
    drum_brake VARCHAR(256),
    parking_brake VARCHAR(256),
    ABS_brake VARCHAR(256)
);

CREATE TABLE car_tires (
    id SERIAL NOT NULL,
    car_type_id INT NOT NULL REFERENCES car_type(id),
    all_season VARCHAR(256),
    all_terrain VARCHAR(256),
    low_profile VARCHAR(256),
    mud VARCHAR(256),
    performance VARCHAR(256),
    winter VARCHAR(256),
    SUV VARCHAR(256),
    truck VARCHAR(256)
);

-- Add Car Type Data

--Toyota
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Prius', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Prius', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Prius', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Prius', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Prius', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Avalon', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Avalon', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Avalon', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Avalon', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Avalon', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Corolla', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Corolla', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Corolla', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Corolla', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Corolla', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Tundra', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Tundra', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Tundra', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Tundra', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Tundra', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', '4Runner', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', '4Runner', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', '4Runner', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', '4Runner', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', '4Runner', '2020');

--Chevrolet
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Corvette', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Corvette', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Corvette', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Corevette', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Corvette', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Malibu', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Malibu', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Malibu', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Malibu', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Malibu', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Equinox', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Equinox', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Equinox', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Equinox', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Equinox', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Colorado', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Colorado', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Colorado', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Colorado', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Colorado', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Express', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Express', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Express', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Express', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Express', '2020');

--Ford
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Fusion', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Fusion', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Fusion', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Fusion', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Fusion', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Mustang', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Mustang', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Mustang', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Mustang', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Mustang', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Explorer', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Explorer', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Explorer', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Explorer', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Explorer', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'F-150', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'F-150', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'F-150', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'F-150', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'F-150', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Transit Connect', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Transit Connect', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Transit Connect', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Transit Connect', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Transit Connect', '2020');

--Honda
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'CR-V', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'CR-V', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'CR-V', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'CR-V', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'CR-V', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Civic', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Civic', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Civic', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Civic', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Civic', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Accord', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Accord', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Accord', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Accord', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Accord', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Odyssey', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Odyssey', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Odyssey', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Odyssey', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Odyssey', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Ridgeline', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Ridgeline', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Ridgeline', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Ridgeline', '2020');

--Jeep
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Renegade', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Renegade', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Renegade', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Renegade', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Renegade', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Cherokee', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Cherokee', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Cherokee', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Cherokee', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Cherokee', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Wrangler', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Wrangler', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Wrangler', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Wrangler', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Wrangler', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Compass', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Compass', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Compass', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Compass', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Compass', '2020');

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Grand Cherokee', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Grand Cherokee', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Grand Cherokee', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Grand Cherokee', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Grand Cherokee', '2020');