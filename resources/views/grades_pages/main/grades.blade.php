
@extends('grades_pages.layouts.links')
@section('content')
<div class="wrapper">
    @include('grades_pages.layouts.header')

    <div>
        <livewire:grades>
    </div>

</div>
@include('grades_pages.layouts.footer')
@endsection
