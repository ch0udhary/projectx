@Extends('layouts.dashboard')
@section('content')
 <div class=" container-fluid   container-fixed-lg bg-white">
            <div class="row">
              <div class="col-md-5">
                <!-- START card -->
                <div class="card card-transparent">
                  <div class="card-header ">
                    <div class="card-title">Attached form layouts
                    </div>
                  </div>
                  <div class="card-body">
                    <h3>Create Custom Quote
    							&amp; Create Contemporary feels</h3>
                    <p>Despite the UI, We thought of the User experience, With attached From Layouts you can simply categories Important fields and prioritize them.</p>
                    <br>
                    <div>
                      <div class="profile-img-wrapper m-t-5 inline">
                        <img width="35" height="35" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
                        <div class="chat-status available">
                        </div>
                      </div>
                      <div class="inline m-l-10">
                        <p class="small hint-text">VIA senior product manage
                          <br> for UI/UX at REVOX</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END card -->
              </div>
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
              <div class="col-md-7">
                <!-- START card -->
                <div class="card card-transparent">
                  <div class="card-body">
                    <form  action="{{url('/admin/industries/subindustries')}}" method="POST" enctype="multipart/form-data" role="form" autocomplete="off" novalidate>
                    	@csrf
                      
                      <p>Basic Information</p>
                      <div class="form-group-attached">
                        <div class="form-group form-group-default required">
                          <label>SubIndustry Name</label>
                          <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
                        </div>
                        <div class="row clearfix">
                        </div>
                      </div>
                      <p class="m-t-10">Advanced Information</p>
			                     <div class="form-group form-group-default required">
				                       <label>Files</label>
				                        <input type="file" class="form-control" name="file" required>
			                    </div>
		                    </div>
                      <br>
                      <div class="pull-left">
                        <div class="checkbox check-success  ">
                          <input type="checkbox" checked="checked" value="1" id="checkbox-agree">
                          <label for="checkbox-agree">I hereby certify that the information above is true and accurate
                          </label>
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