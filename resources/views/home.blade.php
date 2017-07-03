@extends('layouts.app')

@section('content')
<div class="container">
  @if(Session::has('postsaved'))
    <div class="row">
      <div class="col-md-8">
        <div class="alert alert-success">
          <strong>{{ Session::get('postsaved') }}</strong>
        </div>
      </div>
    </div>
    @endif
    @if(Session::has('postferror'))
    <div class="row">
      <div class="col-md-8">
        <div class="alert alert-danger">
          <strong>{{ Session::get('postferror') }}</strong>
        </div>
      </div>
    </div>
    @endif
    @if(Session::has('posterror'))
    <div class="row">
      <div class="col-md-8">
        <div class="alert alert-danger">
          <strong>{{ Session::get('posterror') }}</strong>
        </div>
      </div>
    </div>
    @endif
    <div class="row">
        <form action="{{ route('uploadPost') }}" method="POST">
          {{ csrf_field() }}
          <div class="col-md-8">
            <div class="form-group {{ $errors->has('post_title') ? ' has-error has-feedback' : '' }}">
              <label for="post-title">Title</label>
              <input type="text" class="form-control" id="post-title" name="post_title" >
              @if ($errors->has('post_title'))
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                  <span class="help-block">
                      <strong>{{ $errors->first('post_title') }}</strong>
                  </span>
              @endif
            </div>
            
            <div class="form-group {{ $errors->has('post_content') ? ' has-error' : '' }}">
              <label for="content">Content or Query</label>
              <textarea class="form-control" id="post-content" name="post_content" rows="10"></textarea>
              @if ($errors->has('post_content'))
                  <span class="help-block">
                      <strong>{{ $errors->first('post_content') }}</strong>
                  </span>
              @endif
            </div>
            
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="post-tags">Tags</label>
              <input type="text" class="form-control" id="post-tags" name="post_tags" placeholder="eg : examdate, testpaper, imigrationtoIndia ">
            </div>
           {{--   <div class="form-group">
              <label for="categories">Categories</label>
              <select class="form-control" id="categories" name="categories[]" multiple="multiple">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select><br>
              <input type="text" class="form-control" id="add-category" placeholder="New Category" style="display:none;">
               <a href="#" onclick="$('#add-category').show(); $('#categories').hide(); $(this).hide(); return false;"><big>+</big> Add new Category</a> 
            </div>  --}}
            <div class="form-group">
              <a href="#" onclick="$('#featured-image').click(); return false;">Uplaod a featured Image</a> 
              <input type="file" name="featured_image" style="display: none;" id="featured-image">
              <input type="hidden" name="featured64" style="display: none;" id="featured64">
              <img src="" id="showfeatured-image" style="width:100%;">
            </div>
            <button type="submit" class="btn btn-success btn-block">Post</button>
          </div>
        </form>
    </div>
</div>
@endsection
