<div class="modal show" style="padding-right: 15px; display: {{ $show }}; background: rgba(0,0,0,0.4)"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">
                    <i class="fas fa-pencil-alt mr-2"></i> Update Data Kategori Item
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    wire:click="$set('show', 'hidden')">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <x-adminlte-input name="name" label="Nama Kategori" placeholder="Nama Kategori"  wire:model="name" value="{{$name}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-th-list"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                {{-- <x-adminlte-input name="parent" label="Parent" placeholder="Parent" wire:model="parent">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-quote-left"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input> --}}
            </div>
            <div class="modal-footer">
                <x-adminlte-button label="Batal" theme="primary" wire:click="$set('show', 'hidden')" />
            
                <button type="button" class="btn btn-default bg-warning" data-dismiss="modal"
                    wire:click="update({{$category_id}})">
                    Simpan Perubahan
                </button>
            </div>
        </div>
    </div>
</div>
