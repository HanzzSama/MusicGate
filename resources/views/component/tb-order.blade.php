<main class="container-tiket-order">
    <div>
        <article class="title-order">
            <h3>data order</h3>
        </article>
        <table class="data add">
            <thead>
                <tr>
                    <th>gambar</th>
                    <th>nama event</th>
                    <th>jumlah tiket</th>
                    <th>jumlah tiket vip</th>
                    <th>harga tiket</th>
                    <th>harga tiket vip</th>
                    {{-- <th>action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($event as $data)
                <tr>
                    <td class="data-img">
                        <div class="image">
                            <img id="img" src="{{ asset('storage/img/'.$data->gambar) }}" alt="" />
                        </div>
                        <img id="cover-img" src="{{ asset('storage/img/'.$data->gambar) }}" alt="" />
                    </td>
                    <td>
                        <h4>{{ $data->nama_event }}</h4>
                        <h5>{{ $data->deskripsi }}</h5>
                    </td>
                    <td>{{ $data->jmlh_tiket }}</td>
                    <td>{{ $data->jmlh_tiket_vip }}</td>
                    <td>
                        <div class="data-harga">
                            <h6>Rp.</h6>
                            <h4>{{ number_format($data->hrg_tiket, 0, ',', '.') }},-</h4>
                        </div>
                    </td>
                    <td>
                        <div class="data-harga">
                            <h6>Rp.</h6>
                            <h4>{{ number_format($data->hrg_tiket_vip, 0, ',', '.') }},-</h4>
                        </div>
                    </td>
                    {{-- <td class="action">
                        <a href="{{ route('dashboard.show', $data->id) }}">
                            <button>details</button>
                        </a>
                        <button>hapus</button>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
