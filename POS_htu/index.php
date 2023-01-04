<?php
session_start();

//use Core\Helpers\Fake;
use Core\Model\User;
use Core\Router;

// 'vendor/autoload.php';

spl_autoload_register(function ($class_name) {
    if (strpos($class_name, 'Core') === false)
        return;
    $class_name = str_replace("\\", '/', $class_name); // \\ = \
    $file_path = __DIR__ . "/" . $class_name . ".php";
    require_once $file_path;
});

if (isset($_COOKIE['user_id']) && !isset($_SESSION['user'])) { // check if there is user_id cookie.
    // log in the user automatically
    $user = new User(); // get the user model
    $logged_in_user = $user->get_by_id($_COOKIE['user_id']); // get the user by id
    $_SESSION['user'] = array( // set up the user session that idecates that the user is logged in. 
        'username' => $logged_in_user->username,
        'display_name' => $logged_in_user->display_name,
        'user_id' => $logged_in_user->id,
        'is_admin_view' => true
    );
}


////////////////////////////////////////////////////////////login////////////////////////////////////////////////////////
// For web administrators

Router::get('/', "authentication.login"); // Displays the login form
Router::get('/logout', "authentication.logout"); // Logs the user out
Router::post('/authenticate', "authentication.validate"); // Displays the login form
// edit 
Router::get('/dashboard', "admin.index");

////////////////////////////////////////////////////////////user////////////////////////////////////////////////////////
// athenticated + permissions [user:read]
Router::get('/users', "users.index"); // list of users (HTML)
Router::get('/user', "users.single"); // Displays single post (HTML)

// athenticated + permissions [user:create]
Router::get('/users/create', "users.create"); // Display the creation form (HTML)
Router::post('/users/store', "users.store"); // Creates the users (PHP)
// athenticated + permissions [user:read, user:create]
Router::get('/users/edit', "users.edit"); // Display the edit form (HTML)
Router::post('/users/update', "users.update"); // Updates the users (PHP)
// athenticated + permissions [user:read, user:delete]
Router::get('/users/delete', "users.delete"); // Delete the post (PHP)

////////////////////////////////////////////////////////////item////////////////////////////////////////////////////////
Router::get('/items', "items.index"); // list of items (HTML)
Router::get('/item', "items.single"); // Displays single item (HTML)
// athenticated + permissions [item:create]
Router::get('/items/create', "items.create"); // Display the creation form (HTML)
Router::post('/items/store', "items.store"); // Creates the items (PHP)
// athenticated + permissions [item:read, item:create]
Router::get('/items/edit', "items.edit"); // Display the edit form (HTML)
Router::post('/items/update', "items.update"); // Updates the items (PHP)
// athenticated + permissions [item:read, item:delete]
Router::get('/items/delete', "items.delete"); // Delete the item (PHP)

////////////////////////////////////////////////////////////transaction////////////////////////////////////////////////////////
Router::get('/transactions', "transactions.index"); // list of transactions (HTML)
Router::get('/transaction', "transactions.single"); // Displays single transaction (HTML)
// athenticated + permissions [transaction:create]
Router::get('/transactions/create', "transactions.create"); // Display the creation form (HTML)
Router::post('/transactions/store', "transactions.store"); // Creates the transactions (PHP)
// athenticated + permissions [transaction:read, transaction:create]
Router::get('/transactions/edit', "transactions.edit"); // Display the edit form (HTML)
Router::post('/transactions/update', "transactions.update"); // Updates the transactions (PHP)
// athenticated + permissions [transaction:read, transaction:delete]
Router::get('/transactions/delete', "transactions.delete"); // Delete the transaction (PHP)

/////////////////////////////////////////////////////sales//////////////////////////////////////////////////////////////

Router::get('/sales', "sales.index"); // list of sales (HTML)
Router::get('/sale', "sales.single"); // Displays single sale (HTML)
// athenticated + permissions [sale:create]
Router::get('/sales/create', "sales.create"); // Display the creation form (HTML)
Router::post('/sales/store', "sales.store"); // Creates the sales (PHP)
// athenticated + permissions [sale:read, sale:create]
Router::get('/sales/edit', "sales.edit"); // Display the edit form (HTML)
Router::post('/sales/update', "sales.update"); // Updates the sales (PHP)
// athenticated + permissions [sale:read, sale:delete]






Router::redirect();
