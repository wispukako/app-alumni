<div class="row">
  <div class="col-lg-12">
    <h2 class="page-header">Dashboard</h2>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">{{$total_alumni}}</div>
            <div>Total Alumni</div>
          </div>
        </div>
      </div>
      <a href="{{ URL::to('admin/list_alumni') }}">
        <div class="panel-footer">
          <span class="pull-left">Tampilkan Detail</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-users fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">{{$total_angkatan}}</div>
            <div>Total Angkatan</div>
          </div>
        </div>
      </div>
      <a href="{{ URL::to('admin/list_alumni') }}">
        <div class="panel-footer">
          <span class="pull-left">Tampilkan Detail</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-yellow">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-rss fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">{{$total_blog}}</div>
            <div>Total Blog</div>
          </div>
        </div>
      </div>
      <a href="{{ URL::to('/blog') }}">
        <div class="panel-footer">
          <span class="pull-left">Tampilkan Detail</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-red">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-camera fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">{{$total_gallery}}</div>
            <div>Total Gallery</div>
          </div>
        </div>
      </div>
      <a href="{{ URL::to('/gallery') }}">
        <div class="panel-footer">
          <span class="pull-left">Tampilkan Detail</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-bell fa-fw"></i> Profile Saya
      </div>

      <div class="panel-body">
      <div class="row">
        <div class="col-lg-3">
          <img class="img-responsive" src="{{$user->image->thumbnail('large')}}" />
        </div>
        <div class="col-lg-5">
          <dl>
              <dt>Nama</dt>
              <dd>{{$user->name}}</dd>
              <dt>Username</dt>
              <dd>{{$user->username}}</dd>
              <dt>Email</dt>
              <dd>{{$user->email}}</dd>
              <dt>Sekolah SD</dt>
              <dd>{{$user->sekolah_sd->name}}</dd>
              <dt>Sekolah SMP</dt>
              <dd>{{$user->sekolah_smp->name}}</dd>
              <dt>Sekolah SMA</dt>
              <dd>{{$user->sekolah_sma->name}}</dd>
              <dt>Angkatan</dt>
              <dd>{{$user->angkatan->name}}</dd>
              <dt>Tahun Masuk</dt>
              <dd>{{$user->tahun_masuk}}</dd>
              <dt>Tahun Lulus</dt>
              <dd>{{$user->tahun_lulus}}</dd>
              <dt>Jurusan</dt>
              <dd>{{$user->jurusan}}</dd>
              <br/>
              <dt>Handphone</dt>
              <dd>{{$user->phone}}</dd>
              <dt>Telephone Rumah</dt>
              <dd>{{$user->no_tlp_rumah}}</dd>
              <dt>Alamat</dt>
              <dd>  {{$user->alamat_domisili}}
                    <br>RT/RW: {{$user->rtrw}}, Kelurahan/Desa: {{$user->kelurahan_desa}}
                    <br>Kecamatan: {{$user->kecamatan}}, Kota/Kabupaten: {{$user->kota_kabupaten}}
                    <br>Provinsi: {{$user->provinsi}}, Kode Post : {{$user->kode_pos}}
              </dd>
              <br/>
              <dt>Birth Date</dt>
              <dd>{{$user->birthdate}}</dd>
              <dt>Hobi</dt>
              <dd>{{$user->hobi}}</dd>
              <dt>Deskripsi Diri</dt>
              <dd>{!!$user->description!!}</dd>
          </dl>
          <button type="button" onclick="javascript:location.href='http://localhost/app-alumni/public/admin/alumnis/{{$user->id}}/edit'" class="btn btn-primary">Edit Profile</button>

        </div>
        <div class="col-lg-4">
          <dl>
              <dt>Jenis Pekerjaan</dt>
              <dd>{{$user->pekerjaan->name}}</dd>
              <dt>Bidang Pekerjaan</dt>
              <dd>{{$user->bidang_pekerjaan}}</dd>
              <dt>Jabatan</dt>
              <dd>{{$user->jabatan}}</dd>
              <dt>Nama Kantor</dt>
              <dd>{{$user->nama_kantor}}</dd>
              <dt>Alamat Kantor</dt>
              <dd>{{$user->alamat_kantor}}</dd>
              <dt>Telephone Kantor / Ekstensi</dt>
              <dd>{{$user->no_tlp_kantor}} / {{$user->no_tlp_kantor_ext}}</dd>
          </dl>

        </div>
      </div>

      </div>
      <div class="panel-footer">

      </div>
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
