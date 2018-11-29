
@foreach($sub_comments as $sub_comment)
  @if($sub_comment->parent_id === $comment->id)
      <div style='font-size: 18px' >
        {{ $sub_comment->comment }} <h6 style='display:inline-block'>— {{$sub_comment->user }} {{ date('M d,Y H:i', strtotime($sub_comment->created_at)) }}</h6>
      </div>
      <hr style='margin-top: 0;margin-bottom: 0'>
  @endif
@endforeach

 


 

