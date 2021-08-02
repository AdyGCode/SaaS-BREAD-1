/* Create the database user and database with required privileges
 *  filename: db_create.sql
 */

CREATE DATABASE IF NOT EXISTS `saas_bread`;
CREATE USER IF NOT EXISTS 'saas_bread'@'localhost' IDENTIFIED BY 'saasPassword';
FLUSH PRIVILEGES;

GRANT USAGE ON *.* TO 'saas_bread'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0
    MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

FLUSH PRIVILEGES;

GRANT ALL PRIVILEGES ON `saas\_bread`.* TO 'saas_bread'@'localhost';
FLUSH PRIVILEGES ;
