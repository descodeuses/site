<script>
export default {
    
}
</script>

<template>
<div>
    <a href="/">
        <img src="@/assets/logos/logo-descodeuses.png" alt="">
    </a>
    <nav >
        <div class="nav-wrapper white ">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="grey-text uppercase" href="/"><i class="material-icons">home</i></a></li>
                <li><a class="grey-text uppercase" href="formations" data-target="formations">Nos formations</a></li>
                <li><a class="grey-text uppercase" href="accompagnement" data-target="accompagnement">Accompagnement</a></li>
                <li><a class=" grey-text" href="association" data-target="association">Descodeuses</a></li>
                <li><a class=" grey-text" href="aide" data-target="aide">Nous aider<i class="material-icons right"></i></a></li>
                <li><a class=" grey-text uppercase" href="https://www.helloasso.com/associations/descodeuses/formulaires/1" target="_blank" data-target="adhesion">Dons <i class="material-icons right"></i></a></li>
            </ul>
        </div>
    </nav>
</div>
</template>
<style>
nav {
    box-shadow: none !important
}
ul li {
    text-transform: uppercase;
    cursor: pointer;
}
img {
    width: 300px;
    padding-top: 15px
}

</style>
