<form method="post" wire:submit.prevent="store">
    <x-adminlte-card title="Tambah Data Kontraktor" theme="primary" icon="fas fa-plus-square">
       
        <x-adminlte-input name="contractor_name" label="Nama Kontraktor" placeholder="Nama Kontraktor" label-class="text-primary" wire:model="contractor_name">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-id-card text-primary"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        
        <x-adminlte-input name="contractor_wa" label="Nomor WA Kontraktor" placeholder="Nomor WA Kontraktor (628XXX)" label-class="text-primary" wire:model="contractor_wa">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fab fa-whatsapp text-primary"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="keterangan" label="Keterangan" placeholder="Keterangan" label-class="text-primary" wire:model="keterangan">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-house-user text-primary"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-select name="interval" label="Interval" label-class="text-primary" igroup-size="md" wire:model="interval">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-primary">
                    <i class="fas fa-sync"></i>
                </div>
            </x-slot>
            <option value="">Pilih Interval Pembayaran</option>
            <option value="week">Mingguan</option>
            <option value="month">Bulanan</option>
        </x-adminlte-select>


        <x-slot name="footerSlot">
            <x-adminlte-button class="d-flex ml-auto px-3 py-2" theme="primary" label="Tambah" type='submit' />
        </x-slot>
    </x-adminlte-card>
</form>
