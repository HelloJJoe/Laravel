
<div class="container">
      <div class="row" >
        <div class="col-s-8 col-md-10 mx-auto">
         
          {{Form::open(['url'=>'/contact', 'method'=>'post'])}} 
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                {{ Form::label('Name', 'Name:') }}
                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name', 'required data-validation-required-message' => 'Please enter your name']) }}
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                {{ Form::label('Message', 'Message:') }}
                {{ Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message', 'required data-validation-required-message' => 'Please enter your message', 'rows' => 1])}}
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              {{ Form::submit('add comment', ['class' => 'btn btn-primary', 'style '=> 'font-size : 5px;padding:5px']) }}
            </div>
              {{ Form::hidden('parent_id', $comment->id) }}
          {{ Form::close() }}
        </div>
      </div>
      <hr>
    </div>
 



 

