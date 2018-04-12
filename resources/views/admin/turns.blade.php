@extends('layouts.app')

@section('content')

        <turns-list
                :labels="{{ json_encode([
                'date' => __("Dia"),
                'hour' => __("Hora"),
            ]) }}"
                route="{{ route('admin.turns_json') }}"
        >

        </turns-list>

@endsection
