@extends("layouts_super.main")
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Data Transaksi</h2>
            </div>
        </div>

        <!-- data list -->
        <div class="details1 w-auto">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Data Transaksi</h2>
                    <button
                        href="#" class="btn btn-thema">User</a>
                    </button>
                    <button
                        href="#" class="btn btn-thema">Vendor</a>
                    </button>
                </div>
                <table class="table-borderless mt-3 w-auto">
                    <thead class="text-start">
                        <tr>
                            <td>Tanggal</td>
                            <td>Nama</td>
                            <td>Id Transaksi</td>
                            <td>Total</td>
                            <td>Status</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody class="text-start">
                        <tr>
                            <td>12-09-2020</td>
                            <td>Robecca Howard</td>
                            <td>M120917243434</td>
                            <td>Rp500.000</td>
                            <td>Done</td>
                            <td>
                                <button class="btndetail" data-bs-toggle="modal" data-bs-target="#exampleModalDetail">
                                    Detail</i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
