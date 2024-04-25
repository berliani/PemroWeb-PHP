<?php
class Book{
   private $tittle,
        $year,
        $pages,
        $materials,
        $discount;

        public function __construct($tittle, $year, $pages, $materials, $discount){
            $this-> tittle = $tittle;
            $this->year = $year;
            $this->pages = $pages;
            $this->materials = $materials;
            $this->discount = $discount;
        }
        public function getTittle(){
            return $this->tittle;
        }
        public function getYear(){
            return $this->year;
        }
        public function getPages(){
            return $this->pages;
        }
        public function getMaterials(){
            return $this->materials;
        }
        public function getDiscount(){
            return $this->discount;
        } 
        
        public function setDiscount(){
            $this->discount = 0;
        }
        public function CheckthePrice() {
            if ($this->year <= 5) {
                if ($this->pages <= 100) {
                    return 100000;
                } elseif ($this->pages > 500) {
                    return 500000;
                } else {
                    return 300000;
                }
            } elseif ($this->year > 5 && $this->year <= 10) {
                if ($this->pages <= 100) {
                    return 50000;
                } elseif ($this->pages > 500) {
                    return 250000;
                } else {
                    return 150000;
                }
            } else {
                return 10000;
            }
        }
    }

    class Comic extends Book{
        private $isColorful;

        private function __construct($tittle, $year, $pages, $materials, $isColorful){
            parent::__construct($tittle, $year, $pages, $materials, $discount = 0);
            $this->isColorful = $isColorful;
        }
        public static function CreateObject ($tittle, $year, $pages, $materials, $discount = 0) {
            return new Book($tittle, $year, $pages, $materials, $discount);
        }
        public function getisColorful(){
            return $this->isColorful;
        }
    }
// Buat objek Buku
$book_calculus = new Book("Calculus", 2024, 1000, "Kertas", 20);
$tittle_calculus = $tittle_calculus->getTittle();
echo "Judul Buku Calculus: $tittle_calculus\n";
echo "<br>";
// Buat objek Komik
$comic = new Book("One Piece", 1998, 500, "Kertas", 20);
$tittle_comic = $comic->getTittle();
echo "Judul Buku Comic: $tittle_comic\n";





?>

<!-- dan jumlah halaman tidak lebih dari 100 -->