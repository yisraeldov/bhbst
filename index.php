<?PHP

/**
 * A simple bootstrap routing bassed on the `action` query param
 */

require __DIR__ . '/vendor/autoload.php';

$action  = $_GET['action'] ?? null;

/**
 * Map of action names to action methods
 * @var callable[]
 */
$routes = require_once(__DIR__ . '/src/routes.php');

function notFoundAction()
{
    http_response_code(404);
    echo "not found";
}

$actionMethod = $routes[$action] ?? notFoundAction(...) ;

$actionMethod(
    ['post' => $_POST]
);
