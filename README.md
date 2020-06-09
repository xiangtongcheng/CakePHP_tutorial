# cake_project
This repository uses Docker Compose to create a CakePHP project.

# Environment
- Docker: 19.03.8
- Docker Compose: 1.25.5
- CakePHP: 3.8.x
- PHP: 7.3
- Nginx: latest
- MySQL: 5.7

# Getting Started

## 1. Clone this repository    

```
git clone https://github.com/MasatoIso/cake_project.git'
```

## 2. Create .env file  
Create .env file to set the DB connection.  
Place the .env file in the same hierarchy as docker-compose.

The following is an example of .env.

```.env
MYSQL_RANDOM_ROOT_PASSWORD=pass
MYSQL_DATABASE=cake_project
MYSQL_USER=db_user
MYSQL_PASSWORD=pass
```

## 3. Create "db-data" directory 
Create "db-data" directory at the same level as docker-compose.yml.

## 4. Run docker-compose up -d  
Run docker-compose up -d in the directory where docker-compose.yml exists.

```
docker-compose up -d
```

## 5. Create CakePHP project with Composer  
Enter the "app" container with the following command.

```
docker exec -it app bash
```

Next, execute the following command to create a CakePHP project.  

This time create a project named cake. If you change the project name, change the document root of nginx/default.conf.

```
php /usr/bin/composer create-project --prefer-dist cakephp/app:^3.8 cake
```

## 6. Connect MySQL  

Rewrite Datasources.default in config/app.php in cake project.  
 
 ```php:config/app.php
 'host' => 'db',
 'username' => 'db_user',
 'password' => 'pass',
 'database' => 'cake_project',
```

