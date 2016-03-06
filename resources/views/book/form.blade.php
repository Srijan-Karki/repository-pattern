<div class="form-group required">
    <label for="title" class="col-sm-2 control-label">Book Title</label>
    <div class="col-sm-10">
        {!!  Form::text('title', null, ['class' => 'form-control','placeholder'=>'Enter book title']) !!}
    </div>
</div>
<div class="form-group required">
    <label for="desc" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
        {!! Form::textarea('desc', null, ['class' => 'form-control'])  !!}
    </div>
</div>
<div class="form-group required">
    <label for="price" class="col-sm-2 control-label">Price</label>
    <div class="col-sm-10">
        {!! Form::text('price', null, ['class' => 'form-control'])  !!}
    </div>
</div>
<div class="form-group required">
    <label for="published_on" class="col-sm-2 control-label">Published On</label>
    <div class="col-sm-10">
        {!! Form::text('published_on', null, ['class' => 'form-control datepicker'])  !!}
    </div>
</div>
