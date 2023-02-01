<div class="table-responsive">
    <table class="table-bordered table" style="width: max-content">
        <thead>
            <tr>
                <th>Status</th>
                <th>Nama Pelanggan</th>
                <th>WA Pelanggan</th>
                <th>Progres Angsuran (bulan)</th>
                <th>Progres Angsuran (Rp.)</th>
                <th>Sisa Angsuran</th>
                <th>Unit</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($layaways as $layaway)
            <tr>
                <td>
                    @if ($layaway->is_finish)
                        <button type="button" class="btn btn-sm btn-block btn-outline-success">
                            LUNAS
                        </button>
                    @else
                        <button type="button" class="btn btn-sm btn-block btn-outline-danger">
                            BELUM LUNAS
                        </button>
                    @endif
                </td>
                <td>{{$layaway->customer_name}}</td>
                <td>{{$layaway->customer_wa}}</td>
                <td>
                    {{$layaway->details->where('paid_at', '!=', null)->count()}}/{{$layaway->tenor}}
                </td>
                <td>
                    Rp. {{ number_format($layaway->details->where('paid_at', '!=', null)->sum('paid'),2,',','.')}} /
                    Rp. {{ number_format($layaway->price,2,',','.')}}
                </td>
                <td>
                    Rp. {{ number_format($layaway->price - $layaway->details->where('paid_at', '!=', null)->sum('paid') ,2,',','.')}} 
                </td>
                <td>{{$layaway->project }} {{$layaway->block}}</td>
                <td>{{$layaway->note}}</td>
                <td>
                    <x-adminlte-button label="Detail" theme="info" icon="fas fa-eye" wire:click="detail({{$layaway->id}}, '{{$layaway->customer_name}}')" />

                    @if (!$layaway->is_finish)
                     {{-- <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt" wire:click="update({{$layaway->id}})" /> --}}
                    <x-adminlte-button label="Tandai Lunas" theme="success" icon="fas fa-check" wire:click="finish({{$layaway->id}}, '{{$layaway->customer_name}}')" />
                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt" wire:click="delete({{$layaway->id}}, '{{$layaway->customer_name}}')" />   
                    @endif
                    
        
                </td>
            </tr>
            @endforeach
            
            

        </tbody>
    </table>
</div>
