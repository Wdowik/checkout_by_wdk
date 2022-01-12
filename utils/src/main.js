console.log($);
console.log(jQuery);



const login              = document.getElementById('login');
const password           = document.getElementById('password');
const passwordrepeat     = document.getElementById('passwordrepeat');
const namee              = document.getElementById('name');
const lastname           = document.getElementById('lastname');
const country            = document.getElementById('country');
const address            = document.getElementById('address');
const postcode           = document.getElementById('postcode');
const city               = document.getElementById('city');
const phonenumber        = document.getElementById('phonenumber');
const test               = document.getElementById('test');
const comment            = document.getElementById('comment');



    $(window).resize(function() {
        if (window.matchMedia('(min-width: 800px)').matches) {
              
   
    
            
    
            };
          
        })


$('div.sum').text('Łącznie 115,00zł');


$("input[id=statute]").on("click", function() {
    if($(this).prop("checked")){
        if($(window).width() > '746'){
        $('div.confirm').css('left', 611);
        }
        if($(window).width() < '746'){
            $('div.confirm').css('left', 231);
        }
    } else {
        
        $('div.confirm').css('left', -1000);
        
    }
});

$("input[id=create_account]").on("click", function() {
    
    if($(this).prop("checked")){

        if($(window).width() < '746'){
            $('div.continue').css('left', 244);
            $('div.continue').css('top', 322);

            $('input[id="button_login"]').css('left', -1000);

            $('div.s-register').css('left', -34);
            $('div.s-register').css('top', 9);

            $('div.text247').css('left', -423);
            $('div.textdpd').css('left', -475);
            $('div.text_dpddownload').css('left', -525);
            $('div.price_text247').css('left', -426);
            $('div.price_textdpd').css('left', -476);
            $('div.price_textdpddownload').css('left', -524);
            $('input[id="first_payu"]').css('left', -1000);
            $('input[id="first_upon_receipt"]').css('left', -1000);
            $('input[id="second_bank"').css('left', -1000);
            $('div.textcreateaccount').css('left', -300);
            $('div.price_textdpd').css('left', -300);
            $('div.price_textdpddownload').css('left', -300);
            $('div.create_account').css('left', -3000);
            $('div.statue').css('left', -61);
            $('div.statue').css('top', 534);
            $('div.info_product').css('top', 360);
            $('div.comment').css('left', -69);
        }

        if($(window).width() > '746'){

        $('div.s-register').css('left', -49);
        $('div.s-register').css('top', 29);


        $('input[id="button_login"]').css('left', -1600);

        $('div.continue').css('left', 342);
        $('div.continue').css('top', 413);
        $('div.text247').css('left', -423);
        $('div.textdpd').css('left', -475);
        $('div.text_dpddownload').css('left', -525);
        $('div.price_text247').css('left', -426);
        $('div.price_textdpd').css('left', -476);
        $('div.price_textdpddownload').css('left', -524);
        $('input[id="first_payu"]').css('left', -1000);
        $('input[id="first_upon_receipt"]').css('left', -1000);
        $('input[id="second_bank"').css('left', -1000);
        $('div.textcreateaccount').css('left', -300);
        $('div.price_textdpd').css('left', -300);
        $('div.price_textdpddownload').css('left', -300);
        $('div.create_account').css('left', -3000);
        $('div.statue').css('left', -52);
        $('div.statue').css('top', 514);
        $('div.continue').css('left', 653);
        $('div.continue').css('top', 330);
        $('div.info_product').css('top', 360);

        }
    }
    
});


