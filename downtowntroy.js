
function initMapSD(){
    var options={
        zoom:14,
        center:{lat:42.73102911953505,lng:-73.6930486297341}
    }
    var map=new google.maps.Map(document.getElementById('mapSD'),options);
    
    var marker = new google.maps.Marker({
        position:{lat:42.73102911953505,lng:-73.6930486297341},
        map:map
    })
}

function initMapDBBQ(){
    var options={
        zoom:14,
        center:{lat:42.73459284921925,lng:-73.68923977370035}
    }
    var map=new google.maps.Map(document.getElementById('mapDBBQ'),options);
    
    var marker = new google.maps.Marker({
        position:{lat:42.73459284921925,lng:-73.68923977370035},
        map:map
    })
}
function initMapLP(){
    var options={
        zoom:14,
        center:{lat:42.73135456619631,lng:-73.6911016308029}
    }
    var map=new google.maps.Map(document.getElementById('mapLP'),options);
    
    var marker = new google.maps.Marker({
        position:{lat:42.73135456619631,lng:-73.6911016308029},
        map:map
    })
}

function initMapLC(){
    var options={
        zoom:14,
        center:{lat:42.72621383421891,lng:-73.69125521995274}
    }
    var map=new google.maps.Map(document.getElementById('mapLC'),options);
    
    var marker = new google.maps.Marker({
        position:{lat:42.72621383421891,lng:-73.69125521995274},
        map:map
    })
}

function initMapManorys(){
    var options={
        zoom:14,
        center:{lat:42.728915925979315,lng:-73.68941480275238}
    }
    var map=new google.maps.Map(document.getElementById('mapManorys'),options);
    
    var marker = new google.maps.Marker({
        position:{lat:42.728915925979315,lng:-73.68941480275238},
        map:map
    })
}

function initMapSnowman(){
    var options={
        zoom:14,
        center:{lat:42.77271764347874,lng:-73.67450380275064}
    }
    var map=new google.maps.Map(document.getElementById('snowMap'),options);
    
    var marker = new google.maps.Marker({
        position:{lat:42.77271764347874,lng:-73.67450380275064},
        map:map
    })
}

function initMapBB(){
    var options={
        zoom:14,
        center:{lat:42.73102533439805,lng:-73.68763231624318}
    }
    var map=new google.maps.Map(document.getElementById('mapBB'),options);
    
    var marker = new google.maps.Marker({
        position:{lat:42.73102533439805,lng:-73.68763231624318},
        map:map
    })
}

function initMapNH(){
    var options={
        zoom:14,
        center:{lat:42.73100171531077,lng: -73.6879566739159}
    }
    var map=new google.maps.Map(document.getElementById('mapNH'),options);
    
    var marker = new google.maps.Marker({
        position:{lat:42.73100171531077, lng:-73.6879566739159},
        map:map
    })
}

function sendMail() {
    Email.send({
        Host: "smtp.gmail.com",
        Username: "validationtesterf22@gmail.com",
        Password: "258255C2A9D1126E430BDFEAEC9944FCDB83",
        To: 'validationtesterf22@gmail.com',
        From: document.getElementById("email").value,
        Subject: "New Inquiry",
        Body: "Name: " + document.getElementById("name").value + "<br>Email: " + document.getElementById("email").value +
            "<br>Phone Number: " + document.getElementById("phone").value + "<br>Message:<br>" + document.getElementById("message").value
    }).then(
        message => alert("Message received. We will be in touch with you shortly!")
    );
}

function validateLoginForm() {
    let x = document.forms["loginForm"]["email"].value;
    if (x == "") {
        alert("Email must be filled out");
        clearLoginPasswordField();
        return false;
    } else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(loginForm.email.value))) {
        alert("You have entered an invalid email address!");
        clearLoginPasswordField();
        return false;
    }

    x = document.forms["loginForm"]["password"].value;
    var xl = x.length;
    if (x == "") {
        alert("Password must be filled out");
        clearLoginPasswordField();
        return false;
    } else if (xl < 8) {
        alert("Invalid password");
        clearLoginPasswordField();
        return false;
    }

}

function clearLoginPasswordField() {
    document.forms["loginForm"]["password"].value = "";
}

function validateSignUpForm() {
    let x = document.forms["signUpForm"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        clearSignUpPasswordField();
        return false;
    }

    x = document.forms["signUpForm"]["email"].value;
    if (x == "") {
        alert("Email must be filled out");
        clearSignUpPasswordField();
        return false;
    } else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(signUpForm.email.value))) {
        alert("You have entered an invalid email address!");
        clearSignUpPasswordField();
        return false;
    }

    x = document.forms["signUpForm"]["password"].value;
    var xl = x.length;
    if (x == "") {
        alert("Password must be filled out");
        clearSignUpPasswordField();
        return false;
    } else if (xl < 8) {
        alert("Password must be 8 or more characters");
        clearSignUpPasswordField();
        return false;
    }

    let y = document.forms["signUpForm"]["passwordConfirmation"].value;
    if (y == "") {
        alert("Please re-enter password");
        clearSignUpPasswordField();
        return false;
    } else if (!(x===y)) {
        alert("Passwords must match");
        clearSignUpPasswordField();
        return false;
    }


}

function clearSignUpPasswordField() {
    document.forms["signUpForm"]["password"].value = "";
    document.forms["signUpForm"]["passwordConfirmation"].value = "";
}

function changeColor(box){
    var row = document.getElementById(box);
    if(row.classList.contains("row-selected")){
        row.classList.remove("row-selected");
    }
    else{
        row.classList.add("row-selected");
    }
}

function registering(){
   alert("Thank you for registering!");
   window.location.reload(); 
}