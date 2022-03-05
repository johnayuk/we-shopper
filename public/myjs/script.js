function previewFile(input) {
    let file = $("input[type=file]").get(0).file[0];
    if(file){
        let reader = new FileReader();
        reader.onload = function(){
            $("#previewImg").attr("src",reader.result);
        }
        reader.readAsDataURL(file);
    }  
}
        (function () {

                       //create a stripe client
                       var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');
                       //create an instance of element an elemant
                       var stripe  = stripe.element();
           
                       //custom styling can be passed to option when creating  
                       //(note that this demo uses a wider set of styles than the guide below) 
                       var style = {
                           base: {
                                       color: '#32325d',
                                       lineHeight: '18px',
                                       fontFamily: '"Helvetica Neu",Helvetica, sans-serif',
                                       fontSnoothing: 'antialiased',
                                       fontSize: '16px',
                                       '::placeholder': {
                                           color: '#aab7c4'
                                       }
                                   },
           
                                   invalid: {
                                       color: '#fa755a',
                                       iconColor: '#fa755a'
                                   }
           
                       };
                 
                       
                           // Create an instance of the card Element
                           var card = elements.create('card', {style: style});
           
                           // Add an instance of the card Element into the 'card-element' </div>
           
                           card.mount('card-element');
                           
                           //Handle real-time validation from the card element </div>
                            card.addEventListener('change', function(event){
                                   var displayError = document.getElementById('card-errors');
                                   if(event.error){
                                       displayError.textContent = event.error.message;
                                   } else {
                                       displayError.textContent = "";
                                   }
                                });
                                
                                
           
                                   // Handle form submition
                                   var form = document.getElementById('payment-form');
                                   form.addEventListener('submit', function(event){
                                       event.preventDefault();
           
                                       stripe.createToken(card), then (function(result){
                                           if(result.error){
                                               //inform the user if there was an error
                                               var errorElement = document.getElementById('card-errors');
                                               errorElement.textContent = result.error.message;
                                           } else{
                                               //send the token to your server
                                               stripeTokenHandler(result.token);
                                           }        
                                       });
                                   });
           
           
 


                
            })();

      
