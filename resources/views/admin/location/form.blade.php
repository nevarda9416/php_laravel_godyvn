@extends('layouts.default')
@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3><a href="{{ url('/locations') }}" title="Quay về danh sách điểm đến">&larr; Quay về danh sách điểm đến</a></h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        @include('components.alert')
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Thêm mới điểm đến</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form class="form-horizontal form-label-left input_mask" action="{{ url('/locations/update/'. $location->id) }}" method="post" id="postForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tên điểm đến <span
                                    class="required">*</span></label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" class="form-control" name="name" required="required" value="{{ $location->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tên châu lục <span
                                    class="required">*</span></label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" class="form-control" name="continent" required="required" value="{{ $location->continent }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tên đất nước <span
                                    class="required">*</span></label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" class="form-control" name="country" required="required" value="{{ $location->country }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tên thành phố <span
                                    class="required">*</span></label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" class="form-control" name="city" required="required" value="{{ $location->city }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Nội dung <span
                                    class="required">*</span></label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea id="content" class="editor form-control" name="content">{{ $location->content }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề (SEO) <span
                                    class="required">*</span></label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" class="form-control" name="meta_title" required="required" value="{{ $location->meta_title }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Từ khóa (SEO) <span
                                    class="required">*</span></label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea class="form-control" name="meta_keyword" rows="3" required="required">{{ $location->meta_keyword }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả (SEO) <span
                                    class="required">*</span></label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea class="form-control" name="meta_description" rows="3" required="required">{{ $location->meta_description }}</textarea>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="submit">Lưu bài</button>
                                <button class="btn btn-light" type="reset">Nhập lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('components.thumbnail_preview')
    @include('components.save_posts')
    @include('components.tags')
@endsection