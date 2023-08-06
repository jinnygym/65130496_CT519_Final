
-- Create the database 65130496_final if it doesn't exist
CREATE DATABASE IF NOT EXISTS 65130496_final;

-- Use the database 65130496_final
USE 65130496_final;

-- Create the books table if it doesn't exist


CREATE TABLE books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  author VARCHAR(100) NOT NULL,
  publication_date DATE,
  genre VARCHAR(50),
  description TEXT
);
