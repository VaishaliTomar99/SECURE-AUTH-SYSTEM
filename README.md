# SecureAuth System 🔐

A secure authentication system built using **PHP**, **MySQL**, **HTML**, **CSS**, and **Bootstrap**.  
This project provides user registration, login authentication, session management, and profile picture upload functionality with a modern responsive UI.

---

# 🚀 Features

✅ User Registration System  
✅ Secure Login Authentication  
✅ Password Hashing using PHP  
✅ Session Management  
✅ Profile Picture Upload  
✅ Personalized User Dashboard  
✅ MySQL Database Integration  
✅ Responsive Modern UI  
✅ Logout Functionality  

---

# 🛠️ Technologies Used

- PHP
- MySQL
- HTML5
- CSS3
- Bootstrap 5
- XAMPP

---

# 📂 Project Structure

```bash
SecureAuth-System/
│
├── assets/
│   ├── style.css
│   └── script.js
│
├── config/
│   └── db.php
│
├── uploads/
│
├── database/
│
├── index.php
├── register.php
├── login.php
├── dashboard.php
├── logout.php
└── README.md
```

---

# ⚙️ Setup Instructions

## 1️⃣ Clone Repository

```bash
git clone https://github.com/VaishaliTomar99/SECURE-AUTH-SYSTEM.git
```

---

## 2️⃣ Move Project to XAMPP htdocs

Place the project folder inside:

```bash
xampp/htdocs/
```

---

## 3️⃣ Start Apache & MySQL

Open XAMPP Control Panel and start:

- Apache
- MySQL

---

## 4️⃣ Create Database

Open phpMyAdmin:

```bash
http://localhost/phpmyadmin
```

Create database:

```sql
secureauth_db
```

---

## 5️⃣ Create Users Table

Run this SQL query:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    profile_pic VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## 6️⃣ Open Project

```bash
http://localhost/SecureAuth-System/
```

---


## Register Page
- User registration with profile upload

## Login Page
- Secure login authentication

## Dashboard
- Personalized dashboard with profile picture

---

# 🔒 Security Features

- Password hashing using `password_hash()`
- Password verification using `password_verify()`
- Session-based authentication
- SQL injection prevention using `mysqli_real_escape_string()`

---

# 📌 Future Improvements

- Forgot Password Feature
- Email Verification
- OTP Authentication
- Dark/Light Theme
- Admin Panel
- JWT Authentication

---


🔗 GitHub:  
https://github.com/VaishaliTomar99

---
