<div class="modal show" style="padding-right: 15px; display: {{ $show }}; background: rgba(0,0,0,0.4)"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">
                    <i class="fas fa-pencil-alt mr-2"></i> Update Data Alokasi Barang
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    wire:click="$set('show', 'hidden')">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <x-adminlte-select name="stock" label="Barang" igroup-size="md">
                    <x-slot name="prependSlot" wire:name="stock">
                        <div class="input-group-text ">
                            <i class="fas fa-file-signature"></i>
                        </div>
                    </x-slot>
                    <option value="1">Semen</option>
                    <option value="1">Batu-bata</option>
                </x-adminlte-select>
            
                <x-adminlte-select name="project" label="Project" igroup-size="md">
                    <x-slot name="prependSlot" wire:name="project">
                        <div class="input-group-text ">
                            <i class="fas fa-home"></i>
                        </div>
                    </x-slot>
                    <option value="1">Abinaya</option>
                    <option value="1">Dmashome</option>
                </x-adminlte-select>
        
                <x-adminlte-input type="number" name="quatity" label="Jumlah" placeholder="Jumlah" wire:name="quantity">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-list-ol"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
        
                <x-adminlte-input name="unit" label="Satuan" placeholder="Satuan" wire:model="unit">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
        
                <x-adminlte-input name="quatity" label="Catatan" placeholder="Catatan" wire:name="note">
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
                    wire:click="update()">
                    Simpan Perubahan
                </button>
            </div>
        </div>
    </div>
</div>
