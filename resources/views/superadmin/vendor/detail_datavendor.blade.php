<label class="label">ID Vendor</label></label>
                        <input type="text" class="form-control" id="id" value="{{ $detail->id }}">
                        <label class="label">Nama Vendor</label>
                        <input type="text" class="form-control" id="namavendor" value="{{ $detail->nama_lengkap }}">
                        <label class="label">Nama Pemilik</label>
                        <input type="text" class="form-control" id="nama" value="{{ $detail->name }}">
                        <label class="label">Username</label>
                        <input type="text" class="form-control" id="username" value="{{ $detail->name }}">
                        <label class="label">Saldo</label>
                        <input type="text" class="form-control" id="saldo" placeholder="Rp 10,000,000">

                        <div class="kk">
                            <h4>Scan KK & KTP</h4>
                            <img src="{{ asset('storage/kk/'.Auth::user()->image_kk) }}">
                            <img src="{{ asset('storage/kk/'.Auth::user()->image_ktp) }}" style="margin-left: 20px;">
                        </div>
                    </div>
                    <div class="modal-footer d-md-block">
                        <button type="button" class="btn-sm btn-primary">Edit</button>
                        <button type="button" class="btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
