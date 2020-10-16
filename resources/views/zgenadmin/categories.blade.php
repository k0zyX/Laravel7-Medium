@include('zgenadmin.layouts.header')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Add Categories </h3>
        </div>
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add a new category</h4>
              <p class="card-description">  </p>
              <form class="forms-sample" action="/panel/addcategories" method="POST">
                @csrf
                <div class="form-group">
                  <label for="header">Enter a new category</label>
                  <input type="text" class="form-control" id="category" placeholder="Enter a new category" name="categories">
                </div>
                <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
              </form>
            </div>
          </div>
          
    </div>
    
@include('zgenadmin.layouts.footer')