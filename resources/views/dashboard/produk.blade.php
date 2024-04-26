@extends('layouts.app')

@section('content')
    <div class="card border-0 mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col col-sm-12 col-md-4 col-lg-4 mb-2">
                    <div class="card bdr">
                        <div class="card-header text-secondary"> Total income</div>
                        <div class="card-body p-0 px-3">
                            <div class="d-flex flex-column">
                                <h4>Rp20.000</h4>
                                <p><Span class="p-1  rounded text-success fw-bold " style="background: #C9FCE9"><i class='bx bx-up-arrow-alt' ></i>0,120%</Span> Compared to last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-12 col-md-4 col-lg-4 mb-2">
                    <div class="card bdr">
                        <div class="card-header text-secondary"> Cepirit</div>
                        <div class="card-body p-0 px-3">
                            <div class="d-flex flex-column">
                                <h4>Rp10.000</h4>
                                <p><Span class="p-1  rounded text-danger fw-bold " style="background: #ffd9cc"><i class='bx bx-up-arrow-alt' ></i>0,120%</Span> Compared to last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-12 col-md-4 col-lg-4 mb-2">
                    <div class="card bdr">
                        <div class="card-header text-secondary">Convertion rate</div>
                        <div class="card-body p-0 px-3">
                            <div class="d-flex flex-column">
                                <h4>12%</h4>
                                <p><Span class="p-1  rounded text-success fw-bold " style="background: #C9FCE9"><i class='bx bx-up-arrow-alt' ></i>0,120%</Span> Compared to last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            {{-- dashboard --}}
            <div class="tbl  mt-1 ms-1 bg-white mt-3"
                style="overflow:hidden; overflow-x:auto;">
                <table class="table">
                    <thead style=" background-color:#F9FAFB;color:#374151">
                        <tr class="">
                            <th scope="col">No</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga </th>
                            <th scope="col">Stock </th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Gunakan ini untuk foreach  --}}
                        <tr>
                            <th scope="row" class="align-middle">1</th>
                            <td class="align-middle"><img
                                    src="https://img.freepik.com/free-psd/black-friday-super-sale-social-media-banner-template_106176-1502.jpg?t=st=1714020151~exp=1714023751~hmac=8e13a96f9f1e3ea60ae90e3d06105e3ab30c95cc16fda44ac90130942bf8e082&w=740"
                                    alt="mppsh" class="img-fluid" style="width: 60px; heigh:60px"></td>
                            <td class="align-middle">Sepatu Bekas Ningguang</td>
                            <td class="align-middle">Rp4.000.000</td>
                            <td class="align-middle">
                                <span
                                    class=" rounded p-2 text-success fw-bold"style="font-size: 12px; background-color: #ccf0e0">Tersedia
                                </span>
                            </td>
                            <td class="align-middle">
                                <x-modal-button id="edit-2" type="primary" buttonName="Edit" />
                                <x-modal id="edit-2" title="Edit data produk" buttonName="Update"
                                    content="Simpan perubahan?" />

                                <x-modal-button id="hapus-2" type="danger" buttonName="Hapus"/>
                                <x-modal id="hapus-2" title="Hapus produk" content="AOWAWOOKWAKOWAAW RAFLI JMBT" buttonName="Ya, hapus"/>
                             </td>
                        </tr>

                        {{-- Dummy --}}
                        <tr>
                            <th scope="row" class="align-middle">2</th>
                            <td class="align-middle">
                                <img src="https://img.freepik.com/premium-vector/exclusive-sneakers-shoes-collection-men-social-media-post-banner-template-design_667546-246.jpg?w=740"
                                    alt="mppsh" class="img-fluid" style="width: 60px; heigh:60px">
                            </td>
                            <td class="align-middle">Sepatu Bekas Ningguang</td>
                            <td class="align-middle">Rp2.100.000</td>
                            <td class="align-middle">
                                <span class="rounded p-2 text-danger fw-bold"
                                    style="font-size: 12px; background-color: #ffd9cc">Tidak Tersedia</span>
                            </td>
                            <td class="align-middle">
                                {{-- Edit button using modal --}}
                                <x-modal-button id="edit" type="primary" buttonName="Edit" />
                                <x-modal id="edit" title="Jambut" buttonName="Tambah"
                                    content="
                                    AOKWWAOWAK
                                " />
                                {{-- hapus using modal --}}
                                <x-modal-button id="hapus" type="danger" buttonName="Hapus" />
                                <x-modal id="hapus" title="Yakin hapus?" buttonName="Hapus"
                                    content="Kamu akan menghapus produk dengan id-" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
