<div style="display: none; max-width: 500px" id="CalculatorOffer" class="theme-modal-window">
    <form class="calculator-form" id="calculator_offer">
        @csrf
        <h3 class="modal__title">
            Мы сохраним ваш рассчет и скоро вам перезвоним:
        </h3>
        <div class="modal-form-wrap">
            <div class="input-wrap">
                <input class="field" type="text" name="offer_name_surname" id="offer_name_surname" placeholder="Иван Иванов" required>
                @error('name_surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-wrap">
                <input class="field phone_field" type="number" name="offer_phone" id="offer_phone" placeholder="067857647" required>
                @error('offer_phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-wrap">
                <input class="field" type="offer_email" name="offer_email" id="offer_email" placeholder="example@email.com">
                @error('offer_email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-wrap">
                <textarea
                    class="field"
                    name="offer_comment"
                    id="offer_comment"
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
            <button class="contacts-form__button" type="button" id="calculator_offer_btn">
                Отправить
            </button>
        </div>
    </form>
</div>
