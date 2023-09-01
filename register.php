<?php
require_once('./inc/header.php');
?>
<div class="container">
    <form action="./model/db_register.php" method="post" enctype="multipart/form-data" class="flex1">
        <div>
            <input type="email" name="email" placeholder="Votre email">
        </div>
        <div>
            <input type="text" name="nom" placeholder="Votre nom">
        </div>
        <div>
            <input type="text" name="prenom" placeholder="Votre prenom">
        </div>

        <div>
            <input type="password" name="mdp" placeholder="Votre mot de passe">
        </div>

        <div>
            <input type="password" name="confirm_mdp" placeholder="Confirmer le mot de passe">
        </div>

        <div>
            <input type="file" name="photo">
        </div>

        <div>
            <button name="valider">Inscription</button>
        </div>

        <div class="field">
            <label for="sexe">Civilité</label><br>
            <select name="civility" id="pet-select">
                <option value="dog">sexe</option>
                <option value="cat">femme</option>
                <option value="homme">homme</option>
            </select>

        </div>

        <div class="field">
            <label for="name">first name&nbsp;:</label><br>
            <input type="text" id="name" name="user_name" />
        </div>

        <div class="field">
            <fieldset>
                <legend>Select votre pays</legend>

                <div>
                    <input type="radio" id="france" name="pays" value="france" checked />
                    <label for="france">france</label>
                </div>

                <div>
                    <input type="radio" id="allemagne" name="pays" value="allemagne" />
                    <label for="allemagne">allemagne</label>
                </div>

                <div>
                    <input type="radio" id="italie" name="pays" value="italie" />
                    <label for="italie">italie</label>
                </div>
            </fieldset>
        </div>
        <div class="field">
            <label for="lastName">last name&nbsp;:</label><br>
            <input type="text" id="lastName" name="user_lastName" />
        </div>

        <div class="field">

            <fieldset>
                <legend>veuillez accepte les conditions</legend>

                <div class="field">
                    <input type="checkbox" id="oui" name="conditions" />
                </div>

            </fieldset>
        </div>

        <div class="field">
            <label for="submit">date de naissance :</label><br>
            <input type="date" id="start" name="birthday" value="1989-09-04" min="2023-09-04" max="2023-09-04" />
        </div>
        <div class="field">
            <div> <label for="story">message</label></div>
            <textarea id="story" name="message" rows="5" cols="33">
                </textarea>
        </div>
        <div class="field">
            <label for="phone">Entrer votre numero de telephone :</label>

            <input type="number" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required />


        </div>


        <div class="test">

            <input type="submit" class="submit" name="submit">
        </div>






    </form>
</div>
<?php
require_once('./inc/footer.php');
?>