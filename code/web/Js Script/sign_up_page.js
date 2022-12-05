let password1 = document.querySelector('.type_password')
let password2 = document.querySelector('.type_retype_password')
let pw_checker1 = document.querySelector('.password_checker')
let pw_checker2 = document.querySelector('.password_checker_two')
let pw_warning = document.querySelector('.password_warning')
let alphabet = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
let symbol = "~!@#$%^&*_-+=`|(){}[]:;\"'<>,.?/"
password1.addEventListener('keyup',(event)=>{
    let temp = event.target
    let pw = temp.value
    let strength = 0
    let upper = 0
    let lower = 0
    let special = 0
    //check length
    if(pw.length>0){
        strength++
    }
    if(pw.length>3){
        strength++
    }
    if(pw.length>7){
        strength++
    }
    //check upper and lower case
    for(i=0;i<alphabet.length;i++){
        if(pw.includes(alphabet[i])){
            upper++
        }
        if(pw.includes(alphabet[i].toLowerCase())){
            lower++
        }
    }
    if(upper!=0 && lower!=0){
        strength++;
    }
    //check nomor
    for(i=0;i<=9;i++){
        if(pw.includes(i)){
            strength++
            break
        }
    }
    //check symbol 
    for(i=0;i<symbol.length;i++){
        if(pw.includes(symbol[i])){
            special=1
            break
        }else{special=0}
    }
    //ubah html
    if(strength<2 && special==0){
        pw_checker1.style.backgroundColor="red"
        pw_checker1.innerHTML=" Weak Password "
    }else if(strength<4 && special==0){
        pw_checker1.style.backgroundColor="orange"
        pw_checker1.innerHTML=" Medium Password "
    }else if(special==0){
        pw_checker1.style.backgroundColor="#7FB876"
        pw_checker1.innerHTML=" Strong Password "
    }else{
        pw_checker1.style.backgroundColor="red"
        pw_checker1.innerHTML=" Invalid "
    }
    if(!pwcompare()){
        pw_warning.innerHTML="Password is not the same"
    }else{pw_warning.innerHTML=""}
})
password2.addEventListener('keyup',(event)=>{
    let temp = event.target
    let pw = temp.value
    let strength = 0
    let upper = 0
    let lower = 0
    let special = 0
    //check length
    if(pw.length>0){
        strength++
    }
    if(pw.length>3){
        strength++
    }
    if(pw.length>7){
        strength++
    }
    //check upper and lower case
    for(i=0;i<alphabet.length;i++){
        if(pw.includes(alphabet[i])){
            upper++
        }
        if(pw.includes(alphabet[i].toLowerCase())){
            lower++
        }
    }
    if(upper!=0 && lower!=0){
        strength++;
    }
    //check nomor
    for(i=0;i<=9;i++){
        if(pw.includes(i)){
            strength++
            break
        }
    }
    //check symbol 
    for(i=0;i<symbol.length;i++){
        if(pw.includes(symbol[i])){
            special=1
            break
        }else{special=0}
    }
    if(strength<2 && special==0){
        pw_checker2.style.backgroundColor="red"
        pw_checker2.innerHTML=" Weak Password "
    }else if(strength<4 && special==0){
        pw_checker2.style.backgroundColor="orange"
        pw_checker2.innerHTML=" Medium Password "
    }else if(special==0){
        pw_checker2.style.backgroundColor="#7FB876"
        pw_checker2.innerHTML=" Strong Password "
    }else{
        pw_checker2.style.backgroundColor="red"
        pw_checker2.innerHTML=" Invalid "
    }
    if(!pwcompare()){
        pw_warning.innerHTML="Password is not the same"
    }else{pw_warning.innerHTML=""}

})

let male_button = document.querySelector('.gender_male_button')
let female_button = document.querySelector('.gender_female_button')
male_button.addEventListener('click',()=>{
    if(male_button.style.fontWeight!='bold'){
        male_button.style.fontWeight='bold'
        male_button.style.color="black"
        female_button.style.fontWeight='normal'
        female_button.style.color="gray"
    }
})
female_button.addEventListener('click',()=>{
    if(female_button.style.fontWeight!='bold'){
        female_button.style.fontWeight='bold'
        female_button.style.color="black"
        male_button.style.fontWeight='normal'
        male_button.style.color="gray"
    }
})

function pwcompare(){
    let pw1 = document.querySelector('.type_password')
    let pw2 = document.querySelector('.type_retype_password')
    if(pw1.value.length!=pw2.value.length){
        return false;
    }
    if(pw1.value.includes(pw2.value)){
        return true
    }else{return false}
}