--
-- Clean up mysql.user table
--

DROP USER 'elimudb_usr'@'%';

DELETE FROM mysql.user_info WHERE user='elimudb_usr';

SELECT mu.host,mu.user,mui.full_name FROM mysql.user mu, mysql.user_info mui WHERE mu.user=mui.user;
