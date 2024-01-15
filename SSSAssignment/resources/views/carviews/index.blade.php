@extends('layout.main')
@section('content')
<main class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header card-title">
              <div class="d-flex align-items-center">
                <h2 class="mb-0">Cars</h2>
              </div>
            </div>
          <div class="card-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">  #  </th>
                  <th scope="col">  model  </th>
                  <th scope="col">  year  </th>
                  <th scope="col">  sales email  </th>
                  <th scope="col">  manufacturer  </th>
                </tr>
              </thead>
              <tbody>       
                    <tr>
                    <th scope="row">
                      
                    <td width="150">
                        <a href="show.html" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="form.html" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></a>
                      </td>
                    </tr>
              </tbody>
            </table> 
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection