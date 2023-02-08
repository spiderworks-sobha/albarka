<x-guest-layout>
    <div class="container">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{$blog->title}}</h5>
                <p class="card-text">{!! $blog->content !!}</p>
              </div>
            </div>
      <comment id="{{$blog->id}}" type="Blog"></comment>
    </div>
</x-guest-layout>
