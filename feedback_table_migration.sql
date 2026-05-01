-- Feedback Table Creation Script
-- Run this SQL query in your phpMyAdmin or MySQL console to create the feedback table

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20),
  `category` ENUM('service', 'staff', 'facility', 'other') DEFAULT 'other',
  `rating` INT DEFAULT 3,
  `message` LONGTEXT NOT NULL,
  `submitted_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `status` ENUM('new', 'read', 'responded') DEFAULT 'new',
  INDEX `idx_email` (`email`),
  INDEX `idx_category` (`category`),
  INDEX `idx_rating` (`rating`),
  INDEX `idx_submitted_at` (`submitted_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
