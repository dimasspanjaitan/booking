@extends('admin.layouts.main')

@section('content')
		<!-- start: TITLE -->
		<section id="page-title" class="padding-top-5 padding-bottom-5">
			<div class="row">
				<div class="col-sm-12">
					<span class="mainDescription pull-left">INPUT DATA RENUNGAN</span>
				</div>
			</div>
		</section>
		<!-- end: TITLE -->
		<div class="container-fluid container-fullw bg-white">
			<div class="row">
				<label class="container-fluid" style="color: red"> * wajib diisi </label>
				<form action="{{ route('admin.upload') }}" method="post">
				@csrf

					<div class="col-md-12">
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="panel panel-white">
									<div class="panel-body">
										<div class="form-group">
											<label for="thema"> Tema Renungan <label style="color: red"> * </label></label>
											<input name="thema" type="text" class="form-control underline" id="thema" placeholder="Isi Tema Renungan" autocomplete="off">
											@error('thema')
												<div class="form-group has-warning">
													{{ $errors->first('thema') }} <label class="symbol required"></label>
												</div>
											@enderror
										</div>
										<div class="form-group">
											<label for="nats"> Ayat Alkitab <label style="color: red"> * </label></label>
											<input name="nats" type="text" class="form-control underline" id="nats" placeholder="Isi Ayat Alkitab sebagai Bahan Renungan" autocomplete="off">
											@error('nats')
												<div class="form-group has-warning">
													{{ $errors->first('nats') }} <label class="symbol required"></label>
												</div>
											@enderror
										</div>
										<div class="form-group">
											<label for="nats_content"> Isi Ayat Alkitab <label style="color: red"> * </label></label>
											<textarea name="nats_content" id="nats_content" class="form-control autosize area-animated" placeholder="Isi Nats Alkitab berdasarkan Ayat Alkitab di Atas" {{ old('nats_content') }}></textarea>
											@error('nats_content')
												<div class="form-group has-warning">
													{{ $errors->first('nats_content') }} <label class="symbol required"></label>
												</div>
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="panel panel-white">
									<div class="panel-body">
										<div class="form-group">
											<label for="link"> Link </label>
											<input name="link" id="link" type="text" class="form-control underline" placeholder="Isi jika Deperlukan" autocomplete="off">
										</div>
										<div class="form-group">
											<label for="slug"> Slug <label style="color: red"> * </label></label>
											<input name="slug" id="slug" type="text" class="form-control underline" placeholder="Isi sesuai Tema Renungan! Contoh format : tema-renungan-hari-ini" autocomplete="off">
											@error('slug')
												<div class="form-group has-warning">
													{{ $errors->first('slug') }} <label class="symbol required"></label>
												</div>
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="panel panel-white">
									<div class="panel-body">
										<!-- start: TEXT EDITOR -->
										<div class="form-group">
											<label for="content"> Konten Renungan <label style="color: red"> * </label></label>
											<textarea name="content" id="content" class="ckeditor form-control" cols="10" rows="10" placeholder="Isi Konten Renungan di sini!"></textarea>
											@error('content')
												<div class="form-group has-warning">
													{{ $errors->first('content') }} <label class="symbol required"></label>
												</div>
											@enderror
										</div>
										<!-- end: TEXT EDITOR -->
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="panel">
									<div class="panel-body">
										<button type="submit" class="btn btn-o btn-lg btn-primary pull-right"> Upload </button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
@endsection

@push('script')
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('vendor/ckeditor/adapters/jquery.js') }}"></script>
	<script src="{{ asset('admin-assets/js/form-text-editor.js') }}"></script>
	<script>
		jQuery(document).ready(function() {
			Main.init();
			TextEditor.init();
		});
	</script>
@endpush	 