<form method="post" wire:submit.prevent="store">
    <x-adminlte-card title="Tambah Cicilan Pembayaran" theme="primary" icon="fas fa-plus-square">
        <x-adminlte-input name="customer_name" label="Nama Pelanggan" placeholder="Nama Pelanggan" label-class="text-primary" wire:name="customer_name">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-id-card text-primary"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        
        <x-adminlte-input name="customer_wa" label="Nomor WA Pelanggan" placeholder="Nomor WA Pelanggan (628XXX)" label-class="text-primary" wire:name="customer_wa">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-whatsapp text-primary"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input type="number" min="1" max="36" name="layaway" label="Lama Angsuran (bulan)" placeholder="Lama Angsuran (1-36 bulan)" label-class="text-primary" wire:name="layaway">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-calendar-alt text-primary"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-select name="project" label="Project" label-class="text-primary" igroup-size="md" wire:name="project">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-primary">
                    <i class="fas fa-home"></i>
                </div>
            </x-slot>
            <option value="1">Abinaya</option>
            <option value="1">Dmashome</option>
        </x-adminlte-select>

        <x-adminlte-input name="block" label="Blok/Unit" placeholder="Blok/Unit" label-class="text-primary" wire:name="block">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-house-user text-primary"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input type="number" name="price" label="Harga" placeholder="Harga" label-class="text-primary" wire:name="price">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-dollar-sign text-primary"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="catatan" label="Catatan" placeholder="Catatan" label-class="text-primary" wire:name="catatan">
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
