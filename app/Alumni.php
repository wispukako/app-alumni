<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Hash;

use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Image;

class Alumni extends SleepingOwlModel implements ModelWithImageFieldsInterface, AuthenticatableContract
{

		protected $table = 'alumni';

    protected $fillable = array('name','address','phone','email','birthdate','sekolah_sd_id','sekolah_smp_id','sekolah_sma_id',
																'username','password','image','angkatan_id','description',
																'role','tahun_masuk','tahun_lulus','alamat_domisili','kelurahan_desa',
																'kecamatan','kota_kabupaten','provinsi','rtrw','kode_pos','jenis_pekerjaan',
																'no_tlp_rumah','no_tlp_kantor','no_tlp_kantor_ext','nama_kantor','bidang_pekerjaan',
																'jabatan','alamat_kantor','hobi','jurusan');

    use ModelWithImageOrFileFieldsTrait;

		use Authenticatable;

		protected $hidden = [
			'password',
			'remember_token',
		];

		public function setPasswordAttribute($value)
		{
			if ( ! empty($value))
			{
				$this->attributes['password'] = Hash::make($value);
			}
		}

		public function sekolah_sd()
		{
				return $this->belongsTo('App\SekolahSd','sekolah_sd_id');
		}

		public function sekolah_smp()
		{
				return $this->belongsTo('App\SekolahSmp','sekolah_smp_id');
		}

		public function Sekolah_sma()
		{
				return $this->belongsTo('App\SekolahSma','sekolah_sma_id');
		}

		public function angkatan()
		{
				return $this->belongsTo('App\Angkatan','angkatan_id');
		}

		public function pekerjaan()
		{
				return $this->belongsTo('App\Pekerjaan','jenis_pekerjaan');
		}

		public function blogs()
		{
			return $this->hasMany('App\Blog');
		}

		public function getDates()
		{
		    return array_merge(parent::getDates(), ['birthdate']);
		}

		public function getImageFields()
    {
        return [
            'image' => 'monuments/',
            'photo' => '',
            'other' => ['other_images/', function($directory, $originalName, $extension)
            {
                return $originalName;
            }]
        ];
    }


    /*
     * This is only for demo application to disable file uploads
     */
		 public function setImage($field, $image)
		 {
		     parent::setImage($field, $image);
		     $file = $this->$field;
		     if ( ! $file->exists()) return;
		     $path = $file->getFullPath();

		     // you can use Intervention Image package features to change uploaded image
		     Image::make($path)->save();
		 }

}
