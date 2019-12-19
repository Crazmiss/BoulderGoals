@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        Your boulders:
                        <br/> <br/>

                        <u>Finished boulders:</u> <br/>
                        @foreach($boulders as $boulder)
                            @if($boulder->completed_at != null)
                                Id: {{$boulder->id}}<br/>
                                Boulder grade:  {{ $boulder->boulderGrade->name }}<br/>
                                Notes: {{ $boulder->notes }} <br/>
                                Tries:  {{ $boulder->tries }}<br/>
                                <br/>
                            @endif
                        @endforeach

                        <br/>

                        <u>Not-finishes boulders:</u> <br/>
                        @foreach($boulders as $boulder)
                            @if($boulder->completed_at == null)
                                Id: {{$boulder->id}}<br/>
                                Boulder grade:  {{ $boulder->boulderGrade->name }}<br/>
                                Notes: {{ $boulder->notes }} <br/>
                                Tries:  {{ $boulder->tries }}<br/>
                                <br/>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
