<div class="container">
    <ul class="m-0 nav nav-fill nav-justified nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation"> <button class="active nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> <i class="fas fa-envelope-open"></i> Phụ huynh </button> </li>
        <li class="nav-item" role="presentation"> <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> <i class="fas fa-user-astronaut"></i> Học sinh </button> </li>
        <li class="nav-item" role="presentation"> <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false"> <i class="far fa-home"></i> Nhà trường </button> </li>
    </ul>
    <div class="border-grey bg-white p-3 tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p>
                <i class="bi bi-play-circle"></i> Hiểu rõ vấn đề tâm sinh lý của con.<br>
                <i class="bi bi-play-circle"></i> Đồng hành kịp thời cùng con.<br>
                <i class="bi bi-play-circle"></i> Cùng con khắc phục và khơi dậy tiềm năng cho con.
            </p>
        </div>
        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <p>
                <i class="bi bi-play-circle"></i> Hiểu về tâm sinh lý của mình.<br>
                <i class="bi bi-play-circle"></i> Hiểu được năng lực sở trường của mình.<br>
                <i class="bi bi-play-circle"></i> Hỗ trợ, đồng hành từ gia đình và chuyên gia.
            </p>
        </div>
        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
            <p>
                <i class="bi bi-play-circle"></i> Theo dõi và phát hiện sớm các vấn đề.<br>
                <i class="bi bi-play-circle"></i> Tư vấn, hỗ trợ giáo viên trong việc đồng hành cùng học sinh.<br>
                <i class="bi bi-play-circle"></i> Giám sát và báo cáo kịp thời các vấn đề liên quan cho phụ huynh.<br>
                <i class="bi bi-play-circle"></i> Được chuyên gia tư vấn, hỗ trợ xây dựng và triển khai các chương trình phòng ngừa.<br>
                <i class="bi bi-play-circle"></i> Hỗ trợ xây dựng kế hoạch phát triển toàn diện cho học sinh.
            </p>
        </div>
    </div>
</div>

<style>
    .border-grey {
        border: 1px solid;
        border-end-start-radius: 5px;
        border-end-end-radius: 5px;
        border-top: none;
        border-color: #dee2e6
    }

    #myTab {
        background-color: #dee2e6
    }

    .nav-link {
        color: #666
    }
</style>

<script>
    var firstTabEl = document.querySelector('#myTab li:last-child a')
    var firstTab = new bootstrap.Tab(firstTabEl)

    firstTab.show()
</script>