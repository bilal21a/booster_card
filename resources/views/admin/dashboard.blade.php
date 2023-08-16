@extends('layouts.admin.app')
{{-- @dd($request->type); --}}

@section('header')
    Customers Management
@endsection
@section('content')
    @php
        $table_name = 'Customers List';
        $table_id = 'datatable';
        $tableData = [ 'Name', 'Email','Src'];
    @endphp
    @include('common.table.table')

    @include('common.modal.add_edit_modal')
@endsection
{{-- @dd('bqwabba'); --}}
@section('js_after')
    {{-- **Show Data** --}}
    <script type="text/javascript">
        $(function () { 
          var table = $('.data-table').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('get_users',['type' => $customer]) }}",
              columns: [
                  {data: 'name', name: 'name'},
                  {data: 'email', name: 'email' },
                  {data: 'src', name: 'src', orderable: false, searchable: false}
              ]
          });
          
        });
    </script>
    // {{-- @include('common.js.get_data') --}}


    // {{-- **Delete Data** --}}
@endsection
