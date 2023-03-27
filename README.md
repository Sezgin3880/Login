# Simple Login System Using Bcrypt

This is a simple login system implemented in PHP that uses bcrypt to hash the passwords stored in the database. The system consists of two PHP files, `login_process.php` and `register_process.php`, which handle the login and registration processes, respectively.

## Login Process

The login process starts by checking if the login form has been submitted using the `$_SERVER["REQUEST_METHOD"]` variable. If the form has been submitted, the code retrieves the user's login credentials, connects to the database using the `config.php` file, and queries the database to check if the user exists. 

The query uses the provided username to retrieve the user's information from the database. The retrieved information includes the hashed password which is stored securely in the database. Bcrypt is used to hash the passwords which is considered a secure method for password hashing.

Once the user's information is retrieved, the code uses the `password_verify()` function to check if the provided password matches the stored hash. If the password matches, the user's information is stored in a session and the user is redirected to the welcome page. If the password does not match, the user is redirected back to the login page with an error message.

## Registration Process

The registration process starts by checking if the registration form has been submitted using the `$_SERVER["REQUEST_METHOD"]` variable. If the form has been submitted, the code retrieves the user's registration information, connects to the database using the `config.php` file, and hashes the password using bcrypt.

The hashed password is then stored in the database along with the user's username and email address using an SQL query. If the query is successful, the user is redirected to the login page. If the query fails, the user is redirected back to the registration page with an error message.

Overall, this simple login system provides a secure way of storing user passwords in the database using bcrypt.
