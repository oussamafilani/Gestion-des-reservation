'use strict'

const chambre_type = document.querySelector('.add-bien')

const dellchambre = document.querySelector('.dell-chambre')
const addchambre = document.querySelector('.add-chambre')
const chambreCount = document.querySelector(".chambre-count")

const oneRoom = document.querySelector(".one-room")

let [i, j] = [1, 0]

chambreCount.innerHTML = `${j}`

addchambre.addEventListener('click', function() {

    document.querySelector('.child').style.display = 'inline-block'
    if(j<4) {
    chambre_type.innerHTML +=

        ` 
        <div class="one-room row">
        <div class="chambre_type${i} col-sm-4">

            <select name="bien_type[${i}][chambre]" id="chambre_type${i}" class=" form-control  mb-4">
                     <option value="">sélectionner une chambre </option>
                    <option value="chambre_simple">chambre simple</option>
                    <option value="chambre_double">chambre double</option>
            </select>
        </div>
        <div class="bed_type${i} col-sm-4"></div>
        <div class="vue_type${i} col-sm-4"></div> 
        <div class="pen_type${i} col-sm-9 mb-4"></div> 
        </div>

        
        `
        chambreCount.innerHTML = `${++j}`
 
    i++
    
    }
})

dellchambre.addEventListener('click', function() {
    if(j>0) {
        chambreCount.innerHTML = `${--j}`
        document.querySelector(".one-room").remove()
    }

}) 

document.addEventListener('change', (e) => {

    for (let j = 1; j <= i; j++) {
        if (e.target.id == `chambre_type${j}` && (e.target.value == 'chambre_simple')) {
            document.querySelector(`.vue_type${j}`).innerHTML = ``
            document.querySelector(`.pen_type${j}`).innerHTML = ``
            document.querySelector(`.bed_type${j}`).innerHTML = `

            <select name="bien_type[${j}][vue]" id="typevue${j}"  class=" form-control">
            <option value="">sélectionner une vue </option>
            <option value="vue_intern">vue intérieure</option>
            <option value="vue_extern">vue extérieure</option>
            </select>
        `

            document.querySelector(`.pen_type${j}`).innerHTML = `
            <select name="bien_type[${j}][pension]" id="pentype${j}"  class="form-control">
            <option value="1">Pension complète</option>
            <option value="2">Demi-pension</option>
            <option value="3">Sans</option>
            </select>
            `

        } else if (e.target.id == `chambre_type${j}` && (e.target.value == 'chambre_double')) {
            document.querySelector(`.vue_type${j}`).innerHTML = ``
            document.querySelector(`.vue_type${j}`).innerHTML = ``
            document.querySelector(`.bed_type${j}`).innerHTML = `
            <select name="bien_type[${j}][bed]" id="typelit${j}" class=" form-control">
            <option value="">sélectionner un lit </option>
            <option value="lit_double">lit double</option>
            <option value="deux_lit_simple">2 lit simple</option>
            </select> 

        `
            document.querySelector(`.pen_type${j}`).innerHTML = `
            <select name="bien_type[${j}][pension]" id="pentype${j}"  class="form-control">
            <option value="1">Pension complète</option>
            <option value="2">Demi-pension</option>
            <option value="3">Sans</option>
            </select>
            `
        }
    }
})

document.addEventListener('change', (e) => {
    for (let j = 1; j <= i; j++) {
        if (e.target.id == `typelit${j}` && e.target.value == 'lit_double') {
            document.querySelector(`.vue_type${j}`).innerHTML = ``
            document.querySelector(`.vue_type${j}`).innerHTML = `  
            <select name="bien_type[${j}][vue]" id="typevue${j}"  class=" form-control">
            <option value="">sélectionner une vue </option>
            <option value="vue_intern">vue intérieure</option>
            <option value="vue_extern">vue extérieure</option>
            </select> 
        `;

        }
        if (e.target.id == `typelit${j}` && e.target.value == 'deux_lit_simple') {
            document.querySelector(`.vue_type${j}`).innerHTML = ``
            document.querySelector(`.vue_type${j}`).innerHTML = `
            <select name="bien_type[${j}][vue]" id="typevue${j}"  class=" form-control">
            <option value="">sélectionner une vue </option>
            <option value="vue_intern">vue intérieure</option>
            </select>

        
        `;

        }
    }
})