$("input[id=select_delivery247]").on("click", function() {


    const error = validate();
    
    if(error === '') {
        if($(this).prop("checked")){
        if($(window).width() > '746'){
            $('div.paymount_payu').css('left', 617);
            $('div.paymount_payu').css('top', 162);
            $('div.paymount_bank').css('left', 618);
            $('div.paymount_bank').css('top', 215);
    
            $('div.paymount_upon_receipt').css('left', -342);

            $('div.statue').css('top', 514);
    
            $('input[id="first_payu"]').css('left', 11087);
            $('input[id="first_payu"]').css('top', 80);
            $('input[id="first_upon_receipt"]').css('left', -342);
            $('input[id="second_bank"]').css('left', 11088);
            $('input[id="second_bank"]').css('top', 132);

            $('input[id="select_delivery247"]').css('left', -323);
            $('div.text247').css('left', -323);
            $('div.price_text247').css('left', -323);
    
            $('input[id="select_dpd"]').css('left', -323);
            $('div.textdpd').css('left', -323);
            $('div.price_textdpd').css('left', -323);
    
            $('input[id="select_dpddownload"]').css('left', -323);
            $('div.text_dpddownload').css('left', -323);
            $('div.price_textdpddownload').css('left', -323);
        }

            if($(window).width() < '746'){

    

            $('div.statue').css('left', 11055);

            $('div.paymount_payu').css('left', 201);
            $('div.paymount_payu').css('top', 199);
            $('div.paymount_bank').css('left', 202);
            $('div.paymount_bank').css('top', 254);
    
            $('div.paymount_upon_receipt').css('left', -342);
    
            $('input[id="first_payu"]').css('left', 11053);
            $('input[id="first_payu"]').css('top', 136);
            $('input[id="first_upon_receipt"]').css('left', -342);
            $('input[id="second_bank"]').css('left', 11054);
            $('input[id="second_bank"]').css('top', 193);
           
    
            $('input[id="select_delivery247"]').css('left', -323);
            $('div.text247').css('left', -323);
            $('div.price_text247').css('left', -323);
    
            $('input[id="select_dpd"]').css('left', -323);
            $('div.textdpd').css('left', -323);
            $('div.price_textdpd').css('left', -323);
    
            $('input[id="select_dpddownload"]').css('left', -323);
            $('div.text_dpddownload').css('left', -323);
            $('div.price_textdpddownload').css('left', -323);
    
           
    
            $('div.sum').text('Łącznie 125,99zł');
    
            
            }
    

       
    
            
    
        } else {
            $('h1').text('3!');
    
        }
        
    }
    else {
        document.querySelector('.res').innerHTML = `<div class="error-msg">${error}</div>`
    }
    

    
});

$("input[id=select_dpd]").on("click", function() {
    const error = validate();
    
    if(error === '') {
        if($(this).prop("checked")){
            if($(window).width() < '746'){
    
            $('div.paymount_payu').css('left', 201);
            $('div.paymount_payu').css('top', 199);
            $('div.paymount_bank').css('left', 202);
            $('div.paymount_bank').css('top', 254);
            $('div.paymount_upon_receipt').css('left', 202);
            $('div.paymount_upon_receipt').css('top', 149);
            
    
            $('input[id="first_payu"]').css('left', 11052);
            $('input[id="first_payu"]').css('top', 136);
            $('input[id="first_upon_receipt"]').css('left', 11052);
            $('input[id="first_upon_receipt"]').css('top', 85);
            $('input[id="second_bank"]').css('left', 11052);
            $('input[id="second_bank"]').css('top', 192);
    
            $('input[id="select_delivery247"]').css('left', -323);
            $('div.text247').css('left', -323);
            $('div.price_text247').css('left', -323);
    
            $('input[id="select_dpd"]').css('left', -323);
            $('div.textdpd').css('left', -323);
            $('div.price_textdpd').css('left', -323);
    
            $('input[id="select_dpddownload"]').css('left', -323);
            $('div.text_dpddownload').css('left', -323);
            $('div.price_textdpddownload').css('left', -323);
    
            
    
            $('div.sum').text('Łącznie 128,00zł');
            }

            if($(window).width() > '746'){

    
                $('div.paymount_payu').css('left', 617);
                $('div.paymount_payu').css('top', 162);
                $('div.paymount_bank').css('left', 618);
                $('div.paymount_bank').css('top', 215);    

                $('div.paymount_upon_receipt').css('left', -1000);
                


                $('input[id="first_payu"]').css('left', 11087);
                $('input[id="first_payu"]').css('top', 80);

                $('input[id="second_bank"]').css('left', 11088);
                $('input[id="second_bank"]').css('top', 132);
                $('input[id="first_upon_receipt"]').css('left', -1000);
               
            
    
            $('input[id="select_delivery247"]').css('left', -323);
            $('div.text247').css('left', -323);
            $('div.price_text247').css('left', -323);
    
            $('input[id="select_dpd"]').css('left', -323);
            $('div.textdpd').css('left', -323);
            $('div.price_textdpd').css('left', -323);
    
            $('input[id="select_dpddownload"]').css('left', -323);
            $('div.text_dpddownload').css('left', -323);
            $('div.price_textdpddownload').css('left', -323);
    
            
    
            $('div.sum').text('Łącznie 128,00zł');
            }
    
           
           
    
            
        }
         else {
    
        }
    }
    else {
        document.querySelector('.res').innerHTML = `<div class="error-msg">${error}</div>`
    }
    
});

