<div class="table-responsive">
    <table class="table table-bordered" style="width: max-content">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Project</th>
                <th>Status Pembayaran</th>
                <th>Jatuh Tempo</th>
                <th>KREDIT</th>
                <th>DEBET</th>
                <th>SALDO</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 10; $i++)
            <tr>
                <td>20/10/2023</td>
                <td>Barang - Material Bangunan - Semen</td>
                <td>20 sak</td>
                <td>Rp. 80.0000</td>
                <td>Dmashome</td>
                <td>Bayar Lunas</td>
                <td>-</td>
                <td>Rp. 1.600.000</td>
                <td></td>
                <td>Rp. 1.000.0000.0000</td>
                <td>-</td>
                <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"
                    wire:click="update()"/>
                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt"
                    wire:click="delete()"/>
                </td>
            </tr>
            @endfor
            
            
        </tbody>
    </table>
</div>
