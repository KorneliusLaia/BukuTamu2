@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/pesan2s') }}">Pesan2</a> :
@endsection
@section("contentheader_description", $pesan2->$view_col)
@section("section", "Pesan2s")
@section("section_url", url(config('laraadmin.adminRoute') . '/pesan2s'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Pesan2s Edit : ".$pesan2->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($pesan2, ['route' => [config('laraadmin.adminRoute') . '.pesan2s.update', $pesan2->id ], 'method'=>'PUT', 'id' => 'pesan2-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nama')
					@la_input($module, 'EMAIL')
					@la_input($module, 'PESAN')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/pesan2s') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#pesan2-edit-form").validate({
		
	});
});
</script>
@endpush
