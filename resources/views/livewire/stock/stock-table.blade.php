<div class="table-responsive">
    <table class="table table-bordered" style="min-width: 800px">
        <thead>
            <tr>
                <th>Kategori</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Barang - Material Bangunan</td>
                <td>Semen</td>
                <td>20 sak</td>
                <td>-</td>
                <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"
                    wire:click="update()"/>
                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt"
                    wire:click="delete()"/>
                </td>
            </tr>
            <tr>
                <td>Barang - Material Bangunan</td>
                <td>Batu-Bata</td>
                <td>1 truk</td>
                <td>-</td>
                <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"
                    wire:click="update()"/>
                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt"
                    wire:click="delete()"/>
                </td>
            </tr>
            <tr>
                <td>Barang - ATK</td>
                <td>Kertas</td>
                <td>10 rim</td>
                <td>-</td>
                <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"
                    wire:click="update()"/>
                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt"
                    wire:click="delete()"/>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>
