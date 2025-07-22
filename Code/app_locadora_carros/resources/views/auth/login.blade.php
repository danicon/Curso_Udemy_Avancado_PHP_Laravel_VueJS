@extends('layouts.app')

@section('content')
    {{-- @csrf --}}
    {{-- {{ @csrf_token() }} --}}
    <login-component csrf_token="{{ @csrf_token() }}"></login-component>
@endsection
