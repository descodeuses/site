<template>
    <div class="container">
        <div class="row">
            <div class="col s12 m4">
                <h2>horaires de Permances</h2>
                <table>
                    <tbody>
                        <tr>
                            <td>Du lundi - vendredi</td>
                            <td>10h00 - 18h00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <form class="col 12 m6 card offset-m2">
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
                        <label for="textarea1">Textarea</label>
                    </div>
                    <button class="waves-effect waves-light btn">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</template>
<style scoped>
h2, h3 {
    font-size: 1em;
    text-transform: uppercase;
}

</style>
