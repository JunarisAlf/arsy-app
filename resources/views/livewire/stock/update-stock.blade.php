<div class="modal show" style="padding-right: 15px; display: {{ $show }}; background: rgba(0,0,0,0.4)"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">
                    <i class="fas fa-pencil-alt mr-2"></i> Update Data Stock Barang
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    wire:click="$set('show', 'hidden')">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                
                <x-adminlte-input name="name" label="Nama Barang" placeholder="Nama Barang"   wire:model="name">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-file-signature"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
        
                <x-adminlte-select name="category_id" label="Kategori" label-class="text-success" igroup-size="md" wire:model="category_id">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-list"></i>
                        </div>
                    </x-slot>
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option {{$category_id == $category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </x-adminlte-select>
        
                <x-adminlte-input type="number" name="quantity" label="Jumlah" placeholder="Jumlah"  wire:model="quantity">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-list-ol"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
        
                <x-adminlte-input name="unit" label="Satuan" placeholder="Satuan"  wire:model="unit">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
        
                <x-adminlte-input name="note" label="Catatan" placeholder="Catatan"  wire:model="note">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

            </div>
            <div class="modal-footer">
                <x-adminlte-button label="Batal" theme="primary" wire:click="$set('show', 'hidden')" />
            
                <button type="button" class="btn btn-default bg-warning" data-dismiss="modal"
                    wire:click="update({{$stock_id}})">
                    Simpan Perubahan
                </button>
            </div>
        </div>
    </div>
</div>
