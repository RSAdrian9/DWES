<?php
namespace App\Controllers;

class ContactController {
    
    public function contact() {
        // Inicializamos las variables
        $errors = [];
        $message = '';
        $nombre = $email = $mensaje = ''; // Aseguramos que las variables estén definidas
        
        // Comprobar si el formulario ha sido enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $email = $_POST['email'] ?? '';
            $mensaje = $_POST['mensaje'] ?? '';

            // Validación básica
            if (empty($nombre)) {
                $errors[] = "El nombre es obligatorio.";
            }

            if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Por favor ingresa un correo electrónico válido.";
            }

            if (empty($mensaje)) {
                $errors[] = "El mensaje no puede estar vacío.";
            }

            // Si no hay errores, procesamos el formulario
            if (empty($errors)) {
                // Lógica para procesar el mensaje, como enviar un correo
                $this->processContactForm($nombre, $email, $mensaje);

                // Mensaje de éxito
                $message = "Gracias, $nombre. Hemos recibido tu mensaje y nos pondremos en contacto contigo a través de $email.";
                
                // Vaciar los campos después de enviar el formulario
                $nombre = $email = $mensaje = '';
            }
        }

        // Renderizamos la vista de contacto con los errores y el mensaje (si los hay)
        $this->render('contact', [
            'errors' => $errors,
            'message' => $message,
            'nombre' => $nombre,
            'email' => $email,
            'mensaje' => $mensaje
        ]);
    }

    // Este método puede enviar un correo, guardar en base de datos, etc.
    private function processContactForm($nombre, $email, $mensaje) {
        // Aquí procesas el formulario. Por ejemplo, podrías usar mail() para enviar un correo:
        // mail($email, "Nuevo mensaje de contacto", $mensaje, "From: webmaster@pixelgames.com");
        
        // También podrías guardar la información en una base de datos si lo necesitas.
    }

    private function render($view, $data = []) {
        extract($data);
        include __DIR__ . '/../views/' . $view . '.php';
    }
}
