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
