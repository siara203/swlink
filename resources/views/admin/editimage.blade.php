@extends('admin.master')   
@section('title','Edit Image')  
@section('main') 
    
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Edit Image</h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title col-6">@include('errors.note')  </h4>
                            <p class="card-description"> </p>
                            <form class="forms-sample" method="post" action="{{ route('admin.updateimage', $image->id) }}" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                  <label for="exampleInputName1">Ghi chú</label>
                                  <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="viết ghi chú vào đây" value="{{ $image->name }}" />
                              </div>
                              <div class="form-group col-4">
                                <label for="time">Thời gian diễn ra</label>
                                <input type="date" name="time" class="form-control" value="{{ date('Y-m-d', strtotime($image->time )) }}"required>
                            </div>                            
                              <div class="form-group">
                                  <label for="exampleInputName1">Ảnh cũ</label>
                                  <br>
                                  <img src="{{ asset('images/'.$image->image) }}" class="img-fluid rounded avatar-50 mr-3" alt="{{ $image->name }}" style="width: 20%; height: auto;">
                                </div>
                              <div class="form-group">
                                  <label>Ảnh mới</label>
                                  <div class="input-group col-xs-12">
                                      <input type="file" class="form-control image-file" name="image" accept="image/*">
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-primary mr-2">
                                  Sửa lại
                              </button>
                              <a href="{{ route('admin.showimages') }}" class="btn btn-dark">Cancel</a>
                          </form>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          @stop