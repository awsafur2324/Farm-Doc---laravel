@extends('admin.layouts.admin_master')

@section('admin_content')


<div class="content">
    <!-- Default Table Style -->
    <h2 class="content-heading">InActive Doctor Table </h2>



    <!-- Bordered Table -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">InActive Table</h3>
        <div class="block-options">
          <div class="block-options-item">

          </div>
        </div>
      </div>
      <div class="block-content">
        <table class="table table-bordered table-vcenter">
          <thead>
            <tr>
              <th class="text-center" style="width: 50px;">Sl No</th>
              <th>Name</th>
              <th>Email</th>
              <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
              <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
          </thead>
          <tbody>
  @foreach ($Inactivedoctor as $key=>$iteam)



            <tr>
              <th class="text-center" scope="row">{{  $key+1 }}</th>
              <td>{{ $iteam->name }}</td>
              <td>{{ $iteam->email }}</td>
              <td class="d-none d-sm-table-cell">
                <span class="badge bg-danger">Inactive</span>
              </td>
              <td class="text-center">
                <div class="btn-group">


                    <a href="{{ route('doctor.inactive.details',$iteam->id) }}"  class="btn btn-sm btn-primary"> Details</a>
                </div>
              </td>
            </tr>

            @endforeach

          </tbody>
        </table>
      </div>
    </div>
    <!-- END Bordered Table -->



    <!-- END Default Table Style -->
  </div>



@endsection
