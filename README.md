# 🛠️ Maintenance Request Management System

A dynamic, real-time web application designed to streamline, track, and manage property or facility maintenance requests. Built with **Laravel**, **Livewire**, and **Bootstrap**, this system provides a smooth, single-page application (SPA) feel with a clean, responsive user interface.

---

## 🚀 Features

*   **Real-Time Dashboard:** Monitor the status of pending, in-progress, and completed maintenance requests without full page reloads.
*   **Request Submission:** Users can easily log maintenance issues, categorize problems (plumbing, electrical, structural), and set priority levels.
*   **Dynamic Status Updates:** Administrators can instantly update request statuses, assign technicians, and add internal notes.
*   **Instant Search & Filtering:** Filter requests dynamically by priority, status, or date using Livewire's reactive data binding.
*   **Responsive UI:** Fully responsive design built with Bootstrap, optimized for both desktop management and on-site mobile technicians.

---

## 🛠️ Tech Stack

*   **Backend Framework:** [Laravel](https://laravel.com/) (Robust PHP framework)
*   **Frontend Interactivity:** [Laravel Livewire](https://livewire.laravel.com/) (Reactive, dynamic interfaces without writing complex JavaScript)
*   **Styling & UI:** [Bootstrap](https://getbootstrap.com/) (Responsive, modern component library)
*   **Database:** MySQL / PostgreSQL / SQLite

---

## 📦 Getting Started

Follow these steps to set up the project locally on your machine.

### Prerequisites

*   PHP (>= 8.2 recommended)
*   Composer
*   Node.js & NPM
*   A local database engine (MySQL, PostgreSQL, or SQLite)

### Installation & Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/SenaEnana/Maintenance-Request-Management-System
   cd Maintenance-Request-Management-System
   ```
2. **Install PHP dependencies:
   ```bash
   composer install
   ```
3. **Install frontend assets:
   ```bash
   npm install && npm run dev
   ```
4. **Configure Environment:
Copy the example environment file and generate an application key:
```bash
cp .env.example .env
php artisan key:generate
```
4. **Set up the Database:
   Open your .env file and configure your database connection details:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=maintenance_db
   DB_USERNAME=root
   DB_PASSWORD=

5. **Run Migrations & Seeders:
   Create the database tables and populate mock data (if applicable):
   ```bash
   php artisan migrate --seed
   ```
6. **Launch the Application:
   Start the Laravel development server:
   ```bash
   php artisan serve
   ```
   Visit http://127.0.0.1:8000 in your web browser.

## 💡 Key Takeaways from Building This
* Mastered Livewire’s lifecycle hooks and query string bindings for seamless search and filtering.

* Implemented Laravel Eloquent relationships to cleanly link maintenance requests to specific users and categories.

* Utilized Bootstrap components (modals, alerts, tables) alongside Livewire events to create a highly responsive user experience.

## 📝 License

This project is open-source and available under the MIT License.
