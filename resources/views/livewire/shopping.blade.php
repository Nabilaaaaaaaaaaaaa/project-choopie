<div>
    <div class="container">
        <div class="row">
            <div class="col-3">

                <div class="card">
                    <div class="card-header">
                      KERANJANG
                    </div>
                    <div class="card-body">
                        {{ $jumlah }}
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                      BELANJAAN SAYA
                    </div>
                    <div class="card-body">
                        @foreach ($datas as $item)
                        <p>{{ $item->nama_barang }}</p>
                        <button type="button" class="btn btn-danger" wire:click="hapus({{$item->id}})">DELETE</button>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card">
                      PRODUK
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-3">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{asset('gambar/hoodie.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">HOODIE</h5>
                                      <p class="card-text">Hoodie ini dibuat dari bahan flacee tebal dengan ukuran all size</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Rp. 120.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('HOODIE','120000')">BELI</button>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-3">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{asset('gambar/sepatu.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">SEPATU</h5>
                                      <p class="card-text">Sepatu ini dibuat dari bahan sintetis dan tersedia ukuran 36-40</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Rp. 200.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('SEPATU','200000')">BELI</button>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-3">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{asset('gambar/tas sekolah.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">RANSEL</h5>
                                      <p class="card-text">Ransel ini dibuat dengan tampilan yang aesthetic dan lucu</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Rp. 180.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('RANSEL','180000')">BELI</button>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-3">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{asset('gambar/kaos kaki.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">KAOS KAKI</h5>
                                      <p class="card-text">Kaos kaki ini berbahan katun yang lembut untuk dipakai</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Rp. 8.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('KAOS KAKI','8000')">BELI</button>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-3">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{asset('gambar/hoodie.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">HOODIE</h5>
                                      <p class="card-text">Hoodie ini dibuat dari bahan flacee tebal dengan ukuran all size</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Rp. 120.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('HOODIE','120000')">BELI</button>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-3">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{asset('gambar/sepatu.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">SEPATU</h5>
                                      <p class="card-text">Sepatu ini dibuat dari bahan sintetis dan tersedia ukuran 36-40</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Rp. 200.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('SEPATU','200000')">BELI</button>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-3">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{asset('gambar/tas sekolah.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">RANSEL</h5>
                                      <p class="card-text">Ransel ini dibuat dengan tampilan yang aesthetic dan lucu</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Rp. 180.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('RANSEL','180000')">BELI</button>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-3">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{asset('gambar/kaos kaki.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">KAOS KAKI</h5>
                                      <p class="card-text">Kaos kaki ini berbahan katun yang lembut untuk dipakai</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Rp. 8.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('KAOS KAKI','8000')">BELI</button>
                                    </div>
                                  </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
