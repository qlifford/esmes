@extends('layouts.app')
@section('content')   
    <div class="flex justify-center">       
        <div class="w-8/12 bg-white p-6 rounded-lg">

            @if (Session::has('success'))
                <div class="bg-red-500 rounded-lg text-white text-center p-4 mb-6">
                    {{ Session()->get('success')}}
                </div>                    
            @endif
            
            <h1>Portfolio</h1>
        </div>
    </div>
@endsection