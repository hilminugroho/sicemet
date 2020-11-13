<?php
error_reporting (E_ALL ^ E_NOTICE);

        $kebutuhan=$_POST['jelaskan'];
        if($_POST['jelaskan']=='jelas'){
            $kebutuhan="jelas";
        }
        else{
            $kebutuhan="tidak";
        }

        $kompleksitas=$_POST['kompleksitas'];
        switch ($_POST['kompleksitas']) {
            case 'Sederhana':
                $kompleksitas="sederhana";
                break;

            case 'Kompleks':
                $kompleksitas="kompleks";
                break;

            case 'Sangat Kompleks':
                $kompleksitas="sangat kompleks";
                break;

            default:
                $kompleksitas="Pilih...";
                break;
        }

        $waktu=$_POST['waktu'];
        switch ($_POST['waktu']) {
            case '1 bulan':
                $waktu="1 bulan";
                break;
            
            case '1-3 bulan':
                $waktu="1-3 bulan";
                break;

            case '4-6 bulan':
                $waktu="4-6 bulan";
                break;

            case '6-12 bulan':
                $waktu="6-12 bulan";
                break;
                
            default:
                $waktu="Pilih...";
                break;
        }

        $tim=$_POST['orang'];
        if($_POST['orang']=='kurang'){
            $tim="kurang";
        }
        else {
            $tim="lebih";
        }

        $keterampilan=$_POST['keterampilan'];
        switch ($_POST['keterampilan']) {
            case 'Berpengalaman':
                $keterampilan="berpengalaman";
                break;

            case 'Campuran':
                $keterampilan="campuran";
                break;
            
            case 'Tidak berpengalaman':
                $keterampilan="newbie";
                break;

            default:
                $keterampilan="Pilih...";
                break;
        }

        $keterlibatan=$_POST['terlibat'];
        if ($_POST['terlibat']=='iya') {
            $keterlibatan="iya";
        }
        else {
            $keterlibatan="tidak terlibat";
        }
    ?>
    