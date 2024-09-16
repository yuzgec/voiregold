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
    function formatValue($value) {
        // Binlik ayracını kaldır (virgül)
        $value = str_replace(',', '', $value);
    
        // Sayıyı float'a çevir
        $value = (float)$value;
    
        return $value;
    }
    
    function money($deger) {
        $deger = formatValue($deger); // Veriyi formatla
        return number_format($deger, 2, '.', ''); // Formatla
    }

    function cargo($toplam)
    {
        $toplam = parseMoney($toplam); // Veriyi standartlaştır
        $cargo_limit = (float)config('settings.cargo_limit'); // Float'a çeviriyoruz
        $cargo_price = (float)config('settings.cargo_price'); // Float'a çeviriyoruz

        if ($toplam >= 0){
            if ($toplam >= $cargo_limit) {
                return 'Ücretsiz Kargo';
            } else {
                return money($cargo_price).'₺';
            }
        }
        return;
    }


    function parseMoney($value) {
        // Binlik ayracı (virgül) kaldır ve ondalık ayracı (nokta) uygula
        $value = str_replace(',', '', $value); // Binlik ayracını kaldır
        $value = str_replace('.', '.', $value); // Ondalık ayracını kontrol et (genelde bu adım gereksizdir)
        return (float)$value;
    }


    function cargoToplam($toplam){
        $toplam = parseMoney($toplam); // Veriyi standartlaştır
        $cargo_limit = (float)config('settings.cargo_limit'); // Float'a çeviriyoruz
        $cargo_price = (float)config('settings.cargo_price'); // Float'a çeviriyoruz
        $toplam = (float)$toplam; // Float'a çeviriyoruz

        error_log("Cargo limit: $cargo_limit");
        error_log("Cargo price: $cargo_price");
        error_log("Toplam: $toplam");

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


