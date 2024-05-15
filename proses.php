<?php 
    class RentalMotor {
        private $nama;
        private $waktu;
        private $motor;
        private $jenisMotor = [
            "bebek" => ["Bebek", 50000],
            "beat" => ["Beat", 60000],
            "sport" => ["Sport", 70000],
            "listrik" => ["Listrik", 80000],
        ];

        public function getHargaSewa($motor) {
            if(array_key_exists($motor, $this->jenisMotor)) {
                return $this->jenisMotor[$motor][1];
            } else {
                echo "<p class='text text-center text-warning fw-bold'>Jenis Motor Tidak Ada</p>";
            }
        }

        public function __construct($nama, $waktu, $motor) {
            $this->nama = $nama;
            $this->waktu = $waktu;
            $this->motor = $motor;
        }

        public function prosesForm () {
            $error = [];
            if(empty($this->nama)) {
                $error[] = "Nama harus diisi";
            } 

            if(empty($error)) {
                $isMember = $this->checkMember($this->nama);
                $hargaSewa = $this->jenisMotor[$this->motor][1];
                $totalHarga = $hargaSewa * $this->waktu;
                $pajak = 10000;
            
                if($isMember) {
                    $diskon = ($totalHarga * 5) / 100;
                    $totalHarga -= $diskon;
                    echo $this->nama . " berstatus sebagai Member mendapatkan diskon sebesar 5%";
                } else {
                    echo $this->nama . " kamu bukan member jadi tidak mendapatkan diskon. <br>";
                }
            
                echo "<br>Jenis motor yang disewa adalah {$this->jenisMotor[$this->motor][0]} <br>";
                echo "Harga rental per hari nya adalah Rp. " . number_format($hargaSewa, 2, ',', '.') . "<br>";
                echo "Pajak: Rp. " . number_format($pajak, 2, ',', '.') . "<br>";
                
                echo "Total harga yang harus dibayar adalah Rp. " . number_format($totalHarga + $pajak, 2, ',', '.');
            }
        }
        public function checkMember($nama) {
            $memberList = ['Yogi', 'Rahman', 'Budi', 'Dono'];
            return in_array($nama, $memberList);
        }
    }
