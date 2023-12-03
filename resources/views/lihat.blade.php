@extends('master2')

@section('judulhalaman', 'Data Pegawai')

@section('konten')
    <h3>Lihat Pegawai</h3>

        <a href="/pegawai"> Kembali</a>

        <br />
        <br />

        <div class="row">
            <div class="col-4 border border-primary">
                {{-- <div class="card" style="width:300px">
                    <img src="https://img.freepik.com/free-photo/business-finance-employment-female-successful-entrepreneurs-concept-friendly-smiling-office-manager-greeting-new-coworker-businesswoman-welcome-clients-with-hand-wave-hold-laptop_1258-59122.jpg?w=996&t=st=1701625591~exp=1701626191~hmac=f1e963d4263d403e3c40f7ae429ff1727ae87e24824ddeb3736ce36140dd30d1" class="card-img-top" alt="Foto Pegawai">
                    <div class="card-body">
                      <h4 class="card-title">John Doe</h4>
                      <p class="card-text">Some example text.</p>
                      <p>Here is the text</p>
                    </div>
                  </div> --}}



            </div>
            <div class="col-8">
                @foreach($pegawai as $p)
                <fieldset disabled>
                    <form action="/pegawai/update" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

                        <div class="form-group row">
                            <label for="nama" class="col-1 col-form-label">Nama</label>
                            <div class="col-8">
                                <input type="text" required="required" value="{{ $p->pegawai_nama }}" class="form-control" id="nama" name="nama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jabatan" class="col-1 col-form-label">Jabatan</label>
                            <div class="col-8">
                                <input type="text" required="required" value="{{ $p->pegawai_jabatan }}" class="form-control" id="jabatan" name="jabatan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="umur" class="col-1 col-form-label">Umur</label>
                            <div class="col-8">
                                <input type="text" required="required" value="{{ $p->pegawai_umur }}" class="form-control" id="umur" name="umur">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-1 col-form-label">Alamat</label>
                            <div class="col-8">
                                <textarea class="form-control" id="alamat" name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea>
                            </div>
                        </div>
                    </form>

                </fieldset>

                <div><a href="/pegawai" class="btn btn-primary">Ok</a></div>

            @endforeach

@endsection
