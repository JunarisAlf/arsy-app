<div class="modal show" style="padding-right: 15px; display: {{ $show }}; background: rgba(0,0,0,0.4)"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">
                    <i class="fas fa-pencil-alt mr-2"></i> Update Data Kategori Transaksi
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    wire:click="$set('show', 'hidden')">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <x-adminlte-input name="name" label="Nama" placeholder="Nama"  wire:name="name">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                
                <x-adminlte-select name="cash_flow" label="Cash Flow"  igroup-size="md">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-primary">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                    </x-slot>
                    @foreach ($cash_flow as $type)
                        <option value="{{$type['value']}}">{{$type['label']}}</option>
                    @endforeach
                </x-adminlte-select>
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
