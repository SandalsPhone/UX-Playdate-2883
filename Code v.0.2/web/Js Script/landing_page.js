//buat popup
/*
let far_scrolled = window.scrollY
let window_height = window.innerHeight*/
let popup = document.querySelector('.my_body_popup')
let four_items = document.querySelector('.four_items')
popup.style.opacity = 0 
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
    document.querySelector('body').style.cssText += "overflow-y: hidden; overflow-x: hidden;"
    popup.style.opacity = 1
    console.log("getpopup")
}))

let close_popup = document.querySelector('#close_popup')
close_popup.addEventListener('click',()=>{
    popup.style.top = 0 +'px'
    popup.style.left = -100 +'px'
    popup.style.opacity = 0 
    document.querySelector('body').style.cssText -= "overflow-y: hidden; overflow-x: hidden;"
    console.log("closepopup")
})