<template>
    <header class="row">
        <div class="col m4 offset-m8 col s10 offset-s1 offset-6">
            <h2 class="white-text left-align">Formez-vous au <span class="yellowdeuse">numérique</span> et saisissez de nouvelles <span class="yellowdeuse">opportunités</span> d'emploi.</h2>
            <p class="white-text">Inscrivez-vous à notre newsletter pour être au courant de toutes les nouvelles.</p>
            <a href="#newsletter" class="btn">inscription à la newsletter</a>
            <!-- <a class="waves-effect btn-large" href="inscription" data-target="inscription">Je postule</a> -->
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
    font-size: 35px;
    margin: 0;
    padding: 40px 16px;
}

.col {
    height: 55vh;
    background: #312783;
    padding: 10px;
    -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
}

.btn-large {
    background: #F9B233;
    font-weight: bold;
}
.yellowdeuse {
    color: #F9B233
}

@media screen and (max-width: 640px) {
    h2 {
        font-size: 25px;
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
