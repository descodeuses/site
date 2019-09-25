<script>
export default {
    props: {
        title: { type: String, default: '' },
        subtitle: { type: String, default: '' },
        icon: { type: String, default: '' },
    }
}
</script>

<template>
    <div class="icon-row-item">
        <div class="center-align">
            <h2 class="card-text center-align"><i class="material-icons">{{ icon }}</i> {{ title }}</h2>
            <h3 class="card-text">{{ subtitle }}</h3>
        </div>
    </div>
</template>

<style scoped>
.center-align {
    width: 100%;
    text-align: center
}

.icon-row-item {
    justify-content: space-around
}
.icon-row-item i {
    color: #005DA8;
    font-size: 40px;
    padding-bottom: 16px;
}
.icon-row-item h2 {
    text-align: center;
    font-size: 25px;
    font-weight: bold;
    letter-spacing: 0;
    color: #005DA8;
    text-transform: uppercase;
}
.icon-row-item h3 {
    text-align: center;
    font-size: 19px;
    letter-spacing: 0;
    color: #005DA8;
    opacity: 1;
}
.icon-row-item p {
    text-align: center;
    font-size: 25px !important;
    letter-spacing: 0;
    color: #005DA8;
    opacity: 1;
    padding-top: 16px;
    text-align: center
}

.icon-row-item h2, .icon-row-item h3, .icon-row-item p {
    font-family: 'Roboto', sans-serif;
}
</style>