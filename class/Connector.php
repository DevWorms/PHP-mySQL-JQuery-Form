<?php

define( 'DB_HOST', '127.0.0.1' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_NAME', 'pruebasphp' );

class Connector {

    protected $DB_HOST = '127.0.0.1';
    protected $DB_USER = "root";
    protected $DB_PASS = "";
    protected $DB_NAME = "pruebasphp";
    private $conn = null;

    public function __construct() {
        try {
            // Establece la conexion a la BD
            $this->conn = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);
            // Valida la conexion
            if (mysqli_connect_errno()) { // En caso de error, imprime el error
                printf("Ocurrio un error al establecer la conexión a la Base de Datos: %s\n", mysqli_connect_error());
                exit();
            } /*else {
              // Para pruebas, muestra si la conexion se establecio correctamente
              printf("Conexion establecida correctamente");
              }
             */
        } catch (Exception $ex) {
            die("Ocurrio un error al establecer la conexión a la Base de Datos: " . $ex);
        }
    }

    public function __destruct() {
        // Cierra la conexion a la BD
        $this->conn->close();
        $this->conn = NULL;
    }

    public function sec($variable) {
        /*
         * Funcion para filtrar variables
         * Elimina tags html y expresiones regulares
         * Previene XSS y SQL injection
         */
        //$variable = strip_tags($variable);
        $variable = htmlentities($variable);
        $variable = $this->conn->real_escape_string($variable);

        return $variable;
    }

    public function execute($query) {
        global $result;
        // Prepara la consulta
        $this->conn->prepare($query);
        if ($result = $this->conn->query($query)) {
            // Si la consulta se ejecuta correctamente devuelve TRUE
            return true;
        } else {
            // Si la consulta NO se ejecuta imprime el error
            printf($this->conn->error);
            return false;
        }
    }

}

/*
// Ejemplo de uso
// Incluye la clase y crea una nueva conexion
include('class/Connection.php');
$db = new Connector();

// Recomiendo que utilicen la funcion sec, para filtrar las variables.
// Previene SQLi, XSS

$nombre = "Juan";
$nombre = $db->sec($nombre);

$apellido = "Lopez";
$apellido = $db->sec($apellido);

$matricula = "2016457821";
$matricula = $db->sec($matricula);

// Ejemplo para insertar datos
$query = "INSERT INTO Alumno (ID_alumno, Nombre, Ap_pat) VALUES ('".$matricula."', '" . $nombre . "', '" . $apellido . "');";
if ($db->execute($query)) {
    printf("El registro se creo correctamente.");
}

// Ejemplo para eliminar datos
$query = "DELETE FROM Alumno WHERE ID_alumno = '".$matricula."';";
if ($db->execute($query)) {
    printf("El registro se elimino correctamente.");
}

// Ejemplo para actualizar datos
$query = "UPDATE Alumno set Nombre = '".$nombre."' WHERE ID_alumno = '".$matricula."' ;";
if ($db->execute($query)) {
    printf("El registro se actualizo correctamente.");
}

// Ejemplo de SELECT
$query = "SELECT * FROM Alumno";
if ($db->execute($query)) {
    // Siempre debe utilizarse la variable global $result
    // * Ejemplo:
    // * $result->fetch_assoc();
    // * $result->fetch_array();
    while($resultado =  $result->fetch_assoc() ) {
        printf("%s %s <br>", $resultado[2], $resultado[3]);
    }
}
*/
?>