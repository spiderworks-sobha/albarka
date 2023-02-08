<x-guest-layout>
    <div class="container">
        @foreach($blogs as $blog)
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{$blog->title}}</h5>
                <p class="card-text">{{$blog->short_description}}</p>
                <a href="{{url('blog', [$blog->slug])}}" class="card-link">Read More</a>
              </div>
            </div>
        @endforeach
    </div>
</x-guest-layout>
