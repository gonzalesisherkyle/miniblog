# Laravel MiniBlog Project

This is a simple MiniBlog project built with Laravel.

## Features

- User authentication (login and registration)
- Create, read, update, and delete (CRUD) posts
- Responsive design
- ...

## Getting Started

### Prerequisites

- PHP (>= 7.4)
- Composer
- Node.js and npm
- ...

### Installation

Create a database named "miniblog"

1. Clone the repository:
   git clone https://github.com/your-username/laravel-miniblog.git
2. Change into the project directory:
    cd laravel-miniblog
3. Install PHP dependencies:
    composer install
4. Install JavaScript dependencies:
    npm install
5. Copy the .env.example file to .env and configure your database and other settings:
    cp .env.example .env
6. Generate an application key:
    php artisan migrate
7. Compile assets:
    npm run dev
8. Start the development server:
    php artisan serve
9. Visit http://localhost:8000 in your browser.

