
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
      <!-- Side Header -->
      <div class="content-header justify-content-lg-center">
        <!-- Logo -->
        <div>
          <span class="smini-visible fw-bold tracking-wide fs-lg">
            c<span class="text-primary">b</span>
          </span>

          <a class="link-fx fw-bold tracking-wide mx-auto" href="{{ route('doctor.dashboard') }}">


            <span class="smini-hidden">

              <span class="fs-5 text-dual">Doctor </span><span class="fs-5 text-primary">Dashboard</span>
            </span>
          </a>
        </div>
        <!-- END Logo -->

        <!-- Options -->
        <div>
          <!-- Close Sidebar, Visible only on mobile screens -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
            <i class="fa fa-fw fa-times"></i>
          </button>
          <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
      </div>
      <!-- END Side Header -->

      <!-- Sidebar Scrolling -->
      <div class="js-sidebar-scroll">
        <!-- Side User -->
        <div class="content-side content-side-user px-0 py-0">
          <!-- Visible only in mini mode -->
          <div class="smini-visible-block animated fadeIn px-3">
            <img src="{{ (! empty($adminProfile->photo)) ? url('upload/admin_images/'.$adminProfile->photo):url('upload/no_image.jpg') }}"
            alt="Admin"  style="width:100px; height: 100px;">

          </div>
          <!-- END Visible only in mini mode -->

          @php
               $id= Auth::user()->id;
              $adminProfile =App\Models\User::find($id);

          @endphp

          <!-- Visible only in normal mode -->
          <div class="smini-hidden text-center mx-auto">
            <a class="img-link" href="be_pages_generic_profile.html">
                <img src="{{ (! empty($adminProfile->photo)) ? url('upload/admin_images/'.$adminProfile->photo):url('upload/no_image.jpg') }}"
                alt="Admin"  style="width:100px; height: 100px;">

            </a>
            <ul class="list-inline mt-3 mb-0">
              <li class="list-inline-item">
                <a class="link-fx text-dual fs-sm fw-semibold text-uppercase" href="{{ route('admin.profile.Edit') }}">{{ Auth::user()->name }}</a>
              </li>
              <li class="list-inline-item">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
                  <i class="fa fa-burn"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="link-fx text-dual" href="{{ route('doctor.logout') }}">
                  <i class="fa fa-sign-out-alt"></i>
                </a>
              </li>
            </ul>
          </div>
          <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
          <ul class="nav-main">
            <li class="nav-main-item">

              <a class="nav-main-link active" href="{{ route('doctor.dashboard') }}">


                <i class="nav-main-link-icon fa fa-house-user"></i>
                <span class="nav-main-link-name">Dashboard</span>
              </a>
            </li>




            <li class="nav-main-item">


            </li>
            <li class="nav-main-heading">User Interface</li>
           <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-grip-vertical"></i>

                <span class="nav-main-link-name">News Post</span>
              </a>
              <ul class="nav-main-submenu">

                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('doctor.create.news_post') }}">
                      <span class="nav-main-link-name">Create News Post...</span>
                    </a>
                  </li>

                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('doctor.all.news_post') }}">
                      <span class="nav-main-link-name">All News Post</span>
                    </a>
                  </li>

              </ul>
            </li>












            @php

            $id = Auth::user()->id;

            $doctor_id =App\Models\User::find($id);

            $status= $doctor_id->status;

            //dd($status);
            @endphp


    @if($status=== 'active')






                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-award"></i>
                    <span class="nav-main-link-name">Appoint Request</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="{{ route('doctor.appoinment.request') }}">
                        <span class="nav-main-link-name">All Post</span>
                      </a>
                    </li>

                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Metting</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="{{ url('chatify') }}">
                        <span class="nav-main-link-name">Join</span>
                      </a>
                    </li>

                  </ul>
                </li>

              </ul>
            </li>

           

            </li>


            



@else



@endif


          </ul>
        </div>
        <!-- END Side Navigation -->
      </div>
      <!-- END Sidebar Scrolling -->
    </div>
    <!-- Sidebar Content -->
  </nav>

  {{-- javascript photo show start --}}

  <script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>{{-- javascript photo show end --}}
