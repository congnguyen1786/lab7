<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<div class="col-6 m-auto">
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
    </div>
  @endif

  <form action="{{ route('hs_store') }}" method="POST" class="p-3 border border-primary">
    @csrf
    <h3 class="h4 bg-info p-2 mx-n3 mt-n3 text-white">NHẬP THÔNG TIN HỌC SINH</h3>

    <div class="form-group row">
      <label class="col-3">Họ tên học sinh</label>
      <div class="col-9">
        <input type="text" class="form-control" name="hoten" value="{{ old('hoten') }}">
      </div>
    </div>

    <div class="form-group row">
      <label class="col-3">Tuổi</label>
      <div class="col-9">
        <input type="number" class="form-control" name="tuoi" value="{{ old('tuoi') }}">
      </div>
    </div>

    <div class="form-group row">
      <label class="col-3">Ngày sinh</label>
      <div class="col-9">
        <input type="date" class="form-control" name="ngaysinh" value="{{ old('ngaysinh') }}">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-12">
        <button type="submit" class="btn btn-primary w-25">Lưu thông tin</button>
      </div>
    </div>
  </form>
</div>
