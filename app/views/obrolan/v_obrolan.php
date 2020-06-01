<?php
$objekChat = new Obrolan;
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : false;
if (!$aksi) {
    $objekChat->Chatting();
} else {
    $objekChat->AmbilChat();
}
