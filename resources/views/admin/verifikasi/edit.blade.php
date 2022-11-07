{{-- <form action="{{ url('/admin/verifikasi/' . $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    {{ csrf_field() }}
    <input type="hidden" name="gambarLama" value="{{ $edit->foto }}">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fa fa-upload"></i> Upload Gambar
                    </h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="foto"> Foto </label>
                        <center>
                            @if (empty($edit->foto))
                            <img src="{{ url('/image/gambar_user.png') }}" class="img-fluid mb-3 gambar-preview"
                            id="tampilGambar">
                            @else
                            <img src="{{ url('/storage/' . $edit->foto) }}" class="img-fluid mb-3 gambar-preview"
                            id="tampilGambar">
                            @endif
                        </center>
                        <input type="file" class="form-control" name="foto" id="foto"
                        onchange="previewImage()">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fa fa-bars"></i> Data @yield("title")
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama"> Nama </label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                placeholder="Masukkan Nama" value="{{ $edit->nama }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Email </label>
                                <input type="email" class="form-control" name="email" id="email"
                                placeholder="Masukkan Email" value="{{ $edit->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="id_kota_kab"> Kota / Kabupaten </label>
                                <select name="id_kota_kab" class="form-control" id="id_kota_kab">
                                    <option value="">- Pilih -</option>
                                    @foreach ($kota_kab as $item)
                                    <option value="{{ $item["id"] }}" {{ $item["name"] == $edit["kota_kab"] ? 'selected' : '' }} >
                                        {{ $item["name"] }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="id_kecamatan"> Kecamatan </label>
                                <select name="id_kecamatan" class="form-control" id="id_kecamatan">
                                    <option value="">- Pilih -</option>
                                    <option value="{{ $edit->kecamatan }}" selected>{{ $edit->kecamatan }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="id_kelurahan"> Kelurahan </label>
                                <select name="id_kelurahan" class="form-control" id="id_kelurahan">
                                    <option value="">- Pilih -</option>
                                    <option value="{{ $edit->kelurahan }}" selected>
                                        {{ $edit->kelurahan }}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_hp"> No. HP </label>
                                <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="0"
                                min="1" value="{{ $edit->no_hp }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_jabatan"> Jabatan </label>
                                <select name="id_jabatan" class="form-control" id="id_jabatan">
                                    <option value="">- Pilih -</option>
                                    @foreach ($data_jabatan as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $edit->id_jabatan == $data->id ? 'selected' : '' }}>
                                        {{ $data->nama_jabatan }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat"> Alamat </label>
                        <textarea name="alamat" class="form-control" id="alamat" rows="5" placeholder="Masukkan Alamat">{{ $edit->alamat }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
</form> --}}
