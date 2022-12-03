//buat popup signin segala macem
function showingDiv(){
    var x = document.getElementById("btn");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
}

//function untuk ganti elemen yang di clone dengan tabel learning_kit dengan index yang cocok dengan parameter index
function change_learning_kit_card(learning_kit_array, index, learning_kit_element){
    learning_kit_element.querySelector('img').src = learning_kit_array[index]['gambar_learning_kit']
    learning_kit_element.querySelector('.boldedtext').innerHTML = learning_kit_array[index]['nama_learning_kit']
    learning_kit_element.querySelector('.age').innerHTML = "Age "+learning_kit_array[index]['usia_min_learning_kit']+"-"+learning_kit_array[index]['usia_max_learning_kit']

    let difficulty_image = learning_kit_element.querySelectorAll('img')

    //assign image path based on difficulty integer (1-4)
    let difficulty_image_path
    if(learning_kit_array[index]['difficulty_learning_kit'] < 2){
        difficulty_image_path = 'pic/easy-small.png'
    }
    else if(learning_kit_array[index]['difficulty_learning_kit'] < 3){
        difficulty_image_path = 'pic/easy-big.png'
    }
    else if(learning_kit_array[index]['difficulty_learning_kit'] < 4){
        difficulty_image_path = 'pic/medium.png'
    }
    else{
        difficulty_image_path = 'pic/hard.png'
    }
    difficulty_image[1].src = difficulty_image_path
}  
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
        
        //kalau learning kit di database lebih dari 8, maka script dibawah akan di run untuk menambah elemen learning kit,
        //untuk menampilkan semua learning kit yang ada di database
        let xhr = new XMLHttpRequest()
        xhr.overrideMimeType("application/json")
        xhr.onload  = function() {
            if(xhr.readyState == 4 && xhr.status == 200){
                let learning_kits = JSON.parse(xhr.responseText)
                console.log(learning_kits)

                if(learning_kits.length > 8){
                        let grid_elements = document.querySelectorAll('.kit_options .product_grid .grid1')
                        let grids = []
                        if(grid_elements.length < 9){
                            let last_grid = grid_elements[grid_elements.length - 1]
                            grids.push(last_grid.cloneNode(true))
                            last_grid.insertAdjacentElement('afterend', grids[0])
                            change_learning_kit_card(learning_kits, 8, grids[0])
                            console.log(grid_elements.length)

                            for(i = 9; i<learning_kits.length; i++){
                                grids.push(last_grid.cloneNode(true))
                                grids[i-9].insertAdjacentElement('afterend', grids[(i-8)])
                                change_learning_kit_card(learning_kits, i, grids[i-8])
                                console.log(i)  
                            }
                        }
                    }
            }
        };
        xhr.open('GET', 'Js Script/JSON/learning_kit_data.json', true);
        xhr.send();

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
