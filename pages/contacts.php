

<h1>Обратная связь</h1>
<form method = "POST" action = "/post/contact.php">

    <div style = "padding: 10px;">
        <p>Имя</p>
        <label class="mdc-text-field mdc-text-field--filled">
            <span class="mdc-text-field__ripple"></span>
            <span class="mdc-floating-label" id="my-label-id"></span>
            <input class="mdc-text-field__input" type="text" aria-labelledby="my-label-id" name = "username" />
            <span class="mdc-line-ripple"></span>
        </label>
        <p>Телефон</p>
        <label class="mdc-text-field mdc-text-field--filled">
            <span class="mdc-text-field__ripple"></span>
            <span class="mdc-floating-label" id="my-label-id"></span>
            <input class="mdc-text-field__input" type="text" aria-labelledby="my-label-id" name = "phone" />
            <span class="mdc-line-ripple"></span>
        </label>       
        <p>Адрес</p>
        <label class="mdc-text-field mdc-text-field--filled mdc-text-field--textarea mdc-text-field--no-label">
            <span class="mdc-text-field__ripple"></span>
            <span class="mdc-text-field__resizer">
                <textarea class="mdc-text-field__input" rows="8" cols="40" aria-label="Label" name="adress"></textarea>
            </span>
            <span class="mdc-line-ripple"></span>
        </label>
        
        <br>
        <input class="mdc-button mdc-button--raised mdc-button--leading" type = "submit" name = "отправить" value = "отправить" />
    </div>

</form>
