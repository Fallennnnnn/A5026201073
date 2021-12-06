
   @extends('layout.bahagia')

   @section('title', 'Mengedit Data Absensi')
   @section('judulhalaman', 'Edit Data Absensi Pegawai')

   @section('konten')

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}">
        <label for ="IDPegawai">Pegawai</label> <select name="idpegawai" class = "form-control" >
            @foreach($pegawai as $p)
             <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        <br>
                <div class="form-group">
                    <label for="dtpickerdemo" class="control-label">Tanggal :</label>
                    <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tanggal" value="{{ $a->Tanggal }}" required="required" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: 'YYYY-MM-DD hh:mm:ss',
                            showTodayButton: false,
                            locale : 'id',
                            "defaultDate": new Date(),
                        });
                    });
                </script>

                <label for = "select-status">Status</label><br>

                <input type="radio" id="html" name="status" value="I" @if ($a->Status === "I" ) checked="checked" @endif>
                <label for="html">Izin</label><br>
                <input type="radio" id="css" name="status" value="S"  @if ($a->Status === "S" ) checked="checked" @endif>
                <label for="css">Sakit</label><br>
                <input type="radio" id="javascript" name="status" value="A"  @if ($a->Status === "A" ) checked="checked" @endif>
                <label for="javascript">Alpha</label><br><br>

        <input type="submit" class = "btn btn-success" value="Simpan Data">
         <a href="/absen" class = "btn btn-primary"> Kembali </a>
         <br><br>
	</form>
	@endforeach

   @endsection
