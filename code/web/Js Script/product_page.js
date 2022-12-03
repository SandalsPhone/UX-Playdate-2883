//buat popup signin segala macem
function showloginsection(){
  var x = document.getElementById("btntwo");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}


//add another 6 produk
let array_grid_img = [["pic/image%2035.png","pic/image%2024.png"],//0
["pic/image%2037.png","pic/Group 232.png"],
["pic/image%2041.png","pic/Screenshot%20(389)%201.png"],
["pic/image%2045.png","pic/Rectangle%2018.png"],
["pic/image%2046.png","pic/image%2046.png"],
["pic/image%2047.png","pic/image%2047.png"]//5
]
array_grid_img = array_grid_img.concat(array_grid_img)//tinggal concat array jika produk nambah di database
let grid_item2 = document.querySelectorAll('.grid_item2')
let array_grid_item2 = Array.from(grid_item2)
let grid_item2_clone = []
for(i=0;i<6;i++){
    grid_item2_clone[i] = array_grid_item2[i].cloneNode(true)//kalo beda di database gak perlu ini
}
for(i=0;i<6;i++){
    let grid_item2 = document.querySelectorAll('.grid_item2')
    let array_grid_item2 = Array.from(grid_item2)
    let grid_item2_amount = array_grid_item2.length
    grid_item2[grid_item2_amount-1].insertAdjacentElement('afterend',grid_item2_clone[i])
}
grid_item2 = document.querySelectorAll('.grid_item2')
array_grid_item2 = Array.from(grid_item2)
let grid_item2_amount = array_grid_item2.length
for(i=6;i<grid_item2_amount;i++){
    grid_item2[i].style.display="none"
}

//location grid show
var not_grid = document.querySelector('.background_for_grid_choice')//grid dan sekitarnya
let grid = document.querySelector('.grid_of_places_choices')
var place_name = document.querySelector('.place_name')
// When the user clicks the button, open the modal 
place_name.onclick = function() {
    not_grid.style.display = "block";
    grid.style.display = "grid"
}
window.onclick = function(event) {
  if (event.target == not_grid) {
    not_grid.style.display = "none";
    grid.style.display = "none"
  }
}
//share location
let share_button = document.querySelector('.share_icon')
let blur_popup = document.querySelector('.blur_popup')
let share_location = document.querySelector('.pop_up_share_location')
share_location.style.opacity = 0 
blur_popup.style.opacity = 0
share_button.addEventListener('click',()=>{
  let popupY = share_location.getBoundingClientRect().bottom - share_location.getBoundingClientRect().top
    let popupX = share_location.getBoundingClientRect().right - share_location.getBoundingClientRect().left
    //get window height and width
    let center_popup_windowY = (window.innerHeight - popupY)/2
    let center_popup_windowX = (window.innerWidth - popupX)/2
    //get viewport
    let center_popup_viewportY = center_popup_windowY + window.scrollY
    let center_popup_viewportX = center_popup_windowX + window.scrollX
    share_location.style.top = center_popup_viewportY +'px'
    share_location.style.left = center_popup_viewportX +'px'
    blur_popup.style.top = window.scrollY +'px'
    blur_popup.style.left = window.scrollX +'px'
    blur_popup.style.height = window.innerHeight + 100 +'px'
    blur_popup.style.width = window.innerWidth + 100 +'px'
    document.querySelector('body').style.cssText += "overflow-y: hidden; overflow-x: hidden;"
    share_location.style.opacity = 1
    blur_popup.style.opacity = 1
})
//share learningkit
let share_button2 = document.querySelectorAll('.share_button')
let share_learningkit = document.querySelector('.pop_up_share_learningkit')
share_learningkit.style.opacity = 0 
Array.from(share_button2).forEach(button2=>button2.addEventListener('click',()=>{
  let popupY = share_learningkit.getBoundingClientRect().bottom - share_learningkit.getBoundingClientRect().top
    let popupX = share_learningkit.getBoundingClientRect().right - share_learningkit.getBoundingClientRect().left
    //get window height and width
    let center_popup_windowY = (window.innerHeight - popupY)/2
    let center_popup_windowX = (window.innerWidth - popupX)/2
    //get viewport
    let center_popup_viewportY = center_popup_windowY + window.scrollY
    let center_popup_viewportX = center_popup_windowX + window.scrollX
    share_learningkit.style.top = center_popup_viewportY +'px'
    share_learningkit.style.left = center_popup_viewportX +'px'
    blur_popup.style.top = window.scrollY +'px'
    blur_popup.style.left = window.scrollX +'px'
    blur_popup.style.height = window.innerHeight + 100 +'px'
    blur_popup.style.width = window.innerWidth + 100 +'px'
    document.querySelector('body').style.cssText += "overflow-y: hidden; overflow-x: hidden;"
    share_learningkit.style.opacity = 1
    blur_popup.style.opacity = 1
}))
blur_popup.addEventListener('click',()=>{
    share_location.style.top = 0 +'px'
    share_location.style.left = -10000 +'px'
    share_learningkit.style.top = 0 +'px'
    share_learningkit.style.left = -10000 +'px'
    blur_popup.style.top = 0 +'px'
    blur_popup.style.left = -10000 +'px'
    share_location.style.opacity = 0 
    share_learningkit.style.opacity = 0 
    blur_popup.style.opacity = 0
    document.querySelector('body').style.cssText -= "overflow-y: hidden; overflow-x: hidden;"
})
//make bigger and smaller
let dropdown_button = document.querySelectorAll('.dropdown_button')
let grid_item_content = document.querySelectorAll('.grid_item_content')
let grid_item_day_one = document.querySelectorAll('.grid_item_day_one')
let grid_item_day_two = document.querySelectorAll('.grid_item_day_two')
let grid_item_day_three = document.querySelectorAll('.grid_item_day_three')
let grid_item_day_four = document.querySelectorAll('.grid_item_day_four')
let grid_text = Array.from(document.querySelectorAll('.grid_item_header_content'))
let down_img = document.querySelectorAll('.down_img')
let up_img = document.querySelectorAll('.up_img')
let dont = [0,1,2]
for(i=3;i<grid_text.length;i++){
    if(dont.indexOf(i%6)===-1 ){
        grid_text[i].style.transition="0s"
        grid_text[i].style.opacity=0
    }
}

