<div class="container">
  <form action="">
    <div class="row">
      <div class="col-10">
        <label for="fname">THÔNG TIN CÔNG VIỆC</label>
      </div>
      <div class="col-75">
        <label for="Vitri">Vị trí tuyển dụng:</label><br>
        <input type="text" id="Vitri" name="Vitri" placeholder="VD: Nhân viên kinh doanh, Trưởng Phòng Marketing..">
      </div>
    </div>

    <div class="row">
        <label for="Maso">Mã số:</label><br>
        <input type="text" id="Maso" name="Maso" placeholder="Nhập mã số tuyển dụng">
    </div>

    <div class="row">
        <label for="Soluong">Số lượng tuyển:</label><br>
        <input type="text" id="Soluong" name="Soluong" placeholder="Số lượng tuyển dụng">
    </div>
    
    <div class="row">
        <label for="Capbac">Cấp bậc:</label><br>
        <!-- <input type="text" id="Capbac" name="Capbac" placeholder="Mới tốt nghiệp / Thực tập sinh..."> -->
        <div class="custom-select" style="width:200px;">
            <select style="width:165px;">
                <option value="0"></option>
                <option value="1">Mới tốt nghiệp/Thực tập sinh</option>
                <option value="2">Nhân viên</option>
                <option value="3">Trưởng nhóm</option>
                <option value="4">Trưởng phòng</option>
                <option value="5">Phó giám đốc</option>
                <option value="6">Giám đốc</option>
                <option value="7">Khác</option>
            </select>
            </div>
    </div>

    <div class="row">
        <label for="LoaiCV">Loại hình công việc:</label><br>
        <!-- <input type="text" id="LoaiCV" name="LoaiCV" placeholder="Bán thời gian..."> -->
        <div class="custom-select" style="width:200px;">
            <select style="width:165px;">
                <option value="0"></option>
                <option value="1">Bán thời gian</option>
                <option value="2">Dài hạn</option>
                <option value="3">Hợp đồng</option>
                <option value="4">Không cố định</option>
                <option value="5">Tạm thời</option>
                <option value="6">Thực tập sinh</option>
            </select>
            </div>
    </div>

    <div class="row">
        <label for="Mucluong">Mức lương:</label><br>
        <!-- <input type="text" id="Mucluong" name="Mucluong" placeholder=""> -->
        <div class="custom-select" style="width:200px;">
            <select style="width:165px;">
                <option value="0"></option>
                <option value="1">1 - 3</option>
                <option value="2">3 - 5</option>
                <option value="3">5 - 7</option>
                <option value="4">7 - 10</option>
                <option value="5">10 - 12</option>
                <option value="6">12 - 15</option>
                <option value="7">15 - 20</option>
                <option value="8">20 trở lên</option>
            </select>
            </div>
    </div>

    <div class="row">
        <label for="Diadiem">Địa điểm làm việc:</label><br>
        <!-- <input type="text" id="Diadiem" name="Diadiem" placeholder="Hà Nộ/TP.Hồ Chí Minh..."> -->
        <div class="custom-select" style="width:200px;">
            <select style="width:165px;">
                <option value="0"></option>
                <option value="1">An Giang</option>
                <option value="2">Bà Rịa - Vũng Tàu</option>
                <option value="3">Bình Dương</option>
                <option value="4">Bến Tre</option>
                <option value="5">Cần Thơ</option>
                <option value="6">Cà Mau</option>
                <option value="7">Đồng Nai</option>
                <option value="8">Đồng Tháp</option>
                <option value="9">Gia Lai</option>
                <option value="10">Hải Phòng</option>
                <option value="11">Hồ Chí Minh</option>
                <option value="12">Hậu Giang</option>
                <option value="13">Khánh Hòa</option>
                <option value="14">Kiên Giang</option>
            </select>
            </div>
    </div>

    <div class="row">
        <label for="Nganh">Ngành nghề:</label><br>
        <!-- <input type="text" id="Nganh" name="Nganh" placeholder=""> -->
        <div class="custom-select" style="width:200px;">
            <select style="width:165px;">
                <option value="0"></option>
                <option value="1">Bán hàng</option>
                <option value="2">Báo chí/Biên tập viên</option>
                <option value="3">Bảo vệ/Vệ sĩ</option>
                <option value="4">Bất động sản</option>
                <option value="5">Biên dịch/Phiên dịch</option>
                <option value="6">Bưu chính viễn thông</option>
                <option value="7">Công nghệ thông tin</option>
                <option value="8">Dầu khí/Địa chất</option>
                <option value="9">Dệt may</option>
                <option value="10">Du lịch/Nhà hàng/Khách sạn</option>
                <option value="11">Dược/Hóa chất</option>
                <option value="12">Điện/Điện tử</option>
                <option value="13">Giáo dục/Đào tạo</option>
                <option value="14">Giao thông/Vận tải/Thủy lợi/Cầu đường</option>
                <option value="15">Giày da/Thuộc da</option>
                <option value="16">Hành chính/Trợ lý/Thư ký</option>
                <option value="17">Kho vận</option>
                <option value="18">Kiến trúc/Nội thất</option>
                <option value="19">Kinh doanh</option>
                <option value="20">Làm đẹp/Spa</option>
                <option value="21">Lao động phổ thông</option>
                <option value="22">Luật/Pháp lý</option>
                <option value="23">Môi trường/Xử lý chất thải</option>
                <option value="24">Mỹ Phẩm/Thời trang/Trang sức</option>
                <option value="25">Nhân sự</option>
                <option value="26">Ngành nghề khác</option>
                <option value="27">PG/PB/Lễ tân</option>
                <option value="28">Phát triển thị trường</option>
                <option value="29">Phục vụ/Tạp vụ</option>
                <option value="30">Quan hệ đối ngoại</option>
                <option value="31">Quản lý điều hành</option>
                <option value="32">Quảng cáo/Marketing/PR</option>
                <option value="33">Sản xuất/Vận hành sản xuất</option>
                <option value="34">Sinh viên/Mới tốt nghiệp/Thực tập</option>
                <option value="35">Tài chính/Kế toán/Kiểm toán</option>
                <option value="36">Tài xế/Giao nhận</option>
                <option value="37">Thiết kế/Mỹ thuật</option>
                <option value="38">Thời vụ/Bán thời gian</option>
                <option value="39">Thực phẩm/Dịch vụ ăn uống</option>
                <option value="40">Tư vấn/ Tư vấn bảo hiểm/Chăm sóc khách hàng</option>
                <option value="41">Xây dựng</option>
                <option value="42">Y tế</option>
            </select>
            </div>
    </div>

    <div class="row">
        <label for="Mota">Mô tả công việc:</label><br>
        <div class="sectionContent">
                    <textarea id="autoresizing" cols="75" rows="15" placeholder="Gợi ý:
                                                                            - Tìm khách hàng cho công ty, chăm sóc khách hàng cũ cho công ty.
                                                                            - Tìm kiếm khai thác khách hàng tiềm năng.
                                                                            - Đàm phán, thương lượng và chốt hợp đồng với khách hàng.
                                                                            - Liên hệ với khách hàng để đặt đơn hàng, giao hàng.
                                                                            - Theo dỗi tình hình thanh toán của khách hàng.
                                                                            - Chi tiết trao đổi tại buổi phỏng vấn."> </textarea> 
					 <script type="text/javascript"> 
						textarea = document.querySelector("#autoresizing"); 
						textarea.addEventListener('input', autoResize, false); 
						function autoResize() { 
							this.style.height = 'auto'; 
							this.style.height = this.scrollHeight + 'px'; 
						} 
					</script>
				</div>
    </div>

    <div class="row">
        <label for="Quyenloi">Quyền lợi được hưởng:</label><br>
        <div class="sectionContent">
                    <textarea id="autoresizing" cols="75" rows="15" placeholder="Gợi ý:
                                                                            - 7-10 triệu/tháng.
                                                                            - Làm việc từ thứ Hai đến thứ Bảy.
                                                                            - Làm việc trong môi trường trẻ, trung năng động, được đào tạo kỹ năng.
                                                                            - Tham gia du lịch, team building cùng công ty.
                                                                            - Được hưởng các chế độ theo quy định của luật lao động."> </textarea> 
					 <script type="text/javascript"> 
						textarea = document.querySelector("#autoresizing"); 
						textarea.addEventListener('input', autoResize, false); 
						function autoResize() { 
							this.style.height = 'auto'; 
							this.style.height = this.scrollHeight + 'px'; 
						} 
					</script>
				</div>
    </div>

     <!-- <hr  width="100%" align="center" /> -->
     <!-- <hr width="2" size="400" align="center"> -->
     
      <div class="col-25">
        <label for="fname"></label>
      </div>
  </form>
