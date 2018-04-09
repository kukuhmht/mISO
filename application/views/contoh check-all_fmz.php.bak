@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Data siswa</div>

                <div class="panel-body">
                    <div class="form-group">
                        <label>Pilih Kelas</label>
                        <select id="kelas" class="form-control">
                            @foreach($kelas as $k)
                            <option value="{{ $k->id_kelas }}" @if($k->id_kelas == $idk) selected @endif>{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <hr>

                    <div class="table-responsive">
                        @if(count($siswa) > 0)
                        <table class="table table-bordered" id="tableSiswa">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="select-all checkbox" name="select-all"></th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($siswa as $s)
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="select-item checkbox" name="select-item" value="{{$s->id_siswa}}"/>
                                            </td>
                                            <td>{{$s->nis}}</td>
                                            <td>{{$s->nama}}</td>
                                            <td>{{$s->kelas->nama_kelas}}</td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>

                        @else
                            <strong><p>Data tidak tersedia.</p></strong>
                        @endif
                    </div>
                </div>
                @if(Auth::user()->hak_akses == 'admin')
                <div class="panel-footer">
                    {{-- <button id="export" class="btn btn-success">Export Data Siswa</button> --}}
                    {{-- <a href="{{ url('/kelola-siswa/create') }}" class="btn btn-success">Daftarkan siswa</a> --}}
                    {{-- <a href="{{ url('/kelola-siswa/naik-kelas') }}" class="btn btn-success">Kenaikan Kelas</a> --}}

                    <button id="select-all" class="btn btn-default">SelectAll/Cancel</button>
                    <button id="select-invert" class="btn btn-default">Invert</button>
                    <button id="selected" class="btn btn-primary">Naikan Kelas (Checked)</button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('#kelas').change(function() {
        window.location = "/kelola-siswa/naik-kelas?idk=" + $('#kelas').val() + "";

        // $.ajax({
        //     type: 'GET',
        //     url:  "url('/kelola-siswa/ambil-kelas",
        //     data: {id_kelas: $('#kelas').val()},
        //     beforeSend: function (xhr) {
        //         var token = $('meta[name="csrf_token"]').attr('content');

        //         if (token) {
        //               return xhr.setRequestHeader('X-CSRF-TOKEN', token);
        //         }
        //     },
        //     success: function(data) {
        //         $('div.table-responsive').fadeOut();
        //         $('div.table-responsive').load(data, function() {
        //             $('div.table-responsive').fadeIn();
        //         });

        //         console.log(data);
                
        //     },
        //     error: function(data) {
        //         console.log(data);
        //     },
        //     dataType: 'JSON'
        // });
    });

    // Checkbox Table
    $(function(){

        //button select all or cancel
        $("#select-all").click(function () {
            var all = $("input.select-all")[0];
            all.checked = !all.checked
            var checked = all.checked;
            $("input.select-item").each(function (index,item) {
                item.checked = checked;
            });
        });

        //button select invert
        $("#select-invert").click(function () {
            $("input.select-item").each(function (index,item) {
                item.checked = !item.checked;
            });
            checkSelected();
        });

        //button get selected info, Naikan Kelas
        $("#selected").click(function () {
            var items=[];
            $("input.select-item:checked:checked").each(function (index,item) {
                items[index] = item.value;
            });
            if (items.length < 1) {
                alert("Tidak ada siswa yang dipilih");
            }else {
                var values = items.join(',');
                console.log(items);

                $.ajax({
                    type:       "POST",
                    url:        "{{ url('kelola-siswa/naik-kelas') }}",
                    data:       { id_siswa: items},
                    success:    function() {
                                    location.reload();
                                },

                });
            }
        });

        //column checkbox select all or cancel
        $("input.select-all").click(function () {
            var checked = this.checked;
            $("input.select-item").each(function (index,item) {
                item.checked = checked;
            });
        });

        //check selected items
        $("input.select-item").click(function () {
            var checked = this.checked;
            console.log(checked);
            checkSelected();
        });

        //check is all selected
        function checkSelected() {
            var all = $("input.select-all")[0];
            var total = $("input.select-item").length;
            var len = $("input.select-item:checked:checked").length;
            console.log("total:"+total);
            console.log("len:"+len);
            all.checked = len===total;
        }
    });
</script>
@endsection