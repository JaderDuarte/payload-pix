<?php

require __DIR__ . '/vendor/autoload.php' ;

use \App\Pix\Payload;
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;

// INSTÂNCIA PRINCIPAL DO PAYLOAD PIX
$obPayload = 
    (new Payload)->setPixKey('+5531994936002')
                 ->setDescription('Pagamento de 2 cotas do presente tal')
                 ->setmerchantName('Jader Felipe Silva Duarte')
                 ->setmerchantCity('ITABIRA')
                 ->setAmount(134.57)
                 ->setTxid('PAYLOADPIXIDX');

//CÓDIGO DE PAGAMENTO PIX
$payloadQrCode = $obPayload->getPayload();

//QR CODE
$obQrCode = new Qrcode($payloadQrCode);

//Imagem do QRCODE
$image = (new output\Png) ->output($obQrCode, 400);

?>

<h1>QR CODE PIX</h1>

<br/>

<img src="data:image/png;base64, <?=base64_encode($image)?>">

<br/><br/>

Código Pix: <br/>
<strong><?=$payloadQrCode?></strong>
