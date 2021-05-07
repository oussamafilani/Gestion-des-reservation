const branche = {
    ch_simple_vue_int: ['chambre_simple', 'empty', 'vue_intern'],
    ch_simple_vue_ext: ['chambre_simple', 'empty', 'vue_extern'],
    ch_double_lit_double_int: ['chambre_double', 'lit_double', 'vue_intern'],
    ch_double_lit_double_ext: ['chambre_double', 'lit_double', 'vue_extern'],
    ch_double_2lit_int: ['chambre_double', 'deux_lit_simple', 'vue_intern'],
};


const addchambre = document.querySelector('#addchambre')
const chambre_type = document.querySelector('.add-bien')
let i = 1;

addchambre.addEventListener('click', function() {

    document.querySelector('.child').style.display = 'inline-block'

    chambre_type.innerHTML +=

        ` 
        <div class="chambre_type${i} col-sm-4">

            <input type="hidden" id="one_room${i-1}" name="room${i}" value="">
            <select name="chambre_type" id="chambre_type${i}" class="bk-selector form-control  mb-4">
                     <option value="">sélectionner une chambre </option>
                    <option value="chambre_simple">chambre simple</option>
                    <option value="chambre_double">chambre double</option>
            </select>
        </div>
        <div class="bed_type${i} col-sm-4"></div>
        <div class="vue_type${i} col-sm-4"></div> 
        <div class="pen_type${i} col-sm-12 mb-4"></div> 
        `
    i++
})


document.addEventListener('change', (e) => {

    for (let j = 1; j <= i; j++) {
        if (e.target.id == `chambre_type${j}` && (e.target.value == 'chambre_simple')) {
            document.querySelector(`.vue_type${j}`).innerHTML = ``
            document.querySelector(`.pen_type${j}`).innerHTML = ``
            document.querySelector(`.bed_type${j}`).innerHTML = `

            <select selected class="bk-selector empty-selector">
            <option value="empty"></option>
            </select>

            <select name="vue" id="typevue${j}"  class="bk-selector form-control">
            <option value="">sélectionner une vue </option>
            <option value="vue_intern">vue intérieure</option>
            <option value="vue_extern">vue extérieure</option>
            </select>
        `

            document.querySelector(`.pen_type${j}`).innerHTML = `
            <select name="vue" id="pentype${j}"  class="pn-selector form-control">
            <option value="1">Pension complète</option>
            <option value="2">Demi-pension</option>
            <option value="3">Sans</option>
            </select>
            `

        } else if (e.target.id == `chambre_type${j}` && (e.target.value == 'chambre_double')) {
            document.querySelector(`.vue_type${j}`).innerHTML = ``
            document.querySelector(`.vue_type${j}`).innerHTML = ``
            document.querySelector(`.bed_type${j}`).innerHTML = `
            <select name="bed" id="typelit${j}" class="bk-selector form-control">
            <option value="">sélectionner un lit </option>
            <option value="lit_double">lit double</option>
            <option value="deux_lit_simple">2 lit simple</option>
            </select> 

        `
            document.querySelector(`.pen_type${j}`).innerHTML = `
            <select name="vue" id="pentype${j}"  class="pn-selector form-control">
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
            <select name="vue" id="typevue${j}"  class="bk-selector form-control">
            <option value="">sélectionner une vue </option>
            <option value="vue_intern">vue intérieure</option>
            <option value="vue_extern">vue extérieure</option>
            </select> 
        `;

        }
        if (e.target.id == `typelit${j}` && e.target.value == 'deux_lit_simple') {
            document.querySelector(`.vue_type${j}`).innerHTML = ``
            document.querySelector(`.vue_type${j}`).innerHTML = `
            <select name="vue" id="typevue${j}"  class="bk-selector form-control">
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
        document.querySelector(".children").innerHTML +=

            `

            <div class="mb-3 col-sm-4">
            <input placeholder = "age enfant ${i}"  type="number"
            min="1" max="17"  id="id-age${i}" 
            class="enfant-age form-control mb-4"/>
            </div>

            <div id="enf-lit${i}" class=" mb-3 col-sm-4">
            <select name="" id=""  class="enf-option form-control"></select>
            </div>

            
            <div class=" mb-3 col-sm-4 text-center">
            <button type="button"  id="delenf${i}" class="btn btn-danger btn-sm mb-4">suppreimer</button>
            </div>
            `
    }
})

document.addEventListener("input", function(e) {

    for (let i = 1; i <= nbchild.value; i++) {


        if (e.target.id == `id-age${i}` && (e.target.value <= 2 && e.target.value >= 0)) {


            document.querySelector(`#enf-lit${i}`).innerHTML =

                `
            <select name="one_kid${i}" id=""  class="enf-option form-control">
            <option value="8">lit supplémentaire</option>
            <option value="9">pas lit supplémentaire</option>
            </select>

                `
        } else if (e.target.id == `id-age${i}` && (2 < e.target.value && e.target.value < 14)) {

            document.querySelector(`#enf-lit${i}`).innerHTML =

                `
            <select name="one_kid${i}" id=""  class="enf-option form-control">
            <option value="10">50% chambre simple</option>
            </select>

                `

        } else if (e.target.id == `id-age${i}` && (e.target.value >= 14 && e.target.value < 18)) {

            document.querySelector(`#enf-lit${i}`).innerHTML =

                `
            <select name="one_kid${i}" id=""  class="enf-option form-control">
            <option value="12">chambre simple separeé</option>
            <option value="11">70% chambre simple</option>
            </select>

                `
        }
    }

})

