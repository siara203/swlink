@extends('admin.master')   
@section('title','Add Image')  
@section('main') 

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Add Image</h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title col-6">@include('errors.note')  </h4>
                            <p class="card-description"> </p>
                            <form class="forms-sample" method="post" action="{{ route('upload.image') }}" enctype="multipart/form-data">
                              @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Ghi chú</label>
                                    <input type="text" placeholder="Viết ghi chú vào đây" class="form-control" id="exampleInputName1" name="name" aplaceholder="Name" />
                                </div>
                                <div class="form-group col-4">
                                  <label for="time">Thời gian diễn ra</label>
                                  <input  type="date"  name="time" class="form-control" required>
                              </div>
                                <div class="form-group">
                                  <label>Chọn ảnh</label>
                                
                                  <div class="input-group col-xs-12">
                                    <input multiple type="file" class="form-control image-file" name="image" accept="image/*">
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">
                                    Thêm mới
                                </button>
                                <a href="{{ route('admin.showimages') }}" class="btn btn-dark">Cancel</a>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        @stop