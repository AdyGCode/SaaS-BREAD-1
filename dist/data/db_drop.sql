/* Drop existing database and user
 *  filename: db_drop.sql
 */

DROP DATABASE IF EXISTS `saas_bread`;
DROP USER IF EXISTS 'saas_bread'@'localhost';
FLUSH PRIVILEGES ;
