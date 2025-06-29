# Portfolio SrMandeli

This project uses the following technologies:

- **Frontend:** Vue.js 3 with TypeScript + Vite
- **Backend:** Pure PHP 8.2 running on Apache
- **Database:** MySQL 5.7+
- **Environment:** Docker containers based on Debian

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Guilherme-Mandeli/portfolio-srmandeli.git
   cd portfolio-srmandeli
   ```

2. Create a `.env` file in the root folder with the following content (adjust values as needed):
   ```
   MYSQL_ROOT_PASSWORD=rootpassword
   MYSQL_DATABASE=app_db
   MYSQL_USER=app_user
   MYSQL_PASSWORD=securepassword

   PHP_HTTP_PORT=8080
   MYSQL_PORT=3317
   FRONTEND_PORT=5173

   DB_HOST=database
   DB_NAME=db_name
   DB_USER=db_user
   DB_PASS=db_pass
   ```

3. Build and start the Docker containers:
   ```bash
   docker-compose up --build
   ```

4. Access the services:
   - Frontend (Vue.js dev server): http://localhost:5173
   - Backend (PHP + Apache): http://localhost:8080

## Database Migration and Seeding

After your Docker container are up and running, you need to create the database tables and insert initial data.

To do this, follow these steps:

1. Access the PHP container terminal (replace 'php-apache' with your actual container name):
```bash
docker exec -it php-apache bash
```

2. Inside the container, run the migration script:
```bash
php backend/migrate.php
```

You should see output confirming the migrations and seeders executed like this:

```bash
🔹 Running Migrations...
✅ Migration '2025_06_29_create_project_stack_table.php' executed.
🔹 Running Seeders...
✅ Seeder 'ProjectStackSeeder.php' executed.
[ Migrations and Seeders finished. ]
```

Now your database is ready with the required tables and seed data.

## Notes

- Use `docker-compose down` to stop the containers.
- Modify environment variables in `.env` as needed.
- Frontend source code is in the `frontend/` folder.
- Backend PHP code is in the `backend/` folder.

---
