CREATE database overseas;
GRANT ALL PRIVILEGES ON overseas.* TO 'agent'@'localhost' IDENTIFIED BY 'secret';
FLUSH PRIVILEGES;
