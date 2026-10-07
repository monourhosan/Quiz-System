# Quiz System

A full-stack Quiz Application built with **Laravel 12**, **Blade**, **Tailwind CSS**, and **MySQL**.

## Features

- **User System**: User registration, login, profile view, password recovery, and email verification.
- **Admin Dashboard**: Admin authentication, category management, quiz creation, MCQ question management.
- **Interactive Quizzes**: Category-based quiz discovery, search, timed/untimed MCQ questions, instant result calculation.
- **Certificates**: Dynamic certificates for quizzes passed with 70%+ score, downloadable as PDF via Browsershot.
- **XAMPP & Local Ready**: Configured for XAMPP (Apache + MySQL) and `composer run dev` with hot-reloading.

---

## Requirements

- **PHP** >= 8.2 (with `pdo_mysql`, `mbstring`, `openssl`, etc.)
- **MySQL / MariaDB** (included in XAMPP)
- **Composer**
- **Node.js** >= 18 & **npm**

---

## Installation & Setup

1. **Clone or Download the Repository**:
   ```bash
   git clone <your-repository-url>
   cd quiz-sysem
   ```

2. **Install PHP Dependencies**:
   ```bash
   composer install
   ```

3. **Install Frontend Dependencies & Build Assets**:
   ```bash
   npm install
   npm run build
   ```

4. **Configure Environment**:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Generate application key:
     ```bash
     php artisan key:generate
     ```
   - Update database credentials in `.env` if needed:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=quiz-system
     DB_USERNAME=root
     DB_PASSWORD=
     ```

5. **Run Migrations & Seed Sample Data**:
   Ensure MySQL is running, then run:
   ```bash
   php artisan migrate --seed
   ```

---

## Running the Application

### Option 1: Via Terminal (Laravel + Vite Live Reload)
```bash
composer run dev
```
Open **[http://127.0.0.1:8000](http://127.0.0.1:8000)** in your browser.

### Option 2: Via XAMPP (Apache)
Place or junction the project inside `C:\xampp\htdocs\quiz-sysem`, start Apache and MySQL in XAMPP Control Panel, and visit:
- **Web App**: **[http://localhost/quiz-sysem/](http://localhost/quiz-sysem/)**
- **Admin Login**: **[http://localhost/quiz-sysem/public/admin-login](http://localhost/quiz-sysem/public/admin-login)**

---

## Default Credentials

- **Admin Login**:
  - Name: `saif`
  - Password: `1234`
- **Test User**:
  - Email: `test@example.com`
  - Password: `password123`

---

## License

This project is open-source under the MIT license.
