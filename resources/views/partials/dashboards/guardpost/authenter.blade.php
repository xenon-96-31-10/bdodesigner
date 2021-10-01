<form method="post" action="{{ route('guardpost.chooseenter') }}" class="needs-validation">
  @csrf
  <h3 class="mb-3">{{$post->name}}</h3>
  <div class="input-group my-2">
    <div class="input-group-prepend">
      <label class="input-group-text" for="bodyofcar">Выберите блок пост</label>
    </div>
    <select class="custom-select new-car" name="enter">
      @foreach($enters as $enter)
      <option value="{{$enter->id}}">{{$enter->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="row my-3">
    <div class="col-12 col-sm-4 offset-sm-4">
      <button type="submit" name="button" class="btn btn-block btn-dark">Авторизоваться</button>
    </div>
  </div>
</form>
