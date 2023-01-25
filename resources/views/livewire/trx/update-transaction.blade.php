<div class="modal show" style="padding-right: 15px; display: {{ $show }}; background: rgba(0,0,0,0.4)"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">
                    <i class="fas fa-pencil-alt mr-2"></i> Update Data Transaksi
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    wire:click="$set('show', 'hidden')">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                
                <x-adminlte-select name="type" label="Jenis Transaksi"  igroup-size="md"
                wire:name="type">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                </x-slot>
                <optgroup label="KREDIT">
                    <option value="1">Pembelian Barang</option>
                    <option value="1">Pembayaran Jasa</option>
                    <option value="1">Sewa</option>
                </optgroup>
                <optgroup label="DEBET">
                    <option value="1">DP Rumah</option>
                    <option value="1">Cicilan Rumah</option>
                    <option value="1">Pembelian Rumah</option>
                </optgroup>
            </x-adminlte-select>
    
            <x-adminlte-select name="category" label="Kategori"  igroup-size="md"
                wire:name="category">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-th-list"></i>
                    </div>
                </x-slot>
                <optgroup label="BARANG">
                    <option value="1">Material Bangunan</option>
                    <option value="1">ATK</option>
                </optgroup>
                <optgroup label="JASA">
                    <option value="1">Tukang</option>
                    <option value="1">Services</option>
                </optgroup>
            </x-adminlte-select>
    
            <x-adminlte-select name="stock" label="Nama Barang/Jasa"  igroup-size="md"
                wire:name="stock">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-boxes"></i>
                    </div>
                </x-slot>
                <optgroup label="BARANG">
                    <option value="1">Semen</option>
                    <option value="1">Batu-Bata</option>
                </optgroup>
                <optgroup label="JASA">
                    <option value="1">Tukang Cor</option>
                    <option value="1">Jasa Plaster</option>
                </optgroup>
            </x-adminlte-select>
    
            <x-adminlte-select name="project" label="Project"  igroup-size="md"
                wire:name="project">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-boxes"></i>
                    </div>
                </x-slot>
                <option value="1">Dmashome</option>
                <option value="1">Abinaya</option>
            </x-adminlte-select>
    
            <x-adminlte-input type="number" name="quatity" label="Jumlah" placeholder="Jumlah" 
                wire:model="quatity">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-list-ol"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
    
            <x-adminlte-input name="unit" label="Satuan" placeholder="Satuan" 
                wire:model="unit">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
    
            <x-adminlte-input type="number" name="price" label="Harga Satuan" placeholder="Jumlah"
                 wire:model="price">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-list-ol"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
    
            <x-adminlte-input type="number" name="final_price" label="Harga Total" placeholder="Jumlah"
                 wire:model="final_price">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-list-ol"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
    
            <x-adminlte-select name="status" label="Status Pembayaran"  igroup-size="md"
                wire:name="status">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-boxes"></i>
                    </div>
                </x-slot>
                <option value="1">Bayar Lunas</option>
                <option value="1">Hutang</option>
            </x-adminlte-select>
    
            @php
                $config = ['format' => 'DD/MM/YYYY'];
            @endphp
            <x-adminlte-input-date name="jatuh_tempo" :config="$config" placeholder="Pilih Tanggal"
                label="Jatuh Tempo" >
                <x-slot name="appendSlot">
                    <x-adminlte-button theme="outline-success" icon="fas fa-lg fa-calendar-plus"
                        title="Pilih tangal jatuh tempo"/>
                </x-slot>
            </x-adminlte-input-date>
    
            <x-adminlte-input name="note" label="Catatan" placeholder="Catatan" 
                wire:model="note">
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
