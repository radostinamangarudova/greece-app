<div class="form-group">
    <label for="rating" class="control-label">Рейтинг</label>
    {!! Form::input('number', 'rating', null, ['class' => 'rating']) !!}
</div>
<div class="form-group">
    <label for="comment" class="control-label">Коментар</label>
    {!! Form::textarea( 'comment', $review->comment, ['class' => 'form-control', 'id' => 'comment'] ) !!}
</div>
<div class="form-group">
    {!! Form::submit('Запази',
      array('class'=>'btn btn-sm btn-default')) !!}
</div>
