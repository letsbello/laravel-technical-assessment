# Getachew Movie Database Assessment

A Laravel application that demonstrates the use of clean code and the Service Pattern with Livewire.

## Features

- Display a list of actors and their associated movies
- Filter actors by name
- Search Star Wars characters using the [SWAPI API](https://swapi.dev/)

## Technology Stack

- PHP 8.2+
- Laravel 12
- Livewire (Flux & Volt)
- MySQL
- Tailwind CSS
- Laravel Sail (Docker)

## Installation

### Using Laravel Sail (Docker)

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd repository-name
   ```

2. Install composer dependencies:
   ```bash
   docker run --rm \
       -u "$(id -u):$(id -g)" \
       -v "$(pwd):/var/www/html" \
       -w /var/www/html \
       composer:latest composer install --ignore-platform-reqs
   ```

3. Copy the environment file and update it with your database credentials:
   ```bash
   cp .env.example .env
   ```

4. Start the Docker containers:
   ```bash
   ./vendor/bin/sail up -d
   ```

5. Generate application key:
   ```bash
   ./vendor/bin/sail artisan key:generate
   ```

6. Run the database migrations and seed the database:
   ```bash
   ./vendor/bin/sail artisan migrate --seed
   ```

7. Install NPM dependencies and build assets:
   ```bash
   ./vendor/bin/sail npm install
   ./vendor/bin/sail npm run dev
   ```

8. Access the application at http://localhost