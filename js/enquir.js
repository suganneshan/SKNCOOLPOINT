
$(document).ready(function(){
    $("#submit_enq").click(function(){
        var name = $("#e_name").val();
        var location = $("#e_location").val();
        var email = $("#e_email").val();
        var phone = $("#e_phone").val();
        var message = $("#e_message").val();
        
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
            $("#e_name").focus();            
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
            $("#e_location").focus();
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
            $("#e_email").focus();
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
            $("#e_phone").focus();
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
            $("#e_message").focus();
            return false;
        }
  
       
    });
  });
  /*  form*/