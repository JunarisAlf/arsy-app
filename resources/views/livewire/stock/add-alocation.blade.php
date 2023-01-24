<form method="post" wire:submit.prevent="store">
    
    <x-adminlte-card title="Tambah Alokasi Barang" theme="primary" icon="fas fa-plus-square">
        <x-adminlte-select name="stock" label="Barang" label-class="text-primary" igroup-size="md">
            <x-slot name="prependSlot" wire:name="stock">
                <div class="input-group-text bg-gradient-primary">
                    <i class="fas fa-file-signature"></i>
                </div>
            </x-slot>
            <option value="1">Semen</option>
            <option value="1">Batu-bata</option>
        </x-adminlte-select>
    
        <x-adminlte-select name="project" label="Project" label-class="text-primary" igroup-size="md">
            <x-slot name="prependSlot" wire:name="project">
                <div class="input-group-text bg-gradient-primary">
                    <i class="fas fa-home"></i>
                </div>
            </x-slot>
            <option value="1">Abinaya</option>
            <option value="1">Dmashome</option>
        </x-adminlte-select>

        <x-adminlte-input type="number" name="quatity" label="Jumlah" placeholder="Jumlah" label-class="text-primary" wire:name="quantity">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-list-ol text-primary"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="unit" label="Satuan" placeholder="Satuan" label-class="text-primary" wire:model="unit">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-balance-scale text-primary"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="quatity" label="Catatan" placeholder="Catatan" label-class="text-primary" wire:name="note">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-quote-right text-primary"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        
        <x-slot name="footerSlot">
            <x-adminlte-button class="d-flex ml-auto px-3 py-2" theme="primary" label="Tambah" type='submit' />
        </x-slot>
    </x-adminlte-card>
</form>
