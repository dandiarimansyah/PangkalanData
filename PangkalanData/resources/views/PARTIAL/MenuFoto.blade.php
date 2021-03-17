<div class="menu">
    <div class="btn-group kategori">
        <a href="/admin/foto_login" type="button" class="{{ (request()->is('admin/foto_login')) ? 'btn tombol-menu-akun' : 'btn tombol-menu-akun2' }}">
            Foto Login
        </a>
    </div>

    <div class="btn-group kategori">
        <a href="/admin/foto_beranda" type="button" class="{{ (request()->is('admin/foto_beranda')) ? 'btn tombol-menu-akun' : 'btn tombol-menu-akun2' }}">
            Foto Beranda
        </a>
    </div>
</div>