# PHP Task - Team Management Dashboard (Core PHP + AJAX + DataTables)

A modern **Team Management Dashboard** built using **Core PHP**, **MySQL**, **AJAX**, **DataTables**, and **Bootstrap 5**. This project allows you to **add, update, delete, and list team members** with image upload functionality and dynamic UI.

---

## 📁 Features

- Add, Edit, Delete team members
- Upload and display profile photos
- Responsive UI with Bootstrap 5
- Live server-side data rendering with DataTables
- Smooth UI interactions using AJAX (jQuery)
- Modal-based Create/Update form
- MySQL-based backend
- Clean folder structure

---

## 🖼️ Screenshot

![Team Dashboard Screenshot](uploads/your-screenshot.png) <!-- Replace with actual screenshot path or link -->

---

## 🚀 Tech Stack

- Core PHP (no framework)
- MySQL
- jQuery AJAX
- DataTables.js
- Bootstrap 5
- Bootstrap Icons

---

## 🛠️ Folder Structure

php_task/
│
├── index.php # Main UI page
├── db.php # DB connection
├── assets/
│ ├── script.js # AJAX logic
│ └── style.css # Custom styles
│
├── uploads/ # Profile photo uploads
│
├── actions/
│ ├── fetch.php # Load team data for DataTable
│ ├── create.php # Handle Add user
│ ├── update.php # Handle Edit user
│ ├── delete.php # Handle Delete user
│ └── get.php # Get single user for editing
└── README.md


---

## ⚙️ How to Run this Project

### 🖥️ Requirements

- XAMPP or any Apache+MySQL stack
- PHP 7.4 or higher
- MySQL database

### 🔧 Setup Steps

1. **Clone the Repo** (or Download ZIP)

```bash
git clone https://github.com/YOUR_USERNAME/php_task.git



Move the folder to XAMPP htdocs

makefile
C:\xampp\htdocs\php_task
Create the MySQL Database

Go to phpMyAdmin: http://localhost/phpmyadmin

Create a database named: php_task

Import the SQL Schema

Inside phpMyAdmin → select php_task DB → import the php_task.sql file (create your own if not exported yet)

Example SQL:
CREATE TABLE `people` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100),
  `mobile` varchar(20),
  `email` varchar(100),
  `address` varchar(255),
  `role` varchar(50),
  `designation` varchar(100),
  `gender` varchar(10),
  `photo` varchar(255),
  `status` varchar(20),
  `created_at` datetime,
  `updated_at` datetime,
  PRIMARY KEY (`id`)
);
Start Apache & MySQL from XAMPP Control Panel


Run the App in Browser

http://localhost/php_task
