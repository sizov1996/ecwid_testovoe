<? include("header.php") ?>
<div class="page-content">
    <h2>Задача:</h2>
    <p>Разработать форму обратной связи, через которую люди смогут делиться своими контактами и задать вопрос. При отправке формы данные должны отправляться на почту join@ecwid.com</p>
    <div class="block-form">
        <form action="/send.php" class="form-feedback" method="post">
            <p><b>Остались вопросы?</b></p>
            <p>оставьте заявку в форме ниже, и мы свяжемся с Вами</p>
            <div class="form-inputs">
                <input type="text" name="name" placeholder="Ваше имя*" size="40" class="name-form" required>
                <input type="text" name="phone"  placeholder="Ваш телефон*" class="phone-form" required>
                <input type="text" name="email" placeholder="Ваш e-mail*" class="email-form" required>
                <label>
                    <p class="date-label">Укажите вашу дату рождения</p>
                    <input type="date" name="date" class="date-form" required>
                </label>
                <textarea rows="10" cols="45" name="text" class="questiuon" placeholder="Задайте свой вопрос" required></textarea>
                <input type="submit" value="Задать вопрос" class="send-form">
            </div>
        </form>
    </div>
</div>
<? include("footer.php") ?>