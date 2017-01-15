@extends('template')
@section('container')
	<h4>Add your club/organization to the network/coalition/green umbrella/</h4>

	<div class = "row">

		@if(Auth::check())
			<form class="form-horizontal" role="form" method="POST" action="{{ action('OrgController@store') }}">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

			                <label for="name" class="col-md-2 control-label">Club Name</label>

			                

			                    <input type = "text" id="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus></input>

			                    @if ($errors->has('name'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('name') }}</strong>
			                        </span>
			                    @endif
			                
			            </div>
			            
			            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">

			                <label for="description" class="col-md-2 control-label">Describe your club</label>

			               

			                    <textarea id="description" class="form-control" name="description" value="{{ old('description') }}" cols = "50" required autofocus></textarea>

			                    @if ($errors->has('description'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('description') }}</strong>
			                        </span>
			                    @endif
			                
			            </div>

			            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">

			                <label for="url" class="col-md-2 control-label">URL if applicable</label>

			                    <input type = "text" id="url" class="form-control" name="url" value="{{ old('url') }}" autofocus />

			                    @if ($errors->has('url'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('url') }}</strong>
			                        </span>
			                    @endif
			                
			            </div>

			            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

			                <label for="email" class="col-md-2 control-label">Contact email</label>

			                    <input type = "text" id="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus />

			                    @if ($errors->has('email'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('email') }}</strong>
			                        </span>
			                    @endif
			                
			            </div>

			            <div class="form-group{{ $errors->has('pillars') ? ' has-error' : '' }}">

			                <label for="pillars" class="col-md-2 control-label">With which pillars of sustainability is your club concerned and how?</label>

			               

			                    <textarea id="pillars" class="form-control" name="pillars" value="{{ old('pillars') }}" cols = "50" required autofocus></textarea>

			                    @if ($errors->has('pillars'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('pillars') }}</strong>
			                        </span>
			                    @endif
			                
			            </div>
			            
			            <div class="form-group">
			                <div class="col-md-8 col-md-offset-2">
			                    <button type="submit">
			                        Submit
			                    </button>
			                </div>
			            </div>


					</form>
				@else
					<h5>You must be <a href = "/login">logged in</a> to add an organization.</h5>
				@endif
			</div>


@endsection