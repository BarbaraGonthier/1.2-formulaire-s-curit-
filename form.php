<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
    </head>
    <body>
        <form method="post" action="thanks.php">
            <fieldset>
                <legend>Formulaire de contact:</legend>
                <p><span class="error">* champs obligatoires</span></p>
                <div>
                    <label  for="prenom">Prénom :</label>
                    <input  type="text"  id="prenom"  name="user_firstname" required>
                    <span class="error">*</span>
                </div>
               <div>
                    <label  for="nom">Nom :</label>
                    <input  type="text"  id="nom"  name="user_lastname" required>
                    <span class="error">*</span>
               </div>
                <div>
                    <label  for="courriel">Courriel :</label>
                    <input  type="email"  id="courriel"  name="user_email" required pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$">
                    <span class="error">*</span>
                </div>
                <div>
                    <label  for="phone">Téléphone :</label>
                    <input  type="tel"  id="phone"  name="user_phone" required>
                    <span class="error">*</span>
                </div>
                <div>
                    <label  for="sujet">Sujet :</label>
                    <select id="sujet" name="user_topic" required>
                        <option value="choix">choix</option>
                        <option value="delai">Délais de livraison</option>
                        <option value="reclamation">Réclamation au sujet d'une commande</option>
                        <option value="modification">Modification de ma commande</option>
                        <option value="autre">Autre</option>
                    </select>
                    <span class="error">*</span>
                </div>
                <div>
                    <label  for="message">Message :</label>
                    <textarea  id="message"  name="user_message" required></textarea>
                    <span class="error">*</span>
                </div>
                <div  class="button">
                    <button  type="submit">Envoyer votre message</button>
                </div>
            </fieldset>
        </form>
    </body>
</html>
