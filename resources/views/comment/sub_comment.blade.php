
@foreach($sub_comments as $sub_comment)
  @if($sub_comment->parent_id === $comment->id)
      <div style='font-size: 18px' >
        {{ $sub_comment->comment }} <h6 style='display:inline-block;font-size:5px'>— {{$sub_comment->user }} <h7 style='display:inline-block;font-size:5px;color:grey'>{{ date('M d, Y H:i', strtotime($sub_comment->created_at)) }}</h7></h6>
      </div>
      <hr style='margin-top:5px;margin-bottom:5px'>
  @endif
@endforeach

 


 

