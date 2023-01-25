<form method="post" wire:submit.prevent="store">
    <x-adminlte-card title="Tambah Data Transaksi" theme="success" icon="fas fa-plus-square">

        <x-adminlte-select name="type" label="Jenis Transaksi" label-class="text-success" igroup-size="md"
            wire:name="type">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-success">
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

        <x-adminlte-select name="category" label="Kategori" label-class="text-success" igroup-size="md"
            wire:name="category">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-success">
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

        <x-adminlte-select name="stock" label="Nama Barang/Jasa" label-class="text-success" igroup-size="md"
            wire:name="stock">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-success">
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

        <x-adminlte-select name="project" label="Project" label-class="text-success" igroup-size="md"
            wire:name="project">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-success">
                    <i class="fas fa-boxes"></i>
                </div>
            </x-slot>
            <option value="1">Dmashome</option>
            <option value="1">Abinaya</option>
        </x-adminlte-select>

        <x-adminlte-input type="number" name="quatity" label="Jumlah" placeholder="Jumlah" label-class="text-success"
            wire:model="quatity">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-list-ol text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="unit" label="Satuan" placeholder="Satuan" label-class="text-success"
            wire:model="unit">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-balance-scale text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input type="number" name="price" label="Harga Satuan" placeholder="Jumlah"
            label-class="text-success" wire:model="price">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-list-ol text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input type="number" name="final_price" label="Harga Total" placeholder="Jumlah"
            label-class="text-success" wire:model="final_price">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-list-ol text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-select name="status" label="Status Pembayaran" label-class="text-success" igroup-size="md"
            wire:name="status">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-success">
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
            label="Jatuh Tempo" label-class="text-success">
            <x-slot name="appendSlot">
                <x-adminlte-button theme="outline-success" icon="fas fa-lg fa-calendar-plus"
                    title="Pilih tangal jatuh tempo"/>
            </x-slot>
        </x-adminlte-input-date>

        <x-adminlte-input name="note" label="Catatan" placeholder="Catatan" label-class="text-success"
            wire:model="note">
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
