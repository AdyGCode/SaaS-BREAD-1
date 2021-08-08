/* -----------------------------------------------------------------
 * Filename:    db_02_create.sql
 * Project:     SaaS-BREAD-1
 * Location:    dist/data
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     27/7/21
 * Description:
 *              This file creates a new database user and database.
 *              It also grants all the required privileges to the
 *              database user so it may be used to create new
 *              tables and other database operations.
 *
 * Notes:
 *              This script is written in MariaDB's SQL dialect,
 *              some changes would be needed for other DBMS's.
 * ----------------------------------------------------------------- */


CREATE DATABASE IF NOT EXISTS `saas_bread`;
CREATE USER IF NOT EXISTS 'saas_bread'@'localhost' IDENTIFIED BY 'saasPassword';
FLUSH PRIVILEGES;

GRANT USAGE ON *.* TO 'saas_bread'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0
    MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

FLUSH PRIVILEGES;

GRANT ALL PRIVILEGES ON `saas\_bread`.* TO 'saas_bread'@'localhost';
FLUSH PRIVILEGES ;
