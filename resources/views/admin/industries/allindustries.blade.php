@Extends('layouts.dashboard')
@section('content')
<table  class="table table-bordered">
        <thead>
            <tr>
                <th width="10%">Id</th>
                <th width="20%">Indsutry Name</th>
                <th width="20%">Slug</th>
                <th width="25%">Image</th>
                <th width="25%">Action</th>
            </tr>
        </thead>
        <tbody>

        	<?php 
        	$id = 1;
        	?>

        	 @foreach($data as $form_data)
        	<tr>
        		<td>{{$id}}</td>
        		<td>{{$form_data['industry_name']}}</td>
        		<td>{{$form_data['slug']}}</td>
        		<td><img style="max-width:50%;" class="img-thumbnail img-responsive"   src="{{ URL::asset('industry_images/') }}/<?php echo $form_data['file']; ?>"></td>
        		<td><a href="{{URL::to('/admin/industries/'.$form_data['id'].'/edit') }}" class="btn btn-outline btn-circle btn-sm purple" ><i class="fa fa-edit"></i>Edit</a> 
                     <form method="POST" action="{{URL::to('/admin/industries/'.$form_data['id'])}}" accept-charset="UTF-8" class="form-horizontal" style="display: inline-block; " ><input name="_method" type="hidden" value="DELETE" ><input name="_token" type="hidden" value="{{ csrf_token() }}">

                                                <span><br><button type="submit" class="btn btn-outline btn-circle dark btn-sm black"><i class="fa fa-trash"></i></a>Delete</button></span>

                                                </form>
        	</tr>
        	@endforeach
        </tbody>
    </table>
@endsection