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

                        <form method="POST" action="{{ route('insertBoulder') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="grade"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Grade') }}</label>

                                <div class="col-md-6">
                                    <select name="boulder_grade_id">
                                        <!-- inline object literal -->
                                        @foreach($grades as $grade)
                                            <option value="{{$grade->id}}">{{ $grade->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('grade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tries"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Tries') }}</label>

                                <div class="col-md-6">
                                    <input id="tries" type="number"
                                           class="form-control @error('tries') is-invalid @enderror" name="tries"
                                           required>

                                    @error('tries')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="notes"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Notes') }}</label>

                                <div class="col-md-6">
                                    <textarea id="notes" cols="50" rows="10"
                                              class="form-control @error('notes') is-invalid @enderror" name="notes"
                                              required>
                                    </textarea>
                                    @error('notes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="completed"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Completed?') }}</label>

                                <div class="col-md-6">
                                    <input id="completed" type="checkbox"
                                           class="form-control @error('completed') is-invalid @enderror"
                                           name="completed"
                                           autofocus>

                                    @error('completed')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create Boulder') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                        Your boulders:
                        <br/> <br/>

                        <u>Finished boulders:</u> <br/>
                        @foreach($boulders as $boulder)
                            @if($boulder->completed_at !== null)
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
                            @if($boulder->completed_at === null)
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
