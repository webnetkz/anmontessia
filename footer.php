<footer>
<div class="footer">
    <img src="/public/img/logo.png" alt="ten yes logotype h" class="logoFooter" onclick="location.href = '#'">
    <div class="w25">
        <p class="head">О компании</p>
        <a href="#">О бренде</a>
        <a href="#footer">Контакты</a>
    </div>
    <div class="w25">
        <p class="head">Свяжитесь с нами</p>
        <a href="https://api.whatsapp.com/send?phone=<?=PHONE?>" style="display: flex; align-items: center;"><img src="/public/img/wp.png" ><span style="margin-left: 10px;">WhatsApp</span></a>
        <a href="tel:<?=PHONE?>" style="display: flex; align-items: center;"><img src="/public/img/phone.png" style="width: 24px;" ><span style="margin-left: 10px;">+ <?=PHONE?></span></a>
        <a href="#" style="display: flex; align-items: center;"><img src="/public/img/mail.png" style="width: 24px;"><span style="margin-left: 10px;"><?=MAIL?></span></a>
    </div>
    <div  class="w25" style="display: flex; align-items: flex-end;">
        <a href="<?=INST?>">
            <img src="/public/img/instagram.png" style="margin: 5px;" class="h">
        </a>
        <a href="">
            <img src="/public/img/tiktok.png" style="margin: 5px;" class="h">
        </a>
    </div>
</div>
</footer>
<script src="./public/js/main.js"></script>
</body>
</html>