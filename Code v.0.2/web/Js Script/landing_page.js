//buat popup
/*
let far_scrolled = window.scrollY
let window_height = window.innerHeight*/
let popup = document.querySelector('.my_body_popup')
let blur_popup = document.querySelector('.blur_popup')
let four_items = document.querySelector('.four_items')
popup.style.opacity = 0 
blur_popup.style.opacity = 0
Array.from(document.querySelectorAll('.boldedtext')).forEach(text=>text.addEventListener('click',()=>{
    //get popup height and width
    let popupY = popup.getBoundingClientRect().bottom - popup.getBoundingClientRect().top
    let popupX = popup.getBoundingClientRect().right - popup.getBoundingClientRect().left
    //get window height and width
    let center_popup_windowY = (window.innerHeight - popupY)/2
    let center_popup_windowX = (window.innerWidth - popupX)/2
    //get viewport
    let center_popup_viewportY = center_popup_windowY + window.scrollY
    let center_popup_viewportX = center_popup_windowX + window.scrollX
    popup.style.top = center_popup_viewportY +'px'
    popup.style.left = center_popup_viewportX +'px'
    blur_popup.style.top = window.scrollY +'px'
    blur_popup.style.left = window.scrollX +'px'
    blur_popup.style.height = window.innerHeight + 100 +'px'
    blur_popup.style.width = window.innerWidth + 100 +'px'
    document.querySelector('body').style.cssText += "overflow-y: hidden; overflow-x: hidden;"
    popup.style.opacity = 1
    blur_popup.style.opacity = 1
}))

let close_popup = document.querySelector('#close_popup')
close_popup.addEventListener('click',()=>{
    popup.style.top = 0 +'px'
    popup.style.left = -100 +'px'
    blur_popup.style.top = 0 +'px'
    blur_popup.style.left = -100 +'px'
    popup.style.opacity = 0 
    blur_popup.style.opacity = 0
    document.querySelector('body').style.cssText -= "overflow-y: hidden; overflow-x: hidden;"
})

//find more
//product_list[0].cloneNode(true) 
//product_list[product_amount].insertAdjacentElement('afterend',new_product)
//pake ini buat nambah produk
let product_list = Array.from(document.querySelectorAll('.grid1'))
let product_amount = product_list.length //[0,1,2,3] keluarnya 4
for(i = 4; i<product_amount; i++){
    product_list[i].style.display = 'none'
}
let find_more = document.querySelector('.find_button')
find_more.addEventListener('click',()=>{
    product_list = Array.from(document.querySelectorAll('.grid1'))
    product_amount = product_list.length //[0,1,2,3] keluarnya 4
    if(find_more.innerHTML==" FIND MORE "){
        find_more.innerHTML = "BACK"
        for(i = 4; i<product_amount; i++){
            product_list[i].style.display = 'block'
        }
        console.log(find_more.getBoundingClientRect().width+" "+find_more.getBoundingClientRect().height)
    }else if(find_more.innerHTML == "BACK"){
        find_more.innerHTML = " FIND MORE "
        for(i = 4; i<product_amount; i++){
            product_list[i].style.display = 'none'
        }
    }
})

//kalo tempatnya nambah bisa pake array / list buat naro posisi di setiap tempat
//misal ada 6 tempat artinya ada 3 kali pencet array[1,2,3]=[100px,200px,300px] dst
let button1 = document.querySelector('.prev_icon_button')
let button2 = document.querySelector('.next_icon_button')
let place = 1
button1.addEventListener('click',()=>{
    if(place==0){
        place++
        document.querySelector('.highlight').style.left = 100 +'px';
    }else{
        place--
        document.querySelector('.highlight').style.left = -1300 +'px';
    }
})
button2.addEventListener('click',()=>{
    if(place==0){
        place++
        document.querySelector('.highlight').style.left = 100 +'px';
    }else{
        place--
        document.querySelector('.highlight').style.left = -1300 +'px';
    }
})