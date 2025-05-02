# scroll-ajax-project
Simple web application that sends requests to the server for additional data as users scroll the page.

## Files

- index.html - default homepage
- conn.php - connection settings to database
- build.php - API call and inserts made to mysql database
- api.php - file used by index.html  to make ajax calls to database to fetch data

## Setup
- Install XAMPP
- Run MySQL and Apache
- Go into Admin MySQL console and setup database and tables
- Place html and php files under XAMPP installation folder (e.g.C:\xampp\htdocs\scroll)
- Run build.php to insert data in database: http://localhost/scroll/build.php
- Access [http://localhost/scroll/](http://localhost/scroll/)

## Reference
- https://www.udemy.com/course/ajax-project/
- https://baconipsum.com/json-api/
- https://www.apachefriends.org/index.html
