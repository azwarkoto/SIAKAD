<?php 	
$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$quran_hadis = $this->db->get('quran_hadis')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$akidah_akhlak = $this->db->get('akidah_akhlak')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$fikih = $this->db->get('fikih')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$ski = $this->db->get('ski')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$pkn = $this->db->get('pkn')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$b_indo = $this->db->get('b_indo')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$b_arab = $this->db->get('b_arab')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$matematika = $this->db->get('matematika')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$sejarah_indo = $this->db->get('sejarah_indo')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$b_ing = $this->db->get('b_ing')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$seni_budaya = $this->db->get('seni_budaya')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$penjas = $this->db->get('penjas')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$prakarya_kewirausahaan = $this->db->get('prakarya_kewirausahaan')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$matematika_p = $this->db->get('matematika_p')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$biologi_p = $this->db->get('biologi_p')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$fisika_p = $this->db->get('fisika_p')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$kimia_p = $this->db->get('kimia_p')->num_rows();


$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$ekonomi_p = $this->db->get('ekonomi_p')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$sosiologi = $this->db->get('sosiologi')->num_rows();

$this->db->where('nis', $nis);
$this->db->where('semester', $semester);
$b_jerman_p = $this->db->get('b_jerman_p')->num_rows();
if($prakarya_kewirausahaan!=0 && $penjas!=0 && $seni_budaya!=0 && $b_ing!=0 && $sejarah_indo!=0 && $matematika!=0 || $akidah_akhlak!=0 && $quran_hadis!=0 && $kimia_p!=0 && $fisika_p!=0 && $biologi_p!=0)
{

		$data['page2']='userview/iparaport';
			$data['page']='userview/raportipa';
				$data['nav'] = 'layout/navbar-kiri-siswa';
				$data['nama'] = 'Rapot';
				$data['beranda'] = '';
				$data['nilai'] = '';
				$data['absen'] = '';
				$data['rapot'] = 'aktif';
				$data['guru'] = '';
				$data['profil'] = '';
				$semester='';
				$this->load->view('layout/home', $data); 
}
else{
				$_SESSION['do'] = 1;
 				$data['page2']='userview/blank';
				$data['page']='userview/raportipa';
				$data['nav'] = 'layout/navbar-kiri-siswa';
				$data['nama'] = 'Rapot';
				$data['beranda'] = '';
				$data['nilai'] = '';
				$data['absen'] = '';
				$data['rapot'] = 'aktif';
				$data['guru'] = '';
				$data['profil'] = '';
				$semester='';
				$this->load->view('layout/home', $data); 

}
 ?>