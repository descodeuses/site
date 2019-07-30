<template>
    <form>
        <h2>Contact</h2>
        <div class="row">
            <div class="input-field col s6">
                <input id="prenom" type="text" class="validate">
                <label for="prenom">Prénom</label>
            </div>
            <div class="input-field col s6">
                <input id="nom" type="text" class="validate">
                <label for="nom">Nom</label>
            </div>
            <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">E-mail</label>
            </div>
            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Votre message</label>
            </div>
            <button class="waves-effect waves-light btn">Envoyer</button>
        </div>
    </form>
</template>
<style scoped>

h2, h3 {
    font-size: 1em;
    text-transform: uppercase;
} 
form {

}
</style>