setopacity(grid_item_day_one,0)
setopacity(grid_item_day_two,0)
setopacity(grid_item_day_three,0)
setopacity(grid_item_day_four,0)
Array.from(dropdown_button).forEach((ddb,index)=>ddb.addEventListener('click',()=>{
    let array_grid_item_content = Array.from(grid_item_content)
    if(array_grid_item_content[index].style.height=="650px"){
      //make smaller
      down_img[index].style.opacity=1
      up_img[index].style.opacity=0
        array_grid_item_content[index].style.height=550 +"px"
      for(i=index*6+3;i<=index*6+5;i++){
        grid_text[i].style.transition="1s"
        grid_text[i].style.opacity=0
      }
      grid_item_day_one[index].style.transition="1s"
      grid_item_day_two[index].style.transition="1s"
      grid_item_day_three[index].style.transition="1s"
      grid_item_day_four[index].style.transition="1s"
      setTimeout(function(){grid_item_day_one[index].style.opacity=0},1)
      grid_item_day_two[index].style.opacity=0
      grid_item_day_three[index].style.opacity=0
      grid_item_day_four[index].style.opacity=0
    }else{
      //make bigger
      down_img[index].style.opacity=0
      up_img[index].style.opacity=1
        array_grid_item_content[index].style.height=650 +"px"
      for(i=index*6+3;i<=index*6+5;i++){
        grid_text[i].style.transition="1s"
        grid_text[i].style.opacity=1
      }
      grid_item_day_one[index].style.transition="1s"
      grid_item_day_two[index].style.transition="1s"
      grid_item_day_three[index].style.transition="1s"
      grid_item_day_four[index].style.transition="1s"
      grid_item_day_one[index].style.opacity=1
      grid_item_day_two[index].style.opacity=1
      grid_item_day_three[index].style.opacity=1
      grid_item_day_four[index].style.opacity=1
      setTimeout(function(){grid_item_day_one[index].style.transition="0s"},1)
      setTimeout(function(){grid_item_day_two[index].style.transition="0s"},1)
      setTimeout(function(){grid_item_day_three[index].style.transition="0s"},1)
      setTimeout(function(){grid_item_day_four[index].style.transition="0s"},1)
    }
}))
//change img on click (kalo imgnya beda beda bisa ditaro diarray img yg mn yg muncul trus show yg lain)
let grid_img = document.querySelectorAll('.grid_img')
Array.from(grid_img).forEach((img,index)=>img.addEventListener('click',()=>{
  if(img.src.includes(array_grid_img[index][0])){
    img.src = array_grid_img[index][1]
  }else{
    img.src = array_grid_img[index][0]
  }
}))
//circle button change on click
//diubah pas click ada transition hover gak ada (kalo mau bisa di timpa aj yg click ama yg ngak, jadi tinggal opacity=0 trus yg clicked yg ada transisi)
let select_img = document.querySelectorAll('.select_img')
let like_img = document.querySelectorAll('.like_img')
Array.from(select_img).forEach(img=>img.addEventListener('click',()=>{
  if(img.src.includes("pic/grid-icons/select_hover.png")){
    img.src = "pic/grid-icons/select_clicked.png"
    img.removeAttribute('onmouseover')
    img.removeAttribute('onmouseout')
  }else{
    img.src = "pic/grid-icons/select_hover.png"
    img.setAttribute('onmouseover',"this.src='pic/grid-icons/select_hover.png'");
    img.setAttribute('onmouseout',"this.src='pic/grid-icons/select_default.png'");
  }
}))
Array.from(like_img).forEach(img=>img.addEventListener('click',()=>{
  if(img.src.includes("pic/grid-icons/like_hover.png")){
    img.src = "pic/grid-icons/like_clicked.png"
    img.removeAttribute('onmouseover')
    img.removeAttribute('onmouseout')
  }else{
    img.src = "pic/grid-icons/like_hover.png"
    img.setAttribute('onmouseover',"this.src='pic/grid-icons/like_hover.png'");
    img.setAttribute('onmouseout',"this.src='pic/grid-icons/like_default.png'");
  }
}))
//make button purple on click
makepurple(grid_item_day_one)
makepurple(grid_item_day_two)
makepurple(grid_item_day_three)
makepurple(grid_item_day_four)
function makepurple(element/*queryselectorAll*/){
  Array.from(element).forEach(button2=>button2.addEventListener('click',()=>{
    //if dalam addeventlistener gak mau respon dalam first click, idk y
    if(button2.style.color=="white"){
      button2.style.transition="none"
      button2.style.backgroundColor="#d9d9d9";
      button2.style.color="black"
      button2.classList.add("notpurple")
    }else{
      button2.style.transition="1s"
      button2.style.backgroundColor="#735de7";
      button2.style.color="white"
      button2.classList.remove("notpurple")
    }
  }))}
let dropdown_grid = document.querySelector('.dropdown_grid')
let down_grid = document.querySelector('.down_grid')
let up_grid = document.querySelector('.up_grid')
dropdown_grid.addEventListener('click',()=>{
    if(up_grid.style.opacity==1){
        up_grid.style.opacity=0
        down_grid.style.opacity=1
        let grid_item2_amount = grid_item2.length
        for(i=6;i<grid_item2_amount;i++){
            grid_item2[i].style.display="none"
        }
    }else{
        up_grid.style.opacity=1
        down_grid.style.opacity=0
        let grid_item2_amount = grid_item2.length
        for(i=6;i<grid_item2_amount;i++){
            grid_item2[i].style.display="block"
        }
    }
})

let grid_item_places_name = document.querySelectorAll('.grid_item_places_name')
let alphabet = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
Array.from(grid_item_places_name).forEach(location=>location.addEventListener('click',()=>{
  for(i=0;i<alphabet.length;i++){
    if(location.innerHTML.toUpperCase().includes(alphabet[i])){
      place_name.innerHTML=location.innerHTML.toUpperCase() + "&#9660"
    }
  }
}))

function setopacity(element,number){
    Array.from(element).forEach(el=>el.style.opacity=number)
}

