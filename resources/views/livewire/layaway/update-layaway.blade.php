<div class="modal show" style="padding-right: 15px; display: {{ $show }}; background: rgba(0,0,0,0.4)"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">
                    <i class="fas fa-pencil-alt mr-2"></i> Update Data Pembelian Rumah
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    wire:click="$set('show', 'hidden')">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <x-adminlte-input name="customer_name" label="Nama Pelanggan" placeholder="Nama Pelanggan"  wire:name="customer_name">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-id-card "></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                
                <x-adminlte-input name="customer_wa" label="Nomor WA Pelanggan" placeholder="Nomor WA Pelanggan (628XXX)"  wire:name="customer_wa">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-whatsapp "></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
        
                <x-adminlte-input type="number" min="1" max="36" name="layaway" label="Lama Angsuran (bulan)" placeholder="Lama Angsuran (1-36 bulan)"  wire:name="layaway">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-calendar-alt "></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
        
                <x-adminlte-select name="project" label="Project"  igroup-size="md" wire:name="project">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-primary">
                            <i class="fas fa-home"></i>
                        </div>
                    </x-slot>
                    <option value="1">Abinaya</option>
                    <option value="1">Dmashome</option>
                </x-adminlte-select>
        
                <x-adminlte-input name="block" label="Blok/Unit" placeholder="Blok/Unit"  wire:name="block">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-house-user "></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
        
                <x-adminlte-input type="number" name="price" label="Harga" placeholder="Harga"  wire:name="price">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-dollar-sign "></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
        
                <x-adminlte-input name="catatan" label="Catatan" placeholder="Catatan"  wire:name="catatan">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-quote-right "></i>
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
