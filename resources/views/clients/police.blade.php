@extends('layouts.main')
@section('title', 'Điều khoản sử dụng YouCare')
@section('content')

<!-- ======= Services Section ======= -->
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <!-- <div class="breadcrumb-police"> -->
        <!-- <div class="container">
            <div class="header-hero">
                <div class="header-hero__slogan">
                    <div class="header-police">
                        <h2>THỎA THUẬN SỬ DỤNG DỊCH VỤ</h2>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- </div> -->

        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Điều khoản sử dụng YouCare</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="container">
        <div class="section-title">
            <h3 class="ck_header">THỎA THUẬN SỬ DỤNG DỊCH VỤ</h3>
            <em style="font-size: 18px;">(Theo dõi đánh giá sàng lọc cho trẻ - CKCARE)</em>
            <p>
                <em style="color: #67ac2f; font-size: 20px; font-weight: 500;">Thứ tư, 01/11/2022</em>
            </p>

        </div>

        <div class="policy__container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="police__tab">
                        <!-- Name tabs -->
                        <div class="tab">
                            <button class="tablinks" onclick="openPolicy(event, 'Dieu1')">Điều 1: Giải thích từ
                                ngữ</button>
                            <button class="tablinks" onclick="openPolicy(event, 'Dieu2')">Điều 2: Đăng ký và sử dụng
                                dịch vụ</button>
                            <button class="tablinks" onclick="openPolicy(event, 'Dieu3')">Điều 3: Thay đổi nội dung các
                                điều kiện và điều khoản</button>
                            <button class="tablinks" onclick="openPolicy(event, 'Dieu4')">Điều 4: Mua dịch vụ</button>
                            <button class="tablinks" onclick="openPolicy(event, 'Dieu5')">Điều 5: Sử dụng dịch vụ và Phí
                                dịch vụ</button>
                            <button class="tablinks" onclick="openPolicy(event, 'Dieu6')">Điều 6: Quyền và trách nhiệm
                                của Khách hàng</button>
                            <button class="tablinks" onclick="openPolicy(event, 'Dieu7')" id="defaultOpen">Điều 7: Quyền
                                và trách nhiệm của YouCare</button>
                            <button class="tablinks" onclick="openPolicy(event, 'Dieu8')">Điều 8: Các hành vi
                                cấm</button>
                            <button class="tablinks" onclick="openPolicy(event, 'Dieu9')">Điều 9: Bản quyền</button>
                            <button class="tablinks" onclick="openPolicy(event, 'Dieu10')">Điều 10: Các quy định
                                khác</button>
                        </div>


                        <div class="policy__contents">
                            <div id="Dieu1" class="tabcontent">
                                <div class="policy__contents__item">

                                    <h5>Điều 1: Giải thích từ ngữ</h5>
                                    <p>1.1. Thỏa thuận sử dụng dịch vụ CKCare (gọi tắt là "Bản thỏa thuận"): là Bản Hợp
                                        đồng giữa Bạn/Người sử dụng dịch vụ CKCare (sau đây gọi là "Khách hàng) và Công
                                        ty Cổ phần YouCare (sau đây gọi tắt là "YouCare"), áp dụng khi Khách hàng sử
                                        dụng dịch vụ CKCare của YouCare.</p>
                                    <p>1.2. Tài khoản CKCare: là tài khoản định danh khách hàng đăng kí sử dụng dịch vụ
                                        trên website.</p>
                                    <p>1.3. Đơn vị thu hộ: là các cá nhân, tổ chức đồng ý với Thoả thuận sử dụng dịch vụ
                                        này và được YouCare ủy quyền để thực hiện các dịch vụ nhờ thu và thanh toán các
                                        khoản tiền mua sử dụng sản phẩm từ tài khoản CKCare.</p>
                                    <p>1.4. Dịch vụ CKCare (gọi tắt là "Dịch vụ"): là các dịch vụ theo dõi đánh giá sàng
                                        lọc cho trẻ được YouCare cung cấp trên ứng dụng CKCare.</p>
                                    <p>1.5. Giao dịch CKCare (gọi tắt là “Giao dịch”): là các giao dịch có thể được thực
                                        hiện thông qua tài khoản CKCare vào từng thời điểm để có thể xem các video giải
                                        thích, hướng dẫn chi tiết các kết quả đánh giá sàng lọc cho trẻ.</p>
                                    <p>1.6. Giấy tờ tùy thân hợp lệ: là (a) Chứng minh nhân dân (CMND) do Chính phủ Việt
                                        Nam cấp còn hiệu lực, (b) Hộ chiếu hợp lệ.</p>
                                    <p>1.7. Ngày làm việc: Là các ngày từ thứ hai đến thứ sáu mà YouCare làm việc bình
                                        thường; trừ các ngày nghỉ, lễ, tết theo quy định pháp luật.
                                    </p>
                                </div>
                            </div>
                            <div id="Dieu2" class="tabcontent">
                                <div class="policy__contents__item">
                                    <h5>Điều 2: Đăng ký và sử dụng dịch vụ</h5>
                                    <p>2.1. Trước khi đăng ký sử dụng Dịch vụ, Khách hàng cần đọc, đồng ý và chấp nhận
                                        tất cả các quy định trong Bản thỏa thuận này và/hoặc các quy định, chính sách,
                                        và các điều khoản liên quan khác trong quá trình sử dụng Dịch vụ.</p>
                                    <p>2.2. Khi đã sử dụng Dịch vụ thì có nghĩa là Khách hàng đã hoàn toàn tự nguyện
                                        đồng ý, chấp nhận cũng như tuân thủ tất cả các quy định trong Bản thỏa thuận này
                                        và/hoặc các quy định, chính sách, và các điều khoản liên quan khác trong quá
                                        trình sử dụng Dịch vụ.</p>
                                    <p>2.3. Trong quá trình sử dụng Dịch vụ, Khách hàng đồng ý cung cấp đầy đủ, chính
                                        xác thông tin về họ tên, địa chỉ liên lạc, giấy tờ tùy thân hợp lệ, email… và
                                        chịu trách nhiệm về các thông tin mà Khách hàng cung cấp.</p>
                                    <p>2.4. Nếu phát sinh rủi ro trong quá trình sử dụng Dịch vụ, YouCare căn cứ vào
                                        những thông tin mà Khách hàng đã cung cấp để tiếp nhận và giải quyết. YouCare
                                        chỉ tiếp nhận và giải quyết những trường hợp khai báo đúng, chính xác và đầy đủ
                                        những thông tin quy định tại Khoản </p>
                                    <p>2.3. Những trường hợp khai báo không đầy đủ và chính xác, Khách hàng sẽ không
                                        nhận được bất kỳ sự hỗ trợ nào từ YouCare, và YouCare sẽ không chịu trách nhiệm
                                        giải quyết những tranh chấp, rủi ro phát sinh đối với việc sử dụng Dịch vụ của
                                        Khách hàng.
                                    </p>
                                </div>
                            </div>
                            <div id="Dieu3" class="tabcontent">
                                <div class="policy__contents__item">
                                    <h5>Điều 3: Thay đổi nội dung các điều kiện và điều khoản</h5>
                                    <p>3.1. YouCare có thể sửa đổi, bổ sung nội dung Bản thỏa thuận này vào bất cứ thời
                                        gian nào bằng cách gửi thông báo thay đổi cho Khách hàng.</p>
                                    <p>3.2. Khách hàng được xem là đã nhận thông báo nếu:</p>
                                    <p style="margin-left: 30px"> 3.2.1. Các thông báo này đã được đưa lên trang website
                                        của Dịch vụ tại địa chỉ:
                                        <a href="https://youcare.vn/">https://youcare.vn/</a>; hoặc <a
                                            href="https://ck.youcare.vn" target="_blank">https://ck.youcare.vn</a>
                                    </p>
                                    <p style="margin-left: 30px"> 3.2.2. Các thông báo này đã được gửi tới địa chỉ thư
                                        điện tử (email) mà Khách hàng đăng ký trong quá trình sử dụng Dịch vụ; hoặc</p>
                                    <p style="margin-left: 30px"> 3.2.3. Được gửi tới số điện thoại Khách hàng đăng ký
                                        sử dụng Dịch vụ; hoặc</p>
                                    <p>3.3. Trường hợp đối với những thay đổi như:</p>
                                    <p style="margin-left: 30px">
                                        (a) tăng trách nhiệm và nghĩa vụ của Khách hàng, <br />
                                        (b) hạn chế bớt các dịch vụ đang cung cấp trên tài khoản CKCare, hoặc <br />
                                        (c) giảm hạn mức giao dịch, trừ khi những thay đổi này phải thực hiện ngay vì
                                        yêu cầu an ninh hoặc theo quy định của pháp luật, YouCare sẽ thông báo cho Khách
                                        hàng ít nhất 05 (năm) ngày làm việc kể từ ngày có hiệu lực của những thay đổi
                                        này.<br /></p>
                                    <p>3.4. Nếu Khách hàng không đồng ý với nội dung thay đổi thì có thể chấm dứt việc
                                        tiếp tục sử dụng Dịch vụ. Trường hợp Khách hàng tiếp tục sử dụng Dịch vụ thì có
                                        nghĩa là Khách hàng đã hoàn toàn tự nguyện đồng ý, chấp nhận cũng như tuân thủ
                                        các nội dung thay đổi đó.
                                    </p>
                                </div>
                            </div>
                            <div id="Dieu4" class="tabcontent">
                                <div class="policy__contents__item">
                                    <h5>Điều 4: Mua dịch vụ</h5>
                                    <p> 4.1. Phương thức thực hiện</p>
                                    <p> 4.2. Khách hàng có quyền thực hiện việc thanh toán phí dịch vụ để có quyền truy
                                        cập xem các video hướng dẫn của CKCare theo các bước hướng dẫn thanh toán của
                                        YouCare.</p>
                                    <p> 4.3. Vào thời điểm YouCare đã nhận được tiền, YouCare sẽ cung cấp quyền truy cập
                                        các video của CKCare cho tài khoản của khách hàng đã thực hiện yêu cầu mua.</p>
                                    <p> 4.4. Tùy thuộc vào phương thức mà Khách hàng lựa chọn để thanh toán, thời gian
                                        YouCare xử lý để cấp quyền truy cập vào các video hướng dẫn cho tài khoản CKCare
                                        của Khách hàng sẽ khác nhau.
                                    </p>
                                </div>
                            </div>
                            <div id="Dieu5" class="tabcontent">
                                <div class="policy__contents__item">
                                    <h5>Điều 5: Sử dụng dịch vụ và Phí dịch vụ</h5>
                                    <p>5.1. Khi Khách hàng chủ động thực hiện Giao dịch thông qua CKCare thì các hàng
                                        hoá, dịch vụ của Khách hàng được xác định là bàn giao ngay khi Giao dịch được
                                        thực hiện thành công. Chúng tôi sẽ không hoàn trả và/hoặc đổi lại các hàng hoá,
                                        dịch vụ này trừ trường hợp phát sinh lỗi kỹ thuật từ phía CKCare dẫn đến việc
                                        hàng hoá, dịch vụ này là không sử dụng được. Nhân viên CKCare sẽ tiếp nhận, xác
                                        minh và thông tin đến Khách hàng theo từng trường hợp cụ thể.</p>
                                    <p>5.2. Phí sử dụng dịch vụ được YouCare công bố cho từng thời kỳ, tùy theo đặc điểm
                                        của từng loại dịch vụ.</p>
                                    <p>5.3. Khách hàng ủy quyền cho YouCare được quyền tự động trích nợ phí sử dụng dịch
                                        vụ trên tài khoản CKCare và/hoặc trong các phương tiện thanh toán khác có kết
                                        nối với tài khoản CKCare mà Khách hàng lựa chọn (như thẻ tín dụng, tài khoản
                                        ngân hàng) để thanh toán tiền phí sử dụng dịch vụ này.</p>
                                    <p>5.4. Phí dịch vụ có thể được thu trước, sau hay ngay khi phát sinh giao dịch tùy
                                        vào từng loại hình dịch vụ mà YouCare cung cấp.
                                    </p>
                                </div>
                            </div>
                            <div id="Dieu6" class="tabcontent">
                                <div class="policy__contents__item">
                                    <h5>Điều 6: Quyền và trách nhiệm của Khách hàng</h5>
                                    <p>6.1. Quyền của Khách hàng</p>
                                    <p style="margin-left: 30px">6.1.1. Khách hàng được quyền thay đổi, bổ sung thông
                                        tin tài khoản, mật khẩu đặt lệnh, giấy tờ tùy thân, email đã đăng ký, số điện
                                        thoại gắn với tài khoản.</p>
                                    <p style="margin-left: 30px">6.1.2. Khách hàng có thể chấm dứt sử dụng Dịch vụ vào
                                        bất kỳ lúc nào sau khi đã gửi cho YouCare văn bản yêu cầu ngừng sử dụng dịch vụ
                                        theo mẫu mà YouCare cung cấp. Sau khi chấm dứt sử dụng Dịch vụ, Khách hàng không
                                        được tiếp tục sử dụng Dịch vụ nữa.</p>
                                    <p>6.2. Trách nhiệm của Khách hàng.</p>
                                    <p style="margin-left: 30px">6.2.1. Cung cấp thông tin đúng và đầy đủ, tuân thủ các
                                        thủ tục đăng ký, trình tự giao dịch và các hướng dẫn khác của YouCare, sử dụng
                                        đúng mục đích những thông tin mà Dịch vụ cung cấp.</p>
                                    <p style="margin-left: 30px">6.2.2. Khi việc thực hiện giao dịch thông qua một đơn
                                        vị trung gian (cụ thể ở đây là ngân hàng, tổ chức tín dụng, đơn vị phát hành
                                        thẻ), Khách hàng có trách nhiệm tuân thủ các quy định của đơn vị trung gian này.
                                        Mọi vấn đề phát sinh về nghĩa vụ và quyền lợi của Khách hàng và Đơn vị trung
                                        gian này nằm ngoài sự kiểm soát và trách nhiệm của YouCare nên chúng tôi có khả
                                        năng từ chối nếu như hai Bên có mâu thuẫn xảy ra.</p>
                                    <p style="margin-left: 30px">6.2.3. Nếu Khách hàng cho rằng có một sự nhầm lẫn, lỗi
                                        hoặc sai sót trong việc sử dụng Dịch vụ và/hoặc xử lý chỉ dẫn thanh toán của
                                        YouCare, Khách hàng có thể liên lạc trực tiếp với bộ phận hỗ trợ dịch vụ để được
                                        giải quyết. Những vấn đề có thể phát sinh là:</p>
                                    <p style="margin-left: 30px">
                                        a) Bất kỳ sự chậm chễ hoặc sai sót nào trong việc xử lý chỉ dẫn thanh toán của
                                        Khách hàng; hoặc<br />
                                        b) Nếu phát hiện tài khoản của Khách hàng có phát sinh giao dịch mà không do
                                        Khách hàng thực hiện; hoặc<br />
                                        c) Mật khẩu đặt lệnh và/hoặc thông tin của Khách hàng đã đăng ký trên hệ thống
                                        YouCare bị tiết lộ cho Bên thứ ba; hoặc<br />
                                        d) Có sự truy cập không hợp lệ vào tài khoản của Khách hàng; hoặc<br />
                                        e) Các lỗi khác mà Khách hàng phát hiện được xuất phát từ hệ thống của
                                        YouCare.<br />
                                    </p>
                                    <p style="margin-left: 30px">6.2.4. Khách hàng chịu trách nhiệm áp dụng mọi biện
                                        pháp hợp lý nhằm đảm bảo an toàn, đảm bảo tính tương thích cho các loại máy móc,
                                        thiết bị kết nối, phần mềm hệ thống, phần mềm ứng dụng… do Khách hàng sử dụng
                                        khi kết nối, truy cập vào dịch vụ nhằm kiểm soát, phòng ngừa và ngăn chặn việc
                                        sử dụng hoặc truy cập trái phép Dịch vụ.</p>
                                    <p style="margin-left: 30px">6.2.5. Khách hàng phải đảm bảo an toàn và bí mật đối
                                        với bất kỳ thông tin cá nhân, mật khẩu truy cập, mật khẩu đặt lệnh và các yếu tố
                                        định danh khác mà YouCare cung cấp. Khách hàng hoàn toàn chịu trách nhiệm trong
                                        trường hợp các thông tin này bị mất, lợi dụng, tiết lộ cho một người thứ ba và
                                        sẽ chịu mọi rủi ro, thiệt hại gây ra do việc sử dụng trái phép của người thứ ba
                                        đó.
                                    </p>
                                </div>
                            </div>
                            <div id="Dieu7" class="tabcontent ">
                                <div class="policy__contents__item">
                                    <h5>Điều 7: Quyền và trách nhiệm của YouCare</h5>
                                    <p>7.1. Quyền của YouCare</p>
                                    <p style="margin-left: 30px">7.1.1. Nếu YouCare có lý do cho rằng Khách hàng vi phạm
                                        các hành vi cấm quy định tại Điều 9, YouCare sẽ có những biện pháp để bảo vệ
                                        YouCare và/hoặc Khách hàng khác hoặc Bên thứ ba có liên quan. Những hàng động
                                        YouCare có thể thực hiện được bao gồm nhưng không giới hạn ở những hàng động
                                        này:</p>

                                    <p style="margin-left: 30px">
                                        a) YouCare có thể đóng, tạm ngừng hoặc giới hạn truy nhập của Khách hàng vào tài
                                        khoản và dịch vụ mà YouCare cung cấp;<br />
                                        b) YouCare có thể liên hệ với người Bán/người Mua mà Khách hàng giao dịch, liên
                                        hệ với ngân hàng của Khách hàng, với Khách hàng khác hoặc liên hệ tới Bên thứ ba
                                        để cảnh báo hoặc lưu ý tới hành động của Khách hàng;<br />
                                    </p>
                                    <p style="margin-left: 30px">7.1.2. YouCare không chịu trách nhiệm đối với những
                                        thiệt hại, tổn thất của Khách hàng phát sinh trong quá trình sử dụng Dịch vụ,
                                        trừ phi những thiệt hại, tổn thất này là do lỗi cố ý của YouCare.</p>
                                    <p style="margin-left: 30px">7.1.3. YouCare không chịu trách nhiệm đối với những
                                        thiệt hại trực tiếp hoặc gián tiếp mà khách hàng phải chịu phát sinh từ hoặc do:
                                    </p>
                                    <p style="margin-left: 30px">
                                        a) Việc sử dụng dịch vụ hoặc tiếp cận các thông tin mà dịch vụ cung ứng của
                                        những người được Khách hàng ủy quyền; hoặc<br />
                                        b) Việc Khách hàng để mất, mất cắp thiết bị di động dùng để đăng nhập dịch vụ,
                                        lộ mật khẩu đặt lệnh và/hoặc các yếu tố định danh khác mà YouCare cung cấp dẫn
                                        đến người khác dùng những thông tin này để sử dụng dịch vụ hoặc tiếp cận những
                                        thông tin mà Dịch vụ cung ứng; hoặc<br />
                                        c) Sự ngắt quãng, trì hoãn, chậm chễ, tình trạng không sẵn sàng sử dụng hoặc bất
                                        kỳ sự cố nào xảy ra trong quá trình cung cấp Dịch vụ do các nguyên nhân ngoài
                                        khả năng kiểm soát hợp lý của YouCare, bao gồm nhưng không giới hạn ở tình trạng
                                        gián đoạn do dịch vụ cần được nâng cấp, sửa chữa, lỗi đường truyền của nhà cung
                                        cấp dịch vụ Internet, lỗi gián đoạn do nhà cung cấp dịch vụ; hoặc<br />
                                        d) Bất cứ hành động bất khả kháng nào bao gồm nhưng không giới hạn bởi thiên
                                        tai, đình công, hoặc các yêu cầu hay chỉ thị của Chính phủ và các cơ quan nhà
                                        nước, người có thẩm quyền khác.<br />
                                    </p>
                                    <p style="margin-left: 30px">7.1.4. YouCare có thể tạm giữ và/hoặc phong tỏa thẻ của
                                        Khách hàng trong thời gian không giới hạn nếu thấy cần thiết để phòng ngừa các
                                        rủi ro có thể xảy ra và/hoặc nếu Khách hàng bị khiếu nại, tranh chấp, đòi hoàn
                                        lại thẻ.</p>
                                    <p style="margin-left: 30px">7.1.5. YouCare có quyền thay đổi, ngừng hoặc chấm dứt
                                        cung cấp Dịch vụ vào bất kỳ thời điểm nào mà không cần có sự đồng ý của Khách
                                        hàng. Tuy nhiên, YouCare có trách nhiệm thông báo cho Khách hàng về việc thay
                                        đổi, ngừng hoặc chấm dứt cung cấp Dịch vụ.</p>
                                    <p style="margin-left: 30px">7.1.6. YouCare có thể từ chối không thực hiện chỉ dẫn
                                        thanh toán của Khách hàng trong trường hợp trong tài khoản CKCare và/hoặc trong
                                        các phương tiện thanh toán khác có kết nối với tài khoản CKCare mà Khách hàng
                                        lựa chọn (như thẻ tín dụng, tài khoản ngân hàng) không đủ số dư; hoặc do tài
                                        khoản CKCare của Khách hàng đã đóng hoặc không hợp lệ; hoặc do nhà cung cấp dịch
                                        vụ không cho phép thực hiện thanh toán bằng phương tiện điện tử, và trong trường
                                        hợp như vậy, YouCare sẽ gửi thông báo cho Khách hàng.</p>
                                    <p style="margin-left: 30px">7.1.7. YouCare không chấp nhận việc hủy bỏ chỉ dẫn
                                        thanh toán mà Khách hàng đã thực hiện thành công. Tất cả các chỉ dẫn thanh toán
                                        do Khách hàng đưa ra khi sử dụng Dịch vụ được coi là không hủy ngang, cho dù chỉ
                                        dẫn thanh toán này do Khách hàng hay một người khác được hiểu là Khách hàng thực
                                        hiện. Việc hủy bỏ phải từ phía nhà cung cấp dịch vụ và phải được sự đồng ý của
                                        YouCare.</p>
                                    <p style="margin-left: 30px">7.1.8. YouCare được quyền tự động trích nợ tài khoản
                                        CKCare và/hoặc các phương tiện thanh toán khác có kết nối với tài khoản CKCare
                                        mà Khách hàng sử dụng để thanh toán cho các giao dịch mà Khách hàng mua hàng hóa
                                        hoặc sử dụng dịch với các nhà cung cấp mà Khách hàng tham gia. Việc thanh toán
                                        này có thể được thực hiện theo yêu cầu của Khách hàng hoặc theo yêu cầu của
                                        chính nhà cung cấp dịch vụ.</p>
                                    <p style="margin-left: 30px">7.1.9. YouCare được quyền sử dụng thông tin cá nhân và
                                        dữ liệu về giao dịch của Khách hàng để tùy biến và cải tiến nhằm nâng cao chất
                                        lượng Dịch vụ. YouCare không sử dụng những dữ liệu này vào mục đích bất hợp
                                        pháp. YouCare được quyền cung cấp dữ liệu của Khách hàng cho bên thứ ba trong
                                        các trường hợp nhưng không giới hạn:</p>
                                    <p style="margin-left: 30px">
                                        a) YouCare được Khách hàng chấp thuận; hoặc<br />
                                        b) Dịch vụ yêu cầu sự tương tác với một bên thứ ba; hoặc<br />
                                        c) Theo quy định của pháp luật.<br />
                                    </p>
                                    <p style="margin-left: 30px">7.1.10. Nếu Khách hàng vi phạm các cam kết về sử dụng
                                        Dịch vụ hoặc sử dụng Dịch vụ vào mục đích vi phạm pháp luật (ví dụ: dùng thẻ tín
                                        dụng hoặc tài khoản ngân hàng ăn cắp để giao dịch trên hệ thống YouCare, gian
                                        lận trong đặt cọc hàng hóa…), YouCare có quyền chấm dứt sử dụng Dịch vụ của
                                        Khách hàng.</p>

                                    <p>7.2. Trách nhiệm của YouCare</p>
                                    <p style="margin-left: 30px">7.2.1. YouCare đảm bảo rằng hệ thống Dịch vụ chạy ổn
                                        định, an toàn và tuân thủ các quy định của pháp luật liên quan đến việc cung ứng
                                        các dịch vụ trên mạng internet.</p>
                                    <p style="margin-left: 30px">7.2.2. Hỗ trợ Khách hàng, tiếp nhận và giải quyết khiếu
                                        nại của Khách hàng trong quá trình sử dụng Dịch vụ.</p>
                                    <p style="margin-left: 30px">7.2.3. Bảo mật thông tin cá nhân và dữ liệu về giao
                                        dịch của Khách hàng, YouCare không được bán hoặc trao đổi những thông tin này
                                        với bên thứ ba, trừ trường hợp theo quy định của pháp luật hoặc được Khách hàng
                                        cho phép.
                                    </p>
                                </div>
                            </div>
                            <div id="Dieu8" class="tabcontent">
                                <div class="policy__contents__item">
                                    <h5>Điều 8: Các hành vi cấm</h5>
                                    <p>Khi sử dụng Dịch vụ, Khách hàng không được:<br />
                                    <p>8.1. Vi phạm Bản thỏa thuận này và/hoặc tất cả các chính sách, quy định khác mà
                                        Khách hàng đã đồng ý với YouCare.</p>
                                    <p>8.2. Vi phạm bản quyền, bằng sáng chế, bí mật kinh doanh hoặc quyền sở hữu trí
                                        tuệ khác của YouCare và của các Bên thứ ba có liên quan.</p>
                                    <p>8.3. Bán hàng giả, hàng bị cấm kinh doanh, hàng có nguồn gốc bất hợp pháp.</p>
                                    <p>8.4. Hành động có tính chất làm mất uy tín, phỉ báng, bôi nhọ, đe dọa hoặc quấy
                                        rối.</p>
                                    <p>8.5. Hành động có tính chất bạo lực, hành hung và/hoặc có sử dụng ngôn từ tục
                                        tĩu, bôi nhọ, phỉ báng đối với nhân viên YouCare.</p>
                                    <p>8.6. Cung cấp thông tin sai sự thật, gây nhầm lẫn, sử dụng từ ngữ tục tĩu không
                                        phù hợp với thuần phong mỹ tục Việt Nam.</p>
                                    <p>8.7. Gửi hoặc nhận thẻ mà theo YouCare thì đó là các thẻ có nguồn gốc bất hợp
                                        pháp.</p>
                                    <p>8.8. Từ chối hợp tác điều tra hoặc không cung cấp thông tin theo yêu cầu của
                                        YouCare.</p>
                                    <p>8.9. Quản lý một tài khoản kết nối tới một tài khoản khác vi phạm một trong những
                                        hành động bị giới hạn ở mục này.</p>
                                    <p>8.10. Sử dụng Dịch vụ theo cách để cố ý tạo ra các tranh chấp, khiếu nại, đòi bồi
                                        thường.</p>
                                    <p>8.11. Tiết lộ thông tin của Khách hàng khác cho bên thứ ba hoặc sử dụng thông tin
                                        vào những mục đích tiếp thị / quảng cáo mà Khách hàng chưa được cho phép.</p>
                                    <p>8.12. Có những hành động vượt quá giới hạn hoặc chuyển các lệnh không hợp lệ lên
                                        hệ thống của YouCare.</p>
                                    <p>8.13. Phát tán virus, trojan, worms hoặc các chương trình máy tính có hại gây trở
                                        ngại, gian lận hoặc ảnh hưởng tới hệ thống, dữ liệu hoặc thông tin của Khách
                                        hàng khác và/hoặc của YouCare.</p>
                                    <p>8.14. Sử dụng bất kỳ các loại robot, spider, các thiết bị tự động khác hoặc thực
                                        hiện thủ công để giám sát hoặc sao chép trang website, các ứng dụng, giải pháp
                                        của YouCare mà không được YouCare cho phép.</p>
                                    <p>8.15. Sử dụng các thiết bị, phần mềm để vượt qua (hoặc phá) các biện pháp mà
                                        YouCare thiết lập nhằm đảm bảo an toàn hệ thống của YouCare.</p>
                                    <p>8.16. Hành động làm mất kết nối giữa YouCare đến nhà cung cấp dịch vụ và/hoặc đối
                                        tác, đại lý… hoặc các nhà cung cấp khác và ngược lại.
                                    </p>
                                </div>
                            </div>
                            <div id="Dieu9" class="tabcontent">
                                <div class="policy__contents__item">
                                    <h5>Điều 9: Bản quyền</h5>
                                    <p>Các trang website (bao gồm và không giới hạn các tên miền), ứng dụng, giải pháp,
                                        các sản phẩm/dịch vụ, logo và những nội dung khác liên quan đến Dịch vụ đều
                                        thuộc quyền quản lý, sở hữu và sử dụng hợp pháp, toàn vẹn và không chuyển giao
                                        của YouCare. Mọi sự sao chép, thay đổi, sửa chữa mà không được sự cho phép bằng
                                        văn bản của YouCare đều coi là vi phạm pháp luật.</p>
                                </div>
                            </div>
                            <div id="Dieu10" class="tabcontent">
                                <div class="policy__contents__item">
                                    <h5>Điều 10: Các quy định khác</h5>
                                    <p>10.1. Liên lạc với YouCare</p>
                                    <p>Khách hàng có thể liên lạc với bộ phận hỗ trợ của YouCare theo một trong các
                                        phương thức sau:</p>
                                    <p style="margin-left: 30px">Tổng đài tư vấn: 1900 3307</p>
                                    <p style="margin-left: 30px">Gọi tới số điện thoại Hotline: 024.4455.3307</p>
                                    <p style="margin-left: 30px">Gửi email tới địa chỉ: lienhe@braincare.vn</p>
                                    <p>10.2. Cam kết thực hiện và giải quyết tranh chấp</p>
                                    <p>Hai bên cam kết nghiêm chỉnh thực hiện các điều khoản của Bản thỏa thuận này và
                                        các bản sửa đổi, bổ sung, phụ lục đính kèm (nếu có). Nếu phát sinh tranh chấp
                                        trong quá trình thực hiện, hai bên sẽ cùng nhau giải quyết bằng thương lượng
                                        hoặc hòa giải. Trường hợp thương lượng hoặc hòa giải không thành, thì một trong
                                        các bên có quyền đưa vụ tranh chấp ra Tòa án nhân dân Thành phố Hà Nội để giải
                                        quyết.</p>
                                    <p>10.3. Tất cả các điều khoản và điều kiện của Bản thỏa thuận này vẫn có hiệu lực
                                        sau khi Khách hàng ngừng hoặc chấm dứt dịch vụ. Ngay cả khi ngừng, chấm dứt sử
                                        dụng Dịch vụ, Khách hàng vẫn bị ràng buộc bởi các điều khoản và điều kiện này ở
                                        chừng mực liên quan đến quyền và trách nhiệm của Khách hàng trong thời gian sử
                                        dụng Dịch vụ.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="policy__container__mobile">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Điều khoản 1: Giải thích từ ngữ
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="policy__contents__item">

                            <h5>Điều 1: Giải thích từ ngữ</h5>
                            <p>1.1. Thỏa thuận sử dụng dịch vụ CKCare (gọi tắt là "Bản thỏa thuận"): là Bản Hợp đồng
                                giữa Bạn/Người sử dụng dịch vụ CKCare (sau đây gọi là "Khách hàng) và Công ty Cổ phần
                                YouCare (sau đây gọi tắt là "YouCare"), áp dụng khi Khách hàng sử dụng dịch vụ CKCare
                                của YouCare.</p>
                            <p>1.2. Tài khoản CKCare: là tài khoản định danh khách hàng đăng kí sử dụng dịch vụ trên
                                website.</p>
                            <p>1.3. Đơn vị thu hộ: là các cá nhân, tổ chức đồng ý với Thoả thuận sử dụng dịch vụ này và
                                được YouCare ủy quyền để thực hiện các dịch vụ nhờ thu và thanh toán các khoản tiền mua
                                sử dụng sản phẩm từ tài khoản CKCare.</p>
                            <p>1.4. Dịch vụ CKCare (gọi tắt là "Dịch vụ"): là các dịch vụ theo dõi đánh giá sàng lọc cho
                                trẻ được YouCare cung cấp trên ứng dụng CKCare.</p>
                            <p>1.5. Giao dịch CKCare (gọi tắt là “Giao dịch”): là các giao dịch có thể được thực hiện
                                thông qua tài khoản CKCare vào từng thời điểm để có thể xem các video giải thích, hướng
                                dẫn chi tiết các kết quả đánh giá sàng lọc cho trẻ.</p>
                            <p>1.6. Giấy tờ tùy thân hợp lệ: là (a) Chứng minh nhân dân (CMND) do Chính phủ Việt Nam cấp
                                còn hiệu lực, (b) Hộ chiếu hợp lệ.</p>
                            <p>1.7. Ngày làm việc: Là các ngày từ thứ hai đến thứ sáu mà YouCare làm việc bình thường;
                                trừ các ngày nghỉ, lễ, tết theo quy định pháp luật.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Điều khoản 2: Đăng ký và sử dụng
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="policy__contents__item">
                            <h5>Điều 2: Đăng ký và sử dụng dịch vụ</h5>
                            <p>2.1. Trước khi đăng ký sử dụng Dịch vụ, Khách hàng cần đọc, đồng ý và chấp nhận tất cả
                                các quy định trong Bản thỏa thuận này và/hoặc các quy định, chính sách, và các điều
                                khoản liên quan khác trong quá trình sử dụng Dịch vụ.</p>
                            <p>2.2. Khi đã sử dụng Dịch vụ thì có nghĩa là Khách hàng đã hoàn toàn tự nguyện đồng ý,
                                chấp nhận cũng như tuân thủ tất cả các quy định trong Bản thỏa thuận này và/hoặc các quy
                                định, chính sách, và các điều khoản liên quan khác trong quá trình sử dụng Dịch vụ.</p>
                            <p>2.3. Trong quá trình sử dụng Dịch vụ, Khách hàng đồng ý cung cấp đầy đủ, chính xác thông
                                tin về họ tên, địa chỉ liên lạc, giấy tờ tùy thân hợp lệ, email… và chịu trách nhiệm về
                                các thông tin mà Khách hàng cung cấp.</p>
                            <p>2.4. Nếu phát sinh rủi ro trong quá trình sử dụng Dịch vụ, YouCare căn cứ vào những thông
                                tin mà Khách hàng đã cung cấp để tiếp nhận và giải quyết. YouCare chỉ tiếp nhận và giải
                                quyết những trường hợp khai báo đúng, chính xác và đầy đủ những thông tin quy định tại
                                Khoản </p>
                            <p>2.3. Những trường hợp khai báo không đầy đủ và chính xác, Khách hàng sẽ không nhận được
                                bất kỳ sự hỗ trợ nào từ YouCare, và YouCare sẽ không chịu trách nhiệm giải quyết những
                                tranh chấp, rủi ro phát sinh đối với việc sử dụng Dịch vụ của Khách hàng.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Điều khoản 3: Thay đổi nội dung các điều kiện và điều khoản
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="policy__contents__item">
                            <h5>Điều 3: Thay đổi nội dung các điều kiện và điều khoản</h5>
                            <p>3.1. YouCare có thể sửa đổi, bổ sung nội dung Bản thỏa thuận này vào bất cứ thời gian nào
                                bằng cách gửi thông báo thay đổi cho Khách hàng.</p>
                            <p>3.2. Khách hàng được xem là đã nhận thông báo nếu:</p>
                            <p style="margin-left: 30px"> 3.2.1. Các thông báo này đã được đưa lên trang website của
                                Dịch vụ tại địa chỉ:
                                <a href="https://youcare.vn/">https://youcare.vn/</a>; hoặc <a
                                    href="https://ck.youcare.vn" target="_blank">https://ck.youcare.vn</a>
                            </p>
                            <p style="margin-left: 30px"> 3.2.2. Các thông báo này đã được gửi tới địa chỉ thư điện tử
                                (email) mà Khách hàng đăng ký trong quá trình sử dụng Dịch vụ; hoặc</p>
                            <p style="margin-left: 30px"> 3.2.3. Được gửi tới số điện thoại Khách hàng đăng ký sử dụng
                                Dịch vụ; hoặc</p>
                            <p>3.3. Trường hợp đối với những thay đổi như:</p>
                            <p style="margin-left: 30px">
                                (a) tăng trách nhiệm và nghĩa vụ của Khách hàng, <br />
                                (b) hạn chế bớt các dịch vụ đang cung cấp trên tài khoản CKCare, hoặc <br />
                                (c) giảm hạn mức giao dịch, trừ khi những thay đổi này phải thực hiện ngay vì yêu cầu an
                                ninh hoặc theo quy định của pháp luật, YouCare sẽ thông báo cho Khách hàng ít nhất 05
                                (năm) ngày làm việc kể từ ngày có hiệu lực của những thay đổi này.<br /></p>
                            <p>3.4. Nếu Khách hàng không đồng ý với nội dung thay đổi thì có thể chấm dứt việc tiếp tục
                                sử dụng Dịch vụ. Trường hợp Khách hàng tiếp tục sử dụng Dịch vụ thì có nghĩa là Khách
                                hàng đã hoàn toàn tự nguyện đồng ý, chấp nhận cũng như tuân thủ các nội dung thay đổi
                                đó.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Điều khoản 4: Mua dịch vụ
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="policy__contents__item">
                            <h5>Điều 4: Mua dịch vụ</h5>
                            <p> 4.1. Phương thức thực hiện</p>
                            <p> 4.2. Khách hàng có quyền thực hiện việc thanh toán phí dịch vụ để có quyền truy cập xem
                                các video hướng dẫn của CKCare theo các bước hướng dẫn thanh toán của YouCare.</p>
                            <p> 4.3. Vào thời điểm YouCare đã nhận được tiền, YouCare sẽ cung cấp quyền truy cập các
                                video của CKCare cho tài khoản của khách hàng đã thực hiện yêu cầu mua.</p>
                            <p> 4.4. Tùy thuộc vào phương thức mà Khách hàng lựa chọn để thanh toán, thời gian YouCare
                                xử lý để cấp quyền truy cập vào các video hướng dẫn cho tài khoản CKCare của Khách hàng
                                sẽ khác nhau.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Điều khoản 5: Sử dụng dịch vụ và phí dịch vụ
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="policy__contents__item">
                            <h5>Điều 5: Sử dụng dịch vụ và Phí dịch vụ</h5>
                            <p>5.1. Khi Khách hàng chủ động thực hiện Giao dịch thông qua CKCare thì các hàng hoá, dịch
                                vụ của Khách hàng được xác định là bàn giao ngay khi Giao dịch được thực hiện thành
                                công. Chúng tôi sẽ không hoàn trả và/hoặc đổi lại các hàng hoá, dịch vụ này trừ trường
                                hợp phát sinh lỗi kỹ thuật từ phía CKCare dẫn đến việc hàng hoá, dịch vụ này là không sử
                                dụng được. Nhân viên CKCare sẽ tiếp nhận, xác minh và thông tin đến Khách hàng theo từng
                                trường hợp cụ thể.</p>
                            <p>5.2. Phí sử dụng dịch vụ được YouCare công bố cho từng thời kỳ, tùy theo đặc điểm của
                                từng loại dịch vụ.</p>
                            <p>5.3. Khách hàng ủy quyền cho YouCare được quyền tự động trích nợ phí sử dụng dịch vụ trên
                                tài khoản CKCare và/hoặc trong các phương tiện thanh toán khác có kết nối với tài khoản
                                CKCare mà Khách hàng lựa chọn (như thẻ tín dụng, tài khoản ngân hàng) để thanh toán tiền
                                phí sử dụng dịch vụ này.</p>
                            <p>5.4. Phí dịch vụ có thể được thu trước, sau hay ngay khi phát sinh giao dịch tùy vào từng
                                loại hình dịch vụ mà YouCare cung cấp.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Điều khoản 6: Quyền và trách nhiệm khách hàng
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample">
                        <div class="policy__contents__item">
                            <h5>Điều 6: Quyền và trách nhiệm của Khách hàng</h5>
                            <p>6.1. Quyền của Khách hàng</p>
                            <p style="margin-left: 30px">6.1.1. Khách hàng được quyền thay đổi, bổ sung thông tin tài
                                khoản, mật khẩu đặt lệnh, giấy tờ tùy thân, email đã đăng ký, số điện thoại gắn với tài
                                khoản.</p>
                            <p style="margin-left: 30px">6.1.2. Khách hàng có thể chấm dứt sử dụng Dịch vụ vào bất kỳ
                                lúc nào sau khi đã gửi cho YouCare văn bản yêu cầu ngừng sử dụng dịch vụ theo mẫu mà
                                YouCare cung cấp. Sau khi chấm dứt sử dụng Dịch vụ, Khách hàng không được tiếp tục sử
                                dụng Dịch vụ nữa.</p>
                            <p>6.2. Trách nhiệm của Khách hàng.</p>
                            <p style="margin-left: 30px">6.2.1. Cung cấp thông tin đúng và đầy đủ, tuân thủ các thủ tục
                                đăng ký, trình tự giao dịch và các hướng dẫn khác của YouCare, sử dụng đúng mục đích
                                những thông tin mà Dịch vụ cung cấp.</p>
                            <p style="margin-left: 30px">6.2.2. Khi việc thực hiện giao dịch thông qua một đơn vị trung
                                gian (cụ thể ở đây là ngân hàng, tổ chức tín dụng, đơn vị phát hành thẻ), Khách hàng có
                                trách nhiệm tuân thủ các quy định của đơn vị trung gian này. Mọi vấn đề phát sinh về
                                nghĩa vụ và quyền lợi của Khách hàng và Đơn vị trung gian này nằm ngoài sự kiểm soát và
                                trách nhiệm của YouCare nên chúng tôi có khả năng từ chối nếu như hai Bên có mâu thuẫn
                                xảy ra.</p>
                            <p style="margin-left: 30px">6.2.3. Nếu Khách hàng cho rằng có một sự nhầm lẫn, lỗi hoặc sai
                                sót trong việc sử dụng Dịch vụ và/hoặc xử lý chỉ dẫn thanh toán của YouCare, Khách hàng
                                có thể liên lạc trực tiếp với bộ phận hỗ trợ dịch vụ để được giải quyết. Những vấn đề có
                                thể phát sinh là:</p>
                            <p style="margin-left: 30px">
                                a) Bất kỳ sự chậm chễ hoặc sai sót nào trong việc xử lý chỉ dẫn thanh toán của Khách
                                hàng; hoặc<br />
                                b) Nếu phát hiện tài khoản của Khách hàng có phát sinh giao dịch mà không do Khách hàng
                                thực hiện; hoặc<br />
                                c) Mật khẩu đặt lệnh và/hoặc thông tin của Khách hàng đã đăng ký trên hệ thống YouCare
                                bị tiết lộ cho Bên thứ ba; hoặc<br />
                                d) Có sự truy cập không hợp lệ vào tài khoản của Khách hàng; hoặc<br />
                                e) Các lỗi khác mà Khách hàng phát hiện được xuất phát từ hệ thống của YouCare.<br />
                            </p>
                            <p style="margin-left: 30px">6.2.4. Khách hàng chịu trách nhiệm áp dụng mọi biện pháp hợp lý
                                nhằm đảm bảo an toàn, đảm bảo tính tương thích cho các loại máy móc, thiết bị kết nối,
                                phần mềm hệ thống, phần mềm ứng dụng… do Khách hàng sử dụng khi kết nối, truy cập vào
                                dịch vụ nhằm kiểm soát, phòng ngừa và ngăn chặn việc sử dụng hoặc truy cập trái phép
                                Dịch vụ.</p>
                            <p style="margin-left: 30px">6.2.5. Khách hàng phải đảm bảo an toàn và bí mật đối với bất kỳ
                                thông tin cá nhân, mật khẩu truy cập, mật khẩu đặt lệnh và các yếu tố định danh khác mà
                                YouCare cung cấp. Khách hàng hoàn toàn chịu trách nhiệm trong trường hợp các thông tin
                                này bị mất, lợi dụng, tiết lộ cho một người thứ ba và sẽ chịu mọi rủi ro, thiệt hại gây
                                ra do việc sử dụng trái phép của người thứ ba đó.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                            Điều khoản 7: Quyền và trách nhiệm của YouCare
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven"
                        data-bs-parent="#accordionExample">
                        <div class="policy__contents__item">
                            <h5>Điều 7: Quyền và trách nhiệm của YouCare</h5>
                            <p>7.1. Quyền của YouCare</p>
                            <p style="margin-left: 30px">7.1.1. Nếu YouCare có lý do cho rằng Khách hàng vi phạm các
                                hành vi cấm quy định tại Điều 9, YouCare sẽ có những biện pháp để bảo vệ YouCare và/hoặc
                                Khách hàng khác hoặc Bên thứ ba có liên quan. Những hàng động YouCare có thể thực hiện
                                được bao gồm nhưng không giới hạn ở những hàng động này:</p>

                            <p style="margin-left: 30px">
                                a) YouCare có thể đóng, tạm ngừng hoặc giới hạn truy nhập của Khách hàng vào tài khoản
                                và dịch vụ mà YouCare cung cấp;<br />
                                b) YouCare có thể liên hệ với người Bán/người Mua mà Khách hàng giao dịch, liên hệ với
                                ngân hàng của Khách hàng, với Khách hàng khác hoặc liên hệ tới Bên thứ ba để cảnh báo
                                hoặc lưu ý tới hành động của Khách hàng;<br />
                            </p>
                            <p style="margin-left: 30px">7.1.2. YouCare không chịu trách nhiệm đối với những thiệt hại,
                                tổn thất của Khách hàng phát sinh trong quá trình sử dụng Dịch vụ, trừ phi những thiệt
                                hại, tổn thất này là do lỗi cố ý của YouCare.</p>
                            <p style="margin-left: 30px">7.1.3. YouCare không chịu trách nhiệm đối với những thiệt hại
                                trực tiếp hoặc gián tiếp mà khách hàng phải chịu phát sinh từ hoặc do:</p>
                            <p style="margin-left: 30px">
                                a) Việc sử dụng dịch vụ hoặc tiếp cận các thông tin mà dịch vụ cung ứng của những người
                                được Khách hàng ủy quyền; hoặc<br />
                                b) Việc Khách hàng để mất, mất cắp thiết bị di động dùng để đăng nhập dịch vụ, lộ mật
                                khẩu đặt lệnh và/hoặc các yếu tố định danh khác mà YouCare cung cấp dẫn đến người khác
                                dùng những thông tin này để sử dụng dịch vụ hoặc tiếp cận những thông tin mà Dịch vụ
                                cung ứng; hoặc<br />
                                c) Sự ngắt quãng, trì hoãn, chậm chễ, tình trạng không sẵn sàng sử dụng hoặc bất kỳ sự
                                cố nào xảy ra trong quá trình cung cấp Dịch vụ do các nguyên nhân ngoài khả năng kiểm
                                soát hợp lý của YouCare, bao gồm nhưng không giới hạn ở tình trạng gián đoạn do dịch vụ
                                cần được nâng cấp, sửa chữa, lỗi đường truyền của nhà cung cấp dịch vụ Internet, lỗi
                                gián đoạn do nhà cung cấp dịch vụ; hoặc<br />
                                d) Bất cứ hành động bất khả kháng nào bao gồm nhưng không giới hạn bởi thiên tai, đình
                                công, hoặc các yêu cầu hay chỉ thị của Chính phủ và các cơ quan nhà nước, người có thẩm
                                quyền khác.<br />
                            </p>
                            <p style="margin-left: 30px">7.1.4. YouCare có thể tạm giữ và/hoặc phong tỏa thẻ của Khách
                                hàng trong thời gian không giới hạn nếu thấy cần thiết để phòng ngừa các rủi ro có thể
                                xảy ra và/hoặc nếu Khách hàng bị khiếu nại, tranh chấp, đòi hoàn lại thẻ.</p>
                            <p style="margin-left: 30px">7.1.5. YouCare có quyền thay đổi, ngừng hoặc chấm dứt cung cấp
                                Dịch vụ vào bất kỳ thời điểm nào mà không cần có sự đồng ý của Khách hàng. Tuy nhiên,
                                YouCare có trách nhiệm thông báo cho Khách hàng về việc thay đổi, ngừng hoặc chấm dứt
                                cung cấp Dịch vụ.</p>
                            <p style="margin-left: 30px">7.1.6. YouCare có thể từ chối không thực hiện chỉ dẫn thanh
                                toán của Khách hàng trong trường hợp trong tài khoản CKCare và/hoặc trong các phương
                                tiện thanh toán khác có kết nối với tài khoản CKCare mà Khách hàng lựa chọn (như thẻ tín
                                dụng, tài khoản ngân hàng) không đủ số dư; hoặc do tài khoản CKCare của Khách hàng đã
                                đóng hoặc không hợp lệ; hoặc do nhà cung cấp dịch vụ không cho phép thực hiện thanh toán
                                bằng phương tiện điện tử, và trong trường hợp như vậy, YouCare sẽ gửi thông báo cho
                                Khách hàng.</p>
                            <p style="margin-left: 30px">7.1.7. YouCare không chấp nhận việc hủy bỏ chỉ dẫn thanh toán
                                mà Khách hàng đã thực hiện thành công. Tất cả các chỉ dẫn thanh toán do Khách hàng đưa
                                ra khi sử dụng Dịch vụ được coi là không hủy ngang, cho dù chỉ dẫn thanh toán này do
                                Khách hàng hay một người khác được hiểu là Khách hàng thực hiện. Việc hủy bỏ phải từ
                                phía nhà cung cấp dịch vụ và phải được sự đồng ý của YouCare.</p>
                            <p style="margin-left: 30px">7.1.8. YouCare được quyền tự động trích nợ tài khoản CKCare
                                và/hoặc các phương tiện thanh toán khác có kết nối với tài khoản CKCare mà Khách hàng sử
                                dụng để thanh toán cho các giao dịch mà Khách hàng mua hàng hóa hoặc sử dụng dịch với
                                các nhà cung cấp mà Khách hàng tham gia. Việc thanh toán này có thể được thực hiện theo
                                yêu cầu của Khách hàng hoặc theo yêu cầu của chính nhà cung cấp dịch vụ.</p>
                            <p style="margin-left: 30px">7.1.9. YouCare được quyền sử dụng thông tin cá nhân và dữ liệu
                                về giao dịch của Khách hàng để tùy biến và cải tiến nhằm nâng cao chất lượng Dịch vụ.
                                YouCare không sử dụng những dữ liệu này vào mục đích bất hợp pháp. YouCare được quyền
                                cung cấp dữ liệu của Khách hàng cho bên thứ ba trong các trường hợp nhưng không giới
                                hạn:</p>
                            <p style="margin-left: 30px">
                                a) YouCare được Khách hàng chấp thuận; hoặc<br />
                                b) Dịch vụ yêu cầu sự tương tác với một bên thứ ba; hoặc<br />
                                c) Theo quy định của pháp luật.<br />
                            </p>
                            <p style="margin-left: 30px">7.1.10. Nếu Khách hàng vi phạm các cam kết về sử dụng Dịch vụ
                                hoặc sử dụng Dịch vụ vào mục đích vi phạm pháp luật (ví dụ: dùng thẻ tín dụng hoặc tài
                                khoản ngân hàng ăn cắp để giao dịch trên hệ thống YouCare, gian lận trong đặt cọc hàng
                                hóa…), YouCare có quyền chấm dứt sử dụng Dịch vụ của Khách hàng.</p>

                            <p>7.2. Trách nhiệm của YouCare</p>
                            <p style="margin-left: 30px">7.2.1. YouCare đảm bảo rằng hệ thống Dịch vụ chạy ổn định, an
                                toàn và tuân thủ các quy định của pháp luật liên quan đến việc cung ứng các dịch vụ trên
                                mạng internet.</p>
                            <p style="margin-left: 30px">7.2.2. Hỗ trợ Khách hàng, tiếp nhận và giải quyết khiếu nại của
                                Khách hàng trong quá trình sử dụng Dịch vụ.</p>
                            <p style="margin-left: 30px">7.2.3. Bảo mật thông tin cá nhân và dữ liệu về giao dịch của
                                Khách hàng, YouCare không được bán hoặc trao đổi những thông tin này với bên thứ ba, trừ
                                trường hợp theo quy định của pháp luật hoặc được Khách hàng cho phép.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Điều khoản 8: Các hành vi cấm
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                        data-bs-parent="#accordionExample">
                        <div class="policy__contents__item">
                            <h5>Điều 8: Các hành vi cấm</h5>
                            <p>Khi sử dụng Dịch vụ, Khách hàng không được:<br />
                            <p>8.1. Vi phạm Bản thỏa thuận này và/hoặc tất cả các chính sách, quy định khác mà Khách
                                hàng đã đồng ý với YouCare.</p>
                            <p>8.2. Vi phạm bản quyền, bằng sáng chế, bí mật kinh doanh hoặc quyền sở hữu trí tuệ khác
                                của YouCare và của các Bên thứ ba có liên quan.</p>
                            <p>8.3. Bán hàng giả, hàng bị cấm kinh doanh, hàng có nguồn gốc bất hợp pháp.</p>
                            <p>8.4. Hành động có tính chất làm mất uy tín, phỉ báng, bôi nhọ, đe dọa hoặc quấy rối.</p>
                            <p>8.5. Hành động có tính chất bạo lực, hành hung và/hoặc có sử dụng ngôn từ tục tĩu, bôi
                                nhọ, phỉ báng đối với nhân viên YouCare.</p>
                            <p>8.6. Cung cấp thông tin sai sự thật, gây nhầm lẫn, sử dụng từ ngữ tục tĩu không phù hợp
                                với thuần phong mỹ tục Việt Nam.</p>
                            <p>8.7. Gửi hoặc nhận thẻ mà theo YouCare thì đó là các thẻ có nguồn gốc bất hợp pháp.</p>
                            <p>8.8. Từ chối hợp tác điều tra hoặc không cung cấp thông tin theo yêu cầu của YouCare.</p>
                            <p>8.9. Quản lý một tài khoản kết nối tới một tài khoản khác vi phạm một trong những hành
                                động bị giới hạn ở mục này.</p>
                            <p>8.10. Sử dụng Dịch vụ theo cách để cố ý tạo ra các tranh chấp, khiếu nại, đòi bồi thường.
                            </p>
                            <p>8.11. Tiết lộ thông tin của Khách hàng khác cho bên thứ ba hoặc sử dụng thông tin vào
                                những mục đích tiếp thị / quảng cáo mà Khách hàng chưa được cho phép.</p>
                            <p>8.12. Có những hành động vượt quá giới hạn hoặc chuyển các lệnh không hợp lệ lên hệ thống
                                của YouCare.</p>
                            <p>8.13. Phát tán virus, trojan, worms hoặc các chương trình máy tính có hại gây trở ngại,
                                gian lận hoặc ảnh hưởng tới hệ thống, dữ liệu hoặc thông tin của Khách hàng khác và/hoặc
                                của YouCare.</p>
                            <p>8.14. Sử dụng bất kỳ các loại robot, spider, các thiết bị tự động khác hoặc thực hiện thủ
                                công để giám sát hoặc sao chép trang website, các ứng dụng, giải pháp của YouCare mà
                                không được YouCare cho phép.</p>
                            <p>8.15. Sử dụng các thiết bị, phần mềm để vượt qua (hoặc phá) các biện pháp mà YouCare
                                thiết lập nhằm đảm bảo an toàn hệ thống của YouCare.</p>
                            <p>8.16. Hành động làm mất kết nối giữa YouCare đến nhà cung cấp dịch vụ và/hoặc đối tác,
                                đại lý… hoặc các nhà cung cấp khác và ngược lại.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Điều khoản 9: Bản quyền
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                        data-bs-parent="#accordionExample">
                        <div class="policy__contents__item">
                            <h5>Điều 9: Bản quyền</h5>
                            <p>Các trang website (bao gồm và không giới hạn các tên miền), ứng dụng, giải pháp, các sản
                                phẩm/dịch vụ, logo và những nội dung khác liên quan đến Dịch vụ đều thuộc quyền quản lý,
                                sở hữu và sử dụng hợp pháp, toàn vẹn và không chuyển giao của YouCare. Mọi sự sao chép,
                                thay đổi, sửa chữa mà không được sự cho phép bằng văn bản của YouCare đều coi là vi phạm
                                pháp luật.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            Điều khoản 10: Các quy định khác
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                        data-bs-parent="#accordionExample">
                        <div class="policy__contents__item">
                            <h5>Điều 10: Các quy định khác</h5>
                            <p>10.1. Liên lạc với YouCare</p>
                            <p>Khách hàng có thể liên lạc với bộ phận hỗ trợ của YouCare theo một trong các phương thức
                                sau:</p>
                            <p style="margin-left: 30px">Tổng đài tư vấn: 1900 3307</p>
                            <p style="margin-left: 30px">Gọi tới số điện thoại Hotline: 024.4455.3307</p>
                            <p style="margin-left: 30px">Gửi email tới địa chỉ: lienhe@braincare.vn</p>
                            <p>10.2. Cam kết thực hiện và giải quyết tranh chấp</p>
                            <p>Hai bên cam kết nghiêm chỉnh thực hiện các điều khoản của Bản thỏa thuận này và các bản
                                sửa đổi, bổ sung, phụ lục đính kèm (nếu có). Nếu phát sinh tranh chấp trong quá trình
                                thực hiện, hai bên sẽ cùng nhau giải quyết bằng thương lượng hoặc hòa giải. Trường hợp
                                thương lượng hoặc hòa giải không thành, thì một trong các bên có quyền đưa vụ tranh chấp
                                ra Tòa án nhân dân Thành phố Hà Nội để giải quyết.</p>
                            <p>10.3. Tất cả các điều khoản và điều kiện của Bản thỏa thuận này vẫn có hiệu lực sau khi
                                Khách hàng ngừng hoặc chấm dứt dịch vụ. Ngay cả khi ngừng, chấm dứt sử dụng Dịch vụ,
                                Khách hàng vẫn bị ràng buộc bởi các điều khoản và điều kiện này ở chừng mực liên quan
                                đến quyền và trách nhiệm của Khách hàng trong thời gian sử dụng Dịch vụ.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mt-5">
        <!-- <div class="main_form"> -->
        <div class="container">

            <div class="row">
                <div class="card-body">
                    <div class="section-title">
                        <h2 class="ck_header">ĐĂNG KÝ TƯ VẤN</h2>
                    </div>
                    <p style="margin-top: -30px;" class="text-center">
                        Chúng tôi luôn sẵn lòng lắng nghe bạn, hãy sẻ chia với chúng tôi nhé!
                    </p>
                </div>
                <div class="col-lg-6 mt-lg-0">

                    <div id="getfly-optin-form-iframe-1646904312118"></div>
                    <script type="text/javascript">
                    (function() {
                        var r = window.document.referrer != "" ? window.document.referrer : window.location.origin;
                        var regex = /(https?:\/\/.*?)\//g;
                        var furl = regex.exec(r);
                        r = furl ? furl[0] : r;
                        var f = document.createElement("iframe");
                        const url_string = new URLSearchParams(window.location.search);
                        var utm_source, utm_campaign, utm_medium, utm_content, utm_term, utm_user, utm_account;
                        if ((!url_string.has('utm_source') || url_string.get('utm_source') == '') && document.cookie
                            .match(new RegExp('utm_source' + '=([^;]+)')) != null) {
                            r += "&" + document.cookie.match(new RegExp('utm_source' + '=([^;]+)'))[0];
                        } else {
                            r += url_string.get('utm_source') != null ? "&utm_source=" + url_string.get(
                                'utm_source') : "";
                        }
                        if ((!url_string.has('utm_campaign') || url_string.get('utm_campaign') == '') && document
                            .cookie.match(new RegExp('utm_campaign' + '=([^;]+)')) != null) {
                            r += "&" + document.cookie.match(new RegExp('utm_campaign' + '=([^;]+)'))[0];
                        } else {
                            r += url_string.get('utm_campaign') != null ? "&utm_campaign=" + url_string.get(
                                'utm_campaign') : "";
                        }
                        if ((!url_string.has('utm_medium') || url_string.get('utm_medium') == '') && document.cookie
                            .match(new RegExp('utm_medium' + '=([^;]+)')) != null) {
                            r += "&" + document.cookie.match(new RegExp('utm_medium' + '=([^;]+)'))[0];
                        } else {
                            r += url_string.get('utm_medium') != null ? "&utm_medium=" + url_string.get(
                                'utm_medium') : "";
                        }
                        if ((!url_string.has('utm_content') || url_string.get('utm_content') == '') && document
                            .cookie.match(new RegExp('utm_content' + '=([^;]+)')) != null) {
                            r += "&" + document.cookie.match(new RegExp('utm_content' + '=([^;]+)'))[0];
                        } else {
                            r += url_string.get('utm_content') != null ? "&utm_content=" + url_string.get(
                                'utm_content') : "";
                        }
                        if ((!url_string.has('utm_term') || url_string.get('utm_term') == '') && document.cookie
                            .match(new RegExp('utm_term' + '=([^;]+)')) != null) {
                            r += "&" + document.cookie.match(new RegExp('utm_term' + '=([^;]+)'))[0];
                        } else {
                            r += url_string.get('utm_term') != null ? "&utm_term=" + url_string.get('utm_term') :
                                "";
                        }
                        if ((!url_string.has('utm_user') || url_string.get('utm_user') == '') && document.cookie
                            .match(new RegExp('utm_user' + '=([^;]+)')) != null) {
                            r += "&" + document.cookie.match(new RegExp('utm_user' + '=([^;]+)'))[0];
                        } else {
                            r += url_string.get('utm_user') != null ? "&utm_user=" + url_string.get('utm_user') :
                                "";
                        }
                        if ((!url_string.has('utm_account') || url_string.get('utm_account') == '') && document
                            .cookie.match(new RegExp('utm_account' + '=([^;]+)')) != null) {
                            r += "&" + document.cookie.match(new RegExp('utm_account' + '=([^;]+)'))[0];
                        } else {
                            r += url_string.get('utm_account') != null ? "&utm_account=" + url_string.get(
                                'utm_account') : "";
                        }
                        r += "&full_url=" + encodeURIComponent(window.location.href);
                        f.setAttribute("src",
                            "https://braincare.getflycrm.com/api/forms/viewform/?key=Ik7DLMQTQ24sVlDCqhaeG63BfeM26LncaV1Fauer5ukHz43p2M&referrer=" +
                            r);
                        f.style.width = "100%";
                        f.style.height = "600px";
                        f.setAttribute("frameborder", "0");
                        f.setAttribute("marginheight", "0");
                        f.setAttribute("marginwidth", "0");
                        var s = document.getElementById("getfly-optin-form-iframe-1646904312118");
                        s.appendChild(f);
                    })();
                    </script>
                </div>

                <div class="col-lg-6 mb-5">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Địa chỉ/ Location:</h4>
                            <p>- Tầng 7, 59 Võ Chí Công, Cầu Giấy, Hà Nội</p>
                            <p>- 7th floor, 59 Vo Chi Cong street, Cau Giay District, Ha Noi</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>lienhe@braincare.vn</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Hotline:</h4>
                            <p>(024) 4455 3307</p>
                        </div>

                    </div>

                </div>


            </div>

        </div>
    </section>
    <!-- End Contact Section -->

</main><!-- End #main -->
<script>
function openPolicy(evt, policyName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(policyName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click('');
</script>
@endsection