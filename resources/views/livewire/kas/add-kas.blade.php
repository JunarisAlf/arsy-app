<form method="post" wire:submit.prevent="store">
    <x-adminlte-card title="Tambah Data Transaksi" theme="success" icon="fas fa-plus-square">
        @php  $config = ['format' => 'DD/MM/YYYY HH:MM']; @endphp
        <x-adminlte-input-date id="inputDate" name="created_at" :config="$config" placeholder="Pilih Tanggal" label="Tanggal Transaksi" label-class="text-success">
            <x-slot name="appendSlot">
                <x-adminlte-button theme="outline-success" icon="fas fa-lg fa-calendar-plus"
                    title="Tanggal Transaksi"/>
            </x-slot>
        </x-adminlte-input-date>
       <input type="hidden" name="created_at" wire:model="created_at">
       @push('js')
           <script>
                $(function() {
                    $('#inputDate').datetimepicker();
                    $('#inputDate').on("change.datetimepicker", function (e) {
                        Livewire.emit('created_at_change', e.date.format('Y-MM-DD HH:MM'));
                        // console.log(e.date.format('D/M/Y'));
                    });
                });
           </script>
       @endpush
        <x-adminlte-input type="number" name="jumlah" label="Jumlah" placeholder="Jumlah" label-class="text-success" wire:model="jumlah" wire:model="jumlah">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-dollar-sign text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

       <x-adminlte-input name="note" label="Catatan" placeholder="Catatan" label-class="text-success" wire:model="note">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-quote-right text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-slot name="footerSlot">
            <x-adminlte-button class="d-flex ml-auto px-3 py-2" theme="success" label="Tambah" type='submit' />
        </x-slot>
    </x-adminlte-card>
</form>
