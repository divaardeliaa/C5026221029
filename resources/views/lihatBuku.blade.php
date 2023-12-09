@extends('master2')

@section('judulhalaman', 'Data Buku')

@section('konten')
    <style>
    input.check {
        width: 30px;
        height: 40px;
    }
    </style>

    <h3>Lihat Buku</h3>

        <a href="/buku"> Kembali</a>

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
                @foreach($buku as $b)
                <fieldset disabled>
                    <form action="/buku/update" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="kodebuku" value="{{ $b->kodebuku }}"> <br/>

                        <div class="form-group row">
                            <label for="nama" class="col-2 col-form-label">Merk Buku</label>
                            <div class="col-8">
                                <input type="text" required="required" value="{{ $b->merkbuku }}" class="form-control" id="merkbuku" name="merkbuku">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stockbuku" class="col-2 col-form-label">Stock Buku</label>
                            <div class="col-8">
                                <input type="number" required="required" value="{{ $b->stockbuku }}" class="form-control" id="stockbuku" name="stockbuku">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tersedia" class="col-2 col-form-label">Ketersediaan</label>
                            <div class="col-8">
                                <input class="check" type="checkbox" name="tersedia" value='y' {{ $b->tersedia == 'y' ? 'checked' : '' }}>
                            </div>
                        </div>

                    </form>

                </fieldset>

                <div><a href="/buku" class="btn btn-primary">Ok</a></div>

            @endforeach

@endsection
