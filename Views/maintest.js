const branche = {
    ch_simple_vue_int : [['chambre','chambre_simple','vue_intern'],300],
    ch_simple_vue_ext : [['chambre','chambre_simple','vue_extern'],300+0.2*300],
    ch_double_lit_double_int : [['chambre','chambre_double','lit_double','vue_intern'],450],
    ch_double_lit_double_ext : [['chambre','chambre_double','lit_double','vue_extern'],450+0.2*450],
    ch_double_2lit_int : [['chambre','chambre_double','deux_lit_simple','vue_intern'],450]
};


const enfant_option = {
    option1 : 0.25,
    option2 : 0,
    option3 : 0.5,
    option4 : 1,
    option5 : 0.7
};

let total = 300



const nbchild = document.querySelector('#nbchild')
nbchild.addEventListener('input', () => {
    document.querySelector('.children').innerHTML = ''
    for(let i = 1 ; i<= nbchild.value ; i++){ 
        document.querySelector(".children").innerHTML += 

        `
        <span>age enfant ${i} :</span>
        <input style="width: 140px" type="number"
         min="1" max="17"  id="id-age${i}" 
         class="enfant-age form-control"
        />
        <div id="enf-lit${i}"></div>

        `
    }
})


const bien_type = document.querySelector("#hotel")
const chambre_type = document.querySelector('.chambre_type')

bien_type.addEventListener("change",() => {
if(bien_type.checked){

    document.querySelector('.child').style.display = 'block'

    chambre_type.innerHTML = 

    `
       <label for="chambre_type">Choose a chambre type:
        <select name="chambre_type" id="chambre_type" class="bk-selector form-control">
        <option value="">--select one--</option>
        <option value="chambre_simple">chambre simple</option>
        <option value="chambre_double">chambre double</option>
        </select>
        </label>

    `

    }
    else
{
    document.querySelector(".chambre_type").innerHTML =''
    document.querySelector('.children').innerHTML =''
    document.querySelector(".vue_type").innerHTML =''
    document.querySelector(".bed_type").innerHTML =''
    document.querySelector('.child').style.display = 'none'
}
})


document.addEventListener("change", function(e){
    
    if(e.target && e.target.value == "chambre_simple"){

        document.querySelector(".bed_type").innerHTML =''
        document.querySelector(".vue_type").innerHTML =''

        document.querySelector(".vue_type").innerHTML =
        
        `
        <label for="vue">Choose a vue:
        <select name="vue" id="vue"  class="bk-selector form-control">
        <option value="">--select one--</option>
        <option value="vue_intern">vue intérieure</option>
        <option value="vue_extern">vue extérieure</option>
        </select>
        </label>
        
        `
    }else if(e.target && e.target.value == "chambre_double"){
        document.querySelector(".vue_type").innerHTML =''
        document.querySelector(".bed_type").innerHTML =''

        document.querySelector(".bed_type").innerHTML =
        `
        <label for="bed">Choose a bed:
        <select name="bed" id="bed" class="bk-selector form-control">
        <option value="">--select one--</option>
        <option value="lit_double">lit double</option>
        <option value="deux_lit_simple">2 lit simple</option>
        </select> 
        `
    }
})


document.addEventListener("change", function(e){
    
    if(e.target && e.target.value == "lit_double"){

        document.querySelector(".vue_type").innerHTML =
        
        `
        <label for="vue">Choose a vue:
        <select name="vue" id="vue"  class="bk-selector form-control">
        <option value="">--select one--</option>
        <option value="vue_intern">vue intérieure</option>
        <option value="vue_extern">vue extérieure</option>
        </select>
        </label>
        
        `
    }else if(e.target && e.target.value == "deux_lit_simple"){
        document.querySelector(".vue_type").innerHTML =
        
        `
        <label for="vue">Choose a vue:
        <select name="vue" id="vue"  class="bk-selector form-control">
        <option value="">--select one--</option>
        <option value="vue_intern">vue intérieure</option>
        </select>
        </label>
        `
    }
})