$("input[id=select_dpddownload]").on("click", function() {
    const error = validate();
    
    if(error === '') {
        if($(this).prop("checked")){
            
    
            if($(window).width() < '746'){
            $('div.paymount_upon_receipt').css('left', 202);
            $('div.paymount_upon_receipt').css('top', 122);
    
            $('div.paymount_payu').css('left', -342);
            $('div.paymount_bank').css('left', -342);
            $('div.paymount_bank').css('top', -297);
    
            $('input[id="first_upon_receipt"]').css('left', 11054);
            $('input[id="first_upon_receipt"]').css('top', 61);
            $('input[id="first_payu"]').css('left', -342);
            $('input[id="second_bank"]').css('left', -323);
    
            $('input[id="select_delivery247"]').css('left', -323);
            $('div.text247').css('left', -323);
            $('div.price_text247').css('left', -323);
    
            $('input[id="select_dpd"]').css('left', -323);
            $('div.textdpd').css('left', -323);
            $('div.price_textdpd').css('left', -323);
    
            $('input[id="select_dpddownload"]').css('left', -323);
            $('div.text_dpddownload').css('left', -323);
            $('div.price_textdpddownload').css('left', -323);
    
            
    
            $('div.sum').text('Łącznie 137,00zł');
            }

            if($(window).width() > '746'){
                $('div.paymount_upon_receipt').css('left', 584);
            $('div.paymount_upon_receipt').css('top', 160);
    
            $('div.paymount_payu').css('left', -342);
            $('div.paymount_bank').css('left', -342);
            $('div.paymount_bank').css('top', -297);
    
            $('input[id="first_upon_receipt"]').css('left', 11052);
            $('input[id="first_upon_receipt"]').css('top', 76);
            $('input[id="first_payu"]').css('left', -342);
            $('input[id="second_bank"]').css('left', -323);
    
            $('input[id="select_delivery247"]').css('left', -323);
            $('div.text247').css('left', -323);
            $('div.price_text247').css('left', -323);
    
            $('input[id="select_dpd"]').css('left', -323);
            $('div.textdpd').css('left', -323);
            $('div.price_textdpd').css('left', -323);
    
            $('input[id="select_dpddownload"]').css('left', -323);
            $('div.text_dpddownload').css('left', -323);
            $('div.price_textdpddownload').css('left', -323);
    
            
    
            $('div.sum').text('Łącznie 137,00zł');
    
           
            }
        }
    }
           
        
        
    
    
});

