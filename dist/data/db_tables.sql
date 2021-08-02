/* Create the saas_bread database users table
*  filename: db_tables.sql
*/
USE `saas_bread`;
CREATE TABLE saas_bread.users
(
    id          BIGINT UNSIGNED AUTO_INCREMENT,
    given_name  VARCHAR( 32) NOT NULL,
    family_name VARCHAR( 32) DEFAULT NULL,
    email       VARCHAR(316) UNIQUE  NOT NULL,
    age         INTEGER(  3) DEFAULT 0,
    gender      char   (  1) DEFAULT NULL, /* M,F,O,N,T,X */
    location    VARCHAR( 64) DEFAULT NULL,
    created_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
    updated_at  TIMESTAMP    NULL,
    PRIMARY KEY (id)
);
/* Done */
