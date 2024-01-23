<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $page = isset($_POST['page']) ? $_POST['page'] : 1;

    switch ($page) {
        case 5:
            // Guarda los datos en un archivo (config.txt)
            $configData = '';

            if ($_POST['data_type'] == 'basic') {
                $configData .= "Authoritative: {$_POST['authoritative']}\n";
                // Agrega más líneas según sea necesario para otros datos básicos
            } elseif ($_POST['data_type'] == 'advanced') {
                $configData .= "Host: {$_POST['host']}\n";
                $configData .= "Hardware Ethernet: {$_POST['hardware_ethernet']}\n";
                $configData .= "Fixed Address: {$_POST['fixed_address']}\n";
                // Agrega más líneas según sea necesario para datos avanzados
            }

            // Guarda en el archivo config.txt
            file_put_contents('config.txt', $configData, FILE_APPEND);
            break;

        // Agrega más casos según sea necesario para procesar datos adicionales
    }
}

// Redirecciona a la página correspondiente
// header("Location: index.php?page={$page}");
exit();
?>
