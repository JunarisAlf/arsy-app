<form method="post" wire:submit.prevent="apply">
    <x-adminlte-card title="Filter" theme="success" icon="fas fa-filter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @unless (Auth::user()->role != 'superadmin')
                        @php  $config = ["locale" => ["format" => "DD-MM-YYYY"]]; @endphp
                        <x-adminlte-date-range name="date_range_input" :config="$config" enable-default-ranges="Today" label="Waktu">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-success">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-date-range>
                    @endunless
                    @unless (Auth::user()->role != 'admin')
                        @php  
                        $config = [
                            "locale" => ["format" => "DD-MM-YYYY"],
                            "minDate" => $minDate,
                            "maxDate" => $maxDate
                        ];
                        @endphp
                         <x-adminlte-date-range name="date_range_input" :config="$config" label="Waktu">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-success">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-date-range>
                    @endunless

                    <input type="hidden" id="report_date_range" name="date_range" wire:model="date_range">
                    @push('js')
                        <script>
                            $('input[name="date_range_input"]').on('apply.daterangepicker', function(ev, picker) {
                                let dateVal = picker.startDate.format('YYYY-MM-DD') + '|' + picker.endDate.format('YYYY-MM-DD');
                                Livewire.emit('dateChange', dateVal);
                                // document.querySelector('#report_date_range').value = dateVal;
                            });
                        </script>
                    @endpush
                </div>
            </div>
        </div>


        <x-slot name="footerSlot">
            <x-adminlte-button class="d-flex ml-auto px-3 py-2" theme="success" label="Terapkan" type='submit' />
        </x-slot>
    </x-adminlte-card>
</form>