const btn = document.querySelector('#reserve')
btn.addEventListener("click", function(){
    let sel =  document.querySelectorAll('.bk-selector')
    var arr = Array.from(sel)
    var singleBranch = []
   
    arr.forEach(function(item , index){
        singleBranch[index] = item.value;
    })

    // console.log(singleBranch);

    switch (JSON.stringify(singleBranch)){

        // case JSON.stringify(branche.bungalow[0]):
        //     console.log(branche.bungalow[1]);
        //     break;

        // case JSON.stringify(branche.appartement[0]):
        //     console.log(branche.appartement[1]);
        //     break;
            
        case JSON.stringify(branche.ch_simple_vue_int[0]):
            console.log(branche.ch_simple_vue_int[1])
            // total = branche.ch_simple_vue_int[1]
            break;
            
        case JSON.stringify(branche.ch_simple_vue_ext[0]):
            console.log(branche.ch_simple_vue_ext[1]);
            // total = branche.ch_simple_vue_ext[1]
            break;

        case JSON.stringify(branche.ch_double_lit_double_int[0]):
            console.log(branche.ch_double_lit_double_int[1]);
            break;

        case JSON.stringify(branche.ch_double_lit_double_ext[0]):
            console.log(branche.ch_double_lit_double_ext[1]);
            break;

        case JSON.stringify(branche.ch_double_2lit_int[0]):
            console.log(branche.ch_double_2lit_int[1]);
            break;

        default: 
        console.log("please fill in the blanks")
        

    }     
}
)


document.addEventListener("input", function(e){
    
    for(let i = 1  ; i<= nbchild.value ; i++){


        if(e.target.id == `id-age${i}` && (e.target.value <= 2 &&  e.target.value >= 0)){


            document.querySelector(`#enf-lit${i}`).innerHTML = 
            `
            <label for="">Choose offer:
            <select name="" id=""  class="enf-option form-control">
            <option value="">--select one--</option>
            <option value="option1">lit supplémentaire</option>
            <option value="option2">pas lit supplémentaire</option>
            </select>
            </label>
            `
    }
        
        else if(e.target.id == `id-age${i}` && (2 <e.target.value && e.target.value < 14)){

            document.querySelector(`#enf-lit${i}`).innerHTML = 
            `
            <label for="">Choose offer:
            <select name="" id=""  class="enf-option form-control">
            <option value="">--select one--</option>
            <option value="option3">in parents chambre simple</option>
            </select>
            </label>
            `
        
    }

        else if(e.target.id == `id-age${i}` && (e.target.value >= 14 && e.target.value < 18)){

            document.querySelector(`#enf-lit${i}`).innerHTML = 
            `
            <label for="">Choose offer:
            <select name="" id=""  class="enf-option form-control">
            <option value="">--select one--</option>
            <option value="option4">chambre simple separeé</option>
            <option value="option5">in parents chambre simple</option>
            </select>
            </label>
            `
    }
}

})




btn.addEventListener("click", function(){  
    

const enf= document.querySelectorAll('.enf-option')
let enf_A = Array.from(enf)
let enf_data = []
enf_A.forEach(function(item,index){enf_data[index]=item.value})
console.log(enf_data)

for(let i = 0  ; i< nbchild.value ; i++){
    switch (enf_data[i]){
        case 'option1':
            console.log(300*enfant_option.option1)

            total += 300*enfant_option.option1
            break;

        case 'option2':
            console.log(300*enfant_option.option2)
            total += 300*enfant_option.option2
            break;

        case 'option3':
            console.log(300*enfant_option.option3)
            total += 300*enfant_option.option3
            break;

        case 'option4':
            console.log(300*enfant_option.option4)
            total += 300*enfant_option.option4
            break;

        case 'option5':
            console.log(300*enfant_option.option5)
            total += 300*enfant_option.option5
            break;

        default: 
        console.log("please fill in the blanks")

}
}
console.log("prix total = "+total)

})