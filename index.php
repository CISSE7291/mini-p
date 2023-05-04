<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
	<link rel="stylesheet" href="style.CSS">
</head>
<body>
	
	
	<section>
            <!-- CONTAINER me contacter -->
            <div class="container">
			<h2>Inscription en ligne</h2>  
				<form  method="post" action="enregistrement-mini-projet.php">
                <!-- part 1 formulaire nom prenom -->
                    <div class="row">
                        <div class="col">
                            <div class="inputbox">
                                <input type="text" name="nom" id="nom" required ="required">
                                <span class="text">Nom</span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="inputbox">
                                <input type="text" name="prenom" id="prenom" required ="required">
                                <span class="text">Prénom</span>
                            </div>
                        </div>
                    </div>

                    <!-- part 2 formulaire date de naissance -->
                    <div class="row">
                        <div class="col">
                            <div class="inputbox">
                                <input type="date_de_naissance" name="date_de_naissance" id="date_de_naissance" required ="required">
                                <span class="text">Date de naissance</span>
                            </div>
                        </div>
                    <!-- boutton envoyer -->
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="envoyer">
                        </div>
                    </div>

                
                </form>
            </div>
        </section>

</body>
</html>