$(document).ready(function(){
    $(".submit_continue").on("click", function() {
   
        if($(window).width() > '746'){ 
        $('div.s-register').css('left', -11150);
        $('input[id="button_login"]').css('left', -1600);

        $('div.continue').css('left', -273);
        
        $('div.text247').css('left', 558);
        $('input[id="select_delivery247"]').css('left', 11046);
        $('input[id="select_delivery247"]').css('top', 65);
        $('input[id="select_dpd"]').css('left', 11046);
        $('input[id="select_dpd"]').css('top', 119);
        $('input[id="select_dpddownload"]').css('left', 11046);
        $('input[id="select_dpddownload"]').css('top', 172);


        $('div.price_text247').css('left', 780);
        
        $('div.textdpd').css('left', 558);
        $('div.text_dpddownload').css('top', 254);
        $('div.text_dpddownload').css('left', 559);
        $('div.price_textdpd').css('left', 781);
        $('price_text247').css('top', 148);
        $('price_textdpd').css('top', 201);
        $('div.price_textdpddownload').css('left', 782);
        
        $('div.statue').css('left', 11049);
        $('div.statue').css('top', 515);
       

            $('div.text_edit_createaccount').css('left', 538);
            $('div.text_edit_createaccount').css('top', 93);
            
            $('div.edit_data').css('left', 644);
            $('div.edit_data').css('top', 62);
            $('div.paymount_payu').css('left', -1000);

            $('div.save_newsletter').css('top', 502);

           
            

        }

   
        
        

        
        
        if($(window).width() < '746'){  

        $('div.statue').css('left', 11055);
        $('div.statue').css('top', 534);

        $('div.edit_data').css('left', 287);
        $('div.edit_data').css('top', 59);

        $('div.text_edit_createaccount').css('left', 177);
        $('div.text_edit_createaccount').css('top', 89);

        $('div.res').css('left', 65);

        $('div.create_account').css('left', -300);
        $('div.s-register').css('left', -11150);
        $('div.continue').css('left', -342);
        
        $('div.text247').css('left', 182);
        $('input[id="select_delivery247"]').css('left', 11052);
        $('input[id="select_delivery247"]').css('top', 85);
        $('input[id="select_dpd"]').css('left', 11052);
        $('input[id="select_dpd"]').css('top', 138);
        $('input[id="select_dpddownload"]').css('left', 11052);
        $('input[id="select_dpddownload"]').css('top', 192);
        $('div.price_text247').css('left', 369);
        
        $('div.textdpd').css('left', 183);
        $('div.text_dpddownload').css('top', 254);
        $('div.text_dpddownload').css('left', 183);
        $('div.price_textdpd').css('left', 369);
        $('price_text247').css('top', 148);
        $('price_textdpd').css('top', 201);
        $('div.price_textdpddownload').css('left', 369);
        
        

   
   
   
}
    })
});

$(document).ready(function(){
    $(".edit_data").on("click", function() {


        if($(window).width() > '746'){  
        

        $('div.text_edit_createaccount').css('left', -300);
        $('div.edit_data').css('left', -300);

        $('div.s-register').css('left', -49);
        $('div.s-register').css('top', 29);
        $('div.continue').css('left', 342);
        $('div.continue').css('top', 413);
        $('div.text247').css('left', -423);
        $('div.textdpd').css('left', -475);
        $('div.text_dpddownload').css('left', -525);
        $('div.price_text247').css('left', -426);
        $('div.price_textdpd').css('left', -476);
        $('div.price_textdpddownload').css('left', -524);
        $('input[id="first_payu"]').css('left', -1000);
        $('input[id="first_upon_receipt"]').css('left', -1000);
        $('input[id="second_bank"').css('left', -1000);
        $('div.textcreateaccount').css('left', -300);
        $('div.price_textdpd').css('left', -300);
        $('div.price_textdpddownload').css('left', -300);
        $('div.create_account').css('left', -3000);
        $('div.statue').css('left', -52);
        $('div.statue').css('top', 514);
        $('div.continue').css('left', 653);
        $('div.continue').css('top', 330);
        $('div.info_product').css('top', 360);

        $('div.paymount_pay').css('left', -1000);
        $('div.paymount_upon_receipt').css('left', -1000);
        $('div.paymount_bank').css('left', -1000);

        $('input[id="select_delivery247"]').css('left', -1000);
        $('input[id="select_dpd"]').css('left', -1000);
        $('input[id="select_dpddownload"]').css('left', -1000);

        }
        

   
        if($(window).width() < '746'){  
        
        $('div.continue').css('left', 233);


        $('div.text_edit_createaccount').css('left', -300);
        $('div.edit_data').css('left', -300);

        $('div.s-register').css('left', -49);
        $('div.s-register').css('top', 29);

        $('div.text247').css('left', -423);
        $('div.textdpd').css('left', -475);
        $('div.text_dpddownload').css('left', -525);
        $('div.price_text247').css('left', -426);
        $('div.price_textdpd').css('left', -476);
        $('div.price_textdpddownload').css('left', -524);
        $('input[id="first_payu"]').css('left', -1000);
        $('input[id="first_upon_receipt"]').css('left', -1000);
        $('input[id="second_bank"').css('left', -1000);
        $('div.textcreateaccount').css('left', -300);
        $('div.price_textdpd').css('left', -300);
        $('div.price_textdpddownload').css('left', -300);
        $('div.create_account').css('left', -3000);
        $('div.statue').css('left', -46);
        $('div.statue').css('top', 514);
        $('div.continue').css('top', 330);
        $('div.info_product').css('top', 360);

        $('div.paymount_pay').css('left', -1000);
        $('div.paymount_upon_receipt').css('left', -1000);
        $('div.paymount_bank').css('left', -1000);

        $('input[id="select_delivery247"]').css('left', -1000);
        $('input[id="select_dpd"]').css('left', -1000);
        $('input[id="select_dpddownload"]').css('left', -1000);
        

   
   
   
}
    })
});

