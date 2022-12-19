﻿# Task_management_App

## In Task Management App you can do these things:

- Add new employee with different possibilities to work 3 jobs at the same time or just one
- Add new task for employees (choose from 1 to 3 employees)
- Modify assignments as complete
- Delete assignments
- See all assignments being in progress
- See all assignments being in archive as completed

## Built With

HTML, CSS, PHP languages and MySQL database.


## Setup

1. Download or clone the repository
```sh
https://github.com/VitaZil/Task_management_system.git
```

2. In a project root directory run composer
```sh
composer install
```

3. Add your db credentials(database, username and password) to the .env.example file and rename it to .env

4. To create all the nessesary tables and columns, run the following
```sh
php -f migrate.php
```

5. Start localhost from terminal 
```sh
php -S localhost:8080
```
