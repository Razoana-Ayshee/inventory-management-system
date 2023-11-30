# Laravel Inventory Management System - Products Feature

## Overview

Welcome to the Inventory Management System with a focus on the Products feature, built using the Laravel framework. This system is designed to help businesses keep track of their product inventory efficiently, with robust features for managing product information.

## Table of Contents

1. [Features](#features)
2. [Installation](#installation)
3. [Usage](#usage)
6. [Contributing](#contributing)
7. [License](#license)

## Features

### 1. Login

Securely authenticate users with a login system. Users can access their accounts and perform actions based on their roles and permissions.

### 2. Register

Allow new users to register securely. Registration includes account creation with necessary information and password protection.

### 3. Add Product

Easily add new products to your inventory by providing details such as product name, description, price, and quantity.

### 4. View Product List

Access a comprehensive list of all products in your inventory. This includes important details like product name, description, price, and available quantity.

### 5. Update Product Information

Keep your product information up-to-date by editing existing product details. This includes modifying product names, descriptions, prices, and quantities.


### 6. Delete Product

Remove products from your inventory when they are no longer available or relevant.

## Installation

1. Clone the repository to your local machine:

    ```bash
    git clone https://github.com/Razoana-Ayshee/inventory-management-system.git
    ```

2. Navigate to the project directory:

    ```bash
    cd inventory-management-system
    ```

3. Install composer dependencies:

    ```bash
    composer install
    ```

4. Copy the `.env.example` file to `.env` and configure your database settings:

    ```bash
    cp .env.example .env
    ```

5. Generate application key:

    ```bash
    php artisan key:generate
    ```

6. Run migrations and seed the database:

    ```bash
    php artisan migrate --seed
    ```

7. Start the development server:

    ```bash
    php artisan serve
    ```

8. Access the application in your web browser at [http://localhost:8000](http://localhost:8000).

## Usage

1. Open the application in your web browser.
2. sign up and login .
3. Navigate to the "Product Management" section.
4. Use the provided forms and buttons to add, view, update, or delete products.



## Contributing

If you would like to contribute to the development of this Laravel Inventory Management System, please follow the guidelines in the [CONTRIBUTING.md](CONTR
