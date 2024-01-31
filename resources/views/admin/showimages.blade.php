@extends('admin.master')   
@section('title','Show Images')  
@section('main') 

     
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Show Images </h3>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> @include('errors.note') </h4>
                    <p class="card-description">
                    </p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>STT</th>
                            <th>Ghi chú</th>
                            <th>Ảnh</th>
                            <th>Thời gian</th>
                            <th>Ngày thêm</th>
                            <th>Ngày sửa</th>
                            <th>Hỗ trợ</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($images as $image)
                          <tr>
                            <td class="col-md-1">{{ $image->id }}</td>
                            <td class="col-md-2">{{ $image->name }}</td>
                            <td class="col-md-4">
                                <img src="{{ asset('images/'.$image->image) }}" class="img-fluid rounded avatar-50 mr-3" alt="{{ $image->name }}" style="width: 70%; height: auto;">
                            </td>
                             <td class="col-md-2"> 
                              
                              {{ \Carbon\Carbon::parse($image->time)->format('d/m/Y') }}
                            </td>
                            <td class="col-md-2"> 
                              {{ \Carbon\Carbon::parse($image->created_at)->format('     H:i:s') }} <br><br>
                              {{ \Carbon\Carbon::parse($image->created_at)->format('d/m/Y') }}
                            </td>
                            <td class="col-md-2" > 
                              {{ \Carbon\Carbon::parse($image->updated_at)->format('     H:i:s') }} <br><br>
                              {{ \Carbon\Carbon::parse($image->updated_at)->format('d/m/Y') }}
                            </td>
                            <td class="col-md-2">
                              <a href="{{ route('admin.editimage', $image->id) }}" class="badge badge-success">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                              <form action="{{ route('admin.deleteimage', $image->id) }}" method="POST" style="display: inline;">
                                  @csrf
                                  @method('POST')
                                  <button type="submit" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this image?')">
                                      <i class="fas fa-trash-alt"></i> Delete
                                  </button>
                              </form>
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
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          @stop