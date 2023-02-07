<div class="table-responsive">
    <table class="table-bordered table" style="min-width: 100%">
        <thead>
            <tr>
                <th>Pembayaran Selanjutnya</th>
                <th>Nama</th>
                <th>WA</th>
                <th>Keterangan</th>
                <th>Periode</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contractors as $ctr)
            <tr>
                <td>
                    <button type="button" class="btn btn-sm btn-block btn-outline-success">
                        {{ date('d/m/Y', strtotime($ctr->details()->latest()->first()->jatuh_tempo))}}
                    </button>
                </td>
                <td>{{$ctr->contractor_name}}</td>
                <td>{{$ctr->contractor_wa}}</td>
                <td>{{$ctr->keterangan}}</td>
                <td>{{$ctr->details->count()}}</td>
                <td>
                    <x-adminlte-button label="Detail" theme="info" icon="fas fa-eye" wire:click="detail({{$ctr->id}}, '{{$ctr->contractor_name}}')" />
                </td>
            </tr>
            @endforeach
            
            

        </tbody>
    </table>
</div>
