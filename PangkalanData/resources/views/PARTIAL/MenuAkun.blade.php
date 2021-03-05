<div class="menu">
    <div class="btn-group kategori">
        <a href="/admin/akun_operator" type="button" class="{{ (request()->is('admin/akun_operator')) ? 'btn tombol-menu-akun' : 'btn tombol-menu-akun2' }}">
            Akun Operator
        </a>
    </div>

    <div class="btn-group kategori">
        <a href="/admin/akun_validator" type="button" class="{{ (request()->is('admin/akun_validator')) ? 'btn tombol-menu-akun' : 'btn tombol-menu-akun2' }}">
            Akun Validator
        </a>
    </div>

    <div class="btn-group kategori">
        <a href="/admin/akun_tamu" type="button" class="{{ (request()->is('admin/akun_tamu')) ? 'btn tombol-menu-akun' : 'btn tombol-menu-akun2' }}">
            Akun Tamu
        </a>
    </div>
</div>