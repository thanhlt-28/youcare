<div class="row ">
    <div class="col-md-6">
        <button type="button" class="btn__modal" data-bs-toggle="modal" data-bs-target="#MM">
            HƯỚNG DẪN
        </button>
        <!--Modal -->
        <div class="modal" id="MM">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <!-- M.Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Hướng dẫn sử dụng</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- M.body -->
                    <div class="modal-body">
                        Vấn đề phải làm với việc định vị các thùng chứa cha. Bạn có thể dễ dàng "di chuyển" phương thức của mình ra khỏi các thùng chứa này trước khi hiển thị nó. Đây là cách thực hiện nếu bạn đang showsử dụng phương thức của mình bằng js:
                        <h4>Giáo viên</h4>
                        <p>Phát hiện sớm những học sinh có những vấn đề về sức khoẻ tinh thần để thông báo cho phụ huynh kịp thời.
                            Cho kết quả nhanh và chính xác</p>
                        <p>Dễ dàng theo dõi sự phát triển của trẻ em nhằm phát hiện sớm những vấn đề giúp cho học sinh được hỗ trợ kịp thời.</p>
                        <p>Không cần phải đi tập huấn, đào tạo về sử dụng công cụ đánh giá. Đơn giản chỉ bằng click chuột.</p>
                        <p>Các bộ công cụ đã được sử dụng nhiều nước trên thế giới và được chuẩn hóa phù hợp với người Việt Nam.</p>
                        <p>Dễ dàng quản lý tình trạng sức khoẻ tâm thần của học sinh trong lớp mà không cần kiến thức chuyên môn.</p>
                        <p>Được hỗ trợ của các chuyên gia đầu ngành về sức khỏe tinh thần khi học sinh gặp phải vấn đề.</p>
                    </div>

                    <!-- M.footer -->
                    <div class="modal-footer">
                        <a target="_blank" href="https://ck.youcare.vn/user/login"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Đăng kí</button></a>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <a target="_blank" href="https://ck.youcare.vn/user/login" class="btn__sign"><button type="button" class="btn__modal">
                ĐĂNG KÝ
            </button></a>
    </div>
</div>

<script>
    $('.modal').appendTo("body").modal('show');
</script>