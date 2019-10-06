<script>
export default {
    props: {
        td: { type: Array },
        th: { type: Array },
    }
}
</script>
<template>
    <div class="">
        <table class="highlight responsive-table">
            <thead>
                <tr>
                    <th class="col" v-for="(head, index) in th" :key="index">{{ head }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="col" v-for="(data, index) in td" :key="index">{{ data }}</td>
                </tr>
                <slot></slot>
            </tbody>
        </table>
    </div>
</template>

<style scoped>
table {
    font-family: 'Roboto', sans-serif;
}
th  {
    font-weight: bold;
    font-size: 18px;
    letter-spacing: 0;
    color: #005DA8;
    text-transform: uppercase;
    padding: 16px;
}
td {
    padding: 16px 10px !important;
}
</style>