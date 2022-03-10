@extends('layouts.app')

@section('content')
<div class="container">
    @if($classification == 'patient')
    <script>
    window.location = "/progress-patient-info";
    </script>
    @endif
</div>
@endsection