</div>

<div class="container">
  <form action="">
    <div class="row">
      <div class="col-10">
        <label for="fname">YÊU CẦU CÔNG VIỆC</label>
      </div>
      <div class="col-75">
        <label for="Kinhnghiem">Kinh nghiệm:</label><br>
        <!-- <input type="text" id="Kinhnghiem" name="Kinhnghiem" placeholder="Không yêu cầu kinh nghiệm"> -->
        <div class="custom-select" style="width:200px;" size="50">
            <select style="width:165px;">
                <option value="0">Không yêu cầu kinh nghiệm</option>
                <option value="1">1 năm</option>
                <option value="2">2 năm</option>
                <option value="3">3 năm</option>
                <option value="4">4 năm</option>
                <option value="5">5 năm trở lên</option>
            </select>
            </div>
      </div>
    </div>

    <div class="row">
        <label for="Bangcap">Bằng cấp:</label><br>
        <!-- <input type="text" id="Bangcap" name="Bangcap" placeholder="Lao động phổ thông"> -->
        <div class="custom-select" style="width:200px;" size="50">
            <select style="width:165px;">
                <option value="0">Lao động phổ thông</option>
                <option value="1">Trung học</option>
                <option value="2">Trung cấp</option>
                <option value="3">Cao đẳng</option>
                <option value="4">Kỹ sư</option>
                <option value="5">Cử nhân</option>
                <option value="6">Thạc sĩ</option>
                <option value="7">Tiến sĩ</option>
            </select>
            </div>
    </div>

    <div class="row">
        <label for="Gioitinh">Giới tính:</label><br>
        <!-- <input type="radio" id="Soluong" name="Soluong" placeholder="Số lượng tuyển dụng"> -->
        <input type="radio" id="Nam" name="gender" value="Nam">
        <label for="Nam">Nam</label><br>
        <input type="radio" id="Nu" name="gender" value="Nu">
        <label for="Nu">Nữ</label><br>
    </div>
    
    <div class="row" style="width:165px;">
        <!-- <div class="custom-select" style="width:200px;" size="50"> -->
        <label for="Hannop">Hạn nộp hồ sơ:</label><br>
        <input type="date" style="width:165px;" id="Hannop" name="Hannop" placeholder="Hạn nộp hồ sơ">
    </div>

    <div class="row">
        <label for="Yeucau">Yêu cầu công việc:</label><br>
        <div class="sectionContent">
                    <textarea id="autoresizing" cols="75" rows="15" placeholder="Gợi ý:
                                                                                - Có kinh nghiệm là lợi thế.
                                                                                - Nhanh nhẹn, trung thực, giao tiếp tốt.
                                                                                - Có tinh thần cầu tiến, chịu được áp lực và có trách nhiệm với công việc.
                                                                                - Độ tuổi từ 18 - 35.
                                                                                - Biết các kỹ năng cơ bản: Word, Excel...."> </textarea> 
					 <script type="text/javascript"> 
						textarea = document.querySelector("#autoresizing"); 
						textarea.addEventListener('input', autoResize, false); 
						function autoResize() { 
							this.style.height = 'auto'; 
							this.style.height = this.scrollHeight + 'px'; 
						} 
					</script>
				</div>
    </div>

    <div class="row">
        <label for="YeucauHS">Yêu cầu hồ sơ:</label><br>
        <div class="sectionContent">
                    <textarea id="autoresizing" cols="75" rows="15" placeholder="Gợi ý:
                                                                                - Đơn xin việc hoặc CV xin việc.
                                                                                - Sơ yếu lý lịch (có dán ảnh).
                                                                                - Hộ khẩu.
                                                                                - Chứng minh nhân dân.
                                                                                - Giấy khám sức khỏe.
                                                                                - Các bằng cấp liên quan.."> </textarea> 
					 <script type="text/javascript"> 
						textarea = document.querySelector("#autoresizing"); 
						textarea.addEventListener('input', autoResize, false); 
						function autoResize() { 
							this.style.height = 'auto'; 
							this.style.height = this.scrollHeight + 'px'; 
						} 
					</script>
				</div>
    </div>
     
      <div class="col-25">
        <label for="fname"></label>
      </div>
  </form>
</div>

<div class="container">
  <form action="">
    <div class="row">
      <div class="col-10">
        <label for="fname">THÔNG TIN LIÊN HỆ</label>
      </div>
      <div class="col-75">
        <label for="NguoiLH">Người liên hệ:</label><br>
        <input type="text" id="NguoiLH" name="NguoiLH">
      </div>
    </div>

    <div class="row">
        <label for="Email">Email liên hệ:</label><br>
        <input type="text" id="Email" name="Email">
    </div>
    
    <div class="row">
        <label for="SDT">Số điện thoại liên hệ:</label><br>
        <input type="text" id="SDT" name="SDT">
    </div>

      <div class="col-25">
        <label for="fname"></label>
      </div>
  </form>
</div>

<div class="buttons">
    <input type="submit" name="submit" value="Hủy Bỏ">
    <input type="submit" name="submit" value="Đăng Tuyển">
</div>