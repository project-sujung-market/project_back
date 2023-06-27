<h2 id="myPageTitle">마이페이지</h2>
<form>
    <div class="form-group">
        <label for="usernumber">아이디</label>
        <input type="usernumber" name="uid" id="usernumber" placeholder="아이디" readonly>
    </div>
    <div class="form-group">
        <label for="username">이름</label>
        <input type="text" id="username" name="name" placeholder="사용자 이름" required>
    </div>
    <div class="form-group">
        <label for="phone-number">전화번호</label>
        <input type="phone-number" name="phone" id="phone-number" placeholder="전화번호를 입력하세요" required>
    </div>
    <div class="form-group">
        <label for="password">비밀번호</label>
        <input type="password" name="pass" id="password" placeholder="비밀번호를 입력하세요" required>
    </div>
    <div class="form-group">
        <label for="update-password">비밀번호 변경</label>
        <input type="update-password" id="update-password" placeholder="변경할 비밀번호를 입력하세요" required>
    </div>
    <div class="form-group">
        <h4>수원정보과학고 수정마켓</h4>
        <ul class="list1">
            <li><a href="#">
                    <img src="images/logo.png" alt=""></a>
                <div class="img-p">내 게시글</div>
            </li>
            <li><a href="#">
                    <img src="images/logo.png" alt=""></a>
                <div class="img-p">문의하기</div>
            </li>
            <li><a href="#">
                    <img src="images/logo.png" alt=""></a>
                <div class="img-p">내 포인트</div>
            </li>
        </ul>
        <button type="submit">저장</button>
    </div>
</form>