<div class="accordion w-100" id="basicAccordion">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#basicAccordionCollapseOne" aria-expanded="false" aria-controls="collapseOne">
                Question #1
            </button>
        </h2>
        <div id="basicAccordionCollapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-mdb-parent="#basicAccordion" style="">
            <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default,
                until the collapse plugin adds the appropriate classes that we use to style each
                element. These classes control the overall appearance, as well as the showing and
                hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                our default variables. It's also worth noting that just about any HTML can go within
                the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#basicAccordionCollapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Question #2
            </button>
        </h2>
        <div id="basicAccordionCollapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-mdb-parent="#basicAccordion" style="">
            <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default,
                until the collapse plugin adds the appropriate classes that we use to style each
                element. These classes control the overall appearance, as well as the showing and
                hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                our default variables. It's also worth noting that just about any HTML can go within
                the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#basicAccordionCollapseThree" aria-expanded="false" aria-controls="collapseThree">
                Question #3
            </button>
        </h2>
        <div id="basicAccordionCollapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-mdb-parent="#basicAccordion" style="">
            <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default,
                until the collapse plugin adds the appropriate classes that we use to style each
                element. These classes control the overall appearance, as well as the showing and
                hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                our default variables. It's also worth noting that just about any HTML can go within
                the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
</div>

<!-- FAQs Start -->
<div class="faqs mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-header left">
                    <h2>Câu hỏi thường gặp</h2>
                </div>
                <img src="{{asset('assets/img/footer-bg.png')}}" alt="Image">
            </div>
            <div class="col-md-7">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" href="#" aria-expanded="true">
                                <span>1</span> ASQ-3 có thể được dùng để sàng lọc tự kỷ?
                            </a>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" href="#">
                                <span>2</span> Nếu kết quả M - CHAT của con tôi là “nguy cơ tự kỷ trung bình” hoặc “nguy cơ tự kỷ cao” tôi có thể tìm đến đâu?
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" href="#">
                                <span>3</span> Sử dụng công cụ CBCL để đánh giá cho đối tượng nào?

                            </a>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" href="#">
                                <span>4</span> Thang CBCL đánh giá các hội chứng, lĩnh vực nào?
                            </a>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" href="#">
                                <span>5</span> Mất bao lâu để hoàn thành?
                            </a>
                        </div>

                    </div>
                </div>
                <a class="btn" href="{{route('clients.contact')}}">Bạn có thể hỏi</a>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->