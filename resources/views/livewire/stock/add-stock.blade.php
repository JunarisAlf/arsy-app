<form method="post" wire:submit.prevent="store">
    <x-adminlte-card title="Tambah Barang" theme="success" icon="fas fa-plus-square">
        
        <x-adminlte-input name="name" label="Nama Barang" placeholder="Nama Barang"   label-class="text-success" wire:model="name">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-file-signature text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-select name="category_id" label="Kategori" label-class="text-success" igroup-size="md" wire:model="category_id">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-success">
                    <i class="fas fa-list"></i>
                </div>
            </x-slot>
            <option value="">Pilih Kategori</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </x-adminlte-select>

        <x-adminlte-input type="number" name="quantity" label="Jumlah" placeholder="Jumlah" label-class="text-success" wire:model="quantity">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-list-ol text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="unit" label="Satuan" placeholder="Satuan" label-class="text-success" wire:model="unit">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-balance-scale text-success"></i>
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
            <x-adminlte-button class="d-flex ml-auto px-3 py-2" theme="success" label="Tambah" type='submit'/>
        </x-slot>
    </x-adminlte-card>
</form>
