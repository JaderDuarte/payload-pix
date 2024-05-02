<?php

require __DIR__ . '/vendor/autoload.php' ;

use \App\Pix\Payload;
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;

// INSTÂNCIA PRINCIPAL DO PAYLOAD PIX
$obPayload = 
    (new Payload)->setPixKey('+5531975729291')
                 ->setDescription('Pagamento de 2 horas de programa  do presente tal')
                 ->setmerchantName('Jader Duarte')
                 ->setmerchantCity('ITABIRA')
                 ->setAmount(134.57)
                 ->setTxid('PAYLOADPIXIDX');

//CÓDIGO DE PAGAMENTO PIX
$payloadQrCode = $obPayload->getPayload();

//QR CODE
$obQrCode = new Qrcode($payloadQrCode);
$image = (new output\Png) ->output($obQrCode, 400);

header('Content-Type: image/png');

echo $image;

echo "<pre>";
print_r($paylodQrCode);
echo "</pre>";
exit;