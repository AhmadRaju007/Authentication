<b>Dependencies</b><br>
PHP version: 7.3.*<br>
mysql version: 15.1

index.php: saving user information is done here. 
<br>
connection.php: does the task of database pdo connection.
<br>
api.php: api to retrieve data given username as a parameter.
<br>
db.sql: provides database table structure.
<br>

<b>Github: </b>https://github.com/AhmadRaju007/Sample_Users
<br>
<br>
NB: API can be connected at {{base_url}}/api.php?username={{your_username}}
<br>
In case of local environment if your project is inside a folder named "aiva", following may work -
<br>
http://localhost/aiva/api.php?username={{your_username}}