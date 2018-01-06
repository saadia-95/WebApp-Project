@extends('layouts.app')

@section('content')
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<script type="text/javascript">
    val = []
</script>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Users</div>

				<div class="panel-body">
					<table>
						<tr>
							<th>Name</th>
							<th>Roletype</th>
							<th>Edit Roletype</th> 
						</tr>
						<tr>
							@foreach ($users as $us)
							<tr>

							    <td>{{ $us->name }}</td>
							    <td>{{ $us->roletype }} </td>
							    <td>
                                    <form method="POST" action="{{ url('updateRole') }}">
                                        <input type="hidden" name="id" value="{{ $us->id }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    							    	<select  name="roletype">
                                            @if($us->roletype == '0')
    							    		   <option value="0" selected>0</option>
                                            @else
                                                <option value="0">0</option>
                                            @endif
                                            @if($us->roletype == '1')
                                               <option value="1" selected>1</option>
                                            @else
                                                <option value="1">1</option>
                                            @endif
    							    	</select>
    							    	<div class="butt">
    		                                <button type="submit" class="btn btn-primary">
    		                                    Update
    		                                </button>
    		                            </div>
                                    </form>
							    </td>
							</tr>

							@endforeach
						</tr>
					</table>
				</div>
				
			</div>
		</div>
		
	</div>

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Upload Songs</strong></div>

                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ url('uploadSong') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="song-form">
                            <label name="name" class="col-md-4 control-label">Song</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="song-form">
                            <label name="artist" class="col-md-4 control-label">Artist</label>

                            <div class="col-md-6">
                                <input id="artist" type="text" class="form-control" name="artist" value="{{ old('artist') }}">
                            </div>
                        </div>

                        <div class="song-form">
                            <label name="genre" class="col-md-4 control-label">Genre</label>

                            <div class="col-md-6">
                                <input id="genre" type="text" class="form-control" name="genre" value="{{ old('genre') }}">
                            </div>
                        </div>

                        <div class="song-form">
                            <label name="filepath" class="col-md-4 control-label">Filepath</label>

                            <div class="col-md-6">
                                <input id="filepath" type="text" class="form-control" name="filepath" value="{{ old('filepath') }}">
                            </div>
                        </div>

                        <div class="song-form">
                            <div class="col-md-8*/ /*col-md-offset-4" style="float: right; margin-right: 20%;">
                                <button type="submit" class="btn btn-primary">
                                    Upload
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Delete Songs</strong></div>

                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ url('deleteSong') }}">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="song-form">
                            <label name="name" class="col-md-4 control-label">Song</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>


                        <div class="song-form">
                            <div class="col-md-8*/ /*col-md-offset-4" style="float: right; margin-right: 20%;">
                                <button type="submit" class="btn btn-primary">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
	
</div>

@endsection
