/* -----------------------------------------------------------------
 * Filename:    db_01_drop.sql
 * Project:     SaaS-BREAD-1
 * Location:    dist/data
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     27/7/21
 * Description:
 *              This file drops the current database and the
 *              database's user, if one or both they exist
 *
 * Notes:
 *              This script is written in MariaDB's SQL dialect,
 *              some changes would be needed for other DBMS's.
 * ----------------------------------------------------------------- */

DROP DATABASE IF EXISTS `saas_bread`;
DROP USER IF EXISTS 'saas_bread'@'localhost';
FLUSH PRIVILEGES ;
