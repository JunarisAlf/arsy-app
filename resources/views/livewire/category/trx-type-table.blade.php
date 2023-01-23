<div class="table-responsive">
    <table class="table table-bordered" style="max-width: 550px">
        <thead>
            <tr>
                <th>Tipe</th>
                <th>Sub-Tipe</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr >
                <td rowspan="3">Kredit</td>
                <td>Pembelian Barang</td>
                <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"
                    wire:click="update()"/>
                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt"
                    wire:click="delete()"/>
                </td>
            </tr>
            <tr>
                <td>Pembayaran Jasa</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>-</td>
            </tr>
            <tr >
                <td rowspan="3">DEBET</td>
                <td>Penjualan Rumah</td>
                <td>-</td>
            </tr>
            <tr>
                <td>DP</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Dll</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>
</div>
