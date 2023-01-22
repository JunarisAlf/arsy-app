<form method="post" wire:submit.prevent="store">
    <x-adminlte-card title="Tambah Project Baru" theme="primary" icon="fas fa-plus-square">
        <x-adminlte-input name="name" label="Nama Project" placeholder="Nama Project"   label-class="text-lightblue" wire:model="name">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-home text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="note" label="Catatan" placeholder="Catatan" label-class="text-lightblue" wire:model="note">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-quote-left text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-slot name="footerSlot">
            <x-adminlte-button class="d-flex ml-auto px-3 py-2" theme="primary" label="Tambah" type='submit'/>
        </x-slot>
    </x-adminlte-card>
</form>
