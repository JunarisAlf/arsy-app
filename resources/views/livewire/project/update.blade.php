<div class="modal show" style="padding-right: 15px; display: {{ $show }}; background: rgba(0,0,0,0.4)"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">
                    <i class="fas fa-pencil-alt mr-2"></i> Update Data Project
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    wire:click="$set('show', 'hidden')">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <x-adminlte-input name="name" label="Nama Project" placeholder="Nama Project"
                    wire:model="name" value="{{$name}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-home"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input name="note" label="Catatan" placeholder="Catatan"
                    wire:model="note" value="{{$note}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-quote-left "></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>
            <div class="modal-footer">
                <x-adminlte-button label="Batal" theme="primary" wire:click="$set('show', 'hidden')" />
                {{-- <form method="post" wire:submit.prevent="delete({{$project_id}})">
                </form> --}}
                <button type="button" class="btn btn-default bg-warning" data-dismiss="modal"
                    wire:click="update({{ $project_id }})">
                    Simpan Perubahan
                </button>
            </div>
        </div>
    </div>
</div>
