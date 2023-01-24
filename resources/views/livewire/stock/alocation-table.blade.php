<div class="table-responsive">
    <table class="table table-bordered" style="min-width: 1000px">
        <thead>
            <tr>
                <th>Jenis</th>
                <th>Project</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Catatan</th>
                <th>Waktu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>IN</td>
                <td>Gudang</td>
                <td>Semen</td>
                <td>20</td>
                <td>-</td>
                <td>-</td>
                <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"
                    wire:click="update()"/>
                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt"
                    wire:click="delete()"/>
                </td>
            </tr>
            <tr>
                <td>OUT</td>
                <td>Abinaya</td>
                <td>Semen</td>
                <td>10</td>
                <td>Blok C4</td>
                <td>-</td>
                <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"
                    wire:click="update()"/>
                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt"
                    wire:click="delete()"/>
                </td>
            </tr>
            <tr>
                <td>IN</td>
                <td>Gudang</td>
                <td>Batu-Bata</td>
                <td>1</td>
                <td>-</td>
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
