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
              <div class="ml-auto">
                  <a href="{{ route('carviews.createcars') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add Car</a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6"></div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col">
                    <div class="input-group mb-3">
                      <select id="filter_manufacturer_id" name="manufacturer_id" class="custom-select">
                        @foreach ($manufacturer as $id => $name)
                          <option {{ $id == request('manufacturer_id') ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>
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
              @foreach ($cars as $index => $car)  
                    <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                  <td>{{ $car->model }}</td>
                  <td>{{ $car->year }}</td>
                  <td>{{ $car->salesperson_email }}</td>
                  <td>{{ $car->manufacturer->name }}</td>
                    <td width="150">
                        <a href="#" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="#" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></a>
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
</main>

@endsection