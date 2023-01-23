<div class="table-responsive">
    <table class="table table-bordered" style="max-width: 550px">
        <thead>
            <tr>
                <th>Kategori</th>
                <th>Sub-Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr >
                <td rowspan="3">Barang</td>
                <td>Material Bangunan</td>
                <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"/>
                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt" 
                    wire:click="delete()"/>
                </td>
            </tr>
            <tr>
                <td>ATK</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Konsumsi</td>
                <td>-</td>
            </tr>
            <tr >
                <td rowspan="3">Jasa</td>
                <td>Tukang</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Perbaikan</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Sumus bor</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>
</div>
