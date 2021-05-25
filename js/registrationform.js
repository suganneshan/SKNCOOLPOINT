
$(document).ready(function(){
    $("#submit_rgf").click(function(){
        var name = $("#r_name").val();
        var email = $("#r_email").val();
        var service = $('#r_service').val();
        var phone = $("#r_phone").val();
        var location = $("#r_location").val();
        
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
            $("#r_name").focus();            
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
            $("#r_email").focus();
            return false;
        }
        
             
        else if(service.length == "")
        {
            
              Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please Select Your service',
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
            $("#r_phone").focus();
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
            $("#r_location").focus();
            return false;
        }       
       
    });
  });
  /*  form*/