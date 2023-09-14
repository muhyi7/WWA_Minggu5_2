<!DOCTYPE html>
<html>
<head>
    <title>Kasus Fashion</title>
</head>
<body>
    <h1>Kasus Fashion</h1>
    <?php
    class ItemProduk {
        protected $tipe;
        protected $model;

        public function ukuran() {
            echo "Ukuran: " . $this->tipe . "<br />";
        }

        public function warna() {
            echo "Warna: " . $this->model . "<br />";
        }

        public function nama() {
            echo "Nama: " . $this->tipe . " " . $this->model . "<br />";
        }
    }

    class Topi extends ItemProduk {
        public function __construct($model) {
            $this->model = $model;
            $this->tipe = "Topi";
        }
    }

    class Celana extends ItemProduk {
        public function __construct($tipe, $model) {
            $this->tipe = $tipe;
            $this->model = $model;
        }
    }

    class Baju extends ItemProduk {
        public function __construct($tipe, $model) {
            $this->tipe = $tipe;
            $this->model = $model;
        }
    }

    $topi = new Topi("Topi Panjang");
    $celana = new Celana("Celana Pendek", "Model A");
    $baju = new Baju("Kemeja", "Model B");

    echo "<h2>Topi</h2>";
    $topi->ukuran();
    $topi->warna();
    $topi->nama();

    echo "<h2>Celana</h2>";
    $celana->ukuran();
    $celana->warna();
    $celana->nama();

    echo "<h2>Baju</h2>";
    $baju->ukuran();
    $baju->warna();
    $baju->nama();
    ?>
</body>
</html>
