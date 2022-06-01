<!DOCTYPE html>
<html>

<head>
    <title>New Editorial</title>
</head>
<?php include 'includes/head.php'; ?>

<?php
$Editorial = null;
if(isset($_GET['id'])){
    $id_editorial = $_GET['id'];
    $query = "SELECT * FROM Editorial WHERE id = '$id_editorial' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $Editorial = mysqli_fetch_assoc($result);
}

if ($Editorial != null) {
    $action = 'scripts/update-editorial.php';
} else {
    $action = 'scripts/insert-editorial.php';
}
?>

<body>
    <div class="container">
        <section class="mb-5 mt-5">
            <?php
            include 'includes/header.html';
            ?>
            <h1 class="mb-5 mt-5">
                <?php
                if ($Editorial == null)
                    echo 'NOVA EDITORIAL';
                else
                    echo "EDITA L'EDITORIAL";
                ?>
            </h1>
        </section>
        <section>
            <form action="<?=$action ?>" method="POST">
                <div class="form-group">
                    <label for="Nom">Nom</label>
                    <input value="<?=$Editorial['Nom']; ?>" type="text" name="name" class="form-control" placeholder="Ciutat" maxlength="65" required>
                </div>
                <div class="form-group">
                    <label for="Ciutat">Ciutat</label>
                    <input value="<?=$Editorial['Ciutat']; ?>" type="text" name="city" class="form-control" placeholder="Ciutat" maxlength="65" required>
                </div>
                <div class="form-group">
                    <label for="Direccio">Direccio</label>
                    <input value="<?=$Editorial['Direccio'];?>" type="varchar" name="address" class="form-control" placeholder="Direccio" maxlength="100" required>
                </div>
                <div class="form-group">
                    <label for="CP">Codi Postal</label>
                    <input type="text" value="<?=$Editorial['CP'];?>" name="CP" class="form-control" placeholder=" Codi Postal" required>
                </div>
                <div class="form-group">
                    <label for="Provincia">Provincia</label>
                    <input type="varchar" value="<?=$Editorial['Provincia'];?>" name="province" class="form-control" placeholder="Provincia" required>
                </div>
                <div class="form-group">
                <label for="country-select" class="form-label">Pais</label>
                <select value="<?=$editorial['Pais'];?>" name="country" id="country" class="form-select">
                    <option value="" disabled selected hidden>Selecciona el teu País</option>
                    <option value="Afganistan">Aganistan</option>
                    <option value="Albània">Albània</option>
                    <option value="Alemanya">Alemanya</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Antiga i Barbuda">Antiga i Barbuda</option>
                    <option value="Aràbia Saudita">Aràbia Saudita</option>
                    <option value="Algèria">Algèria</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armènia">Armènia</option>
                    <option value="Austràlia">Austràlia</option>
                    <option value="Àustria">Àustria</option>
                    <option value="Azerbaidjan">Azerbaidjan</option>
                    <option value="Bahames">Bahames</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbats">Barbats</option>
                    <option value="Bielorússia">Bielorússia</option>
                    <option value="Bèlgica">Bèlgica</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolívia">Bolívia</option>
                    <option value="Bòsnia i Hercegovina">Bòsnia i Hercegovia</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgària">Bulgària</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cap Verd">Cap verd</option>
                    <option value="Cambodja">Cambodja</option>
                    <option value="Camerun">Camerun</option>
                    <option value="Canadà">Canadà</option>
                    <option value="Colòmbia">Colòmbia</option>
                    <option value="Comores">Comores</option>
                    <option value="Congo">Congo</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                    <option value="Croàcia">Croàcia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Dinamarca">Dinamarca</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Equador">Equador</option>
                    <option value="Egipte">Egipte</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Emirats Àrabs Units">Emirats Àrabs Units</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Eslovàquia">Eslovàquia</option>
                    <option value="Eslovènia">Eslovènia</option>
                    <option value="Espanya">Espanya</option>
                    <option value="Estats Units d'Amèrica">Estats Units d'Amèrica</option>
                    <option value="Estònia">Estònia</option>
                    <option value="Eswatini">Eswatini</option>
                    <option value="Etiòpia">Etiòpia</option>
                    <option value="Federació de Rússia">Fedreació de Rússia</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Filipines">Filipines</option>
                    <option value="Finlàndia">Finlàndia</option>
                    <option value="França">França</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gàmbia">Gàmbia</option>
                    <option value="Geòrgia">Geòrgia</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Grècia">Grècia</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea Equatorial">Guinea Ecuatorial</option>
                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                    <option value="Guaiana">Guaiana</option>
                    <option value="Haití">Haití</option>
                    <option value="Hondures">Hondures</option>
                    <option value="Hongria">Hongria</option>
                    <option value="Índia">Índia</option>
                    <option value="Indonèsia">Indonèsia</option>
                    <option value="Iemen">Iemen</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Irlanda">Irlanda</option>
                    <option value="Islàndia">Islàndia</option>
                    <option value="Illes Cook">Illes Cook</option>
                    <option value="Illes Marshall">Illes Marshall</option>
                    <option value="Illes Salomó">Illes Salomó</option>
                    <option value="Israel">Israel</option>
                    <option value="Itàlia">Itàlia</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japó">Japó</option>
                    <option value="Jordània">Jordània</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kirguistan">Kirguistan</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Letònia">Letònia</option>
                    <option value="Líban">Líban</option>
                    <option value="Libèria">Libèria</option>
                    <option value="Líbia">Líbia</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lituània">Lituània</option>
                    <option value="Luxemburg">Luxemburg</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malàisia">Malàisia</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marroc">Marroc</option>
                    <option value="Maurici">Maurici</option>
                    <option value="Mauritània">Mauritània</option>
                    <option value="Mèxic">Mèxic</option>
                    <option value="Micronèsia">Micronèsia</option>
                    <option value="Mònaco">Mònaco</option>
                    <option value="Mongòlia">Mongòlia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Moçambic">Moçambic</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namíbia">Namíbia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Níger">Níger</option>
                    <option value="Nigèria">Nigèria</option>
                    <option value="Niue">Niue</option>
                    <option value="Noruega">Noruega</option>
                    <option value="Nova Zelanda">Nova Zelanda</option>
                    <option value="Oman">Oman</option>
                    <option value="Països Baixos">Països Baixos</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Panamà">Panamà</option>
                    <option value="Papua Nova Guinea">Papua Nova Guinea</option>
                    <option value="Paraguai">Paraguai</option>
                    <option value="Perú">Perú</option>
                    <option value="Polònia">Polònia</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Regne Unit">Regne Unit</option>
                    <option value="República Àrab Síria">República Àrab Síria</option>
                    <option value="República Centreafricana">República Centreafricana</option>
                    <option value="República de Corea">República de Corea</option>
                    <option value="República de Macedònia del Nord">República de Macedònia del Nord</option>
                    <option value="República de Moldàvia">República de Moldàvia</option>
                    <option value="República Democràtica del Congo">República Democràtica del Congo</option>
                    <option value="República Democràtica Popular Lao">República Democràtica Popular Lao</option>
                    <option value="República Dominicana">República Dominicana</option>
                    <option value="República Popular Democràtica de Corea">República Popular Democràtica de Corea</option>
                    <option value="República Unida de Tanzania">República Unida de Tanzania</option>
                    <option value="Romania">Romania</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Kitts i Nevis">Saint Kitts i Nevis</option>
                    <option value="Samoa">Samoa</option>
                    <option value="Sant Marí">Sant Marí</option>
                    <option value="Sant Vicent i les Grenadines">Sant Vicent i les Grenadines</option>
                    <option value="Santa Llúcia">Santa Llúcia</option>
                    <option value="Santa Seu">Santa Seu</option>
                    <option value="Sao Tomé i Príncep">Sao Tomé i Príncep</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Sèrbia">Sèrbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Serra Lleona">Serra Lleona</option>
                    <option value="Singapur">Singapur</option>
                    <option value="Somàlia">Somàlia</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sud-àfrica">Sud-Àfrica</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Sudan del Sud">Sudan del Sud</option>
                    <option value="Suècia">Suècia</option>
                    <option value="Suïssa">Suïssa</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Tailàndia">Tailàndia</option>
                    <option value="Tadjikistan">Tadjikistan</option>
                    <option value="Timor-Lest">Timor-Lest</option>
                    <option value="Togo">Togo</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinitat i Tobago">Trinitat i Tobago</option>
                    <option value="Tunísia">Tunísia</option>
                    <option value="Turkmenistan">Turlenistan</option>
                    <option value="Turquia">Turquia</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Txad">Txad</option>
                    <option value="Txèquia">Txèquia</option>
                    <option value="Ucraïna">Ucraïna</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Uruguai">Uruguai</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Veneçuela">Veneçuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Zàmbia">Zàmbia</option>
                    <option value="Xile">Xile</option>
                    <option value="Xina">Xina</option>
                    <option value="Xipre">Xipre</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
                </div>
                <?php
                if($Editorial) {
                    echo "<input type='hidden' value='".$Editorial['id']."' name='id'>";
                }
                ?>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>
    </div>
</body>

</html>