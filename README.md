# CRUD Application with PHP and MySQL

## Overview

This project is a simple CRUD (Create, Read, Update, Delete) application developed using PHP and MySQL. It allows users to manage a list of todos, including adding, editing, deleting, and updating the status of tasks. The application is designed to run in a local environment using XAMPP.

## Features

- **Create Todos**: Add new tasks to your todo list.
- **Read Todos**: View a list of all tasks.
- **Update Todos**: Rename tasks or update their status (completed/not done yet).
- **Delete Todos**: Remove tasks from the list.

## Technology Stack

- **Backend**: PHP
- **Database**: MySQL
- **Environment**: XAMPP
- **Frontend**: HTML, CSS (Bootstrap for styling)
- **Server**: Apache (via XAMPP)

## Setup Instructions

### Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) installed on your local machine.
- Basic knowledge of PHP and MySQL.

### Installation Steps

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/crud-application.git
2. **Move to XAMPP Directory**:
   - Place the project folder inside the `htdocs` directory of your XAMPP installation.

3. **Start XAMPP**:
   - Open XAMPP Control Panel.
   - Start Apache and MySQL.

4. **Set Up the Database**:
   - Open your browser and navigate to `http://localhost/phpmyadmin`.
   - Create a new database named `todos_db`.
   - Import the provided `todos_db.sql` file to set up the necessary tables.

5. **Configure Database Connection**:
   - Open the `connection.php` file.
   - Update the database credentials (`host`, `username`, `password`, `dbname`) to match your local setup.

6. **Run the Application**:
   - Open your browser and navigate to `http://localhost/your-project-folder/`.
   - The application should be running, and you can start managing your todos.
