<!DOCTYPE html>
<html>

<head>
    <title>Test de formulaire</title>
</head>

<body>
    <h1>Test de formulaire</h1>

    <!-- <form method="POST" action="">
        <label>Ville de l'escale: <br></label>
        <input type="text" name="escale[]">
        <br>
        <label>Durée de l'escale: <br></label>
        <input type="number" name="escale[]">
        <br><br>
        <label>Ville de l'escale: <br></label>
        <input type="text" name="escale[]">
        <br>
        <label>Durée de l'escale: <br></label>
        <input type="number" name="escale[]">
        <br>
        <input type="submit" name="valider" value="valider">
    </form> -->

    <form method="POST" action="">
        <div class="escale">
            <label>type chambre: <br></label>
            <select name="bientype[0][chambre]">
                <option value="">sélectionner une chambre </option>
                <option value="chambre_simple">chambre simple</option>
                <option value="chambre_double">chambre double</option>
            </select>
            <br>
            <label>type lit: <br></label>
            <select name="bientype[0][lit]">
                <option value="">sélectionner un lit </option>
                <option value="empty">empty</option>
                <option value="lit_double">lit double</option>
                <option value="deux_lit_simple">2 lit simple</option>
            </select>
            <br>
            <label>type vue: <br></label>
            <select name="bientype[0][vue]">
                <option value="">sélectionner une vue </option>
                <option value="vue_intern">vue intérieure</option>
                <option value="vue_extern">vue extérieure</option>
            </select>
            `
            <br>
            <label>type pension: <br></label>
            <select name="bientype[0][pension]">
                <option value="">sélectionner une Pension </option>
                <option value="1">Pension complète</option>
                <option value="2">Demi-pension</option>
                <option value="3">Sans</option>
            </select>

            <br><br>
        </div>
        <button type="button" id="add_escale">Add Escale</button>
        <input type="submit" name="valider" value="valider">
    </form>

    <?php

    if (isset($_POST['valider'])) {
        $bientype = $_POST['bientype'];

        echo '<pre>';
        print_r($bientype);
        echo '</pre>';
        // echo '<pre>';
        // var_dump($bientype);
        // echo '</pre>';

        foreach ($bientype as $row => $innerArray) {
            foreach ($innerArray as $innerRow => $value) {
                if ($innerRow != 'ville') {
                    echo '<br>';
                    echo $value;
                    echo '<br>';
                }
            }
        }
        // foreach ($bientype as $val) {
        //     echo '<br>';
        //     echo $val;
        //     echo '<br>';
        // }
    }

    ?>
</body>
<script>
    const escale = document.querySelector('.escale')
    const addEscale = document.querySelector('#add_escale')
    let i = 1
    let node =
        addEscale.addEventListener('click', () => {
            escale.innerHTML +=
                `
                <label>type chambre: <br></label>
            <select name="bientype[${i}][chambre]">
                <option value="">sélectionner une chambre </option>
                <option value="chambre_simple">chambre simple</option>
                <option value="chambre_double">chambre double</option>
            </select>
            <br>
            <label>type lit: <br></label>
            <select name="bientype[${i}][lit]">
                <option value="">sélectionner un lit </option>
                <option value="empty">empty</option>
                <option value="lit_double">lit double</option>
                <option value="deux_lit_simple">2 lit simple</option>
            </select>
            <br>
            <label>type vue: <br></label>
            <select name="bientype[${i}][vue]">
                <option value="">sélectionner une vue </option>
                <option value="vue_intern">vue intérieure</option>
                <option value="vue_extern">vue extérieure</option>
            </select>
            
            <br>
            <label>type pension: <br></label>
            <select name="bientype[${i}][pension]">
                <option value="">sélectionner une Pension </option>
                <option value="1">Pension complète</option>
                <option value="2">Demi-pension</option>
                <option value="3">Sans</option>
            </select>

            <br><br>
            `
            i++

        })
</script>

</html><br><br>