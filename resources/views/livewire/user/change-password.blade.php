<form method="post" wire:submit.prevent="store">
    <x-adminlte-card title="Ganti Password" theme="success" icon="fas fa-plus-square">

        {{-- <x-adminlte-input  name="old_pw" label="Keterangan" placeholder="Keterangan" label-class="text-success" wire:model="old_pw">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-key text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input> --}}

        <x-adminlte-input  name="new_pw" label="Keterangan" placeholder="Password Baru" label-class="text-success" wire:model="new_pw">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-key text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input  name="new_pw_confirmation" label="Konfirmasi Password Baru" placeholder="Keterangan" label-class="text-success" wire:model="new_pw_confirmation">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-key text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
      
        <x-slot name="footerSlot">
            <x-adminlte-button class="d-flex ml-auto px-3 py-2" theme="success" label="Ganti" type='submit' />
        </x-slot>
    </x-adminlte-card>
</form>
