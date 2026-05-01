# Feedback Form Setup Guide

## Overview
A feedback modal form has been added to your navbar that allows users to submit feedback with ratings.

## Files Created/Modified:

### 1. **includes/navbar.php** (MODIFIED)
- Added a "Feedback" button to the right side of the navbar
- Integrated a Bootstrap modal for the feedback form
- Form fields:
  - Name (required)
  - Email (required)
  - Phone (optional)
  - Rating (1-5 stars, required)
  - Message (required)

### 2. **backend/feedback_submit.php** (CREATED)
- Handles feedback form submission
- Sanitizes input using `mysqli_real_escape_string()`
- Inserts data into the `feedback` table
- Shows success/error messages

## Database Setup:

Run the SQL migration to create the feedback table:

```sql
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20),
  `rating` INT DEFAULT 3,
  `message` LONGTEXT NOT NULL,
  `submitted_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `status` ENUM('new', 'read', 'responded') DEFAULT 'new',
  INDEX `idx_email` (`email`),
  INDEX `idx_rating` (`rating`),
  INDEX `idx_submitted_at` (`submitted_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

**Steps to execute:**
1. Open phpMyAdmin (http://localhost/phpmyadmin)
2. Select your `canwinn_db` database
3. Go to the SQL tab
4. Copy and paste the SQL query above
5. Click "Go" to create the table

## How It Works:

1. User clicks the **"Feedback"** button in the navbar (right side)
2. A modal popup appears with the feedback form
3. User fills in their details and feedback
4. Upon submission, data is saved to the `feedback` table
5. User sees a success message and is redirected to home page

## Features:

✅ Modal form on the right side of navbar  
✅ Star rating system (1-5 stars)  
✅ Input validation  
✅ Database storage  
✅ Responsive design  
✅ Beautiful UI with Bootstrap and Font Awesome icons

## Optional Enhancements:

To view/manage feedback in the admin panel, you can add:
- Admin dashboard to view all feedback
- Filter by rating
- Mark feedback as "read" or "responded"
- Export feedback to CSV

Let me know if you need these features!
