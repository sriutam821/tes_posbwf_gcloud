@if (count( $errors) > 0 )
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            {{ $error }}<br>        
        @endforeach
    </div>
@endif
<style type="text/css">
    .select2 {
      width: 100%!important; /* overrides computed width, 100px in your demo */
    }
</style>
<div class="row">
    <div class="form-group col-md-6">
        {!! Form::label('username', 'Username') !!}
        {!! Form::text('username', $member->username, array('class' => 'form-control required', 'placeholder'=>'Masukan Username')) !!}
    </div>
    <div class="form-group col-md-6">
        <label><input type="checkbox" name="is_ganti_password" id="is_ganti_password" value="1"> Klik untuk ganti password </label>
        <input type="hidden" name="is_ganti_password_val" id="is_ganti_password_val" value="0">
        <input id="password" type="password" class="form-control required" name="password" placeholder="Masukan Password" value="{{$member->password}}">
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('nama', 'Nama Lengkap') !!}
        {!! Form::text('nama', $member->nama, array('class' => 'form-control required', 'placeholder'=>'Masukan Nama Lengkap')) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('tempat', 'Tempat Lahir') !!}
        {!! Form::text('tempat_lahir', $member->tempat_lahir, array('class' => 'form-control required', 'placeholder'=>'Masukan Tempat Lahir')) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('tanggal_lahir', 'Pilih Tanggal Lahir') !!}
        {!! Form::text('tgl_lahir', $member->tgl_lahir, array('type' => 'text', 'class' => 'form-control datepicker','placeholder' => 'Tanggal Lahir', 'id' => 'tgl_lahir')) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('id_jenis_kelamin', 'Pilih Jenis Kelamin') !!}
        {!! Form::select('id_jenis_kelamin', $jenis_kelamins, $member->id_jenis_kelamin, ['class' => 'form-control required']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('id_group_apotek', 'Group Apotek') !!}
        {!! Form::select('id_group_apotek', $group_apoteks, $member->id_group_apotek, ['class' => 'form-control required input_select']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('alamat', 'Alamat') !!}
        {!! Form::text('alamat', $member->alamat, array('class' => 'form-control required', 'placeholder'=>'Masukan Alamat')) !!}
    </div>
    <div class="form-group col-md-6">    
        {!! Form::label('kwgn', 'Pilih Kewarganegaraan') !!}
        {!! Form::select('id_kewarganegaraan', $kewarganegaraans, $member->id_kewarganegaraan, ['class' => 'form-control required']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('agama', 'Pilih Agama') !!}
        {!! Form::select('id_agama', $agamas, $member->id_agama, ['class' => 'form-control required']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('golongan_darah', 'Golongan Darah') !!}
        {!! Form::select('id_gol_darah', $golongan_darahs, $member->id_gol_darah, ['class' => 'form-control required']) !!}
    </div>
     <div class="form-group col-md-6">
        {!! Form::label('id_tipe_member', 'Tipe Member') !!}
        {!! Form::select('id_tipe_member', $tipe_members, $member->id_tipe_member, ['class' => 'form-control required input_select']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('telepon', 'Telepon') !!}
        {!! Form::text('telepon', $member->telepon, array('class' => 'form-control required number', 'placeholder'=>'Masukan Nomor Telepon')) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', $member->email, array('class' => 'form-control required', 'placeholder'=>'Masukan Alamat Email')) !!}
    </div>
</div>