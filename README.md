# SaaSy App 1

This is a markdown document...

## Database

- Database Name:    saas_bread
- Database User:    saas_bread
- DB User Password: saasPassword
- DB Hostname:      localhost

```sql
CREATE USER 'saas_bread'@'localhost' IDENTIFIED VIA mysql_native_password USING 'saasPassword';

GRANT USAGE ON *.* TO 'saas_bread'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

CREATE DATABASE IF NOT EXISTS `saas_bread`;

GRANT ALL PRIVILEGES ON `saas\_bread`.* TO 'saas_bread'@'localhost';
```

### Table Creation SQL

```sql
USE saas_bread;

CREATE TABLE users (
  id BIGINT UNSIGNED AUTO_INCREMENT,
  given_name VARCHAR(32) NOT NULL,
  family_name VARCHAR(32) DEFAULT NULL,
  email VARCHAR(316) UNIQUE NOT NULL,
  age INTEGER(3) DEFAULT 0,
  location VARCHAR(64) DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
  updated_at TIMESTAMP,
  PRIMARY KEY(id)
);
```
