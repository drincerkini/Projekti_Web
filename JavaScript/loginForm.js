// pjesa e slider te Login Formes duke perdorur Java Script

var LoginForm = document.getElementById("loginForm");
var RegForm = document.getElementById("registerForm");
var Indicator = document.getElementById("indicator");

function register(){
    RegForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(100px)";
}

function login(){
    RegForm.style.transform = "translateX(300px)";
    LoginForm.style.transform = "translateX(300px)";
    Indicator.style.transform = "translateX(0px)";

}
/*-----------------------------------------------------------------------------------------------------------------------*/

//pjesa e validimit te login formes


document.addEventListener("DOMContentLoaded", function(ngjarja) {
    const BtnSubmit = document.getElementById('btnLF');

    const validate = (ngjarja) => {
        ngjarja.preventDefault();

        const fjalkalimi = document.getElementById('passwordLF');
        const emailin = document.getElementById('emailLF');
        const regexPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;

        
        if (emailin.value === "") {
            alert("Ju lutem shtoni email'in!");
            emailin.focus();
        }
        else if (!emailValid(emailin.value)) {
            alert("Ju lutem te shtoni email'in valid!");
            emailin.focus();
        }
        else if (fjalkalimi.value === "") {
            alert("Ju lutem shtoni Fjalkalimin!");
            fjalkalimi.focus();
        }
        else if(!regexPassword.test(fjalkalimi.value)){
            alert('Fjalkalimi juaj nuk eshta valid!');
        }
        else {
            alert('Ju jeni kyqur me sukses!');
        }
            
        }
        
        const emailValid = (email) => {
            const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
            return emailRegex.test(email.toLowerCase());
        }
        BtnSubmit.addEventListener('click', validate);
    
});


//pjesa e validimit te register formes

document.addEventListener("DOMContentLoaded",
function(ngjarja2) {
    const BtnSubmit = document.getElementById('btnRF');

    const validate = (ngjarja2) => {
        ngjarja2.preventDefault();
        
        const emrin = document.getElementById('emriRF');
        const mbiemri = document.getElementById('mbiemriRF');
        const emailin = document.getElementById('emailRF');
        const fjalkalimi = document.getElementById('passRF');
        const regexPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;

        if (emrin.value === "") {
            alert("Ju lutem shtoni emrin e Plote!");
            emrin.focus();
        }
        else if (mbiemri.value === "") {
            alert("Ju lutem shtoni mbiemrin!");
            mbiemri.focus();
        }
        else if (emailin.value === "") {
            alert("Ju lutem shtoni email'in!");
            emailin.focus();
        }
        else if (!emailValid(emailin.value)) {
            alert("Ju lutem te shtoni email'in valid!");
            emailin.focus();
        }
        else if (fjalkalimi.value === "") {
            alert("Ju lutem shtoni Fjalkalimin!");
            fjalkalimi.focus();
        }
        else if(!regexPassword.test(fjalkalimi.value)){
            alert('Fjalekalimi nuk eshte valid!');
        }
        else {
            alert('Ju jeni regjistruar me sukses!');
        }
            
    }

    const emailValid = (email) => {
        const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
        return emailRegex.test(email.toLowerCase());
    }

    BtnSubmit.addEventListener('click', validate);
});





