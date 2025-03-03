<main class="form-tiket">
    <div>
        <article class="title-form">
            <h3>tambah tiket</h3>
        </article>
        <form action="{{ route('dashboard.store') }}" method="POST" class="form-add tiket"
            enctype="multipart/form-data">
            @csrf
            <div>
                <section class="input-img">
                    <div>
                        <div class="input-file">
                            <input type="file" name="img_event" id="image-input" accept="image/*" />
                        </div>
                        <figure class="img-prev">
                            <img src="" id="image-preview" />
                        </figure>
                        <div class="ico-img">
                            <i class='bx bxs-image'></i>
                        </div>
                    </div>
                </section>
                <figure class="input">
                    <input type="text" name="nama_event" placeholder="Nama Event">
                </figure>
                <figure class="input">
                    <input type="date" name="tgl_event" placeholder="Tangaal Event">
                </figure>
                <figure class="input">
                    <input type="text" name="waktu" placeholder="Waktu">
                </figure>
                <figure class="input">
                    <input type="text" name="status" placeholder="Status">
                </figure>
                <figure class="input">
                    <input type="number" name="jmlh_tiket" placeholder="Jumlah Tiket" value="0">
                </figure>
                <figure class="input">
                    <input type="number" name="jmlh_tiket_vip" placeholder="Jumlah Tiket VIP" value="0">
                </figure>
                <figure class="input">
                    <input type="number" name="hrg_tiket" placeholder="Harga Tiket">
                </figure>
                <figure class="input">
                    <input type="number" name="hrg_tiket_vip" placeholder="Harga Tiket VIP    ">
                </figure>
                <figure class="input">
                    <textarea name="desk" id="" placeholder="Deskripsi"></textarea>
                </figure>
                <figure class="input hide">
                    <input type="text" name="id_penyelenggara" value="{{ Auth::user()->id }}">
                </figure>
                <figure class="btn add">
                    <button>tambah tiket</button>
                </figure>
            </div>
        </form>
    </div>
    @if ($errors->any())
    <div class="pop-error">
        <ul>
            @foreach ($errors->all() as $error)
            <li style="color: yellow">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</main>
<script>
    document.getElementById('image-input').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
    console.log("File ditemukan:", file.name); // Debugging
    const reader = new FileReader();
    reader.onload = function(e) {
    console.log("File berhasil dibaca"); // Debugging
    const preview = document.getElementById('image-preview');
    preview.src = e.target.result;
    preview.style.display = 'block';
    };
    reader.readAsDataURL(file);
    } else {
    console.log("Tidak ada file yang dipilih"); // Debugging
    }
    });
</script>