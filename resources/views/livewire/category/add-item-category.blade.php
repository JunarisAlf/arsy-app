<form method="post" wire:submit.prevent="store">
    <x-adminlte-card title="Tambah Ketegori Barang" theme="success" icon="fas fa-plus-square">
        <x-adminlte-input name="name" label="Nama Kategori" placeholder="Nama Kategori"   label-class="text-success" wire:model="name">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-th-list text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        {{-- <x-adminlte-input name="parent" label="Parent" placeholder="Parent" label-class="text-success" wire:model="parent">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-quote-left text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input> --}}
        <x-slot name="footerSlot">
            <x-adminlte-button class="d-flex ml-auto px-3 py-2" theme="success" label="Tambah" type='submit'/>
        </x-slot>
    </x-adminlte-card>
</form>
