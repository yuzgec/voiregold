<?php
    //SWEETALERT MESAJLARI -
    use Gloudemans\Shoppingcart\Facades\Cart;

    define('SWEETALERT_MESSAGE_CREATE', 'Eklendi');
    define('SWEETALERT_MESSAGE_UPDATE', 'Güncellendi');
    define('SWEETALERT_MESSAGE_DELETE', 'Silindi');
    define('CARGO_LIMIT', 1000);
    define('CARGO_PRICE', 119);
    define('MAIL_SEND', 'olcayy@gmail.com');

    function cartControl($id, $text = null){
        foreach (Cart::instance('shopping')->content() as $c){
            if($c->id == $id){
                echo $text;
            }
        }
    }


    //KULLANICI ADI BAŞ HARFLERİNİ GÖSTERME
    function isim($isim){
        $parcala = explode(" ", $isim);
        $ilk = mb_substr(current($parcala), 0,3);
        $son = mb_substr(end($parcala), 0,3);
        return $ilk.'***'.' '.$son.'***';
    }
    function money($deger){
       return number_format((float)$deger, 2, '.', '');
    }

    function cargo($toplam)
    {
        if ($toplam >= 0){
            if ($toplam >= CARGO_LIMIT) {
                return 'Ücretsiz Kargo';
            } else {
                return money(CARGO_PRICE.'₺');
            }
        }
        return;
    }

    function cargoToplam($toplam){

        if($toplam < CARGO_LIMIT){
            //return money($toplam + CARGO_PRICE);

            $finalAmount = $toplam + CARGO_PRICE;
            echo "Final Amount (with cargo): $finalAmount\n";
            return money($finalAmount);
            
        }else{
            return $toplam;
        }
    }


