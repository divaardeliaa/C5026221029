        function imgSlider(anything){
            document.querySelector('.foto-diva').src=anything;
        }

            $(window).scroll(function() {
        if ($(window).scrollTop() >= 50) {
            $('.navbar').css('background', 'transparent');
        } else {
            $('.navbar').css('background', '#121826');
        } });   

        function validateForm() {
  
            var name = document.getElementById("fname");
            var mail = document.getElementById("email");
            var message = document.getElementById("message");

        
            if  (name.value == "") {
                alert('Name must be filled out');
                name.focus();
                return false;
            }

        
            var email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.test(mail.value)) {
                alert('Invalid Email Address');
                mail.focus();
                return false;
            
            }  

            else{
              alert("Message has already sent! Thank you");
          
        }
        
    }
