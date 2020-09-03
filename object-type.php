<?php
class anak{

	public $nama;
	public $rombel;
	public $rayon;

	
	public function __ constrct($nama, $rayon, $rombel ){
		$this->nama = $nama;
		$this->rayon = $rayon;
		$this->rombel = $rombel;
	}

	public function getcetak(){

		return "$this->rayon, $this->rombel";
	}

}

class sinfo{

	public function cetak(anak $anak){
		$str = "<h2> Data siswa {$anak->nama} </3>  <h3>
		{$anak->getcetak()} </h3>";
		return $str;
	}
}

$anak1 = new anak("Awan Ara Budiman","Cibedug 2", "RPL XI-1");
$anak2 = new anak("Afa Fathin Al-Aziz","Cicurug 3", "RPL XI-1");
$anak3 = new anak("Muhammad Angga Hade Prayoga", "Cicurug 3", "RPL XI-1");
$info = new sinfo();

echo $info->cetak($anak1);
echo "<br>";
echo $info->cetak($anak2);
echo "<br>";
echo $info->cetak($anak3);
echo "<br>";

?>
