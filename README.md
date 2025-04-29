# Getachew Movie Database Assessment

A Laravel application demonstrating the use of **clean code architecture**, **Service Pattern**, and **Livewire** components.

---

## Features

- 🎬 Display a list of **actors** and their **associated movies**
- 🔍 **Filter actors** by name (search form)
- 🚀 **Search Star Wars characters** using the [SWAPI API](https://swapi.dev/)
- 🧪 **Automated tests** included for both actor search and Star Wars search components

---

## Technology Stack

- PHP 8.2+
- Laravel 12
- Livewire (Flux & Volt)
- MySQL (for development)
- SQLite (for testing)
- Tailwind CSS
- Laravel Sail (Docker)
- PestPHP (for testing)

---

## Installation

### Using Laravel Sail (Docker)

1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd repository-name
   ```

2. **Install Composer dependencies:**
   ```bash
   docker run --rm        -u "$(id -u):$(id -g)"        -v "$(pwd):/var/www/html"        -w /var/www/html        composer:latest composer install --ignore-platform-reqs
   ```

3. **Copy environment variables file:**
   ```bash
   cp .env.example .env
   ```

4. **Start Docker containers:**
   ```bash
   ./vendor/bin/sail up -d
   ```

5. **Generate the application key:**
   ```bash
   ./vendor/bin/sail artisan key:generate
   ```

6. **Run database migrations and seeders:**
   ```bash
   ./vendor/bin/sail artisan migrate --seed
   ```

7. **Install NPM dependencies and build assets:**
   ```bash
   ./vendor/bin/sail npm install
   ./vendor/bin/sail npm run dev
   ```

8. **Access the application** at:
   ```
   http://localhost
   ```

---

## Running Tests 🧪

This project includes **automated tests** for both Actor and Star Wars Livewire components.

1. **Make sure your `.env.testing` or `phpunit.xml` is configured for SQLite memory database.**

2. **Run all tests:**
   ```bash
   ./vendor/bin/sail artisan test
   ```

3. **Or run only Livewire component tests:**
   ```bash
   ./vendor/bin/sail artisan test tests/Feature/Livewire
   ```

✅ Tests cover:
- Actor list search validation and success
- Star Wars API search validation and success
- Proper use of Service classes injected via `boot()` method
- In-memory database testing (no external database required)

---

## Notes

- Livewire components use the `boot()` method for clean Dependency Injection (best practice for Livewire 3).
- External API requests (SWAPI) are done on the backend side using Laravel's `Http` client.
- Tailwind CSS is used for basic styling.
- Testing is isolated from the database (using SQLite memory).
- Actor seeders create 5+ actors with 3+ movies each, satisfying project requirements.

---

# 🎯 This project fully satisfies the assessment requirements for:
- Clean code structure
- Service layer pattern
- Laravel Livewire interaction
- Backend API handling
- Full Feature Testing included