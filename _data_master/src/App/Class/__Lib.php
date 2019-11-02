<?php
	class __Lib {
		
		public function hargaRp($nominal) {
			$len 	= str_split( (string)$nominal );
			$f1 	= count($len) % 3;
			$hs 	= str_split( implode('', array_slice($len, $f1) ), 3);

			if ($f1 !== 0 ) {
				return "Rp." . implode('', array_slice($len, 0, $f1) ) . "." . implode('.', $hs) . ",-";
			}
			else {
				return "Rp." . implode('.', $hs) . ",-";
			}
		}

		private function kekata($x) {
			$x = abs($x);

			$angka = array("", "satu", "dua", "tiga", "empat", "lima",
			"enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");

			$temp = "";

			if ($x <12) {
				$temp = " ". $angka[$x];
			} else if ($x <20) {
				$temp = $this->kekata($x - 10). " belas";
			} else if ($x <100) {
				$temp = $this->kekata($x/10)." puluh". $this->kekata($x % 10);
			} else if ($x <200) {
				$temp = " seratus" . $this->kekata($x - 100);
			} else if ($x <1000) {
				$temp = $this->kekata($x/100) . " ratus" . $this->kekata($x % 100);
			} else if ($x <2000) {
				$temp = " seribu" . $this->kekata($x - 1000);
			} else if ($x <1000000) {
				$temp = $this->kekata($x/1000) . " ribu" . $this->kekata($x % 1000);
			} else if ($x <1000000000) {
				$temp = $this->kekata($x/1000000) . " juta" . $this->kekata($x % 1000000);
			} else if ($x <1000000000000) {
				$temp = $this->kekata($x/1000000000) . " milyar" . $this->kekata(fmod($x,1000000000));
			} else if ($x <1000000000000000) {
				$temp = $this->kekata($x/1000000000000) . " trilyun" . $this->kekata(fmod($x,1000000000000));
			}
			return $temp;
		}

		public function terbilang($x, $style=1) {
			if($x<0) {
				$hasil = "minus ". trim($this->kekata($x));
			} else {
				$hasil = trim($this->kekata($x));
			}
			switch ($style) {
				case 1:
					$hasil = strtoupper($hasil);
					break;
				case 2:
					$hasil = strtolower($hasil);
					break;
				case 3:
					$hasil = ucwords($hasil);
					break;
				default:
					$hasil = ucfirst($hasil);
					break;
			}
			return $hasil;
		}


	}