$(document).ready(function(){
     $(".submit").on("click", function() {

    const error = validate();
    
    if(error === '') {
        sendByAjax();
    }
    else {

        document.querySelector('.res').innerHTML = `<div class="error-msg">${error}</div>`

       
    }
     })
});




function validate() {

    let err = '';

    if(login.value.length == 0) {
        err = 'Zaloguj się lub wypełnij formularz rejestracyjny.';
    }

    if(password.value.length === 0) {
        err = 'Zaloguj się lub wypełnij formularz rejestracyjny.';
    }

    if(passwordrepeat.value.length === 0) {
        err = 'Zaloguj się lub wypełnij formularz rejestracyjny.';
    }

    if(namee.value.length === 0) {
        err = 'Zaloguj się lub wypełnij formularz rejestracyjny.';
    }

    if(lastname.value.length === 0) {
        err = 'Zaloguj się lub wypełnij formularz rejestracyjny.';
    }

    if(postcode.value.length === 0) {
        err = 'Zaloguj się lub wypełnij formularz rejestracyjny.';
    }

    if(city.value.length === 0) {
        err = 'Zaloguj się lub wypełnij formularz rejestracyjny.';
    }

    if(phonenumber.value.length === 0) {
        err = 'Zaloguj się lub wypełnij formularz rejestracyjny.';
    }


    return err;
}


function sendByAjax() {

    const xhr = new XMLHttpRequest();

    const delivery       = $("input[name=delivery]:checked").val();
    const payment        = $("input[name=payment]:checked").val();
    const other_address  = $("input[name=other_address]:checked").val();
    const statute         = $("input[name=statute]:checked").val();

    
    xhr.onload = function() {
        if(this.status === 200) {

            document.querySelector('.res').innerHTML = `<div class="ok-msg">${this.responseText}</div>`;


            if(this.responseText[0] == 'g'){
                $('div.edit_data').css('left', -1000);
                $('div.text_edit_createaccount').css('left', -1000);
                $('input[id="first_payu"]').css('left', -1000);
                $('div.paymount_payu').css('left', -1000);
                $('input[id="second_bank"]').css('left', -1000);
                $('div.paymount_bank ').css('left', -1000);
                $('div.info_product ').css('left', -1000);
                $('div.quantity').css('left', -1000);
                $('div.sum').css('left', -1000);
                $('div.code').css('left', -1000);
                $('div.comment').css('left', -1000);
                $('div.save_newsletter').css('left', -1000);
                $('div.text_newsletter').css('left', -1000);
                $('div.statue').css('left', -1000);
                $('div.text_statute').css('left', -1000);
                $('div.confirm').css('left', -1000);
                $('div.paymount_upon_receipt').css('left', -1000);
                $('input[id="first_upon_receipt"]').css('left', -1000);
                $('div.res').css('left', -34);
            } else {

            }
        }
    }


    xhr.open('POST', 'utils/src/question.php', true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    

 
      xhr.send('login='+ login.value + '&password='+ password.value + '&passwordrepeat='+ passwordrepeat.value + '&name='+ namee.value
     + '&lastname='+ lastname.value + '&country='+ country.value + '&address='+ address.value + '&postcode='+ postcode.value
      + '&city='+ city.value + '&phonenumber='+ phonenumber.value + '&delivery=' + delivery + '&payment=' + payment + '&other_address=' + other_address + '&statute=' + statute + '&comment=' + comment.value);


}


