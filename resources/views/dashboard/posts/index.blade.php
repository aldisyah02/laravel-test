@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h2>My Posts</h2>
</div>

<div class="table-responsive col-lg-9">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col" class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td class="text-center">
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-danger"><span data-feather="trash-2"></span></a>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


@endsection