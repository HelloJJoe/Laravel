
<div class="container">
      <div class="row" >
        <div class="col-s-8 col-md-10">
        @auth
          <button type="button" class="add_comment btn btn-primary" style='font-size : 5px;padding:5px'>
              Reply
          </button>

          <form method="POST" action="{{ route('contact') }}" style='display:none' >
            @csrf
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="name">Name:</label>
                <input type='text' name='name' class='form-control', placeholder="Name", required data-validation-required-message='Please enter your name' />
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="Message">Message:</label>
                <textarea name='message' class='form-control', placeholder="Message", required data-validation-required-message='Please enter your message' rows=1 ></textarea>
                
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" style='font-size : 5px;padding:5px'>
                  add comment
              </button>
            </div>
              <input type='hidden' name='parent_id' value='{{$comment->id}}'/>
          </form>
          @else
            <a href="{{ route('login') }}" style='color:grey'>add comment</a>
          @endauth
        
      </div>
  </div>
</div>
<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $(".add_comment").click(function(){
        $(this).next().toggle();
      });
    });
</script>


 



 

