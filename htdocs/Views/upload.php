<div class="modal">
    <div class="modal-inner">
        <h1 class="modal-inner-h1">제품 내역</h1>
        <ul class="modal-inner-ul">
            <li class="modal-inner-li"><h4 class="modal-inner-h4">제목</h4>
                <p class="modal-inner-name modal-inner-p modal-center">d</p>
            </li>

            <li class="modal-inner-li"><h4 class="modal-inner-h4">내용</h4>
                <p class="modal-inner-content modal-inner-p"></p>
            </li>

            <li class="modal-inner-li"><h4 class="modal-inner-h4">주소</h4>
                <p class="modal-inner-address modal-inner-p modal-center">d</p>
            </li>

            <li class="modal-inner-li"><h4 class="modal-inner-h4">가격</h4>
                <p class="modal-inner-price modal-inner-p modal-center">d</p>
            </li>
        </ul>
        <button class="Upload-button modal-inner-button">UPLOAD</button>
        <button class="Upload-button modal-inner-back" onclick="close_modal()">CANSLE</button>
    </div>
</div>

<div class="Upload-title">
    <p class="Upload-title-p">해당 페이지에서는 원하는 제품을 마켓에 올릴 수 있습니다.<br>
        마켓에 올린 제품은 <b>[내정보]</b> 페이지에서 확인하거나 회수할 수 있습니다</p>
</div>

<div class="container">
    <div class="left">
        <div class="Upload-img">
            이미지
        </div>
        <form method="post" enctype="multipart/form-data" class="Upload-img-form">
            <input type="file" class="Upload-img-input" name="chooseFile" id="chooseFile" accept="image/*">
            <label for="chooseFile" class="Upload-img-label">
                이미지 추가
            </label>
        </form>

        <button class="Upload-button Upload-button-left" onclick="open_modal()">CHECK</button>
    </div>

    <div class="right">
        <h2 class="contents-h2">상세 정보</h2>

        <ul class="contents-ul">
            <li class="contents-li"><p class="contents-p">제목 <span class="contents-span">*</span></p>
                <input type="text" name="title" class="contents-textarea contents-name" placeholder="필수 입력 사항입니다.">
            </li>
            <li class="contents-li"><p class="contents-p">내용 <span class="contents-span">*</span></p>
                <textarea name="comment" id="comment" cols="30" rows="10" class="comment"></textarea>
            </li>
            <li class="contents-li"><p class="contents-p">주소 <span class="contents-span">*</span></p>
                <input type="text" name="address" class="contents-textarea contents-address" placeholder="필수 입력 사항입니다.">
            </li>
            <li class="contents-li"><p class="contents-p">가격 <span class="contents-span">*</span></p>
                <input type="text" onkeyup="formatPhoneNumber()" name="price" class="contents-textarea contents-price" placeholder="필수 입력 사항입니다.">
            </li>
        </ul>

        <a href="/" class="Upload-button Upload-button-right cansleBtn">CANSLE</a>
    </div>
</div>
