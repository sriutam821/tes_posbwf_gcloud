<div class="row">
    <div class="col-sm-12">
        <div class="card card-info card-outline">
            <div class="card-body">
                <input type="hidden" name="id" id="id" value="{{ $obat->id }}">
                <table  id="tb_data_obat" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th width="10%">Barcode</th>
                            <th width="40%">Nama</th>
                            <th width="10%">Harga Beli</th>
                            <th width="10%">Harga Beli+ppn</th>
                            <th width="10%">Harga Jual</th>
                            <th width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-undo"></i> Kembali</button>
            </div>
        </div>
     </div>
</div>

<script type="text/javascript">
    var token = '{{csrf_token()}}';

    var tb_data_obat = $('#tb_data_obat').dataTable( {
            processing: true,
            serverSide: true,
            stateSave: true,
            deferLoading:true,
            scrollX: true,
            ajax:{
                    url: '{{url("transfer_outlet/list_data_harga_obat")}}',
                    data:function(d){
                        d.id = $("#id").val();
                    }
                 },
            columns: [
                {data: 'no', name: 'no', orderable: true, searchable: true, class:'text-center'},
                {data: 'barcode', name: 'barcode', orderable: true, searchable: true, class:'text-center'},
                {data: 'nama', name: 'nama', orderable: true, searchable: true},
                {data: 'harga_beli', name: 'harga_beli', orderable: true, searchable: false, class:'text-center'},
                {data: 'harga_beli_ppn', name: 'harga_beli_ppn', orderable: true, searchable: false, class:'text-center'},
                {data: 'harga_jual', name: 'harga_jual', orderable: true, searchable: false, class:'text-center'},
                {data: 'action', name: 'id',orderable: true, searchable: true, class:'text-center'}
            ],
            rowCallback: function( row, data, iDisplayIndex ) {
                var api = this.api();
                var info = api.page.info();
                var page = info.page;
                var length = info.length;
                var index = (page * length + (iDisplayIndex +1));
                $('td:eq(0)', row).html(index);
            },
            stateSaveCallback: function(settings,data) {
                localStorage.setItem( 'DataTables_' + settings.sInstance, JSON.stringify(data) )
            },
            stateLoadCallback: function(settings) {
                return JSON.parse( localStorage.getItem( 'DataTables_' + settings.sInstance ) )
            },
            drawCallback: function( settings ) {
                var api = this.api();
            }
        });

    setTimeout(function(){
        $('.dataTables_filter input').attr('placeholder','Barcode/nama obat');
        $('.dataTables_filter input').css('width','400px');
        $('.dataTables_filter input').css('height','40px');
        
    }, 1);

    $(document).ready(function(){
        var barcode = $("#barcode").val();
        $("div.dataTables_filter input").val(barcode);
        $("div.dataTables_filter input").focus();

        tb_data_obat.fnDraw();
        tb_data_obat.fnFilter(barcode);
    })
</script>

