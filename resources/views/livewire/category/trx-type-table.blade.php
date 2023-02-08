<div class="table-responsive">
    <table class="table table-bordered" style="min-width: 100%">
        <thead>
            <tr>
                <th>Tipe</th>
                <th>Sub-Tipe</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trxTypes as $trxType)
            <tr >
                <td>
                    @if ($trxType->cash_flow == 'in')
                        <button type="button" class="btn btn-sm btn-block btn-outline-info">
                            DEBIT
                        </button>
                    @else
                        <button type="button" class="btn btn-sm btn-block btn-outline-danger">
                            KREDIT
                        </button>
                    @endif
                </td>
                <td>{{$trxType->name}}</td>
                <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"
                    wire:click="update({{$trxType->id}}, '{{$trxType->name}}')"/>
                    {{-- <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt"
                    wire:click="delete({{$trxType->id}}, '{{$trxType->name}}')"/> --}}
                </td>
            </tr>
            @endforeach
           
           
        </tbody>
    </table>
</div>
