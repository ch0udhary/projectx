@Extends('layouts.dashboard')
@section('content')
<div class=" container-fluid   container-fixed-lg bg-white">
            <div class="row">
              <div class="col-md-7">
                <!-- START card -->
                <div class="card card-transparent">
                  <div class="card-body">
                    <form  action="{{url('/admin/industries/'.$edit_data[0]['id'])}}" method="POST" enctype="multipart/form-data" role="form" autocomplete="off" novalidate>
                    	@csrf
                      <input type="hidden" name="_method" value="PUT" />
                      <p>Basic Information</p>
                      <div class="form-group-attached">
                        <div class="form-group form-group-default required">
                          <label>Industry Name</label>
                          <input type="text" class="form-control" name="name" value="{{$edit_data[0]['industry_name']}}" required>
                        </div>
                        <div class="row clearfix">
                        </div>
                      </div>
		                    </div>
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