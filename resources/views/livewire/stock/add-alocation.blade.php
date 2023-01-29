<form method="post" wire:submit.prevent="store">
    
    <x-adminlte-card title="Tambah Alokasi Barang" theme="primary" icon="fas fa-plus-square">
        <x-adminlte-select name="stock_id" label="Barang" label-class="text-primary" igroup-size="md" wire:model="stock_id" wire:change="stockSelected">
            <x-slot name="prependSlot" wire:name="stock">
                <div class="input-group-text bg-gradient-primary">
                    <i class="fas fa-file-signature"></i>
                </div>
            </x-slot>
                <option value="">Pilih Barang</option>
            @foreach ($stocks as $stock)
                <option value={{$stock->id}}>{{$stock->name}}</option>
            @endforeach
        </x-adminlte-select>
    
        <x-adminlte-select name="alocate_to" label="Project" label-class="text-primary" igroup-size="md" wire:model="alocate_to">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-primary">
                    <i class="fas fa-home"></i>
                </div>
            </x-slot>
            <option value="">Pilih Tujuan Alokasi</option>
            @foreach ($projects as $project)
                <option value={{$project['value']}}>{{$project['label']}}</option>
            @endforeach
        </x-adminlte-select>

        <x-adminlte-input type="number" name="quantity"  label="Jumlah" placeholder="Jumlah" label-class="text-primary" wire:model="quantity">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-list-ol text-primary"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="note" label="Catatan" placeholder="Catatan" label-class="text-primary" wire:model="note">
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
