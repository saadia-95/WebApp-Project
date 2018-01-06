@extends('layouts.app')

@section('content')
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Profile</div>

				<div class="panel-body">
                    <div class="song-form">
                        <label for="name" class="col-md-4 control-label">Name:</label>
                        <div class="col-md-6">
                            {{Auth::user()->name}}
                        </div>
                    </div>
                    <div class="song-form">

                        <label for="name" class="col-md-4 control-label">Email:</label>
                        <div class="col-md-6">
                            {{Auth::user()->email}}
                        </div>
                    </div>
                    <div class="song-form">

                        <label for="name" class="col-md-4 control-label">Password:</label>
                        <div class="col-md-6">
                            {{Auth::user()->password}}
                        </div>
                    </div>

                    <!-- <div class="song-form">
                        <div class="col-md-8 col-md-offset-4" style="float: left; margin-right: 2%;">
                            <a href="{{ url('/update')}}">
                            <button type="submit" class="btn btn-primary">
                                Change Password
                            </button>
                            </a>
                        </div>
                    </div> -->
					
				</div>
				
			</div>
		</div>
		
	</div>

	
	
</div>

@endsection
