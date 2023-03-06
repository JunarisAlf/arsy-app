<form method="post" wire:submit.prevent="store">
    <x-adminlte-card title="Tambah Data Transaksi" theme="success" icon="fas fa-plus-square">
        <x-adminlte-input type="datetime-local" name="created_at" label="Tanggal dibuat" placeholder="Tanggal dibuat" label-class="text-success" wire:model="created_at" >
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-calendar text-success"></i>
                </div>
            </x-slot>
    </x-adminlte-input>

        <x-adminlte-select name="type_id" label="Jenis Transaksi" label-class="text-success" igroup-size="md" wire:model="type_id">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-success">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
            </x-slot>
                <option value="">Pilih Jenis Pengeluaran</option>
            @foreach ($trx_types as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </x-adminlte-select>

        <x-adminlte-input name="name" label="Keterangan" placeholder="Keterangan" label-class="text-success" wire:model="name">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-quote-right text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input type="number" name="quantity" label="Jumlah" placeholder="Jumlah" label-class="text-success" wire:model="quantity" wire:change="finalPrice()">
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

        <x-adminlte-input type="number" name="price" label="Harga Satuan" placeholder="Harga Satuan" label-class="text-success" wire:model="price" wire:change="finalPrice()">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-list-ol text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input type="number" name="final_price" label="Harga Total" placeholder="Jumlah"  label-class="text-success" wire:model="final_price">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-list-ol text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-select name="status" label="Status Pembayaran" label-class="text-success" igroup-size="md" wire:model="status"  >
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-success">
                    <i class="fas fa-boxes"></i>
                </div>
            </x-slot>
                <option value="">Metode Pembayaran</option>
            @foreach ($status_opt as $opt)
                <option value="{{$opt['value']}}">{{$opt['label']}}</option>
            @endforeach
        </x-adminlte-select>

        @php  $config = ['format' => 'DD/MM/YYYY']; @endphp
        <x-adminlte-input-date id="idLabel" name="date" :config="$config" placeholder="Pilih Tanggal" label="Jatuh Tempo" label-class="text-success">
            <x-slot name="appendSlot">
                <x-adminlte-button theme="outline-success" icon="fas fa-lg fa-calendar-plus"
                    title="Pilih tangal jatuh tempo"/>
            </x-slot>
        </x-adminlte-input-date>
       <input type="hidden" name="jatuh_tempo" wire:model="jatuh_tempo">
       @push('js')
           <script>
                $(function() {
                    $('#idLabel').datetimepicker();
                    $('#idLabel').on("change.datetimepicker", function (e) {
                        Livewire.emit('datePickerChange', e.date.format('Y-M-D'));
                        // console.log(e.date.format('D/M/Y'));
                    });
                });
           </script>
       @endpush

       <x-adminlte-input name="note" label="Catatan" placeholder="Catatan" label-class="text-success" wire:model="note">
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
