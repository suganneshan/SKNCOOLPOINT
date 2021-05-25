/*contact fuction */
$(document).ready(function(){
    $("#submit_reg").click(function(){
        var name = $("#C_name").val();
        var location = $("#C_location").val();
        var email = $("#C_email").val();
        var phone = $("#C_phone").val();
        var message = $("#C_message").val();
        var rating= $("#C_rating").val();
        
        if(name.length == "")
        {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please  Fill Your Name',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                  }
              });
            $("#C_name").focus();            
            return false;
        }       
        
        else if(location.length == "")
        {
            
              Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please Fill Your Address',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                  }
              });
            $("#C_location").focus();
            return false;
        }       

        
        else if(email.length == "")
        {
            
              Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please Fill your Email And Use Only Gmail Account',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                  }
              });
            $("#C_email").focus();
            return false;
        }
  
        else if(phone.length == "")
        {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please fill your Phone Number',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                  }
              })
            $("#C_phone").focus();
            return false;
        }
                
        else if(message.length == "")
        {
            
              Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please Fill Your message',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                  }
              });
            $("#C_message").focus();
            return false;
        }

        else if(rating.length == "")
        {
            
              Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please Fill Your Rating',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                  }
              });
            $("#C_message").focus();
            return false;
        }
       
    });
});
/*  form*/

