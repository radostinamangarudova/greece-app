<div class="form-group">
    {!! Form::label( 'comment', null, ['class' => 'control-label'] ) !!}
    {!! Form::text( 'comment', $review->comment, ['class' => 'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::submit('Save',
      array('class'=>'btn btn-sm btn-default')) !!}
</div>
