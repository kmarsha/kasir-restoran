@if($errors->any())
    {{ session()->flash('error', 'Tolong Cek Ulang Data Yang Kamu Masukkan!') }}
    <div class="alert alert-danger mb-0">
        <p><strong>Whoops!</strong> Ada Kesalahan Dalam Input yang Kamu Masukkan.</p>
    </div>
@endif