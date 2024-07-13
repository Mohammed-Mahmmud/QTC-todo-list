Instructions to run todo-list project locally

1)git pull project from github
2)import mysql database file from QTC-ToDoList/info/database to your local mysql database

3)unzip .env file from QTC-ToDoList/info/

4)locate .env file from QTC-ToDoList/info/env to QTC-ToDoList
you have to edit .env file due to your database DB_PORT

5)run composer install
6)cd QTC-ToDoList
7)php artisan key:generate
8)php artisan migrate
9)npm run dev

for login 127.0.0.1:8000/login
login email : "admin@mail.com"
login password : "123456789"


for new register 127.0.0.1:8000/register
