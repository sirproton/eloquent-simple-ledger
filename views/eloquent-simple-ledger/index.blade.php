@extends('eloquent-simple-ledger.layout')

@push('head')
<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.10.11/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="//cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="//cdn.datatables.net/responsive/2.0.2/css/responsive.dataTables.min.css" rel="stylesheet">

<!-- morris -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

<style type="text/css">
#table-ledger_length{
  float: left;
}
#current-balance {
  font-weight: bold;
}
.btn:focus, .btn:focus:active, .paginate_button a:focus, .paginate_button a:focus:active{
  outline-color:white !important;
}
</style>
@endpush

@section('content')
<div class="container">
  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

      <div class="row">

        <div class="col-md-4 col-sm-12">
          @include('eloquent-simple-ledger.panels.account-summary')
        </div>

        <div class="col-md-4 col-sm-12">
          @include('eloquent-simple-ledger.panels.new-debit')
        </div>        

        <div class="col-md-4 col-sm-12">
          @include('eloquent-simple-ledger.panels.new-credit')
        </div>

        <div class="col-md-8 col-sm-12">
          @include('eloquent-simple-ledger.panels.transaction-history')
        </div>

      </div>

      @include('eloquent-simple-ledger.panels.table-ledger')
    
    </div>
  </div>
</div>

@endsection

@push('script')
  @include('eloquent-simple-ledger.js.index')
@endpush
