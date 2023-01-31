<div  class="modal show"  style="padding-right: 15px; display: {{$show}}; background: rgba(0,0,0,0.4)"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">
                    <i class="fas fa-trash-alt mr-2"></i> Konfirmasi Pembayaran Hutang
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="$set('show', 'hidden')">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda akan melepaskan dana sebesar 
                <span style="font-weight: 600">Rp. {{ number_format($final_price,2,',','.')}}</span> untuk membayar hutang 
                <span style="font-weight: 600">{{$name}}</span>
            </div>
            <div class="modal-footer">
                <x-adminlte-button label="Batal" theme="primary" wire:click="$set('show', 'hidden')"/>
                {{-- <form method="post" wire:submit.prevent="delete({{$project_id}})">
                </form> --}}
                <button type="button" class="btn btn-default bg-success" data-dismiss="modal" wire:click="pay({{$trx_id}})">
                    Bayar
                </button>
            </div>
        </div>
    </div>
</div>
