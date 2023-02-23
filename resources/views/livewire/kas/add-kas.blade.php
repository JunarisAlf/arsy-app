<form method="post" wire:submit.prevent="store">
    <x-adminlte-card title="Tambah Data Transaksi" theme="success" icon="fas fa-plus-square">

        <x-adminlte-input type="number" name="jumlah" label="Jumlah" placeholder="Jumlah" label-class="text-success" wire:model="jumlah" wire:model="jumlah">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-dollar-sign text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

       <x-adminlte-input name="note" label="Catatan" placeholder="Catatan" label-class="text-success" wire:model="note">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-quote-right text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-slot name="footerSlot">
            <x-adminlte-button class="d-flex ml-auto px-3 py-2" theme="success" label="Tambah" type='submit' />
        </x-slot>
    </x-adminlte-card>
</form>
