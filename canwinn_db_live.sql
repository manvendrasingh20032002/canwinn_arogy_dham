-- CanWinn Project Database Schema (Updated)
-- Database: canwinn_db


-- 1. Contacts Table
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20),
  `message` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 2. Members Table
CREATE TABLE IF NOT EXISTS `members` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `guardian` VARCHAR(100),
  `dob` DATE,
  `gender` VARCHAR(20),
  `blood_group` VARCHAR(10),
  `mobile` VARCHAR(20) NOT NULL,
  `alt_mobile` VARCHAR(20),
  `email` VARCHAR(100),
  `occupation` VARCHAR(100),
  `address` TEXT,
  `city` VARCHAR(50),
  `state` VARCHAR(50),
  `pin_code` VARCHAR(10),
  `id_proof_type` VARCHAR(50),
  `id_proof_number` VARCHAR(50),
  `emergency_name` VARCHAR(100),
  `emergency_phone` VARCHAR(20),
  `emergency_relation` VARCHAR(50),
  `plan_type` VARCHAR(50),
  `medical_history` TEXT,
  `photo_path` VARCHAR(255),
  `ip_address` VARCHAR(45),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 3. Appointments Table
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `appointment_id` VARCHAR(20) UNIQUE NOT NULL,
  `patient_name` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `email` VARCHAR(100),
  `age` INT,
  `gender` VARCHAR(20),
  `blood_group` VARCHAR(10),
  `speciality` VARCHAR(100),
  `doctor_name` VARCHAR(100),
  `appointment_date` DATE,
  `appointment_time` VARCHAR(50),
  `appointment_type` VARCHAR(50),
  `polyclinic` VARCHAR(100),
  `symptoms` TEXT,
  `medical_history` TEXT,
  `emergency_contact` VARCHAR(100),
  `emergency_phone` VARCHAR(20),
  `terms_agreed` VARCHAR(10),
  `ip_address` VARCHAR(45),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 4. Feedback Table
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20),
  `category` ENUM('service', 'staff', 'facility', 'other') DEFAULT 'other',
  `rating` INT DEFAULT 3,
  `message` LONGTEXT NOT NULL,
  `submitted_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `status` ENUM('new', 'read', 'responded') DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 5. Enrollments Table (Rojgar Sewa)
CREATE TABLE IF NOT EXISTS `enrollments` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `course` VARCHAR(100) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
