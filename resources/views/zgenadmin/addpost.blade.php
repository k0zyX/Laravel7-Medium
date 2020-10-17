@include('zgenadmin.layouts.header')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Add Post </h3>
        </div>
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add a new post</h4>
              <p class="card-description"> You must add a HTML5 code into text area </p>
              <form class="forms-sample" action="/panel/addpost" method="POST">
                @csrf
                <div class="form-group">
                  <label for="header">Header</label>
                  <input type="text" class="form-control" id="header" placeholder="Enter a header" name="header">
                </div>
                <div class="form-group">
                  <label for="selectCat">Select a category</label>
                  <select class="form-control" id="selectCat" name="categories">
                    @foreach ($category as $cat)
                      <option>{{$cat["category"]}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Textarea</label>
                  <textarea class="form-control" id="exampleTextarea1" rows="4" name="content"></textarea>
                </div>
                <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
              </form>
            </div>
          </div>
    </div>
    
@include('zgenadmin.layouts.footer')
