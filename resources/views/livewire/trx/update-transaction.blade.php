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
                
                <x-adminlte-select name="type_id" label="Jenis Transaksi"  igroup-size="md" wire:model="type_id">
                    <x-slot name="prependSlot">
                        <div class="input-group-text ">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                    </x-slot>
                        <option value="">Pilih Jenis Pengeluaran</option>
                    @foreach ($trx_types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </x-adminlte-select>
        
                <x-adminlte-input name="name" label="Keterangan" placeholder="Keterangan"  wire:model="name">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
        
                <x-adminlte-input type="number" name="quantity" label="Jumlah" placeholder="Jumlah"  wire:model="quantity" wire:change="finalPrice()">
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
        
                <x-adminlte-input type="number" name="price" label="Harga Satuan" placeholder="Harga Satuan"  wire:model="price" wire:change="finalPrice()">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-list-ol"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
        
                <x-adminlte-input type="number" name="final_price" label="Harga Total" placeholder="Jumlah"   wire:model="final_price">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-list-ol"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
        
                @if ($status == 'hutang')
                    @php  $config = ['format' => 'DD/MM/YYYY']; @endphp
                    <x-adminlte-input-date id="idLabel" name="date" :config="$config" placeholder="Pilih Tanggal" label="Jatuh Tempo" value="{{date('d/m/Y', strtotime($jatuh_tempo))}}" >
                        <x-slot name="appendSlot">
                            <x-adminlte-button theme="outline-success" icon="fas fa-lg fa-calendar-plus"
                                title="Pilih tangal jatuh tempo"/>
                        </x-slot>   
                    </x-adminlte-input-date>
    
                    <input type="hidden" name="jatuh_tempo" wire:model="jatuh_tempo">
                    @push('js')
                        <script>
                                $(function() {
                                    $('#idLabel').datetimepicker('viewDate', moment('11/21/2018', 'MM/DD/YYYY') );
                                    $('#idLabel').on("change.datetimepicker", function (e) {
                                        Livewire.emit('datePickerChange', e.date.format('Y-M-D'));
                                    });
                                });
                        </script>
                    @endpush
                @endif
               
        
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
                    wire:click="update({{$trx_id}})">
                    Simpan Perubahan
                </button>
            </div>
        </div>
    </div>
</div>
