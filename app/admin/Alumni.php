<?php

Admin::model('App\Alumni')->title('Daftar Alumni')->with('angkatan')->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Name');
	Column::string('angkatan.name', 'Angkatan');
	Column::image('image', 'Photo');
	Column::string('phone', 'Phone');
	Column::string('email', 'Email');
	Column::string('role', 'Jenis User');

})->form(function ()
{

	FormItem::text('name','Nama')->required();
	FormItem::text('username')->required()->unique();
	FormItem::text('email')->required();
	FormItem::password('password')->required();
	if(AdminAuth::user() && AdminAuth::user()->role=='Admin'){
		FormItem::select('role', 'Jenis User')->enum(['Admin','Member'])->required();
	}
//	FormItem::view('separator',$data['title']='Title');

	FormItem::select('sekolah_sd_id','Sekolah SD')->list('\App\SekolahSd');
	FormItem::select('sekolah_smp_id','Sekolah SMP')->list('\App\SekolahSmp');
	FormItem::select('sekolah_sma_id','Sekolah SMA')->list('\App\SekolahSma');

	FormItem::select('angkatan_id','Angkatan')->list('\App\Angkatan');
	FormItem::text('tahun_masuk','Tahun Masuk');
	FormItem::text('tahun_lulus','Tahun Lulus');
	FormItem::select('jurusan', 'Jurusan')->enum(['IPA','IPS','Bahasa'])->required();

	FormItem::text('alamat_domisili', 'Alamat Domisili');
	FormItem::text('kelurahan_desa', 'Kelurahan/Desa');
	FormItem::text('kecamatan', 'Kecamatan');
	FormItem::text('kota_kabupaten', 'Kota/Kabupaten');
	FormItem::text('provinsi', 'Provinsi');
	FormItem::text('rtrw', 'RT/RW');
	FormItem::text('kode_pos', 'Kode Post');
	FormItem::text('phone','Handphone');
	FormItem::text('no_tlp_rumah','Telephone Rumah');

	FormItem::select('jenis_pekerjaan','Jenis Pekerjaan')->list('\App\Pekerjaan');
	FormItem::text('no_tlp_kantor','Telephone Kantor');
	FormItem::text('no_tlp_kantor_ext','Ekstensi Telephone Kantor');
	FormItem::text('nama_kantor', 'Nama Kantor');
	FormItem::text('bidang_pekerjaan', 'Bidang Pekerjaan');
	FormItem::text('jabatan', 'Jabatan');
	FormItem::text('alamat_kantor', 'Alamat Kantor');

	FormItem::date('birthdate', 'Birth Date');
	FormItem::text('hobi', 'Hobi');
	FormItem::image('image', 'Image');
	FormItem::ckeditor('description','Deskripsi Diri');

});
