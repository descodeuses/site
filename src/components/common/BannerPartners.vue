<template>
    <div class="partners">
        <div class="row center">
            <div class="col l2 s6 m4">
                <img class="responsive-img" src="@/assets/logos/pariscode.png" alt="Logo Paris Code">
            </div>
            <div class="col l2 s6 m4">
                <img class="responsive-img sap" src="@/assets/logos/SAP_min_FondationSAP_R.png" alt="Logo SAP">
                <img class="responsive-img" src="@/assets/logos/logo_antropia.png" alt="Logo Antropia">
            </div>                
            <div class="col l2 s6 m4">
                <img class="responsive-img" src="@/assets/logos/mairie_paris.png" alt="Logo ville de Paris">
                <img class="responsive-img" src="@/assets/logos/maison_des_associations_75020.jpeg" alt="Logo Maison des Asso du 20e">
            </div>
            <div class="col l2 s6 m4">
                <img class="responsive-img sap" src="@/assets/logos/google-logo.png" alt="Logo SAP">
                <img class="responsive-img" src="@/assets/logos/Logo_FrenchImpact_RVB_Web.png" alt="Logo French Impact">
            </div>
            <div class="col l2 s6 m4">
                <img class="responsive-img" src="@/assets/logos/picto_datadocke.jpg" alt="Datadocke">
            </div>
            <div class="col l2 s6 m4">
                <img class="responsive-img" src="@/assets/logos/logo-ministere-charge-de-la-ville.jpg" alt="Logo ville de Paris">
            </div>
        </div>
    </div>
</template>
<style scoped>
.partners {
    padding: 3rem;
    text-align: center
}
.row {
    vertical-align: middle;
}
.partners img {
    width: 150px;
    margin: 10px;
}
.col.l2.s6.m4 {
    min-height: 135px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

@media screen and (max-width: 640px) {

 }
</style>
