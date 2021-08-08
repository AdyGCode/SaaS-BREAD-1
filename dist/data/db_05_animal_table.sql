/* Create the saas_bread database users table
 *  filename: db_03_user_table.sql
 *
 * Animals table definition:
 *
 *
 *
 */
USE `saas_bread`;
CREATE TABLE saas_bread.animals
(
    id         BIGINT UNSIGNED AUTO_INCREMENT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL,
    PRIMARY KEY (id)
);
/* Done */
