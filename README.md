# Wardrobe Management System

# Table of Contents

 ## Table of Contents
1. [Overview](#overview)
2. [Tech Stack](#tech-stack)
3. [Features](#features)
4. [Setup Instructions](#setup-instructions)
6. [Future Enhancements](#future-enhancements)
7. [Contributing](#contributing)
8. [License](#license)

# Overview

The Wardrobe Management System is designed to help users manage their wardrobe efficiently. The app allows users to add, edit, and delete clothing items, categorize them (e.g., tops, bottoms, shoes), and track their inventory. It features a responsive UI built with Vue 3 and Bootstrap, and includes user authentication (login/registration).

# Tech Stack

 ## Frontend: Vue 3, Bootstrap

 ## Backend: Laravel 11

 ## Database: MySQL (or another SQL database)

# Features

    User Authentication: Login and registration functionality for users.

    CRUD Operations: Add, edit, and delete clothing items.

    Categorization: Ability to categorize items (e.g., tops, bottoms, shoes).

    Filtering and Searching: Filter and search functionality for easy navigation.

    Responsive UI: A user-friendly and mobile-responsive interface built with Vue 3 and Bootstrap.

## Setup Instructions

## 1. Clone the Repository

git clone https://github.com/EndrexAkoto/Wardrobe-Management-System.git
cd Wardrobe-Management-System

## 2. Install Dependencies

# Frontend Setup (Vue 3)

    Navigate to the frontend folder:
   

    cd frontend

    Install frontend dependencies:
    

    npm install

    Start the frontend development server:
    

    npm run dev

    The frontend should now be accessible at http://localhost:5173.

# Backend Setup (Laravel 11)

  ## Navigate to the backend folder:
    

    cd backend

    Install backend dependencies:
    

  ## composer install

    Set up the .env file by duplicating .env.example and configuring your database settings:
    

    cp .env.example .env

    Generate an application key:
    

    php artisan key:generate

    Run database migrations:
    

    php artisan migrate

    Start the Laravel development server:
    

    php artisan serve

    The backend should now be accessible at http://localhost:8000.

# Optional: Database Setup (MySQL)

    Make sure you have MySQL installed and running. Update your .env file to reflect your MySQL credentials:
    env
    

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=wardrobe_system
    DB_USERNAME=root
    DB_PASSWORD=

    Run the migrations again to ensure the database is set up correctly:

    php artisan migrate

3. Access the Application

    Frontend: http://localhost:5173

    Backend: http://localhost:8000


# Future Enhancements

    Deployment instructions.

    Additional features such as outfit recommendations or styling suggestions.

