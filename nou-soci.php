<!DOCTYPE html>
<html>

    <?php include 'includes/head.html';?>

    <?php include 'includes/header.html' ;?>

    <section>
        <div>
            <body>    
                <formfield action="base_de_dades.php" method="POST"/>
                    <div>
                        <fieldset>
                            <input type="text" placeholder="DNI" maxlength="10" required/>
                        </fieldset>
                    </div>
                    <div>
                        <fieldset>
                            <input type="text" placeholder="Nom" maxlength="35" required /> 
                        </fieldset> 
                    </div>
                    <div>
                        <fieldset>   
                            <input type="text" placeholder="Llinatges" maxlength="150" required />
                        </fielset>
                    </div>
                    <div>
                        <fieldset>
                            <input type="email" placeholder="Email" />
                        </fieldset>              
                    <div>
                        <fieldset>
                            <input type="tel" placeholder="Telefon" maxlength="9" />
                        </fieldset>
                    </div>
                    <div>
                        <fieldset>
                            <input type="date" placeholder="Data de Naixement" required />
                        </fieldset>
                    <div>
                        <fieldset>
                            <input type="text" placeholder="Nacionalitat" required />
                        </fieldset>
                    <div>
                        <fieldset>
                            <input type="Text" placeholder="Adreça" maxlength="150" />
                        </fieldset>
                    </div>
                    <div>
                        <button type="submit">Enviar</button/>
                    </div>  
                </formfield>
            </body>
        </div>
    </section>

    <?php include 'includes/footer.html' ;?>
</html>


