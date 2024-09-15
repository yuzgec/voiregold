<?php
    //SWEETALERT MESAJLARI -
    use Gloudemans\Shoppingcart\Facades\Cart;

    define('SWEETALERT_MESSAGE_CREATE', 'Eklendi');
    define('SWEETALERT_MESSAGE_UPDATE', 'Güncellendi');
    define('SWEETALERT_MESSAGE_DELETE', 'Silindi');
 
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
            if ($toplam >= config('settings.cargo_limit')) {
                return 'Ücretsiz Kargo';
            } else {
                return money(config('settings.cargo_price')).'₺';
            }
        }
        return;
    }


    function cargoToplam($toplam){
        $cargo_limit = (float)config('settings.cargo_limit'); // Float'a çeviriyoruz
        $cargo_price = (float)config('settings.cargo_price'); // Float'a çeviriyoruz
        $toplam = (float)$toplam; // Float'a çeviriyoruz

        if ($toplam < $cargo_limit) {
            return money($toplam + $cargo_price);
        } else {
            return money($toplam);
        }
    }

    
    // function cargoToplam($toplam){

    //     if($toplam < config('settings.cargo_limit')){
    //         return money($toplam + config('settings.cargo_price'));
    //     }else{
    //         return $toplam;
    //     }
    // }


