<div class="row">
  <div class="col-lg-12">
    <h2 class="page-header">Daftar Alumni</h2>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
      <div class="panel panel-default">
          <div class="panel-heading">
              Form Search
          </div>
          <div class="panel-body">
              <div class="row">
                  <div class="col-lg-6">
                      {!! Form::open(['url' => 'admin/list_alumni', 'method'=>'GET']) !!}
                          <div class="form-group">
                              <label>Nama</label>
                              <input class="form-control" placeholder="Nama Alumni" name="name" <?php if( request()->get('name')!='') {echo 'value="'.request()->get('name').'"'; } ?>>
                          </div>
                          <div class="form-group">
                              <label>Sekolah SD</label>
                              <select class="form-control" name="sekolah_sd">
                                  <option value="">Pilih Sekeloh SD</option>
                                  @foreach ($sekolah_sds as $sekolah_sd)
                                  <option value="{{$sekolah_sd->id}}" <?php if(request()->get('sekolah_sd')==$sekolah_sd->id) echo 'selected' ?> >{{$sekolah_sd->name}}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="form-group">
                              <label>Sekolah SMP</label>
                              <select class="form-control" name="sekolah_smp">
                                  <option value="">Pilih Sekeloh SMP</option>
                                  @foreach ($sekolah_smps as $sekolah_smp)
                                  <option value="{{$sekolah_smp->id}}" <?php if(request()->get('sekolah_smp')==$sekolah_smp->id) echo 'selected' ?> >{{$sekolah_smp->name}}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="form-group">
                              <label>Sekolah SMA</label>
                              <select class="form-control" name="sekolah_sma">
                                  <option value="">Pilih Sekeloh SMA</option>
                                  @foreach ($sekolah_smas as $sekolah_sma)
                                  <option value="{{$sekolah_sma->id}}" <?php if(request()->get('sekolah_sma')==$sekolah_sma->id) echo 'selected' ?> >{{$sekolah_sma->name}}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="form-group">
                              <label>Angkatan</label>
                              <select class="form-control" name="angkatan">
                                  <option value="">Pilih Angkatan</option>
                                  @foreach ($angkatans as $angkatan)
                                  <option value="{{$angkatan->id}}" <?php if(request()->get('angkatan')==$angkatan->id) echo 'selected' ?> >{{$angkatan->name}}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="form-group">
                              <label>Jurusan</label>
                              <select class="form-control" name="jurusan">
                                <option value="">Pilih Jurusan</option>
                                @foreach ($jurusans as $jurusan)
                                <option value="{{$jurusan}}" <?php if(request()->get('jurusan')==$jurusan) echo 'selected' ?>>{{$jurusan}}</option>
                                @endforeach
                              </select>
                          </div>
                          <button type="submit" class="btn btn-primary">Search</button>
                      </form>
                  </div>
                  <!-- /.col-lg-6 (nested) -->
              </div>
              <!-- /.row (nested) -->
          </div>
          <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
  </div>
  <div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Angkatan</th>
                            <th>Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($alumnis as $alumni)
                        <tr>
                            <td>{{$alumni->name}}</td>
                            <td>{{$alumni->angkatan->name}}</td>
                            <td>{{$alumni->jurusan}}</td>
                            <td>
                                  <!-- Button trigger modal -->
                                  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal{{$alumni->id}}">
                                      Detail
                                  </button>
                                  <!-- Modal -->
                                  <div class="modal fade" id="myModal{{$alumni->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title" id="myModalLabel">Profile : {{$alumni->name}}</h4>
                                              </div>
                                              <div class="modal-body">
                                                <div class="row">
                                                  <div class="col-lg-1">
                                                    &nbsp;
                                                  </div>
                                                  <div class="col-lg-6">
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

                                                  </div>
                                                  <div class="col-lg-4">
                                                    <img class="img-responsive" src="{{$user->image->thumbnail('large')}}" />
                                                    <dl>
                                                       <dt>&nbsp;</dt>
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
                                                <div class="row">
                                                  <div class="col-lg-1">
                                                    &nbsp;
                                                  </div>
                                                  <div class="col-lg-11">
                                                    <dl>
                                                        <dt>Deskripsi Diri</dt>
                                                        <dd>{!!$user->description!!}</dd>
                                                    </dl>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              </div>
                                          </div>
                                          <!-- /.modal-content -->
                                      </div>
                                      <!-- /.modal-dialog -->
                                  </div>
                                  <!-- /.modal -->


                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
      </div>
    <!-- /.panel -->
  </div>
</div>
