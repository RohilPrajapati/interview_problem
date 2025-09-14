# Django Setup Guide
CURD Interview Question

## 1. Create Virtual Environment

```bash
# Create virtual environment
python -m venv venv

# Activate virtual environment
# On Windows:
venv\Scripts\activate

# On macOS/Linux:
source venv/bin/activate
```

## 2. Install Django

```bash
# Install Django
pip install django

# Optional: Create requirements.txt
pip freeze > requirements.txt
```

## 3. Navigate to Project Directory

```bash
# Navigate to your existing project directory
cd your-django-project
```

## 4. Run Django Development Server

```bash
# Run migrations (first time setup)
python manage.py migrate

# Start development server
python manage.py runserver
```

## 5. Access Your Application

Open your browser and go to: `http://127.0.0.1:8000/`

## Additional Commands

```bash
# Create a new app
python manage.py startapp myapp

# Create superuser (Optional)
python manage.py createsuperuser

# Make migrations after model changes
python manage.py makemigrations
python manage.py migrate
```

## Deactivate Virtual Environment

```bash
# When done working
deactivate
```