const nbchild = document.querySelector('#nbchild')
nbchild.addEventListener('input', () => {
    document.querySelector('.children').innerHTML = ''
    for (let i = 1; i <= nbchild.value; i++) {
        if(nbchild.value<=6){
        document.querySelector(".children").innerHTML +=

            `
            <div class="row">

            <div class="mb-3 col-sm-4">
            <input placeholder = "age enfant ${i}"  type="number"
            min="1" max="17"  id="id-age${i}" 
            class="enfant-age form-control mb-4"/>
            </div>

            <div id="enf-lit${i}" class=" mb-3 col-sm-4">
            <select name="" id=""  class="enf-option form-control"></select>
            </div>

            
            <div class=" mb-3 col-sm-4 text-center">
            <img src="./assets/icons/remove.svg" alt="" id="delenf${i}" class="ico del--ico" onclick="delloneKid(this)"/>
            </div>

            </div>
            `
        }
    }
})

document.addEventListener("input", function(e) {

    for (let i = 1; i <= nbchild.value; i++) {


        if (e.target.id == `id-age${i}` && (e.target.value <= 2 && e.target.value >= 0)) {


            document.querySelector(`#enf-lit${i}`).innerHTML =

                `
            <select name="bien_type[${i}][kid]" id=""  class="enf-option form-control">
            <option value="8">lit supplémentaire</option>
            <option value="9">pas lit supplémentaire</option>
            </select>

                `
        } else if (e.target.id == `id-age${i}` && (2 < e.target.value && e.target.value < 14)) {

            document.querySelector(`#enf-lit${i}`).innerHTML =

                `
            <select name="bien_type[${i}][kid]" id=""  class="enf-option form-control">
            <option value="10">50% chambre simple</option>
            </select>

                `

        } else if (e.target.id == `id-age${i}` && (e.target.value >= 14 && e.target.value < 18)) {

            document.querySelector(`#enf-lit${i}`).innerHTML =

                `
            <select name="bien_type[${i}][kid]" id=""  class="enf-option form-control">
            <option value="12">chambre simple separeé</option>
            <option value="11">70% chambre simple</option>
            </select>

                `
        }
    }

})

//rmove one kid
let  delloneKid = (e)=> {
    e.parentElement.parentElement.remove()
    nbchild.value-- 
    }

let addAppartement = true
let removeAppartement = true

let k = 0;
const addAppr = document.querySelector(".add-appr")
const dellAppr = document.querySelector(".dell-appr")
const appartsCount = document.querySelector(".apparts-count")
const newAppartement = document.querySelector(".add-apparts")

appartsCount.innerHTML = `${k}`

addAppr.addEventListener('click', function() {if(k<4) {
    appartsCount.innerHTML = `${++k}`
    newAppartement.innerHTML += `<input type="hidden" id="apprt${k}" name="batiment[]" value="1">`
}})
dellAppr.addEventListener('click', ()=> {
    if(k>0) {
    // document.getElementById(`apprt${k}`).outerHTML = ""
    // document.getElementById(`apprt${k}`).remove()
    newAppartement.removeChild(newAppartement.childNodes[0])
    appartsCount.innerHTML = `${--k}`
}})


let addBungalow = true
let removeBungalow = true
let l = 0;
const addBang = document.querySelector(".add-bang")
const dellBang = document.querySelector(".dell-bang")
const bangCount = document.querySelector(".bang-count")
const newBungalow = document.querySelector(".add-bung")
bangCount.innerHTML = `${l}`

addBang.addEventListener('click', function() {
    if(l<4) {
    bangCount.innerHTML = `${++l}`
    newBungalow.innerHTML += `<input type="hidden" id="bung${l}" name="batiment[]"  value="2">`
}})
dellBang.addEventListener('click', ()=> {
    newBungalow.removeChild(newBungalow.childNodes[0])
    if(l>0) {bangCount.innerHTML = `${--l}`
}})


