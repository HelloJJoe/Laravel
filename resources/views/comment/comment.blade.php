
<div class="container">
  
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <!-- Comments -->
      @foreach($comments as $comment)
        
        @if($comment->parent_id === 0)
          <hr >
          <div class="post-preview">
            <a>
              <h4 class="post-title"> {{ $comment->user }} </h4>
              <h5 class="post-subtitle"> {{ $comment->comment }} </h5> <br>
            </a>
            <p class="post-meta">{{ date('M d, Y H:i', strtotime($comment->created_at)) }}</p>
          </div> 
          <hr style='margin-top: 0;margin-bottom: 10px'>
          @include('comment.sub_comment')
          @include('comment.reply')
        @endif
      @endforeach

      <!-- Pager 
      <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
      </div>
    -->
    </div>
  </div>
</div>







 

