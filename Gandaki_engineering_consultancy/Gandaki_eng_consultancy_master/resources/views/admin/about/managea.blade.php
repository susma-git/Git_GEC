<x-layout bodyClass="g-sidenav-show  bg-gray-200">
        <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="Tables"></x-navbars.navs.auth>
            <!-- End Navbar -->
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">Manage about</h6>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">  Add about </button>                                                             
                            
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    id</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    about_description</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    about_image</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    created_at</th>
                                                <th class="text-secondary opacity-7"></th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    updated_at</th>
                                                <th class="text-secondary opacity-7"></th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach($abouts as $about)

                                                <td>{{$about->id}} </td>
                                                <td>{{$about->about_description}} </td>
                                                <td><img src="{{asset('site/uploads/about/'.$about->about_image)}}" alt="image_name"></td>
                                                <td>{{$about->created_at}}</td>
                                                <td>{{$about->updated_at}}</td>
                                                <td>
                                                    <a href="{{route('getEditAbout',$about->id)}}" class="btn btn-sm btn-success">Edit</a>
                                                <a href="{{route('getDeleteAbout',$about->id)}}" class="btn btn-sm btn-success">Delete</a>
                                            </td>
                                                                                         
                                        </tr>
                                             
                                        @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <x-footers.auth></x-footers.auth>
            </div>
        </main>
        <x-plugins></x-plugins>

</x-layout>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" enctype="multipart/form-data" action="{{route('postAboutAdd')}}">
        @csrf
      <div class="mb-3">
    <label for="about_image" class="form-label">about_image</label>
    <input type="file" class="form-control" id="about_image" name="about_image">
  </div>
  <div class="mb-3">
    <label for="about_description" class="form-label">about_description</label>
    <input type="text" class="form-control" id="about_description" name="about_description">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      
    </div>
  </div>
</div>
