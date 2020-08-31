<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Hồ sơ</title>

    <!-- Fontfaces CSS-->
    <link href="bangtin/css/font-face.css" rel="stylesheet" media="all">
    <link href="bangtin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="bangtin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="bangtin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="bangtin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Ven CSS-->
    <link href="bangtin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="bangtin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="bangtin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="bangtin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="bangtin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="bangtin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="bangtin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="bangtin/css/theme.css" rel="stylesheet" media="all">

    </style>
</head>
@extends('layout')

@section('title','Quản lý học sinh')

@section('content')

<body>
    <div class="brand-area" style="padding-top:90px;">
        <div class="container">
            <center>
                <div class="col-lg-20">
                    <div class="card">
                        <div class="card-header"><strong>Bảng đăng tin tuyển dụng</strong></div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group" style="text-align:left">
                                    <div class="col col-md-5" color="blue">
                                        <label class=" form-control-label">THÔNG TIN CÔNG VIỆC</label>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="namkn" class=" form-control-label">Vị trí tuyển dụng:</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="text" id="namkn" name="namkn"
                                            placeholder="Ví dụ: nhân viên bán hàng..." class="form-control">
                                    </div>

                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="namkn" class=" form-control-label">Số lượng:</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="text" id="namkn" name="namkn" placeholder="Số lượng tuyển dụng"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="select" class="form-control-label">Mức lương</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <select name="select" id="select" class="form-control">
                                            <option value="0">Vui lòng chọn mức lương</option>
                                            <option value="1">3 triệu-4 triệu</option>
                                            <option value="2">4 triệu-5 triệu</option>
                                            <option value="3">5 triệu- 6triệu</option>
                                            <option value="3">trên 7 triệu</option>
                                            <option value="3">Thương lượng</option>
                                        </select>
                                    </div>

                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="select" class="form-control-label">Hình thức làm việc</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <select name="select" id="select" class="form-control">
                                            <option value="0">Vui lòng chọn hình thức</option>
                                            <option value="1">Bán thời gian</option>
                                            <option value="2">Toàn thời gian</option>
                                            <option value="3">Làm theo giờ</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="select" class="form-control-label">Ngành nghề</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <select name="select" id="select" class="form-control">
                                            <option value="0">Vui lòng chọn ngành nghề</option>
                                            <option value="1">Nhân viên bán hàng</option>
                                            <option value="2">Nhân viên IT</option>
                                            <option value="3">Nhân viên kinh doanh</option>
                                        </select>
                                    </div>

                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="select" class="form-control-label">Nơi làm việc</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <select name="select" id="select" class="form-control">
                                            <option value="0">Vui lòng chọn nơi làm việc</option>
                                            <option value="1">Đồng Tháp</option>
                                            <option value="2">Cần Thơ</option>
                                            <option value="3">Vĩnh Long</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="textarea-input" class=" form-control-label">Mô tả công việc:</label>
                                    </div>
                                    <div class="col col-md-3">
                                        <textarea name="textarea-input" id="textarea-input" rows="5"
                                            placeholder="Vui lòng ghi yêu cầu công việc vào đây..."
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="textarea-input" class=" form-control-label">Quyền lợi được
                                            hưởng:</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <textarea name="textarea-input" id="textarea-input" rows="5"
                                            placeholder="Vui lòng ghi yêu cầu hồ sơ vào đây..."
                                            class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group" style="text-align:left">
                                    <div class="col col-md-5">
                                        <label class=" form-control-label">YÊU CẦU CÔNG VIỆC</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="namkn" class=" form-control-label">Kinh nghiệm:</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="text" id="namkn" name="namkn" placeholder="Số năm làm việc"
                                            class="form-control">
                                        <small class="form-text text-muted">Ví dụ: 2 năm</small>
                                    </div>

                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="select" class=" form-control-label">Bằng Cấp</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <select name="select" id="select" class="form-control">
                                            <option value="0">Vui lòng chọn bằng cấp</option>
                                            <option value="1">Cao Đẳng</option>
                                            <option value="2">Đại Học</option>
                                            <option value="3">Cao Học</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="hannop" class=" form-control-label">Hạn nộp hồ sơ:</label>
                                    </div>
                                    <div class="col-12 col-md-3"><input type="date" id="" name="hannop"
                                            class="form-control">
                                    </div>

                                    <div class="col col-md-3" style="text-align: left;">
                                        <label class=" form-control-label">Giới Tính</label>
                                    </div>
                                    <div class="col col-md-1">
                                        <div class="form-check">
                                            <div class="radio">
                                                <label for="radio1" class="form-check-label ">
                                                    <input type="radio" id="radio1" name="radios" value="option1"
                                                        class="form-check-input">Nam
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio2" class="form-check-label ">
                                                    <input type="radio" id="radio2" name="radios" value="option2"
                                                        class="form-check-input">Nữ
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="textarea-input" class=" form-control-label">Yêu cầu công
                                            việc:</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <textarea name="textarea-input" id="textarea-input" rows="5"
                                            placeholder="Vui lòng ghi yêu cầu công việc vào đây..."
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="textarea-input" class=" form-control-label">Yêu cầu hồ sơ:</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <textarea name="textarea-input" id="textarea-input" rows="5"
                                            placeholder="Vui lòng ghi yêu cầu hồ sơ vào đây..."
                                            class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group" style="text-align:left">
                                    <div class="col col-md-5">
                                        <label class=" form-control-label">THÔNG TIN LIÊN HỆ</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="namkn" class=" form-control-label">Người liên hệ:</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="text" id="namkn" name="namkn"
                                            placeholder="Vui lòng nhập tên công ty" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="namkn" class=" form-control-label">Email liên hệ:</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="text" id="namkn" name="namkn" placeholder="abc@gmail.com"
                                            class="form-control">
                                    </div>

                                    <div class="col col-md-3" style="text-align: left;">
                                        <label for="namkn" class=" form-control-label">Số điện thoại liên hệ:</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="text" id="namkn" name="namkn"
                                            placeholder="Nhập đầy đủ số điện thoại" class="form-control">
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="card-footer" style="text-align: right;">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i>Đăng
                                tin</button>
                            <button type="reset" class="btn btn-secondary btn-sm"><i class="fa fa-ban"></i>Hủy
                                bỏ</button>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
    @endsection
    <script src="bangtin/vendor/jquery-3.2.1.min.js"></script>

    <script src="bangtin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="bangtin/vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <script src="bangtin/vendor/slick/slick.min.js"></script>
    <script src="bangtin/vendor/wow/wow.min.js"></script>
    <script src="bangtin/vendor/animsition/animsition.min.js"></script>
    <script src="bangtin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="bangtin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="bangtin/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="bangtin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="bangtin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="bangtin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="bangtin/vendor/select2/select2.min.js"></script>

    <script src="js/main.js"></script>

</body>

</html>