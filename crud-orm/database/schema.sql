CREATE DATABASE IF NOT EXISTS crud_app
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE crud_app;

CREATE TABLE IF NOT EXISTS students (
  id         INT AUTO_INCREMENT PRIMARY KEY,
  name       VARCHAR(100) NOT NULL,
  email      VARCHAR(150) NOT NULL UNIQUE,
  course     VARCHAR(100) NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO students (name, email, course) VALUES
  ('Juan Dela Cruz', 'juan@example.com', 'BSIT'),
  ('Maria Santos',   'maria@example.com', 'BSCS');
