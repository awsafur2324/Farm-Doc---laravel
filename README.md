# 🩺 Doctor Service App - FarmDoc

**Live Demo**: [doctor chating app](https://farmdoc.free.nf/)

---

## 📖 Overview

**FarmDoc** is an innovative doctor service platform that connects users with healthcare professionals. The application allows users to browse a list of doctors, view their profiles, book appointments, and communicate directly via a secure chat system. It supports three different roles: **User**, **Doctor**, and **Admin**, each with specific capabilities and access levels.

---

## 🔧 How to Run Locally

1. Install [XAMPP](https://www.apachefriends.org/) and [Composer](https://getcomposer.org/)
2. Clone or download this repository
   ```bash
   git clone <repository-url>
   ```
3. Open the project directory and install dependencies
   ```bash
   composer install
   ```
4. Create a new MySQL database and import the SQL file:
    File path: ./MySql-Database_Export/ship_ticket.sql
5. Run the Laravel development server:
   ```bash
   php artisan serve
    ```
---

## 🚀 Features

### 👤 User
- Browse available doctors
- View doctor profiles and posts
- Book appointments with doctors
- Chat directly with doctors via secure messaging
- Manage personal profile

### 🩺 Doctor
- View appointment requests from users
- Chat with users for consultations
- Create and manage posts for users to view
- Manage personal profile

### 🛠️ Admin
- Manage user and doctor accounts
- Create and manage public posts
- Full access to system settings
- Manage personal profile

---

## 🧪 Technologies Used

- **Laravel** (Backend Framework)
- **Blade Template Engine** (Frontend)
- **Tailwind CSS** (Styling)
- **Chatify** (Real-time chat system)
- **Toastify.js** (Notifications)
- **PHPMailer** (Email integration)

---

## 📫 Contact

Feel free to reach out or open an issue if you have feedback, questions, or encounter bugs.

---
