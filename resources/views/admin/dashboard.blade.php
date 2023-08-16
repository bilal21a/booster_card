@extends('layouts.admin.app')

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
    <script>
        var tabelDataArray = ['name', 'email', 'src'];
        var get_data_url = "{{ route('get_users') }}"
    </script>
    {{-- @include('common.js.get_data') --}}


    {{-- **Delete Data** --}}
@endsection
