<div class="modal show" style="padding-right: 15px; display: {{ $show }}; background: rgba(0,0,0,0.4)"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">
                    <i class="fas fa-pencil-alt mr-2"></i> Bayar Angsuran Bulan Ke-{{$month}}
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    wire:click="$set('show', 'hidden')">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <x-adminlte-input type="number"  name="paid" label="Pembayaran" placeholder="Pembayaran"  wire:model="paid">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-dollar-sign "></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="note" label="Catatan" placeholder="Catatan"  wire:model="note">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-id-card "></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

            </div>
            <div class="modal-footer">
                <x-adminlte-button label="Batal" theme="primary" wire:click="$set('show', 'hidden')" />
            
                <button type="button" class="btn btn-default bg-warning" data-dismiss="modal"
                    wire:click="pay({{$detail_id}})">
                    Bayar
                </button>
            </div>
        </div>
    </div>
</div>
