<div class="table-responsive">
    <table class="table-bordered table" style="width: 100%">
        <thead>
            <tr>
                <th>Bulan ke-</th>
                <th>Jatuh Tempo</th>
                <th>Pembayaran</th>
                <th>Tanggal Bayar</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>20/02/2023</td>
                <td>Rp. 20.000.000</td>
                <td>20/02/2023</td>
                <td>-</td>
                <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt" wire:click="update()" />
                    {{-- <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt" wire:click="delete()" /> --}}
                    <x-adminlte-button label="Bayar" theme="info" icon="fas fa-dollar-sign" wire:click="pay()" />
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>20/02/2023</td>
                <td>Rp. 20.000.000</td>
                <td>20/02/2023</td>
                <td>-</td>
                <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt" wire:click="update()" />
                    <x-adminlte-button label="Bayar" theme="info" icon="fas fa-dollar-sign" wire:click="pay()" />
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>20/02/2023</td>
                <td>Rp. 20.000.000</td>
                <td>20/02/2023</td>
                <td>-</td>
                <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt" wire:click="update()" />
                    <x-adminlte-button label="Bayar" theme="info" icon="fas fa-dollar-sign" wire:click="pay()" />
                </td>
            </tr>
            
            
        </tbody>
    </table>
</div>
