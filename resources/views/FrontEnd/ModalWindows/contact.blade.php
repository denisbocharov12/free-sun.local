<div style="display: none; max-width: 500px" id="ModalContacts" class="theme-modal-window">
    <form class="contacts-form" id="modal_offer">
        @csrf
        <h3 class="modal__title">
            Оставьте заявку, если есть вопросы:
        </h3>
        <div class="modal-form-wrap">
            <div class="input-wrap">
                <input class="field" type="text" name="name_surname" id="modal_name_surname" placeholder="Иван Иванов" required>
                @error('name_surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-wrap">
                <input class="field phone_field" type="number" name="phone" id="modal_phone" placeholder="067857647" required>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-wrap">
                <input class="field" type="email" name="email" id="modal_email" placeholder="example@email.com">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-wrap">
                <textarea
                    class="field"
                    name="comment"
                    id="modal_offer_comment"
                    placeholder="Комментарий..."
                ></textarea>
                @error('comment')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="modal-form-submit">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Arcu amet, adipiscing tincidunt pellentesque sed
                adipiscing condimentum at.
            </p>
            <button class="contacts-form__button" type="button" id="modal_offer_btn">
                Отправить
            </button>
        </div>
    </form>
</div>
