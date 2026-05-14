<?php
require __DIR__ . '/config.php';

$message = $_GET['text'] ?? $_GET['t'] ?? 'Hola, quiero iniciar una consulta privada.';
$message = trim(str_replace('_', ' ', $message));
if ($message === '') {
    $message = 'Hola, quiero iniciar una consulta privada.';
}

$number = preg_replace('/\D+/', '', $WHATSAPP_NUMBER);
$url = 'https://wa.me/' . $number . '?text=' . rawurlencode($message);
header('Location: ' . $url, true, 302);
exit;
