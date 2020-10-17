@include('zgenadmin.layouts.header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Remove Post </h3>
        </div>
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Recent Tickets</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th> id </th>
                      <th> Header </th>
                      <th> Category </th>
                      <th> Hit </th>
                      <th> Created at </th>
                      <th>  </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                    @php
                        $oldDate = $post->created_at;
			                  $date = strtotime($oldDate);
			                  $newDate = date("d F Y",$date);
                    @endphp
                        <tr>
                            <td> {{$post->id}} </td>
                            <td> {{$post->header}}</td>
                            <td> <label class="badge badge-gradient-success">{{$post->categories}}</label></td>
                            <td> {{$post->hit}} </td>
                            <td> {{$newDate}} </td>
                            <td> <a href="/panel/remove/{{$post->id}}"> <button type="button" class="btn btn-outline-danger btn-sm">Delete Post</button> </a></td>
                        </tr>
                    @endforeach
                  </tbody>
                  
                </table>
              </div>
            </div>
        </div>
    </div>
@include('zgenadmin.layouts.footer')