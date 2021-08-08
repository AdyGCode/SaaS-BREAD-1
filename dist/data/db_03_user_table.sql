/* -----------------------------------------------------------------
 * Filename:    db_03_user_table.sql
 * Project:     SaaS-BREAD-1
 * Location:    dist/data
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     27/7/21
 * Description:
 *              This file creates a table "users" and then seeds it
 *              with dummy user data.
 *              The dummy data starts at ID of 20, allowing for the
 *              developer to insert specific users in IDs 1 to 19.
 *
 * Notes:
 *              This script is written in MariaDB's SQL dialect,
 *              some changes would be needed for other DBMS's.
 * ----------------------------------------------------------------- */

USE `saas_bread`;
CREATE TABLE saas_bread.users
(
    id          BIGINT UNSIGNED AUTO_INCREMENT,
    given_name  VARCHAR(32)         NOT NULL,
    family_name VARCHAR(32) DEFAULT NULL,
    email       VARCHAR(316) UNIQUE NOT NULL,
    age         INTEGER(3)  DEFAULT 0,
    gender      char(1)     DEFAULT NULL, /* M,F,O,N,T,X */
    location    VARCHAR(64) DEFAULT NULL,
    created_at  TIMESTAMP   DEFAULT CURRENT_TIMESTAMP,
    updated_at  TIMESTAMP           NULL,
    PRIMARY KEY (id)
);
/* Done */

START TRANSACTION;

INSERT INTO saas_bread.users(id, given_name, family_name, email, age, gender, location)
VALUES
    (20, 'Jacques', 'd\'Carre' 'jacques@example.com', 0, 'O', 'Paris, France'),
    (null, 'Eileen', 'Dover', 'eileen@example.com', 0, 'f', 'Dover, UK'),
    (null, 'Robin', 'Money', 'Robin.Money@example.com', 83, 'T', 'Sawākin, SD'),
    (null, 'Manuel', 'Transmission', 'Manuel.Transmission@example.com', 97, 'F', 'Kalandia, PS'),
    (null, 'Mark', 'Mywordz', 'Mark.Mywordz@example.com', 57, 'M', 'East Lake, US'),
    (null, 'Rita', 'Paper', 'Rita.Paper@example.com', 49, 'T', 'Lebanon, US'),
    (null, 'Myles', 'Long', 'Myles.Long@example.com', 44, 'M', 'Takhatgarh, IN'),
    (null, 'Taylor', 'Mayd', 'Taylor.Mayd@example.com', 95, 'M', 'Cincinnati, US'),
    (null, 'Reed', 'Undant', 'Reed.Undant@example.com', 50, 'O', 'Kaizuka, JP'),
    (null, 'Bea', 'Fuddle', 'Bea.Fuddle@example.com', 60, 'F', 'San José de Ocoa, DO'),
    (null, 'Kathy', 'Drull', 'Kathy.Drull@example.com', 82, 'F', 'Mushie, CD'),
    (null, 'Hy', 'Marx', 'Hy.Marx@example.com', 39, 'M', 'Carnaxide, PT'),
    (null, 'Della', 'Where', 'Della.Where@example.com', 46, 'F', 'Jurupa Valley, US'),
    (null, 'Pat', 'Onaback', 'Pat.Onaback@example.com', 46, 'M', 'Coon Rapids, US'),
    (null, 'Sue', 'Ridge', 'Sue.Ridge@example.com', 36, 'M', 'Kreuzlingen, CH'),
    (null, 'Hart', 'Breaker', 'Hart.Breaker@example.com', 54, 'M', 'Multai, IN'),
    (null, 'Park', 'Bench', 'Park.Bench@example.com', 98, 'M', 'Ingolstadt, DE'),
    (null, 'Anne', 'Chovie', 'Anne.Chovie@example.com', 99, 'U', 'Danville, US'),
    (null, 'Heidi', 'Clare', 'Heidi.Clare@example.com', 37, 'F', 'Ouarzazat, MA'),
    (null, 'Burton', 'Ernie', 'Burton.Ernie@example.com', 61, 'M', 'Konnūr, IN'),
    (null, 'Ann', 'Tenna', 'Ann.Tenna@example.com', 78, 'U', 'Esfarāyen, IR'),
    (null, 'Helen', 'Wheels', 'Helen.Wheels@example.com', 20, 'F', 'Sonārgaon, BD'),
    (null, 'Jack', 'O\'Lantern', 'Jack.OLantern@example.com', 87, 'M', 'Michelstadt, DE'),
    (null, 'Ulee', 'Daway', 'Ulee.Daway@example.com', 45, 'X', 'Esperanza, AR'),
    (null, 'Dinah', 'Sore', 'Dinah.Sore@example.com', 54, 'U', 'Monrovia, LR');
COMMIT;
