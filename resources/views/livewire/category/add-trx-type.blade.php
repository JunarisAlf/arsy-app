<form method="post" wire:submit.prevent="store">
    <x-adminlte-card title="Tambah Tipe Pengeluaran dan Pemasukan" theme="primary" icon="fas fa-plus-square">
        <x-adminlte-input name="name" label="Nama" placeholder="Nama" label-class="text-primary" wire:name="name">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-dollar-sign text-primary"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        
        <x-adminlte-select name="cash_flow" label="Cash Flow" label-class="text-primary" igroup-size="md">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-primary">
                    <i class="fas fa-exchange-alt"></i>
                </div>
            </x-slot>
            @foreach ($cash_flow as $type)
                <option value="{{$type['value']}}">{{$type['label']}}</option>
            @endforeach
        </x-adminlte-select>
        <x-slot name="footerSlot">
            <x-adminlte-button class="d-flex ml-auto px-3 py-2" theme="primary" label="Tambah" type='submit' />
        </x-slot>
    </x-adminlte-card>
</form>
