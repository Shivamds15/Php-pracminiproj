<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Overview

This Laravel-based CRUD API application allows you to manage tasks with basic operations: listing, viewing, creating, updating, and deleting tasks. It includes filtering capabilities for querying tasks based on specific criteria.

## Setup Instructions

### Prerequisites

- PHP >= 8.0
- Composer
- Laravel 10.x
- MySQL or another supported database

### Installation

1. **Clone the Repository**

   ```bash
   git clone https://github.com/yourusername/your-repository.git
   cd your-repository
   ```

2. **Install Dependencies**

   ```bash
   composer install
   ```

3. **Set Up Environment**

   Copy the `.env.example` file to `.env`:

   ```bash
   cp .env.example .env
   ```

   Update the `.env` file with your database and other environment settings.

4. **Generate Application Key**

   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**

   ```bash
   php artisan migrate
   ```

6. **Seed the Database (Optional)**

   If you have seed data, run:

   ```bash
   php artisan db:seed
   ```

7. **Start the Development Server**

   ```bash
   php artisan serve
   ```

   Your application will be accessible at `http://localhost:8000`.

## API Endpoints

### 1. List All Tasks

- **Endpoint:** `/api/tasks`
- **Method:** `GET`
- **Description:** Retrieves a list of tasks. You can filter the tasks by `status` and `due_date` query parameters.

  **Example Request:**
  ```
  GET http://localhost:8000/api/tasks
  ```

  **Filter by Status:**
  ```
  GET http://localhost:8000/api/tasks?status=completed
  ```

  **Filter by Due Date:**
  ```
  GET http://localhost:8000/api/tasks?due_date=2024-07-25
  ```

  **Filter by Status and Due Date:**
  ```
  GET http://localhost:8000/api/tasks?status=completed&due_date=2024-07-25
  ```

### 2. View a Task

- **Endpoint:** `/api/tasks/{id}`
- **Method:** `GET`
- **Description:** Retrieves a single task by its ID.

  **Example Request:**
  ```
  GET http://localhost:8000/api/tasks/1
  ```

### 3. Create a New Task

- **Endpoint:** `/api/tasks`
- **Method:** `POST`
- **Description:** Creates a new task. Requires `name` and `due_date` fields.

  **Example Request:**
  ```http
  POST http://localhost:8000/api/tasks
  Content-Type: application/json

  {
    "name": "New Task",
    "status": "pending",
    "due_date": "2024-08-01"
  }
  ```

### 4. Update a Task

- **Endpoint:** `/api/tasks/{id}`
- **Method:** `PUT`
- **Description:** Updates an existing task by its ID. Requires `name`, `status`, and `due_date` fields.

  **Example Request:**
  ```http
  PUT http://localhost:8000/api/tasks/1
  Content-Type: application/json

  {
    "name": "Updated Task",
    "status": "completed",
    "due_date": "2024-08-15"
  }
  ```

### 5. Delete a Task

- **Endpoint:** `/api/tasks/{id}`
- **Method:** `DELETE`
- **Description:** Deletes a task by its ID.

  **Example Request:**
  ```
  DELETE http://localhost:8000/api/tasks/1
  ```

## Postman Requests

Here are some example Postman requests to test the API:

1. **Fetch All Tasks**
   - **Method:** `GET`
   - **URL:** `http://localhost:8000/api/tasks`

2. **Filter Tasks by Status**
   - **Method:** `GET`
   - **URL:** `http://localhost:8000/api/tasks?status=completed`

3. **Filter Tasks by Due Date**
   - **Method:** `GET`
   - **URL:** `http://localhost:8000/api/tasks?due_date=2024-07-25`

4. **Filter Tasks by Status and Due Date**
   - **Method:** `GET`
   - **URL:** `http://localhost:8000/api/tasks?status=completed&due_date=2024-07-25`

5. **View a Specific Task**
   - **Method:** `GET`
   - **URL:** `http://localhost:8000/api/tasks/1`

6. **Create a New Task**
   - **Method:** `POST`
   - **URL:** `http://localhost:8000/api/tasks`
   - **Body (raw JSON):**
     ```json
     {
       "name": "New Task",
       "status": "pending",
       "due_date": "2024-08-01"
     }
     ```

7. **Update an Existing Task**
   - **Method:** `PUT`
   - **URL:** `http://localhost:8000/api/tasks/1`
   - **Body (raw JSON):**
     ```json
     {
       "name": "Updated Task",
       "status": "completed",
       "due_date": "2024-08-15"
     }
     ```

8. **Delete a Task**
   - **Method:** `DELETE`
   - **URL:** `http://localhost:8000/api/tasks/1`

## Contributing

Feel free to fork the repository and submit pull requests. For any issues or suggestions, open an issue in the repository.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
