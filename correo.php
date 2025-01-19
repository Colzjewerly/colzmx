<?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nombre = htmlspecialchars($_POST['nombre']);
                $correo = htmlspecialchars($_POST['correo']);
                $producto = htmlspecialchars($_POST['producto']);
                $mensaje = htmlspecialchars($_POST['mensaje']);

                $to = "colzempresa@gmail.com"; // Cambia a tu correo
                $subject = "Pedido de Producto";
                $body = "Nombre: $nombre\nCorreo: $correo\nProducto: $producto\nMensaje: $mensaje";
                $headers = "From: $correo";

                if (mail($to, $subject, $body, $headers)) {
                    echo "<p>Correo enviado correctamente.</p>";
                } else {
                    echo "<p>Error al enviar el correo. Inténtalo más tarde.</p>";
                }
            }
            ?>