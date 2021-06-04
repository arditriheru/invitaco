<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataTheme1 extends CI_Controller {

	public function index()
	{
		$d = $this->input->get('d');
		$data['yth'] = urldecode($d);

		$data['counter_thn'] 	= 2021;
		$data['counter_bln'] 	= 8;
		$data['counter_tgl'] 	= 15;

		$data['mp'] 		= "Ardi";
		$data['mw'] 		= "Diah";
		$data['mpp'] 		= "Ardi Tri Heru, S.Kom";
		$data['mwp'] 		= "Diah Yuniarsih, S.M";
		$data['mp_ortu'] 	= "Bapak Sarmuji & Ibu Rumini";
		$data['mw_ortu'] 	= "Bapak Bukhori & Ibu Sri Suyanti";

		$data['hari_akad'] 		= "Minggu";
		$data['tgl_akad'] 		= "15 Agustus 2021";
		$data['jam_akad1'] 		= "09.00 WIB";
		$data['jam_akad2'] 		= "Selesai";
		$data['tempat_akad'] 	= "Rumah Mempelai Wanita";
		$data['alamat_akad'] 	= "Jl. Tengiri 8 No.3, Mladangan, Minomartani, Kec. Ngaglik, Kabupaten Sleman, Yogyakarta 55581";
		$data['map_akad'] 		= "https://www.google.com/maps/place/Bakpia+Minomartani+803+Bu+Marno/@-7.7463759,110.4060388,15z/data=!4m2!3m1!1s0x0:0x813519ae77826bb5?sa=X&ved=2ahUKEwjd0eiCoeTwAhUz7HMBHZhzAeEQ_BIwE3oECFIQBQ";

		$data['hari_resepsi'] 		= "Minggu";
		$data['tgl_resepsi'] 		= "15 Agustus 2021";
		$data['jam_resepsi1'] 		= "13.00 WIB";
		$data['jam_resepsi2'] 		= "Selesai";
		$data['tempat_resepsi'] 	= "Rumah Mempelai Pria";
		$data['alamat_resepsi'] 	= "Sedogan 02/21 Lumbungrejo, Tempel, Sleman Regency, Special Region of Yogyakarta 55552";
		$data['map_resepsi'] 		= "https://www.google.com/maps/place/Orega+Store/@-7.6428104,110.3304182,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a5fc82d20d2eb:0xc451aabb4cc4f34f!8m2!3d-7.6428353!4d110.3326012";

		// $this->load->view('templates/header');
		// $this->load->view('templates/menu');
		$this->load->view('theme1/vIndex',$data);
		// $this->load->view('templates/footer');
	}

}
