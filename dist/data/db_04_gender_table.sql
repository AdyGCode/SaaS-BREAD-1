/* Create the saas_bread database users table
*  filename: db_04_gender_table.sql
*/
USE `saas_bread`;
CREATE TABLE saas_bread.genders
(
    id         CHAR(1)      NOT NULL,
    name       VARCHAR(32)  NOT NULL,
    symbol     VARCHAR(4)   DEFAULT NULL,
    notes      VARCHAR(316) DEFAULT NULL,
    created_at TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP    NULL,
    PRIMARY KEY (id)
);
/* Done */

START TRANSACTION;
INSERT INTO saas_bread.genders(id, name, symbol, notes)
VALUES ("F", "Female", "♀", null),
       ("M", "Male", "♂", null),
       ("O", "Other", "⚥", null),
       ("T", "Transgender", "⚦", null),
       ("U", "Unknown", "U", null),
       ("X", "Undisclosed", "X", null);
COMMIT;
