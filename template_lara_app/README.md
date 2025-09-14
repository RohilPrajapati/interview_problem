# Simple Laravel Clone & Run Guide

## Quick Setup Commands

### 1. Clone the Repository
```bash
git clone https://github.com/RohilPrajapati/interview_problem.git
cd template_lara_app
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 4. SQLite Database Setup

Create SQLite database file:
```bash
touch database/database.sqlite
```

Update `.env` file for SQLite:
```env
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/your/project/database/database.sqlite
```

Or simply use relative path:
```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

### 5. Run Database Migrations
```bash
php artisan migrate
```


### 8. Start the Application
```bash
php artisan serve
```

The application will be available at: `http://localhost:8000`