function chunkArray(myArray, chunk_size) {
    var index = 0;
    var arrayLength = myArray.length;
    var tempArray = [];

    for (index = 0; index < arrayLength; index += chunk_size) {
        myChunk = myArray.slice(index, index + chunk_size);
        // Do something if you want with the group
        tempArray.push(myChunk);
    }

    return tempArray;
}

const reserve = document.querySelector('#reserve')
reserve.addEventListener("click", function() {

    let pen = Array.from(document.querySelectorAll(".pn-selector"));
    let singlePension = []
    pen.forEach(function(item, index) {
        singlePension[index] = item.value
    });

    console.log(singlePension)

    // *********************
    let sel = document.querySelectorAll('.bk-selector')
    let arr = Array.from(sel)
    let noderesult = []
    let singleBranch = []

    arr.forEach(function(item, index) {
        noderesult[index] = item.value
    })

    console.log(noderesult)
    singleBranch = chunkArray(noderesult, 3)

    console.log(singleBranch)
    let rooms_numbre = singleBranch.length

    document.querySelector(`#rooms_number`).value = rooms_numbre

    singleBranch.forEach(function(item, index) {

        let result = []
        let singelChambre = Array(item);
        let onepension = singlePension[index];
        result = singelChambre.concat(onepension);


        console.log(result);

        switch (JSON.stringify(result[0])) {

            case JSON.stringify(branche.ch_simple_vue_int):
                document.querySelector(`#one_room${index}`).value = `3,${result[1]}`
                break;

            case JSON.stringify(branche.ch_simple_vue_ext):
                document.querySelector(`#one_room${index}`).value = `4,${result[1]}`
                break;

            case JSON.stringify(branche.ch_double_lit_double_int):
                document.querySelector(`#one_room${index}`).value = `5,${result[1]}`
                break;

            case JSON.stringify(branche.ch_double_lit_double_ext):
                document.querySelector(`#one_room${index}`).value = `6,${result[1]}`
                break;

            case JSON.stringify(branche.ch_double_2lit_int):
                document.querySelector(`#one_room${index}`).value = `7,${result[1]}`
                break;

            default:
                console.log("please fill in the blanks")


        }
    })
})