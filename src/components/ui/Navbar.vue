<script>
export default {
    mounted() {
        M.Sidenav.init(this.$el.querySelectorAll('.sidenav'), {});
        // M.FormSelect.init(this.$el.querySelectorAll('select'), {})
    }
}
</script>

<template>
<div>
    <nav class="white">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a class="brand-logo" href="/"><img src="@/assets/logos/logo-descodeuses.png" alt=""></a>
        <ul class="right hide-on-med-and-down">
            <li><a class="grey-text uppercase" href="/"><i class="material-icons">home</i></a></li>
            <li><a class="grey-text uppercase" href="mailto:contact@descodeuses.org">contact@descodeuses.org</a></li>
            <!--
            <li><a class="grey-text uppercase" href="/formations" data-target="formations">Nos formations</a></li>
            <li><a class="grey-text uppercase" href="/accompagnement" data-target="accompagnement">Accompagnement</a></li>
            <li><a class="uppercase grey-text" href="/association" data-target="association">Descodeuses</a></li>
            -->
            <!-- <li><a class=" grey-text" href="aide" data-target="aide">Nous aider<i class="material-icons right"></i></a></li> -->
            <li><a class="grey-text uppercase" href="https://www.helloasso.com/associations/descodeuses/formulaires/1" target="_blank" data-target="adhesion">Dons <i class="material-icons right"></i></a></li>
        </ul>
    </nav>

    <ul id="slide-out" class="sidenav">
         <li><a class="grey-text uppercase" href="/"><i class="material-icons">home</i></a></li>
         <!--
        <li><a class="grey-text uppercase" href="/formations" data-target="formations">Nos formations</a></li>
        <li><a class="grey-text uppercase" href="/accompagnement" data-target="accompagnement">Accompagnement</a></li>
        <li><a class="grey-text uppercase" href="/association" data-target="association">Descodeuses</a></li>
        -->
        <!-- <li><a class=" grey-text" href="aide" data-target="aide">Nous aider<i class="material-icons right"></i></a></li> -->
        <li><a class=" grey-text uppercase" href="https://www.helloasso.com/associations/descodeuses/formulaires/1" target="_blank" data-target="adhesion">Dons <i class="material-icons right"></i></a></li>
    </ul>
</div>
</template>
<style>
nav {
    background: white;
}
img {
    width: 200px;
    margin: 5px 0;
}
.brand-logo {
    left: 5%;
    top: 5px
}
nav .sidenav-trigger i {
    color: #000
}
.sidenav {
    text-align: left
}

</style>
