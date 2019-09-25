<template>
    <header class="row">
        <div class="col m4 offset-m8 col s6 offset-6">
            <h2 class="white-text left-align">Formez-vous au <span class="yellowdeuse">numérique</span> et saisissez les nouvelles <span class="yellowdeuse">opportunités</span> d'emploi.</h2>
            <a class="waves-effect btn" href="inscription" data-target="inscription">Je postule</a>
            <p class="white-text"> Voir le programme</p>
        </div>
    </header>
</template>
<style scoped>
header {
    height: 70vh;
    padding: 50px 0;
    background-image: url("./../../assets/cover_decodeuses.png");
    background-repeat: no-repeat;
    background-size: 80%;
    background-attachment: fixed;
    filter: grayscale(30%);
}
h2 {
    font-size: 40px;
    margin: 0;
    padding: 40px 16px;
}

.col {
    height: 50vh;
    background: #312783;
    padding: 10px;
    -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
}

.btn {
    background: #F9B233
}
.yellowdeuse {
    color: #F9B233
}

@media screen and (max-width: 640px) {
    h2 {
        font-size: 18px;
        margin: 0;
        padding-top: 40px;
        padding-bottom: 20px;
    }
    header {
        height: 70vh;
        padding: 50px 0;
        background-image: url("./../../assets/cover_decodeuses.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position-x: -200px;
        filter: grayscale(30%);
    }
}
</style>
