@extends('admin.layouts.app')
@section('title', 'Pengaturan Website Profile')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Website</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><small><strong>Admin</strong></small></li>
            <li class="breadcrumb-item"><small><strong>Setting</strong></small></li>
            <li class="breadcrumb-item text-green"><small><strong>Website</strong></small></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title"><strong>Pengaturan Situs</strong></h3><br>
                  @if(!empty($fetch))
                    <small>diupdate oleh: {{$fetch->updated_by}}</small>
                  @endif
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="websiteForm" action="{{route('admin.website.save')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="title">Nama Dinas/Instansi</label>
                      <input type="text" name="name" class="form-control" id="name" value="{{(!empty($fetch))?$fetch->name:' '}}">
                    </div>
                    <div class="form-group">
                      <label for="img">Gambar Logo</label>
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" name="logo" id="logo">
                          <label class="custom-file-label" for="logo">{{($fetch) ? $fetch->logo : 'Unggah Gambar'}}</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="img">Icon Favicon</label>
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" name="favicon" id="favicon">
                          <label class="custom-file-label" for="favicon">{{($fetch) ? $fetch->favicon : 'Unggah Gambar'}}</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="title">Telepon</label>
                      <input type="text" name="phone" class="form-control" id="phone" value="{{(!empty($fetch))?$fetch->phone:' '}}">
                    </div>
                    <div class="form-group">
                      <label for="title">Fax</label>
                      <input type="text" name="fax" class="form-control" id="fax" value="{{(!empty($fetch))?$fetch->fax:' '}}">
                    </div>
                    <div class="form-group">
                      <label for="title">Email</label>
                      <input type="text" name="email" class="form-control" id="email" value="{{(!empty($fetch))?$fetch->email:' '}}">
                    </div>
                    <div class="form-group">
                      <label for="title">Motto / Tagline</label>
                      <input type="text" name="tagline" class="form-control" id="tagline" value="{{(!empty($fetch))?$fetch->tagline:' '}}">
                    </div>
                    <div class="form-group">
                      <label for="content">Deskripsi</label>
                      <textarea name="description" id="description" rows="5" class="form-control" required>{{(!empty($fetch))?$fetch->description:' '}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="content">Alamat</label>
                      <textarea name="address" id="address" rows="5" class="form-control" required>{{(!empty($fetch))?$fetch->address:' '}}</textarea>
                    </div>
                    <hr>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" id="submit" class="btn btn-success float-right"><i class="fas fa-save"></i>&nbsp;&nbsp;Simpan</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
</div>
@endsection

@section('top-resource')
<!-- summernote -->
<link rel="stylesheet" href="{{asset('backend/plugins/summernote/summernote-bs4.css')}}">
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection

@section('bottom-resource')
<!-- Summernote -->
<script src="{{asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote({
      height: 250
    });
  })
</script>
<!-- Select2 -->
<script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- jquery-validation -->
<script src="{{asset('backend/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('backend/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script type="text/javascript">
  $.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param * 1000000)
  }, 'File size must be less than {0} MB');

  $(document).ready(function () {
    $('#websiteForm').validate({
      rules: {
        name: {
          required: true,
        },
        phone: {
          required: true,
        },
        fax: {
          required: false,
        },
        email: {
          required: true,
        },
        tagline: {
          required: false,
        },
        favicon: {
          required: false,
          filesize : 1, // here we are working with MB
          extension: "ico|png|gif"
        },
        logo: {
          required: false,
          filesize : 1, // here we are working with MB
          extension: "jpg|jpeg|png|gif"
        },
        description: {
          required: true,
        },
        address: {
          required: true,
        },
      },
      messages: {
        name: {
          required: "&nbsp;"+"Kolom tidak boleh kosong, masukkan nama SKPD",
        },
        phone: {
          required: "&nbsp;"+"Kolom tidak boleh kosong, masukkan nomor telepon SKPD",
        },
        fax: {
          required: "&nbsp;"+"Kolom tidak boleh kosong, masukkan nomor fax SKPD",
        },
        email: {
          required: "&nbsp;"+"Kolom tidak boleh kosong, masukkan email SKPD",
        },
        tagline: {
          required: "&nbsp;"+"Kolom tidak boleh kosong, masukkan motto/tagline SKPD",
        },
        favicon: {
          required: "&nbsp;"+"Kolom tidak boleh kosong, masukkan icon untuk situs",
          filesize: "&nbsp;"+"File tidak boleh lebih dari 1 MB",
          extension: "&nbsp;"+"Format file tidak dikenali, pastikan format file *.ico|*.png|*.gif",
        },
        logo: {
          required: "&nbsp;"+"Kolom tidak boleh kosong, masukkan logo SKPD",
          filesize: "&nbsp;"+"File gambar tidak boleh lebih dari 1 MB",
          extension: "&nbsp;"+"Format gambar tidak dikenali, pastikan format gambar *.jpg|*.jpeg|*.png|*.gif",
        },
        description: {
          required: "&nbsp;"+"Kolom tidak boleh kosong, masukkan deskripsi SKPD",
        },
        address: {
          required: "&nbsp;"+"Kolom tidak boleh kosong, masukkan alamat SKPD",
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      },
      submitHandler: function (form) {
         $('#submit').attr('disabled','disabled');
         form.submit();
      }
    });
  });
</script>
<!-- Page script -->
<script>
    $(".custom-file-input").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
@endsection
