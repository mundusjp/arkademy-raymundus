<?php
    function arkaFood($harga,$voucher,$jarak,$pajak){
        /* 
        Rara biasa membeli makan dengan bantuan ArkaFood, 
        sebuah platform pembelian makanan dan delivery 
        secara online. Untuk merayakan ulang tahun ArkaFood 
        yang ke 5, ArkaFood menyediakan bagi pelanggannya 
        beberapa kode promosi, diantaranya adalah ‘ARKAFOOD5’ 
        dan ‘DITRAKTIRDEMY’. Ketentuan menggunakan kode promo 
        ARKAFOOD5 adalah pemesanan minimal 50rb, diskon 50% 
        dengan maksimal potongan sebesar 50rb. Untuk ketentuan 
        kode promo DITRAKTIRDEMY, pemesanan minimal sebesar 25rb, 
        diskon 60% dengan maksimal potongan sebesar 30rb. Untuk 
        pengiriman, 1,5 kilometer pertama dikenakan tarif 5 rb, 
        dan setiap satu kilometer selanjutnya dikenakan penambahan 
        3 rb. Untuk beberapa restoran dikenakan pajak yakni tarif 
        5% dari harga makanan. Buatlah fungsi/method untuk menghitung 
        berapa total harga yang harus dibayar Rara dengan parameter 
        harga makanan, kode voucher (“False” jika tidak menggunakan), 
        jarak, dan pajak (“False” jika tidak ada).
        */
        
        // hitung jarak 1.5 km pertama 5rb next 3rb.
        if($jarak < 1.5){
            $hargaantar = 5000;
        }else{
            $hargaantar = 5000;
            $sisa_jarak = $jarak - 1.5;
            $hargaantar += round($sisa_jarak) * 3000;
        }
        // jika memakai voucher
        if($voucher != "False" && $voucher != "false" && $voucher != "FALSE"){
            $voucher = strtoupper($voucher);
            if($voucher == "DITRAKTIRDEMY"){ // minimal 25rb, diskon 60% max 30rb, 
                if($harga < 25000){
                    return "Belum memenuhi minimum order sebesar IDR 25.000";
                }else{
                    $hargadiskon = $harga * 0.6;
                    if($hargadiskon >= 30000){
                        $hargadiskon = 30000;
                    }
                    $hargamakanan = $harga - $hargadiskon;
                    if($pajak != "False" && $pajak != "false" && $pajak != "FALSE"){
                        $hargapajak = $hargamakanan * $pajak;
                        $hargamakanan += $hargapajak;
                    }
                }
            }elseif($voucher == "ARKAFOOD5"){ //minimal 50rb, diskon 50% max 50rb,
                if($harga < 50000){
                    return "Belum memenuhi minimum order sebesar IDR 50.000";
                }else{
                    $hargadiskon = $harga * 0.5;
					
                    if($hargadiskon >= 50000){
                        $hargadiskon = 50000;
                    }
                    $hargamakanan = $harga - $hargadiskon;
                    if($pajak != "False" && $pajak != "false" && $pajak != "FALSE"){
                        $hargapajak = $hargamakanan * $pajak;
                        $hargamakanan += $hargapajak;
                    }
                }
            }
            $totalharga = $hargamakanan + $hargaantar;
            return $totalharga;
        
        // jika tidak memakai voucher    
        }else{
            $hargamakanan = $harga;
            if($pajak != "False" && $pajak != "false" && $pajak != "FALSE"){
                $hargapajak = $hargamakanan * $pajak;
                $hargamakanan += $hargapajak;
            }
            $totalharga = $hargamakanan + $hargaantar;
            return $totalharga;
        }
    }
	$kupon= "ARKAFOOD5";
	$pajak= false;
    $test = arkaFood(75000,$kupon,5,$pajak);
    echo $test;
?>