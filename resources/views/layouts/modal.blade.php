<div class="row">
    <div class="col-md-11 d-flex justify-content-center">
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
                        <section class="section min-vh-50 d-flex flex-column align-items-center justify-content-center">
                            <h6>Nội dung đang được xây dựng, quý khách vui lòng đóng cửa sổ hoặc quay trở lại trang chủ.</h6>
                            <a class="btn btn-success rounded-pill text-white" href="{{('/')}}">Trang chủ</a>
                            <img src="{{asset('assets/img/not-found.jpg')}}" width="30%" class="img-fluid" alt="Page Not Found">
                        </section>
                    </div>

                    <!-- M.footer -->
                    <div class="modal-footer">
                        <a href="https://ck.youcare.vn/user/register">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Đăng kí</button>
                        </a>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn__sign">
            <a href="https://ck.youcare.vn/user/register">
                <button type="button" class="btn__modal">
                    ĐĂNG KÝ
                </button>
            </a>
        </div>
    </div>

</div>

<script>
    $('.modal').appendTo("body").modal('show');
</script>