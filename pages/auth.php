<form method="POST" action="/post/login.php">
    <div style="padding: 10px;">
        <h1>Авторизация</h1>
        <p>Имя пользователя</p>
        <label class="mdc-text-field mdc-text-field--filled">
            <span class="mdc-text-field__ripple"></span>
            <span class="mdc-floating-label" id="my-label-id"></span>
            <input class="mdc-text-field__input" type="text" aria-labelledby="my-label-id" name="login" />
            <span class="mdc-line-ripple"></span>
        </label>
        <p>Пароль</p>
        <label class="mdc-text-field mdc-text-field--filled">
            <span class="mdc-text-field__ripple"></span>
            <span class="mdc-floating-label" id="my-label-id"></span>
            <input class="mdc-text-field__input" type="password" aria-labelledby="my-label-id" name="password" />
            <span class="mdc-line-ripple"></span>
        </label>
        <br><br>
        <input class="mdc-button mdc-button--raised mdc-button--leading" type="submit" name="send"
            value="авторизация" />
    </div>
</form>