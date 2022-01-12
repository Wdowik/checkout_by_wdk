<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, inital-scale=1-0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link href="/utils/src/style.css" rel="stylesheet">
        <title>Testowanko</title>
    </head>
    <body>
    <h1></h1>

    <div class="res"></div>
    <div class="error-msg"></div>

    <div class="textcreateaccount">Stwórz nowe konto</div>
    <div class="text_edit_createaccount">(Edytuj dane do stworzenia nowego konta)</div>

    <div class='edit_data'>
           <button class="editdata">Edytuj</button>
        </div>

    <div class='continue'>
           <button class="submit_continue">Kontynuuj zakupy</button>
        </div>

    <div class="text247">Paczkomaty 24/7</div> 
    <div class="price_text247"><b> 10,99 zł</b></div>

    <div class="textdpd">Kurier DPD</div>
    <div class="price_textdpd"><b>18,00 zł</b></div>

    <div class="text_dpddownload">Kurier DPD pobranie</div>
    <div class="price_textdpddownload"><b>22,00 zł</b></div>
    
    <div class="paymount_payu">PayU</div> 

    <div class="paymount_upon_receipt">Płatność przy odbiorze</div> 

    <div class="paymount_bank">Przelew bankowy zwykły</div> 

    <div class='info_product'>
            <b>Testowy produkt:      115 zł</b>
        </div>

     <div class='quantity'>Ilość: 1</div>   

     <div class='sum'></div>

     <div class='confirm'>
           <button class="submit">Potwierdź zakup</button>
        </div>

    <div class='text_newsletter'>Zapisz się, aby otrzymywać newsletter</div>    

    <div class='text_statute'>Zapoznałem się z Regulaminem zakupów</div>

    <div class='color-background'></div>

    

    <div class='login'>
    <input id="button_login" type="button" class="button" name="login" value="Logowanie"></input>
    <div class="create_account">
        <input type="checkbox" id="create_account" name="create_account"> 
    </div>
        
        <div class="s-register">
        <form id="sendQ" method='post'>            
            <input id="login"                              cols="30" rows="10" placeholder="Login">
            <input id="password"        type="password"    cols="30" rows="10" placeholder="Hasło">
            <input id="passwordrepeat"  type="password"    cols="30" rows="10" placeholder="Potwierdź hasło">
            <input id="name"                               cols="30" rows="10" placeholder="Imię*">
            <input id="lastname"                           cols="30" rows="10" placeholder="Nazwisko*">
            <select id="country">
                                                           <option value="Polska">Polska</option>
                                                           <option value="Węgry">Węgry</option>
                                                           <option value="Kambodża">Kambodża</option>
             </select> 
            <input id="address"                            cols="30" rows="10" placeholder="Adres">
            <input id="postcode"                           cols="30" rows="10" placeholder="Kod pocztowy*">
            <input id="city"                               cols="30" rows="10" placeholder="Miasto*">
            <input id="phonenumber"                        cols="30" rows="10" placeholder="Telefon*">
            <select id="test">
            <input type="radio" id="select_delivery247" name="delivery" value="1">

            <input type="radio" id="select_dpd"         name="delivery" value="2">
 
            <input type="radio" id="select_dpddownload" name="delivery" value="3">

            <input type="radio" id="first_payu"          name="payment" value="4">
 
            <input type="radio" id="first_upon_receipt"  name="payment" value="5">

            <input type="radio" id="second_bank"         name="payment" value="6">
            </select>
            
            

            <form id="check-address">
            <input type="checkbox" id="other_address" name="other_address">
            </form> Dostawa pod inny adres

            <div class='statue'>
            <input type="checkbox" id="statute" name="statute"> 
            </div>


            
        </form>

        </div>


        <div class='code'>
           <input type="button" class="discount_code" name="discount_code" value="Dodaj kod rabatowy"></input>
        </div>

        <div class='comment'>
            <textarea id='comment' name='text_comment' placeholder='Komentarz'></textarea>
        </div>

        <div class="save_newsletter">
        <input type="checkbox" id="save_newsletter" name="save_newsletter"> 
    </div>

        

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="./utils/src/main.js"></script>
    </body>
</html>