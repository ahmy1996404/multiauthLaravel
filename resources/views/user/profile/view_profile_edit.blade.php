@extends('user.user_master')
 @section('user')
 <div class="row" style="padding: 20px">
    <div class="col-md-6">

        <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User name</label>
            <input type="text" class="form-control"  value="{{ $editData->name }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control"  value="{{ $editData->email }}">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Profile Image</label>
            <input class="form-control" type="file" id="formFile">
        </div>
          <div class="mb-3">
             <img src="{{ (!empty($editData->profile_photo_path)) ? url('upload/user_images/'.$editData->profile_photo_path) : url('upload/noimagejpg.jpg') }}" class="card-img-top" alt="..." style="width: 100px;height:100px">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>

 @endsection
