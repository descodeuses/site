<script>
export default {
    
}
</script>

<template>
<div>
    <h1>Descodeuses</h1>
    <nav >
        <div class="nav-wrapper white ">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="grey-text uppercase" href="#!" data-target="descodeuses">Descodeuses<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class=" grey-text" href="#!" data-target="actions">Nos actions<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class=" grey-text" href="#!" data-target="actions">Contact <i class="material-icons right"></i></a></li>
                <li @click="$emit('loadComponent', 'inscription')" class="uppercase grey-text">Adhesion<i class="material-icons right"></i></li>
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

</style>
