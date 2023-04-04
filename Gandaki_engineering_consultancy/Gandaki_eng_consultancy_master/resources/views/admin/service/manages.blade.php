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
                                    <h6 class="text-white text-capitalize ps-3">Manage service</h6>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">  Add service </button>                                                             
                            
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
                                                    service_logo</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    service_title</th>
                                                    <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    service_description</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    created_at</th>
                                                      <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    updated_at</th>
                                                    <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                   Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                                  @foreach( $services as $service) 
                                                  <tr>
                                                    <td>{{$service -> id}}</td>
                                                    <td><img src="{{asset('site/uploads/service/'.$service->service_logo)}}" alt=""></td>

                                                    <td>{{$service -> service_title}}</td>
                                                    <td>{{$service -> service_description}}</td>
                                                    <td>{{$service -> created_at}}</td>
                                                    <td>{{$service -> updated_at}}</td>
                                                    <td><a href = "{{route('getServiceEdit',$service->id)}}" class="btn btn-success">Edit</a></td>
                                                    <td><a href = "{{route('getServiceDelete',$service->id)}}" class="btn btn-success">Delete</a></td>
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
      <form method="POST" enctype="multipart/form-data" action ="{{route('postServiceAdd')}}">
        @csrf
      <div class="mb-3">
    <label for="service_logo" class="form-label">service_logo</label>
    <input type="file" class="form-control" id="service_logo" name="service_logo">
  </div>
  <div class="mb-3">
    <label for="service_title" class="form-label">service_title</label>
    <input type="text" class="form-control" id="service_title" name="service_title">
  </div>
  <div class="mb-3">
    <label for="service_description" class="form-label">service_description</label>
    <input type="text" class="form-control" id="service_description" name="service_description">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      
    </div>
  </div>
</div>
