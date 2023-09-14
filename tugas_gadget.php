<!DOCTYPE html>
<html>
<head>
    <title>Kasus Gadget</title>
</head>
<body>
    <h1>Kasus Gadget</h1>
    <?php
    class Tablet {
        protected $merk;
        protected $camera;
        protected $memory;

        public function __construct($merk, $camera, $memory) {
            $this->merk = $merk;
            $this->camera = $camera;
            $this->memory = $memory;
        }

        public function displayInfo() {
            echo "Merk: " . $this->merk . ", Camera: " . $this->camera . "MP, Memory: " . $this->memory . "GB<br />";
        }
    }

    class Handphone extends Tablet {
        private $handphone_baru;

        public function __construct($merk, $camera, $memory, $handphone_baru) {
            parent::__construct($merk, $camera, $memory);
            $this->handphone_baru = $handphone_baru;
        }

        public function beliHandphone() {
            echo "Membeli Handphone " . $this->handphone_baru . "<br />";
        }
    }

    // Contoh menggunakan enkapsulasi public
    $tablet = new Tablet("Samsung", 12, 64);

    echo "<h2>Tablet</h2>";
    $tablet->displayInfo();

    $handphone = new Handphone("iPhone", 16, 128, "iPhone 13");

    echo "<h2>Handphone</h2>";
    $handphone->displayInfo();
    $handphone->beliHandphone();
    ?>
</body>
</html>
