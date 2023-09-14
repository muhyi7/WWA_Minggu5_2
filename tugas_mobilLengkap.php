<!DOCTYPE html>
<html>
<head>
    <title>Kasus Mobil BMW</title>
</head>
<body>
    <h1>Kasus Mobil BMW</h1>
    <?php
    class MobilLengkap {
        public function nontonTV() {
            echo "TV dihidupkan, TV Mencari Chanel, TV Menampilkan gambar<br />";
        }
    }

    class MobilBMW extends MobilLengkap {
        public function nontonTV() {
            echo "TV dihidupkan, TV Mencari Chanel, TV Menampilkan gambar di BMW<br />";
        }

        public function hidupkanMobil() {
            echo "BMW dihidupkan<br />";
        }

        public function matikanMobil() {
            echo "BMW dimatikan<br />";
        }

        public function ubahGigi() {
            echo "Gigi BMW diubah<br />";
        }
    }

    class MobilBMWBeraksi {
        public function test() {
            $bmw = new MobilBMW();
            $bmw->nontonTV(); // Memanggil metode dari MobilBMW
            $bmw->hidupkanMobil();
            $bmw->matikanMobil();
            $bmw->ubahGigi();
        }
    }

    $aksi = new MobilBMWBeraksi();
    $aksi->test();
    ?>
</body>
</html>
