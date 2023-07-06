"use strict";

// RICHIAMO FUNZIONE CREATE_APP
const { createApp } = Vue;

// FUNZIONE CREATE_APP
createApp({

    data() {
        return {
            // VARIABILI VUE
            apiUrl: 'server.php',
        }
    },
    created() {
        axios.get(this.apiUrl).then((result) => { });
    },
}).mount('#app'); // RICHIAMO HTML PER VEDERE LA