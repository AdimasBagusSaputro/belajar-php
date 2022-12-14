<?php

if(isset($GET['p'])) {

    if ($_GET['p'] == 'tampil'){

        echo $_POST['nama'];
        echo "<br/>";
        echo $_POST['pasword'];

    } else if ($_GET['p'] == "pesan") {
        echo "halo apa kabar".$_POST['nama'];
        echo "<br/>";
        echo "pasword anda adalah".$_POST['pasword'];
    } else if ($_GET['p'] == "gambar") {
        
    }
} else {
    echo "anda tidak boleh mengakses halaman ini";

}