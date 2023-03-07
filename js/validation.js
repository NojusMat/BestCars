//user id validation starts
function userid_validation(){
    'use strict';
    var userid_name = document.getElementById("userid");
    var userid_value = document.getElementById("userid").value;
    var userid_length = userid_value.length;
    if(userid_length<7 || userid_length>12)
    {
    document.getElementById('uid_err').innerHTML = 'Value must not be less than 7 characters and greater than 12 characters';
    userid_name.focus();
    document.getElementById('uid_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('uid_err').innerHTML = 'Valid user id';
    document.getElementById('uid_err').style.color = "#00AF33";
    }
    }
    //user id validation ends
    //user name validation starts
    function name_validation(){
    'use strict';
    var name_name = document.getElementById("name");
    var name_value = document.getElementById("name").value;
    var name_length = name_value.length;
    var letters = /^[a-zA-Z]+$/;
    if(name_length < 3 || !name_value.match(letters))
    {
    document.getElementById('name_err').innerHTML = 'Name must be longer than 3 character and contain only letters';
    name_name.focus();
    document.getElementById('name_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('name_err').innerHTML = 'Valid name';
    document.getElementById('name_err').style.color = "#00AF33";
    }
    }
    //user name validation ends
    //country validation starts
    function country_validation(){
    'use strict';
    var country_name = document.getElementById("region");
    var country_value = document.getElementById("region").value;
    if(country_value === "Default" || country_value === "--")
    {
    document.getElementById('region').innerHTML = 'You must select a region';
    country_name.focus();
    document.getElementById('region').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('region').innerHTML = 'Region selected.';
    document.getElementById('region').style.color = "#00AF33";
    }
    }
    //country validation ends

       //zip validation starts
       function zip_validation(){
        'use strict';
        var numbers = /^[0-9]+$/;
        var zip_name = document.getElementById("zip");
        var zip_value = document.getElementById("zip").value;
        var zip_length = zip_value.length;
        if(!zip_value.match(numbers) || zip_length !== 5)
        {
        document.getElementById('zip_err').innerHTML = 'You must enter a ZIP code, which must be numeric and must be at least 5 chracters long.';
        zip_name.focus();
        document.getElementById('zip_err').style.color = "#FF0000";
        }
        else
        {
        document.getElementById('zip_err').innerHTML = 'ZIP code entered';
        document.getElementById('zip_err').style.color = "#00AF33";
        }
        }
      //user City validation starts
      function city_validation(){
        'use strict';
        var city_name = document.getElementById("city");
        var city_value = document.getElementById("city_name").value;
        var city_length = city_value.length;
        var letters = /^[0-9a-zA-Z]+$/;
        if(city_length < 2 || !city_value.match(letters))
        {
        document.getElementById('city_err').innerHTML = 'city_name must be 2 chracters long and alphanuric chracters only.';
        city_name.focus();
        document.getElementById('city_err').style.color = "#FF0000";
        }
        else
        {
        document.getElementById('city_err').innerHTML = 'Valid city';
        document.getElementById('city_err').style.color = "#00AF33";
        }
        }
        //user name validation ends
    //email validation starts
    function email_validation(){
    'use strict';
    var mailformat = /^\w+([\.\-]?\w+)*@\w+([\.\-]?\w+)*(\.\w{2,3})+$/;
    var email_name = document.getElementById("email");
    var email_value = document.getElementById("email").value;
    var email_length = email_value.length;
    if(!email_value.match(mailformat) || email_length === 0)
    {
    document.getElementById('email_err').innerHTML = 'This is not a valid email format.';
    email_name.focus();
    document.getElementById('email_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('email_err').innerHTML = 'Valid email format';
    document.getElementById('email_err').style.color = "#00AF33";
    }
    }
    //email validation ends
    //recommendation validation starts
    function recommendation_validation(){
    'use strict';
     if ( (document.getElementById("ROnline").checked === false) && (document.getElementById("RAds").checked === false)&& (document.getElementById(" RWordOfMouth").checked === false)){
    document.getElementById('recommendation_err').innerHTML = 'Please select a Choice.';
    document.getElementById('recommendation_err').style.color = "#FF0000";
    document.getElementById("ROnline").checked = true;
    document.getElementById("RAds").checked = true;
    document.getElementById("RWordOfMouth").checked = true;
    }
    else
    {
    document.getElementById('recommendation_err').innerHTML = 'Choice selected';
    document.getElementById('recommendation_err').style.color = "#00AF33";
    }
    }
    //recommendation   validation ends
           //Phone validation starts
           function phone_validation(){
            'use strict';
            var numbers = /^^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$+$/;
            var phone_name = document.getElementById("phone");
            var phone_value = document.getElementById("phone").value;
            var phone_length = phone_value.length;
            if(!phone_value.match(numbers) || phone_length !== 10)
            {
            document.getElementById('phone_err').innerHTML = 'You must enter a valid phone number.';
            phone_name.focus();
            document.getElementById('phone_err').style.color = "#FF0000";
            }
            else
            {
            document.getElementById('phone_err').innerHTML = 'Phone Number entered';
            document.getElementById('phone_err').style.color = "#00AF33";
            }
            }