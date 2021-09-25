@extends('layouts.app')

@section('content')
    <semester-courses data="{{ $semester_id }}"></semester-course>
@endsection