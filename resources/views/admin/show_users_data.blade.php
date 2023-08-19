@extends('layouts.admin.app')
@section('header')
   {{ ucfirst($name) }} Customers
@endsection
@section('content')
    @php
        $table_name = 'Customers List';
        $table_id = 'datatable';
        $tableData = ['Name', 'Email', 'Source'];
    @endphp
    @include('common.table.table')

    @include('common.modal.add_edit_modal')
@endsection

@section('js_after')
    {{-- **Show Data** --}}
    <script>
        var tabelDataArray = ['name', 'email', 'src'];
        var get_data_url = "{{ route('get_users',['type'=>$customer]) }}"
    </script>
    @include('common.js.get_data')
@endsection
