@Extends('layouts.dashboard')
@section('content')
 <div class=" container-fluid   container-fixed-lg bg-white">
            <div class="row">
              <div class="col-md-7">
                <!-- START card -->
                <div class="card card-transparent">
                  <div class="card-body">
                    <form  action="{{url('/admin/industries')}}" method="POST" enctype="multipart/form-data" role="form" autocomplete="off" novalidate>
                    	@csrf
                      
                      <p>Basic Information</p>
                      <div class="form-group-attached">
                        <div class="form-group form-group-default required">
                          <label>Industry Name</label>
                          <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
                           @if ($errors->has('name'))
                              <div class="error">{{ $errors->first('name') }}</div>
                          @endif
                        </div>
                        <div class="row clearfix">
                        </div>
                      </div>
                      <p class="m-t-10">Advanced Information</p>
			                     <div class="form-group form-group-default required">
				                       <label>Files</label>
				                        <input type="file" class="form-control" name="file" required>
                                 @if ($errors->has('file'))
                              <div class="error">{{ $errors->first('file') }}</div>
                          @endif
			                    </div>
		                    </div>
                      <br>
                      <!--
                      <div class="pull-left">
                        <div class="checkbox check-success  ">
                          <input type="checkbox" checked="checked" value="1" id="checkbox-agree">
                          <label for="checkbox-agree">I hereby certify that the information above is true and accurate
                          </label>
                        </div>
                      </div>
                    -->
                      <br>
                      <button class="btn btn-success" type="submit" name="submit">Submit</button>
                    </form>
                  </div>
                </div>
                <!-- END card -->
              </div>
            </div>
          </div>
@endsection